<?php

class AssociacaoCliente {

    private $Cliente;
    private $Nome;
    private $Email;
    
    function __construct($Nome, $Email) {
         /**
          * A função md5() calcula o hash MD5 de uma string.
          * A função md5() usa o RSA Data Security, Inc. MD5 Message-Digest Algorithm
          * 
          * md5(string,raw)
          * 
          * raw -> Optional. A boolean value that specifies hex or binary output format:
          * 
          * TRUE - Raw 16 character binary format
          * FALSE - Default. 32 character hex number
          * */
         $this->Cliente = md5($Nome);  //cliente id
         $this->Nome = $Nome;
         $this->Email = $Email;
     }

     public function getCliente() {
         return $this->Cliente;
     }

     public function getNome() {
         return $this->Nome;
     }

     function getEmail() {
         return $this->Email;
     }
    
}
