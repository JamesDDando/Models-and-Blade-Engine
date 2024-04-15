@include('partials.header')


<div class="container mx-auto">
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Description</th>
                <th>ISBN</th>
                <th>Date Published</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td class="border px-4 py-2">{{ $book->title }}</td>
                    <td class="border px-4 py-2">{{ $book->author }}</td>
                    <td class="border px-4 py-2">{{ $book->description }}</td>
                    <td class="border px-4 py-2">{{ $book->isbn }}</td>
                    <td class="border px-4 py-2">{{ $book->date_published }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@include('partials.footer')