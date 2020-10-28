	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Web Development</a>
    </div>
    <ul class="nav navbar-nav">
      <li class='<?php echo $_GET["page"] == "home" ? "active" : "";?>'><a href="index.php?page=home">HomePage</a></li>
      <li class='<?php echo $_GET["page"] == "arraydata" ? "active" : "";?>'><a href="array-data.php?page=arraydata">Aray Data</a></li>
      <li class='<?php echo $_GET["page"] == "checkcapital" ? "active" : "";?>'><a href="INCLUDE/form.php?page=checkcapital">Check Capital</a></li>
    </ul>
  </div>
</nav>