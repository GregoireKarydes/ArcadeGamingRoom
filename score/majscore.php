<!doctype html>
<html>


<?php 
            // VAR RECEPTION
            include "score.php";

            // MAJ

            echo "<style type='text/css'>
            .gestionDuScore {
              color: white;
            }

            #formulaire { 
                display : none;
            }

            #link { 
                color : red;
                position : absolute;
                left : 40%;
                top : 200px;
            }

            </style>";

            echo '<a href="majscore.php" id="link"> Your score has been add,<br> Click to see</a>';
            while($row = $stmt->fetch())
            {
                echo $row['name'].' : '.$row['score'].'<br>';
            }

        ?>
   

   </html>