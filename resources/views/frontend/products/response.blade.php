<div class="min-h-screen bg-black flex justify-center items-center">
    <div class="bg-white max-2xs:px-[1rem] px-[3rem] xs:pl-[3rem] sm:pl-[5.5rem] xs:pr-[3rem] sm:pr-[4.5rem] py-[2rem] space-y-[.55rem] shadow-[0px_0px_20px_5px_rgba(0,0,0,0.35)_inset]">
        @if (session('success_message'))
            <h1 class="max-2xs:text-[.9rem] text-[1.1rem] sm:text-[1.5rem] lg:text-[2rem] font-bold">{{ session('success_message') }}</h1>
        @elseif (session('failure_message'))
            <h1 class="max-2xs:text-[.9rem] text-[1.1rem] sm:text-[1.5rem] lg:text-[2rem] font-bold">{{ session('failure_message') }}</h1>
        @endif
        <div>
            <hr class="h-[1rem] mb-3">
            <a href="{{ route('home') }}" class="w-full text-center text-white bg-blue-700 font-semibold hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-[.7rem] xs:text-[.95rem] px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Home</a>
        </div>
    </div>
</div>