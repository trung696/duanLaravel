<div class="mx-auto  mt-6">
    <!-- Breadcrumbs -->
    <div class="mx-auto px-4 my-4 sm:px-6 lg:px-8">
        <div class="flex items-center space-x-2 text-gray-400 text-sm">
            <a href="{{route('home')}}" class="hover:underline hover:text-gray-600">Trang chủ</a>
            <span>
                <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
             </span>
            <a href="{{route('shop')}}" class="hover:underline hover:text-gray-600">Cửa hàng</a>
            <span>
                <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
             </span>
            <span>{{ $product->name }}</span>
        </div>
    </div>
    <!-- ./ Breadcrumbs -->

    <div class="flex flex-col md:flex-row -mx-4">
        <div class="md:flex-1 w-1/3 px-4 ">
            <div class=" overflow-hidden rounded-lg bg-gray-100 p-4 mb-4">
                <div class="owl-carousel owl-theme h-full">
                    @foreach($product->product_image as $img)
                        <div>
                            <img src="{{ asset('storage/' . $img->image_path) }}" alt="" class="">
                        </div>
                    @endforeach
                </div>
                <script>
                    jQuery(document).ready(function ($) {
                        $('.owl-carousel').owlCarousel({
                            loop: true,
                            margin: 10,
                            // center:true,
                            // dots: true,
                            // nav: true,
                            responsive: {
                                0: {
                                    items: 1
                                },
                            }
                        })
                    })
                </script>
            </div>

        </div>
        <div class="md:flex-1 px-4">
            <h2 class="mb-2 leading-tight tracking-tight font-bold text-gray-800 text-2xl md:text-3xl">{{ $product->name }}
                .</h2>
            <div class="flex items-center space-x-4 my-4">
                <div>
                    <div class="rounded-lg bg-gray-100 flex py-2 px-3">
                        <span class="font-bold text-indigo-600 text-3xl">
                            @if($product->sale_price)
                                {{ number_format($product->sale_price,0, '.', '.') }}
                            @else
                                {{ number_format($product->regular_price,0, '.', '.') }}
                            @endif
                            <sup>đ</sup>
                        </span>
                    </div>
                </div>
                <div class="flex-1">
                    @if($product->sale_price)
                        <p class="text-gray-400 text-xl font-semibold line-through">{{ number_format($product->regular_price,0, '.', '.') }}
                            <sup>đ</sup></p>
                    @endif
                </div>
            </div>
            <p class="text-gray-500">{{ $product->short_description }}</p>

            <div class="flex py-4 space-x-4">
                <div class="relative">
                    <select
                        class="cursor-pointer appearance-none rounded-xl border border-gray-200 pl-4 pr-8 h-14 flex  pb-1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                @if($product->sale_price > 0)
                    <button type="button"
                            wire:click.prevent="store({{ $product->id}}, '{{ $product->name }}' , {{ $product->sale_price }}, '{{ $product->feature_img }}' )"
                            class="h-14 px-6 py-2 font-semibold rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white">
                        Thêm vào giỏ hàng
                    </button>
                @else
                    <button type="button"
                            wire:click.prevent="store({{ $product->id}}, '{{ $product->name }}' , {{ $product->regular_price }}, '{{ $product->feature_img }}' )"
                            class="h-14 px-6 py-2 font-semibold rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white">
                        Thêm vào giỏ hàng
                    </button>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="px-4">
    <style>
        /* Tab content - closed */
        .tab-content {
            max-height: 0;
            -webkit-transition: max-height .35s;
            -o-transition: max-height .35s;
            transition: max-height .35s;
        }

        /* :checked - resize to full height */
        .tab input:checked ~ .tab-content {
            max-height: 100vh;
        }

        /* Label formatting when open */
        .tab input:checked + label {
            /*@apply text-xl p-5 border-l-2 border-indigo-500 bg-gray-100 text-indigo*/
            font-size: 1.25rem; /*.text-xl*/
            padding: 1.25rem; /*.p-5*/
            border-left-width: 2px; /*.border-l-2*/
            border-color: #6574cd; /*.border-indigo*/
            background-color: #f8fafc; /*.bg-gray-100 */
            color: #6574cd; /*.text-indigo*/
        }

        /* Icon */
        .tab label::after {
            float: right;
            right: 0;
            top: 0;
            display: block;
            width: 1.5em;
            height: 1.5em;
            line-height: 1.5;
            font-size: 1.25rem;
            text-align: center;
            -webkit-transition: all .35s;
            -o-transition: all .35s;
            transition: all .35s;
        }

        /* Icon formatting - closed */
        .tab input[type=checkbox] + label::after {
            content: "+";
            font-weight: bold; /*.font-bold*/
            border-width: 1px; /*.border*/
            border-radius: 9999px; /*.rounded-full */
            border-color: #b8c2cc; /*.border-grey*/
        }

        /* Icon formatting - open */
        .tab input[type=checkbox]:checked + label::after {
            transform: rotate(315deg);
            background-color: #6574cd; /*.bg-indigo*/
            color: #f8fafc; /*.text-grey-lightest*/
        }
    </style>
    <div class="tab w-full overflow-hidden border-t">
        <input class="absolute opacity-0 " id="tab-multi-one" type="checkbox" name="tabs">
        <label class="block p-5 leading-normal cursor-pointer" for="tab-multi-one">Chi tiết sản phẩm</label>
        <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
            <p class="p-5">{{ $product->detail_description }}</p>
        </div>
    </div>
    <div class="tab w-full overflow-hidden border-t">
        <input class="absolute opacity-0" id="tab-multi-two" type="checkbox" name="tabs">
        <label class="block p-5 leading-normal cursor-pointer" for="tab-multi-two">Bình luận</label>
        <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
            @auth
                @livewire('comment', ['product_id' => $product->id])
            @else
                <p class="text-xl text-red-500">Đăng nhập để comment</p>
            @endauth
        </div>
    </div>

