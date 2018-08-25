<div class="navbar">
    <img src="img/logo.png" class="logo">
    <div class="location">
        <a href="category.php">Products</a>
        <?php include("php/navbar_selector.php"); ?>
        <a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a>
    </div>
</div>

<style>
    /* The navigation bar */
.navbar-right{
    float: left;
    padding-right: 451px;
}
.navbar {
    overflow: hidden;
    background-color: #333;
    position: fixed; /* Set the navbar to fixed position */
    top: 0; /* Position the navbar at the top of the page */
    width: 100%; /* Full width */
    z-index: 10;
}

/* Links inside the navbar */
.navbar a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change background on mouse-over */
.navbar a:hover {
    background: #ddd;
    color: black;
}

.logo{
    width: 15%;
    float: left;
}
.location{
    
    float: left;
}
.btn{

}

</style>