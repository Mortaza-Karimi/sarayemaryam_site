<?php require_once __DIR__.DIRECTORY_SEPARATOR.'../common/header.php';?>
<!----start Main_header--->

<?php require_once __DIR__.DIRECTORY_SEPARATOR.'../common/top_header.php';?>

<!----End Main_header--->

<!----start top_menu--->
<?php require_once __DIR__.DIRECTORY_SEPARATOR.'../common/top_nav.php';?>

<!----End top_menu--->

<!-----------start-main-------------->
<div id="main">

    <!-----------start-sidebar-------------->
    <?php require_once __DIR__.DIRECTORY_SEPARATOR.'zicco_sidebar.php';?>
    <!-----------End-sidebar-------------->

    <!-----------start-content-------------->
    <div id="content">
        <?php require_once __DIR__.DIRECTORY_SEPARATOR.'zicco_slider.php';?>
        <?php require_once __DIR__.DIRECTORY_SEPARATOR.'zicco_slideradvance.php';?>
        <?php require_once __DIR__.DIRECTORY_SEPARATOR.'zicco_random_product.php';?>
        <?php require_once __DIR__.DIRECTORY_SEPARATOR.'zicco_post.php';?>

    </div>
    <!-----------End-content-------------->
</div>


<!------------End-main--------------->
<?php require_once __DIR__.DIRECTORY_SEPARATOR.'../common/footer.php';?>
