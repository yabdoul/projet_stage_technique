<?php
$d ="hello"  ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img id="blob-top" src="./image/blob (4).svg" alt="">
    <div class="navbar">
        <div class="left-navbar">
            <a class="link" href="#" id="home"><i class="fas fa-home"></i> home</a>
            <a class="link" href="#"><i class="fas fa-id-card"></i> fournisseurs</a>
            <a class="link" href="#"><i class="fas fa-calculator"></i> calcule</a>
        </div>


        <div class="right-navbar">
            <a href="#" class="profilepic"> <img src="./image/emoji.png" alt=""></a>
            <a href="#" class="profilepic"> <i class="fas fa-sign-out-alt"></i></a>
        </div>
    </div>

    <div class="history">
        <i class="fas fa-history"></i>
        <a href="#" class="history-link">home</a>
        |
        <a href="#" class="history-link"> ajouter un fournisseurs
        </a>

    </div>
<div style="display: none;" class="dashboard">
    <div class="title">
        Bilan general
    </div>
    <div class="cards-container">
        <div class="card">
            <div class="card-title">
                fournisseurs
            </div>
            <div class="card-number">
                100
            </div>
        </div>
        <div class="card">
            <div class="card-title">
                séléctioné
            </div>
            <div class="card-number">
                100
            </div>
        </div>
        <div class="card">
            <div class="card-title">
                favoris
            </div>
            <div class="card-number">
                100
            </div>
        </div>
    </div>

    <div class="title">
        Accés rapide :
    </div>
    <div class="cards-container speed-container" style="">
        <a href="#" class="speed-link">
            <img src="./image/add-button.png" alt="" id="add">
            Ajouter un fournisseur
        </a>
        <a href="#" class="speed-link">
            <img src="./image/ideas.png" alt="">
            Choix d'un fournisseur
        </a>
        <a href="#" class="speed-link">
            <img src="./image/favourite.png" alt="">
            Liste des favoris
        </a>
    </div>
    </div>
    <section class="testimonial py-5" id="testimonial" style="display:none  ; ">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 py-5 bg-primary text-white text-center ">
                    <div class=" ">
                        <div class="card-body">
                            <img src="http://www.ansonika.com/mavia/img/registration_bg.svg" style="width:30%">
                            <h2 class="py-3">Ajouter un fournisseur a la base de données </h2>
                            <p>veuillez respecter les champs de formulaire pour que notre calcule du meilleur fournisseur soit exact
    
    </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 py-5 border">
                    <h4 class="pb-4">veuillez tapper les informations du fournisseur</h4>
                    <form action="add.php" method="GET">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <input id="Full Name" name="name" placeholder="nom du fournisseur" class="form-control" type="text">
                            </div>
                            <div class="form-group col-md-6">
                              <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>
                          </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input id="Mobile No." name="c_trans" placeholder="cout de transport" class="form-control" required="required" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <input id="Mobile No." name="c_achat" placeholder="cout d'achat par unité" class="form-control" required="required" type="text">
                            </div>
                            
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input id="Mobile No." name="mode" placeholder="mode de transport" class="form-control" required="required" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <input id="Mobile No." name="num" placeholder="Mobile No." class="form-control" required="required" type="text">
                            </div>
                            
                        </div>
                        <div class="form-row">
                            <h4 class="pb-4">Evaluation de fournisseur</h4>
                            
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input id="Full name" name="localisation" placeholder="localisation/10" class="form-control" type="text">
                              </div> 
                              <div class="form-group col-md-6">
                                <input id="Full name" name="cout" placeholder="cout/10" class="form-control" type="text">
                              </div> 

                            
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input id="Full name" name="qualite" placeholder="qualite de transport/10" class="form-control" type="text">
                              </div> 
                              <div class="form-group col-md-6">
                                <input id="Full name" name="reputation" placeholder="réputation/10" class="form-control" type="text">
                              </div> 

                            
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                      <label class="form-check-label" for="invalidCheck2">
                                        <small>By clicking Submit, you agree to our Terms & Conditions, Visitor Agreement and Privacy Policy.</small>
                                      </label>
                                    </div>
                                  </div>
                        
                              </div>
                        </div>
                        
                        <div class="form-row">
                            <button type="submit"  name="submit" class="btn btn-danger" id="btn">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<div>
</div>
<div class="verfied" style="height:300px ;  width:150px;ackground:green ;display:none;  ">
    <img src="done.svg" alt="" style="position:absolute  ; height:30% ; width:30% ; left:35% ;top:30% ; ">
    <p style="position:absolute ; left:37% ; top : 60% ;font-size:35px ;">fournisseur enregistré</p>
</div>
<div class="list" style="display:none;">
    <form action="">
<input type="text" style="position: absolute;
left: 370px;
height:43px ; 
width: 323px; 
bottom:71% ; 
border:none ; 

">
<input type="submit" value="" style="position:absolute ; left: 685px;top:149px ;width:56px ; height: 42px;background:#08BDBA ;border:none ;bottom:49px ;  ">
</form>
<form action="" style="height: 383px;width:303px ;background:#6284DC ;position:absolute ; left :383px ; top:209px ;">

</form>
</div>
<h1 style="">classment des fournisseurs</h1>
<div class="calcule" style="height:70% ; width:80% ; margin-top:5% ;display:flex ;margin-left:10% ;">
<div class="card" style="height:360px ; width : 214px ; background:#EA1717 ;">
<div style="position:relative ; bottom:25% ;">
    <img src="star.png" alt="" class="stars" style="height: 49px; width:60px ;"> 
    <img src="star.png" alt="" class="stars" style="height: 49px; width:60px ;">
    <img src="star.png" alt="" class="stars" style="height: 49px; width:60px ;">
   
</div>
<div class="card-title">
                fournisseurs
            </div>
            
</div>
<div class="card" style="height:360px ; width : 150px ;">

<div style="position:relative ; bottom:25% ;">
    <img src="star.png" alt="" class="stars" style="height: 49px; width:60px ;"> 
    <img src="star.png" alt="" class="stars" style="height: 49px; width:60px ;">
  
</div>
<div class="card-title">
                fournisseurs
            </div>
           
</div>
<div class="card" style="height:360px ; width : 150px ;">
<div style="position:relative ; bottom:25% ;">
    <img src="star.png" alt="" class="stars" style="height: 49px; width:60px ;"> 
  
</div>
<div class="card-title">
                <?php 
                
                echo $d ; 
                
                ?>
            </div>
           
</div>

</div>
<script >
 k
    </script>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
