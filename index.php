<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Chota Dhobi</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Dancing+Script&family=DynaPuff&display=swap"
        rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- CSS Style sheets -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Icons link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <section id="title">
        <div class="container-fluid">
            <!-- Nav Bar -->
            <nav class="navbar navbar-expand-lg navbar-dark">
                <img class="chota-dhobi-icon"
                    src="https://cdn.iconscout.com/icon/premium/png-256-thumb/laundry-bag-3341182-2857128.png" />
                <a class="navbar-brand">Chota Dhobi</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signIn.html">Sign in/up</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Title -->
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="big-heading">Chota Dhobi</h1>
                    <h2 class="small-heading">The Only Washing Store In India</h2>
                </div>
                <div class="col-lg-6">
                    <img style="width: 35rem; height: 18rem;"
                        src="https://www.chotadhobi.com/assets/images/banner.png" />
                </div>
            </div>
        </div>
    </section>

    <section id="pricing">
        <h2>A Plan for Every Cloth</h2>
        <p>Simple and affordable price plans for your Washables.</p>
        <form method="POST">
            <div class="row">

                <div class="pricing-col col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3>Tshirts</h3>
                        </div>
                        <div class="card-body">
                            <h2>₹5 / piece</h2>
                            <br>
                            <input type="number" id="tshirtCount" placeholder="Number of T-Shirts" name="tshirtCount">
                        </div>
                    </div>
                </div>

                <div class="pricing-col col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3>Shirts</h3>
                        </div>
                        <div class="card-body">
                            <h2>₹7 / piece</h2>
                            <br>
                            <input type="number" id="shirtCount" placeholder="Number of Shirts" name="shirtCount">
                        </div>
                    </div>
                </div>

                <div class="pricing-col col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3>Jeans/Pants</h3>
                        </div>
                        <div class="card-body">
                            <h2>₹10 / piece</h2>
                            <br>
                            <input type="number" id="jeansCount" placeholder="Number of Pants" name="jeansCount">
                        </div>
                    </div>
                </div>
            </div>
            <label for="">Get 10% discount on an amount greater than 200Rs</label><br><br>
            <label for="">Get 5% discount on an amount greater than 150Rs</label><br><br>
            <!-- <input value="Add to Wash" class="btn btn-lg btn-block btn-outline-dark" type="submit" id="addToWash" -->
            <!-- onclick="update()"> -->
            <!-- <input value="Add to Wash" class="btn btn-lg btn-block btn-outline-dark" type="submit" id="addToWash"
                onclick="update()"> -->
            <!-- <button class="btn btn-lg btn-block btn-outline-datk" onclick="alert('sdsdsds')" name="submit"><a href="checkout.html">Add to wash</a></button> -->
            <input type="submit" class="border border-primary bg-primary text-white rounded px-3 py-2" onclick="fun()"
                name="submit" value="Submit">
            <!-- <button  name="submit" onclick="fun()">
                <a class="btn btn-lg btn-block btn-outline-datk" style="text-decoration: none; color: black" href="checkout.html">Add to wash</a></button> -->

        </form>
        <script>
        function fun() {
            // alert("lsls");
            var one = document.getElementById("tshirtCount").value;
            var two = document.getElementById("shirtCount").value;
            var three = document.getElementById("jeansCount").value;
            let sum = Number(one) * 5 + Number(two) * 7 + Number(three) * 10
            sum = sum + (sum / 20);
            if (sum > 200) {
                alert("Your total amount is (5% GST Included): " + sum)
                sum = sum - (sum / 10);
                alert("After 10% discount: " + sum)
            } else if (sum > 150 && sum <= 200) {
                alert("Your total amount is (5% GST Included): " + sum)
                sum = sum - (sum / 20);
                alert("After 5% discount: " + sum)
            } else {
                alert("Your total amount is (5% GST Included): " + sum)
            }
            // const obj = {summ: "sum"};
            // const str = JSON.stringify(obj)
            // localStorage.setItem('item',str)
            localStorage.setItem('order', sum);
            window.location.href = "checkout.html";
        }
        </script>
        <?php if (isset($_POST['submit'])) {
            $t = $_POST['tshirtCount'];
            $s = $_POST['shirtCount'];
            $p = $_POST['jeansCount'];
            $amt = $t * 5 + $s * 7 + $p * 10;
            $amt = $amt + ($amt / 20);
            if ($amt > 200) {
                $amt = $amt - ($amt / 10);
            } elseif ($amt > 150 && $amt <= 200) {
                $amt = $amt - ($amt / 20);
            }
            $conn = mysqli_connect('localhost', 'root', '', 'test');
            $sql = "INSERT INTO ordernew (tshirt,shirt,pant,amount) values ('$t','$s','$p','$amt')";
            mysqli_query($conn, $sql);
            mysqli_close($conn);

            die("<script>
                window.location.href = 'checkout.html'
                </script>");
        } ?>
    </section>
</body>

<!-- Footer -->
<footer class="py-4" style="background-color: #0e2431;">
    <div class="footer">
        <p class="m-0 text-center text-white">Copyright © Chota Dhobi Laundry Solutions Pvt Ltd 2022</p>
    </div>
</footer>

<!-- <script type="text/javascript">

    document.getElementById("addToWash").addEventListener("click", function (event) {
        event.preventDefault()
    });

    function update() {
        var jeansCount = parseInt(document.getElementById("jeansCount").value);
        var shirtCount = parseInt(document.getElementById("shirtCount").value);
        var tshirtCount = parseInt(document.getElementById("tshirtCount").value);

        var amount = (jeansCount*10 + shirtCount*7 + tshirtCount*5);

        var order = [];
        var ord = {};

        ord.ts = tshirtCount;
        ord.sh = shirtCount;
        ord.pn = jeansCount;
        ord.amt = amount;
        order.push(ord);

        $.ajax({
            url:"update.php",
            method:"post",
            data:{order : JSON.stringify(order)},
            success: function(res) {
                console.log(res);
            }
        })
    } -->

</html>