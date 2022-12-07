<div class="  m-auto">

    <style>
        .banneredit {
            height: 200px
        }
    </style>
    <form action="/banner/update/{{ $banners->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PUT')
        <div>
            {{-- <label for="name">Name</label> --}}
            {{-- <input type="text" name="name" value="{{ old('name', $banners->name) }}" id=""> --}}


        </div>
        <div>
            <img class="w-100 banneredit" src="{{ $banners->banner }}" alt="">
            <div class="m-2">

                <h3>Change the banner here</h1>
                    <input type="file" name="banner" id="">
                    <button class="p-2 border rounded" type="submit">Submit</button>
            </div>
        </div>
    </form>
</div>
