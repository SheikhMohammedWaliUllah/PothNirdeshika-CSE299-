<ul class="navbar">
  <li><button id="homeButton">HOME</button></li>
  <li><button id="aboutButton">ABOUT</button></li>
  <li><button id="adminButton">ADMIN</button></li>
</ul>

<script>
  document.getElementById("homeButton").addEventListener("click", function() {
    window.location.href = "homepage.php";
  });
  document.getElementById("aboutButton").addEventListener("click", function() {
    window.location.href = "about.php";
  });
  document.getElementById("adminButton").addEventListener("click", function() {
    window.location.href = "sns/index.php";
  });
</script>
