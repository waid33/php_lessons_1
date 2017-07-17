<?php
$student_names = [
    'John',
    'Taras',
    'Jaroslav',
    'Peter',
    'Nikolay',
    'Aleksandr',
    'Dmitriy',
    'Maksim',
    'Anton',
    'Valeriy',
    'Vitaliy',
    'Andrey',
    'Vladimir',
    'Pavel',
    'Sergey',
    'Mihail',
    'Vasiliy',
    'Artem',
    'Vadim',
    'Konstantin',
    'Elena'
];

$colors = ['red' , 'cyan', 'orange', 'blue', 'yellow', 'purple', 'green'];

$i=0; //Счётчик по цветам
$y=1; //Счётчик по студентам
$id = 1001; //Первый индивидуальный код студента

    foreach($student_names as $value){
            $students[$y] = ['id' =>$id,
                              'name' =>$value
                             ];
            $id++;
            $y++;
    }
//echo "<pre>";
//var_dump($employees);
//echo "</pre>";

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset = utf-8">
    <title>Table,Работа с циклами,массивами</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    
  <table>
    <caption>Список студентов</caption>
    <tr>
        <th>Id</th>
        <th>Name</th>
    </tr>
    <?php 
      foreach ($students as $e):
    ?>
    <tr  style="background:<?=$colors[$i]?>">
        <td><?=$e['id'];?></td>
        <td><?=$e['name'];?></td>
    </tr>
    <?php
      if($i==count($colors)-1){
        $i=0;
      }else{
        $i++;    
      }
      endforeach 
    ?>
  </table>
</body>
</html>