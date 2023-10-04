<div>
    <div class="flex min-h-screen !bg-fixed !bg-no-repeat !bg-center !bg-cover items-center justify-center" style="background-image:url('/frontend/images/home/home-landing-bg.png');">
        <div class="w-full !mx-auto grid grid-cols-1 md:grid-cols-2 justify-items-center justify-center gap-y-20 md:gap-y-0 gap-x-0 mt-[5rem] md:mt-0 max-sm:pb-[2rem] lg:py-[12rem]">
            <a href="{{ route('backend.products') }}" class="w-[12rem] h-[14rem] sm:w-[18rem] sm:h-[20rem] !bg-fixed !bg-no-repeat !bg-center !bg-cover flex flex-col items-center justify-center rounded-xl duration-500 text-white text-center shadow-[0px_5px_10px_0px_rgba(0,0,0,0.8)] hover:shadow-[0px_10px_20px_5px_rgba(0,0,0,0.65)] hover:-translate-y-[8px]" style="background-image:url('/frontend/images/home/e-commerce-bg.png');">
                <h1 class="text-[1.2rem] sm:text-[1.5rem] font-bold">E-commerce</h1>
                <p class="text-[.8rem] font-mono font-semibold">What drives a business?<br> Its customers</p>
            </a>

            <a href="{{ route('backend.services') }}" class="w-[12rem] h-[14rem] sm:w-[18rem] sm:h-[20rem] !bg-fixed !bg-no-repeat !bg-center !bg-cover flex flex-col items-center justify-center rounded-xl duration-500 text-white text-center shadow-[0px_5px_10px_0px_rgba(0,0,0,0.6)_inset] hover:shadow-[0px_10px_20px_5px_rgba(0,0,0,0.35)_inset] hover:translate-y-[8px]" style="background-image:url('/frontend/images/home/e-governance-bg.png');">
                <h1 class="text-[1.2rem] sm:text-[1.5rem] font-bold">E-government</h1>
                <p class="text-[.8rem] font-mono font-semibold">If voting made any difference they wouldn't let us do it</p>
            </a>
        </div>
    </div>
</div>