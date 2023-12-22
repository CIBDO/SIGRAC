<div class="header">
            <div class="header-left">
                <a href="{{route('dashboard')}}" class="logo"> 
                <img src="assets/img/hotel_logo.png" width="50" height="70" alt="logo">
                 <span class="logoclass">SIGRAC</span> </a>
                <a href="{{route('dashboard')}}" class="logo logo-small">
                 <img src="assets/img/hotel_logo.png" alt="Logo" width="30" height="30"> </a>
            </div>
            <a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
            <a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
            <ul class="nav user-menu">
                <li class="nav-item dropdown noti-dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> 
                    <i class="fe fe-bell"></i> <span class="badge badge-pill">3</span> </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header"> 
                        <span class="notification-title">Notifications</span> 
                        <a href="javascript:void(0)" class="clear-noti"> Clear All </a> </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media"> <span class="avatar avatar-sm">
                                               
                                            
                                        </div>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer"> <a href="#">Notifications</a> </div>
                    </div>
                </li>
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> 
                    <span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.png" 
                    width="31" alt="Soeng Souy"></span> </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm"> 
                            <img src="assets/img/profiles/avatar-01.png" alt="User Image" 
                            class="avatar-img rounded-circle"> </div>
                            <div class="user-text">
                                <span>{{ auth()->user()->name }}</span>
                            </div>
                        </div>
                         <a class="dropdown-item" href="{{route('profile.edit')}}">Profil</a>
							<a class="dropdown-item" href="{{route('profile.update')}}">Paramètres</a>
							<form method="POST" action="{{ route('logout') }}">
							    @csrf 
							    <a class="dropdown-item" href="#" onclick="event.preventDefault(); 
									this.closest('form').submit();">
							        Déconnexion
							    </a>
							</form>
                    </div>
                </li>
            </ul>
            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Recherche">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>