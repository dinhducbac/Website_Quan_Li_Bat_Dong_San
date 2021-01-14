<?php
class CateImageViewModel{
    private $GroupCateName;
    private $CateName;
    private $CateAddress;
    private $CateContent;
    private $CateRent;
    private $CateStatus;
    private $CateImageLink;
    private $ContactID;
    public function CateImageViewModel($GroupCateName,$CateName,$CateAddress,$CateContent,$CateRent,$CateStatus,$CateImageLink,$ContactID){
        $this->GroupCateName = $GroupCateName;
        $this->CateName = $CateName;
        $this->CateAddress = $CateAddress;
        $this->CateContent = $CateContent;
        $this->CateRent = $CateRent;
        $this->CateStatus = $CateStatus;
        $this->CateImageLink = $CateImageLink;
        $this->ContactID = $ContactID;
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
            'ContactID' => $this->ContactID
        ];
    }
}
?>