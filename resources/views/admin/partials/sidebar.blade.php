@extends('admin.master')

<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="active"> <a href="{{ route('admin') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
                <li class="list-divider"></li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> User </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="employees.html">Admin </a></li>
                        <li><a href="employees.html">Customer </a></li>
                        <li><a href="leaves.html">Employees </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Reservation </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="#">Customer Reservation</a></li>
                        <li><a href="#">Customer Review</a></li>
                        <li><a href="#">Customer Bill</a></li>
                    </ul>
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
                <li class="submenu"> 
                    <a href="#"><i class="fas fa-user"></i> <span> Package </span></a>
                </li>
                <li class="submenu"> 
                    <a href="#"><i class="fas fa-user"></i> <span> Blog </span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
