<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo $siteurl ?>assets/images/flogo.png" alt="">
                <p>rem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class="col-md-2">
                <ul class="link">
                    <li><a href="javascript:">Home</a></li>
                    <li><a href="javascript:">About US</a></li>
                    <li><a href="javascript:">FAQs</a></li>
                    <li><a href="javascript:">Pricing</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <ul >
                    <li><a href="<?php echo $siteurl ?>about-us/">-Services</a></li>
                    <li><a href="#">-Premium Services</a></li>  
                    <li><a href="<?php echo $siteurl ?>our-services/website/">-Wiki Profiles</a></li>
                    <li><a href="<?php echo $siteurl ?>our-reviews/">-Wiki Marketing</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="link cal">
                    <li><a href="calto: 1-888-237-2402">
                        <img src="<?php echo $siteurl ?>assets/images/phone.png" alt="Call">  1-888-237-2402
                    </a></li>
                    <li><a href="">
                    <i class="fab fa-linkedin"></i>
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-twitter-square"></i>
                    </a></li>
                </ul>
            </div>
        </div>
    </div>
    
</footer>

<div style="display: none;" class="popupform" id="popupform">
    <div class="modal-body">
        <div class="popup-bann"><img src="<?php echo $siteurl ?>assets/images/popop-img.png" alt=""></div>
        <div class="popup-content">
            <h2>Get Started Now</h2>
            <p>Providing you the perfect solution for your business needs. Let's work together and unlock doors to success.</p>
            <form action="/order/index.php" method="post" class="validate-popupform-quote">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="required" required name="customer_name" placeholder="Your Name">
                        <input type="email" class="required email" required name="customer_email"  placeholder="Your Email">
                        <input type="tel" class="required  number ftpn" required name="customer_phone"   minlength="7" maxlength="14" placeholder="Your Phone">
                    </div>
                    <div class="col-md-6">
                        <textarea autocomplete="nope"  name="msg" class="required" required placeholder="To help us understand better, enter a brief description about your project."></textarea>
                    </div>
                    <div class="col-md-12 text-center">
                        <p class="form_tagline"> <input type="checkbox" name="agree"> &nbsp; To receive our weekly Newsletter/SMS and offers check here. You can unsubscribe at any time.</p>
                        <input type="submit" class="btn btn-blue" name="send_data" value="Submit">
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>