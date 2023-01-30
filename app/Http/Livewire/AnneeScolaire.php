<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Anneescolaire as ModelAnneescolaire;

class AnneeScolaire extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $annee_id, $name, $date_debut, $date_fin, $status, $ecole_id;

    public $updateMode = false;


    public function render()
    {
        $annee_scolaires = DB::table('anneescolaires')
                            ->join('ecoles','ecoles.id','anneescolaires.ecole_id')
                            ->select('anneescolaires.*')
                            ->where('anneescolaires.ecole_id',Auth::user()->ecole_id)
                            ->paginate(1);

        return view('livewire.annee-scolaire', [
            'annee_scolaires' => $annee_scolaires
        ]);
    }

    public function resetInputFields()
    {
        $this->name = '';
        $this->date_debut = '';
        $this->date_fin = '';
        $this->status = '';
    }

    public function submit()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required',
            'status' => 'required|integer',
            'ecole_id' => 'required|integer'
        ]);

        ModelAnneescolaire::create($validatedData);

        session()->flash('message', 'Année scolaire bien enregistré');
        $this->resetInputFields();
    }
}
