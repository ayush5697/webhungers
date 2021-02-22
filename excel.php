<?php
	require_once './Classes/PHPExcel.php';
	$objPHPExcel = new PHPExcel();  
	$objPHPExcel->setActiveSheetIndex(0);  
	$rowCount = 1;  
	$column = 'A';
	include('db_connection.php');
	$sql='select *from user natural join user_task';
   	$result = $con->query($sql);
	$arrayName = array('ID','Name','Email','Mobile','Task','Task_type');
	for ($i = 1; $i < mysqli_num_fields($result); $i++)  
	{
		$objPHPExcel->getActiveSheet()->setCellValue($column.$rowCount, $arrayName[$i]);
		$column++;
	}

    $rowCount = 2;  
	while($row = mysqli_fetch_row($result))  
	{  
	    $column = 'A';
	    for($j=1; $j<mysqli_num_fields($result);$j++)  
	    {  
	        if(!isset($row[$j]))  
	            $value = NULL;  
	        elseif ($row[$j] != "")  
	            $value = strip_tags($row[$j]);  
	        else  
	            $value = "";  

	        $objPHPExcel->getActiveSheet()->setCellValue($column.$rowCount, $value);
	        $column++;
	    }  
	    $rowCount++;
	} 

	header('Content-Type: application/vnd.ms-excel'); 
	header('Content-Disposition: attachment;filename="Results.xls"'); 
	header('Cache-Control: max-age=0'); 
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5'); 
	$objWriter->save('php://output');
?>

