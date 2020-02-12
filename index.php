<?php require_once("layouts/header.php"); ?>
<style>
    footer.footer-area + div{position: absolute; top: 0; z-index: 0;}
    .all_head_new.wwd span::before {width: 100px !important; left: -50px; bottom: -45px;}
</style>
    
   
    <section class="banner_sec hero-area">
        
        <!-- particles.js container --> <div id="particles-js"></div> <!-- stats - count particles --> <div class="count-particles"> <span class="js-count-particles">--</span> particles </div> <!-- particles.js lib - https://github.com/VincentGarreau/particles.js --> <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib --> <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
        <!--<div class="element"></div>
        <div class="element2"></div>-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12" style="padding: 0 10%;">
                    
                    <p style="text-align: center; font-weight: 500;">
                        <strong style="color: #44bad4; font-weight: 700; font-size: 65px; line-height: normal;">Comsort </strong><strong style="color:#000; font-weight: 700; font-size: 65px; line-height: normal;">is a healthcare</strong><br/>
                        <span class="home-txt-big" style="font-size: 65px;font-weight: 700;line-height: 1em; margin-bottom: 0px; display: inline-block; font-weight: 700; color: #000;"> data analytics company.</span>
                        <br>We specialize in identifying the experts and organizations that are shaping and defining the medical landscape.  Our state-of-the-art algorithms and machine learning approach allow us to rank and measure expert impact across any therapeutic area and geography.</p>
                    <a class="btn_arr" href="/comsortnew/about-us">Learn More</a>
                </div>
                
            </div>
        </div>
        <div class="arr_down"></div>
    </section>
    
  
    <section class="abt_sec">
        <div class="container">
            <div class="row align-items-sm-center align-items-xl-stretch">
                <div class="all_head_new wwd">
                    <span></span>
                    <h3>What do we do</h3>
                </div>
                <div class="abt_btext">
                    <p>Disambiguate and normalize disparate healthcare datasets.</p>
                    <h4>Global Data Coverage</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-5 abt_txt_left">
                    
                    <div class="parallax-bg crl" data-parallax='{"y":"70vh"}'></div>
                    <div class="parallax-bg crl2" data-parallax='{"y":"70vh"}'></div>
                    <p>We build insights for our</p>
                    <h4>GLOBAL <br>CUSTOMERS</h4>
                    <p>and tailor them for individual markets.</p>
                </div>
                <div class="col-12 col-md-12 col-lg-7 abt_rgt">
                    
                    <div class="row">
                        <div class="col-12" style="max-width:90%;">
                            <div class="owl-carousel owl-theme gcus">
                                <div class="item">
                                    <p style="color:#000;">We source, process and analyze billions of data points using advanced big data tools, techniques and machine learning.</p>
                                </div>
                                <div class="item">
                                    <p style="color:#44bad4;">We build a suite of custom analytic solutions for the healthcare industry.</p>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="sol_sec">
        <div class="container">
            <div class="row align-items-sm-center align-items-xl-stretch">
                <div class="all_head_new">
                    <span>Learn About</span>
                    <h3>OUR SOLUTIONS</h3>
                </div>
                <div class="abt_btext">
                    <p>We are enabling a faster, more flexible, and less expensive approach for scientific enquiry into human biology, drug discovery and drug development.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 soltx_left">
                    <div class="sol_inner">
                        <div class="sol_img"><img src="img/leaderview.png" /></div>
                        <div class="sol_con">
                            <h3>Leader View</h3>
                            <p>Our customizable dashboard, LeaderView puts the power of KOL's and their networks in the palm of your hand.</p>
                            <a class="btn_arr" href="/comsortnew/solutions">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 soltx_left soltx_right">
                    <div class="sol_inner">
                        <div class="sol_img custom-img"><img src="img/custom-solution2.jpg" height="399px;"/></div>
                        <div class="sol_con">
                            <h3>Custom Solutions</h3>
                            <p>Our global datasets allow us to craft custom solutions to your business questions.</p> 
                            <a class="btn_arr" href="/comsortnew/solutions">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php require_once("layouts/footer.php"); ?>


<script>
$('.gcus').owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});



particlesJS("particles-js", {
    "particles": {
        "number": {
            "value": 63,
            "density": {
                "enable": true,
                "value_area": 4050.747991726396
            }
        },
        "color": {
            //"value": "#ea5a5a"
            "value": "#706b6b"
        },
        "shape": {
            "type": "circle",
            "stroke": {
                "width": 3,
                //"color": "#ea5a5a"
                "color": "#706b6b"
            },
            "polygon": {
                "nb_sides": 5
            },
            "image": {
                "src": "img/github.svg",
                "width": 1000,
                "height": 1000
            }
        },
        "opacity": {
            "value": 0,
            "random": false,
            "anim": {
                "enable": true,
                "speed": 1,
                "opacity_min": 0.1,
                "sync": false
            }
        },
        "size": {
          "value": 3,
          /*"random": true,
          "anim": {
            "enable": true,
            "speed": 2,
            "size_min": 4,
            "sync": true
          }*/
        },
        "line_linked": {
            "enable": true,
            "distance": 150,
            //"color": "#ea5a5a",
            "color": "#706b6b",
            "opacity": 0.8417913319543995,
            "width": 1
        },
        "move": {
            "enable": true,
            "speed": 1,
            "direction": "none",
            "random": true,
            "straight": false,
            "out_mode": "out",
            "bounce": false,
            "attract": {
                "enable": false,
                "rotateX": 600,
                "rotateY": 1200
            }
        }
    },
    "interactivity": {
        "detect_on": "canvas",
        "events": {
            "onhover": {
                "enable": false,
                "mode": "bubble"
            },
            "onclick": {
                "enable": false,
                "mode": "remove"
            },
            "resize": true
        },
        "modes": {
            "grab": {
                "distance": 400,
                "line_linked": {
                    "opacity": 1
                }
            },
            "bubble": {
                "distance": 400,
                "size": 85.26810729164123,
                "duration": 2,
                "opacity": 8,
                "speed": 3
            },
            "repulse": {
                "distance": 200,
                "duration": 0.4
            },
            "push": {
                "particles_nb": 4
            },
            "remove": {
                "particles_nb": 2
            }
        }
    },
    "retina_detect": true
});
</script>
