<x-guest-layout>
    <div class="container mx-auto">
        <div class="message text-dark m-3">
            <h3 class="text-4xl font-bold my-1">Create Hotspot</h3>
        </div>
        <form action="{{ route('hotspot.store') }}" method="post" class="m-3" enctype="multipart/form-data">
            @csrf
            <div class="container my-5 location">
                <p>*Click a place on the map to add your hotspot</p>
                <div id="map" style="height: 400px;"></div>
            </div>
            <div class="flex flex-row gap-5 ">
                <div class="flex flex-col gap-3">
                    <label for="lat">Latitude</label>
                    <input type="text" readonly name="lat" class="rounded border-none bg-gray-100 shadow"
                        value="" id="lat">
                </div>
                <div class="flex flex-col gap-3">
                    <label for="lng">Longitude</label>
                    <input type="text" readonly name="lng" class="rounded border-none bg-gray-100 shadow"
                        value="" id="lng">
                </div>
            </div>
            <div class="flex flex-col">
                <label for="name">Hotspot Title</label>
                <input type="text" name="name" id="title" class="rounded border-none bg-gray-100 shadow"
                    value="{{ old('name') }}">
            </div>
            <div class="flex flex-col my-3">
                <label for="description">Details</label>
                <textarea rows="5" name="description" id="description" class="rounded border-none bg-gray-100 shadow">{{ old('description') }}</textarea>
            </div>
            <div class="status flex flex-col">
                <label for="status">Status</label>
                <select name="status" id="status" class="border-none rounded shadow bg-gray-100 mb-2 w-1/4">
                    @role('admin')
                        <option value="live">Live</option>
                    @endrole
                    <option value="pending">Pending</option>
                </select>
            </div>
            <div class="flex flex-col w-1/2">
                <label class="text-lead font-semibold text-sm">
                    * When creating a hotspot, upload the best photo to
                    represent that
                    area,
                    this is a one
                    photo
                    does all kind
                    of
                    hotspot.
                    If you believe it's worth a hotspot place, it should only need one photo!
                </label>
                <input type="file" class="my-3" name="hotspot_image" id="">
            </div>
            <button type="submit" class="bg-blue-400 rounded shadow p-2 text-white my-3">Create Hotspot!</button>
        </form>
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

            var marker;

            function placeMarker(location) {
                if (marker) {
                    marker.setPosition(location);
                } else {
                    marker = new google.maps.Marker({
                        position: location,
                        map: map
                    });
                }
            }

            google.maps.event.addListener(map, 'click', function(event) {
                placeMarker(event.latLng);
                map.panTo(event.latLng)
                let input_lat = document.getElementById('lat');
                let input_lng = document.getElementById('lng');

                input_lat.value = event.latLng.lat()
                input_lng.value = event.latLng.lng()

            });


        }
        window.initMap = initMap;
    </script>
    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap"></script>
</x-guest-layout>
