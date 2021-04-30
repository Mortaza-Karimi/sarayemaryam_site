<?php
function fa_number($number)
{
	if(!is_numeric($number) || empty($number))
		return '۰';
	$en = array("0","1","2","3","4","5","6","7","8","9");
	$fa = array("۰","۱","۲","۳","۴","۵","۶","۷","۸","۹");
	return str_replace($en, $fa, $number);
}
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>فروشگاه سرای مریم</title>

    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!--    bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-rtl.css">

    <link rel="stylesheet" href="css/cssfull.css"/>
    <link rel="stylesheet" href="css/css1.css" media="screen and (max-width:1365px)"/>
    <link rel="stylesheet" href="css/css2.css" media="screen and (min-width:1366px)">
    <link rel="stylesheet" href="css/css3.css" media="screen and (min-width:1680px)">
    <link rel="stylesheet" href="css/style.css">

    <!--  bootstrap js  -->

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/slider1.js"></script>
    <script src="js/slider2.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>

</head>
<body>
<!--start header code-->
<div class="container-fluid bg-white shadow-sm myheader">
    <div class="row p-3">
        <div class="col-lg-2 col-md-3 col-12">
            <div class="logo_header">
                <span class="logo">سرای مریم</span>
            </div>
        </div>
        <div class="col-lg-6 col-md-9 col-12">
            <form method="post">
                <div class="input-group">
                    <input type="text" placeholder="جست و جو در سرای مریم..." class="form-control input-group-custom rounded-right">
                    <div class="input-group-prepend">
                        <a href="#" class="input-group-text material-icons search-icon rounded-left">search</a>
                    </div>
                </div>
            </form>
        </div>


        <div class="col-lg-2 col-md-6 col-12">
            <div class="dropdown">
                <a class="dropdown-toggle dropdown-toggle-custom" data-toggle="dropdown">
                    ورود / ثبت نام
                </a>
                <div class="dropdown-menu dropdown-menu-custom text-center pr-4 pl-4 pt-2 pb-2 rounded">
                    <div class="login-btn">
                        <a class="btn btn-custom-item-dropdown">
                            ورود به سرای مریم
                        </a>
                    </div>
                    <div class="mt-3 item-dropdown-1">
                        <span>کاربر جدید هستید؟</span>
                        <a href="#">ثبت نام کنید.</a>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="item-dropdown-2 text-left">
                        <i class="material-icons">person</i>
                        <a href="#"><span>پروفایل</span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-md-6 col-12">
            <a class="btn btn-custom-shopping-top-header btn-block">
                <i class="material-icons shopping_cart">shopping_cart</i>
                سبد خرید
                <span class="w3-badge w3-badge-custom"><?php echo fa_number(0) ?></span>
            </a>
        </div>
    </div>
</div>
<!-- end header code-->

<!-- start navbar code-->

<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom mynavbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    دسته بندی کالاها
                </a>
                <div class="dropdown-menu dropdown-menu-custom1" aria-labelledby="navbarDropdown">
                    <!--                        <a class="dropdown-item" href="#">پوشاک زنانه</a>-->
                    <!--                        <a class="dropdown-item" href="#">پوشاک دخترانه</a>-->
                    <!--                        <a class="dropdown-item" href="#">پوشاک پسرانه</a>-->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2">
                                <a class="dropdown-item category-title" href="#">پوشاک مریم</a>
                                <a class="dropdown-item" href="#">پوشاک مردانه</a>
                                <a class="dropdown-item" href="#">پوشاک زنانه</a>
                                <a class="dropdown-item" href="#">پوشاک پسرانه</a>
                                <a class="dropdown-item" href="#">پوشاک دخترانه</a>
                                <a class="dropdown-item" href="#">پوشاک نوزادی</a>
                            </div>

                            <div class="col-md-2">
                                <a class="dropdown-item category-title" href="#">خرازی مریم</a>
                                <a class="dropdown-item" href="#">ابزار خیاطی</a>
                                <a class="dropdown-item" href="#">لوازم التحریر</a>
                            </div>

                            <div class="col-md-2">
                                <a class="dropdown-item category-title" href="#">پارچه مریم</a>
                            </div>

                            <div class="col-md-2">
                                <a class="dropdown-item category-title" href="#">حجاب مریم</a>
                                <a class="dropdown-item" href="#">چادر</a>
                                <a class="dropdown-item" href="#">روسری</a>
                                <a class="dropdown-item" href="#">شال</a>
                                <a class="dropdown-item" href="#">ساق دست و دستکش</a>
                                <a class="dropdown-item" href="#">ماسک و پوشیه</a>
                            </div>

                            <div class="col-md-2">
                                <a class="dropdown-item category-title" href="#">صنایع دستی مریم</a>
                                <a class="dropdown-item" href="#">زیورآلات</a>
                            </div>

                            <div class="col-md-2">
                                <img style="display: inline-block; height: 250px" src="https://dkstatics-public.digikala.com/digikala-products/fc48990bdeb20c4831fbe57261194da5ae22fbee_1601388959.jpg?x-oss-process=image/resize,m_lfit,h_600,w_600/quality,q_90">
                            </div>

                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    پیشنهاد ویژه
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    حراجی مریم
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    بازار کاربران
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- end navbar code-->

