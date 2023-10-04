<div class="relative"></div>
<header x-data="{ open: false }" class="absolute w-full bg-transparent grid max-lg:grid-rows-1 px-[1rem] sm:px-[3rem] min-[850px]:px-[4rem] py-[.4rem] max-[350px]:pb-[0.5rem] z-[1099]" id="header">
    @if (Route::has('login'))
        <div class="grid grid-rows-2 grid-flow-col">
            <a href="{{route('backend.home')}}" class="row-span-3 h-[3rem] w-[3rem] min-[350px]:h-[3rem] min-[350px]:w-[3rem] cursor-pointer">
                <img src="{{asset('/frontend/images/logo.png')}}" alt="Logo" class="h-full relative">
                <h1 class="text-white absolute max-[350px]:text-[.7rem] text-[.9rem] font-bold font-mono">G-Helper</h1>
            </a>
            <div class=" col-span-4 max-[250px]:col-span-4 ml-auto flex">
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
                        <div class="max-[280px]:px-1 max-[280px]:py-1 px-2 py-2 dark:text-white truncate">
                            <a href="{{ route('backend.verify') }}" class="max-[280px]:text-[.7rem] max-sm:text-[.9rem] font-semibold pb-1 text-gray-600 hover:text-gray-900 hover:border-y-2 border-gray-100 rounded-[.3rem]">
                                Verify
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
                            <a href="{{ route('backend.home') }}" class="block py-[.1rem] pl-3 pr-4 text-white text-[.5rem] min-[300px]:text-xs min-[450px]:text-sm sm:text-[1.2rem] lg:text-[1.5rem] font-bold rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-[#3574d3] lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent {{ (Route::currentRouteName() === 'backend.home') ? 'active' : '' }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('backend.about') }}" class="block py-[.1rem] pl-3 pr-4 text-white text-[.5rem] min-[300px]:text-xs min-[450px]:text-sm sm:text-[1.2rem] lg:text-[1.5rem] font-bold rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-[#3574d3] lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent {{ (Route::currentRouteName() === 'backend.about') ? 'active' : '' }}">About</a>
                        </li>
                        <li>
                            <a href="{{ route('backend.products') }}" class="block py-[.1rem] pl-3 pr-4 text-white text-[.5rem] min-[300px]:text-xs min-[450px]:text-sm sm:text-[1.2rem] lg:text-[1.5rem] font-bold rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-[#3574d3] lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent {{ ((route::currentRouteName() === 'backend.products') || (route::currentRouteName() === 'backend.products.list') || (route::currentRouteName() === 'backend.products.list.details')) ? 'active' : '' }}">Products</a>
                        </li>
                        <li>
                            <a href="{{ route('backend.services') }}" class="block py-[.1rem] pl-3 pr-4 text-white text-[.5rem] min-[300px]:text-xs min-[450px]:text-sm sm:text-[1.2rem] lg:text-[1.5rem] font-bold rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-[#3574d3] lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent {{ ((route::currentRouteName() === 'backend.services') || (route::currentRouteName() === 'backend.services.list') || (route::currentRouteName() === 'backend.services.list.details')) ? 'active' : '' }}">Services</a>
                        </li>
                        <li>
                            <a href="{{ route('backend.contact-us') }}" class="block py-[.1rem] pl-3 pr-4 text-white text-[.5rem] min-[300px]:text-xs min-[450px]:text-sm sm:text-[1.2rem] lg:text-[1.5rem] font-bold rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-[#3574d3] lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent {{ (Route::currentRouteName() === 'backend.contact-us') ? 'active' : '' }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="hidden lg:hidden w-full" id="navbar-default">
            <ul class="font-medium flex flex-col p-2 sm:p-4 lg:p-0 mt-2 border border-gray-100 lg:flex-row lg:space-x-8 lg:mt-0 lg:border-0 dark:bg-gray-800 lg:dark:bg-gray-900 dark:border-gray-700 leading-[1.5rem]">
                <li>
                    <a href="{{ route('backend.home') }}" class="block py-[.1rem] pl-3 pr-4 text-white text-xs min-[450px]:text-sm sm:text-[1.2rem] lg:text-[1.5rem] font-bold rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-[#3574d3] lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent {{ (Route::currentRouteName() === 'backend.home') ? 'active' : '' }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="block py-[.1rem] pl-3 pr-4 text-white text-xs min-[450px]:text-sm sm:text-[1.2rem] lg:text-[1.5rem] font-bold rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-[#3574d3] lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent {{ (Route::currentRouteName() === 'backend.about') ? 'active' : '' }}">About</a>
                </li>
                <li>
                    <a href="{{ route('products') }}" class="block py-[.1rem] pl-3 pr-4 text-white text-xs min-[450px]:text-sm sm:text-[1.2rem] lg:text-[1.5rem] font-bold rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-[#3574d3] lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent {{ ((route::currentRouteName() === 'backend.products') || (route::currentRouteName() === 'backend.products.list') || (route::currentRouteName() === 'backend.products.list.details')) ? 'active' : '' }}">Products</a>
                </li>
                <li>
                    <a href="{{ route('backend.services') }}" class="link block py-[.1rem] pl-3 pr-4 text-white text-xs min-[450px]:text-sm sm:text-[1.2rem] lg:text-[1.5rem] font-bold rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-[#3574d3] lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent {{ ((route::currentRouteName() === 'backend.services') || (route::currentRouteName() === 'backend.services.list') || (route::currentRouteName() === 'backend.services.list.details')) ? 'active' : '' }}">Services</a>
                </li>
                <li>
                    <a href="{{ route('contact-us') }}" class="block py-[.1rem] pl-3 pr-4 text-white text-xs min-[450px]:text-sm sm:text-[1.2rem] lg:text-[1.5rem] font-bold rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-[#3574d3] lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent {{ (Route::currentRouteName() === 'backend.contact-us') ? 'active' : '' }}">Contact Us</a>
                </li>
            </ul>
        </div>
    @endif
</header>

<style scoped>
.active{
    color: #3574d3;
}
</style>

<script setup>

function mblActivator(){
    var mblNav = document.getElementById('navbar-default');
    let mblNavHidder = mblNav.classList.contains("hidden");
    if(mblNavHidder){
        header.style.background = "#8efcff";
    }
    else{
        header.style.background = "";
    }

}
window.onscroll = function scrollFunction() {
    // To hide and display header
    var header = document.getElementById("header");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        header.style.top = "-200px";
        header.style.transition = "all .5s ease-in";
        if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 120) {
            header.style.top = "0px";
            header.style.width = "100%";
            header.style.background = "#8efcff";
            header.style.position = "fixed";
            header.style.transition = "all .5s ease-out";
        }
    }
    else {
        header.style.top = "0px";
        header.style.width = "100%";
        header.style.background = "";
        header.style.position = "absolute";
        header.style.transition = "all 1s ease-out";
    }
};
</script>