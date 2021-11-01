<div class="flex py-10 ">
    <div class="w-1/5 ">
        @livewire('user.layouts-account')
    </div>
    <div class="w-4/5 mx-5 text-gray-900 text-sm">
        <p class="">Đơn hàng #{{ $code }} đã được đặt lúc
            <span class="bg-yellow-300"> {{ \Carbon\Carbon::parse($order->created_at)->format('d/m/Y') }}</span>
            và hiện tại là
            <span class="bg-yellow-300">
            @if($order->status == 1)
                    Đang xử lý
                @elseif($order->status == 2)
                    Đã xác nhận
                @elseif($order->status == 3)
                    Đang giao hàng
                @elseif($order->status == 4)
                    Hoàn thành
                @elseif($order->status == 5)
                    Không nhận hàng
                @elseif($order->status == 6)
                    Hủy
                @endif</span>.
        </p>
        <div>
            <h3 class="my-5 text-2xl font-bold">Chi tiết đơn hàng</h3>
            <table class=" border-collapse divide-y divide-gray-200 border-2 w-full">
                <thead class="bg-gray-50">
                <tr>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Sản phẩm - Dịch vụ
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Tổng
                    </th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                @foreach($order->order_detail as $od)

                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-blue-500">
                             <span class="text-black font-bold">
                                  @if($od->type == 2)
                                      {{ $od->product->name}}
                                 @else
                                     {{ $od->service->name}}
                                 @endif x {{ $od->quality_ps }}</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-green-500">
                            {{  number_format($od->price * $od->quality_ps, 0, '.', '.') }} <sup>đ</sup>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        Tổng cộng:
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-green-500">
                        {{  number_format($sum_total, 0, '.', '.') }} <sup>đ</sup>
                    </td>
                </tr>
                <!-- More people... -->
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
