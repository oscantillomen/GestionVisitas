<?php  

	require_once('../model/config.php');
	require_once('../db/adodb5/adodb.inc.php');

	try 
	{
	   $con = ADONewConnection('mysqli');
	   $con->debug=false;
	   $con->PConnect($server,$username,$password,$database);
	   $con->SetFetchMode(ADODB_FETCH_ASSOC);
	   $query = "SELECT * FROM tipoidentificacion ORDER BY nombre";
	   $rs=$con->Execute($query);
	   $i=0;
	   while(!$rs->EOF)
	   {
	   	$identificaciones[$i] = array('id'=>$rs->fields['Id'],'identificacion'=>$rs->fields['Nombre'],'descripcion'=>$rs->fields['Descripcion']);
	   	$rs->MoveNext();
	   	$i++;
	   }
	   $con->Close();
	   echo json_encode($identificaciones);
	}catch (Exception $e) 
	{
		echo $e;
	}
?>