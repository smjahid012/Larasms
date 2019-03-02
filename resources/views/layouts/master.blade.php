<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backview')}}/assets/images/favicon.png">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="{{ asset('backview')}}/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="{{ asset('backview')}}/assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Morris CSS -->
    <link href="{{ asset('backview')}}/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="dist/css/pages/dashboard1.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>


<body class="skin-blue fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    {{-- <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite admin</p>
        </div>
    </div> --}}
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        @include('layouts.header.header')
            @include('layouts.sidebar.sidebar')

        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">University Dashboard</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard 1</li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">HTML Course</h5>
                                <div class="text-right"> <span class="text-muted">Monthly Fees</span>
                                    <h2><sup><i class="ti-arrow-up text-success"></i></sup> $1200</h2>
                                </div>
                                <span class="text-success">20%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-success" style="width: 20%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">Web Development Course</h5>
                                <div class="text-right"> <span class="text-muted">Monthly Fees</span>
                                    <h2><sup><i class="ti-arrow-down text-primary"></i></sup> $5000</h2>
                                </div>
                                <span class="text-primary">30%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" style="width: 30%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">Web Designing Course</h5>
                                <div class="text-right"> <span class="text-muted">Monthly Fees</span>
                                    <h2><sup><i class="ti-arrow-up text-info"></i></sup> $8000</h2>
                                </div>
                                <span class="text-info">60%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-info" style="width: 40%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">App Development Course</h5>
                                <div class="text-right"> <span class="text-muted">Yearly Fees</span>
                                    <h2><sup><i class="ti-arrow-up text-inverse"></i></sup> $12000</h2>
                                </div>
                                <span class="text-inverse">80%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-inverse" style="width: 40%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- End Info box -->
                <!-- ============================================================== -->


                <!-- ============================================================== -->
                <!-- Comment - table -->
                <!-- ============================================================== -->
                <!-- row -->
                <div class="row">
                    <div class="col-md-3">
                        <img class="img-responsive" alt="user" src="dist/images/big/c2.jpg">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Web Designing</h5>
                                <div class="m-b-30">
                                    <a class="link list-icons" href="#">
                                        <i class="ti-alarm-clock"></i> 2 Year
                                    </a>
                                    <a class="link list-icons m-l-10 m-r-10" href="#">
                                        <i class="fa fa-heart-o"></i> 38
                                    </a>
                                    <a class="link list-icons m-l-10 m-r-10" href="#">
                                        <i class="fa fa-usd"></i> 50
                                    </a>
                                </div>
                                <p>
                                    <span><i class="ti-alarm-clock"></i> Duration: 6 Months</span>
                                </p>
                                <p>
                                    <span><i class="ti-user"></i> Professor: Jane Doe</span>
                                </p>
                                <p>
                                    <span><i class="fa fa-graduation-cap"></i> Students: 200+</span></span>
                                </p>
                                <button class="btn btn-success btn-rounded waves-effect waves-light m-t-10">More Details</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img class="img-responsive" alt="user" src="dist/images/big/c1.jpg">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Ios Development</h5>
                                <div class="m-b-30">
                                    <a class="link list-icons" href="#">
                                        <i class="ti-alarm-clock"></i> 2 Year
                                    </a>
                                    <a class="link list-icons m-l-10 m-r-10" href="#">
                                        <i class="fa fa-heart-o"></i> 38
                                    </a>
                                    <a class="link list-icons m-l-10 m-r-10" href="#">
                                        <i class="fa fa-usd"></i> 50
                                    </a>
                                </div>
                                <p>
                                    <span><i class="ti-alarm-clock"></i> Duration: 6 Months</span>
                                </p>
                                <p>
                                    <span><i class="ti-user"></i> Professor: Jane Doe</span>
                                </p>
                                <p>
                                    <span><i class="fa fa-graduation-cap"></i> Students: 200+</span></span>
                                </p>
                                <button class="btn btn-success btn-rounded waves-effect waves-light m-t-10">More Details</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img class="img-responsive" alt="user" src="dist/images/big/c4.jpg">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Android Development</h5>
                                <div class="m-b-30">
                                    <a class="link list-icons" href="#">
                                        <i class="ti-alarm-clock"></i> 2 Year
                                    </a>
                                    <a class="link list-icons m-l-10 m-r-10" href="#">
                                        <i class="fa fa-heart-o"></i> 38
                                    </a>
                                    <a class="link list-icons m-l-10 m-r-10" href="#">
                                        <i class="fa fa-usd"></i> 50
                                    </a>
                                </div>
                                <p>
                                    <span><i class="ti-alarm-clock"></i> Duration: 6 Months</span>
                                </p>
                                <p>
                                    <span><i class="ti-user"></i> Professor: Jane Doe</span>
                                </p>
                                <p>
                                    <span><i class="fa fa-graduation-cap"></i> Students: 200+</span></span>
                                </p>
                                <button class="btn btn-success btn-rounded waves-effect waves-light m-t-10">More Details</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img class="img-responsive" alt="user" src="dist/images/big/c3.jpg">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Web Development</h5>
                                <div class="m-b-30">
                                    <a class="link list-icons" href="#">
                                        <i class="ti-alarm-clock"></i> 2 Year
                                    </a>
                                    <a class="link list-icons m-l-10 m-r-10" href="#">
                                        <i class="fa fa-heart-o"></i> 38
                                    </a>
                                    <a class="link list-icons m-l-10 m-r-10" href="#">
                                        <i class="fa fa-usd"></i> 50
                                    </a>
                                </div>
                                <p>
                                    <span><i class="ti-alarm-clock"></i> Duration: 6 Months</span>
                                </p>
                                <p>
                                    <span><i class="ti-user"></i> Professor: Jane Doe</span>
                                </p>
                                <p>
                                    <span><i class="fa fa-graduation-cap"></i> Students: 200+</span></span>
                                </p>
                                <button class="btn btn-success btn-rounded waves-effect waves-light m-t-10">More Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <!-- ============================================================== -->
                <!-- End Comment - chats -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->


                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme working">4</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{ asset('backview')}}/assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{ asset('backview')}}/assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{ asset('backview')}}/assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{ asset('backview')}}/assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{ asset('backview')}}/assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{ asset('backview')}}/assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{ asset('backview')}}/assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{ asset('backview')}}/assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->

        <!-- footer -->
        @include('layouts.footer.footer')
