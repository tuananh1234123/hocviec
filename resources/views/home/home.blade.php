@extends('layouts.master')
@section('title', 'Home Pages')
@section('content')
 <!--earning graph start-->
 <section class="panel">
                        <header class="panel-heading">
                            Earning Graph <span class="tools pull-right">
            <a href="javascript:;" class="fa fa-chevron-down"></a>
            <a href="javascript:;" class="fa fa-cog"></a>
            <a href="javascript:;" class="fa fa-times"></a>
            </span>
                        </header>
                        <div class="panel-body">

                            <div id="graph-area" class="main-chart">
                            </div>
                            <div class="region-stats">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="region-earning-stats">
                                            This year total earning <span>$68,4545,454</span>
                                        </div>
                                        <ul class="clearfix location-earning-stats">
                                            <li class="stat-divider">
                                                <span class="first-city">$734503</span>
                                                Rocky Mt,NC </li>
                                            <li class="stat-divider">
                                                <span class="second-city">$734503</span>
                                                Dallas/FW,TX </li>
                                            <li>
                                                <span class="third-city">$734503</span>
                                                Millville,NJ </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5">
                                        <div id="world-map" class="vector-stat">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--earning graph end-->s
  <!--mini statistics start-->
  <div class="row">
                <div class="col-md-3">
                    <section class="panel">
                        <div class="panel-body">
                            <div class="top-stats-panel">
                                <div class="gauge-canvas">
                                    <h4 class="widget-h">Monthly Expense</h4>
                                    <canvas width=160 height=100 id="gauge"></canvas>
                                </div>
                                <ul class="gauge-meta clearfix">
                                    <li id="gauge-textfield" class="pull-left gauge-value"></li>
                                    <li class="pull-right gauge-title">Safe</li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-3">
                    <section class="panel">
                        <div class="panel-body">
                            <div class="top-stats-panel">
                                <div class="daily-visit">
                                    <h4 class="widget-h">Daily Visitors</h4>
                                    <div id="daily-visit-chart" style="width:100%; height: 100px; display: block">

                                    </div>
                                    <ul class="chart-meta clearfix">
                                        <li class="pull-left visit-chart-value">3233</li>
                                        <li class="pull-right visit-chart-title"><i class="fa fa-arrow-up"></i> 15%</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-3">
                    <section class="panel">
                        <div class="panel-body">
                            <div class="top-stats-panel">
                                <h4 class="widget-h">Top Advertise</h4>
                                <div class="sm-pie">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-3">
                    <section class="panel">
                        <div class="panel-body">
                            <div class="top-stats-panel">
                                <h4 class="widget-h">Daily Sales</h4>
                                <div class="bar-stats">
                                    <ul class="progress-stat-bar clearfix">
                                        <li data-percent="50%"><span class="progress-stat-percent pink"></span></li>
                                        <li data-percent="90%"><span class="progress-stat-percent"></span></li>
                                        <li data-percent="70%"><span class="progress-stat-percent yellow-b"></span></li>
                                    </ul>
                                    <ul class="bar-legend">
                                        <li><span class="bar-legend-pointer pink"></span> New York</li>
                                        <li><span class="bar-legend-pointer green"></span> Los Angels</li>
                                        <li><span class="bar-legend-pointer yellow-b"></span> Dallas</li>
                                    </ul>
                                    <div class="daily-sales-info">
                                        <span class="sales-count">1200 </span> <span class="sales-label">Products Sold</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!--mini statistics end-->
<div class="row"> 
<!--mini statistics start-->
<div class="row">
    <div class="col-md-3">  
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon orange"><i class="fa fa-gavel"></i></span>
            <div class="mini-stat-info">
                <span>320</span>
                New Order Received
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon tar"><i class="fa fa-tag"></i></span>
            <div class="mini-stat-info">
                <span>22,450</span>
                Copy Sold Today
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon pink"><i class="fa fa-money"></i></span>
            <div class="mini-stat-info">
                <span>34,320</span>
                Dollar Profit Today
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon green"><i class="fa fa-eye"></i></span>
            <div class="mini-stat-info">
                <span>32720</span>
                Unique Visitors
            </div>
        </div>
    </div>
</div>
<!--mini statistics end-->


    <div class="col-md-4" style="float:right">
        <!--chat start-->
        <section class="panel">
            <header class="panel-heading">
                Chat <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-cog"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                </span>
            </header>
            <div class="panel-body">
                <div class="chat-conversation">
                    <ul class="conversation-list">
                        <li class="clearfix">
                            <div class="chat-avatar">
                                <img src="images/chat-user-thumb.png" alt="male">
                                <i>10:00</i>
                            </div>
                            <div class="conversation-text">
                                <div class="ctext-wrap">
                                    <i>John Carry</i>
                                    <p>
                                        Hello!
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="clearfix odd">
                            <div class="chat-avatar">
                                <img src="images/chat-user-thumb-f.png" alt="female">
                                <i>10:00</i>
                            </div>
                            <div class="conversation-text">
                                <div class="ctext-wrap">
                                    <i>Lisa Peterson</i>
                                    <p>
                                        Hi, How are you? What about our next meeting?
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="chat-avatar">
                                <img src="images/chat-user-thumb.png" alt="male">
                                <i>10:00</i>
                            </div>
                            <div class="conversation-text">
                                <div class="ctext-wrap">
                                    <i>John Carry</i>
                                    <p>
                                        Yeah everything is fine
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="clearfix odd">
                            <div class="chat-avatar">
                                <img src="images/chat-user-thumb-f.png" alt="female">
                                <i>10:00</i>
                            </div>
                            <div class="conversation-text">
                                <div class="ctext-wrap">
                                    <i>Lisa Peterson</i>
                                    <p>
                                        Wow that's great
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-xs-9">
                            <input type="text" class="form-control chat-input" placeholder="Enter your text">
                        </div>
                        <div class="col-xs-3 chat-send">
                            <button type="submit" class="btn btn-default">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        section
        @endsection