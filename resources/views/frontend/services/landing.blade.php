@if(\Route::current()->getName() == 'services')
<div class="h-screen w-full p-[3rem] min-[200px]:px-[1rem] min-[400px]:p-[3rem] sm:p-[5rem] items-center justify-center flex bg-black">
    <div class="h-[45%] min-[200px]:h-[40%] min-[300px]:h-[50%] min-[400px]:h-[60%] sm:h-[60%] md:h-[62%] lg:h-[70%] 2xl:h-[80%] w-full md:w-[75%] lg:w-[70%] xl:w-[50%]">
        <div class="swiper-container h-full w-full mx-auto">
            <div class="swiper-wrapper">
            @foreach($services as $service)
                    <div class="swiper-slide relative text-center text-[18px] flex justify-center items-center bg-no-repeat bg-cover p-[1rem] min-[400px]:p-[2rem] md:p-[3rem] relative" style="background-image: url('/frontend/images/products/cube-bg.png');">
                        <div class="absolute bg-no-repeat bg-cover h-[2rem] min-[400px]:h-[2.5rem] sm:h-[3rem] lg:h-[4rem] w-[2rem] min-[400px]:w-[2.5rem] sm:w-[3rem] lg:w-[4rem] left-0 top-0" style="background-image: url('/frontend/images/products/cube-corner-bg.png');"></div>
                        <div class="absolute bg-no-repeat bg-cover h-[2rem] min-[400px]:h-[2.5rem] sm:h-[3rem] lg:h-[4rem] w-[2rem] min-[400px]:w-[2.5rem] sm:w-[3rem] lg:w-[4rem] -rotate-[90deg] left-0 bottom-0" style="background-image: url('/frontend/images/products/cube-corner-bg.png');"></div>
                        <div class="absolute bg-no-repeat bg-cover h-[2rem] min-[400px]:h-[2.5rem] sm:h-[3rem] lg:h-[4rem] w-[2rem] min-[400px]:w-[2.5rem] sm:w-[3rem] lg:w-[4rem] rotate-[90deg] right-0 top-0" style="background-image: url('/frontend/images/products/cube-corner-bg.png');"></div>
                        <div class="absolute bg-no-repeat bg-cover h-[2rem] min-[400px]:h-[2.5rem] sm:h-[3rem] lg:h-[4rem] w-[2rem] min-[400px]:w-[2.5rem] sm:w-[3rem] lg:w-[4rem] rotate-[180deg] right-0 bottom-0" style="background-image: url('/frontend/images/products/cube-corner-bg.png');"></div>
                        <img src="/images/backend/services/category/{{ $service->image }}" class="object-contain block h-full w-full">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@elseif(\Route::current()->getName() == 'services.list')
<div class="h-screen w-full p-[3rem] min-[200px]:px-[1rem] min-[400px]:p-[3rem] sm:p-[5rem] items-center justify-center flex bg-black">
    <div class="h-[45%] min-[200px]:h-[40%] min-[300px]:h-[50%] min-[400px]:h-[60%] sm:h-[60%] md:h-[62%] lg:h-[70%] 2xl:h-[80%] w-full md:w-[75%] lg:w-[70%] xl:w-[50%]">
        <div class="swiper-container h-full w-full mx-auto">
            <div class="swiper-wrapper">
                @foreach($lists as $list)
                    <div class="swiper-slide relative text-center text-[18px] flex justify-center items-center bg-no-repeat bg-cover p-[1rem] min-[400px]:p-[2rem] md:p-[3rem] relative" style="background-image: url('/frontend/images/products/list/cube-bg.png');">
                        <div class="absolute bg-no-repeat bg-cover h-[2rem] min-[400px]:h-[2.5rem] sm:h-[3rem] lg:h-[4rem] w-[2rem] min-[400px]:w-[2.5rem] sm:w-[3rem] lg:w-[4rem] left-0 top-0" style="background-image: url('/frontend/images/products/list/cube-corner-bg.png');"></div>
                        <div class="absolute bg-no-repeat bg-cover h-[2rem] min-[400px]:h-[2.5rem] sm:h-[3rem] lg:h-[4rem] w-[2rem] min-[400px]:w-[2.5rem] sm:w-[3rem] lg:w-[4rem] -rotate-[90deg] left-0 bottom-0" style="background-image: url('/frontend/images/products/list/cube-corner-bg.png');"></div>
                        <div class="absolute bg-no-repeat bg-cover h-[2rem] min-[400px]:h-[2.5rem] sm:h-[3rem] lg:h-[4rem] w-[2rem] min-[400px]:w-[2.5rem] sm:w-[3rem] lg:w-[4rem] rotate-[90deg] right-0 top-0" style="background-image: url('/frontend/images/products/list/cube-corner-bg.png');"></div>
                        <div class="absolute bg-no-repeat bg-cover h-[2rem] min-[400px]:h-[2.5rem] sm:h-[3rem] lg:h-[4rem] w-[2rem] min-[400px]:w-[2.5rem] sm:w-[3rem] lg:w-[4rem] rotate-[180deg] right-0 bottom-0" style="background-image: url('/frontend/images/products/list/cube-corner-bg.png');"></div>
                        <img src="/images/backend/services/list/{{ $list->image }}" class="object-contain block h-full w-full">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif
<script>
    var mySwiper = new Swiper ('.swiper-container', {
        effect: 'cube',
        slidesPerView: 1,
        grabCursor: true,
        speed: 1500,
        autoplay: {
            delay:500,
            disableOnInteraction: false,
        },
        loop: true,
        cubeEffect: {
            shadow: true,
            slideShadows: true,
            shadowOffset: 20,
            shadowScale: 0.94,
        },
    })
</script>