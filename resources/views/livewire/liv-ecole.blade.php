<div class="page-inner">
    <!--================================-->
    <!-- Main Wrapper Start -->
    <!--================================-->
    <div id="main-wrapper">
        <!--================================-->
        <!-- Breadcrumb Start -->
        <!--================================-->
        <div class="pageheader pd-t-25 pd-b-35">
            <div class="pd-t-5 pd-b-5">
                <h1 class="pd-0 mg-0 tx-20 text-overflow">{{ __('Ecoles') }}</h1>
            </div>
            <div class="breadcrumb pd-0 mg-0">
                <a class="breadcrumb-item" href="{{ route('home') }}"><i class="icon ion-ios-home-outline"></i> {{ __('Tableaux de bord') }}</a>
                <a class="breadcrumb-item active" href="{{ route('pageEcole') }}">{{ __('Liste ecole') }}</a>
            </div>
        </div>
        <!--/ Breadcrumb End -->
        <div class="row row-xs clearfix">
            <div class="col-md-12 col-lg-12">
                <div class="card mg-b-20">
                   <div class="card-header">
                      <h4 class="card-header-title">
                         {{ __('Création école') }}
                      </h4>
                      <div class="card-header-btn">
                         <a  href="" data-toggle="collapse" class="btn card-collapse" data-target="#collapse1" aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                         <a href="" data-toggle="refresh" class="btn card-refresh"><i class="ion-android-refresh"></i></a>
                         <a href="" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
                         <a href="" data-toggle="remove" class="btn card-remove"><i class="ion-android-close"></i></a>
                      </div>
                   </div>
                   <div class="card-body collapse show" id="collapse1">
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                    @endif
                    @if($updateMode)
                        @include('livewire.ecoles.update-ecole')
                    @else
                    <form wire:submit.prevent="submit" enctype="multipart/form-data">
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
                                    @if($ecole_logo)
                                       <img class="wd-36 rounded-circle avatar align-self-start"  src="{{ $ecole_logo->temporaryUrl() }}" alt="">
                                    @else
                                       <img class="wd-36 rounded-circle avatar align-self-start" src="assets/images/avatar/avatar1.png" alt="">
                                    @endif
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
                            <button class="btn btn-custom-primary" type="submit">Sauvegarder</button>
                            <button class="btn btn-secondary" wire:click="resetInputFields()">Cancel</button>
                         </div>
                         <!-- form-layout-footer -->
                      </div>
                    </form>
                    @endif
                   </div>
                </div>
             </div>
            <!--================================-->
            <!-- Row Toggler FooTable Start -->
            <!--================================-->
            <div class="col-md-12 col-lg-12">
                <div class="card mg-b-20">
                   <div class="card-header">
                      <h4 class="card-header-title">
                         {{ __('Liste écoles') }}
                      </h4>
                      <div class="card-header-btn">
                         <a  href="#" data-toggle="collapse" class="btn card-collapse" data-target="#collapse6" aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                         <a href="#" data-toggle="refresh" class="btn card-refresh"><i class="ion-android-refresh"></i></a>
                         <a href="#" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
                         <a href="#" data-toggle="remove" class="btn card-remove"><i class="ion-android-close"></i></a>
                      </div>
                   </div>
                   <div class="card-body pd-0 collapse show" id="collapse6">
                    @if(count($ecoles) >0)
                      <table class="table table-separated table-responsive-sm table-striped table-hover">
                         <thead>
                            <tr>
                               <th>{{ __('Ecole') }}</th>
                               <th>{{ __('Télèphone') }}</th>
                               <th>{{ __('Email') }}</th>
                               <th>{{ __('Ville') }}</th>
                               <th>{{ __('Adresse') }}</th>
                               <th>{{ __('Status') }}</th>
                               <th>{{ __('Actions') }}</th>
                            </tr>
                         </thead>
                         <tbody>
                            @foreach($ecoles as $ecole)
                            <tr>
                               <td>
                                  <div class="d-flex">
                                     <img class="wd-35 rounded-circle img-fluid" src="{{ asset('storage/'.$ecole->ecole_logo) }}" alt="">
                                     <div class="mg-l-10">
                                        <p class="lh-1 mg-0">{{ $ecole->ecole_name }}</p>
                                        <small>{{ $ecole->ecole_code }}</small>
                                     </div>
                                  </div>
                               </td>
                               <td>{{ $ecole->telephone_ecole }}</td>
                               <td>{{ $ecole->ecole_email }}</td>
                               <td>{{ $ecole->ville }}</td>
                               <td>{{ $ecole->adresse }}</td>
                               <td>
                                @if($ecole->status ==0)
                                    <span class="badge badge-danger">{{ __('Desactivé') }}</span>
                                @else
                                    <span class="badge badge-success">{{ __('Activé') }}</span>
                                @endif
                               </td>
                               <td>
                                    <button wire:click="edit({{ $ecole->id }})" class="btn btn-primary">{{ __('Editer') }}</button>
                                    <a href="" class="btn btn-danger">{{ __('Supprimer') }}</a>
                               </td>
                            </tr>
                            @endforeach
                         </tbody>
                      </table>
                      @else
                        <h4 class="text-warning text-center">Auccune donnée disponible!</h4>
                      @endif
                      <nav>
                        <ul class="pagination justify-content-center">
                           {{ $ecoles->links() }}
                        </ul>
                     </nav>
                   </div>
                </div>
             </div>
            <!--/ Row Toggler FooTable End -->
            <!--/ Filtering FooTable End -->
        </div>
    </div>
    <!--/ Main Wrapper End -->
</div>