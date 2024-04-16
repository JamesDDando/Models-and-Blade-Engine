@include('partials.header')

<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <table
            class="min-w-full text-center text-sm font-light text-surface dark:text-white">
            <thead
              class="border-b border-neutral-200 font-medium dark:border-white/10">
              <tr>
                <th scope="col" class="px-6 py-4">Title</th>
                <th scope="col" class="px-6 py-4">Author</th>
                <th scope="col" class="px-6 py-4">Description</th>
                <th scope="col" class="px-6 py-4">ISBN</th>
                <th scope="col" class="px-6 py-4">Date Published</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
              <tr class="border-b border-neutral-200 dark:border-white/10">
                <td class="whitespace-nowrap px-6 py-4">{{ $book->title }}</td>
                <td class="whitespace-nowrap px-6 py-4">{{ $book->author }}</td>
                <td class="whitespace-nowrap px-6 py-4">{{ $book->description }}</td>
                <td class="whitespace-nowrap px-6 py-4">{{ $book->isbn }}</td>
                <td class="whitespace-nowrap px-6 py-4">{{ $book->date_published }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@include('partials.footer')