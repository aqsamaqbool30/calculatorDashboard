<link rel="stylesheet" href="./app/views/pages/conversion-calculator/conversion-style.css">

<section class="container max-w-[991px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5 shadow-xl">Conversion Calculator</h3>
    <div class="boxes shadow-xl rounded-lg">
        <!-- start of lenght  -->
        <input checked="checked" id="box1" name="box" type="radio">
        <label for="box1" class="relative border-primary_button flex flex-col justify-center items-center rounded-l-lg"><svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" class="inline-block" fill="currentColor" viewBox="0 0 122.88 82.26">
                <title>measurement</title>
                <path d="M122.88,39.45V79.56a2.7,2.7,0,0,1-.76,1.87l-.08.08a2.67,2.67,0,0,1-1.86.75H2.7A2.74,2.74,0,0,1,.83,81.5l-.12-.13A2.72,2.72,0,0,1,0,79.56V39.45a2.74,2.74,0,0,1,.76-1.87l.13-.12a2.72,2.72,0,0,1,1.81-.71H120.18a2.68,2.68,0,0,1,1.87.76l.07.07a2.68,2.68,0,0,1,.76,1.87ZM107.07,77.2V58.13h5.06V77.2h5.69V41.81H5.06V77.2h5.69V66.69h5.06V77.2h5.64V58.13h5.06V77.2h5.65V66.69h5.05V77.2h5.65V58.13h5V77.2h5.65V66.69h5V77.2h5.65V58.13h5.06V77.2H75V66.69H80V77.2h5.64V58.13h5.06V77.2h5.65V66.69h5V77.2ZM122.31,24a3.2,3.2,0,1,1-6.4-.08l.32-20.74a3.21,3.21,0,0,1,6.41.07L122.31,24ZM6.65,24a3.21,3.21,0,1,1-6.41-.08L.56,3.17A3.21,3.21,0,1,1,7,3.24L6.65,24Zm94.12.27a3.21,3.21,0,0,1-4.2-4.85l3-2.61H23.28l3,2.61a3.21,3.21,0,0,1-4.2,4.85L12.57,16a3.2,3.2,0,0,1-.33-4.52l.3-.3,9.27-8.26a3.22,3.22,0,1,1,4.28,4.8l-3,2.64H99.77l-3-2.64a3.22,3.22,0,0,1,4.28-4.8l9.28,8.26.29.3a3.2,3.2,0,0,1-.33,4.52l-9.54,8.26Z" />
            </svg><span class="maxsm:hidden">Length</span></label>
        <div class="content p-3 md:p-6 border border-primary_button rounded-r-md rounded-bl-md h-0">
            <div class="container con_lenght pb-4">
                <span class="block mb-6 font-semibold text-base md:text-lg">Length Converter</span>
                <div id="lengthInput" class="container-feild-group">
                    <div class="container-feild">
                        <div class="flex maxsm:flex-col justify-center items-center mb-5 maxsm:gap-5">
                            <div class="m-0 w-10">
                                <span>From:</span>
                            </div>
                            <select id="selectFromLength" name="temp-from" class="select_class select_class w-full max-w-[250px] h-9 sm:h-10 mx-2 sm:mx-5 text-15px md:text-base outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button ">
                                <option value="meter">Meter</option>
                                <option value="kilometer">Kilometer</option>
                                <option value="centimeter"> Centimeter</option>
                                <option value="millimeter">Millimeter</option>
                                <option value="micrometer">Micrometer</option>
                                <option value="nanometer">Nanometer</option>
                                <option value=" mile"> Mile</option>
                                <option value=" yard"> Yard</option>
                                <option value="foot">Foot</option>
                                <option value="inch">Inch</option>
                                <option value="light year">Light Year</option>
                            </select>
                            <input id="inputLength" type="number" class="border rounded-full w-full max-w-[250px] px-2 sm:px-5 focus:text-primary_button focus:border-primary_button maxsm:text-15px h-9 sm:h-10 text-15px md:text-base outline-none focus:placeholder:text-primary_button maxsm:placeholder:text-[12px]" placeholder="Enter Value">
                        </div>

                        <div class="flex maxsm:flex-col justify-center items-center mb-5 maxsm:gap-5">
                            <div class="m-0 w-10">
                                <span for="outputLength">To:&nbsp;&nbsp;&nbsp;</span>
                            </div>
                            <select id="selectToLength" class="select_class w-full max-w-[250px] h-9 sm:h-10 mx-2 sm:mx-5 text-15px md:text-base outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button ">
                                <option value="meter">Meter</option>
                                <option value="kilometer">Kilometer</option>
                                <option value="centimeter"> Centimeter</option>
                                <option value="millimeter">Millimeter</option>
                                <option value="micrometer">Micrometer</option>
                                <option value="nanometer">Nanometer</option>
                                <option value=" mile"> Mile</option>
                                <option value=" yard"> Yard</option>
                                <option value="foot">Foot</option>
                                <option value="inch">Inch</option>
                                <option value="light year">Light Year</option>

                            </select>
                            <input id="outputLength" type="number" class="border rounded-full w-full max-w-[250px] px-2 sm:px-5 focus:text-primary_button focus:border-primary_button maxsm:text-15px h-9 sm:h-10 outline-none focus:placeholder:text-primary_button pointer-events-none">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- start of temp  -->
        <input id="box2" name="box" type="radio">
        <label for="box2" class="relative flex flex-col justify-center items-center rounded-l-md"><svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" class="inline-block" fill="currentColor" viewBox="0 0 65.75 122.88" fill="currentColor" xml:space="preserve">
                <style type="text/css">
                    .st0 {
                        fill-rule: evenodd;
                        clip-rule: evenodd;
                    }
                </style>
                <g>
                    <path class="st0" d="M16.91,47.63h19.88v-32.6c0-2.73-1.12-5.22-2.92-7.02c-1.8-1.8-4.29-2.92-7.02-2.92s-5.22,1.12-7.02,2.92 c-1.8,1.8-2.92,4.29-2.92,7.02V47.63L16.91,47.63z M49.06,13.93c-1.41,0-2.55-1.14-2.55-2.55c0-1.41,1.14-2.55,2.55-2.55H63.2 c1.41,0,2.55,1.14,2.55,2.55c0,1.41-1.14,2.55-2.55,2.55H49.06L49.06,13.93z M49.06,28.3c-1.41,0-2.55-1.14-2.55-2.55 s1.14-2.55,2.55-2.55H63.2c1.41,0,2.55,1.14,2.55,2.55s-1.14,2.55-2.55,2.55H49.06L49.06,28.3z M49.06,42.67 c-1.41,0-2.55-1.14-2.55-2.55c0-1.41,1.14-2.55,2.55-2.55H63.2c1.41,0,2.55,1.14,2.55,2.55c0,1.41-1.14,2.55-2.55,2.55H49.06 L49.06,42.67z M49.06,57.04c-1.41,0-2.55-1.14-2.55-2.55c0-1.41,1.14-2.55,2.55-2.55H63.2c1.41,0,2.55,1.14,2.55,2.55 c0,1.41-1.14,2.55-2.55,2.55H49.06L49.06,57.04z M49.06,71.41c-1.41,0-2.55-1.14-2.55-2.55c0-1.41,1.14-2.55,2.55-2.55H63.2 c1.41,0,2.55,1.14,2.55,2.55c0,1.41-1.14,2.55-2.55,2.55H49.06L49.06,71.41z M41.88,74.45c6.87,4.81,11.36,12.79,11.36,21.81 c0,14.7-11.92,26.62-26.62,26.62C11.92,122.88,0,110.96,0,96.26c0-9.22,4.69-17.35,11.82-22.12V15.03c0-4.14,1.69-7.89,4.41-10.62 C18.95,1.69,22.71,0,26.85,0c4.14,0,7.89,1.69,10.62,4.41c2.72,2.72,4.41,6.48,4.41,10.62V74.45L41.88,74.45z" />
                </g>
            </svg><span class="maxsm:hidden">Temperature</span></label>
        <div class="content p-3 md:p-6 border border-primary_button rounded-md">
            <div class="container con_lenght pb-4">
                <span class="block mb-6 font-semibold text-base md:text-lg">Temperature Converter</span>
                <div id="lengthInput" class="container-feild-group">
                    <div class="container-feild">
                        <div class="flex maxsm:flex-col justify-center items-center mb-5 maxsm:gap-5">
                            <div class="m-0 w-10">
                                <span>From:</span>
                            </div>
                            <select class="select_class w-full max-w-[250px] h-9 sm:h-10 mx-2 sm:mx-5 text-15px md:text-base outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button " id="selectFromTemp">
                                <option value="celsius">Celsius</option>
                                <option value="kelvin">Kelvin</option>
                                <option value="fahrenheit"> Fahrenheit</option>
                            </select>
                            <input id="temp-input" type="number" class="border rounded-full w-full max-w-[250px] px-2 sm:px-5 focus:text-primary_button focus:border-primary_button maxsm:text-15px h-9 sm:h-10 outline-none focus:placeholder:text-primary_button maxsm:placeholder:text-[12px]" placeholder="Enter Value">
                        </div>
                        <div class="flex maxsm:flex-col justify-center items-center mb-5 maxsm:gap-5">
                            <div class="m-0 w-10">
                                <span for="outputTemp">To:&nbsp;&nbsp;&nbsp;</span>
                            </div>
                            <select name="to-from" class="w-full max-w-[250px] h-9 sm:h-10 mx-2 sm:mx-5 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button" id="selectToTemp">
                                <option value="fahrenheit">Fahrenheit</option>
                                <option value="celsius">Celsius</option>
                                <option value="kelvin">Kelvin</option>
                            </select>
                            <input id="temp-output" type="number" class="border rounded-full w-full max-w-[250px] px-2 sm:px-5 focus:text-primary_button focus:border-primary_button maxsm:text-15px h-9 sm:h-10 outline-none focus:placeholder:text-primary_button pointer-events-none">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- start of Area  -->
        <input id="box3" name="box" type="radio">
        <label for="box3" class="relative flex flex-col justify-center items-center rounded-l-md"><svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" class="inline-block" fill="currentColor" viewBox="0 0 122.883 122.882" enable-background="new 0 0 122.883 122.882" xml:space="preserve">
                <g>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.002,0h96.878c7.15,0,13.002,5.851,13.002,13.002v96.877 c0,7.151-5.852,13.002-13.002,13.002H13.002C5.851,122.882,0,117.031,0,109.88V13.002C0,5.851,5.851,0,13.002,0L13.002,0z" />
                </g>
            </svg><span class="maxsm:hidden">Area</span></label>
        <div class="content p-3 md:p-6 border border-primary_button rounded-md">
            <div class="container con_lenght pb-4">
                <span class="block mb-6 font-semibold text-base md:text-lg">Area Converter</span>
                <div id="lengthInput" class="container-feild-group">
                    <div class="container-feild">
                        <div class="flex maxsm:flex-col justify-center items-center mb-5 maxsm:gap-5">
                            <div class="m-0 w-10">
                                <span for="inputArea">From:</span>
                            </div>
                            <select class="select_class w-full max-w-[250px] h-9 sm:h-10 mx-2 sm:mx-5 text-15px md:text-base outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button " id="selectFromArea">
                                <option value="m2">Square Meter</option>
                                <option value="km2">Square Kilometer (km²)</option>
                                <option value="cm2">Square Centimeter (cm²)</option>
                                <option value="mm2">Square Millimeter (mm²)</option>
                                <option value="um2">Square Micrometer (μm²)</option>
                                <option value="ha">Hectare (ha)</option>
                                <option value="mi2">Square Mile (mi²)</option>
                                <option value="yd2">Square Yard (yd²)</option>
                                <option value="ft2">Square Foot (ft²)</option>
                                <option value="in2">Square Inch (in²)</option>
                                <option value="ac">Acre (ac)</option>

                            </select>
                            <input id="area-input" type="number" class="border rounded-full w-full max-w-[250px] px-2 sm:px-5 focus:text-primary_button focus:border-primary_button maxsm:text-15px h-9 sm:h-10 outline-none focus:placeholder:text-primary_button maxsm:placeholder:text-[12px]" placeholder="Enter Value">
                        </div>

                        <div class="flex maxsm:flex-col justify-center items-center mb-5 maxsm:gap-5">
                            <div class="m-0 w-10">
                                <span for="outputArea">To:&nbsp;&nbsp;&nbsp;</span>
                            </div>
                            <select class="select_class w-full max-w-[250px] h-9 sm:h-10 mx-2 sm:mx-5 text-15px md:text-base outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button " id="selectToArea">
                                <option value="m2">Square Meter</option>
                                <option value="km2">Square Kilometer (km²)</option>
                                <option value="cm2">Square Centimeter (cm²)</option>
                                <option value="mm2">Square Millimeter (mm²)</option>
                                <option value="um2">Square Micrometer (μm²)</option>
                                <option value="ha">Hectare (ha)</option>
                                <option value="mi2">Square Mile (mi²)</option>
                                <option value="yd2">Square Yard (yd²)</option>
                                <option value="ft2">Square Foot (ft²)</option>
                                <option value="in2">Square Inch (in²)</option>
                                <option value="ac">Acre (ac)</option>
                            </select>
                            <input id="area-output" type="number" class="border rounded-full w-full max-w-[250px] px-2 sm:px-5 focus:text-primary_button focus:border-primary_button maxsm:text-15px h-9 sm:h-10 outline-none focus:placeholder:text-primary_button pointer-events-none">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- start of weight  -->
        <input id="box4" name="box" type="radio">
        <label for="box4" class="relative flex flex-col justify-center items-center rounded-l-md"><svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" class="inline-block" fill="currentColor" viewBox="0 0 105.29 122.88" xml:space="preserve">
                <style type="text/css">
                    .st0 {
                        fill-rule: evenodd;
                        clip-rule: evenodd;
                    }
                </style>
                <g>
                    <path class="st0" d="M11.1,122.88h83.08c5.37,0,12.22-6.91,10.95-12.13L91.19,53.46c-3.02-12.42-7.24-19.22-21.02-19.22H59.56 c6.34-2.74,10.78-9.05,10.78-16.39C70.34,7.99,62.35,0,52.49,0c-9.86,0-17.85,7.99-17.85,17.85c0,7.35,4.44,13.66,10.78,16.39 h-9.35c-13.73,0-19.5,7.72-22.33,19.56l-13.6,56.95C-1.1,115.97,5.73,122.88,11.1,122.88L11.1,122.88z M37.3,71.65h4.44v5.71 l4.66-5.71h5.92l-5.26,5.67l5.5,9.43h-5.47l-3.04-6.2l-2.31,2.52v3.68H37.3V71.65L37.3,71.65z M60.28,81.29v-3.14h6.88v6.42 c-1.32,0.94-2.48,1.59-3.49,1.93c-1.01,0.34-2.21,0.51-3.6,0.51c-1.71,0-3.1-0.31-4.18-0.92c-1.08-0.61-1.91-1.52-2.5-2.73 c-0.59-1.21-0.89-2.59-0.89-4.16c0-1.65,0.33-3.08,0.97-4.3c0.65-1.22,1.6-2.14,2.85-2.77c0.98-0.49,2.29-0.73,3.94-0.73 c1.59,0,2.78,0.15,3.57,0.45c0.79,0.3,1.44,0.77,1.96,1.41c0.52,0.64,0.91,1.44,1.17,2.42l-4.28,0.81 c-0.18-0.57-0.48-1.01-0.9-1.31c-0.42-0.31-0.96-0.46-1.62-0.46c-0.97,0-1.75,0.35-2.33,1.07c-0.58,0.71-0.87,1.84-0.87,3.37 c0,1.63,0.29,2.8,0.88,3.5c0.58,0.7,1.4,1.05,2.45,1.05c0.5,0,0.97-0.07,1.42-0.22c0.45-0.15,0.97-0.41,1.55-0.77v-1.41H60.28 L60.28,81.29z M52.64,53.11c14.25,0,25.8,11.55,25.8,25.8s-11.55,25.8-25.8,25.8c-14.25,0-25.8-11.55-25.8-25.8 S38.4,53.11,52.64,53.11L52.64,53.11z M52.49,10.41c4.11,0,7.44,3.33,7.44,7.44c0,4.11-3.33,7.44-7.44,7.44 c-4.11,0-7.44-3.33-7.44-7.44C45.06,13.74,48.39,10.41,52.49,10.41L52.49,10.41z" />
                </g>
            </svg><span class="maxsm:hidden">Weight</span></label>
        <div class="content p-3 md:p-6 border border-primary_button rounded-md">
            <div class="container con_lenght pb-4">
                <span class="block mb-6 font-semibold text-base md:text-lg">Weight Converter</span>
                <div id="lengthInput" class="container-feild-group">
                    <div class="container-feild">
                        <div class="flex maxsm:flex-col justify-center items-center mb-5 maxsm:gap-5">
                            <div class="m-0 w-10">
                                <span for="fromSelectBox">From:</span>
                            </div>
                            <select class="select_class w-full max-w-[250px] h-9 sm:h-10 mx-2 sm:mx-5 text-15px md:text-base outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button " id="selectFrom">
                                <option value="kg">Kilograms</option>
                                <option value="lb">Pounds </option>
                                <option value="g">Grams </option>
                                <option value="oz">Ounces </option>
                                <option value="mg">Milligrams </option>
                                <option value="t">Metric Tons </option>
                                <option value="lt">Long Tons</option>
                                <option value="st">Short Tons</option>
                                <option value="ct">Carats</option>
                                <option value="amu">Atomic Mass Units</option>
                            </select>
                            <input id="weight-input" type="number" class="border rounded-full w-full max-w-[250px] px-2 sm:px-5 focus:text-primary_button focus:border-primary_button maxsm:text-15px h-9 sm:h-10 outline-none focus:placeholder:text-primary_button maxsm:placeholder:text-[12px]" placeholder="Enter Value">
                        </div>
                        <div class="flex maxsm:flex-col justify-center items-center mb-5 maxsm:gap-5">
                            <div class="m-0 w-10">
                                <span for="outputWeight">To:&nbsp;&nbsp;&nbsp;</span>
                            </div>
                            <select class="select_class w-full max-w-[250px] h-9 sm:h-10 mx-2 sm:mx-5 text-15px md:text-base outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button " id="selectTo">
                                <option value="kg">Kilograms</option>
                                <option value="lb">Pounds </option>
                                <option value="g">Grams </option>
                                <option value="oz">Ounces </option>
                                <option value="mg">Milligrams </option>
                                <option value="t">Metric Tons </option>
                                <option value="lt">Long Tons</option>
                                <option value="st">Short Tons</option>
                                <option value="ct">Carats</option>
                                <option value="amu">Atomic Mass Units</option>
                            </select>
                            <input id="weight-output" type="number" class="border rounded-full w-full max-w-[250px] px-2 sm:px-5 focus:text-primary_button focus:border-primary_button maxsm:text-15px h-9 sm:h-10 outline-none focus:placeholder:text-primary_button pointer-events-none">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- start of Volume  -->
        <input id="box5" name="box" type="radio">
        <label for="box5" class="relative flex flex-col justify-center items-center rounded-l-md"><svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" width="20px" height="20px" class="inline-block" fill="currentColor" clip-rule="evenodd" viewBox="0 0 512 451.47">
                <path fill-rule="nonzero" d="m98.04 164.23 146.41-48.75V38.3l-18.51 18.72c-4.46 4.54-11.76 4.6-16.3.14-4.54-4.46-4.6-11.77-.14-16.31l36.98-37.4c2.59-2.63 6.12-3.76 9.53-3.38 3.4-.38 6.93.75 9.51 3.38l36.99 37.4c4.46 4.54 4.4 11.85-.14 16.31-4.54 4.46-11.84 4.4-16.3-.14l-18.5-18.71v77.44l148.25 50.76c5.05 1.71 8.15 6.58 7.82 11.67l.01.62v174.62l61.57 46.37-3.83-26.09c-.92-6.31 3.45-12.18 9.76-13.1 6.31-.92 12.17 3.45 13.09 9.76l7.64 52.04c.53 3.67-.72 7.2-3.11 9.68-1.74 2.9-4.74 5.01-8.35 5.49l-52.13 7.04c-6.3.85-12.11-3.58-12.95-9.89-.85-6.31 3.58-12.11 9.89-12.96l26.11-3.52-59.23-44.62-149.93 76.19a11.468 11.468 0 0 1-5.95 1.66c-2.32 0-4.47-.68-6.28-1.85l-148.26-77.35-61.03 45.97 26.11 3.52c6.31.85 10.74 6.65 9.9 12.96-.85 6.31-6.66 10.74-12.96 9.89l-52.13-7.04c-3.61-.48-6.6-2.59-8.35-5.49a11.546 11.546 0 0 1-3.11-9.68l7.64-52.04c.92-6.31 6.78-10.68 13.09-9.76 6.31.92 10.68 6.79 9.76 13.1l-3.83 26.09 61.54-46.35V175.65c0-5.76 4.22-10.54 9.72-11.42zm160.09-27.35c-.69.13-1.4.2-2.12.2-.9 0-1.79-.1-2.63-.3l-121.3 40.38 124.21 56.34 124.14-54.72-122.3-41.9zM131.2 300.35c0-3.32 2.69-6.01 6.01-6.01s6.01 2.69 6.01 6.01l-.03 25.13c.01.82.1 1.49.3 1.99l.31.43 15.01 6.98c3.01 1.38 4.32 4.95 2.94 7.96-1.39 3.01-4.96 4.32-7.97 2.94l-16.14-7.56c-2.48-1.54-4.18-3.64-5.23-6.2-.84-2.04-1.21-4.3-1.19-6.73l-.02-24.94zm113.46 120.54V253.57l-133.22-60.42v158.24l133.22 69.5zm155.87-225.73-132.74 58.5v167.43l132.74-67.45V195.16z" />
            </svg><span class="maxsm:hidden">Volume</span></label>
        <div class="content p-3 md:p-6 border border-primary_button rounded-t-md rounded-br-md">
            <div class="container con_lenght pb-4">
                <span class="block mb-6 font-semibold text-base md:text-lg">Volume Converter</span>
                <div id="lengthInput" class="container-feild-group">
                    <div class="container-feild">
                        <div class="flex maxsm:flex-col justify-center items-center mb-5 maxsm:gap-5">
                            <div class="m-0 w-10">
                                <span for="inputVolume">From:</span>
                            </div>
                            <select class="select_class w-full max-w-[250px] h-9 sm:h-10 mx-2 sm:mx-5 text-15px md:text-base outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button " id="inputVolumeVolume">
                                <option value="mm3">Cubic Millimeter</option>
                                <option value="m3">Cubic Meter</option>
                                <option value="km3">Cubic Kilometer</option>
                                <option value="cm3">Cubic Centimeter</option>
                                <option value="l">Liter</option>
                                <option value="ml">Milliliter</option>
                                <option value="gal">US Gallon</option>
                                <option value="qt">US Quart</option>
                                <option value="pt">US Pint</option>
                                <option value="cup">US Cup</option>
                                <option value="oz">US Fluid Ounce</option>
                                <option value="tbsp">US Table Spoon</option>
                                <option value="tsp">US Tea Spoon</option>
                                <option value="igal">Imperial Gallon</option>
                                <option value="iq">Imperial Quart</option>
                                <option value="ip">Imperial Pint</option>
                                <option value="ifl">Imperial Fluid Ounce</option>
                                <option value="its">Imperial Table Spoon</option>
                                <option value="itts">Imperial Tea Spoon</option>
                                <option value="mi3">Cubic Mile </option>
                                <option value="yd3">Cubic Yard</option>
                                <option value="ft3">Cubic Foot</option>
                                <option value="in3">Cubic Inch</option>

                            </select>
                            <input id="volume-input" type="number" class="border rounded-full w-full max-w-[250px] px-2 sm:px-5 focus:text-primary_button focus:border-primary_button maxsm:text-15px h-9 sm:h-10 outline-none focus:placeholder:text-primary_button maxsm:placeholder:text-[12px]" placeholder="Enter Value">
                        </div>
                        <div class="flex maxsm:flex-col justify-center items-center mb-5 maxsm:gap-5">
                            <div class="m-0 w-10">
                                <span for="outputVolume">To:&nbsp;&nbsp;&nbsp;</span>
                            </div>
                            <select class="select_class w-full max-w-[250px] h-9 sm:h-10 mx-2 sm:mx-5 text-15px md:text-base outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button " id="selectToVolume">
                                <option value="mm3">Cubic Millimeter</option>
                                <option value="m3">Cubic Meter</option>
                                <option value="km3">Cubic Kilometer</option>
                                <option value="cm3">Cubic Centimeter</option>
                                <option value="l">Liter</option>
                                <option value="ml">Milliliter</option>
                                <option value="gal">US Gallon</option>
                                <option value="qt">US Quart</option>
                                <option value="pt">US Pint</option>
                                <option value="cup">US Cup</option>
                                <option value="oz">US Fluid Ounce</option>
                                <option value="tbsp">US Table Spoon</option>
                                <option value="tsp">US Tea Spoon</option>
                                <option value="igal">Imperial Gallon</option>
                                <option value="iq">Imperial Quart</option>
                                <option value="ip">Imperial Pint</option>
                                <option value="ifl">Imperial Fluid Ounce</option>
                                <option value="its">Imperial Table Spoon</option>
                                <option value="itts">Imperial Tea Spoon</option>
                                <option value="mi3">Cubic Mile </option>
                                <option value="yd3">Cubic Yard</option>
                                <option value="ft3">Cubic Foot</option>
                                <option value="in3">Cubic Inch</option>
                            </select>
                            <input id="volume-output" type="number" class="border rounded-full w-full max-w-[250px] px-2 sm:px-5 focus:text-primary_button focus:border-primary_button maxsm:text-15px h-9 sm:h-10 text-15px md:text-base outline-none focus:placeholder:text-primary_button pointer-events-none">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="./app/views/pages/conversion-calculator/conversion-script.js"></script>