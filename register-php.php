<?php
    require_once 'config.php';

    if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['pseudo']) && !empty($_POST['confirm_password'])) {
        
        $email = htmlspecialchars($_POST['email']);
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $password = htmlspecialchars($_POST['password']);
        $confirm_password = htmlspecialchars($_POST['confirm_password']);
        

        $check = $bdd->prepare('SELECT pseudo, email, password FROM users WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        if ($row == 0) {

            if (strlen($pseudo)<= 255 && strlen($email) <= 255 && strlen($password)<=255 ) {
    
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    
                    if ($password == $confirm_password) {

                        $password = hash('sha256', $password);
                        $insert = $bdd->prepare('INSERT INTO users( pseudo, email, password) VALUES(:pseudo, :email, :password)');
                        $insert->execute(array(
                            'pseudo' => $pseudo,
                            'email' => $email,
                            'password' => $password,   
                        ));
                        header('Location: login.php?error=Your account has been created successfully');
                        exit();

                    }else header('Location: register.php?reg_err=passwords do not match');
                }else header('Location: register.php?reg_err=incorrect email syntax');  
            }else header('Location: register.php?reg_err=pseudo, password or email is too long (255 characters max)');
        }else header('Location: register.php?reg_err=The email is taken try another');
    }else header('Location: register.php?reg_err=Please complete all sections');

?>
