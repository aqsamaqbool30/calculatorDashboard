<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 lg:grid-cols-2 lg:gap-5 mb-4">
        <!-- first calcualtor -->
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Binary Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p id="limit1" class="text-primary_button m-0"></p>
                <p id="limitFirst" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 xs:grid-cols-3 gap-2 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="text" id="num1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="num1" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Number 1</label>
                    </div>
                    <div class="maxsm:text-15px flex justify-center mb-5 md:mb-8">
                        <select id="operator" class="select_class w-full outline-none border rounded-full px-4 sm:px-5 focus:text-primary_button text-label_color">
                            <option value="+">Add</option>
                            <option value="-">Subtract</option>
                            <option value="*">Multiply</option>
                            <option value="/">Divide</option>
                        </select>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="text" id="num2" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="num2" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Number 2</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="calculate" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>
        <!-- second  -->
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Binary to Decimal Converter</h3>
            <div class="py-5 px-4 mb-4">
                <p id="limit2" class="text-primary_button m-0"></p>
                <p id="limitSecond" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 xs:grid-cols-3 gap-2 mb-4">
                    <div class="col-span-2 relative flex items-center border rounded-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="text" id="binaryValue" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="binaryValue" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Binary Value</label>
                    </div>
                    <div class="flex justify-center items-center w-full mb-5 md:mb-8">
                        <button id="convertToDecimal" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button">Convert</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- result for 1st & 2nd -->
        <div id="resultID1" class="hidden text-center xs:col-span-2 mb-4">
            <div class="bg-primary_button text-white font-semibold py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <p id="binaryResult"></p>
            <p id="decimalResult"></p>
        </div>
        <!-- third  -->
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Decimal to Binary Converter</h3>
            <div class="py-5 px-4 mb-4">
                <p id="limit3" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 xs:grid-cols-3 gap-2 mb-4">
                    <div class="col-span-2 relative flex items-center border rounded-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="text" id="decimalValuethird" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="decimalValuethird" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Decimal Value</label>
                    </div>
                    <div class="flex justify-center items-center w-full mb-5 md:mb-8">
                        <button id="convertthird" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full h-10 rounded-full duration-150 text-primary_button">Convert</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- result for 3rd -->
        <div id="resultID2" class="hidden text-center xs:col-span-2 mb-4">
            <div class="block bg-primary_button text-white font-semibold py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <p id="thirdResult"></p>
        </div>
    </div>
</section>
<script src="./app/views/pages/binary-calculator/binary-script.js"></script>