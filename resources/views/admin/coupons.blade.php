@extends('admin.master')
@section('content')
<div id="page-wrapper">
          <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">إضافة هدية</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
             <div class="row">
                  <div class="col-lg-6 col-md-6">
                  <form role="form" method="post" action="{{route('add_coupon')}}"  enctype='multipart/form-data'>
                                                <input type="hidden" name="_token" value="{{ csrf_token()}}">

                                        <div class="form-group">
                                            <label>تاريخ البدء:</label>
                                            <input class="form-control bg" type="date" name="beginning" placeholder="ادخل التاريخ"  required>
                                        </div>
                                        
                                        <div class="form-group">
                                        <label>تاريخ الإنتهاء:</label>
                                            <input class="form-control" type="date" name="ending" placeholder="ادخل التاريخ" required>
                                        </div>
                                        <div class="form-group">
                                        <label> نسبة الخصم:</label>
                                            <input class="form-control" type="text" name="discount" placeholder="ادخل نسبة الخصم" required>
                                        </div>
                                       
                                        <button type="submit" class="btn btn-default">أضف</button>
                                        <button type="reset" class="btn btn-default">تهيئة المدخلات</button>
                                    </form>
                    </div>
                
                </div>
               
            <!-- /.row -->

     <!-- /.row -->
     <br>
     <div class="row">
              <div class="col-lg-12">
                    
                  <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> الهدايا
                           
                            </div>
                        </div>
                <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>تاريخ البدء</th>
                                    <th>تاريخ الإنتهاء</th>
                                    <th>الكود</th>
                                    <th>نسبة الخصم</th>
									<th>التحكم</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach(App\Coupon::coupons() as $coupon)
                                
                                <form method="post" action="{{route('coupon_update',$coupon->id)}}"  enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                                    
                                <tr>
                                    <td>{{$coupon->id}}</td>
                                    <td><input name="beginning" type="date" value="{{$coupon->beginning}}"></td>
                                    <td><input name="ending" type="date" value="{{$coupon->ending}}"></td>
                                    <td>{{$coupon->code}}</td>
                                    <td><input name="discount" type="text"  value="{{$coupon->discount}}">%</td>
                                    <td class="actions">
                                      <button  style="float:right"  type="submit" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">تعديل</button>
                                   
                                </form>
                                <form method="get" action="{{route('delete_coupon',$coupon->id)}}" >
                                <input type="hidden" name="_token" value="{{csrf_token()}}"  />
                                <button style="float:left" type="submit" class="btn btn-danger btn-md" data-toggle="modal" data-target="#myModal">حذف</button>
                                </form>
                                </td>
                                </tr>
                                @endforeach
                              
                              </tbody>
                          </table>
                       </div>
                            <!-- /.table-responsive -->
                 </div>
                        <!-- /.col-lg-4 (nested) -->
                       <div class="col-lg-8">
                            <div id="morris-bar-chart"></div>
                        </div>
                        <!-- /.col-lg-8 (nested) -->
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
 <!-- /#wrapper -->

@endsection
