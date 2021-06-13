<?php
$score = $_GET["score"];
$nom = $_GET["nom"];
$sql = "SELECT * FROM leadscore ORDER BY score DESC LIMIT 10";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script src="currentScore.js"></script>
    <title>Arcade Gaming Room | By Karydes</title>
    <link href="style.css" rel='stylesheet'>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <!-- scrollmagic -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js"></script>

    <!-- GreenSock -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/animation.gsap.js"></script>

    <script src="script.js"></script>

    </head>
    <body style="background-color=black">
        <h1> LEADERBOARD - TOP 10</h1>
        <p id="scoreDone"></p>
        
        
        <form action="majscore.php" method="get" id="formulaire">
            <input type="text" name="nom" placeholder="Your Pseudo" />
            <input type="submit" name="submit" value="Save my score>"/> 
            <script>
            document.write('<input style="visibility: hidden; type="text" name="score" value="' + localStorage.yourScore + '" style="visibility"/>');
            </script>
        </form>

        <div class="again">
            <a id="again" href="../index.html"> Play again</a>
            <a  id="train" href="../train/train.html"> Training mode !</a>
        </div>


    <div class="gestionDuScore">

        <!-- PHP -->

        <?php 
             
             try{
                $connexion = new PDO("mysql:host=localhost;dbname=kodewebc_database","kodewebc_greg","Motdepass123");
                $stmt = $connexion->query($sql);
               

               if(isset($nom)) {
                $player = "INSERT INTO `leadscore` (`score`, `id`, `name`) VALUES ('$score', NULL, '$nom')";
                $connexion->query($player);
               }

               while($row = $stmt->fetch())
               {
                   echo $row['name'].' : '.$row['score'].'<br>';
               }
              
               if($stmt === false){
                die("Erreur");
               }}
               
               catch (PDOException $e){
                echo $e->getMessage();
              }
        ?>
    </div>
    </body>
    </html>