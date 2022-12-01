<x-app-layout>

    <div class="container mx-auto mt-32">

        <h3 class="m-5">hotspots</h3>
        <div class="pagination w-full">
            {{ $hotspots->links() }}
        </div>


        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        ID
                    </th>
                    <th scope="col" class="py-3 px-6">
                        hotspot Title
                    </th>
                    <th scope="col" class="py-3 px-6">
                        hotspot
                    </th>

                    <th scope="col" class="py-3 px-6">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hotspots as $hotspot)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $hotspot->id }}
                        </th>
                        <td class="py-4 px-6">
                            {{ $hotspot->name }}
                        </td>
                        <td class="py-4 px-6">
                            {{ Str::limit($hotspot->description, 50) }}
                        </td>

                        <td class="py-4 px-6">
                            <a href="{{ route('admin.hotspots.show', $hotspot->id) }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="#"
                                class="font-medium text-red-600 dark:text-blue-500 hover:underline">Delete</a>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
</x-app-layout>
