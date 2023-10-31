<link rel="stylesheet" href="./app/views/pages/gfr-calculator/gfr-style.css">

<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 lg:grid-cols-2 gap-5">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">GFR Calculator for Adults
            </h3>
            <div class="py-5 px-4">
            <p id="warning" class="text-primary_button mb-5 ms-2"></p>

                <div class=" grid md:grid-cols-3 sm:gap-4">
                    <div class="relative flex items-center  maxmd:mt-5 border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="serum-creatinine" step="0.01" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="serum-creatinine" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Serum Creatinine:</label>
                    </div>



                    <div class="relative flex items-center  maxmd:mt-5 border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <select id="creatinine-unit" class="w-full h-9 sm:h-10 outline-none border rounded-full  sm:m-0 px-2 sm:px-5 text-[#a2adb9] focus:text-primary_button focus:border-primary_button cursor-pointer">
                            <option value="mgdl">mg/dL</option>
                            <option value="umol">micromole/L</option>
                        </select>
                    </div>

                    <div class="relative flex items-center  maxmd:mt-5 border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="age" min="18" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="age" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Age</label>
                    </div>

                </div>


                <div class="flex items-center justify-center maxmd:mt-5 mb-5 maxsm:text-sm">


                    <div class="pe-4 sm:pe-24">
                        <span for="race" class=" text-[#a2adb9]">Race:</span>
                    </div>
                    <div class=" px-5">
                        <input type="radio" name="race" value="black" required>
                        <label for="male" class="radiolabel">Black</label>
                    </div>

                    <div class=" px-5">
                        <input type="radio" name="race" value="non-black" required>
                        <label for="female" class="radiolabel">Non Black</label>

                    </div>
                </div>
                <div class="flex items-center justify-center mb-5 maxsm:text-sm">
                    <div class="pe-4 sm:pe-24">
                        <span for="gender" class=" text-[#a2adb9]">Gender</span>
                    </div>
                    <div class=" pe-5">
                        <input type="radio" id="male" name="gender" value="male" required>
                        <label for="male" class="radiolabel">Male</label>
                    </div>

                    <div class=" px-5">
                        <input type="radio" id="female" name="gender" value="female" required>
                        <label for="female" class="radiolabel">Female</label>

                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <button id="calculate-btn" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">GFR Calculator for Children</h3>
            <div class="py-5 px-4">
            <p id="warning2" class=" text-primary_button mb-5 ms-2"></p>

                <div class=" grid grid-cols-1 sm:grid-cols-2 sm:gap-4 ">
                    <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="serum-creatinine-child" step="0.01" class=" w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="serum-creatinine-child" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Serum Creatinine:</label>
                    </div>
                    <div class="relative flex maxsm:mt-5 items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <select id="creatinine-unit-child" class="w-full h-9 sm:h-10 outline-none border rounded-full  sm:m-0 px-2 sm:px-5 text-[#a2adb9] focus:text-primary_button focus:border-primary_button cursor-pointer">
                            <option value="mgdl">mg/dL</option>
                            <option value="umol">micromole/L</option>
                        </select>
                    </div>
                </div>
                <div class=" grid grid-cols-1  maxmd:mt-5 sm:grid-cols-2 sm:gap-4 ">
                    <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="height-child" step="0.01" class=" w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="height-child" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (Feet):</label>
                    </div>
                    <div class="relative flex items-center maxsm:mt-5 border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <select id="height-unit-child" class="w-full h-9 sm:h-10 outline-none border rounded-full sm:m-0 px-2 sm:px-5 text-[#a2adb9] focus:text-primary_button focus:border-primary_button cursor-pointer">
                            <option value="mgdl">cm</option>
                            <option value="inches">micromole/L</option>
                        </select>
                    </div>
                </div>
                <div class="flex justify-center  maxmd:mt-5 items-center">
                    <button id="calculate-btn-child" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>


    </div>
    <div id="additionalDiv" class="  mt-5 hidden bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg">
        Result
    </div>

    <div class=" text-center mt-5 flex justify-center items-center">
        <div id="result-mdrd"></div>
        <div id="result-gfr-child"></div>


    </div>
</section>

<script src="./app/views/pages/gfr-calculator/gfr-script.js"></script>