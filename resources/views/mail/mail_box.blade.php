@extends('mail.mail_index')
@section('case','Inbox (32)')
@section('content_mail')
<div class="panel-body minimal">
    <div class="mail-option">
        <div class="chk-all">
            <div class="pull-left mail-checkbox ">
                <input type="checkbox" class="">
            </div>

            <div class="btn-group">
                <a data-toggle="dropdown" href="#" class="btn mini all">
                    All
                    <i class="fa fa-angle-down "></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#"> None</a></li>
                    <li><a href="#"> Read</a></li>
                    <li><a href="#"> Unread</a></li>
                </ul>
            </div>
        </div>

        <div class="btn-group">
            <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#"
                class="btn mini tooltips">
                <i class=" fa fa-refresh"></i>
            </a>
        </div>
        <div class="btn-group hidden-phone">
            <a data-toggle="dropdown" href="#" class="btn mini blue">
                More
                <i class="fa fa-angle-down "></i>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
            </ul>
        </div>
        <div class="btn-group">
            <a data-toggle="dropdown" href="#" class="btn mini blue">
                Move to
                <i class="fa fa-angle-down "></i>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
            </ul>
        </div>

        <ul class="unstyled inbox-pagination">
            <li><span>1-50 of 124</span></li>
            <li>
                <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
            </li>
            <li>
                <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
            </li>
        </ul>
    </div>
    <div class="table-inbox-wrap ">
        <table class="table table-inbox table-hover">
            <tbody>
                <tr class="unread">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                    <td class="view-message  dont-show"><a href="mail_view.html">ABC Company</a>
                    </td>
                    <td class="view-message "><a href="mail_view.html">Lorem ipsum dolor imit
                            set.</a></td>
                    <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                    <td class="view-message  text-right">12.10 AM</td>
                </tr>
                <tr class="unread">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                    <td class="view-message dont-show"><a href="mail_view.html">Mr Bean</a></td>
                    <td class="view-message"><a href="mail_view.html">Hi Bro, Lorem ipsum dolor
                            imit</a></td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">Jan 11</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                    <td class="view-message dont-show"><a href="mail_view.html">Jonathan Smith</a>
                    </td>
                    <td class="view-message"><a href="mail_view.html">Lorem ipsum dolor sit amet</a>
                    </td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">March 15</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                    <td class="view-message dont-show"><a href="mail_view.html">Facebook</a></td>
                    <td class="view-message"><a href="mail_view.html">Dolor sit amet, consectetuer
                            adipiscing</a></td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">June 01</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                    <td class="view-message dont-show"><a href="mail_view.html">Tasi man <span
                                class="label label-danger pull-right">urgent</span></a></td>
                    <td class="view-message"><a href="mail_view.html">Lorem ipsum dolor sit amet</a>
                    </td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">May 2</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                    <td class="view-message dont-show"><a href="mail_view.html">Facebook</a></td>
                    <td class="view-message"><a href="mail_view.html">Dolor sit amet, consectetuer
                            adipiscing</a></td>
                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                    <td class="view-message text-right">March 14</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                    <td class="view-message dont-show">Bafent</td>
                    <td class="view-message">Lorem ipsum dolor sit amet</td>
                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                    <td class="view-message text-right">December 19</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                    <td class="view-message dont-show">Facebook <span
                            class="label label-success pull-right">megazine</span></td>
                    <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing
                    </td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">March 04</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                    <td class="view-message dont-show">Dorimon</td>
                    <td class="view-message view-message">Lorem ipsum dolor sit amet</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">June 13</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                    <td class="view-message dont-show">Facebook <span class="label label-info pull-right">family</span>
                    </td>
                    <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing
                    </td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">March 24</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                    <td class="view-message dont-show">Mogli Marion</td>
                    <td class="view-message">Lorem ipsum dolor sit amet</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">February 09</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                    <td class="dont-show">Facebook</td>
                    <td class="view-message">Dolor sit amet, consectetuer adipiscing</td>
                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                    <td class="view-message text-right">May 14</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                    <td class="view-message dont-show">Samual</td>
                    <td class="view-message">Lorem ipsum dolor sit amet</td>
                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                    <td class="view-message text-right">February 25</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                    <td class="dont-show">Facebook</td>
                    <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing
                    </td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">March 14</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                    <td class="view-message dont-show">Dk brain</td>
                    <td class="view-message">Lorem ipsum dolor sit amet</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">April 07</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                    <td class="view-message dont-show">Twitter</td>
                    <td class="view-message">Dolor sit amet, consectetuer adipiscing</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">July 14</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                    <td class="view-message dont-show">Samual</td>
                    <td class="view-message">Lorem ipsum dolor sit amet</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">August 10</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                    <td class="view-message dont-show">Facebook</td>
                    <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing
                    </td>
                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                    <td class="view-message text-right">April 14</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                    <td class="view-message dont-show">Morlig doen</td>
                    <td class="view-message">Lorem ipsum dolor sit amet</td>
                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                    <td class="view-message text-right">June 16</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                    <td class="view-message dont-show">Margarita does</td>
                    <td class="view-message">Lorem ipsum dolor sit amet</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">August 30</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                    <td class="view-message dont-show">Facebook</td>
                    <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing
                    </td>
                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                    <td class="view-message text-right">May 15</td>
                </tr>
            </tbody>
        </table>

    </div>
</div>
</section>
</div>
</div>

@endsection