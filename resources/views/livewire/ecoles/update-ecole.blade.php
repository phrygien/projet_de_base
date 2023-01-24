<form wire:submit.prevent="submit" enctype="multipart/form-data">
    <input type="hidden" wire:model="ecole_id">
    <div class="form-layout form-layout-1">
       <div class="row mg-b-25">
          <div class="col-lg-4">
             <div class="form-group">
                <label class="form-control-label active">{{ __('Nom école') }}: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" wire:model="ecole_name" value="" placeholder="">
                @error('ecole_name') <span class="text-danger">{{ $message }}</span> @enderror
             </div>
          </div>
          <!-- col-4 -->
          <div class="col-lg-4">
             <div class="form-group">
                <label class="form-control-label active">{{ __('Code école') }}: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" wire:model="ecole_code" value="" placeholder="">
                @error('ecole_code') <span class="text-danger">{{ $message }}</span> @enderror
             </div>
          </div>
          <!-- col-4 -->
          <div class="col-lg-4">
             <div class="form-group">
               <label class="form-control-label active">{{ __('Logo école') }}: <span class="tx-danger">*</span></label>
               <div class="publisher bg-transparent">
                  <img class="wd-36 rounded-circle avatar align-self-start" src="{{ asset('storage/'.$ecole_logo) }}" alt="">
                  <input class="publisher-input" type="file" wire:model="ecole_logo">
                  @error('ecole_logo') <span class="text-danger">{{ $message }}</span> @enderror
               </div>
             </div>
          </div>
          <!-- col-4 -->
          <div class="col-lg-4">
             <div class="form-group mg-b-10-force">
                <label class="form-control-label active">{{ __('Télèphone école') }}: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" wire:model="telephone_ecole">
                @error('telephone_ecole') <span class="text-danger">{{ $message }}</span> @enderror
             </div>
          </div>
          <div class="col-lg-4">
              <div class="form-group mg-b-10-force">
                 <label class="form-control-label active">{{ __('Email école') }}: <span class="tx-danger">*</span></label>
                 <input class="form-control" type="text" wire:model="ecole_email">
                 @error('ecole_email') <span class="text-danger">{{ $message }}</span> @enderror
              </div>
           </div>
           <div class="col-lg-4">
              <div class="form-group mg-b-10-force">
                 <label class="form-control-label active">{{ __('Ville') }}: <span class="tx-danger">*</span></label>
                 <input class="form-control" type="text" wire:model="ville">
                 @error('ville') <span class="text-danger">{{ $message }}</span> @enderror
              </div>
           </div>
           <div class="col-lg-4">
              <div class="form-group mg-b-10-force">
                 <label class="form-control-label active">{{ __('Adresse école') }}: <span class="tx-danger">*</span></label>
                 <input class="form-control" type="text" wire:model="adresse">
                 @error('adresse') <span class="text-danger">{{ $message }}</span> @enderror
              </div>
           </div>
           <div class="col-lg-4">
              <div class="form-group mg-b-10-force">
                 <label class="form-control-label active">{{ __('Responsable de l\'ecole') }}: <span class="tx-danger">*</span></label>
                 <input class="form-control" type="text" wire:model="responsable">
                 @error('responsable') <span class="text-danger">{{ $message }}</span> @enderror
              </div>
           </div>
           <div class="col-lg-4">
              <div class="form-group mg-b-10-force">
                 <label class="form-control-label active">{{ __('Télèphone responsable') }}: <span class="tx-danger">*</span></label>
                 <input class="form-control" type="text" wire:model="telephone_responsable">
                 @error('telephone_responsable') <span class="text-danger">{{ $message }}</span> @enderror
              </div>
           </div>
           <div class="col-lg-4">
              <div class="form-group mg-b-10-force">
                 <label class="form-control-label active">{{ __('Email responsable') }}: <span class="tx-danger">*</span></label>
                 <input class="form-control" type="text" wire:model="email_responsable">
                 @error('email_responsable') <span class="text-danger">{{ $message }}</span> @enderror
              </div>
           </div>
          <!-- col-8 -->
          <div class="col-lg-4">
             <div class="form-group mg-b-10-force">
                <label class="form-control-label">{{ __('Type école') }}: <span class="tx-danger">*</span></label>
                <select class="form-control select2 select2-hidden-accessible" data-placeholder="Sellectioner type" wire:model="type_ecole" tabindex="-1" aria-hidden="true">
                   <option label="Sellectionner type"></option>
                   <option value="0">{{ __('Public') }}</option>
                   <option value="1">{{ __('Privé') }}</option>
                </select>
                @error('type_ecole') <span class="text-danger">{{ $message }}</span> @enderror
             </div>
          </div>
          <div class="col-lg-4">
              <div class="form-group mg-b-10-force">
                 <label class="form-control-label">{{ __('Status école') }}: <span class="tx-danger">*</span></label>
                 <select class="form-control select2 select2-hidden-accessible" data-placeholder="Sellectioner type" wire:model="type_ecole" tabindex="-1" aria-hidden="true">
                    <option label="Sellectionner type"></option>
                    <option value="1">{{ __('Activé') }}</option>
                    <option value="0">{{ __('Desactivé') }}</option>
                 </select>
                 @error('type_ecole') <span class="text-danger">{{ $message }}</span> @enderror
              </div>
           </div>
          <!-- col-4 -->
          <div class="col-lg-4">
              <div class="form-group mg-b-10-force">
                 <label class="form-control-label active">{{ __('Description école') }}: <span class="tx-danger">*</span></label>
                 <input class="form-control" type="text" wire:model="ecole_description">
                 @error('ecole_description') <span class="text-danger">{{ $message }}</span> @enderror
              </div>
           </div>
       </div>
       <!-- row -->
       <div class="form-layout-footer">
          <button class="btn btn-custom-primary" wire:click.prevent="update()" >{{ __('Mise a jour') }}</button>
          <button class="btn btn-warning" wire:click.prevent="cancel()">{{ __('Annuler') }}</button>
       </div>
       <!-- form-layout-footer -->
    </div>
  </form>