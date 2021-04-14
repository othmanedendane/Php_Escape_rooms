  
<section class="container">
  <header>
    <h1>Mon beau magasin</h1>
    <h2>Catalogue</h2>
  </header>
  <main>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Produit</th>
      <th scope="col">Prix</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Room hard</td>
      <td>25$</td>
      <td><a href="#" class="acheter" data-prix="25">Acheter</a></td>
        <td><a href="#" class="supprimer" data-prix="25">Supprimer</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>room kid</td>
      <td>2.5$</td>
      <td><a href="#" class="acheter" data-prix="2.5">Acheter</a></td>
        <td><a href="#" class="supprimer" data-prix="2.5">Supprimer</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>room family</td>
      <td>600$</td>
      <td><a href="#" class="acheter" data-prix="600">Acheter</a></td>
        <td><a href="#" class="supprimer" data-prix="600">Supprimer</a></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>room standard</td>
      <td>30$</td>
      <td><a href="#" class="acheter" data-prix="30">Acheter</a></td>
        <td><a href="#" class="supprimer" data-prix="30">Supprimer</a></td>
    </tr>
    <tr>
      <td scope="row"></th>
      <td><div>Total HTVA:</div>
      <div>TVA:</div>
      <div>Total TVAc:</div>
      </td>
      <td>
        <div><span id="htva" >0</span> $</div>
        <div><span id="tva" >0</span> $</div>
        <div><span id="tvac">0</span> $</div>
      </td>
      <td></td>
    </tr>
  </tbody>
</table>
  </main>
</section>

<script>
    let btnAchats = document.querySelectorAll(".acheter");
let htva = document.getElementById("htva");
let tva = document.getElementById("tva");
let tvaC = document.getElementById("tvac");


for (let btnAchat of btnAchats) {
  btnAchat.addEventListener("click",function() {
    let prix = this.parentElement.previousElementSibling.innerHTML;
    prix = prix.replace('$','');
    htva.innerHTML = Number(htva.innerHTML) + Number(prix);
    tva.innerHTML =(Number(tva.innerHTML) + Number(htva.innerHTML) * 21/100).toFixed(2);
    tvaC.innerHTML = (Number(tva.innerHTML) + Number(htva.innerHTML)).toFixed(2);
  });
}
    
    
    
    
    
    
    
    
    </script>


<script>
    let btnsupp = document.querySelectorAll(".supprimer");
let htva = document.getElementById("htva");
let tva = document.getElementById("tva");
let tvaC = document.getElementById("tvac");


for (let btnsupp of btnsupp) {
  btnsupp.addEventListener("click",function() {
    let prix = this.parentElement.previousElementSibling.innerHTML;
    prix = prix.replace('$','');
    htva.innerHTML = Number(htva.innerHTML) - Number(prix);
    tva.innerHTML =(Number(tva.innerHTML) - Number(htva.innerHTML) * 21/100).toFixed(2);
    tvaC.innerHTML = (Number(tva.innerHTML) - Number(htva.innerHTML)).toFixed(2);
  });
}
    </script>