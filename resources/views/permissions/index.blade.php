<x-education-layout>
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
                 <h1 class="pd-0 mg-0 tx-20 text-overflow">{{ __('Permissions') }}</h1>
              </div>
              <div class="breadcrumb pd-0 mg-0">
                 <a class="breadcrumb-item" href="{{ route('home') }}"><i class="icon ion-ios-home-outline"></i> {{ __('Tableaux de bord') }}</a>
                 <a class="breadcrumb-item active" href="{{ route('permissions.index') }}">{{ __('Permission') }}</a>
              </div>
           </div>
           <!--/ Breadcrumb End -->
           <div class="row row-xs clearfix">
              <!--================================-->
              <!-- Row Toggler FooTable Start -->
              <!--================================-->
              <div class="col-md-12 col-lg-12">
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div>
                @endif
                 <div class="card mg-b-20">
                    <div class="card-header">
                       <h4 class="card-header-title">
                          {{ __('Liste permission') }}
                       </h4>
                       <div class="card-header-btn">
                          <a  href="#" data-toggle="collapse" class="btn card-collapse" data-target="#collapse1" aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                          <a href="#" data-toggle="refresh" class="btn card-refresh"><i class="ion-android-refresh"></i></a>
                          <a href="#" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
                       </div>
                       @can('role-create')
                       <a href="{{ route('permissions.create') }}" class="btn btn-primary btn-sm ml-2">Créer</a>
                       @endcan
                    </div>
                    <div class="card-body collapse show" id="collapse1">
                     <table class="table table-responsive-sm">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>{{ __('Nom du permission') }}</th>
                              <th width="280px">{{ __('Actions') }}</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($data as $key => $permission)
                           <tr>
                               <td scope="row">{{ $permission->id }}</td>
                               <td>{{ $permission->name }}</td>
                               <td>
                                   <a class="btn btn-success" href="{{ route('permissions.show',$permission->id) }}">Show</a>
                                   @can('role-edit')
                                       <a class="btn btn-primary" href="{{ route('permissions.edit',$permission->id) }}">{{ __('Editer') }}</a>
                                   @endcan
                                   @can('role-delete')
                                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#m_modal_5">{{ __('Supprimer') }}</button>	
                                   <div class="modal" id="m_modal_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel_5" aria-hidden="true">
                                    <div class="modal-dialog modal-sm" role="document">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalLabel_5">{{ __('Suppression') }}</h5>
                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true"><i class="ion-ios-close-empty"></i></span>
                                             </button>
                                          </div>
                                          <div class="modal-body">
                                             {{ __('Voulez vous vraiment supprimer la permission ?') }}
                                          </div>
                                          <div class="modal-footer">
                                             <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Annuler') }}</button>
                                             {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id],'style'=>'display:inline']) !!}
                                             {!! Form::submit('Confirmer', ['class' => 'btn btn-primary']) !!}
                                             {!! Form::close() !!}
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                   @endcan
                               </td>
                           </tr>
                       @endforeach
                        </tbody>
                     </table>
                     <nav>
                        <ul class="pagination justify-content-center">
                           {{ $data->appends($_GET)->links() }}
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
</x-education-layout>