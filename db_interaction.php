<?php
  require('creds.php');

  function addToUsers($InsertName, $InsertPlateNumber, $InsertLotName, $InsertSpotNumber){
    INSERT INTO users (Name, PlateNumber, LotName, SpotNumber) values ($InsertName, $InsertPlateNumber, $InsertLotNumber, $InsertSpotNumber);
  }

  function addToParkingLot($LotName, $spotNum, $price, $seller, $reserved){
    INSERT INTO parkinglot (ParkingLotName, ParkingSpotNum, Price, SellerName, Reserved) values($LotName, $spotNum, $price, $seller, $reserved);
  }
?>