<!-- start body code -->
<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-md-2 right-advertise mt-2">
            <div class="image-advertise-right mb-3">
                <a href="#">
                    <img src="images/tabligh1.png">
                </a>
            </div>
            <div class="image-advertise-right mb-3">
                <a href="#">
                    <img src="images/tabligh1.png">
                </a>
            </div>
        </div>

        <div class="col-md-10 mt-2">
            <div id="carouselExampleIndicators" class="carousel slide mb-3" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner carousel-inner-custom">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/tabligh2_1.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/tabligh2_2.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/tabligh2_3.png" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <!--start initiation-->

            <section class="mb-2">
                <div class="c-discount">
                    <div class="c-box" style="font-size: 1px!important;">
                        <div class="c-discount__content">
                            <div class="js-discount-container  is-active  c-discount__content-container"
                                 data-id="1">
                                <div class="c-discount__product js-discount-product  ">
                                    <af
                                            href="#"
                                            aria-label="پخش کننده خانگی مکسیدر "
                                            class="c-discount__product-url"></af>
                                    <div class="o-grid">
                                        <div class="row no-gutters">
                                            <div class="col-6">
                                                <div class="c-discount__img js-url">
                                                    <div class="c-discount__bottom-bar"></div>
                                                    <img src="images/imgslider1.jpg"
                                                         alt="پخش کننده خانگی مکسیدر سری MX-PS1403 مدل DV01">
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="c-discount__row-container">
                                                    <div class="c-discount__price">
                                                        <div class="c-discount__price--primary"><span
                                                                    class="c-discount__price--original">۴۲۹,۰۰۰
                                                                    <span>تومان</span></span><span
                                                                    class="c-discount__price--now">۳۰۹,۰۰۰
                                                                        <span>تومان</span></span></div>
                                                        <div class="c-discount__price--discount">
                                                            <div class="c-discount__price--discount-content">
                                                                ٪۲۸
                                                                <span> تخفیف </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="btn-invisible-call btn-invisible-call--finished-incredible">
                                                        اتمام موجودی شگفت‌انگیز
                                                    </div>
                                                    <div class="c-discount__title">پخش کننده خانگی
                                                        مکسیدر سری MX-PS1403 مدل DV01
                                                    </div>
                                                    <ul class="c-discount__ul">
                                                        <li>صفحه نمایش لمسی: ندارد</li>
                                                        <li>بلوتوث: دارد</li>
                                                    </ul>
                                                </div>
                                                <div class="c-discount__row-container">
                                                    <div class="c-discount__counter c-discount__counter--main">
                                                        <div class="c-counter js-counter-incredible"
                                                             data-countdown="2018-09-23 00:00:57"
                                                             data-countdownseconds="27112"></div>
                                                        <div class="c-discount__counter-title">زمان
                                                            باقیمانده تا
                                                            پایان
                                                            سفارش
                                                        </div>
                                                    </div>
                                                    <div class="c-discount__counter c-discount__counter--finished">
                                                        <div class="c-discount__price c-discount__price--normal">
                                                            <div class="c-discount__price--primary"><span
                                                                        class="c-discount__price--now">۳۰۹,۰۰۰
                                                                    تومان</span><span class="c-discount__counter-title">
                                                                    بدون تخفیف شگفت‌انگیز
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-discount-container    c-discount__content-container"
                                 data-id="2">
                                <div class="c-discount__product js-discount-product  "><a
                                            href="#"
                                            aria-label="ادو تویلت مردانه داویدف"
                                            class="c-discount__product-url"></a>
                                    <div class="o-grid">
                                        <div class="row no-gutters">
                                            <div class="col-6">
                                                <div class="c-discount__img js-url">
                                                    <div class="c-discount__bottom-bar"></div>
                                                    <img src="images/imgslider2.jpg"
                                                         alt="ادو تویلت مردانه داویدف مدل Champion حجم 90 میلی لیتر">
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="c-discount__row-container">
                                                    <div class="c-discount__price">
                                                        <div class="c-discount__price--primary"><span
                                                                    class="c-discount__price--original">۲۶۰,۰۰۰
                                                                    <span>تومان</span></span><span
                                                                    class="c-discount__price--now">۱۵۹,۰۰۰
                                                                        <span>تومان</span></span></div>
                                                        <div class="c-discount__price--discount">
                                                            <div class="c-discount__price--discount-content">
                                                                ٪۳۹
                                                                <span> تخفیف </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="btn-invisible-call btn-invisible-call--finished-incredible">
                                                        اتمام موجودی شگفت‌انگیز
                                                    </div>
                                                    <div class="c-discount__title">ادو تویلت مردانه
                                                        داویدف مدل Champion حجم 90 میلی لیتر
                                                    </div>
                                                    <ul class="c-discount__ul">
                                                        <li>نوع رایحه: تلخ</li>
                                                        <li>نوع رایحه: خوراکی</li>
                                                    </ul>
                                                </div>
                                                <div class="c-discount__row-container">
                                                    <div class="c-discount__counter c-discount__counter--main">
                                                        <div class="c-counter js-counter-incredible"
                                                             data-countdown="2018-09-23 00:00:14"
                                                             data-countdownseconds="2400"></div>
                                                        <div class="c-discount__counter-title">زمان
                                                            باقیمانده تا
                                                            پایان
                                                            سفارش
                                                        </div>
                                                    </div>
                                                    <div class="c-discount__counter c-discount__counter--finished">
                                                        <div class="c-discount__price c-discount__price--normal">
                                                            <div class="c-discount__price--primary"><span
                                                                        class="c-discount__price--now">۱۵۹,۰۰۰
                                                                    تومان</span><span class="c-discount__counter-title">
                                                                    بدون تخفیف شگفت‌انگیز
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-discount-container    c-discount__content-container"
                                 data-id="3">
                                <div class="c-discount__product js-discount-product  "><a
                                            href=""
                                            aria-label="ماشین ظرفشویی رومیزی هاردستون "
                                            class="c-discount__product-url"></a>
                                    <div class="o-grid">
                                        <div class="row no-gutters">
                                            <div class="col-6">
                                                <div class="c-discount__img js-url">
                                                    <div class="c-discount__bottom-bar"></div>
                                                    <img src="images/imgslider3.jpg"
                                                         alt="ماشین ظرفشویی رومیزی هاردستون مدل Silver DWM0601">
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="c-discount__row-container">
                                                    <div class="c-discount__price">
                                                        <div class="c-discount__price--primary"><span
                                                                    class="c-discount__price--original">۲,۵۵۰,۰۰۰
                                                                    <span>تومان</span></span><span
                                                                    class="c-discount__price--now">۲,۱۹۹,۰۰۰
                                                                        <span>تومان</span></span></div>
                                                        <div class="c-discount__price--discount">
                                                            <div class="c-discount__price--discount-content">
                                                                ٪۱۴
                                                                <span> تخفیف </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="btn-invisible-call btn-invisible-call--finished-incredible">
                                                        اتمام موجودی شگفت‌انگیز
                                                    </div>
                                                    <div class="c-discount__title">ماشین ظرفشویی رومیزی
                                                        هاردستون مدل Silver DWM0601
                                                    </div>
                                                    <ul class="c-discount__ul">
                                                        <li>قفسه بالا: دارد</li>
                                                        <li>نمایشگر: بله</li>
                                                    </ul>
                                                </div>
                                                <div class="c-discount__row-container">
                                                    <div class="c-discount__counter c-discount__counter--main">
                                                        <div class="c-counter js-counter-incredible"
                                                             data-countdown="2018-09-23 00:00:57"
                                                             data-countdownseconds="27112"></div>
                                                        <div class="c-discount__counter-title">زمان
                                                            باقیمانده تا
                                                            پایان
                                                            سفارش
                                                        </div>
                                                    </div>
                                                    <div class="c-discount__counter c-discount__counter--finished">
                                                        <div class="c-discount__price c-discount__price--normal">
                                                            <div class="c-discount__price--primary"><span
                                                                        class="c-discount__price--now">۲,۱۹۹,۰۰۰
                                                                    تومان</span><span class="c-discount__counter-title">
                                                                    بدون تخفیف شگفت‌انگیز
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-discount-container    c-discount__content-container"
                                 data-id="4">
                                <div class="c-discount__product js-discount-product  "><a
                                            href=""
                                            aria-label="کیف اداری "
                                            class="c-discount__product-url"></a>
                                    <div class="o-grid">
                                        <div class="row no-gutters">
                                            <div class="col-6">
                                                <div class="c-discount__img js-url">
                                                    <div class="c-discount__bottom-bar"></div>
                                                    <img src="images/imgslider4.jpg"
                                                         alt="کیف اداری مدل 1-344"></div>
                                            </div>
                                            <div class="col-5">
                                                <div class="c-discount__row-container">
                                                    <div class="c-discount__price">
                                                        <div class="c-discount__price--primary"><span
                                                                    class="c-discount__price--original">۱۰۴,۵۰۰
                                                                    <span>تومان</span></span><span
                                                                    class="c-discount__price--now">۶۹,۰۰۰
                                                                        <span>تومان</span></span></div>
                                                        <div class="c-discount__price--discount">
                                                            <div class="c-discount__price--discount-content">
                                                                ٪۳۴
                                                                <span> تخفیف </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="btn-invisible-call btn-invisible-call--finished-incredible">
                                                        اتمام موجودی شگفت‌انگیز
                                                    </div>
                                                    <div class="c-discount__title">کیف اداری مدل 1-344
                                                    </div>
                                                    <ul class="c-discount__ul">
                                                        <li>نوع: کیف اداری</li>
                                                        <li>نحوه حمل: رودوشی</li>
                                                    </ul>
                                                </div>
                                                <div class="c-discount__row-container">
                                                    <div class="c-discount__counter c-discount__counter--main">
                                                        <div class="c-counter js-counter-incredible"
                                                             data-countdown="2018-09-23 00:00:57"
                                                             data-countdownseconds="27112"></div>
                                                        <div class="c-discount__counter-title">زمان
                                                            باقیمانده تا
                                                            پایان
                                                            سفارش
                                                        </div>
                                                    </div>
                                                    <div class="c-discount__counter c-discount__counter--finished">
                                                        <div class="c-discount__price c-discount__price--normal">
                                                            <div class="c-discount__price--primary"><span
                                                                        class="c-discount__price--now">۶۹,۰۰۰
                                                                    تومان</span><span class="c-discount__counter-title">
                                                                    بدون تخفیف شگفت‌انگیز
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-discount-container    c-discount__content-container"
                                 data-id="5">
                                <div class="c-discount__product js-discount-product  "><a
                                            href=""
                                            aria-label="لامپ ال ای دی 12 وات بروکس "
                                            class="c-discount__product-url"></a>
                                    <div class="o-grid">
                                        <div class="row no-gutters">
                                            <div class="col-6">
                                                <div class="c-discount__img js-url">
                                                    <div class="c-discount__bottom-bar"></div>
                                                    <img src="images/imgslider5.jpg"
                                                         alt="لامپ ال ای دی 12 وات بروکس مدل A60 پایه E27">
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="c-discount__row-container">
                                                    <div class="c-discount__price">
                                                        <div class="c-discount__price--primary"><span
                                                                    class="c-discount__price--original">۱۷,۶۰۰
                                                                    <span>تومان</span></span><span
                                                                    class="c-discount__price--now">۱۰,۵۰۰
                                                                        <span>تومان</span></span></div>
                                                        <div class="c-discount__price--discount">
                                                            <div class="c-discount__price--discount-content">
                                                                ٪۴۱
                                                                <span> تخفیف </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="btn-invisible-call btn-invisible-call--finished-incredible">
                                                        اتمام موجودی شگفت‌انگیز
                                                    </div>
                                                    <div class="c-discount__title">لامپ ال ای دی 12 وات
                                                        بروکس مدل A60 پایه E27
                                                    </div>
                                                    <ul class="c-discount__ul">
                                                        <li>شکل ظاهری: حبابی</li>
                                                        <li>بازه توان مصرفی: 10.5 تا 20 وات</li>
                                                    </ul>
                                                </div>
                                                <div class="c-discount__row-container">
                                                    <div class="c-discount__counter c-discount__counter--main">
                                                        <div class="c-counter js-counter-incredible"
                                                             data-countdown="2018-09-23 00:00:57"
                                                             data-countdownseconds="27112"></div>
                                                        <div class="c-discount__counter-title">زمان
                                                            باقیمانده تا
                                                            پایان
                                                            سفارش
                                                        </div>
                                                    </div>
                                                    <div class="c-discount__counter c-discount__counter--finished">
                                                        <div class="c-discount__price c-discount__price--normal">
                                                            <div class="c-discount__price--primary"><span
                                                                        class="c-discount__price--now">۱۰,۵۰۰
                                                                    تومان</span><span class="c-discount__counter-title">
                                                                    بدون تخفیف شگفت‌انگیز
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-discount-container    c-discount__content-container"
                                 data-id="6">
                                <div class="c-discount__product js-discount-product  "><a
                                            href="#"
                                            aria-label="ادو پرفیوم زنانه روبرتو ویزاری"
                                            class="c-discount__product-url"></a>
                                    <div class="o-grid">
                                        <div class="row no-gutters">
                                            <div class="col-6">
                                                <div class="c-discount__img js-url">
                                                    <div class="c-discount__bottom-bar"></div>
                                                    <img src="images/imgslider6.jpg"
                                                         alt="ادو پرفیوم زنانه روبرتو ویزاری مدل COQUETTEحجم 100 میلی لیتر">
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="c-discount__row-container">
                                                    <div class="c-discount__price">
                                                        <div class="c-discount__price--primary"><span
                                                                    class="c-discount__price--original">۲۷۰,۰۰۰
                                                                    <span>تومان</span></span><span
                                                                    class="c-discount__price--now">۱۹۹,۰۰۰
                                                                        <span>تومان</span></span></div>
                                                        <div class="c-discount__price--discount">
                                                            <div class="c-discount__price--discount-content">
                                                                ٪۲۷
                                                                <span> تخفیف </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="btn-invisible-call btn-invisible-call--finished-incredible">
                                                        اتمام موجودی شگفت‌انگیز
                                                    </div>
                                                    <div class="c-discount__title">ادو پرفیوم زنانه
                                                        روبرتو ویزاری مدل COQUETTEحجم 100 میلی لیتر
                                                    </div>
                                                    <ul class="c-discount__ul">
                                                        <li>نوع رایحه: شیرین</li>
                                                        <li>نوع رایحه: خنک</li>
                                                    </ul>
                                                </div>
                                                <div class="c-discount__row-container">
                                                    <div class="c-discount__counter c-discount__counter--main">
                                                        <div class="c-counter js-counter-incredible"
                                                             data-countdown="2018-09-23 00:00:57"
                                                             data-countdownseconds="27112"></div>
                                                        <div class="c-discount__counter-title">زمان
                                                            باقیمانده تا
                                                            پایان
                                                            سفارش
                                                        </div>
                                                    </div>
                                                    <div class="c-discount__counter c-discount__counter--finished">
                                                        <div class="c-discount__price c-discount__price--normal">
                                                            <div class="c-discount__price--primary"><span
                                                                        class="c-discount__price--now">۱۹۹,۰۰۰
                                                                    تومان</span><span class="c-discount__counter-title">
                                                                    بدون تخفیف شگفت‌انگیز
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-discount-container    c-discount__content-container"
                                 data-id="7">
                                <div class="c-discount__product js-discount-product  "><a
                                            href=""
                                            aria-label="ترشی میکس مکزیکی"
                                            class="c-discount__product-url"></a>
                                    <div class="o-grid">
                                        <div class="row no-gutters">
                                            <div class="col-6">
                                                <div class="c-discount__img js-url">
                                                    <div class="c-discount__bottom-bar"></div>
                                                    <img src="images/imgslider7.jpg"
                                                         alt="ترشی میکس مکزیکی گل باز"></div>
                                            </div>
                                            <div class="col-5">
                                                <div class="c-discount__row-container">
                                                    <div class="c-discount__price">
                                                        <div class="c-discount__price--primary"><span
                                                                    class="c-discount__price--original">۱۱,۷۰۰
                                                                    <span>تومان</span></span><span
                                                                    class="c-discount__price--now">۷,۹۹۰
                                                                        <span>تومان</span></span></div>
                                                        <div class="c-discount__price--discount">
                                                            <div class="c-discount__price--discount-content">
                                                                ٪۳۲
                                                                <span> تخفیف </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="btn-invisible-call btn-invisible-call--finished-incredible">
                                                        اتمام موجودی شگفت‌انگیز
                                                    </div>
                                                    <div class="c-discount__title">ترشی میکس مکزیکی گل
                                                        باز
                                                    </div>
                                                    <ul class="c-discount__ul">
                                                        <li>مقدار ۵۰۰ گرم</li>
                                                    </ul>
                                                </div>
                                                <div class="c-discount__row-container">
                                                    <div class="c-discount__counter c-discount__counter--main">
                                                        <div class="c-counter js-counter-incredible"
                                                             data-countdown="2018-09-23 00:00:57"
                                                             data-countdownseconds="27112"></div>
                                                        <div class="c-discount__counter-title">زمان
                                                            باقیمانده تا
                                                            پایان
                                                            سفارش
                                                        </div>
                                                    </div>
                                                    <div class="c-discount__counter c-discount__counter--finished">
                                                        <div class="c-discount__price c-discount__price--normal">
                                                            <div class="c-discount__price--primary"><span
                                                                        class="c-discount__price--now">۷,۹۹۰
                                                                    تومان</span><span class="c-discount__counter-title">
                                                                    بدون تخفیف شگفت‌انگیز
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-discount-container    c-discount__content-container"
                                 data-id="8">
                                <div class="c-discount__product js-discount-product  "><a
                                            href=""
                                            aria-label="کفش مخصوص دویدن مردانه آلبرتین"
                                            class="c-discount__product-url"></a>
                                    <div class="o-grid">
                                        <div class="row no-gutters">
                                            <div class="col-6">
                                                <div class="c-discount__img js-url">
                                                    <div class="c-discount__bottom-bar"></div>
                                                    <img src="images/imgslider8.jpg"
                                                         alt="کفش مخصوص دویدن مردانه آلبرتینی مدل دانشجو کد 2808">
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="c-discount__row-container">
                                                    <div class="c-discount__price">
                                                        <div class="c-discount__price--primary"><span
                                                                    class="c-discount__price--original">۱۲۹,۰۰۰
                                                                    <span>تومان</span></span><span
                                                                    class="c-discount__price--now">۸۷,۰۰۰
                                                                        <span>تومان</span></span></div>
                                                        <div class="c-discount__price--discount">
                                                            <div class="c-discount__price--discount-content">
                                                                ٪۳۳
                                                                <span> تخفیف </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="btn-invisible-call btn-invisible-call--finished-incredible">
                                                        اتمام موجودی شگفت‌انگیز
                                                    </div>
                                                    <div class="c-discount__title">کفش مخصوص دویدن
                                                        مردانه آلبرتینی مدل دانشجو کد 2808
                                                    </div>
                                                    <ul class="c-discount__ul">
                                                        <li>نوع: کفش پیاده روی و دویدن</li>
                                                        <li>جنس رویه کفش: الیاف مصنوعی</li>
                                                    </ul>
                                                </div>
                                                <div class="c-discount__row-container">
                                                    <div class="c-discount__counter c-discount__counter--main">
                                                        <div class="c-counter js-counter-incredible"
                                                             data-countdown="2018-09-23 00:00:57"
                                                             data-countdownseconds="27112"></div>
                                                        <div class="c-discount__counter-title">زمان
                                                            باقیمانده تا
                                                            پایان
                                                            سفارش
                                                        </div>
                                                    </div>
                                                    <div class="c-discount__counter c-discount__counter--finished">
                                                        <div class="c-discount__price c-discount__price--normal">
                                                            <div class="c-discount__price--primary"><span
                                                                        class="c-discount__price--now">۸۷,۰۰۰
                                                                    تومان</span><span class="c-discount__counter-title">
                                                                    بدون تخفیف شگفت‌انگیز
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-discount-container    c-discount__content-container"
                                 data-id="9">
                                <div class="c-discount__product js-discount-product  "><a
                                            href="#"
                                            aria-label="تلفن بی‌سیم پاناسونیک "
                                            class="c-discount__product-url"></a>
                                    <div class="o-grid">
                                        <div class="row no-gutters">
                                            <div class="col-6">
                                                <div class="c-discount__img js-url">
                                                    <div class="c-discount__bottom-bar"></div>
                                                    <img src="images/imgslider9.jpg"
                                                         alt="تلفن بی‌سیم پاناسونیک مدل KX-TGD310">
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="c-discount__row-container">
                                                    <div class="c-discount__price">
                                                        <div class="c-discount__price--primary"><span
                                                                    class="c-discount__price--original">۳۳۰,۰۰۰
                                                                    <span>تومان</span></span><span
                                                                    class="c-discount__price--now">۳۰۸,۰۰۰
                                                                        <span>تومان</span></span></div>
                                                        <div class="c-discount__price--discount">
                                                            <div class="c-discount__price--discount-content">
                                                                ٪۷
                                                                <span> تخفیف </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="btn-invisible-call btn-invisible-call--finished-incredible">
                                                        اتمام موجودی شگفت‌انگیز
                                                    </div>
                                                    <div class="c-discount__title">تلفن بی‌سیم پاناسونیک
                                                        مدل KX-TGD310
                                                    </div>
                                                    <ul class="c-discount__ul">
                                                        <li>تعداد گوشی های بی سیم: یک عدد</li>
                                                        <li>تعداد خطوط: 1</li>
                                                    </ul>
                                                </div>
                                                <div class="c-discount__row-container">
                                                    <div class="c-discount__counter c-discount__counter--main">
                                                        <div class="c-counter js-counter-incredible"
                                                             data-countdown="2018-09-23 00:00:57"
                                                             data-countdownseconds="27112"></div>
                                                        <div class="c-discount__counter-title">زمان
                                                            باقیمانده تا
                                                            پایان
                                                            سفارش
                                                        </div>
                                                    </div>
                                                    <div class="c-discount__counter c-discount__counter--finished">
                                                        <div class="c-discount__price c-discount__price--normal">
                                                            <div class="c-discount__price--primary"><span
                                                                        class="c-discount__price--now">۳۰۸,۰۰۰
                                                                    تومان</span><span class="c-discount__counter-title">
                                                                    بدون تخفیف شگفت‌انگیز
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-discount-container    c-discount__content-container"
                                 data-id="10">
                                <div class="c-discount__product js-discount-product  "><a
                                            href="#"
                                            aria-label="ریمل حالت دهنده INLAY"
                                            class="c-discount__product-url"></a>
                                    <div class="o-grid">
                                        <div class="row no-gutters">
                                            <div class="col-6">
                                                <div class="c-discount__img js-url">
                                                    <div class="c-discount__bottom-bar"></div>
                                                    <img src="images/imgslider10.jpg"
                                                         alt="ریمل حالت دهنده INLAY مدل Exreme Length">
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="c-discount__row-container">
                                                    <div class="c-discount__price">
                                                        <div class="c-discount__price--primary"><span
                                                                    class="c-discount__price--original">۲۷,۵۰۰
                                                                    <span>تومان</span></span><span
                                                                    class="c-discount__price--now">۱۷,۵۰۰
                                                                        <span>تومان</span></span></div>
                                                        <div class="c-discount__price--discount">
                                                            <div class="c-discount__price--discount-content">
                                                                ٪۳۷
                                                                <span> تخفیف </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="btn-invisible-call btn-invisible-call--finished-incredible">
                                                        اتمام موجودی شگفت‌انگیز
                                                    </div>
                                                    <div class="c-discount__title">ریمل حالت دهنده INLAY
                                                        مدل Exreme Length
                                                    </div>
                                                    <ul class="c-discount__ul">
                                                        <li>ضد آب: خیر</li>
                                                    </ul>
                                                </div>
                                                <div class="c-discount__row-container">
                                                    <div class="c-discount__counter c-discount__counter--main">
                                                        <div class="c-counter js-counter-incredible"
                                                             data-countdown="2018-09-23 00:00:57"
                                                             data-countdownseconds="27112"></div>
                                                        <div class="c-discount__counter-title">زمان
                                                            باقیمانده تا
                                                            پایان
                                                            سفارش
                                                        </div>
                                                    </div>
                                                    <div class="c-discount__counter c-discount__counter--finished">
                                                        <div class="c-discount__price c-discount__price--normal">
                                                            <div class="c-discount__price--primary"><span
                                                                        class="c-discount__price--now">۱۷,۵۰۰
                                                                    تومان</span><span class="c-discount__counter-title">
                                                                    بدون تخفیف شگفت‌انگیز
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="c-discount__aside c-discount__aside_custom">
                            <div class="c-discount__aside-container js-discount-slider">
                                <ul class="c-discount__aside-ul">
                                    <li class="c-discount__aside-li"><a
                                                                        class="c-discount__aside-a js-discount-item   is-active"
                                                                        data-id="1"><span>پخش کننده خانگی مکسیدر </span></a>
                                    </li>
                                    <li class="c-discount__aside-li"><a
                                                                        class="c-discount__aside-a js-discount-item  "
                                                                        data-id="2"><span>ادو تویلت مردانه داویدف</span></a>
                                    </li>
                                    <li class="c-discount__aside-li"><a
                                                                        class="c-discount__aside-a js-discount-item  "
                                                                        data-id="3"><span>ماشین ظرفشویی رومیزی هاردستون </span></a>
                                    </li>
                                    <li class="c-discount__aside-li"><a
                                                                        class="c-discount__aside-a js-discount-item  "
                                                                        data-id="4"><span>کیف اداری </span></a>
                                    </li>
                                    <li class="c-discount__aside-li"><a
                                                                        class="c-discount__aside-a js-discount-item  "
                                                                        data-id="5"><span>لامپ ال ای دی 12 وات بروکس </span></a>
                                    </li>
                                    <li class="c-discount__aside-li"><a
                                                                        class="c-discount__aside-a js-discount-item  "
                                                                        data-id="6"><span>ادو پرفیوم زنانه روبرتو ویزاری</span></a>
                                    </li>
                                    <li class="c-discount__aside-li"><a
                                                                        class="c-discount__aside-a js-discount-item  "
                                                                        data-id="7"><span>ترشی میکس مکزیکی</span></a>
                                    </li>
                                    <li class="c-discount__aside-li"><a
                                                                        class="c-discount__aside-a js-discount-item  "
                                                                        data-id="8"><span>کفش مخصوص دویدن مردانه آلبرتین</span></a>
                                    </li>
                                    <li class="c-discount__aside-li"><a
                                                                        class="c-discount__aside-a js-discount-item  "
                                                                        data-id="9"><span>تلفن بی‌سیم پاناسونیک </span></a>
                                    </li>
                                    <li class="c-discount__aside-li"><a
                                                                        class="c-discount__aside-a js-discount-item  "
                                                                        data-id="10"><span>ریمل حالت دهنده INLAY</span></a>
                                    </li>
                                </ul>
                                <a href="#"
                                   class="btn btn-info btn_custom1" style="color: #ffffff !important;">
                                    <i class="material-icons">
                                        keyboard_arrow_left
                                    </i>
                                    مشاهده همه شگفت‌انگیزها
                                </a></div>
                            <div class="c-discount__aside-btn-next js-discount-slider-next">
                                <i class="material-icons">
                                    keyboard_arrow_left
                                </i>
                            </div>
                            <div class="c-discount__aside-btn-prev js-discount-slider-prev">
                                <i class="material-icons">
                                    keyboard_arrow_right
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--end initiation-->
        </div>
    </div>
