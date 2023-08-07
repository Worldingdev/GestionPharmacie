<?php
include("header.php");
?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Enregistrer Clients</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="dashboard.php">Acceuil</a></li>
      <li class="breadcrumb-item">Gestion Vente</li>
      <li class="breadcrumb-item active">Enregistrer</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-8">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Formulaire d'enregistrement</h5>

          <!-- General Form Elements -->
          <form>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-4 col-form-label">Produit</label>
              <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example">
                  <option selected>selectionnez le(s) produit(s)</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-4 col-form-label">Id Client</label>
              <div class="col-sm-10">
                <input type="number" class="form-control">
              </div>
            </div>
            
            <fieldset class="row mb-3">
              <legend class="col-form-label col-sm-4 pt-0">Type de vente</legend>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Cash" checked>
                  <label class="form-check-label" for="gridRadios1">
                    Cash
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Credit">
                  <label class="form-check-label" for="gridRadios2">
                    Credit
                  </label>
                </div>
              </div>
            </fieldset>
            
            <div class="row mb-10">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-secondary me-md-2" type="submit">Enregistrer</button>
                    <button class="btn btn-outline-secondary" type="reset">Annuler</button>
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