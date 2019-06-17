<?php
namespace App\Model;
use Nette;
use Nette\Database\Context;

class BaseManager {
    
    private $database;
    
    public function __construct(Context $database){
        $this->database = $database;
    }

    public function getBasicInfo() {
        return $this->database->table('basicinfo')->fetch();  
    }

   
    public function editBasicInfo($form, $values){
        $this->database->table('basicinfo')->update([
           'general' => $values->general,
           'en_general' => $values->en_general, 
           'principles' => $values->principles,
           'en_principles' => $values->en_principles, 
           'application' => $values->application,
           'en_application' => $values->en_application, 
           'externalcodes' => $values->externalcodes,
           'en_externalcodes' => $values->en_externalcodes,         
          ]);
         return true;
     }
   
}