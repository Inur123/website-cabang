@extends('layouts.app')



    @include('layouts.header')
    <div class="container mx-auto px-6 py-12">
        <h1 class="text-3xl font-bold mb-8">Blog Posts</h1>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 ">
            @foreach ($posts->sortByDesc('published_at') as $post)
          <!-- Blog Post 1 -->
          <article class="bg-white rounded-lg overflow-hidden shadow-lg dark:bg-gray-900 dark:text-gray-100">
            <a href="{{ route('blog.show', $post->slug) }}">
              <div class="relative h-48">
                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Phoenix illustration" class="object-cover w-full h-full">
                <!-- Kategori di pojok kanan atas -->
                <div class="absolute top-1 right-1 bg-green-500 text-white text-xs px-2 py-1 rounded-lg">
                  <span>{{ $post->category->name }}</span>
                </div>
              </div>
              <div class="p-6">
                <div class="flex items-center gap-4 text-sm text-gray-600 mb-3">
                  <div class="flex items-center gap-1">

                    <span>{{ $post->user->name }}</span>

                  </div>
                  <div class="flex items-center gap-1">

                    <span>{{ $post->published_at->format('d M Y') }}</span>
                  </div>
                </div>
                <h2 class="text-xl font-bold mb-2">{!! $post->title !!}</h2>
                {{-- <p class="text-gray-600">{!! $post->excerpt !!}</p> --}}
              </div>
            </a>
          </article>
@endforeach
        </div>
        <div class="mt-8">
            {{ $posts->links() }} <!-- This will render pagination links -->
        </div>
    </div>
@include('layouts.footer')
