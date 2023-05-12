<x-guest-layout>

    <div class="container mx-auto">
        <div class="title mt-32 p-4 custom-text">
            <h2 class="text-4xl font-bold">Create Message!</h2>
            <p class="my-3">Leave a message for other campers, leave an experience from your time here or write a poem.
                It's up to you!</p>
        </div>
        <form action="{{ route('message.store') }}" method="post" class="m-3">
            @csrf
            <div class="flex flex-col">
                <label for="title" class="font-bold">Message Title <span class="text-red-400">*</span></label>
                <input type="text" name="title" id="title" class="rounded border-none bg-gray-100 shadow"
                    value="{{ old('title') }}">
                @if ($errors->has('title'))
                    <div class="error text-red-400 text-sm">{{ $errors->first('title') }}
                    </div>
                @endif
            </div>

            <div class="flex flex-col my-3">
                <label for="title" class="font-bold">Message <span class="text-red-400">*</span></label>
                <textarea rows="5" name="message" id="title" class="rounded border-none bg-gray-100 shadow">{{ old('message') }}</textarea>
                @if ($errors->has('message'))
                    <div class="error text-red-400 text-sm">{{ $errors->first('message') }}
                    </div>
                @endif
            </div>

            <div class="flex flex-col">
                <label for="title" class="font-bold">Name</label>
                <input type="text" name="title" id="title" class="rounded border-none bg-gray-100 w-1/4 shadow"
                    value="{{ old('title') }}">
                @if ($errors->has('title'))
                    <div class="error text-red-400 text-sm">{{ $errors->first('title') }}
                    </div>
                @endif
            </div>
            <div>
                <input type="hidden" name="status" value="live">
            </div>
            <button type="submit"
                class="bg-orange-400 w-full lg:w-auto xl:w-auto md:w-auto rounded shadow p-2 text-white my-3">Create
                Message!</button>
        </form>
    </div>



</x-guest-layout>
