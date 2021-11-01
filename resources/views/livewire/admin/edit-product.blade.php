<div class="p-6">
    <div class="flex items-center justify-end px-4 py-3 text-right sm:px-5">
        <button wire:click.prevent="update"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
            Đăng sản phẩm
        </button>
    </div>

    @if(Session::has('message'))
        <div class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold
        text-xs text-white uppercase tracking-widest">
            {{ Session::get('message') }}
        </div>
    @endif

    <div class="mt-4">
        <x-jet-label for="title" value="{{ __('Tên sản phẩm') }}"/>
        <x-jet-input id="name" class="block mt-1 w-full" type="text" wire:model.debounce.500ms="name"
                     wire:keyup="generatesSlug" required autocomplete="new-password"/>
        @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>
    <div class="mt-4">
        <x-jet-label for="slug" value="{{ __('Đường dẫn') }}"/>
        <div class="mt-1 flex rounded-md shadow-sm">
                  <span
                      class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                    http://luma.test/
                  </span>
            <input wire:model="slug" type="text"
                   class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                   placeholder="url-slug">
        </div>
        @error('slug') <span class="text-red-500">{{ $message }}</span>@enderror
    </div>
    <div class="mt-4">
        <x-jet-label for="title" value="{{ __('Giá sản phẩm') }}"/>
        <x-jet-input id="regular_price" class="block mt-1 w-full" type="text"
                     wire:model.debounce.500ms="regular_price"
                     required/>
        @error('regular_price') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>
    <div class="mt-4">
        <x-jet-label for="title" value="{{ __('Giá khuyến mại') }}"/>
        <x-jet-input id="sale_price" class="block mt-1 w-full" type="text"
                     wire:model.debounce.500ms="sale_price"
                     required/>
        @error('sale_price') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>
    <div class="mt-4">
        <input type="file" class="hidden"
               wire:model="feature_img"
               x-ref="photo"/>
        <x-jet-label for="photo" value="{{ __('Photo') }}"/>
        @if ($image && $image == $feature_img)
            <img src="{{ asset('storage/' . $feature_img) }}" class="rounded-2 h-20 w-20 object-cover">
        @elseif($image != $feature_img)
            <img src="{{ $feature_img->temporaryUrl() }}" class="rounded-2 h-20 w-20 object-cover">
        @endif
        <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click="$refs.photo.click()">
            {{ __('Select A New Photo') }}
        </x-jet-secondary-button>
        @error('feature_img') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>

    <div class="mt-4">
        <input type="file" class="hidden"
               wire:model="photos"
               x-ref="photos" multiple/>
        <x-jet-label for="photos" value="{{ __('Photo') }}"/>
        @if ($image_photo && $image_photo == $photos)
            <div class="flex">
                @foreach($photos as $photo)
                    <img src="{{ asset('storage/' . $photo->image_path) }}"
                         class="rounded-2 h-20 w-20 object-cover">
                @endforeach
            </div>
        @elseif($image_photo != $photos)
            <div class="flex">
                @foreach($photos as $photo)
                    <img src="{{ $photo->temporaryUrl() }}" class="rounded-2 h-20 w-20 object-cover">
                @endforeach
            </div>
        @endif
        <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click="$refs.photos.click()">
            {{ __('Select A New Photo') }}
        </x-jet-secondary-button>
        @error('photos') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>


    <div class="mt-4">
        <x-jet-label for="title" value="{{ __('Danh mục') }}"/>
        <select wire:model="category_id"
                class="form-select block w-full border-gray-300 focus:border-indigo-300  focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <option>Chọn danh mục</option>
            @if($categories)
                @foreach($categories as $cate)
                    <option value="{{ $cate->id }}"> {{ $cate->name }}</option>
                @endforeach
            @endif
        </select>
        @error('category_id') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>
    <div class="mt-4">
        <x-jet-label for="content" value="{{ __('Miêu tả ngắn') }}"/>
        <div class="rounded-md shadow-sm">
            <div class="mt-1 bg-white">
                <div class="body-content" wire:ignore>
                    <textarea
                        class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        wire:model="short_description"></textarea>
                </div>
            </div>
            @error('short_description') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="mt-4">
        <div class="mb-2" wire:ignore>
            <label class="block font-medium text-sm text-gray-700" for="page-text-editor">Chi tiết</label>
            <textarea id="myTextarea" wire:model="detail_description"></textarea>
        </div>
    </div>

</div>
<script src="https://cdn.tiny.cloud/1/la76yyzpi4abh83rxl38u8xjwfo0qki3b7fqqu57ic7qocxh/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>

<script type="text/javascript">
    tinymce.init({
        selector: '#myTextarea',

        height: 800,
        plugins: [
            'advlist autolink link image lists charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
            'table emoticons template paste help'
        ],
        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist outdent indent | link image | print preview media fullpage | ' +
            'forecolor backcolor emoticons | help',
        menu: {
            favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
        },
        menubar: 'favs file edit view insert format tools table help',
        content_css: 'css/content.css',
        forced_root_block: false,
        setup: function (editor) {
            editor.on('init change', function () {
                editor.save();
            });
            editor.on('change', function (e) {
                @this.
                set('detail_description', editor.getContent());
            });
        }
    });
    {{--tinymce.init({--}}
    {{--    selector: '#myTextarea',--}}
    {{--    // height: (window.innerHeight - 300),--}}
    {{--    forced_root_block: false,--}}
    {{--    setup: function (editor) {--}}
    {{--        editor.on('init change', function () {--}}
    {{--            editor.save();--}}
    {{--        });--}}
    {{--        editor.on('change', function (e) {--}}
    {{--            @this.set('detail_description', editor.getContent());--}}
    {{--        });--}}
    {{--    }--}}
    {{--})--}}
</script>
