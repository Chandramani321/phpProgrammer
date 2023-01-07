<?php
$server="localhost";
$user="root";
$password="";
$dbname="chatbot";

$conn=new mysqli($server,$user,$password,$dbname);
if($conn){
   


  $query="select * from `question`;";
  $result = $conn->query($query);
  
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
          // while($row = $result->fetch_assoc())
          // {
          //     echo "id: ".
          //         $row["id"]." - Question: " .
          //         $row["Question"]." | Answer: " . 
          //        $row["Answer"].  "<br>";
          // }
    } 
    else {
        echo "0 results";
    }
  
   $conn->close();
  

}
else{
    echo "not connected";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <table>
        <tr>
            <th>id</th>
            <th>Question</th>
            <th>Answer</th>
        </tr>
        <?php
                // LOOP TILL END OF DATA
                while($row=$result->fetch_assoc())
                {
                 
            ?>
       <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["Question"]; ?></td>
        <td><?php echo $row["Answer"]; ?></td>
       </tr>
      <?php 
                }
      ?>

    </table>

</body>
</html>