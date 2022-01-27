<!DOCTYPE html>
<html lang="en" dir="LTR">
	<head>
		<title>Lordys - Payment Details</title>
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/styles.css" rel="stylesheet"/>
        <script src="https://kit.fontawesome.com/41a9ac5152.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container">
			<header class="indexHeader">
				<img class="lordysLogo" src="images/lordysLogo.png" alt="LordysLogo" title="LordysLogo">
			</header>
			<nav id="payNav">
				<ul>
					<li id="home" class="navBar"><a href="index.html" title="Lordys Home Page">Home</a></li><!--
					--><li id="aboutUsNav" class="navBar"><a href="">About Us</a></li><!--
					--><li id="contactUs" class="navBar"><a href="">Contact Us</a></li>
				</ul>	
			</nav>
            <section class="payHeader">
                <header>
                    <h1 class="payHeading">Payment Options</h1>
                </header>
            </section>
            <section class="mastercardHeader">
                <h2 class="mastercardHeading">Debit / Credit Card</h2>
                <img class="mastercardLogo" src="images/mastercardLogo.png" alt="MasterCardLogo" title="MasterCardLogo">
            </section>
            <section class="payLabels">
                Card Number<br><br>
                Expiry Date<br><br>
                Security Code
            </section>
            <section class="payForm">
                <form action="success.php" method="POST">
                    <ul>
                        <span><li><input id="cardNumber" name="cardNumber"> <i class="fas fa-question" title="Card Number must be 16 digits long, and must begin with either 51, 52, 53, 54, or 55"></i></li></span>
                        <input type="hidden" id="cardValidate" name="cardValidate" value="">
                        <li><select id="month" name="month">
                                            <option value="0">Month</option>
                                            <option value="01">January</option>
                                            <option value="02">February</option>
                                            <option value="03">March</option>
                                            <option value="04">April</option>
                                            <option value="05">May</option>
                                            <option value="06">June</option>
                                            <option value="07">July</option>
                                            <option value="08">August</option>
                                            <option value="09">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                        <select id="year" name="year">
                                            <option value="0">Year</option>    
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                        </select></li>
                        <input type="hidden" id="dateValidate" name="dateValidate" value="">
                        <span><li><input id="cvv" name="cvv"> <i class="fas fa-question" title="Security Code must be either 3 or 4 digits long, normally on the back of your card"></i></li></span>
                        <input type="hidden" id="cvvValidate" name="cvvValidate" value="">
                        <li><input type="submit" id="submit" class="payBtn" value="Continue"></li>
                    </ul>
                </form>
            </section>
            <footer>
                <h2>Lordys Bookstore, 2021</h2>
            </footer> 
        </div>
        <script src="js/scripts.js"></script>
    </body>
</html>