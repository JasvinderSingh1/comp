<!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-12 col-md-4 col-xl-4">
                    <div class="single-footer-widget footer_1">
                        <a href="about-us"> <!--<img src="img/logo.png" alt="">-->About us </a>
                        <p>COMSORT is a research analytics organization that focuses on relationships and information diffusion among healthcare professionals and within healthcare organizations.</p>
                      <!--<p>In December of 2003 COMSORTInc. became a wholly-owned subsidiary of Merck & Co., Inc</p>-->
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-xl-4">
                    <div class="single-footer-widget footer_menu">
                        <h4>Site Link</h4>
                        <ul>
                            <li><a href="about-us">About Us</a></li>
                            <li><a href="solutions">Solutions</a></li>
                           
                            <li><a href="privacy">Privacy</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-xl-4 col-sm-12 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact us</h4>
                        <div class="contact_info">
                            <p><span> Address :</span><br> 11311 McCormick Road Suite 203 Hunt Valley, MD 21031 </p>
                            <p><span> Phone :</span> <a href="tel:410.785.4853">410.785.4853</a></p>
                            <p><span> Email : </span><a href="mailto: info@comsort.com"> info@comsort.com</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-flued">
            <div class="copyright_part_text text-center">
                <div class="col-lg-12">
                    <p class="footer-text m-0">© 2020. All rights reserved. COMSORT, Inc.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->
    
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    
    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    
    
    <script src="https://cdn.rawgit.com/kasparsj/jquery.requestAnimationFrame/master/jquery.requestAnimationFrame.min.js"></script>
    <script src="js/jquery.data-parallax.js"></script>
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   <script>
   
    jQuery(document).ready(function() {
       jQuery(".expert").hover(function(){
           jQuery('.key_opintion_img').hide();
           jQuery('.organization_img').hide();
           jQuery('.organization_profiles_img').hide();
           jQuery('.expert_img').show();
          // $("p").fadeIn();
           
           
       }); 
       jQuery(".organization").hover(function(){
           jQuery('.key_opintion_img').hide();
           jQuery('.organization_profiles_img').hide();
           jQuery('.expert_img').hide();
           jQuery('.organization_img').show();
           
       }); 
    });
    jQuery(".organization_profiles").hover(function(){
           jQuery('.key_opintion_img').hide();
           jQuery('.organization_img').hide();
           jQuery('.expert_img').hide();
           jQuery('.organization_profiles_img').show();
           
       }); 
   jQuery(".key_opintion").hover(function(){
       jQuery('.organization_img').hide();
       jQuery('.organization_profiles_img').hide();
       jQuery('.expert_img').hide();
       jQuery('.key_opintion_img').show();
       
   }); 
   $(document).ready(function(){
      $("#send").click(function(event){ 
        event.preventDefault();
       jQuery('.error').remove();
       
        var recipient_name = $("#recipient-name").val();
        var recipient_email = $("#recipient-email").val();
        var recipient_phone = $("#recipient-phone").val();
        var message_text = $("#message-text").val();
        
        var recipient_email  = jQuery('#recipient-email').val();
        var error = 0;
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (recipient_email == "") {

            jQuery('#recipient-email').after( '<span class="error"> Please enter your email address </span>' );
            error++;
        } else if( !re.test(recipient_email) ) {
            jQuery( '#recipient-email' ).after( '<span class="error"> Please enter valid email address </span>' );
            error++;
        }
        
        if(jQuery( '#recipient-name' ).val() == ''){
           jQuery( '#recipient-name .error' ).remove();
           jQuery( '#recipient-name' ).after( '<span class="error"> Please enter your name </span>' );  
        }
        if(jQuery( '#recipient-phone' ).val() == ''){
           jQuery( '#recipient-phone .error' ).remove();
           jQuery( '#recipient-phone' ).after( '<span class="error"> Please enter your phone number </span>' );  
        }
        if(jQuery( '#message-text' ).val() == ''){
           jQuery( '#message-text .error' ).remove();
           jQuery( '#message-text' ).after( '<span class="error"> Please enter your message </span>' );  
        }
        if (error <= 0) {
            event.preventDefault();
           $('#response').html("<b>Loading response...</b>");
           $.post('post_receiver.php', { recipient_name: recipient_name, recipient_email: recipient_email, recipient_phone: recipient_phone,message_text:message_text }, function(data){
           $('#response').html(data);
           $('#form-id')[0].reset();
           $('.displaynone').css('display','none');
         }).fail(function(){
           alert( "Posting failed." );
         });
         return false;
        }
      });
      
      jQuery(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
   }); 
</script>
</body>

</html>
