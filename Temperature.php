<?php 
define("FACTOR", 9/5);
define("OFFSET", 32);


echo "Enter A Temperautre Value:";
$temperature = (Float)readline();
echo "1.celsius to parenheit, 2. parenheit to celcius:";

$Weather =  readline();

Switch ($Weather) {
    case 1: 
        
        echo $temperature*FACTOR+OFFSET;
        break;

        case 2:
            echo ($temperature-OFFSET)/FACTOR;
            break;
            default:
            echo "Enter A Valid Value";
}



?>