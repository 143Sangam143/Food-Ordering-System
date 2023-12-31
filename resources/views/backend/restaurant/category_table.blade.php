<table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600 scrollbar-display-hidden">
    <thead class="bg-gray-100 dark:bg-gray-700">
        <tr>
            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                S.N.
            </th>
            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                Category
            </th>
            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                Description
            </th>
            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                Image
            </th>
            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                Actions
            </th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
        @php($c = 1)
        @foreach($products as $product)
            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                <td class="w-4 p-4">
                    <div class="text-base font-semibold text-gray-900 dark:text-white">{{ $c }}</div>
                </td>
                <td class="capitalize p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                    <div class="text-base font-semibold text-gray-900 dark:text-white">{{ $product->category }}</div>
                </td>
                <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                    {{ $product->description }}
                </td>
                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <img src="/images/backend/products/category/{{ $product->image }}" alt="category-{{$c}}" class="h-[3rem] w-fit">
                </td>
                <td class="p-4 flex space-x-2">
                    <button id="updateProductButton-{{$c}}" data-drawer-target="drawer-update-product-default-{{$c}}" data-drawer-show="drawer-update-product-default-{{$c}}" aria-controls="drawer-update-product-default-{{$c}}" data-drawer-placement="right" class="inline-flex items-center w-auto text-sm px-3 py-2 text-center font-medium rounded-lg text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                        Update
                    </button>
                    <a href="{{ route('restaurant.category.delete', $product->id) }}" class="inline-flex items-center w-auto text-sm px-3 py-2 text-center font-medium text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                        Delete
                    </a>
                </td>
            </tr>
            @php ($c++)
        @endforeach                 
    </tbody>
</table>

@include('backend.restaurant.update')