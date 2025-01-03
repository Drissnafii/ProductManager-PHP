<?php
require __DIR__ . '/config/conn.php';
require __DIR__ . '/includes/header.php';
?> 
<link rel="stylesheet" href="./assets/css/style.css">

<div class="w3-container w3-black w3-center w3-allerta">

<div class="w3-center">


<h1 class="w3-cursive">Login Form</h1>

<form action="send.php" method="POST" class="w3-cursive"> 

	<label for="firstname">First Name:</label><br>
	<input type="text" id="firstname" name="firstname" require><br><br>

	<label for="lastname">Last Name:</label><br>
	<input type="text" id="lastname" name="lastname" require><br><br>

	<label for="email">Email:</label><br>
	<input type="email" id="email" name="email" require><br><br>

	<label for="pass">Password:</label><br>
	<input type="password" id="pass" name="pass" require><br><br>

	<input class="w3-panel w3-round-xlarge w3-teal" type="submit" name="submit" value="Submit" onclick="showAlert()">
</form>
</div>

<div class="w3-container" id="searching">

  <!-- <button onclick="filtering()">
    <h2 id="search-button">Filter Table</h2>
  </button> -->

    <div id="myDiv">


      <p>Search for a name in the input field.</p>

      <input class="w3-input w3-border w3-padding" type="text" placeholder="Search for names.." id="myInput" onkeyup="myFunction()">

      <table class="w3-table-all w3-margin-top" id="myTable">
        <tr>
          <th style="width:60%;">Name</th>
          <th style="width:40%;">Country</th>
        </tr>
        <tr>
          <td>Alfreds Futterkiste</td>
          <td>Germany</td>
        </tr>
        <tr>
          <td>Berglunds snabbkop</td>
          <td>Sweden</td>
        </tr>
        <tr>
          <td>Island Trading</td>
          <td>UK</td>
        </tr>
        <tr>
          <td>Koniglich Essen</td>
          <td>Germany</td>
        </tr>
        <tr>
          <td>Laughing Bacchus Winecellars</td>
          <td>Canada</td>
        </tr>
        <tr>
          <td>Magazzini Alimentari Riuniti</td>
          <td>Italy</td>
        </tr>
        <tr>
          <td>North/South</td>
          <td>UK</td>
        </tr>
        <tr>
          <td>Paris specialites</td>
          <td>France</td>
        </tr>
      </table>

      <p><strong>Tip:</strong> Remove toUpperCase() if you want to perform a case-sensitive search.</p>
      <p>Change tr[i].getElementsByTagName('td')[0] to [1] if you want to search for "Country" (index 1) instead of "Name" (index 0).</p>

    </div>

</div>


<?php
include __DIR__ . '/includes/footer.php';
?> 
</div>

<script src="assets/JS/script.js"></script>
</body>
</html>