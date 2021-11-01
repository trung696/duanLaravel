<div class="p-6">
    <div class="flex items-center justify-end px-4 py-3 text-right sm:px-5">
        <x-jet-button wire:click.prevent="updateShowModal">
            {{ __('Sửa') }}
        </x-jet-button>
    </div>
    @if(Session::has('message'))
        <div class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold
        text-xs text-white uppercase tracking-widest">
            {{ Session::get('message') }}
        </div>
    @endif
    {{--    The data table--}}

    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div>
            <dl>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Logo
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <img src="{{ asset('storage/'. $setting->logo) }}" alt="">
                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Số điện thoại
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $setting->phone_number }}
                    </dd>
                </div>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Email
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $setting->email }}
                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Địa chỉ
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $setting->address }}
                    </dd>
                </div>

            </dl>
        </div>
    </div>

    {{-- Modal Form --}}
    <x-jet-dialog-modal wire:model="modalFormVisible">
        <x-slot name="title">
            {{ __('Sửa') }}
        </x-slot>

        <x-slot name="content">
            <div class="mt-4">
                <x-jet-label for="phone_number" value="{{ __('Số điện thoại') }}"/>
                <x-jet-input id="phone_number" class="block mt-1 w-full" type="text" wire:model.debounce.500ms="phone_number"
                              required />
                @error('phone_number') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}"/>
                <x-jet-input id="email" class="block mt-1 w-full" type="email" wire:model.debounce.500ms="email"
                             required />
                @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="address" value="{{ __('Dia chi') }}"/>
                <x-jet-input id="address" class="block mt-1 w-full" type="email" wire:model.debounce.500ms="address"
                             required />
                @error('address') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mt-4">
                <input type="file" class="hidden"
                       wire:model="image"
                       x-ref="photo"/>
                <x-jet-label for="photo" value="{{ __('Logo') }}"/>
                @if ($logo && $logo == $image)
                    <img src="{{ asset('storage/' . $logo) }}" class="rounded-2 h-20 w-20 object-cover">
                @elseif($image != $logo)
                    <img src="{{ $image->temporaryUrl() }}" class="rounded-2 h-20 w-20 object-cover">
                @endif
                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-jet-secondary-button>
                @error('logo') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modalFormVisible')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>
            <x-jet-button class="ml-2"
                          wire:click="update"
                          wire:loading.attr="disabled">
                {{ __('Sửa') }}
            </x-jet-button>

        </x-slot>
    </x-jet-dialog-modal>

</div>
