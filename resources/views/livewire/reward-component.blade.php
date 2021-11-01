<section class="text-gray-600 body-font">
    <div class="flex justify-center">
        <img src="https://storage.30shine.com/ResourceWeb/data/images/newHome/30Shine-store-banner.jpg" alt="">
    </div>
    <div class="my-5">
        <span class="text-3xl font-bold">
            ƯU ĐÃI - QUÀ TẶNG SALON-HAIR
        </span><br>
        <span class="text-gray-500 text-lg font">Hàng ngàn ưu đãi hấp dẫn đang chờ</span>
    </div>
    <div class="container px-10 mx-auto">
        <div class="flex flex-wrap -m-4">
            @foreach($rewards as $reward)
                <div class="p-4 lg:w-1/3">
                    <div
                        class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                        <a href="{{ route('blog.detail',['slug' => $reward->slug]) }}">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                 src="{{ asset('storage/' . $reward->image) }}" alt="blog">
                        </a>
                        <h2 class="tracking-widest text-xs uppercase title-font font-medium text-gray-400 my-1">{{$reward->category->name}}</h2>
                        <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">{{ $reward->title }}</h1>
                        {{--                        <p class="leading-relaxed mb-3">{{$blog->short_description}}.</p>--}}
                        <a href="{{ route('blog.detail',['slug' => $reward->slug]) }}"
                           class="text-purple-500 inline-flex items-center">Chi tiết
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                 fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

