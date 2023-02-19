
<div class="modal fade" id="delete_modal<?php echo $res['id']?>" aria-hidden="true">
  <div class="modal-dialog " role="document" style="margin-top: 10%;">
    <div class="modal-content">
      <form method="POST" action="">
        <div class="modal-header">
          <h4 class="modal-title text-danger">Delete message</h4>     
        </div>
        <div class="modal-body">
          <input type="hidden" name="id" value="<?php echo $res['id']; ?>">
         <p>Are you sure you want to delete this record?</p>
        <div style="clear:both;"></div>
        <div class="modal-footer">
          <button class="btn btn-light" type="button" data-dismiss="modal">NO</button>
          <button class="btn btn-danger" type="submit" name="delete" type="button" >YES</button>
        </div>
        </div>
        
      </form>
    </div>
  </div>
</div>

