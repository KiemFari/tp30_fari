<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
 integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        </nav>
     -->
    <!-- </header> -->
    
    <section id="banfora">
        <h1>Banfora la ville acceuillante</h1>
        <p>Banfora une ville tres grandiose qui englobe les cascades un endroit paradisiaque inscrit dans le patrimoine de l'UNESCO un endroit qui attire plein de touriste nationaux et internationaux chaque années </p>
    </section>
    <div id="center">
    <section id="bienvenue">
<marquee behavior=""  direction="">Bienvenue à Banfora la ville de vos réves</marquee>
<div>
    <div id="chute">
<div><img src="./chute.jpg" alt="">
    <h4>chute d'eau dans les cascades</h4></div>
   <div> <img src="./espace.jpg" alt="">
<h4>Espace monumentale</h4></div>

   <div> <img src="hotel.jpg" alt="">
<h4>hotel de la  plce a banfora</h4></div>
    </div>


    <div id="chute">
    <div> <img src="./masqu.jpg" alt="">
<h4>les masques de la ville</h4></div>
    <div> <img src="./mont1.jpg" alt="">
<h4>les monts touristiques</h4></div>
    <div> <img src="./mont.jpg" alt="">
<h4>espaces montagnes </h4></div>
    </div>
</div>
</section> 
    <section id="contact">
        <h2>On y va ????????</h2>
        <p>Qu'attendez-vous pour profiter de vacances exceptionnelles à un prix exceptionnel? Envoyez-nous 
            votre demande par mail au formulaire ci-dessous et nous vous renverrons un devis 
       <strong>gratuit</strong> sous 48h.</p>
       <form action="mailto:exemple@exemple.com" method="post" enctype="text/plain">
        <label for="nom">Votre nom et prénom :</label>
        <input type="text" id="nom" name=" Votre nom" required>
        <label for="email">Votre email ici :</label>
        <input type="email" id="email" name=" Votre email" required>
        <label for="depart">Votre lieu de résidence :</label>
        <input type="text" id="depart" name=" Votre lieu de départ" required>
        <label for="destination">Destination souhaitée :</label>
        <input type="text" id="email" name=" Votre destination souhaitée" required>
        <label for="durée">Durée du séjour(en nombre de nuits) :</label>
        <input type="number" min="0" max="100" id="durée" name="Durée du séjour(en nombre de nuits)" required>
        
        <button type="submit">Envoyer !</button>
        <p>*Vous serez redirigé vers votre messagerie . <br> Il vous suffira d'envoyer le mail 
        automatiquement crée *</p>
      
        </form>
       
    </section>
   
    </main>
</div> 

<!-- lier footer -->
<?php include ("footer.php") ?>
</body>

</html>