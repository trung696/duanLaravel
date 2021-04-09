<div class="p-6">
    <div class="flex items-center justify-end px-4 py-3 text-right sm:px-5">
        <x-jet-input type="text" class="block mr-10" placeholder="Tìm kiếm" wire:model="search"/>
        <x-jet-button wire:click.prevent="createShowModal">
            {{ __('Thêm mới') }}
        </x-jet-button>
    </div>

    @if(Session::has('message'))
        <div class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold
        text-xs text-white uppercase tracking-widest">
            {{ Session::get('message') }}
        </div>
    @endif
    The data table

    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                ID
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Têm
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Số điện thoại
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Địa chỉ
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Dịch vụ
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Sản phẩm
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Ngày book
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Khung giờ book
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nhân viên cắt
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Ghi chú
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Thời gian đặt
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Edit
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @forelse( $orders as $order)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $order->id }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $order->name }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $order->phone_number }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $order->address }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    @if(empty($order->order_detail))
                                        {{ $order->order_detail->id_service }}
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    @if(empty($order->order_detail))
                                        {{ $order->order_detail->id_product }}
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ \Carbon\Carbon::parse($order->book_date)->format('d-m-Y') }}

                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ \Carbon\Carbon::parse($order->time_shift)->format('h:i') }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $order->user->name }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $order->note }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $order->created_at }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" wire:click="updateShowModal({{$order->id}})"
                                       class="text-green-700 hover:text-indigo-900">View</a>
                                    <a href="#" wire:click="updateShowModal({{$order->id}})"
                                       class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    <a href="#" wire:click="deleteShowModal({{ $order->id }})"
                                       class="text-red-600 hover:text-red-900">Delete</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center" colspan="4">
                                    No data
                                </td>
                            </tr>
                        @endforelse
                        <!-- More items... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>
    {{ $orders->links() }}
    {{--     Modal Form--}}
    <x-jet-dialog-modal wire:model="modalFormVisible">
        @if($modelId)
            <x-slot name="title">
                {{ __('Sửa Đơn hàng') }} {{ $modelId }}
            </x-slot>
        @else
            <x-slot name="title">
                {{ __('Thêm Đơn hàng') }}
            </x-slot>
        @endif

        <x-slot name="content">
            <div class="mt-4">
                <x-jet-label for="phone_number" value="{{ __('Số điện thoại') }}"/>
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
                <x-jet-input id="address" class="block mt-1 w-full" placeholder=" không bắt buộc" type="text"
                             wire:model.debounce.500ms="address"
                             required/>
                {{--                    @error('address') <span class="text-red-500">{{ $message }}</span> @enderror--}}
            </div>
            <div class="mt-4 flex">
                <div class="w-2/3">
                    <x-jet-label for="" value="{{ __('Dich vu') }}"/>
                    <select id="" wire:model="id_service"
                            class="form-select block w-full border-gray-300 focus:border-indigo-300  focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option>Chọn Dich vu</option>
                        @foreach($services as $service)
                            <option value="{{ $service->id }}"> {{ $service->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <x-jet-label for="quality_service" value="{{ __('So luong') }}"/>
                    <x-jet-input id="quality_service" class="block w-full" type="text"
                                 wire:model.debounce.500ms="quality_service" required/>
                </div>
                {{--                    @error('address') <span class="text-red-500">{{ $message }}</span> @enderror--}}
            </div>
            <div class="mt-4">
                <x-jet-label for="note" value="{{ __('Ghi Chú') }}"/>
                <x-jet-input id="note" class="block mt-1 w-full" placeholder=" không bắt buộc" type="text"
                             wire:model.debounce.500ms="note"
                             required/>
                {{--                    @error('note') <span class="text-red-500">{{ $message }}</span> @enderror--}}
            </div>
            <div class="mt-4 ">
                <x-jet-label for="status" value="{{ __('Trạng thái') }}"/>
                <select wire:model="status" id="status"
                        class="form-select block w-full border-gray-300 focus:border-indigo-300  focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option>Chọn Trạng thái</option>
                    <option value="1"> Đặt lịch</option>
                    <option value="2"> Hoàn thành</option>
                    <option value="3"> Hủy</option>
                </select>


                {{--                    @error('status') <span class="text-red-500">{{ $message }}</span> @enderror--}}
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modalFormVisible')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>
            @if($modelId)
                <x-jet-button class="ml-2"
                              wire:click="update"
                              wire:loading.attr="disabled">
                    {{ __('Sửa') }}
                </x-jet-button>
            @else
                <x-jet-button class="ml-2"
                              wire:click="create"
                              wire:loading.attr="disabled">
                    {{ __('Thêm') }}
                </x-jet-button>
            @endif

        </x-slot>
    </x-jet-dialog-modal>

    {{--        Delete Modal--}}
    {{--    <x-jet-confirmation-modal wire:model="modalConfirmDeleteVisible">--}}
    {{--        <x-slot name="title">--}}
    {{--            {{ __('Xóa danh mục ❓') }} {{ $modelId }}--}}
    {{--        </x-slot>--}}

    {{--        <x-slot name="content">--}}
    {{--            {{ __('Bạn có chắc chắn muốn xóa không?') }}--}}
    {{--        </x-slot>--}}

    {{--        <x-slot name="footer">--}}
    {{--            <x-jet-secondary-button wire:click="$toggle('modalConfirmDeleteVisible')" wire:loading.attr="disabled">--}}
    {{--                {{ __('Hủy') }}--}}
    {{--            </x-jet-secondary-button>--}}

    {{--            <x-jet-danger-button class="ml-2" wire:click="delete" wire:loading.attr="disabled">--}}
    {{--                {{ __('Xóa') }}--}}
    {{--            </x-jet-danger-button>--}}
    {{--        </x-slot>--}}
    {{--    </x-jet-confirmation-modal>--}}

</div>
