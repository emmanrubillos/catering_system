@extends('admin.master')

<div class="sidebar" id="sidebar">
    <div class="sidebar-inner">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <!-- Nav Item - Dashboard -->
                <li class="nav-item {{ request()->is('admin') ? 'active' : '' }}">
                    <a class="nav-link" href="/admin">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="list-divider"></li>

                <li class="nav-item {{ request()->is('users') ? 'active' : '' }}">
                    <a class="nav-link" href="/users">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Users</span>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('#') ? 'active' : '' }}">
                    <a class="nav-link" href="# ">
                        <i class="fas fa-user-clock"></i>
                        <span>Reservations</span>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('service') ? 'active' : '' }}">
                    <a class="nav-link" href="/service ">
                        <i class="fas fa-handshake"></i>
                        <span>Services</span>
                    </a>
                </li>

                <li class="submenu">
                    <a href="#">
                        <i class="fas fa-wrench"></i>
                        <span>Settings</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class">
                        
                        <li>
                            <a href="{{ route('inclusion.index') }}" class="{{ request()->is('inclusion') ? 'active' : '' }}">
                                {!! request()->is('inclusion') ? '<b>Inclusion</b>' : 'Inclusion' !!}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('classification.index') }}" class="{{ request()->is('classification') ? 'active' : '' }}">
                                {!! request()->is('classification') ? '<b>Classification</b>' : 'Classification' !!}
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>


 {{-- <li class="submenu">
                    <a href="#">
                        <i class="fas fa-book-open"></i>
                        <span> Reservation </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class">
                        <li>
                            <a href="{{ route('buffet_order') }}" class="{{ request()->is('reservation/buffet_order') ? 'active' : '' }}">
                                {!! request()->is('reservation/buffet_order') ? '<b>Buffet Order</b>' : 'Buffet Order' !!}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('event_details') }}" class="{{ request()->is('reservation/event_details') ? 'active' : '' }}">
                                {!! request()->is('reservation/event_details') ? '<b>Event Details</b>' : 'Event Details' !!}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('bill') }}" class="{{ request()->is('reservation/bill') ? 'active' : '' }}">
                                {!! request()->is('reservation/bill') ? '<b>Bill</b>' : 'Bill' !!}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('review') }}" class="{{ request()->is('reservation/review') ? 'active' : '' }}">
                                {!! request()->is('reservation/review') ? '<b>Review</b>' : 'Review' !!}
                            </a>
                        </li>
                    </ul>
                </li> --}}

                {{-- <li class="nav-item {{ request()->is('inclusions') ? 'active' : '' }}">
                    <a class="nav-link" href="inclusions">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Inclusion</span>
                    </a>
                </li> --}}

                {{-- <li class="nav-item {{ request()->is('classifications') ? 'active' : '' }}">
                    <a class="nav-link" href="/classifications">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Classifications</span>
                    </a>
                </li> --}}

                <!-- Nav Item - Package -->
                {{-- <li class="nav-item {{ request()->is('themes') ? 'active' : '' }}">
                    <a class="nav-link" href="/themes">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Themes</span>
                    </a>
                </li> --}}

                {{-- <li class="nav-item {{ request()->is('package') ? 'active' : '' }}">
                    <a class="nav-link" href="/package">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Package</span>
                    </a>
                </li> --}}