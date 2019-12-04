<?php
    $bdd = new PDO('mysql:host=localhost;dbname=Profile;charset=utf8','root','!R!s251113');
    
    $data=[
        ":Birthday" => $_POST['Birthday'],
        ':you' => $_POST['you'],
        ':Hobby' => $_POST['Hobby'],
        ':Photo' => $_POST['Photo'],
        /*$datetrans = strtotime($_POST['Birthday']);
        $Birthday=date('Y-m-d H:i:s', $daytrans);*/
       
    ];

$ins=$bdd->prepare('INSERT INTO Infos (Birthday, you, Hobby, Photo) VALUES (:Birthday, :you, :Hobby, :Photo)');
    

$ins->execute($data);

?>

<form method='POST' action='profile.php'>
  Hobbys:<select name="Hobby">
  <option value=""></option>
  <option value="swimming">swimming</option>
  <option value="dancing">dancing</option>
  <option value="Art">Art</option>
  <option value="Cinema">Cinema</option>
  <option value="Literature">Literature</option>
  <option value="Sport">Sport</option>
  <option value="travelling">travelling</option>
  <option value="walking">Walking</option>
  <option value="Animals">Animals</option>
  <option value="Culture">Culture</option> 
  </select></br>
  About Yourself:<textarea form="form_id" name="You" placeholder="your text"> </textarea></br>
  Birthday:<input type="date" name="Birthday"></br>
    <input type="submit">
</form>
<form action='upload.php' method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
