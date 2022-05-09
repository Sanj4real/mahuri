<section class="join spacing">
    <div class="container">
        <div class="join-wrap">
            <div class="join-block">
                <h4>Join the Maauhri</h4>
                <p>Subscribe here and get updates on everything</p>
            </div>
            <div class="join-block form-group">
                <form action="">
                    <div class="email-wrap ">
                        <input type="email" name="email" id="" placeholder="Enter Email Address">
                        <input type="submit" class="site-button" value="Subscribe">
                    </div>
                </form>
            </div>
        </div>
        <div class="join-wrap">
            <div class="join-block">
                <ul>
                    <li class="top-head">Payment Methods</li>
                    <li>
                        <a href="">
                            <img src="img/pay/e-sewa.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="img/pay/khalti.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="img/pay/master.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="img/pay/visa.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

</main>

<footer>
    <div class="container">
        <div class="row ">
            <div class=" col-lg-2 col-md-6 col-sm-6 ">
                <div class="footer ">
                    <div class="foot-logo">
                        <a href="index.php">
                            <img src="img/logo/logo.png" alt="site-logo">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="footer">
                    <ul>
                        <li><a href="about.php">About Service</a></li>
                        <li><a href="carrer.php">Payment</a></li>
                        <li><a href="faq.php">Faq</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="footer">
                    <ul>
                        <li><a href="privacy.php">Privacy Policy</a></li>
                        <li><a href="agreementh.php">User Agreement</a></li>
                        <li><a href="contact.php">Legal Information</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="footer">
                    <ul>
                        <li><a href="about.php">News</a></li>
                        <li><a href="carrer.php">Terms of Cooperation</a></li>
                        <li><a href="faq.php">Be part of our Team</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="footer">
                    <ul>
                        <li><a href="about.php">News</a></li>
                        <li><a href="carrer.php">Terms of Cooperation</a></li>
                        <li><a href="faq.php">Be part of our Team</a></li>
                    </ul>
                </div>
            </div>

            <div class=" col-lg-2 col-md-6 col-sm-6">
                <div class="footer last">
                    <div class="footer-title">
                        <h5>Connect</h5>
                        <ul class=" social">
                            <li>
                                <a href="#" target="_blank">
                                    <img src="img/svg/social/f.svg" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <img src="img/svg/social/i.svg" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <img src="img/svg/social/t.svg" alt="">
                                </a>
                            </li>
                        </ul>
                        <a href="mailto:maauri@gmail.com">maauri@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- <a href="#" class="btn btn-dark text-center" id="msgpopup" style="">
    <img src="img/svg/msg.svg" alt="">
</a> -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
(function() {
    var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/564f634590d1bced690e0633/default';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
})();
</script>
<!--End of Tawk.to Script-->



<!-- library -->
<script src="app/js/jquery.min.js"></script>
<script src="app/js/bootstrap.bundle.min.js"></script>

<script src="app/js/jquery.fancybox.min.js"></script>

<!-- carousel -->
<script type="text/javascript" src="app/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="app/js/custom-carousel.js"></script>

<!-- easytimer -->
<script src="app/js/easytimer.min.js"></script>

<!-- data-table -->
<script src="app/js/jquery.dataTables.min.js"></script>

<script src="app/js/xzoom.min.js"></script>
<script src="app/js/setup.js"></script>

<!-- progressJS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/progress.js/0.1.0/progress.min.js"></script>


<!-- <script src="app/js/sweetalert.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>

<!-- imageupload  -->
<script src="app/js/image-uploader.min.js"></script>

<script src="app/js/script.js"></script>


<script>


// onscroll-sidebar
var btn = $('#left-sidebar');
var first = document.querySelector("#start").offsetTop;
var last = document.querySelector("#end").offsetTop;

$(window).scroll(function() {
    if ($(window).scrollTop() > first && $(window).scrollTop() <= last) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
});



// document.querySelector("#msgpopup").addEventListener('click', function() {
//     Swal.fire("Our First Alert");
// });
// 
</script>
</body>

</html>