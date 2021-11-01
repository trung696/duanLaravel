<div class="p-3 border">
    <!-- This is an example component -->
    <div class="p-2">
        <x-jet-nav-link href="{{ route('info') }}" class="my-3"
                        :active="request()->routeIs('info')">
            {{ __('Thông tin tài khoản') }}
        </x-jet-nav-link>
        <x-jet-nav-link href="{{ route('orders') }}" class="my-3"
                        :active="request()->routeIs('orders')">
            {{ __('Đơn hàng') }}
        </x-jet-nav-link>
        @if(Auth::user()->id_role == 3)
            <x-jet-nav-link href="{{ route('appointment') }}" class="my-3"
                            :active="request()->routeIs('appointment')">
                {{ __('Lịch Cắt') }}
            </x-jet-nav-link>
        @endif
    </div>
</div>
