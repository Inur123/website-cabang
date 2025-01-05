@extends('layouts.app')
<!-- ===== Header Start ===== -->

@section('header')
    @include('layouts.header')
@endsection
<section class="gj qp gr hj rp hr">
    <div class="bb ze ki xn 2xl:ud-px-0">
        <div class="tc sf yo zf kq">
            <div class="ro">
                <div
                    class="animate_top rounded-md shadow-solid-13 bg-white dark:bg-blacksection border border-stroke dark:border-strokedark p-7.5 md:p-10">
                    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Blog" class="w-full rounded-lg" style="border-radius: 15px" />


                    <h2 class="ek vj 2xl:ud-text-title-lg kk wm nb gb">{{ $post->title }}</h2>

                    <ul class="tc uf cg 2xl:ud-gap-15 fb">
                        <li><span class="rc kk wm">Author: </span>{{ $post->user->name }}</li>
                        <li><span class="rc kk wm">Published On: </span>{{ $post->published_at->format('d M Y') }}</li>
                        <li><span class="rc kk wm">Category: </span> {{ $post->category->name }}</li>
                    </ul>

                    <p >
                        {!! $post->content !!}
                    </p>
                    <div style="margin-top: 20px; display: flex; align-items: center;">
                        <p class="sj kk wm tb" style="margin-right: 15px;">Share this Post:</p>
                        <ul class="flex space-x-4">
                            <!-- WhatsApp Share -->
                            <li>
                                <a href="https://wa.me/?text={{ urlencode(url()->current()) }}"
                                   style="transition: opacity 0.3s ease;"
                                   target="_blank"
                                   onmouseover="this.style.opacity='0.7'"
                                   onmouseout="this.style.opacity='1'">
                                    <img src="{{ asset('template-blog/images/wa.png') }}"
                                         alt="Share on WhatsApp"
                                         width="24" height="24"
                                         style="max-width: 100%; height: auto;"/>
                                </a>
                            </li>
                            <!-- Add more sharing options as needed, e.g., Facebook, Twitter, etc. -->
                        </ul>
                    </div>




                </div>
            </div>

            <div class="jn/2 so">
                <div class="animate_top fb">
                    <form action="#">
                        <div class="i">
                            <input type="text" placeholder="Search Here..."
                                class="vd sm _g ch pm vk xm rg gm dm/40 dn/40 li mi" />

                            <button class="h r q _h">
                                <svg class="th ul ml il" width="21" height="21" viewBox="0 0 21 21"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.031 14.617L20.314 18.899L18.899 20.314L14.617 16.031C13.0237 17.3082 11.042 18.0029 9 18C4.032 18 0 13.968 0 9C0 4.032 4.032 0 9 0C13.968 0 18 4.032 18 9C18.0029 11.042 17.3082 13.0237 16.031 14.617ZM14.025 13.875C15.2941 12.5699 16.0029 10.8204 16 9C16 5.132 12.867 2 9 2C5.132 2 2 5.132 2 9C2 12.867 5.132 16 9 16C10.8204 16.0029 12.5699 15.2941 13.875 14.025L14.025 13.875Z" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="animate_top fb">
                    <h4 class="tj kk wm qb">Categories</h4>

                    <ul>
                        @foreach($categories as $category)
                        <li class="ql vb du-ease-in-out il xl">
                            <a href="#">{{ $category->name }}</a> <!-- Ganti 'name' dengan field yang sesuai -->
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="animate_top">
                    <h4 class="tj kk wm qb">Related Posts</h4>

                    <div>
                        @foreach($relatedPosts as $relatedPost)
                        <div class="tc fg 2xl:ud-gap-6 qb">
                            <img src="{{ asset('storage/' . $relatedPost->thumbnail) }}" alt="Blog" />
                            <h5 class="wj kk wm xl bn ml il">
                                <a href="{{ route('blog.show', $relatedPost->slug) }}">{{ $relatedPost->title }}</a>
                            </h5>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@section('footer')
@include('layouts.footer')
@endsection
