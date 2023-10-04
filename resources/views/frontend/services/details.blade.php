<div class="pt-[5rem] bg-black"></div>
<div class="bg- px-0.5 sm:px-4  xl:pl-[6.7rem] xl:pr-[5.8rem] py-2.5 pb-[1.5rem]">
    <div class="w-full m-auto">
        <h2 class="mb-5 text-center sm:text-start text-[1.8rem] sm:text-[2rem] font-bold  dark:text-white text-gray-900 capitalize">Police Report</h2>
        <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-[#444444] dark:bg-gray-800 text-white dark:text-white">
            <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 space-x-0 sm:space-x-2">
                <h2 id="accordion-color-heading-1" class="bg-[#f2f2f2] w-fit rounded-md">
                    <button type="button" class="flex btn-controller btn-active items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md  dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1">
                        <span>Form</span>
                        <svg data-accordion-icon class="w-6 h-6 svg-rotate shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <h2 id="accordion-color-heading-2" class="bg-[#f2f2f2] w-fit rounded-md">
                    <button type="button" class="flex btn-controller items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md  dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-2" aria-expanded="false" aria-controls="accordion-color-body-2">
                        <span>View application</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0 svg-rotate" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
            </div>
            <div>
                <div id="accordion-color-body-1" class="hidden py-[3rem]" aria-labelledby="accordion-color-heading-1">
                    <!-- <div class="m-auto justify-items-center sm:justify-items-start grid grid-cols-1"> -->
                        <div class="form-container m-auto justify-items-center sm:justify-items-start grid grid-cols-1 bg-white">
                            <form  action="{{ route('services.list.details.add-report', $listCategory) }}" method="POST" enctype="multipart/form-data" class="form w-full my-0 mx-auto border-[1px] border-[#ccc] rounded-[.35rem] p-[1.5rem]">
                                @csrf
                                <h1 class="text-center">Police Report form</h1>
                                <div class="progressbar relative flex justify-between mt-[2rem] mb-[4rem] before:content-[''] before:absolute before:top-1/2 before:translate-y-[-50%] before:h-[4px] before:w-full before:bg-[#dcdcdc] before:z-[1]">
                                    <div class="progress" id="progress"></div>
                                    <div class="progress-step w-[1.8875rem] h-[1.8875rem] sm:w-[2.1875rem] sm:h-[2.1875rem] bg-[#dcdcdc] rounded-[50%] flex justify-center items-center text-[.9rem] sm:text-[1.3rem] after:content-[attr(data-title)] after:absolute after:top-[3rem] after:text-[.65rem] sm:after:text-[.85rem] text-[#666] z-[10] progress-step-active"  data-title="Personal"><i class="icon uil uil-user"></i></div>
                                    <div class="progress-step w-[1.8875rem] h-[1.8875rem] sm:w-[2.1875rem] sm:h-[2.1875rem] bg-[#dcdcdc] rounded-[50%] flex justify-center items-center text-[.9rem] sm:text-[1.3rem] after:content-[attr(data-title)] after:absolute after:top-[3rem] after:text-[.65rem] sm:after:text-[.85rem] text-[#666] z-[10]" data-title="Address"><i class="icon uil uil-map-marker"></i></div>
                                    <div class="progress-step w-[1.8875rem] h-[1.8875rem] sm:w-[2.1875rem] sm:h-[2.1875rem] bg-[#dcdcdc] rounded-[50%] flex justify-center items-center text-[.9rem] sm:text-[1.3rem] after:content-[attr(data-title)] after:absolute after:top-[3rem] after:text-[.65rem] sm:after:text-[.85rem] text-[#666] z-[10]" data-title="Documents"><i class="icon uil uil-clipboard-notes"></i></div>
                                    <div class="progress-step w-[1.8875rem] h-[1.8875rem] sm:w-[2.1875rem] sm:h-[2.1875rem] bg-[#dcdcdc] rounded-[50%] flex justify-center items-center text-[.9rem] sm:text-[1.3rem] after:content-[attr(data-title)] after:absolute after:top-[3rem] after:text-[.65rem] sm:after:text-[.85rem] text-[#666] z-[10]" data-title="Confirm"><i class="icon uil uil-capture"></i></div>
                                </div>
                                <!-- form -1  -->
                                <div class="form-step hidden form-step-active">
                                    <div class="space-y-[2rem]">
                                        <div class="space-y-[2rem]">
                                            <div class="grid grid-cols-1 gap-[2rem] sm:gap-0 sm:grid-cols-2">
                                                <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start px-2">
                                                    <div class="relative z-0">
                                                        <input type="text" id="first_name" class="block form-one capitalize text-center px-0 w-full text-[.9rem] sm:text-[1.1rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" name="first_name" minlength="2" maxlength="50" required />
                                                        <label for="first_name" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-[250px]:w-[7rem] bg-white truncate">First Name</label>
                                                    </div>
                                                </h3>
                                                <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start px-2">
                                                    <div class="relative z-0">
                                                        <input type="text" id="last_name" class="block form-one capitalize text-center px-0 w-full text-[.9rem] sm:text-[1.1rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" name="last_name" minlength="2" maxlength="50" />
                                                        <label for="last_name" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-[250px]:w-[7rem] bg-white truncate">Last Name</label>
                                                    </div>
                                                </h3>
                                            </div>
                                            <div class="grid grid-cols-1 gap-[2rem] sm:gap-0 sm:grid-cols-2">
                                                <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start px-2">
                                                    <div class="relative z-0">
                                                        <input type="text" id="father_first_name" class="block form-one capitalize text-center px-0 w-full text-[.9rem] sm:text-[1.1rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" name="father_first_name" minlength="2" maxlength="50" />
                                                        <label for="father_first_name" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-[250px]:w-[7rem] bg-white truncate">Father's First Name</label>
                                                    </div>
                                                </h3>
                                                <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start px-2">
                                                    <div class="relative z-0">
                                                        <input type="text" id="father_last_name" class="block form-one capitalize text-center px-0 w-full text-[.9rem] sm:text-[1.1rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" name="father_last_name" minlength="2" maxlength="50" />
                                                        <label for="father_last_name" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-[250px]:w-[7rem] bg-white truncate">Father's Last Name</label>
                                                    </div>
                                                </h3>
                                            </div>
                                            <div class="grid grid-cols-1 gap-[2rem] sm:gap-0 sm:grid-cols-2">
                                                <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start px-2">
                                                    <div class="relative z-0">
                                                        <input type="text" id="mother_first_name" class="block form-one capitalize text-center px-0 w-full text-[.9rem] sm:text-[1.1rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" name="mother_first_name" minlength="2" maxlength="50" />
                                                        <label for="mother_first_name" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-[250px]:w-[7rem] bg-white truncate">Mother's First Name</label>
                                                    </div>
                                                </h3>
                                                <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start px-2">
                                                    <div class="relative z-0">
                                                        <input type="text" id="mother_last_name" class="block form-one capitalize text-center px-0 w-full text-[.9rem] sm:text-[1.1rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" name="mother_last_name" minlength="2" maxlength="50" />
                                                        <label for="mother_last_name" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-[250px]:w-[7rem] bg-white truncate">Mother's Last Name</label>
                                                    </div>
                                                </h3>
                                            </div>
                                            <div class="grid grid-cols-1 gap-[2rem] sm:gap-0 sm:grid-cols-2 lg:grid-cols-3 items-center">
                                                <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start px-2">
                                                    <div class="relative z-0">
                                                        <input type="date" id="date_of_birth_bs" class="block max-[400]:col-span-1 form-one capitalize text-center px-0 w-full text-[.9rem] sm:text-[1.1rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer sm:mb-[2rem] lg:mb-0" name="date_of_birth_bs" />
                                                        <label for="date_of_birth_bs" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 bg-white truncate">DOB(B.S)</label>
                                                    </div>
                                                </h3>
                                                <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start px-2">
                                                    <div class="relative z-0">
                                                        <input type="date" id="date_of_birth_ad" class="block form-one capitalize text-center px-0 w-full text-[.9rem] sm:text-[1.1rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer sm:mb-[2rem] lg:mb-0" name="date_of_birth_ad" />
                                                        <label for="date_of_birth_ad" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 bg-white truncate">DOB(A.D)</label>
                                                    </div>
                                                </h3>
                                                <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start px-2 min-[400px]:pt-[2rem] lg:pt-0">
                                                    <div class="relative z-0">
                                                        <input type="email" id="email" class="block form-one text-center px-0 w-full text-[.9rem] sm:text-[1.1rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" name="email" />
                                                        <label for="email" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 bg-white truncate">Email</label>
                                                    </div>
                                                </h3>
                                            </div>
                                            <div class="grid grid-cols-1 max-[400px]:space-y-[2rem] min-[400px]:grid-cols-2 lg:grid-cols-3 items-center">
                                                    <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start px-2">
                                                    <div class="relative z-0 flex flex-col sm:flex-row gap-[1rem]">
                                                        
                                                        <div class="flex items-center gap-[.2rem]"><input type="radio" name="gender" value="male"> Male</div>
                                                        <div class="flex items-center gap-[.2rem]"><input type="radio" name="gender" value="female"> Female</div>
                                                        <div class="flex items-center gap-[.2rem]"><input type="radio" name="gender" value="others"> Others</div>
                                                        <label for="gender" class="absolute text-[1rem] text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-1 z-10 origin-[0] left-0 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-[250px]:w-[7rem] truncate">Gender</label>
                                                    </div>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="">
                                            <button type="button" class="btn-next ml-auto flex bg-[#444444] text-white w-fit rounded-md items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md  dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-800">
                                                <span class="">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- form -2  -->
                                <div class="form-step hidden">
                                    <div class="space-y-[2rem]">
                                        <div class="space-y-[2rem]">
                                            <div class="grid grid-cols-1 gap-[2rem] sm:gap-0 sm:grid-cols-2">
                                                <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start px-2">
                                                    <div class="relative z-0">
                                                        <input type="text" id="temporary_address" class="block form-one capitalize text-center px-0 w-full text-[.9rem] sm:text-[1.1rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" name="temporary_address" />
                                                        <label for="temporary_address" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-[250px]:w-[7rem] bg-white truncate">Temporary Address</label>
                                                    </div>
                                                </h3>
                                                <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start px-2">
                                                    <div class="relative z-0">
                                                        <input type="text" id="permanent_address" class="block form-one capitalize text-center px-0 w-full text-[.9rem] sm:text-[1.1rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" name="permanent_address" />
                                                        <label for="permanent_address" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-[250px]:w-[7rem] bg-white truncate">Permanent Address</label>
                                                    </div>
                                                </h3>
                                            </div>
                                            <div class="grid grid-cols-1 gap-[2rem] sm:gap-0 sm:grid-cols-2">
                                                <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start px-2">
                                                    <div class="relative z-0">
                                                        <input type="number" id="citizen_number" class="block form-one capitalize text-center px-0 w-full text-[.9rem] sm:text-[1.1rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" name="citizen_number" />
                                                        <label for="citizen_number" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-[250px]:w-[7rem] bg-white truncate">Citizen No.</label>
                                                    </div>
                                                </h3>
                                                <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start px-2">
                                                    <div class="relative z-0">
                                                        <input type="text" id="citizen_issued_location" class="block form-one capitalize text-center px-0 w-full text-[.9rem] sm:text-[1.1rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" placeholder="District only" name="citizen_issued_location" minlength="2" maxlength="50" />
                                                        <label for="citizen_issued_location" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-[250px]:w-[7rem] bg-white truncate">Citizen Issued From</label>
                                                    </div>
                                                </h3>
                                            </div>
                                            <div class="grid grid-cols-1 gap-[2rem] sm:gap-0 sm:grid-cols-2">
                                                <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start px-2">
                                                    <div class="relative z-0">
                                                        <input type="number" id="passport_number" class="block form-one capitalize text-center px-0 w-full text-[.9rem] sm:text-[1.1rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" name="passport_number" />
                                                        <label for="passport_number" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-[250px]:w-[7rem] bg-white truncate">Passport No.</label>
                                                    </div>
                                                </h3>
                                                <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start px-2">
                                                    <div class="relative z-0">
                                                        <input type="text" id="passport_issued_location" class="block form-one capitalize text-center px-0 w-full text-[.9rem] sm:text-[1.1rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" placeholder="District only" name="passport_issued_location" minlength="2" maxlength="50" />
                                                        <label for="passport_issued_location" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-[250px]:w-[7rem] bg-white truncate">Passport Issued From</label>
                                                    </div>
                                                </h3>
                                            </div>
                                            <div class="grid grid-cols-1 gap-[2rem] sm:gap-0 sm:grid-cols-2">
                                                <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start px-2">
                                                    <div class="relative z-0">
                                                        <input type="number" id="national_id_number" class="block form-one capitalize text-center px-0 w-full text-[.9rem] sm:text-[1.1rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" name="national_id_number" />
                                                        <label for="national_id_number" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-[250px]:w-[7rem] bg-white truncate">National Id No.</label>
                                                    </div>
                                                </h3>
                                                <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start px-2">
                                                    <div class="relative z-0">
                                                        <input type="text" id="national_id_issued_location" class="block form-one capitalize text-center px-0 w-full text-[.9rem] sm:text-[1.1rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" placeholder="District only" name="national_id_issued_location" minlength="2" maxlength="50" />
                                                        <label for="national_id_issued_location" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-[250px]:w-[7rem] bg-white truncate">National Id Issued From</label>
                                                    </div>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="flex w-full">
                                            <button type="button" class="btn-prev flex bg-[#444444] text-white w-fit rounded-md items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md  dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-800">
                                                <span class="">Prev</span>
                                            </button>
                                            <button type="button" class="btn-next ml-auto flex bg-[#444444] text-white w-fit rounded-md items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md  dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-800">
                                                <span class="">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- form -3  -->
                                <div class="form-step hidden">
                                    <div class="space-y-[2rem]">
                                        <div class="space-y-[2rem]">
                                            <div class="grid grid-cols-1 gap-[2rem] sm:gap-0 sm:grid-cols-2">
                                                <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start px-2">
                                                    <div class="max-sm:p-[.5rem] p-[0rem] w-full h-[5rem] relative border-4 border-blue-200 border-dashed hover:bg-gray-100 hover:border-gray-300 items-center">
                                                        
                                                            <div class="flex flex-col items-center justify-center pt-3 sm:pt-5">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-400 group-hover:text-gray-600"
                                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                                                </svg>
                                                            </div>
                                                            <input type="file" id="user_image" name="user_image" class="opacity-0 " />
                                                        <label for="user_image" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-[250px]:w-[7rem] bg-white truncate">
                                                            User Image
                                                        </label>
                                                    </div>
                                                </h3>
                                                <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start px-2">
                                                    <div class="max-sm:p-[.5rem] p-[0rem] w-full h-[5rem] relative border-4 border-blue-200 border-dashed hover:bg-gray-100 hover:border-gray-300 items-center">
                                                        
                                                            <div class="flex flex-col items-center justify-center pt-3 sm:pt-5">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-400 group-hover:text-gray-600"
                                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                                                </svg>
                                                            </div>
                                                            <input type="file" id="citizen_card_image" name="citizen_card_image" class="opacity-0" />
                                                        <label for="citizen_card_image" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-[250px]:w-[7rem] bg-white truncate">
                                                            Citizen Card Image
                                                        </label>
                                                    </div>
                                                </h3>
                                            </div>
                                            <div class="grid grid-cols-1 gap-[2rem] sm:gap-0 sm:grid-cols-2">
                                                <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start px-2">
                                                    <div class="max-sm:p-[.5rem] p-[0rem] w-full h-[5rem] relative border-4 border-blue-200 border-dashed hover:bg-gray-100 hover:border-gray-300 items-center">
                                                        
                                                            <div class="flex flex-col items-center justify-center pt-3 sm:pt-5">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-400 group-hover:text-gray-600"
                                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                                                </svg>
                                                            </div>
                                                            <input type="file" id="passport_card_image" name="passport_card_image" class="opacity-0" />
                                                        <label for="passport_card_image" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-[250px]:w-[7rem] bg-white truncate">
                                                            Passport Card Image
                                                        </label>
                                                    </div>
                                                </h3>
                                                <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start px-2">
                                                    <div class="max-sm:p-[.5rem] p-[0rem] w-full h-[5rem] relative border-4 border-blue-200 border-dashed hover:bg-gray-100 hover:border-gray-300 items-center">
                                                        
                                                            <div class="flex flex-col items-center justify-center pt-3 sm:pt-5">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-400 group-hover:text-gray-600"
                                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                                                </svg>
                                                            </div>
                                                            <input type="file" id="national_id_image" name="national_id_image" class="opacity-0" />
                                                        <label for="national_id_image" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-[250px]:w-[7rem] bg-white truncate">
                                                            National Id Image
                                                        </label>
                                                    </div>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="flex w-full">
                                            <button type="button" class="btn-prev flex bg-[#444444] text-white w-fit rounded-md items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md  dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-800">
                                                <span class="">Prev</span>
                                            </button>
                                            <button type="button" class="btn-next ml-auto flex bg-[#444444] text-white w-fit rounded-md items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md  dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-800">
                                                <span class="">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- form -4  -->
                                <div class="form-step hidden">
                                    <div class="flex w-full">
                                        <input type="email" class="hidden" name="user_email" value="{{$userInfo->email}}">
                                        
                                        <input type="text" class="hidden" name="list_category" value="{{$listCategory}}">
                                        <button type="button" class="btn-prev flex bg-[#444444] text-white w-fit rounded-md items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md  dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-800">
                                            <span class="">Prev</span>
                                        </button>
                                        <button type="submit" value="submit" class="btn ml-auto flex bg-[#444444] text-white w-fit rounded-md items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md  dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-800" value="enter police form" id="submit">
                                                <span class="">Submit</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    <!-- </div> -->
                </div>
                <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
                    @if(!$details)
                        <div class="py-[5rem]">
                            <div class="h-screen bg-gray-100 flex items-center justify-center">
                                <div class="flex h-full w-full items-center justify-center">
                                    <h1 class="p-5 bg-white shadow-lg">No data found under your account in the database.</h1>
                                </div>
                                
                            </div>
                        </div>
                    @endif
                    @foreach($details as $detail)
                        @if($detail->status == 'unchecked')
                            <div class="py-[5rem]">
                                <div class="h-screen bg-gray-100 flex items-center justify-center">
                                    <div class="flex h-full w-full items-center justify-center">
                                        <h1 class="p-5 bg-white shadow-lg">Your data is being verified</h1>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="py-[1rem] px-[6rem]">
                                <div class="relative z-[6] pr-[.7rem] pb-[.2rem] space-y-[.5rem]">
                                    <div class="head w-full space-y-[8rem] text-[#d01329]">
                                        <div class="flex justify-between items-start">
                                            <div class="h-[7rem] w-[6.5rem] pt-[2rem] z-[10]">
                                                <img src="{{ asset('frontend/images/nepal_logo.png') }}" class="h-full w-full">
                                            </div>
                                            <div class="text-[#d01329] text-center">
                                                <h1 class="text-[.9rem]">Government of Nepal</h1>
                                                <h1 class="uppercase font-bold text-[1.5rem]">Ministry of Home Affairs</h1>
                                                <h1 class="uppercase font-bold text-[1.94rem]">Police Headquarters</h1>
                                                <h1 class="font-bold text-[1.3rem]">Crime Investigation Department</h1>
                                                <p class="text-[.9rem]">Post Box: 407</p>
                                                <p class="text-[.9rem]">Kathmandu, Nepal</p>
                                                <p class="font-bold">(Character Verification Section)</p>
                                            </div>
                                            <div class="h-[7rem] w-[6rem] pt-[2rem] z-[10]">
                                                <img src="{{ asset('frontend/images/qr.png') }}" class="h-full w-full">
                                            </div>
                                        </div>
                                        <div class="flex justify-between w-full items-center px-[3rem]">
                                            <div class="flex gap-[3rem] text-[.9rem]">
                                                <h1>Dispact No:-</h1>
                                                <p class="text-black font-bold">{{$detail->dispatch}}</p>
                                            </div>
                                            
                                            <div class="text-[.9rem]">
                                                <h1>Phone:- 00977-1-4412783</h1>
                                                <h1>Fax:- 00977-1-4412602</h1>
                                                <h1>Email:- chalchalan@nepalpolice.gov.np</h1>
                                                <div class="flex gap-[.3rem]">
                                                    <h1>Date:- </h1>
                                                    <p class="text-black border-b-2 border-dotted border-[#d01329]">{{$detail->checked_date}}</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content w-full">
                                        <h1 class="text-center text-[#d01329] text-[1.8rem] underline italic">Police Clearance Certificate</h1>
                                        <div class="space-y-[2.5rem]">
                                            <div>
                                                <div class="flex justify-between">
                                                    <div class="flex gap-[1.6rem]">
                                                        <div class="flex flex-col text-[.9rem] space-y-[.2rem]">
                                                            <h1 class="font-bold">Full Name:</h1>
                                                            <h1 class="font-bold">Father Name:</h1>
                                                            <h1 class="font-bold">Address:</h1>
                                                            <h1 class="font-bold">Date of birth:</h1>
                                                            <h1 class="font-bold">Gender:</h1>
                                                            <h1 class="font-bold">Nationality:</h1>
                                                            
                                                        </div>
                                                        <div class="flex flex-col text-[.9rem] space-y-[.2rem]">
                                                            <p class="capitalize">{{$detail->first_name}} {{$detail->last_name}}</p>
                                                            <p class="capitalize">{{$detail->father_first_name}} {{$detail->father_last_name}}</p>
                                                            <p class="capitalize">{{$detail->permanent_address}}</p>
                                                            <p>{{$detail->date_of_birth_bs}}</p>
                                                            <p class="capitalize">{{$detail->gender}}</p>
                                                            <p class="capitalize">Nepali</p>
                                                        </div>
                                                    </div>
                                                    <div class="z-[10] h-[7rem] w-[7rem]">
                                                        <img src="/images/frontend/documents/{{$detail->user_image}}" class="h-full w-full" alt="">
                                                    </div>
                                                </div>
                                                <div class="flex justify-between">
                                                    <div class="flex gap-[1rem]">
                                                        <div class="flex flex-col text-[.9rem] space-y-[.2rem]">
                                                            <h1 class="font-bold">Citizenship No:</h1>
                                                            <h1 class="font-bold">Passport No:</h1>
                                                            
                                                        </div>
                                                        <div class="flex flex-col text-[.9rem] space-y-[.2rem]">
                                                            <p>{{$detail->citizen_number}}</p>
                                                            <p>{{$detail->passport_number}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="flex gap-[1rem]">
                                                        <div class="flex flex-col text-[.9rem] space-y-[.2rem]">
                                                            <h1 class="font-bold">Citizenship Issued From:</h1>
                                                            <h1 class="font-bold">Passport Issued From:</h1>
                                                            
                                                        </div>
                                                        <div class="flex flex-col text-[.9rem] space-y-[.2rem] w-[8rem]">
                                                            <p class="capitalize">{{$detail->citizen_issued_location}}</p>
                                                            <p class="capitalize">{{$detail->passport_issued_location}}</p>
                                                        </div>
                                                    </div>
                                                </div>                            
                                            </div>
                                            <div class="w-full text-[.9rem]">
                                                <h1 class="font-bold">Status:</h1>
                                                <p>{{$detail->remarks}}</p>
                                            </div>
                                            <div class="flex flex-col ml-auto items-end w-full text-[.8rem] ">
                                                <div class="w-fit border-t-2 border-dotted border-black px-[3rem] text-center">
                                                    <h1>{{$detail->v_name}}</h1>
                                                    <p>({{$detail->v_post}})</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="h-[.1rem] bg-[#d01329] outline-none border-none w-full"> 
                                    <div class="foot w-full text-[#d01329]">
                                        <h1 class="underline text-[.9rem] font-bold italic">Note:</h1>
                                        <ul class="list-disc text-[.7rem] pl-[1rem]">
                                            <li><p>To verify this document, visit www.opcr.nepalpolice.gove.np /#/crossVerify or contact PHQ, Character Verification Section.</p></li>
                                            <li><p>Any erasure or amendment in this certificate makes it invalid.</p></li>
                                            <li><p>If the details mentioned in this Certificate is forged, the person conduction such forgery shall be liable up to seven years of imprisonment and fine up to seventy thousand rupees pursuant to the Nepal Penal Code 2074(2017)</p></li>
                                        </ul>
                                    </div>
                                    <div class='watermarked' data-watermark='Nepal Police' ></div>
                                </div>
                                <!-- <div class="pt-4">
                                    <a href="{{ route('services.list.details.download' ,  $detail->id) }}" class="mx-auto flex bg-[#444444] text-white w-fit rounded-md items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md  dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-800">
                                        <span class="">Downlod</span>
                                    </a>
                                </div> -->
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .progress{
        content: "";
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        height: 4px;
        width: 100%;
        background-color: #dcdcdc;
        z-index: 5;
    }

    .progress{
        background-color: #0b4eb3!important;
        width: 0;
        transition: .3s;
    }
    .progress-step-active{
        background-color: #acacac!important;
        color: #444444;
    }

    .form-step-active{
        display: block;
    }
    /* Watermarks */
    .watermarked::before {
        position: absolute;
        top: 0;
        left: 0;
        overflow: hidden;
        display: block;
        width: 100%;
        height: 100%;
        content: attr(data-watermark);
        font-size: .5rem;
        opacity: 0.25;
        line-height: .6rem;
        letter-spacing: 0px;
        color: #d01329;
        z-index: 5;
    }
</style>

<script>
    const firstForms = document.querySelectorAll('.form-one');
    const nextOne = document.getElementsByClassName('.next-one');
    const prevBtns = document.querySelectorAll('.btn-prev');
    const nextBtns = document.querySelectorAll('.btn-next');
    const progress = document.getElementById('progress');
    const formSteps = document.querySelectorAll('.form-step');
    const progressSteps = document.querySelectorAll(".progress-step");
    
    let formStepsNum = 0;


    nextBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
            formStepsNum++;
            updateFormSteps();
            updateProgressbar();
        });
    });

    prevBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
            formStepsNum--;
            updateFormSteps();
            updateProgressbar();
        });
    });

    function updateFormSteps(){
        formSteps.forEach(formStep => {
            formStep.classList.contains("form-step-active");
            formStep.classList.remove("form-step-active");
        });
        formSteps[formStepsNum].classList.add('form-step-active');
    }

    function updateProgressbar(){
        progressSteps.forEach((progressStep, idx) => {
            if(idx < formStepsNum + 1 ){
                progressStep.classList.add("progress-step-active");
            }
            else{
                progressStep.classList.remove("progress-step-active");
            }
        });
        const progressActive = document.querySelectorAll('.progress-step-active');
    
        progress.style.width = ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
    }


    // Watermark generator
    Array.from(document.querySelectorAll('.watermarked')).forEach(function(el) {
        el.dataset.watermark = (el.dataset.watermark + ' ').repeat(3000);
    });
</script>