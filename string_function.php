<li>  strip_tags — Удаляет HTML и PHP-теги из строки  : <br>
    <?php
    $text = '<p style="border: none; text-align: left;">Параграф.</p><!-- Комментарий --> <a href="#fragment" style="border: none;">Еще текст</a>';
    echo strip_tags($text);
    echo "\n";
    // Разрешаем <p> и <a>
    echo strip_tags($text, '<p><a>');
    ?>  </li>
<li>  htmlspecialchars --  Преобразует специальные символы в HTML сущности ('&' (амперсанд) преобразуется в '&amp;' )  : <br>
    <?php
    $new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
    echo $new; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;
    ?>  </li>
<li>  strlen — Возвращает длину строки : <br>
    <?php
    $str = "Hellow world";
    echo strlen($str);
    ?>  </li>
<li>  strpos — Возвращает позицию первого вхождения подстроки: <br>
    <?php
    $my_string = 'abc';
    $fin_dme   = 'a';
    $pos = strpos($mystring, $findme);

    if ($pos === false) {
        echo "Строка '$fin_dme' не найдена в строке '$my_string'";
    } else {
        echo "Строка '$fin_dme' найдена в строке '$my_string' в позиции '$pos'";
    }
    ?>  </li>
<li>  substr — Возвращает подстроку: <br>
    <?php
    $rest = substr("abcdef", -1);
    echo $rest; echo '<br>';
    $rest = substr("abcdef", -2);
    echo $rest; echo '<br>';
    $rest = substr("abcdef", -3, 1);
    echo $rest; echo '<br>';
    ?> </li>
<li>  explode — Разбивает строку с помощью разделителя: <br>
    <?php
    $pizza  = "кусок1 кусок2 кусок3 кусок4 кусок5 кусок6";
    $pieces = explode(" ", $pizza);
    echo $pieces[0]; // кусок1
    echo $pieces[1]; // кусок2
    ?> </li>
<li> parse_str — Разбирает строку в переменные: <br>
    <?php
    $str = "first=value&arr[]=foo+bar&arr[]=baz";

    // Рекомендуется
    parse_str($str, $output);
    echo $output['first'];  // value
    echo $output['arr'][0]; // foo bar
    echo $output['arr'][1]; // baz

    echo '<br>';

    $str = "first=value&arr[]=foo+bar&arr[]=baz";
    parse_str($str);
    echo $first;  // value
    echo $arr[0]; // foo bar
    echo $arr[1]; // baz
    ?> </li>
<li> str_repeat — Возвращает повторяющуюся строку: <br>
    <?php
    echo str_repeat("|=>", 10);
    ?> </li>
<li> substr_count — Возвращает число вхождений подстроки. </li>
<li>  str_replace — Заменяет все вхождения строки поиска на строку замены. </li>
<li> str_split — Преобразует строку в массив: <br>
    <?php
    $str = "Hello Friend";
    $arr1 = str_split($str);
    $arr2 = str_split($str, 3);

    print_r($arr1);
    echo '<br>';
    print_r($arr2);
    ?> </li>
<li>stripos — Возвращает позицию первого вхождения подстроки без учета регистра.
    В отличие от strpos(), эта функция не учитывает регистр символов.
</li>
<li> strrev — Переворачивает строку задом наперед: <br>
    <?php
    echo strrev("Hello world!");
    ?> </li>
<li> substr_replace — Заменяет часть строки: <br>
    <?php
    $var = 'ABCDEFGH:/MNRPQR/';
    echo "Оригинал: ".$var;

    /* Обе следующих строки заменяют всю строку $var на 'bob'. */
    echo substr_replace($var, 'bob', 0) . "<br />\n";
    echo substr_replace($var, 'bob', 0, strlen($var)) . "<br />\n";

    /* Вставляет 'bob' в начало $var. */
    echo substr_replace($var, 'bob', 0, 0) . "<br />\n";

    /* Обе следующих строки заменяют 'MNRPQR' в $var на 'bob'. */
    echo substr_replace($var, 'bob', 10, -1) . "<br />\n";
    echo substr_replace($var, 'bob', -7, -1) . "<br />\n";

    /* Удаляет 'MNRPQR' из $var. */
    echo substr_replace($var, '', 10, -1) . "<br />\n";
    ?> </li>
<li> trim — Удаляет пробелы (или другие символы) из начала и конца строки: <br>
    <?php
    $text   = "\t\tThese are a few words :) ...  ";
    $binary = "\x09Example string\x0A";
    $hello  = "Hello World";
    print "\n";
    echo "<pre>";
    var_dump($text, $binary, $hello);

    $trimmed = trim($text);
    var_dump($trimmed);

    $trimmed = trim($text, " \t.");
    var_dump($trimmed);

    $trimmed = trim($hello, "Hdle");
    var_dump($trimmed);

    $trimmed = trim($hello, 'HdWr');
    var_dump($trimmed);

    // удаляем управляющие ASCII-символы с начала и конца $binary
    // (от 0 до 31 включительно)
    $clean = trim($binary, "\x00..\x1F");
    var_dump($clean);
    echo "</pre>"
    ?> </li>