<?php include 'include/header.php'; ?>
<style>
    .header-thanks {
        background: white;
    }

    header {
        display: none;
    }
    .menu
    {
        display: none !important;
    }
    footer p
    {
        margin-top: 30px;
    }
</style>
<div class="header-thanks py-4 ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex align-items center justify-content-center">
                <a href="index.php" class="d-table mx-auto"> <img src="images/logo.png" alt="">
                            <img src="images/logo2.png"alt="" class="ml-3"></a>
                
            </div>
        </div>
    </div>

</div>
<div class="thankyou min-vh-100 d-flex flex-fill position-relative">
    <div class="circle-th"><img src="images/circle.svg"  alt=""></div>
    <div class="clock-th"><img src="images/clock.svg"  alt=""></div>
    <div class="container d-flex flex-fill">
        <div class="row d-flex flex-fill">
            <div class="col-md-12 d-flex flex-fill align-items-center justify-content-center flex-column">
                <div class="umbr"><img src="images/umbrala.svg" alt=""></div>
                <figure class=""><img src="images/topreb.svg" alt=""></figure>
                <h1 class="pr-font mb-md-5 mb-3 mt-md-3">Thank <span>You!</span></h1>
                <h2 class="pr-font">An Expert will call you Soon.</h2>
                <a href="index.php" class="pr-font">Go Back to Homepage</a>
                <figure class="mt-4"><img src="images/bottomreb.svg" alt=""></figure>
            </div>
        </div>
    </div>
    
</div>
<img src="images/thanks-bg.svg" class="d-table mx-auto mb-md-4" alt="">
<?php include 'include/footer.php'; ?>