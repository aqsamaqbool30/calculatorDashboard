<link rel="stylesheet" href="./app/views/pages/fraction-calculator/fraction-style.css">

<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 lg:grid-cols-2 gap-5 mb-4">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Fraction Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p id="limitWarning1" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-3 sm:gap-4 mb-4">
                    <div class="m-0 maxsm:flex justify-center items-center">
                        <div class="relative flex items-center border rounded-full w-full m-0 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="num1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="num1" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none"><span class="hidden xs:block">Enter Number</span><span class="block xs:hidden">Value1</span></label>
                        </div>
                        <div class="w-1/4 sm:w-full h-[2px] bg-[#a2adb9] my-3 sm:my-7 mx-0 maxsm:-rotate-[60deg]"></div>
                        <div class="relative flex items-center border rounded-full w-full m-0 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="num2" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="num2" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none"><span class="hidden xs:block">Enter Number</span><span class="block xs:hidden">Value2</span></label>
                        </div>
                    </div>
                    <div class="flex items-center m-0">
                        <select id="selctOperator" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full my-7 sm:m-0 px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button cursor-pointer">
                            <?php include './app/views/components/fraction-select-values.php'; ?>
                        </select>
                    </div>
                    <div class="m-0 maxsm:flex justify-center items-center">
                        <div class="relative flex items-center border rounded-full w-full m-0 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="num3" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="num3" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none"><span class="hidden xs:block">Enter Number</span><span class="block xs:hidden">Value3</span></label>
                        </div>
                        <div class="w-1/4 sm:w-full h-[2px] bg-[#a2adb9] my-3 sm:my-7 mx-0 maxsm:-rotate-[60deg]"></div>
                        <div class="relative flex items-center border rounded-full w-full m-0 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="num4" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="num4" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none"><span class="hidden xs:block">Enter Number</span><span class="block xs:hidden">Value4</span></label>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="calcFraction" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Big Number Fraction Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p class="block tex-sm pb-6 text-gray-400 m-0"><span class="text-primary_button">*</span>Use this calculator if the numerators or denominators are very big integers.</p>
                <p id="limits" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-5 sm:gap-4 mb-4">
                    <div class="m-0 col-span-2 maxsm:flex justify-center items-center">
                        <div class="relative flex items-center border rounded-full w-full m-0 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="bignum1" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="bignum1" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none"><span class="hidden xs:block">Enter Number</span><span class="block xs:hidden">Value1</span></label>
                        </div>
                        <div class="w-1/4 sm:w-full h-[2px] bg-[#a2adb9] my-3 sm:my-7 mx-0 maxsm:-rotate-[60deg]"></div>
                        <div class="relative flex items-center border rounded-full w-full m-0 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="bignum2" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="bignum2" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none"><span class="hidden xs:block">Enter Number</span><span class="block xs:hidden">Value2</span></label>
                        </div>
                    </div>
                    <div class="flex items-center m-0">
                        <select id="selctbigInt" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full my-7 sm:m-0 px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button cursor-pointer">
                            <option value="+">Add</option>
                            <option value="-">Subtract</option>
                            <option value="*">Product</option>
                            <option value="/">Divide</option>
                        </select>
                    </div>
                    <div class="m-0 col-span-2 maxsm:flex justify-center items-center">
                        <div class="relative flex items-center border rounded-full w-full m-0 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="bignum3" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="bignum3" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none"><span class="hidden xs:block">Enter Number</span><span class="block xs:hidden">Value3</span></label>
                        </div>
                        <div class="w-1/4 sm:w-full h-[2px] bg-[#a2adb9] my-3 sm:my-7 mx-0 maxsm:-rotate-[60deg]"></div>
                        <div class="relative flex items-center border rounded-full w-full m-0 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="bignum4" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="bignum4" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none"><span class="hidden xs:block">Enter Number</span><span class="block xs:hidden">Value4</span></label>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="calcbigIntergers" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <div id="result" class="hidden text-start md:text-center col-span-1 lg:col-span-2 mb-4">
            <div class=" bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <p id="solution1"></p>
            <p id="solution2"></p>
            <p id="solution3"></p>
            <div id="graphs" class="w-full max-h-[680px] flex flex-wrap justify-center items-center text-center mb-4">
                <div id="graphContainer1" class="hidden w-[210px] h-[210px] mb-4"></div>
                <span class="font-bold text-lg sm:text-2xl">&nbsp;&nbsp;+&nbsp;&nbsp;</span>
                <div id="graphContainer2" class="hidden w-[210px] h-[210px] mb-4"></div>
                <span class="font-bold text-lg sm:text-2xl">&nbsp;&nbsp;=&nbsp;&nbsp;</span>
                <div id="graphContainer3" class="hidden w-[210px] h-[210px] mb-4"></div>
            </div>
        </div>

        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Mixed Number Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p class="block tex-sm pb-6 text-gray-400 m-0"><span class="text-primary_button">*</span>Enter Number in this format (no spaces) = <span class="font-semibold">MixedNumber + Numerator / Denomerator </span></p>
                <p id="wrongFormat" class="hidden tex-sm pb-6 text-primary_button m-0">Invalid input format. Please use the format a+b/c.</p>
                <div class="grid grid-cols-1 sm:grid-cols-3 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="text" id="mixNumb1" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="mixNumb1" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Enter Number</label>
                    </div>
                    <select id="mixNumbSelect" class="w-full h-9 sm:h-10 outline-none border rounded-full mb-5 sm:m-0 px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button cursor-pointer">
                        <?php include './app/views/components/fraction-select-values.php'; ?>
                    </select>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="text" id="mixNumb2" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="mixNumb2" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Enter Number</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="calcMixed" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Generate</button>
                </div>
            </div>
        </div>

        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Simplify Fractions Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p class="pb-6 text-gray-400 m-0"><span class="text-primary_button">*</span>Enter a mixed number: whole number x Numerator/Denomerator</p>
                <p id="limitWarning" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-3 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="wholeNumb" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="wholeNumb" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Whole Number</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="numerator" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="numerator" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Numerator</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="denomerator" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="denomerator" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Denomerator</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="mixedNumbers" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Generate</button>
                </div>
            </div>
        </div>

        <div id="result1" class="hidden text-start md:text-center col-span-1 lg:col-span-2 mb-4">
            <div class=" bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <p id="solution10"></p>
            <p id="solution11"></p>
            <p id="solution12"></p>
        </div>

        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Fraction to Decimal Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p id="limit5" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="numeratorFraction" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="numeratorFraction" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Numerator</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="denomeratorFraction" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="denomeratorFraction" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Denomerator</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="fractiontoDecimals" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Generate</button>
                </div>
            </div>
        </div>

        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Decimal to Fraction Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p id="limit6" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-3 sm:gap-4 mb-4">
                    <div class="sm:col-span-2 relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="decimal" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="decimal" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Enter Number</label>
                    </div>
                    <div class="col-span-1 flex justify-center items-center w-full h-10 mb-4">
                        <button id="decimalsID" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 sm:w-full h-10 sm:h-full rounded-full duration-150 text-primary_button">Calculate</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="result2" class="hidden text-start md:text-center col-span-1 lg:col-span-2 mb-4">
            <div class="bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <p id="solution13"></p>
            <p id="solution14"></p>
            <p id="solution15"></p>
        </div>
    </div>
</section>

<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<script src="./app/views/pages/fraction-calculator/fraction-script.js"></script>