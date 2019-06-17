<?php
namespace App\Model;
use Nette;
use Nette\Database\Context;

class ClManager {
    
    private $database;
    
    public function __construct(Context $database){
        $this->database = $database;
    }

    public function getGeneralVersionInfo() {
        return $this->database->table('clgeneral')->fetch();
    }

    public function getScriptVersionList() {
        return $this->database->table('clversions');
    }

    public function getSpecificScriptVersion($id) {
        return $this->database->table('clversions')->where('id=?',$id)->fetch();
    }

    public function getScriptChangeLogs() {
        return $this->database->table('clchangelog');
    }

    public function getSpecificChangeLog($id) {
        return $this->database->table('clchangelog')->where('id=?',$id)->fetch();
    }


    public function editGeneralVersion($form, $values){
        $this->database->table('clgeneral')->update([
           'oldBranchVersion' => $values->old_version,
           'newBranchVersion' => $values->new_version,         
          ]);
         return true;
     }

     public function editScriptVersion($form, $values){
        $this->database->table('clversions')->where('id=?',$values->format_id)->update([
           'name' => $values->format_name,
           'version' => $values->format_version, 
           'filename' => $values->format_filename,         
          ]);
         return true;
     } 

     public function editChangeLog($form, $values){
        $this->database->table('clchangelog')->where('id=?',$values->id)->update([
           'date' => $values->date,
           'type' => $values->type, 
           'notes' => $values->notes,         
          ]);
         return true;
     } 
   
}