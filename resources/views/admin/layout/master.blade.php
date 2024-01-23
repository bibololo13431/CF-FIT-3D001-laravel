<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="{{asset('admin_public/images/fav.ico')}}">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Quicksand:300,400,500" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="{{asset('admin_public/css/font-awesome.min.css')}}">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="{{asset('admin_public/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('admin_public/css/mob.css')}}">
    <link rel="stylesheet" href="{{asset('admin_public/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('admin_public/css/materialize.css')}}" />
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <!--== MAIN CONTRAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            @include('admin.pages.userbar')
            @yield('content')
        </div>
    </div>
        
    <!--== BOTTOM FLOAT ICON ==-->
    <section>
        <div class="fixed-action-btn vertical">
            {{-- <a class="btn-floating btn-large red pulse">
                <i class="large material-icons">mode_edit</i>
            </a> --}}
            <ul>
                <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a>
                </li>
                <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a>
                </li>
                <li><a class="btn-floating green"><i class="material-icons">publish</i></a>
                </li>
                <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a>
                </li>
            </ul>
        </div>
    </section>

    <!--======== SCRIPT FILES =========-->
    <script src="{{asset('admin_public/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin_public/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin_public/js/materialize.min.js')}}"></script>
    <script src="{{asset('admin_public/js/custom.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
    @yield('js-custom')
</body>


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Dec 2023 18:13:32 GMT -->
</html>