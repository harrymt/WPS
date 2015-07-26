<!doctype html>

<?php
// Shirt characteristics
$shirtColour     = $_GET['shirtColour'];
$shirtPic        = $_GET['shirtPic'];
$shirtText       = urlencode($_GET['shirtText']);
$shirtFont       = $_GET['shirtFont'];
$shirtFontColour = $_GET['shirtFontColour'];
$shirtFontSize   = $_GET['shirtFontSize'];

// Shirt quantity
$smallQuan  = $_GET['smallQuan'];
$mediumQuan = $_GET['mediumQuan'];
$largeQuan  = $_GET['largeQuan'];
$vlargeQuan = $_GET['vlargeQuan'];

// Address
$nameBox  = urlencode($_GET['nameBox']);
$l1Box    = urlencode($_GET['l1Box']);
$l2Box    = urlencode($_GET['l2Box']);
$county   = urlencode($_GET['county']);
$postCode = urlencode($_GET['postCode']);

?>

<html>
<head>
  <meta php-equiv="Content-Type" content="ext/php; charset=us-ascii">

  <title>T shirt design</title>
  <link rel="stylesheet" type="text/css" href="css/shop.css">

  <script type="text/javascript">

  function makeOrder() {
        <?php

            $csvArray['shirtColour'][]     = $shirtColour;
            $csvArray['shirtPic'][]        = $shirtPic;
            $csvArray['shirtText'][]       = $shirtText;
            $csvArray['shirtFont'][]       = $shirtFont;
            $csvArray['shirtFontColour'][] = $shirtFontColour;
            $csvArray['shirtFontSize'][]   = $shirtFontSize;
            $csvArray['smallQuan'][]       = $smallQuan;
            $csvArray['mediumQuan'][]      = $mediumQuan;
            $csvArray['largeQuan'][]       = $largeQuan;
            $csvArray['vlargeQuan'][]      = $vlargeQuan;
            $csvArray['nameBox'][]         = $nameBox;
            $csvArray['l1Box'][]           = $l1Box;
            $csvArray['l2Box'][]           = $l2Box;
            $csvArray['county'][]          = $county;
            $csvArray['postCode'][]        = $postCode;

            // append to the csv file.
            $fp = fopen('order.csv', 'a') or die("can't open file");

            foreach ($csvArray as $fields) {
                fputcsv($fp, $fields);
            }



            fclose($fp);
        ?>
     alert("Order completed!");
    }

  </script>
</head>
<body>
  <div id="container">
    <div id="header">
      <h3>Amazing Tees</h3>
    </div>
    <div id="leftcolumn">
        <form action="index.html">
            <p>
                <table border="1" summary="Order quantity">
                    <tr>
                        <th> Size </th>
                        <th> Quantity </th>
                        <th> Price</th>
                    </tr>
                    <tr>
                        <td>Small</td>
                        <td>
                            <input id="smallQuan" type="text" disabled="disabled" name="smallQuan" value=<?php echo $smallQuan?>>
                        </td>
                        <td>
                            <input id="sPrice" type="text" disabled="disabled" name="sPrice" value=<?php echo ($smallQuan*14)?>>
                        </td>
                    </tr>
                    <tr>
                        <td>Medium</td>
                        <td>
                            <input id="mediumQuan" type="text" disabled="disabled" name="mediumQuan" value=<?php echo $mediumQuan?>>
                        </td>
                        <td>
                            <input id="mPrice" type="text" disabled="disabled" name="mPrice" value=<?php echo ($mediumQuan*15)?>>
                        </td>
                    </tr>
                    <tr>
                        <td>Large</td>
                        <td>
                            <input id="largeQuan" type="text" disabled="disabled" name="largeQuan" value=<?php echo $largeQuan?>>
                        </td>
                        <td>
                            <input id="lPrice" type="text" disabled="disabled" name="lPrice" value=<?php echo ($largeQuan*16)?>>
                        </td>
                    </tr>
                        <tr>
                        <td>Very Large</td>
                        <td>
                            <input id="vlargeQuan" type="text" disabled="disabled" name="vlargeQuan" value=<?php echo $vlargeQuan?>>
                        </td>
                        <td>
                            <input id="vlPrice" type="text" disabled="disabled" name="vlPrice" value=<?php echo ($vlargeQuan*17)?>>
                        </td>
                    </tr>
                </table>
            </p>
            <p>
                <table border="0" summary="Contact details">
                    <tr>
                        <th> </th>
                        <th> Address </th>
                    </tr>
                        <tr>
                            <td>Name </td>
                            <td>
                                <input id="nameBox" type="text" name="nameBox" disabled="disabled" value=<?php echo $nameBox?>>
                            </td>
                        </tr>
                        <tr>
                            <td>Line 1:</td>
                            <td>
                                <input id="l1Box" type="text" name="l2Box" disabled="disabled" value=<?php echo $l1Box?>>
                            </td>
                        </tr>
                        <tr>
                            <td>Line 2:</td>
                            <td>
                                <input id="l2Box" type="text" name="l2Box" disabled="disabled" value=<?php echo $l2Box?>>
                            </td>
                        </tr>
                        <tr>
                            <td>County:</td>
                            <td>
                                <input id="county" type="text" name="county" disabled="disabled" value=<?php echo $county?>>
                            </td>
                        </tr>
                        <tr>
                            <td>Post Code: </td>
                            <td>
                                <input id="postCode" type="text" name="postCode" disabled="disabled" value=<?php echo $postCode?>>
                            </td>
                        </tr>
                    </table>
                </p>
                <p>
                    <input type="submit" value="Confirm order" onClick="makeOrder()">
                    <input id="pSum" name="pSum" type="text" disabled="disabled" value=<?php echo (($smallQuan*14)+($mediumQuan*15)+($largeQuan*16)+($vlargeQuan*17))?>>
                </p>
            </div>
            <div id="rightcolumn">
                <p>
                    <table border="1" summary="Order summary">
                        <tr>
                            <th> Type </th>
                            <th> Order </th>
                        </tr>
                            <tr>
                            <td> Shirt Colour:
                            </td>
                                <td>
                                    <input id="sColour" type="text" disabled="disabled" value=<?php echo $shirtColour?>>
                                </td>
                            </tr>
                        <tr>
                        <tr>
                            <td> Shirt Pic:
                            </td>
                            <td>
                                <input id="sPic" type="text" disabled="disabled" value=<?php echo $shirtPic?>>
                            </td>
                        </tr>
                        <tr>
                            <td> Shirt Text:
                            </td>
                            <td>
                                <input id="sText" type="text" disabled="disabled" value=<?php echo $shirtText?>>
                            </td>
                        </tr>
                    </table>
                </p>
            </div>
        </form>
    <div id="footer">
      <br>4188335 - hxm02u<br>
      <a>Harry Mumford-Turner</a>
    </div>
  </div>
</body>
</html>
