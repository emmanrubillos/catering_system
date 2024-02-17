@extends('admin.master')

<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="active"> <a href="{{ route('admin') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
                <li class="list-divider"></li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="#">Customer reservation</a></li>
                        <li><a href="#">Customer review</a></li>
                        <li><a href="#">Customer bill</a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Staff </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        
                    </ul>
                </li>
               
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Cook </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="employees.html">Food Available </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Venue </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Employees </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="employees.html">Employees List </a></li>
                        <li><a href="leaves.html">Leaves </a></li>
                        <li><a href="holidays.html">Holidays </a></li>
                        <li><a href="attendance.html">Attendance </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Themes </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Packages </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Billing </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span>Blog</span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Users </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
