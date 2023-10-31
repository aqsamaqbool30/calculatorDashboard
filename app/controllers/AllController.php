<?php
class AllController
{
  public function home()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/home.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function finance_calculators()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/calculators-categories/finance-calculators.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function fitness_and_health_calculators()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/calculators-categories/fitness-and-health-calculator.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function math_calculators()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/calculators-categories/math-calculators.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function other_calculators()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/calculators-categories/other-calculators.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }

  // Math Calculators

  public function percentage_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/percentage-calculator/percentage_calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function random_num()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/random-number-calculator/random_num.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function binary_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/binary-calculator/binary_calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function hex_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/hexa-calculator/hexa-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }

  // -------->>  Geometry
  public function mean_mode_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/mean-median-mode-calculator/mean_mode_calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }

  public function slope_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/slope-calculator/slope-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function half_life_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/half-life/half-life-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function probability_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/probability-calculator/probability-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function circle_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/circle-calculator/circle-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function root_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/root-calculator/root-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function ratio_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/ratio-calculator/ratio-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function pythagorean_theorem_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/pythagorean-theorem-calculator/pythagorean-theorem-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function area_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/area-calculator/area-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function rounding_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/rounding-calculator/rounding-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function scientific_notation_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/scientific-notation-calculator/scientific-notation-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function prime_factorization_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/prime-factorization-calculator/prime-factorization-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function average_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/average-calculator/average-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function zindex_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/z-index-calculator/z-index-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function exponent_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/exponent-calculator/exponent-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function number_sequence_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/number-sequence-calculator/number-sequence-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function fraction_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/fraction-calculator/fraction-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function triangle_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/triangle-calculator/triangle-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function quadratic_formula_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/quadratic-formula-calculator/quadratic-formula-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function log_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/log-calculator/log-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function permutation_combination_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/permutation-combination-calculator/permutation-combination-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function big_number_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/big-number-calculator/big-number-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function distance_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/distance-calculator/distance-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function distance_measurement_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/distance-calculator/distance-measurement-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function surface_area_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/surface-area-calculator/surface-area-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function common_factor_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/common-factor-calculator/common-factor-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function long_division_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/long-division-calculator/long-division-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function sample_size_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/sample-size-calculator/sample-size-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function standard_deviation_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/standard-deviation-calculator/standard-deviation-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function p_value_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/p-value-calculator/p-value-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function confidence_interval_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/confidence-interval-calculator/confidence-interval-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function statistics_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/statistics-calculator/statistics-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function right_triangle_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/right-triangle-calculator/right-triangle-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function basic_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/basic-calculator/basic-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function statistics_pad_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/statistics-calculator/statistics-pad-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function matrix_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/matrix-calculator/matrix-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }

  public function stat_volume_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/volume-calculator/stat_volume_calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }

  // Other Calculators
  public function age_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/age_calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function converse_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/conversion-calculator/conversion-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function time_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/time-calculator/time-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function height_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/height-calculator/height-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function gdp_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/gdp-calculator/gdp-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function voltage_drop_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/voltage-drop-calculator/voltage-drop-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function horsepower_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/horsepower-calculator/horsepower-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function ohms_law_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/ohms-law-calculator/ohms-law-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function tip_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/tip-calculator/tip-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }

  // fitness calculator

  public function bodytype_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/body-type-calculator/body-type-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function bodysurface_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/body-surface-area-calculator/body-surface-area-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function idealweight_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/ideal-weight-calculator/ideal-weight-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }

  public function gfr_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/gfr-calculator/gfr-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function army_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/army-body-fat-calculator/army-body-fat-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function food_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/food-energy-converter/food-energy-converter.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function lean_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/lean-mass-body-calculator/lean-mass-body-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function anorexic_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/anorexic-bmi-calculator/anorexic-bmi-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function fatintake_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/fat-intake-calculator/fat-intake-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function carbo_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/carbohydrate-calculator/carbohydrate-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function caloriesburn_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/calories-burn-calculator/calories-burn-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function calories_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/calories-calculator/calories-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function overweight_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/overweight-calculator/overweight-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function healthy_weight_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/healthy-weight-calculator/healthy-weight-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function bmr_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/bmr-calculator/bmr-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function bmi_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/bmi-calculator/bmi-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function bodyfat_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/body-fat-calculator/body-fat-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function tdee_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/tdee-calculator/tdee-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  // financial calculator

  public function estate_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/estate-tax-calculator/estate-tax-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function margin_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/margin-calculator/margin-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function commission_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/commission-calculator/commission-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function present_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/present-value-calculator/present-value-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function currency_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/currency-calculator/currency-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function Exchange_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/customized-currency-exchange-rate/customized-currency-exchange-rate.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function payment_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/payment-calculator/payment-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }

  public function compound_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/compound-interest-calculator/compound-interest-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function salary_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/salary-calculator/salary-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function vat_calc()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/vat-calculator/vat-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
  public function gpd_calculator()
  {
    include __DIR__ . '/../views/components/navbar.php';
    include __DIR__ . '/../views/pages/gdp-calculator/gdp-calculator.php';
    include __DIR__ . '/../views/components/article.php';
    include __DIR__ . '/../views/components/faqs.php';
    include __DIR__ . '/../views/components/footer.php';
  }
}
