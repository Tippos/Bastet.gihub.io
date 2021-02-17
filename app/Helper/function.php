<?php
function RATE_STAR($rate){
    if ($rate==1)
        return "★☆☆☆☆";
    if ($rate==2)
        return "★★☆☆☆";
    if ($rate==3)
        return  "★★★☆☆";
    if ($rate==4)
        return"★★★★☆";
    if ($rate==5)
        return  "★★★★★";
}
?>
