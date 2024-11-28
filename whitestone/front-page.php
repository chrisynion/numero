<?php
/**
 * The template for displaying the frong or home page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package whitestone
 */

get_header();
?>

	<main id="primary" class="site-main">
        <section class="hero">
            <div class="box">
                <div class="blurb">
                    <h1>Your Property Journey <a href="#">Starts Here.</a></h1>
                    <p>We create trusted relationships that assist first home buyers and investors into high 
                    quality, new build real estate, creating long term financial stability and wealth.</p>
                    <a href="#" class="btn">View Our Properties</a>
                </div>
            </div>
        </section>
        <section class="awards">
            <div class="box">
                <div class="award">
                    <div class="award-icon" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/shield.png');"></div>
                    <h2>Vetted Developers</h2>
                </div>
                <div class="award">
                    <div class="award-icon" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/star.png');"></div>
                    <h2>High Quality Builds</h2>
                </div>
                <div class="award">
                    <div class="award-icon" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/diamond.png');"></div>
                    <h2>Wealth Creation</h2>
                </div>
            </div>
        </section>
        <section class="about">
            <div class="box">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/18-Commissariat-Road-5-1.png" alt="18-Commissariat-Road-5-1">
                <div class="blurb">
                    <h2>Auckland New Build Real Estate Specialists</h2>
                    <p>Whitestone Group is a licensed, specialist new build real estate agency in Auckland. Whether you're a first-time home buyer, investor, or developer looking to sell out your project, we understand new build real estate inside and out and can provide support and guidance every step of the way. </p>
                    <p>With years of experience selling for some of New Zealand's most reputable developers, we bring a wealth of knowledge and expertise to every transaction. </p>
                    <p>As trusted advisors, we are committed to helping our clients achieve their property goals. With Whitestone Group, you can expect an unparalleled level of service and support throughout your property journey.</p>
                    <a href="#" class="btn">View Our Properties</a>
                </div>
            </div>
        </section>
        <section class="statistic">
            <div class="box">
                <h2 class="number">405+<span class="label">Homes Sold</span></h2>
                <p>We are Specialists at what we do.</p>
            </div>
        </section>
        <section class="listings">
            <div class="box">
                <h2>Homes For Sale</h2>
                <div class="listing">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/18-Commissariat-Road-5-1.png" alt="">
                    <h3 class="listing-title">33 Convoy Lane, Seaside Peninsula</h3>
                    <p>Priced From $699,000</p>
                    <a href="" class="btn">Learn More</a>
                </div>
                <div class="listing">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/18-Commissariat-Road-5-1.png" alt="">
                    <h3 class="listing-title">48 Torrington Crescent, Glen Innes</h3>
                    <p>Priced From $749,000</p>
                    <a href="" class="btn">Learn More</a>
                </div>
                <div class="listing">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/18-Commissariat-Road-5-1.png" alt="">
                    <h3 class="listing-title">18 Commissariat Road, Mt Wellington</h3>
                    <p>Priced From $779,000</p>
                    <a href="" class="btn">Learn More</a>
                </div>
                <div class="listing">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/18-Commissariat-Road-5-1.png" alt="">
                    <h3 class="listing-title">48 Torrington Crescent, Glen Innes</h3>
                    <p>Priced From $749,000</p>
                    <a href="" class="btn">Learn More</a>
                </div>
            </div>
        </section>
        <section class="no-cost" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/no-cost-bg.png')">
            <div class="box">
                <div class="blurb">
                    <h2>Our Services Don’t Cost You!</h2>
                    <p>Our services do not cost you! How does this work?</p>
                    <p>We are paid a fee by the developer, similar to how a mortgage broker is paid by the bank. Rest assured, our fee does not affect the price of the property in any way.</p>
                    <p>Our role is to present you with a selection of suitable properties from a range of developers, allowing you to choose the one that best meets your needs.</p>
                    <a href="#" class="btn">Get In Touch</a>
                </div>
            </div>
        </section>
        <section class="splide gallery">
            <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide-1.png"></li>
                        <li class="splide__slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide-2.png"></li>
                        <li class="splide__slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide-3.png"></li>
                        <li class="splide__slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide-4.png"></li>
                        <li class="splide__slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide-5.png"></li>
                    </ul>
            </div>
        </section>
        <section class="option-cta left" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/option-cta-left.png')">
            <div class="box">
                <div class="cta">
                    <div class="are-you">
                    Are you...
                    </div>
                    <div class="cta-link" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-pointing-right.png')"><a href="#">Looking To Enter The Property Market?</a></div>
                </div>
                <div class="img-title">
                    First Home Buyers
                </div>
            </div>
        </section>
        <section class="option-cta right"  style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/option-cta-right.png')">
            <div class="box">
                <div class="cta">
                    <div class="are-you">
                    Are you...
                    </div>
                    <div class="cta-link" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-pointing-left.png')"><a href="#">Looking To Invest In Property?</a></div>
                </div>
                <div class="img-title">
                Investors
                </div>
            </div>
        </section>
        <section class="testimonials splide">
            <div class="box splide__track">
                <h2 style="font-size: clamp(20px, 6vw, 35px);">Testimonials ( From Google )</h2>
                <div class="testimonials-slider splide__list">
                    <div class="testimonial-slide splide__slide">
                        <p class="testimonial">Selling with Finn and Shaneel has been an absolute pleasure. They made the process seamless, stress free and positive. Their communication was excellent, and they went above and beyond to keep me in informed every step of the way. Finn and Shaneel's knowledge of the townhouse market is second to none, which gave me great confidence that they were the right people to sell my townhouse in a challenging market. They were successful in finding a buyer from their network prior to even going to market, therefore eliminating marketing costs and a public campaign. I cannot recommend Whitestone Group enough.
                        </p>
                        <p class="author">Vicki Chappel</p>
                    </div>
                    <div class="testimonial-slide splide__slide">
                        <p class="testimonial">My wife and I recently received fantastic help from the exceptional team at Whitestone Group. We are incredibly grateful to Shaneel and Finn for their outstanding service. From the moment we walked through their doors, we felt they took the time to understand our needs and preferences. They were patient, supportive, and always had our best interests at heart. It's rare to find a real estate firm that is not only professional but also genuinely caring. We are beyond grateful for their hard work and dedication in helping us buy our dream home. We highly recommend Whitestone Group - Shaneel and Finn are genuinely the best! Five stars do not seem enough to express our gratitude.</p>
                        <p class="author">Vicki Chappel</p>
                    </div>
                    <div class="testimonial-slide splide__slide">
                        <p class="testimonial">First home buying is a daunting process but Shaneel and Finn hold our hands on every step until we have finally achieved our dream of having our own home. They are very easy to work with, very prompt in answering questions and explains the process in the way we can understand better. They are honest and very trustworthy.
                        We cannot thank you enough for all your help. Highly recommended especially for those who are first home buyers!</p>
                        <p class="author">Vicki Chappel</p>
                    </div>
                    <div class="testimonial-slide splide__slide">
                        <p class="testimonial">Selling with Finn and Shaneel has been an absolute pleasure. They made the process seamless, stress free and positive. Their communication was excellent, and they went above and beyond to keep me in informed every step of the way. Finn and Shaneel's knowledge of the townhouse market is second to none, which gave me great confidence that they were the right people to sell my townhouse in a challenging market. They were successful in finding a buyer from their network prior to even going to market, therefore eliminating marketing costs and a public campaign. I cannot recommend Whitestone Group enough.
                        </p>
                        <p class="author">Vicki Chappel</p>
                    </div>
                    <div class="testimonial-slide splide__slide">
                        <p class="testimonial">My wife and I recently received fantastic help from the exceptional team at Whitestone Group. We are incredibly grateful to Shaneel and Finn for their outstanding service. From the moment we walked through their doors, we felt they took the time to understand our needs and preferences. They were patient, supportive, and always had our best interests at heart. It's rare to find a real estate firm that is not only professional but also genuinely caring. We are beyond grateful for their hard work and dedication in helping us buy our dream home. We highly recommend Whitestone Group - Shaneel and Finn are genuinely the best! Five stars do not seem enough to express our gratitude.</p>
                        <p class="author">Vicki Chappel</p>
                    </div>
                    <div class="testimonial-slide splide__slide">
                        <p class="testimonial">First home buying is a daunting process but Shaneel and Finn hold our hands on every step until we have finally achieved our dream of having our own home. They are very easy to work with, very prompt in answering questions and explains the process in the way we can understand better. They are honest and very trustworthy.
                        We cannot thank you enough for all your help. Highly recommended especially for those who are first home buyers!</p>
                        <p class="author">Vicki Chappel</p>
                    </div>
                </div><!-- .testimonials-slider -->
                <a href="#" class="btn" style="margin: 20px; display: inline-block;">View All Testimonials</a>
            </div>
        </section>


	</main><!-- #main -->

<?php

get_footer();
