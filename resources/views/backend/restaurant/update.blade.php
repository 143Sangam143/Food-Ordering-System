@if (\Route::current()->getName() == 'restaurant.category')
    @php($c = 1)
    @foreach($products as $product)
        <div id="drawer-update-product-default-{{$c}}" class="fixed top-[4rem] right-0 z-40 w-full h-[91vh] max-w-xs p-4 overflow-y-auto transition-transform translate-x-full bg-white dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
            <h5 id="drawer-label" class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">Update Product</h5>
            <button type="button" data-drawer-dismiss="drawer-update-product-default-{{$c}}" aria-controls="drawer-update-product-default-{{$c}}" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close menu</span>
            </button>
            <form action="{{ route('restaurant.category.update', $product->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="space-y-4">
                    <div>
                        <label for="name-{{$c}}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Name</label>
                        <input type="text" name="category" id="name-{{$c}}" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $product->category }}" placeholder="Type product name" required>
                    </div>
                    <div>
                        <label for="description-{{$c}}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea id="description-{{$c}}" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Enter event description here" maxlength="50">{{$product->description}}</textarea>
                    </div>
                    <div>
                        <label for="image-{{$c}}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Image</label>
                        <input type="file" name="image" id="image-{{$c}}" value="{{$product->image}}">
                    </div>
                    <div class="hidden">
                        <label for="restaurant-email-{{$c}}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Restaurant Email</label>
                        <input type="hidden" name="restaurant_email" id="restaurant-email-{{$c}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $product->restaurant_email }}" required>
                    </div>
                    <div class="hidden">
                        <label for="restaurant-id-{{$c}}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Restaurant id</label>
                        <input type="hidden" name="restaurant_id" id="restaurant-id-{{$c}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $product->restaurant_id }}" required>
                    </div>
                </div>
                <div class="bottom-0 left-0 flex justify-center w-full pb-4 mt-4 space-x-4 sm:absolute sm:px-4 sm:mt-0">
                    <button type="submit" class="inline-flex items-center w-auto text-sm px-3 py-2 text-center font-medium rounded-lg text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                        Update
                    </button>
                </div>
            </form>
        </div>
        @php ($c++)
    @endforeach
@elseif (\Route::current()->getName() == 'restaurant.item')
    @php($c = 1)
    @foreach($lists as $list)
        <div id="drawer-update-list-default-{{$c}}" class="fixed top-[4rem] right-0 z-40 w-full h-[91vh] max-w-xs p-4 overflow-y-auto transition-transform translate-x-full bg-white dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
            <h5 id="drawer-label" class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">Update list</h5>
            <button type="button" data-drawer-dismiss="drawer-update-list-default-{{$c}}" aria-controls="drawer-update-list-default-{{$c}}" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close menu</span>
            </button>
            <form action="{{ route('restaurant.item.update', $list->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="space-y-4">
                    <div>
                        <label for="item-name-{{$c}}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Item Name</label>
                        <input type="text" name="name" id="item-name-{{$c}}" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $list->name }}" required>
                    </div>
                    <div>
                        <label for="item-description-{{$c}}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea id="item-description-{{$c}}" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Enter event description here" maxlength="50">{{$list->description}}</textarea>
                    </div>
                    <div>
                        <label for="item-price-{{$c}}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                        <input type="text" name="price" id="item-price-{{$c}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="{{ $list->price }}" required>
                    </div>
                    <div>
                        <label for="item-image-{{$c}}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Image</label>
                        <input type="file" name="image" id="item-image-{{$c}}" value="{{$list->image}}">
                    </div>
                </div>
                <div class="bottom-0 left-0 flex justify-center w-full pb-4 mt-4 space-x-4 sm:absolute sm:px-4 sm:mt-0">
                    <button type="submit" class="inline-flex items-center w-auto text-sm px-3 py-2 text-center font-medium rounded-lg text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                        Update
                    </button>
                </div>
            </form>
        </div>
        @php ($c++)
    @endforeach
@endif