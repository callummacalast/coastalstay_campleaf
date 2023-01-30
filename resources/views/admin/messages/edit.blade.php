<x-app-layout>
    <div class="container mx-auto mt-32">
        <form action="{{ route('admin.messages.update', ['messageBoardItem' => $messageBoardItem]) }}" method="post" class="m-3">
            @csrf
            <div class="flex flex-col">
                <label for="title">Message Title</label>
                <input type="text" name="title" id="title" value="{{ $messageBoardItem->title }}"
                    class="rounded border-none bg-white-100 shadow">
            </div>
            <div class="flex flex-col my-3">
                <label for="title">Message</label>
                <textarea rows="5" name="contactMessage" id="title" class="rounded border-none bg-white-100 shadow">{{ $messageBoardItem->message }}</textarea>
            </div>
            <button type="submit" class="bg-blue-400 rounded shadow p-2 text-white my-3">Update Message!!</button>
        </form>
    </div>
</x-app-layout>
