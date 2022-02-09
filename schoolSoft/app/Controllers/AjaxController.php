<?php

namespace App\Controllers;

use App\Models\Eleve;
use App\Models\Tuteur;
use App\Models\Classe;

class BlogController extends Controller
{
    public function getAjax()
    {
        $html = '';
        if (isset($_GET['query'])) {
            $id = $_GET['query'];
            // var_dump($id);die;
            $post = new Eleve($this->getDB());
            $pos = $post->search($id);
            // var_dump($pos);die;
           if ($pos) {
               foreach($pos as $post){
                   if ($post->Civilite=="Feminin") { $Sexe = "F"; }else{ $Sexe = "M"; }
                $html .='
                <a href="http://localhost/schoolSoft/posts/'. $post->Matricule.'" class="list-group-item list-group-item-action">
        
                    <h4>'. $post->Nom .' ' . $post->Prenom.'</h4>

                    <div class="row">
                        <div class="col-md-8">
                            <small class="text text-info">'.$post->Matricule.'</small>  
                        </div>
        
                        <div class="col-md-4 text-right">
                            <small class="text text-dark">'.$Sexe.'</small>  
                        </div>
                     </div>
                   
                </a>
                ';
               }
               
            echo($html);
           }else{
            $html .='
            <a href="http://localhost/schoolSoft/posts/" class="list-group-item list-group-item-action">
    
                <h4>not found</h4>
             
            </a>
            ';
            echo($html);
           }
            
        }        
        
    }
}
