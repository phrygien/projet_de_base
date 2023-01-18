<x-education-layout>
<div class="page-inner">
  <!-- Main Wrapper -->
  <div id="main-wrapper">
     <!--================================-->
     <!-- Breadcrumb Start -->
     <!--================================-->
     <div class="pageheader pd-t-25 pd-b-35">
        <div class="pd-t-5 pd-b-5">
           <h1 class="pd-0 mg-0 tx-20">{{ __('Education') }}</h1>
        </div>
        <div class="breadcrumb pd-0 mg-0">
           <a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i> Home</a>
           <a class="breadcrumb-item" href="">Dashboard</a>
           <span class="breadcrumb-item active">Education Dashboard</span>
        </div>
     </div>
     <!--/ Breadcrumb End -->
     <div class="row row-xs clearfix">
        <!--================================-->
        <!-- Count Start -->
        <!--================================-->	
        <div class="col-sm-6 col-xl-3">
           <div class="card mg-b-20">
              <div class="card-body">
                 <div class="media d-inline-flex">
                    <div>
                       <span class="tx-uppercase tx-10 mg-b-10">Total Students</span>					  
                       <h2 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark"><span class="counter">12,450</span></h2>
                    </div>
                 </div>
                 <div class="clearfix"> 
                    <span class="float-left small tx-gray-500">45% Increase in 28 Days</span> 
                    <span class="float-right">
                    <i class="ion-android-arrow-up mr-1 tx-success"></i><span class="tx-dark">92</span><span class="small mg-b-0">/100</span>
                    </span>
                 </div>
                 <div class="progress ht-3 op-5">
                    <div class="progress-bar bg-primary wd-90p" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                 </div>
              </div>
           </div>
        </div>
        <div class="col-sm-6 col-xl-3">
           <div class="card mg-b-20">
              <div class="card-body">
                 <div class="media d-inline-flex">
                    <div>
                       <span class="tx-uppercase tx-10 mg-b-10">New Students</span>					  
                       <h2 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark"><span class="counter">1,320</span> </h2>
                    </div>
                 </div>
                 <div class="clearfix"> 
                    <span class="float-left small tx-gray-500">40% Increase in 28 Days</span> 
                    <span class="float-right">
                    <i class="ion-android-arrow-up mr-1 tx-success"></i><span class="tx-dark">95</span><span class="small mg-b-0">/100</span>
                    </span>
                 </div>
                 <div class="progress ht-3 op-5">
                    <div class="progress-bar bg-warning wd-95p" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                 </div>
              </div>
           </div>
        </div>
        <div class="col-sm-6 col-xl-3">
           <div class="card mg-b-20">
              <div class="card-body">
                 <div class="media d-inline-flex">
                    <div>
                       <span class="tx-uppercase tx-10 mg-b-10">Total Course</span>					  
                       <h2 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark"><span class="counter">1,150</span> </h2>
                    </div>
                 </div>
                 <div class="clearfix"> 
                    <span class="float-left small tx-gray-500">85% Increase in 28 Days</span> 
                    <span class="float-right">
                    <i class="ion-android-arrow-down mr-1 tx-danger"></i><span class="tx-dark">81</span><span class="small mg-b-0">/100</span>
                    </span>
                 </div>
                 <div class="progress ht-3 op-5">
                    <div class="progress-bar bg-danger wd-80p" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                 </div>
              </div>
           </div>
        </div>
        <div class="col-sm-6 col-xl-3">
           <div class="card mg-b-20">
              <div class="card-body">
                 <div class="media d-inline-flex">
                    <div>
                       <span class="tx-uppercase tx-10 mg-b-10">Total Teachers</span>					  
                       <h2 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark"><span class="counter">1,003</span> </h2>
                    </div>
                 </div>
                 <div class="clearfix"> 
                    <span class="float-left small tx-gray-500">50% Increase in 28 Days</span> 
                    <span class="float-right">
                    <i class="ion-android-arrow-down mr-1 tx-success"></i><span class="tx-dark">85</span><span class="small mg-b-0">/100</span>
                    </span>
                 </div>
                 <div class="progress ht-3 op-5">
                    <div class="progress-bar bg-teal wd-85p" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                 </div>
              </div>
           </div>
        </div>
        <!--/ Count End -->
     </div>
     <div class="row row-xs clearfix">
        <!--================================-->
        <!-- Income/Expense Report Start -->
        <!--================================-->	
        <div class="col-lg-12 col-xl-8">
           <div class="card mg-b-20">
              <div class="card-header">
                 <h4 class="card-header-title">
                    Income/Expense Report
                 </h4>
                 <div class="card-header-btn">
                    <a  href="" data-toggle="collapse" class="btn card-collapse" data-target="#incomeExpenseReport" aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                    <a href="" data-toggle="refresh" class="btn card-refresh"><i class="ion-android-refresh"></i></a>
                    <a href="" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
                    <a href="" data-toggle="remove" class="btn card-remove"><i class="ion-android-close"></i></a>
                 </div>
              </div>
              <div class="card-body pd-y-0 collapse show" id="incomeExpenseReport">
                 <div class="row clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-12 pd-t-20 d-flex align-items-center justify-content-center">
                       <div class="wd-10 ht-10 rounded-circle bd bd-3 bd-info mg-r-10"></div>
                       <div>
                          <span class="tx-uppercase tx-10 mg-b-10">Total Income</span>
                          <h3 class="tx-dark tx-20 mg-b-0 tx-rubik tx-normal">$<span class="counter">25,350</span></h3>
                          <div class="tx-11 d-flex tx-gray-500"><span class="text-success mr-2 d-flex align-items-center"><i class="ion-android-arrow-up mr-1"></i>+535%</span>avg. per month</div>
                       </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 pd-t-20 d-flex align-items-center justify-content-center">
                       <div class="wd-10 ht-10 rounded-circle bd bd-3 bd-info mg-r-10 op-5"></div>
                       <div>
                          <span class="tx-uppercase tx-10 mg-b-10">Total Expense</span>
                          <h3 class="tx-dark tx-20 mg-b-0 tx-rubik tx-normal">$<span class="counter">20,830</span></h3>
                          <div class="tx-11 d-flex tx-gray-500"><span class="text-success mr-2 d-flex align-items-center"><i class="ion-android-arrow-up mr-1"></i>+230%</span>avg. per month</div>
                       </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 pd-t-20 d-flex align-items-center justify-content-center">
                       <div class="wd-10 ht-10 rounded-circle bd bd-3 bd-success mg-r-10"></div>
                       <div>
                          <span class="tx-uppercase tx-10 mg-b-10">Total Target</span>
                          <h3 class="tx-dark tx-20 mg-b-0 tx-rubik tx-normal">$<span class="counter">30,360</span></h3>
                          <div class="tx-11 d-flex tx-gray-500"><span class="text-danger mr-2 d-flex align-items-center"><i class="ion-android-arrow-down mr-1"></i>-135%</span>avg. per month</div>
                       </div>
                    </div>
                 </div>
                 <div class="clearfix">
                    <div id="projectsBudgetChaart"></div>
                 </div>
              </div>
           </div>
        </div>
        <!--/ Income/Expense Report End -->
        <!--================================-->
        <!-- Popular Topics Start -->
        <!--================================-->	
        <div class="col-lg-12 col-xl-4">
           <div class="card mg-b-20">
              <div class="card-header">
                 <h4 class="card-header-title">
                    Popular Topics
                 </h4>
                 <div class="card-header-btn">
                    <a  href="" data-toggle="collapse" class="btn card-collapse" data-target="#popularTopics" aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                    <a href="" data-toggle="refresh" class="btn card-refresh"><i class="ion-android-refresh"></i></a>
                    <a href="" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
                    <a href="" data-toggle="remove" class="btn card-remove"><i class="ion-android-close"></i></a>
                 </div>
              </div>
              <div class="card-body pd-y-0 collapse show" id="popularTopics">
                 <div class="clearfix">
                    <div id="topicsRadarChart"></div>
                 </div>
              </div>
           </div>
        </div>
        <!--/ Popular Topics End -->
     </div>
     <div class="row row-xs clearfix">
        <!--================================-->
        <!-- Courses Details Start -->
        <!--================================-->
        <div class="col-lg-12 col-xl-6">
           <div class="card mg-b-20">
              <div class="card-header">
                 <h4 class="card-header-title">
                    Courses Details
                 </h4>
                 <div class="card-header-btn">
                    <a  href="" data-toggle="collapse" class="btn card-collapse" data-target="#coursesDetails" aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                    <a href="" data-toggle="refresh" class="btn card-refresh"><i class="ion-android-refresh"></i></a>
                    <a href="" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
                    <a href="" data-toggle="remove" class="btn card-remove"><i class="ion-android-close"></i></a>
                 </div>
              </div>
              <div class="card-body pd-0 collapse show" id="coursesDetails">
                 <div class="table-responsive">
                    <table class="table table-hover text-nowrap">
                       <thead class="tx-10 tx-uppercase">
                          <tr>
                             <th>Icon</th>
                             <th>Details</th>
                             <th class="tx-center">Student</th>
                             <th class="tx-right">Action</th>
                          </tr>
                       </thead>
                       <tbody>
                          <tr>
                             <td><span class="wd-40 ht-30 bg-warning d-flex align-items-center justify-content-center"><i class="fa fa-html5 tx-20 tx-white"></i></span></td>
                             <td>
                                <a href="" >HTML5 Fundamentals</a>
                                <div class="clearfix"> 
                                   <span class="float-left tx-10 tx-gray-500">45% Increase</span> 
                                   <span class="float-right">
                                   <i class="ion-android-arrow-up mr-1 tx-success"></i><span class="tx-dark">92</span><span class="small mg-b-0">/100</span>
                                   </span>
                                </div>
                                <div class="progress ht-3 op-5">
                                   <div class="progress-bar bg-primary wd-90p" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                             </td>
                             <td>
                                <ul class="list-unstyled mg-0 d-flex align-items-center justify-content-center">
                                   <li data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="Tommy C">
                                      <div class="avatar"><span class="bg-soft-success avatar-initial rounded-circle bg-primary">C</span></div>
                                   </li>
                                   <li class="mg-l--10" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="Alison G">
                                      <div class="avatar"><span class="bg-soft-primary avatar-initial rounded-circle bg-primary">A</span></div>
                                   </li>
                                   <li class="mg-l--10" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="Brad P">
                                      <div class="avatar"><span class="bg-soft-warning avatar-initial rounded-circle bg-primary">B</span></div>
                                   </li>
                                   <li class="mg-l--10" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="Saun K">
                                      <div class="avatar"><span class="bg-soft-danger avatar-initial rounded-circle bg-primary">S</span></div>
                                   </li>
                                   <li class="mg-l--10" data-original-title="" title="">
                                      <div class="avatar"><span class="bg-soft-primary avatar-initial rounded-circle bg-primary">5+</span></div>
                                   </li>
                                </ul>
                             </td>
                             <td class="tx-right">
                                <div class="dropdown">
                                   <a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-options"></i></a>
                                   <ul class="dropdown-menu dropdown-menu-right">
                                      <li class="dropdown-item"><a class="dropdown-link tx-13 tx-gray-500" href=""><i class="icon-close mr-2"></i>Remove</a></li>
                                      <li class="dropdown-item"><a class="dropdown-link tx-13 tx-gray-500" href=""><i class="icon-action-redo mr-2"></i>Send Email</a></li>
                                      <li class="dropdown-item"><a class="dropdown-link tx-13 tx-gray-500" href=""><i class="icon-cloud-download mr-2"></i>Export as PDF</a></li>
                                      <li class="dropdown-item"><a class="dropdown-link tx-13 tx-gray-500" href=""><i class="icon-drawer mr-2"></i>Save as Bookmark</a></li>
                                   </ul>
                                </div>
                             </td>
                          </tr>
                          <tr>
                             <td><span class="wd-40 ht-30 bg-danger d-flex align-items-center justify-content-center"><i class="fa fa-css3 tx-20 tx-white"></i></span></td>
                             <td>
                                <a href="" >CSS3 Fundamentals</a>
                                <div class="clearfix"> 
                                   <span class="float-left tx-10 tx-gray-500">45% Increase</span> 
                                   <span class="float-right">
                                   <i class="ion-android-arrow-up mr-1 tx-success"></i><span class="tx-dark">87</span><span class="small mg-b-0">/100</span>
                                   </span>
                                </div>
                                <div class="progress ht-3 op-5">
                                   <div class="progress-bar bg-danger wd-85p" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                             </td>
                             <td>
                                <ul class="list-unstyled mg-0 d-flex align-items-center justify-content-center">
                                   <li data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="Tommy C">
                                      <div class="avatar"><span class="bg-soft-success avatar-initial rounded-circle bg-primary">C</span></div>
                                   </li>
                                   <li class="mg-l--10" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="Alison G">
                                      <div class="avatar"><span class="bg-soft-primary avatar-initial rounded-circle bg-primary">A</span></div>
                                   </li>
                                   <li class="mg-l--10" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="Brad P">
                                      <div class="avatar"><span class="bg-soft-warning avatar-initial rounded-circle bg-primary">B</span></div>
                                   </li>
                                   <li class="mg-l--10" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="Saun K">
                                      <div class="avatar"><span class="bg-soft-danger avatar-initial rounded-circle bg-primary">S</span></div>
                                   </li>
                                   <li class="mg-l--10" data-original-title="" title="">
                                      <div class="avatar"><span class="bg-soft-primary avatar-initial rounded-circle bg-primary">5+</span></div>
                                   </li>
                                </ul>
                             </td>
                             <td class="tx-right">
                                <div class="dropdown">
                                   <a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-options"></i></a>
                                   <ul class="dropdown-menu dropdown-menu-right">
                                      <li class="dropdown-item"><a class="dropdown-link tx-13 tx-gray-500" href=""><i class="icon-close mr-2"></i>Remove</a></li>
                                      <li class="dropdown-item"><a class="dropdown-link tx-13 tx-gray-500" href=""><i class="icon-action-redo mr-2"></i>Send Email</a></li>
                                      <li class="dropdown-item"><a class="dropdown-link tx-13 tx-gray-500" href=""><i class="icon-cloud-download mr-2"></i>Export as PDF</a></li>
                                      <li class="dropdown-item"><a class="dropdown-link tx-13 tx-gray-500" href=""><i class="icon-drawer mr-2"></i>Save as Bookmark</a></li>
                                   </ul>
                                </div>
                             </td>
                          </tr>
                          <tr>
                             <td><span class="wd-40 ht-30 bg-teal d-flex align-items-center justify-content-center"><i class="fa fa-vimeo tx-20 tx-white"></i></span></td>
                             <td>
                                <a href="" >VueJS Fundamentals</a>
                                <div class="clearfix"> 
                                   <span class="float-left tx-10 tx-gray-500">45% Increase</span> 
                                   <span class="float-right">
                                   <i class="ion-android-arrow-up mr-1 tx-success"></i><span class="tx-dark">80</span><span class="small mg-b-0">/100</span>
                                   </span>
                                </div>
                                <div class="progress ht-3 op-5">
                                   <div class="progress-bar bg-success wd-85p" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                             </td>
                             <td>
                                <ul class="list-unstyled mg-0 d-flex align-items-center justify-content-center">
                                   <li data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="Tommy C">
                                      <div class="avatar"><span class="bg-soft-success avatar-initial rounded-circle bg-primary">C</span></div>
                                   </li>
                                   <li class="mg-l--10" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="Alison G">
                                      <div class="avatar"><span class="bg-soft-primary avatar-initial rounded-circle bg-primary">A</span></div>
                                   </li>
                                   <li class="mg-l--10" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="Brad P">
                                      <div class="avatar"><span class="bg-soft-warning avatar-initial rounded-circle bg-primary">B</span></div>
                                   </li>
                                   <li class="mg-l--10" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="Saun K">
                                      <div class="avatar"><span class="bg-soft-danger avatar-initial rounded-circle bg-primary">S</span></div>
                                   </li>
                                   <li class="mg-l--10" data-original-title="" title="">
                                      <div class="avatar"><span class="bg-soft-primary avatar-initial rounded-circle bg-primary">5+</span></div>
                                   </li>
                                </ul>
                             </td>
                             <td class="tx-right">
                                <div class="dropdown">
                                   <a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-options"></i></a>
                                   <ul class="dropdown-menu dropdown-menu-right">
                                      <li class="dropdown-item"><a class="dropdown-link tx-13 tx-gray-500" href=""><i class="icon-close mr-2"></i>Remove</a></li>
                                      <li class="dropdown-item"><a class="dropdown-link tx-13 tx-gray-500" href=""><i class="icon-action-redo mr-2"></i>Send Email</a></li>
                                      <li class="dropdown-item"><a class="dropdown-link tx-13 tx-gray-500" href=""><i class="icon-cloud-download mr-2"></i>Export as PDF</a></li>
                                      <li class="dropdown-item"><a class="dropdown-link tx-13 tx-gray-500" href=""><i class="icon-drawer mr-2"></i>Save as Bookmark</a></li>
                                   </ul>
                                </div>
                             </td>
                          </tr>
                          <tr>
                             <td><span class="wd-40 ht-30 bg-warning d-flex align-items-center justify-content-center"><i class="fa fa-coffee tx-20 tx-white"></i></span></td>
                             <td>
                                <a href="" >jQuery Fundamentals</a>
                                <div class="clearfix"> 
                                   <span class="float-left tx-10 tx-gray-500">45% Increase</span> 
                                   <span class="float-right">
                                   <i class="ion-android-arrow-up mr-1 tx-success"></i><span class="tx-dark">85</span><span class="small mg-b-0">/100</span>
                                   </span>
                                </div>
                                <div class="progress ht-3 op-5">
                                   <div class="progress-bar bg-warning wd-90p" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                             </td>
                             <td>
                                <ul class="list-unstyled mg-0 d-flex align-items-center justify-content-center">
                                   <li data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="Tommy C">
                                      <div class="avatar"><span class="bg-soft-success avatar-initial rounded-circle bg-primary">C</span></div>
                                   </li>
                                   <li class="mg-l--10" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="Alison G">
                                      <div class="avatar"><span class="bg-soft-primary avatar-initial rounded-circle bg-primary">A</span></div>
                                   </li>
                                   <li class="mg-l--10" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="Brad P">
                                      <div class="avatar"><span class="bg-soft-warning avatar-initial rounded-circle bg-primary">B</span></div>
                                   </li>
                                   <li class="mg-l--10" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="Saun K">
                                      <div class="avatar"><span class="bg-soft-danger avatar-initial rounded-circle bg-primary">S</span></div>
                                   </li>
                                   <li class="mg-l--10" data-original-title="" title="">
                                      <div class="avatar"><span class="bg-soft-primary avatar-initial rounded-circle bg-primary">5+</span></div>
                                   </li>
                                </ul>
                             </td>
                             <td class="tx-right">
                                <div class="dropdown">
                                   <a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-options"></i></a>
                                   <ul class="dropdown-menu dropdown-menu-right">
                                      <li class="dropdown-item"><a class="dropdown-link tx-13 tx-gray-500" href=""><i class="icon-close mr-2"></i>Remove</a></li>
                                      <li class="dropdown-item"><a class="dropdown-link tx-13 tx-gray-500" href=""><i class="icon-action-redo mr-2"></i>Send Email</a></li>
                                      <li class="dropdown-item"><a class="dropdown-link tx-13 tx-gray-500" href=""><i class="icon-cloud-download mr-2"></i>Export as PDF</a></li>
                                      <li class="dropdown-item"><a class="dropdown-link tx-13 tx-gray-500" href=""><i class="icon-drawer mr-2"></i>Save as Bookmark</a></li>
                                   </ul>
                                </div>
                             </td>
                          </tr>
                          <tr>
                             <td><span class="wd-40 ht-30 bg-indigo d-flex align-items-center justify-content-center"><i class="fa fa-bold tx-20 tx-white"></i></span></td>
                             <td>
                                <a href="" >Bootstrap Fundamentals</a>
                                <div class="clearfix"> 
                                   <span class="float-left tx-10 tx-gray-500">45% Increase</span> 
                                   <span class="float-right">
                                   <i class="ion-android-arrow-up mr-1 tx-success"></i><span class="tx-dark">95</span><span class="small mg-b-0">/100</span>
                                   </span>
                                </div>
                                <div class="progress ht-3 op-5">
                                   <div class="progress-bar bg-indigo wd-90p" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                             </td>
                             <td>
                                <ul class="list-unstyled mg-0 d-flex align-items-center justify-content-center">
                                   <li data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="Tommy C">
                                      <div class="avatar"><span class="bg-soft-success avatar-initial rounded-circle bg-primary">C</span></div>
                                   </li>
                                   <li class="mg-l--10" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="Alison G">
                                      <div class="avatar"><span class="bg-soft-primary avatar-initial rounded-circle bg-primary">A</span></div>
                                   </li>
                                   <li class="mg-l--10" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="Brad P">
                                      <div class="avatar"><span class="bg-soft-warning avatar-initial rounded-circle bg-primary">B</span></div>
                                   </li>
                                   <li class="mg-l--10" data-toggle="tooltip" data-placement="top" data-skin-class="tooltip-base" data-html="true" title="" data-original-title="Saun K">
                                      <div class="avatar"><span class="bg-soft-danger avatar-initial rounded-circle bg-primary">S</span></div>
                                   </li>
                                   <li class="mg-l--10" data-original-title="" title="">
                                      <div class="avatar"><span class="bg-soft-primary avatar-initial rounded-circle bg-primary">5+</span></div>
                                   </li>
                                </ul>
                             </td>
                             <td class="tx-right">
                                <div class="dropdown">
                                   <a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-options"></i></a>
                                   <ul class="dropdown-menu dropdown-menu-right">
                                      <li class="dropdown-item"><a class="dropdown-link tx-13 tx-gray-500" href=""><i class="icon-close mr-2"></i>Remove</a></li>
                                      <li class="dropdown-item"><a class="dropdown-link tx-13 tx-gray-500" href=""><i class="icon-action-redo mr-2"></i>Send Email</a></li>
                                      <li class="dropdown-item"><a class="dropdown-link tx-13 tx-gray-500" href=""><i class="icon-cloud-download mr-2"></i>Export as PDF</a></li>
                                      <li class="dropdown-item"><a class="dropdown-link tx-13 tx-gray-500" href=""><i class="icon-drawer mr-2"></i>Save as Bookmark</a></li>
                                   </ul>
                                </div>
                             </td>
                          </tr>
                       </tbody>
                    </table>
                 </div>
              </div>
           </div>
        </div>
        <!--/ Courses Details End -->
        <!--================================-->
        <!-- Assign Task Start -->
        <!--================================-->
        <div class="col-lg-12 col-xl-6">
           <div class="card mg-b-20">
              <div class="card-header">
                 <h4 class="card-header-title">
                    Assign Task
                 </h4>
                 <div class="card-header-btn">
                    <a  href="" data-toggle="collapse" class="btn card-collapse" data-target="#assignTask" aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                    <a href="" data-toggle="refresh" class="btn card-refresh"><i class="ion-android-refresh"></i></a>
                    <a href="" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
                    <a href="" data-toggle="remove" class="btn card-remove"><i class="ion-android-close"></i></a>
                 </div>
              </div>
              <div class="card-body pd-0 collapse show" id="assignTask">
                 <div class="table-responsive">
                    <table class="table mb-0 table-hover">
                       <thead  class="tx-10 tx-uppercase">
                          <tr>
                             <th>Task</th>
                             <th>Assigned Professors</th>
                             <th>status</th>
                             <th class="wd-30p">Progress</th>
                          </tr>
                       </thead>
                       <tbody>
                          <tr>
                             <td>Preparation for cricket team</td>
                             <td>
                                <a href="">Pr. Kenny Josh</a>
                             </td>
                             <td>
                                <span class="badge badge-outlined badge-success">Done</span>
                             </td>
                             <td>
                                <div class="progress ht-3 op-5">
                                   <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:100%;"> <span class="sr-only">100%
                                      Complete</span> 
                                   </div>
                                </div>
                             </td>
                          </tr>
                          <tr>
                             <td>Annual function preparation</td>
                             <td> <a href="">Pr. Mark</a></td>
                             <td>
                                <span class="badge badge-outlined badge-warning"> Pending </span>
                             </td>
                             <td>
                                <div class="progress ht-3 op-5">
                                   <div class="progress-bar bg-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:70%;"> <span class="sr-only">70%
                                      Complete</span> 
                                   </div>
                                </div>
                             </td>
                          </tr>
                          <tr>
                             <td>Final year exam paper set</td>
                             <td><a href="">Pr. Felix</a> </td>
                             <td>
                                <span class="badge badge-outlined badge-danger">Suspended</span>
                             </td>
                             <td>
                                <div class="progress ht-3 op-5">
                                   <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">50%
                                      Complete</span> 
                                   </div>
                                </div>
                             </td>
                          </tr>
                          <tr>
                             <td>Placement report</td>
                             <td><a href="">Pr. Beryl</a></td>
                             <td>
                                <span class="badge badge-outlined badge-success ">Done</span>
                             </td>
                             <td>
                                <div class="progress ht-3 op-5">
                                   <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%;"> <span class="sr-only">100%
                                      Complete</span> 
                                   </div>
                                </div>
                             </td>
                          </tr>
                          <tr>
                             <td>Fees collection report</td>
                             <td><a href="">Pr. Jayesh</a></td>
                             <td>
                                <span class="badge badge-outlined badge-success ">Done</span>
                             </td>
                             <td>
                                <div class="progress ht-3 op-5">
                                   <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:100%;"> <span class="sr-only">100%
                                      Complete</span> 
                                   </div>
                                </div>
                             </td>
                          </tr>
                          <tr>
                             <td>Library book status</td>
                             <td><a href="">Pr. Sharma</a></td>
                             <td>
                                <span class="badge badge-outlined badge-danger">Suspended</span>
                             </td>
                             <td>
                                <div class="progress ht-3 op-5">
                                   <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:20%;"> <span class="sr-only">20%
                                      Complete</span> 
                                   </div>
                                </div>
                             </td>
                          </tr>
                          <tr>
                             <td>Fees collection report</td>
                             <td><a href="">Pr. Jayesh</a></td>
                             <td>
                                <span class="badge badge-outlined badge-success ">Done</span>
                             </td>
                             <td>
                                <div class="progress ht-3 op-5">
                                   <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:100%;"> <span class="sr-only">100%
                                      Complete</span> 
                                   </div>
                                </div>
                             </td>
                          </tr>
                          <tr>
                             <td>Library book status</td>
                             <td><a href="">Pr. Sharma</a></td>
                             <td>
                                <span class="badge badge-outlined badge-danger">Suspended</span>
                             </td>
                             <td>
                                <div class="progress ht-3 op-5">
                                   <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:20%;"> <span class="sr-only">20%
                                      Complete</span> 
                                   </div>
                                </div>
                             </td>
                          </tr>
                       </tbody>
                    </table>
                 </div>
              </div>
           </div>
        </div>
        <!--/ Assign Task End -->
        <!--================================-->
        <!-- Student Details Start -->
        <!--================================-->
        <div class="col-lg-12 col-xl-12">
           <div class="card mg-b-20">
              <div class="card-header">
                 <h4 class="card-header-title">
                    Student Details
                 </h4>
                 <div class="card-header-btn">
                    <a  href="" data-toggle="collapse" class="btn card-collapse" data-target="#studentDetails" aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                    <a href="" data-toggle="refresh" class="btn card-refresh"><i class="ion-android-refresh"></i></a>
                    <a href="" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
                    <a href="" data-toggle="remove" class="btn card-remove"><i class="ion-android-close"></i></a>
                 </div>
              </div>
              <div class="card-body pd-0 collapse show" id="studentDetails">
                 <div class="table-responsive">
                    <table class="table table-hover mb-0">
                       <thead class="tx-10 tx-uppercase">
                          <tr>
                             <th>No</th>
                             <th>Name</th>
                             <th>Pr. Assigned Professor</th>
                             <th>Date Of Admit</th>
                             <th>Fees</th>
                             <th>Branch</th>
                             <th class="tx-right">Action</th>
                          </tr>
                       </thead>
                       <tbody>
                          <tr>
                             <td>1</td>
                             <td>Jens Brincker</td>
                             <td>Pr. Kenny Josh</td>
                             <td>27/05/2019</td>
                             <td>
                                <span class="badge badge-outlined badge-success">paid</span>
                             </td>
                             <td>Mechanical</td>
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
                          <tr>
                             <td>2</td>
                             <td>Mark Hay</td>
                             <td>Pr. Mark</td>
                             <td>26/05/2017</td>
                             <td>
                                <span class="badge badge-outlined badge-warning">unpaid </span>
                             </td>
                             <td>Science</td>
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
                          <tr>
                             <td>3</td>
                             <td>Anthony Davie</td>
                             <td>Pr. Cinnabar</td>
                             <td>21/05/2019</td>
                             <td>
                                <span class="badge badge-outlined badge-success ">paid</span>
                             </td>
                             <td>Commerce</td>
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
                          <tr>
                             <td>4</td>
                             <td>David Perry</td>
                             <td>Pr. Felix </td>
                             <td>20/04/2019</td>
                             <td>
                                <span class="badge badge-outlined badge-danger">unpaid</span>
                             </td>
                             <td>Mechanical</td>
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
                          <tr>
                             <td>5</td>
                             <td>Anthony Davie</td>
                             <td>Pr. Beryl</td>
                             <td>24/05/2019</td>
                             <td>
                                <span class="badge badge-outlined badge-success ">paid</span>
                             </td>
                             <td>M.B.A.</td>
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
                          <tr>
                             <td>6</td>
                             <td>Alan Gilchrist</td>
                             <td>Pr. Joshep</td>
                             <td>22/05/2019</td>
                             <td>
                                <span class="badge badge-outlined badge-warning ">unpaid</span>
                             </td>
                             <td>Science</td>
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
                          <tr>
                             <td>7</td>
                             <td>Mark Hay</td>
                             <td>Pr. Jayesh</td>
                             <td>18/06/2019</td>
                             <td>
                                <span class="badge badge-outlined badge-success ">paid</span>
                             </td>
                             <td>Commerce</td>
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
                          <tr>
                             <td>8</td>
                             <td>Sue Woodger</td>
                             <td>Pr. Sharma</td>
                             <td>17/05/2019</td>
                             <td>
                                <span class="badge badge-outlined badge-danger">unpaid</span>
                             </td>
                             <td>Mechanical</td>
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
                          <tr>
                             <td>9</td>
                             <td>Mark Hay</td>
                             <td>Pr. Jayesh</td>
                             <td>18/06/2019</td>
                             <td>
                                <span class="badge badge-outlined badge-success ">paid</span>
                             </td>
                             <td>Commerce</td>
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
                          <tr>
                             <td>10</td>
                             <td>Sue Woodger</td>
                             <td>Pr. Sharma</td>
                             <td>17/05/2019</td>
                             <td>
                                <span class="badge badge-outlined badge-danger">unpaid</span>
                             </td>
                             <td>Mechanical</td>
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
                       </tbody>
                    </table>
                 </div>
              </div>
           </div>
        </div>
        <!--/ Student Details End -->
     </div>
     <!--================================-->
     <!-- Professor Detail Start -->
     <!--================================-->	
     <div class="row row-xs">
        <div class="col-sm-6 col-xl-3">
           <div class="card mg-b-20">
              <div class="card-body text-center">
                 <img src="assets/images/avatar/avatar1.png" alt="" class="img-fluid rounded-circle wd-60">
                 <h5 class="tx-dark tx-13 tx-medium mg-y-15 d-block">Pr. Merri Diamond</h5>
                 <span class="mr-3 tx-gray-500 tx-12"><i class="ion-ios-location-outline mr-2 text-info"></i>New York, USA</span> 
                 <span class="mr-3 tx-gray-500 tx-12"><i class="ion-ios-telephone-outline mr-2 text-info"></i>+1 123 456 789</span>
                 <p class="text-center mt-3">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                 <a href="" class="btn btn-sm btn-label-primary">Science</a> 
                 <a href="" class="btn btn-sm btn-label-success">Message</a>
              </div>
           </div>
        </div>
        <div class="col-sm-6 col-xl-3">
           <div class="card mg-b-20">
              <div class="card-body text-center">
                 <img src="assets/images/avatar/avatar2.png" alt="" class="img-fluid rounded-circle wd-60">
                 <h5 class="tx-dark tx-13 tx-medium mg-y-15 d-block">Pr. Wendy Keen</h5>
                 <span class="mr-3 tx-gray-500 tx-12"><i class="ion-ios-location-outline mr-2 text-info"></i>New York, USA</span> 
                 <span class="mr-3 tx-gray-500 tx-12"><i class="ion-ios-telephone-outline mr-2 text-info"></i>+1 123 456 789</span>
                 <p class="text-center mt-3">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                 <a href="" class="btn btn-sm btn-label-primary">Arts</a> 
                 <a href="" class="btn btn-sm btn-label-success">Message</a>
              </div>
           </div>
        </div>
        <div class="col-sm-6 col-xl-3">
           <div class="card mg-b-20">
              <div class="card-body text-center">
                 <img src="assets/images/avatar/avatar3.png" alt="" class="img-fluid rounded-circle wd-60">
                 <h5 class="tx-dark tx-13 tx-medium mg-y-15 d-block">Pr. Adam L. Easter</h5>
                 <span class="mr-3 tx-gray-500 tx-12"><i class="ion-ios-location-outline mr-2 text-info"></i>New York, USA</span> 
                 <span class="mr-3 tx-gray-500 tx-12"><i class="ion-ios-telephone-outline mr-2 text-info"></i>+1 123 456 789</span>
                 <p class="text-center mt-3">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                 <a href="" class="btn btn-sm btn-label-primary">Science</a> 
                 <a href="" class="btn btn-sm btn-label-success">Message</a>
              </div>
           </div>
        </div>
        <div class="col-sm-6 col-xl-3">
           <div class="card mg-b-20">
              <div class="card-body text-center">
                 <img src="assets/images/avatar/avatar4.png" alt="" class="img-fluid rounded-circle wd-60">
                 <h5 class="tx-dark tx-13 tx-medium mg-y-15 d-block">Pr. Stanley C. Owens</h5>
                 <span class="mr-3 tx-gray-500 tx-12"><i class="ion-ios-location-outline mr-2 text-info"></i>New York, USA</span> 
                 <span class="mr-3 tx-gray-500 tx-12"><i class="ion-ios-telephone-outline mr-2 text-info"></i>+1 123 456 789</span>
                 <p class="text-center mt-3">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                 <a href="" class="btn btn-sm btn-label-primary">Commerce</a> 
                 <a href="" class="btn btn-sm btn-label-success">Message</a>
              </div>
           </div>
        </div>
     </div>
     <!--/ Professor Detail End -->
  </div>
  <!--/ Main Wrapper End -->
</div>
</x-education-layout>
