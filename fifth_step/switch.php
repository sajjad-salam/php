<?php 
$da="sat";

switch ($da) {
    case 'sat':
        echo "hello today is $da and work from 8 to 2";
        break;
    case 'sun':
        echo "hello today is $da and work from 8 to 4";
        break;
    case 'fri':
    case 'wed':
        echo "hello today is $da and work from 8 to 6";
        break;    
    default:
        echo " unknown this day";
        break;
}