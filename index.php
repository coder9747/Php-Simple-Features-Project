<?php include("./header.php");
include("./nav.php");
session_start();
if (!isset($_SESSION["id"])) {
    header("location:login.php");
}
?>



<div class="overflow-hidden">
    <div class="container-fluid col-xxl-8">
        <div class="row flex-lg-nowrap align-items-center g-5">
            <div class="order-lg-1 w-100">
                <img style="clip-path: polygon(25% 0%, 100% 0%, 100% 99%, 0% 100%);" src="https://images.unsplash.com/photo-1618004912476-29818d81ae2e?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8NzV8fHB1cnBsZXxlbnwwfDB8fHwxNjQ3NDcxNjY4&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=768" class="d-block mx-lg-auto img-fluid" alt="Photo by Milad Fakurian" loading="lazy" srcset="https://images.unsplash.com/photo-1618004912476-29818d81ae2e?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8NzV8fHB1cnBsZXxlbnwwfDB8fHwxNjQ3NDcxNjY4&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=768 1080w, https://images.unsplash.com/photo-1618004912476-29818d81ae2e??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8NzV8fHB1cnBsZXxlbnwwfDB8fHwxNjQ3NDcxNjY4&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=150 150w, https://images.unsplash.com/photo-1618004912476-29818d81ae2e??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8NzV8fHB1cnBsZXxlbnwwfDB8fHwxNjQ3NDcxNjY4&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=300 300w, https://images.unsplash.com/photo-1618004912476-29818d81ae2e??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8NzV8fHB1cnBsZXxlbnwwfDB8fHwxNjQ3NDcxNjY4&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=768 768w, https://images.unsplash.com/photo-1618004912476-29818d81ae2e??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8NzV8fHB1cnBsZXxlbnwwfDB8fHwxNjQ3NDcxNjY4&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1024 1024w" sizes="(max-width: 1080px) 100vw, 1080px" width="2160" height="768">
            </div>
            <div class="col-lg-6 col-xl-5 text-center text-lg-start pt-lg-5 mt-xl-4">
                <div class="lc-block mb-4">
                    <div editable="rich">
                        <h1 class="fw-bold display-3">Welcome To <?php echo $_SESSION["name"]; ?></h1>
                    </div>
                </div>

                <div class="lc-block mb-5">
                    <div editable="rich">
                        <p class="rfs-8"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et metus id ligula malesuada placerat sit amet quis enim.</p>
                    </div>
                </div>

                <div class="lc-block mb-6"><a class="btn btn-primary px-4 me-md-2 btn-lg" href="#" role="button">Get it now</a>
                </div>

                <div class="lc-block">
                    <div editable="rich">
                        <p class="fw-bold"> Business collaboration based on trust:</p>
                    </div>
                </div>
                <div class="row">
                    <div class="lc-block col-3"><img class="img-fluid wp-image-975" src="https://lclibrary.b-cdn.net/starters/wp-content/uploads/sites/15/2021/11/motorola.svg" width="" height="300" srcset="" sizes="" alt=""></div>
                    <div class="lc-block col-3"><img class="img-fluid wp-image-977" src="https://lclibrary.b-cdn.net/starters/wp-content/uploads/sites/15/2021/11/asus.svg" width="" height="300" srcset="" sizes="" alt=""></div>
                    <div class="lc-block col-3"><img class="img-fluid wp-image-974" src="https://lclibrary.b-cdn.net/starters/wp-content/uploads/sites/15/2021/11/sony.svg" width="" height="300" srcset="" sizes="" alt=""></div>
                    <div class="lc-block col-3"><img class="img-fluid wp-image-967" src="https://lclibrary.b-cdn.net/starters/wp-content/uploads/sites/15/2021/11/samsung-282297.svg" width="" height="300" srcset="" sizes="" alt=""></div>
                </div>
            </div>

        </div><!-- /lc-block -->
    </div>
</div>

<div class="container-fluid my-5">
    <div class="fw-bold display-6 text-center my-5">Features</div>
    <div class="row border border-warning justify-content-center my-5 p-5 gap-3">
        <?php 
         include("./storydatabase.php");
        $sql = "select * from `topics`";
        $result = mysqli_query($con,$sql) or die(mysqli_error($con));
        if(mysqli_num_rows($result)){
            while($row = mysqli_fetch_assoc($result)){
            ?>
        <div class="col-md-3 d-flex justify-content-center gap-3 col-sm-6">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?php echo $row["image"] ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row["name"] ?></h5>
                    <p class="card-text"><?php echo substr($row["descriptoin"],0,50)?>...</p>
                    <a href="story.php?id=<?php echo $row["id"] ?>" class="btn btn-primary w-100">Read</a>
                </div>
            </div>
        </div>
        <?php }}?>
        
    </div>

</div>
<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container-fluid my-5">
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #45526e">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            Company name
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer
                            content. Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                        <p>
                            <a class="text-white">MDBootstrap</a>
                        </p>
                        <p>
                            <a class="text-white">MDWordPress</a>
                        </p>
                        <p>
                            <a class="text-white">BrandFlow</a>
                        </p>
                        <p>
                            <a class="text-white">Bootstrap Angular</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            Useful links
                        </h6>
                        <p>
                            <a class="text-white">Your Account</a>
                        </p>
                        <p>
                            <a class="text-white">Become an Affiliate</a>
                        </p>
                        <p>
                            <a class="text-white">Shipping Rates</a>
                        </p>
                        <p>
                            <a class="text-white">Help</a>
                        </p>
                    </div>

                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                        <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                        <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                        <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->

            <hr class="my-3">

            <!-- Section: Copyright -->
            <section class="p-3 pt-0">
                <div class="row d-flex align-items-center">
                    <!-- Grid column -->
                    <div class="col-md-7 col-lg-8 text-center text-md-start">
                        <!-- Copyright -->
                        <div class="p-3">
                            © 2020 Copyright:
                            <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
                        </div>
                        <!-- Copyright -->
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                        <!-- Facebook -->
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-facebook-f"></i></a>

                        <!-- Twitter -->
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-twitter"></i></a>

                        <!-- Google -->
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-google"></i></a>

                        <!-- Instagram -->
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-instagram"></i></a>
                    </div>
                    <!-- Grid column -->
                </div>
            </section>
            <!-- Section: Copyright -->
        </div>
        <!-- Grid container -->
    </footer>
    <!-- Footer -->
</div>
<!-- End of .container -->