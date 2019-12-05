

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
About Yourself:<textarea rows="10" cols="60" name="You" placeholder="your text"><?php echo $You;?></textarea></br></br>
 
  <?php
	echo '<select name="year">';
	  echo '<option></option>';
		for($i = date('Y'); $i >= date('Y', strtotime('-100 years')); $i--){
		  echo "<option value='$i'>$i</option>";
		} 
	echo '</select>/';
	echo '<select name="month">';
		echo '<option></option>';
		for($i = 1; $i <= 12; $i++){
		  $i = str_pad($i, 2, 0, STR_PAD_LEFT);
			echo "<option value='$i'>$i</option>";
		}
	echo '</select>/';
	echo '<select name="day">';
	  echo '<option></option>';
		for($i = 1; $i <= 31; $i++){
		  $i = str_pad($i, 2, 0, STR_PAD_LEFT);
			echo "<option value='$i'>$i</option>";
		}
	echo '</select>';
?>



<?php
        $bdd = new PDO('mysql:host=localhost;dbname=Profile;charset=utf8','root','password');


            $data=[
                ':You'=> trim($_POST['You']),
                ':Hobby' => $_POST['Hobby'],
                ':Birthday' => $_POST['year'],$_POST['month'],$_POST['day'],
                ];


        $ins=$bdd->prepare('INSERT INTO Infos(You ,Hobby, Birthday) VALUE (:You, :Hobby, :Birthday)');  

       
        $ins->execute($data);


?>

</br></br>
    <input type="submit">





</form>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select Image File to Upload:
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
</form>
