<?php
    class Formulaire {
        public $email;
        public $subject;
        public $message;

        function __construct($email, $subject, $message) {
            $this->email = $email;
            $this->subject = $subject;
            $this->message = $message;
        }

        function save() {
            
        }
    }
?>