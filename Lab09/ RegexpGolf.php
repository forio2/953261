<?php
    function verify($regexp,$yes,$no){
        for ($i=0;$i<count($yes);$i++){
            if (!preg_match($regexp,$yes[$i])){
                echo 'Failure to match: '.$yes[$i].'<br>';
            } 
        }for ($i=0;$i<count($no);$i++){
            if (preg_match($regexp,$no[$i])){
                echo 'Unexpected match for: '.$no[$i].'<br>';
            }   
        }  
    }
    echo "P#1 car and cat<br>";
    verify('/\w+ c/',["my car", "bad cats"],["camper", "high art"]);
    echo "P#2 pop and prop<br>";
    verify('/ /',["pop culture", "mad props"],["plop", "prrrop"]);
    echo "P#3 ferret, ferry, and Ferrari<br>";    
    verify('/ferr[etryria]/',["ferret", "ferry", "ferrari"],["ferrum", "transfer A"]);
    echo "P#4 Any word ending in ious<br>";   
    verify('/\w+ /',["how delicious", "spacious room"],["ruinous", "consciousness"]);
    echo "P#5 A whitespace character followed by a period, comma, colon, or semicolon<br>";
    verify('/[.]/',["bad punctuation ."],["escape the dot"]);
?>