<!-- <!doctype html>
<html> -->
<?php
require_once __DIR__ . '/app/helpers/helper.php';
require_once __DIR__ . '/app/Router.php';

// Get the configuration
$config = getConfig();

// Create a new Router instance
$router = new Router();

// Define routes

$router->addRoute('GET', $config['base_url'] . '/', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->home();
  // echo "This is the Home Page";
});
$router->addRoute('GET', $config['base_url'] . '/finance-calculators', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->finance_calculators();
});
$router->addRoute('GET', $config['base_url'] . '/fitness-and-health-calculators', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->fitness_and_health_calculators();
});
$router->addRoute('GET', $config['base_url'] . '/math-calculators', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->math_calculators();
});
$router->addRoute('GET', $config['base_url'] . '/other-calculators', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->other_calculators();
});
$router->addRoute('GET', $config['base_url'] . '/gpd-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->gpd_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/voltage-drop-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->voltage_drop_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/horsepower-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->horsepower_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/tip-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->tip_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/ohms-law-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->ohms_law_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/percentage-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->percentage_calc();
});
$router->addRoute('GET', $config['base_url'] . '/randomnumber', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->random_num();
});
$router->addRoute('GET', $config['base_url'] . '/binary-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->binary_calc();
});
$router->addRoute('GET', $config['base_url'] . '/hexadecimal-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->hex_calc();
});
$router->addRoute('GET', $config['base_url'] . '/mean-median-mode-range-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->mean_mode_calc();
});
$router->addRoute('GET', $config['base_url'] . '/area-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->area_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/slope-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->slope_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/half-life-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->half_life_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/probability-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->probability_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/circle-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->circle_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/root-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->root_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/ratio-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->ratio_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/pythagorean-theorem-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->pythagorean_theorem_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/rounding-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->rounding_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/scientific-notation-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->scientific_notation_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/prime-factorization-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->prime_factorization_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/average-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->average_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/z-score-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->zindex_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/exponent-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->exponent_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/number-sequence-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->number_sequence_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/fraction-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->fraction_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/triangle-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->triangle_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/quadratic-formula-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->quadratic_formula_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/log-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->log_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/permutation-combination-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->permutation_combination_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/big-number-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->big_number_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/distance-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->distance_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/distance-measurement-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->distance_measurement_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/surface-area-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->surface_area_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/common-factor-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->common_factor_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/long-division-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->long_division_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/standard-deviation-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->standard_deviation_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/statistics-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->statistics_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/right-triangle-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->right_triangle_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/basic-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->basic_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/statistics-pad-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->statistics_pad_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/matrix-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->matrix_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/sample-size-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->sample_size_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/p-value-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->p_value_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/confidence-interval-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->confidence_interval_calculator();
});
$router->addRoute('GET', $config['base_url'] . '/stat-volume-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->stat_volume_calc();
});
$router->addRoute('GET', $config['base_url'] . '/conversion-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->converse_calc();
});
$router->addRoute('GET', $config['base_url'] . '/age-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->age_calc();
});
$router->addRoute('GET', $config['base_url'] . '/time-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->time_calc();
});
$router->addRoute('GET', $config['base_url'] . '/height-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->height_calculator();
});

$router->addRoute('GET', $config['base_url'] . '/body-type-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->bodytype_calc();
});

$router->addRoute('GET', $config['base_url'] . '/body-surface-area-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->bodysurface_calc();
});
$router->addRoute('GET', $config['base_url'] . '/ideal-weight-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->idealweight_calc();
});
$router->addRoute('GET', $config['base_url'] . '/gfr-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->gfr_calc();
});

$router->addRoute('GET', $config['base_url'] . '/army-body-fat-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->army_calc();
});
$router->addRoute('GET', $config['base_url'] . '/food-energy-converter', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->food_calc();
});
$router->addRoute('GET', $config['base_url'] . '/lean-mass-body-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->lean_calc();
});
$router->addRoute('GET', $config['base_url'] . '/anorexic-bmi-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->anorexic_calc();
});
$router->addRoute('GET', $config['base_url'] . '/fat-intake-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->fatintake_calc();
});
$router->addRoute('GET', $config['base_url'] . '/carbohydrate-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->carbo_calc();
});
$router->addRoute('GET', $config['base_url'] . '/calories-burn-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->caloriesburn_calc();
});
$router->addRoute('GET', $config['base_url'] . '/calories-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->calories_calc();
});
$router->addRoute('GET', $config['base_url'] . '/estate-tax-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->estate_calc();
});
$router->addRoute('GET', $config['base_url'] . '/margin-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->margin_calc();
});
$router->addRoute('GET', $config['base_url'] . '/commission-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->commission_calc();
});
$router->addRoute('GET', $config['base_url'] . '/present-value-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->present_calc();
});
$router->addRoute('GET', $config['base_url'] . '/currency-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->currency_calc();
});
$router->addRoute('GET', $config['base_url'] . '/customized-currency-exchange-rate', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->Exchange_calc();
});
$router->addRoute('GET', $config['base_url'] . '/payment-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->payment_calc();
});
$router->addRoute('GET', $config['base_url'] . '/compound-interest-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->compound_calc();
});
$router->addRoute('GET', $config['base_url'] . '/salary-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->salary_calc();
});
$router->addRoute('GET', $config['base_url'] . '/vat-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->vat_calc();
});
$router->addRoute('GET', $config['base_url'] . '/overweight-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->overweight_calc();
});
$router->addRoute('GET', $config['base_url'] . '/healthy-weight-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->healthy_weight_calc();
});
$router->addRoute('GET', $config['base_url'] . '/bmr-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->bmr_calc();
});
$router->addRoute('GET', $config['base_url'] . '/bmi-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->bmi_calc();
});
$router->addRoute('GET', $config['base_url'] . '/tdee-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->tdee_calc();
});
$router->addRoute('GET', $config['base_url'] . '/body-fat-calculator', function () {
  require_once __DIR__ . '/app/controllers/AllController.php';
  $calculatorController = new AllController();
  $calculatorController->bodyfat_calc();
});

// Handle the current request
$router->handleRequest($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
