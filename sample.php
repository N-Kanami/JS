<?php
class Company
{
    protected $company_name;
    protected $address;
    protected $tel;
    
    public function displayCompany(){
        echo '会社名:',$this->company_name;
        echo "\n";
        echo '住所:'.$this->address;
        echo "\n";
        echo '電話番号:',$this->tel;
        echo "\n";
    }

    public function setCompany($company_name,$address,$tel){
        $this->company_name=$company_name;
        $this->address=$address;
        $this->tel=$tel;
    }
}

class Department extends Company
{
    private $department;
    private $general_manager;

    public function displayDepartment(){
        echo '部署名:',$this->department;
        echo "\n";
        echo '部長:',$this->general_manager;
        echo "\n"."\n";
    }  

    public function setDepartment($department,$general_manager){
        $this->department=$department;
        $this->general_manager=$general_manager;  
    }
}

$sampleA=new Department();
$sampleA->setCompany('サンプルA','市ヶ谷','080-XXXX-XXXX');
$sampleA->setDepartment('人事','高田');

$sampleB=new Department();
$sampleB->setCompany('サンプルB','池袋','090-XXXX-XXXX');
$sampleB->setDepartment('総務','田中');

$sampleC=new Department();
$sampleC->setCompany('サンプルC','新宿','070-XXXX-XXXX');
$sampleC->setDepartment('営業','高橋');

$samples=array($sampleA,$sampleB,$sampleC);
foreach($samples as $samples){
    echo $samples ->displayCompany();
    echo $samples ->displayDepartment();
};
?>
