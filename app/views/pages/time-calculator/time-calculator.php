<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 lg:grid-cols-2 gap-5 mb-4">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Time Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p id="limit1" class="text-primary_button m-0 text-base"></p>
                <div class="grid grid-cols-1 sm:grid-cols-4 gap-2 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" name="day1" id="day1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="day1" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Day</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" name="hour1" id="hour1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="hour1" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Hours</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" name="minute1" id="minute1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="minute1" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Minutes</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" name="second1" id="second1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="second1" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Seconds</label>
                    </div>
                    <div class="maxsm:text-15px flex justify-center col-span-1 xs:col-span-2 sm:col-span-4 m-0">
                        <div class="flex items-center mr-7 mb-4">
                            <input id="add" type="radio" name="operation" value="add" class="w-4 sm:w-5 h-4 sm:h-5 mr-2" checked>
                            <label for="add" class="radiolabel">Add+</label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="subtract" type="radio" name="operation" value="subtract" class="w-4 sm:w-5 h-4 sm:h-5 mr-2">
                            <label for="subtract" class="radiolabel">Subdivact–</label>
                        </div>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" name="day2" id="day2" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="day2" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Day</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" name="hour2" id="hour2" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="hour2" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Hours</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" name="minute2" id="minute2" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="minute2" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Minutes</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" name="second2" id="second2" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="second2" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Seconds</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="calculatetime" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full xs:w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <!-- second  -->
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Add or Subtract Time from a Date</h3>
            <div class="py-5 px-4 mb-4">
                <p id="limit2" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 xs:col-span-2 sm:grid-cols-4 gap-2 sm:gap-4 mb-4">
                    <div class="col-span-1 xs:col-span-2 sm:col-span-4 relative flex items-center w-full mb-5 md:mb-8 maxsm:text-15px">
                        <span for="days" class="relative text-label_color mr-5 duration-300">Starting&nbsp;Time</span>
                        <input type="datetime-local" id="start" class="w-full h-9 sm:h-10 px-5 text-xs md:text-sm outline-none border rounded-full focus:text-primary_button focus:border-primary_button text-label_color" required>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" name="days" id="days" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="days" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Day</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" name="hours" id="hours" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="hours" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Hours</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" name="minutes" id="minutes" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="minutes" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Minutes</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" name="seconds" id="seconds" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="seconds" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Seconds</label>
                    </div>
                </div>
                <div class="flex maxcosm:flex-col justify-center mb-4">
                    <div class="flex justify-center items-center xs:mr-5 mb-4">
                        <button id="addButton" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full xs:w-40 h-10 rounded-full duration-150 text-primary_button">Add Time</button>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="subtractButton" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full xs:w-40 h-10 rounded-full duration-150 text-primary_button">Subtract Time</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- result -->
    <div id="resultDIV" class="hidden text-center col-span-1 lg:col-span-2 [&>*]:py-2 mb-4">
        <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
        <div id="result"></div>
        <div id="totalResult"></div>
    </div>
</section>

<script src="./app/views/pages/time-calculator/time-script.js"></script>