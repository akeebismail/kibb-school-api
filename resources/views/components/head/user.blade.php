<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/8/18
 * Time: 7:52 AM
 */

?>
<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
    <img src="{{asset('fronts/img/user-13.jpg')}}" alt="" />
    <span class="hidden-xs">{{auth()->user()->getAuthIdentifierName()}}</span> <b class="caret"></b>
</a>
<ul class="dropdown-menu animated fadeInLeft">
    <li class="arrow"></li>
    <li><a href="javascript:;">Edit Profile</a></li>
    <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
    <li><a href="javascript:;">Calendar</a></li>
    <li><a href="javascript:;">Setting</a></li>
    <li class="divider"></li>
    <li><a href="javascript:;">Log Out</a></li>
</ul>
