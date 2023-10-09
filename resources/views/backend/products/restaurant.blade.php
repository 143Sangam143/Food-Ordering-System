<div class="min-h-screen !bg-fixed !bg-no-repeat !bg-center !bg-cover pt-[8rem] pb-[3rem] space-y-[1.5rem]" style="background-image:url('/frontend/images/products/products-bg.png');">
    <h1 class="font-bold text-[2.2rem] text-white text-center">Restaurant</h1>
    @if(\Route::current()->getName() == 'backend.restaurants.update')
        <div class="grid grid-cols-1 items-center justify-center px-[5%] 2xl:px-[10vw]">
            <a  href="{{ route('backend.restaurants') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-fit px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                back
            </a>
        </div>
    @endif
    <div class="grid grid-cols-1 min-[350px]:grid-cols-2 xl:grid-cols-3 items-center justify-center px-[5%] 2xl:px-[10vw] gap-y-[1.5rem] scroll-smooth">
        @if(is_null($restaurants))
            <div class="flex items-center justify-center">
                <h1 class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    No restaurants found.
                </h1>
            </div>
        @else
            @if(\Route::current()->getName() == 'backend.restaurants.update')
            <div class="group [perspective:1000px]">
                <div class="relative transition-all duration-500 [transform-style:preserve-3d] :[transform:rotateY(180deg)]">
                    <form class="w-[8rem] sm:w-[13.8rem] md:w-[19.8rem] !bg-center !bg-cover overflow-hidden rounded-[.7rem] bg-white border-y-4 border-[#222] ease-linear duration-300 mx-auto" action="{{ route('backend.restaurants.update-confirm', $restaurants->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <hr class="z-10 h-[.1rem] bg-[#ccc]">
                        <div class="py-[1rem] font-medium font-mono text-center space-y-[.8rem]">
                            <h3 class="text-[1.2rem] sm:text-[1.5rem] text-[#222] text-start px-2">
                                <div class="relative z-0">
                                    <input type="text" id="restaurant_name" class="block capitalize text-center px-0 w-full text-[1.2rem] sm:text-[1.5rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" name="name" minlength="2" maxlength="50" required value="{{$restaurants->name}}" />
                                    <label for="restaurant_name" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-sm:w-[5rem] bg-white truncate">Restaurant Name</label>
                                </div>
                            </h3>
                            <h3 class="text-[1rem] sm:text-[1.3rem] text-[#a0a0a0] text-start px-2">
                                <div class="relative z-0">
                                    <input type="email" id="email" class="block text-center px-0 w-full text-[1.2rem] sm:text-[1.5rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" name="email" required value="{{$restaurants->email}}" />
                                    <label for="email" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-sm:w-[5rem] bg-white truncate">Email</label>
                                </div>
                            </h3>
                            <h3 class="text-[1rem] sm:text-[1.3rem] text-[#a0a0a0] text-start px-2">
                                <div class="relative z-0">
                                    <input type="phone" id="phone" class="block text-center px-0 w-full text-[1.2rem] sm:text-[1.5rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" name="phone" required value="{{$restaurants->phone}}" />
                                    <label for="phone" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-sm:w-[5rem] bg-white truncate">Phone</label>
                                </div>
                            </h3>
                            <h3 class="text-[1rem] sm:text-[1.3rem] text-[#a0a0a0] text-start px-2">
                                <div class="relative z-0">
                                    <input type="text" id="address" class="block text-center px-0 w-full text-[1.2rem] sm:text-[1.5rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" name="address" required value="{{$restaurants->address}}" />
                                    <label for="address" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-sm:w-[5rem] bg-white truncate">Address</label>
                                </div>
                            </h3>
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" value="Update restaurants" id="submit">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            @else
                @foreach($restaurants as $restaurant)
                    <div class="space-y-[.5rem] items-center flex flex-col">
                        <a href="{{ route('backend.products', $restaurant->id) }}" class="hover:scale-[1.02] group [perspective:1000px]">
                            <div class="relative transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
                                <div class="w-[8rem] sm:w-[13.8rem] md:w-[19.8rem] !bg-center !bg-cover overflow-hidden rounded-[.7rem] bg-gradient-to-r from-[#f9f9f9]  via-[#ececec] to-[#f8f8f8] border-y-4 border-[#222] ease-linear duration-300 mx-auto">
                                    <div class="picture overflow-hidden w-[8rem] sm:w-[13.8rem] md:w-[19.8rem] h-[6rem] sm:h-[13.8rem] md:h-[19.8rem]">
                                        @if($restaurant->profile_photo_path)
                                            <img src="/storage/{{ $restaurant->profile_photo_path }}" alt="" class="block p-1 rounded-[.7rem] w-full h-full object-contain">
                                        @else
                                            <svg class="text-gray-400 rounded-[50%] mx-auto w-max" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" style="height: -webkit-fill-available;">
                                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                            </svg>
                                        @endif
                                    </div>
                                    <hr class="z-10 h-[.1rem] bg-[#ccc]">
                                    <div class="py-[1rem] font-medium font-mono text-center px-5">
                                        <h3 class="text-[1.2rem] sm:text-[1.5rem] text-[#222] truncate first-letter:capitalize">{{ $restaurant->name }}</h3>
                                        <span class="block text-[1rem] sm:text-[1.3rem] text-[#a0a0a0] truncate">{{ $restaurant->email }}</span>
                                    </div>
                                </div>
                                <div class="absolute inset-0 h-full w-[8rem] sm:w-[13.8rem] md:w-[19.8rem] overflow-hidden rounded-[.7rem] border-y-4 border-[#222] ease-linear duration-300 mx-auto flex flex-col justify-center items-center text-white bg-[#666] [transform:rotateY(180deg)] [backface-visibility:hidden] px-[.8rem] text-center font-medium font-mono">
                                    <h3 class="text-[.7rem] sm:text-[1.2rem] lg:text-[1.5rem] text-[#a0a0a0] first-letter:capitalize">{{ $restaurant->name }}</h3>
                                    <span class="block text-[.6rem] sm:text-[1rem] lg:text-[1.3rem] text-[#222]">{{ $restaurant->email}}</span>
                                    <span class="block text-[.6rem] sm:text-[1rem] lg:text-[1.3rem] text-[#222] first-letter:capitalize">{{ $restaurant->phone}}</span>
                                    <span class="block text-[.6rem] sm:text-[1rem] lg:text-[1.3rem] text-[#222] first-letter:capitalize">{{ $restaurant->address}}</span>
                                </div>
                            </div>
                        </a>
                        <div class="flex max-md:flex-col justify-between max-md:space-y-[.2rem] w-[8rem] sm:w-[13.8rem] md:w-[19.8rem]">
                            <a href="{{ route('backend.restaurants.delete', $restaurant->id) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="return confirm('Are you sure about this?')">
                                    Delete
                            </a>
                            <a  href="{{ route('backend.restaurants.update', $restaurant->id) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Update
                            </a>
                        </div>
                    </div>
                @endforeach
            @endif
            
        @endif
    </div>
</div>

<script>
    var add = document.getElementById('add');
    var items = document.getElementById('items');
    var submit = document.getElementById('submit');
    
    function itemsTrigger()
    {
        add.style.display = "none";
        items.style.display = "block";
    }


    const inputImg = document.getElementById('imgInput')
    const img = document.getElementById('img')
    const imgUpload = document.getElementById('imgUploader');

    function getImg(event){

        const file = event.target.files[0]; // 0 = get the first file

        // console.log(file);
        if(!file)
        {
            imgUpload.style.display = 'block';
            img.style.display = 'none';
        }
        else
        {
            imgUpload.style.display = 'none';
            img.style.display = 'block';
        }

        let url = window.URL.createObjectURL(file);

        // console.log(url)

        img.src = url
    }

    inputImg?.addEventListener('change', getImg)
</script>