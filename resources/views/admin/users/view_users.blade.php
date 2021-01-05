@extends('admin.layouts.master')
@section('title','View Users')
@section('content')

<!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-eye"></i>
               </div>
               <div class="header-title">
                  <h1>View Users</h1>
                  <small>Users List</small>
               </div>
            </section>
            @if(Session::has('flash_message_error'))
            <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>   
            </button>
               <strong>{{session('flash_message_error')}}</strong>
            </div>
            @endif
            @if(Session::has('flash_message_success'))
            <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>   
            </button>
               <strong>{{session('flash_message_success')}}</strong>
            </div>
            @endif

            <div id="message_success" style="display: none;" class="alert alert-sm alert-success">Status Enabled</div>
            <div id="message_error" style="display: none;" class="alert alert-sm alert-danger">Status Disabled</div>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                                 <h4>View Users</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <!-- <div class="btn-group">
                              <div class="buttonexport" id="buttonlist"> 
                                 <a class="btn btn-add" href="{{url('/past-orders')}} "> <i class="fa fa-plus"></i> Past Orders
                                 </a>  
                              </div>
                            </div>   -->
                           <div class="table-responsive">
                              <table id="table_id" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>Id</th>
                                       <th>User Name</th>
                                       <th>User Email</th>
                                       <th>Status</th>
                                       <th>Block Status</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                  @foreach($users as $user)
                                    <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                    <input type="checkbox" class="UserStatus btn btn-success" rel="{{$user->id}}" data-toggle="toggle" data-on="Active" data-off="Inactive" data-onstyle="success" data-offstyle="danger"
                                   @if($user['status']=="1") checked @endif >

                                    <div id="myElem" style="display: none;" class="alert alert-success">Status Enabled</div>

                                 </td>
                                  <td>
                                    <input type="checkbox" class="BlockUserStatus btn btn-success" rel="{{$user->id}}" data-toggle="toggle" data-on="Block" data-off="Unblock" data-onstyle="success" data-offstyle="danger"
                                   @if($user['block_status']=="1") checked @endif >

                                    <div id="myElem" style="display: none;" class="alert alert-success">Status Enabled</div>

                                 </td>                               
                                       <td>
                                          <a href="{{url('/edit-users/'.$user->id)}}" class="btn btn-add btn-sm"><i class="fa fa-pencil"></i></a>
                                          <!-- <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> </a> -->
                                       </td>
                                    </tr>
                                    @endforeach
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->

@endsection