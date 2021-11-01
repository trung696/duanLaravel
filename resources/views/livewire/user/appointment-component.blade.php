<div class="flex py-10 ">
    <div class="w-1/5 ">
        @livewire('user.layouts-account')
    </div>
    <div class="w-4/5 mx-5 ">
        @if($orders)
            <table class=" border-collapse divide-y divide-gray-200 border-2 w-full">
                <thead class="bg-gray-50">
                <tr>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Đơn hàng
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Tên khách hàng
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Ngày
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Giờ cắt
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Trạng thái
                    </th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 text-sm">
                @foreach($orders as $key => $order)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-blue-500">
                            #{{ $order->id }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap uppercase">
                            {{ $order->name }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap ">
                            {{ \Carbon\Carbon::parse($order->book_date)->format('d-m-Y') }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap ">
                            {{ \Carbon\Carbon::parse($order->time_shift)->format('H:s') }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap ">
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
                            @endif
                        </td>
{{--                       --}}
{{--                        <td class="px-6 py-4 whitespace-nowrap text-green-500">--}}
{{--                            {{ number_format($total[$key], 0, '.', '.') }} <span class="text-gray-600">cho {{ count($order->order_detail) }} mục</span>--}}
{{--                        </td>--}}
{{--                        <td class="px-6 py-4 whitespace-nowrap text-gray-600">--}}
{{--                            <a href="{{ route('orders.detail', ['code' => $order->id]) }}"--}}
{{--                               class="rounded bg-gray-300 px-3 py-1">Xem</a>--}}
{{--                        </td>--}}
                    </tr>
                @endforeach
                <!-- More people... -->
                </tbody>
            </table>
        @else
            <p>Không có lịch cắt nào</p>
        @endif
    </div>
</div>
