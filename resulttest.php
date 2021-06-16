<?php
      $message=""; //initialisation de notre message à retourner;
      if(isset($_POST['submit']))       // si l'utilisateur soumet le nombre au programme;
       {  
           $number = $_POST['number']; //recuperation du nombre depuis notre vue test.php;
           do{
               $message="Entrer un nombre entre 1 et 20"; //message retourné tantque le nombre>20 et nombre<1(n'est pas respecté);

               if($number>=1 && $number<=20) //si le nombre>=1 et nombre<=20(respecté);
               {
                  if($number%3==0 && $number%5!=0){  //si le nombre est divible par  3 seulement;
                    $message="Wal";
                  }
                  else if($number%5==0 && $number%3!=0){ // si le nombre est divisible par 5 seulement;
                    $message="Kap";
                  }
                  else if($number%3==0 && $number%5==0) // si le nombre est divisible par 3 et 5 simultanément;
                  {
                    $message="WalKap";
                  }
                  else{                                 // si le nombre n'est ni divisible par 3 ni par  5;
                    $message=$number; 
                  }
               }
           }while($number<1 && $number>20);
       }


?>