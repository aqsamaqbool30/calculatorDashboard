    <section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
        <div id="inputdivs" class="accordion grid grid-cols-1 gap-5 mb-4">
            <div class="m-0 cls-shadow h-full bg-white rounded-lg">
                <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Ohms Law Calculator</h3>
                <div class="py-5 px-4 mb-4">
                    <p class="text-label_color pb-6"><span class="text-primary_button">* </span>Please provide any 2 values to get the other values in the <b>ohm's law</b> equations V = I × R and P = V × I.</p>
                    <p id="limit1" class="text-primary_button m-0"></p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-2 sm:gap-4 mb-4">
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="voltage" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="voltage" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Voltage (V)</label>
                        </div>
                        <select id="voltageSelect" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <option class="font-semibold" disabled>Unit</option>
                            <option value="1000">kilovolts [kV]</option>
                            <option value="1">volts [V]</option>
                            <option value="0.001">millivolts [mV]</option>
                        </select>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="current" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="current" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Current (I)</label>
                        </div>
                        <select id="currentSelect" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <option class="font-semibold" disabled>Unit</option>
                            <option value="1">amperes [A]</option>
                            <option value="0.001">milliamperes [mA]</option>
                        </select>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="resistance" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="resistance" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Resistance (R)</label>
                        </div>
                        <select id="resistanceSelect" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <option class="font-semibold" disabled>Unit</option>
                            <option value="1">ohms [Ω]</option>
                            <option value="1000">kilohms [kΩ]</option>
                            <option value="1000000">Megohms [MΩ]</option>
                        </select>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="power" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="power" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Power (P)</label>
                        </div>
                        <select id="powerSelect" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <option class="font-semibold" disabled>Unit</option>
                            <option value="1">watt [W]</option>
                            <option value="1000">kilowatt [kW]</option>
                            <option value="1000000">megawatt [MW]</option>
                            <option value="746">horsepower</option>
                            <option value="0.29307107">BTU/h</option>
                        </select>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="calcOhmsLaw" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Generate</button>
                    </div>
                </div>
            </div>

            <div id="result" class="hidden mb-4">
                <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
                <div class="text-start sm:text-center">
                    <p id="solution1"></p>
                    <p id="solution2"></p>
                    <p id="solution3"></p>
                    <p id="solution4"></p>
                    <p id="solution5"></p>
                    <p id="solution6"></p>
                </div>
            </div>
        </div>
    </section>

    <script src="./app/views/pages/ohms-law-calculator/ohms-law-script.js"></script>