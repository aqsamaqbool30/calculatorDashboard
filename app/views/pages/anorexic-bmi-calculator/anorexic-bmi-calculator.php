

<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 lg:grid-cols-2 gap-5">
        <!-- Fraction Calculator (1st) -->
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Anorexic BMI Calculator(Metric Units)
            </h3>
            <div class="py-5 px-4">
            <p id="error" class="text-primary_button mb-5 ms-2"></p>  

                <div class="flex items-center justify-center mb-5 maxsm:text-sm">


                    <div class="pe-4 sm:pe-24">
                        <span for="gender" class=" text-label_color">Gender</span>
                    </div>
                    <div class="ps-4 pe-5">
                        <input type="radio" id="male" name="gender" value="male" required checked>
                        <label for="male" class="radiolabel">Male</label>
                    </div>

                    <div class=" px-5">
                        <input type="radio" id="female" name="gender" value="female" required>
                        <label for="female" class="radiolabel">Female</label>

                    </div>


                </div>
                <div class=" grid md:grid-cols-1 sm:gap-4 ">
                    <div class="relative  flex items-center border rounded-full w-full mb-1 md:mb-5 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="age" min="0" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="age" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Age</label>
                    </div>
                    <div class="relative flex maxsm:mt-5  items-center border rounded-full w-full mb-1 md:mb-5 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="height" min="0" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="height" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height in cm:</label>
                    </div>

                    <div class="relative flex maxsm:mt-5 items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="weight" min="0" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="weight" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Weight (kg):</label>
                    </div>


                </div>

                <div class="flex justify-center maxsm:mt-5  items-center">
                    <button id="calculateBtn" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>
        <!-- us units  -->
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Anorexic BMI Calculator(US Units)</h3>
            <div class="py-5 px-4">
            <p id="error2" class="text-primary_button mb-5 ms-2"></p>  

                <div class="flex items-center justify-center m-0 mb-5 maxsm:text-sm">

                    <div class="pe-4 sm:pe-24">
                        <span for="genderAnorexic" class=" text-gray-400">Gender</span>
                    </div>
                    <div class="ps-4 pe-5">
                        <input type="radio" name="genderAnorexic" value="male" required checked>
                        <label for="male" class="radiolabel">Male</label>
                    </div>

                    <div class=" px-5">
                        <input type="radio" name="genderAnorexic" value="female" required>
                        <label for="female" class="radiolabel">Female</label>

                    </div>


                </div>

                <div class=" grid grid-cols-1 sm:grid-cols-1 sm:gap-4 ">
                    <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="ageAnorexic" class=" w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="ageAnorexic" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Age</label>
                    </div>
                </div>

                <div class=" grid grid-cols-1 sm:grid-cols-1 sm:gap-4 ">
                    <div class="relative maxsm:mt-5  flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="weightAnorexic" class=" w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="weightAnorexic" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Weight (Pounds):</label>
                    </div>
                </div>
                <div class=" grid grid-cols-1 sm:grid-cols-2 sm:gap-4 ">
                    <div class="relative maxsm:mt-5  flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="feet" class=" w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="feet" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (Feet):</label>
                    </div>
                    <div class="relative flex items-center border maxsm:mt-5 rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="inches" class=" w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="inches" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (Inches):</label>
                    </div>
                </div>


                <div class="flex justify-center items-center">
                    <button id="calculateBtnAnorexic" class="border  maxsm:mt-5 border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>

            </div>


        </div>
    </div>
    <!-- Result:-->
    <div id="additionalDiv" class="hidden mt-5 bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg">
        Result
        <!-- Add any content you want to display here -->
    </div>

    <div class=" text-center mt-5 justify-center items-center">
        <div id="error"></div>
        <div id="bmiResult"></div>
        <div id="anorexiaResult"></div>
        <div id="healthyRange"></div>
        <div id="disclaimer"></div>
    </div>
</section>

<script src="./app/views/pages/anorexic-bmi-calculator/anorexic-bmi-calculator-script.js"></script>