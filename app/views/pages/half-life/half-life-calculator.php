<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 lg:grid-cols-2 lg:gap-5 mb-4">
        <div class="lg:m-0 cls-shadow h-full bg-white rounded-lg maxlg:pb-6">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Half-Life Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <span class="block tex-sm pb-6 text-gray-400"><span class="text-primary_button">*</span>Enter any three values to get the fourth.</span>
                <p id="warningID" class="text-primary_button"></p>
                <p id="warningID2" class="text-primary_button"></p>
                <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="remains" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="remains" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Quantity remains (N<sub>t</sub>)</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="initial" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="initial" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Initial quantity (N<sub>0</sub>)</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="time" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="time" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">time (t)</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="half-life" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="half-life" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">half-life (t<sub>1/2</sub>)</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="calc-half-life" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <div class="lg:m-0 cls-shadow h-full bg-white rounded-lg maxlg:pb-6">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Conversion Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p class="block tex-sm pb-6 text-gray-400"><span class="text-primary_button">*</span>Enter one value to get the other two.</p>
                <p id="warningIDSeond" class="text-primary_button"></p>
                <div class="grid grid-cols-1 sm:grid-cols-3 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="convert-half-life" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="convert-half-life" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Half-Life (t<sub>1/2</sub>)</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="convert-lifetime" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="convert-lifetime" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Mean Lifetime (τ)</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="convert-decay" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="convert-decay" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Decay constant (λ)</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="conversion-calculator" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

    </div>
    <div id="result" class="hidden text-center col-span-2 mb-4">
        <div class=" bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
        <p id="solution-div1"></p>
        <p id="solution-div2"></p>
        <p id="solution-div3"></p>
    </div>

</section>

<script src="./app/views/pages/half-life/half-life-script.js"></script>