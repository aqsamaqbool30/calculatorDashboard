<link rel="stylesheet" href="./app/views/pages/matrix-calculator/matrix-style.css">

<section class="container max-w-[1600px] mx-auto px-5 md:px-7 coxl:px-10 my-5 lg:my-12">
    <div id="inputdivs" class="accordion grid grid-cols-1 mb-4">
        <div class="m-0 cls-shadow h-full bg-white rounded-lg">
            <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start bg-primary_button bg-opacity-90 text-white rounded-lg py-4 lg:py-5 px-4 mb-5">Matrix Calculator</h3>
            <div class="py-5 px-4 mb-4">
                <p id="limit1" class="text-primary_button m-0"></p>
                <div class="grid xl:grid-cols-2 gap-5 mb-4">
                    <div class="m-0 pb-3 sm:pb-5 md:pb-7 px-3 sm:px-5 md:px-7 border rounded-xl cls-shadow">
                        <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start text-label_color rounded-lg py-4 lg:py-5 px-4 mb-6">Matrix A</h3>
                        <div class="inline-flex xl:flex items-center xl:justify-between m-0 gap-3">
                            <div class="inline-flex m-0 w-full">
                                <div class="relative flex items-center border rounded-full w-full comd:w-[200px] mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                                    <input type="number" id="rowsInput" min="1" max="9" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" value="3" placehlder=" " required>
                                    <label for="rowsInput" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Row</label>
                                </div>
                                <div class="flex flex-col gap-1 ml-2 m-0 h-9">
                                    <button class="changeValueBtn p-0 border-l-[10px] border-l-transparent border-r-[10px] border-r-transparent border-b-[16px] hover:border-b-primary_button" data-target="rowsInput" data-operation="increase"></button>
                                    <button class="changeValueBtn p-0 border-l-[10px] border-l-transparent border-r-[10px] border-r-transparent border-t-[16px] hover:border-t-primary_button" data-target="rowsInput" data-operation="decrease"></button>
                                </div>
                            </div>
                            <div class="inline-flex m-0 w-full">
                                <div class="relative flex items-center border rounded-full w-full comd:w-[200px] mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                                    <input type="number" id="columnsInput" min="1" max="9" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" value="3" placeholder=" " required>
                                    <label for="columnsInput" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Column</label>
                                </div>
                                <div class="flex flex-col gap-1 ml-2 m-0 h-9">
                                    <button class="changeValueBtn p-0 border-l-[10px] border-l-transparent border-r-[10px] border-r-transparent border-b-[16px] hover:border-b-primary_button" data-target="columnsInput" data-operation="increase"></button>
                                    <button class="changeValueBtn p-0 border-l-[10px] border-l-transparent border-r-[10px] border-r-transparent border-t-[16px] hover:border-t-primary_button" data-target="columnsInput" data-operation="decrease"></button>
                                </div>
                            </div>
                        </div>
                        <div id="matrixContainer" class="mb-5 md:mb-8"></div>
                        <div class="grid grid-cols-3 sm:grid-cols-4 gap-2 sm:gap-3 maxsm:[&>*]:text-sm mb-4">
                            <div class="flex justify-center items-center maxxl:w-full mb-4">
                                <button id="clearAllInputs" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full xl:w-40 h-10 rounded-full duration-150 text-primary_button">Clear</button>
                            </div>
                            <div class="flex justify-center items-center maxxl:w-full mb-4">
                                <button id="calculateAllZeroes" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full xl:w-40 h-10 rounded-full duration-150 text-primary_button">All 0</button>
                            </div>
                            <div class="flex justify-center items-center maxxl:w-full mb-4">
                                <button id="calculateAllOnes" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full xl:w-40 h-10 rounded-full duration-150 text-primary_button">All 1</button>
                            </div>
                            <div class="flex justify-center items-center maxxl:w-full mb-4">
                                <button id="calculateAllRandoms" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full xl:w-40 h-10 rounded-full duration-150 text-primary_button"><span class="maxcosm:hidden">Random</span><span class="maxcosm:block hidden">Rand</button>
                            </div>
                            <div class="flex justify-center mb-4 maxxl:w-full">
                                <button id="btnPower" class="mr-1 border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full xl:w-40 h-10 rounded-full duration-150 text-primary_button"><span class="maxcosm:hidden">Power of</span><span class="maxcosm:block hidden">A ^ </button>
                            </div>
                            <div class="relative flex items-center border rounded-full max-w-full focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px mb-4">
                                <input type="number" id="powerOfNumber" step="1" class="w-full h-9 sm:h-10 mx-3 xs:mx-5 text-xs md:text-sm outline-none" value="2" placeholder=" " required>
                            </div>
                            <div class="flex justify-center mb-4 maxxl:w-full">
                                <button title="Multiply by" id="btnMultiply" class="mr-1 border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full xl:w-40 h-10 rounded-full duration-150 text-primary_button"><span class="maxcosm:hidden">Multiply by</span><span class="maxcosm:block hidden">A ×</button>
                            </div>
                            <div class="relative flex items-center border rounded-full max-w-full focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px mb-4">
                                <input type="number" id="multiplyByNumber" step="1" class="w-full h-9 sm:h-10 mx-3 xs:mx-5 text-xs md:text-sm outline-none" value="3" placeholder=" " required>
                            </div>
                            <div class="flex justify-center items-center maxxl:w-full mb-4">
                                <button id="btnTranspose" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full xl:w-40 h-10 rounded-full duration-150 text-primary_button"><span class="maxcosm:hidden">Transpose</span><span class="maxcosm:block hidden">A<sup>-1</sup></span></button>
                            </div>
                            <div class="flex justify-center items-center maxxl:w-full mb-4">
                                <button id="btnDterminant" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full xl:w-40 h-10 rounded-full duration-150 text-primary_button"><span class="maxcosm:hidden">Determinant</span><span class="maxcosm:block hidden">det (A)</span></button>
                            </div>
                            <div class="flex justify-center items-center maxxl:w-full mb-4">
                                <button id="btnInverse" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full xl:w-40 h-10 rounded-full duration-150 text-primary_button"><span class="maxcosm:hidden">Inverse</span><span class="maxcosm:block hidden">A<sup>-1</sup></span></button>
                            </div>
                        </div>
                    </div>
                    <div class="m-0 pb-7 px-3 sm:px-5 md:px-7 border rounded-xl cls-shadow">
                        <h3 class="text-base xs:text-lg md:text-2xl font-semibold text-start text-label_color rounded-lg py-4 lg:py-5 px-4 mb-6">Matrix B</h3>
                        <div class="inline-flex xl:flex items-center xl:justify-between m-0 gap-3">
                            <div class="inline-flex m-0 w-full">
                                <div class="relative flex items-center border rounded-full w-full comd:w-[200px] mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                                    <input type="number" id="rowsInputB" min="1" max="9" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" value="3" placehlder=" " required>
                                    <label for="rowsInputB" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Row</label>
                                </div>
                                <div class="flex flex-col gap-1 ml-2 m-0 h-9">
                                    <button class="changeValueBtnB p-0 border-l-[10px] border-l-transparent border-r-[10px] border-r-transparent border-b-[16px] hover:border-b-primary_button" data-target="rowsInputB" data-operation="increase"></button>
                                    <button class="changeValueBtnB p-0 border-l-[10px] border-l-transparent border-r-[10px] border-r-transparent border-t-[16px] hover:border-t-primary_button" data-target="rowsInputB" data-operation="decrease"></button>
                                </div>
                            </div>
                            <div class="inline-flex m-0 w-full">
                                <div class="relative flex items-center border rounded-full w-full comd:w-[200px] mb-5 md:mb-8 focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px">
                                    <input type="number" id="columnsInputB" min="1" max="9" step="1" class="w-full h-9 sm:h-10 mx-5 text-xs md:text-sm outline-none" value="3" placeholder=" " required>
                                    <label for="columnsInputB" class="absolute top-[10px] left-[34px] text-label_color duration-300 pointer-events-none">Column</label>
                                </div>
                                <div class="flex flex-col gap-1 ml-2 m-0 h-9">
                                    <button class="changeValueBtnB p-0 border-l-[10px] border-l-transparent border-r-[10px] border-r-transparent border-b-[16px] hover:border-b-primary_button" data-target="columnsInputB" data-operation="increase"></button>
                                    <button class="changeValueBtnB p-0 border-l-[10px] border-l-transparent border-r-[10px] border-r-transparent border-t-[16px] hover:border-t-primary_button" data-target="columnsInputB" data-operation="decrease"></button>
                                </div>
                            </div>
                        </div>
                        <div id="matrixContainerB" class="mb-5 md:mb-8"></div>

                        <div class="grid grid-cols-3 sm:grid-cols-4 gap-2 sm:gap-3 maxsm:[&>*]:text-sm mb-4">
                            <div class="flex justify-center items-center maxxl:w-full mb-4">
                                <button id="clearAllInputsB" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full xl:w-40 h-10 rounded-full duration-150 text-primary_button">Clear</button>
                            </div>
                            <div class="flex justify-center items-center maxxl:w-full mb-4">
                                <button id="calculateAllZeroesB" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full xl:w-40 h-10 rounded-full duration-150 text-primary_button">All 0</button>
                            </div>
                            <div class="flex justify-center items-center maxxl:w-full mb-4">
                                <button id="calculateAllOnesB" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full xl:w-40 h-10 rounded-full duration-150 text-primary_button">All 1</button>
                            </div>
                            <div class="flex justify-center items-center maxxl:w-full mb-4">
                                <button id="calculateAllRandomsB" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full xl:w-40 h-10 rounded-full duration-150 text-primary_button"><span class="maxcosm:hidden">Random</span><span class="maxcosm:block hidden">Rand</button>
                            </div>
                            <div class="flex justify-center m-0 maxxl:w-full mb-4">
                                <button id="btnPowerB" class="mr-1 border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full xl:w-40 h-10 rounded-full duration-150 text-primary_button"><span class="maxcosm:hidden">Power of</span><span class="maxcosm:block hidden">B ^ </button>
                            </div>
                            <div class="relative flex items-center border rounded-full max-w-full focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px mb-4">
                                <input type="number" id="powerOfNumberB" step="1" class="w-full h-9 sm:h-10 mx-3 xs:mx-5 text-xs md:text-sm outline-none" value="2" placeholder=" " required>
                            </div>
                            <div class="flex justify-center m-0 maxxl:w-full mb-4">
                                <button title="Multiply by" id="btnMultiplyB" class="mr-1 border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full xl:w-40 h-10 rounded-full duration-150 text-primary_button"><span class="maxcosm:hidden">Multiply by</span><span class="maxcosm:block hidden">B ×</button>
                            </div>
                            <div class="relative flex items-center border rounded-full max-w-full focus-within:text-primary_button focus-within:border-primary_button maxsm:text-15px mb-4">
                                <input type="number" id="multiplyByNumberB" step="1" class="w-full h-9 sm:h-10 mx-3 xs:mx-5 text-xs md:text-sm outline-none" value="3" placeholder=" " required>
                            </div>
                            <div class="flex justify-center items-center maxxl:w-full mb-4">
                                <button id="btnTransposeB" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full xl:w-40 h-10 rounded-full duration-150 text-primary_button"><span class="maxcosm:hidden">Transpose</span><span class="maxcosm:block hidden">B<sup>-1</sup></span></button>
                            </div>
                            <div class="flex justify-center items-center maxxl:w-full mb-4">
                                <button id="btnDterminantB" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full xl:w-40 h-10 rounded-full duration-150 text-primary_button"><span class="maxcosm:hidden">Determinant</span><span class="maxcosm:block hidden">det (B)</span></button>
                            </div>
                            <div class="flex justify-center items-center maxxl:w-full mb-4">
                                <button id="btnInverseB" class="border border-primary_button hover:bg-primary_button hover:text-white hover:font-semibold w-full xl:w-40 h-10 rounded-full duration-150 text-primary_button"><span class="maxcosm:hidden">Inverse</span><span class="maxcosm:block hidden">B<sup>-1</sup></span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sm:flex justify-center pt-4 sm:pt-7 md:pt-10 m-0">
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 comd:gap-4 maxcosm:w-full mb-4">
                        <div class="inline-flex justify-center items-center maxsm:w-full">
                            <button title="Matrix A + Matrix B" id="btnABaddition" class="border border-primary_button hover:bg-white bg-primary_button text-white hover:font-semibold w-full sm:w-40 h-10 rounded-full duration-150 hover:text-primary_button">A + B</button>
                        </div>
                        <div class="inline-flex justify-center items-center maxsm:w-full">
                            <button title="Matrix A - Matrix B" id="btnABsubtract" class="border border-primary_button hover:bg-white bg-primary_button text-white hover:font-semibold w-full sm:w-40 h-10 rounded-full duration-150 hover:text-primary_button">A - B</button>
                        </div>
                        <div class="inline-flex justify-center items-center maxsm:w-full">
                            <button title="Product of Matrix A and Matrix B" id="btnABproduct" class="border border-primary_button hover:bg-white bg-primary_button text-white hover:font-semibold w-full sm:w-40 h-10 rounded-full duration-150 hover:text-primary_button">AB</button>
                        </div>
                        <div class="inline-flex justify-center items-center maxsm:w-full">
                            <button title="swap Matrix A with Matrix B" id="btnABswap" class="border border-primary_button hover:bg-white bg-primary_button text-white hover:font-semibold w-full sm:w-40 h-10 rounded-full duration-150 hover:text-primary_button">A ↔ B</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="result" class="hidden text-center [&>*]:py-2 mb-4">
        <div class="bg-primary_button text-white font-semibold py-3 lg:py-4 text-base xs:text-lg md:text-2xl rounded-lg mb-4">Result</div>
        <div class="mt-3 mb-0 flex maxsm:flex-col justify-center items-center">
            <p id="limit2" class="text-primary_button m-0"></p>
            <p id="powerAndMultiply" class="mr-3"></p>
            <div id="matrixWithPower" class="flex justify-start sm:justify-center mb-4"></div>
        </div>
        <div id="copingDiv" class="hidden text-primary_button hover:[&>*]:underline [&>*]:font-semibold [&>*]:duration-300 m-0">
            <button id="copyToA" class="mr-3">Copy to A</button>
            <button id="copyToB">Copy to B</button>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/9.5.1/math.min.js"></script>
<script src="./app/views/pages/matrix-calculator/matrix-script.js"></script>