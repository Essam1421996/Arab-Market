@extends('admin.master')
@section('content')
<div id="page-wrapper">
          <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">إضافة قسم</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
             <div class="row">
                  <div class="col-lg-6 col-md-6">
                  <form role="form" method="post" action="{{route('add_collection')}}"  enctype='multipart/form-data'>
                                                <input type="hidden" name="_token" value="{{ csrf_token()}}">

                                        <div class="form-group">
                                            <label>الأسم:</label>
                                            <input class="form-control" type="text" name="name" placeholder="ادخل الأسم" required>
                                        </div>
                                        
                                        <div class="form-group">
                                        <label>النوع:</label>
                                        <select class="form-control multi_categories"  name="category"  required>
                                        @foreach(App\Collection::categories() as $key=>$category)
                                             <option value="{{$category}}">{{$category}}</option>
                                             @endforeach
                                           </select>
                                        </div>
                                      
                                        <div class="form-group">
                                            <label>الصورة:</label>
                                            <input type="file" name="category_img" required>
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
                            <i class="fa fa-bar-chart-o fa-fw"></i> الأقسام
                            
                        </div>
                        <!-- /.panel-heading -->
                  <div class="panel-body">
                     <div class="row">
                                <div class="col-lg-9">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>الأسم</th>
                                                    <th>النوع</th>
                                                    <th>الصورة</th>
													<th>التحكم</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                               
                                                    @foreach(App\Collection::collections() as $collection)
                                                    <form method="post" action="{{route('collection_update',$collection->id)}}"  enctype="multipart/form-data">
                                                       <input type="hidden" name="_token" value="{{ csrf_token()}}">

                                                    <tr>
                                                    <td>{{$collection->id}}</td>
                                                    <td><input name="name" value="{{$collection->name}}" required></td>
                                                    <td>
                                                      <select class="form-control multi_categories"  name="category"  required>
                                                            <option value="{{$collection->category}}" selected="selected">{{$collection->category}}</option>
                                                            @foreach(App\Collection::categories() as $key=>$category)
                                                               @if($category != $collection->category)
                                                                 <option value="{{$category}}">{{$category}}</option>
                                                                @endif

                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td> <img src="{{asset('img/shop/'.$collection->image)}}" alt=""></td>
                                                    
                                                     <td class="actions">
                                                        <button  style="float:right"  type="submit" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">تعديل</button>
                                                    </form>
                                                    <form method="get" action="{{route('delete_collection',$collection->id)}}" >
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
