@extends('Components.layout')

@section('head')
    <!-- 1. Addchat css -->
    <link href="<?php echo asset('assets/addchat/css/addchat.min.css') ?>" rel="stylesheet">

    <!-- 3. AddChat JS -->
    <!-- Modern browsers -->
    <script type="module" src="<?php echo asset('assets/addchat/js/addchat.min.js') ?>"></script>
    <!-- Fallback support for Older browsers -->
    <script nomodule src="<?php echo asset('assets/addchat/js/addchat-legacy.min.js') ?>"></script>
@endsection

@section('content')
    <!-- 2. AddChat widget -->
    <div id="addchat_app"
         data-baseurl="<?php echo url('') ?>"
         data-csrfname="<?php echo 'X-CSRF-Token' ?>"
         data-csrftoken="<?php echo csrf_token() ?>"
    ></div>
@endsection