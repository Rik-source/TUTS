<?php
include("connect.php");
include("content.php");
$sql = "SELECT * FROM power";
$result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   $sum = 0;
//   while($row = $result->fetch_assoc()) {
//     $sum += $row['Volts'];
//     $count++;
//     echo "volts: " . $row["Volts"]. " - Time: " . $row["Time"]. " " . $row["Ampere"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }
// $conn->close();
//calculate sum of the variables



// //calculate average
// $average = $sum / $count;
// echo "the average Volt is: $average ";
// ?>