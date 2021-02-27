<header>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="<?php echo $siteurl ?>" class="logo">
                    <img src="<?php echo $siteurl ?>assets/images/logo.png" alt="LOGO">
                </a>
            </div>
            <div class="col-md-6">
                <div class="mobile-screen">
                    <a href="javascript:" onclick="navOpen()" class="btn" id="list-btn">
                            <i class="fas fa-bars"></i>
                    </a>
                </div>     
                    <a href="javascript:" onclick="navClosed()" class="btn" id="cross">
                            <i class="fas fa-times"></i>
                    </a>           
                <nav class="mobile-view navbar-expand-md main-menu" id="menu-list">
                    <ul class="menu">            
                        <li><a href="<?php echo $siteurl ?>" >Home</a></li>
                        <li><a href="<?php echo $siteurl ?>our-services/logo-design/">About Us</a></li>
                        <li><a href="<?php echo $siteurl ?>our-services/website-design/">FAQs</a></li>
                        <li><a href="<?php echo $siteurl ?>our-services/stationary-design/">Pricing</a></li> 
                        <br>                 
                        <span class="font-16">
                            <li><a href="<?php echo $siteurl ?>our-services/video-animation">Services</a></li>
                            <li><a href="<?php echo $siteurl ?>our-services/seo/">Premium Services</a></li>
                            <li><a href="<?php echo $siteurl ?>our-services/content-writing/">Wiki Profiles </a></li>
                            <li class="last"><a href="<?php echo $siteurl ?>our-services/social-media/">Wiki Marketing</a></li>                    
                        </span>
                    </ul>  
                </nav>
            </div>
            <div class="col-md-4">
                <ul>
                <li class="num">
                    <a href="javascript:" class="btn">
                        <img src="<?php echo $siteurl ?>assets/images/phone.png" alt=""> <span> 1-888-237-2402</span>
                    </a>
                </li>
                <li class="started">
                <a href="javascript:" class="btn">
                    <span>Get </span> Started 
                </a>
                </li>
                </ul>
            </div>
        </div>
    </div>
</header>