<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>


<a data-id="@book.Id" title="Add this item" class="open-AddBookDialog">Open Modal</a>

<div id="addBookDialog" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
       <input type="text" name="bookId" id="bookId" value=""/>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
    $(function(){
  $(".open-AddBookDialog").click(function(){
     $('#bookId').val($(this).data('id'));
    $("#addBookDialog").modal("show");
  });
});
</script>
</html>