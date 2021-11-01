<div class="container mx-auto px-2">
    @if($order->status != 4)
        <div class="mt-8">
            <p class="text-sm text-gray-900 mb-4">Cảm ơn bạn. Đơn hàng của bạn đã được nhận.</p>
            <div class="flex flex-shrink-0 text-sm text-gray-600">
                <div class="pr-5 mr-4 border-r">
                    <p>Mã đơn hàng:</p>
                    <p class="text-black font-bold">{{ $order->id }}</p>
                </div>
                <div class="pr-5 mr-4 border-r">
                    <p>Ngày:</p>
                    <p class="text-black font-bold">{{ \Carbon\Carbon::parse($order->created_at)->format('d-m-Y') }}</p>
                </div>
                <div class="pr-5 mr-4 border-r">
                    <p>Tổng cộng:</p>
                    <p class="text-green-500 font-bold">{{ number_format($sum_total, 0, '.', '.') }}</p>
                </div>
            </div>
            <div>
                <h3 class="my-5 text-2xl font-bold">Chi tiết đơn hàng</h3>
                <table class=" border-collapse divide-y divide-gray-200 border-2 w-full">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Sản phẩm
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
                                {{ $od->product->name }} <span
                                    class="text-black font-bold">x {{ $od->quality_ps }}</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-green-500">
                                {{  number_format($od->price, 0, '.', '.') }} <sup>đ</sup>
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
    @else
        <p class="text-center">Đơn hàng không tồn tại</p>
    @endif
</div>
