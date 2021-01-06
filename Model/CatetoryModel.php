<?php
    class CatetoryModel{
        public $CateID;
        public $CateName;
        public $CateAddress;
        public $CateContent;
        public $CateRent;
        public $CateStatus;
        public $GroupCateID;
        public function CatetoryModel($CateID, $CateName,$CateAddress,$CateContent,$CateRent,$CateStatus,$GroupCateID){
            $this->CateID = $CateID;
            $this->CateName = $CateName;
            $this->CateAddress = $CateAddress;
            $this->CateContent = $CateContent;
            $this->CateRent = $CateRent;
            $this->CateStatus = $CateStatus;
            $this->GroupCateID = $GroupCateID;
        }
        public function GetCateJson(){
            return [
                'CateID' => $this->CateID,
                'CateName' => $this->CateName,
                'CateAddress' => $this->CateAddress,
                'CateContent' => $this->CateContent,
                'CateRent' => $this->CateRent,
                'CateStatus' => $this->CateStatus,
                'GroupCateID' => $this->GroupCateID
            ];
        }
    }
?>