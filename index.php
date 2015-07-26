<!doctype html>

<html>
<head>
    <?php @include 'templates/head.php' ?>
</head>
<body>
    <div class="wrapper">
        <?php @include 'templates/header.php' ?>

        <section class="right">
            <img class="tShirt" id="js-tShirt" src="img/tee-outline.png" height="250" width="300">
            <img class="pic" id="pic" src="null" height="80" width="60">
            <p class="shirttext" id="js-shirt-text">Harrys Shirt</p>
        </section>

        <section>
            <form action="basket.php" method="get">

            <div class="options">
                <label for="shirtColour">Select a shirt colour</label>
                <select id="js-colour-list" name="shirtColour" onchange="printShirt()">
                    <option value="White" selected>White</option>
                    <option value="DeepSkyBlue">Deep Sky Blue</option>
                    <option value="DarkSeaGreen">Dark Sea Green</option>
                    <option value="DarkRed">Dark Red</option>
                    <option value="LightYellow">Light Yellow</option>
                </select>

                <label for="shirtPic">Select a shirt picture</label>
                <select id="pictureList" name="shirtPic" onchange="printShirt()">
                    <option value="null">Nothing</option>
                    <option value="img/apple.png">Apple</option>
                </select>

                <label for="shirtText">Text on shirt</label>
                <input id="shirtTextBox" maxlength="30" name="shirtText" onkeypress="printShirt()" onkeyup="printShirt()" type="text" value="Harrys Shirt">

                <label for="shirtFont">Font</label>
                <select id="fontList" name="shirtFont" onchange="printShirt()">
                    <option value="arial">Arial</option>
                    <option value="courier">Courier</option>
                    <option value="verdana">Verdana</option>
                </select>

                <label for="shirtFontColour">Font Colour</label>
                    <select id="fontColourList" name="shirtFontColour" onchange="printShirt()">
                    <option value="black">Black</option>
                    <option value="white">White</option>
                    <option value="green">Green</option>
                    <option value="red">Red</option>
                    <option value="blue">Blue</option>
                </select>

                <label for="shirtFontSize">Font Size</label>
                <select id="fontSizeList" name="shirtFontSize" onchange="printShirt()">
                    <option value="15">Size 15</option>
                    <option value="20">Size 20</option>
                    <option value="25">Size 25</option>
                </select>
            </div>
            <div class="order">
                <table>
                    <tr>
                        <th></th>
                        <th>Address</th>
                    </tr>

                    <tr>
                        <td>Name</td>
                        <td>
                            <input id="nameBox" name="nameBox" type="text" value="Test">
                        </td>
                    </tr>

                    <tr>
                        <td>Line 1</td>
                        <td>
                            <input id="l1Box" name="l1Box" type="text" value="Test">
                        </td>
                    </tr>

                    <tr>
                        <td>Line 2</td>
                        <td>
                            <input id="l2Box" name="l2Box" type="text" value="test">
                        </td>
                    </tr>

                    <tr>
                        <td>County</td>

                        <td>
                            <input id="county" name="county" type="text" value="test">
                        </td>
                    </tr>

                    <tr>
                        <td>Post Code</td>
                        <td>
                            <input id="postCode" name="postCode" type="text" value="test">
                        </td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <th></th><th>Quantity</th>
                    </tr>

                    <tr>
                        <td>Small</td>
                        <td>
                            <input id="smallQuan" maxlength="3" name="smallQuan" onblur="value=validateQuan(value);" type="text" value="1">
                        </td>
                    </tr>

                    <tr>
                        <td>Medium</td>
                        <td>
                            <input id="mediumQuan" maxlength="3" name="mediumQuan" onblur="value=validateQuan(value);" type="text" value="0">
                        </td>
                    </tr>

                    <tr>
                        <td>Large</td>
                        <td>
                            <input id="largeQuan" maxlength="3" name="largeQuan" onblur="value=validateQuan(value);" type="text" value="0">
                        </td>
                    </tr>

                    <tr>
                        <td>Very Large</td>
                        <td>
                            <input id="vlargeQuan" maxlength="3" name="vlargeQuan" onblur="value=validateQuan(value);" type="text" value="0">
                        </td>
                    </tr>
                </table>

                <input class="button button-success" onclick="return validateOrder();" type="submit" value="Place order">
            </div>
            </form>
        </section>

        <?php @include 'templates/footer.php' ?>
    </div>
</body>
</html>
