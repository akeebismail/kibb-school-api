<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/8/18
 * Time: 7:50 AM
 */
?>
<div class="container-fluid">
    <!-- begin mobile sidebar expand / collapse button -->
    <div class="navbar-header">
        <a href="/" class="navbar-brand"><span class="navbar-logo"></span> Kibb Admin</a>
        <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <!-- end mobile sidebar expand / collapse button -->

    <!-- begin header navigation right -->
    <ul class="nav navbar-nav navbar-right">
        <li>
            @include('components.head.search')
        </li>
        <li class="dropdown">
            @include('components.head.notification')
        </li>
        <li class="dropdown navbar-user">
            @include('components.head.user')
        </li>
    </ul>
</div>