</div>
<div class="mt-16">
    <h3 class="text-gray-600 text-2xl font-medium">Sản phẩm liên quan</h3>
    <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
        @foreach($relate_product as $pro)
            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                <div class="p-4 group">
                    <div class="overflow-hidden hover:translate-x-2 h-56">
                        <a href="{{ route('product.detail', ['slug' => $pro->slug]) }}"><img
                                class="transform hover:scale-125 duration-700 "
                                src="{{ asset('storage/' . $pro->feature_img) }}" alt=""></a>
                    </div>
                    <div class="h-12">
                        <a href="{{ route('product.detail', ['slug' => $pro->slug]) }}"
                           class="hover:text-yellow-300 transform duration-700">{{ $pro->name }}</a>
                    </div>
                    <div class="my-2">
                        @if($pro->sale_price > 0)
                            <span
                                class="text-lg font-bold">{{ number_format($pro->sale_price, '0', '.', '.') }}d</span>
                            <span
                                class="line-through">{{ number_format($pro->regular_price, '0', '.', '.') }}d</span>
                        @else
                            <span
                                class="text-lg font-bold">{{  number_format($pro->regular_price, '0', '.', '.') }}d</span>
                        @endif
                    </div>
                    <div
                        class="w-full border-black bg-gray-200 text-center transform hover:bg-yellow-300 duration-700">
                        @if($pro->sale_price > 0)
                            <a href="#" class="block w-full py-2"
                               wire:click.prevent="store({{ $pro->id}}, '{{ $pro->name }}' , {{ $pro->sale_price }}, '{{ $pro->feature_img }}' )">Mua
                                Ngay</a>
                        @else
                            <a href="#" class="block w-full py-2"
                               wire:click.prevent="store({{ $pro->id}}, '{{ $pro->name }}' , {{ $pro->regular_price }}, '{{ $pro->feature_img }}' )">Mua
                                Ngay</a>
                        @endif

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</div>
