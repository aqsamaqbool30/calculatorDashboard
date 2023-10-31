<?php $assetConfig = getConfig(); ?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">
    <meta name='description' content='Efficient and user-friendly online calculator for quick and accurate computations. Perform basic math, scientific calculations, conversions, and more with ease. Your go-to tool for hassle-free number crunching'>
    <title>Numeric Guru</title>

    <link href="<?php echo $assetConfig['asset_url']; ?>/css/output.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</head>

<body>
    <nav class="w-full h-16 px-5 md:px-7 coxl:px-10 flex items-center relative justify-between max-w-[1600px] mx-auto">
        <div class="relative w-28 xs:w-40 my-auto">
            <a href="<?php echo $assetConfig['base_url']; ?>/"><img src="<?php echo $assetConfig['asset_url']; ?>/images/calculator-white.svg" alt="" class="inline-block"></a>
        </div>
        <div class="lg:hidden my-auto">
            <button id="main_nav_btn" type="button" class="w-6 xs:w-7"><img src="<?php echo $assetConfig['asset_url']; ?>/images/hamburger.png" alt=""></button>
        </div>
        <ul class="main_nav_div hidden lg:flex maxlg:absolute left-0 right-0 maxlg:bg-white maxlg:text-black px-5 md:px-7 lg:px-0 top-[49px] z-20 maxlg:[&>*]:py-[10px] [&>*]:lg:px-3 [&>*]:coxl:px-4 [&>*]:text-[15px] [&>*]:font-semibold hover:[&>*]:text-primary_button">
            <li class="drp_btn"><button type="button" class="drp_a">Finance&nbsp;<svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill="currentColor" clip-rule="evenodd" viewBox="0 0 512 345.51" class="w-2 inline-block ml-1 lg:caret_cls">
                        <path fill-rule="nonzero" d="m3.95 30.57 236.79 307.24c1.02 1.39 2.24 2.65 3.67 3.75 8.27 6.39 20.17 4.87 26.56-3.41l236.11-306.4C510.14 28.38 512 23.91 512 19c0-10.49-8.51-19-19-19H18.93v.06A18.9 18.9 0 0 0 7.36 4.01C-.92 10.4-2.44 22.3 3.95 30.57z" />
                    </svg></button>
                <div class="hidden drp_list lg:h-[200px] fixed top-0 bottom-0 left-0 right-0 z-50 lg:absolute lg:top-16 maxlg:pt-12 bg-white px-5 md:px-7 lg:px-10 lg:py-6 lg:shadow-md duration-300 mb-0">
                    <button type="button" class="close_btn absolute right-5 top-5 lg:hidden"><img src="<?php echo $assetConfig['asset_url']; ?>/images/close.png" alt="" class="w-5"></button>
                    <a href="<?php echo $assetConfig['base_url']; ?>/finance-calculators" class="calculator-label !text-primary_button">Financial Calculators</a>
                    <ul class="header-ul text-black">
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/customized-currency-exchange-rate">Customized Currency Exchange Rate</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/currency-calculator">Currency Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/present-value-calculator">Present Value Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/commission-calculator">Commission Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/margin-calculator">Margin Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/vat-calculator">VAT Calculator</a></li>
                    </ul>
                </div>
            </li>
            <li class="drp_btn"><button type="button" class="drp_a">Fitness&nbsp;&&nbsp;Health&nbsp;<svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill="currentColor" clip-rule="evenodd" viewBox="0 0 512 345.51" class="w-2 inline-block ml-1 lg:caret_cls">
                        <path fill-rule="nonzero" d="m3.95 30.57 236.79 307.24c1.02 1.39 2.24 2.65 3.67 3.75 8.27 6.39 20.17 4.87 26.56-3.41l236.11-306.4C510.14 28.38 512 23.91 512 19c0-10.49-8.51-19-19-19H18.93v.06A18.9 18.9 0 0 0 7.36 4.01C-.92 10.4-2.44 22.3 3.95 30.57z" />
                    </svg></button>
                <div class="hidden drp_list lg:h-[250px] fixed top-0 bottom-0 left-0 right-0 z-50 lg:absolute lg:top-16 lg:left-0 lg:right-0 maxlg:pt-12 bg-white px-5 md:px-7 lg:px-10 lg:py-6 lg:shadow-md duration-300 mb-0">
                    <button type="button" class="close_btn absolute right-5 top-5 lg:hidden"><img src="<?php echo $assetConfig['asset_url']; ?>/images/close.png" alt="" class="w-5"></button>
                    <a href="<?php echo $assetConfig['base_url']; ?>/fitness-and-health-calculators" class="calculator-label !text-primary_button">Fitness & Health Calculators</a>
                    <ul class="header-ul text-black">
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/ideal-weight-calculator">Ideal Weight Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/body-type-calculator">Body Type Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/body-surface-area-calculator">Body Surface Area Calculator</a></li>
                        <!-- <li><a href="<?php echo $assetConfig['base_url']; ?>/calories-burn-calculator">Calories Burned Calculator</a></li> -->
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/calories-calculator">Calorie Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/fat-intake-calculator">Fat Intake Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/anorexic-bmi-calculator">Anorexic BMI Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/lean-mass-body-calculator">Lean Mass Body Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/food-energy-converter">Food Energy Converter</a></li>
                        <!-- <li><a href="<?php echo $assetConfig['base_url']; ?>/army-body-fat-calculator">Army Body Fat Calculator</a></li> -->
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/overweight-calculator">Overweight Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/gfr-calculator">GFR Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/bmr-calculator">BMR Calculator</a></li>
                        <!-- <li><a href="<?php echo $assetConfig['base_url']; ?>/bmi-calculator">BMI Calculator</a></li> -->
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/tdee-calculator">TDEE Calculator</a></li>
                    </ul>
                </div>
            </li>
            <li class="drp_btn"><button type="button" class="drp_a">Math&nbsp;<svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill="currentColor" clip-rule="evenodd" viewBox="0 0 512 345.51" class="w-2 inline-block ml-1 lg:caret_cls">
                        <path fill-rule="nonzero" d="m3.95 30.57 236.79 307.24c1.02 1.39 2.24 2.65 3.67 3.75 8.27 6.39 20.17 4.87 26.56-3.41l236.11-306.4C510.14 28.38 512 23.91 512 19c0-10.49-8.51-19-19-19H18.93v.06A18.9 18.9 0 0 0 7.36 4.01C-.92 10.4-2.44 22.3 3.95 30.57z" />
                    </svg></button>
                <div class="hidden drp_list lg:h-[315px] fixed top-0 bottom-0 left-0 right-0 z-50 lg:absolute lg:top-16 lg:left-0 lg:right-0 maxlg:pt-12 bg-white px-5 md:px-7 lg:px-10 lg:py-6 lg:shadow-md duration-300 mb-0">
                    <button type="button" class="close_btn absolute right-5 top-5 lg:hidden"><img src="<?php echo $assetConfig['asset_url']; ?>/images/close.png" alt="" class="w-5"></button>
                    <a href="<?php echo $assetConfig['base_url']; ?>/math-calculators" class="calculator-label !text-primary_button">Math Calculators</a>
                    <ul class="header-ul text-black">
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/percentage-calculator">Percentage Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/probability-calculator">Probability Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/half-life-calculator">Half Life Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/slope-calculator">Slope Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/binary-calculator">Binary Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/hexadecimal-calculator">Hex Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/stat-volume-calculator">Volume Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/circle-calculator">Circle Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/root-calculator">Root Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/ratio-calculator">Ratio Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/area-calculator">Area Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/rounding-calculator">Rounding Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/exponent-calculator">Exponent Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/fraction-calculator">Fraction Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/triangle-calculator">Triangle Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/log-calculator">Log Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/big-number-calculator">Big Number Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/distance-calculator">Distance Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/sample-size-calculator">Sample Size Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/p-value-calculator">P-value Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/statistics-calculator">Statistics Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/right-triangle-calculator">Right Triangle Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/basic-calculator">Basic Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/statistics-pad-calculator">Statistics Calculator</a></li>
                    </ul>
                </div>
            </li>
            <li class="drp_btn"><button type="button" class="drp_a">Other&nbsp;<svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill="currentColor" clip-rule="evenodd" viewBox="0 0 512 345.51" class="w-2 inline-block ml-1 lg:caret_cls">
                        <path fill-rule="nonzero" d="m3.95 30.57 236.79 307.24c1.02 1.39 2.24 2.65 3.67 3.75 8.27 6.39 20.17 4.87 26.56-3.41l236.11-306.4C510.14 28.38 512 23.91 512 19c0-10.49-8.51-19-19-19H18.93v.06A18.9 18.9 0 0 0 7.36 4.01C-.92 10.4-2.44 22.3 3.95 30.57z" />
                    </svg></button>
                <div class="hidden drp_list lg:h-[200px] fixed top-0 bottom-0 left-0 right-0 z-50 lg:absolute lg:top-16 lg:left-0 lg:right-0 maxlg:pt-12 bg-white px-5 md:px-7 lg:px-10 lg:py-6 lg:shadow-md duration-300 mb-0">
                    <button type="button" class="close_btn absolute right-5 top-5 lg:hidden"><img src="<?php echo $assetConfig['asset_url']; ?>/images/close.png" alt="" class="w-5"></button>
                    <a href="<?php echo $assetConfig['base_url']; ?>/other-calculators" class="calculator-label !text-primary_button">Other Calculators</a>
                    <ul class="header-ul text-black">
                        <!-- <li><a href="<?php echo $assetConfig['base_url']; ?>/age-calculator">Age Calculator</a></li> -->
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/time-calculator">Time Calculator</a></li>
                        <!-- <li><a href="<?php echo $assetConfig['base_url']; ?>/height-calculator">Height Calculator</a></li> -->
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/gpd-calculator">GDP Calculator</a></li>
                        <!-- <li><a href="<?php echo $assetConfig['base_url']; ?>/voltage-drop-calculator">Voltage Drop Calculator</a></li> -->
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/horsepower-calculator">Horsepower Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/ohms-law-calculator">Ohms Law Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/tip-calculator">Tip Calculator</a></li>
                        <li><a href="<?php echo $assetConfig['base_url']; ?>/conversion-calculator">Conversion Calculator</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        <ul class="main_nav_div hidden lg:flex maxlg:absolute left-0 right-0 top-[219px] z-10 [&>*]:cursor-pointer maxlg:bg-white maxlg:text-black px-5 md:px-7 lg:px-0 maxlg:pb-10 maxlg:shadow-md maxlg:flex-col maxlg:items-start maxlg:[&>*]:py-[10px] [&>*]:lg:px-3 [&>*]:coxl:px-4 [&>*]:text-[15px] [&>*]:font-semibold [&>*]:h-9 [&>*]:w-32 [&>*]:lg:border [&>*]:lg:rounded-full [&>*]:flex [&>*]:lg:justify-center [&>*]:items-center [&>*]:duration-300">
            <li class="lg:hover:bg-primary_button hover:text-primary_button lg:hover:text-white border-gray-400 lg:hover:border-primary_button lg:px-3">Contact us</li>
            <li class="lg:bg-primary_button lg:text-white maxlg:hover:text-primary_button lg:ml-3 lg:hover:-translate-y-1">About us</li>
        </ul>
    </nav>