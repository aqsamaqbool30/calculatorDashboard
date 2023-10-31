<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 lg:grid-cols-2 gap-5 mb-4">
        <!--  1st ->> Area of Circle -->
        <div class="m-0 cls-shadow h-full bg-white rounded-lg mb-4">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Circle Area</h3>
            <div class="py-5 px-4 mb-4">
                <p id="warning1" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="radiusCircle" min="0" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="radiusCphere" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Radius (r)</label>
                    </div>
                    <select id="circleSelect" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <?php include './app/views/components/area-select-values.php'; ?>
                    </select>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="btnCirclearea" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <!-- 2nd ->> Area of Rectangle -->
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Rectangle Area</h3>
            <div class="py-5 px-4 mb-4">
                <p id="warning2" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="lengthRectangle" min="0" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="lengthRectangle" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Length (l)</label>
                    </div>
                    <select id="Rectangleradius" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <?php include './app/views/components/area-select-values.php'; ?>
                    </select>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="widthRectangle" min="0" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="widthRectangle" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Width (w)</label>
                    </div>
                    <select id="Rectangleheight" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <?php include './app/views/components/area-select-values.php'; ?>
                    </select>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="Rectangle-volume" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <!-- display for 1st and 2nd -->
        <div id="result1" class="hidden text-center col-span-1 lg:col-span-2 mb-4">
            <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <p id="solution-div1"></p>
            <p id="solution-div2"></p>
        </div>

        <!-- 3th >> Parallelogram area -->
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Parallelogram Area</h3>
            <div class="py-5 px-4 mb-4">
                <p id="warning3" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="lengthParallelogram" min="0" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="lengthParallelogram" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Base (b)</label>
                    </div>
                    <select id="Parallelogramlength" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <?php include './app/views/components/area-select-values.php'; ?>
                    </select>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="widthParallelogram" min="0" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="widthParallelogram" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (h)</label>
                    </div>
                    <select id="Parallelogramwidth" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <?php include './app/views/components/area-select-values.php'; ?>
                    </select>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="parallelogramArea" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <!-- 4th >> Parallelogram area -->
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Ellipse Area</h3>
            <div class="py-5 px-4 mb-4">
                <p id="warning4" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="lengthEllipse" min="0" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="lengthEllipse" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Semi-major Axes (a)</label>
                    </div>
                    <select id="ellipselength" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <?php include './app/views/components/area-select-values.php'; ?>
                    </select>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="widthEllipse" min="0" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="widthEllipse" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Semi-minor Axes (b)</label>
                    </div>
                    <select id="ellipsewidth" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <?php include './app/views/components/area-select-values.php'; ?>
                    </select>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="ellipseArea" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <!-- display for 3rd and 4th -->
        <div id="result2" class="hidden text-center col-span-1 lg:col-span-2 mb-4">
            <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <p id="solution-divtwo"></p>
            <p id="solution-div3"></p>
        </div>

        <!-- 5th >> Sector area -->
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Sector Area</h3>
            <div class="py-5 px-4 mb-4">
                <p id="caution" class="block tex-sm pb-6 text-gray-400"><span class="text-primary_button">* </span> value for radian should be between 0 and 6.2831853071796.</p>
                <p id="warning5" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="lengthSector" min="0" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="lengthSector" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Radius (r)</label>
                    </div>
                    <select id="sectorLength" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <?php include './app/views/components/area-select-values.php'; ?>
                    </select>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="heightSector" min="0" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="heightSector" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Angle (A)</label>
                    </div>
                    <select id="sectorHeight" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <option value="radians">Radian</option>
                        <option value="degree">Degree<sup>°</sup></option>
                    </select>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="sectorArea" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <!-- 6th >> Triangle area -->
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Triangle Area</h3>
            <div class="py-5 px-4 mb-4">
                <p id="triangle" class="block tex-sm pb-6 text-gray-400"><span class="text-primary_button">* </span> The sum of Edge 1 and Edge 2 needs to be larger than the Edge 3.</p>
                <p id="warning6" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="lengthTriangle" min="0" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="lengthTriangle" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Edge 1 (a)</label>
                    </div>
                    <select id="triangleLength" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <?php include './app/views/components/area-select-values.php'; ?>
                    </select>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="widthTriangle" min="0" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="widthTriangle" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Edge 2 (b)</label>
                    </div>
                    <select id="triangleWidth" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <?php include './app/views/components/area-select-values.php'; ?>
                    </select>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="heightTriangle" min="0" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="heightTriangle" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Edge 3 (c)</label>
                    </div>
                    <select id="triangleHeight" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <?php include './app/views/components/area-select-values.php'; ?>
                    </select>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="triangleArea" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <!-- display for 5th and 6th -->
        <div id="result3" class="hidden text-center col-span-1 lg:col-span-2 mb-4">
            <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <p id="solution-div4"></p>
            <p id="solution-div5"></p>
            <p id="solution-div6"></p>
            <p id="solution-div7"></p>
            <p id="solution-div8"></p>
        </div>

        <!-- 7th >> Trapezoid area -->
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Trapezoid Area</h3>
            <div class="py-5 px-4 mb-4">
                <!-- <p id="triangle" class="block tex-sm pb-6 text-gray-400"><span class="text-primary_button">* </span> The sum of any two edges needs to be larger than the third.</p> -->
                <p id="warning7" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="lengthTrapezoid" min="0" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="lengthTrapezoid" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Base 1 (b<sub>1</sub>)</label>
                    </div>
                    <select id="trapezoidLength" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <?php include './app/views/components/area-select-values.php'; ?>
                    </select>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="widthTrapezoid" min="0" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="widthTrapezoid" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Base 2 (b<sub>2</sub>)</label>
                    </div>
                    <select id="trapezoidWidth" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <?php include './app/views/components/area-select-values.php'; ?>
                    </select>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="heightTrapezoid" min="0" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="heightTrapezoid" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (h) </label>
                    </div>
                    <select id="trapezoidHeight" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <?php include './app/views/components/area-select-values.php'; ?>
                    </select>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="trapezoidArea" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <!-- display for 7th -->
        <div id="result4" class="hidden text-center col-span-1 lg:col-span-2 mb-4">
            <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <p id="solution-div9"></p>
            <p id="solution-div10"></p>
            <p id="solution-div11"></p>
        </div>
    </div>
</section>

<script src="./app/views/pages/area-calculator/area-script.js"></script>