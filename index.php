<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style= "background:#24cefd; color:black;">
    <section style= "display:flex;">

    <div style= "margin-left:50px;">
            <h1>String data</h1>

<?php

        $name="Anik Khan <br>";

        echo $name;
        echo $name;
        echo $name;
    


?>
    </div>

    <div style= "margin-left:50px;">
            <h1>Float data</h1>

<?php

        $name="123.2558 <br>";

        echo $name;
        echo $name;
        echo $name;
       


?>
    </div>
    <div style= "margin-left:50px;">
            <h1>Integer data</h1>

<?php

        $name="13654<br>";

        echo $name;
        echo $name;
        echo $name;
      

?>
    </div>

    <div style= "margin-left:50px;">

            <h1>Index array</h1>

<?php

        $self =array('Anik Khan', 24, 'anikk7668@gmail.com', );
        echo $self[2];
       

?>
    </div>

    <div style= "margin-left:50px;">
            <h1>Asscociative array</h1>

<?php

        $self =array('Name'=>'Anik Khan','Age'=> 24,'Email'=>'anikk7668@gmail.com', );

        foreach($self as $word => $deta){

                echo strtoupper( $word) ." = ". $deta . "<br>";
        }
       

?>
    </div>

    <div style= "margin-left:50px;">
            <h1>LOOP</h1>

<?php

        $name = "Anik Khan <br>";

        for($ver = 5; $ver <= 50; $ver = $ver+5){
                 
                echo $ver . "=" . $name;

        }

        
       

?>
    </div>

    </section>


</body>
</html>