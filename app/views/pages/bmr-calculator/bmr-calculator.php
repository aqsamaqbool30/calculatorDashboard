<link rel="stylesheet" href="./app/views/pages/fat-intake-calculator/fat-intake-calculator-style.css">

<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 lg:grid-cols-2 gap-5">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">

            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">BMR Calculator (Metric Units)
            </h3>
            <div class="py-5 px-4">
            <p id="warning" class="text-primary_button mb-5 ms-2"></p>

                <div class=" grid md:grid-cols-2 sm:gap-4">
                    <div class="relative flex  items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="age" min="15" max="80" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="age" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Age (15 - 80):</label>
                    </div>
                    <div class="flex m-0">
                        <select id="gender" class=" mt-5 w-full h-9 sm:h-10 outline-none border rounded-full sm:m-0 px-2 sm:px-5 text-[#a2adb9] focus:text-primary_button focus:border-primary_button cursor-pointer">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="relative flex maxsm:mt-5 items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="height" name="height" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="height" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (cm):</label>
                    </div>
                    <div class="relative maxsm:mt-5 flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="weight" name="weight" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="weight" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Weight (kg):</label>
                    </div>


                </div>
                <div class=" grid grid-cols-1 mt-5 sm:gap-4">
                    <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="body-fat-percentage" min="1" max="100" step="0.1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="body-fat-percentage" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Body Fat Percentage (%):</label>
                    </div>
                </div>

                <div class="flex items-center flex-col xs:flex-row justify-center mb-5 mt-5 maxsm:text-sm">


                    <div class="sm:pe-5 md:pe-20">
                        <label for="unit" class="radiolabel">Result Unit:</label>
                    </div>
                    <div class="px-5">
                        <input type="radio" id="calories" name="unit" value="calories" required checked>
                        <label for="calories" class="radiolabel">Calories</label>
                    </div>

                    <div class=" px-5">
                        <input type="radio" id="kilojoules" name="unit" value="kilojoules" required>
                        <label for="kilojoules" class="radiolabel">Kilojoules</label>

                    </div>
                </div>
                <div class="flex items-center flex-col xs:flex-row justify-center mb-5 mt-5 maxsm:text-sm">

                    <div class="">
                        <label for="formula" class="radiolabel">BMR estimation formula:
                        </label>
                    </div>
                    <div class=" px-5">
                        <input type="radio" id="mifflin-st-jeor" name="formula" value="mifflin-st-jeor" required checked>
                        <label for="mifflin-st-jeor" class="radiolabel">Mifflin-St Jeor</label>
                    </div>
                    <div class=" px-5">
                        <input type="radio" id="harris-benedict" name="formula" value="harris-benedict" required>
                        <label for="harris" class="radiolabel">Harris-Benedict</label>

                    </div>

                    <div class=" px-5">
                        <input type="radio" id="katch-mcardle" name="formula" value="katch-mcardle" required>
                        <label for="katch" class="radiolabel">Katch-McArdle</label>

                    </div>

                </div>
                <div class="flex justify-center items-center">
                    <button id="calculate-bmr" class=" border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>

        </div>
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">BMR Calculator (US Units)
            </h3>

            <div class="py-5 px-4">

            <p id="warning2" class="text-primary_button mb-5 ms-2"></p>

                <div class=" grid md:grid-cols-2 sm:gap-4">
                    <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="ages" min="15" max="80" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="ages" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Age (15 - 80):</label>
                    </div>

                    <div class="relative maxsm:mt-5 flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="weight-lbs" name="weight-lbs" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="weight-lbs" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Weight (lbs):</label>
                    </div>

                    <div class="relative flex maxsm:mt-5 items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="height-feet" name="height-feet" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="height-feet" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (feet):</label>
                    </div>
                    <div class="relative flex maxsm:mt-5 items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="height-inches" name="height-inches" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="height-inches" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (inches):</label>
                    </div>
                    <div class="relative flex maxsm:mt-5 items-center border rounded-full w-full mb-1  focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="bodyfats" name="bodyfats" step="0.1" min="0" max="100" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="bodyfats" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Body Fat Percentage (%):</label>
                    </div>
                    <div class="flex m-0">
                        <select id="genders" class="w-full maxsm:mt-5 h-9 sm:h-10 outline-none border rounded-full sm:m-0 px-2 sm:px-5 text-[#a2adb9] focus:text-primary_button focus:border-primary_button cursor-pointer">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                </div>


                <div class="flex items-center flex-col xs:flex-row justify-center mb-5 mt-5 maxsm:text-sm">
                    <div class="sm:pe-5 md:pe-20">
                        <span for="units">Result Unit:</span>
                    </div>
                    <div class="px-5">
                        <input type="radio" name="units" value="calories" required checked>
                        <span for="calories">Calories</span>
                    </div>

                    <div class=" px-5">
                        <input type="radio" name="units" value="kilojoules" required>
                        <span for="kilojoules">Kilojoules</span>

                    </div>
                </div>
                <div class="flex items-center flex-col xs:flex-row justify-center mb-5 mt-5 maxsm:text-sm">
                    <div class=" ">
                        <span for="formulas">BMR estimation formula:
                        </span>
                    </div>
                    <div class=" px-5">
                        <input type="radio" name="formulas" value="mifflin-st-jeor" required checked>
                        <span for="mifflin">Mifflin-St Jeor</span>
                    </div>
                    <div class=" px-5">
                        <input type="radio" name="formulas" value="harris-benedict" required>
                        <span for="harris">Harris-Benedict</span>
                    </div>
                    <div class=" px-5">
                        <input type="radio" name="formulas" value="katch-mcardle" required>
                        <span for="katch">Katch-McArdle</span>
                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <button id="calculateBMR" class=" border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

    </div>
    <div id="additionalDiv" class="hidden bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg">
        Result
    </div>
    <div class=" text-center flex mt-5 justify-center flex-col items-center">
        <div id="result"></div>
        <div id="results"></div>
    </div>
</section>

<script src="./app/views/pages/bmr-calculator/bmr-calculator-script.js"></script>