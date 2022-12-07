<x-app-layout>
    <div class="container mx-auto">
        <div class="message text-dark m-3">
            <h3 class="text-4xl font-bold my-1">Update Hotspot</h3>
        </div>
        <form action="{{ route('admin.hotspots.update', $hotspot->id) }}" method="post" class="m-3"
            enctype="multipart/form-data">
            @csrf
            <div class="container my-5 location">
                <div id="map" style="height: 400px;"></div>
            </div>
            <div class="flex flex-row gap-5 ">
                <div class="flex flex-col gap-3">
                    <label for="lat">Latitude</label>
                    <input type="text" readonly name="lat" class="rounded border-none bg-white shadow"
                        value="{{ $hotspot->lat }}" id="lat">
                </div>
                <div class="flex flex-col gap-3">
                    <label for="lng">Longitude</label>
                    <input type="text" readonly name="lng" class="rounded border-none bg-white shadow"
                        value="{{ $hotspot->lng }}" id="lng">
                </div>


            </div>

            <div class="flex flex-col">
                <label for="name">Hotspot Title</label>
                <input type="text" name="name" id="title" class="rounded border-none bg-white shadow"
                    value="{{ $hotspot->name }}">
            </div>
            <div class="flex flex-col my-3">
                <label for="description">Details</label>
                <textarea rows="5" name="description" id="description" class="rounded border-none bg-white shadow">{{ $hotspot->description }}</textarea>
            </div>


            <div class="status flex flex-col">
                <label for="status">Status</label>
                <select name="status" id="status" class="border-none rounded shadow bg-white mb-2 w-1/4">
                    @role('admin')
                        <option value="live">Live</option>
                    @endrole
                    <option value="pending">Pending</option>
                </select>
            </div>
            <div class="flex flex-col w-1/2">
                <input type="file" class="my-3" name="hotspot_image" id="">
            </div>
            <button type="submit" class="bg-blue-400 rounded shadow p-2 text-white my-3">Update Hotspot!</button>
        </form>
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
            const marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
            });




        }
        window.initMap = initMap;
    </script>
    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap"></script>


</x-app-layout>
