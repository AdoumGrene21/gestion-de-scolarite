$(document).ready(function () {
  rechercher_eleve();
  // recuper();
  // fetchParcours(); 
  
});

function rechercher_eleve() {
  $("#search_text").keyup(function () {
    var search = $(this).val();
    // $("#resul").html(search);
    //  console.log(search);
    $.ajax({
      url: "searchUrl",
      method: "GET",
      //   dataType: 'JSON',
      data: { query: search },
      success: function (reponse) {
        // alert(reponse);
        $("#resul").html(reponse);
      }
    });
  });
}


function fetchParcours(id) {
//  console.log(id);
// onchange
  $.ajax({
    url: "Urlajaxparcours",
    method: "GET",
    data: { id_parcours: id },
    success: function (response) { 
      alert(response); 
    }
  });
}

function load(id) {
  $.ajax({
    url: "resul",
    method: "get",
    data: {
      id_N: id
    },
    success: function (response) {
      $("#listeEleveByClasse").html(response);
      $("#detailEleve").html('');
    }
  });
}

function loadEleve(idE, idC) {
  $.ajax({
    url: "detailNoteEleve",
    method: "get",
    data: {
      id_eleve: idE,
      id_classe: idC
    },
    success: function (response) {
      $("#detailEleve").html(response);
    }
  });

}

function recuper(id){
  
  $.ajax({
    url: "envoiNote",
    method: "post",
    data: {
      id_N: id
    },
    success: function (response) {
      alert(response)   
    }
  });
  

}
// recuper();






