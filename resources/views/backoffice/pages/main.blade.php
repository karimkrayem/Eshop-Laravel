@extends('backoffice.layouts.app')
@section('content')
    <h1 class="m-5 text-center">CONTROL PANEL</h1>
    <div class="d-flex flex-wrap justify-content-center w-75 m-auto mt-5">

        <div class="card m-2" style="width: 18rem;">
            <div class="card-body">
                @foreach ($star as $star)
                    <h5 class="card-title">STAR</h5>

                    <h6 class="card-subtitle mb-2 text-muted">STAR PRODUCT : </h6>

                    <p class="card-text">{{ $star->product->name }} </p>
                    <a href="/star/edit/{{ $star->id }}" class=" text-primary card-linl">Edit Star Product</a>
                @endforeach
            </div>
        </div>
        <div class="card m-2" style="width: 18rem;">
            <div class="card-body">

                <h5 class="card-title">PRODUCTS</h5>
                <p class="card-text">From Here You can check your products, add new ones and edit them as you please </p>

                <a href="/allproducts" class=" text-primary card-linl">All Products</a>

            </div>
        </div>
        <div class="card m-2" style="width: 18rem;">
            <div class="card-body">

                <h5 class="card-title">BLOG</h5>
                <p class="card-text">From Here You can check your articles, add new ones and edit them as you please </p>

                <a href="/allarticles" class=" text-primary card-linl">Blog Articles</a>

            </div>
        </div>
        <div class="card m-2" style="width: 18rem;">
            <div class="card-body">

                <h5 class="card-title">USERS</h5>
                <p class="card-text">From Here You can check all the users, add new ones and edit them as you please </p>

                <a href="/users" class=" text-primary card-linl">Users</a>

            </div>
        </div>
        <div class="card m-2" style="width: 18rem;">
            <div class="card-body">

                <h5 class="card-title">CAROUSEL</h5>
                <p class="card-text">From Here You can edit the carousel pictures </p>

                <a href="/carousel" class=" text-primary card-linl">Carousel</a>

            </div>
        </div>
        <div class="card m-2" style="width: 18rem;">
            <div class="card-body">

                <h5 class="card-title">Team</h5>
                <p class="card-text">From Here You can check the staff and edit their job</p>

                <a href="/team" class=" text-primary card-linl">Team</a>

            </div>
        </div>
        <div class="card m-2  mb-5" style="width: 18rem;">
            <div class="card-body">

                <h5 class="card-title ">BANNERS</h5>
                <p class="card-text">From Here You can edit the banners </p>

                <a href="/banners" class=" text-primary card-linl">Banner</a>

            </div>
        </div>
        <div class="card m-2 mb-5" style="width: 18rem;">
            <div class="card-body">

                <h5 class="card-title">TAGS & CATEGORIES</h5>
                <p class="card-text">From Here You can check the tags and categories</p>
                <a href="/tagcategoryform" class=" text-primary card-linl">see more</a>

            </div>
        </div>
        <div class="card m-2 mb-5" style="width: 18rem;">
            <div class="card-body">

                <h5 class="card-title">MESSAGES</h5>
                <p class="card-text">From Here You can check all the messages from customers</p>
                <a href="/contactUs" class=" text-primary card-linl">see more</a>

            </div>
        </div>
    </div>
@endsection
