<?php
/**
 * The front-page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme
 */

get_header();
?>

<main>
    
        <section id="latest-news">
            <div class="inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 position-relative">
                            <div class="content">
                                <h3>Latest News</h3>
                                <p>Lorem ipsum dolor sit amet consectetur urna dolor</p>
                            </div>
                        </div>

                        <?php
	                    global $post;

                        $myposts = get_posts( array(
                            'posts_per_page' => -1,
                            'post_type' => 'post',
                            'order' => 'ASC',
                            'orderby' => 'title',
                        ) );

                        if ( $myposts ) { ?>
                    <div class="col-sm-12 col-md-8">
                        <swiper-container class="swiper1" pagination="true" autoplay-delay="4000" autoplay-disable-on-interaction="true" loop="true" centered-slides="true" grab-cursor="true" navigation="true">
                             <?php
                                foreach ( $myposts as $post ) : 
                                    setup_postdata( $post ); ?>
                                <swiper-slide>
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                    <div class="slide-content">
                                        <h4><?php echo the_title(); ?></h4>
                                        <p><?php echo the_excerpt(); ?></p>
                                    </div>
                                </swiper-slide>
                                
                                <?php
                                endforeach;
                                wp_reset_postdata();
                            }
                            ?>
                       
                            </swiper-container>
                        </div>
                </div>
            </div>
        </section>
        <section id="knowledge">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="content">
                            <h3>Expanding Your Knowledge</h3>
                            <p>Lorem ipsum dolor sit amet consectetur urna dolor</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="row strip">
                            <div class="col-sm-2"><img src="/wp-content/themes/base-theme/assets/imgs/icon-ppl-calc.svg"></div>
                            <div class="col-sm-10">
                                <h4>For Wealth Advisors & Professionals</h4>
                                <p>Lorem ipsum dolor sit amet consectetur. Consequat sollicitudin in euismod dolor, nec sodales viverra.</p>
                            </div>
                        </div>
                        <div class="row strip">
                            <div class="col-sm-2"><img src="/wp-content/themes/base-theme/assets/imgs/icon-law-students.svg"></div>
                            <div class="col-sm-10">
                                <h4>For Law Students</h4>
                                <p>Lorem ipsum dolor sit amet consectetur. Consequat sollicitudin in euismod dolor, nec sodales viverra.</p>
                            </div>
                        </div>
                        <div class="row strip">
                            <div class="col-sm-2"><img src="/wp-content/themes/base-theme/assets/imgs/icon-diversity.svg"></div>
                            <div class="col-sm-10">
                                <h4>Diversity Resources</h4>
                                <p>Lorem ipsum dolor sit amet consectetur. Consequat sollicitudin in euismod dolor, nec sodales viverra.</p>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="container">
        </section>
        
<?php
get_footer();
?>
<script>
      const Swiper = document.querySelector(".swiper1");
        Object.assign(Swiper, {
        spaceBetween: 4,
        breakpoints: {
            465: {
            slidesPerView: 1,
            spaceBetween: 1
            },
            996: {
            slidesPerView: 2,
            spaceBetween: 20
            },
            997: {
            slidesPerView: 3,
            spaceBetween: 20
            },
        }

        });
            Swiper.initialize();
 </script>