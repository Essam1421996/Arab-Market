@extends('master')
@section('title')
<title>سوق العرب  | الأقسام</title>
@endsection
@section('container')
    <!-- Breadcrumbs -->
    <div class="container">
      <ol class="breadcrumb">
        
        <li>
          <a href="{{asset('/')}}">الرئيسية</a>
        </li>
        <li class="active">
          الأقسام
        </li>
      </ol> <!-- end breadcrumbs -->
    </div>

    <!-- Collections -->
    <section class="section-wrap">
      <div class="container">
        <div class="row row-10">
        @foreach(App\Collection::collections() as $collection)
          <div class="col-sm-6">
            <a href="{{route('collection_show',$collection->id)}}" class="collection-item">
              <img src="{{asset('img/shop/'.$collection->image)}}" alt="">
              <div class="overlay">
                <h2 class="uppercase">{{$collection->name}}</h2>
              </div>
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </section> <!-- end collections -->
@endsection