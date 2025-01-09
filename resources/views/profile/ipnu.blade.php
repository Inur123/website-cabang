@extends('layouts.app')



    @include('layouts.header')

    <div class="container mx-auto px-6 py-12">
        <div class="grid lg:grid-cols-3 gap-12">
          <!-- Main Content -->
          <div class="lg:col-span-2">
            <h1 class="text-2xl font-semibold">IPNU Profile</h1>
            <p class="mt-4">Welcome to the IPNU profile page. Below you can find more information about IPNU and its activities.</p>

            <!-- Image -->
            <div class="mt-6">
                <img src="{{ asset('template/images/1.png') }}" alt="IPNU Logo" class="w-full h-auto rounded-lg shadow-md">
            </div>

            <!-- Article -->
            <div class="mt-8">
                <h2 class="text-xl font-bold mb-4">About IPNU</h2>
                <p class="text-gray-600 text-justify">
                    The Indonesian Muslim Student Association (IPNU) is an organization formed by Muslim students in Indonesia.
                    Founded in 1954, IPNU aims to promote Islam among the younger generation and contribute to the development of
                    the country through education, social programs, and community service. The association strives to nurture leadership
                    among students and help them become responsible citizens who are aware of both national and global issues.
                </p>
                <p class="mt-4 text-gray-600">
                    IPNU's activities include organizing educational programs, community outreach, and providing support for Muslim
                    students. The organization also fosters a strong sense of unity and solidarity among its members and strives to
                    empower youth through active participation and leadership development.
                </p>
            </div>
        </div>

          <!-- Sidebar -->
          <div class="lg:col-span-1">
            <!-- Categories -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold mb-4 ">Categories</h2>

                <!-- Initially show first 10 categories -->
                <ul class="space-y-2 mt-4" id="category-list-limited">  <!-- Increased space between items -->
                  @foreach($categories->take(10) as $category)
                    <li class="text-gray-600">{{ $category->name }}</li>
                  @endforeach
                </ul>

                <!-- Initially hidden full category list (categories 11 and onward) -->
                <ul class="space-y-2 hidden mt-2"  id="category-list-all"> <!-- Increased space here as well -->
                  @foreach($categories->skip(10) as $category)
                    <li class="text-gray-600">{{ $category->name }}</li>
                  @endforeach
                </ul>

                <!-- Button to toggle full category list -->
                @if($totalCategoriesCount > 10)
                  <button id="see-more-btn" class="text-blue-600 hover:underline mt-2">Lihat Lainnya</button>
                  <button id="see-less-btn" class="text-blue-600 hover:underline mt-2 hidden">Sembunyikan</button>
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
        document.getElementById('see-more-btn').addEventListener('click', function() {
  // Show the full category list
  document.getElementById('category-list-all').classList.remove('hidden');
  // Hide the 'See More' button and show the 'Show Less' button
  document.getElementById('see-more-btn').classList.add('hidden');
  document.getElementById('see-less-btn').classList.remove('hidden');
});

document.getElementById('see-less-btn').addEventListener('click', function() {
  // Hide the full category list
  document.getElementById('category-list-all').classList.add('hidden');
  // Show the 'See More' button and hide the 'Show Less' button
  document.getElementById('see-more-btn').classList.remove('hidden');
  document.getElementById('see-less-btn').classList.add('hidden');
});

    </script>
@include('layouts.footer')
