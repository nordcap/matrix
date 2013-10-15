<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta charset="utf-8"/>
	<title>Определение психофизической матрицы</title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<!--[if lte IE 6]><link rel="stylesheet" href="css/style_ie.css" type="text/css" media="screen, projection" /><![endif]-->
    <script language="JavaScript" src="js/jquery-1.4.2.js" type="text/javascript"></script>
</head>

<body>

<div id="wrapper">

	<div id="header">
    <div id="text_for_matrix">Психоматрица человека</div>
    </div><!-- #header-->


	<div id="middle">

		<div class="sidebar" id="sideLeft">
          <form name="inputForm" action="index.php" method="POST">
            <input name="Date" type="text" size="15"/>
            <input type="submit" name="getMatrix" value="OK" />
          </form>

		</div><!-- .sidebar#sideLeft -->

		<div id="container">
			<div id="content">
            <?php
            if (isset($_REQUEST['getMatrix'])) {
                require("matrix_controller.php");
            }

             ?>
			</div><!-- #content-->
		</div><!-- #container-->



	</div><!-- #middle-->

</div><!-- #wrapper -->

<div id="footer">

</div><!-- #footer -->

</body>

</html>