@extends('layouts.app')
<!-- ===== Header Start ===== -->

@section('header')
    @include('layouts.header')
@endsection
<!-- ===== Header End ===== -->


<!-- ===== Blog Grid Start ===== -->
<section class="ji gp uq">
    <div class="bb ye ki xn vq jb jo">
        <div class="wc qf pn xo zf iq">
            @foreach ($posts as $post)
                <div class="animate_top sg vk rm xm">
                    <div class="c rc i z-1 pg">
                        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Blog" style="border-top-left-radius: 10px; border-top-right-radius: 10px;" />


                        <div class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10">
                            <a href="{{ route('blog.show', $post->slug) }}" class="vc ek rg lk gh sl ml il gi hi">Read More</a>
                        </div>
                    </div>

                    <div class="yh">
                        <div class="tc uf wf ag jq">
                            <div class="tc wf ag">
                                <img src="{{ asset('template-blog/images/icon-man.svg') }}" alt="User" />
                                <p>{{ $post->user->name }}</p>
                            </div>
                            <div class="tc wf ag">
                                <img src="{{ asset('template-blog/images/icon-calender.svg') }}" alt="Calender" />
                                <p>{{ $post->published_at->format('d M Y') }}</p>
                            </div>
                        </div>
                        <h4 class="ek tj ml il kk wm xl eq lb">
                            <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                        </h4>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
        <!-- ===== Blog Grid End ===== -->

        <!-- ===== CTA Start ===== -->


        <!-- ===== CTA End ===== -->
        <!-- ===== Footer Start ===== -->
        @section('footer')
            @include('layouts.footer')
        @endsection

        <!-- ===== Footer End ===== -->

        <!-- ====== Back To Top Start ===== -->
