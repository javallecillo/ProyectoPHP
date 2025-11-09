<?php
    $template = new Template();

    class Template {
        private $body;

        function __construct() {
            $file = file_get_contents(ROOT."/Template/Default/index.html");
            $this->body = explode("{JBODY}", $file);
            echo $this->body[0];
        }

        function __destruct() {
            echo $this->body[1];
        }
    }

?>