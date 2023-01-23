<x-guest-layout>

    <div class="bg-gray-800 text-gray-100">
        <div class="px-4 py-16 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-extrabold sm:text-4xl">Campsite Rules</h2>
                <p class="mt-4 text-lg text-gray-400">Please take a look at our campsite rules!</p>
            </div>
            <dl
                class="mt-12 space-y-10 sm:space-y-0 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 lg:grid-cols-4 lg:gap-x-8">
                @foreach ($rules as $rule)
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-sky-400">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                        <div class="ml-3">
                            <dt class="text-lg font-medium">{{ $rule->title }}</dt>
                            <dd class="mt-2 text-gray-400">{{ $rule->rule }}</dd>
                        </div>
                    </div>
                @endforeach


            </dl>
        </div>
    </div>

</x-guest-layout>
