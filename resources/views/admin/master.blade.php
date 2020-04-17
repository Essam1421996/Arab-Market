<!DOCTYPE html>
<html lang="en">

<head>
     <title>لوحة التحكم</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">

    <link href="{{asset('css/font-awesome/font-awesome.css')}}" >


    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/admin_css/rtl/bootstrap.min.css')}}" rel="stylesheet">
    
    <!-- not use this in ltr -->
    <link href="{{asset('css/admin_css/rtl/bootstrap.rtl.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('css/admin_css/plugins/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{asset('css/admin_css/plugins/timeline.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/admin_css/rtl/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset('css/admin_css/plugins/morris.css')}}" rel="stylesheet">
     <link href="{{asset('css/select2.min.css')}}" rel="stylesheet" type="text/css">
	 <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
     <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
      <link rel="apple-touch-icon" sizes="72x72" href="{{asset('img/apple-touch-icon-72x72.png')}}">
     <link rel="apple-touch-icon" sizes="114x114" href="{{asset('img/apple-touch-icon-114x114.png')}}">

    <link href="{{asset('css/admin_css/index.css')}}" rel="stylesheet">
	
  <script src="{{asset('js/admin_js/jquery-1.11.0.js')}}"></script>
    <link href="{{asset('css/sweetalert2.min.css')}}" rel="stylesheet">


    

</head>

<body>
@include('flash_message')
<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home">لوحة التحكم</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
               
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>الملف الشخصي</a>
                        </li>
                        <li><a href="#"><i class="fa fa-sliders-h fa-fw"></i> الإعدادات</a>
                        </li>
                        
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
				 <li><a href="{{asset('logout')}}"><i class="fa fa-sign-out-alt fa-fw"></i> تسجيل الخروج</a>
                        </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                  <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="أبحث هنا ">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a  href="{{route('admin_home')}}"  class="control"><i class="fa fa-home fa-1x"></i> الرئيسية<span class=""></span></a>
                        </li>
                        <li>
                            <a href="{{route('users')}}" class="control"> <i class="fa fa-users fa-1x"></i> المستخدمين
							<span class=""></span></a>
                            
                        </li>
                        <li>
                           <a href="{{route('categories')}}" class="control"> <i class="fa fa-tasks fa-1x"></i> الأقسام
						   <span class=""></span></a>
                        </li>
                       
                        <li>
                            <a href="{{route('products')}}" class="control"> <i class="fa fa-shopping-cart fa-1x"></i> المنتجات
							<span class=""></span></a>
                           
                        </li>
                        <li>
                            <a href="{{route('coupons')}}" class="control"><i class="fa fa-gift fa-1x"></i> الهدايا
							<span class=""></span></a>
                            
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
                   
          

@yield('content')

  <script src="{{asset('js/admin_js/jquery-1.11.0.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/admin_js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('js/admin_js/metisMenu/metisMenu.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{asset('js/admin_js/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('js/admin_js/morris/morris.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{asset('js/admin_js/sb-admin-2.js')}}"></script>
      <script src="{{asset('js/select2.min.js')}}"></script>
    <script  src="{{asset('js/admin_js/index.js')}}"></script>
    <script  src="{{asset('js/sweetalert2.min.js')}}"></script>


</body>

</html>