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

<div class="container-fluid mt-3">
	<div class="row">
		<div class="col-md-3">

		</div>
		<div class="col-md-9">
            <div class="bg-transparent">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-breadcrumb">
                        <li class="breadcrumb-item"><a href="#">فروشگاه سرای مریم</a></li>
                        <li class="breadcrumb-item"><a href="#">پوشاک مریم</a></li>
                        <li class="breadcrumb-item active" aria-current="page">پوشاک مردانه</li>
                    </ol>
                </nav>
            </div>
		</div>
	</div>
</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

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
