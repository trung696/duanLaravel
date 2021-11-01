<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('message'))
            <div class="mb-4 font-medium text-sm text-red-600">
                {{ session('message') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

{{--            <div>--}}
{{--                <x-jet-label for="email" value="{{ __('Email') }}" />--}}
{{--                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--            </div>--}}
            <div>
                <x-jet-label for="phone_number" value="{{ __('Số điện thoại: ') }}" />
                <x-jet-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" :value="old('phone_number')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Mật khẩu: ') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Ghi nhớ đăng nhập!') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Quên mật khẩu?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('ĐĂNG NH') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
{{--<x-guest-layout>--}}
{{--    <main id="main" class="main-site left-sidebar">--}}

{{--        <div class="container">--}}

{{--            <div class="wrap-breadcrumb">--}}
{{--                <ul>--}}
{{--                    <li class="item-link"><a href="#" class="link">home</a></li>--}}
{{--                    <li class="item-link"><span>login</span></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">--}}
{{--                    <div class=" main-content-area">--}}
{{--                        <div class="wrap-login-item ">--}}
{{--                            <div class="login-form form-item form-stl">--}}
{{--                                <x-jet-validation-errors class="mb-4"/>--}}
{{--                                @error('message') <span class="text-red-500">{{ $message }}</span> @enderror--}}
{{--                                @if(Session::get('message'))--}}
{{--                                    <div class="text-center">--}}
{{--                                        {{Session::get('message')}}--}}
{{--                                    </div>--}}
{{--                                @endif--}}
{{--                                <form name="frm-login" method="post" action="{{ route('login') }}">--}}
{{--                                    @csrf--}}
{{--                                    <fieldset class="wrap-title">--}}
{{--                                        <h3 class="form-title">Đăng Nhập</h3>--}}
{{--                                    </fieldset>--}}
{{--                                    <fieldset class="wrap-input">--}}
{{--                                        <label for="frm-login-uname">Địa chỉ email:</label>--}}
{{--                                        <input type="email" id="frm-login-uname" name="email"--}}
{{--                                               placeholder="Type your email address" :value="old('email')" required>--}}
{{--                                    </fieldset>--}}
{{--                                    <fieldset class="wrap-input">--}}
{{--                                        <label for="frm-login-pass">Mật Khẩu:</label>--}}
{{--                                        <input type="password" id="frm-login-pass" name="password"--}}
{{--                                               placeholder="************">--}}
{{--                                    </fieldset>--}}

{{--                                    <fieldset class="wrap-input">--}}
{{--                                        <label class="remember-field">--}}
{{--                                            <input class="frm-input " name="remember" id="remember" value="forever"--}}
{{--                                                   type="checkbox"><span>Ghi nhớ đăng nhập</span>--}}
{{--                                        </label>--}}
{{--                                        <a class="link-function left-position" href="{{route('password.request')}}"--}}
{{--                                           title="Forgotten password?">Quên mật khẩu?</a>--}}
{{--                                    </fieldset>--}}
{{--                                    <input type="submit" class="btn btn-submit" value="Login" name="submit">--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div><!--end main products area-->--}}
{{--                </div>--}}
{{--            </div><!--end row-->--}}

{{--        </div><!--end container-->--}}

{{--    </main>--}}
{{--</x-guest-layout>--}}
