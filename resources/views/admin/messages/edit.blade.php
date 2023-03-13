<x-app-layout>
    <div class="container mx-auto mt-32">
        <div class="m-3">
            <h2 class="text-2xl font-bold my-5">Edit Message</h2>
            <form action="{{ route('admin.messages.update', ['messageBoardItem' => $messageBoardItem]) }}" method="post"
                class="">
                @csrf
                <div class="flex flex-col">
                    <label for="title" class="font-semibold my-3">Message Title</label>
                    <input type="text" name="title" id="title" value="{{ $messageBoardItem->title }}"
                        class="rounded border-none bg-white-100 shadow">
                </div>
                <div class="flex flex-col my-3">
                    <label for="title" class="font-semibold my-3">Message</label>
                    <textarea rows="5" name="contactMessage" id="title" class="rounded border-none bg-white-100 shadow">{{ $messageBoardItem->message }}</textarea>
                </div>
                <button type="submit"
                    class="bg-blue-400 rounded shadow p-3 text-white my-3 hover:bg-blue-300 transition">Update
                    Message!</button>
            </form>
        </div>
    </div>
</x-app-layout>
