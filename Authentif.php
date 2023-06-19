<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authenrification</title>
    <link rel="stylesheet" href="Bootstrap files/css/bootstrap.min.css">
    <script>
            // JavaScript code
            function redirectToNewPage() {
                // Replace "new_page.html" with the desired URL or file path of the new page
                window.location.href = "creer_compte.php";
            }
    </script>
    <?php
        session_start();
        $host='localhost';
        $dbname='projet_php';
        $dbname='parc2';
        $username='root';
        $password='';
    
        try{
            $pdo=new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
            echo 'Connexion réussie à la base de données';
        } catch(PDOException $e) {
        echo 'Erreur de connexion à la base de données : '.$e->getMessage();
        }
    
    ?>
</head>
<body>

    <div class="container">
    <div class="row flex-column flex-sm-row" id="Container">
            <div class="col-sm-7">
           
                <div class="container">
                <div class="row">
                    <h4 id="content" class="text-center ">CREEZ VOTRE COMPTE ET PROFITEZ DE TOUT L'UNIVERS DU PARC!</h4>
                </div>
                <br>
                <div class="row" id="ind">
                    <p>La création de votre compte vous permettra de:</p>
                    <ul>
                        <li>Gérer vos aventures</li>
                        <li>Consulter vos demandes</li>
                        <li>Gérer vos informations personnelles</li>
                        <li>Etre informé de toute nouveauté</li>
                    </ul>
                </div>
                <br>
                <div class="row d-flex justify-content-center align-items-center">
                    <button class="btn" id="bouton" onclick="redirectToNewPage()">Creer mon compte</button>
                </div>
                </div> 
       

            </div>

            <div class="col-sm-5">
                <form action="POST"></form>
                <h3 id="content">DEJA UN COMPTE?</h3>
                <br><br>
                <div class="row">
                    <p>Connectez-vous avec votre compte client ou employé:</p>
                </div>
                <div class="container">
                    <form method="POST" autocomplete="off">
                <div class="row" id="ids">
                    <input type="text" name="email" placeholder="Adresse e-mail" id="in1" required> <br><br><br><br>
                    <input type="password" name="mdp" placeholder="Mot de passe" id="in2" required>   <br><br>
                </div>
                <br>
                <div class="row" id="ind">

                </div>
                <div class="row d-flex justify-content-center align-items-center">
                    <button class="btn" id="bouton" type="submit">Me connecter</button>
                </div>
                </form>
                <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $email = $_POST['email'];
                        $mdp = $_POST['mdp'];

                        // Vérifier dans la table "visiteur"
                        $visiteurQuery= $pdo->prepare("SELECT * FROM visiteur WHERE email_visit = ? AND mdp_visit = ?");
                        $visiteurQuery->execute([$email, $mdp]);
                        $visiteur = $visiteurQuery->fetch(PDO::FETCH_ASSOC);

                        if($visiteur){
                            //Informations de connexion valides pour un visiteur
                            $_SESSION['visit_id'] = $visiteur['id_visit'];
                            $_SESSION['user_type'] = 'visiteur';

                                 // Récupérer le nom d'utilisateur depuis la table "visiteur"
                                $usernameQuery = $pdo->prepare("SELECT prenom_visit FROM visiteur WHERE id_visit = ?");
                                $usernameQuery->execute([$visiteur['id_visit']]);
                                $usernameResult = $usernameQuery->fetch(PDO::FETCH_ASSOC);

                                if ($usernameResult) {
                                    $_SESSION['username'] = $usernameResult['prenom_visit'];
                                }

                                // Récupérer l'email d'utilisateur depuis la table "visiteur"
                                $useremailQuery = $pdo->prepare("SELECT email_visit FROM visiteur WHERE id_visit = ?");
                                $useremailQuery->execute([$visiteur['id_visit']]);
                                $useremailResult = $useremailQuery->fetch(PDO::FETCH_ASSOC);

                                if ($useremailResult) {
                                    $_SESSION['useremail'] = $useremailResult['email_visit'];
                                }

                            // Rediriger vers la page appropriée pour le visiteur
                            header('Location: billets.php');
                            exit;

                        }
                            // Vérifier dans la table "employe"
                            $employeQuery = $pdo->prepare("SELECT * FROM employe WHERE email_emp = ? AND mdp_emp = ?");
                            $employeQuery->execute([$email, $mdp]);
                            $employe = $employeQuery->fetch(PDO::FETCH_ASSOC);

                            if ($employe) {
                                // Informations de connexion valides pour un employé
                                $_SESSION['emp_id'] = $employe['id_emp'];
                                $_SESSION['user_type'] = 'employe';

        
                             // Récupérer le nom d'utilisateur depuis la table "employe"
                             $usernameQuery2 = $pdo->prepare("SELECT nom_emp FROM employe WHERE id_emp = ?");
                             $usernameQuery2->execute([$employe['id_emp']]);
                             $usernameResult2 = $usernameQuery2->fetch(PDO::FETCH_ASSOC);

                             if ($usernameResult2) {
                                $_SESSION['username2'] = $usernameResult2['nom_emp'];
                             }
                                // Rediriger vers la page appropriée pour l'employé
                                header('Location: employe.php');
                                exit;
                            }
                                // Les informations de connexion sont incorrectes
                                echo 'Identifiants invalides';
                            }
                ?>
                </div> 
            </div>
        </div>
        <br>

        <br>
</form>
    </div>

    <style>
        #Container{
            border-radius: 30px;
            height: 50%;
            width:80%;
            background-color: rgb(248, 248, 248);
            padding: 40px;
            margin: 80px;
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);

        }
        #content{
            font-weight: 700;
        }
        #ind{
            text-indent: 40px;
        }
        li{
            font-weight: 500;
            margin-bottom: 20px;
        }
        #bouton{
            width: 100%;
            background-color: purple;
            color: white;
            border-radius: 10px;
            font-weight: 200;
            font-size: 20px;
        }

        #ids{
            padding-top: 24px;
        }
        #in1,#in2{
            width: 100%;
            height: 40px;
            border-color: white;
            border-radius: 10px;
        }
    </style>
</body>
</html>