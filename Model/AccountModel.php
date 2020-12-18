<?php
    class AccountModel{
        public $Username;
        public $Password;
        public $Name;
        public $Birthday;
        public $Gender;
        public $Address;
        public $PhoneNumber;
        public $Email;
        public $IDGroup;
        public function AccountModel($Username, $Password,$Name,$Birthday,$Gender,$Address,$PhoneNumber,$Email,$IDGroup){
            $this->Username = $Username;
            $this->Password = $Password;
            $this->Name = $Name;
            $this->Birthday = $Birthday;
            $this->Gender = $Gender;
            $this->Address = $Address;
            $this->PhoneNumber = $PhoneNumber;
            $this->Email = $Email;
            $this->IDGroup = $IDGroup;
        }
    }
?>