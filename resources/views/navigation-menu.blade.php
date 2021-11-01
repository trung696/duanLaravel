<aside class="flex-shrink-0 hidden w-64 bg-white border-r dark:border-primary-darker dark:bg-darker md:block">
    <div class="flex flex-col h-full">
        <!-- Sidebar links -->
        <nav aria-label="Main" class="flex-1 px-2 py-4 space-y-2 overflow-y-hidden hover:overflow-y-auto">
            <!-- Dashboards links -->
            <div x-data="{ isActive: false, open: true}">
                <!-- active & hover classes 'bg-primary-100 dark:bg-primary' -->
                <a href="#"
                   @click="$event.preventDefault(); open = !open"
                   class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
                   :class="{'bg-primary-100 dark:bg-primary': isActive}"
                   role="button"
                   aria-haspopup="true"
                   :aria-expanded="(open || isActive) ? 'true' : 'false'">
                    <span class="ml-2 text-sm font-bold"> Dashboards </span>
                    <span class="ml-auto" aria-hidden="true">
                                <!-- active class 'rotate-180' -->
                                 <svg class="w-4 h-4 transition-transform transform"
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
                <div role="menu" x-show="open" class="space-y-2 px-7" aria-label="Dashboards">
                    <div>
                        <x-jet-nav-link href="{{ route('dashboard') }}"
                                        :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-jet-nav-link>
                    </div>
                </div>
            </div>

            <!-- Orders links -->
            <div x-data="{ isActive: false, open: true }">
                <!-- active classes 'bg-primary-100 dark:bg-primary' -->
                <a href="#"
                   @click="$event.preventDefault(); open = !open"
                   class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
                   :class="{ 'bg-primary-100 ': isActive }"
                   role="button"
                   aria-haspopup="true"
                   :aria-expanded="(open || isActive) ? 'true' : 'false'">
                    <span class="ml-2 text-sm font-bold"> Đơn hàng </span>
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
                <div x-show="open" class="space-y-2 px-7" role="menu" arial-label="Orders">
                    <x-jet-nav-link href="{{ route('admin.orders') }}"
                                    :active="request()->routeIs('admin.orders')">
                        {{ __('Lịch book') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('admin.orders-product') }}"
                                    :active="request()->routeIs('admin.orders-product')">
                        {{ __('Đặt hàng') }}
                    </x-jet-nav-link>
                </div>
            </div>
            <!-- Services links -->
            <div x-data="{ isActive: false, open: true }">
                <!-- active classes 'bg-primary-100 dark:bg-primary' -->
                <a href="#"
                   @click="$event.preventDefault(); open = !open"
                   class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
                   :class="{ 'bg-primary-100 dark:bg-primary': isActive }"
                   role="button"
                   aria-haspopup="true"
                   :aria-expanded="(open || isActive) ? 'true' : 'false'">
                    <span class="ml-2 text-sm font-bold"> Dịch vụ </span>
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
                <div x-show="open" class="space-y-2 px-7" role="menu" arial-label="Services">
                    <x-jet-nav-link href="{{ route('admin.categories-services') }}"
                                    :active="request()->routeIs('admin.categories-services')">
                        {{ __('Danh mục dịch vụ') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('admin.services') }}"
                                    :active="request()->routeIs('admin.services')">
                        {{ __('Dịch vụ') }}
                    </x-jet-nav-link>
                </div>
            </div>

            <!-- Products links -->
            <div x-data="{ isActive: false, open: true }">
                <!-- active classes 'bg-primary-100 dark:bg-primary' -->
                <a href="#"
                   @click="$event.preventDefault(); open = !open"
                   class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
                   :class="{ 'bg-primary-100 dark:bg-primary': isActive }"
                   role="button"
                   aria-haspopup="true"
                   :aria-expanded="(open || isActive) ? 'true' : 'false'">
                    <span class="ml-2 text-sm font-bold"> Sản phẩm </span>
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
                <div x-show="open" class="space-y-2 px-7" role="menu" arial-label="Products">
                    <x-jet-nav-link href="{{ route('admin.categories') }}"
                                    :active="request()->routeIs('admin.categories')">
                        {{ __('Danh mục Sản phẩm') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('admin.products') }}"
                                    :active="request()->routeIs('admin.products')">
                        {{ __('Sản phẩm') }}
                    </x-jet-nav-link>
                </div>
            </div>

            <!-- News links -->
            <div x-data="{ isActive: false, open: true }">
                <!-- active classes 'bg-primary-100 dark:bg-primary' -->
                <a href="#"
                   @click="$event.preventDefault(); open = !open"
                   class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
                   :class="{ 'bg-primary-100 dark:bg-primary': isActive }"
                   role="button"
                   aria-haspopup="true"
                   :aria-expanded="(open || isActive) ? 'true' : 'false'">
                    <span class="ml-2 text-sm font-bold"> Tin túc </span>
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
                <div x-show="open" class="space-y-2 px-7" role="menu" arial-label="News">
                    <x-jet-nav-link href="{{ route('admin.categories-new') }}"
                                    :active="request()->routeIs('admin.categories-new')">
                        {{ __('Danh mục Tin tức') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('admin.blogs') }}"
                                    :active="request()->routeIs('admin.blogs')">
                        {{ __('Tin tức') }}
                    </x-jet-nav-link>
                </div>
            </div>

            <!-- Slider links -->
            <div x-data="{ isActive: false, open: true }">
                <!-- active classes 'bg-primary-100 dark:bg-primary' -->
                <a href="#"
                   @click="$event.preventDefault(); open = !open; "
                   class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
                   :class="{ 'bg-primary-100 dark:bg-primary': isActive }"
                   role="button"
                   aria-haspopup="true"
                   :aria-expanded="(open || isActive) ? 'true' : 'false'">
                    <span class="ml-2 text-sm font-bold"> Slider </span>
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
                <div x-show="open" class="space-y-2 px-7" role="menu" arial-label="News">
                    <x-jet-nav-link href="{{ route('admin.sliders') }}"
                                    :active=" request()->routeIs('admin.sliders')">
                        {{ __('Slider') }}
                    </x-jet-nav-link>
                </div>
            </div>
            <!-- user links -->
            <div x-data="{ isActive: false, open: true }">
                <!-- active classes 'bg-primary-100 dark:bg-primary' -->
                <a href="#"
                   @click="$event.preventDefault(); open = !open; "
                   class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
                   :class="{ 'bg-primary-100 dark:bg-primary': isActive }"
                   role="button"
                   aria-haspopup="true"
                   :aria-expanded="(open || isActive) ? 'true' : 'false'">
                    <span class="ml-2 text-sm font-bold"> Tài khoản </span>
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
                <div x-show="open" class="space-y-2 px-7" role="menu" arial-label="User">
                    <x-jet-nav-link href="{{ route('admin.users') }}"
                                    :active=" request()->routeIs('admin.users')">
                        {{ __('Tài khoản') }}
                    </x-jet-nav-link>
                </div>
            </div>
            <!-- user links -->
            <div x-data="{ isActive: false, open: true }">
                <!-- active classes 'bg-primary-100 dark:bg-primary' -->
                <a href="#"
                   @click="$event.preventDefault(); open = !open; "
                   class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
                   :class="{ 'bg-primary-100 dark:bg-primary': isActive }"
                   role="button"
                   aria-haspopup="true"
                   :aria-expanded="(open || isActive) ? 'true' : 'false'">
                    <span class="ml-2 text-sm font-bold"> Cài đặt </span>
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
                <div x-show="open" class="space-y-2 px-7" role="menu" arial-label="User">
                    <x-jet-nav-link href="{{ route('admin.settings') }}"
                                    :active=" request()->routeIs('admin.settings')">
                        {{ __('Cài đặt') }}
                    </x-jet-nav-link>
                </div>
            </div>
            <!-- comments links -->
            <div x-data="{ isActive: false, open: true }">
                <!-- active classes 'bg-primary-100 dark:bg-primary' -->
                <a href="#"
                   @click="$event.preventDefault(); open = !open; "
                   class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
                   :class="{ 'bg-primary-100 dark:bg-primary': isActive }"
                   role="button"
                   aria-haspopup="true"
                   :aria-expanded="(open || isActive) ? 'true' : 'false'">
                    <span class="ml-2 text-sm font-bold"> Phản hồi </span>
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
                <div x-show="open" class="space-y-2 px-7" role="menu" arial-label="User">
                    <x-jet-nav-link href="{{ route('admin.comments') }}"
                                    :active=" request()->routeIs('admin.comments')">
                        {{ __('Bình luận') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('admin.contacts') }}"
                                    :active=" request()->routeIs('admin.contacts')">
                        {{ __('Liên hệ') }}
                    </x-jet-nav-link>
                </div>
            </div>

        </nav>
    </div>
</aside>
