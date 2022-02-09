<?php

namespace App\Controllers;

use App\Models\Eleve;
use App\Models\Tuteur;
use App\Models\Classe;
use App\Models\Note;

class BlogController extends Controller
{

    public function welcome()

    {
        $post = new Eleve($this->getDB());
        $posts = count($post->all());

        // var_dump($posts); die;
        return $this->view('blog.welcome', compact('posts'));
    }

    ////// ENREGISTREMENT D'UN ELEVE DANS LA BASE DE DONNEE
    public function createEleve()
    {
        return $this->view('blog.creatEleve');
        // var_dump('ok');
    }
    public function saveEleve()
    {
        // var_dump($_POST);
        $eleve = (new Eleve($this->getDB()))->InsertNewEleve($_POST);
        // $post = new Eleve($this->getDB());


        header("location: http://localhost/schoolSoft/posts/" . $eleve);


    }
    //////////////////////////////////////////

    public function Webcam($id)
    {
        $post = (new Eleve($this->getDB()))->findById($id);
        return $this->view('blog.webcam', compact('post'));
        // return $this->view('blog.webcam');
    }
    public function UploadPhoto($id)
    {
        // var_dump($id);
        $post = (new Eleve($this->getDB()))->findById($id);
        return $this->view('blog.uploadphoto', compact('post'));
    }

   
    
/***
***
    fonctions DU MODULES parametre
***
***/
    public function parametre()
    {
       
        return $this->view('blog.parametre');
    }
    public function uploaddata()
    {
        $upload_file = $_FILES['uploadfile']['tmp_name'];
       
        $post = (new Eleve($this->getDB()))->dataCsv( $upload_file );
        // die;

    }
/***
***
    end parametre
***
***/

    public function AjaxParcours()
    {
        echo ($_GET['id_parcours']);
        // echo 'ok';


    }

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
                foreach ($pos as $post) {
                    if ($post->Civilite == "Feminin") {
                        $Sexe = "F";
                    } else {
                        $Sexe = "M";
                    }
                    $html .= '
                <a href="http://localhost/schoolSoft/posts/' . $post->Matricule . '" class="list-group-item list-group-item-action">
        
                
                <div class="row" style="  height: 20px;">
                <div class="col-md-8">
                         ' . $post->Nom . ' ' . $post->Prenom . '
                            <small class="text text-info">' . $post->Matricule . '</small>  
                        </div>
        
                        <div class="col-md-4 text-right">
                            <small class="text text-dark">' . $Sexe . '</small>  
                        </div>
                     </div>
                   
                </a>
                ';
                }

                echo ($html);
            } else {
                $html .= '
            <a href="http://localhost/schoolSoft/posts/" class="list-group-item list-group-item-action">
    
                <h4>not found</h4>
             
            </a>
            ';
                echo ($html);
            }
        }
    }


    public function index()
    {
        $post = new Eleve($this->getDB());
        $posts = $post->all();

        return $this->view('blog.index', compact('posts'));
    }

    public function show(string $id)
    {
        $post = new Eleve($this->getDB());
        $post = $post->findById($id);

        // return $this->view('blog.show', compact('post'));
        $tuteurs = (new Tuteur($this->getDB()))->allT();

        $classe = (new Classe($this->getDB()))->getClasse();

        return $this->view('blog.show', compact('post', 'tuteurs', 'classe'));
    }


    public function PdfBulletin($id)
    {
        $notes = (new Note($this->getDB()))->allNoteFromEleve($id);
        $post = (new Eleve($this->getDB()))->findById($id);
        return $this->viewPDF('blog.PdfBulletin', compact('post', 'notes'));
    }
    public function PdfCertificat($id)
    {
        $post = (new Eleve($this->getDB()))->findById($id);
        return $this->viewPDF('blog.PdfCertificat', compact('post'));
    }

    public function PdfCarte(string $id)
    {
        $post = (new Eleve($this->getDB()))->findById($id);
        return $this->viewPDF('blog.PdfCarte', compact('post'));
    }
    public function PdfCarteLot(string $id)
    {
        $posts = (new Eleve($this->getDB()))->findEleveByClasse($id);
        return $this->viewPDF('blog.PdfCarteLot', compact('posts'));
    }

    public function edit_P($id)
    {
        $post = (new Eleve($this->getDB()))->findById($id);
        return $this->view('blog.edit_P', compact('post'));
    }

    public function edit_C($id)
    {
        $post = (new Eleve($this->getDB()))->findById($id);
        return $this->view('blog.edit_C', compact('post'));
    }

    public function edit_T($id)
    {
        $post = (new Eleve($this->getDB()))->findById($id);

        $tuteurs = (new Tuteur($this->getDB()))->allT();

        return $this->view('blog.edit_T', compact('post', 'tuteurs'));
    }

    public function edit_pedagogie($id)
    {
        $post = (new Eleve($this->getDB()))->findById($id);

        // $classe = (new Classe($this->getDB()))->getClasse();

        $classe = (new Classe($this->getDB()))->getAllClasse();

        return $this->view('blog.edit_Classe', compact('classe', 'post'));
    }

    public function update($id)
    {
        $post = new Eleve($this->getDB());

        $resultat = $post->update($id, $_POST);

        if ($resultat) {
            header("location: http://localhost/schoolSoft/posts/{$id}");
        }
    }
    public function update_Photo($id)
    {
        $eleve = new Eleve($this->getDB());


        $resultat = $eleve->update_Photo($id, $_FILES);

        header("location: http://localhost/schoolSoft/posts/{$id}");
    }
    public function update_T($id)
    {
        $tuteur = new Tuteur($this->getDB());
        $resultat = $tuteur->update_T($id, $_POST);

        header("location: http://localhost/schoolSoft/posts/{$id}");
    }

    public function update_pedagogie_T($id)
    {
        $classe = new Classe($this->getDB());
        $resultat = $classe->update_Classe($id, $_POST);

        header("location: http://localhost/schoolSoft/posts/{$id}");
    }
}
