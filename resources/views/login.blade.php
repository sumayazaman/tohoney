@extends('layouts.tohoney')

@section('content')
    
    <!-- .breadcumb-area start -->
    <div class="breadcumb-area bg-img-4 ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-wrap text-center">
                        <h2>Account</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span>Login</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .breadcumb-area end -->
    <!-- checkout-area start -->
    <div class="account-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="account-form form-style">
                        <p>User Name or Email Address *</p>
                        <input type="email">
                        <p>Password *</p>
                        <input type="Password">
                        <div class="row">
                            <div class="col-lg-6">
                                <input id="password" type="checkbox">
                                <label for="password">Save Password</label>
                            </div>
                            <div class="col-lg-6 text-right">
                                <a href="#">Forget Your Password?</a>
                            </div>
                        </div>
                        <button>SIGN IN</button>
                        <div class="text-center">
                            <a href="register.html">Or Creat an Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout-area end -->
@endsection