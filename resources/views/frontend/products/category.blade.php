<div class="min-h-screen !bg-fixed !bg-no-repeat !bg-center !bg-cover pt-[8rem] pb-[3rem] space-y-[1.5rem]" style="background: url('/frontend/images/products/background/bg-category-<?php echo rand(1,9) ?>.png');">
    <h1 class="font-bold text-[2.2rem] text-white text-center">Products</h1>
    <div class="grid grid-cols-1 min-[350px]:grid-cols-2 xl:grid-cols-3 items-center justify-center px-[5%] 2xl:px-[10vw] gap-y-[1.5rem] scroll-smooth">
        @foreach($products as $product)
            <a href="{{ route('products.list', $product->id) }}" class="hover:scale-[1.02] group [perspective:1000px]">
                <div class="relative transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
                    <div class="w-[8rem] sm:w-[13.8rem] md:w-[19.8rem] !bg-center !bg-cover overflow-hidden rounded-[.7rem] bg-gradient-to-r from-[#f9f9f9]  via-[#ececec] to-[#f8f8f8] border-y-4 border-[#222] ease-linear duration-300 mx-auto">
                        <div class="picture overflow-hidden w-[8rem] sm:w-[13.8rem] md:w-[19.8rem] h-[6rem] sm:h-[13.8rem] md:h-[19.8rem]">
                            <img src="/images/backend/products/category/{{ $product->image }}" alt="" class="block w-full h-full object-contain">
                        </div>
                        <hr class="z-10 h-[.1rem] bg-[#ccc]">
                        <div class="py-[1rem] font-medium font-mono text-center px-5">
                            <h3 class="text-[1.2rem] sm:text-[1.5rem] text-[#222] truncate first-letter:capitalize">{{$product->category}}</h3>
                            <span class="text-[1rem] sm:text-[1.3rem] text-[#a0a0a0] block first-letter:capitalize truncate">{{$product->description}}</span>
                        </div>
                    </div>
                    <div class="absolute inset-0 h-full w-[8rem] sm:w-[13.8rem] md:w-[19.8rem] overflow-hidden rounded-[.7rem] border-y-4 border-[#222] ease-linear duration-300 mx-auto flex flex-col justify-center items-center text-white bg-[#666] [transform:rotateY(180deg)] [backface-visibility:hidden] px-[2rem] text-center font-medium font-mono">
                        <h3 class="text-[.7rem] sm:text-[1.2rem] lg:text-[1.5rem] text-[#a0a0a0] truncate first-letter:capitalize">{{$product->category}}</h3>
                        <span class="block text-[.6rem] sm:text-[1rem] lg:text-[1.3rem] text-[#222] first-letter:capitalize">{{$product->description}}</span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>

<script type="text/javascript">
    var imgCount = 3;
        var dir = 'frontend/images/products/background/';
        var randomCount = Math.round(Math.random() * (imgCount - 1)) + 1;
        var images = new Array(
                    "bg-category-1.png",
                    "bg-category-2.png",
                    "bg-category-3.png",
                    "bg-category-4.png",
                    "bg-category-5.png",
                    "bg-category-6.png",
                    "bg-category-7.png",
                    "bg-category-8.png",
                    "bg-category-9.png",
                );
        document.getElementById("bg-set").style.backgroundImage = "url(" + dir + images[randomCount] + ")"; 
</script>