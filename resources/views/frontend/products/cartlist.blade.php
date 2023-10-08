<div class="min-h-screen bg-[#9095a0] px-[2rem] xs:px-[5rem] sm:px-[8rem] xl:px-[16.5rem] py-[7rem] !bg-fixed !bg-no-repeat !bg-center !bg-cover" style="background-image: url('/frontend/images/default-bg.png')">
    <div class="bg-white max-2xs:px-[1rem] px-[3rem] xs:pl-[3rem] sm:pl-[5.5rem] xs:pr-[3rem] sm:pr-[4.5rem] py-[2rem] space-y-[2.6rem] shadow-[0px_0px_20px_5px_rgba(0,0,0,0.35)_inset]">
        <h1 class="max-2xs:text-[.9rem] text-[1.1rem] sm:text-[1.5rem] lg:text-[2rem] font-bold">Shopping Cart</h1>
        <div class="space-y-[1.55rem]">
            <hr class="h-[1rem]">
            @if($carts)
                <div class="space-y-[1.54rem]">
                    <div class="space-y-[.2rem]">
                        @php
                            $quantity = 1;
                            $subtotal=0;
                            $shipping = 30;
                            $taxrate = 0.02;
                            $taxamount = 0;
                            $total = 0;
                            $count = 1;
                        @endphp
                        <div class="space-y-[1.55rem]">
                            @foreach($carts as $cart)
                                @php ($quantity = 1)
                                <div class="space-y-[2.5rem]">
                                    <div class="grid grid-cols-1 lg:grid-cols-5 2xl:grid-cols-6 gap-[2rem] lg:gap-[5rem]">
                                        <div class="bg-[#f7f7f7] h-[5rem] xs:h-[7rem] sm:h-[8rem] w-[5rem] xs:w-[7rem] sm:w-[8rem] rounded-[.5rem] col-span-1 min-md:mx-auto p-2">
                                            <img src="/images/backend/products/list/{{ $cart->item_image }}" class="h-full rounded-[.5rem] w-fit mx-auto">
                                        </div>
                                        <div class="flex flex-col justify-between lg:col-span-4 2xl:col-span-5">
                                            <div class="grid max-md:grid-cols-1 grid-cols-3 max-md:space-y-[.4rem] justify-between w-full">
                                                <h1 class="text-[.7rem] xs:text-[.9rem] font-semibold text-[#374151]">{{ $cart->item_name }}</h1>
                                                <div class="flex flex-col space-y-[.7rem] md:mx-auto">
                                                    <form action="{{ route('products.cartlist.update.quantity', $cart->id) }}" method="post" id="form-quantity-submit-{{$count}}">
                                                        @csrf
                                                        <select name="quantity" value="quantity" class="text-[#374151] text-[.7rem] xs:text-[.9rem] font-semibold border-[#d1d5db] rounded-[.4rem] py-[.15rem] xs:py-[.25rem] shadow-sm px-[.55rem] xs:px-[.75rem] mr-[.25rem] w-fit" id="select_change" onchange="submit_form(<?php echo $count; ?>)">
                                                            @for($i=1; $i<=10; $i++)
                                                                <option for="id-{{$i}}" value="{{$i}}" {{$cart->quantity == $i ? 'selected' : ''}} onclick="submitFunction()">{{ $i }}</option>
                                                            @endfor
                                                        </select>
                                                    </form>
                                                    <a href="{{ route('products.carlist.delete', $cart->id) }}" class="text-[.7rem] xs:text-[.9rem] font-semibold text-[#3574d3] max-lg:hidden">Remove</a>
                                                </div>
                                                @php ($cart->price = $cart->price * $cart->quantity)
                                                <span class="text-[.7rem] xs:text-[.9rem] font-semibold text-[#374151] md:ml-auto">Rs. {{ $cart->price }}/-</span>
                                            </div>
                                            <span class="text-[.7rem] xs:text-[.9rem] text-black font-medium">Avialable</span>
                                            <a href="{{ route('products.carlist.delete', $cart->id) }}" class="text-[.7rem] xs:text-[.9rem] font-semibold text-[#3574d3] lg:hidden">Remove</a>
                                        </div>
                                    </div>
                                    <hr class="h-[1rem]">
                                    @php($subtotal= $subtotal+$cart->price)
                                </div>
                                @php ($count++)
                            @endforeach
                        </div>
                        <div class="flex">

                            <a href="{{ route('products.cartlist.remove.all') }}" class="ml-auto text-center text-white bg-blue-700 font-semibold hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-[.7rem] xs:text-[.95rem] px-5 py-2.5 h-[2.03rem] xs:h-[2.5rem] md:h-[2.7rem] dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Remove all</a>
                        </div>
                    </div>
                    <div class="lg:pl-[9.5rem] space-y-[2.5rem]">
                        <div class="bg-[#f9fafb] max-2xs:px-[.5rem] 2xs:px-[1rem] sm:px-[2rem] py-[1.9rem] rounded-[.5rem] space-y-[.9rem]">
                            <div class="flex justify-between">
                                <h1 class="text-[.7rem] 2xs:text-[.65rem] xs:text-[.8rem] sm:text-[.95rem] text-[#4b5563]">Subtotal</h1>
                                <span class="text-[.7rem] 2xs:text-[.65rem] xs:text-[.8rem] sm:text-[.95rem] text-[#111827] font-semibold">Rs. {{$subtotal}}/-</span>
                            </div>
                            <hr class="h-[1px]">
                            <div class="flex justify-between">
                                <h1 class="text-[.7rem] 2xs:text-[.65rem] xs:text-[.8rem] sm:text-[.95rem] text-[#4b5563]">Shipping</h1>
                                <span class="text-[.7rem] 2xs:text-[.65rem] xs:text-[.8rem] sm:text-[.95rem] text-[#111827] font-semibold">Rs. {{$shipping}}/-</span>
                            </div>
                            <hr class="h-[1px]">
                            <div class="flex justify-between">
                                <h1 class="text-[.7rem] 2xs:text-[.65rem] xs:text-[.8rem] sm:text-[.95rem] text-[#4b5563]">Tax</h1>
                                @php ($taxamount = $taxrate * $subtotal)
                                <span class="text-[.7rem] 2xs:text-[.65rem] xs:text-[.8rem] sm:text-[.95rem] text-[#111827] font-semibold">Rs. {{$taxamount}}/-</span>
                            </div>
                            <hr class="h-[1px]">
                            <div class="flex justify-between">
                                <h1 class="max-2xs:text-[.8rem] max-xs:text-[.85rem] xs:text-[.9rem] sm:text-[1rem] md:text-[1.2rem] text-[#111827] font-semibold">Total</h1>
                                @php ($total = $subtotal + $shipping + $taxamount)
                                <span class="max-2xs:text-[.8rem] max-xs:text-[.85rem] xs:text-[.9rem] sm:text-[1rem] md:text-[1.2rem] text-[#111827] font-semibold">Rs. {{ $total }}/-</span>
                            </div>
                        </div>
                        <div class="flex flex-col space-y-[.3rem]">
                            <div class="flex max-md:flex-col mx-auto">
                                <form action="https://uat.esewa.com.np/epay/main" method="POST">
                                    <input value="{{$total}}" name="tAmt" type="hidden">
                                    <input value="{{$subtotal}}" name="amt" type="hidden">
                                    <input value="{{$taxamount}}" name="txAmt" type="hidden">
                                    <input value="0" name="psc" type="hidden">
                                    <input value="{{$shipping}}" name="pdc" type="hidden">
                                    <input value="EPAYTEST" name="scd" type="hidden">
                                    <input value="ee2c3ca1-696b-4cc5-a6be-2c40d929d453" name="pid" type="hidden">
                                    <input value="{{ route('esewa.success') }}" type="hidden" name="su">
                                    <input value="{{ route('esewa.failure') }}" type="hidden" name="fu">
                                    <button type="submit" class="text-center shadow-sm text-white font-semibold bg-[#f6f6f6] hover:bg-[#f0f0f0] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-[.7rem] xs:text-[.95rem] h-[2.03rem] xs:h-[2.5rem] md:h-[2.7rem] w-fit  px-3 py-1  mr-2 mb-3 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><img src="/images/frontend/esewa.png" alt="esewa" class="h-full w-fit"></button>
                                </form>
                                <a href="{{ route('products.order') }}" class="text-center text-white bg-blue-700 font-semibold hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-[.7rem] xs:text-[.95rem] px-5 py-2.5 h-[2.03rem] xs:h-[2.5rem] md:h-[2.7rem] mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Cash on delivery</a>
                            </div>
                            <p class="text-center text-[#4b5563]">or</p>
                            <a href="{{ url()->previous() }}" class="text-blue-700 max-2xs:text-[.8rem] max-xs:text-[.85rem] xs:text-[.9rem] font-medium text-center w-full">Continue Shopping</a>
                        </div>
                    </div>
                </div>
            @else
                <h1 class="max-2xs:text-[.8rem] text-[.9rem] xs:text-[1.2rem] font-semibold text-[#374151] pb-4">No items in cart.</h1>
                <a href="{{ route('restaurants') }}" class="text-center text-white bg-blue-700 font-semibold hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-[.7rem] xs:text-[.95rem] px-5 py-2.5 h-[2.03rem] xs:h-[2.5rem] md:h-[2.7rem] mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Continue Shopping</a>
            @endif
        </div>
    </div>
</div>

<script>
    function submit_form( count){
        var id = 'form-quantity-submit-';
        var ids = id + count;
        var quantitySubmit = document.getElementById(ids);
        quantitySubmit.submit();
    }
</script>