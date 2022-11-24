<div class="mt-10">
    <div class="mx-auto w-9/12  ">

        <div class="mx-auto ">
            <form action="/articleform/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="shadow sm:overflow-hidden sm:rounded-md">
                    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="company-website"
                                    class="block text-sm font-medium text-gray-700">Title</label>
                                <div class="mt-1 flex rounded-md shadow-sm">

                                    <input type="text" name="title" id="company-website"
                                        class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="New chair">
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="company-website"
                                    class="block text-sm font-medium text-gray-700">Slug</label>
                                <div class="mt-1 flex rounded-md shadow-sm">

                                    <input type="text" name="slug" id="company-website"
                                        class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="slug">
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="about" class="block text-sm font-medium text-gray-700">Content</label>
                            <div class="mt-1">
                                <textarea id="about" name="content" rows="3"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    placeholder="Type here"></textarea>
                            </div>

                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">Tags</label>
                            <div class="mt-1 flex items-center">

                                @foreach ($tags as $tag)
                                    <p class="m-1">

                                        <input type="checkbox" name="tag[]" value="{{ $tag->id }}"
                                            id=""> <label for="tags">{{ $tag->name }}</label>
                                    </p>
                                    {{-- <input type="checkbox" name="" id=""> --}}
                                @endforeach

                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">Cover photo</label>
                            <div
                                class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                        viewBox="0 0 48 48" aria-hidden="true">
                                        <path
                                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex justify-center text-sm text-gray-600">
                                        <label for="file-upload"
                                            class=" relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                                            <span class="">Upload a file</span>
                                            <input id="file-upload" name="src" type="file" class="sr-only">
                                        </label>

                                    </div>
                                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                        <button type="submit"
                            class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
        <div class="border-t border-gray-200"></div>
    </div>
</div>
