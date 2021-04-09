<div class="p-6">

    <div class="flex items-center justify-end px-4 py-3 text-right sm:px-5">
        <x-jet-input type="text" class="block mr-10" placeholder="Tìm kiếm" wire:model="search"/>
        <x-jet-button wire:click.prevent="createShowModal">
            {{ __('Thêm mới') }}
        </x-jet-button>
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
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                ID
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Tên dịch vụ
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Đường dẫn
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Danh muc
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Giá (vnđ)
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Hình ảnh
                            </th>
{{--                            <th scope="col"--}}
{{--                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                                Nội dung--}}
{{--                            </th>--}}
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @forelse( $services as $service)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $service->id }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $service->name }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $service->slug }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $service->category->name }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ number_format($service->price, 0, '.','.') }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <img src=" {{ asset('storage/'.$service->image) }}" width="100px" alt="">
                                </td>
{{--                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">--}}
{{--                                    {{ $service->content }}--}}
{{--                                </td>--}}
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" wire:click="updateShowModal({{$service->id}})"
                                       class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    <a href="#" wire:click="deleteShowModal({{ $service->id }})"
                                       class="ml-4 text-red-600 hover:text-red-900">Delete</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center" colspan="4">
                                    No data
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
    {{ $services->links() }}
    {{-- Modal Form --}}

    <x-jet-dialog-modal wire:model="modalFormVisible">
        @if($modelId)
            <x-slot name="title">
                {{ __('Sửa Dịch Vụ') }} {{ $modelId }}
            </x-slot>
        @else
            <x-slot name="title">
                {{ __('Thêm Dịch Vụ') }}
            </x-slot>
        @endif

        <x-slot name="content">
            <div class="mt-4">
                <x-jet-label for="title" value="{{ __('Tên dịch vụ') }}"/>
                <x-jet-input id="title" class="block mt-1 w-full" type="text" wire:model.debounce.500ms="name"
                             wire:keyup="generatesSlug" required/>
                @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="slug" value="{{ __('Đường dẫn') }}"/>
                <div class="mt-1 flex rounded-md shadow-sm">
                  <span
                      class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                    http://salon.hair/
                  </span>
                    <input wire:model="slug" type="text"
                           class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                           placeholder="url-slug">
                </div>
                @error('slug') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="price" value="{{ __('Giá dịch vụ') }}"/>
                <x-jet-input id="price" class="block mt-1 w-full" type="text" wire:model.debounce.500ms="price"
                             required/>
                @error('price') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mt-4">
                <input type="file" class="hidden"
                       wire:model="image"
                       x-ref="photo"/>
                <x-jet-label for="photo" value="{{ __('Photo') }}"/>
                @if ($photo && $photo == $image)
                    <img src="{{ asset('storage/' . $image) }}" class="rounded-2 h-20 w-20 object-cover" alt="">
                @elseif($image != $photo)
                    <img src="{{ $image->temporaryUrl() }}" class="rounded-2 h-20 w-20 object-cover" alt="">
                @endif
                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-jet-secondary-button>
                @error('image') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="title" value="{{ __('Danh mục Services') }}"/>
                <select wire:model="id_cate"
                        class="form-select block w-full border-gray-300 focus:border-indigo-300  focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option>Chọn danh mục</option>
                    @if($cate_services)
                        @foreach($cate_services as $cate)
                            <option value="{{ $cate->id }}" class="uppercase"> {{ $cate->name }}</option>
                        @endforeach
                    @endif
                </select>
                @error('category_id') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            {{--            <div class="mt-4">--}}
            {{--                <x-jet-label for="content" value="{{ __('Nội dung') }}"/>--}}
            {{--                <textarea name="content" wire:model="content"--}}
            {{--                          class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"></textarea>--}}
            {{--                @error('content') <span class="text-red-500">{{ $message }}</span> @enderror--}}
            {{--            </div>--}}

            <div class="mb-2" wire:ignore>
                <label class="block font-medium text-sm text-gray-700" for="page-text-editor">Noi dung</label>
                <textarea class="content form-input rounded-md shadow-sm mt-1 block w-full " id="content"
                          name="content"
                          wire:model.debounce.9999999ms="content"
                          wire:key="content"
                          x-data
                          x-ref="content"
                          x-init="
                    tinymce.init({
                         path_absolute: '/',
                         selector: 'textarea.content',
                         plugins: [
                              'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                               'searchreplace wordcount visualblocks visualchars code fullscreen ',
                               'insertdatetime media nonbreaking save table directionality',
                               'emoticons template paste textpattern  imagetools help  '
                                ],
                                 toolbar: 'insertfile undo redo | styleselect | bold italic forecolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | help ',
                                 relative_urls: false,
                                 remove_script_host : false,
                                 document_base_url: '{{config('app.url')}}/',
                                 language: 'en',
                                 setup: function (editor) {
                                         editor.on('init change', function () {
                                                   editor.save();
                                           });
                                editor.on('change', function (e) {
                                         @this.set('content', editor.getContent());
                                 });
                                  },
                                  });
                                 ">
                </textarea>
            </div>

        </x-slot>

        <x-slot name="footer">
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

    {{--    Delete Modal--}}
    <x-jet-confirmation-modal wire:model="modalConfirmDeleteVisible">
        <x-slot name="title">
            {{ __('Xóa danh mục ❓') }} {{ $modelId }}
        </x-slot>

        <x-slot name="content">
            {{ __('Bạn có chắc chắn muốn xóa không?') }}
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modalConfirmDeleteVisible')" wire:loading.attr="disabled">
                {{ __('Hủy') }}
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-2" wire:click="delete" wire:loading.attr="disabled">
                {{ __('Xóa') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-confirmation-modal>

</div>
