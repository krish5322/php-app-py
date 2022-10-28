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
    $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
   
   
    $response = json_decode($result);  
    // print_r($response);
    $result = array($response,$httpcode);
   
 
    curl_close($curl);
    return $result;
 }


$postdata = json_encode(array(
    "email"=> $_POST["email"],
    "password"=> $_POST["password"],
 
));




$resdata = callAPI('POST','http://127.0.0.1:5001/login',$postdata);





if ($resdata[1]===200) {
   
   
   $id= $resdata[0]->id;
   session_start();
   $_SESSION['id']=$id;
   header("Location: index.php");
   exit;
   
   
 } elseif ($resdata[1]===400) {
   echo $resdata[0]->result;
   
   
 } else {
   echo $resdata[0]->result;

  
   
 }



 


?>