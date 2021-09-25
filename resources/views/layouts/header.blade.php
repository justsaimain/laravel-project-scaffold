 <header id="page-topbar" class="container" style="background-color: #fff">
     <div class="navbar-header container">
         <div class="d-flex">
             <!-- LOGO -->
             <div class="navbar-brand-box" style="background-color: #027b5a; margin-left:-15px">
                 <a href="index.html" class="logo logo-light">
                     <span class="logo-sm">
                         <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="35">
                     </span>
                     <span class="logo-lg">
                         <img src="{{ asset('assets/images/logo-light.png') }}" class="" alt=""
                             height=" 22">
                     </span>
                 </a>
             </div>

         </div>
         <div class="d-flex">
             <div class="dropdown d-inline-block">
                 <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                     data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <img class="rounded-circle header-profile-user"
                         src="https://ui-avatars.com/api/?background=ccc&name={{ Auth::user()->name }}" alt="Avatar">
                     <span class="text-muted px-2">{{ Auth::user()->name }}</span>
                 </button>
                 <div class="dropdown-menu dropdown-menu-end">
                     <!-- item-->
                     <a class="dropdown-item" href="#"><i
                             class="mdi mdi-account-circle font-size-17 align-middle me-1"></i> Profile</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item text-danger" href="{{ route('admin.logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout
                     </a>

                     <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </header>
