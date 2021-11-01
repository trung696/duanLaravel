<div class="wrap-review-form">
    <div id="review_form_wrapper">
        <div id="review_form">
            <div id="respond" class="comment-respond">

                <section class="rounded-b-lg  mt-4 ">
                    <form action="/" accept-charset="UTF-8" method="post"><input type="hidden">
                        <textarea wire:model="content"
                                  class="w-full shadow-inner p-4 border-0 mb-4 rounded-lg focus:shadow-outline text-2xl"
                                  placeholder="Ask questions here." cols="6" rows="2" id="comment_content"
                                  spellcheck="false"></textarea>
                        <button
                            wire:click.prevent="create({{ Auth::id() }})"
                            wire:loading.attr="disabled"
                            class="font-bold py-2 px-4 w-full bg-purple-400 text-lg text-white shadow-md rounded-lg ">
                            Bình luận
                        </button>
                    </form>

                    <div id="task-comments" class="pt-4">
                        <!--     comment-->
                        <p
                           class="p-4 text-gray-600 text-sm text-center md:text-left ">({{ $count }} bình luận)</p>
                        @foreach($comments as $cmt)
                            <div
                                class="bg-white rounded-lg p-3  flex flex-col justify-center items-center md:items-start shadow-lg mb-4">
                                <div class="flex flex-row justify-center mr-2">
                                    <img alt="avatar" width="48" height="48"
                                         class="rounded-full w-10 h-10 mr-4 shadow-lg mb-4"
                                         src="{{  asset('storage/' . $cmt->user->profile_photo_path) }}">
                                    <h3 class="text-purple-600 font-semibold text-lg text-center md:text-left ">
                                        @ {{ $cmt->user->name }}</h3>
                                    <span class="mx-2">–</span>
                                    <time>{{ \Carbon\Carbon::parse($cmt->created_at)->format('d/m/Y h:m') }}</time>
                                </div>
                                <p style="width: 90%"
                                   class="text-gray-600 text-lg text-center md:text-left ">{{ $cmt->content }} </p>

                            </div>
                    @endforeach
                    <!--  comment end-->
                    </div>

                @if($count > 5 && $perPage < $count)
                        <div class="text-center mb-3">
                            <button
                                class="text-center px-2 rounded-md text-blue-500 focus:outline-none hover:bg-gray-300"
                                wire:click="loadMore">Xem them
                            </button>
                        </div>
                    @endif
                </section>
            </div><!-- .comment-respond-->
        </div><!-- #review_form -->
    </div><!-- #review_form_wrapper -->

</div>
