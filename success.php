<!DOCTYPE html>
<html lang="en" dir="LTR">
	<head>
		<title>Lordys - Payment Successful</title>
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/styles.css" rel="stylesheet"/>
	</head>
	<body>
		<div class="container">
			<header class="indexHeader">
				<img class="lordysLogo" src="images/lordysLogo.png" alt="LordysLogo" title="LordysLogo">
			</header>
			<nav>
				<ul>
                    <li id="home" class="navBar"><a href="index.html" title="Lordys Home Page">Home</a></li><!--
					--><li id="aboutUsNav" class="navBar"><a href="">About Us</a></li><!--
					--><li id="contactUs" class="navBar"><a href="">Contact Us</a></li>
				</ul>	
			</nav>
            <?php
                if(isset($_POST["cardValidate"]) && isset($_POST["dateValidate"]) && isset($_POST["cvvValidate"])) {
                    /*  
                        Collecting the hidden values and testing if they are either 1 or -1.
                        If hidden values are 1, prepare 
                    */
                    $card_val = $_POST["cardValidate"];
                    $date_val = $_POST["dateValidate"];
                    $cvv_val = $_POST["cvvValidate"];
                    if(($card_val == 1) && ($date_val == 1) && ($cvv_val == 1)) {
                        $server = "localhost";
                        $user = "root";
                        $password = "";
                        $db = "creditcard";

                        $conn = mysqli_connect($server, $user, $password, $db);
                        if(!$conn) {
                            die("Connection to database failed: " . mysqli_connect_error());
                        }
                        
                        $card_number = $_POST["cardNumber"];
                        $hash_cc_echo = substr($card_number, -4);
                        $card_number = md5($card_number);
                        
                        $cvv = $_POST["cvv"];

                        $month = $_POST["month"];
                        $year = $_POST["year"];
                        $date = new dateTime();
                        $date -> setDate($year, $month, 1);
                        $date -> modify("+1 month -1 day");
                        $expiry_date = $date -> format("Y-m-d");
                        
                        $sql = "INSERT INTO card (ccnum, expdate, seccode) VALUES ('$card_number', '$expiry_date', '$cvv')";

                        mysqli_query($conn, $sql);

                        mysqli_close($conn);
                    } else {
                        header("Location: pay.php");
                    }
                }
            ?>
            <section id="successHeader">
                <header>
                    <h1 id="successHeading">You have successfully entered your credit card details</h1>
                </header>
            </section>
            <section class="mastercardHeader">
                <h2 class="mastercardHeading">Debit / Credit Card</h2>
                <img class="mastercardLogo" src="images/mastercardLogo.png" alt="MasterCardLogo" title="MasterCardLogo">
            </section>
            <section id="successContainer">
                <h2 id="cardHash">Your credit card number ends in **** **** **** <?php echo $hash_cc_echo; ?></h2>
            </section>
            <footer>
                <h2>Lordys Bookstore, 2021</h2>
            </footer> 
        </div>
    </body>
</html>