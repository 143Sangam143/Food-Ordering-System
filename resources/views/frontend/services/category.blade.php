<div class="min-h-screen !bg-fixed !bg-no-repeat !bg-center !bg-cover pt-[8rem] pb-[3rem] space-y-[1.5rem]" style="background-image:url('/frontend/images/services/services-bg.png');">
    <h1 class="font-bold text-[2.2rem] text-white text-center">Services</h1>
    <div class="grid grid-cols-1 min-[350px]:grid-cols-2 xl:grid-cols-3 items-center justify-center px-[5%] 2xl:px-[10vw] gap-y-[1.5rem] scroll-smooth">
        @foreach($services as $service)
            <a href="{{ route('services.list', $service->category, $service->id) }}" class="hover:scale-[1.02] group [perspective:1000px]">
                <div class="relative transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
                    <div class="w-[8rem] sm:w-[13.8rem] md:w-[19.8rem] !bg-center !bg-cover overflow-hidden rounded-[.7rem] bg-gradient-to-r from-[#f9f9f9]  via-[#ececec] to-[#f8f8f8] border-y-4 border-[#222] ease-linear duration-300 mx-auto">
                        <div class="picture overflow-hidden w-[8rem] sm:w-[13.8rem] md:w-[19.8rem] h-[6rem] sm:h-[13.8rem] md:h-[19.8rem]">
                            <img src="/images/backend/services/category/{{ $service->image }}" alt="" class="block w-full h-full object-contain">
                        </div>
                        <hr class="z-10 h-[.1rem] bg-[#ccc]">
                        <div class="py-[1rem] font-medium font-mono text-center px-5">
                            <h3 class="text-[1.2rem] sm:text-[1.5rem] text-[#222] truncate first-letter:capitalize">{{$service->category}}</h3>
                            <span class="text-[1rem] sm:text-[1.3rem] text-[#a0a0a0] block first-letter:capitalize truncate">{{$service->description}}</span>
                        </div>
                    </div>
                    <div class="absolute inset-0 h-full w-[8rem] sm:w-[13.8rem] md:w-[19.8rem] overflow-hidden rounded-[.7rem] border-y-4 border-[#222] ease-linear duration-300 mx-auto flex flex-col justify-center items-center text-white bg-[#666] [transform:rotateY(180deg)] [backface-visibility:hidden] px-[2rem] text-center font-medium font-mono">
                        <h3 class="text-[.7rem] sm:text-[1.2rem] lg:text-[1.5rem] text-[#a0a0a0] truncate first-letter:capitalize">{{$service->category}}</h3>
                        <span class="block text-[.6rem] sm:text-[1rem] lg:text-[1.3rem] text-[#222] first-letter:capitalize">{{$service->description}}</span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>