<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
            <dt>Name</dt>
            <dd><?php echo $_POST['username']; ?></dd>

            <dt>Section</dt>
            <dd><?php echo $_POST['degree']; ?></dd>

            <dt>Credit Card</dt>
            <dd><?php echo $_POST['cardnumber']; ?></dd>

            <dt>Type</dt>
            <dd><?php echo $_POST['card']; ?></dd>
            <pre>
            <?php

            echo file_get_contents("sukers.txt");

            $fp = fopen("sukers.txt","w");
            fwrite($fp, $_POST['username']);
            fwrite($fp, ";");
            fwrite($fp, $_POST['degree']);
            fwrite($fp, ";");
            fwrite($fp, $_POST['cardnumber']);
            fwrite($fp, ";");
            fwrite($fp, $_POST['card']);
            fclose($fp);

            ?>
            </pre>
		</dl>
	</body>
</html>  