<?php

class nike extends shoes
{
    public function MenOrWomenShoe(String $input): String
    {
        if (strpos($input, "Men"))
            (
                echo("This Shoe is for Men");
            )
            else if (strpos($input, "Women")) {
                echo("This Shoe is for Women");

        }
    }
}
