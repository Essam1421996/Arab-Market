@extends('admin.master')
@section('content')
<div id="page-wrapper">
            
     <div class="row">
              <div class="col-lg-12">
                    
                  <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> المستخدمين
                            
                            </div>
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
                                    <th>البريد الإلكتروني</th>
										<th>التحكم</th>

                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(App\User::users() as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td><input value="{{$user->name}}" type="text"></td>
                                    <td>{{$user->email}}</td>
                                    <td class="actions">
                                
                                    <form method="get" action="{{route('delete_user',$user->id)}}" >
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
