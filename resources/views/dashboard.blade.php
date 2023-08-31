<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2>
                        Here are yours articles list {{ auth()->user()->name }}
                    </h2>
                </div>
                <div class="p-6 ">
                    @forelse ($articles as $article)
                        <div>
                            <a href="{{ route('articles.show', $article->slug) }}">
                                <h2
                                    class="inline-flex text-lg  p-6 items-center py-2 leading-4 font-medium rounded-md text-red-900 hover: text-green-900 focus:outline-none  transition ease-in-out duration-150">
                                    {{ $article->title }}
                                    <span class="text-italic text-gray-900 dark:text-gray-100 text-sm pl-2">
                                        created on {{ $article->created_at->format('M jS Y') }}
                                    </span>
                                </h2>
                            </a>
                            <span class="border border-b-1 border-red-700"></span>
                        </div>

                    @empty
                        <h2 class="p-6 text-red-900 dark:text-gray-100 float-right">
                            You dont have any articles
                        </h2>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
