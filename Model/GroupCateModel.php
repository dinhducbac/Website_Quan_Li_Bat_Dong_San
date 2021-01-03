<?php
    class GroupCateModel{
        public $GroupCateID;
        public $GroupCateName;

        public function GroupCateModel($GroupCateID,$GroupCateName){
            $this->GroupCateID = $GroupCateID;
            $this->GroupCateName = $GroupCateName;
        }
    }
?>