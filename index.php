<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Копіювала умови задачі російською)    
// Создать массив
$arr = ['a','b','c'];
echo'<pre>';
var_dump($arr);

/*Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик*/
$arr = ['html', 'css', 'php', 'js', 'jq'];
	foreach ($arr as $elem) {
		echo $elem.'<br>'; 
	}
/*
  Дан массив с элементами 1, 2, 3, 4, 5. С помощью цикла foreach найдите сумму элементов этого
  массива. Результат запишите переменную $result.
 */
    $arr = [1, 2, 3, 4, 5];

	$result = 0;
	foreach ($arr as $elem) {
		$result = $result + $elem;
	}
	echo $result; 
/*
  Дан массив с элементами 1, 2, 3, 4, 5. С помощью цикла foreach найдите сумму квадратов элементов этого
  массива. Результат запишите переменную $result.
 */
    $arr = [1, 2, 3, 4, 5];
$result = 0;
foreach ($arr as $element) {
    $result += $element ** 2;
}
echo $result. '</br>';

// Дан массив $arr. С помощью цикла foreach выведите на экран столбец ключей и элементов в формате 'green - зеленый'

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
  foreach ( $arr as $key => $value ) {
  echo $key . '-'.$value. '</br>';
  };

/* Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' с элементами '200', '300', '400'. С помощью
 *цикла foreach выведите на экран столбец строк такого формата: 'Коля — зарплата 200
 *долларов.'
 */
$arr = ['Коля'=>'200', 'Вася'=>'300','Петя'=>'400'];
foreach ($arr as $key=>$elem) {
    echo $key.' - Зарплата '.$elem.' $<br>';
}

// Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. Текущий день должен храниться в переменной $day.(додатково)
$days = [
    'Понеділок',
    'Вівторок',
    'Середа',
    'Четвер',
    'П"ятниця',
    'Субота',
    'Неділя'
];
$day = $days[date('N') - 1];
foreach ($days as $value) {
    echo $value == $day ? "<em>{$value}</em><br>\n" : "{$value}<br>\n";
}

/* Дан массив $arr. С помощью цикла foreach запишите английские
названия в массив $en, а русские — в массив $ru.(додатково)
*/


$arr = array('green' => 'Зелений', 'red' => 'Червоний', 'blue' => 'Синій');

$en = array();
$ru = array();

foreach ($arr as $key => $val){
    $en[] = $key;
    $ru[] = $val;
}

echo "<pre>";
print_r($en);
print_r($ru);

// С помощью цикла for заполните массив числами от 1 до 100. То есть у вас должен получится массив [1, 2, 3... 100]
$arr = [];
	for ($i = 1; $i <= 100; $i++){
		$arr[] = $i; 
	}
	var_dump($arr);

// Выведите столбец чисел от 11 до 33.
$a = 11;
	while ($a < 33){
		echo $a.'<br>';
		$a++;
	}

 //Выведите столбец четных чисел в промежутке от 0 до 100. -->

for ($i = 0; $i <= 100; $i +=2){
    echo $a.'<br>';
}   

//С помощью цикла найдите сумму чисел от 1 до 100.
$sum = 0;
for ($i = 1; $i <= 100; $i++){
    $sum += $i;
}
echo $sum.'<br>';

/*
  Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if выведите на экран столбец тех
  элементов массива, которые больше 3­х, но меньше 10.
 */

$arr = [2, 5, 9, 15, 0, 4];
foreach ($arr as $value) {
    if ($value > 3 && $value < 10) {
        echo "{$value}<br>\n";
    }
}
//Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if
//проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть —
//выведите на экран 'Есть!', иначе выведите 'Нет!'.</p>

$arr = [4, 2, 5, 19, 13, 0, 10];
foreach ($arr as $e) {
    if ($e >1 && $e < 5){
        echo 'Є!';
    } else {
        echo 'Немає!'. '</br>';
    }
};


// Дан массив с числами. Числа могут быть положительными и отрицательными. Найдите сумму положительных элементов этого массива.
$arr = [2, 5, 9, -15, 0, 4, -9];
for ($i = 0; $sum = 0; $i++) {
    if ($arr[$i] > 0){
       echo $sum += $arr[$i];
    }
};

// Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла). Решите задачу сначала через цикл while, а потом через цикл for 
$num = 1000;
	$i = 0;
	while ($num > 50){
		$num /= 2;
		$i++;
	}
	echo $num.'<br>';
	echo $i.'<br>';
    ?>
</body>
</html>