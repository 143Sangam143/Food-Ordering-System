<div class="min-h-screen !bg-fixed !bg-no-repeat !bg-center !bg-cover pt-[8rem] pb-[3rem] space-y-[1.5rem]" style="background-image:url('/frontend/images/products/products-bg.png');">
    <h1 class="font-bold text-[2.2rem] text-white text-center">Products</h1>
    <div class="grid grid-cols-1 items-center justify-center px-[5%] 2xl:px-[10vw]">
        <a  href="{{ route('backend.restaurants') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-fit px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            back
        </a>
    </div>
    <div class="grid grid-cols-1 min-[350px]:grid-cols-2 xl:grid-cols-3 items-center justify-center px-[5%] 2xl:px-[10vw] gap-y-[1.5rem] scroll-smooth">
        @if(is_null($products))
            <div class="group [perspective:1000px] hidden" id="items">
                <div class="relative transition-all duration-500 [transform-style:preserve-3d] :[transform:rotateY(180deg)]">
                    <form class="w-[8rem] sm:w-[13.8rem] md:w-[19.8rem] !bg-center !bg-cover overflow-hidden rounded-[.7rem] bg-white border-y-4 border-[#222] ease-linear duration-300 mx-auto" action="{{ route('backend.products.category.add') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="picture overflow-hidden w-[8rem] sm:w-[13.8rem] md:w-[19.8rem] h-[6rem] sm:h-[13.8rem] md:h-[19.8rem] ">
                            <img id='img' class="block hidden w-full h-full object-contain">
                            <div class="max-sm:p-[.5rem] p-[2rem] w-full h-full" id="imgUploader">
                                <label class="flex flex-col w-full h-full border-4 border-blue-200 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                    <div class="flex flex-col items-center justify-center pt-7">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-400 group-hover:text-gray-600"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                        </svg>
                                        <p class="pt-1 max-sm:hidden text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                            Attach a image</p>
                                    </div>
                                    <input type="file" name="image" id="imgInput" class="opacity-0" />
                                </label>
                            </div>
                        </div>
                        <hr class="z-10 h-[.1rem] bg-[#ccc]">
                        <div class="py-[1rem] font-medium font-mono text-center space-y-[.8rem]">
                            <h3 class="text-[1.2rem] sm:text-[1.5rem] text-[#222] text-start px-2">
                                <div class="relative z-0">
                                    <input type="text" id="floating_category" class="block capitalize text-center px-0 w-full text-[1.2rem] sm:text-[1.5rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" name="category" minlength="2" maxlength="30" required />
                                    <label for="floating_category" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-sm:w-[5rem] bg-white truncate">Category Names</label>
                                </div>
                            </h3>
                            <h3 class="text-[1rem] sm:text-[1.3rem] text-[#a0a0a0] text-start px-2">
                                <div class="relative z-0">
                                    <input type="text" id="floating_description" class="block text-center px-0 w-full text-[1.2rem] sm:text-[1.5rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" name="description" minlength="2" maxlength="60" required />
                                    <label for="floating_description" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-sm:w-[5rem] bg-white truncate">Description</label>
                                </div>
                            </h3>
                            <input type="email" name="restaurant_email" value="{{$emails}}" class="hidden">
                            <input type="text" name="restaurant_id" value="{{$restaurant_id}}" class="hidden">
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" value="Add category" id="submit">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        @else
            @if(\Route::current()->getName() == 'backend.products.category.update')
            <div class="group [perspective:1000px]">
                <div class="relative transition-all duration-500 [transform-style:preserve-3d] :[transform:rotateY(180deg)]">
                    <form class="w-[8rem] sm:w-[13.8rem] md:w-[19.8rem] !bg-center !bg-cover overflow-hidden rounded-[.7rem] bg-white border-y-4 border-[#222] ease-linear duration-300 mx-auto" action="{{ route('backend.products.category.update-confirm', $products->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="picture overflow-hidden w-[8rem] sm:w-[13.8rem] md:w-[19.8rem] h-[6rem] sm:h-[13.8rem] md:h-[19.8rem] ">
                            <img id='img' class="block hidden w-full h-full object-contain">
                            <div class="max-sm:p-[.5rem] p-[2rem] w-full h-full" id="imgUploader">
                                <label class="flex flex-col w-full h-full border-4 border-blue-200 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                    <div class="flex flex-col items-center justify-center pt-7">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-400 group-hover:text-gray-600"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                        </svg>
                                        <p class="pt-1 max-sm:hidden text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                            Attach a image</p>
                                    </div>
                                    <input type="file" name="image" value="{{$products->description}}" id="imgInput" class="opacity-0" />
                                </label>
                            </div>
                        </div>
                        <hr class="z-10 h-[.1rem] bg-[#ccc]">
                        <div class="py-[1rem] font-medium font-mono text-center space-y-[.8rem]">
                            <h3 class="text-[1.2rem] sm:text-[1.5rem] text-[#222] text-start px-2">
                                <div class="relative z-0">
                                    <input type="text" id="floating_category" class="block capitalize text-center px-0 w-full text-[1.2rem] sm:text-[1.5rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" name="category" minlength="2" maxlength="30" required value="{{$products->category}}" />
                                    <label for="floating_category" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-sm:w-[5rem] bg-white truncate">Category Names</label>
                                </div>
                            </h3>
                            <h3 class="text-[1rem] sm:text-[1.3rem] text-[#a0a0a0] text-start px-2">
                                <div class="relative z-0">
                                    <input type="text" id="floating_description" class="block text-center px-0 w-full text-[1.2rem] sm:text-[1.5rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" name="description" minlength="2" maxlength="60" required value="{{$products->description}}" />
                                    <label for="floating_description" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-sm:w-[5rem] bg-white truncate">Description</label>
                                </div>
                            </h3>
                            <input type="email" name="restaurant_email" value="{{$products->restaurant_email}}" class="hidden">
                            <input type="text" name="restaurant_id" value="{{$products->restaurant_id}}" class="hidden">
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" value="Update category" id="submit">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            @else
                @foreach($products as $product)
                    <div class="space-y-[.5rem] items-center flex flex-col">
                        <a href="{{ route('backend.products.list', $product->id) }}" class="hover:scale-[1.02] group [perspective:1000px]">
                            <div class="relative transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
                                <div class="w-[8rem] sm:w-[13.8rem] md:w-[19.8rem] !bg-center !bg-cover overflow-hidden rounded-[.7rem] bg-gradient-to-r from-[#f9f9f9]  via-[#ececec] to-[#f8f8f8] border-y-4 border-[#222] ease-linear duration-300 mx-auto">
                                    <div class="picture overflow-hidden w-[8rem] sm:w-[13.8rem] md:w-[19.8rem] h-[6rem] sm:h-[13.8rem] md:h-[19.8rem]">
                                        <img src="/images/backend/products/category/{{ $product->image }}" alt="" class="block w-full h-full object-contain py-1">
                                    </div>
                                    <hr class="z-10 h-[.1rem] bg-[#ccc]">
                                    <div class="py-[1rem] font-medium font-mono text-center px-5">
                                        <h3 class="text-[1.2rem] sm:text-[1.5rem] text-[#222] truncate first-letter:capitalize">{{ $product->category }}</h3>
                                        <span class="block text-[1rem] sm:text-[1.3rem] text-[#a0a0a0] first-letter:capitalize truncate">{{ $product->description }}</span>
                                    </div>
                                </div>
                                <div class="absolute inset-0 h-full w-[8rem] sm:w-[13.8rem] md:w-[19.8rem] overflow-hidden rounded-[.7rem] border-y-4 border-[#222] ease-linear duration-300 mx-auto flex flex-col justify-center items-center text-white bg-[#666] [transform:rotateY(180deg)] [backface-visibility:hidden] px-[.8rem] text-center font-medium font-mono">
                                    <h3 class="text-[.7rem] sm:text-[1.2rem] lg:text-[1.5rem] text-[#a0a0a0] first-letter:capitalize">{{ $product->category }}</h3>
                                    <span class="block text-[.6rem] sm:text-[1rem] lg:text-[1.3rem] text-[#222] first-letter:capitalize">{{ $product->description}}</span>
                                </div>
                            </div>
                        </a>
                        <div class="flex max-md:flex-col justify-between max-md:space-y-[.2rem] w-[8rem] sm:w-[13.8rem] md:w-[19.8rem]">
                            <a href="{{ route('backend.products.category.delete', $product->id) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="return confirm('Are you sure about this?')">
                                    Delete
                            </a>
                            <a  href="{{ route('backend.products.category.update', $product->id) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Update
                            </a>
                        </div>
                    </div>
                @endforeach
            @endif
            <div class="group [perspective:1000px] hidden" id="items">
                <div class="relative transition-all duration-500 [transform-style:preserve-3d] :[transform:rotateY(180deg)]">
                    <form class="w-[8rem] sm:w-[13.8rem] md:w-[19.8rem] !bg-center !bg-cover overflow-hidden rounded-[.7rem] bg-white border-y-4 border-[#222] ease-linear duration-300 mx-auto" action="{{ route('backend.products.category.add') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="picture overflow-hidden w-[8rem] sm:w-[13.8rem] md:w-[19.8rem] h-[6rem] sm:h-[13.8rem] md:h-[19.8rem] ">
                            <img id='img' class="block hidden w-full h-full object-contain">
                            <div class="max-sm:p-[.5rem] p-[2rem] w-full h-full" id="imgUploader">
                                <label class="flex flex-col w-full h-full border-4 border-blue-200 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                    <div class="flex flex-col items-center justify-center pt-7">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-400 group-hover:text-gray-600"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                        </svg>
                                        <p class="pt-1 max-sm:hidden text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                            Attach a image</p>
                                    </div>
                                    <input type="file" name="image" id="imgInput" class="opacity-0" />
                                </label>
                            </div>
                        </div>
                        <hr class="z-10 h-[.1rem] bg-[#ccc]">
                        <div class="py-[1rem] font-medium font-mono text-center space-y-[.8rem]">
                            <h3 class="text-[1.2rem] sm:text-[1.5rem] text-[#222] text-start px-2">
                                <div class="relative z-0">
                                    <input type="text" id="floating_category" class="block capitalize text-center px-0 w-full text-[1.2rem] sm:text-[1.5rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" name="category" minlength="2" maxlength="30" required />
                                    <label for="floating_category" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-sm:w-[5rem] bg-white truncate">Category Names</label>
                                </div>
                            </h3>
                            <h3 class="text-[1rem] sm:text-[1.3rem] text-[#a0a0a0] text-start px-2">
                                <div class="relative z-0">
                                    <input type="text" id="floating_description" class="block text-center px-0 w-full text-[1.2rem] sm:text-[1.5rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" name="description" minlength="2" maxlength="60" required />
                                    <label for="floating_description" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-sm:w-[5rem] bg-white truncate">Description</label>
                                </div>
                            </h3>
                            @if(!(\Route::current()->getName() == 'backend.products.category.update'))
                                <input type="email" name="restaurant_email" value="{{$emails}}" class="hidden">
                                <input type="text" name="restaurant_id" value="{{$restaurant_id}}" class="hidden">
                            @endif
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" value="Add category" id="submit">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        @endif
        <div class="flex justify-center items-center">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" id="add"  onclick="itemsTrigger()">
                Add
            </button>
        </div>
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