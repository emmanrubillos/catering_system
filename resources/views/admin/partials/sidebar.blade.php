@extends('admin.master')

<div class="sidebar" id="sidebar">
    <div class="sidebar-inner">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <!-- Nav Item - Dashboard -->
                <li class="nav-item {{ request()->is('admin') ? 'active' : '' }}">
                <a class="nav-link" href="/admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
                </li>
                <li class="list-divider"></li>
                <li class="submenu">
                    <a href="#">
                        <i class="fas fa-user"></i>
                        <span> Users </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class">
                        <li><a href="{{ route('admin_user') }}" class="{{ request()->is('admin_user') ? 'active' : '' }}"> {!! request()->is('admin_user') ? '<b>Admin</b>' : 'Admin' !!} </a></li>
                        <li><a href="{{ route('users') }}" class="{{ request()->is('users') ? 'active' : '' }}"> {!! request()->is('users') ? '<b>User</b>' : 'User' !!} </a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#">
                        <i class="fas fa-user"></i>
                        <span>Reservation</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class">
                        <li><a href="{{ route('menu') }}" class="{{ request()->is('menu') ? 'active' : '' }}"> {!! request()->is('menu') ? '<b>Menu</b>' : 'Menu' !!} </a></li>

                        <li><a href="{{ route('customer_reservation') }}" class="{{ request()->is('customer_reservation') ? 'active' : '' }}">Customer Reservation</a></li>
                        <li><a href="{{ route('bill') }}" class="{{ request()->is('bill') ? 'active' : '' }}">Customer Bill</a></li>
                        <li><a href="{{ route('review') }}" class="{{ request()->is('review') ? 'active' : '' }}">Customer Review</a></li>

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
