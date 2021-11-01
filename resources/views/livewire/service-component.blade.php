<div>
    @foreach($cates as $cate)
        <section class="text-gray-600 body-font border-b">
            <div class="container py-12 mx-auto">
                <h1 class="sm:text-3xl text-2xl mt-2 uppercase font-medium title-font mx-6 mb-4 text-gray-900">
                    Dịch vụ {{ $cate->name }}</h1>
                <div class="grid grid-cols-4 gap-4">
                    @foreach($cate->service as $service)
                        <div class="bg-gray-100 p-6 rounded-lg">
                            <a href="{{ route('service.detail', ['slug'  => $service->slug]) }}">
                            <img class=" rounded w-full object-cover object-center mb-6"
                                 src="{{ asset('storage/'. $service->image) }}" alt="{{ $service->name }}">
                            </a>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
    @endforeach

</div>
