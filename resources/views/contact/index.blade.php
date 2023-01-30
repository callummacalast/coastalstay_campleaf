<x-guest-layout>
    <section class="p-6 off-white-bg">
        <div
            class="grid max-w-screen-xl
            grid-cols-1 gap-8 px-8 py-16 mx-auto rounded-lg md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 
            text-gray-100">
            <div class="flex flex-col gap-10">
                <div class="space-y-2">
                    <h2 class="text-5xl font-bold leading-tight lg:text-5xl custom-text ">Let's talk!</h2>
                </div>
     
                <div class="custom-text">If you have any queries at all please feel free to get in touch using the contact form. Please note duting our busy periods we may not be able to get back to you as quickly as we like.</div>
            </div>
            <form novalidate="false" method="POST" action="{{ route('contact.store') }}" id="contact_form"
                class="space-y-6 ng-untouched ng-pristine ng-valid custom-text">
                @csrf
                <div>
                    <label for="name" class="text-sm">Full name</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" placeholder=""
                        class="w-full p-3 rounded bg-white border-none">
                    <span class="text-red-400" id="nameErrorMsg"></span>
                </div>
                <div>
                    <label for="email" class="text-sm">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                        class="w-full p-3 rounded bg-white border-none">
                    <span class="text-red-400" id="emailErrorMsg"></span>

                </div>
                <div>
                    <label for="message" class="text-sm">Message</label>
                    <textarea id="message" rows="3" class="w-full p-3 rounded bg-white border-none" name="message">{{ old('message') }}</textarea>
                    <span class="text-red-400" id="messageErrorMsg"></span>

                </div>
                <button
                    type="submit"class="w-full p-3 text-sm font-bold tracking-wide uppercase rounded custom-text send-message hover:bg-transparent hover:text-white transition border" style="background: #edab28;">
                    Send Message

                </button>
            </form>
            <div class="hidden flex justify-center items-center flex-col gap-5 custom-text" id="success_message">
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
