<?php
session_start();

$titre = "Inscription";
$css = "design.css";
include("./start.php");

already_connected();
?>    

<body>
    
    <div class="container">
        <form method="post" class="form-signin" action="inscription.php">
            <h1>Inscription</h1>
            <input type="email" id="email" class="form-control" placeholder="Email" required autofocus/>

            <input type="password" id="passwd" class="form-control" placeholder="Mot de passe" required/>
            <input type="password" id="passwd_confirm" class="form-control" placeholder="Confirmez le mot de passe" required/>
            
            <select id="promo" class="form-control form-control-lg">
                    <option selected>Promotion</option>
                    <?php
                        $promos = array("Josephson", "Meitner", "Jeanneteau");
                        foreach($promos as $promotion) {
                            echo "<option value=$promotion>$promotion</option>";
                        }
                    ?>
                </select>
                <input type="submit" class="btn btn-primary" value="Envoyer"/>
        </form>
    </div>
</body>