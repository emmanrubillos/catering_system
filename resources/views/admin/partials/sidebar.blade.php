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

                <li class="nav-item
                 {{ request()->is('users') ? 'active' : '' }}">
                <a class="nav-link" href="/users">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Users</span></a>
                </li>

                <li class="submenu">
                    <a href="#">
                        <i class="fas fa-user"></i>
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
                </li>

                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-user"></i> <span> Menu </span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-user"></i> <span> Venue </span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-user"></i> <span> Themes </span></a>
                </li>
                <!-- Nav Item - Package -->
                <li class="nav-item
                {{ request()->is('package') ? 'active' : '' }}">
                <a class="nav-link" href="/package">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Package</span></a>
                </li>




                <li class="submenu">
                    <a href="#"><i class="fas fa-user"></i> <span> Blog </span></a>
                </li>
            </ul>
        </div>
    </div>
</div>


