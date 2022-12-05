<x-guest-layout>
    <section class="p-6 text-gray-100 bg-gray-800">
        <div
            class="grid max-w-screen-xl
            grid-cols-1 gap-8 px-8 py-16 mx-auto rounded-lg md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 
            text-gray-100">
            <div class="flex flex-col justify-between">
                <div class="space-y-2">
                    <h2 class="text-4xl font-bold leading-tight lg:text-5xl">Let's talk!</h2>
                    <div class="text-gray-400">Vivamus in nisl metus? Phasellus.</div>
                </div>
                <img src="https://source.unsplash.com/random/240x320?0" alt="" class="p-6 h-52 md:h-64">
            </div>
            <form novalidate="false" method="POST" action="{{ route('contact.store') }}" id="contact_form"
                class="space-y-6 ng-untouched ng-pristine ng-valid ">
                @csrf
                <div>
                    <label for="name" class="text-sm">Full name</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" placeholder=""
                        class="w-full p-3 rounded bg-gray-800">
                    <span class="text-red-400" id="nameErrorMsg"></span>
                </div>
                <div>
                    <label for="email" class="text-sm">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                        class="w-full p-3 rounded bg-gray-800">
                    <span class="text-red-400" id="emailErrorMsg"></span>

                </div>
                <div>
                    <label for="message" class="text-sm">Message</label>
                    <textarea id="message" rows="3" class="w-full p-3 rounded bg-gray-800" name="message">{{ old('message') }}</textarea>
                    <span class="text-red-400" id="messageErrorMsg"></span>

                </div>
                <button
                    type="submit"class="w-full p-3 text-sm font-bold tracking-wide uppercase rounded bg-violet-400 text-gray-900 send-message border-violet-400 hover:bg-transparent hover:text-white transition border">
                    Send Message

                </button>
            </form>
            <div class="hidden flex justify-center items-center flex-col gap-5" id="success_message">
                <h2 class="font-bold text-2xl">Success! Your message has been sent</h2>
                <p class="text-center">Please be patient, a member of our team will respond to your message as soon as
                    possible!</p>
            </div>
            <div class="print-error-msg">
                <ul></ul>
            </div>
            <script type="text/javascript">
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $(".send-message").click(function(e) {
                    e.preventDefault();
                    var name = $("#name").val();
                    var email = $("#email").val();
                    var message = $("#message").val();
                    var form = $("#contact_form");
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('contact.store') }}",
                        data: {
                            name: name,
                            email: email,
                            message: message
                        },
                        success: function(data) {
                            if ($.isEmptyObject(data.error)) {
                                // alert(data.success);
                                $(" form ").addClass("hidden")
                                $(" #success_message ").removeClass("hidden")
                                // location.reload();
                                console.log(data);
                            } else {
                                printErrorMsg(data.error);
                                console.log(data)
                            }

                        },
                        beforeSend: function() {
                            console.log('loading...');
                            $("form button").text('loading')
                        },
                        error: function(data) {
                            console.log(data.responseJSON.errors);
                            $('#nameErrorMsg').text(data.responseJSON.errors.name);
                            $('#emailErrorMsg').text(data.responseJSON.errors.email);
                            $('#mobileErrorMsg').text(data.responseJSON.errors.mobile);
                            $('#messageErrorMsg').text(data.responseJSON.errors.message);
                            $("form button").text('Send message')

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
    </section>
</x-guest-layout>
