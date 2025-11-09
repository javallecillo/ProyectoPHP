<?php

    namespace entity;

    class eUser {
        public $Id;
        public $UserName;
        public $NameFull;
        public $Password;
        public $Phone;
        public $Email;
        public $Category_Id;

        public $Found;

        public function __construct() {
            $this->Found = false;
        }

    }

?>