<div id ="modalSupression" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirmation de Supression</h5>
      </div>
      <div class="modal-body">
        <p>Voulez vous supprimer cette nationalité ?</p>
      </div>
      <div class="modal-footer">
        <a href="supprimerNationalite.php?num=" class="btn btn-primary" id="btnSuppr">Supprimer</a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ne pas Supprimer</button>
      </div>
    </div>
  </div>
</div>

<footer class="container">
  <p>&copy; JNed 2022-2023</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>    
<script type="text/javascript">

$("a[data-suppression]").click(function(){
  var lien = $(this).attr("data-suppression");
  var message = $(this).attr("data-message");
  $("#btnSuppr").attr("href",lien);
  $(".modal-body").text(message);
});


</script>
</body>
</html>
<?php ob_end_flush(); ?>