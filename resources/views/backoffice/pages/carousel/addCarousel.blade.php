<div class="d-flex justify-center ">

    <form action="/carousel/store" enctype="multipart/form-data" method="POST">
        @csrf
        <div>
            <label for="carousel">ADD Carousel</label>
            <input type="file" required multiple name="carousel">
        </div>

        <button type="submit">ADD</button>
    </form>

</div>
