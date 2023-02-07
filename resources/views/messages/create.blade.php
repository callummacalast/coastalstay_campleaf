<x-guest-layout>

    <div class="container mx-auto">
        <div class="title my-3 p-4">
            <h2 class="text-4xl font-bold">Create Message!</h2>
            <p class="my-3">Leave a message for other campers, leave an experience from your time here or write a poem. It's up to you!</p>
        </div>
        <form action="{{ route('message.store') }}" method="post" class="m-3">
            @csrf
            <div class="flex flex-col">
                <label for="title" class="font-bold">Message Title</label>
                <input type="text" name="title" id="title" class="rounded border-none bg-gray-100 shadow">
            </div>
            <div class="flex flex-col my-3">

                <label for="title" class="font-bold">Message</label>
                <textarea rows="5" name="message" id="title" class="rounded border-none bg-gray-100 shadow"></textarea>
            </div>
            <button type="submit" class="bg-orange-400 rounded shadow p-2 text-white my-3">Create Message!</button>
        </form>
    </div>



</x-guest-layout>
