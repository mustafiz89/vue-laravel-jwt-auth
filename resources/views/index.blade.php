<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Inventory Management system">
        <meta name="keywords" content="Inventory">
        <meta name="author" content="stacks">
        <meta name="csrf-token"  content="{{csrf_token()}}">
        <link href="{{asset('public/css/app.css')}}" rel="stylesheet">
        <!-- Font Awesome CSS -->
        <link href="{{asset('public/assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        
        <!-- Custom CSS -->
        <link href="{{asset('public/assets/css/style.css')}}" rel="stylesheet" type="text/css" />

</head>

<body class="adminbody">
    <div id="main">
        <div id="app">
            <router-view></router-view>   
        </div><!-- /container -->       
    </div>

    <script src="{{asset('public/js/app.js')}}"></script>   
    <script src="{{asset('public/assets/js/detect.js')}}"></script>
    <script src="{{asset('public/assets/js/fastclick.js')}}"></script>
    <script src="{{asset('public/assets/js/jquery.nicescroll.js')}}"></script>

    <script src="{{asset('public/assets/js/admin.js')}}"></script>
    </body>
</html>