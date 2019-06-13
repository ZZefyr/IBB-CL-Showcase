<?php
namespace App\Model;
use Nette;
use Nette\Database\Context;

class FormatsManager {
    
    private $database;
    
    public function __construct(Context $database){
        $this->database = $database;
    }

    public function getFormatTypes() {
        return $this->database->table('formatsType');
    }

    public function getFormatsList() {
        return $this->database->query('SELECT formatDetail.id, formatDetail.name, formatstype.name AS typename FROM formatDetail JOIN formatstype  ON formatDetail.typeId = formatstype.id');
    }

    public function getFormatDetail($formatId) {
        return $this->database->table('formatdetail')->select('*')->where('id=?',$formatId)->fetch();
    }

    public function editFormatDetails($form, $values){
        $this->database->table('formatdetail')->where('id=?',$values->format_id)->update([
           'name' => $values->format_name,
           'en_specification' => $values->en_specification,
           'specification' => $values->cz_specification,  
           'en_application' => $values->en_application,  
           'application' => $values->cz_application,              
          ]);
         return true;
     }
   
}