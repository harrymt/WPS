
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
    $fp = fopen('order.csv', 'a') or die("We are sorry there is a problem with the order {can't open file}");
    foreach ($csvArray as $fields) {
        fputcsv($fp, $fields);
    }
    fclose($fp);
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Processing order</title>
    </head>
    <body>
        <script>
            // Redirect the user to the home page
            document.location.href = "/";
        </script>
    </body>
</html>
