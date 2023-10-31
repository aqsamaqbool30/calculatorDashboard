<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 lg:grid-cols-2 gap-5 mb-4">
        <div id="probabilityfirstDiv" class="m-0 cls-shadow col-span-1 h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Probability Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p id="instruction" class="block pb-6 text-gray-400"><span class="text-primary_button">*</span>Please provide values for probability between 0 and 1.</p>
                <p id="firstWarn" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="probA" min="0" step="0.1" max="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="probA" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Probability of A: <span class="font-semibold"> P(A)</span></label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="probB" min="0" step="0.1" max="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="probB" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Probability of B: <span class="font-semibold"> P(B)</span></label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="probGenetate" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <div id="normalDistribution" class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Probability of a Normal Distribution</h3>
            <div class="py-5 px-4 mb-4">
                <p id="limit4" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="mean" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="mean" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Mean (µ)</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="standardDeviation" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="standardDeviation" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Standard Deviation (σ)</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="leftBound" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="leftBound" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Left Bound (L<sub>b</sub> )</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="rightBound" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="rightBound" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Right Bound (R<sub>b</sub> )</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="probDistribution" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <div id="result" class="hidden text-start md:text-center col-span-1 lg:col-span-2 mb-4">
            <div class="bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <div id="solution-div1" class="flex flex-row-reverse justify-center items-center mb-4">
                <img src="<?php echo $assetConfig['asset_url'] ?>/images/probability_img_1.png" alt="" class="pl-5 w-[100px] inline-block">
            </div>
            <div id="solution-div2" class="flex flex-row-reverse justify-center items-center mb-4">
                <img src="<?php echo $assetConfig['asset_url'] ?>/images/probability_img_2.png" alt="" class="pl-5 w-[100px] inline-block">
            </div>
            <div id="solution-div3" class="flex flex-row-reverse justify-center items-center mb-4">
                <img src="<?php echo $assetConfig['asset_url'] ?>/images/probability_img_3.png" alt="" class="pl-5 w-[100px] inline-block">
            </div>
            <div id="solution-div4" class="flex flex-row-reverse justify-center items-center mb-4">
                <img src="<?php echo $assetConfig['asset_url'] ?>/images/probability_img_4.png" alt="" class="pl-5 w-[100px] inline-block">
            </div>
            <div id="solution-div5" class="flex flex-row-reverse justify-center items-center mb-4">
                <img src="<?php echo $assetConfig['asset_url'] ?>/images/probability_img_5.png" alt="" class="pl-5 w-[100px] inline-block">
            </div>
            <div id="solution-div6" class="flex flex-row-reverse justify-center items-center mb-4">
                <img src="<?php echo $assetConfig['asset_url'] ?>/images/probability_img_6.png" alt="" class="pl-5 w-[100px] inline-block">
            </div>
            <div id="solution-div7" class="flex flex-row-reverse justify-center items-center mb-4">
                <img src="<?php echo $assetConfig['asset_url'] ?>/images/probability_img_7.png" alt="" class="pl-5 w-[100px] inline-block">
            </div>
            <div id="solution-div8" class="flex flex-row-reverse justify-center items-center mb-4">
                <img src="<?php echo $assetConfig['asset_url'] ?>/images/probability_img_8.png" alt="" class="pl-5 w-[100px] inline-block">
            </div>
            <p id="solution-div9" class="font-semibold text-lg">Calculations:</p>
            <p id="solution-div10"></p>
            <p id="solution-div11"></p>
            <p id="solution-div12"></p>
            <p id="solution-div13"></p>
            <p id="solution-div14"></p>
            <p id="solution-div15"></p>
            <p id="solution-div16"></p>
            <p id="solution-div17"></p>
        </div>

        <div id="probabilityIndependent" class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Probability of a Series of Independent Events</h3>
            <div class="py-5 px-4 mb-4">
                <p id="thirdWarning" class="text-primary_button m-0"></p>
                <p id="newwarning" class="text-primary_button m-0"></p>
                <span class="block mb-4 font-semibold">Event A</span>
                <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="probabilityA" min="0" max="1" step="0.1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="probabilityA" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Probability</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="repeatA" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="repeatA" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Repeat Times</label>
                    </div>
                </div>
                <span class="block mb-4 font-semibold">Event B</span>
                <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="probabilityB" min="0" max="1" step="0.1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="probabilityB" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Probability</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="repeatB" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="repeatB" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Repeat Times</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="independentProbability" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Probability Solver for Two Events</h3>
            <div class="py-5 px-4 mb-4">
                <p class="block pb-6 text-gray-400"><span class="text-primary_button">*</span>Please provide any 2 values down below to calculate the rest of probabilities.</p>
                <p id="warningforuth" class="text-primary_button"></p>
                <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="newprobabilityofA" min="0" step="0.1" max="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="newprobabilityofA" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">P(A)</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="newprobabilityofB" min="0" step="0.1" max="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="newprobabilityofB" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">P(B)</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="probNotA" min="0" step="0.1" max="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="probNotA" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">P(A')</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="probNotB" min="0" step="0.1" max="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="probNotB" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">P(B')</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="abIntersect" min="0" step="0.1" max="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="abIntersect" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">P(A∩B)</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="abunion" min="0" step="0.1" max="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="abunion" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">P(A∪B)</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="abDifference" min="0" step="0.1" max="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="abDifference" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">P(AΔB)</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="abunionNot" min="0" step="0.1" max="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="abunionNot" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">P((A∪B)')</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="probabilityGenerateAny" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <div id="result2" class="hidden text-start md:text-center col-span-1 lg:col-span-2 mb-4">
            <div class=" bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <p id="solution-prob1"></p>
            <p id="solution-prob2"></p>
            <p id="solution-prob3"></p>
            <p id="solution-prob4"></p>
            <p id="solution-prob1A"></p>
            <p id="solution-prob2A"></p>
            <p id="solution-prob3A"></p>
            <p id="solution-prob4A"></p>
            <p id="solution-prob5"></p>
            <p id="solution-prob6"></p>
            <p id="solution-prob7"></p>
            <p id="solution-prob8"></p>
            <p id="solution-prob10"></p>
            <p id="solution-prob11"></p>
            <p id="solution-prob12"></p>
            <p id="solution-prob13"></p>
            <p id="solution-prob14"></p>
        </div>

    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/9.5.1/math.min.js"></script>
<script src="./app/views/pages/probability-calculator/probability-script.js"></script>