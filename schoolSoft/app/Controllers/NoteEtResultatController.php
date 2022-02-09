<?php

namespace App\Controllers;

use App\Models\Eleve;
// use App\Models\Tuteur;
use App\Models\Classe;
use App\Models\Note;

class NoteEtResultatController extends Controller
{
  public function resultats()
  {
    $classes = (new Classe($this->getDB()))->getAllClasse();
    return $this->view('resultat.resultatIndex', compact('classes'));
  }

  public function notes()
  {
    // var_dump('ok');
    $matieres = (new Classe($this->getDB()))->getAllMatiere();
    return $this->view('resultat.notesIndex', compact('matieres'));
  }
  public function envoiNote()
  {
   echo($_POST['id_N']);
  }
  public function insertNote($id)
  {
 

    $tablenoteEdit = (new Note($this->getDB()))->getTableNote($id);
    //  var_dump($tablenote); die;
    return $this->view('resultat.notesInsertNote', compact('tablenoteEdit'));
  }

  public function notesMatiere(string $id)
  {
    $tablenote = (new Note($this->getDB()))->getTableNote($id);
    $tablenote1 = (new Note($this->getDB()))->getTableNote($id);
    return $this->view('resultat.notesMatiereClasse', compact('tablenote', 'tablenote1'));
  }

  public function notesEleve()
  {
    $id_E = (string)  $_GET['id_eleve'];
    // $idE =   $id_E;     
    $id_C = $_GET['id_classe'];

    

    $eleve = (new Eleve($this->getDB()))->findById($id_E);

    $note = (new Note($this->getDB()))->allNoteFromEleve($id_E);

    // $note_cc = $note->note_controle;
    $content = '
        <div class="row">
        <div class="col-12">
          <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-md-6">
                <h5 class="card-title">' . $eleve->Nom . ' ' . $eleve->Prenom . '</h5>
              </div>
                   
              <div class="col-md-6 text-right">
                <a href="http://localhost/schoolSoft/posts/PdfBulletin/' . $eleve->Matricule . '" target="_blank" class="btn btn-info">Bulletin</a>
              </div>
            </div>
          
          </div>
          <!-- /.card-header -->
            <div class="card-body table-responsive p-0" >
              <table class="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>Matiere</th>
                    <th>Coef</th>
                    <th>Note Controle</th>
                    <th>Note Composition</th>
                    <th>Moyenne</th>
                    
                  </tr>
                </thead>
                ';

    foreach ($note as $not) {
      if (isset($not->note_controle) || isset($not->note_composition)) {
        $note_cc = $not->note_controle;
        $note_com = $not->note_composition;
      } else {
        $note_cc = '';
        $note_com = '';
      }


      $content .= '
                <tbody>
                  <tr>
                    <td>' . $not->matiere . '</td>
                    <td>' . $not->coef . '</td>
                    <td>' . $note_cc . '</td>
                    <td>' . $note_com . '</td>
                    <td>' . ((int) $note_cc + (int) $note_com) / 2 . '</td>
                    
                  </tr> ';
    }
    $content .= '
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      ';
    echo $content;
  }

  public function AjaxNote()
  {
    $content = '';
    $id = $_GET['id_N'];


    $classe = (new Classe($this->getDB()))->findClasseById($id);

    $eleve = (new Eleve($this->getDB()))->findEleveByClasse($id);
    //  var_dump($eleve);die;
    // $classes = (new Classe($this->getDB()))->getAllClasse();

    $content = '
        
    <div class="card" style="padding:2px;">
        <div class="card-header">
          <p class="card-title">Liste de eleves de ' . $classe->libelle . '</p>
          <a href="http://localhost/schoolSoft/posts/PdfCarteLot/Classe/'.$classe->id.'" target="_blank" class="btn btn-info">print carts</a>
          
        </div>
        <div class="list-group">
           
            ';
    foreach ($eleve as $eleve) {


      $idE =  (string) $eleve->Matricule;
      $idC =  (string) $classe->id;
      if ($eleve->Civilite == 'Feminin') {

        $sexe = "F";
      } else {

        $sexe = "M";
      }

      $content .= '
                    <button onclick="loadEleve(' . (string) $idE . ',' . $idC . ' )" class="list-group-item list-group-item-action">

                        <h6>' . $eleve->Nom . ' ' . $eleve->Prenom . '</h6>
                        <div class="row">
                            <div class="col-md-8">
                                <small class="text text-info">' . $eleve->DateNaissance . '</small>
                            </div>

                            <div class="col-md-4 text-right">
                                <small class="text text-dark">' .  $sexe . '</small>
                            </div>
                        </div>

                    </button>
';
    }
    $content .= '
            
        </div>

        </div>
  
';

    echo $content;
  }
}
