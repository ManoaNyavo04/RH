<?php
    
    foreach ($questrep[0]->result_array() as $row) {
        echo $row['question'];
        foreach ($questrep[1]->result_array() as $row1) { 
            if ($row1['idquestion']==$row['idquestion']) {
                echo $row1['reponse'];
            }
        }
    } 
?>