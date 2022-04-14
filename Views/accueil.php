<?php

include "views/header.php" ;
include "views/navbar.php" ;
include "views/top.php" ;


?>
<div class="text-center">
    <div class="headline">
        <br><br>
        <h1 style=" color: #41E2FF;">Bienvenue sur HARIBO</h>
    </div>
        <br>
    <div class="tagline">
        <br><br><br><br>
        <h2 style="color: #41E2FF;">Pour voir notre magnifiquie liste de bonbons, <span class="punchline">cliquer sur le logo HARIBO.</span></h>
    </div>
    <div class="sheesh">
        <br><br><br><br>
        <h3 style="color: #41E2FF;"> Sheeeeeeeeeeeeesh. </h3>
    </div>
</div>



<br><br><br><br><br><br>

<script>
	ScrollReveal().reveal('.headline')
	ScrollReveal().reveal('.tagline', { delay: 500 })
	ScrollReveal().reveal('.punchline', { delay: 2000 })
    ScrollReveal().reveal('.sheesh', {delay: 4000})
</script>

<?php
include "views/footer.php" ;
?>

  
