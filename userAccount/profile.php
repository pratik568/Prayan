<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prayan</title>
    <link rel="stylesheet" href="./profile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">  
</head>

<header>
    <nav class="navbar">
        <div class="navbar__top">
            <div class="navbar__brand">
                <a href="../index.html" rel="noopener noreferrer">
                    <img src="../assets/logo.png" alt="logo" class="brand__logo">
                </a>
            </div>
            <div class="navbar__nav__items">
                <div class="nav__items">
                    <h5 id="items__home"> <a href="../index.html">HOME</a></h5>
                    <h5 id="items__about"> <a href="../header/about.html">ABOUT US</a></h5>
                    <h5 id="items__offers"> <a href="../header/offer.html">OFFERS</a></h5>
                    <h5 id="items__contact"><a href="../header/contact.html">Contact</a></h5>
                </div>
            </div>
            <div class="navbar__account">
                <div class="navbar__register">
                    <h5 id="nav__profile"> <a href="./Database/logout.php"> LogOut</a></h5>
                </div>
            </div>
        </div>
    </nav>
</header>

<body>
    <div class="profile__main">
        <div class="profile__left">
            <img src="../assets/userProfile.svg" alt="profile">
            <div class="user__details">
                <input type="text" id="name" readonly placeholder="name">
                <input type="text" id="email" readonly placeholder="email">
                <input type="text" id="dob" readonly placeholder="dob">
            </div>
        </div>
        <div class="profile__right">
            <p>
                No data found
            </p>  
        </div>
    </div>
</body>

</html>