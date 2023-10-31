<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 lg:grid-cols-2 gap-5">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Ideal Weight Calculator(Matric Units)</h3>
            <div class="py-5 px-4">
            <p id="warning" class="text-primary_button mb-5 ms-2"></p>

                <div class="flex items-center justify-center m-0 mb-5">


                    <div class="pe-4 sm:pe-24">
                        <span for="gender" class=" text-[#a2adb9]">Gender</span>
                    </div>
                    <div class="ps-4 pe-5">
                        <input type="radio" id="genderMale" name="gender" value="male" checked>
                        <label for="genderMale" class="radiolabel">Male</label>
                    </div>

                    <div class="ps-4 pe-5">
                        <input type="radio" id="genderFemale" name="gender" value="female">
                        <label for="genderFemale" class="radiolabel">Female</label>
                    </div>
                </div>
                <div id="heightCmField" class=" grid grid-cols-1  ">
                    <div class="relative maxmd:mt-5 flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="text" id="height" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="height" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (cm):</label>
                    </div>
                </div>
                <div id="heightCmField" class=" grid grid-cols-1 ">
                    <div class="relative maxmd:mt-5 flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="text" id="age" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="age" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none"> Age (2 - 80)</label>
                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <button id="calculate" class="border  maxmd:mt-5 border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Ideal Weight Calculator(US Units)</h3>
            <div class="py-5 px-4">
            <p id="warning2" class="text-primary_button mb-5 ms-2"></p>

                <div class="flex items-center justify-center m-0 mb-5">
                    <div class="pe-4 sm:pe-24">
                        <span for="gender" class=" text-[#a2adb9]">Gender</span>
                    </div>
                    <div class="ps-4 pe-5">
                        <input type="radio" id="male" name="gender" value="male" required>
                        <label for="male" class="radiolabel">Male</label>
                    </div>
                    <div class=" px-5">
                        <input type="radio" id="female" name="gender" value="female" required>
                        <label for="female" class="radiolabel">Female</label>
                    </div>
                </div>
                <div class=" grid grid-cols-1 sm:grid-cols-2 sm:gap-4">
                    <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="heightFeet" min="1" class=" w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="heightFeet" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (Feet):</label>
                    </div>
                    <div class="relative flex maxmd:mt-5 items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="heightInches" min="0" max="11" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="heightInches" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (Inches):</label>
                    </div>
                </div>
                <div class=" grid grid-cols-1">
                    <div class="relative flex maxmd:mt-5 items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="ages" min="2" max="80" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="ages" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none"> Age (2 - 80)</label>
                    </div>

                </div>
                <div class="flex justify-center items-center">
                    <button id="calculateunits" class="border maxmd:mt-5 border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>


    </div>
    <div id="additionalDiv" class=" hidden mt-5 bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg">
        Result
    </div>

    <div class=" text-center flex justify-center items-center mt-5">
        <div id="result" class="">

        </div>

    </div>
</section>

<script src="./app/views/pages/ideal-weight-calculator/ideal-weight-script.js"></script>