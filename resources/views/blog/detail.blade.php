@extends('layouts.app')



    @include('layouts.header')

    <div class="container mx-auto px-6 py-12">
        <div class="grid lg:grid-cols-3 gap-12">
          <!-- Main Content -->
          <div class="lg:col-span-2">
            <article>
              <div class="relative h-[400px] rounded-lg overflow-hidden mb-8">
                <img
                  src="{{ asset('storage/' . $post->thumbnail) }}"
                  alt="Featured image"
                  class="object-cover w-full h-full"
                />
              </div>

              <h1 class="text-4xl font-bold mb-6">{{ $post->title }}</h1>

              <div class="flex flex-wrap gap-6 text-gray-600 mb-8">
                <div class="flex flex-col items-start gap-1">
                  <span>Author:</span>
                  <span class="font-medium">{{ $post->user->name }}</span>

                </div>
                <div class="flex flex-col items-start gap-1">
                  <span>Published On:</span>
                  <span class="font-medium">{{ $post->published_at->format('d M Y') }}</span>
                </div>
                <div class="flex flex-col items-start gap-1">
                  <span>Category</span>
                  <span class="font-medium">{{ $post->category->name }}</span>
                </div>
              </div>

              <div class="prose max-w-none">
                <p class="text-justify">
                    {!! $post->content !!}
                </p>
              </div>

              <div class="mt-8 pt-8 border-t">
                <div class="flex items-center gap-2">
                  <span>Share this Post:</span>
                  <div class="inline-flex items-center gap-4 text-green-600">
                    <!-- WhatsApp Image -->
                    <a href="https://wa.me/?text={{ urlencode(url()->current()) }}" target="_blank">
                      <img src="{{ asset('template/images/wa.png') }}" alt="WhatsApp" class="w-10 h-10">
                    </a>
                  </div>
                </div>
              </div>

            </article>
          </div>

          <!-- Sidebar -->
          <div class="lg:col-span-1">
            <!-- Categories -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold mb-4">Categories</h2>

                <!-- Initially show first 10 categories -->
                <ul class="space-y-2" id="category-list-limited">
                  @foreach($categories as $category)
                    <li class="text-gray-600">{{ $category->name }}</li>
                  @endforeach
                </ul>

                <!-- Initially hidden full category list -->
                <ul class="space-y-2 hidden" id="category-list-all">
                  @foreach($categories as $category)
                    <li class="text-gray-600">{{ $category->name }}</li>
                  @endforeach
                </ul>

                <!-- Button to toggle full category list -->
                @if($totalCategoriesCount > 10)
                  <button id="see-more-btn" class="text-blue-600 hover:underline mt-4">See More</button>
                  <button id="see-less-btn" class="text-blue-600 hover:underline mt-4 hidden">Show Less</button>
                @endif
              </div>


            <!-- Most Popular Posts -->
            <div>
              <h2 class="text-2xl font-bold mb-4">Most Popular Post</h2>
              <div class="space-y-4">
                @foreach ($popularPosts as $popularPost)
                <a href="{{ route('blog.show', $popularPost->slug) }}" class="flex items-center gap-4" >
                  <div class="relative w-16 h-16 rounded-lg overflow-hidden flex-shrink-0">
                    <img
                      src="{{ asset('storage/' . $popularPost->thumbnail) }}"
                      alt="templates for class names, generatin"
                      class="object-cover w-full h-full"

                    />
                  </div>
                  <h3 class="font-medium text-gray-600">
                    {{ \Illuminate\Support\Str::limit($popularPost->title, 45, '...') }}
                  </h3>
                </a>
                @endforeach
              </div>
            </div>
          </div>
        </div>
    </div>

    <script>
        // Get the buttons and category lists
        const seeMoreBtn = document.getElementById('see-more-btn');
        const seeLessBtn = document.getElementById('see-less-btn');
        const categoryListLimited = document.getElementById('category-list-limited');
        const categoryListAll = document.getElementById('category-list-all');

        // Show all categories when "See More" is clicked
        seeMoreBtn.addEventListener('click', function() {
          categoryListAll.classList.remove('hidden'); // Show full category list
          seeMoreBtn.classList.add('hidden'); // Hide the "See More" button
          seeLessBtn.classList.remove('hidden'); // Show the "Show Less" button
        });

        // Collapse the category list back to 10 when "Show Less" is clicked
        seeLessBtn.addEventListener('click', function() {
          categoryListAll.classList.add('hidden'); // Hide the full category list
          seeMoreBtn.classList.remove('hidden'); // Show the "See More" button
          seeLessBtn.classList.add('hidden'); // Hide the "Show Less" button
        });
    </script>
@include('layouts.footer')
