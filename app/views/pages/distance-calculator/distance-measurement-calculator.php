<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 gap-4 mb-4">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Distance Based on Latitude & Longitude <span classcol-span-1 sm:="!text-sm xs:!text-base">(Degree-Minute-Second)</span></h3>
            <div class="py-5 px-4 mb-4">
                <p id="warning" class="text-primary_button m-0"></p>
                <div class="grid grid-cols-1 sm:grid-cols-4 sm:gap-4 mb-4">
                    <div class="col-span-1 sm:col-span-4 font-semibold text-label_color">
                        <span>Point 1: Latitude</span>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="latitudeDegrees1" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="latitudeDegrees1" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Degree</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="latitudeMinutes1" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="latitudeMinutes1" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Minutes</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="latitudeSeconds1" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="latitudeSeconds1" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Seconds</label>
                    </div>
                    <select id="latitudeDirection1" class="select_class w-full h-[38px] sm:h-10 text-sm outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <option value="N">North</option>
                        <option value="S">South</option>
                    </select>
                    <div class="col-span-1 sm:col-span-4 font-semibold text-label_color">
                        <span>Point 1: Longitude</span>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="longitudeDegrees1" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="longitudeDegrees1" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Degree</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="longitudeMinutes1" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="longitudeMinutes1" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Minutes</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="longitudeSeconds1" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="longitudeSeconds1" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Seconds</label>
                    </div>
                    <select id="longitudeDirection1" class="select_class w-full h-[38px] sm:h-10 text-sm outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <option value="E">East</option>
                        <option value="W">West</option>
                    </select>
                    <div class="col-span-1 sm:col-span-4 font-semibold text-label_color">
                        <span>Point 2: Latitude</span>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="latitudeDegrees2" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="latitudeDegrees2" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Degree</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="latitudeMinutes2" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="latitudeMinutes2" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Minutes</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="latitudeSeconds2" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="latitudeSeconds2" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Seconds</label>
                    </div>
                    <select id="latitudeDirection2" class="select_class w-full h-[38px] sm:h-10 text-sm outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <option value="N">North</option>
                        <option value="S">South</option>
                    </select>
                    <div class="col-span-1 sm:col-span-4 font-semibold text-label_color">
                        <span>Point 2: Longitude</span>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="longitudeDegrees2" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="longitudeDegrees2" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Degree</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="longitudeMinutes2" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="longitudeMinutes2" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Minutes</label>
                    </div>
                    <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                        <input type="number" id="longitudeSeconds2" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                        <label for="longitudeSeconds2" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Seconds</label>
                    </div>
                    <select id="longitudeDirection2" class="select_class w-full h-[38px] sm:h-10 text-sm outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                        <option value="E">East</option>
                        <option value="W">West</option>
                    </select>
                </div>
                <div class="flex justify-center items-center mb-4">
                    <button id="calcDistance" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                </div>
            </div>
        </div>

        <div id="result" class="hidden text-center col-span-1 [&>*]:py-2 mb-4">
            <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
            <p id="solution-distance"></p>
        </div>
    </div>
</section>