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

    public function getScriptChangeLog() {
        return $this->database->table('clchangelog');
    }

    public function editGeneralVersion($form, $values){
        $this->database->table('clgeneral')->update([
           'oldBranchVersion' => $values->old_version,
           'newBranchVersion' => $values->new_version,         
          ]);
         return true;
     }
   
}