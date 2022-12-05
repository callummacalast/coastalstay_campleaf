<x-guest-layout>
    <!-- This is an example component -->
    <div class="container mx-auto mt-16">
        <!-- Snippet -->
        <section class="flex flex-col justify-center antialiased bg-gray-900 text-gray-200 min-h-screen">
            <div class="max-w-6xl mx-auto p-4 sm:px-6 h-full">
                <!-- Blog post -->
                <article
                    class="max-w-sm mx-auto md:max-w-none grid md:grid-cols-2 gap-6 md:gap-8 lg:gap-12 xl:gap-16 items-center my-10">
                    <a class="relative block group" href="#0">
                        <div class="absolute inset-0 bg-gray-800 hidden md:block transform md:translate-y-2 md:translate-x-4 xl:translate-y-4 xl:translate-x-8 group-hover:translate-x-0 group-hover:translate-y-0 transition duration-700 ease-out pointer-events-none"
                            aria-hidden="true"></div>
                        <figure
                            class="relative h-0 pb-[56.25%] md:pb-[75%] lg:pb-[56.25%] overflow-hidden transform md:-translate-y-2 xl:-translate-y-4 group-hover:translate-x-0 group-hover:translate-y-0 transition duration-700 ease-out">
                            @if ($hotSpot->image)
                                <img class="absolute inset-0 w-full h-full object-cover transform hover:scale-105 transition duration-700 ease-out"
                                    src="{{ asset('hotspot_images/' . $hotSpot->image) }}" width="540" height="303"
                                    alt="Blog post">
                            @else
                                <img class="absolute inset-0 w-full h-full object-cover transform hover:scale-105 transition duration-700 ease-out"
                                    src="https://source.unsplash.com/random/?" width="540" height="303"
                                    alt="Blog post">
                            @endif
                        </figure>
                    </a>
                    <div>
                        <header>
                            <h3 class="text-2xl lg:text-3xl font-bold leading-tight mb-2">
                                {{ $hotSpot->name }}
                            </h3>
                        </header>
                        <p class="text-lg text-gray-400 flex-grow">{{ $hotSpot->description }} </p>
                        <footer class="flex items-center mt-4">
                            <a href="#0">
                                <img class="rounded-full flex-shrink-0 mr-4"
                                    src="https://preview.cruip.com/open-pro/images/news-author-04.jpg" width="40"
                                    height="40" alt="Author 04">
                            </a>
                            <div>
                                <a class="font-medium text-gray-200 hover:text-gray-100 transition duration-150 ease-in-out"
                                    href="#0">Someone</a>
                                <span class="text-gray-700"> - </span>
                                <span
                                    class="text-gray-500">{{ \Carbon\Carbon::parse($hotSpot->created_at)->diffForHumans() }}</span>
                            </div>
                        </footer>
                    </div>
                </article>
                <div class="container my-10 h-full">
                    <div id="map" style="height: 600px; width: 100%;" class="shadow rounded"></div>
                </div>
            </div>
        </section>
        <div class="max-w-screen-xl p-5 mx-auto dark:bg-gray-800 dark:text-gray-100">
            <h3 class="text-3xl font-bold my-3">See more hotspots!</h3>
            <div class="grid grid-cols-1 gap-5 lg:grid-cols-4 sm:grid-cols-2">
                @php
                    $count = 0;
                @endphp
                @foreach ($hotspots as $hotspot)
                    <div class="relative flex items-end justify-start w-full text-white text-left bg-center bg-cover h-96 bg-gray-500 hover:animate-pulse transition rounded-xl "
                        style="background-image: url(&quot;https://source.unsplash.com/random/240x320?{{ $count }}&quot;);">
                        <div
                            class="absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-b via-transparent from-gray-900 to-gray-900 rounded-lg shadow">
                        </div>
                        <div class="absolute top-0 left-0 right-0 flex items-center justify-between mx-5 mt-3">
                            <a rel="noopener noreferrer" href="#"
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
                @endforeach

            </div>
            <script type="text/javascript">
                function initMap() {
                    const myLatLng = {
                        lat: {{ $hotspot->lat }},
                        lng: {{ $hotspot->lng }}
                    };
                    const map = new google.maps.Map(document.getElementById("map"), {
                        zoom: 15,
                        center: myLatLng,
                    });
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(myLatLng),
                        map: map

                    });


                }
                window.initMap = initMap;
            </script>

            <script type="text/javascript"
                src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap"></script>

        </div>
    </div>
</x-guest-layout>
