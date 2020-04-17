@extends('master')
@section('title')
<title>سوق العرب  | التسجيل</title>
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
    <section class="section-wrap register pt-0 pb-40">
      <div class="container">
       

          <form method="post" action="{{route('register')}}">
          {{ csrf_field() }}
          <div class="col-sm-5 register_container">
            <div class="register">
              <h4 class="uppercase">التسجيل</h4>
              <p class="form-row form-row-wide">
                <label>الأسم
                  <abbr class="required" title="required">*</abbr>
                </label>
                <input type="text" class="input-text" placeholder="الأسم"  name="name" value="{{old('name')}}" required>
              </p>
              <p class="form-row form-row-wide">
                <label class="input_title">البريد الإلكتروني
                  <abbr class="required" title="required">*</abbr>
                </label>
                <input type="email" class="input-text" placeholder="البريد الإلكتروني"  name="email" value="{{old('email')}}" required>
                
                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
              </p>
              
              <p class="form-row form-row-wide">
                <label class="input_title">كلمة السر
                  <abbr class="required" title="required">*</abbr>
                </label>
                <input type="password" class="input-text" placeholder="كلمة السر"  name="password" value="{{old('password')}}" required>
              </p>
              <p class="form-row form-row-wide">
                <label class="input_title"> تأكيد كلمة السر
                  <abbr class="required" title="required">*</abbr>
                </label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  placeholder="تأكيد كلمة السر" 
                value="{{old('password_confirmation')}}"   required>
                       @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
              </p> 
                <input type="submit" value="سجل" class="btn">
            </div>
          </div>
        </div>
        </form>
      </div>
    </section> <!-- end login -->
 @endsection

  