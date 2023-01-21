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
                 <h1 class="pd-0 mg-0 tx-20 text-overflow">{{ __('Permission') }}</h1>
              </div>
              <div class="breadcrumb pd-0 mg-0">
                 <a class="breadcrumb-item" href="{{ route('home') }}"><i class="icon ion-ios-home-outline"></i> {{ __('Tableau de bord') }}</a>
                 <a class="breadcrumb-item" href="{{ route('permissions.index') }}">{{ __('Permission') }}</a>
                 <span class="breadcrumb-item active">{{ __('Mise a jour permission') }} - {{ $permission->name }}</span>
              </div>
           </div>
           <!--/ Breadcrumb End -->
           <div class="row row-xs clearfix">
              <!--================================-->
              <!-- Top Label Layout Start -->
              <!--================================-->
              <div class="col-md-12 col-lg-12">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                 <div class="card mg-b-20">
                    <div class="card-header">
                       <h4 class="card-header-title">
                          {{ __('Mise a jour permission') }}
                       </h4>
                       <div class="card-header-btn">
                          <a  href="" data-toggle="collapse" class="btn card-collapse" data-target="#collapse1" aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                          <a href="" data-toggle="refresh" class="btn card-refresh"><i class="ion-android-refresh"></i></a>
                          <a href="" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
                       </div>
                    </div>
                    {!! Form::model($permission, ['route' => ['permissions.update', $permission->id], 'method'=>'PATCH']) !!}
                    <div class="card-body collapse show" id="collapse1">
                       <div class="form-layout form-layout-1">
                          <div class="row mg-b-25">
                             <div class="col-lg-4">
                                <div class="form-group">
                                   <label class="form-control-label active">{{ __('Nom du permission:') }} <span class="tx-danger">*</span></label>
                                   {!! Form::text('name', null, array('placeholder' => 'Nom du permission','class' => 'form-control')) !!}
                                </div>
                             </div>

                             <div class="col-lg-4">
                                <div class="form-group">
                                   <label class="form-control-label active">Guard: <span class="tx-danger">*</span></label>
                                   <input class="form-control" type="text" disabled name="firstname" value="web" placeholder="Enter firstname">
                                </div>
                             </div>

                          </div>
                          <!-- row -->
                          <div class="form-layout-footer">
                             <button class="btn btn-custom-primary">{{ __('Sauvegarder') }}</button>
                             <button class="btn btn-secondary">{{ __('Reset') }}</button>
                          </div>
                          <!-- form-layout-footer -->
                       </div>
                    </div>
                    {!! Form::close() !!}
                 </div>
              </div>
              <!--/ Top Label Layout End -->					
           </div>
        </div>
        <!--/ Main Wrapper End -->
     </div>
</x-education-layout>