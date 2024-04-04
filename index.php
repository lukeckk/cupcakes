<!--

Name: Luke Cheng
Date: 4/4/24
URl: https://kcheng.greenriverdev.com/328/cupcakes/
Description: This is the form to order cupcakes

-->

<!doctype html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"><title>Cupcakes Form</title>
    </head>
    <body>
        <div class="pl-5">
        <h1>Cupcake Fundraiser</h1>
            <form action="process.php" method="post">
                <div class="pb-3">
                    <label for="name" >Your name:</label>
                </div>
                <input id="text" name="name" placeholder="Please input your name">

                <div class="pt-4 pb-4">
                    <label for="checkbox">Cupcake flavors:</label><br>

                    <input type="checkbox" id="checkbox1" name="flavor[]" value="The Grasshopper">
                    <label for="checkbox1">The Grasshopper</label><br>

                    <input type="checkbox" id="checkbox2" name="flavor[]" value="Whiskey Maple Bacon">
                    <label for="checkbox2">Whiskey Maple Bacon</label><br>

                    <input type="checkbox" id="checkbox3" name="flavor[]" value="Carrot Walnut">
                    <label for="checkbox3">Carrot Walnut</label><br>

                    <input type="checkbox" id="checkbox4" name="flavor[]" value="Salted Caramel Cupcake">
                    <label for="checkbox4">Salted Caramel Cupcake</label><br>

                    <input type="checkbox" id="checkbox5" name="flavor[]" value="Red Velvet">
                    <label for="checkbox5">Red Velvet</label><br>

                    <input type="checkbox" id="checkbox6" name="flavor[]" value="Lemon Drop">
                    <label for="checkbox6">Lemon Drop</label><br>

                    <input type="checkbox" id="checkbox7" name="flavor[]" value="Tiramisu">
                    <label for="checkbox7">Tiramisu</label><br>



                </div>
                <input type="submit" value="Order">

            </form>

        </div>
    </body>
</html>