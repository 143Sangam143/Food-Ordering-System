<div class="min-h-screen !bg-fixed !bg-no-repeat !bg-center !bg-cover pt-[8rem] pb-[3rem] space-y-[1.5rem]" style="background: url('/frontend/images/products/background/bg-category-<?php echo rand(1,9) ?>.png');">
    <h1 class="font-bold text-[2.2rem] text-white text-center">Restaurant</h1>
    <div class="grid grid-cols-1 min-[350px]:grid-cols-2 xl:grid-cols-3 items-center justify-center px-[5%] 2xl:px-[10vw] gap-y-[1.5rem] scroll-smooth">
        @foreach($restaurants as $restaurant)
            <a href="{{ route('products', $restaurant->id) }}" class="hover:scale-[1.02] group [perspective:1000px]">
                <div class="relative transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
                    <div class="w-[8rem] sm:w-[13.8rem] md:w-[19.8rem] !bg-center !bg-cover overflow-hidden rounded-[.7rem] bg-gradient-to-r from-[#f9f9f9]  via-[#ececec] to-[#f8f8f8] border-y-4 border-[#222] ease-linear duration-300 mx-auto">
                        <div class="picture overflow-hidden w-[8rem] sm:w-[13.8rem] md:w-[19.8rem] h-[6rem] sm:h-[13.8rem] md:h-[19.8rem]">
                            @if($restaurant->profile_photo_path)
                                <img src="/storage/{{$restaurant->profile_photo_path}}" alt="" class="block p-1 rounded-[.7rem] w-full h-full object-contain">
                            @else
                                <svg class="text-gray-400 rounded-[50%] mx-auto w-max" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" style="height: -webkit-fill-available;">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                </svg>
                            @endif
                        </div>
                        <hr class="z-10 h-[.1rem] bg-[#ccc]">
                        <div class="py-[1rem] font-medium font-mono text-center px-5">
                            <h3 class="text-[1.2rem] sm:text-[1.5rem] text-[#222] truncate first-letter:capitalize">{{$restaurant->name}}</h3>
                            <span class="text-[1rem] sm:text-[1.3rem] text-[#a0a0a0] block truncate">{{$restaurant->email}}</span>
                        </div>
                    </div>
                    <div class="absolute inset-0 h-full w-[8rem] sm:w-[13.8rem] md:w-[19.8rem] overflow-hidden rounded-[.7rem] border-y-4 border-[#222] ease-linear duration-300 mx-auto flex flex-col justify-center items-center text-white bg-[#666] [transform:rotateY(180deg)] [backface-visibility:hidden] px-[2rem] text-center font-medium font-mono">
                        <h3 class="text-[.7rem] sm:text-[1.2rem] lg:text-[1.5rem] text-[#a0a0a0] truncate first-letter:capitalize">{{$restaurant->name}}</h3>
                        <span class="block text-[.6rem] sm:text-[1rem] lg:text-[1.3rem] text-[#222] first-letter:capitalize">{{$restaurant->email}}</span>
                        <span class="block text-[.6rem] sm:text-[1rem] lg:text-[1.3rem] text-[#222] first-letter:capitalize">{{$restaurant->phone}}</span>
                        <span class="block text-[.6rem] sm:text-[1rem] lg:text-[1.3rem] text-[#222] first-letter:capitalize">{{$restaurant->address}}</span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>

<div class="min-h-screen !bg-fixed !bg-no-repeat !bg-center !bg-cover pt-[8rem] pb-[3rem] space-y-[1.5rem]" style="background: url('/frontend/images/products/background/bg-category-<?php echo rand(1,9) ?>.png');">
    <h1 class="font-bold text-[2.2rem] text-white text-center">Nearby Restaurant</h1>
    <div class="grid grid-cols-1 min-[350px]:grid-cols-2 xl:grid-cols-3 items-center justify-center px-[5%] 2xl:px-[10vw] gap-y-[1.5rem] scroll-smooth">
        @php($c=1)
        @foreach($results as $result)
            <a href="{{ route('products', $restaurant->id) }}" class="hover:scale-[1.02] ">
                <div class="relative ">
                    <div class="w-[8rem] sm:w-[13.8rem] md:w-[19.8rem] !bg-center !bg-cover overflow-hidden rounded-[.7rem] bg-gradient-to-r from-[#f9f9f9]  via-[#ececec] to-[#f8f8f8] border-y-4 border-[#222] mx-auto">
                        <div class="picture overflow-hidden w-[8rem] sm:w-[13.8rem] md:w-[19.8rem] h-[6rem] sm:h-[13.8rem] md:h-[19.8rem]">
                            <svg class="text-gray-400 rounded-[50%] mx-auto w-max" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" style="height: -webkit-fill-available;">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <hr class="z-10 h-[.1rem] bg-[#ccc]">
                        <div class="py-[1rem] font-medium font-mono text-center px-5">
                            <h3 class="text-[1.2rem] sm:text-[1.5rem] text-[#222] truncate first-letter:capitalize">{{$c}}</h3>
                            <span class="text-[1rem] sm:text-[1.3rem] text-[#a0a0a0] block truncate">{{$result}}</span>
                        </div>
                    </div>
                </div>
            </a>
            @php($c++)
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