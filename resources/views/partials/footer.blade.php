<footer>
    <div class="w3-agileits-footer-top">
        <div class="container">
            <div class="wthree-foo-grids">
                <div class="col-md-3 wthree-footer-grid">
                    <h4 class="footer-head">Who We Are</h4>
                    <p>This is a classified pallication where you can sell things and buy things</p>

                </div>
                <div class="col-md-3 wthree-footer-grid">
                    <h4 class="footer-head">Help</h4>
                    <ul>
                        <li><a href="/howitworks"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>How it Works</a></li>
                        <li><a href="/sitemap.xml"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Sitemap</a></li>
                        <li><a href="/faq"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Faq</a></li>
                        <li><a href="/feedback"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Feedback</a></li>
                       </ul>
                </div>
                <div class="col-md-3 wthree-footer-grid">
                    <h4 class="footer-head">Information</h4>
                    <ul>
                        <li><a href="/contact-us"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Contact</a></li>
                        <li><a href="/about-us"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>About us</a></li>

                        <li><a href="/regions"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Regions</a></li>
                        <li><a href="/terms"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Terms of Use</a></li>
{{--
                        <li><a href="/popular-search"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Popular searches</a></li>
--}}
                        <li><a href="/privacy"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-3 wthree-footer-grid">
                    <h4 class="footer-head">Contact Us</h4>
                    <span class="hq">Our headquarters</span>
                    <address>
                        <ul class="location">
                            <li><span class="glyphicon glyphicon-map-marker"></span></li>
                            <li>CENTER FOR FINANCIAL ASSISTANCE TO DEPOSED NIGERIAN ROYALTY</li>
                        </ul>
                        <div class="clearfix"> </div>
                        <ul class="location">
                            <li><span class="glyphicon glyphicon-earphone"></span></li>
                            <li></li>
                        </ul>
                        <div class="clearfix"> </div>
                        <ul class="location">
                            <li><span class="glyphicon glyphicon-envelope"></span></li>
                            <li><a href="mailto:ajibadehammed@gmail.com">ajibadehammed@gmail.com</a></li>
                        </ul>
                    </address>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="agileits-footer-bottom text-center">
        <div class="container">
            <div class="w3-footer-logo">
                <h1><a href="/"><span>A</span>J</a></h1>
            </div>
            <div class="w3-footer-social-icons">
                <ul>
                    <li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twitter</span></a></li>
                    <li><a class="flickr" href="#"><i class="fa fa-flickr" aria-hidden="true"></i><span>Flickr</span></a></li>
                    <li><a class="googleplus" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i><span>Google+</span></a></li>
                    <li><a class="dribbble" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i><span>Dribbble</span></a></li>
                </ul>
            </div>
            <div class="copyrights">
                <?php
                $dt = \Illuminate\Support\Carbon::now();
                $year =$dt->year;
                ?>
                <p> © {{$year . ' '. config('app.name')}} . All Rights Reserved</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</footer>
