<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 lg:grid-cols-2 gap-5 mb-4">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Ratio Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p class="block tex-sm pb-6 text-gray-400"><span class="text-primary_button">*</span>Enter any 3 values below to calculate the fourth in ratio <b>A:B = C:D.</b></p>
                <p id="limitFirst" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="valA" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="valA" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Value A</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="valB" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="valB" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Value B</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="valC" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="valC" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Value C</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="valD" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="valD" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Value D</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="fourthRatio" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <!-- Ratio Scaling Calculator -->
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Ratio Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p id="limit1" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="scaleRatioA" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="scaleRatioA" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Value A</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="scaleRatioB" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="scaleRatioB" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Value B</label>
                    </div>
                    <select id="scaleRatioSelect" class="select_class w-full h-9 sm:h-10 text-sm md:text-base outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <option value="Shrink">Shrink</option>
                        <option value="Enlarge">Enlarge</option>
                    </select>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="scaleRatioTimes" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="scaleRatioTimes" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Times</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="scaleRatio" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <div id="result" class="hidden text-start md:text-center col-span-1 lg:col-span-2 mb-4">
            <div class=" bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <p id="solution1" class="py-1"></p>
            <p id="solution2" class="py-1"></p>
            <p id="solution3" class="py-1"></p>
            <div id="chartContainer" class="hidden mb-4" style="height: 300px; width: 100%; max-width: 100%;"></div>
            <div id="staraightGraph" class="hidden mb-4">
                <div class="flex justify-between items-center max-w-[400px] mx-auto my-0">
                    <p class="m-0">Left: <span id="left"></span></p>
                    <p class="m-0">Right: <span id="right"></span></p>
                </div>
                <div id="squareGraph" class="border flex justify-center items-center max-w-[400px] h-10 mx-auto mb-4">
                    <div id="SquareA" class="bg-secondary_color h-full m-0"></div>
                    <div id="SquareB" class="bg-primary_button h-full m-0"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<script src="./app/views/pages/ratio-calculator/ratio-script.js"></script>