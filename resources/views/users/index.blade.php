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
                 <h1 class="pd-0 mg-0 tx-20 text-overflow">{{ __('Utilisateur') }}</h1>
              </div>
              <div class="breadcrumb pd-0 mg-0">
                 <a class="breadcrumb-item" href="{{ route('home') }}"><i class="icon ion-ios-home-outline"></i> {{ __('Tableaux de bord') }}</a>
                 <a class="breadcrumb-item active" href="{{ route('users.index') }}">{{ __('Liste utilisateur') }}</a>
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
                          {{ __('Liste utilisateur') }}
                       </h4>
                       <div class="card-header-btn">
                          <a  href="#" data-toggle="collapse" class="btn card-collapse" data-target="#collapse1" aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                          <a href="#" data-toggle="refresh" class="btn card-refresh"><i class="ion-android-refresh"></i></a>
                          <a href="#" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
                       </div>
                       @can('role-create')
                       <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm ml-2">Créer</a>
                       @endcan
                    </div>
                    <div class="card-body collapse show" id="collapse1">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                               <thead class="tx-10 tx-uppercase">
                                  <tr>
                                     <th>{{ __('No') }}</th>
                                     <th>{{ __('Nom et prenoms') }}</th>
                                     <th>{{ __('Email') }}</th>
                                     <th>{{ __('Date création') }}</th>
                                     <th>{{ __('Role(s)') }}</th>
                                     <th class="tx-right">Action</th>
                                  </tr>
                               </thead>
                               <tbody>
                                @foreach ($data as $key => $user)
                                  <tr>
                                     <td>{{ $user->id }}</td>
                                     <td>{{ $user->name }}</td>
                                     <td>{{ $user->email }}</td>
                                     <td>{{ $user->created_at }}</td>
                                     <td>
                                        @if(!empty($user->getRoleNames()))
                                            @foreach($user->getRoleNames() as $val)
                                            <span class="badge badge-outlined badge-primary">{{ $val }}</span>
                                            @endforeach
                                        @endif
                                     </td>
                                     <td class="tx-right">
                                        <div class="dropdown">
                                           <a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-options"></i></a>
                                           <ul class="dropdown-menu dropdown-menu-right">
                                              <li class="dropdown-item"><a class="dropdown-link tx-13 tx-gray-500" href=""><i class="icon-pencil mr-2"></i>Edit</a></li>
                                              <li class="dropdown-item"><a class="dropdown-link tx-13 tx-gray-500" href=""><i class="icon-close mr-2"></i>Remove</a></li>
                                              <li class="dropdown-item"><a class="dropdown-link tx-13 tx-gray-500" href=""><i class="icon-action-redo mr-2"></i>Send Email</a></li>
                                              <li class="dropdown-item"><a class="dropdown-link tx-13 tx-gray-500" href=""><i class="icon-cloud-download mr-2"></i>Export as PDF</a></li>
                                              <li class="dropdown-item"><a class="dropdown-link tx-13 tx-gray-500" href=""><i class="icon-drawer mr-2"></i>Save as Bookmark</a></li>
                                           </ul>
                                        </div>
                                     </td>
                                  </tr>
                                  @endforeach
                               </tbody>
                            </table>
                         </div>
                     <nav>
                        <ul class="pagination justify-content-center">
                            {{ $data->render() }}
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