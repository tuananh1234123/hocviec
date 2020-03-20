@extends('layouts.master')
@section('title', 'Send Mail')
@section('content')
<!-- page start-->

<div class="row">
    <div class="col-sm-3">
        <section class="panel">
            <div class="panel-body">
                <a href="" class="btn btn-compose"
                    onclick="if(rs = prompt('You want click me ? yes or no ')){ window.open('{{route('home')}}',alert(rs+' ? stupid , i have been account of you'));}else{alert('thank you tried click me , lol')}">
                    Compose Mail </a>
                <ul class=" nav nav-pills nav-stacked mail-nav">
                    <li class="active"><a href="{{route('mail')}}"> <i class="fa fa-inbox"></i> Inbox <span
                                class="label label-danger pull-right inbox-notification">9</span></a></li>
                    <li><a data-toggle="modal" data-target="#myModal" href="#"> <i class="fa fa-envelope-o"></i> Send
                            Mail</a></li>
                    <li><a href="#"> <i class="fa fa-certificate"></i> Important</a></li>
                    <li><a href="#"> <i class="fa fa-file-text-o"></i> Drafts <span
                                class="label label-info pull-right inbox-notification">123</span></a>
                        </a></li>
                    <li><a href="{{route('clear')}}"> <i class="fa fa-trash-o"></i> Trash</a></li>
                </ul>
            </div>
        </section>

        <section class="panel">
            <div class="panel-body">
                <ul class="nav nav-pills nav-stacked labels-info ">
                    <li>
                        <h4>Buddy online</h4>
                    </li>
                    <li> <a href="#"> <i class="fa fa-comments-o text-success"></i> Jonathan Smith <p>I do not
                                think</p></a> </li>
                    <li> <a href="#"> <i class="fa fa-comments-o text-danger"></i> iRon <p>Busy with coding</p>
                        </a> </li>
                    <li> <a href="#"> <i class="fa fa-comments-o text-muted "></i> Anjelina Joli <p>I out of
                                control</p></a></li>
                    <li> <a href="#"> <i class="fa fa-comments-o text-muted "></i> Samual Daren <p>I am not here
                            </p></a></li>
                    <li> <a href="#"> <i class="fa fa-comments-o text-muted "></i> Tis man <p>I do not think</p>
                        </a> </li>
                </ul>
                <a href="#"> + Add More</a>

                <div class="inbox-body text-center inbox-action">
                    <div class="btn-group">
                        <a class="btn mini btn-default" href="javascript:;">
                            <i class="fa fa-power-off"></i>
                        </a>
                    </div>
                    <div class="btn-group">
                        <a class="btn mini btn-default" href="javascript:;">
                            <i class="fa fa-cog"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="col-sm-9">
        <section class="panel">
            <header class="panel-heading wht-bg">
                <h4 class="gen-case">@yield('case')
                    <form action="#" class="pull-right mail-src-position">
                        <div class="input-append">
                            <input type="text" class="form-control " placeholder="Search Mail">
                        </div>
                    </form>
                </h4>
            </header>
            <div class="panel-body minimal">
                <!-- Mail content-->
                @yield('content_mail')
            </div>
        </section>
    </div>
</div>

<!-- Modal content -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">You want send email by ? </h4>
            </div>
            <!-- Modal body -->
            <form action="{{route('mail.go_sendMail')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div id="columns" style="margin:auto;padding:auto">
                        <div id="column1" style="text-align: center;">
                            <div class="modal-header" style="background-color:white">
                                <h4 class="modal-title">Group roles
                                    <input style="background-color: blue" value="GroupRoles" class="form-control"
                                        name="tick[]" id="tick" type="checkbox">
                                </h4>
                            </div>
                            <br>
                            <select class="hidden" disabled name="roleId" id="choice" style="color:#1fb5ad">
                                <?php $groupRoles = json_decode(Redis::get("roles"));?>
                                @foreach($groupRoles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div id="column2" style="text-align: center;">
                            <div class="modal-header">
                                <h4 class="modal-title">Anyone
                                    <input value="Anyone" class="form-control" name="tick[]" id="tick2" type="checkbox">
                                </h4>
                            </div>

                        </div>
                        <div id="column3" style="text-align: center;">
                            <div class="modal-header">
                                <h4 class="modal-title">All Customer
                                    <input value="all" class="form-control" name="tick[]" id="tick3" type="checkbox">
                                </h4>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-primary mb-2" data-dismiss="">Close</button> --}}
                    <button id="buttonMail" class="btn btn-primary">Compose Mail</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- page end-->


@endsection