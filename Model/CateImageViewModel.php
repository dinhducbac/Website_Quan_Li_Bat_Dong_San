<?php
class CateImageViewModel{
    private $GroupCateName;
    private $CateName;
    private $CateAddress;
    private $CateContent;
    private $CateRent;
    private $CateStatus;
    private $CateImageLink;
    public function CateImageViewModel($GroupCateName,$CateName,$CateAddress,$CateContent,$CateRent,$CateStatus,$CateImageLink){
        $this->GroupCateName = $GroupCateName;
        $this->CateName = $CateName;
        $this->CateAddress = $CateAddress;
        $this->CateContent = $CateContent;
        $this->CateRent = $CateRent;
        $this->CateStatus = $CateStatus;
        $this->CateImageLink = $CateImageLink;
    }
    public function GetCateImageViewJson(){
        return [
            'GroupCateName' =>  $this->GroupCateName,
            'CateName' =>  $this->CateName,
            'CateAddress' =>  $this->CateAddress,
            'CateContent' =>  $this->CateContent,
            'CateRent' =>  $this->CateRent,
            'CateStatus' =>  $this->CateStatus,
            'CateImageLink' =>  $this->CateImageLink,
        ];
    }
}
?>