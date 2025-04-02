<?php
include ('header.php');
?>

<form action="reponse_recherche.php" method="GET">
    <label for="race">Recherche par race</label>
    <input class="form-control" list="datalistOptions" id="race" name="race" placeholder="Tapez une race...">
    <datalist id="datalistOptions">
        <option value="Siamois">
        <option value="Tigré européen">
        <option value="Persan">
        <option value="Maine Coon">
        <option value="Sphynx">
    </datalist>
    <button type="submit" class="animated-button">
  <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
    <path
      d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
    ></path>
  </svg>
  <span class="text">Modern Button</span>
  <span class="circle"></span>
  <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
    <path
      d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
    ></path>
  </svg>
</button>

</form>

<?php
include ('footer.php');
?>
