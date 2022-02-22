
<?php
     checkPrime(10);
    Function checkPrime($number){
        for ($i=2; $i <= $number; $i++) { 
            if ($i%$number ==0) {
                if ($i == $number) {
                    print "THE PRIME NUMBER IS: $i";
                } else {
                    break;
                }
            }
        }
    }
?>