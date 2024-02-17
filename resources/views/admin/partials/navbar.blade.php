<div class="header">
    <div class="header-left">
        <a href="#" class="hamburger-menu">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </a>
        <a href="index.html" class="logo"> <img src="{{ URL::to('assets/img/hotel_logo.png') }}" width="50" height="70" alt="logo"> <span class="logoclass">HOTEL</span> </a>
        <a href="index.html" class="logo logo-small"> <img src="{{ URL::to('assets/img/hotel_logo.png') }}" alt="Logo" width="30" height="30"> </a>
    </div>
    <a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
    <ul class="nav user-menu">
        <li class="nav-item dropdown noti-dropdown">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <i class="fe fe-bell"></i> <span class="badge badge-pill">3</span> </a>
            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header"> <span class="notification-title">Notifications</span> <a href="javascript:void(0)" class="clear-noti"> Clear All </a> </div>
                <div class="noti-content">
                    <ul class="notification-list">
                        <li class="notification-message">
                            <a href="#">
                                <div class="media"> <span class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" alt="User Image" src="{{ URL::to('assets/img/profiles/avatar-02.jpg') }}">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
                                        <p class="noti-time"><span class="notification-time">4 mins ago</span> </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="#">
                                <div class="media"> <span class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" alt="User Image" src="{{ URL::to('assets/img/profiles/avatar-11.jpg') }}">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">International Software
                                            Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
                                        <p class="noti-time"><span class="notification-time">6 mins ago</span> </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="#">
                                <div class="media"> <span class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" alt="User Image" src="{{ URL::to('assets/img/profiles/avatar-17.jpg') }}">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone
                                            XR</span></p>
                                        <p class="noti-time"><span class="notification-time">8 mins ago</span> </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="#">
                                <div class="media"> <span class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" alt="User Image" src="{{ URL::to('') }}assets/img/profiles/avatar-13.jpg">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Mercury Software
                                        Inc</span> added a new product <span class="noti-title">Apple
                                        MacBook Pro</span></p>
                                        <p class="noti-time"><span class="notification-time">12 mins ago</span> </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="topnav-dropdown-footer"> <a href="#">View all Notifications</a> </div>
            </div>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <li class="nav-item dropdown has-arrow">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <span class="user-img"><img class="rounded-circle" src="{{ URL::to('assets/img/profiles/avatar-01.jpg') }}" width="31" alt="Soeng Souy"></span> </a>
                <div class="dropdown-menu">
                <div class="user-header">
                    <div class="avatar avatar-sm"> <img src="{{ URL::to('assets/img/profiles/avatar-01.jpg') }}" alt="User Image" class="avatar-img rounded-circle"> </div>
                        <div class="user-text">
                            <h6>Soeng Souy</h6>
                            <p class="text-muted mb-0">Administrator</p>
                        </div>
                    </div>
                        <a class="dropdown-item" href="">My Profile</a> 
                        <a class="dropdown-item" href="settings.html">Account Settings</a> 
                        <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                </div>
            </li>
        </form>
    </ul>
    <div class="top-nav-search">
        <form>
            <input type="text" class="form-control" placeholder="Search here">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>
</div>
<div class="new-sidebar" id="new-sidebar">
    <div class="new-sidebar-inner">
        <ul>
            <li><a href="#">Customers</a></li>
            <li><a href="#">Staff</a></li>
            <li><a href="#">Cook</a></li>
            <li><a href="#">Venue</a>
                <ul class="submenu">
                    <li><a href="#">Submenu Item 1</a></li>
                    <li><a href="#">Submenu Item 2</a></li>
                    <!-- Add more submenu items as needed -->
                </ul>
            </li>
            <li><a href="#">Employees</a></li>
            <li><a href="#">Themes</a></li>
            <li><a href="#">Packages</a></li>
            <li><a href="#">Billing</a></li>
            <li><a href="#">Costumer</a></li>
            <!-- Add more menu items as needed -->
        </ul>
    </div>
</div>
<script>
document.addEventListener("DOMContentLoaded", function() {
    console.log("DOMContentLoaded event fired");

    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const newSidebar = document.getElementById('new-sidebar');

    hamburgerMenu.addEventListener('click', function() {
        console.log("Hamburger menu clicked");
        newSidebar.classList.toggle('active'); // Toggle the 'active' class on the new sidebar
    });

    const sidebarItems = document.querySelectorAll('.new-sidebar-inner ul li');

    sidebarItems.forEach(function(item) {
        const submenu = item.querySelector('.submenu');
        const menuItem = item.querySelector('a');
        if (submenu) {
            menuItem.addEventListener('click', function(event) {
                console.log("Menu item clicked");
                event.preventDefault(); // Prevent the default action of the link
                event.stopPropagation(); // Prevent the click event from bubbling up to parent elements
                submenu.classList.toggle('active'); // Toggle the visibility of the submenu
            });

            // Add an event listener to close the submenu when clicking outside of it
            document.addEventListener('click', function(event) {
                if (!submenu.contains(event.target) && !menuItem.contains(event.target)) {
                    console.log("Clicked outside submenu");
                    submenu.classList.remove('active');
                }
            });
        }
    });
});
</script>