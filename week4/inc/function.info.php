<?php


    function get_filtered($filter_key, $val)
{
    /*
    1-) global eklemek zorundasin veri cekebilmen icin .
    2-) Datadaki verileri filtierlemek icin array filter kullandik
    3-)Array_filter actiktan sonra icine username, gecici fonksiyon actik filter yapmak icin
    4-) Yaptigimiz gecici fonksiyonu use yapacagiz ( yukarda actigimiz  parameterler )
    5-) use parameter
    6-) Veriyi donmemiz kaliyor geriye
    7-) return su sekilde geliyor gecici fonsiyon devreye giriyor
    8-) fonsiyonun isine use atiyoruz bir nevi .

    */
    global $userss;
    $userss = array_filter($userss, function ($record) use ($filter_key, $val) {
        return $record[$filter_key] == $val;
        /* return $record[$filter_key]==$val;  status == active yani konlardaki biirnine gore filter yapiyor*/

    });

    /* Bakmam gerekli anlamadim
         array_values built fonsksiyon just array accept dedi cok sure olamadim
     */

    $userss = array_values($userss);
}


/*
1-) Aslinda simdi filter yapiyoruz .

*/

    function get_cate($array, $col)
    {


        /* userdeki verileri filter yaparken colum uzeerinden cekiyoruz*/
        $newCate = array_column($array, $col);
        return array_unique($newCate);
        /* reputasion istemedigimiz icin buraya array_uniqe ekledik exp: [faculty, student, faculty]*/

    }


global $userss;

$statuses=get_cate($userss,"status");
$user_types=get_cate($userss,"user_type");

