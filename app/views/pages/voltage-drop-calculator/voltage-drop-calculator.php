<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 lg:grid-cols-2 gap-5">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">NEC Data</h3>
            <div class="py-5 px-4">
                <p id="limit1" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4">
                    <select id="wire-material" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <option value="" disabled>Wire Material</option>
                        <option value="0.00000000168">Copper</option>
                        <option value="0.00000000265">Aluminium</option>
                    </select>
                    <select id="wire-size" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <option value="" disabled>Wire Size</option>
                        <option value="14 AWG">14 AWG</option>
                        <option value="12 AWG">12 AWG</option>
                        <option value="10 AWG">10 AWG</option>
                        <option value="8 AWG">8 AWG</option>
                        <option value="6 AWG">6 AWG</option>
                        <option value="4 AWG">4 AWG</option>
                        <option value="3 AWG">3 AWG</option>
                        <option value="2 AWG">2 AWG</option>
                        <option value="1 AWG">1 AWG</option>
                        <option value="1/0 AWG">1/0 AWG</option>
                        <option value="2/0 AWG">2/0 AWG</option>
                        <option value="3/0 AWG">3/0 AWG</option>
                        <option value="4/0 AWG">4/0 AWG</option>
                        <option value="250 Kcmil">250 Kcmil</option>
                        <option value="300 Kcmil">300 Kcmil</option>
                        <option value="350 Kcmil">350 Kcmil</option>
                        <option value="400 Kcmil">400 Kcmil</option>
                        <option value="500 Kcmil">500 Kcmil</option>
                        <option value="600 Kcmil">600 Kcmil</option>
                        <option value="700 Kcmil">700 Kcmil</option>
                        <option value="1000 Kcmil">1000 Kcmil</option>
                    </select>
                    <select id="conduit-material" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <option value="" disabled>Material of conduit</option>
                        <option value="pvc">PVC</option>
                        <option value="aluminium">Aluminium</option>
                        <option value="steel">Steel</option>
                    </select>
                    <select id="phase" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <option value="" disabled>Phase</option>
                        <option value="dcPhase">DC</option>
                        <option value="acSinglePhase">AC single phase</option>
                        <option value="acThreePhase">AC 3-phase</option>
                    </select>
                    <select id="conductors" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <option value="" disabled>Number of conductors</option>
                        <option value="conductorsSingle">Single set of conductors</option>
                        <option value="conductorsTwo">2 conductors per phase in parallel</option>
                        <option value="conductorsThree">3 conductors per phase in parallel</option>
                        <option value="conductorsFour">4 conductors per phase in parallel</option>
                        <option value="conductorsFive">5 conductors per phase in parallel</option>
                        <option value="conductorsSix">6 conductors per phase in parallel</option>
                        <option value="conductorsSeven">7 conductors per phase in parallel</option>
                        <option value="conductorsEight">8 conductors per phase in parallel</option>
                        <option value="conductorsNine">9 conductors per phase in parallel</option>
                    </select>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="powerFactor" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="powerFactor" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Power factor (PF)</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="voltage" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="voltage" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Voltage</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="loadCurrent" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="loadCurrent" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Load current (Amps)</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="distance" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="distance" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Distance (one-way)</label>
                    </div>
                    <select id="distanceSelect" value="Meters" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <option value="feet">Feet</option>
                        <option value="meters">Meters</option>
                        <option value="miles">Miles</option>
                        <option value="kilometers">Kilometers</option>
                    </select>
                </div>
                <div class="flex justify-center items-center">
                    <button id="btnVoltageDrop" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <!-- display for 1st and 2nd -->
        <div id="result" class="hidden text-center col-span-1 lg:col-span-2 [&>*]:py-2">
            <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg">Result</div>
            <p id="solution1"></p>
            <p id="solution2"></p>
            <p id="solution3"></p>
            <p id="solution4"></p>
        </div>
    </div>
</section>

<script src="./app/views/pages/voltage-drop-calculator/voltage-drop-script.js"></script>