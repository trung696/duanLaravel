<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap -m-4">
            @foreach($blogs as $blog)
                <div class="p-4 lg:w-1/3">
                    <div
                        class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                        <a href="{{ route('blog.detail',['slug' => $blog->slug]) }}">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                 src="{{ asset('storage/' . $blog->image) }}" alt="blog">
                        </a>
                        <h2 class="tracking-widest text-xs uppercase title-font font-medium text-gray-400 my-1">{{$blog->category->name}}</h2>
                        <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">{{ $blog->title }}</h1>
                        <p class="leading-relaxed mb-3">{{$blog->short_description}}.</p>
                        <a href="{{ route('blog.detail',['slug' => $blog->slug]) }}"
                           class="text-purple-500 inline-flex items-center">Chi tiết
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                 fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        <div
                            class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
            <span
                class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-gray-200">
              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                   stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                <circle cx="12" cy="12" r="3"></circle>
              </svg>{{ $blog->count_view }}
            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

