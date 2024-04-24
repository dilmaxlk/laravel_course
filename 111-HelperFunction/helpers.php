<?php

function MyCountry(){
    return "Sri Lanka";
}

function calulate($marks)
{
    if($marks<50){
        $result = 'The student is faild';

    }else{
        $result = 'The student is passed';
    }

    return $result;
}