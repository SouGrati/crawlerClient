<?php 
$url="http://localhost:8081/SpringJDBCPharma/webapi/pharmaresource/garde";
$client=curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
$response=curl_exec($client);
$rtt=json_decode($response,true);
?>

<div class="table-responsive" >
      <table class="table table-hover table-striped" id="garde">
        <thead>
        <tr>  
            <td></td><td><b>Pharmacie</b></td><td><b>Adresse</b></td><td><b>Téléphone</b></td>
        </tr>
        </thead>
        <tbody>
        <?php for ($i=0; $i <sizeof($rtt) ; $i++) { 
            echo "<tr><td><button onclick="."initialize(".(float)$rtt[$i]["longitude"].",".(float)$rtt[$i]["lattitude"].")"." type="."button"." class="."btn btn-primary btn-lg"." data-toggle="."modal"." data-target="."#modalMap"."><img src="."map.png "."/></td>";
            echo "<td>".$rtt[$i]["url"]."</td>";
            echo "<td>".$rtt[$i]["adresse"]."</td>";
            echo "<td>".$rtt[$i]["tel"]."</td></tr>";
        } ?>
        </tbody>
      </table>
</div>
<div id="modalMap" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title">Google Map</h4>
</div>
<div class="modal-body" style="width:567px;height:411px;">
<div id="googleMap" align="center" style="width:567px;height:411px;">
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
</div>
</div>
</div>
</div>