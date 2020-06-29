<?php
$bien=$nost=$cata=$gale=$cont=0;
switch (basename($_SERVER['PHP_SELF'])) {
    case "inicio.php":
      $inicio="class='active'";
    break;

    case "geotermia.php":
      $geotermia="class='active'";
    break;

    case "potencial-peruano.php":
      $potencial="class='active'";
    break;

    case "noticias.php":
      $noticias="class='active'";
    break;

    case "contacto.php":
      $contacto="class='active'";
    break;
}
?>

<header id="changeHeader" class="headerSpace col-md-12 offset-lg-1 col-lg-10 offset-xl-1 col-xl-10 np">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-6 col-md-4 col-lg-4 col-xl-6">
      <a href="inicio.php">
        <img id="logoHeader" class="logo-responsive" src="app/img/logo.png" alt="Logo GeoTermia 24/7">
      </a>
      </div>
      <div id="linksHeaderChange" class="nav col-6 col-md-8 col-lg-8 col-xl-6">
        <div class=" d-none d-sm-none d-md-none d-lg-block col-lg-12 np">
          <ul class="links">
            <li>
              <a <?= $inicio ?> href="inicio.php">
                INICIO
              </a>
            </li>
            <li>
              <a <?= $geotermia ?> href="geotermia.php">
                GEOTERMIA
              </a>
            </li>
            <li>
              <a <?= $potencial ?> href="potencial-peruano.php">
                POTENCIAL PERUANO
              </a>
            </li>
            <li>
              <a <?= $noticias ?> href="noticias.php">
                NOTICIAS
              </a>
            </li>
            <li>
              <a <?= $contacto ?> href="contacto.php">
                CONTACTO
              </a>
            </li>
          </ul>
        </div>
        <div class="d-block d-sm-block d-md-block d-lg-none d-xl-none  col-12 np">
        <button name="SandwichButton" onclick="SandwichEffect()" class="bte2" id="btn2">
          <span id="lin1" class="spn12"></span>
          <span id="lin2" class="spn22"></span>
          <span id="lin3" class="spn32"></span>
          <span id="lin4" class="spn42"></span>
          <span id="lin6" class="spn62"></span>
        </button>
      </div>
      </div>
    </div>
  </div>
  <div id="subheader" class="d-block d-sm-block d-md-block d-lg-none d-xl-none col-md-12">
    <ul class="subnav-mobile">
      <li>
        <a <?= $inicio ?> href="inicio.php">
          INICIO
        </a>
      </li>
      <li>
        <a <?= $geotermia ?> href="geotermia.php">GEOTERMIA</a>
      </li>
      <li>
        <a <?= $potencial ?> href="potencial-peruano.php">POTENCIAL PERUANO</a>
      </li>
      <li>
        <a <?= $noticias ?> href="noticias.php">NOTICIAS</a>
      </li>
      <li>
        <a <?= $contacto ?> href="contacto.php">CONTACTO</a>
      </li>
    </ul>
  </div>
</header>
