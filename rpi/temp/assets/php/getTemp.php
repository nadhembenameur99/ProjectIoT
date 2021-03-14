<?php  
$dbname = 'rpi_themo'; // Enter DB Here
$username = 'nadhem'; // Enter Username Here
$password = ''; // Enter Password Here

$conn = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
  $result = $conn->query('SELECT *
		  FROM data;');
  
  $rows = array();
  $table = array();
  $table['cols'] = array(array('label' => 'Datetime', 'type' => 'string'),array('label' => 'Temperature', 'type' => 'number'),array('label' => 'Humidity', 'type' => 'number'));
    
  foreach($result as $r) {

  $data = array();
  $data[] = array('v' => (string) $r['datetime']);
  $data[] = array('v' => (int) $r['temperature']);
  $data[] = array('v' => (int) $r['humidity']);
      
  $rows[] = array('c' => $data);
  
  }

$table['rows'] = $rows;

} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

try {
   $result2 = $conn->prepare("SELECT `temperature`,`humidity`, `datetime` from data;");	  
		  
  $result2->execute();

} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
	
?>