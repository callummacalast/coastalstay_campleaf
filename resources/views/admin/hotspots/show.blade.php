<x-app-layout>
    <div class="container mx-auto mt-32">
        <h3>Create Hotspot</h3>
        <form action="{{ route('hotspot.store') }}" method="post" class="m-3">
            @csrf
            <div class="flex flex-col">

                <label for="name">Hotspot Title</label>
                <input type="text" name="name" value="{{ $hotspot->name }}" id="title"
                    class="rounded border-none bg-white-100 shadow">
            </div>
            <div class="flex flex-col my-3">

                <label for="description">Details</label>
                <textarea rows="5" name="description" id="description" class="rounded border-none bg-white-100 shadow">{{ $hotspot->description }}</textarea>
            </div>
            <button type="submit" class="bg-blue-400 rounded shadow p-2 text-white my-3">Update Hotspot!</button>
        </form>
    </div>
</x-app-layout>
