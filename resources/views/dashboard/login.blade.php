@extends('layout')

@section('content')

    
<body>
  <style>
    body {
      background-image: url('assets/img/BG.jpg');
    }
  </style>      
            <div class="container" style="width: 70%; margin-top: 4%;">
                <div class="login">
                    <form method="POST" action="{{route('login.auth')}}">
                        
                        @csrf
                        @if (Session::get('success'))
                            <div class="alert alert-success w-75">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        @if (Session::get('fail'))
                            <div class="alert alert-danger">
                                {{ Session::get('fail') }}
                            </div>
                        @endif
                        @if (Session::get('notAllowed'))
                            <div class="alert alert-danger">
                                {{ Session::get('notAllowed') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        
                        <h1>Login</h1>
                        <hr>
                        <p align="center">Login here!</p>
                        <label for="">Username</label>
                        <input type="text" placeholder="Username" name="username">
                        <label for="">Password</label>
                        <input type="password" placeholder="Password" name="password">
                        <br><br>
                        <button type="submit" >Login</button>
                        <br><br>
                        <p align="center">
                            <a href="{{url('/register')}}">Dont have an account? Sign up here!</a>
                        </p>
                    </form>
                </div>
                <div class="right">
                    <img src="../assets/img/login.svg">
                </div>
            </div>
</body>
@endsection
