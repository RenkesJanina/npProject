<?php
     $bdd = new PDO('mysql:host=localhost;dbname=Profile;charset=utf8;root;!!R!s251113');
     
    var_dump($_POST['Nickname'],$_POST['Email'],$_POST['User'],$_POST['mdp'],$_POST['Birthday'],$_POST['Gender'],$_POST['InterestIn']);

       /*echo 'Nickname: '.$_POST['Nickname'].'<br/>';
        echo 'Email: '.$_POST['Email'].'<br/>';
        echo 'User: '.$_POST['User'].'<br/>';
        echo 'mdp: '.$_POST['mdp'].'<br/>';
        echo 'Birthdate: '.$_POST['Birthdate'].'<br/>';
        echo 'Gender: '.$_POST['Gender'].'<br/>';
        echo 'InterestIn: '.$_POST['InterestIn'];*/



        if(isset($_POST['Nickname'],$_POST['Email'],$_POST['User'],$_POST['mdp'],$_POST['Birthday'],$_POST['Gender'],$_POST['InterestIn'])) {
        $Nickname = htmlspecialchars($_POST['Nickname']);
        $Email = htmlspecialchars($_POST['Email']);
        $User = htmlspecialchars($_POST['User']);
        $mdp = htmlspecialchars($_POST['mdp']);
        $Birthdate= htmlspecialchars($_POST['Birthday']);
        $Gender = htmlspecialchars($_POST['Gender']);
        $InterestIn = htmlspecialchars($_POST['InterestIn']);
        $Yourself = htmlspecialchars($_POST['Yourself']);
        $Hobby = htmlspecialchars($_POST['Hobby']);
        $Photo = htmlspecialchars($_POST['Photo']);
                if(strlen($pseudo) >= 8) {
                $ins = $bdd->prepare('INSERT INTO users (Nickname, Email, User, mdp, Birthday, Gender, InterestIn, Yourself, Hobby, Photo) VALUES (?,?,?,?,?,?,?,?,?,?));
                $ins->execute;(array($Nickname,$Email,$User, $mdp, $Birthdate, $Gender, $InterestIn, $Yourself, $Hobby, $Photo));
                $c_msg = "<span style=');color:green;'>Account successfully created.</span>";s
                } else {
                $c_msg = "Error: The nick must not be longer than 8 characters";
                }
        } else {
        $c_msg = "Error: All fields must be filled in";
        }
    }
}

}?>