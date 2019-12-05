<!-- Header  -->

<?php
 
$bdd = new PDO('mysql:host=localhost;dbname=Profile;charset=utf8','root','password');
    
    $data=[
        ":Nickname" => $_POST['Nickname'],
        ':Email' => $_POST['Email'],
        ':nutzer' => $_POST['nutzer'],
        ':mdp' => $_POST['mdp'],
        /*$datetrans = strtotime($_POST['Birthday']);
        $Birthday=date('Y-m-d H:i:s', $daytrans);*/
        ':Gender' => $_POST['Gender'],
        ':InterestIn' => $_POST['InterestIn'],
        //$You = ($_POST['You']);
        //':Hobby' => $_POST['Hobby']
    ];

/*if(isset($_POST['Nickname']) AND isset($_POST['Email']) AND isset($_POST['nutzer']) AND isset($_POST['mdp']) AND isset($_POST['Gen der']) AND isset($_POST['InterestIn']) AND isset($_POST['Hobby'])) {   
if(strlen($pseudo) >= 8) {*/
$ins=$bdd->prepare('INSERT INTO users (Nickname, Email, nutzer, mdp, Gender, InterestIn) VALUES (:Nickname,:Email,:nutzer,:mdp,:Gender,:InterestIn)');
    
    /*INSERT INTO users (Nickname, Email, nutzer, mdp, Birthday, Gender, InterestIn, You, Hobby) VALUES ('nina','hh@hh.hh','hello','hellohello','1999-05-08','male','male','jkhglhhoihhi pupou','swimmig');*/
    
    
    
$ins->execute($data);

//}
//}
?>
 <form method="post" method='profile.php'>  <!--send option-->
  Nickname:<input type="text" name="Nickname"><br>
  Name:<input type="text" name="nutzer"><br>
  E-mail:<input type="email" name="Email" autocomplete="off"><br>
  Password:<input type="password" name="mdp"></br>
  <!--Birthday:<input type="date" name="Birthday"></br>-->
  Gender:<input type="radio" name="Gender" value="male"> Male
         <input type="radio" name="Gender" value="female"> Female
         <input type="radio" name="Gender" value="neutral"> Neutral</br>
  Intersted In:<input type="radio" name="InterestIn" value="male"> Male
               <input type="radio" name="InterestIn" value="female"> Female
               <input type="radio" name="InterestIn" value="both"> Both</br>
  <!--Hobbys:<select name="Hobby">
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
-->
  <input type="submit">
</form>




