<section id="inputdivs" class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mb-4">
        <!-- 1rd calculator  -->
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Percentage Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p class="block tex-sm pb-6 text-gray-400 m-0"><span class="text-primary_button">*</span>Please enter any 2 values below to calculate the third value.</p>
                <p id="limit1" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-2 cocoxl:grid-cols-3 items-center sm:gap-3 mb-4">
                    <div class="flex items-center gap-3 w-full m-0">
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="firstPercent" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="firstPercent" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Percentage</label>
                        </div>
                        <div class="mb-5 md:mb-8 font-semibold text-gray-400">of</div>
                    </div>
                    <div class="flex items-center m-0 gap-3 w-full">
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button maxsm:mt-1">
                            <input type="number" id="value" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="value" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Number</label>
                        </div>
                        <div class="mb-5 md:mb-8 font-semibold text-gray-400">=</div>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="restultFirst" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="restultFirst" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Result</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="calculateresultper" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>
        <!-- 2rd calculator  -->
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Percentage Difference Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p id="limit2" class="text-primary_button m-0"></p>
                <div class="grid sm:grid-cols-2 gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 sm:mr-3 focus-within:text-primary_button maxsm:text-15px">
                        <input type="number" id="value1" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="value1" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">value 1</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button maxsm:mt-1">
                        <input type="number" id="value2" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="value2" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">value 2</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="calculatePercentage" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>
        <!-- result for 1 and 2 -->
        <div id="result_percentage_oneTwo" class="hidden text-center lg:col-span-2 mb-4">
            <div class="bg-primary_button text-white font-semibold text-center py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <p id="result-difference"></p>
            <p id="result-increase"></p>
            <p id="explanation-increase"></p>
            <p id="explanation-difference"></p>
        </div>
        <!-- 3rd calculator  -->
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Percentage Change Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p class="block tex-sm pb-6 text-gray-400 m-0"><span class="text-primary_button">*</span>Please enter any 2 values below to calculate the third value.</p>
                <p id="limit3" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 m-0 maxsm:text-sm">
                    <div class="relative flex items-center border rounded-full mb-5 md:mb-8 focus-within:text-primary_button">
                        <input type="number" id="initial-value" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="min_range" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Value</label>
                    </div>
                    <div class="relative flex items-center border rounded-full mb-5 md:mb-8 focus-within:text-primary_button">
                        <input type="number" id="per_Change" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="max_range" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Percentage</label>
                    </div>
                    <div class="relative flex items-center border rounded-full mb-5 md:mb-8 focus-within:text-primary_button">
                        <input type="number" id="result3" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="result3" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Result</label>
                    </div>
                </div>
                <span class="block mb-3 font-semibold maxsm:text-15px text-gray-400">Select Order:</span>
                <div class="flex justify-center maxsm:text-15px mb-4">
                    <div class="flex justify-center items-center mr-5 mb-4">
                        <input type="radio" id="operation-increase" name="operation" value="increase" class="w-4 sm:w-5 h-4 sm:h-5 mr-2" checked><label for="operation-increase" class="radiolabel">Increase</label>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <input type="radio" id="operation-decrease" name="operation" value="decrease" class="w-4 sm:w-5 h-4 sm:h-5 mr-2"> <label for="operation-decrease" class="radiolabel">Decrease</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="calculate" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>
        <!--  4rd calculator  -->
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Calculator for Common Phrases</h3>
            <div class="py-5 px-4 mb-4">
                <!-- part I -->
                <p id="limitP1" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-4 gap-3 m-0">
                    <div class="col-span-2 flex items-center m-0 gap-3 w-full">
                        <span class="mb-3 sm:mb-5 font-semibold text-gray-400">what&nbsp;is</span>
                        <div class="relative inline-flex items-center border rounded-full w-full max-w-full mb-3 sm:mb-5 focus-within:text-primary_button maxsm:text-15px">
                            <input type="number" id="percentage" class="w-full h-9 sm:h-10 mx-5 text-xs sm:text-sm md:text-base outline-none" placeholder=" " required>
                            <label for="percentage" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Percentage(%)</label>
                        </div>
                    </div>
                    <div class="col-span-2 flex items-center m-0 gap-3 w-full">
                        <span class="mb-3 sm:mb-5 font-semibold text-gray-400"><span class="sm:hidden">&nbsp;&nbsp;&nbsp;&nbsp;</span>of<span class="sm:hidden">&nbsp;&nbsp;&nbsp;&nbsp;</span></span>
                        <div class="relative inline-flex items-center border rounded-full w-full max-w-full mb-3 sm:mb-5 focus-within:text-primary_button">
                            <input type="number" id="number" class="w-full h-9 sm:h-10 mx-5 text-xs sm:text-sm md:text-base outline-none" placeholder=" " required>
                            <label for="number" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Number</label>
                        </div>
                    </div>
                    <div class="sm:col-span-4 mb-4">
                        <div class="flex justify-center items-center mb-3 md:mb-5">
                            <button id="calcuateIsWhat" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                        </div>
                    </div>
                </div>
                <!-- part II -->
                <p id="limitP2" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-5 gap-3 m-0">
                    <div class="col-span-2 flex items-center m-0 gap-3 w-full">
                        <div class="relative inline-flex items-center border rounded-full w-full max-w-full mb-3 sm:mb-5 focus-within:text-primary_button maxsm:text-15px">
                            <input type="number" id="firstNumber" class="w-full h-9 sm:h-10 mx-5 text-xs sm:text-sm md:text-base outline-none" placeholder=" " required>
                            <label for="firstNumber" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Number</label>
                        </div>
                    </div>
                    <div class="flex justify-center items-center font-semibold text-gray-400 mb-3 sm:mb-5">
                        is&nbsp;what&nbsp;%&nbsp;of
                    </div>
                    <div class="col-span-2 relative inline-flex items-center border rounded-full w-full max-w-full mb-3 sm:mb-5 focus-within:text-primary_button">
                        <input type="number" id="secondNumber" class="w-full h-9 sm:h-10 mx-5 text-xs sm:text-sm md:text-base outline-none" placeholder=" " required>
                        <label for="secondNumber" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Number</label>
                    </div>
                    <div class="sm:col-span-5 mb-4">
                        <div class="flex justify-center items-center mb-3 md:mb-5">
                            <button id="calcuateOfWhat" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                        </div>
                    </div>
                </div>
                <!-- part III -->
                <p id="limitP3" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-4 gap-3 m-0">
                    <div class="col-span-2 flex items-center m-0 gap-3 w-full">
                        <div class="relative inline-flex items-center border rounded-full w-full max-w-full mb-3 sm:mb-5 focus-within:text-primary_button maxsm:text-15px">
                            <input type="number" id="first_Number" class="w-full h-9 sm:h-10 mx-5 text-xs sm:text-sm md:text-base outline-none" placeholder=" " required>
                            <label for="first_Number" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Number</label>
                        </div>
                        <span class="mb-3 sm:mb-5 font-semibold text-gray-400"><span class="sm:hidden">&nbsp;&nbsp;&nbsp;&nbsp;</span>is<span class="sm:hidden">&nbsp;&nbsp;&nbsp;&nbsp;</span></span>
                    </div>
                    <div class="col-span-2 flex items-center m-0 gap-3 w-full">
                        <div class="relative inline-flex items-center border rounded-full w-full max-w-full mb-3 sm:mb-5 focus-within:text-primary_button">
                            <input type="number" id="second_Number" class="w-full h-9 sm:h-10 mx-5 text-xs sm:text-sm md:text-base outline-none" placeholder=" " required>
                            <label for="second_Number" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Percentage(%)</label>
                        </div>
                        <span class="mb-3 sm:mb-5 font-semibold text-gray-400">of&nbsp;what</span>
                    </div>
                    <div class="sm:col-span-4 mb-4">
                        <div class="flex justify-center items-center mb-3 md:mb-5">
                            <button id="calcuateWhatof" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- result for 3 and 4 -->
    <div id="result_percentage_threeFour" class="hidden text-center lg:col-span-2 mb-4">
        <div class="bg-primary_button text-white font-semibold text-center py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
        <div class="flex justify-center items-center mb-4">
            <div class="m-0 pt-2">
                <div id="result_per" class="m-0"></div>
                <div id="results" class="mb-0"></div>
            </div>
            <div class="m-0">
                <div id="result4" class="m-0"></div>
                <div id="result3" class="m-0"></div>
            </div>
        </div>
    </div>
    </div>
</section>

<script src="./app/views/pages/percentage-calculator/percentage-script.js"></script>