<x-app-layout>

    {{-- <div class="container mx-auto mt-32">
   
        <h3 class="m-5">messages</h3>
        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-5 m-3 ">
            @foreach ($messages as $message)
                <div class="shadow p-2 flex justify-between flex-col rounded bg-white">
                    <h2 class="font-bold">{{ $message->title }}</h2>
                    <p>{{ $message->message }}</p>
                    <small class="text-right">{{ \Carbon\Carbon::parse($message->created_at)->diffForHumans() }}</small>
                    <div class="flex flex-col">
                        <a href="{{ route('admin.messages.show', $message->id) }}"
                            class=" shadow rounded text-center p-1 my-1 bg-orange-300 hover:bg-orange-500 hover:text-white transition">Edit</a>
                        <a href=""
                            class=" shadow rounded text-center p-1 my-1 bg-red-300 hover:bg-red-500 hover:text-white transition">Delete</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="pagination w-full">
            {{ $messages->links() }}

        </div>

    </div> --}}
    <div class="leave-message  right-5 bottom-5 mt-32 container mx-auto">
        <a href="{{ route('message.create') }}"
            class="bg-blue-400 p-3 text-white rounded shadow hover:bg-blue-300 transition">Create a new message</a>
    </div>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg container mx-auto mt-16">

        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        ID
                    </th>
                    <th scope="col" class="py-3 px-6">
                        message Title
                    </th>
                    <th scope="col" class="py-3 px-6">
                        message
                    </th>

                    <th scope="col" class="py-3 px-6">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messageBoardItem as $message)
                    <tr class="bg-white border-b  ">
                        <th scope="row"
                            class="py-4 px-6 font-medium  whitespace-nowrap ">
                            {{ $message->id }}
                        </th>
                        <td class="py-4 px-6">
                            {{ $message->title }}
                        </td>
                        <td class="py-4 px-6">
                            {{ Str::limit($message->message, 50) }}
                        </td>

                        <td class="py-4 px-6">
                            <a href="{{ route('admin.messages.edit', $message->id) }}"
                                class="font-medium text-blue-600  hover:underline">Edit</a>
                            <a href="{{ route('admin.messages.delete', $message->id) }}" class="font-medium text-red-600 dark:text-blue-500 hover:underline"
                                onclick="return confirm('Are you sure?')">
                                Delete
                            </a>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <div class="paginate container mx-auto mt-10">
        {{ $messageBoardItem->links() }}

    </div>
</x-app-layout>
