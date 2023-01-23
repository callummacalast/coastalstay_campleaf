<x-app-layout>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg container mx-auto mt-10">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Id
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Email
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Message
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $contactMessage->id }}
                        </th>
                        <td class="py-4 px-6">
                            {{ $contactMessage->name }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $contactMessage->email }}
                        </td>
                        <td class="py-4 px-6">
                            {{ Str::limit($contactMessage->message, 60) }}
                        </td>
                        <td class="py-4 px-6">
                            <a href="#"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">somethinf</a>
                        </td>
                    </tr>
            </tbody>
        </table>
    </div>


</x-app-layout>
