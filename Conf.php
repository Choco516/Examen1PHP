<?php

$var= new Conf();

Class Conf
{
   private $_domain;
   private $_userdatabase;
   private $_passdatabase;
   private $_hostdatabase;
   private $_database;
   private $_email_from_name;
   private $_email_from;
   private $_smtp_port;
   private $_smtp_user;
   private $_smtp_host;
   private $_smtp_pass;
   private $_smtp_batch_limit;

   static $_instance;

   public function __construct(){
      
      include 'confi.php';
      $appSettings = new SimpleXMLElement($xmlstr);
      $this->_hostdatabase=$appSettings->database[0]->database_host;
      $this->_database=$appSettings->database[0]->database_name;
      $this->_userdatabase=$appSettings->database[0]->database_user;
      $this->_passdatabase=$appSettings->database[0]->database_password;
      $this->_email_from_name=$appSettings->email[0]->email_from_name;
      $this->_email_from=$appSettings->email[0]->email_from;
      $this->_smtp_port=$appSettings->email[0]->email_smtp_port;
      $this->_smtp_host=$appSettings->email[0]->email_smtp_host;
      $this->_smtp_user=$appSettings->email[0]->email_smtp_user;
      $this->_smtp_pass=$appSettings->email[0]->email_smtp_pass;
      $this->_smtp_batch_limit=$appSettings->email[0]->email_batch_limit;


   }

   private function __clone(){ }

   public static function getInstance(){
      if (!(self::$_instance instanceof self)){
         self::$_instance=new self();
      }
      return self::$_instance;
   }

   public function getUserDB(){
      $var=$this->_userdatabase;
      return $var;
   }

   public function getHostDB(){
      $var=$this->_hostdatabase;
      return $var;
   }

   public function getPassDB(){
      $var=$this->_passdatabase;
      return $var;
   }

   public function getDB(){
      $var=$this->_database;
      return $var;
   }

    public function getEmail_From(){
      $var=$this->_email_from;
      return $var;
   }

    public function getEmail_From_Name(){
      $var=$this->_email_from_name;
      return $var;
   }

    public function getSmtp_Port(){
      $var=$this->_smtp_port;
      return $var;
   }

    public function getSmtp_Host(){
      $var=$this->_smtp_host;
      return $var;
   }

    public function getSmtp_User(){
      $var=$this->_smtp_user;
      return $var;
   }

    public function getSmtp_Pass(){
      $var=$this->_smtp_pass;
      return $var;
   }

    public function getSmtp_Batch_Limit(){
      $var=$this->_smtp_batch_limit;
      return $var;
   }

}

?>
 