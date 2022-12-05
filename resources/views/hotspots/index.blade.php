<x-guest-layout>
    <div class="container mx-auto m-5">
        <div class="list-views mx-5 flex flex-row justify-between">

            <div>
                <h3 class="font-bold text-3xl">Our Hotspots</h3>
                <span class="text-sm">Use the filter button to toggle view from list to map view!</span>
            </div>
            <div>
                <button id="list-view-btn" class="hidden ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-8 w-8 hover:animate-spin"
                        fill="orange">
                        <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path
                            d="M64 144c26.5 0 48-21.5 48-48s-21.5-48-48-48S16 69.5 16 96s21.5 48 48 48zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM64 464c26.5 0 48-21.5 48-48s-21.5-48-48-48s-48 21.5-48 48s21.5 48 48 48zm48-208c0-26.5-21.5-48-48-48s-48 21.5-48 48s21.5 48 48 48s48-21.5 48-48z" />
                    </svg>
                </button>
                <button id="map-view-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-8 w-8 hover:animate-spin"
                        fill="orange">
                        <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path
                            d="M408 120c0 54.6-73.1 151.9-105.2 192c-7.7 9.6-22 9.6-29.6 0C241.1 271.9 168 174.6 168 120C168 53.7 221.7 0 288 0s120 53.7 120 120zm8 80.4c3.5-6.9 6.7-13.8 9.6-20.6c.5-1.2 1-2.5 1.5-3.7l116-46.4C558.9 123.4 576 135 576 152V422.8c0 9.8-6 18.6-15.1 22.3L416 503V200.4zM137.6 138.3c2.4 14.1 7.2 28.3 12.8 41.5c2.9 6.8 6.1 13.7 9.6 20.6V451.8L32.9 502.7C17.1 509 0 497.4 0 480.4V209.6c0-9.8 6-18.6 15.1-22.3l122.6-49zM327.8 332c13.9-17.4 35.7-45.7 56.2-77V504.3L192 449.4V255c20.5 31.3 42.3 59.6 56.2 77c20.5 25.6 59.1 25.6 79.6 0zM288 152c22.1 0 40-17.9 40-40s-17.9-40-40-40s-40 17.9-40 40s17.9 40 40 40z" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="leave-message fixed right-5 bottom-5 z-50">
            <a href="{{ route('hotspot.create') }}"
                class="bg-blue-400 p-3 text-white rounded shadow hover:bg-blue-300 transition">Add Hotspot</a>
        </div>
        <div class="" id="hotspot-list">
            <div class="max-w-screen-xl p-5 mx-auto dark:bg-gray-800 dark:text-gray-100">
                <div class="grid grid-cols-1 gap-5 lg:grid-cols-4 sm:grid-cols-2">
                    @php
                        $count = 0;
                    @endphp
                    @foreach ($hotspots as $hotspot)
                        @if ($hotspot->image)
                            <div class="relative flex items-end justify-start w-full text-white text-left bg-center bg-cover h-96 bg-gray-500 hover:animate-pulse transition rounded-xl "
                                style="background-image: url(&quot;{{ asset('hotspot_images/' . $hotspot->image) }}&quot;);">
                            @else
                                <div class="relative flex items-end justify-start w-full text-white text-left bg-center bg-cover h-96 bg-gray-500 hover:animate-pulse transition rounded-xl "
                                    style="background-image: url(&quot;https://source.unsplash.com/random/240x320?{{ $count }}&quot;);">
                        @endif
                        <div
                            class="absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-b via-transparent from-gray-900 to-gray-900 rounded-lg shadow">
                        </div>
                        <div class="absolute top-0 left-0 right-0 flex items-center justify-between mx-5 mt-3">
                            <a rel="noopener noreferrer" href="{{ route('hotspot.show', $hotspot->id) }}"
                                class="px-3 py-2 text-xs font-semibold tracking-wider uppercase dark:text-gray-100 bgundefined hover:underlin">{{ $hotspot->name }}</a>
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
            <div class="pagination w-full">
                {{ $hotspots->links() }}
            </div>
        </div>
    </div>
    <div id="hotspot-map" class="hidden container  m-3 w-full">
        <div class="container mt-5 h-full">
            <div id="map" style="height: 600px; width: 100%;" class="shadow rounded"></div>
        </div>
        <script type="text/javascript">
            function initMap() {
                const myLatLng = {
                    lat: 51.93298,
                    lng: -5.18128
                };
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 9,
                    center: myLatLng,
                });
                var infowindow = new google.maps.InfoWindow();
                var marker, i;

                const locations = [
                    @foreach ($hotspots as $key => $data)

                        ["{{ $data->lng }}", "{{ $data->lat }}", "{{ $data->name }}", "{{ $data->id }}"],
                    @endforeach

                ];
                for (i = 0; i < locations.length; i++) {
                    console.log(locations[i][1]);

                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(locations[i][1], locations[i][0]),
                        map: map

                    });
                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                        return function() {
                            let url = 'http://campsite-info-board.test/hotspot';
                            infowindow.setContent('<a href="' + url + "/" + locations[i][3] +
                                '" class="p-3 underline hover:text-blue-300 font-bold text-1xl">' +
                                locations[i][2] + '</a>');
                            infowindow.open(map, marker);
                        }
                    })(marker, i));
                }
            }
            window.initMap = initMap;
        </script>

        <script type="text/javascript"
            src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap"></script>
    </div>

</x-guest-layout>
