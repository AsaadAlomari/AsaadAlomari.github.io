<?php
// Connect to the database
    $conn = mysqli_connect('localhost', 'root', '', 'pharmacydatabase', 3306);

    // Check the connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    // Execute the SQL query
    $result1 = mysqli_query($conn, "SELECT Quantity FROM ma3an  WHERE Antibiotics = 'Antibiotics'");
    $result2 = mysqli_query($conn, "SELECT Quantity FROM ma3an WHERE Blood_pressure_medications = 'Blood_pressure_medications'");
    $result3 = mysqli_query($conn, "SELECT Quantity FROM ma3an WHERE Depression = 'Depression'");
    $result4 = mysqli_query($conn, "SELECT Quantity FROM ma3an WHERE Pain_relievers = 'Pain_relievers'");

    // Fetch the row and print the quantity
    $row0 = mysqli_fetch_assoc($result1);
    $row1 = mysqli_fetch_assoc($result2);
    $row2 = mysqli_fetch_assoc($result3);
    $row3 = mysqli_fetch_assoc($result4);

    // Close the connection
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareX Pharmacy | Ma'an Products</title>
    <link rel="shortcuts icon" href="Images/Logo/logoo.png">
    <link rel="stylesheet" href="styleGo.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet"></head>
<body>
    <!--Start Header-->
    <div class="header">
        <div class="container">
        <a href="/homepage.html">
            <img class="logo" src="Images/Logo/logoo.png"  alt="">
            <li><a class="homepage.html" href="homepage.html">Home</a></li>
            <li>
                <a href="AvailableQuanilty.php">Products</a>
                <select name="pages" onchange="location = this.value;">
                  <option >Branches</option>
                  <option value="AvailableQuanilty.php">Irbid</option>
                  <option value="KarakProducts.php">Karak</option>
                  <option value="Ma'an.php">Ma'an</option>
                  <option value="Amman.php">Amman</option>
    
                </select>
            </li>
            <li><a href="homepage.html#services">Services</a></li>
            <li><a href="AskDoctor.html">Ask a Doctor</a></li>
            <li><a href="locations.html">Locations ꜜ</a></li>
            <!--<li><a href="login.html">Account</a></li>-->
            </a>
            <div class="links">
                <span class="icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <ul>    
                    <li><a class="homepage.html" href="homepage.html">Home</a></li>
                    <li><a href="AvailableQuanilty.php">Products</a></li>
                    <li><a href="homepage.html#services">Services</a></li>
                    <li><a href="AskDoctor.html">Ask a Doctor</a></li>
                    <li>
                        <a href="locations.html">Locations ꜜ</a>
                        <!--<ul class="dropdown">
                            <li><a href="#">Amman</a></li>
                            <li><a href="#">Irbid</a></li>
                            <li><a href="#">Karak</a></li>
                            <li><a href="#">Ma'an</a></li>
                        </ul><-->
                    </li>
                    <!--<li><a href="login.html">Account</a></li>-->
                    <li><a href="homepage.html#contact">Contact</a></li>

                </ul>
            </div>
        </div>
    </div>  

    <!--Start Our Body (Products)-->
    <h2>Ma'an Available Products</h2>
    <div class="contanier-products">
        <div class="box-products">
            <img src="Images/Homepage/acetaminophen.png">
            <h2>Antibiotics</h2>
            <p>These are used to treat infections caused by bacteria. Examples include penicillin, amoxicillin, and erythromycin.</p>
            <span>Not Available to Purchase</span>
            <div class="options-products">                
                <p> Quantity Available: <?php echo $row0['Quantity'] + 34?> </p>
                <a href="AskDoctor.html">Ask A Doctor About This Product</a>

            </div>
        </div>
        <div class="box-products">
            <img src="Images/Homepage/Ibuprofen.png">
            <h2>Blood Pressure</h2>
            <p>These are used to treat high blood pressure and prevent related complications. Examples include lisinopril, amlodipine, and metoprolol.</p>
            <span>Not Available to Purchase</span>
            <div class="options-products">
                <p> Quantity Available: <?php echo $row1['Quantity']?> </p>
                <a href="AskDoctor.html">Ask A Doctor About This Product</a>
            </div>
        </div>
        <div class="box-products">
            <img src="Images/Homepage/aspirn.png">
            <h2>Depression</h2>
            <p>These are used to treat mental health conditions such as depression and anxiety.</p>
            <span>Not Available to Purchase</span>
            <div class="options-products">
                <p> Quantity Available: <?php echo $row2['Quantity']?> </p>
                <a href="AskDoctor.html">Ask A Doctor About This Product</a><br>
            </div>
        </div>

        <div class="box-products">
            <img src="Images/Homepage/metformin.png">
            <h2>Pain Relievers</h2>
            <p>These are used to alleviate pain and discomfort. Examples include acetaminophen (Tylenol), ibuprofen (Advil), and aspirin.</p>
            <span>Not Available to Purchase</span>
            <div class="options-products">
                <p> Quantity Available: <?php echo $row3['Quantity'] + 4 ?> </p>
                <a href="AskDoctor.html">Ask A Doctor About This Product</a>
            </div>
        </div>
    </div>
      
    <!--Start Footer -->
    <footer>
        <div class="footer-section">
            <div class="col-lg-3 col-md-6">
            <div class="footer-title">Contact Us</div>
            <div class="footer-links">
                    <li>
                    <i class="fas fa-map-marker-alt"></i> Jordan, Amman
                    </li>
                    <li>
                    <i class="fas fa-phone"></i>+962 79 999-999-99
                    </li>
                    <li>
                    <i class="fas fa-envelope"></i> support@carex.com
                    </li>
                </div>
            </ul>
        </div>
    </div>
    <!--Footer-->
        <div class="footer-section">
            <div class="col-lg-3 col-md-6">
            <div class="footer-title">Follow Us</div>
            <div class="social-links">

                <li><a href="www.facebook.com"><i class="fab fa-facebook"></i> Facebook</a></li>
                <li><a href="twitter.com"><i class="fab fa-twitter"></i> Twitter</a></li>
                <li><a href="instagram.com"><i class="fab fa-instagram"></i> Instagram</a></li>
                <li><a href="linkedin.com"><i class="fab fa-linkedin"></i> LinkedIn</a></li>
            </div>
        </div>
    </footer>   
</body>
</html>