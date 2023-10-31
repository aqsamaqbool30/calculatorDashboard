<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 lg:grid-cols-2 gap-5 mb-4">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Horsepower Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p id="limit1" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="force" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="force" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Force</label>
                    </div>
                    <select id="forceSelect" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <option value="newtons">Newton</option>
                        <option value="kilonewtons">Kilonewton</option>
                        <option value="pound-forces">Pound-force</option>
                        <option value="kilogram-forces">Kilogram-force</option>
                    </select>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="distance" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="distance" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Distance</label>
                    </div>
                    <select id="distanceSelect" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <option value="meters">meter</option>
                        <option value="kilometers">Kilometers</option>
                        <option value="miles">Mile</option>
                        <option value="yards">Yard</option>
                    </select>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="time" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="time" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Time</label>
                    </div>
                    <select id="timeSelect" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <option value="seconds">Second</option>
                        <option value="minutes">Minute</option>
                        <option value="hours">Hour</option>
                        <option value="days">Day</option>
                    </select>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="horsePowerCalcualtor" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Horsepower Converter</h3>
            <div class="py-5 px-4 mb-4">
                <p id="limit2" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                    <div class="sm:col-span-2 relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="amount" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="amount" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Amount</label>
                    </div>
                    <select id="convertFrom" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <option value="" disabled>Convert From: </option>
                        <option value="watt">Watt</option>
                        <option value="kilowatt">Kilowatt</option>
                        <option value="mechanical-horsepower">Mechanical Horsepower</option>
                        <option value="metric-horsepower">Metric Horsepower</option>
                        <option value="electric-horsepower">Electric Horsepower</option>
                        <option value="boiler-horsepower">Boiler Horsepower</option>
                        <option value="BTU/h">BTU/h</option>
                    </select>
                    <select id="convertTo" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <option value="" disabled>Convert To: </option>
                        <option value="watt">Watt</option>
                        <option value="kilowatt">Kilowatt</option>
                        <option value="mechanical-horsepower">Mechanical Horsepower</option>
                        <option value="metric-horsepower">Metric Horsepower</option>
                        <option value="electric-horsepower">Electric Horsepower</option>
                        <option value="boiler-horsepower">Boiler Horsepower</option>
                        <option value="BTU/h">BTU/h</option>
                    </select>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="horsePowerConverter" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>
        <div id="result" class="hidden text-center col-span-1 lg:col-span-2 mb-4">
            <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <p id="solution1" class="text-lg"></p>
            <p id="solution2"></p>
            <p id="solution3"></p>
            <p id="solution4"></p>
            <p id="solution4"></p>
            <p id="solution5"></p>
            <p id="solution6"></p>
        </div>
    </div>
</section>

<script src="./app/views/pages/horsepower-calculator/horsepower-script.js"></script>