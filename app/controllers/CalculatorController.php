<?php
class CalculatorController
{
  public function showCalculator()
  {
    // include __DIR__ . '/../views/components/test/header.php';
    // include __DIR__ . '/../views/calculator.php';
    // include __DIR__ . '/../views/footer.php';
    echo 'test';
  }

  public function calculate()
  {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    switch ($operation) {
      case 'add':
        $result = $num1 + $num2;
        break;
      case 'subtract':
        $result = $num1 - $num2;
        break;
      default:
        $result = 'Invalid operation';
    }

    include __DIR__ . '/../views/header.php';
    include __DIR__ . '/../views/calculator.php';
    include __DIR__ . '/../views/footer.php';
  }
}
