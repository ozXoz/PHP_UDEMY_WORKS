<?php
$users = [
  ["id", "f_name", "l_name", "user_type", "status", "client"],
["1","Tom","Friendly","faculty","active","Chrome"],
["2","Negar","Madani","faculty","inactive","FireFox"],
["3","Ashton","Cox","faculty","active","FireFox"],
["4","Cedric","Kelly","student","inactive","FireFox"],
["5","Airi","Satou","faculty","active","Chrome"],
["6","Brielle","Williamson","faculty","inactive","Chrome"],
["7","Herrod","Chandler","student","inactive","Chrome"],
["8","Rhona","Davidson","faculty","active","Chrome"],
["9","Sam","Kiani","student","inactive","Chrome"],
["10","Sonya","Frost","student","inactive","Chrome"],
["11","Jena","Gaines","faculty","active","Chrome"],
["12","Pari","Naz","faculty","active","Chrome"],
["13","Charde","Marshall","student","active","Chrome"],
["14","Haley","Kennedy","student","active","Safari"],
["15","Tatyana","Fitzpatrick","faculty","active","Safari"],
["16","Michael","Silva","faculty","active","Safari"],
["17","Paul","Byrd","faculty","active","Safari"],
["18","Gloria","Little","student","active","Safari"],
["19","Bradley","Greer","student","active","Safari"],
["20","Dale","Greern","faculty","active","Safari"],
["21","Jenette","Caldwell","student","active","IE"],
["22","Yuri","Berry","student","active","IE"],
["23","Caesar","Vance","student","active","IE"],
["24","Doris","Wilder","student","active","IE"]
];
$file = fopen('users2.csv', 'w') or die("could not open file for writing!");
foreach ($users as $user) { // write each array as a line
  fputcsv($file, $user); // default is comma separated
}

fclose($file);
echo "Wrote content to the csv file.";