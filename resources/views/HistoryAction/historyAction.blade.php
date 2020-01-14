@extends('layouts.master')
@section('title', 'History Action')
@section('content')

<div class="card-body">

    <div style="margin-bottom:20px;float:right">
     
        <form class="form-inline" method="GET">
    
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control" id="search" name="search" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-primary mb-2"><img src="{{ asset('admin') }}/images/321830.png" alt="sai đường dẫn"style="height: 20px;width: 20px;"> Search</button>
        </form>
    </div>
    <div class="table-responsive" style="margin-top:30px"> 
        <table class="table table-striped table-hover table-bordered dataTable">
            <thead>
                <tr>
                    <th class="min-width-150">User</th>
                    <th>IP Address</th>
                    <th class="min-width-200">Message</th>
                    <th class="min-width-200">Log Time</th>
                    <th class="text-center">More Info</th>
                </tr>
            </thead>
            <tbody>
                @foreach($action as $at)
                <tr>
                    <td>
                        <a href="" data-toggle="tooltip" title="" data-original-title="View Activity Log">
                            <?php 
                            if($at ->users===null)
                            {
                                 echo  "The user has been deleted";
                              
                            } else{
                                echo  $at ->users->name ;
                            }                          ?>

                        </a>
                    </td>
                    <td>{{$at->ip_address}}</td>
                    <td>{{$at->description}}</td>
                    <td>{{$at->created_at}}


                    </td>
                    <td class="text-center">
                        <div id="main">

                            <a tabindex="0" role="button" class="btn btn-icon" data-toggle="tooltip"
                                data-placement="bottom" title="{{$at->user_agent}}" data-original-title="User Agent">
                                <img src="{{ asset('admin') }}/images/moreinfor.jpg" alt="sai đường dẫn"style="height: 20px;width: 20px;">
                            </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div style="text-align: center;">{{$action->links() }}</div>
    </div>
</div>

@endsection