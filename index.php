<html>
<head>
    <title>
        Order List for Shraddha Extension 
    </title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Font Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="row">
    <!-- Header -->
        <div class="container">
            <div class="col-lg-12 header" >
                <h1>Order List</h1>
            </div>
        </div>

    <!-- Order List Entry  -->

        <div class="container">
            <div class="col-lg-12" >
                <form action = "addOrder.php" method= "POST">
                <div class="form-group">
                    <label for="ordername">Order Name</label>
                    <input type="text" class="form-control" id="ordername" name="ordername" placeholder="Enter Order Name..">
                </div>

                <div class="form-group">
                    <label for="orderdate">Order Date</label>
                    <input type="date" class="form-control" id="orderdate" name="orderdate" placeholder="Enter Order Date..">
                </div>

                <div class="form-group" id="dynamicInput">
                    <label for="order">Entry 1</label>
                    <input type="text" class="form-control" name="myInputs[]" placeholder="Enter Order.." >
                </div>

                

                <button class="btn">Submit</button>

                </form>
                <button class="btn pull-right" onclick = "addInput('dynamicInput');" >
                    <i class="fa fa-plus"></i>
                </button>
            </div>
        </div>

    </div>

    <!-- Adding new text field -->
    <script>
        var counter = 1;
        var limit = 10;
        function addInput(divName){
            if (counter == limit)  {
                alert("You have reached the limit of adding " + counter + " inputs");
            }
            else {
                var newdiv = document.createElement('div');
                newdiv.innerHTML = "Entry " + (counter + 1) + " <br><input type='text' class='form-control' name='myInputs[]' placeholder='Enter Order..'>";
                document.getElementById(divName).appendChild(newdiv);
                counter++;
            }
        }
    </script>
</body>
</html>