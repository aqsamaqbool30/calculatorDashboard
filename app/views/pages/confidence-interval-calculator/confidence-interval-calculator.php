<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 gap-5 mb-4">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg col-span-1">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Confidence Interval Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p id="instruction" class="tex-sm pb-6 text-gray-400"><span class="text-primary_button">*</span>If no value for confidence level is selected then it is used as 50%.</p>
                <p id="warning1" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-2 coxl:grid-cols-4 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="sampleSize" min="0" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="sampleSize" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Sample size (amount), <b>n</b></label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="meanValue" min="0" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="meanValue" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Sample Mean (average), <b>X̄</b></label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="std" min="0" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="std" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Standard Deviation, <b>σ or s</b></label>
                    </div>
                    <select id="confidenceLevel" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <?php include './app/views/components/confidence-level-select.php'; ?>
                    </select>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="clacSampleSize" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <div id="result" class="hidden text-start md:text-center col-span-1 lg:col-span-2 mb-4">
            <div class="bg-primary_button text-white font-semibold !text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <p id="solution1"></p>
            <p class="font-semibold">Error&nbsp;Bar:</p>
            <div class="relative max-w-[300px] h-9 maxsm:mr-auto sm:mx-auto my-0 flex items-center">
                <div id="solution2" class=" bg-secondary_color h-9 mx-auto my-0 flex items-center"></div>
                <div id="graphLine" class="absolute right-0 bg-black h-[2px] z-10 m-0 mx-0 my-auto flex items-center duration-200">
                    <div class="bg-black w-[2px] h-6 z-10 m-0"></div>
                    <div class="absolute top-0 bottom-0 right-0 bg-black w-[2px] h-6 z-10 mx-0 my-auto"></div>
                </div>
            </div>
        </div>
</section>

<script src="./app/views/pages/confidence-interval-calculator/confidence-interval-script.js"></script>