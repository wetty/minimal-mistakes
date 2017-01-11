<?php 
try
{
  $payload = json_decode($_REQUEST['payload']);
}
catch(Exception $e)
{
  exit(0);
}
?>
