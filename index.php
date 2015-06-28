<?php require "Header.html";
?>
<div class="bodyChange">

  <div id="container">
  </div>

</div>
<hr class="style-seven"/>
<script type="text/javascript">
function getList(){

    $(document).ready(function(){
      $.ajax({
        url: 'getlist.php',
        type: 'GET',
        dataType: 'html',
        success: function (data) {
            $('#container').html(data);
            $('#liste').dataTable({
                "language": {
                    "previous":"Précédent",
                    "next":"Suivant",
                    "search": "Recherche:",
                    "lengthMenu": "Afficher _MENU_ enregistrements par page",
                    "zeroRecords": "Désolé, rien trouvé",
                    "info": "Affichage page _PAGE_ of _PAGES_",
                    "infoEmpty": "Aucun enregistrement disponible",
                    "infoFiltered": "(filtré de _MAX_ total enregistrements)",
                    "paginate": {
                      "previous":"Précédent",
                      "next":"Suivant",
                  }
              }
          });
        }
    });

});}



function getGarde(){
    $(document).ready(function(){
      $.ajax({
        url: 'getgarde.php',
        type: 'GET',
        dataType: 'html',
        success: function (data) {
            $('#container').html(data);
            $('#garde').dataTable({
                "language": {
                    "search": "Recherche:",
                    "lengthMenu": "Afficher _MENU_ enregistrements par page",
                    "zeroRecords": "Désolé, rien trouvé",
                    "info": "Affichage page _PAGE_ of _PAGES_",
                    "infoEmpty": "Aucun enregistrement disponible",
                    "infoFiltered": "(filtré de _MAX_ total enregistrements)",
                    "paginate": {
                      "previous":"Précédent",
                      "next":"Suivant",
                  }
              }

          });
        }
    });
  });}

function getPlusProche(){
    alert('getPlusProche');
    $(document).ready(function(){
      $.ajax({  
        url: 'getplusproche.php',
        type: 'GET',
        dataType: 'html',
        success: function (data) {
            $('#plus').html(data);
            $('#garde').dataTable({
                "language": {
                    "search": "Recherche:",
                    "lengthMenu": "Afficher _MENU_ enregistrements par page",
                    "zeroRecords": "Désolé, rien trouvé",
                    "info": "Affichage page _PAGE_ of _PAGES_",
                    "infoEmpty": "Aucun enregistrement disponible",
                    "infoFiltered": "(filtré de _MAX_ total enregistrements)",
                    "paginate": {
                      "previous":"Précédent",
                      "next":"Suivant",
                  }
              }

          });
        }
    });
  });}

  function getTest(){
    $(document).ready(function(){
      $.ajax({  
        url: 'test.php',
        type: 'GET',
        dataType: 'html',
        success:function(data){
          $.ajax({  
            url: 'getplusproche.php',
            type: 'GET',
            dataType: 'html',
            success:function(data){

            }
          });
          $('#container').html(data);
          $('#plus').dataTable({
                "language": {
                    "search": "Recherche:",
                    "lengthMenu": "Afficher _MENU_ enregistrements par page",
                    "zeroRecords": "Désolé, rien trouvé",
                    "info": "Affichage page _PAGE_ of _PAGES_",
                    "infoEmpty": "Aucun enregistrement disponible",
                    "infoFiltered": "(filtré de _MAX_ total enregistrements)",
                    "paginate": {
                      "previous":"Précédent",
                      "next":"Suivant",
                  }
              }

          });
        }
    });
  });}

    </script>

    <?php require "Footer.html";
