<?php
$empleado = $_REQUEST['nombre'];
$sueldo =  $_REQUEST['salario'];
$aux_trans = $_REQUEST['aux_trans'];
$horas = $_REQUEST['horas'];
$comisiones = $_REQUEST['comisiones'];

$total_deven = ($sueldo + $aux_trans + $horas + $comisiones); 
$salud = ($sueldo + $horas + $comisiones) * (0.04);
$pension =  ($sueldo + $horas + $comisiones) * (0.04);
$total_deducido = ($salud + $pension); 
$neto_pagado = ($total_deven - $total_deducido);
$aporte_salud = ($sueldo + $horas + $comisiones) * (0.085);

$aporte_pension = ($sueldo + $horas + $comisiones) * (0.12); 
$seguridad = ($aporte_salud + $aporte_pension);
$cesantias = ($total_deven * 0.0833);
$inte_cesantias = ($cesantias * 0.12);
$prima = ($total_deven * 0.0833);
$vacaciones = ($sueldo * 0.0417);

$compensacion_familiar = ($sueldo + $horas + $comisiones) * (0.04);
$icb = ($sueldo + $horas + $comisiones) * (0.03);
$sena = ($sueldo + $horas + $comisiones) * (0.02);
$aporte_fiscal = ($compensacion_familiar + $icb + $sena);
$riesgo_profesional = ($sueldo + $horas + $comisiones) * (0.522);
$total_apropiado = ($cesantias + $inte_cesantias + $prima + $vacaciones + $aporte_fiscal + $riesgo_profesional);
$total_final = ($total_deven + $seguridad + $total_apropiado);


echo "El salario de $empleado es : $sueldo" . "<br>" . "<br>"; 
echo "El auxilio de transporte de $empleado es de : $aux_trans " . "<br>" . "<br>"; 
echo "Las horas extras laboradas de $empleado son : $horas " . "<br>" . "<br>"; 
echo "La comision de $empleado es de : $comisiones " . "<br>" ."<br>"; 
echo "El valor a pagar de la nomina para  $empleado es de: " .  $total_final;  

?>