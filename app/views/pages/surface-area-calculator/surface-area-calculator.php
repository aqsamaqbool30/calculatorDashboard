    <section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
        <div id="inputdivs" class="accordion grid grid-cols-1 lg:grid-cols-2 gap-5 mb-4">
            <div class="m-0 cls-shadow h-full bg-white rounded-lg">
                <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Ball Surface Area Calculator</h3>
                <div class="py-5 px-4 mb-4">
                    <p id="limit1" class="text-primary_button m-0"></p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="radius-sphere" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="radius-sphere" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Radius (r)</label>
                        </div>
                        <select id="surfaceAreaSelect" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="sphere-volume" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                    </div>
                </div>
            </div>

            <div class="m-0 cls-shadow h-full bg-white rounded-lg">
                <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Cube Surface Area Calculator</h3>
                <div class="py-5 px-4 mb-4">
                    <p id="limit2" class="text-primary_button m-0"></p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="inputcube" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="inputcube" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Edge Length (a)</label>
                        </div>
                        <select id="selectcube" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="cubeSurfaceArea" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                    </div>
                </div>
            </div>

            <div id="result1" class="hidden text-center col-span-1 lg:col-span-2 mb-4">
                <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
                <p id="solution-div1"></p>
            </div>

            <div id="cone-surface-div" class="m-0 cls-shadow h-full bg-white rounded-lg">
                <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Cone Surface Area Calculator</h3>
                <div class="py-5 px-4 mb-4">
                    <p id="limit3" class="text-primary_button m-0"></p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="radius-cone" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="radius-cone" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Base Radius (r)</label>
                        </div>
                        <select id="coneradius" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="height-cone" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="height-cone" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (h)</label>
                        </div>
                        <select id="coneheight" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="cone-surface-area" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                    </div>
                </div>
            </div>

            <div id="cylinder-surface-div" class="m-0 cls-shadow h-full bg-white rounded-lg">
                <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Cylindrical Tank Surface Area Calculator</h3>
                <div class="py-5 px-4 mb-4">
                    <p id="limit4" class="text-primary_button m-0"></p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="radiuscylinder" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="radiuscylinder" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Base Radius (r)</label>
                        </div>
                        <select id="cylinderradius" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="heightcylinder" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="heightcylinder" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (h)</label>
                        </div>
                        <select id="cylinderheight" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="cylinder-surface-area" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                    </div>
                </div>
            </div>

            <div id="result2" class="hidden text-left sm:text-center col-span-1 lg:col-span-2 mb-4">
                <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
                <p id="solution-first"></p>
                <p id="solution-seventh"></p>
                <p id="solution-second"></p>
                <p id="solution-third"></p>
                <p id="solution-foruth"></p>
                <p id="solution-eighth"></p>
                <p id="solution-fifth"></p>
                <p id="solution-six"></p>
            </div>

            <div id="capsule-surface-div" class="m-0 cls-shadow h-full bg-white rounded-lg">
                <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Capsule Surface Area Calculator</h3>
                <div class="py-5 px-4 mb-4">
                    <p id="limit5" class="text-primary_button m-0"></p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="radiuscapsule" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="radiuscapsule" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Base Radius (r)</label>
                        </div>
                        <select id="capsuleradius" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="heightcapsule" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="heightcapsule" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (h)</label>
                        </div>
                        <select id="capsuleheight" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="capsule-surface-area" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                    </div>
                </div>
            </div>

            <div id="squarePyramid-surface-div" class="m-0 cls-shadow h-full bg-white rounded-lg">
                <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Square Pyramid Surface Area Calculator</h3>
                <div class="py-5 px-4 mb-4">
                    <p id="limit6" class="text-primary_button m-0"></p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="radiussquarePyramid" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="radiussquarePyramid" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Base Edge (a)</label>
                        </div>
                        <select id="squarePyramidradius" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="heightsquarePyramid" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="heightsquarePyramid" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (h)</label>
                        </div>
                        <select id="squarePyramidheight" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="squarePyramid-surface-area" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                    </div>
                </div>
            </div>

            <div id="result3" class="hidden text-center col-span-1 lg:col-span-2 mb-4">
                <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
                <p id="solution9"></p>
                <p id="solution10"></p>
                <p id="solution11"></p>
                <p id="solution12"></p>
                <p id="solution13"></p>
                <p id="solution14"></p>
                <p id="solution15"></p>
                <p id="solution16"></p>
            </div>

            <div id="tank-surface-div" class="m-0 cls-shadow h-full bg-white rounded-lg">
                <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Rectangular Tank Surface Area Calculator</h3>
                <div class="py-5 px-4 mb-4">
                    <p id="limit7" class="text-primary_button m-0"></p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="lengthtank" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="lengthtank" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Length (l)</label>
                        </div>
                        <select id="tanklength" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="widthtank" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="widthtank" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Width (w)</label>
                        </div>
                        <select id="tankwidth" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="heighttank" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="heighttank" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (h)</label>
                        </div>
                        <select id="tankheight" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="tank-surface-area" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                    </div>
                </div>
            </div>

            <div id="ellipsoid-surface-div" class="m-0 cls-shadow h-full bg-white rounded-lg">
                <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Ellipsoid Surface Area Calculator</h3>
                <div class="py-5 px-4 mb-4">
                    <p id="limit8" class="text-primary_button m-0"></p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="lengthellipsoid" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="lengthellipsoid" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Axis 1 (a)</label>
                        </div>
                        <select id="ellipsoidlength" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="widthellipsoid" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="widthellipsoid" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Axis 2 (b)</label>
                        </div>
                        <select id="ellipsoidwidth" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="heightellipsoid" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="heightellipsoid" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Axis 3 (c)</label>
                        </div>
                        <select id="ellipsoidheight" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="ellipsoid-surface-area" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                    </div>
                </div>
            </div>

            <div id="result4" class="hidden text-center col-span-1 lg:col-span-2 mb-4">
                <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
                <p id="solution17"></p>
                <p id="solution18"></p>
                <p id="solution19"></p>
            </div>

            <div id="conical-surface-div" class="m-0 cls-shadow h-full bg-white rounded-lg">
                <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Conical Frustum Surface Area Calculator</h3>
                <div class="py-5 px-4 mb-4">
                    <p id="limit9" class="text-primary_button m-0"></p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="lengthconicalFrustum" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="lengthconicalFrustum" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Top Radius (r)</label>
                        </div>
                        <select id="conicalFrustumlength" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="widthconicalFrustum" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="widthconicalFrustum" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Bottom Radius (R)</label>
                        </div>
                        <select id="conicalFrustumwidth" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="heightconicalFrustum" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="heightconicalFrustum" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (h)</label>
                        </div>
                        <select id="conicalFrustumheight" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="conical-surface-area" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                    </div>
                </div>
            </div>

            <div id="spherical-surface-div" class="m-0 cls-shadow h-full bg-white rounded-lg">
                <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Spherical Cap Surface Area </h3>
                <div class="py-5 px-4 mb-4">
                    <span class="block tex-sm pb-6 text-gray-400 caution"><span class="text-primary_button">*</span> Base radius (r) must be smaller than ball radius (R).</span>
                    <p id="limit10" class="text-primary_button m-0"></p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 mb-4">
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="lengthsphericalCap" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="lengthsphericalCap" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Base Radius (r)</label>
                        </div>
                        <select id="sphericalCaplength" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="widthsphericalCap" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="widthsphericalCap" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Ball Radius (R)</label>
                        </div>
                        <select id="sphericalCapwidth" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                        <div class="relative flex items-center border rounded-full w-full mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                            <input type="number" id="heightsphericalCap" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" placeholder=" " required>
                            <label for="heightsphericalCap" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Height (h)</label>
                        </div>
                        <select id="sphericalCapheight" class="select_class w-full h-9 sm:h-10 outline-none border rounded-full px-2 sm:px-5 text-label_color focus:text-primary_button focus:border-primary_button mb-5 md:mb-8">
                            <?php include './app/views/components/volume-select-values.php'; ?>
                        </select>
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <button id="spherical-surface-area" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-40 h-10 rounded-full duration-150 text-primary_button">Calculate</button>
                    </div>
                </div>
            </div>

            <div id="result5" class="hidden text-center col-span-1 lg:col-span-2 mb-4">
                <div class="bg-primary_button text-white font-semibold text-center py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
                <p id="solution-div20"></p>
                <p id="solution-div21"></p>
                <p id="solution-div22"></p>
                <p id="solution-div23"></p>
                <p id="orDiv1"></p>
                <p id="solution-div24"></p>
                <p id="solution-div25"></p>
                <p id="solution-div26"></p>
                <p id="solution-div27"></p>
                <p id="orDiv2"></p>
                <p id="solution-div28"></p>
                <p id="solution-div29"></p>
                <p id="solution-div30"></p>
                <p id="solution-div31"></p>
            </div>
        </div>
    </section>

    <script src="./app/views/pages/surface-area-calculator/surface-area-script.js"></script>