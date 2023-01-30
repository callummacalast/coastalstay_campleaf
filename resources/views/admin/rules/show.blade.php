<x-app-layout>
    <div class="container mx-auto mt-32">
        <h3>Create rule</h3>
        <form action="{{ route('admin.rules.update', ['campsiteRule' => $campsiteRule]) }}" method="post" class="m-3">
            @csrf
            <div class="flex flex-col">
                <label for="name">rule Title</label>
                <input type="text" name="title" value="{{ $campsiteRule->title }}" id="title"
                    class="rounded border-none bg-white-100 shadow">
            </div>
            <div class="flex flex-col my-3">

                <label for="description">Details</label>
                <textarea rows="5" name="rule" id="description" class="rounded border-none bg-white-100 shadow">{{ $campsiteRule->rule }}</textarea>
            </div>
            <button type="submit" class="bg-blue-400 rounded shadow p-2 text-white my-3">Update rule!</button>
        </form>
    </div>
</x-app-layout>
