<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 coxl:grid-cols-2 gap-5 mb-4">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Sample Size Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p id="instruction" class="tex-sm pb-6 text-gray-400"><span class="text-primary_button">*</span>If no value for confidence level is selected then it is used as 50%.</p>
                <p id="warn1" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                    <select id="confidence-level" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <?php include './app/views/components/confidence-level-select.php'; ?>
                    </select>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="errorMargin" min="0" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="errorMargin" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Margin of Error (%)</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="populationProportion" min="0" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="populationProportion" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Population Proportion (%)</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="populationSize" min="0" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="populationSize" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Population Size</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="clacSampleSize" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Margin of Error Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p id="instruction" class="tex-sm pb-6 text-gray-400"><span class="text-primary_button">*</span>If no value for confidence level is selected then it is used as 50%.</p>
                <p id="warn2" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                    <select id="selectMarginLevel" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <?php include './app/views/components/confidence-level-select.php'; ?>
                    </select>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="sampleSize" min="0" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="sampleSize" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Sample Size</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="errorPopulationProportion" min="0" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="errorPopulationProportion" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Population Proportion (%)</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="errorPopulationSize" min="0" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="errorPopulationSize" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Population Size</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="clacErrorMargin" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <div id="result" class="hidden text-start md:text-center col-span-1 lg:col-span-2 mb-4">
            <div class="bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <p id="solution1"></p>
            <p id="solution2"></p>
            <p id="solution3"></p>
            <p id="solution4"></p>
            <p id="solution5"></p>
        </div>
</section>

<script src="./app/views/pages/sample-size-calculator/sample-size-script.js"></script>