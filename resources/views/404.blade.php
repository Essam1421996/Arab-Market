@extends('master')
@section('title')
 <title>سوق العرب| 404</title>
@endsection
@section('container')
    <!-- Breadcrumbs -->
    <div class="container">
      <ol class="breadcrumb">
        <li>
          <a href="index.html">الرئيسية</a>
        </li>
        <li>
          <a href="#">الصفحات</a>
        </li>
        <li class="active">
          404
        </li>
      </ol> <!-- end breadcrumbs -->
    </div>


    <!-- 404 -->
    <section class="section-wrap page-404">
      <div class="container">

        <div class="row text-center">
          <div class="col-md-6 col-md-offset-3">
            <h1>404</h1>
            <h2 class="mb-50">الصفحة غير موجودة</h2>
            <p class="mb-20">تستطيع العودة إلي <a href="/">الصفحة الرئيسية</a> أو تستخدم البحث</p>
            <form class="relative">
              <input type="search" placeholder="ما تريد البحث عنه" class="mb-0">
              <button type="submit" class="search-button"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </div>

      </div>
    </section> <!-- end 404 -->
@endsection