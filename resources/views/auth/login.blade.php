@extends('layouts.layout')
@section('content')
    <section class="login-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="basic-login">
                        <h3 class="text-center mb-60">Login From Here</h3>
                        <form action="login" method="post">
                            @csrf
                            <label for="name">Email Address<span>**</span></label>
                            <input id="email" type="email" name="email" placeholder="Enter Username or Email address...">
                            <label for="pass">Password <span>**</span></label>
                            <input id="password" type="password" name="password" placeholder="Enter password...">
                            <button class="btn theme-btn-2 w-100" type="submit">Login Now</button>
                            <div class="or-divide"><span>or</span></div>
                            <a href="/register" class="btn theme-btn w-100">Register Now</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
