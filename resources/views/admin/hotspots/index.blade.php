<x-app-layout>

    <div class="container mx-auto mt-32">

        <h3 class="m-5 text-3xl font-bold ">Hotspots</h3>
        <div class="pagination w-full py-5">
            {{ $hotspots->links() }}
        </div>


        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 my-5">
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
                    <th scope="col" class="py-3 px-6">
                        Status
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
                            <a href="{{ route('admin.hotspots.destroy', $hotspot)}}"
                                class="font-medium text-red-600 dark:text-blue-500 hover:underline" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                        <td class="py-4 px-6">
                            @if ($hotspot->status == 'pending')
                                <span
                                    class="inline-flex items-center m-2 px-3 py-1 bg-red-200 hover:bg-red-300 rounded-full text-sm font-semibold text-red-600">
                                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                        <path
                                            d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z" />
                                    </svg>
                                    <span class="ml-1">
                                        pending
                                    </span>
                                </span>
                            @else
                                <span
                                    class="inline-flex items-center m-2 px-3 py-1 bg-green-200 hover:bg-green-300 rounded-full text-sm font-semibold text-green-600">
                                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                        <path
                                            d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z" />
                                    </svg>
                                    <span class="ml-1">
                                        live
                                    </span>
                                </span>
                            @endif

                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
</x-app-layout>
