<link rel="stylesheet" href="./app/views/pages/fat-intake-calculator/fat-intake-calculator-style.css">

<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 lg:grid-cols-2 gap-5">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Fat Intake Calculator (Metric Units)
            </h3>
            <div class="py-5 px-4">
                <p id="warning" class="text-primary_button mb-5 ms-2"></p>

                <div class="flex items-center justify-center mb-5 maxsm:text-sm">
                    <div class="pe-4 sm:pe-24">
                        <span for="gender" class=" text-[#a2adb9]">Gender</span>
                    </div>
                    <div class="px-5">
                        <input type="radio" id="male" name="gender" value="male" required checked>
                        <span for="male">Male</span>
                    </div>

                    <div class=" px-5">
                        <input type="radio" id="female" name="gender" value="female" required>
                        <span for="female">Female</span>

                    </div>


                </div>
                <div class=" grid md:grid-cols-2 sm:gap-4">
                    <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="age" min="8" max="80" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="age" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Age (8 - 80):</label>
                    </div>

                    <div class="relative flex maxsm:mt-5  items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="height" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="height" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (cm):</label>
                    </div>
                    <div class="relative flex maxsm:mt-5  items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="weight" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="weight" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Weight (kg):</label>
                    </div>

                    <div class="relative flex maxsm:mt-5 items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="body-fat-percentage" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="body-fat-percentage" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Body Fat Percentage (%):</label>
                    </div>
                </div>
                <div class=" maxsm:mt-5 grid md:grid-cols-1 sm:gap-4">
                    <div class="flex m-0">
                        <select id="activity" class="w-full h-9 sm:h-10 outline-none border rounded-full sm:m-0 px-2 sm:px-5 text-[#a2adb9] focus:text-primary_button focus:border-primary_button cursor-pointer">
                            <option value="1.2">Sedentary: little or no exercise</option>
                            <option value="1.375" selected>Light: exercise 1-3 times/week</option>
                            <option value="1.550">Moderate: exercise 4-5 times/week</option>
                            <option value="1.725">Active: daily exercise or intense exercise 3-4 times/week</option>
                            <option value="1.9">Very Active: intense exercise 6-7 times/week</option>
                            <option value="2.2">Extra Active: very intense exercise daily, or physical job</option>
                        </select>
                    </div>
                </div>
                <div class="flex mt-5  items-center justify-center mb-5 flex-col xs:flex-row maxsm:text-sm">
                    <div class="pe-4 sm:pe-24">
                        <span for="isChild" class=" text-[#a2adb9]">BMR estimation formula:
                        </span>
                    </div>
                    <div class=" px-5">
                        <input type="radio" id="mifflin" name="formula" value="mifflin" required checked>
                        <span for="mifflin">Mifflin-St Jeor</span>
                    </div>

                    <div class=" px-5">
                        <input type="radio" id="katch" name="formula" value="katch" required>
                        <span for="katch">Katch-McArdle</span>

                    </div>
                </div>



                <div class="flex justify-center items-center">
                    <button id="calculate-btn" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Fat Intake Calculator (US Units)
            </h3>
            <div class="py-5 px-4">
                <p id="warning2" class="text-primary_button mb-5 ms-2"></p>

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
                <div class=" grid md:grid-cols-2 sm:gap-4">
                    <div class="relative flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="ages" min="8" max="80" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="ages" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Age (8 - 80):</label>
                    </div>

                    <div class="relative maxsm:mt-5  flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="weightpound" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="weightpound" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">weight (pounds):</label>
                    </div>
                    <div class="relative maxsm:mt-5  flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="height-feet" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="height-feet" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (feet):</label>
                    </div>

                    <div class="relative maxsm:mt-5  flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="height-inches" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="height-inches" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (inches):</label>
                    </div>
                </div>
                <div class=" grid maxsm:mt-5 md:grid-cols-2 sm:gap-4">
                    <div class="flex  m-0">
                        <select id="activity-levels" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full sm:m-0 px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button cursor-pointer">
                            <option value="1.2">Sedentary: little or no exercise</option>
                            <option value="1.375" selected>Light: exercise 1-3 times/week</option>
                            <option value="1.550">Moderate: exercise 4-5 times/week</option>
                            <option value="1.725">Active: daily exercise or intense exercise 3-4 times/week</option>
                            <option value="1.9">Very Active: intense exercise 6-7 times/week</option>
                            <option value="2.2">Extra Active: very intense exercise daily, or physical job</option>
                        </select>
                    </div>
                    <div class="relative maxsm:mt-5  flex items-center border rounded-full w-full mb-1 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="body-fat-percentages" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="body-fat-percentages" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Body Fat Percentage (%):</label>
                    </div>
                </div>
                <div class="flex maxsm:mt-5  items-center justify-center mb-5 flex-col xs:flex-row maxsm:text-sm">


                    <div class="pe-4 sm:pe-24">
                        <span for="isChild" class=" text-[#a2adb9]">BMR estimation formula:
                        </span>
                    </div>
                    <div class=" px-5">
                        <input type="radio" id="mifflin" name="formulas" value="mifflin" required checked>
                        <label for="mifflin" class="radiolabel">Mifflin-St Jeor</label>
                    </div>

                    <div class=" px-5">
                        <input type="radio" id="katch" name="formulas" value="katch" required>
                        <label for="katch" class="radiolabel">Katch-McArdle</label>

                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <button id="calculate-btns" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

    </div>
    <div id="additionalDiv" class=" mt-5 hidden bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg">
        Result
    </div>

    <div class=" text-center mt-5 flex justify-center items-center">
        <div id="result"></div>
    </div>
</section>

<script src="./app/views/pages/fat-intake-calculator/fat-intake-calculator-script.js"></script>