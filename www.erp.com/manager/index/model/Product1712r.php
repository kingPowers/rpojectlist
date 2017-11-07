<?php
/*
 * 智车贷-1712-R
 *  
 */
namespace manager\index\model;

class Product1712r extends Product{
    protected $table = "product";
    const PRODUCT_NAME = "智车宝-1712-R";
    public function config() {
        return [
            "repaymentType"=>1,
            "month"=>12,//期数
            "contactRate"=>10,//合同金额利率，单位：%
            "yearRate"=>10.5,//年利率,单位：%
            "compMonthRate"=>1.58,//综合月利率,单位：%
            "breachRate"=>5,//提前结清费率单位：%
            "gpsL"=>"150",//GPS流量费（月）
            "gpsS"=>"1000",//GPS设备费用（含意外险）
            "gpsZ"=>"400",//GPS责任险
            "startTime"=>date("Y-m-d"),//起息日期
        ];
    }
    
    
    /*
     * 合同金额
     */
    public function getContactMoney() {
        if($this->contactMoney===null){
            $this->contactMoney = Issue::excelPv($this->loanMoney, $this->month, $this->yearRate,$this->compMonthRate);
        }
        return $this->contactMoney;
    }

}