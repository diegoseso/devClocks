<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;



//$results = Yii::app()->mongodb->table->find();
//var_dump( $results );
//foreach ($results as $result){
//   var_dump( $result );
//}

?>
<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<button id="starter">Start</button>
<div id="counter"></div>

<?php
yii::app()->clientScript->registerScript("counter", "
$(\"#starter\").click(function(){
    console.log('The counter has started');
    var timeLeft = 1500;
    function zeroAdder(value){
        if (value < 10 ){
            return '0'+value;
        }
        return value;
    }
    function secondsToTime( seconds ){
        if (seconds < 60 ){
            return '00:'+ seconds;
        } else {
            return  zeroAdder(Math.floor(seconds/60))+':'+zeroAdder(seconds % 60); 
        }
    }
    setInterval(function( timeleft ){
        console.log('ha entrado en el interval');
        timeLeft--;
        $(\"#counter\").html( secondsToTime(timeLeft) ); 
    }, 1000);
    
});
");

?>
