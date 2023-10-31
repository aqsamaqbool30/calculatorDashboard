    <section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
        <div id="inputdivs" class="accordion grid grid-cols-1 lg:grid-cols-2 gap-5 mb-4">
            <div class="m-0 cls-shadow h-full bg-white rounded-lg">
                <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Slope Calculator</h3>
                <div class="py-5 px-4 mb-4">
                    <p class="text-label_color pb-6"><span class="text-primary_button">* </span>Use this calculator when two points are known.</p>
                    <p id="limit1" class="text-primary_button m-0"></p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 sm:gap-4 mb-4">
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="X1" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="X1" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Point1: X<sub>1</sub></label>
                        </div>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="Y1" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="Y1" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Point1: Y<sub>1</sub></label>
                        </div>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="X2" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="X2" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Point2: X<sub>2</sub></label>
                        </div>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="Y2" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="Y2" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Point2: Y<sub>2</sub></label>
                        </div>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="slope1" type="submit" value="submit" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Generate</button>
                    </div>
                </div>
            </div>
            <!-- 2nd Slope Calculator -->
            <div id="mainDiv" class="m-0 cls-shadow h-full bg-white rounded-lg">
                <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Slope Calculator</h3>
                <div class="py-5 px-4 mb-4">
                    <p class="text-label_color pb-6"><span class="text-primary_button">* </span>Use this calculator when one point and the slope/angle are known.</p>
                    <p id="limit2" class="text-primary_button m-0"></p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 sm:gap-4 mb-4">
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="secondX1" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="secondX1" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">X<sub>1</sub></label>
                        </div>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="secondY1" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="secondY1" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Y<sub>1</sub></label>
                        </div>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="distance" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="distance" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">distance (d)</label>
                        </div>
                        <div id="slopeDiv" class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="slope" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="slope" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">slope (m)</label>
                        </div>
                        <div id="angleDiv" class="relative hidden items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="angle" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="angle" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">angle of incline (θ)</label>
                        </div>
                        <div class="sm:flex justify-center gap-7 maxsm:text-15px sm:col-span-2 mb-4">
                            <span class="text-label_color">Calculate with: </span>
                            <div class="flex items-center justify-center mb-4">
                                <div class="flex items-center cursor-pointer mr-3 mb-4">
                                    <input type="radio" id="slopeRadio" name="slopeAndAngle" value="slopeRadio" class="w-4 sm:w-5 h-4 sm:h-5 mr-2" checked>
                                    <label for="slopeRadio" class="radiolabel text-label_color">Slope (m)</label>
                                </div>
                                <div class="flex items-center cursor-pointer mb-4">
                                    <input type="radio" id="angleRadio" name="slopeAndAngle" value="angleRadio" class="w-4 sm:w-5 h-4 sm:h-5 mr-2">
                                    <label for="angleRadio" class="radiolabel text-label_color">Angle of incline (θ)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="slope2" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Generate</button>
                    </div>
                </div>
            </div>

            <div id="result" class="hidden text-center lg:col-span-2 mb-4">
                <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
                <p id="solution-div3"></p>
                <p id="solution-div4"></p>
                <p id="solution-div1"></p>
                <p id="solution-div2"></p>
                <p id="solution-div5"></p>
            </div>
        </div>
    </section>

    <script src="./app/views/pages/slope-calculator/slope-script.js"></script>