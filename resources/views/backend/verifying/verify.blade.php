<div class="pt-[5rem] bg-black"></div>
<div class="bg- px-0.5 sm:px-4  xl:pl-[6.7rem] xl:pr-[5.8rem] py-2.5 pb-[1.5rem]">
    <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-[#444444] dark:bg-gray-800 text-white dark:text-white">
        @if($details)
            <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 space-x-0 sm:space-x-2">
                @foreach($details as $detail)
                    <h2 id="accordion-color-heading-{{$i}}" class="bg-[#f2f2f2] w-fit rounded-md">
                        <button type="button" class="flex btn-controller btn-active items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md  dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-{{$i}}" aria-expanded="ture" aria-controls="accordion-color-body-{{$i}}">
                            <span>Form {{$i}}</span>
                            <svg data-accordion-icon class="w-6 h-6 svg-rotate shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </h2>
                    <h1 class="hidden">{{$i++}}</h1>
                @endforeach
            </div>
            <h1 class="hidden">{{$i=0}}</h1>
            @foreach($details as $detail)
                <div>
                    <div id="accordion-color-body-{{$i}}" class="hidden py-[3rem]" aria-labelledby="accordion-color-heading-1">
                        <div class="w-full m-auto">
                            @if($detail->status == 'unchecked')
                                <form class="py-[1rem] px-[6rem]" method="POST" action="{{ route('backend.verify.verification',  $detail->id) }}">
                                    @csrf
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
                                                    <h1>Dispatch No:-</h1>
                                                    <!-- <p class="text-black font-bold">2078-504606</p> -->
                                                    <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start px-2">
                                                        <div class="relative z-[1000]">
                                                            <input type="number" id="dispatch" class="block form-one capitalize text-center px-0 w-full text-[.9rem] sm:text-[1.1rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" name="dispatch" data-maxlength="4" oninput="this.value=this.value.slice(0,this.dataset.maxlength)" required />
                                                            <label for="dispatch" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-[250px]:w-[7rem] bg-white truncate">Dispatch Number</label>
                                                        </div>
                                                    </h3>
                                                </div>
                                                
                                                <div class="text-[.9rem]">
                                                    <h1>Phone:- 00977-1-4412783</h1>
                                                    <h1>Fax:- 00977-1-4412602</h1>
                                                    <h1>Email:- chalchalan@nepalpolice.gov.np</h1>
                                                    <div class="flex gap-[.3rem] pt-4">
                                                        <h1>Date:- </h1>
                                                        <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start px-2">
                                                            <div class="relative z-[1000]">
                                                                <input type="date" id="checked_date" class="block form-one capitalize text-center px-0 w-full text-[.7rem] sm:text-[.9rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" name="checked_date" required/>
                                                                <label for="checked_date" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-[250px]:w-[7rem] bg-white truncate">Checked Date</label>
                                                            </div>
                                                        </h3>
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
                                                                <p>{{$detail->first_name}} {{$detail->last_name}}</p>
                                                                <p>{{$detail->father_first_name}} {{$detail->father_last_name}}</p>
                                                                <p>{{$detail->permanent_address}}</p>
                                                                <p>{{$detail->date_of_birth_bs}}</p>
                                                                <p>{{$detail->gender}}</p>
                                                                <p>Nepali</p>
                                                            </div>
                                                        </div>
                                                        <div class="z-[10] h-[7rem] w-[7rem]">
                                                            <img src="/images/frontend/documents/{{ $detail->user_image }}" class="h-full w-full" alt="">
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
                                                                <p>{{$detail->citizen_issued_location}}</p>
                                                                <p>{{$detail->passport_issued_location}}</p>
                                                            </div>
                                                        </div>
                                                    </div>                            
                                                </div>
                                                <div class="w-full text-[.9rem] space-y-2">
                                                    <h1 class="font-bold">Status:</h1>
                                                    <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start px-2">
                                                        <div class="relative z-[1000]">
                                                            <input type="text" id="remarks" class="block form-one first-letter:capitalize text-center px-0 w-full text-[.9rem] sm:text-[1.1rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" minlength="10" maxlength="150" name="remarks" required />
                                                            <label for="remarks" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-[250px]:w-[7rem] bg-white truncate">Status</label>
                                                        </div>
                                                    </h3>
                                                </div>
                                                <div class="flex flex-col ml-auto items-end w-full text-[.8rem]">
                                                    <div class="w-fit border-t-2 border-dotted border-black px-[3rem] space-y-2 text-center">
                                                        <h3 class="text-[.7rem] sm:text-[.9rem] text-[#222] text-start px-2 pt-4">
                                                            <div class="relative z-[1000]">
                                                                <input type="text" id="v_name" class="block form-one capitalize text-center px-0 w-full text-[.9rem] sm:text-[.9rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" name="v_name" required />
                                                                <label for="v_name" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-[250px]:w-[7rem] bg-white truncate">Verifier Name</label>
                                                            </div>
                                                        </h3>
                                                        <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start px-2">
                                                            <div class="relative z-[1000]">
                                                                <input type="text" id="v_post" class="block form-one capitalize text-center px-0 w-full text-[.9rem] sm:text-[1.1rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" name="v_post" required />
                                                                <label for="v_post" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-[250px]:w-[7rem] bg-white truncate">Verifier Post</label>
                                                            </div>
                                                        </h3>
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
                                    <div class="flex w-full pt-4">
                                        <h3 class="text-[.9rem] sm:text-[1.1rem] text-[#222] text-start">
                                            <div class="relative z-[1000]">
                                                <select name="status" id="status" class="block px-2 form-one capitalize text-center px-0 w-full text-[.7rem] sm:text-[.9rem] text-[#222] bg-transparent border-2 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-300 focus:border-b-blue-600 peer" required>
                                                    <option value="unchecked">Unchecked</option>
                                                    <option value="checked">Checked</option>
                                                </select>
                                                <label for="status" class="absolute text-sm text-gray-500 font-semibold dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 z-10 origin-[0] peer-focus:left-2 peer-focus:font-semibold peer-focus:text-[#a0a0a0] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 max-[250px]:w-[7rem] bg-white truncate">Verifier Post</label>
                                            </div>
                                        </h3>
                                        <button type="submit" value="submit" class="btn ml-auto flex bg-[#444444] text-white w-fit rounded-md items-center justify-between w-fit p-4 py-1.5 font-medium text-left capitalize rounded-md  dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-800" value="enter police form" id="submit">
                                                <span class="">Submit</span>
                                        </button>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
                <h1 class="hidden">{{$i++}}</h1>
            @endforeach
        @else
            <div class="py-[5rem]">
                <div class="h-screen bg-gray-100 flex items-center justify-center">
                    <div class="flex h-full w-full items-center justify-center">
                        <h1 class="p-5 bg-white shadow-lg">No data needed to be verified</h1>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>

<style>
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
// Watermark generator
    Array.from(document.querySelectorAll('.watermarked')).forEach(function(el) {
        el.dataset.watermark = (el.dataset.watermark + ' ').repeat(3000);
    });
</script>