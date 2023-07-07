<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">

	<title>AdminHub</title>
</head>
<body>


	<!-- SIDEBAR -->
    @include('layouts.navbar')
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>



        <div class="table-data">
  <div class="order">
    <form action="{{ route('epargnecredit.store') }}" method="post">
      <select name="type_epargne" id="type_epargne">
        <option value="epargne quotidienne">épargne quotidienne</option>
        <option value="épargne hebdo">épargne hebdo</option>
      </select>
      <select name="mode_de_contribution" id="mode_de_contribution">
        <option value="trimestriel">trimestriel</option>
        <option value="semestre">semestre</option>
        <option value="annuel">annuel</option>
      </select>

      <input type="text" placeholder="duree" name="duree">
      <input type="text" placeholder="montant du gain" name="montant_du_gain">
      <input type="text" placeholder="montant des interet" name="montant_des_interet">


      <select name="montant_de_la_contribution" id="montant_de_la_contribution">
        <!-- Options par défaut -->
        <option value="1000">1000</option>
        <option value="2500">2500</option>
        <option value="5000">5000</option>
      </select>
       <button>enegistre</button>
    </form>
  </div>
</div>

<script>
  const modeDeContributionSelect = document.getElementById('mode_de_contribution');
  const montantDeLaContributionSelect = document.getElementById('montant_de_la_contribution');

  // Gérer l'événement de changement du mode de contribution
  modeDeContributionSelect.addEventListener('change', () => {
    const selectedMode = modeDeContributionSelect.value;

    // Vider le menu déroulant des montants de contribution
    montantDeLaContributionSelect.innerHTML = '';

    // Ajouter les options en fonction du mode de contribution sélectionné
    if (selectedMode === 'trimestriel') {
      montantDeLaContributionSelect.innerHTML += `
        <option value="10000">10000</option>
        <option value="25000">25000</option>
        <option value="50000">50000</option>
      `;
    } else if (selectedMode === 'semestre') {
      montantDeLaContributionSelect.innerHTML += `
        <option value="100000">100000</option>
        <option value="150000">150000</option>
        <option value="2500000">2500000</option>
      `;
    } else if (selectedMode === 'annuel') {
      montantDeLaContributionSelect.innerHTML += `
        <option value="200000">200000</option>
        <option value="300000">300000</option>
        <option value="5000000">5000000</option>
      `;
    }
  });
</script>

		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	<script src="script.js"></script>
</body>
</html>
