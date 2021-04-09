<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
{{--                <x-jet-welcome />--}}
                <textarea class="description" name="description"></textarea>
{{--                <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>--}}
{{--                <script>--}}
{{--                    tinymce.init({--}}
{{--                        selector:'textarea.description',--}}
{{--                        width: 900,--}}
{{--                        height: 300--}}
{{--                    });--}}
{{--                </script>--}}
            </div>
        </div>
    </div>
</x-app-layout>
