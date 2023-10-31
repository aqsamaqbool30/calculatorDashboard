    <section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
        <div id="inputdivs" class="accordion grid lg:grid-cols-2 gap-5 mb-4">
            <div class="m-0 cls-shadow h-full bg-white rounded-lg">
                <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Tip Calculator</h3>
                <div class="py-5 px-4 mb-4">
                    <p class="text-label_color pb-6"><span class="text-primary_button">* </span>A tip of 15% of the before tax meal price is typically expected.</p>
                    <p id="limit1" class="text-primary_button m-0"></p>
                    <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 mb-4">
                        <div class="col-span-2 relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="priceBeforeTip" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="priceBeforeTip" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Price ($)</label>
                        </div>
                        <div class="flex justify-center items-center md:w-full mb-4 md:mb-8">
                            <button id="tipCalculator" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 md:w-full h-10 rounded-full duration-150 text-primary_button">Generate</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="m-0 cls-shadow h-full bg-white rounded-lg">
                <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Shared Bill Tip Calculator</h3>
                <div class="py-5 px-4 mb-4">
                    <p id="limit2" class="text-primary_button m-0"></p>
                    <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 mb-4">
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="sharedPrice" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="sharedPrice" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Price ($)</label>
                        </div>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="tip" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="tip" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Tip %</label>
                        </div>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="numberOfPeople" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="numberOfPeople" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">No. of People</label>
                        </div>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="sharedBillCalc" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Generate</button>
                    </div>
                </div>
            </div>

            <div id="result" class="hidden lg:col-span-2 mb-4">
                <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
                <div class="text-start sm:text-center mb-4">
                    <p id="solution1"></p>
                    <p id="solution2"></p>
                    <p id="solution3"></p>
                    <p id="solution4"></p>
                    <div id="tableAdditionHTML" class="flex justify-center mb-4"></div>
                </div>
            </div>
        </div>
    </section>

    <script src="./app/views/pages/tip-calculator/tip-script.js"></script>