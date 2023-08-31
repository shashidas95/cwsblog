@extends('article.layouts.app')

@section('content')
    <div class="w-full mx-auto mb-10">
        <span class="block inline text-md text-white transition-all hover:text-gray-100 font-bold uppercase">
            <a href="{{ route('articles.create') }}" class="bg-red-700 rounded-md py-3 px-5">
                Create Article
            </a>
        </span>
    </div>

    <div class="space-y-2 xl:items-baseline xl:space-y-0 w-4/5 pt-20 sm:w-3/5 mx-auto">
        <div class="border-b-2 border-neutral-700 pb-10 pt-10">

            @forelse($articles as $article)
                <span class="sm:float-right float-left text-gray-400">

                    {{ $article->created_at->format('M jS Y') }}, {{ $article->user->name }}
                </span>

                <a href="{{ route('articles.show', $article->slug) }}">
                    <h2
                        class="text-red-700 sm:w-3/5 transition-all  sm:pt-0 pt-10 text-3xl sm:text-4xl font-bold sm:pb-2 w-full block">
                        {{ $article->title }}
                    </h2>
                </a>

                <p class="text-gray-400 leading-8 py-6 text-lg w-full sm:w-3/5">
                    {{ $article->excerpt }}
                </p>
                @foreach ($article->tags as $tag)
                    <span
                        class="block inline text-xs text-white transition-all hover:text-gray-100 font-bold pr-2 uppercase">
                        <a href="/" class="bg-red-700 rounded-md py-1 px-3">
                            {{ $tag->name }}
                        </a>
                    </span>
                @endforeach
            @empty
                <h2
                    class="text-red-700 sm:w-3/5 transition-all  sm:pt-0 pt-10 text-3xl sm:text-4xl font-bold sm:pb-2 w-full block">
                    Unfortunately we dont find any articles.
                </h2>
            @endforelse
            <div>
                {{ $articles->links() }}
            </div>
        </div>
    </div>
@endsection
