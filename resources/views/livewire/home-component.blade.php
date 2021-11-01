

<div class="pt-1">
    <div class="sliderAx h-auto">
        <div>
            <div class="bg-cover bg-center  h-auto text-white  object-fill">
                <div class=" overflow-hidden rounded-lg bg-gray-100 p-4 mb-4">
                    <div class="owl-carousel owl-theme h-full">
                        @foreach(\App\Models\Slider::all() as $slider)
                            <div>
                                <img src="{{ asset('storage/' . $slider->url_image) }}" alt="" class="">

                            </div>
                        @endforeach
                    </div>
                    <script>
                        jQuery(document).ready(function ($) {
                            $('.owl-carousel').owlCarousel({
                                loop: true,
                                margin: 10,
                                // center:true,
                                dots: true,
                                nav: true,
                                autoplay: true,
                                autoplayTimeout: 2000,
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
            <br>
        </div>
    </div>
    <div class="border-t-2">
        <form class="mx-auto text-center w-4/12 bg-gray-100 p-5 mt-10 shadow-xl rounded-md">
            <label class="text-gray-600 font-bold">
                <span>Nhập số điện thoại</span>
                <input type='text' placeholder="Nhập số điện thoại" wire:model="phone_number"
                       class="w-full mt-2 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500"/>
                @error('phone_number') <span class="text-red-500">{{ $message }}</span> @enderror
            </label>
            <label class="text-gray-600 font-bold">
                <span>Nhập tên</span>
                <input type='text' placeholder="Nhập ten" wire:model="name"
                       class="w-full mt-2 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500"/>
                @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
            </label>
            <div class="mt-4 text-gray-600 font-bold">
                <label>
                    Thời gian đặt lịch
                    <select name="" wire:model="book_date"
                            class="w-full mt-2 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500">
                        @foreach($select_day as $day => $date)
                            <option value=" {{ $date }}">{{ $day . ' - ' . $date }} </option>
                        @endforeach
                    </select>
                    @error('book_date') <span class="text-red-500">{{ $message }}</span> @enderror
                </label>
            </div>
            <div class="mt-4 text-gray-600 font-bold">
                <label>
                    Chọn Dịch vụ
                    <select wire:model="id_ps"
                            class="w-full mt-2 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500">
                        <option value="">Tùy chọn dịch vụ (không bắt buộc)</option>
                        @foreach($services as $sv)
                            <option class="py-1" value="{{ $sv->id }}">{{ $sv->name }}</option>
                        @endforeach
                    </select>
                </label>
            </div>

            <div class="mt-4 text-gray-600 font-bold">
                <label>
                    Chọn stylelist
                    <select wire:model="id_user"
                            class="w-full mt-2 py-2 appearance-none border rounded-lg text-gray-700 focus:outline-none focus:border-green-500">
                        <option value="">Tùy chọn nhân viên (không bắt buộc)</option>
                        @foreach($staff as $st)
                            <option class="py-1" value="{{ $st->id }}">{{ $st->name }}</option>
                        @endforeach
                    </select>
                </label>
            </div>

            <div class="mt-4 text-gray-600 font-bold">
                <label>
                    Chọn khung giờ
                    <select wire:model="time_shift"
                            class="w-full mt-2 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500">
                        <option>Tùy chọn khung gio</option>
                        @foreach($arr_time as $time)
                            <option class="py-1" value="{{ $time }}">{{ $time }}</option>
                        @endforeach
                    </select>
                    @error('time_shift') <span class="text-red-500">{{ $message }}</span> @enderror
                </label>
            </div>
            <div class="mt-4 text-gray-600 font-bold">
                <label>
                    Ghi chú
                    <textarea wire:model="note"
                              class="w-full mt-2 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500"></textarea>
                </label>
            </div>
            <div class="mt-4 text-gray-600 font-bold">
                <button type="button" wire:click="book"
                        class="border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-gray-200 rounded px-4 py-2 my-2 font-bold">
                    Đăt lịch
                </button>
            </div>
        </form>

        <x-jet-confirmation-modal wire:model="modalConfirmBook">
            <x-slot name="title">
                {{--            {{ __('Đăng ký thành công') }}--}}
                <p class="text-center text-green-700">Đăng ký thành công</p>
            </x-slot>

            <x-slot name="content">
                {{--            {{ __('Bạn có chắc chắn muốn xóa không?') }}--}}
                <p>Số điện thoại: {{ $phone_number }}</p>
                <p>Thời gian đặt lịch: {{ $book_date }}</p>

                <p>Dịch
                    vụ: @if($id_order && $id_ps) {{ \App\Models\OrderDetails::where('id_order', $id_order)->first()->service->name }}@endif</p>

                {{-- <p>Nhân viên cắt: {{ \App\Models\User::where('id', $id_user)->first()['name'] }}</p> --}}
                <p>Khung giờ đặt: {{ $time_shift }}</p>
                <p>Ghi chú: {{ $note }}</p>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('modalConfirmBook')" wire:loading.attr="disabled">
                    {{ __('OK') }}
                </x-jet-secondary-button>
            </x-slot>
        </x-jet-confirmation-modal>
    </div>

    <div class="container mx-auto mt-20 ">
        <div class="border-t-2">
            <div class="mt-10">
                <div class="flex justify-between my-5 items-center">
                    <div class="">
                        <span class="text-3xl font-bold ">
                            Dịch vụ 30shine
                        </span><br>
                        <span class="text-gray-500 text-lg font">Thư giãn 30 phút giúp bạn tỏa sáng</span>
                    </div>
                    <div>
                        <span><a href="#" class="text-lg italic underline">Tất cả dịch vụ</a></span>
                    </div>
                </div>
                <img class="w-full" src="https://storage.30shine.com/banner/20210319_BannerService_80K_w.jpg" alt="">
            </div>
            <div class="grid grid-cols-4  my-12 gap-8">
                @foreach($cate_services as $cate)
                    <div class="flex">
                        <div>
                            <img class="rounded-md w-28"
                                 src="{{  asset('storage/'.$cate->image) }}"
                                 alt="">
                        </div>
                        <div class="ml-4">
                            <a href="#">
                                <span class="text-lg font-bold capitalize">{{ $cate->name }}</span><br>
                                <span></span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="border-t-2 mt-10">
            <div class=" mx-auto justify-between flex items-center my-5">
                <div class="">
                    <span class="text-3xl font-bold">
                        ƯU ĐÃI - QUÀ TẶNG SALON-HAIR
                    </span><br>
                    <span class="text-gray-500 text-lg font">Hàng ngàn ưu đãi hấp dẫn đang chờ</span>
                </div>
                <div>
                    <a href="#" class="text-lg italic underline">Các ưu đãi khác</a>
                </div>
            </div>
            <div class="mx-auto grid grid-cols-3 gap-8">
                @foreach($rewards as $reward)
                    <div>
                        <a href="{{ route('blog.detail',['slug' => $reward->slug]) }}">
                            <div>
                                <img class=""
                                     src="{{ asset('storage/' . $reward->image) }}"
                                     alt="">
                            </div>
                            <div>
                                <span class="font-bold">{{ $reward->title }}</span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="border-t-2 mt-10">
            <div class=" justify-between flex my-5 ">
                <div class="">
                        <span class="text-3xl font-bold">
                            30SHINE STORE
                        </span><br>
                    <span class="text-gray-500 text-lg font">Số 1 mỹ phẩm về nam</span>
                </div>
                <div>
                    <a href="#" class="text-lg italic underline">Xem tât cả</a>
                </div>
            </div>

            <div class="">
                <img class="w-full"
                     src="https://storage.30shine.com/ResourceWeb/data/images/newHome/30Shine-store-banner-2.jpg"
                     alt="">
            </div>
            <div class=" my-2 flex justify-between items-center">
                <div>
                    <span class="font-bold">Top sản phẩm nổi bật</span>
                </div>
                <div class="flex gap-4">
{{--                    <button class="bg-black text-white w-12 h-12 rounded-full"> <</button>--}}
{{--                    <button class="bg-black text-white w-12 h-12 rounded-full"> ></button>--}}
                </div>
            </div>

            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                @foreach($products as $pro)
                    <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                        <div class="p-4 group">
                            <div class="overflow-hidden hover:translate-x-2 h-56">
                                <a href="{{ route('product.detail', ['slug' => $pro->slug]) }}"><img
                                        class="transform hover:scale-125 duration-700 "
                                        src="{{ asset('storage/' . $pro->feature_img) }}" alt=""></a>
                            </div>
                            <div class="h-16">
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
                                    <span class="text-lg font-bold">{{  number_format($pro->regular_price, '0', '.', '.') }}d</span>
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


    <script src="{{ 'https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js' }}"></script>
</div>
