<?php
require_once "backendphp/config.php";
if(isset($_POST['addpost'])){
    $ptitle=mysqli_real_escape_string($conn,$_POST['post_title']);
    $pcontent=mysqli_real_escape_string($conn,$_POST['post_content']);
    $puser_id=$_SESSION["id"];
    $query="INSERT INTO posts (title,content,user_id) VALUES('$ptitle','$pcontent','$puser_id')";
    $run=mysqli_query($conn,$query);
    if($run==1){
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Article posted</strong>  Posted Your article successfully
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';

    }
    
    $target_dir = "imageuploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $result = "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    $result = "File is not an image.";
    $uploadOk = 0;
    die;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  $result = "Sorry, file already exists.";
  $uploadOk = 0;
  die;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  $result = "Sorry, your file is too large.";
  $uploadOk = 0;
  die;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  $result = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
  die;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  $result = "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    $result = "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    $result = "Sorry, there was an error uploading your file.";
  }
}
}
?>

        <form method="POST" enctype="multipart/form-data">
        <script src="ckeditor/ckeditor.js"></script>
        <div class="col-sm-12">
        <input type="text" class="input-lg" name="post_title" placeholder="Add post title">
           
        </div>
            
             <textarea name="post_content" id="CKEditor 4">
            </textarea>
            <div class="col-sm-12">
                              <label>Upload Post thumbnail</label>

                              <input type="file" class="form-control" name="fileToUpload" accept="image/*" multiple />
                            </div>
            <input type="submit" name="addpost" value="Post" class="btn-success">
            
        </form>
        <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'post_content' );
            </script>
            
        </div>
    </div>