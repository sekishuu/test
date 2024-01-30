<?php
// $people = array('Taro', 'Jiro', 'Saburo',4);

// var_dump($people);

// $people = [
//   'person1' => 'taro',
//   'person2' => 'jiro',
// ];
echo $people['person1'];
$people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
  echo $person . '('. '歳' . ')';
  echo '<br>';
}
// $people = [
//   [
//     "last_name" => "山田",
//     "first_name" => "太郎",
//     "age" => 29,
//     "gender" => "男性"
//   ],
//   [
//     "last_name" => "鈴木",
//     "first_name" => "次郎",
//     "age" => 25,
//     "gender" => "男性"
//   ],
//   [
//     "last_name" => "佐藤",
//     "first_name" => "花子",
//     "age" => 20,
//     "gender" => "女性"
//   ]
// ];
// echo $people[1]."さん";