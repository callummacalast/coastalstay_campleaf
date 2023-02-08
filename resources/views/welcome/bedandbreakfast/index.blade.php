<x-guest-layout>
    <section class="">
        <div class="container max-w-xl p-6 py-12 mx-auto space-y-24 lg:px-8 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold tracking-tight sm:text-5xl custom-text font-bold" style="margin: 10px 0;">
                    Welcome To
                    Noddfa Guesthouse</h2>
            </div>
            <div class="container mx-auto grid justify-center gap-4 sm:grid-cols-2 lg:grid-cols-3 custom-text">
                <div class="flex flex-col items-center p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="w-8 h-8 custom-orange rounded-full text-white p-1">
                        <path fill-rule="evenodd"
                            d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <h3 class="my-3 text-3xl font-bold">Contact</h3>
                    <div class="space-y-1 leading-tight text-center">
                        <p>Please don't hesitate to get in contact</p>
                        <p><a href="tel:01348831822" class="underline custom-orange">01348837822</a></p>
                        <p><a href="{{ route('contact.index') }}" class="underline custom-orange">Contact Page</a></p>
                    </div>
                </div>
                <div class="flex flex-col items-center p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="w-8 h-8 custom-orange rounded-full text-white p-1">
                        <path fill-rule="evenodd"
                            d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <h3 class="my-3 text-3xl font-bold">WIFI</h3>
                    <div class="space-y-1 leading-tight text-center">
                        <p>Network: BTHUB6-F3TS</p>
                        <p>Password: QTnLRpUxJ7qE</p>
                    </div>
                </div>
                <div class="flex flex-col items-center p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="w-8 h-8 custom-orange rounded-full text-white p-1">
                        <path fill-rule="evenodd"
                            d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <h3 class="my-3 text-3xl font-bold">Checkout</h3>
                    <div class="space-y-1 leading-tight text-center">
                        <p>Checkout is at 11am</p>
                        <p>Put used towels into bin bag provided in drawer</p>
                        <p>Turn off all lights</p>
                        <p>Leave key in door</p>
                    </div>
                </div>

            </div>

            @include('components.walks-beaches')

        </div>
        <div class="p-6 py-12 bg-orange-200">
            <div class="container mx-auto">
                <div class="flex flex-col lg:flex-row items-center justify-between">
                    <h2 class="text-center text-6xl tracking-tighter font-bold custom-text">Local Activities / Amenities
                        <br class="sm:hidden">
                    </h2>
                    <a href="" rel="noreferrer noopener"
                        class="px-5 mt-4 lg:mt-0 py-3 rounded-md border block custom-orange border-none custom-text hover:animate-pulse">Let's
                        Go!</a>
                </div>
            </div>
        </div>
    </section>

</x-guest-layout>
