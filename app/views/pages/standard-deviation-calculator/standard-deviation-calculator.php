<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 gap-5 mb-4">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Standard Deviation Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <span class="block pb-6 text-gray-400"><span class="text-primary_button">*</span>Please provide numbers separated by <span class="font-semibold">commas(,)</span> to calculate.</span>
                <p id="warnspan" class="text-primary_button m-0"></p>
                <p id="limit1" class="text-primary_button m-0"></p>
                <div class="relative flex items-center border rounded-3xl w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:mt-1">
                    <textarea id="inputTextarea" cols="108" placeholder="Enter Your Numbers" class="outline-none sm:h-32 mx-5 py-2 w-full max-w-full duration-300"></textarea>
                </div>
                <div class="flex justify-center gap-7 maxsm:text-15px mb-4">
                    <span>Calculate with: </span>
                    <div class="flex items-center cursor-pointer mb-4">
                        <input type="radio" id="population" name="std_calcualtion" value="population" class="w-4 sm:w-5 h-4 sm:h-5 mr-2" checked>
                        <label for="population" class="radiolabel">Population</label>
                    </div>
                    <div class="flex items-center cursor-pointer mb-4">
                        <input type="radio" id="sample" name="std_calcualtion" value="sample" class="w-4 sm:w-5 h-4 sm:h-5 mr-2">
                        <label for="sample" class="radiolabel">Sample</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="stdCalcualte" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <div id="result" class="hidden text-start sm:text-center col-span-1 mb-4">
            <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <p id="solution1" class="py-5"></p>
            <p id="solution5"></p>
            <p id="solution2"></p>
            <p id="solution3"></p>
            <p id="solution4"></p>
            <p id="solution7" class="py-3"></p>
            <p id="solution6"></p>
        </div>
    </div>
</section>

<script src="./app/views/pages/standard-deviation-calculator/standard-deviation-script.js"></script>