<!-- Films da includere nell'index -->

<?php 

    include __DIR__ . '/../data/db.php';

    class Movie {
        public $title;
        public $year;

        function __construct ($_title, $_year)
        {
            $this -> title= $_title;
            $this -> year= $_year;
        }

        public function getTitle(){
            return $this -> title;
        }

        public function getYear(){
            return $this -> year;
        }
    }