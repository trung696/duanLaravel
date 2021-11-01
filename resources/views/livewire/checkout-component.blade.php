<div class="container mx-auto px-2">

    <div class="flex flex-col lg:flex-row mt-8">
        <div class="w-full lg:w-1/2 order-2">
            <div class="px-6">
                <h3 class="text-gray-700 text-2xl font-medium">Thông tin thanh toán</h3>

                <div class="mt-5">
                    <x-jet-label for="phone_number" value="{{ __('Số điện thoại ')  }}"/>
                    <x-jet-input id="phone_number" class="block mt-1 w-full" type="text"
                                 wire:model.debounce.500ms="phone_number"
                                 required/>
                    @error('phone_number') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="mt-4">
                    <x-jet-label for="name" value="{{ __('Tên khách hàng') }}"/>
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" wire:model.debounce.500ms="name"
                                 required/>
                    @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="mt-4">
                    <x-jet-label for="address" value="{{ __('Địa chỉ') }}"/>
                    <x-jet-input id="address" class="block mt-1 w-full" type="text"
                                 wire:model.debounce.500ms="address"
                                 required/>
                    @error('address') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('Địa chỉ email') }}"/>
                    <x-jet-input id="email" class="block mt-1 w-full" placeholder="" type="email"
                                 wire:model.debounce.500ms="email"
                                 required/>
                    @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="mt-4">
                    <x-jet-label for="note" value="{{ __('Ghi chú về đơn hàng') }}"/>
                    <x-jet-input id="note" class="block mt-1 w-full" placeholder=" không bắt buộc" type="text"
                                 wire:model.debounce.500ms="note"
                                 required/>
                    {{--                    @error('note') <span class="text-red-500">{{ $message }}</span> @enderror--}}
                </div>
            </div>

        </div>
        <div class="w-full mb-8 flex-shrink-0 order-1 lg:w-1/2 lg:mb-0 lg:order-2">
            <div class="">
                <div class="border rounded-md  w-full px-6 py-3">
                    <div class="flex items-center justify-between">
                        <h3 class="text-gray-700 text-2xl font-medium">Đơn hàng của bạn</h3>
                    </div>
                    @foreach(Cart::content() as $item)
                        <div class="flex justify-between mt-6">
                            <div class="flex">
                                <img class="h-20 w-20 object-cover rounded"
                                     src="{{ asset('storage/'. $item->options['img'] ) }}"
                                     alt="">
                                <div class="mx-3">
                                    <h3 class="text-sm text-gray-600">{{ $item->name }} <span
                                            class="text-black">x {{ $item->qty }}</span></h3>
                                </div>
                            </div>
                            <span class="text-red-600">{{ $item->price() }}<sup>đ</sup></span>
                        </div>
                    @endforeach
                </div>
                <div>
                    <button wire:click.prevent="checkout"
                            class="flex justify-center w-full px-10 py-3 mt-6 font-medium text-white uppercase bg-gray-800 rounded-full shadow item-center hover:bg-gray-700 focus:shadow-outline focus:outline-none">
                        <span>Đặt hàng</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
