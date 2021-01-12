<?php
    class ContactModel{
        private $ContactID;
        private $ContactName;
        private $ContactAddress;
        private $ContactPhone;
        private $ContactEmail;

        public function ContactModel($ContactID,$ContactName,$ContactAddress,$ContactPhone,$ContactEmail){
            $this->ContactID = $ContactID;
            $this->ContactName = $ContactName;
            $this->ContactAddress = $ContactAddress;
            $this->ContactPhone = $ContactPhone;
            $this->ContactEmail = $ContactEmail;
        }
        public function GetContactJson(){
            return [
                'ContactID' => $this->ContactID,
                'ContactName' => $this->ContactName,
                'ContactAddress' => $this->ContactAddress,
                'ContactPhone' => $this->ContactPhone,
                'ContactEmail' => $this->ContactEmail
            ];
        }
    }
    
?>