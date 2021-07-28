


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   
    <link rel="stylesheet" href="../../public/css/style.css" />
  
</head>

<body>


<!-- Button trigger modal -->
<button type="button" class="btn btn--radius-2 btn--red" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"  >Delete Official</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <h4 class="modal-title" id="staticBackdropLabel" style="color: red"> <?php echo $row['first_name']?> <?php echo $row['last_name']?>: <?php echo $row['position']?></h4>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="close-btn" data-bs-dismiss="modal">Close</button>
        <button class="delete-btn"><a href="delete_official.php?id=<?php echo $row['id']?> ">Delete</a></button>
      </div>
    </div>
  </div>
</div>

</body>
<script>
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
</script>


