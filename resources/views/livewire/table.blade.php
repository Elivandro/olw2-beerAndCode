<div>
    <div class="overflow-x-auto">
        <table class="w-full divide-y divide-gray-300">
            <thead class="bg-gray-50 dark:bg-gray-600">
                <tr>
                    @foreach($columns as $column)
                        <th scope="col" @class(["px-3 py-3.5 text-left text-sm font-semibold text-gray-900  dark:text-white"]) >
                            {{ $column['label'] }}
                        </th>
                    @endforeach

                    @if($edit)
                        <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                            <span class="sr-only">Edit</span>
                        </th>
                    @endif

                    @if($delete)
                        <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                            <span class="sr-only">Delete</span>
                        </th>
                    @endif
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @foreach($items as $item)
                <tr class="bg-white dark:bg-gray-500">
                    @foreach($columns as $column)
                        <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap dark:text-white">{{ data_get($item, $column['column']) }}</td>
                    @endforeach

                    @if($edit)
                        <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap dark:text-white">
                            <a href="{{ route($edit, $item->id) }}" class="text-indigo-600 hover:text-indigo-900 dark:text-white dark:hover:text-gray-400">{{ __('Edit') }}</a>
                        </td>
                    @endif

                    @if($delete)
                        <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap dark:text-white">
                            {{ __('Delete') }}
                        </td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="px-2 py-4 bg-gray-500 rounded-b-xl">
        {{ $items->links() }}
    </div>
</div>