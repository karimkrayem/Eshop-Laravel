   <!-- HEADING-BANNER START -->
   <div class="heading-banner-area">

       @foreach ($banners as $banner)
           <style>
               .heading-banner-area {
                   background-image: url("{{ $banner->contact }}");
               }
           </style>
       @endforeach
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <div class="heading-banner">
                       <div class="heading-banner-title">
                           <h2>Contact Us</h2>
                       </div>
                       <div class="breadcumbs pb-15">
                           <ul>
                               <li><a href="index.html">Home</a></li>
                               <li>Contact Us</li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- HEADING-BANNER END -->
   <!-- contact-us-AREA START -->
   <div class="contact-us-area  pt-80 pb-80">
       <div class="container">
           <div class="contact-us customer-login bg-white">
               <div class="row">
                   <div class="col-lg-4 col-md-5">
                       <div class="contact-details">
                           <h4 class="title-1 title-border text-uppercase mb-30">contact details</h4>
                           <ul>
                               <li>
                                   <i class="zmdi zmdi-pin"></i>
                                   <span>28 Green Tower, Street Name,</span>
                                   <span>New York City, USA</span>
                               </li>
                               <li>
                                   <i class="zmdi zmdi-phone"></i>
                                   <span>+880 1234 123456</span>
                                   <span>+880 1234 123456</span>
                               </li>
                               <li>
                                   <i class="zmdi zmdi-email"></i>
                                   <span>company-email@gmail.com</span>
                                   <span>your-email@gmail.com</span>
                               </li>
                           </ul>
                       </div>
                       <div class="send-message mt-60">
                           <form id="contact-form" action="https://whizthemes.com/mail-php/other/mail.php">
                               <h4 class="title-1 title-border text-uppercase mb-30">send message</h4>
                               <input type="text" name="con_name" placeholder="Your name here..." />
                               <input type="text" name="con_email" placeholder="Your email here..." />
                               <textarea class="custom-textarea" name="con_message" placeholder="Your comment here..."></textarea>
                               <button class="button-one submit-button mt-20" data-text="submit message"
                                   type="submit">submit message</button>
                               <p class="form-message"></p>
                           </form>
                       </div>
                   </div>
                   <div class="col-lg-8 col-md-7 mt-xs-30">
                       <div class="map-area">
                           <div id="googleMap" style="width:100%;height:600px;"></div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- ABOUT-US-AREA END -->
