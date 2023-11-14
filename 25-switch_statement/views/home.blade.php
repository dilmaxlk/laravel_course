{{-- Switch Statement --}}

@switch($status)
    @case('Pending')
    <p>Your Order status is pending</p>
    @break

    @case('Approved')
    <p>Your Order status is Approved</p>
     @break

    @case('Rejected')
     <p>Your Order status is Rejected</p>
     @break

    @default
    <p>Your Order status is Cancelled</p>  
@endswitch


<?php
// $favcolor = "red";

// switch ($favcolor) {
//   case "red":
//     echo "Your favorite color is red!";
//     break;
//   case "blue":
//     echo "Your favorite color is blue!";
//     break;
//   case "green":
//     echo "Your favorite color is green!";
//     break;
//   default:
//     echo "Your favorite color is neither red, blue, nor green!";
// }
?>