<x-guest-layout>
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">

            <h2
                class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                <span class="relative inline-block">
                    <svg viewBox="0 0 52 24" fill="currentColor"
                        class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                        <defs>
                            <pattern id="07690130-d013-42bc-83f4-90de7ac68f76" x="0" y="0" width=".135"
                                height=".30">
                                <circle cx="1" cy="1" r=".7"></circle>
                            </pattern>
                        </defs>
                        <rect fill="url(#07690130-d013-42bc-83f4-90de7ac68f76)" width="52" height="24"></rect>
                    </svg>
                    <span class="relative">-</span>
                </span>
                Our Campsite Rules
            </h2>
            <p class="text-base text-gray-700 md:text-lg">
                See below the list of our campsite rules, we would like to ask you respect these rules during your stay
                with us!
            </p>
        </div>
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="grid gap-5 row-gap-5 sm:grid-cols-2 lg:grid-cols-4">
                @php
                    $count = 1;
                @endphp
                @foreach ($rules as $rule)
                    <div class="px-12 text-center sm:px-0">
                        <div
                            class="flex items-center justify-center w-10 h-10 mx-auto mb-4 rounded-full bg-indigo-50 sm:w-12 sm:h-12">
                            <h3 class="font-bold text-2xl">
                                {{ $count }}.
                            </h3>
                        </div>
                        <h6 class="mb-2 text-sm font-bold leading-5 tracking-wider uppercase">
                            {{ $rule->title }}
                        </h6>
                        <div class="mb-2 text-gray-700">
                            {{ $rule->rule }}
                        </div>
                    </div>
                    @php
                        $count++;
                    @endphp
                @endforeach


            </div>
        </div>
    </div>

</x-guest-layout>
