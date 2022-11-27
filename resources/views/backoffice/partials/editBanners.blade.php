<div>
    <form action="/banner/update/{{ $banners->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ old('name', $banners->name) }}" id="">


        </div>
        <div>
            <label for="floating_email">Change the banner</label>
            <img src="{{ $banners->banner }}" alt="">
            <input type="file" name="banner" id="">
        </div>
        <button type="submit">Submit</button>
    </form>
</div>
