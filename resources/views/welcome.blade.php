<x-layout>
       <div class="my-24">
        <h1 class="text-4xl font-bold">Welcome to CyBears' blog!</h1>
        @if ($articles != null)
            @foreach ($articles as $article)
            <article class="my-8 relative isolate flex flex-col gap-8 lg:flex-row">
                <div class="relative aspect-video sm:aspect-2/1 lg:aspect-square lg:w-64 lg:shrink-0">
                <img src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80" alt="" class="absolute inset-0 size-full rounded-2xl bg-gray-50 object-cover dark:bg-gray-800" />
                <div class="absolute inset-0 rounded-2xl inset-ring inset-ring-gray-900/10 dark:inset-ring-white/10"></div>
                </div>
                <div>
                <div class="flex items-center gap-x-4 text-xs">
                    <time datetime="2020-03-16" class="text-gray-500 dark:text-gray-400">Mar 16, 2020</time>
                    <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100 dark:bg-gray-800/60 dark:text-gray-300 dark:hover:bg-gray-800">Marketing</a>
                </div>
                <div class="group relative max-w-xl">
                    <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600 dark:text-white dark:group-hover:text-gray-300">
                    <a href="#">
                        <span class="absolute inset-0"></span>
                        {{ $article->title }}
                    </a>
                    </h3>
                </div>
                <div class="mt-6 flex border-t border-gray-900/5 pt-6 dark:border-white/10">
                    <div class="relative flex items-center gap-x-4">
                    <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-10 rounded-full bg-gray-50 dark:bg-gray-800" />
                    <div class="text-sm/6">
                        <p class="font-semibold text-gray-900 dark:text-white">
                        <a href="#">
                            <span class="absolute inset-0"></span>
                        </a>
                        </p>
                        
                    <form action="{{ route('articles.delete', $article->id) }}" method="POST">
                        @method('DELETE')
                        <button type="submit" class="cursor-pointer">
                            <span class="absolute -inset-1.5"></span>
                            delete
                        </button>
                    </form>
                    </div>
                    </div>
                </div>
                </div>
            </article>
            @endforeach
        @else
            <p>No articles found</p>
        @endif
</x-layout>