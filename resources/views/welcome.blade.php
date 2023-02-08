<x-guest-layout>

    <section class="bg-white off-white-bg relative overlay">
        <div class="">
            <div class="relative overflow-hidden bg-no-repeat bg-cover"
                style="
                  background-position: 50%;
                  background-image: url('https://i.pinimg.com/originals/31/51/9a/31519af0e4067aaf0f3d5eb2a58ad7bf.jpg');
                  height: 500px;
                ">
                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                    style="background-color: rgba(0, 0, 0, 0.75)">
                    <div class="flex justify-center items-center h-full">
                        <div class="text-center text-white px-6 md:px-12">
                            <h1 class="xl:text-5xl lg:text-5xl text-xl font-bold leading-none sm:text-2xl">Welcome to
                                <span class="dark:text-sky-400">Coastal Stay</span> Campsite
                            </h1>
                            <p class="px-8 mt-8 mb-12 lg:w-3/4 mx-auto text-xl">We are thrilled to have you here, lets get straight to
                                the good stuff!
                                Hit the welcome pack button and find all your essentials!</p>
                            <div class="flex flex-wrap justify-center">
                                <a href="{{ route('welcome.camping') }}"
                                    class="w-full lg:w-auto sm:w-auto px-8 py-3 m-2 text-lg font-semibold rounded hover:bg-white custom-text"
                                    style="background: #edab28;">I am camping!</a>
                                <a href="{{ route('welcome.bb') }}"
                                    class="w-full lg:w-auto sm:w-auto px-8 py-3 m-2 text-lg font-semibold rounded hover:bg-white custom-text"
                                    style="background: #edab28;">I am B&B!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-6 py-10 mx-auto z-50">
            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">
                <div class="p-8 space-y-3 border-2 border-orange-400 shadow border-blue-300 rounded-xl bg-white">
                    <span class="inline-block text-orange-500 text-blue-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                        </svg>
                    </span>

                    <h1 class="text-2xl font-semibold custom-text capitalize">Hotspots</h1>

                    <p class="custom-text">
                        When you're out and about on your travels around our surrounding area, why not add something to
                        our
                        hotspot
                        board!
                    </p>

                    <a href="{{ route('hotspot.index') }}"
                        class="hover:animate-bounce inline-flex p-2 text-orange-500 capitalize transition-colors duration-200 transform bg-blue-100 rounded-full bg-blue-500 text-white hover:underline hover:text-blue-600 hover:text-blue-500 ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                </div>

                <div class="p-8 space-y-3 border-2 border-orange-400 bg-white shadow border-blue-300 rounded-xl ">
                    <span class="inline-block text-orange-500 text-orange-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                        </svg>
                    </span>

                    <h1 class="text-2xl font-semibold capitalize custom-text">Message Board
                    </h1>

                    <p class="custom-text">
                        Here at our campsite we love clear cut communication, so why not tell us what you think, or
                        simply leave an emoji! 🤪
                    </p>

                    <a href="{{ route('message.index') }}"
                        class="hover:animate-bounce inline-flex p-2 text-orange-500 capitalize transition-colors duration-200 transform bg-blue-100 rounded-full bg-blue-500 text-white hover:underline hover:text-blue-600 hover:text-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                </div>
                <div
                    class="p-8 space-y-3 rounded-xl border-orange-400 bg-white shadow border-blue-300 border-2 text-gray-100 hover:animate-pulse">
                    <div class="text-center custom-text">
                        <h2 class="text-xl font-semibold">{{ $weather_data->name }}</h2>
                        <p class="text-sm">{{ \Carbon\Carbon::now()->format('d M') }}</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                        class="w-32 h-32 p-6 text-yellow-400 fill-current text-center mx-auto">
                        <path
                            d="M256,104c-83.813,0-152,68.187-152,152s68.187,152,152,152,152-68.187,152-152S339.813,104,256,104Zm0,272A120,120,0,1,1,376,256,120.136,120.136,0,0,1,256,376Z">
                        </path>
                        <rect width="32" height="48" x="240" y="16"></rect>
                        <rect width="32" height="48" x="240" y="448"></rect>
                        <rect width="48" height="32" x="448" y="240"></rect>
                        <rect width="48" height="32" x="16" y="240"></rect>
                        <rect width="32" height="45.255" x="400" y="393.373"
                            transform="rotate(-45 416 416)"></rect>
                        <rect width="32.001" height="45.255" x="80" y="73.373"
                            transform="rotate(-45 96 96)"></rect>
                        <rect width="45.255" height="32" x="73.373" y="400"
                            transform="rotate(-45.001 96.002 416.003)"></rect>
                        <rect width="45.255" height="32.001" x="393.373" y="80"
                            transform="rotate(-45 416 96)"></rect>
                    </svg>
                    <div class="mb-2 text-3xl font-semibold text-center custom-text">
                        {{ round($temp) }}°
                    </div>


                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container mx-auto custom-text">
            @php
                $count = 0;
            @endphp
            <h2 class="text-5xl font-bold my-10 text-center">Some of our hotspots!</h2>

            <div class="slider-home-page h-100">
                @foreach ($hotspots as $hotspot)
                    <div class="p-4">

                        <div class="relative flex items-end justify-start w-full text-white text-left bg-center bg-cover h-96 bg-gray-500 hover:animate-pulse transition rounded-xl"
                            style="background-image: url(&quot;https://source.unsplash.com/random/240x320?{{ $count }}&quot;);">
                            <div
                                class="absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-b via-transparent from-gray-900 to-gray-900 rounded-lg shadow">
                            </div>
                            <div class="absolute top-0 left-0 right-0 flex items-center justify-between mx-5 mt-3">
                                <a rel="noopener noreferrer" href=""
                                    class="px-3 py-2 text-xs font-semibold tracking-wider uppercase dark:text-gray-100 bgundefined">{{ $hotspot->name }}</a>
                                <div class="flex flex-col justify-start text-center dark:text-gray-100">
                                    <span class="text-3xl font-semibold leading-none tracking-wide">04</span>
                                    <span class="leading-none uppercase">Aug</span>
                                </div>
                            </div>
                            <h2 class="z-10 p-5">
                                <a rel="noopener noreferrer" href="{{ route('hotspot.show', $hotspot->id) }}"
                                    class="font-medium text-md hover:underline dark:text-gray-100">
                                    {{ Str::limit($hotspot->description, 50) }}</a>
                            </h2>
                        </div>
                        @php
                            $count++;
                        @endphp

                    </div>
                @endforeach
            </div>
            <div class="home-nav-arrows flex justify-center items-center py-5 gap-20"></div>

    </section>


    <section class="overflow-hidden text-gray-700 ">
        <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
            <div class="flex flex-wrap -m-1 md:-m-2">
                @foreach ($home_gallery as $image)
                    <div class="flex flex-wrap w-1/3">
                        <div class="w-full p-1 md:p-2">
                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                src="{{ $image }}">
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('accordion', {
                tab: 0
            });

            Alpine.data('accordion', (idx) => ({
                init() {
                    this.idx = idx;
                },
                idx: -1,
                handleClick() {
                    this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
                },
                handleRotate() {
                    return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
                },
                handleToggle() {
                    return this.$store.accordion.tab === this.idx ?
                        `max-height: ${this.$refs.tab.scrollHeight}px` : '';
                }
            }));
        })
    </script>







    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
</x-guest-layout>
