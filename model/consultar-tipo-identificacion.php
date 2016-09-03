<?php  

	require_once('../model/config.php');
	require_once('../bd/adodb5/adodb.inc.php');
	try 
	{
	   $con = ADONewConnection('mysql');
	   $con->debug=false;
	   $con->PConnect($server,$username,$password,$database);
	   $con->SetFetchMode(ADODB_FETCH_ASSOC);
	   $query = "SELECT * FROM tipoidentificacion ORDER BY nombre";
	   $rs=$con->Execute($query);
	   $i=0;
	   while(!$rs->EOF)
	   {
	   	$identificaciones[$i] = array('id'=>$rs->fields['cen_id'],'identificacion'=>$rs->fields['nombre'],'descripcion'=>$rs->fields['descripcion']);
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