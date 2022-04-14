
<?php

include "views/header.php" ;
include "views/navbar.php" ;
include "views/top.php" ;




foreach($lesProduits as $produit){
echo "

    <div class='card tagline' style='width: 18rem; background-color: #1EB5D6;'> 
        <img src='Views/".$produit->getPhoto()."'>
            <div class='card-body'>
                <h4 class='card-title text-white'>".$produit->getNom()."</h4>
                <h6 class='card-text text-white'><b>".$produit->getPrix()." € </b></h6>
                <a href='#' class='btn btn-light'><i class='fas fa-cart-plus'></i></a>
            </div>
    </div>
  
<script>
	ScrollReveal().reveal('.headline')
	ScrollReveal().reveal('.tagline', { delay: 250 })
</script>"
;} 


include "views/footer.php" ;
?>