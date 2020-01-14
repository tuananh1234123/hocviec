@extends('layouts.master')
@section('title', 'Manage Role')
@section('content')
<header class="panel-heading">

    <div class="col-lg-12 d-flex align-items-center py-3">


        <ol class="breadcrumb mb-0 font-weight-light">
            <li class="breadcrumb-item">
                <a href="{{route('home')}}" class="text-muted">
                    <i class="fa fa-home " style="color:#1fb5ad"></i>
                </a>
            </li>

            <li class="breadcrumb-item active">
                <h4><strong> /Role </strong></h4>
            </li>
        </ol>
    </div>
    <span class="tools pull-right">
        <a href="javascript:;" class="fa fa-chevron-down" aria-hidden="true"></a>
        <a href="javascript:;" class="fa fa-cog" aria-hidden="true"></a>
        <a href="javascript:;" class="fa fa-times" aria-hidden="true"></a>
    </span>
</header>
<div class="col-lg-12">
    <div class="panel-body">


        <section id="unseen">
            <div class="row mb-3 pb-3 border-bottom-light">
                <div class="col-lg-12">
                    <div class="float-right" style="float:right;">
                        <a href="{{route('role.create')}}" class="btn btn-primary btn-rounded" title="Create">
                            Create Role</a>
                    </div>
                </div>
            </div>
            <br>
            <table class="table table-bordered table-striped table-condensed">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>RoleName</th>

                        <th class="numeric"># of users with this role</th>
                        <th class="numeric" style="text-align: center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($roles as $role)
                    <tr>
                        <td>{{$role->id}}</td>
                        <td>{{$role->name}}</td>

                        <td class="numeric">
                            <?php
                                if($role->users() ==null){echo '';}
                                else{ $users=null;
                                    $count_user=0;
                                    $users = App\Models\User::role($role->name)->get();
                                    foreach($users as $user){
                                    $count_user=$count_user+1;
                                    }  
                                    echo $count_user;}
                            ?>
                        <td style="text-align: center;">
                            <a class="btn btn-icon" role="button" data-toggle="modal"
                                href="{{ route('role.update',$role->id) }}" title="Edit">
                                <i class="far fa-edit" style="color: #1fb5ad;"></i>
                            </a>
                            <a href="{{route('role.delete',$role->id)}}" class="btn btn-icon" title="Delete">
                                <i class="fas fa-trash" style="color: #1fb5ad;"></i>
                            </a>

                        </td>


                    </tr>
                    <!-- face role model edit-->

                    @endforeach
                </tbody>
            </table>

        </section>

    </div>
</div>

@endsection