</div>

<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-md-3 img-advertise-row">
            <a href="#"><img src="images/1.jpg"></a>
        </div>
        <div class="col-md-3 img-advertise-row">
            <a href="#"><img src="images/2.jpg"></a>
        </div>
        <div class="col-md-3 img-advertise-row">
            <a href="#"><img src="images/3.jpg"></a>
        </div>
        <div class="col-md-3 img-advertise-row">
            <a href="#"><img src="images/4.jpg"></a>
        </div>
    </div>

</div>
<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-md-6 img-advertise-row">
            <a href="#"><img src="images/5.jpg"></a>
        </div>
        <div class="col-md-6 img-advertise-row">
            <a href="#"><img src="images/6.jpg"></a>
        </div>
    </div>
</div>
<!--start owl-->
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-custom-ads">
                <div class="card-body card-body-custom-ads">
                    <div class="d-block card-header card-header-custom-ads bg-white">
                        <p>پوشاک مردانه</p>
                    </div>
                    <div class="owl-carousel owl-theme">
                        <a href="#"><div class="item">
                                <div class="card card-custom-ads2">
                                    <div class="card-body card-body-custom-ads2">
                                        <img src="images/owl-item-img.jpg">
                                    </div>
                                    <div class="card-footer">
                                        <h4>لباس خوشگل مردانه برای تو</h4>
                                        <span class="d-block owl-amount"><?php echo fa_number(12000000)?> تومان</span>
                                    </div>
                                </div>
                            </div></a>
                        <a href="#"><div class="item">
                            <div class="card card-custom-ads2">
                                <div class="card-body card-body-custom-ads2">
                                    <img src="images/owl-item-img1.jpg">
                                </div>
                                <div class="card-footer">
                                    <h4>لباس خوشگل مردانه برای تو</h4>
                                    <span class="d-block owl-amount"><?php echo fa_number(12000000)?> تومان</span>
                                </div>
                            </div>
                        </div></a>
                        <a href="#"><div class="item">
                            <div class="card card-custom-ads2">
                                <div class="card-body card-body-custom-ads2">
                                    <img src="images/owl-item-img2.jpg">
                                </div>
                                <div class="card-footer">
                                    <h4>لباس خوشگل مردانه برای تو</h4>
                                    <span class="d-block owl-amount"><?php echo fa_number(12000000)?> تومان</span>
                                </div>
                            </div>
                        </div></a>
                        <a href="#"><div class="item">
                            <div class="card card-custom-ads2">
                                <div class="card-body card-body-custom-ads2">
                                    <img src="images/owl-item-img3.jpg">
                                </div>
                                <div class="card-footer">
                                    <h4>لباس خوشگل مردانه برای تو</h4>
                                    <span class="d-block owl-amount"><?php echo fa_number(12000000)?> تومان</span>
                                </div>
                            </div>
                        </div></a>
                        <a href="#"><div class="item">
                            <div class="card card-custom-ads2">
                                <div class="card-body card-body-custom-ads2">
                                    <img src="images/owl-item-img4.jpg">
                                </div>
                                <div class="card-footer">
                                    <h4>لباس خوشگل مردانه برای تو</h4>
                                    <span class="d-block owl-amount"><?php echo fa_number(12000000)?> تومان</span>
                                </div>
                            </div>
                        </div></a>
                        <a href="#"><div class="item">
                            <div class="card card-custom-ads2">
                                <div class="card-body card-body-custom-ads2">
                                    <img src="images/owl-item-img5.jpg">
                                </div>
                                <div class="card-footer">
                                    <h4>لباس خوشگل مردانه برای تو</h4>
                                    <span class="d-block owl-amount"><?php echo fa_number(12000000)?> تومان</span>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-custom-ads">
                <div class="card-body card-body-custom-ads">
                    <div class="d-block card-header card-header-custom-ads bg-white">
                        <p>پوشاک زنانه</p>
                    </div>
                    <div class="owl-carousel owl-theme">
                        <a href="#"><div class="item">
                                <div class="card card-custom-ads2">
                                    <div class="card-body card-body-custom-ads2">
                                        <img src="images/pooshak-zanane1.jpg">
                                    </div>
                                    <div class="card-footer">
                                        <h4>لباس خوشگل زنانه برای تو</h4>
                                        <span class="d-block owl-amount"><?php echo fa_number(12000000)?> تومان</span>
                                    </div>
                                </div>
                            </div></a>
                        <a href="#"><div class="item">
                                <div class="card card-custom-ads2">
                                    <div class="card-body card-body-custom-ads2">
                                        <img src="images/pooshak-zanane2.jpg">
                                    </div>
                                    <div class="card-footer">
                                        <h4>لباس خوشگل زنانه برای تو</h4>
                                        <span class="d-block owl-amount"><?php echo fa_number(12000000)?> تومان</span>
                                    </div>
                                </div>
                            </div></a>
                        <a href="#"><div class="item">
                                <div class="card card-custom-ads2">
                                    <div class="card-body card-body-custom-ads2">
                                        <img src="images/pooshak-zanane3.jpg">
                                    </div>
                                    <div class="card-footer">
                                        <h4>لباس خوشگل زنانه برای تو</h4>
                                        <span class="d-block owl-amount"><?php echo fa_number(12000000)?> تومان</span>
                                    </div>
                                </div>
                            </div></a>
                        <a href="#"><div class="item">
                                <div class="card card-custom-ads2">
                                    <div class="card-body card-body-custom-ads2">
                                        <img src="images/pooshak-zanane4.jpg">
                                    </div>
                                    <div class="card-footer">
                                        <h4>لباس خوشگل زنانه برای تو</h4>
                                        <span class="d-block owl-amount"><?php echo fa_number(12000000)?> تومان</span>
                                    </div>
                                </div>
                            </div></a>
                        <a href="#"><div class="item">
                                <div class="card card-custom-ads2">
                                    <div class="card-body card-body-custom-ads2">
                                        <img src="images/pooshak-zanane5.jpg">
                                    </div>
                                    <div class="card-footer">
                                        <h4>لباس خوشگل زنانه برای تو</h4>
                                        <span class="d-block owl-amount"><?php echo fa_number(12000000)?> تومان</span>
                                    </div>
                                </div>
                            </div></a>
                        <a href="#"><div class="item">
                                <div class="card card-custom-ads2">
                                    <div class="card-body card-body-custom-ads2">
                                        <img src="images/pooshak-zanane6.jpg">
                                    </div>
                                    <div class="card-footer">
                                        <h4>لباس خوشگل زنانه برای تو</h4>
                                        <span class="d-block owl-amount"><?php echo fa_number(12000000)?> تومان</span>
                                    </div>
                                </div>
                            </div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end owl-->
