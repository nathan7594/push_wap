<?php
class Echange
{       
    public $la;
    public $lb;

    function __construct()
    {
        $this->lb =[];
        global $argv;
        array_shift($argv);
        $this->la=$argv;

    }

    
    

    public function sa()
    {
        if(count($this->la) >= 2) {
                $temporaire = $this->la[0];
                $this->la[0] = $this->la[1];
                $this->la[1] = $temporaire;
                echo "sa"." ";
            } else {
                return;
            }
        }

    public function sb()
    {
        if (count($this->lb) >= 2) {
                $temporairelb = $this->lb[0];
                $this->lb[0] = $this->lb[1];
                $this->lb[1] = $temporairelb;
                echo "sb"." ";

            }
        else {
           return;
        }
    }

    public function sc()
    {
        $test = new Echange;
        $test->sa();
        $test->sb();
    }

    public function pa()
    {   
        if (count($this->lb) >= 1) {
            $templa=array_shift($this->lb);
            array_unshift($this->la,$templa);
            echo "pa"." ";
            //print_r($la);
            //print_r($lb);
            //print_r($templa);// Prends le premiers éléments de lb est le place dans la
        


        } else {
            return;
        }
    }
    public function pb()
    {
        //echo "===========" . PHP_EOL;
        //print_r($this->la);
        //echo "===========" . PHP_EOL;
        //var_dump($this->lb);
        //echo "===========" . PHP_EOL;
        if (count($this->la)>=1) {
            
            array_unshift($this->lb,array_shift($this->la));
            echo "pb"." ";
            //print_r($templb); Prends le premiers éléments de la est le place dans lb
            //print_r($lb);
            //print_r($la);
        } else {
            return;
        }
    }
    public function ra()
    {   
        $tempola=array_shift($this->la);
        array_push($this->la,$tempola);
        echo "ra"." ";
        //print_r($la);// Rotation du premiers au derniers dans le tableau la


    }
    public function rb(){
        $tempolb=array_shift($this->lb);
        array_push($this->lb,$tempolb);
        echo "rb"." ";
        //print_r($lb);// Rotation du premiers au derniers dans le tableau lb

    }

    public function rr(){
        $test = new Echange;
        $test->ra($this->la);
        $test->rb($this->lb);

        
    }
    public function rra(){
        $tempolarra = array_pop($this->la);
        array_unshift($this->la,$tempolarra);// prends le derniers éléments de la est le met au début
        echo "rra"." ";
        //print_r($la);
        //print_r($tempolarra);
    }
    public function rrb(){
        $tempolbrrb = array_pop($this->lb);
        array_unshift($this->lb,$tempolbrrb);// prends le derniers de lb est le met au début de lb
        echo "rrb"." ";
        //print_r($lb);
        //print_r($tempolbrrb);
    }
    public function rrr(){
        $test = new Echange;
        $test->rra($this->la);
        $test->rrb($this->lb);
    }
    public function tri(){
        //$min=min($this->la);
        //echo $min;
        //echo $this->la[0];
        while(!empty($this->la))// !empty tant que la n'est pas vide 
        {
            $min=min($this->la);
            //print_r($this->la);
            if(isset($this->la[1]) && $this->la[1]<$this->la[0]){
                $this->sa();
            }
            $a="true";
            for($i=0;$i<count($this->la)-1;$i++){
                if($this->la[$i]<$this->la[$i+1]){
                    continue;
                }
                else{
                    $a="false";
                    
                }
            }
            if($a=="true"){
                if(!empty($this->lb)){
                    $this->pa();
                }
                else{   
                    return;
                }
             }
            
            else{

                if($min !== $this->la[0])// min vérifie la valeurs la plus petite du tableau 
                {
                    $this->rra();
                }
                else{
                    $this->pb();
                //print_r($this->lb);
                }            
            }

        }

    }
        

       //Fecho $this->la[0];
        
}





$test = new Echange;

//$test->sc();
//$test->pa($la,$lb);
//$test->pb($la,$lb);
//$test->rr();
//$test->rrr();
$test->tri();





