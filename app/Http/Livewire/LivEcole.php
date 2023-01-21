<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Ecole;

class LivEcole extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $ecole_id, $ecole_name,$ecole_code, $ecole_logo, $telephone_ecole, $ecole_email, $ville, $adresse, $responsable, $telephone_responsable, $email_responsable, $type_ecole, $status, $ecole_description;
    public $updateMode = false;

    public function render()
    {
        return view('livewire.liv-ecole', [
            'ecoles' => Ecole::paginate(10),
        ]);
    }

    public function resetInputFields()
    {
        $this->ecole_name = '';
        $this->ecole_code = '';
        $this->ecole_logo = '';
        $this->telephone_ecole = '';
        $this->ecole_email = '';
        $this->ville = '';
        $this->adresse = '';
        $this->responsable = '';
        $this->telephone_responsable = '';
        $this->email_responsable = '';
        $this->type_ecole = '';
        $this->status = '';
        $this->ecole_description ='';
    }

    public function submit()
    {
        $validatedData = $this->validate([
            'ecole_name' => 'required',
            'ecole_code' => 'required',
            'ecole_logo' => 'nullable|image|mimes:jpeg,png,svg,jpg',
            'telephone_ecole' => 'required|unique:ecoles',
            'ecole_email' => 'required|unique:ecoles',
            'ville' => 'required',
            'adresse' => 'required',
            'responsable' => 'required',
            'telephone_responsable' => 'required|unique:ecoles',
            'email_responsable' => 'nullable|unique:ecoles',
            'type_ecole' => 'required',
            'ecole_description' => 'nullable'
        ]);

        $logoName = $this->ecole_logo->store("images", 'public');
        $validatedData['ecole_logo'] = $logoName;
        Ecole::create($validatedData);

        session()->flash('message', 'Ecole bien enregistré!');
        //return redirect()->to('/ecoles');
        $this->resetInputFields();
    }
}
