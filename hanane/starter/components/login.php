<?php 
    include './components/header.php';
    include './components/navbar.php';
?>
<!-- <div class="col-sm-1"></div> -->
    <div class="col-sm-4" style="margin-top:160px;">
        <img src="./assets/img/cvd19.png" alt="covid" style="margin-left:23%">
        <p style="width:80%;margin-left:15%" class="text-white text-justify">
            Distanciation sanitaire, aménagement des espaces, 
            protections personnelles,  désinfection renforcée, 
            règles strictes d'utilisation des équipements...
        </p>
        <p style="width:80%;margin-left:15%" class="text-white text-justify">
            Nous nous engageons à mettre en oeuvre toutes les 
            règles sanitaires nécessaires pour faire de nos 
            clubs des lieux de vie sains et protégés pour 
            rebooster tes défenses immunitaires dès notre 
            réouverture.
        </p>
    </div>
    <!-- <div class="col-sm-1"></div> -->
    <div class="col-sm-4" style="margin-top:120px; background-color:;">
        <!-- <div class="container"> -->
        <form method="POST" action="../starter/agenda.php" class="container" style="background-color:#FDD615;">
            <div style="background-color:;">
                <h2 class="text-center font-weight-bold" style="background-color: #FDD615; color:#000000">Login</h2>
                <div class="form-group" style="margin-top:30px">
                    <label for="email" name="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="pwd" name="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
                </div>
                <div class="form-group" style="background-color:">
                    <p class="text-success"><ins>Si vous n'avez pas de compte, cliquer sur s'inscrire pour le crée.</ins></p>
                    <button type="submit" name="login" class="btn btn-default btn-warning text-primary m-2 pl-3 float-right" 
                    id="" > <a href="" class="text-decoration-none text-primary"> Login </a></button>
                    <button type="submit" name="inscrire" class="btn btn-default btn-warning text-primary m-2 pl-3 float-right" 
                    id="" > <a href="./../starter/inscription.php" class="text-decoration-none text-primary"> s'inscrire </button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-sm-4" style="margin-top:160px; ">
        <h5 class=" text-primary text-justify" style="width:80%">« Le plus difficile c’est de se décider à agir, le reste n’est que de la ténacité. » Amelia Earhart, aviatrice américaine.</h5><br>
        <h5 class="text-warning text-justify" style="width:80%">« Si vous n’avez pas confiance, vous trouverez toujours un moyen de ne pas gagner. » Carl Lewis.</h5><br>
        <h5 class="text-secondary text-justify" style="width:80%">« Vous devez attendre des choses de vous-même avant de pouvoir les faire. », Michael Jordan</h5>
    </div>
    <div class="col-sm-1"></div>


<?php 
    include './components/footer.php';
?>