<x-layout>
    <div class="my-24">
        <h1 class="text-4xl font-bold">Create Article</h1>
    </div>
    <form action="{{ route('articles.create') }}" method="POST">
        <div class="mb-4">
            <label for="title" class="block text-sm/6 font-medium text-gray-900 dark:text-gray-100">Title</label>
            <input type="text" name="title" id="title" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 dark:bg-white/5 dark:text-white dark:outline-white/10 dark:placeholder:text-gray-500 dark:focus:outline-indigo-500" />
        </div>
        <div class="mb-4">
            <label for="body" class="block text-sm/6 font-medium text-gray-900 dark:text-gray-100">Body</label>
            <textarea name="body" id="body" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 dark:bg-white/5 dark:text-white dark:outline-white/10 dark:placeholder:text-gray-500 dark:focus:outline-indigo-500"></textarea>
        </div>
        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md">Create</button>
    </form>
</x-layout>