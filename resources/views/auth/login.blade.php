@extends('layouts.app')

@section('main')
    <!-- begin #page-container -->
    <div id="page-container" class="fade">
        <!-- begin login -->
        <div class="login login-with-news-feed">
            <!-- begin news-feed -->
            <div class="news-feed">
                <div class="news-image">
                    <img src="{{asset('fronts/img/login-bg/bg-7.jpg')}}" data-id="login-cover-image" alt="" />
                </div>
                <div class="news-caption">
                    <h4 class="caption-title"><i class="fa fa-diamond text-success"></i> Announcing Kibb School web platform</h4>
                    <p>
                        Kibb School development
                    </p>
                </div>
            </div>
            <!-- end news-feed -->
            <!-- begin right-content -->
            <div class="right-content">
                <!-- begin login-header -->
                <div class="login-header">
                    <div class="brand">
                        <span class="logo"></span> Kibb School
                        <small>School web application</small>
                    </div>
                    <div class="icon">
                        <i class="fa fa-sign-in"></i>
                    </div>
                </div>
                <!-- end login-header -->
                <!-- begin login-content -->
                <div class="login-content">
                    <form action="{{route('login')}}" method="POST" class="margin-bottom-0">
                        <div class="form-group m-b-15 {{ $errors->has('email')? 'has-error': '' }}">
                            <input type="text" class="form-control input-lg" name="email" placeholder="Email Address" required />
                            @if($errors->has('email'))
                                <div class="has-error">
                                    {{$errors->first('email')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group m-b-15 {{$errors->has('password')? 'has-error': ''}}">
                            <input type="password" class="form-control input-lg" name="password" placeholder="Password" required />
                            @if($errors->has('password'))
                                <div class="has-error">
                                    {{$errors->first('password')}}
                                </div>
                                @endif
                        </div>
                        <div class="checkbox m-b-30">
                            <label>
                                <input type="checkbox" /> Remember Me
                            </label>
                        </div>
                        <div class="login-buttons">
                            <button type="submit" class="btn btn-success btn-block btn-lg">Sign me in</button>
                        </div>
                        <div class="m-t-20 m-b-40 p-b-40 text-inverse">
                            Not a member yet? Click <a href="{{route('register')}}" class="text-success">here</a> to register.
                        </div>
                        <hr />
                        <p class="text-center">
                            &copy; Kibb Admin All Right Reserved 2018
                        </p>
                    </form>
                </div>
                <!-- end login-content -->
            </div>
            <!-- end right-container -->
        </div>
        <!-- end login -->
    </div>
    <!-- end page container -->
@endsection
