@extends('layout')
@section('content')
    
<body>
<style>
  body {
    background-image: url('assets/img/BG.jpg');
  }

</style>

<center>
  <div class="recontainer" style="width: 70%; margin-top: 4%;">
    <p class="text-regist" style="padding-left: 6%;">Sign Up Now!</p>
    <div class="mt-5">
      <img class="rephoto" style="margin-left: -160%;" src="../assets/img/regist.svg">
    </div>
      <div class="repho">
        <div class="form mt-5">
              <form method="POST" action="{{route('register.input')}}">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @csrf
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label class="form-label" for="form3Example1">Nama lengkap</label>
                      <input type="text" id="form3Example1" class="form-control" name="name"/>
                    </div>
                  </div>

                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label class="form-label" for="form3Example2">Username</label>
                      <input type="text" id="form3Example2" class="form-control" name="username"/>
                    </div>
                  </div>
                </div>
  
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">Email</label>
                  <input type="email" id="form3Example3" class="form-control" name="email"/>
                </div>
  
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4">Password</label>
                  <input type="password" id="form3Example4" class="form-control" name="password"/>
                </div>
  
                <button type="submit" name="submit" id="regist-submit">Sign Up</button>
  
              </form>
              </div>
            </div>
          </div>
        </div>
      </center>
  </body>
@endsection
