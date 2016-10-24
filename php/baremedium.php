<!doctype html>
<html>
<head><title>test</title></head>
    <body>
<?php
	echo "test <br>";
    Class Formula{
        public $racer;
        public $team;
        public $wonagp;
        
        public function __construct($racer, $team, $wonagp, $wins){
            $this->racer = $racer;
            $this->team = $team;
            $this->wonAgp = $wonagp;
            $this->wins = $wins;
        }
    }
        $ferrari1 = new Formula("Vettel","Ferrari","Yes", 12);
        $ferrari2 = new Formula("Raikonnen","Ferrari","Yes", 18);
        $redbull1 = new Formula("Ricciardo","Redbull","Yes", 6);
        $redbull2 = new Formula("Verstappen","Redbull","Yes", 1);
        $manor1 = new Formula("Wehrlein","Manor","No", 0);
        $manor2 = new Formula("Ocon","Manor","No", 0);
        
        echo $ferrari2 -> team;  
        echo "<br>";
        
        $forza = array("vettel", "raikonnen");
        
        if (in_array("vettel", $forza)){
            echo "Forza ferarri";
        }
        else{
            echo "Go home you cunt";
        }
?>
          </body>
    </html>
    
  