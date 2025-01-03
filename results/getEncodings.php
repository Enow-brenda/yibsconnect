<style>
   .modal-content{
    width:50%;
    text-align: center;
    padding:20px;
    box-shadow: 5px 10px 18px  rgb(9,109,240);
    margin-left: 50vh;
    margin-top: 20vh;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
   }button{
    margin-top: 30px;
    padding:5px;
    color:white;
    background:rgb(9,109,240);
    border: none;
    border-radius: 5px;
    width:50%;
   }

</style>
<div id="uploadPhotoModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h1>Upload the Student's Photo</h1>
    <form action="http://127.0.0.1:3000/getFaces" method="post" enctype="multipart/form-data">
    <input type="file" name="photo" id="photo" accept="image/*" required>
    <input type="hidden" name="returnURL" value="localhost/yibs/results/index.php?page=new_student"><br>
  	<button class="btn btn-flat  bg-gradient-primary mx-2">Upload</button>
    </form>
  </div>
</div>

