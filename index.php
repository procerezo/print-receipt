<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>C</title>
</head>
<body>
    <div style="text-align: center;">
        <img class="logo" src='./favicon.png' alt='Logo'>
    </div>

    <div id='printContainer'>
        <h2 id="slogan" style="margin-top:0" class="text-center">Cleaning Company</h2>

        <table>
            <tr>
                <td>Invoice Num</td>
                <td><b>#59867</b></td>
            </tr>
            <tr>
                <td>Created At</td>
                <td><b><?= date("d-m-Y H:i:s", time()); ?><br></b></td>
            </tr>

            <tr>
                <td>Client Name</td>
                <td><b>John Cena</b></td>
            </tr>
        </table>
        <p class="text-center"><img src="./qr.png" alt="QR-code" class="left"/></p>
        <hr>

        <table>
            <tr>
                <td><b>Service Type</b></td>
                <td><b>Price</b></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td><b>Clean Cars</b></td>
                <td><b>15.7 USD</b></td>
            </tr>
            <tr>
            <td> eco badge for waterless washThe service at Detailing Knights is not only unmatched, it is also mobile, waterless and environmentally friendly. </td>
            <td></td>
        </tr>
        </table>
        <hr>

        <table>
            <tr>
                <td><b>Service Fee</b></td>
                <td><b>15.7 USD</b></td>
            </tr>
            <tr>
                <td><b>Discount</b></td>
                <td><b>1.7 USD</b></td>
            </tr>
            <tr>
                <td><b>Net Value</b></td>
                <td><b>14 USD</b></td>
            </tr>
        </table>
        <hr>

    </div>

    <button onclick="window.print()" >Print</button>
</body>
</html>
