<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/8/18
 * Time: 8:23 AM
 */
?>
<!-- begin sidebar user -->
<ul class="nav">
    <li class="nav-profile">
        <div class="image">
            <a href="javascript:;"><img src="{{asset('fronts/img/user-13.jpg')}}" alt="" /></a>
        </div>
        <div class="info">
            {{auth()->user()->first_name}}
            <small>Student | Teacher | Admin</small>
        </div>
    </li>
</ul>
<!-- end sidebar user -->
