<link rel="stylesheet" href="./app/views/pages/fat-intake-calculator/fat-intake-calculator-style.css">

<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 lg:grid-cols-2 gap-5">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">

            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">TDEE Calculator (Metric Units)
            </h3>
            <div class="py-5 px-4">
            <p id="warning" class=" text-primary_button mb-5 ms-2"></p>

                <div class=" grid md:grid-cols-2 sm:gap-4">
                    <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="age" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="age" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Age (15 - 80):</label>
                    </div>
                    <div class="flex  maxmd:mt-5">
                        <select id="gender" class=" w-full h-9 sm:h-10 outline-none border rounded-full sm:m-0 px-2 sm:px-5 text-[#a2adb9] focus:text-primary_button focus:border-primary_button cursor-pointer">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="relative maxmd:mt-5 flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="height" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="height" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (cm):</label>
                    </div>
                    <div class="relative maxmd:mt-5 flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="weight" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="weight" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Weight (kg):</label>
                    </div>
                    <div class="flex maxmd:mt-5">
                        <select id="activityLevel" name="activityLevel" class="w-full h-9 sm:h-10 outline-none border rounded-full sm:m-0 px-2 sm:px-5 text-[#a2adb9] focus:text-primary_button focus:border-primary_button cursor-pointer">
                            <option value="1">Basal Metabolic Rate (BMR)</option>
                            <option value="1.2">Sedentary: little or no exercise</option>
                            <option value="1.375">Light: exercise 1-3 times/week</option>
                            <option value="1.465">Moderate: exercise 4-5 times/week</option>
                            <option value="1.55">Active: daily exercise or intense exercise 3-4 times/week</option>
                            <option value="1.725" selected="">Very Active: intense exercise 6-7 times/week</option>
                            <option value="1.9">Extra Active: very intense exercise daily, or physical job</option>
                        </select>
                    </div>
                    <div class="relative maxmd:mt-5 flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="fatPercentage" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="fatPercentage" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Body Fat (%):</label>
                    </div>
                </div>


                <div class="flex items-center mt-5 justify-center mb-5 maxsm:text-sm">


                    <div class="pe-4 sm:pe-24 ">

                        <span for="unit">Result Unit:</span>
                    </div>
                    <div class="px-5">
                        <input type="radio" id="calories" name="resultUnit" value="calories" required checked>
                        <label for="calories" class="radiolabel">calories</label>
                    </div>

                    <div class=" px-5">
                        <input type="radio" id="kilojoules" name="resultUnit" value="kilojoules" required>
                        <label for="kilojoules" class="radiolabel">Kilojoules</label>
                    </div>
                </div>
                <div class="flex items-center mt-5 justify-center mb-5 maxsm:text-sm">

                    <div>
                        <span for="formula">BMR estimation formula:
                        </span>
                    </div>
                    <div class=" px-5" class="radiolabel">
                        <input type="radio" id="mifflin" name="formula" value="mifflin" checked>
                        <label for="mifflin" class="radiolabel">Mifflin-St Jeor</label>
                    </div>

                    <div class=" px-5" class="radiolabel">
                        <input type="radio" id="katchMcArdle" name="formula" value="katchMcArdle">
                        <label for="katchMcArdle" class="radiolabel">Katch-McArdle</label>

                    </div>

                </div>
                <div class="flex justify-center items-center">
                    <button id="calculateButtons" class=" border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>

        </div>
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">TDEE Calculator (US Units)
            </h3>

            <div class="py-5 px-4">
            <p id="warning2" class="text-primary_button mb-5 ms-2"></p>


                <div class=" grid md:grid-cols-2 sm:gap-4">
                    <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="ages" min="15" max="80" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="ages" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Age (15 - 80):</label>
                    </div>

                    <div class="relative flex maxmd:mt-5 items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="weightPounds" name="weightPounds" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="weightPounds" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Weight (lbs):</label>
                    </div>

                    <div class="relative flex maxmd:mt-5 items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="heightFeet" name="heightFeet" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="heightFeet" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (feet):</label>
                    </div>
                    <div class="relative flex maxmd:mt-5 items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="heightInches" name="heightInches" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="heightInches" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (inches):</label>
                    </div>
                    <div class="relative flex maxmd:mt-5 items-center border rounded-full w-full mb-1  focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="fatPercentages" name="fatPercentages" step="0.1" min="0" max="100" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="fatPercentages" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Body Fat Percentage (%):</label>
                    </div>
                    <div class="flex maxmd:mt-5">
                        <select id="genders" class="w-full h-9 sm:h-10 outline-none border rounded-full sm:m-0 px-2 sm:px-5 text-[#a2adb9] focus:text-primary_button focus:border-primary_button cursor-pointer">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                </div>
                <div class="flex mt-5">
                    <select id="activityLevel" name="activityLevel" class="w-full h-9 sm:h-10 outline-none border rounded-full sm:m-0 px-2 sm:px-5 text-[#a2adb9] focus:text-primary_button focus:border-primary_button cursor-pointer">
                        <option value="1">Basal Metabolic Rate (BMR)</option>
                        <option value="1.2">Sedentary: little or no exercise</option>
                        <option value="1.375">Light: exercise 1-3 times/week</option>
                        <option value="1.465">Moderate: exercise 4-5 times/week</option>
                        <option value="1.55">Active: daily exercise or intense exercise 3-4 times/week</option>
                        <option value="1.725" selected="">Very Active: intense exercise 6-7 times/week</option>
                        <option value="1.9">Extra Active: very intense exercise daily, or physical job</option>
                    </select>
                </div>

                <div class="flex items-center mt-5 justify-center mb-5 maxsm:text-sm">
                    <div class="sm:pe-5 md:pe-20">
                        <span for="units" class="radiolabel">Result Unit:</span>
                    </div>
                    <div class="px-5">
                        <input type="radio" name="units" value="calories" required checked>
                        <label for="calories" class="radiolabel">Calories</label>
                    </div>

                    <div class=" px-5">
                        <input type="radio" name="units" value="kilojoules" required>
                        <label for="kilojoules" class="radiolabel">Kilojoules</label>

                    </div>
                </div>
                <div class="flex items-center mt-5 justify-center mb-5 maxsm:text-sm">
                    <div class=" ">
                        <span for="formulas">BMR estimation formula:
                        </span>
                    </div>
                    <div class=" px-5">
                        <input type="radio" id="mifflin" name="formulas" value="mifflin" required checked>
                        <label for="mifflin" class="radiolabel">Mifflin-St Jeor</label>
                    </div>

                    <div class=" px-5">
                        <input type="radio" id="katchMcArdle" name="formulas" value="katchMcArdle" required>
                        <label for="katch" class="radiolabel">Katch-McArdle</label>
                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <button id="calculatetdee" class=" border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

    </div>
    <div id="additionalDiv" class=" hidden mt-5 bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg">
        Result
    </div>


    <div class=" text-center flex  mt-5 justify-center flex-col items-center">
        <div id="results"></div>
        <div id="result"></div>

    </div>
</section>

<script src="./app/views/pages/tdee-calculator/tdee-calculator-script.js"></script>