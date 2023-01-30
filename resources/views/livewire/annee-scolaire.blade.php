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
             <h1 class="pd-0 mg-0 tx-20 text-overflow">{{ __('Année scolaire') }}</h1>
          </div>
          <div class="breadcrumb pd-0 mg-0">
             <a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i> {{ __('Tableau de bord') }}</a>
             <a class="breadcrumb-item" href="#">{{ __('Année scolaire') }}</a>
             <span class="breadcrumb-item active">{{ __('Liste') }}</span>
          </div>
       </div>
       <!--/ Breadcrumb End -->
       <div class="row row-xs clearfix">

        <div class="col-md-12 col-lg-12">
            <div class="card mg-b-20">
               <div class="card-header">
                  <h4 class="card-header-title">
                     {{ __('Création année scolaire') }}
                  </h4>
                  <div class="card-header-btn">
                     <a  href="" data-toggle="collapse" class="btn card-collapse" data-target="#collapse2" aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                     <a href="" data-toggle="refresh" class="btn card-refresh"><i class="ion-android-refresh"></i></a>
                     <a href="" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
                     <a href="" data-toggle="remove" class="btn card-remove"><i class="ion-android-close"></i></a>
                  </div>
               </div>
               <div class="card-body collapse show" id="collapse2">
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
                <form wire:submit.prevent="submit">
                  <div class="form-layout form-layout-2">
                     <div class="row no-gutters">
                        <div class="col-md-4">
                           <div class="form-group">
                              <label class="form-control-label active">{{ __('Libelle') }}: <span class="tx-danger">*</span></label>
                              <input class="form-control" type="text" wire:model="name" placeholder="Entrer libele">
                              @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                           </div>
                        </div>
                        <!-- col-4 -->
                        <div class="col-md-4 mg-t--1 mg-md-t-0">
                           <div class="form-group mg-md-l--1">
                              <label class="form-control-label active">{{ __('Date debut') }}: <span class="tx-danger">*</span></label>
                              <input class="form-control" type="date" wire:model="date_debut" placeholder="Entrer date debut">
                              @error('date_debut') <span class="text-danger">{{ $message }}</span> @enderror
                           </div>
                        </div>
                        <!-- col-4 -->
                        <div class="col-md-4 mg-t--1 mg-md-t-0">
                           <div class="form-group mg-md-l--1">
                              <label class="form-control-label active">{{ __('Date fin') }}: <span class="tx-danger">*</span></label>
                              <input class="form-control" type="date" wire:model="date_fin" placeholder="Entrer date fin">
                              @error('date_fin') <span class="text-danger">{{ $message }}</span> @enderror
                           </div>
                        </div>
                        <!-- col-4 -->
                        <div class="col-md-8">
                           <div class="form-group bd-t-0-force">
                              <label class="form-control-label active">{{ __('Ecole') }}: <span class="tx-danger">*</span></label>
                              <input class="form-control" type="text" wire:model="ecole_id" placeholder="">
                              @error('ecole_id') <span class="text-danger">{{ $message }}</span> @enderror
                           </div>
                        </div>
                        <!-- col-8 -->
                        <div class="col-md-4">
                           <div class="form-group mg-md-l--1 bd-t-0-force">
                              <label class="form-control-label mg-b-0-force">{{ __('Status') }}: <span class="tx-danger">*</span></label>
                              <select id="select2-a" class="form-control select2-hidden-accessible" data-placeholder="Status" tabindex="-1" aria-hidden="true" wire:model="status">
                                 <option value="0" selected="">{{ __('Desactivé') }}</option>
                                 <option value="1">{{ __('Activé') }}</option>
                              </select>
                              @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                              <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 350px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-select2-a-container"><span class="select2-selection__rendered" id="select2-select2-a-container" title="United States of America">United States of America</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                           </div>
                        </div>
                        <!-- col-4 -->
                     </div>
                     <!-- row -->
                     <div class="form-layout-footer bd pd-20 bd-t-0">
                        <button class="btn btn-custom-primary" type="submit">{{ __('Créer') }}</button>
                        <button class="btn btn-secondary">{{ __('Annuler') }}</button>
                     </div>
                     <!-- form-group -->
                  </div>
                </form>
               </div>
            </div>
         </div>

          <div class="col-md-12 col-lg-12">
             <div class="card mg-b-20">
                <div class="card-header">
                   <h4 class="card-header-title">
                      {{ __('Liste annéé scolaire') }}
                   </h4>
                   <div class="card-header-btn">
                      <a  href="#" data-toggle="collapse" class="btn card-collapse" data-target="#collapse8" aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                      <a href="#" data-toggle="refresh" class="btn card-refresh"><i class="ion-android-refresh"></i></a>
                      <a href="#" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
                      <a href="#" data-toggle="remove" class="btn card-remove"><i class="ion-android-close"></i></a>
                   </div>
                </div>
                <div class="card-body pd-0 collapse show" id="collapse8">
                    @if(count($annee_scolaires) > 0)
                   <table class="table table-responsive-sm">
                      <thead>
                         <tr>
                            <th>{{ __('ID') }}</th>
                            <th>{{ __('Nom année scolaire') }}</th>
                            <th>{{ __('Date debut') }}</th>
                            <th>{{ __('Date fin') }}</th>
                            <th>{{ __('Status') }}</th>
                            <th width="280px">{{ __('Actions') }}</th>
                         </tr>
                      </thead>
                      <tbody>
                        @foreach($annee_scolaires as $annee)
                         <tr>
                            <th scope="row">{{ $annee->id }}</th>
                            <td>{{ $annee->name }}</td>
                            <td>{{ $annee->date_debut }}</td>
                            <td>{{ $annee->date_fin }}</td>
                            <td>
                                @if($annee->status == 1)
                                    <span class="badge badge-success">{{ __('Ouvert') }}</span>
                                @else
                                    <span class="badge badge-danger">{{ __('Fermé') }}</span>
                                @endif
                            </td>
                            <td>
                                @if ($annee->status !=1)
                                    <button class="btn btn-sm btn-success">{{ __('Ouvrir') }}</button>
                                @else
                                    <button class="btn btn-sm btn-warning">{{ __('Fermer') }}</button>
                                @endif
                               <button class="btn btn-sm btn-primary">{{ __('Editer') }}</button> 
                               <button class="btn btn-sm btn-danger">{{ __('Supprimer') }}</button>
                            </td>
                         </tr>
                         @endforeach
                      </tbody>
                   </table>
                   <nav>
                      <ul class="pagination justify-content-center">
                         {{  $annee_scolaires->links() }}
                      </ul>
                   </nav>
                   @else
                    <h2 class="text-center text-warning">{{ __('Auccune données touvé!') }}</h2>
                   @endif
                </div>
             </div>
          </div>			
       </div>
    </div>
    <!--/ Main Wrapper End -->
 </div>