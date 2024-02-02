<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    />

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
    integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    />

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
    integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    />

    <link rel="stylesheet" href="{{ url('/front/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/front/css/responsive.css') }}" />
    <title>Home page</title>
</head>
<body>

    <header>
        <div class="topbar" style="background-color: #fadc38;">
            <div class="container-fluid">
                <div class="topbar-content">
                    <span>Up to 30% off Sitewide. <span style="color: #dc288a;">Use Code:</span>DEALS</span>
                    <div class="toggl">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="free-exp-wrap">
            <div class="container-fluid">
                <div class="free-exp">
                    <p class="m-0">Free Express shipping for orders over £99.00</p>
                    <ul>
                        <li>
                            <a href="javascript:void(0)">
                                <img src="{{ url('/front/img/track.svg') }}" alt="" />
                                <span>Order Tracking</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <img src="{{ url('/front/img/account.svg') }}" alt="" />
                                <span>Account</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <img src="{{ url('/front/img/item.svg') }}" alt="" />
                                <span>Item(s) <span style="color: #dc288a;">$0.00</span></span>
                            </a>
                        </li>
                        <li>
                            <div class="btn-group">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ url('/front/img/country.svg') }}" alt="" />
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><button class="dropdown-item" type="button"><img src="{{ url('/front/img/country.svg') }}" alt="" /> IND</button></li>
                                    <li><button class="dropdown-item" type="button"><img src="{{ url('/front/img/country.svg')}}" alt="" /> IND</button></li>
                                    <li><button class="dropdown-item" type="button"><img src="{{ url('/front/img/country.svg')}}" alt="" /> IND</button></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="search-wrap">
            <div class="container-fluid">
                <div class="search_content">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="bars bar1 navbar-toggler-icon"></span>
                        <span class="bars bar2 navbar-toggler-icon"></span>
                        <span class="bars bar3 navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="{{ url('/front/img/clogo.svg')}}" alt="" /></a>
                    <div class="search_wrapper">
                        <div class="dropdown">
                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                All Category
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                        <div class="search_block">
                            <form action="">
                                <input type="search" class="form-control" placeholder="Search..." />
                            </form>
                        </div>
                    </div>
                    <div class="contc">
                        <ul class="pro_headr_destp">
                            <li>
                                <a href="javascript:void(0)">
                                    <div class="con-img">
                                        <img src="{{ url('/front/img/chat.svg')}}" alt="" />
                                    </div>
                                    <span>Chat Now</span>
                                </a>
                            </li>
                            <li>
                                <a href="tel:012345678910">
                                    <div class="con-img">
                                        <img src="{{ url('/front/img/call.svg')}}" alt="" />
                                    </div>
                                    <span>
                                        Call Us <br />
                                        012345678910
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <ul class="pro_headr_mb">
                            <li>
                                <a href="javascript:void(0)">
                                    <div class="con-img">
                                        <img src="{{ url('/front/img/account.svg')}}" alt="">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="tel:012345678910">
                                    <div class="con-img">
                                        <img src="{{ url('/front/img/item.svg')}}" alt="">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbaar">
            <nav class="navbar navbar-expand-lg" style="background-color: #dc288a;">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Banners</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Board Printing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Poster Printing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Signs & Stickers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Marketing Material</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us</a>
                            </li>
                        </ul>
                        <div class="navbar_nav_mb">
                            <div class="navbar_text_mb">
                                <a href="tel:012345678910">
                                    <div class="con-img">
                                        <img src="{{ url('/front/img/call.svg')}}" alt="">
                                    </div>
                                    <span>012345678910</span>
                                </a>
                                <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ url('/front/img/country.svg')}}" alt="">
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><button class="dropdown-item" type="button"><img src="{{ url('/front/img/country.svg')}}" alt=""> IND</button></li>
                                        <li><button class="dropdown-item" type="button"><img src="{{ url('/front/img/country.svg')}}" alt=""> IND</button></li>
                                        <li><button class="dropdown-item" type="button"><img src="{{ url('/front/img/country.svg')}}" alt=""> IND</button></li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="toggle_sub_menu">
                                <li>
                                    <a class="toggle_sub_txt" aria-current="page" href="#">Banners</a>
                                    <span><i class="fa-solid fa-plus"></i></span>
                                    <div class="submuenu_mb active">
                                        <ul>
                                            <li><a href="#">lorem ipsum</a></li>
                                            <li><a href="#">lorem ipsum</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="toggle_sub_txt" aria-current="page" href="#">Board Printing</a>
                                    <span><i class="fa-solid fa-plus"></i></span>
                                    <div class="submuenu_mb">
                                        <ul>
                                            <li><a href="#">lorem ipsum</a></li>
                                            <li><a href="#">lorem ipsum</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="toggle_sub_txt" aria-current="page" href="#">Poster Printing</a>
                                    <span><i class="fa-solid fa-plus"></i></span>
                                    <div class="submuenu_mb">
                                        <ul>
                                            <li><a href="#">lorem ipsum</a></li>
                                            <li><a href="#">lorem ipsum</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="toggle_sub_txt" aria-current="page" href="#">Signs & Stickers</a>
                                    <span><i class="fa-solid fa-plus"></i></span>
                                    <div class="submuenu_mb">
                                        <ul>
                                            <li><a href="#">lorem ipsum</a></li>
                                            <li><a href="#">lorem ipsum</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="toggle_sub_txt" aria-current="page" href="#">Marketing Material</a>
                                    <span><i class="fa-solid fa-plus"></i></span>
                                    <div class="submuenu_mb">
                                        <ul>
                                            <li><a href="#">lorem ipsum</a></li>
                                            <li><a href="#">lorem ipsum</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="toggle_sub_txt" aria-current="page" href="#">About</a>
                                    <span><i class="fa-solid fa-plus"></i></span>
                                    <div class="submuenu_mb">
                                        <ul>
                                            <li><a href="#">lorem ipsum</a></li>
                                            <li><a href="#">lorem ipsum</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="toggle_sub_txt" aria-current="page" href="#">Contact Us</a>
                                    <span><i class="fa-solid fa-plus"></i></span>
                                    <div class="submuenu_mb">
                                        <ul>
                                            <li><a href="#">lorem ipsum</a></li>
                                            <li><a href="#">lorem ipsum</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="toggle_hide_mb"></div>
                </div>
            </nav>
        </div>
    </header>
  

    @yield('content')
  
    
    <footer>
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="footer_top_lr">
                            <h5>Subscribe to our newsletter and get 20% OFF on Your First Order + Free Shipping.</h5>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <form class="footer_top_rt">
                            <input type="search" name="" placeholder="Your email address">
                            <a href="#" class="btn light_dark">Subscribe</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_wreap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="footer_grid">
                            <div class="footer_contnt">
                                <h6>Category</h6>
                                <ul>
                                    <li><a href="#">Flags</a></li>
                                    <li><a href="#">Vinyl Banners</a></li>
                                    <li><a href="#">Canopies</a></li>
                                    <li><a href="#">Pop-Up Banner Display</a></li>
                                    <li><a href="#">Step and Repeat Displays</a></li>
                                </ul>
                            </div>
                            <div class="footer_contnt">
                                <h6>Information</h6>
                                <ul>
                                    <li><a href="#">Order Tracking</a></li>
                                    <li><a href="#">Customer Reviews</a></li>
                                    <li><a href="#">Special Offers</a></li>
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Safety Signs & Banners</a></li>
                                </ul>
                            </div>
                            <div class="footer_contnt">
                                <h6>Information</h6>
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Contact us</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms of Use</a></li>
                                </ul>
                            </div>
                            <div class="footer_contnt">
                                <h6>Follow on</h6>
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i> Facebook</a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i> Instagram</a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i> Twitter</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer_contnt footer_contact">
                            <h6>Contact Information</h6>
                            <ul>
                                <li>
                                    <span>Address:</span>
                                    8975 W Charleston Blvd. Suite 190
                                    Las Vegas, NV 89117
                                </li>
                                <li><span>Phone:</span> <a href="tel:0 123 4567 890">0 123 4567 890</a></li>
                                <li><span>Email:</span> <a href="mailto:contact@cre8iveprinter.com">contact@cre8iveprinter.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="footer_bord"></div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card_imgs">
                            <img src="{{ url('/front/img/card_img.png')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bt">
            <div class="container">
                <div class="footer_bt_lt">
                    <p class="m-0">© 2024 Cre8ive Printer, All rights reserved.</p>
                </div>
                <ul class="footer_bt_rt">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    ></script>

    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
    integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    ></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="{{ url('/front/js/script.js')}}"></script>
</body>
</html>