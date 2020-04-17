@extends('master')
@section('title')
<title>سوق العرب | التسجيل</title>
@endsection
@section('container')
    <!-- Page Title -->
    <section class="page-title text-center">
      <div class="container relative clearfix">
        <div class="title-holder">
          <div class="title-text">
          </div>
        </div>
      </div>
    </section> <!-- end page title -->

    <!-- login -->
    <section class="section-wrap login-register pt-0 pb-40">
      <div class="container">
       <form method="post" action="{{route('login')}}">
       {{ csrf_field() }}
       



        <div class="row">
          <div class="col-sm-5 col-sm-offset-1 mb-40 register_container">
            <div class="login">
              <h4 class="uppercase">الدخول</h4>
           
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                 <p class="form-row form-row-wide">
                           <label class="input_title">البريد الإلكتروني

                           </label>
                                <input id="email" type="email" class="form-control" name="email" value="{{old('email')}}"  required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                             </p>
                            
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <p class="form-row form-row-wide">
                        <label class="input_title">كلمة السر
                                </label> 

                            
                                <input id="password" type="password" class="form-control" name="password" value="{{old('password')}}" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                          </p>
                        </div>

              <input type="submit" value="دخول" class="btn">
              <input type="checkbox" class="input-checkbox" id="remember" name="remember" value="1">
              <label id="btn-login-remember" for="remember" class="checkbox">تذكرني</label>
              <a id="btn-forget-pass" href="#">نسيت كلمة السر</a>
            </div>
          </div>
             </form>
             

      </div>
    </section> <!-- end login -->
 @endsection

  