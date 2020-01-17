<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Restaurant La Truffe Noire</title>
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="fa/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Yeseva+One|Montserrat:700|Open+Sans:400,600,300' rel='stylesheet' type='text/css'><link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</head>

<body>
<header>
    <div class="wrap">
        <img src="images/logo_truffe.png" width="200" alt="Restaurant La truffe Noire - Reims Champagne">
        <nav>
            <ul>
                <li><a class="js-scrollTo" href="#s_acc">Accueil</a></li>
                <li><a class="js-scrollTo" href="#s_chef">Le Chef</a></li>
                <li><a class="js-scrollTo" href="#s_prod">Les produits</a>
                <li><a class="js-scrollTo" href="#s_menu">La carte</a></li>
                <li><a class="js-scrollTo" href="#s_loc">Nous trouver</a></li>
                <li><a class="js-scrollTo" href="#s_resa">Réservation</a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
        </nav>
    </div>
</header>

<section id="s_acc">
	<div class="wrap">
		<h1>Le bon ingrédient <br>pour le bon plat</h1>
        <a href="#s_resa">Réserver une table</a>
        <a href="#s_menu">Voir le menu</a>
    </div>
</section>

<section id="s_chef">
	<div class="wrap">
    	<div class="demi">
        	<h2>Le bon produit</h2>
            <p>Si vous êtes venu dans l'un de nos restaurants, vous avez vu - et goûté - ce qui fait que nos clients nous sont fidèles.
            Ingrédients frais et cuits pour vous, délicieux gâteaux, muffins, et cafés gourmets : difficile de résister !
            Vennez et vérifier par vous-même! </p>
			<img src="images/chef.png" class="chef">
        </div>
        
        <div class="demi">
        	<img src="images/dish.png" class="plat">
        </div>
    
    </div>
</section>

<section id="s_prod">

	<div class="wrap">
    	<div class="demi">
        	<h2>Les bons ingrédients</h2>
            <p>Nous attachons une importance capitale à la fraicheur de nos ingrédients. Notre chef se rend chaque matin se fournir en produit frais et de saison auprès de producteurs locaux et de confiance.</p>
            <p>N'hésitez pas à vous renseigner sur la provenance de nos produits, nous seront ravis de vous en parler !</p>

            <div id="produits">
                <a data-fancybox="gallery" href="images/01-wheat_XL.jpg" title="Céréales"><img src="images/01-wheat.jpg"></a>
                <a data-fancybox="gallery" href="images/02-spices_XL.jpg"  title="Epices"><img src="images/02-spices.jpg"></a>
                <a data-fancybox="gallery" href="images/03-bread_XL.jpg"  title="Pain"><img src="images/03-bread.jpg"></a>
            </div>
        
        </div>

        </div>
    </div>

</section>

<section id="s_menu">
	<div class="wrap">
    
    	<div class="demi">
        	<h2>Les Entrées</h2>
            
            <h3>THE demi Camembert pané<span>7€00</span></h3>
            <p>Demi camembert panné sur un lit de salade fraîche</p>
            
            <h3>Salade de la truffe noire<span>12€50</span></h3>
            <p>Salade de gésiers à la truffe et aux pommes du jardin.</p>
            
            <h3>Oeufs pochés aux épinards<span>7€00</span></h3>
            <p>Oeufs pochés, épinards et crème de conté.</p>
            
            <h3>Brick de chèvre et magret fumé<span>6€50</span></h3>
            <p>Brick de chèvre et magret fumé frais du jour.</p>
            
            
            <h2>Les Fromages</h2>
            <h3>Les formages de chez "Brice"</h3>
            <p>Classiques ou truffés</p> 
        </div>
        
        <div class="demi">
        	<h2>Les Plats</h2>
            
            <h3>Ris de veaux aux morilles<span>24€00</span></h3>
            <p>Ris de veaux aux morilles, la spécialité du chef !</p>
            
            
            <h3>Le boeuf Wagyu<span>19€00</span></h3>
            <p>Coup de coeur de la truffe, massés à la bière</p>
            
            
           <h3>Tartare de carard à la mangue<span>17€00</span></h3>
           <p>Avec les mangues du jardin.</p>
           
           <h2>Les desserts</h2>
           
           <h3>Moelleux au chocolat<span>6€50</span></h3>
           <p>Tiède !</p>
           
           <h3>Dessert des aventuriers<span>6€50</span></h3>
           <p>Glaces artisanales</p>
           
           <h3>Le café gourmand version "Maman"<span>7€00</span></h3>
           <p>Brownies, île fottante et bisous</p>
        </div>
        
        <div class="retour"></div>
        
    </div>
