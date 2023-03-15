<x-guest-layout>
    <div class="container mx-auto p-8 my-5">
        <h2 class="my-5 text-5xl custom-text font-bold ">Message Board</h3>
            <div class="leave-message my-5">
                <p class="my-10">Welcome to the message board, please feel free to express yourself, perhaps about your
                    stay or anything else. Take a look at other campers messages for inspiration.</p>
                <a href="{{ route('message.create') }}"
                    class="bg-orange-400 mt-10 p-3 text-white rounded shadow hover:bg-orange-300 transition  xl:w-auto md:w-auto lg:w-auto w-full">Leave
                    a
                    message</a>
            </div>
            <div class=" flex items-center justify-center  grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-5 mt-16">

                @php
                    $count = 0;
                @endphp
                @foreach ($messages as $message)
                    <div
                        class="px-5 py-4 bg-white shadow rounded-lg max-w-lg  hover:shadow-xl hover:scale-105 transition cursor-pointer">
                        <div class="flex mb-4">
                            <img class="w-12 h-12 rounded-full"
                                src="https://source.unsplash.com/random/?{{ $count }}&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" />
                            <div class="ml-2 mt-0.5">
                                <span
                                    class="block  text-base leading-snug text-white custom-text font-bold">Camper</span>
                                <span
                                    class="block text-sm custom-text font-semibold leading-snug">{{ \Carbon\Carbon::parse($message->created_at)->diffForHumans() }}</span>
                            </div>
                        </div>
                        <a href="{{ route('message.show', $message->id) }}">
                            <h3 class=" custom-text font-semibold mb-2">{{ $message->title }}</h3>
                            <p class="custom-text leading-snug md:leading-normal">
                                {{ Str::limit($message->message, 200) }}
                            </p>
                        </a>
                        <div class="flex justify-between items-center mt-5">
                            <div class="flex ">
                                <button class="btn-submit-{{ $message->id }}">
                                    <svg class="p-0.5 h-6 w-6 rounded-full z-20 bg-white bg-gray-800 "
                                        xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'
                                        viewBox='0 0 16 16'>
                                        <defs>
                                            <linearGradient id='a1' x1='50%' x2='50%' y1='0%'
                                                y2='100%'>
                                                <stop offset='0%' stop-color='#18AFFF' />
                                                <stop offset='100%' stop-color='#0062DF' />
                                            </linearGradient>
                                            <filter id='c1' width='118.8%' height='118.8%' x='-9.4%'
                                                y='-9.4%' filterUnits='objectBoundingBox'>
                                                <feGaussianBlur in='SourceAlpha' result='shadowBlurInner1'
                                                    stdDeviation='1' />
                                                <feOffset dy='-1' in='shadowBlurInner1'
                                                    result='shadowOffsetInner1' />
                                                <feComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1'
                                                    k3='1' operator='arithmetic' result='shadowInnerInner1' />
                                                <feColorMatrix in='shadowInnerInner1'
                                                    values='0 0 0 0 0 0 0 0 0 0.299356041 0 0 0 0 0.681187726 0 0 0 0.3495684 0' />
                                            </filter>
                                            <path id='b1' d='M8 0a8 8 0 00-8 8 8 8 0 1016 0 8 8 0 00-8-8z' />
                                        </defs>
                                        <g fill='none'>
                                            <use fill='url(#a1)' xlink:href='#b1' />
                                            <use fill='black' filter='url(#c1)' xlink:href='#b1' />
                                            <path fill='white'
                                                d='M12.162 7.338c.176.123.338.245.338.674 0 .43-.229.604-.474.725a.73.73 0 01.089.546c-.077.344-.392.611-.672.69.121.194.159.385.015.62-.185.295-.346.407-1.058.407H7.5c-.988 0-1.5-.546-1.5-1V7.665c0-1.23 1.467-2.275 1.467-3.13L7.361 3.47c-.005-.065.008-.224.058-.27.08-.079.301-.2.635-.2.218 0 .363.041.534.123.581.277.732.978.732 1.542 0 .271-.414 1.083-.47 1.364 0 0 .867-.192 1.879-.199 1.061-.006 1.749.19 1.749.842 0 .261-.219.523-.316.666zM3.6 7h.8a.6.6 0 01.6.6v3.8a.6.6 0 01-.6.6h-.8a.6.6 0 01-.6-.6V7.6a.6.6 0 01.6-.6z' />
                                        </g>
                                    </svg>
                                </button>
                                <span
                                    class="ml-1 custom-text text-gray-400  font-light" id="like-{{ $message->id }}">{{ $message->likes == 0 ? '0' : $message->likes }}</span>
                                    <script type="text/javascript">
                                        $.ajaxSetup({
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            }
                                        });
                                        $(".btn-submit-{{ $message->id }}").click(function(e) {
                                            e.preventDefault();
                                            console.log(e);
                                            $.ajax({
                                                type: 'GET',
                                                data:{},
                                                url: "{{ route('message.like', $message) }}",
                                                success: function(data) {
                                                    if ($.isEmptyObject(data.error)) {
                                                        // alert(data.success);
                                                        // location.reload();
                                                        var likes =  $("#like-{{ $message->id }}");
                                                        likes.html(parseInt(likes.html()) + 1)
                                                        
                                                    } else {
                                                        console.log(data.error);
                                                    }
                                                }
                                            });
                                
                                        });
                                
                                        function printErrorMsg(msg) {
                                            $(".print-error-msg").find("ul").html('');
                                            $(".print-error-msg").css('display', 'block');
                                            $.each(msg, function(key, value) {
                                                $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
                                            });
                                        }
                                    </script>
                            </div>
                        </div>
                    </div>
                    @php
                        $count++;
                    @endphp
                @endforeach
            </div>
            <div class="mt-16">
                {{ $messages->links() }}
            </div>
    </div>


</x-guest-layout>
