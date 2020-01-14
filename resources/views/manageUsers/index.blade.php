@extends('layouts.master')
@section('title', 'View Table')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                Editable Table
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href=mnklv"javascript:;" class="fa fa-cog"></a>
                    <a href="javascrispt:;" class="fa fa-times"></a>
                </span>
            </header>
            <div class="panel-body">
                <div class="adv-table editable-table ">
                    <div class="clearfix">
                        <div class="btn-group">
                            <a href="{{route('user.create')}}" data-toggle="modal" class="btn btn-primary">
                                Add New <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <div class="btn-group pull-right">

                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Tools
                                <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="#">Print</a></li>
                                <li><a href="#">Save as PDF</a></li>
                                <li><a href="#">Export to Excel</a></li>
                            </ul>
                        </div>

                        <div class="space15"></div><br>

                        <div class="col-lg-3 pull-right">
                            <form action="" method="GET">
                                <div class="input-group">

                                    <input type="text" class="form-control" name="name" placeholder="Search ">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="submit"><i style="margin-right: 5px;"class="fas fa-search " aria-hidden="true"></i>Search</button>
                                    </span>
                                </div><!-- /input-group -->
                            </form>

                        </div><!-- /.col-lg-6 -->
                        <br><br>
                        <br>

                        <table class="table table-striped table-hover table-bordered" id="editable-sample">
                            <thead >
                                <tr>
                                    <th style="text-align: center ;"> Name</th>
                                    <th style="text-align: center ;"> Email Address</th>
                                    <th style="text-align: center ;"> Role<a href="" style="color:#1EAE98">
                                             (details)</a></th>        
                                    <th style="text-align: center ;"> Edit</th>
                                    <th style="text-align: center ;"> Delete</th>


                                </tr>
                            </thead>
                            <tbody style="text-align: center ;">
                                @foreach ($users as $user)
                                <tr class="">
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                 
                                    <td><?php  
                                    $roles =  $user->getRoleNames();
                                    foreach($roles as $role){
                                        echo "$role  ";
                                    }
                                    ?> </td>

                                    <td><a class="edit" href="{{route('user.goUpdate',$user->id)}}">Edit</a></td>
                                    <td><a class="delete" href="{{route('user.delete',$user->id)}}">Delete</a></td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                        <div class="text-center">
                            {{ $users->links() }}</div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection