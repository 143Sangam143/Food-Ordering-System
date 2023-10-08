<table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600 scrollbar-display-hidden">
    <thead class="bg-gray-100 dark:bg-gray-700">
        <tr>
            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                S.N.
            </th>
            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                Name
            </th>
            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                Image
            </th>
            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                Price
            </th>
            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                Quantity
            </th>
            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                User Email
            </th>
            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                Phone
            </th>
            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                Status
            </th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
        @php($c = 1)
        @foreach($orders as $order)
            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                <td class="w-4 p-4">
                    <div class="text-base font-semibold text-gray-900 dark:text-white">{{ $c }}</div>
                </td>
                <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                    <div class="capitalize text-base font-semibold text-gray-900 dark:text-white">{{ $order->item_name }}</div>
                    <div class="capitalize text-sm font-normal text-gray-500 dark:text-gray-400">{{ $order->category }}</div>
                </td>
                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <img src="/images/backend/products/list/{{ $order->item_image }}" alt="order-{{$c}}" class="h-[3rem] w-fit">
                </td>
                <td class="w-4 p-4">
                    <div class="text-base font-semibold text-gray-900 dark:text-white">{{ $order->price }}</div>
                </td>
                <td class="w-4 p-4">
                    <div class="text-base font-semibold text-gray-900 dark:text-white">{{ $order->quantity }}</div>
                </td>
                <td class="w-4 p-4">
                    <div class="text-base font-semibold text-gray-900 dark:text-white">{{ $order->user_email }}</div>
                </td>
                <td class="w-4 p-4">
                    <div class="text-base font-semibold text-gray-900 dark:text-white">{{ $order->user_phone }}</div>
                </td>
                <td class="w-4 p-4">
                    <div class="capitalize text-base font-semibold text-gray-900 dark:text-white">{{ $order->delivery_status }}</div>
                </td>
            </tr>
            @php ($c++)
        @endforeach                 
    </tbody>
</table>
<script>
    function submitDeliveryStatus(count){
        var id = 'form-delivery-status-submit-';
        var ids = id + count;
        var quantitySubmit = document.getElementById(ids);
        quantitySubmit.submit();
    }
</script>