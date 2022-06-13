<?php
    session_start();
    require_once 'config.php';

    if (!empty($_POST['uname'])&& !empty($_POST['password'])) {
        
        $email = htmlspecialchars($_POST['uname']);
        $password = htmlspecialchars($_POST['password']);
        
        $check = $bdd->prepare('SELECT id, pseudo, email, password FROM users WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();
        
        if ($row == 1) {            
            
            function validate($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;  
            }

            $email = validate($_POST['uname']);
            $password = validate($_POST['password']);
            
            
            if (empty($email)){
                header("location: login.php?error=Email is required");
                exit();
            }
            else if (empty($password)){
                header("location: login.php?error=Password is required");
                exit();
            }
            else { 
                        
                $password = hash('sha256', $password);
                if ($data['email'] === $email && $data['password']=== $password) {
                    $_SESSION['email'] = $data['email'];
                    $_SESSION['pseudo'] = $data['pseudo'];
                    $_SESSION['id'] = $data['id'];
                    $_SESSION['password'] = $data['password'];
                    $_SESSION['admin'] = $data['admin'];
                    
                    header("Location: index.php");
                    exit();
                }
                else {
                    header("location: login.php?error=Incorrect password");
                    exit();
                }
            }
        }
        else {
            header('Location: login.php?error=unknown email');
        }
    }
    else {
        header("location: login.php?error=complete all sections");
        exit();
    }    
?>