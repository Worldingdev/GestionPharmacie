<?php
include("header.php");
?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Affichage de toutes les ventes</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="dashboard.php">Acceuil</a></li>
      <li class="breadcrumb-item">Gestion Ventes</li>
      <li class="breadcrumb-item active">Afficher</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Liste des ventes</h5>

                <!-- Table with stripped rows -->
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Produit(s)</th>
                        <th scope="col">CLient</th>
                        <th scope="col">Type de Vente</th>
                        <th scope="col">Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Brandon Jacob</td>
                        <td>Designer</td>
                        <td>28</td>
                        <td>2016-05-25</td>
                    </tr>
                    </tbody>
                </table>
                <!-- End Table with stripped rows -->

                </div>
            </div>
        </div>  
    </div>
</section>

</main><!-- End #main -->

<?php
include("footer.php");
?>