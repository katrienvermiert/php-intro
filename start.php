<?php
    class blackjack{
        var $score = 0;
        var $totalscore = 0;
        var $hand = 0;
        var $turn = true;
        var $surr = false;

        function hit(){
            $card = rand(1,11);
            $this->hand = $card;
            $this->score = $this->score + $card;
        }

        function stand() {
            $this->turn = false;
        }

        function surrender() {
            $this->$surr = true;
        }
    };


?>
