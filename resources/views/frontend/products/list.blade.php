@auth
    <a href="{{ route('products.cartlist') }}" class="fixed right-[1rem] sm:right-[2.5rem] top-[5rem] z-[1100] h-[2.5rem] min-[450px]:h-[3rem] w-[2.5rem] min-[450px]:w-[3rem] cursor-pointer">
        <img src="{{asset('/frontend/images/cart.png')}}">
    </a>
@endauth
<div class="min-h-screen !bg-fixed !bg-no-repeat !bg-center !bg-cover pt-[8rem] pb-[3rem] space-y-[1.5rem]" style="background-image: url('/frontend/images/products/background/bg-category-<?php echo rand(1,9)?>.png')" >
    <h1 class="font-bold text-[2.2rem] text-white text-center">{{$category}}</h1>
    <div class="grid grid-cols-1 min-[350px]:grid-cols-2 xl:grid-cols-3 items-center justify-center px-[5%] 2xl:px-[10vw] gap-y-[1.5rem] scroll-smooth">
    @foreach($lists as $list)
        <div>
            <div class="hover:scale-[1.02] group [perspective:1000px]">
                <div class="relative transition-all duration-[500ms] [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
                    <div class="w-[8rem] sm:w-[13.8rem] md:w-[19.8rem] !bg-center !bg-cover overflow-hidden rounded-[.7rem] bg-gradient-to-r from-[#f9f9f9]  via-[#ececec] to-[#f8f8f8] border-y-4 border-[#222] ease-linear duration-300 mx-auto">
                        <div class="picture overflow-hidden w-[8rem] sm:w-[13.8rem] md:w-[19.8rem] h-[6rem] sm:h-[13.8rem] md:h-[19.8rem]">
                            <img src="/images/backend/products/list/{{ $list->image }}" alt="" class="block w-full h-full object-contain">
                        </div>
                        <hr class="z-10 h-[.1rem] bg-[#ccc]">
                        <div class="py-[1rem] font-medium font-mono text-center px-5">
                            <h3 class="text-[1.2rem] sm:text-[1.5rem] text-[#222] truncate first-letter:capitalize">{{$list->name}}</h3>
                            <span class="text-[1rem] sm:text-[1.3rem] text-[#a0a0a0] block first-letter:capitalize truncate">{{$list->price}}</span>
                        </div>
                    </div>
                    <div class="absolute inset-0 h-full w-[8rem] sm:w-[13.8rem] md:w-[19.8rem] overflow-hidden rounded-[.7rem] border-y-4 border-[#222] ease-linear duration-300 mx-auto flex flex-col justify-center items-center text-white bg-[#666] [transform:rotateY(180deg)] [backface-visibility:hidden] px-[2rem] text-center font-medium font-mono">
                        <h3 class="text-[.7rem] sm:text-[1.2rem] lg:text-[1.5rem] text-[#a0a0a0] truncate first-letter:capitalize">{{$list->name}}</h3>
                        <span class="block text-[.6rem] sm:text-[1rem] lg:text-[1.3rem] text-[#222] first-letter:capitalize">{{$list->description}}</span>
                    </div>
                </div>
            </div>
            <div class="pt-4">
                @php 
                    $c = 0;
                    $user_email = Auth::user()->email;
                @endphp
                @if($addCarts != 0)
                    @foreach($addCarts as $addCart)
                        @if($addCart->item_name == $list->name && $addCart->user_email == $user_email)
                            @php ($c=1)
                        @endif
                    @endforeach
                @endif
                @if($c==1)
                    <div class="mx-auto cursor-default flex bg-green-700 text-white w-fit rounded-md items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md  dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-800">
                        <span>Added</span>
                    </div>
                @else
                    <form action="{{route('products.cart', $list->id)}}" method="post">
                        @csrf
                        <input type="text" class="hidden" name="name" value="{{ $list->name }}">
                        <input type="number" class="hidden" name="price" value="{{ $list->price }}">
                        <input type="text" class="hidden" name="restaurant_email" value="{{ $list->email }}">
                        <input type="number" class="hidden" name="quantity" value="1">
                        <input type="text" class="hidden" name="image" value="{{ $list->image }}">
                        <input type="text" class="hidden" name="restaurant_email" value="{{ $list->restaurant_email }}">
                        @auth
                            <input type="text" class="hidden" name="user_email" value="{{ Auth::user()->email }}">
                        @endauth
                        <button type="submit" value="submit" class="btn-next mx-auto flex bg-[#3574d3] text-white w-fit rounded-md items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md  dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-800">
                            <span class="">Add to cart</span>
                        </button>
                    </form>
                @endif
            </div>
        </div>
    @endforeach
    </div>
</div>