@if (\Route::current()->getName() == 'restaurant.category')
    <div id="drawer-create-product-default" class="fixed top-[4rem] right-0 z-40 w-full h-[91vh] max-w-xs p-4 overflow-y-auto transition-transform translate-x-full bg-white dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
        <h5 id="drawer-label" class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">New Product</h5>
        <button type="button" data-drawer-dismiss="drawer-create-product-default" aria-controls="drawer-create-product-default" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Close menu</span>
        </button>
        <form action="{{ route('restaurant.category.add') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="space-y-4">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Name</label>
                    <input type="text" name="category" id="name" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Category name" required>
                </div>

                <div>
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea id="description" rows="4" name="description" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Category description" maxlength="50" required></textarea>
                </div>

                <div>
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                    <input type="file" name="image" id="image" required>
                </div>

                <div class="hidden">
                    <label for="restaurant-email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Restaurant Email</label>
                    <input type="hidden" name="restaurant_email" id="restaurant-email" value="{{Auth::user()->email}}">
                </div>

                <div class="hidden">
                    <label for="restaurant-id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Restaurant Id</label>
                    <input type="hidden" name="restaurant_id" id="restaurant-id" value="{{Auth::user()->id}}">
                </div>

                <div class="bottom-0 left-0 flex flex-col xs:flex-row justify-center w-full pb-4 space-y-2 xs:space-y-0 space-x-0 xs:space-x-4 md:px-4 md:absolute">
                    <button type="submit" class="text-white w-full justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Add category
                    </button>
                    <button type="button" data-drawer-dismiss="drawer-create-product-default" aria-controls="drawer-create-product-default" class="inline-flex w-full justify-center text-gray-500 items-center bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                        <svg aria-hidden="true" class="w-5 h-5 -ml-1 sm:mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        Cancel
                    </button>
                </div>
        </form>
    </div>
@elseif (\Route::current()->getName() == 'restaurant.item')
<div id="drawer-create-item-default" class="fixed top-[4rem] right-0 z-40 w-full h-[91vh] max-w-xs p-4 overflow-y-auto transition-transform translate-x-full bg-white dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
        <h5 id="drawer-label" class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">New Product</h5>
        <button type="button" data-drawer-dismiss="drawer-create-item-default" aria-controls="drawer-create-item-default" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Close menu</span>
        </button>
        <form action="{{ route('restaurant.item.add') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="space-y-4">
                <div>
                    <label for="item-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Item Name</label>
                    <input type="text" name="name" id="item-name" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type item name" required>
                </div>
                <div>
                    <label for="category-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Name</label>
                    <input type="text" list="restaurant-category-list" name="category" id="category-name" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type category name" required>
                    <datalist id="restaurant-category-list">
                        @foreach($categorylists as $categorylist)
                            <option value="{{$categorylist->category}}">
                        @endforeach
                    </datalist>
                </div>
                <div>
                    <label for="item-price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                    <input type="number" name="price" id="item-price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Rs." required>
                </div>
                <div>
                    <label for="item-description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea id="item-description" rows="4" name="description" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Enter category description" maxlength="50" required></textarea>
                </div>

                <div>
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                    <input type="file" name="image" id="image" required>
                </div>

                <div class="hidden">
                    <label for="item-restaurant-email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Restaurant Email</label>
                    <input type="hidden" name="restaurant_email" id="item-restaurant-email" value="{{Auth::user()->email}}">
                </div>

                <div class="hidden">
                    <label for="item-restaurant-id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Restaurant Id</label>
                    <input type="hidden" name="restaurant_id" id="item-restaurant-id" value="{{Auth::user()->id}}">
                </div>

                <div class="bottom-0 left-0 flex flex-col xs:flex-row justify-center w-full pb-4 space-y-2 xs:space-y-0 space-x-0 xs:space-x-4 md:px-4 md:absolute">
                    <button type="submit" class="text-white w-full justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Add item
                    </button>
                    <button type="button" data-drawer-dismiss="drawer-create-product-default" aria-controls="drawer-create-product-default" class="inline-flex w-full justify-center text-gray-500 items-center bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                        <svg aria-hidden="true" class="w-5 h-5 -ml-1 sm:mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        Cancel
                    </button>
                </div>
        </form>
    </div>
@endif