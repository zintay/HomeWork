<!-- Вашим заданием будет создание сокращенного варианта ФИО. -->
<!-- Например, вводим: Иванов Иван Петрович, а в результате должны получить: Иванов И. П. -->

<?php
$names = [
  'Иванов Иван Петрович',
  'Иванов Иван',
  'Иванов'
];

foreach($names as &$name) {
  $namesArr = explode(' ', $name);
  $countOfNamesArr = count($namesArr);
  if ($countOfNamesArr > 1) {
    for ($i = 1; $i < $countOfNamesArr; $i++) {
      $namesArr[$i] = mb_substr($namesArr[$i], 0, 1).".";
    }
    $name = implode(' ', $namesArr);
  }
}
print_r($names);
?>