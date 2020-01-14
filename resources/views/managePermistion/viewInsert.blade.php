@extends('layouts.master')
@section('title', 'Manage Permistion')
@section('content')
<div class="col-lg-12">
    <section class="panel">

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Insert Permistion
                        <span class="tools pull-right">
                            <a class="fa fa-chevron-down" href="javascript:;"></a>
                            <a class="fa fa-cog" href="javascript:;"></a>
                            <a class="fa fa-times" href="javascript:;"></a>
                        </span>
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <form class="cmxform form-horizontal " id="signupForm" method="POST"
                                action="{{ route('permistion.doCreate') }}">
                                @csrf

                                <div class="form-group ">
                                    <label for="name" style="text-align: right;" class=" col-lg-2">
                                        Role Name</label>
                                    <div class="col-lg-5">
                                        <input type="text"  type="text" placeholder = " Permistion"name="name"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                        <button class="btn btn-primary" type="submit">Insert</button>
                                      
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</div>

@endsection