<div>
    <div class="mt-2">
        <!-- State cards -->
        <div class="grid grid-cols-1 gap-8 p-4 lg:grid-cols-2 xl:grid-cols-4">
            <!-- Value card -->
            <div class="flex items-center justify-between p-4 bg-white rounded-md dark:bg-darker">
                <div>
                    <h6 class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light">
                        Doanh thu
                    </h6>
                    <span class="text-xl font-semibold">{{ number_format($revenue, 0, '.', '.') }} <sup>d</sup></span>
                </div>
                <div>
                                    <span>
                      <svg
                          class="w-12 h-12 text-gray-300 dark:text-primary-dark"
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                      >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                        />
                      </svg>
                    </span>
                </div>
            </div>

            <!-- Users card -->
            <div class="flex items-center justify-between p-4 bg-white rounded-md dark:bg-darker">
                <div>
                    <h6 class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light">
                        Tài khoản
                    </h6>
                    <span class="text-xl font-semibold">{{ count(\App\Models\User::all()) }}</span>
                </div>
                <div>
                                    <span>
                      <svg
                          class="w-12 h-12 text-gray-300 dark:text-primary-dark"
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                      >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"
                        />
                      </svg>
                    </span>
                </div>
            </div>

            <!-- Orders card -->
            <div class="flex items-center justify-between p-4 bg-white rounded-md dark:bg-darker">
                <div>
                    <h6 class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light">
                        Đặt lịch
                    </h6>
                    <span class="text-xl font-semibold">{{ count(\App\Models\Order::whereNotNull('book_date')->get()) }}</span>
                </div>
                <div>
                                    <span>
                      <svg
                          class="w-12 h-12 text-gray-300 dark:text-primary-dark"
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                      >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"
                        />
                      </svg>
                    </span>
                </div>
            </div>

            <!-- Orders card -->
            <div class="flex items-center justify-between p-4 bg-white rounded-md dark:bg-darker">
                <div>
                    <h6 class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light">
                        Đặt hàng
                    </h6>
                    <span class="text-xl font-semibold">{{ count(\App\Models\Order::whereNull('book_date')->get()) }}</span>
                </div>
                <div>
                                    <span>
                      <svg
                          class="w-12 h-12 text-gray-300 dark:text-primary-dark"
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                      >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"
                        />
                      </svg>
                    </span>
                </div>
            </div>

        </div>

        <!-- Charts -->
        <div class="grid grid-cols-2 gap-3">
            <div class="p-6">
                <div id="users"></div>
            </div>
            <div class="p-6">
                <div id="orders"></div>
            </div>
            <div class="p-6">
                <div id="ordersBook"></div>
            </div>
        </div>
    </div>


    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript">
        var userData = @php echo json_encode($users) @endphp;
        var ordersData = @php echo json_encode($ordersData) @endphp;
        ordersData.forEach(function (orderData, index) {
            if (orderData.name == 1) orderData.name = 'Đặt hàng';
            if (orderData.name == 2) orderData.name = 'Đã xác nhận';
            if (orderData.name == 3) orderData.name = 'Đang gửi';
            if (orderData.name == 4) orderData.name = 'Đã thanh toán';
            if (orderData.name == 5) orderData.name = 'Không nhận hàng';
            if (orderData.name == 6) orderData.name = 'Hủy';
            // console.log(orderData)
        })
        var ordersBookData = @php echo json_encode($ordersBookData) @endphp;
        ordersBookData.forEach(function (orderData, index) {
            if (orderData.name == 1) orderData.name = 'Đặt hàng';
            if (orderData.name == 2) orderData.name = 'Đã xác nhận';
            if (orderData.name == 3) orderData.name = 'Đang gửi';
            if (orderData.name == 4) orderData.name = 'Đã thanh toán';
            if (orderData.name == 5) orderData.name = 'Không nhận hàng';
            if (orderData.name == 6) orderData.name = 'Hủy';
            if (orderData.name == 7) orderData.name = 'Không tới';
            // console.log(orderData)
        })

        console.log(ordersData);
        {{--var userData = <?php echo json_encode($userData)?>;--}}
        Highcharts.chart('users', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Thống kê tài khoản năm 2021'
            },
            subtitle: {
                text: 'Source: positronx.io'
            },
            xAxis: {
                categories: ['Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9',
                    'Tháng 10', 'Tháng 11', 'Tháng 12', 'Tháng 1', 'Tháng 2'
                ]
            },
            yAxis: {
                title: {
                    text: 'Số lượng người dùng mới'
                }
            },
            // tooltip: {
            //     headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            //     pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            //         '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            //     footerFormat: '</table>',
            //     shared: true,
            //     useHTML: true
            // },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            plotOptions: {
                series: {
                    allowPointSelect: true,
                },
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Tài khoản mới',
                data: userData
            }],
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        });
        Highcharts.chart('orders', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Thống kê trạng thái đơn hàng 2021'
            },
            tooltip: {
                // pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    // valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.y}'
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Số lượng',
                colorByPoint: true,
                data: ordersData
            }]
        });
        Highcharts.chart('ordersBook', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Thống kê trạng thái đặt lịch 2021'
            },
            tooltip: {
                // pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    // valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.y}'
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Số lượng',
                colorByPoint: true,
                data: ordersBookData
            }]
        });

    </script>
