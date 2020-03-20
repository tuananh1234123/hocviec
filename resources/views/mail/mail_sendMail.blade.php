@extends('mail.mail_index')
@section('title', 'Send Mail')
@section('case', 'Compose Mail')
{{-- @section('breadcrums')
{{ Breadcrumbs::render('mail_send') }}
@endsection --}}
@section('content_mail')


<!-- 
main compose Mail
-->

<div class="panel-body">
    <form role="form-horizontal" method="POST" action="{{route('mail.send')}}" enctype="multipart/form-data">
        @csrf
        <div class="compose-btn pull-right">
            <button class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Send</button>
            <button class="btn btn-sm"><i class="fa fa-times"></i> Discard</button>
            <button class="btn btn-sm">Draft</button>
        </div>
        <div class="compose-mail">
            <div class="form-group">
                <?php $tick = \Session::get('group'); ?>
                @foreach ($tick['tick'] as $item)
                @if($item=="Anyone")
                <label for="to" class="">To:</label>
                <input type="text" tabindex="1" name="to" id="to" class="form-control">
                @endif
                @endforeach
                <div class="compose-options">
                    <a onclick="$(this).hide(); $('#cc').parent().removeClass('hidden'); $('#cc').focus();"
                        href="javascript:;">Cc</a>
                    <a onclick="$(this).hide(); $('#bcc').parent().removeClass('hidden'); $('#bcc').focus();"
                        href="javascript:;">Bcc</a>
                </div>

            </div>
            @error('to')
            <strong style="color: #FF6C60">{{ $message }}</strong>
            @enderror
        </div>
        <div class="form-group hidden">
            <label for="cc" class="">Cc:</label>
            <input type="text" name="cc" tabindex="2" id="cc" class="form-control">
            @error('cc')
            <strong style="color: #FF6C60">{{ $message }}</strong>
            @enderror
        </div>

        <div class="form-group hidden">
            <label for="bcc" class="">Bcc:</label>
            <input type="text" name="bcc" tabindex="2" id="bcc" class="form-control">
            @error('bcc')
            <strong style="color: #FF6C60">{{ $message }}</strong>
            @enderror
        </div>

        <div class="form-group">
            <label for="subject" class="">Subject:</label>
            <input type="text" name="Subject" tabindex="1" placeholder="" id="subject" class="form-control">
            @error('Subject')
            <strong style="color: #FF6C60">{{ $message }}</strong>
            @enderror
        </div>

        <div class="compose-editor">
            <textarea class="wysihtml5 form-control" name="content" rows="9"></textarea>
            @error('content')
            <strong style="color: #FF6C60">{{ $message }}</strong>
            @enderror
            <input type="file" name="files[]" accept="file_extension|image/*|media_type" class="default"
                multiple="true" />
            @error('files.*')
            <strong style="color: #FF6C60">{{ $message }}</strong>
            @enderror
        </div>
        <div class="compose-btn">
            <button id="" class="btn btn-primary btn-sm"><i class="fa fa-check"></i>
                Send</button>
            <button class="btn btn-sm"><i class="fa fa-times"></i> Discard</button>
            <button class="btn btn-sm">Draft</button>
        </div>

    </form>
</div>


@endsection