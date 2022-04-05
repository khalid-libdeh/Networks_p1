<?php

$ip= "127.0.0.1";
$state= snmp2_walk($ip,"public",".1.3.6.1.2.1.6.13.1.1");
$local_address= snmp2_walk($ip,"public",".1.3.6.1.2.1.6.13.1.2");
$local_port= snmp2_walk($ip,"public",".1.3.6.1.2.1.6.13.1.3");
$remote_address= snmp2_walk($ip,"public",".1.3.6.1.2.1.6.13.1.4");
$remote_port= snmp2_walk($ip,"public",".1.3.6.1.2.1.6.13.1.5");

$info="";
$i=0;
foreach($state as $st){
$info.=$st.",_,".$local_address[$i].",_,".$local_port[$i].",_,".$remote_address[$i].",_,".$remote_port[$i]."!_!";
$i++;
}
echo $info;
return $info;
