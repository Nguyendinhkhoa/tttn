<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LapTop Trí Khang</title>
    <link rel="icon" href="{{('public/frontend/images/favicon.png')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">


</head>

<body>
    <header id="home" class="home">
        <div class="top-header d-none d-md-block ">
            <div class="container ">
                <div class="row ">
                    <div class="col-xs-12 col-sm-6 header-left ">
                        <div class="social float-sm-left text-xs-center text-sm-left ">
                            <a href="https://youtube.com " target="_blank "><i class="fab fa-youtube "></i> Youtube</a>
                            <a href="https://www.facebook.com " target="_blank "><i class="fab fa-facebook-square "></i> Facebook</a>
                            <a href="https://www.instagram.com/ "><i class="fab fa-instagram-square " target="_blank "></i> Instagram</a>
                            <a href="https://shopee.vn/ "><i class="fas fa-shopping-bag "></i> Shoppe</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 header-right ">
                        <a href="https://trikhang.com/login " class="lienhe float-sm-right ">Sign in / Sign up</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end top-header -->
        <div class="middle-header">
            <div class="container">
                <div class="nav_block">
                    <a class="navbar-brand ml-md-5" href="{{URL::to('/trang-chu')}}">
                        <img src="{{('public/frontend/images/logo.png')}}" alt="">
                    </a>
                    <div class="product_search_form">
                        <form>
                            <div class="input-group">
                                <input class="form-control" placeholder="Search Product..." required="" type="text">
                                <button type="submit" class="search_btn"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="contact_phone order-md-last mr-md-5">
                        <span style="font-size : 170% ;   color: #29a07e;">
                            <a style="color: #29a07e;" href="tel:0326737214"> <i class="fas fa-phone-square-alt"></i><b> 0326737214</b></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu">
            <nav class="navbar navbar-expand-lg navbar-light destop-menu ">
                <div class="container">
                    <a class="navbar-brand" href="{{URL::to('/trang-chu')}}">Trí Khang</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    <div class="collapse navbar-collapse float-end" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="#"><i class="fas fa-home" style="margin-right :1px;"></i>Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="product.html">Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About Us</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="cart"><a href="javascript:void(0)" class="btn-cart-detail" title="Giỏ Hàng"><span class="lnr lnr-cart" style="font-size: 20px;"></span> <span class="number-total-product">3</span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- end header  -->

    <main>
        <section id="slide-show">
            <div id="slide-show" class="slide-show ">
                <div class="container ">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{('public/frontend/images/slide1.jpg')}} " class="d-block w-100 " alt=" ">
                            </div>
                            <div class="carousel-item">
                                <img src="{{('public/frontend/images/slide2.jpg')}} " class="d-block w-100 " alt=" ">
                            </div>
                            <div class="carousel-item">
                                <img src="{{('public/frontend/images/slide3.jpg')}} " class="d-block w-100 " alt=" ">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div id="shopify-section-1562068312415" class="shopify-section index-section">
                <div class="">
                    <div class="deliveryinfo row">

                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <ul>
                                <li><span><svg viewBox="0 0 501.551 501.551">
                <polygon style="fill:#F8B64C;" points="188.054,218.384 252.837,283.167 317.621,218.384 "></polygon>
              <rect x="132.674" y="143.151" style="fill:#40596B;" width="239.282" height="267.494"></rect>
              <path style="fill:#F8B64C;" d="M329.115,392.882c-51.2,6.269-101.355,6.269-152.555,0c7.314-44.931,7.314-89.861,0-135.837
              c51.2-6.269,101.355-6.269,152.555,0C321.8,303.02,321.8,347.951,329.115,392.882z"></path>
              <path style="fill:#FFD15C;" d="M146.258,117.029v101.355c0,58.514,48.065,106.58,106.58,106.58s106.58-48.065,106.58-106.58V117.029
              L146.258,117.029L146.258,117.029z"></path>
              <path style="fill:#40596B;" d="M252.837,24.033c-65.829,0-120.163,53.29-120.163,119.118H373
              C373,77.322,318.666,24.033,252.837,24.033z"></path>
              <path style="fill:#CDD6E0;" d="M394.943,148.376h-14.629c0-74.188-57.469-134.792-127.478-134.792S125.36,74.188,125.36,148.376
              h-14.629C110.731,65.829,174.47,0,252.837,0S394.943,66.873,394.943,148.376z"></path>
              <path style="fill:#F2F2F2;" d="M341.654,290.482H272.69v-13.584h68.963c12.539,0,22.988-10.449,22.988-22.988v-26.122h14.629v26.122
              C379.27,273.763,362.551,290.482,341.654,290.482z"></path>
              <path style="fill:#ACB3BA;" d="M268.511,266.449h-31.347c-8.359,0-14.629,7.314-14.629,14.629v3.135
              c0,8.359,7.314,14.629,14.629,14.629h31.347c8.359,0,14.629-7.314,14.629-14.629v-3.135
              C283.139,273.763,276.87,266.449,268.511,266.449z"></path>
              <path style="fill:#CDD6E0;" d="M412.707,159.869h-8.359v53.29h8.359c6.269,0,10.449-4.18,10.449-10.449v-32.392
                C423.156,164.049,417.931,159.869,412.707,159.869z"></path>
              <path style="fill:#CDD6E0;" d="M82.519,169.273v32.392c0,6.269,4.18,10.449,10.449,10.449h8.359v-53.29h-8.359
                C87.743,159.869,82.519,164.049,82.519,169.273z"></path>
              <path style="fill:#FF7058;" d="M383.449,143.151h-24.033v84.637h24.033c11.494,0,20.898-9.404,20.898-20.898v-42.841
                C404.347,152.555,394.943,143.151,383.449,143.151z"></path>
              <path style="fill:#FF7058;" d="M101.327,164.049v42.841c0,11.494,9.404,20.898,20.898,20.898h24.033v-84.637h-24.033
                C110.731,143.151,101.327,152.555,101.327,164.049z"></path>
              <polygon style="fill:#FFD15C;" points="312.396,143.151 312.396,110.759 300.902,143.151  "></polygon>
              <polygon style="fill:#FFD15C;" points="230.894,143.151 230.894,119.118 217.311,143.151  "></polygon>
              <polygon style="fill:#F8B64C;" points="180.739,355.265 252.837,427.363 324.935,355.265 "></polygon>
              <path style="fill:#FF7058;" d="M334.339,355.265H323.89l-72.098,72.098l-72.098-72.098h-10.449
              c-70.008,0-126.433,56.424-126.433,126.433v19.853h415.869v-19.853C460.772,411.69,404.347,355.265,334.339,355.265z"></path>
            </svg></span></li>
                                <li class="text-left">
                                    <h4>24/7 support</h4>
                                    <p>online support 24/7</p>
                                </li>
                            </ul>
                        </div>


                        <div class="col-xs-12 col-sm-6 col-md-3 sborder">
                            <ul>
                                <li><span><svg viewBox="0 0 512.003 512.003">
            <path style="fill:#E8679C;" d="M9.287,322.478c-0.59,0-1.157-0.014-1.701-0.039C3.348,322.246,0,318.785,0,314.543v-0.037
              c0-4.301,3.442-7.753,7.741-7.899c7.343-0.25,18.652-2.912,28.252-14.949c0.538-0.674,1.028-1.347,1.475-2.015
              c-16.246-3.49-26.035-9.041-29.843-16.888c-2.257-4.65-3.432-12.194,3.782-21.726c4.974-6.574,12.145-9.772,19.678-8.764
              c9.56,1.275,18.571,9.146,22.958,20.051c1.989,4.943,2.902,10.038,2.77,15.086c4.557,0.472,9.19,0.77,13.667,0.868
              c4.133,0.09,7.665,3.333,7.715,7.467c0.052,4.292-3.421,7.721-7.706,7.661c-0.397-0.008-7.704-0.162-17.15-1.229
              c-1.417,3.092-3.26,6.083-5.521,8.918C33.49,319.051,18.578,322.478,9.287,322.478z M28.323,257.2c-1.292,0-3.002,0.501-4.858,2.953
              c-1.171,1.548-3.018,4.384-2.235,5.998c1.765,3.641,9.898,6.768,20.364,8.939c-0.185-3.12-0.974-5.621-1.582-7.131
              c-2.581-6.414-7.451-10.24-10.928-10.704C28.851,257.223,28.596,257.2,28.323,257.2z"></path>
            <path style="fill:#FF7BAC;" d="M497.41,279.267l-21.281-6.817c-5.093-1.631-9.048-5.652-10.652-10.753
              c-24.49-77.874-115.428-113.637-206.964-113.637c-107.091,0-193.905,48.937-193.905,157.007c0,62.285,30.549,105.91,77.747,131.105
              c1.161,0.62,1.987,1.721,2.236,3.013l10.574,54.923c0.979,5.174,5.501,8.92,10.767,8.92h35.707c5.266,0,9.787-3.746,10.767-8.92
              l5.78-30.536c0.426-2.253,2.526-3.771,4.803-3.506c11.517,1.337,23.39,2.008,35.524,2.008c16.219,0,32.418-1.198,48.234-3.588
              c2.324-0.351,4.514,1.177,4.952,3.486l6.083,32.136c0.979,5.174,5.501,8.92,10.767,8.92h35.707c5.266,0,9.787-3.746,10.767-8.92
              l10.983-58.152c0.248-1.313,1.092-2.432,2.278-3.048c28.029-14.573,51.217-34.622,66.006-60.181
              c1.971-3.406,5.087-6.002,8.835-7.202l34.288-10.983c8.692-2.784,14.59-10.866,14.59-19.993V299.26
              C512,290.133,506.103,282.051,497.41,279.267z"></path>
              <path style="fill:#E8679C;" d="M509.327,289.039c-0.925-1.658-2.062-3.189-3.397-4.54c-0.029-0.029-0.054-0.061-0.083-0.089
                c-2.31-2.31-5.177-4.099-8.436-5.143l-15.777-5.053v18.559c0,23.057-14.691,43.551-36.526,50.956l0,0
                c-9.929,3.18-18.514,9.472-24.805,17.787c-7.703,10.182-16.856,19.332-27.171,27.452c-12.161,9.573-20.364,23.273-22.709,38.571
                c-1.672,10.909-2.967,22.548-3.793,30.796c-0.635,6.344-5.968,11.175-12.343,11.175h-25.739c-5.266,0-9.787-3.746-10.767-8.92
                l-6.083-32.136c-0.437-2.309-2.627-3.838-4.951-3.486c-15.815,2.39-32.014,3.588-48.234,3.588c-12.135,0-24.007-0.671-35.524-2.008
                c-2.278-0.264-4.377,1.254-4.804,3.507l-5.78,30.536c-0.979,5.174-5.501,8.92-10.767,8.92h-35.707
                c-5.266,0-9.787-3.746-10.767-8.92l-10.574-54.923c-0.249-1.292-1.075-2.393-2.236-3.013
                c-42.889-22.896-72.024-61.013-76.988-114.517c0,0.001,0,0.002,0,0.003c-0.118,1.313-0.222,2.636-0.313,3.968
                c-0.002,0.026-0.003,0.052-0.005,0.079c-0.009,0.131-0.017,0.263-0.025,0.395c-0.079,1.197-0.148,2.402-0.205,3.614
                c-0.023,0.503-0.039,1.012-0.058,1.518c-0.036,0.924-0.072,1.848-0.095,2.782c-0.035,1.514-0.058,3.036-0.058,4.573
                c0,7.786,0.477,15.28,1.405,22.483c1.136,8.825,2.955,17.207,5.393,25.159c0.133,0.435,0.272,0.866,0.409,1.298
                c0.339,1.069,0.691,2.135,1.055,3.196c0.145,0.423,0.289,0.848,0.438,1.268c1.003,2.831,2.088,5.604,3.253,8.318
                c0.124,0.288,0.247,0.577,0.372,0.863c0.574,1.313,1.165,2.615,1.777,3.901c0.101,0.213,0.207,0.423,0.309,0.635
                c0.57,1.183,1.159,2.357,1.763,3.524c0.104,0.2,0.205,0.402,0.309,0.602c0.658,1.252,1.336,2.489,2.03,3.714
                c0.151,0.266,0.304,0.531,0.456,0.796c2.247,3.903,4.677,7.666,7.281,11.287c0.249,0.346,0.503,0.689,0.755,1.032
                c0.632,0.861,1.274,1.715,1.926,2.561c0.257,0.333,0.512,0.667,0.771,0.997c0.882,1.121,1.775,2.233,2.691,3.325
                c0.008,0.01,0.017,0.02,0.025,0.03c0.917,1.093,1.857,2.167,2.808,3.231c0.288,0.323,0.582,0.641,0.873,0.961
                c0.71,0.78,1.43,1.552,2.158,2.315c0.294,0.308,0.586,0.618,0.883,0.923c0.997,1.027,2.006,2.044,3.036,3.042
                c0.002,0.002,0.005,0.005,0.007,0.007c1.148,1.112,2.316,2.206,3.504,3.282c2.375,2.152,4.829,4.231,7.358,6.238
                c2.529,2.007,5.133,3.942,7.81,5.805c1.338,0.932,2.694,1.845,4.068,2.74c1.237,0.806,2.492,1.593,3.757,2.37
                c0.364,0.224,0.731,0.443,1.097,0.664c0.956,0.577,1.917,1.144,2.883,1.703c0.383,0.221,0.765,0.444,1.15,0.662
                c1.301,0.738,2.61,1.466,3.937,2.174c0.29,0.155,0.559,0.34,0.804,0.551c0.22,0.19,0.413,0.406,0.59,0.633
                c0.053,0.067,0.098,0.138,0.146,0.209c0.121,0.176,0.229,0.36,0.323,0.553c0.038,0.077,0.077,0.152,0.11,0.231
                c0.112,0.269,0.206,0.546,0.262,0.837l10.574,54.923c0.122,0.647,0.3,1.271,0.528,1.869c0.114,0.299,0.24,0.591,0.378,0.876
                s0.288,0.562,0.449,0.832c0.161,0.27,0.333,0.532,0.516,0.785c0.183,0.255,0.377,0.501,0.581,0.738
                c0.231,0.269,0.477,0.522,0.732,0.766c0.081,0.077,0.166,0.149,0.248,0.224c0.184,0.166,0.372,0.326,0.566,0.479
                c0.098,0.077,0.197,0.152,0.297,0.226c0.2,0.146,0.405,0.285,0.614,0.417c0.094,0.06,0.187,0.122,0.283,0.179
                c0.303,0.18,0.614,0.349,0.935,0.499c0.005,0.002,0.009,0.004,0.014,0.006c0.321,0.15,0.652,0.28,0.988,0.398
                c0.106,0.037,0.215,0.068,0.322,0.102c0.239,0.076,0.482,0.146,0.728,0.205c0.124,0.03,0.249,0.058,0.374,0.084
                c0.249,0.051,0.501,0.092,0.755,0.126c0.115,0.016,0.229,0.034,0.344,0.046c0.366,0.037,0.736,0.061,1.11,0.062
                c0.002,0,0.004,0,0.006,0h35.707c1.646,0,3.218-0.366,4.633-1.027c0.566-0.264,1.107-0.576,1.616-0.93
                c0.51-0.354,0.989-0.751,1.432-1.186c0.664-0.652,1.247-1.391,1.73-2.2c0.644-1.079,1.11-2.283,1.355-3.577l5.78-30.536v-0.001
                c0.048-0.254,0.124-0.495,0.212-0.728c0.026-0.07,0.057-0.135,0.087-0.203c0.074-0.168,0.156-0.329,0.249-0.484
                c0.037-0.062,0.072-0.124,0.112-0.184c0.135-0.201,0.28-0.394,0.445-0.568c0.448-0.474,1.007-0.826,1.619-1.061
                c0.059-0.023,0.117-0.045,0.177-0.065c0.147-0.049,0.294-0.092,0.447-0.126c0.116-0.026,0.234-0.043,0.353-0.06
                c0.115-0.016,0.227-0.036,0.344-0.042c0.249-0.015,0.502-0.014,0.758,0.016c1.919,0.223,3.852,0.42,5.791,0.606
                c0.485,0.047,0.971,0.092,1.457,0.136c1.938,0.176,3.883,0.341,5.839,0.48c0.01,0.001,0.019,0.001,0.029,0.002
                c1.956,0.139,3.924,0.253,5.897,0.355c0.497,0.026,0.994,0.05,1.492,0.074c1.982,0.093,3.969,0.174,5.968,0.23
                c2.999,0.084,6.017,0.126,9.05,0.126c4.055,0,8.108-0.075,12.155-0.224c2.072-0.077,4.142-0.174,6.21-0.29
                c0.211-0.012,0.42-0.029,0.631-0.041c1.878-0.109,3.755-0.23,5.628-0.372c0.044-0.003,0.087-0.008,0.131-0.011
                c4.108-0.313,8.202-0.702,12.277-1.169c0.013-0.001,0.025-0.003,0.037-0.005c1.864-0.214,3.723-0.442,5.579-0.687
                c0.897-0.119,1.79-0.253,2.684-0.379c0.984-0.139,1.971-0.269,2.952-0.418c1.989-0.301,3.866,0.818,4.623,2.601
                c0.01,0.023,0.025,0.043,0.035,0.067c0.106,0.262,0.188,0.538,0.243,0.826l3.041,16.068l3.041,16.068
                c0.979,5.174,5.501,8.92,10.767,8.92h35.707c0.002,0,0.004,0,0.006,0c0.375,0,0.744-0.024,1.11-0.062
                c0.116-0.012,0.229-0.031,0.344-0.046c0.254-0.034,0.506-0.075,0.755-0.126c0.125-0.026,0.25-0.054,0.373-0.084
                c0.246-0.06,0.489-0.129,0.728-0.206c0.107-0.034,0.216-0.065,0.322-0.102c0.338-0.119,0.67-0.25,0.992-0.4
                c0.002-0.001,0.003-0.002,0.005-0.002c0.322-0.151,0.634-0.321,0.939-0.501c0.096-0.057,0.188-0.119,0.283-0.179
                c0.21-0.133,0.415-0.271,0.615-0.418c0.1-0.073,0.198-0.148,0.295-0.224c0.195-0.153,0.383-0.314,0.568-0.48
                c0.083-0.075,0.167-0.146,0.248-0.223c0.255-0.244,0.501-0.498,0.732-0.766c0.09-0.105,0.171-0.218,0.257-0.327
                c0.302-0.38,0.588-0.775,0.839-1.196c0.322-0.539,0.599-1.11,0.827-1.708c0.228-0.598,0.405-1.222,0.528-1.869l2.407-12.743
                l2.501-13.243l1.569-8.305L386,435.961l0,0l0.404-2.14c0.739-0.367,1.038-0.515,1.778-0.881c0.028,0.009,0.045,0.005,0.06-0.003
                c0.013-0.007,0.023-0.018,0.036-0.024c0.857-0.445,1.694-0.912,2.541-1.367c0.886-0.477,1.782-0.943,2.658-1.43
                c0.76-0.423,1.5-0.866,2.252-1.297c0.945-0.542,1.899-1.076,2.832-1.631c0.768-0.458,1.516-0.935,2.275-1.402
                c0.895-0.55,1.8-1.091,2.682-1.653c0.792-0.505,1.562-1.03,2.343-1.545c0.829-0.546,1.669-1.083,2.487-1.64
                c0.772-0.527,1.523-1.075,2.284-1.612c0.804-0.567,1.618-1.123,2.41-1.701c0.738-0.539,1.453-1.098,2.18-1.647
                c0.793-0.598,1.597-1.186,2.376-1.796c0.706-0.552,1.388-1.124,2.083-1.686c0.776-0.627,1.564-1.245,2.326-1.884
                c0.702-0.588,1.379-1.197,2.069-1.796c0.731-0.634,1.474-1.258,2.191-1.904c0.669-0.602,1.313-1.225,1.971-1.837
                c0.712-0.663,1.437-1.317,2.135-1.992c0.638-0.617,1.249-1.254,1.875-1.881c0.691-0.692,1.393-1.373,2.069-2.077
                c0.615-0.641,1.204-1.302,1.806-1.952c0.658-0.711,1.329-1.412,1.972-2.134c0.587-0.659,1.146-1.339,1.719-2.008
                c0.63-0.735,1.273-1.461,1.888-2.208c0.559-0.679,1.089-1.379,1.635-2.069c0.6-0.758,1.213-1.506,1.796-2.276
                c0.536-0.708,1.043-1.436,1.565-2.154c0.562-0.773,1.138-1.535,1.683-2.32c0.51-0.734,0.99-1.488,1.486-2.231
                c0.526-0.79,1.067-1.57,1.577-2.372c0.633-0.995,1.212-2.027,1.845-3.022c0.376-0.59,0.727-1.194,1.079-1.799
                c1.928-3.32,4.971-5.848,8.628-7.019l0.124-0.04h0.001l17.492-5.603l16.795-5.38c8.692-2.784,14.59-10.866,14.59-19.993v-35.29
                c0-3.118-0.702-6.107-1.956-8.812C509.822,289.969,509.583,289.499,509.327,289.039z"></path>
              <path style="fill:#E8679C;" d="M341.689,167.12c1.086-5.155,4.652-9.441,9.442-11.634c18.404-8.424,65.294-28.695,77.348-22.381
                c15.095,7.907,7.188,93.267-15.814,106.296C390.447,251.986,325.978,241.684,341.689,167.12z"></path>
              <path style="fill:#E8679C;" d="M411.58,303.114c-13.632,0-24.723-11.091-24.723-24.723c0-4.176,3.385-7.561,7.561-7.561
                s7.561,3.385,7.561,7.561c0,5.294,4.307,9.6,9.6,9.6c5.294,0,9.601-4.306,9.601-9.6c0-4.176,3.385-7.561,7.561-7.561
                s7.561,3.385,7.561,7.561C436.304,292.023,425.213,303.114,411.58,303.114z"></path>
              <path style="fill:#E8679C;" d="M300.432,210.971c-0.795,0-1.603-0.126-2.398-0.392c-41.236-13.786-86.657-13.786-127.893,0
                c-3.96,1.323-8.245-0.813-9.568-4.774c-1.324-3.961,0.813-8.245,4.774-9.569c44.329-14.82,93.154-14.82,137.483,0
                c3.961,1.324,6.098,5.608,4.774,9.569C306.545,208.971,303.595,210.971,300.432,210.971z"></path>
            <circle style="fill:#FFB125;" cx="234.09" cy="104.611" r="95.64"></circle>
            <path style="fill:#FF7BAC;" d="M422.079,142.996c-10.496,0-35.914,8.65-66.332,22.575c-1.661,0.76-2.86,2.195-3.206,3.836
              c-4.433,21.038-2.062,37.971,6.858,48.965c1.043,1.285,2.187,2.495,3.419,3.627c1.435,1.318,3.748,0.579,4.225-1.309
              C377.614,178.82,428.919,142.996,422.079,142.996z"></path>
            <path style="fill:#FF901D;" d="M302.888,38.187L167.66,173.416c37.437,36.169,97.103,35.782,134.057-1.172
              S339.057,75.624,302.888,38.187z"></path>
            <path style="fill:#DD7219;" d="M231.92,150.954c-16.288-0.263-27.322-9.064-27.322-15.5c0-3.153,2.758-7.488,6.042-7.488
              c4.335,0,7.881,9.195,21.28,10.246v-30.869c-11.822-4.203-24.958-8.932-24.958-25.746c0-16.551,12.479-23.119,24.958-24.433v-3.809
              c0-1.576,1.576-3.021,3.81-3.021c1.97,0,3.941,1.445,3.941,3.021v3.547c8.932,0.263,21.543,3.021,21.543,9.458
              c0,2.496-1.839,7.487-5.78,7.487c-3.152,0-6.568-4.203-15.763-4.86v26.665c11.428,4.203,23.907,9.983,23.907,27.848
              c0,16.157-9.72,25.089-23.907,27.06v4.466c0,1.576-1.97,3.021-3.941,3.021c-2.233,0-3.81-1.445-3.81-3.021L231.92,150.954
              L231.92,150.954z M232.708,93.157V69.25c-7.356,0.919-12.61,4.203-12.61,11.034C220.098,87.771,225.746,90.53,232.708,93.157z
               M238.882,110.233v27.716c7.093-1.314,11.559-5.517,11.559-13.005C250.441,116.67,245.319,112.992,238.882,110.233z"></path>
            </svg></span></li>
                                <li class="text-left">
                                    <h4>secure payment</h4>
                                    <p>100% secure payment</p>
                                </li>
                            </ul>
                        </div>


                        <div class="col-xs-12 col-sm-6 col-md-3 sborder">
                            <ul>
                                <li><span><svg viewBox="0 0 504.124 504.124">
            <path style="fill:#DB5449;" d="M15.754,133.909l236.308,118.154L488.37,133.909v252.062L252.062,504.123L15.754,385.969V133.909z"></path>
            <path style="fill:#C54B42;" d="M15.754,157.538v73.649l235.52,115.397l237.095-115.791v-73.255L252.062,273.33L15.754,157.538z"></path>
            <path style="fill:#D05045;" d="M252.062,504.123V252.063L31.508,141.786H15.754v244.185L252.062,504.123z"></path>
            <path style="fill:#BB483E;" d="M15.754,157.538v73.649l235.52,115.397l0.788-0.394v-73.255v0.394L15.754,157.538z"></path>
            <path style="fill:#EB6258;" d="M0,125.638L252.062,0.001l252.062,125.637v16.542L252.062,267.815L0,142.573V125.638z"></path>
            <path style="fill:#EFEFEF;" d="M396.603,39.779c-8.271-14.966-25.994-24.025-46.868-24.025c-47.655,0-81.132,44.505-97.674,72.862
              c-16.542-28.357-50.412-72.468-97.674-72.468c-30.326,0-51.988,18.511-51.988,43.717c0,44.898,49.231,74.043,148.086,74.043
              s151.237-37.415,151.237-73.649C401.723,53.17,400.148,46.081,396.603,39.779z M164.628,88.223
              c-11.028-7.483-14.966-15.754-14.966-21.268c0-6.695,6.302-11.815,15.36-11.815c21.268,0,38.203,27.963,47.655,47.262
              C187.865,100.432,173.292,93.736,164.628,88.223z M339.495,88.223c-8.665,5.514-23.237,12.209-48.049,14.178
              c9.058-19.298,25.994-47.262,47.655-47.262c9.058,0,15.36,5.12,15.36,11.815C354.462,72.469,350.523,80.739,339.495,88.223z"></path>
            <path style="fill:#E2574C;" d="M0,126.032l252.062,123.274l252.062-123.274v81.526l-252.85,123.274L0,207.558V126.032z"></path>
            <path style="fill:#EFEFEF;" d="M346.585,213.859v-9.058l-94.523-51.2l-94.523,51.2v9.058L94.524,186.29v-12.603l154.387-81.526
              l3.151,1.575l3.151-1.575L409.6,173.293v12.603L346.585,213.859z"></path>
            <path style="fill:#DCDCDC;" d="M346.585,204.801v251.668l63.015-31.508V173.293L346.585,204.801z"></path>
            <path style="fill:#D1D1D1;" d="M94.523,425.354l63.015,31.508V205.195l-63.015-31.902C94.523,173.292,94.523,425.354,94.523,425.354
              z"></path>
            </svg></span></li>
                                <li class="text-left">
                                    <h4>special gift cards</h4>
                                    <p>give the perfect gift</p>
                                </li>
                            </ul>
                        </div>


                        <div class="col-xs-12 col-sm-6 col-md-3 sborder">
                            <ul>
                                <li><span><svg viewBox="0 0 512 512">
            <path style="fill:#FFC107;" d="M128,160c0-8.832-7.168-16-16-16H16c-8.832,0-16,7.168-16,16s7.168,16,16,16h96
            C120.832,176,128,168.832,128,160z"></path>
            <path style="fill:#FFC107;" d="M112,208H48c-8.832,0-16,7.168-16,16s7.168,16,16,16h64c8.832,0,16-7.168,16-16S120.832,208,112,208
            z"></path>
            <path style="fill:#FFC107;" d="M112,272H80c-8.832,0-16,7.168-16,16s7.168,16,16,16h32c8.832,0,16-7.168,16-16S120.832,272,112,272
            z"></path>
            <path style="fill:#F44336;" d="M509.728,263.776l-48-80C458.848,178.944,453.632,176,448,176H336c-8.832,0-16,7.168-16,16v160
              c0,8.832,7.168,16,16,16h160c8.832,0,16-7.168,16-16v-80C512,269.088,511.232,266.24,509.728,263.776z"></path>
            <polygon style="fill:#FAFAFA;" points="384,208 438.944,208 477.344,272 384,272 "></polygon>
            <path style="fill:#FFC107;" d="M336,112H112c-8.832,0-16,7.168-16,16v224c0,8.832,7.168,16,16,16h240V128
              C352,119.168,344.832,112,336,112z"></path>
            <circle style="fill:#FAFAFA;" cx="432" cy="352" r="32"></circle>
            <path style="fill:#455A64;" d="M432,400c-26.464,0-48-21.536-48-48s21.536-48,48-48s48,21.536,48,48S458.464,400,432,400z M432,336
              c-8.8,0-16,7.2-16,16s7.2,16,16,16s16-7.2,16-16S440.8,336,432,336z"></path>
            <path style="fill:#F44336;" d="M352,368H112c-8.832,0-16-7.168-16-16v-48h256V368z"></path>
            <circle style="fill:#FAFAFA;" cx="208" cy="352" r="32"></circle>
            <path style="fill:#455A64;" d="M208,400c-26.464,0-48-21.536-48-48s21.536-48,48-48s48,21.536,48,48S234.464,400,208,400z M208,336
              c-8.832,0-16,7.2-16,16s7.168,16,16,16s16-7.2,16-16S216.832,336,208,336z"></path>
            </svg></span></li>
                                <li class="text-left">
                                    <h4>world wide shipping</h4>
                                    <p>on order over $999</p>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>




            </div>
        </div>
            @yield('content')
    </main>


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="support">
                        <ul class="menu-bottom">
                            <li class="  level0  first-item">
                                <input type="checkbox" id="item_1"> <label class="label_nolink" for="item_1" data-id="item_1">	Policy 	</label>
                                <ul id="menu-sub1">
                                    <li class="  level1  first-sitem ">
                                        <a href="" title="Vê chúng tôi">	About Us	</a>
                                    </li>
                                    <li class="  level1  mid-sitem ">
                                        <a href="" title="Chính sách quy định chung">	Policy general provisions	</a>
                                    </li>
                                    <li class="  level1  mid-sitem ">
                                        <a href="" title="Chính sách quy định chung">	Delivery policy	</a>
                                    </li>
                                    <li class="  level1  mid-sitem ">
                                        <a href="" title="Chính sách bảo hành">	Warranty Policy 	</a>
                                    </li>
                                    <li class="  level1  mid-sitem ">
                                        <a href="" title="Liên hệ">	Contact 	</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="address_re">
                        <div class="title_footer">Showroom</div>
                        <div class="info_bottom cls">
                            <div class="item_info">
                                <div class="address">
                                    <i style="font-size: 18px; padding-right: 3px; color: #BB483E;" class="fas fa-map-marked-alt"></i><span style="color: #BB483E; font-size: 18px;">Address :</span>
                                    <span class="box-content">262/2/30 Phan Anh , Phường Hiệp Tân , Quận Tân Phú , TP. Hồ Chí Minh</span>
                                </div>
                            </div>
                            <div class="item_info">
                                <div class="phone">
                                    <i style="font-size: 18px; padding-right: 3px; color: #BB483E;" class="fas fa-mobile-alt"></i><span style="color: #BB483E; font-size: 18px;">Phone :</span>
                                    <span class="box-content"><a href="tel:0326737214">0326737214</a></span>
                                </div>
                            </div>
                            <div class="item_info">
                                <div class="email"><i style="font-size: 18px; padding-right: 3px; color: #BB483E;" class="fas fa-map-marked-alt"></i><span>Email :</span>
                                    <span class="box-content">  <a href="mailto:nguyendinhkhoa1234@gmail.com">nguyendinhkhoa1234@gmail.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="title_footer">Open Hours</div>
                    <div class="opening1">
                        <div class="right float-right">9:00am - 23:00pm</div>
                        <div class="left float-left">Mon-Fri</div>

                    </div>
                    <div class="opening1 ">
                        <div class="right float-right">10:00am - 22:00pm</div>
                        <div class="left float-left">Saturday</div>
                    </div>
                    <div class="opening1">
                        <div class="right float-right">10:00am - 21:00pm</div>
                        <div class="left float-left">Sungday</div>
                    </div>
                </div>
                <div class="col-md-3"><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FLaptop-Tr%25C3%25AD-Khang-101294645429168&tabs=timeline&width=500&height=120&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1350363191983263"
                        width="340" height="120" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
            </div>
        </div>

    </footer>
    <div class="back-to-top" class="bg-color">
        <i class="fas fa-angle-up"></i>
    </div>

    <!-- CART DIALOG -->
    <div class="modal fade" id="modal-cart-detail" role="dialog">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content " style="text-align : center; ">
                <div class="modal-header bg-color">
                    <h5 class="modal-title" id="exampleModalLabel">GIỎ HÀNG</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                </div>
                <div class="modal-content">
                    <div class="modal-body ">
                        <div class="page-content">
                            <div class="row hidden-sm hidden-xs">
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-4">
                                    <div class="header">
                                        Sản phẩm
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="header">
                                        Đơn giá
                                    </div>
                                </div>
                                <div class="label_item col-lg-2">
                                    <div class="header">
                                        Số lượng
                                    </div>
                                </div>
                                <div class="lcol-lg-1">
                                </div>
                            </div>
                            <div class="cart-product">
                                <hr>
                                <div class="clearfix text-center">
                                    <div class="row">
                                        <div class="col-sm-6 col-lg-2">
                                            <div><img style="width:130px" class="img-responsive" src="{{('public/frontend/images/product/ideapad_5i.jpg')}}" alt="Laptop Lenovo IdeaPad Slim 5"></div>
                                        </div>
                                        <div class="col-sm-6 col-lg-4 align-items-center"><a class="product-name" href="#">Laptop Lenovo IdeaPad Slim 5</a></div>
                                        <div class="col-sm-6 col-lg-3"><span class="product-item-discount">190,000₫</span></div>
                                        <div class="col-sm-6 col-lg-2"><input type="hidden" value="1"><input style="width : 60px" type="number" onchange="updateProductInCart(this,2)" min="1" value="1"></div>
                                        <div class="col-sm-6 col-lg-1"><a class="remove-product" href="javascript:void(0)" onclick="deleteProductInCart(2)"><i class="fas fa-trash-alt"></i></a></div>
                                    </div>
                                </div>
                                <hr>
                                <div class="clearfix  ">
                                    <div class="row">
                                        <div class="col-sm-6 col-lg-2">
                                            <div><img style="width:130px" class="img-responsive" src="{{('public/frontend/images/product/lenovo_thinkbook.jpg')}}" alt="Laptop Lenovo IdeaPad Slim 5"></div>
                                        </div>
                                        <div class="col-sm-6 col-lg-4 align-items-center"><a class="product-name" href="#"> Lenovo ThinkBook 14s Yoga</a></div>
                                        <div class="col-sm-6 col-lg-3"><span class="product-item-discount">250,000₫</span></div>
                                        <div class="col-sm-6 col-lg-2"><input type="hidden" value="1"><input style="width : 60px" type="number" onchange="updateProductInCart(this,4)" min="1" value="2"></div>
                                        <div class="col-sm-6 col-lg-1"><a class="remove-product" href="javascript:void(0)" onclick="deleteProductInCart(4)"><i class="fas fa-trash-alt"></i></a></div>
                                    </div>
                                </div>
                                <hr>
                                <div class="clearfix ">
                                    <div class="row">
                                        <div class="col-sm-6 col-lg-2">
                                            <div><img style="width:130px" class="img-responsive" src="{{('public/frontend/images/product/lenovo_v15.jpg')}}" alt="Lenovo v15"></div>
                                        </div>
                                        <div class="col-sm-6 col-lg-4"><a class="product-name" href="#">Lenovo v15</a></div>
                                        <div class="col-sm-6 col-lg-3"><span class="product-item-discount">180,000₫</span></div>
                                        <div class="col-sm-6 col-lg-2"><input type="hidden" value="1"><input style="width : 60px" type="number" onchange="updateProductInCart(this,7)" min="1" value="3"></div>
                                        <div class="col-sm-6 col-md-1"><a class="remove-product" href="javascript:void(0)" onclick="deleteProductInCart(7)"><i class="fas fa-trash-alt"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="clearfix">
                            <div class="col-xs-12 text-right">
                                <p>
                                    <span>Tổng tiền</span>
                                    <span class="price-total">1,230,000₫</span>
                                </p>
                                <input type="button" name="checkout" class="btn btn-primary" value="Đặt hàng">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CART DIALOG -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{asset('public/frontend/js/script.js')}}"></script>
</body>

</html>