<!-- Header  -->
<?php 
require 'connection.php';
?>

 <form action="connection.php" method="post">  <!--send option-->
  Nickname:<input type="text" name="Nickname"><br>
  Name:<input type="text" name="User"><br>
  E-mail:<input type="email" name="Email" autocomplete="off"><br>
  Password:<input type="password" name="Password"></br>
  Birthday:<input type="date" name="Birthday"></br>
  Gender:<input type="radio" name="Gender" value="male" checked> Male
         <input type="radio" name="Gender" value="female"> Female
         <input type="radio" name="Gender" value="other"> Neutral</br>
  Intersted In:<input type="radio" name="InterstIn" value="male" checked> Male
               <input type="radio" name="InterstIn" value="female"> Female
               <input type="radio" name="InterstIn" value="other"> Both</br>
  Hobbys:<select name="Hobby">
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
  About Yourself:<textarea form="form_id" name="$Yourself"></textarea></br>  
  <input type="submit">
</form>

