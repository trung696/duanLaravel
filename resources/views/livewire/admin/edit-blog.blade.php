<div class="p-6">
    <div class="flex items-center justify-end px-4 py-3 text-right sm:px-5">
        <button wire:click.prevent="update({{ Auth::id() }})"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
            update
        </button>
    </div>

    @if(Session::has('message'))
        <div class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold
        text-xs text-white uppercase tracking-widest">
            {{ Session::get('message') }}
        </div>
    @endif

    <div class="mt-4">
        <x-jet-label for="title" value="{{ __('Tên bai viet') }}"/>
        <x-jet-input id="title" class="block mt-1 w-full" type="text" wire:model="title"
                     required wire:keyup="generatesSlug"/>
        @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>
    <div class="mt-4">
        <x-jet-label for="slug" value="{{ __('Đường dẫn') }}"/>
        <div class="mt-1 flex rounded-md shadow-sm">
                  <span
                      class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                    http://luma.test/blogs/
                  </span>
            <input wire:model="slug" type="text"
                   class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                   placeholder="url-slug">
        </div>
        @error('slug') <span class="text-red-500">{{ $message }}</span>@enderror
    </div>
    <div class="mt-4">
        <input type="file" class="hidden"
               wire:model="image"
               x-ref="photo"/>
        <x-jet-label for="photo" value="{{ __('Photo') }}"/>
        @if ($photo && $photo == $image)
            <img src="{{ asset('storage/' . $image) }}" class="rounded-2 h-20 w-20 object-cover">
        @elseif($image != $photo)
            <img src="{{ $image->temporaryUrl() }}" class="rounded-2 h-20 w-20 object-cover">
        @endif
        <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click="$refs.photo.click()">
            {{ __('Select A New Photo') }}
        </x-jet-secondary-button>
        @error('image') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>
    <div class="mt-4">
        <x-jet-label for="title" value="{{ __('Danh mục bai viet') }}"/>
        <select wire:model="id_cate"
                class="form-select block w-full border-gray-300 focus:border-indigo-300  focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <option>Chọn danh mục</option>
            @foreach(\App\Models\CategoryNew::all() as $cate)
                <option value="{{ $cate->id }}" class="uppercase"> {{ $cate->name }}</option>
            @endforeach
        </select>
        @error('id_cate') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>
    <div class="mt-4">
        <x-jet-label for="short" value="{{ __('Mieu ta ngan') }}"/>
        <x-jet-input id="short" class="block mt-1 w-full" type="text" wire:model="short_description"
                     required/>
        @error('short_description') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>
    <div class="mb-2" wire:ignore>
        <label class="block font-medium text-sm text-gray-700" for="page-text-editor">Noi dung</label>
        <textarea id="myTextarea" wire:model="detail_description"></textarea>
        @error('detail_description') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>

</div>
<script src="https://cdn.tiny.cloud/1/la76yyzpi4abh83rxl38u8xjwfo0qki3b7fqqu57ic7qocxh/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>

<script type="text/javascript">
    // tinymce.init({
    //     selector: '#myTextarea',
    //
    //     height: 500,
    //     plugins: [
    //         'advlist autolink link image lists charmap print preview hr anchor pagebreak',
    //         'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
    //         'table emoticons template paste help'
    //     ],
    //     toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
    //         'bullist numlist outdent indent | link image | print preview media fullpage | ' +
    //         'forecolor backcolor emoticons | help',
    //     menu: {
    //         favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
    //     },
    //     menubar: 'favs file edit view insert format tools table help',
    //     content_css: 'css/content.css'
    // });
    tinymce.init({
        selector: '#myTextarea',
        height: (window.innerHeight - 300),
        forced_root_block: false,
        setup: function (editor) {
            editor.on('init change', function () {
                editor.save();
            });
            editor.on('change', function (e) {
                @this.set('detail_description', editor.getContent());
            });
        }
    })
</script>
