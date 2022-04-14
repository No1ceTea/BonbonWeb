<body class="min-vh-100 bg-gray0 gray7 ma0 overflow-x-hidden">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php?uc=bonbons&action=liste"><img src="Views/Images/logo-haribo.png" height="56" width="166" alt="..."></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
          <div class="container-fluid">
            <form class="d-flex" method="POST" action='index.php?uc=bonbons&action=recherche'>
              <input class="form-control me-2" type="search" placeholder="Envie de Tagada, Dragibus, Croco" aria-label="Recherche" name="nom">
              <input class="btn btn-outline-success text-white" type="submit" value="Recherche" >
            </form>
          </div>
          <a class="navbar-brand" href="panier.php">
            <span style="font-size: 2em; color: #43AECC;"><i class="fas fa-shopping-basket"></i></a></span>
        </div>
      </nav>
    </body>