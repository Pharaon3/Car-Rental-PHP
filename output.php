<?php
$delimiter = ","; 
$filename = "data.csv"; 
    
// Create a file pointer 
$f = fopen('php://memory', 'w'); 
    
// Set column headers 
$fields = array('PickDate', 'DropDate', 'LocationCode', 'State', 'City', 'Fulladdress', 'Class', 'Type', 'payNowPrice', 'payLaterPrice', 'Link'); 
fputcsv($f, $fields, $delimiter); 
    
// Output each row of the data, format line as csv and write to file pointer 
// for($d = 0; $d < count($requests); $d ++){
//     $row = $requests[$d];
//     $lineData = array($row['PickDate'], $row['DropDate'], $row['LocationCode'], $row['State'], 
//                         $row['City'], $row['Fulladdress'], $row['Class'], $row['Type'], $row['payNowPrice'], $row['payLaterPrice'], $row['Link']); 
//     fputcsv($f, $lineData, $delimiter); 
// } 
    
// Move back to beginning of file 
fseek($f, 0); 
    
// Set headers to download file rather than displayed 
header('Content-Type: text/csv'); 
header('Content-Disposition: attachment; filename="' . $filename . '";'); 
    
//output all remaining data on a file pointer 
fpassthru($f);  