@extends('admin.master')
@section('content')

<div id="page-wrapper">
      <div class="row">
          <div class="col-lg-12">
                    <h1 class="page-header">الرئيسية</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
				
                    <div class="panel panel-primary">
					
                            
                        
					
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-users fa-4x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <div class="huge">{{App\User::all()->count()}}</div>
                                    <div>مستخدم</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="">التفاصيل</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
				               
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-tasks fa-4x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <div class="huge">{{App\Collection::all()->count()}}</div>
                                    <div>قسم</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="">التفاصيل</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
				                
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-shopping-cart fa-4x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <div class="huge">{{App\Product::all()->count()}}</div>
                                    <div>منتج</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="">التفاصيل</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
				                    
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-gift fa-4x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <div class="huge">{{App\Coupon::all()->count()}}</div>
                                    <div>هدية</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="">التفاصيل</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                        </div>
                        </div>
                     </div>
            <!-- /.row -->

                   </div>
                        <!-- /.panel-body -->
                    </div>
                  
                </div>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
    </div>
    <!-- /#wrapper -->
	
	


@endsection
