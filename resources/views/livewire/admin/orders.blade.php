<div class="p-6">
    <div x-data="{ isActive: false, open: false }">
        <div class="flex items-center justify-between px-4 py-3 text-right sm:px-5">
            <div class="flex items-center">
                @if($search_date == \Carbon\Carbon::now()->toDateString())
                    <p>Hôm nay </p>
                @elseif(!$search_date)
                    <p>Xem tất cả </p>
                @endif
                <x-jet-input type="date" class="block mx-10" placeholder="Tìm kiếm" wire:model="search_date"/>

            </div>
            <div class="flex justify-end">
                <div class="mr-2">
                    <!-- active classes 'bg-primary-100 dark:bg-primary' -->
                    <a href="#"
                       @click="$event.preventDefault(); open = !open"
                       class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary "
                       :class="{ 'bg-primary-100 dark:bg-primary': isActive }"
                       role="button"
                       aria-haspopup="true"
                       :aria-expanded="(open || isActive) ? 'true' : 'false'">
                        <span class="ml-2 text-sm font-bold">Lọc</span>
                        <span aria-hidden="true" class="ml-auto">
                            <!-- active class 'rotate-180' -->
                                <svg
                                    class="w-4 h-4 transition-transform transform"
                                    :class="{ 'rotate-180': open }"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"/>
                                </svg>
                            </span>
                    </a>
                </div>
                <x-jet-button wire:click="$set('modalFormVisible', 'true')">
                    {{ __('Thêm mới') }}
                </x-jet-button>





            </div>
        </div>

        <div x-show="open" class="space-y-2 px-7" role="menu" arial-label="Orders">
            <table class="min-w-full table-fixed divide-y divide-gray-200">
                <thead class="bg-gray-50">
                <tr>
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Số điện thoại
                    </th>
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Tên
                    </th>
{{--                    <th--}}
{{--                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                        Thời gian đặt--}}
{{--                    </th>--}}
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Status
                    </th>

                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">

                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        <x-jet-input type="text" class="block mr-10" placeholder="Tìm kiếm" wire:model="search_phone"/>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        <x-jet-input type="text" class="block mr-10" placeholder="Tìm kiếm" wire:model="search_name"/>
                    </td>
{{--                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">--}}
{{--                        <x-jet-input type="date" class="block mr-10" placeholder="Tìm kiếm" wire:model="search_date"/>--}}
{{--                    </td>--}}
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        <select wire:model="search_status" id="status"
                                class="form-select block w-full border-gray-300 focus:border-indigo-300  focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                            <option value="">Chọn Trạng thái</option>
                            <option value="1"> Đặt hàng</option>
                            <option value="2"> Đã xác nhận</option>
                            <option value="3"> Đang gửi</option>
                            <option value="4"> Hoàn thành</option>
                            <option value="5"> Không nhận</option>
                            <option value="6"> Hủy</option>
                        </select>
                    </td>

                </tr>
                </tbody>
            </table>
        </div>
    </div>
    @if(Session::has('message'))
        <div class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold
        text-xs text-white uppercase tracking-widest">
            {{ Session::get('message') }}
        </div>
    @endif
    {{--    The data table--}}

    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full table-fixed divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                #ID
                            </th>

                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Số điện thoại
                            </th>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Tên
                            </th>

                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Ngày book
                            </th>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Khung giờ book
                            </th>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nhân viên cắt
                            </th>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Ghi chú
                            </th>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Thời gian đặt
                            </th>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Status
                            </th>
                            <th
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
                                    {{ $order->phone_number }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $order->name }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    @if($order->book_date)
                                        {{ \Carbon\Carbon::parse($order->book_date)->format('d-m-Y') }}
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    @if($order->time_shift)
                                        {{ \Carbon\Carbon::parse($order->time_shift)->format('h:i') }}
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    @if($order->id_user)
                                        {{ $order->user->name }}
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $order->note }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $order->created_at }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    @if($order->status == 1)
                                        @if($order->book_date)
                                            <span class="text-yellow-600"> Đặt lịch</span>
                                        @else
                                            <span class="text-yellow-600">Đặt hàng</span>
                                        @endif
                                    @elseif($order->status == 2)
                                        <span class="text-blue-600">Đã xác nhận</span>
                                    @elseif($order->status == 3)
                                        <span class="text-yellow-600">Đang gửi</span>
                                    @elseif($order->status == 4)
                                        <span class="text-green-600">Hoàn thành</span>
                                    @elseif($order->status == 5)
                                        <span class="text-purple-600">Không nhận</span>
                                    @elseif($order->status == 6)
                                        <span class="text-red-600">Hủy</span>
                                    @elseif($order->status == 7)
                                        <span class="text-red-600">Không tới</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button wire:click.prevent="viewShowModal({{$order->id}})"
                                            class="text-green-700 hover:text-indigo-900">View
                                    </button>
                                    {{--                                    @if($order->status != 2)--}}
                                    <button wire:click.prevenet="updateShowModal({{$order->id}})"
                                            class="text-indigo-600 hover:text-indigo-900">Edit
                                    </button>
                                    {{--                                     @endif--}}
                                    {{--                                    <a href="#" wire:click="deleteShowModal({{ $order->id }})"--}}
                                    {{--                                       class="text-red-600 hover:text-red-900">Delete</a>--}}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center"
                                    colspan="7">
                                    Không có dữ liệu
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
            @if($book_date)
                <div class="mt-4">
                    <x-jet-label for="book_date" value="{{ __('Ngày đặt') }}"/>
                    <x-jet-input id="book_date" class="block mt-1 w-full" type="date"
                                 wire:model.debounce.500ms="book_date"
                                 required/>
                </div>
                <div class="mt-4">
                    {{--                    <x-jet-input id="time_shift" class="block mt-1 w-full"  type="text"--}}
                    {{--                                 wire:model.debounce.500ms="time_shift"--}}
                    {{--                                 required/>--}}
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
            @endif
            @foreach($type as $key => $val)
                <div class="mt-4 grid grid-cols-8 items-end gap-2 ">
                    <div class="col-span-2">
                        <x-jet-label for="" value="{{ __('Chọn loại') }}"/>
                        <select wire:model="type.{{ $key }}"
                                class="form-select block w-full border-gray-300 focus:border-indigo-300  focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                            <option value="1"> Dich vu</option>
                            <option value="2"> Sản phẩm</option>
                        </select>
                    </div>
                    <div class="col-span-2">
                        <x-jet-label for="" value="{{ __('chon') }}"/>
                        <select id="" wire:model="id_ps.{{ $key }}"
                                class="form-select block w-full border-gray-300 focus:border-indigo-300  focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                            <option value="">Chọn</option>
                            @foreach($ps[$key] as $p)
                                <option value="{{ $p->id }}"> {{ $p->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-span-2">
                        <x-jet-label for="price" value="{{ __('Gia') }}"/>
                        <x-jet-input id="price" wire:model="price.{{ $key }}" class="block w-full" disabled
                                     type="text" required/>
                    </div>
                    <div class="col-span-1">
                        <x-jet-label for="quality_service" value="{{ __('So luong') }}"/>
                        <x-jet-input id="quality_service" wire:model="quality_ps.{{ $key }}" class="block w-full"
                                     type="text" required/>
                    </div>
                    <div class="col-span-1">
                        @if ($loop->index === 0)
                            <button wire:click.prevent="addRowForValue"
                                    class="mx-2 px-4 py-3 inline-flex items-center bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150"
                                    type="button">
                                +
                            </button>
                        @else
                            <button wire:click.prevent="removeRowForValue({{ $key }})"
                                    class="mx-2 px-4 py-3 inline-flex items-center bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150"
                                    type="button">
                                -
                            </button>
                        @endif
                    </div>
                </div>
            @endforeach

            <div class="mt-4">
                <x-jet-label for="note" value="{{ __('Ghi Chú') }}"/>
                <x-jet-input id="note" class="block mt-1 w-full" placeholder=" không bắt buộc"
                             type="text"
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
                    <option value="2"> Đã xác nhận</option>
                    <option value="3"> Đang gửi</option>
                    <option value="4"> Hoàn thành</option>
                    <option value="5"> Không nhận</option>
                    <option value="6"> Hủy</option>
                </select>
            </div>
        </x-slot>

        <x-slot name="footer">
            <div class="mb-4 flex">
                <p class="mr-4">Tổng tiền: </p>
                <p class="text-green-600">{{ number_format(array_sum($total), 0, '.', '.') }} <sup>vnd</sup></p>
            </div>
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

    {{--View--}}
    <x-jet-dialog-modal wire:model="view">
        <x-slot name="title">
            {{ __('Xem đơn hàng') }}
        </x-slot>
        <x-slot name="content">
            <table class="min-w-full table-fixed divide-y divide-gray-200">
                <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="w-1/6 px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        Tên khách hàng
                    </td>
                    <td class=" px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $name  }}
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        Số điện thoại
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $phone_number }}
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        Địa chỉ
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $address }}
                    </td>
                </tr>
                @foreach($type as $key => $val)
                    <tr>
                        @if($type[$key] == 1)
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Dịch Vụ
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <div>
                                    @foreach($services as $sv)
                                        @if($sv->id == $id_ps[$key])
                                            {{ $sv->name }}
                                        @endif
                                    @endforeach
                                </div>
                                <div>
                                    @foreach($services as $sv)
                                        @if($sv->id == $id_ps[$key])
                                            {{ $quality_ps[$key] . ' x ' . number_format($sv->price , 0, '.', '.') . ' = ' . number_format($sv->price * $quality_ps[$key], 0, '.', '.') }}
                                        @endif
                                    @endforeach
                                </div>
                            </td>
                        @else
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Sản phẩm
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <div>
                                    @foreach($products as $pr)
                                        @if($pr->id == $id_ps[$key])
                                            {{ $pr->name }}
                                        @endif
                                    @endforeach
                                </div>
                                <div>
                                    @foreach($products as $pr)
                                        @if($pr->id ==  $id_ps[$key])
                                            @if($pr->sale_price)
                                                {{ $quality_ps[$key] . ' x ' . number_format($pr->sale_price, 0, '.', '.') . ' = ' . number_format($pr->sale_price * $quality_ps[$key], 0, '.', '.') }}
                                            @else
                                                {{ $quality_ps[$key] . ' x ' . number_format($pr->regular_price, 0, '.', '.') . ' = ' . number_format($pr->regular_price * $quality_ps[$key], 0, '.', '.') }}
                                            @endif
                                        @endif
                                    @endforeach
                                </div>
                            </td>
                        @endif
                    </tr>
                @endforeach
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        Tổng
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{  number_format($sum, 0, '.', '.') }}
                    </td>
                </tr>
                </tbody>
            </table>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('view', false)" wire:loading.attr="disabled">
                {{ __('Close') }}
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>

</div>
