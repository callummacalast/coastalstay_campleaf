<x-app-layout>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg container mx-auto mt-10">
        <div class="create-rule my-5">
            <a href="{{ route('admin.rules.create') }}"
                class="p-3 rounded shadow bg-blue-300 hover:bg-blue-200 transition text-white">Create
                Rule</a>
        </div>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        ID
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Rule Title
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Rule
                    </th>

                    <th scope="col" class="py-3 px-6">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($campsiteRule as $rule)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $rule->id }}
                        </th>
                        <td class="py-4 px-6">
                            {{ $rule->title }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $rule->rule }}
                        </td>

                        <td class="py-4 px-6">
                            <a href="{{ route('admin.rules.show', $rule->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                Edit
                            </a>
                            <a href="{{ route('admin.rules.destroy', $rule->id) }}" class="font-medium text-red-600 dark:text-blue-500 hover:underline"
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
        {{ $campsiteRule->links() }}

    </div>
</x-app-layout>
