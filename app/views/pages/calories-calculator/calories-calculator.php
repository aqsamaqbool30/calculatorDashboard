<link rel="stylesheet" href="./app/views/pages/fat-intake-calculator/fat-intake-calculator-style.css">

<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 lg:grid-cols-2 gap-5">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Calorie Calculator (Metric Units)
            </h3>
            <div class="py-5 px-4 mb-4">
            <p id="warning" class="text-primary_button mb-5 ms-5"></p>  

                <div class="flex items-center justify-center mb-5 maxsm:text-sm">
                    <div class="pe-4 sm:pe-24">
                        <span for="gender" class=" text-[#a2adb9]">Gender</span>
                    </div>
                    <div class="px-5">
                        <input type="radio" id="male" name="gender" value="male" required checked>
                        <label for="male" class="radiolabel">Male</label>
                    </div>
                    <div class=" px-5">
                        <input type="radio" id="female" name="gender" value="female" required>
                        <label for="female" class="radiolabel">Female</label>
                    </div>
                </div>

                <div class=" grid md:grid-cols-2 sm:gap-4">
                    <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="age" min="15" max="80" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="age" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Age (15 - 80):</label>
                    </div>

                    <div class="relative flex items-center maxsm:mt-5 border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="height" name="height" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="height" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (cm):</label>
                    </div>
                    <div class="relative flex items-center maxsm:mt-5 border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="weight" name="weight" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="weight" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Weight (kg):</label>
                    </div>

                    <div class="relative flex items-center maxsm:mt-5 border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="body-fat" name="body-fat" step="0.1" min="0" max="100" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="body-fat" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Body Fat Percentage (%):</label>
                    </div>
                </div>
                <div class=" grid md:grid-cols-1 sm:gap-4">
                    <div class="flex mt-6 m-0">
                        <select id="activity" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full sm:m-0 px-2 sm:px-5 text-[#a2adb9] focus:text-primary_button focus:border-primary_button cursor-pointer">
                            <option value="1">Basal Metabolic Rate (BMR)</option>
                            <option value="1.2">Sedentary (little to no exercise)</option>
                            <option value="1.375">Lightly Active (light exercise/sports 1-3 days/week)</option>
                            <option value="1.465">Moderately Active (moderate exercise/sports 3-5 days/week)</option>
                            <option value="1.55">Very Active (hard exercise/sports 6-7 days a week)</option>
                            <option value="1.725">Extra Active (very hard exercise/sports & physical job or 2x training)</option>
                            <option value="1.9">Extra Active: very intense exercise daily, or physical job</option>
                        </select>
                    </div>
                </div>

                <div class="flex items-center flex-col xs:flex-row justify-center mb-5 mt-5 maxsm:text-sm">
                    <div class="sm:pe-5 md:pe-20">
                        <span for="result-unit" class=" text-[#a2adb9]">Result Unit:</span>
                    </div>
                    <div class=" px-5">
                        <input type="radio" id="calories" name="result-unit" value="calories" required checked>
                        <label for="calories" class="radiolabel">Calories</label>
                    </div>

                    <div class=" px-5">
                        <input type="radio" id="kilojoules" name="result-unit" value="kilojoules" required>
                        <label for="kilojoules" class="radiolabel">Kilojoules</label>
                    </div>
                </div>
                <div class="flex items-center flex-col sm:flex-row justify-center mb-5 maxsm:text-sm">
                    <div class="">
                        <span for="formula" class=" text-[#a2adb9]">BMR estimation formula:
                        </span>
                    </div>
                    <div class=" px-5">
                        <input type="radio" id="mifflin" name="formula" value="mifflin" required checked>
                        <label for="mifflin" class="radiolabel">Mifflin-St Jeor</label>
                    </div>
                    <div class=" px-5">
                        <input type="radio" id="harris" name="formula" value="harris" required>
                        <label for="harris" class="radiolabel">Harris-Benedict</label>

                    </div>

                    <div class=" px-5">
                        <input type="radio" id="katch" name="formula" value="katch" required>
                        <label for="katch" class="radiolabel">Katch-McArdle</label>

                    </div>


                </div>


                <div class="flex justify-center items-center">
                    <button id="calculate-calories" class=" border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>
        <!-- us units  -->
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Calorie Calculator (US Units)
            </h3>

            <div class="py-5 mt-5 px-4">
            <p id="warning2" class="text-primary_button mb-5 ms-5"></p>  

                <div class="flex items-center justify-center mb-5 maxsm:text-sm">
                    <div class="pe-4 sm:pe-24">
                        <span for="genders" class=" text-[#a2adb9]">Gender</span>
                    </div>
                    <div class="px-5">
                        <input type="radio" id="male" name="genders" value="male" required checked>
                        <label for="male" class="radiolabel">Male</label>
                    </div>
                    <div class=" px-5">
                        <input type="radio" id="female" name="genders" value="female" required>
                        <label for="female" class="radiolabel">Female</label>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 sm:gap-4">
                    <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="ages" min="15" max="80" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="ages" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Age (15 - 80):</label>
                    </div>

                    <div class="relative flex items-center maxsm:mt-5 border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="weight-lbs" name="weight-lbs" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="weight-lbs" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Weight (lbs):</label>
                    </div>

                    <div class="relative flex items-center maxsm:mt-5 border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="feet" name="feet" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="feet" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (feet):</label>
                    </div>
                    <div class="relative flex items-center maxsm:mt-5 border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="inches" name="inches" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="inches" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (inches):</label>
                    </div>
                    <div class="relative flex items-center maxsm:mt-5 border rounded-full w-full mb-1  focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="body-fats" name="body-fat" step="0.1" min="0" max="100" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="body-fats" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Body Fat Percentage (%):</label>
                    </div>
                    <div class="flex m-0 maxsm:mt-5">
                        <select id="activities" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full sm:m-0 px-2 sm:px-5 text-[#a2adb9] focus:text-primary_button focus:border-primary_button cursor-pointer">
                            <option value="1">Basal Metabolic Rate (BMR)</option>
                            <option value="1.2">Sedentary (little to no exercise)</option>
                            <option value="1.375">Lightly Active (light exercise/sports 1-3 days/week)</option>
                            <option value="1.465">Moderately Active (moderate exercise/sports 3-5 days/week)</option>
                            <option value="1.55">Very Active (hard exercise/sports 6-7 days a week)</option>
                            <option value="1.725">Extra Active (very hard exercise/sports & physical job or 2x training)</option>
                            <option value="1.9">Extra Active: very intense exercise daily, or physical job</option>
                        </select>
                    </div>

                </div>


                <div class="flex items-center flex-col xs:flex-row justify-center mb-5 mt-5 maxsm:text-sm">
                    <div class="sm:pe-5 md:pe-20">
                        <span for="result-units" class=" text-[#a2adb9]">Result Unit:</span>
                    </div>
                    <div class="px-5">
                        <input type="radio" id="calories" name="result-units" value="calories" required checked>
                        <label for="calories" class="radiolabel">Calories</label>
                    </div>

                    <div class=" px-5">
                        <input type="radio" id="kilojoules" name="result-units" value="kilojoules" required>
                        <label for="kilojoules" class="radiolabel">Kilojoules</label>

                    </div>
                </div>
                <div class="flex flex-col sm:flex-row items-center justify-center m-0 mb-8 ">
                    <div class=" ">
                        <span for="formulas" class=" text-[#a2adb9]">BMR estimation formula:
                        </span>
                    </div>
                    <div class="px-5">
                        <input type="radio" id="mifflin" name="formulas" value="mifflin" required checked>
                        <label for="mifflin" class="radiolabel">Mifflin-St Jeor</label>
                    </div>
                    <div class=" px-5">
                        <input type="radio" id="harris" name="formulas" value="harris" required>
                        <label for="harris" class="radiolabel">Harris-Benedict</label>
                    </div>
                    <div class=" px-5">
                        <input type="radio" id="katch" name="formulas" value="katch" required>
                        <label for="katch" class="radiolabel">Katch-McArdle</label>
                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <button id="calculate-cal" class=" border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

    </div>
    <div id="additionalDiv" class=" mt-5 hidden bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg">
        Result
    </div>
    <div class=" text-center mt-5 flex justify-center flex-col items-center">
        <div id="results"></div>
        <div id="result"></div>
    </div>
</section>

<script src="./app/views/pages/calories-calculator/calories-calculator-script.js"></script>