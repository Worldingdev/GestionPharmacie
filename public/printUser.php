<?php
include("header.php");
?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Affichage de tous les utilisateurs</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="dashboard.php">Acceuil</a></li>
      <li class="breadcrumb-item">Gestion Utilisateur</li>
      <li class="breadcrumb-item active">Afficher</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Liste des utilisateurs</h5>

                <!-- Table with stripped rows -->
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Nom Utilisateur</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">CIN/NIF</th>
                        <th scope="col">Password crypte</th>
                        <th scope="col">type</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Brandon Jacob</td>
                        <td>Designer</td>
                        <td>28</td>
                        <td>2016-05-25</td>
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