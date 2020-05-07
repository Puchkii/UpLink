<?php
    $zoek = $_SESSION['zoekWoord'];
    echo $_SESSION['zoekWoord']."<br>";//waar op gezocht is
    echo "<tbody>";
    if($zoek){
        $sql = "SELECT username FROM `users` WHERE username LIKE '%$zoek%';";//moet nog profile image bij als dat werkent is
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) {
               $usernameZoek = $row['username'];
               echo "<button name='bezoek' class='btn btn-outline-secondary' type='submit' value='$usernameZoek' onclick='resetCookie()'>".$usernameZoek."</button>";//de bezoek buttons
               echo "<tr>
                       <td><button class='btn btn-outline-secondary'>Follow</button></td>
                       <td><button class=btn btn-outline-secondary>Block</button></td>
                     </tr>";
           }
        }
    }
 ?>
 </tbody>
