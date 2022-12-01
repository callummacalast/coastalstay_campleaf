<x-guest-layout>
    <div class="container mx-auto m-5">
        <div class="leave-message fixed right-5 bottom-5 z-50">
            <a href="{{ route('hotspot.create') }}"
                class="bg-blue-400 p-3 text-white rounded shadow hover:bg-blue-300 transition">Add Hotspot</a>
        </div>
        {{-- <h3 class="m-5">hotspots</h3>
        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-5 m-3 ">
            <a href="" class="h-100 p-2 flex justify-between flex-col cursor-pointer">
                <div class="shadow p-2 flex justify-between flex-col rounded">
                    <h2 class="font-bold">{{ $hotspot->name }}</h2>
                    <p>{{ $hotspot->description }}</p>
                    <small class="text-right">{{ \Carbon\Carbon::parse($hotspot->created_at)->diffForHumans() }}</small>
                </div>
            </a>
        </div> --}}


    </div>

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

    <div class="container mt-5">
        <div id="map" style="height: 400px;"></div>
    </div>

    <script type="text/javascript">
        function initMap() {
            const myLatLng = {
                lat: 51.93298,
                lng: -5.18128
            };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
                center: myLatLng,
            });

            new google.maps.Marker({
                position: myLatLng,
                map,
                title: "Hello Rajkot!",
            });
            map.addListener('click', function(e) {
                placeMarkerAndPanTo(e.latLng, map);
            });
            // google.maps.event.addListener(map, 'click', function(event) {
            //     // alert(event.latLng.lat() + ", " + event.latLng.lng());
            //     // Loop through and save the markers pointed on the map for future use
            //     let location = {
            //         lat: event.latLng.lat(),
            //         lng: event.latLng.lng()
            //     }
            //     let site = new google.maps.Marker({
            //         position: location,
            //         map,
            //         title: "Hello Rajkot!",
            //     });

            //     console.log(site);
            // });

        }

        function placeMarkerAndPanTo(latLng, map) {
            var marker = new google.maps.Marker({
                position: latLng,
                map: map
            });
            map.panTo(latLng);

            console.log(latLng);
            console.log(marker.getPosition().lat())
            console.log(marker.getPosition().lng())
        }



        window.initMap = initMap;
    </script>

    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap"></script>
    </div>


</x-guest-layout>
