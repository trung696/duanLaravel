<div class="p-6">
    <div class="flex items-center justify-end px-4 py-3 text-right sm:px-5">
        <x-jet-input type="text" class="block mr-10" placeholder="Tìm kiếm" wire:model="search"/>
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
                                Tên
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Email
                            </th>

                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Trạng thái
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Trả lời bởi
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Thời gian phản hồi
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Thời gian trả lời
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Thao tác
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @forelse( $contacts as $contact)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $contact->name }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $contact->email }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    @if($contact->status == 0)
                                        <span class="text-yellow-500"> chưa phản hồi </span>
                                    @else
                                        <span class="text-green-500"> đã phản hồi </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    @if($contact->user)
                                        {{ $contact->user->name  }}
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ date( 'd/m/Y H:m', strtotime($contact->created_at))  }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    @if($contact->user)
                                        {{ date( 'd/m/Y H:m', strtotime($contact->updated_at))  }}
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="#" wire:click="ShowModel({{ $contact->id }})"
                                       class="2xl:text-yellow-500 hover:text-indigo-900">Xem</a>
                                    <a href="#" wire:click="replyShowModel({{ $contact->id }})"
                                       class="text-indigo-600 hover:text-indigo-900">Trả lời</a>
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
                {{ $contacts->links() }}
            </div>
        </div>
    </div>
    <br>
    {{--    {{ $comments->links() }}--}}
    {{-- Modal Form --}}
    <x-jet-dialog-modal wire:model="replyShowModel">
        <x-slot name="title">
            <div class="mt-4">
                <h4>Trả lời liên hệ: @if($rep) {{ $rep->email }} @endif</h4>
            </div>
        </x-slot>

        <x-slot name="content">
            <div class="mt-4">
                <div class="flex justify-center mt-10">
                    <form class="w-full max-w-lg">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="grid-password">
                                    Message
                                </label>
                                <textarea wire:model="reply_message"
                                          class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none"
                                          id="message"></textarea>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('replyShowModel')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>
            <x-jet-button class="ml-2"
                          wire:click="reply"
                          wire:loading.attr="disabled">
                {{ __('Trả lời') }}
            </x-jet-button>

        </x-slot>
    </x-jet-dialog-modal>
    <x-jet-dialog-modal wire:model="ShowModel">
        <x-slot name="title">
            <div class="mt-4">
                <h4>Chi tiết trả lời liên hệ: @if($rep) {{ $rep->email }} @endif</h4>
            </div>
        </x-slot>

        <x-slot name="content">
            <div class="mt-4">
                @if($rep)
                    <div class="flex mt-10 text-lg">
                        <div class="w-49 ">
                            Tên:
                        </div>
                        <div class="uppercase">
                            {{ $rep->name }}
                        </div>
                    </div>
                    <div class="flex mt-10 text-lg">
                        <div class="w-40 ">
                            Nội dung:
                        </div>
                        <div class="">
                            {{ $rep->message }}
                        </div>
                    </div>
                    <div class="flex mt-10 text-lg">
                        <div class="w-40 ">
                            Nội dung trả lời:
                        </div>
                        <div class="">
                            {{ $rep->reply_message }}
                        </div>
                    </div>
                @endif
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('ShowModel')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>
            <x-jet-button class="ml-2"
                          wire:click="reply"
                          wire:loading.attr="disabled">
                {{ __('Trả lời') }}
            </x-jet-button>

        </x-slot>
    </x-jet-dialog-modal>


</div>
