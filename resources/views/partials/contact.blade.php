   <!-- HEADING-BANNER START -->
   <div class="heading-banner-area">



       @foreach ($banners as $banner)
           @if ($banner->id == 3)
               <style>
                   .heading-banner-area {
                       background-image: url("{{ $banner->banner }}");
                   }
               </style>
           @endif
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
                           @if (session('success'))
                               <div class="primary m-5  ">
                                   {{ session('success') }}
                               </div>
                           @endif
                           <form action="contactUs" method="POST">
                               @csrf
                               <h4 class="title-1 title-border text-uppercase mb-30">send message</h4>
                               <input type="text" required name="name" placeholder="Your name here..." />
                               <input type="text" required name="email" placeholder="Your email here..." />
                               <textarea class="custom-textarea" name="comment" placeholder="Your comment here..."></textarea>
                               <button class="button-one submit-button mt-20" data-text="submit message"
                                   type="submit">submit message</button>
                               <p class="form-message"></p>
                           </form>
                       </div>
                   </div>
                   <div class="col-lg-8 col-md-7 mt-xs-30">
                       <div class="map-area">
                           <div id="googleMap" style="width:100%;height:600px;">
                               <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0"
                                   marginwidth="0"
                                   src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                                       href="https://www.maps.ie/distance-area-calculator.html">measure area
                                       map</a></iframe>
                           </div>
                           {{-- <div style="width: 100%"></div> --}}
                       </div>
                   </div>
               </div>
           </div>
       </div>

       <script type="text/javascript">
           function initMap() {
               const myLatLng = {
                   lat: 22.2734719,
                   lng: 70.7512559
               };
               const map = new google.maps.Map(document.getElementById("map"), {
                   zoom: 5,
                   center: myLatLng,
               });

               new google.maps.Marker({
                   position: myLatLng,
                   map,
                   title: "Hello Rajkot!",
               });
           }

           window.initMap = initMap;
       </script>

       <script type="text/javascript"
           src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap"></script>
   </div>
   <!-- ABOUT-US-AREA END -->
