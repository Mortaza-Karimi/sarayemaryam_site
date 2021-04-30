<header id="main_header">
    <!----start header--->
    <div id="header">

        <!----start logo--->
        <div id="logo">
            <a href="<?php echo AddressMyWebsite; ?>"><img
                        src="<?php echo AddressMyWebsite; ?>/public/user/images/logo.png"></a>
        </div>
        <!----End logo--->

        <!----start header_row_top_right--->
        <div id="header_row_top_right" class="BYekan-sm">
            <div id="header_row_top">
                <?php if (isset($_SESSION['emailmember'])) { ?>
                    <a style="font-size: 15px;color: #00a65a"> کاربر گرامی به وبسایت خوش امدید</a>

                        <a href="<?php echo AddressMyWebsite.'exitsite'?>" style="color: #721c24;font-size: 15px;margin-right: 10px">خروج از وبسایت</a>
                <?php } else { ?>
                    <span class="bg_span_login style_span_header_top"></span>
                    <a href="<?php echo AddressMyWebsite . 'login' ?>">فروشگاه اینترنتی دیجی کالا وارد شوید</a>
                    <span class="bg_span_register style_span_header_top"></span>
                    <a href="<?php echo AddressMyWebsite . 'register' ?>">ثبت نام کنید</a>
                <?php } ?>
            </div>
            <div id="header_row_bottom">
                <div id="basket_bottom">
                    <div id="basket_icon"></div>
                    <div id="basket_left">
                        سبد خرید
                        <span>0</span>
                    </div>
                </div>
                <div id="search_box">
                    <input class="BYekan-sm" type="text" name="search_box"
                           placeholder="محصول مورد نظرتان را جستجو کنید....">
                    <span></span>
                </div>
            </div>
        </div><!----End header_row_top_right--->

    </div><!----End Main_header--->

</header>