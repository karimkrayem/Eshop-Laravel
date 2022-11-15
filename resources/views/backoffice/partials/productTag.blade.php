<table class="w-full text-sm text-left text-gray-500">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-3">
                #
            </th>
            <th scope="col" class="px-6 py-3">
                Name
            </th>
            <th scope="col" class="px-6 py-3">
                Tags
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($product as $post)
            <tr class="bg-white border-b">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900">
                    {{ $post->id }}
                </th>
                <td class="px-6 py-4">
                    {{ $post->name }}
                </td>
                <td class="px-6 py-4">
                    @foreach ($product->tags as $tag)
                        {{ $tag->name }}
                    @endforeach
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
