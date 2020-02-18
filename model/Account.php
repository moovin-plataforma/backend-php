<?php
    namespace Moovin\Job\Backend\Model;

    class Account
    {
        private $accountNumber;
        private $accountType = "Corrente";
        private $balance = 500;

        public function __construct()
        {

        }

        public function __destruct()
        {

        }

        public function __GET($attribute)
        {
            return $this->$attribute;
        }

        public function __SET($attribute, $value)
        {
            $this->$attribute = $value;
        }

        public function __toString()
        {
            return nl2br("Conta: $this->agency - $this->number
                          Tipo de conta $this->accountType
                          Saldo: $this->balance <br>");
        }
    }