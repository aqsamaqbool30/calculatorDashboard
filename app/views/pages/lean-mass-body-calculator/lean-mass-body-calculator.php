<link rel="stylesheet" href="./app/views/pages/lean-mass-body-calculator/lean-mass-body-calculator-style.css">

<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 lg:grid-cols-2 gap-5">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Lean Mass Body Calculator (Metric Units)
            </h3>
            <div class="py-5 px-4">
                <p id="errorMessage" class="text-primary_button mb-5 ms-2"></p>

                <div class="flex items-center justify-center mb-5 maxsm:text-sm">


                    <div class="pe-4 sm:pe-24">
                        <span for="gender" class=" text-[#a2adb9]">Gender</span>
                    </div>
                    <div class="ps-4 pe-5">
                        <input type="radio" id="male" name="gender" value="male" required checked>
                        <label for="male" class="radiolabel">Male</la>
                    </div>

                    <div class=" px-5">
                        <input type="radio" id="female" name="gender" value="female" required>
                        <label for="female" class="radiolabel">Female</label>

                    </div>


                </div>
                <div class=" grid md:grid-cols-1 sm:gap-4">
                    <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="height" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="height" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height in cm:</label>
                    </div>

                    <div class="relative flex items-center maxsm:mt-5 border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="weight" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="weight" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Age</label>
                    </div>

                </div>


                <div class="flex items-center maxmd:mt-5 justify-center mb-5 maxsm:text-sm">


                    <div class="pe-4 sm:pe-24">
                        <span for="isChild" class=" text-[#a2adb9]">Age 14 or younger?</span>
                    </div>
                    <div class="pe-4 sm:pe-24">
                        <input type="radio" name="isChild" value="yes" required>
                        <label for="male" class="radiolabel">Yes</label>
                    </div>

                    <div class=" px-5">
                        <input type="radio" name="isChild" value="no" required checked>
                        <label for="female" class="radiolabel">No</label>

                    </div>


                </div>



                <div class="flex justify-center items-center">
                    <button id="calculateBtn" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Lean Mass Body Calculator (US Units)</h3>
            <p id="errorMessage2" class="text-primary_button mb-5 ms-2"></p>

            <div class="flex items-center justify-center mb-5 maxmd:text-sm">


                <div class="pe-4 sm:pe-24">
                    <span for="genderMass" class=" text-[#a2adb9]">Gender</span>
                </div>
                <div class="ps-4 pe-5">
                    <input type="radio" name="genderMass" value="male" required checked>
                    <label for="male" class="radiolabel">Male</label>
                </div>

                <div class=" px-5">
                    <input type="radio" name="genderMass" value="female" required>
                    <label for="female" class="radiolabel">Female</label>

                </div>


            </div>
            <div class="py-5 px-4">

                <div class=" grid grid-cols-1 sm:grid-cols-2 sm:gap-4 ">
                    <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="heightFeet" class=" w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="heightFeet" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (Feet):</label>
                    </div>
                    <div class="relative flex maxsm:mt-5 items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="heightInches" class=" w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="heightInches" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (Inches):</label>
                    </div>
                </div>
                <div class=" grid grid-cols-1 maxmd:mt-5 sm:grid-cols-1 sm:gap-4 ">
                    <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="weightPounds" class=" w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="weightPounds" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Weight (Pounds):</label>
                    </div>
                </div>
                <div class="flex items-center maxmd:mt-5 justify-center mb-5 maxsm:text-sm">
                    <div class="ps-4 pe-5">
                        <span for="isChildMass" class=" text-[#a2adb9]">Age 14 or younger?</span>
                    </div>
                    <div class="ps-4 pe-5">
                        <input type="radio" name="isChildMass" value="yes" required>
                        <label for="male" class="radiolabel">Yes</label>
                    </div>

                    <div class=" px-5">
                        <input type="radio" name="isChildMass" value="no" required checked>
                        <label for="female" class="radiolabel">No</label>

                    </div>

                </div>

                <div class="flex justify-center items-center">
                    <button id="calculateBtnMass" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>


    </div>
    <div id="additionalDiv" class="hidden mt-5 bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg">
        Result
    </div>

    <div class=" text-center flex justify-center items-center mt-5">
        <div id="errorMessage"></div>
        <table id="resultTableMass">
        </table>
        <table id="resultTable">
        </table>
    </div>
</section>

<script src="./app/views/pages/lean-mass-body-calculator/lean-mass-body-calculator-script.js"></script>