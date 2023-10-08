<header x-data="{ open: false }" class="absolute w-full bg-transparent grid max-lg:grid-rows-1 px-[1rem] sm:px-[3rem] min-[850px]:px-[4rem] py-[.4rem] max-[350px]:pb-[0.5rem] z-[1099]" id="header">
    @if (Route::has('login'))
        <div class="grid grid-rows-2 grid-flow-col">
            <a href="{{route('home')}}" class="row-span-3 h-[3rem] w-[3rem] min-[350px]:h-[3rem] min-[350px]:w-[3rem] cursor-pointer">
                <img src="{{asset('/frontend/images/logo.png')}}" alt="Logo" class="h-full relative">
                <h1 class="text-white absolute max-[350px]:text-[.7rem] text-[.9rem] font-bold font-mono">G-Helper</h1>
            </a>
            <div class=" col-span-4 max-[250px]:col-span-4 ml-auto flex gap-[.5rem]">
                <div class="ml-auto">
                    <input type="checkbox" id="search" class="hidden peer">
                    <div class="max-w-0 max-[250px]:h-[1.4rem] h-[1.8rem] min-[350px]:h-[2rem] flex relative max-[250px]:peer-checked:max-w-[6rem] peer-checked:max-w-[12rem] min-[450px]:peer-checked:max-w-[20rem] peer-checked:rounded-[2.5rem] peer-checked:mr-0 group">
                        <input type="text"
                            class="hidden w-full h-full max-[250px]:text-[.6rem] text-[.8rem] sm:text-[1rem] bg-transparent border-none outline-0 rounded-[2.5rem] peer-checked:group-[]:bg-[#fff] peer-checked:group-[]:pl-[.8rem]" id="search-field">
                        <label for="search"
                            class="absolute cursor-pointer top-0 right-0 p-[.3rem] bg-[#fceed5] align-center text-[#ff6760] rounded-[50%] text-[2rem] max-[250px]:h-[1.4rem] max-[250px]:w-[1.4rem] h-[1.8rem] w-[1.8rem] min-[350px]:h-[2rem] min-[350px]:w-[2rem] peer-checked:group-[]:bg-[#8ff3ee] peer-checked:group-[]:text-[#fff]">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" style="width:auto; height:auto;">
                                <path fill="#199be2"
                                    d="M35.983,32.448l-3.536,3.536l7.87,7.87c0.195,0.195,0.512,0.195,0.707,0l2.828-2.828	c0.195-0.195,0.195-0.512,0-0.707L35.983,32.448z" />
                                <radialGradient id="KGt2acGa95QyN2j07oBX6a" cx="20.024" cy="20.096" r="19.604"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset=".693" stop-color="#006185" />
                                    <stop offset=".921" stop-color="#35c1f1" />
                                </radialGradient>
                                <polygon fill="url(#KGt2acGa95QyN2j07oBX6a)"
                                    points="31.601,28.065 28.065,31.601 32.448,35.983 35.983,32.448" />
                                <linearGradient id="KGt2acGa95QyN2j07oBX6b" x1="8.911" x2="31.339" y1="8.911" y2="31.339"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#a3ffff" />
                                    <stop offset=".223" stop-color="#9dfbff" />
                                    <stop offset=".53" stop-color="#8bf1ff" />
                                    <stop offset=".885" stop-color="#6ee0ff" />
                                    <stop offset="1" stop-color="#63daff" />
                                </linearGradient>
                                <circle cx="20" cy="20" r="16" fill="url(#KGt2acGa95QyN2j07oBX6b)" />
                            </svg>
                        </label>
                    </div>
                </div>
                <button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation" data-dropdown-delay="500" class="relative ml-auto max-[250px]:h-[1.4rem] max-[250px]:w-[1.4rem] h-[1.8rem] w-[1.8rem] min-[350px]:h-[2rem] min-[350px]:w-[2rem] overflow-hidden bg-white p-[.3rem] align-center text-[#ff6760] rounded-[50%] text-[2rem] hover:bg-[#8ff3ee] selection:bg-[#8ff3ee] focus:ring-1 focus:outline-none focus:ring-blue-300 inline-flex dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-[#8ff3ee] dark:bg-gray-600" type="button"> 
                    <svg class="text-gray-400 rounded-[50%] h-[1.8rem] w-[1.8rem] min-[350px]:h-[2rem] min-[350px]:w-[2rem]" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" style="width:auto; height:auto;">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                    </svg>
                </button>
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
                                <a href="{{ route('register') }}" class="max-[280px]:text-[.7rem] max-sm:text-[.9rem] font-semibold pb-1 text-gray-600 hover:text-gray-900 hover:border-y-2 border-gray-100 rounded-[.3rem]">Register</a>
                            @endif
                        </div>
                    @endauth
                </div>       
            </div>
            <nav class="row-span-1 col-span-4 flex text-white max-lg:space-x-[1.5rem] max-lg:space-x-reverse lg:space-x-[1.5rem] lg:mr-[0rem] lg:ml-auto h-[2rem] min-[350px]:mt-1">
                <button data-collapse-toggle="navbar-default" type="button" class="bg-[#fff] ml-auto max-[350px]:justify-center max-[350px]:h-[1.8rem] max-[350px]:w-[1.8rem] inline-flex items-center p-[.2rem] min-[350px]:p-2 ml-3 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-[#8ff3ee] focus:outline-none focus:ring-1 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false" id="mbl-btn" @click="mblActivator()">
                    <svg class="w-4 h-4 min-[350px]:w-6 min-[350px]:h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                </button>
                <div class="hidden w-full lg:block lg:w-auto max-lg:order-first">
                    <ul class="font-medium flex flex-col p-4 lg:p-0 mt-4 border border-gray-100 lg:flex-row lg:space-x-8 lg:mt-0 lg:border-0 dark:bg-gray-800 lg:dark:bg-gray-900 dark:border-gray-700 leading-[1.5rem]">
                        <li>
                            <a href="{{ route('home') }}" class="block py-[.1rem] pl-3 pr-4 text-white text-[.5rem] min-[300px]:text-xs min-[450px]:text-sm sm:text-[1.2rem] lg:text-[1.5rem] font-bold rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-[#3574d3] lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent {{ (Route::currentRouteName() === 'home') ? 'active' : '' }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" class="block py-[.1rem] pl-3 pr-4 text-white text-[.5rem] min-[300px]:text-xs min-[450px]:text-sm sm:text-[1.2rem] lg:text-[1.5rem] font-bold rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-[#3574d3] lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent {{ (Route::currentRouteName() === 'about') ? 'active' : '' }}">About</a>
                        </li>
                        <li>
                            <a href="{{ route('restaurants') }}" class="block py-[.1rem] pl-3 pr-4 text-white text-[.5rem] min-[300px]:text-xs min-[450px]:text-sm sm:text-[1.2rem] lg:text-[1.5rem] font-bold rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-[#3574d3] lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent {{ (request()->segment(1) == 'restaurants') ? 'active' : '' }}">Restaurant</a>
                        </li>
                        <li>
                            <a href="{{ route('services') }}" class="block py-[.1rem] pl-3 pr-4 text-white text-[.5rem] min-[300px]:text-xs min-[450px]:text-sm sm:text-[1.2rem] lg:text-[1.5rem] font-bold rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-[#3574d3] lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent {{ ((route::currentRouteName() === 'services') || (route::currentRouteName() === 'services.list') || (route::currentRouteName() === 'services.list.details')) ? 'active' : '' }}">Services</a>
                        </li>
                        <li>
                            <a href="{{ route('contact-us') }}" class="block py-[.1rem] pl-3 pr-4 text-white text-[.5rem] min-[300px]:text-xs min-[450px]:text-sm sm:text-[1.2rem] lg:text-[1.5rem] font-bold rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-[#3574d3] lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent {{ (Route::currentRouteName() === 'contact-us') ? 'active' : '' }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="hidden lg:hidden w-full" id="navbar-default">
            <ul class="font-medium flex flex-col p-2 sm:p-4 lg:p-0 mt-2 border border-gray-100 lg:flex-row lg:space-x-8 lg:mt-0 lg:border-0 dark:bg-gray-800 lg:dark:bg-gray-900 dark:border-gray-700 leading-[1.5rem]">
                <li>
                    <a href="{{ route('home') }}" class="block py-[.1rem] pl-3 pr-4 text-white text-xs min-[450px]:text-sm sm:text-[1.2rem] lg:text-[1.5rem] font-bold rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-[#3574d3] lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent {{ (Route::currentRouteName() === 'home') ? 'active' : '' }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="block py-[.1rem] pl-3 pr-4 text-white text-xs min-[450px]:text-sm sm:text-[1.2rem] lg:text-[1.5rem] font-bold rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-[#3574d3] lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent {{ (Route::currentRouteName() === 'about') ? 'active' : '' }}">About</a>
                </li>
                <li>
                    <a href="{{ route('restaurants') }}" class="block py-[.1rem] pl-3 pr-4 text-white text-[.5rem] min-[300px]:text-xs min-[450px]:text-sm sm:text-[1.2rem] lg:text-[1.5rem] font-bold rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-[#3574d3] lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent {{ (request()->segment(1) == 'restaurants') ? 'active' : '' }}">Restaurant</a>
                </li>
                <li>
                    <a href="{{ route('services') }}" class="link block py-[.1rem] pl-3 pr-4 text-white text-xs min-[450px]:text-sm sm:text-[1.2rem] lg:text-[1.5rem] font-bold rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-[#3574d3] lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent {{ ((route::currentRouteName() === 'services') || (route::currentRouteName() === 'services.list') || (route::currentRouteName() === 'services.list.details')) ? 'active' : '' }}">Services</a>
                </li>
                <li>
                    <a href="{{ route('contact-us') }}" class="block py-[.1rem] pl-3 pr-4 text-white text-xs min-[450px]:text-sm sm:text-[1.2rem] lg:text-[1.5rem] font-bold rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-[#3574d3] lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent {{ (Route::currentRouteName() === 'contact-us') ? 'active' : '' }}">Contact Us</a>
                </li>
            </ul>
        </div>
    @endif
</header>

