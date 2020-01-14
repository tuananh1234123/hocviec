@extends('layouts.master')
@section('title', 'Manage Permistion')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                <h4><strong>Permistion</strong></h4>
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-cog"></a>
                    <a href="javascrispt:;" class="fa fa-times"></a>
                </span>
            </header>
            <div class="row mb-3 pb-3 border-bottom-light" style="float:right;margin-top: 5px;margin-bottom: 30px;">
                <div class="col-lg-12">
                    <div class="">
                        <a href="{{route('permistion.create')}}" class="btn btn-primary btn-rounded">
                            <i class="fas fa-plus mr-2"></i>
                            Add Permission </a>
                    </div>
                </div>
            </div>
            <div style="clear: both;"></div>

            <div class="table-responsive" id="users-table-wrapper">
                <form class="cmxform form-horizontal " id="signupForm"
                    action="{{route('permistion.update')}}" method="POST">
                    @csrf
                    <table class="table table-striped table-borderless">

                        <tr>
                            <thead>
                                <th>Name </th>
                                @foreach($roles as $role)
                                <th style="text-align: center;">{{$role->name}}</th>
                                @endforeach
                                <th style="text-align: center;">action</th>
                        </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($permission as $per)
                    
                            <tr >
                                <td>{{$per->name}}</td>
                                @foreach($roles as $role)
                                <td style="text-align: center;"> <input type="checkbox" class="custom-control-input"
                                        name="roles[{{$role->name}}][]" id="id-{{$role->id}}-{{$per->id}}"
                                        value="{{$per->name}}" <?php                                             
                                    $role = Spatie\Permission\Models\Role::findByName($role->name);                                  
                                    if( $role->hasPermissionTo($per->name)== true){
                                        echo "checked ";                                     
                                    }
                                    if($per->name =="edit permission"){
                                        echo " onclick='return false;'";
                                    }
                                 
                                             
                               ?>> </td>
                                @endforeach
                                <td style="text-align: center;"> <a class="btn btn-icon" role="button"
                                        data-toggle="modal" href=""
                                        title="Edit">
                                        <i class="fas fa-quidditch fa-lg" style="color: #1fb5ad;"></i>
                                    </a>

                                    <a href="{{route('permistion.delete',$per->id)}}" class="btn btn-icon"
                                        title="Delete">

                                        <i class="fas fa-trash" style="color: #1fb5ad;"></i>
                                    </a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row mb-3 pb-3 border-bottom-light">
                        <div class="col-lg-12">
                            <div class="float-right">
                                <button type="submit" class="btn btn-primary btn-rounded">
                                    <i class="far fa-edit"></i>
                                    Save Change </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>
<script> 


</script>
@endsection