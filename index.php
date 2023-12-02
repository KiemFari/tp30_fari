<?php
  session_start();
  session_destroy();
  if( isset($_SESSION['id_user']) && !empty($_SESSION['id_user']) ){

    header("location:connexion.php");
    exit;

}else{
      
 } 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
 integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
   rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">
    <title>Site touristique</title>
</head>
<body>
<?php include ("nav.php") ?>
<?php include ("fari.php") ?>
    <!-- <header> -->
        <!-- <nav>
            <ul>
                <li><a href="Acceuil.php">Acceuil</a></li>
                <li><a href="Service.php">Service</a></li>
                <li><a href="Galerie.php">Galerie culturelle</a></li>
                <li><a href="Contact.php">Contacter</a></li>
            </ul>
            <a href="" class="btn-reservation">Visiter Maintenant</a>
        </nav> -->
    
    <!-- </header> -->
<!-- ------acceuil section --------->
<section id="home">
    <h1>Nous Suivre</h1> <br><br><br>
    <h4>Nous avons des sites touristiques à vous proposez durant votre visite au burkina dans chacune des trois grandes villes du Burkina faso <br><br><br> <strong>OUAGADOUGOU</strong> <strong>BOBO-DIOULASSO</strong> <strong>BANFORA</strong>  </h4> <br><br><br>
   
          <a href="" class="btn-reservation home-btn">Visiter Maintenant</a>

    <div class="find_trip">
<form action="">
    <div>
        <label for="">Region</label>
        <input type="text" placeholder="Entrez une region">
    </div>
    <div>
        <label for="">Ville</label>
        <input type="text" placeholder="Entrez la ville">
    </div>
    <div>
        <label for="">le site touristique</label>
        <input type="text" placeholder="Entrez le site ">
    </div>
    <input type="submit" value="voir">
</form>
    </div>
</section>
<!-- section tout -->
<h1>Les trois grandes villes du Burkina faso</h1>

 <div class="row row-cols-1 row-cols-md-3 g-4">
 <?php $reponse=$bdd->query("SELECT * FROM farid");
      while($donnees=$reponse->fetch()){
        ?> 
  <div class="col">
    <div class="card h-100">
      <img src="<?php echo $donnees['photo'];?> " alt="">
      <div class="card-body">
        <h5><?php echo $donnees['titre'];?></h5>
        <p><?php echo $donnees['texte'];?></p>
      </div>
      <div class="">
      <button><a href="ouaga.php">Cliquez ici pour plus de details</a></button>
       
      </div>
    </div>
   
  </div>
  <?php }?> 
    <!-- <img src="ouaga1.jpg" class="card-img-top" alt="..."> -->
   <!-- <h5 class="card-title">Ouagadougou</h5>
        <p class="card-text">This is a wider card with supporting text
           below as a natural lead-in to additional content. 
           This content is a little bit longer.</p> -->
 <!--  <div class="col">
    <div class="card h-100">
      <img src="mosque.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Bobo dioulasso</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="">
      <button><a href="Bobo.php">Cliquez ici pour plus de details</a></button>
        
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="banfora1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Banfora</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="">
        <button><a href="Banfora.php">Cliquez ici pour plus de details</a></button>
       
      </div>
    </div>
  </div>
</div>
  -->
 <!-- <h1 class="title">OUAGADOUGOU</h1>
 <h1 class="title">Bobo dioulasso</h1>
 <h1 class="title">Banfora</h1>  -->
<section class="ouaga1">

<?php $reponse=$bdd->query("SELECT * FROM faridat");
      while($donnees=$reponse->fetch()){
        ?> 
    <div class="img-desc">
        <div class="left">
<img src="<?php echo $donnees['photo'];?> "  alt=""></div>
<div class="right">
<h4><?php echo $donnees['titre'];?> </h4>
<p><?php echo $donnees['texte'];?> </p>
</div>
</div>
<?php }?>
</section>

            <!-- <img src="loumbila.jpg"  >
        
    </div>
<div class="right">
<h3>capitale politique</h3>
<p>En 1447, la ville devient capitale de l'Mossi. Les Morho Naba (les rois Mossi) la choisiront comme lieu de résidence en 1681.
     Beaucoup de quartiers se créent alors autour du palais, et la ville s'étend.
     Elle devient capitale de la Haute-Volta (l'ancien nom du Burkina Faso) en 1960 lors de l'indépendance.</p>
     <a href="">Lire plus</a>
    </div>
</div>
<h1 class="title">Bobo dioulasso</h1>
<section class="ouaga1">
   
    <div class="img-desc">
        <div class="left">
            <img src="mosque.jpg"  >
    </div>
<div class="right">
<h3>capitale economique</h3>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae,
     ut culpa a officiis ad eius eum ratione veniam accusamus adipisci?
     Qui veritatis corrupti officia deleniti, veniam quis iusto facere non.</p>
     <a href="">Lire plus</a>
    </div>
</div>
<h1 class="title">Banfora</h1>
<section class="ouaga1">
   
    <div class="img-desc">
        <div class="left">
            <img src="banfora1.jpg"  >
        
    </div>
<div class="right">
<h3>Banfora</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
     Deserunt impedit, explicabo praesentium sunt consequatur deleniti repudiandae,
     quis incidunt officia ab ut minus quae odit officiis amet voluptate nisi nihil eos.</p>
     <a href="">Lire plus</a>
    </div>
</div>
 

</section> -->

<!-- lier footer -->
<?php include ("footer.php")?>
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
 
</body>
</html>