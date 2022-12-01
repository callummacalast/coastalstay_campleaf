<x-guest-layout>

    <div class="container mx-auto">
        <form action="{{ route('message.store') }}" method="post" class="m-3">
            @csrf
            <div class="flex flex-col">

                <label for="title">Message Title</label>
                <input type="text" name="title" id="title" class="rounded border-none bg-gray-100 shadow">
            </div>
            <div class="flex flex-col my-3">

                <label for="title">Message</label>
                <textarea rows="5" name="message" id="title" class="rounded border-none bg-gray-100 shadow"></textarea>
            </div>
            <button type="submit" class="bg-blue-400 rounded shadow p-2 text-white my-3">Create Message!</button>
        </form>
    </div>



</x-guest-layout>
