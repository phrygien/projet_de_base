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

                     <nav>
                        <ul class="pagination justify-content-center">
                           
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