</section>

<section id="s_loc">
	<div class="wrap">
    	<div class="demi">
            <h2>Nous trouver</h2>
            <p>Notre établissement est situé au 19 rue Denis Papin à Reims. (Bus 4, arret "La truffe"). Vous pourrez vous  garer sans problème dans les petites rues adjacentes.</p>
            <a data-fancybox="gallery" href="images/facade.jpg" class="fancybox facade"><img src="images/facade.jpg" width="400"></a>
		</div>
               
        <button id="btn_plan">Voir le plan</button>
        
        <div id="google_map" style="display:none">
        	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10413.159095018376!2d4.070011722290042!3d49.27090618321955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1451999161396" width="1200" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</section>

<section id="s_resa">

	<div class="wrap">
    	<div class="demi" >
        	<div id="flash">
        		<br>
            </div>
        </div>
        
        <div class="demi">
        	<h2>Faites une réservation</h2>
            <p>N'hésitez pas à nous adresser vos demandes de réservations au moins 48h à l'avance pour nous laisser le temps de vous confirmer.</p>
            
            <form action="#" method="post">
                <fieldset>
                <label for="nom">Nom</label><input type="text" name="nom" id="nom">
                <label for="date">Date</label><input type="date" name="date" id="date">
                <label for="service">Midi <input type="radio" name="sce" id="midi" value="midi"> - <input type="radio" name="sce" id="soir" value="soir"> Soir</label>
                </fieldset>
                
                <fieldset>
                <label for="email">Email</label><input type="email" name="email" id="email">
                <label for="nbr">Nombre de couverts</label><input type="number" name="nbr" id="nbr">
                </fieldset>
                <div class="retour"></div>
                
                <input type="submit" name="submit" id="submit" value="Réserver !">
            </form>
        
        </div>
        <div class="retour"></div>
    </div>

</section>

<footer>

	<div class="wrap">
        <div class="tiers">
            <h4>A propos de nous</h4>
            <p>La Truffe Noire est l'association de deux talents : 
                <span class="preview" id="one"> Sébastien</span> 
                le cuisinier et 
                <span class="preview" id="two">Alexandra</span> 
                la décoratrice.</p>
                <div class="preview-container">                
                    <div class="preview-img" id="imgone" style="display:none; position:fixed; bottom:85px; left:125px;"><img src="images/chef_tooltip.png" /></div>
                    <div class="preview-img" id="imgtwo" style="display:none; position:fixed; bottom:85px; left:275px;"><img src="images/alexandra_tootltip.png" /></div>
                </div>
            </div>
        
        <div class="tiers">
            <h4>Heures d'ouverture</h4>
            <p><strong>Du Lundi au Jeudi :</strong> 11h45 - 23h00</p>
            <p><strong>Vendredi - Samedi : </strong> 11h45 - 00h00</p>
            <p>Fermé le dimanche</p>
        </div>
        
        <div class="tiers">
            <h4>Notre adresse</h4>
            <p>19 Rue Denis Papin</p>
            <p>51100 Reims</p>
        </div>
    </div>
    <div class="retour"></div>
</footer>

<script type="text/javascript" src="js/initialize.js"></script>

</body>
</html>