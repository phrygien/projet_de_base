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
                 <h1 class="pd-0 mg-0 tx-20 text-overflow">{{ __('Roles') }}</h1>
              </div>
              <div class="breadcrumb pd-0 mg-0">
                 <a class="breadcrumb-item" href="{{ route('home') }}"><i class="icon ion-ios-home-outline"></i> {{ __('Tableaux de bord') }}</a>
                 <a class="breadcrumb-item active" href="{{ route('roles.index') }}">{{ __('Liste roles') }}</a>
              </div>
           </div>
           <!--/ Breadcrumb End -->
           <div class="row row-xs clearfix">
              <!--================================-->
              <!-- Row Toggler FooTable Start -->
              <!--================================-->
              <div class="col-md-12 col-lg-12">
                 <div class="card mg-b-20">
                    <div class="card-header">
                       <h4 class="card-header-title">
                          {{ __('Details role') }}
                       </h4>
                       <div class="card-header-btn">
                          <a  href="#" data-toggle="collapse" class="btn card-collapse" data-target="#collapse1" aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                          <a href="#" data-toggle="refresh" class="btn card-refresh"><i class="ion-android-refresh"></i></a>
                          <a href="#" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
                       </div>
                    </div>
                    <div class="card-body collapse show" id="collapse1">
                        <p><h3>{{ __('Role name:') }} {{ $role->name }}</h3></p>
                        <hr>
                        <p><b>{{ __('Permissions attribué:') }}</b></p>
                        <table class="table table-responsive-sm">
                            <tbody>
                                @if(!empty($rolePermissions))
                                    @foreach($rolePermissions as $permission)
                                        <tr>
                                            <td>{{ $permission->name }}</td>
                                        </tr>
                                    @endforeach
                                    {{ $rolePermissions->links() }}
                                @endif
                            </tbody>
                         </table>
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