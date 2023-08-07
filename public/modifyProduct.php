<?php
include("header.php");
?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Modifier Produit</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="dashboard.php">Acceuil</a></li>
      <li class="breadcrumb-item">Gestion Produits</li>
      <li class="breadcrumb-item active">Modifier</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-8">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Formulaire de modification</h5>

            <form class="d-flex">
                <div class="col-sm-8">
                    <input class="form-control" type="search" placeholder="Entrer l'Id de l'utilisateur" aria-label="Search">
                </div>
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

          <!-- General Form Elements -->
          <form>
          <div class="row mb-3">
              <label for="inputText" class="col-sm-4 col-form-label">Nom</label>
              <div class="col-sm-10">
                <input type="text" class="form-control">
              </div>
            </div>
            
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-4 col-form-label">Prix</label>
              <div class="col-sm-10">
                <input type="number" class="form-control">
              </div>
            </div>
            
            <div class="row mb-3">
              <label for="inputText" class="col-sm-4 col-form-label"> Type du Produit</label>
              <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example">
                  <option selected>selectionnez le type</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-4 col-form-label">Quantite</label>
              <div class="col-sm-10">
                <input type="number" class="form-control">
              </div>
            </div>
            
            <div class="row mb-10">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-success me-md-2" type="submit">Modifier</button>
                    <button class="btn btn-outline-success" type="reset">Annuler</button>
                </div>
            </div>

          </form><!-- End General Form Elements -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
<?php
include("footer.php");
?>