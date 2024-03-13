<?php
// Создаем меню ресторана
$menu = [
    1 => ["dish" => "морковка по корейски", "price" => 15],
    2 => ["dish" => "Салат невеста", "price" => 8],
    3 => ["dish" => "Суп харчо", "price" => 5]
];

// Получаем выбор пользователя
$userChoice = 2; // Это просто для примера

// Определяем стоимость
$totalPrice = 0;
switch ($userChoice) {
    case 1:
        echo "Вы выбрали: " . $menu[1]["dish"] . " за " . $menu[1]["price"] . " долларов.";
        $totalPrice += $menu[1]["price"];
        break;
    case 2:
        echo "Вы выбрали: " . $menu[2]["dish"] . " за " . $menu[2]["price"] . " долларов.";
        $totalPrice += $menu[2]["price"];
        break;
    case 3:
        echo "Вы выбрали: " . $menu[3]["dish"] . " за " . $menu[3]["price"] . " долларов.";
        $totalPrice += $menu[3]["price"];
        break;
    default:
        echo "Пожалуйста, выберите существующий пункт меню.";
}

echo "<br>Итоговая стоимость заказа: " . $totalPrice . " долларов.";
?>



