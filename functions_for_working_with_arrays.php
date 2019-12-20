<li>  usort - Сортирует массив по значениям используя пользовательскую функцию для сравнения элементов   : <br>
    <?php
    function cmp($a, $b){
        if ($a == $b) {
            return 0;
        }
        return ($a < $b) ? -1 : 1;
    }

    $a = array(3, 2, 5, 4, 1);

    usort($a, "cmp");
    echo "<pre>";
    var_dump($a);
    echo "</pre>";
    ?>  </li>
<li>   is_array — Определяет, является ли переменная массивом  : <br>
    <?php
    $yes = array('это', 'массив');
    echo is_array($yes) ? 'Массив' : 'Не массив';
    echo "<br>";
    $no = 'это строка';
    echo is_array($no) ? 'Массив' : 'Не массив';
    ?>  </li>
<li>  implode — Объединяет элементы массива в строку : <br>
    <?php
    $array = array('имя', 'почта', 'телефон');
    $comma_separated = implode(" + ", $array);
    echo $comma_separated; // имя,почта,телефон
    ?>  </li>
<li> array_fill — Заполняет массив значениями : <br>
    <?php
    $a = array_fill(5, 6, 'banana');
    $b = array_fill(-2, 4, 'pear');
    echo "<pre>";
    print_r($a);
    echo "</pre>";
    echo "<pre>";
    print_r($b);
    echo "</pre>";
    ?>  </li>
<li> array_filter — Фильтрует элементы массива с помощью callback-функции  : <br>
    <?php
    function odd($var){
        // является ли переданное число нечетным
        return($var & 1);
    }

    function even($var){
        // является ли переданное число четным
        return(!($var & 1));
    }

    $array1 = array("a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>5);
    $array2 = array(6, 7, 8, 9, 10, 11, 12);
    echo "Нечетные: ";
    print_r(array_filter($array1, "odd"));
    echo "<br>";
    echo "Четные: ";
    print_r(array_filter($array2, "even"));
    ?>  </li>
<li> count — Подсчитывает количество элементов массива или что-то в объекте  : <br>
    <?php
    $a[0] = 1;
    $a[1] = 3;
    $a[2] = 5;
    $b =[5,3,1];  // а так считает не сумму значений, а кол-во эл-тов массива
    $result = count($a);
    $result1 = count($b);
    echo $result." и ".$result1;
    ?>  </li>
<li>  sort — Сортирует массив и rsort — Сортирует массив в обратном порядке   : <br>
    <?php
    $fruits = array("lemon", "orange", "banana", "apple");
    echo "<pre>";
    var_dump(sort($fruits));  // возвращает булевское значение
    echo "</pre>";

    foreach ($fruits as $key => $val) {
        echo "fruits[" . $key . "] = " . $val . "<br>";
    }
    echo '<br>';

    rsort($fruits);   // возвращает булевское значение
    foreach ($fruits as $key => $val) {
        echo "$key = $val<br>";
    }
    ?>  </li>
<li> range — Создает массив, содержащий диапазон элементов, shuffle — Перемешивает массив  : <br>
    <?php
    $numbers = range(1, 20);
    shuffle($numbers);
    foreach ($numbers as $number) {
        echo $number." , ";
    }
    ?>  </li>
<li>  array_slice — Выбирает срез массива, array_slice() возвращает последовательность элементов массива array, определённую параметрами offset и length.     : <br>
    <?php
    $input = array("a", "b", "c", "d", "e");

    $output1 = array_slice($input, 2);      //  возвращает "c", "d" и "e"
    $output2 = array_slice($input, -2, 1);  // возвращает "d"
    $output3 = array_slice($input, 0, 3);   // возвращает "a", "b" и "c"
    echo "<pre>";
    print_r($output1);
    echo "</pre>";
    echo "<pre>";
    print_r($output2);
    echo "</pre>";
    echo "<pre>";
    print_r($output3);
    echo "</pre>";

    ?>
</li>