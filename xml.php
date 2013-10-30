<?php
$xmlstr = <<<XML
<?xml version='1.0' standalone='yes'?>
<configuracion>

 <database>
  <database_host>localhost</database_host>
  <database_name>bd_estudiantes</database_name>
  <database_user>root</database_user>
  <database_password></database_password>
</database>

  <email>
   <email_from>elvistry@gmail.com</email_from>
   <email_from_name>Elvis Rocha</email_from_name>
   <email_smtp_host>localhost</email_smtp_host>
   <email_smtp_port>25</email_smtp_port>
   <email_smtp_user>elvistry@gmail.com</email_smtp_user>
   <email_smtp_pass>chaqueton</email_smtp_pass>
   <email_batch_limit>4</email_batch_limit>
  </email>

</configuracion>

XML;
?>
 