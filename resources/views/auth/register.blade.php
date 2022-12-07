<form method="POST" enctype="multipart/form-data" action="{{ route('register') }}">
    @csrf
    <div class="col-lg-6">
        <div class="customer-login text-left">
            <h4 class="title-1 title-border text-uppercase mb-30">new customers</h4>
            <p class="text-gray">If you have an account with us, Please login!</p>
            <input type="text" placeholder="Your name here..." :value="old('name')" required name="name">
            <input type="text" placeholder="Email address here..." :value="old('email')" name="email">
            <input type="password" name="password" required autocomplete="new-password" placeholder="Password">
            <input type="password" name="password_confirmation" required placeholder="Confirm password">
            <h6 for="">Add Profile picture</h6>
            <input id="username" type="file" name="src">
            <p class="mb-0">
                <input type="checkbox" id="newsletter" value="name" name="newsletter" checked>
                <label for="newsletter"><span>Sign up for our newsletter!</span></label>
            </p>
            <button type="submit" data-text="register" class="button-one submit-button mt-15">regiter</button>
        </div>
    </div>
</form>
<!-- SHOPPING-CART-AREA END -->
