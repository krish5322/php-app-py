<?php 

function callAPI($method, $url, $data){
    
    $curl = curl_init();
    switch ($method){
        case "POST":
          
          curl_setopt($curl, CURLOPT_POST, 1);
          if ($data)
             curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
          break;
       case "PUT":
    
          curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
          if ($data)
             curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
          break;
       default:
   
          if ($data)
          
             $url = sprintf("%s?%s", $url, http_build_query($data));
    }
    // OPTIONS:
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Accept:application/json'));


    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    // EXECUTE:
  
    $result = curl_exec($curl);
   
   
    $response = json_decode($result);  
    // print_r($response);

   
 
    curl_close($curl);
    return $response;
 }
session_start();


$postdata = json_encode(array(
    "service_name"=> $_POST["servicename"],
    "start_time"=> $_POST["starttime"],
    "end_time"=> $_POST["endtime"],
    "emp_id"=> $_SESSION['id'],
));

echo $postdata;


$resdata = callAPI('POST','http://127.0.0.1:5001/add_service',$postdata);

// echo var_dump($resdata);
header("Location: index.php");
die();


 


?>