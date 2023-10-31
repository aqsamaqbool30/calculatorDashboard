<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 lg:grid-cols-2 gap-5 mb-4">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">2D Distance Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p id="limit1" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="2dX1" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="2dX1" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Point1: X<sub>1</sub></label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="2dY1" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="2dY1" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Point1: Y<sub>1</sub></label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="2dX2" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="2dX2" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Point2: X<sub>2</sub></label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="2dY2" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="2dY2" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Point2: Y<sub>2</sub></label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="calc2Ddistance" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">3D Distance Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p id="limit2" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-3 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="3DX1" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="3DX1" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Point1: X<sub>1</sub></label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="3DY1" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="3DY1" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Point1: Y<sub>1</sub></label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="3DZ1" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="3DZ1" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Point1: Z<sub>1</sub></label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="3DX2" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="3DX2" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Point2: X<sub>2</sub></label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="3DY2" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="3DY2" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Point2: Y<sub>2</sub></label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="3DZ2" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="3DZ2" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Point2: Z<sub>2</sub></label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="calc3Ddistance" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <div id="result" class="hidden text-center col-span-1 lg:col-span-2 [&>*]:py-2 mb-4">
            <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <p id="solution1"></p>
            <p id="solution2"></p>
            <p id="solution3"></p>
            <p id="solution4"></p>
            <p id="solution5"></p>
            <p id="solution6"></p>
        </div>

        <div class="m-0 col-span-1 lg:col-span-2 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Distance Based on Latitude & Longitude</h3>
            <div class="py-5 px-4 mb-4">
                <p class="block pb-6 text-gray-400"><span class="text-primary_button">*</span>This calcualtor takes longitude and latitude in the decimal format.</p>
                <p id="limits" class="text-primary_button m-0"></p>
                <p id="limits1" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="latitude1" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="latitude1" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Point1: Latitude 1</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="longitude1" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="longitude1" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Point1: Longitude 1</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="latitude2" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="latitude2" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Point2: Latitude 2</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="longitude2" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="longitude2" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Point2: Longitude 2</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="calc-Longitude-Latitude" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <div id="result1" class="hidden text-center col-span-1 lg:col-span-2 [&>*]:py-2 mb-4">
            <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <p id="solution9"></p>
        </div>

        <div class="m-0 col-span-1 lg:col-span-2 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Distance on Map</h3>
            <div class="py-5 px-4 mb-4">
                <p class="block pb-6 text-gray-400"><span class="text-primary_button">*</span>Use clear button to again enter new points.</p>
                <div id="map" class="mb-4" style="height: 330px; max-height: 330px;"></div>
                <div class="flex justify-center items-center mb-4">
                    <button onclick="clearAll()" id="mapcalculate" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Clear</button>
                </div>
            </div>
        </div>

        <div id="result2" class="hidden text-center col-span-1 lg:col-span-2 [&>*]:py-2 mb-4">
            <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <p id="solution11"></p>
            <p id="solution2"></p>
        </div>
    </div>
</section>

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>