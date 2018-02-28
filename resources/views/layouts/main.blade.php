<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title','Rag Day 2018')</title>

    <!-- css -->
    <link rel="stylesheet" href="{{asset('bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
</head>
<body data-spy="scroll" data-target="#site-nav">
    <nav id="site-nav" class="navbar navbar-fixed-top navbar-custom">
        <div class="container">
            <div class="navbar-header">

                <!-- logo -->
                <div class="site-branding">
                    <a class="logo" href="index.html">
                        
                        <!-- logo image  -->
                        <img src="assets/images/logo.png" alt="Logo">

                        R Day, Faculty of Engineering,RU
                    </a>
                </div>

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-items" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div><!-- /.navbar-header -->

            <div class="collapse navbar-collapse" id="navbar-items">
                <ul class="nav navbar-nav navbar-right">

                    <!-- navigation menu -->
                    <li class="active"><a href="{{ url('uabout') }}">About</a></li>
                    <li><a href="{{ url('events') }}s">Speakers</a></li>              

                    <li><a href="#partner">Partner</a></li>                  
                    <!-- <li><a data-scroll href="#">Sponsorship</a></li> -->
                    <li><a data-scroll href="{{ url('dal') }}">FAQ</a></li>
                    <li><a data-scroll href="{{ url('events') }}">Photos</a></li>
                
                </ul>
            </div>
        </div><!-- /.container -->
    </nav>

    @yield('content')

    <section id="faq" class="section faq">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Event FAQs</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a class="faq-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> What is the price of the ticket ?</a>
                                </h4>
                            </div>

                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <h3>Hello</h3>
                                    <p>Lorem Ipsum</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="faq-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> What is included in my ticket ?</a>
                                </h4>
                            </div>

                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">Hello</div>
                            </div>
                        </div>
  
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="faq-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Office address ?</a>
                                </h4>
                            </div>

                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">Hello</div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="faq-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> How should I dress ?</a>
                                </h4>
                            </div>

                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">Hello</div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title">
                                    <a class="faq-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive"> I have specific questions that are not addressed here. Who can help me ?</a>
                                </h4>
                            </div>

                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                <div class="panel-body">Hello</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <section id="partner" class="section partner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Event Partner</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <a class="partner-box partner-box-1"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-2"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-3"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-4"></a>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <a class="partner-box partner-box-5"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-6"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-7"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-8"></a>
                </div>
            </div>   
    </section>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="site-info">Designed and <br> Developed by <a href="http://technextit.com">Technext Limited</a></p>
                    <ul class="social-block">
                        <li><a href=""><i class="ion-social-twitter"></i></a></li>
                        <li><a href=""><i class="ion-social-facebook"></i></a></li>
                        <li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>
                        <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- script -->
    <script src="{{asset('jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('smooth-scroll/dist/js/smooth-scroll.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>