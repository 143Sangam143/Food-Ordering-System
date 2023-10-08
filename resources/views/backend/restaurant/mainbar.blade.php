<div class="p-4 pt-[4.8rem] sm:ml-64">
    <div class="min-h-screen p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 space-y-[1rem]">
        @if ((\Route::current()->getName() == 'restaurant.category') || (\Route::current()->getName() == 'restaurant.item')) 
            <button id="createProductButton" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg  w-auto text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-drawer-target="{{(\Route::current()->getName() == 'restaurant.category')? 'drawer-create-product-default':'drawer-create-item-default'}}" data-drawer-show="{{(\Route::current()->getName() == 'restaurant.category')? 'drawer-create-product-default':'drawer-create-item-default'}}" aria-controls="{{(\Route::current()->getName() == 'restaurant.category')? 'drawer-create-product-default':'drawer-create-item-default'}}" data-drawer-placement="right">
                Add
            </button>
        @endif
        <div class="overflow-y-scroll scrollbar-display-hidden">
            @if (\Route::current()->getName() == 'restaurant.category') 
                @include('backend.restaurant.category_table')
            @elseif (\Route::current()->getName() == 'restaurant.item') 
                @include('backend.restaurant.item_table')
            @elseif (\Route::current()->getName() == 'restaurant.new.order') 
                @include('backend.restaurant.new_order_table')
            @elseif (\Route::current()->getName() == 'restaurant.delivered.order') 
                @include('backend.restaurant.delivered_order_table')
            @elseif (\Route::current()->getName() == 'restaurant.cancel.order') 
                @include('backend.restaurant.cancel_order_table')
            @endif
        </div>
    </div>
</div>

@include('backend.restaurant.add')