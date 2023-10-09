<header x-data="{ open: false }" class="absolute w-full bg-transparent grid max-lg:grid-rows-1 px-[1rem] sm:px-[3rem] min-[850px]:px-[4rem] py-[.4rem] max-[350px]:pb-[0.5rem] z-[1099]" id="header">
    @if (Route::has('login'))
        <div class="grid grid-rows-2 grid-flow-col">
            @if(Auth::user()->usertype == '2')
                <a href="{{route('restaurant.dashboard')}}" class="row-span-3 h-[3rem] w-[3rem] min-[350px]:h-[3rem] min-[350px]:w-[3rem] cursor-pointer">
                    <img src="{{asset('/frontend/images/logo.png')}}" alt="Logo" class="h-full relative">
                    <h1 class="text-black absolute max-[350px]:text-[.7rem] text-[.9rem] font-bold font-mono">G-Helper</h1>
                </a>
            @elseif(Auth::user()->usertype == '1')
                <a href="{{route('backend.home')}}" class="row-span-3 h-[3rem] w-[3rem] min-[350px]:h-[3rem] min-[350px]:w-[3rem] cursor-pointer">
                    <img src="{{asset('/frontend/images/logo.png')}}" alt="Logo" class="h-full relative">
                    <h1 class="text-white absolute max-[350px]:text-[.7rem] text-[.9rem] font-bold font-mono">G-Helper</h1>
                </a>
            @else
                <a href="{{route('home')}}" class="row-span-3 h-[3rem] w-[3rem] min-[350px]:h-[3rem] min-[350px]:w-[3rem] cursor-pointer">
                    <img src="{{asset('/frontend/images/logo.png')}}" alt="Logo" class="h-full relative">
                    <h1 class="text-white absolute max-[350px]:text-[.7rem] text-[.9rem] font-bold font-mono">G-Helper</h1>
                </a>
            @endif
            <div class=" col-span-4 max-[250px]:col-span-4 ml-auto flex gap-[.5rem]">
                @if(Auth::user()->profile_photo_path)
                    <button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation" data-dropdown-delay="500" class="relative ml-auto h-[2.5rem] w-[2.5rem] overflow-hidden bg-[#8ff3ee] p-[.1rem] align-center text-[#ff6760] rounded-[50%] text-[2rem] hover:bg-[#8dd3cc] selection:bg-[#8ff3ee] focus:ring-1 focus:outline-none focus:ring-blue-300 inline-flex dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-[#8ff3ee] dark:bg-gray-600" type="button"> 
                        <img src="/storage/{{Auth::user()->profile_photo_path}}" alt="" class="rounded-[50%] h-full w-full">                        
                    </button>
                @else
                    <button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation" data-dropdown-delay="500" class="relative ml-auto h-[2.5rem] w-[2.5rem] overflow-hidden bg-[#8ff3ee] p-[.5rem] align-center text-[#ff6760] rounded-[50%] text-[2rem] bg-[#8ff3ee] hover:bg-[#8dd3cc] selection:bg-[#8ff3ee] focus:ring-1 focus:outline-none focus:ring-blue-300 inline-flex dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-[#8ff3ee] dark:bg-gray-600" type="button"> 
                        <svg class="text-gray-400 rounded-[50%] h-[1.8rem] w-[1.8rem] min-xs:h-[2rem] min-xs:w-[2rem]" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" style="width:auto; height:auto;">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                @endif
                <div id="dropdownInformation" class="z-[3000] hidden bg-[#fff] divide-y divide-gray-100 rounded-lg shadow w-auto p-2 items-center text-start dark:bg-gray-700 dark:divide-gray-600 mr-2">
                    @auth
                        <div class="max-[280px]:px-1 max-[280px]:py-1 px-2 py-2 dark:text-white truncate select-none">
                            <h1 class="max-[280px]:text-[.6rem] max-sm:text-[.8rem] text-sm font-normal pb-1 text-gray-400">
                                {{ Auth::user()->name }}
                            </h1>
                        </div>
                        <div class="max-[280px]:px-1 max-[280px]:py-1 px-2 py-2 dark:text-white truncate">
                            <a href="{{ route('profile.show') }}" class="max-[280px]:text-[.7rem] max-sm:text-[.9rem] font-semibold pb-1 text-gray-600 hover:text-gray-900 hover:border-y-2 border-gray-100 rounded-[.3rem]">
                                {{ __('Profile') }}
                            </a>
                        </div>
                        <!-- Authentication -->
                        <div class="max-[280px]:px-1 max-[280px]:py-1 px-2 py-2 dark:text-white truncate">
                            <form  class="h-auto" method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <a href="{{ route('logout') }}" class="max-[280px]:text-[.7rem] max-sm:text-[.9rem] font-semibold pb-1 text-gray-600 hover:text-gray-900 hover:border-y-2 border-gray-100 rounded-[.3rem]" 
                                        @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        </div>
                    @else
                        <div class="max-[280px]:px-1 max-[280px]:py-1 px-2 py-2 dark:text-white truncate">
                            <a href="{{ route('login') }}" class="max-[280px]:text-[.7rem] max-sm:text-[.9rem] font-semibold pb-1 text-gray-600 hover:text-gray-900 hover:border-y-2 border-gray-100 rounded-[.3rem]">Log in</a>
                        </div>
                        <div class="max-[280px]:px-1 max-[280px]:py-1 px-2 py-2 dark:text-white truncate">
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="max-[280px]:text-[.7rem] max-sm:text-[.9rem] font-semibold pb-1 text-gray-600 hover:text-gray-900 hover:border-y-2 border-gray-100 rounded-[.3rem] focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        </div>
                    @endauth
                </div>       
            </div>
        </div>
    @endif
</header>

