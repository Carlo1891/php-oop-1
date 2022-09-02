<!-- Films da includere nell'index -->

<?php 
    // classe film
    class Movie{
        private $title;
        private $year;
        // immesse variabili
        {
            function __construct( $_title, $_year){
                $this -> title = $_title;
                $this -> year = $_year;
            }

            public function getTitle(){
                return $this -> title;
            }
            public function getTitle(){
                return $this -> year;
            }
    }

?>