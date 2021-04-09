<div class="pt-1">
    <div class="sliderAx h-auto">
        <div id="slider-1">
            <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill"
                 style="background-image: url(https://images.unsplash.com/photo-1544427920-c49ccfb85579?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1422&q=80)">
                <div class="md:w-1/2">
                    <p class="font-bold text-sm uppercase">Services</p>
                    <p class="text-3xl font-bold">Hello world</p>
                    <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
                    <a href="#"
                       class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact
                        us</a>
                </div>
            </div>
            <br>
        </div>
    </div>

    <form class="container mx-auto text-center w-4/12">
        <label class="text-gray-600 font-bold">
            <span>Nhập số điện thoại</span>
            <input type='text' placeholder="Nhập số điện thoại" wire:model="phone_number"
                   class="w-full mt-2 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500"/>
            @error('phone_number') <span class="text-red-500">{{ $message }}</span> @enderror
        </label>
        <div class="mt-4 text-gray-600 font-bold">
            <label>
                Thời gian đặt lịch
                <select name="" wire:model="book_date"
                        class="w-full mt-2 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500">
                    <option>Tùy chọn ngày đặt</option>
                    @foreach($select_day as $day => $date)
                        <option value=" {{ $date }}">{{ $day . ' - ' . $date }} </option>
                    @endforeach
                </select>
                @error('book_date') <span class="text-red-500">{{ $message }}</span> @enderror
            </label>
        </div>
        <div class="mt-4 text-gray-600 font-bold">
            <label>
                Chọn stylelist
                <select wire:model="id_user"
                        class="w-full mt-2 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500">
                    <option>Tùy chọn nhân viên (không bắt buộc)</option>
                    @foreach($employee as $emp)
                        <option class="py-1" value="{{ $emp->id }}">{{ $emp->name }}</option>
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
            <p>Nhân viên cắt: {{ \App\Models\User::where('id', $id_user)->first()['name'] }}</p>
            <p>Khung giờ đặt: {{ $time_shift }}</p>
            <p>Ghi chú: {{ $note }}</p>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modalConfirmBook')" wire:loading.attr="disabled">
                {{ __('OK') }}
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-confirmation-modal>

    <div class="container mx-auto">
        <div class="w-11/12 mx-auto">
            <div class="">
                <div class="flex justify-between">
                    <div class="my-2">
                        <span class="text-3xl font-bold ">
                            Dịch vụ 30shine
                        </span><br>
                        <span class="text-gray-500 text-lg font">Thư giãn 30 phút giúp bạn tỏa sáng</span>
                    </div>
                    <div>
                        <span><a href="#" class="text-lg italic underline">Các dịch vụ khác</a></span>
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

        <div class="w-11/12 mx-auto justify-between flex">
            <div class="">
                    <span class="text-3xl font-bold">
                        ƯU ĐÃI - QUÀ TẶNG 30SHINE
                    </span><br>
                <span class="text-gray-500 text-lg font">Hàng ngàn ưu đãi hấp dẫn đang chờ</span>
            </div>
            <div>
                <a href="#" class="text-lg italic underline">Các ưu đãi khác</a>
            </div>
        </div>
        <div class="w-11/12 mx-auto grid grid-cols-3  my-12 gap-8">
            <div>
                <a href="#">
                    <div>
                        <img class="w-11/12"
                             src="https://30shine-store-images.s3.ap-southeast-1.amazonaws.com/uploads/small_1080x1080_Banner_CTBH_T01_B4_4c10357c19.jpg"
                             alt="">
                    </div>
                    <div>
                        <span class="font-bold">Giảm giá độc quyền SRM Acsys 2021</span>
                    </div>
                </a>
            </div>
            <div>
                <a href="#">
                    <div>
                        <img class="w-11/12"
                             src="https://30shine-store-images.s3.ap-southeast-1.amazonaws.com/uploads/small_1080x1080_Banner_CTBH_T01_B4_4c10357c19.jpg"
                             alt="">
                    </div>
                    <div>
                        <span class="font-bold">Giảm giá độc quyền SRM Acsys 2021</span>
                    </div>
                </a>
            </div>
            <div>
                <a href="#">
                    <div>
                        <img class="w-11/12"
                             src="https://30shine-store-images.s3.ap-southeast-1.amazonaws.com/uploads/small_1080x1080_Banner_CTBH_T01_B4_4c10357c19.jpg"
                             alt="">
                    </div>
                    <div>
                        <span class="font-bold">Giảm giá độc quyền SRM Acsys 2021</span>
                    </div>
                </a>
            </div>
        </div>
        <div>
            <div class="w-11/12 mx-auto justify-between flex">
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
        </div>
        <div class="w-11/12 mx-auto">
            <img class="w-full"
                 src="https://storage.30shine.com/ResourceWeb/data/images/newHome/30Shine-store-banner-2.jpg" alt="">
        </div>
        <div class="w-11/12 mx-auto my-2 flex justify-between">
            <div>
                <span class="font-bold">Top sản phẩm nổi bật</span>
            </div>
            <div class="flex gap-4">
                <button class="bg-black text-white w-12 h-12 rounded-full"> <</button>
                <button class="bg-black text-white w-12 h-12 rounded-full"> ></button>
            </div>
        </div>
        <div class="w-11/12 mx-auto grid grid-cols-4 gap-10  ">
            @foreach($products as $pro)
                <div>
                    <div>
                        <img class=""
                             src="{{ asset('storage/' . $pro->feature_img ) }}" alt="">
                    </div>
                    <p> {{ $pro->name }} </p>
                    <div class="my-2">
                        @if($pro->sale_price > 0)
                            <span class="text-lg font-bold">{{ $pro->sale_price }} ₫</span>
                            <span class="line-through">{{ $pro->regular_price }} ₫</span>
                        @else
                            <span class="text-lg font-bold">{{ $pro->regular_price }} ₫</span>
                        @endif
                    </div>
                    <button class="w-full bg-yellow-400 hover:bg-yellow-300"><a href="#">Mua Ngay</a></button>
                </div>
            @endforeach
        </div>

        <div class="w-11/12 mx-auto mt-10">
            <div class=" justify-between flex">
                <div class="">
                    <span class="text-3xl font-bold uppercase">
                        tin  tức
                    </span><br>
                    <span class="text-gray-500 text-lg font">Bí quyết đẹp trai 30shine</span>
                </div>
                <div>
                    <a href="#" class="text-lg italic underline">Xem tất cả</a>
                </div>
            </div>
            <div class=" grid grid-cols-2  my-12 gap-8">
                <div>
                    <a href="#">
                        <div>
                            <img class="w-full"
                                 src="https://storage.30shine.com/ResourceWeb/data/images/lookbook/thumbnail/dynamic-style.jpg"
                                 alt="">
                        </div>
                        <div>
                            <span class="font-bold">Diện Mạo Khỏe Khoắn Đầy Nam Tính Cùng 4 Kiểu Tóc Trong "Bứt Phá"
                                Collection Của 30Shine</span>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div>
                            <img class=""
                                 src="https://storage.30shine.com/ResourceWeb/data/images/lookbook/thumbnail/genz-style.jpg"
                                 alt="">
                        </div>
                        <div>
                            <span class="font-bold">Khẳng Định Cá Tính Bản Thân Cùng 8 Kiểu Tóc Cực Phong Cách Trong
                                "Bùng
                                Nổ" Collection Từ 30Shine</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="w-11/12 mx-auto justify-between flex">
            <div class="">
                    <span class="text-3xl font-bold">
                        SHINE MEMBER
                    </span><br>
                <span class="text-gray-500 text-lg font">Thành viên 30Shine, tưng bừng ưu đãi</span>
            </div>
            <div>
                <a href="#" class="text-lg italic underline">Các ưu đãi khác</a>
            </div>
        </div>
        <div class="w-11/12 mx-auto grid grid-cols-3  my-12 gap-8">
            <div>
                <a href="#">
                    <div>
                        <img class="w-11/12"
                             src="https://storage.30shine.com/ResourceWeb/data/images/newHome/bsg.jpg" alt="">
                    </div>
                    <div>
                        <span class="font-bold">Black/Silver/Gold</span>
                    </div>
                </a>
            </div>
            <div>
                <a href="#">
                    <div>
                        <img class="w-11/12"
                             src="https://storage.30shine.com/ResourceWeb/data/images/newHome/shine-topup.jpg"
                             alt="">
                    </div>
                    <div>
                        <span class="font-bold">TOPUP</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="my-20">
            <div class="w-11/12 mx-auto justify-between flex">
                <div class="">
                        <span class="text-3xl font-bold">
                            CAM KẾT 30SHINE CARE
                        </span><br>
                    <span class="text-gray-500 text-lg font">Chất lượng hàng đầu,hậu mãi dài lâu</span>
                </div>

            </div>

        </div>
        <div class="w-11/12 mx-auto">
            <img class="w-full"
                 src="https://storage.30shine.com/ResourceWeb/data/images/newHome/banner-shinecare.jpg" alt="">
        </div>
    </div>


    <script src="{{ 'https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js' }}"></script>