<div class="container-fluid text-center mt-3">
    <div class="totop">
        <div class="totop-box">
            <div class="totop-btn-box text-center">
                <i class="material-icons">keyboard_arrow_up</i>
            </div>
            <span class="totop-text">
            برگشت به بالا
        </span>
        </div>
    </div>
</div>

<div class="container-fluid footer-bg text-center">
    <div class="row m-auto">
        <div class="col-md-1"></div>
        <div class="col-sm-3 col-md-2 text-center">
            <img src="images/8f570b58.svg" class="d-block m-auto">
            <span>تحویل اکسپرس</span>
        </div>
        <div class="col-sm-3 col-md-2 text-center">
            <img src="images/a9286d2f.svg" class="d-block m-auto">
            <span>پشتیبانی <?php echo fa_number(24)?> ساعته</span>
        </div>
        <div class="col-sm-3 col-md-2 text-center">
            <img src="images/22414818.svg" class="d-block m-auto">
            <span>پرداخت در محل</span>
        </div>
        <div class="col-sm-3 col-md-2 text-center">
            <img src="images/514926b1.svg" class="d-block m-auto">
            <span><?php echo fa_number(7)?> روز ضمانت بازگشت</span>
        </div>

        <div class="col-sm-3 col-md-2 text-center">
            <img src="images/fdb293e6.svg" class="d-block m-auto">
            <span>ضمانت اصل بودن کالا</span>
        </div>
        <div class="col-md-1"></div>

    </div>

    <hr>
    <div class="row">
        <div class="col-md-2">
            <p>فوتر سایت</p>
            <p>فوتر سایت</p>
            <p>فوتر سایت</p>
            <p>فوتر سایت</p>
            <p>فوتر سایت</p>
        </div>
        <div class="col-md-2">
            <p>فوتر سایت</p>
            <p>فوتر سایت</p>
            <p>فوتر سایت</p>
            <p>فوتر سایت</p>
            <p>فوتر سایت</p>
        </div>
        <div class="col-md-2">
            <p>فوتر سایت</p>
            <p>فوتر سایت</p>
            <p>فوتر سایت</p>
            <p>فوتر سایت</p>
            <p>فوتر سایت</p>
        </div>
        <div class="col-md-2">
            <p>فوتر سایت</p>
            <p>فوتر سایت</p>
            <p>فوتر سایت</p>
            <p>فوتر سایت</p>
            <p>فوتر سایت</p>
        </div>
        <div class="col-md-4">
            <p>از تخفیف های سرای مریم با خبر شوید</p>
            <input type="text" placeholder="شماره خود را وارد کنید"><input type="submit" value="ارسال">
        </div>
    </div>
</div>
<!-- end body code -->
<script>
    $(document).ready()
    {
        var ol = $('.owl-carousel');
        ol.owlCarousel({
            items: 4,
            rtl: true,
            nav: true,
            margin: 24,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        });

        $('.totop-box').each(function(){
            $(this).click(function(){
                $('html').animate({ scrollTop: 0 }, 'slow'); return true;
            });
        });
    }
</script>
</body>
</html>