@extends('admin.master')
@section('content')
<div id="page-wrapper">
          <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">إضافة منتج</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
             <div class="row">
                  <div class="col-lg-6 col-md-6">
                     <form role="form" method="post" action="{{route('add_product')}}"  enctype='multipart/form-data'>
                                                <input type="hidden" name="_token" value="{{ csrf_token()}}">

                                        <div class="form-group">
                                            <label>الأسم:</label>
                                            <input class="form-control" type="text" name="name" placeholder="ادخل الأسم" required>
                                        </div>
                                        <div class="form-group">
                                            <label>السعر:</label>
                                            <input class="form-control" placeholder="ادخل السعر" name="price" required>
                                        </div>
                                      
                                        <div class="form-group">
                                            <label>الصورة:</label>
                                            <input type="file" name="prod_img" required>
                                        </div>
                                        
                                        <div class="form-group">
                                        <label>القسم:</label>
                                        <select class="form-control multi_categories"  name="category" required>
                                        @foreach(App\Collection::collections() as $collection)
                                             <option value="{{$collection->name}}">{{$collection->name}}</option>
                                             @endforeach
                                           </select>
                                        </div>
                                       
                                        <div class="form-group">
                                        <label>الألوان:</label>
                                        <select class="form-control multi_colors" multiple="multiple" name="colors[]" required>
                                        @foreach(App\Product::colors() as $key=>$color)
                                             <option value="{{$color}}">{{$color}}</option>
                                             @endforeach
                                           </select>
                                        </div>

                                        <div class="form-group">
                                        <label>الحجم:</label>
                                        <select class="form-control multi_sizes" multiple="multiple" name="sizes[]" required>
                                        @foreach(App\Product::sizes() as $key=>$size)
                                             <option value="{{$size}}">{{$size}}</option>
                                             @endforeach
                                      
                                           </select>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>الكمية:</label>
                                            <input class="form-control" type="text" placeholder="ادخل الكمية" name="amount" required>
                                        </div>

                                        <div class="form-group">
                                            <label>الوصف:</label>
                                            <textarea class="form-control"  placeholder="ادخل الوصف " name="discribe" ></textarea>
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
                            <i class="fa fa-bar-chart-o fa-fw"></i> المنتجات
                            
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
                                                    <th>الأسم</th>
                                                    <th>القسم</th>
                                                    <th>السعر</th>
                                                    <th>الصورة</th>
                                                    <th>الكمية</th>
                                                    <th>الألوان</th>
                                                    <th>الأحجام</th>
                                                    <th>الوصف</th>
													<th>التحكم</th

                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach(App\Product::products() as $product)
                                            <form method="post" action="{{route('product_update',$product->id)}}"  enctype="multipart/form-data">
                                            <input type="hidden" name="_token" value="{{ csrf_token()}}">

                                                <tr>
                                                    <td>{{$product->id}}</td>
                                                    <td ><input name="name" value="{{$product->name}}" required></td>
                                                    <td>
                                                    <select class="form-control multi_categories"  name="category" required>
                                                        <option selected="selected" value="{{$product->collections()->value('name')}}">{{$product->collections()->value('name')}}</option>
                                                          @foreach(App\Collection::collections() as $collection)
                                                            <option value="{{$collection->name}}">{{$collection->name}}</option>
                                                             @endforeach
                                                    </select>
                                                     </td>
                                                    <td><input name="price" value="{{$product->price}}" required> جنيه</td>
                                                    <td><img src="{{asset('img/products/'.$product->image)}}" /></td>
                                                    <td><input name="amount" value="{{$product->amount}}" required></td>
                                                    <td>
                                                       <select class="form-control multi_colors" multiple="multiple" name="colors[]" required>
                                                         @foreach(explode(",",$product->color) as $c)
                                                          <option value="{{$c}}" selected="selected">{{$c}}</option>
                                                          
                                                             @foreach(App\Product::colors() as $key=>$color)
                                                                @if($c != $color)
                                                                <option value="{{$color}}">{{$color}}</option>
                                                                @endif
                                                             @endforeach
                                                        @endforeach
                                                       </select>
                                                    </td>
                                                    <td>
                                                       <select class="form-control multi_sizes" multiple="multiple" name="sizes[]" required>
                                                       @foreach(explode(",",$product->size) as $s)
                                                          <option value="{{$s}}" selected="selected">{{$s}}</option>
                                                          
                                                             @foreach(App\Product::sizes() as $key=>$size)
                                                                @if($s != $size)
                                                               <option value="{{$size}}">{{$size}}</option>
                                                               @endif
                                                             @endforeach
                                                       @endforeach
                                      
                                                        </select>
                                                    </td>
                                                    <td><input name="discribe" value="{{$product->description}}"></td>
                                                    <td class="actions">
                                                    <button  style="float:right"  type="submit" class="btn btn-info btn-md" id="product_edit" data-toggle="modal" data-target="#myModal">تعديل</button>
                                                    </form>
                                                    <form method="get" action="{{route('delete_product',$product->id)}}" >
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
