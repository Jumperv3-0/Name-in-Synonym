<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styles/main_style.css" type="text/css">
	<title>Final Project</title>
</head>
<?PHP
	require('session_validation.php');
	//require('upload.php');
	/*
	if ((!isset($_SESSION['valid_admin'])){
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=login.php\">";
	}
	else{
	}
	*/
?>
<body>
	<h2>Final Project</h2>
	<h3>Team: DOLPHIN</h3>
	<h3>Dennis Lee, Gary Webb, Prashant Shrestha, Tyler Thrash</h3>
	<br><br><br>
	<div class="nav-wrapper">
		<div class="navBar">
			<?PHP
			session_start();
			echo getTopNav();
			?>
		</div>
	</div>
	<div id="export">
			<div id="import">
			<form id="edit_word_form" class="upload" action="admin_edit_synonyms.php"  method="get">
				<a class="upload" href="#" onclick="document.getElementById('edit_word_form').submit()">[1]Edit Synonyms for the word:</a>
				<input class="upload" type="textbox" name="word"/>
			</form></div><br><br>
			<a href="export_db.php">[2]Export the word list (Source: Database; Target: Excel file)</a><br>
			<h2 class="upload">[3]Import the word list (Source: Excel File; Target: Database)</h2>
      <div id="import">
        <p id="error" style="display: none;">Error: You must select a file to import</p>
        <?php
          require('upload.php');
          if($error){
        ?>
        <p id="error" style="display:block;background-color: #ce4646;padding:5px;color:#fff;">
        <?php echo $result; ?>
        </p>
        <?php } ?>
         <form class="upload" method="post" name="importFrom" enctype="multipart/form-data" onsubmit="return validateForm()">
          <label class="upload"><input class="upload" type="file" name="fileToUpload" id="fileToUpload"></label>
          <input class="upload" type="submit" value="Submit File" name="submit">
        </form>
      </div><br><br>
      <a href="export_db.php">[4] Export the logical_char list (Source: Database; Target: Excel file)</a><br>
			<a href="export_db.php">[5]Export the puzzle list (Source: Database; Target: Excel file)</a><br>
      <a href="admin_manage_users.php">[6] Manage Users (add, delete, update) (Extra Credit)</a>
    </div>
      
	<script>
		function validateForm() {
		    var eng = document.forms["importFrom"]["fileToUpload"].value;
		    if (eng == "") {
		    
		    	document.getElementById("error").style = "display:block;background-color: #ce4646;padding:5px;color:#fff;";
		        return false;
		    }
		}
	</script>
</body>
</html>
