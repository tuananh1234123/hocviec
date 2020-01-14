@extends('layouts.master')
@section('title', 'Edit Role')
@section('content')
<div class="col-lg-12">
    <section class="panel">

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Edit Users
                        <span class="tools pull-right">
                            <a class="fa fa-chevron-down" href="javascript:;"></a>
                            <a class="fa fa-cog" href="javascript:;"></a>
                            <a class="fa fa-times" href="javascript:;"></a>
                        </span>
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <form class="cmxform form-horizontal " id="signupForm" method="POST"
                                action="{{ route('role.doUpdate',$roles->id) }}">
                                @csrf

                                <div class="form-group ">
                                    <label for="name" style="text-align: right;" class=" col-lg-2">
                                        Role Name</label>
                                    <div class="col-lg-3">
                                        <input type="text" value=" {{ $roles->name}} " type="text" name="name" required>

                                    </div>
                                    @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                        <button class="btn btn-primary" type="submit">Save</button>

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