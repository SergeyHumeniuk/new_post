<?php
require_once('../newPost/new_post.php');

use NewPostDelivery\NewPostApi;

$key = 'afd8e04eae34044a6b7cfc240fe8fbd3';
$np = new NewPostApi();
$result = $np->getCity($key);
$res = json_decode($result);

//for get city
for($i=0; $i<count($res->data); $i++){
   $description = $res->data[$i]->Description;
   $descriptionRu = $res->data[$i]->DescriptionRu;
   $ref = $res->data[$i]->Ref;
   $delivery1 = $res->data[$i]->Delivery1;
   $delivery2 = $res->data[$i]->Delivery2;
   $delivery3 = $res->data[$i]->Delivery3;
   $delivery4 = $res->data[$i]->Delivery4;
   $delivery5 = $res->data[$i]->Delivery5;
   $delivery6 = $res->data[$i]->Delivery6;
   $delivery7 = $res->data[$i]->Delivery7;
   $area = $res->data[$i]->Area;
   $settlementType = $res->data[$i]->SettlementType;
   $isBranch = $res->data[$i]->IsBranch;
   $preventEntryNewStreetsUser = $res->data[$i]->PreventEntryNewStreetsUser;
   $cityID = $res->data[$i]->CityID;
   $settlementTypeDescription = $res->data[$i]->SettlementTypeDescription;
   $settlementTypeDescriptionRu = $res->data[$i]->SettlementTypeDescriptionRu;
   $specialCashCheck = $res->data[$i]->SpecialCashCheck;
   $areaDescription = $res->data[$i]->AreaDescription;
   $areaDescriptionRu = $res->data[$i]->AreaDescriptionRu;
    echo $description.' '.$descriptionRu.' '.$ref.'<br>'; 
}
