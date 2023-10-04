<head>
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<div class="bg-[#ccc] p-5">
    <div class="ml-3 relative">
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <span class="inline-flex rounded-md">
                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                        {{ Auth::user()->name }}

                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                </span>
            </x-slot>

            <x-slot name="content" style="display:block;">
                <!-- Account Management -->
                <div class="block px-4 py-2 text-xs text-gray-400">
                    {{ Auth::user()->name }}
                </div>

                <x-dropdown-link href="{{ route('profile.show') }}">
                    {{ __('Profile') }}
                </x-dropdown-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-dropdown-link href="{{ route('api-tokens.index') }}">
                        {{ __('API Tokens') }}
                    </x-dropdown-link>
                @endif

                <div class="border-t border-gray-200"></div>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-dropdown-link href="{{ route('logout') }}"
                                @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>
    </div>
</div>
<div class="p-5"></div>

<div class="bg-[#ccc] p-5">
    <div class="ml-3 relative">
        <button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation" data-dropdown-delay="500" class="relative ml-auto max-[250px]:h-[1.4rem] max-[250px]:w-[1.4rem] h-[1.8rem] w-[1.8rem] min-[350px]:h-[2rem] min-[350px]:w-[2rem] overflow-hidden bg-white p-[.3rem] align-center text-[#ff6760] rounded-[50%] text-[2rem] hover:bg-[#8ff3ee] selection:bg-[#8ff3ee] focus:ring-1 focus:outline-none focus:ring-blue-300 inline-flex dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-[#8ff3ee] dark:bg-gray-600" type="button"> 
            <svg class="text-gray-400 rounded-[50%] h-[1.8rem] w-[1.8rem] min-[350px]:h-[2rem] min-[350px]:w-[2rem]" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" style="width:auto; height:auto;">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
            </svg>
        </button>
        <div id="dropdownInformation" class="z-[3000] hidden bg-[#8efcff] divide-y divide-gray-100 rounded-lg shadow w-auto p-2 items-center text-start dark:bg-gray-700 dark:divide-gray-600 mr-2">
            <div class="text-xs text-gray-400 px-2 py-2 dark:text-white truncate select-none">
                {{ Auth::user()->name }}
            </div>
            <div class="px-2 py-2 dark:text-white truncate">
                <a href="{{ route('profile.show') }}" class="max-[280px]:text-[.9rem] font-semibold pb-1 text-gray-600 hover:text-gray-900 hover:border-y-2 border-white rounded-[.3rem] focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                    {{ __('Profile') }}
                </a>
            </div>
            <!-- Authentication -->
            <div class="px-2 py-2 dark:text-white truncate">
                <form  class="h-[.3rem]" method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <a href="{{ route('logout') }}" class="max-[280px]:text-[.9rem] font-semibold pb-1 text-gray-600 hover:text-gray-900 hover:border-y-2 border-white rounded-[.3rem] focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" 
                            @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
            </div>
        </div>     
    </div>
</div>