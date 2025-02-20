<?php  
// Database configuration
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$database = "member";

// Create database connection
$conn = new MYSQLi($db_server, $db_user, $db_pass, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// $msg = ''; 
$displayResult = ''; 
$search = isset($_POST['search']) ? $_POST['search'] : '';


  $all_records = mysqli_query($conn, "SELECT * FROM messages") or die(mysqli_error($conn));



if(mysqli_num_rows($all_records) >=0 ){
  $ctr = 1; 

  $displayResult .= '   <div class="table-responsive">

              <table class="table table-bordered  border-secondary">

                <thead class="table-dark">
                <tr>
                  <th scope="col">#</th>

                  <th scope="col">Name</th>
            
                  <th scope="col">Comment</th>
                  
                </tr>
                </thead>
                ';
  while($rowUsers = mysqli_fetch_array($all_records, MYSQLI_ASSOC)){
    $id = $rowUsers['id'];
    $yourname = $rowUsers['yourname'];
    $comment = $rowUsers['comment'];

  

    $displayResult .=  '
              <tbody>
              <tr>
                <td style="border:1px solid black;">'.$ctr++.'</td>

           
                <td>'.$yourname.'</td>
                <td>'.$comment.'</td>
           
                
              </tr>';




               }
  $displayResult .= '     </tbody>

                  </table>
                 </div>
               </table>
            </div>';

}
?>