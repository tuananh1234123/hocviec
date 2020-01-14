@extends('layouts.master')
@section('title','Edit Pages')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">

            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <h4><strong>Edit Users</strong></h4>
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                            </span>
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal " id="signupForm" method="POST" action="">
                                    @csrf

                                    <div class="form-group ">
                                        <label for="name" class="control-label col-lg-3">Full
                                            Name</label>
                                        <div class="col-lg-6">
                                            <input type="text" placeholder="Full Name" id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ $user->name }}" required autocomplete="name" autofocus>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                    </div>



                                    <div class="form-group ">
                                        <label for="password" class="control-label col-lg-3">Password</label>
                                        <div class="col-lg-6">
                                            <input id="password" placeholder="Password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" value="" autocomplete="new-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="confirm_password" class="control-label col-lg-3">Confirm
                                            Password</label>
                                        <div class="col-lg-6">
                                            <input id="password-confirm" placeholder="password-confirm" value=""
                                                type="password" class="form-control" name="password_confirmation"
                                                required autocomplete="new-password">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="role" class="control-label col-lg-3">Role</label>
                                        <div class="col-lg-6">
                                            <select name="roles_id" class="form-control">
                                                <?php $roleUser = $user->getRoleNames()->get(0);?>
                                                @foreach($roles as $role)
                                                <option
                                                    <?php 
                                               
                                                    if ($roleUser !=null && $roleUser== $role->name){ echo " selected";}  ?>
                                                    value="{{ $role->id }}"> {{$role->name}}
                                                </option>
                                                @endforeach
                                                <option <?php if ($roleUser ==null ) { echo "selected";}  ?>
                                                    value="9999">
                                                    Trống
                                                </option>

                                            </select>
                                        </div>
                                    </div>



                                    <div class="form-group ">
                                        <label for="agree" class="control-label col-lg-3 col-sm-3">Agree
                                            to Our Policy</label>
                                        <div class="col-lg-6 col-sm-9">
                                            <input type="checkbox" style="width: 20px" class="checkbox form-control"
                                                id="agree" name="agree" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="newsletter" class="control-label col-lg-3 col-sm-3">Receive the
                                            Newsletter</label>
                                        <div class="col-lg-6 col-sm-9">
                                            <input type="checkbox" style="width: 20px" class="checkbox form-control"
                                                id="newsletter" name="newsletter" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                            <button class="btn btn-default" type="button">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            @endsection