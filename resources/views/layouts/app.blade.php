<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="ltr">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>{{ config('app.frontname', 'Laravel') }}</title>
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- Prevent the demo from appearing in search engines -->
      <meta name="robots" content="noindex">
      <!-- App CSS -->
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-grid-only@1.0.0/bootstrap.css">
      <link type="text/css" href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
      <link type="text/css" href="{{ asset('assets/css/app.rtl.css') }}" rel="stylesheet">
      <!-- Simplebar -->
      <link type="text/css" href="{{ asset('assets/vendor/simplebar.css') }}" rel="stylesheet">
   </head>
   <body>
      <div class="mdk-drawer-layout js-mdk-drawer-layout" data-fullbleed data-push data-responsive-width="992px" data-has-scrolling-region>
         <div class="mdk-drawer-layout__content">
            <!-- header-layout -->
            <div class="mdk-header-layout js-mdk-header-layout  mdk-header--fixed  mdk-header-layout__content--scrollable">
               <!-- header -->
               <div class="mdk-header js-mdk-header bg-primary" data-fixed>
                  <div class="mdk-header__content">
                     <nav class="navbar navbar-expand-md bg-primary navbar-dark d-flex-none">
						@guest
						@else
							<button class="btn btn-link text-white pl-0" type="button" data-toggle="sidebar">
								<i class="material-icons align-middle md-36">short_text</i>
							</button>
						@endguest
                        <div class="page-title m-0">{{ config('app.frontname', 'Laravel') }}</div>
						@guest
						@else						
							<div class="collapse navbar-collapse" id="mainNavbar">
							   <ul class="navbar-nav ml-auto align-items-center">
								<!--
								  <li class="nav-item dropdown notifications d-flex align-self-center align-items-center" id="navbarNotifications">
									 <a href="#" class="nav-link dropdown-toggle notifications--active" data-toggle="dropdown" aria-expanded="false">
									 <i class="material-icons align-middle">notifications</i>
									 </a>
									 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notificationsDropdown" id="notificationsDropdown">
										<ul class="nav nav-tabs-notifications" id="notifications-ul" role="tablist">
										   <li class="nav-item">
											  <a class="nav-link active" id="notifications-tab" data-toggle="tab" href="#notifications" role="tab" aria-controls="notifications" aria-selected="true">Notifications</a>
										   </li>
										   <li class="nav-item">
											  <a class="nav-link" id="alerts-tab" data-toggle="tab" href="#alerts" role="tab" aria-controls="alerts" aria-selected="false">Alerts</a>
										   </li>
										   <li class="nav-item">
											  <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Messages</a>
										   </li>
										</ul>
										<div class="tab-content" id="notifications-tabs">
										   <div class="tab-pane fade show active" id="notifications" role="tabpanel" aria-labelledby="notifications-tab">
											  <ul class="list-group list-group-flush">
												 <li class="list-group-item">
													<div class="w-100">
													   <a href="#">john</a> received a new quote
													</div>
													<div class="w-100 text-muted">4 secs ago</div>
												 </li>
												 <li class="list-group-item">
													<div class="w-100">
													   <a href="#">karen</a> received a new quote
													</div>
													<div class="w-100 text-muted">25 mins ago</div>
												 </li>
												 <li class="list-group-item">
													<div class="w-100">
													   <a href="#">jim</a> received a new quote
													</div>
													<div class="w-100 text-muted">7 hrs ago</div>
												 </li>
												 <li class="list-group-item text-right">
													<a href="#">
													<span class="align-middle">View All</span>
													<i class="material-icons md-18 align-middle">arrow_forward</i>
													</a>
												 </li>
											  </ul>
										   </div>
										   <div class="tab-pane fade" id="alerts" role="tabpanel" aria-labelledby="alerts-tab">
											  <ul class="list-group list-group-flush">
												 <li class="list-group-item">
													<div class="media align-items-center">
													   <i class="material-icons align-middle mr-2 text-warning">
													   info_outline
													   </i>
													   <div class="media-body">
														  <div class="w-100">
															 <a href="profile.html">john</a> received a new
															 <a href="#">quote</a>
														  </div>
														  <div class="w-100 text-muted">4 secs ago</div>
													   </div>
													</div>
												 </li>
												 <li class="list-group-item">
													<div class="media align-items-center">
													   <i class="material-icons align-middle mr-2 text-success">
													   check_circle
													   </i>
													   <div class="media-body">
														  <div class="w-100">
															 <a href="profile.html">karen</a> completed a
															 <a href="#">task</a>
														  </div>
														  <div class="w-100 text-muted">25 mins ago</div>
													   </div>
													</div>
												 </li>
												 <li class="list-group-item">
													<div class="media align-items-center">
													   <i class="material-icons align-middle mr-2 text-danger">
													   warning
													   </i>
													   <div class="media-body">
														  <div class="w-100">
															 <a href="profile.html">jim</a> removed a
															 <a href="#">task</a>
														  </div>
														  <div class="w-100 text-muted">7 hrs ago</div>
													   </div>
													</div>
												 </li>
												 <li class="list-group-item text-right">
													<a href="#">
													<span class="align-middle">View All</span>
													<i class="material-icons md-18 align-middle">arrow_forward</i>
													</a>
												 </li>
											  </ul>
										   </div>
										   <div class="tab-pane fade" id="messages" role="tabpanel" aria-labelledby="messages-tab">
											  <ul class="list-group list-group-flush">
												 <li class="list-group-item">
													<div class="media align-items-center">
													   <a href="profile.html">
													   <img src="assets/images/avatars/person-1.jpg" class="img-fluid rounded-circle mr-2" width="35" alt="">
													   </a>
													   <div class="media-body">
														  <div class="w-100">I started that project we talked...</div>
														  <div class="w-100 text-muted">4 secs ago</div>
													   </div>
													</div>
												 </li>
												 <li class="list-group-item">
													<div class="media align-items-center">
													   <a href="profile.html">
													   <img src="assets/images/avatars/person-11.jpg" class="img-fluid rounded-circle mr-2" width="35" alt="">
													   </a>
													   <div class="media-body">
														  <div class="w-100">Can we arrange a meeting?...</div>
														  <div class="w-100 text-muted">25 mins ago</div>
													   </div>
													</div>
												 </li>
												 <li class="list-group-item">
													<div class="media align-items-center">
													   <a href="profile.html">
													   <img src="assets/images/avatars/person-12.jpg" class="img-fluid rounded-circle mr-2" width="35" alt="">
													   </a>
													   <div class="media-body">
														  <div class="w-100">We need to fix some bugs...</div>
														  <div class="w-100 text-muted">7 hrs ago</div>
													   </div>
													</div>
												 </li>
												 <li class="list-group-item text-right">
													<a href="#">
													<span class="align-middle">View All</span>
													<i class="material-icons md-18 align-middle">arrow_forward</i>
													</a>
												 </li>
											  </ul>
										   </div>
										</div>
									 </div>
								  </li>
								  -->
								  <li class="nav-item nav-divider">
								  <li class="nav-item">
									 <a href="#" class="nav-link dropdown-toggle dropdown-clear-caret" data-toggle="sidebar" data-target="#user-drawer">
							            @if (session('name'))
											{{ session('name') }}
										@endif
									 <img src="https://pbs.twimg.com/profile_images/928893978266697728/3enwe0fO_400x400.jpg" class="img-fluid rounded-circle ml-1" width="35"
										alt="">
									 </a>
								  </li>
							   </ul>
							</div>
						@endguest
                     </nav>
                  </div>
               </div>
               <!-- content -->
               <div class="mdk-header-layout__content top-navbar mdk-header-layout__content--scrollable h-100">
                  <!-- main content -->
                  <div class="container-fluid">
                     @yield('content');
                  </div>
               </div>
            </div>
         </div>
        <!-- // END drawer-layout__content -->
        <!-- drawer -->
        <!-- Authentication Links -->
        @guest

        @else	 
         <div class="mdk-drawer js-mdk-drawer" id="default-drawer">
            <div class="mdk-drawer__content">
               <div class="mdk-drawer__inner" data-simplebar data-simplebar-force-enabled="false">
                  <nav class="drawer  drawer--dark">
                     <div class="drawer-spacer">
                        <div class="media align-items-center">
                           <a href="index.html" class="drawer-brand-circle mr-2">J</a>
                           <div class="media-body">
                              <a href="index.html" class="h5 m-0 text-link">{{ config('app.frontname', 'Laravel') }}</a>
                           </div>
                        </div>
                     </div>
                     <!-- HEADING -->
                     <div class="py-2 drawer-heading">
                        Dashboards
                     </div>
                     <!-- DASHBOARDS MENU -->
                     <ul class="drawer-menu" id="dasboardMenu" data-children=".drawer-submenu">
                        <li class="drawer-menu-item ">
                           <a href="analytics.html">
                           <i class="material-icons">pie_chart</i>
                           <span class="drawer-menu-text"> Dashboard</span>
                           </a>
                        </li>					 
                        <li class="drawer-menu-item drawer-submenu">
                           <a data-toggle="collapse" data-parent="#componentsMenu" href="#" data-target="#uiComponentsMenu" aria-controls="uiComponentsMenu" aria-expanded="false" class="collapsed">
                           <i class="material-icons">library_books</i>
                           <span class="drawer-menu-text"> Users</span>
                           </a>
                           <ul class="collapse " id="uiComponentsMenu">
                              <li class="drawer-menu-item "><a href="{{ route('create-role') }}">Create Users Role</a></li>
							  <li class="drawer-menu-item "><a href="{{ route('manage-roles') }}">Manage Users Role</a></li>
							  <li class="drawer-menu-item "><a href="{{ route('create-user') }}">Create User</a></li>
                              <li class="drawer-menu-item "><a href="{{ route('manage-users') }}">Manage Users</a></li>
                           </ul>
                        </li>
                        <li class="drawer-menu-item">
                           <a data-toggle="collapse" data-parent="#componentsMenu" href="#" data-target="#servicesMenu" aria-controls="servicesMenu" aria-expanded="false" class="collapsed">
                           <i class="material-icons">dns</i>
                           <span class="drawer-menu-text"> Services</span>
                           </a>
                           <ul class="collapse " id="servicesMenu">
                              <li class="drawer-menu-item "><a href="{{ route('create-role') }}">Create Service</a></li>
							  <li class="drawer-menu-item "><a href="{{ route('manage-roles') }}">Manage Services</a></li>
                           </ul>
                        </li>
                        <li class="drawer-menu-item ">
                           <a data-toggle="collapse" data-parent="#componentsMenu" href="#" data-target="#requestsMenu" aria-controls="requestsMenu" aria-expanded="false" class="collapsed">
                           <i class="material-icons">store</i>
                           <span class="drawer-menu-text"> Clients Requests</span>
                           </a>
                           <ul class="collapse " id="requestsMenu">
                              <li class="drawer-menu-item "><a href="{{ route('create-role') }}">Manage New Reqests</a></li>
							  <li class="drawer-menu-item "><a href="{{ route('manage-roles') }}">Manage Open Requests</a></li>
							  <li class="drawer-menu-item "><a href="{{ route('manage-roles') }}">View Closed Requests</a></li>
                           </ul>
                        </li>
                        <li class="drawer-menu-item ">
                           <a data-toggle="collapse" data-parent="#componentsMenu" href="#" data-target="#treasuryMenu" aria-controls="treasuryMenu" aria-expanded="false" class="collapsed">
                           <i class="material-icons">business</i>
                           <span class="drawer-menu-text"> Treassury</span>
                           </a>
                           <ul class="collapse " id="treasuryMenu">
							  <li class="drawer-menu-item "><a href="{{ route('manage-roles') }}">Get All Colletions</a></li>
                              <li class="drawer-menu-item "><a href="{{ route('create-role') }}">Get Overdue Payments</a></li>
							  <li class="drawer-menu-item "><a href="{{ route('create-role') }}">Get Collected Payments</a></li>
                           </ul>
                        </li>
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
         <!-- // END drawer -->
         <!-- drawer -->
         <div class="mdk-drawer js-mdk-drawer" id="user-drawer" data-position="right" data-align="end">
            <div class="mdk-drawer__content">
               <div class="mdk-drawer__inner" data-simplebar data-simplebar-force-enabled="false">
                  <nav class="drawer drawer--light">
                     <div class="drawer-spacer drawer-spacer-border">
                        <div class="media align-items-center">
                           <img src="https://pbs.twimg.com/profile_images/928893978266697728/3enwe0fO_400x400.jpg" class="img-fluid rounded-circle mr-2" width="35" alt="">
                           <div class="media-body">
                              <a href="#" class="h5 m-0">@if (session('name')) {{ session('name') }} @endif</a>
                              <div>Account Manager</div>
                           </div>
                        </div>
                     </div>
					 @if (session('lvl')>=10)
                     <div class="drawer-spacer bg-body-bg">
                        <div class="d-flex justify-content-between mb-2">
                           <p class="h6 text-gray m-0"><i class="material-icons align-middle md-18 text-primary">monetization_on</i> Balance</p>
                           <span>$21,011</span>
                        </div>
                        <div class="d-flex justify-content-between">
                           <p class="h6 text-gray m-0"><i class="material-icons align-middle md-18 text-primary">shopping_cart</i> Sales</p>
                           <span>142</span>
                        </div>
                     </div>
					 @endif
                     <!-- MENU -->
                     <ul class="drawer-menu" id="userMenu" data-children=".drawer-submenu">
                        <li class="drawer-menu-item">
                           <a href="profile.html">
                           <i class="material-icons">account_circle</i>
                           <span class="drawer-menu-text"> Profile</span>
                           </a>
                        </li>		 						
                        <li class="drawer-menu-item">
                            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                           <i class="material-icons">exit_to_app</i>
                           <span class="drawer-menu-text"> Logout</span>
                           </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>						   
                        </li>
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
		 @endguest			 
         <!-- // END drawer -->
      </div>
      <!-- // END drawer-layout -->
      <!-- jQuery -->
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.24.4/sweetalert2.all.js"></script>
      <script src="{{ asset('assets/vendor/jquery.min.js') }}"></script>
      <!-- Bootstrap -->
      <script src="{{ asset('assets/vendor/popper.js') }}"></script>
      <script src="{{ asset('assets/vendor/bootstrap.min.js') }}"></script>
      <!-- Simplebar -->
      <!-- Used for adding a custom scrollbar to the drawer -->
      <script src="{{ asset('assets/vendor/simplebar.js') }}"></script>
      <!-- Vendor -->
      <script src="{{ asset('assets/vendor/Chart.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/moment.min.js') }}"></script>
      <!-- APP -->
      <script src="{{ asset('assets/js/color_variables.js') }}"></script>
      <script src="{{ asset('assets/js/app.js') }}"></script>
      <script src="{{ asset('assets/vendor/dom-factory.js') }}"></script>
      <!-- DOM Factory -->
      <script src="{{ asset('assets/vendor/material-design-kit.js') }}"></script>
      <!-- MDK -->
      <script>
         (function() {
             'use strict';
             // Self Initialize DOM Factory Components
             domFactory.handler.autoInit()
         
         
             // Connect button(s) to drawer(s)
             var sidebarToggle = document.querySelectorAll('[data-toggle="sidebar"]')
         
             sidebarToggle.forEach(function(toggle) {
                 toggle.addEventListener('click', function(e) {
                     var selector = e.currentTarget.getAttribute('data-target') || '#default-drawer'
                     var drawer = document.querySelector(selector)
                     if (drawer) {
                         if (selector == '#default-drawer') {
                             $('.container-fluid').toggleClass('container--max');
                         }
                         drawer.mdkDrawer.toggle();
                     }
                 })
             })
         })()
      </script>
      <script src="{{ asset('assets/vendor/morris.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/raphael.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/bootstrap-datepicker.min.js') }}"></script>
      <script src="{{ asset('assets/js/datepicker.js') }}"></script>
	  <script src="{{ asset('assets/js/script.js') }}"></script>
      <script>
         $(function() {
             window.morrisDashboardChart = new Morris.Area({
                 element: 'morris-area-chart',
                 data: [{
                         year: '2017-01',
                         a: 6352.27
                     },
                     {
                         year: '2017-02',
                         a: 4309.98
                     },
                     {
                         year: '2017-03',
                         a: 1465.98
                     },
                     {
                         year: '2017-04',
                         a: 1298.25
                     },
                     {
                         year: '2017-05',
                         a: 3209
                     },
                     {
                         year: '2017-06',
                         a: 2083
                     },
                     {
                         year: '2017-07',
                         a: 1285.23
                     },
                     {
                         year: '2017-08',
                         a: 1289
                     },
                     {
                         year: '2017-09',
                         a: 4430
                     },
                     {
                         year: '2017-10',
                         a: 8921.19
                     }
                 ],
                 xkey: 'year',
                 ykeys: ['a'],
                 labels: ['Earnings'],
                 lineColors: ['#fff'],
                 fillOpacity: '0.2',
                 gridEnabled: true,
                 gridTextColor: '#ffffff',
                 resize: true
             });
         
         });
      </script>
   </body>
</html>