<html>

<body>

 <?php


 function logIn(){
    global $conn;
    //$check = $_POST["username"]

     $sql =  "SELECT id, firstname, lastname FROM MyGuests WHERE firstname="$_POST['username']"";
     $result = $conn->query($sql);

     if ($result->num_rows > 0){
         echo "yay";
     }

 }
 
    ?> <br>


</body>
</html>
