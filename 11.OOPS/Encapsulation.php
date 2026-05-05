<?php
    class BankAccount {
        private $balance = 1000;

        public function getBalance() {
            return $this->balance;
        }
    }

    $acc = new BankAccount();
    echo $acc->getBalance();
?>