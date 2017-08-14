<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'intro' ); ?>
    <main class="shop">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.min.css">
        <script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>
        <section><h3> محصولات بینگو</h3><span class="bar"></span>
            <article class="products slide">
                <div class="row margin-top-40">
                    <div class="carousel-wrapper">
                        <div class="carousel">
                            <div class="carousel-cell">
                                <div class="product-image">
                                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 182.5 196.5">
                                        <defs>
                                            <style>.cls-1 {
                                                    font-size: 55.96px;
                                                    fill: #e0e0e0;
                                                    font-family: Montserrat-Bold, Montserrat;
                                                    font-weight: 700;
                                                }

                                                .cls-2, .cls-7, .cls-8 {
                                                    fill: #fff;
                                                }

                                                .cls-3, .cls-4, .cls-5, .cls-6 {
                                                    fill: none;
                                                }

                                                .cls-3, .cls-4, .cls-5 {
                                                    stroke: #bdbdbd;
                                                }

                                                .cls-3, .cls-4, .cls-5, .cls-7 {
                                                    stroke-linecap: round;
                                                    stroke-linejoin: round;
                                                }

                                                .cls-3 {
                                                    opacity: 0.1;
                                                }

                                                .cls-4 {
                                                    opacity: 0.15;
                                                }

                                                .cls-5 {
                                                    opacity: 0.05;
                                                }

                                                .cls-6, .cls-7, .cls-8 {
                                                    stroke: #e0e0e0;
                                                }

                                                .cls-6, .cls-8 {
                                                    stroke-miterlimit: 10;
                                                }

                                                .cls-9 {
                                                    fill: #eee;
                                                }

                                                svg:hover .cls-3, svg:hover .cls-4, svg:hover .cls-5, svg:hover .cls-9, svg:hover .cls-6, svg:hover .cls-7, svg:hover .cls-8 {
                                                    stroke: #00b8d4;
                                                }

                                                svg:hover .cls-3, svg:hover .cls-4, svg:hover .cls-5 {
                                                    stroke: #5a0757;
                                                }

                                                svg:hover .cls-1 {
                                                    fill: #000;
                                                }         </style>
                                        </defs>
                                        <title>Bingo</title>
                                        <text class="cls-1" transform="translate(155.76 42.6)">3</text>
                                        <circle class="cls-2" cx="91.39" cy="105.25" r="87.11"/>
                                        <circle class="cls-3" cx="90.6" cy="105.25" r="69.06"/>
                                        <path class="cls-4"
                                              d="M77.73,54.75a52.12,52.12,0,1,1-39.24,50.51A52.21,52.21,0,0,1,77.73,54.75"/>
                                        <circle class="cls-5" cx="90.6" cy="105.25" r="87.11"/>
                                        <line class="cls-6" x1="73.2" y1="107.36" x2="111.44" y2="107.36"/>
                                        <rect class="cls-6" x="73.2" y="79.41" width="38.24" height="60.18" rx="5.5"
                                              ry="5.5"/>
                                        <rect class="cls-6" x="76.84" y="83.19" width="30.96" height="6.38" rx="3.19"
                                              ry="3.19"/>
                                        <rect class="cls-6" x="80.69" y="112.59" width="5.49" height="5.49" rx="2" ry="2"/>
                                        <rect class="cls-6" x="89.57" y="112.59" width="5.49" height="5.49" rx="2" ry="2"/>
                                        <rect class="cls-6" x="98.46" y="112.59" width="5.49" height="5.49" rx="2" ry="2"/>
                                        <rect class="cls-6" x="80.69" y="121.18" width="5.49" height="5.49" rx="2" ry="2"/>
                                        <rect class="cls-6" x="89.57" y="121.18" width="5.49" height="5.49" rx="2" ry="2"/>
                                        <rect class="cls-6" x="98.46" y="121.18" width="5.49" height="14.2" rx="2" ry="2"/>
                                        <rect class="cls-6" x="80.69" y="129.89" width="5.49" height="5.49" rx="2" ry="2"/>
                                        <rect class="cls-6" x="89.57" y="129.89" width="5.49" height="5.49" rx="2" ry="2"/>
                                        <path class="cls-6"
                                              d="M73.18,84.22h0a0,0,0,0,1,0,0V97a0,0,0,0,1,0,0h0a1.85,1.85,0,0,1-1.85-1.85V86.07A1.85,1.85,0,0,1,73.18,84.22Z"/>
                                        <path class="cls-6"
                                              d="M113.09,84.22h0a0,0,0,0,1,0,0V97a0,0,0,0,1,0,0h0a1.85,1.85,0,0,1-1.85-1.85V86.07A1.85,1.85,0,0,1,113.09,84.22Z"
                                              transform="translate(224.33 181.21) rotate(180)"/>
                                        <line class="cls-6" x1="81.15" y1="86.38" x2="103.88" y2="86.38"/>
                                        <path class="cls-7"
                                              d="M101.78,70.64V86.38H83.17V70.64h0a3.31,3.31,0,0,1,3.31-3.31h18.31"/>
                                        <line class="cls-6" x1="86.65" y1="73.9" x2="98.31" y2="73.9"/>
                                        <line class="cls-6" x1="86.65" y1="78.4" x2="98.31" y2="78.4"/>
                                        <path class="cls-8" d="M107.8,70.33a3,3,0,0,0-6,0"/>
                                        <line class="cls-7" x1="107.8" y1="70.33" x2="101.78" y2="70.33"></line>
                                        <rect class="cls-9" x="76.84" y="92.83" width="30.96" height="10.62" rx="3.87"
                                              ry="3.87"/>
                                        <rect class="cls-6" x="76.84" y="92.83" width="30.96" height="10.62" rx="4.35"
                                              ry="4.35"/>
                                    </svg>
                                </div>
                                <div class="product-detail">WisePad 2 plus</div>
                            </div>
                            <div class="carousel-cell">
                                <div class="product-image">
                                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 183 196.5"><title>Bingo</title>
                                        <text class="cls-1" transform="translate(155.82 42.6)">2</text>
                                        <circle class="cls-2" cx="91.45" cy="105.25" r="87.11"/>
                                        <circle class="cls-3" cx="90.66" cy="105.25" r="69.06"/>
                                        <path class="cls-4"
                                              d="M77.79,54.75a52.12,52.12,0,1,1-39.24,50.51A52.21,52.21,0,0,1,77.79,54.75"/>
                                        <circle class="cls-5" cx="90.66" cy="105.25" r="87.11"/>
                                        <line class="cls-6" x1="70.57" y1="91.66" x2="111.16" y2="91.66"/>
                                        <rect class="cls-6" x="70.57" y="75.81" width="40.59" height="55.29" rx="5.5"
                                              ry="5.5"/>
                                        <rect class="cls-6" x="76.04" y="97.09" width="6.99" height="6.99" rx="2" ry="2"/>
                                        <rect class="cls-6" x="87.37" y="97.09" width="6.99" height="6.99" rx="2" ry="2"/>
                                        <rect class="cls-6" x="98.69" y="97.09" width="6.99" height="6.99" rx="2" ry="2"/>
                                        <rect class="cls-6" x="76.04" y="108.04" width="6.99" height="6.99" rx="2" ry="2"/>
                                        <rect class="cls-6" x="87.37" y="108.04" width="6.99" height="6.99" rx="2" ry="2"/>
                                        <rect class="cls-6" x="98.69" y="108.04" width="6.99" height="18.09" rx="2" ry="2"/>
                                        <rect class="cls-6" x="76.04" y="119.14" width="6.99" height="6.99" rx="2" ry="2"/>
                                        <rect class="cls-6" x="87.37" y="119.14" width="6.99" height="6.99" rx="2" ry="2"/>
                                        <path class="cls-6"
                                              d="M70.57,80.63h0a0,0,0,0,1,0,0V96.9a0,0,0,0,1,0,0h0a2.36,2.36,0,0,1-2.36-2.36V83A2.36,2.36,0,0,1,70.57,80.63Z"/>
                                        <path class="cls-6"
                                              d="M113.89,80.63h0a0,0,0,0,1,0,0V96.9a0,0,0,0,1,0,0h0a2.36,2.36,0,0,1-2.36-2.36V83a2.36,2.36,0,0,1,2.36-2.36Z"
                                              transform="translate(225.43 177.53) rotate(180)"/>
                                        <rect class="cls-7" x="76.04" y="79.98" width="29.64" height="6.96" rx="3.48"
                                              ry="3.48"/>
                                        <rect class="cls-6" x="76.04" y="79.98" width="29.64" height="6.96" rx="3.48"
                                              ry="3.48"/>
                                    </svg>
                                </div>
                                <div class="product-detail">WisePad 2</div>
                            </div>
                            <div class="carousel-cell">
                                <div class="product-image">
                                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 183 196.5"><title>Bingo</title>
                                        <text class="cls-1" transform="translate(155.51 42.6)">1</text>
                                        <circle class="cls-2" cx="89.17" cy="105.25" r="87.11"/>
                                        <circle class="cls-3" cx="89.17" cy="105.25" r="69.06"/>
                                        <path class="cls-4"
                                              d="M76.3,54.75a52.12,52.12,0,1,1-39.24,50.51A52.21,52.21,0,0,1,76.3,54.75"/>
                                        <circle class="cls-5" cx="89.17" cy="105.25" r="87.11"/>
                                        <rect class="cls-6" x="72.93" y="77.17" width="31.86" height="52.57" rx="5.55"
                                              ry="5.55"/>
                                        <line class="cls-6" x1="72.93" y1="118.33" x2="104.79" y2="118.33"/>
                                        <line class="cls-6" x1="72.93" y1="85.61" x2="104.79" y2="85.61"/>
                                        <ellipse class="cls-6" cx="88.86" cy="123.7" rx="2.19" ry="2.15"/>
                                        <line class="cls-7" x1="83.98" y1="81.08" x2="89.71" y2="81.08"/>
                                        <ellipse class="cls-8" cx="92.82" cy="81.08" rx="0.92" ry="0.9"/>
                                    </svg>
                                </div>
                                <div class="product-detail">WisePOS</div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
        <script>  // vanilla JS
            var flkty = new Flickity('.carousel');
            flkty.select(1);</script>

        <?php while ( have_posts() ) : the_post(); ?>

            <?php wc_get_template_part( 'content', 'single-product' ); ?>

        <?php endwhile; // end of the loop. ?>
    </main><!-- ./Page Content--><!-- Footer Template--><!-- Created by Amin Keshavarz on 7/31/2017.-->
<?php get_footer();

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
