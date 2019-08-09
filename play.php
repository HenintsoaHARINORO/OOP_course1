<?php
require __DIR__.'/lib/Ship.php';
/**
 * @param Ship $someShip
 */
function printShipSummary($someShip){
    echo  'Name Ship :'.$someShip->name;
    echo '<hr/>';
    echo $someShip->sayHello();
    echo '<hr/>';
    echo $someShip->getName()['nom'];
    echo '<hr/>';
    echo $someShip->name();
    echo '<hr/>';
    echo $someShip->getNameAndSpecs();
}

$myShip= new Ship();
$myShip->name= 'Jedi Starship';
$myShip->weaponPower=10;
$myShip->strength=3;

//$myShip->hello='Good morning Sir';
printShipSummary($myShip);
$otherShip=new Ship();
$otherShip->name='Imperial Shuttle';
$otherShip->weaponPower=5;
$otherShip->strength=0;
echo '<hr/>';
printShipSummary($otherShip);
echo '<hr/>';
$anotherShip=new Ship();
$anotherShip->name='Stars Evolution';
$anotherShip->weaponPower=2;
$anotherShip->strength=20;
printShipSummary($anotherShip);
echo '<hr/>';
if($myShip->strength >$otherShip->strength && $myShip->strength>$anotherShip->strength)
{
    echo $myShip->name .' has more strength';
}
else if($otherShip->strength >$anotherShip->strength  && $otherShip->strength >$myShip->strength)
{
    echo $otherShip->name .' has more strength';
}
else{
    echo $anotherShip->name.' has more strength';
}
echo '<hr/>';
if($myShip->weaponPower >$otherShip->weaponPower && $myShip->weaponPower>$anotherShip->weaponPower)
{
    echo $myShip->name .' has more weapon Power';
}
else if($otherShip->weaponPower>$anotherShip->weaponPower && $otherShip->weaponPower >$myShip->weaponPower)
{
    echo $otherShip->name .' has more weaponPower';
}
else{
    echo $anotherShip->name.' has more weapon Power';
}
?>