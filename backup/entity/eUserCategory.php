<?php
    namespace entity;

    class eUserCategory {
        public $Id;
        public $Description;

        public $Found;

        public function __construct() {
            $this->Found = false;
        }
    }
?>