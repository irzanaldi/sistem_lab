@extends('layouts.app')
@section('content')

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            @endif
    <!-- Icon -->
    <div class="fadeIn first">
      <img src="{{ asset('assets/gambar/logo.jpg') }}" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="{{ url('/login') }}" method="POST">
    {{ csrf_field() }}
      <input type="text" id="username" class="fadeIn second" name="username" placeholder="username">
      @if($errors->has('username'))
      <label style="color:red" class="login-field-icon fui-user" for="username">username Jangan kosong</label>
      @endif
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      @if($errors->has('username'))
      <label style="color:red" class="login-field-icon fui-user" for="password">password Jangan kosong</label><br>
      @endif
      <input type="submit" class="fadeIn fourth" value="login">
      @if(Session::has('failed'))
  		<p style="color:red">Username Atau Password Anda Salah</p>
  	  @endif
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
@endsection

