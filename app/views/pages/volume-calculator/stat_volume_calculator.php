    <section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
        <div id="inputdivs" class="accordion grid grid-cols-1 lg:grid-cols-2 gap-5 mb-4">
            <!-- Sphere Volume Calculator -->
            <div class="m-0 cls-shadow h-full bg-white rounded-lg">
                <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Sphere Volume Calculator</h3>
                <div class="py-5 px-4 mb-4">
                    <p id="limit1" class="text-primary_button m-0"></p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="radius-sphere" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="radius-sphere" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Radius (r)</label>
                        </div>
                        <select id="volumeSelect" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="sphere-volume" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                    </div>
                </div>
            </div>
            <!-- Cube Volume Calculator -->
            <div class="m-0 cls-shadow h-full bg-white rounded-lg">
                <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Cube Volume Calculator</h3>
                <div class="py-5 px-4 mb-4">
                    <p id="limit2" class="text-primary_button m-0"></p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="inputcube" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="inputcube" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Radius (r)</label>
                        </div>
                        <select id="selectcube" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="cubevolume" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                    </div>
                </div>
            </div>
            <!-- result for 1 and 2 -->
            <div id="result1" class="hidden text-center col-span-1 lg:col-span-2 mb-4">
                <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
                <p id="solution-div1"></p>
            </div>
            <!-- Cone Volume Calculator -->
            <div class="m-0 cls-shadow h-full bg-white rounded-lg">
                <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Cone Volume Calculator</h3>
                <div class="py-5 px-4 mb-4">
                    <p id="limit3" class="text-primary_button m-0"></p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="radius-cone" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="radius-cone" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Base Radius (r)</label>
                        </div>
                        <select id="coneradius" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="height-cone" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="height-cone" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (h)</label>
                        </div>
                        <select id="coneheight" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="cone-volume" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                    </div>
                </div>
            </div>
            <!-- Cylinder Volume Calculator -->
            <div class="m-0 cls-shadow h-full bg-white rounded-lg">
                <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Cylinder Volume Calculator</h3>
                <div class="py-5 px-4 mb-4">
                    <p id="limit4" class="text-primary_button m-0"></p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="radiuscylinder" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="radiuscylinder" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Base Radius (r)</label>
                        </div>
                        <select id="cylinderradius" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="heightcylinder" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="heightcylinder" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (h)</label>
                        </div>
                        <select id="cylinderheight" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="cylindervolume" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                    </div>
                </div>
            </div>
            <!-- result for 3 and 4 -->
            <div id="result2" class="hidden text-center col-span-1 lg:col-span-2 mb-4">
                <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
                <p id="solution-div2"></p>
                <p id="solution-div3"></p>
            </div>
            <!-- Capsule Volume Calculator -->
            <div class="m-0 cls-shadow h-full bg-white rounded-lg">
                <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Capsule Volume Calculator</h3>
                <div class="py-5 px-4 mb-4">
                    <p id="limit5" class="text-primary_button m-0"></p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="radiuscapsule" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="radiuscapsule" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Base Radius (r)</label>
                        </div>
                        <select id="capsuleradius" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="heightcapsule" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="heightcapsule" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (h)</label>
                        </div>
                        <select id="capsuleheight" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="capsulevolume" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                    </div>
                </div>
            </div>
            <!-- Square Pyramid Volume Calculator -->
            <div class="m-0 cls-shadow h-full bg-white rounded-lg">
                <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Square Pyramid Volume Calculator</h3>
                <div class="py-5 px-4 mb-4">
                    <p id="limit6" class="text-primary_button m-0"></p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4">
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="radiussquarePyramid" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="radiussquarePyramid" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Base Edge (a)</label>
                        </div>
                        <select id="squarePyramidradius" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="heightsquarePyramid" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="heightsquarePyramid" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (h)</label>
                        </div>
                        <select id="squarePyramidheight" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="squarePyramidvolume" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                    </div>
                </div>
            </div>
            <!-- result for 5 and 6 -->
            <div id="result3" class="hidden text-center col-span-1 lg:col-span-2 mb-4">
                <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
                <p id="solution-div4"></p>
                <p id="solution-div5"></p>
            </div>
            <!-- Rectangular Tank Volume Calculator -->
            <div class="m-0 cls-shadow h-full bg-white rounded-lg">
                <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Rectangular Tank Volume Calculator</h3>
                <div class="py-5 px-4 mb-4">
                    <p id="limit7" class="text-primary_button m-0"></p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="lengthtank" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="lengthtank" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Length (l)</label>
                        </div>
                        <select id="tanklength" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="widthtank" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="widthtank" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Width (w)</label>
                        </div>
                        <select id="tankwidth" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="heighttank" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="heighttank" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (h)</label>
                        </div>
                        <select id="tankheight" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="tankvolume" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                    </div>
                </div>
            </div>
            <!-- Conical Frustum Volume Calculator -->
            <div class="m-0 cls-shadow h-full bg-white rounded-lg">
                <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Conical Frustum Volume Calculator </h3>
                <div class="py-5 px-4 mb-4">
                    <p id="limit8" class="text-primary_button m-0"></p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="lengthconicalFrustum" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="lengthconicalFrustum" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Top Radius (r)</label>
                        </div>
                        <select id="conicalFrustumlength" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="widthconicalFrustum" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="widthconicalFrustum" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Bottom Radius (R)</label>
                        </div>
                        <select id="conicalFrustumwidth" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="heightconicalFrustum" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="heightconicalFrustum" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (h)</label>
                        </div>
                        <select id="conicalFrustumheight" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="conicalFrustumvolume" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                    </div>
                </div>
            </div>
            <!-- result for 7 and 8 -->
            <div id="result4" class="hidden text-center col-span-1 lg:col-span-2 mb-4">
                <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
                <p id="solution-div6"></p>
                <p id="solution-div7"></p>
                <p id="solution-div8"></p>
            </div>
            <!-- Ellipsoid Volume Calculator -->
            <div class="m-0 cls-shadow h-full bg-white rounded-lg">
                <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Ellipsoid Volume Calculator</h3>
                <div class="py-5 px-4 mb-4">
                    <p id="limit9" class="text-primary_button m-0"></p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="lengthellipsoid" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="lengthellipsoid" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Axis 1 (a)</label>
                        </div>
                        <select id="ellipsoidlength" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="widthellipsoid" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="widthellipsoid" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Axis 2 (b)</label>
                        </div>
                        <select id="ellipsoidwidth" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="heightellipsoid" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="heightellipsoid" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Axis 3 (c)</label>
                        </div>
                        <select id="ellipsoidheight" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="ellipsoidvolume" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                    </div>
                </div>
            </div>
            <!-- Tube Volume Calculator -->
            <div class="m-0 cls-shadow h-full bg-white rounded-lg">
                <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Tube Volume Calculator </h3>
                <div class="py-5 px-4 mb-4">
                    <p id="limit10" class="text-primary_button m-0"></p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="lengthtube" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="lengthtube" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Outer Diameter (d1)</label>
                        </div>
                        <select id="tubelength" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="widthtube" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="widthtube" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Inner Diameter (d2)</label>
                        </div>
                        <select id="tubewidth" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="heighttube" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="heighttube" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Length (l)</label>
                        </div>
                        <select id="tubeheight" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="tubevolume" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                    </div>
                </div>
            </div>
            <!-- result for 9 and 10 -->
            <div id="result5" class="hidden text-center col-span-1 lg:col-span-2 mb-4">
                <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
                <p id="solution-div9"></p>
                <p id="solution-div10"></p>
                <p id="solution-div11"></p>
            </div>
            <!-- Spherical Cap Volume Calculator -->
            <div class="m-0 cls-shadow h-full bg-white rounded-lg">
                <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Spherical Cap Volume Calculator</h3>
                <div class="py-5 px-4 mb-4">
                    <p class="pb-6 text-gray-400">* Please provide any two values.</p>
                    <p id="warnid" class="pb-6 text-gray-400"><span class="text-primary_button">*</span>Base radius (r) must be smaller than ball radius (R).</p>
                    <p id="limit11" class="text-primary_button m-0"></p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="lengthsphericalCap" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="lengthsphericalCap" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Base Radius (r)</label>
                        </div>
                        <select id="sphericalCaplength" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="widthsphericalCap" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="widthsphericalCap" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Ball Radius (R)</label>
                        </div>
                        <select id="sphericalCapwidth" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="heightsphericalCap" min="1" max="999" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="heightsphericalCap" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (h)</label>
                        </div>
                        <select id="sphericalCapheight" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="sphericalCapvolume" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                    </div>
                </div>
            </div>
            <!-- reslut for the last calcualtor -->
            <div id="result6" class="hidden text-center col-span-1 lg:col-span-2 mb-4">
                <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
                <p id="solution-div12"></p>
                <p id="solution-div13"></p>
            </div>
        </div>
    </section>

    <script src="./app/views/pages/volume-calculator/volume-script.js"></script>