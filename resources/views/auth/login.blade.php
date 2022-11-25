   <!-- HEADING-BANNER START -->
   <div class="heading-banner-area">

       @foreach ($banners as $banner)
           <style>
               .heading-banner-area {
                   background-image: url("{{ $banner->login }}");
               }
           </style>
       @endforeach
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <div class="heading-banner">
                       <div class="heading-banner-title">
                           <h2>Registration</h2>
                       </div>
                       <div class="breadcumbs pb-15">
                           <ul>
                               <li><a href="index.html">Home</a></li>
                               <li>Registration</li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- HEADING-BANNER END -->
   <!-- SHOPPING-CART-AREA START -->


   <div class="login-area  pt-80 pb-80">
       <div class="container">

           <div class="row">
               <form method="POST" action="{{ route('login') }}">
                   @csrf
                   <div class="col-lg-6">

                       <div class="customer-login text-left">
                           <h4 class="title-1 title-border text-uppercase mb-30">Registered customers</h4>
                           <p class="text-gray">If you have an account with us, Please login!</p>
                           @if (session('message'))
                               <div class="primary m-3 ">
                                   {{ session('message') }}
                               </div>
                           @endif
                           <input type="text" autofocus placeholder="Email here..." :value="old('email')"
                               name="email">
                           <input type="password" name="password" placeholder="Password">
                           <p><a href="#" class="text-gray">Forget your password?</a></p>
                           <button type="submit" data-text="login"
                               class="button-one submit-button mt-15">login</button>
                       </div>
                   </div>
               </form>
