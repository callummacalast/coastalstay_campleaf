<x-guest-layout>
    <div class="container mx-auto">
        <div class="message text-dark m-3">
            <h3 class="text-4xl font-bold my-1">Create Hotspot</h3>
        </div>
        <form action="{{ route('hotspot.store') }}" method="post" class="m-3" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col">
                <label for="name">Hotspot Title</label>
                <input type="text" name="name" id="title" class="rounded border-none bg-gray-100 shadow">
            </div>
            <div class="flex flex-col my-3">
                <label for="description">Details</label>
                <textarea rows="5" name="description" id="description" class="rounded border-none bg-gray-100 shadow"></textarea>
            </div>
            <div class="postcode">
                <input type="text" name="postcode" class="border-none shadow bg-gray-100" id="" />
                <input type="hidden" name="lat"><input type="hidden" name="lng">
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
</x-guest-layout>
