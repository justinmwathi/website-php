<?php
   // $age=-1;

   // if ($age>=18){
    //    echo"You may enter this site";
   // }
   // else if($age<=0){
   //     echo"Invalid age input";
   // }
   // else if($age>=100){
   //     echo"You are too old to";
  //  }
   // else{
    //    echo "You must be 18+ to enter!";
   // }

   // $hours=20;
   // $rate=15;
   // $weekly_pay=null;
   // if ($hours<=0){
   //     $weekly_pay=0;
   // }
   //else if($hours<=40){
  //      $weekly_pay=$hours*$rate;
   // }
  //  else{
   //     $weekly_pay=($rate * 40) +(($hours-40)*($rate * 1.5));
   // }

   // echo"You made ksh.{$weekly_pay} this week";

   //Logical operators
  //$child=true;
 // $senior=false;
  //$ticket=null;

  //if($child || $senior){
   // $ticket=10;
  //}
 // else{
 //   $ticket=15;
 // }
 // echo"The ticket price is ksh.{$ticket}.";
$date=date('l');
$date="Kenay";
switch($date){
case "Monday":
    echo"I hate Mondays";
    break;
    case "Tuesady":
        echo"It is Taco Tuesday";
        break;
        case "Wednesday":
            echo"The work week is half over";
            break;
            case "Thursday":
                echo"It's almost the weekend.";
                break;
                case "Friday":
                    echo"The weekend is here";
                    break;
                    case "Saturday":
                        echo"Ni sherehe kubwa sana.";
                        break;
                    default:
                    echo"{$date} is not a day";
}
?>