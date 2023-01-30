<x-app-layout>
    <div class="container mx-auto mt-32">
        <h3>Create contactMessage</h3>
        <form action="{{ route('admin.contact.update', $contactMessage->id) }}" method="post" class="m-3">
            @csrf
            <div class="flex flex-col">
                <label for="name">contactMessage Title</label>
                <input type="text" name="title" value="{{ $contactMessage->name }}" id="title"
                    class="rounded border-none bg-white-100 shadow">
            </div>
            <label for="name">User Email</label>
            <input type="text" name="title" value="{{ $contactMessage->name }}" id="title"
                class="rounded border-none bg-white-100 shadow">
            <div class="flex flex-col my-3">

                <label for="description">Details</label>
                <textarea rows="5" name="contactMessage" id="description" class="rounded border-none bg-white-100 shadow">{{ $contactMessage->message }}</textarea>
            </div>
            <button type="submit" class="bg-blue-400 rounded shadow p-2 text-white my-3">Update contactMessage!</button>
        </form>
    </div>
</x-app-layout>
