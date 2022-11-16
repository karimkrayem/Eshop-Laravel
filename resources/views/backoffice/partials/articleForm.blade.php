<form action="/articleform/store" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="title">Title</label>
        <input type="text" name="title">
    </div>

    <div>
        <label for="content">Content</label>
        <input type="text" name="content">
    </div>

    <div>
        <label for="src">Image</label>
        <input data-rule="required" id="username" type="file" name="src">
    </div>


    {{-- <select name="user_id" id="">
        @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select> --}}


    {{-- @foreach ($articles as $article)
    @endforeach --}}

    @foreach ($tags as $tag)
        <p>

            <input type="checkbox" name="tag[]" value="{{ $tag->id }}" id=""> <label
                for="tags">{{ $tag->name }}</label>
        </p>
        {{-- <input type="checkbox" name="" id=""> --}}
    @endforeach


    <button type="submit">ADD</button>
</form>
