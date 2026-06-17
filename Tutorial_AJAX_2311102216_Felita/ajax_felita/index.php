<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX jQuery Demo</title>

    <style>

        body{
            font-family: Arial, sans-serif;
            margin:40px;
        }

        input[type=text]{
            padding:8px;
            width:250px;
        }

        button{
            padding:8px 15px;
            cursor:pointer;
        }

        #data{
            margin-top:20px;
        }

        .result{
            padding:10px;
            margin-bottom:5px;
            background:#f2f2f2;
        }

    </style>

</head>
<body>

    <h2>AJAX dengan jQuery</h2>

    <form id="form1">

        <input
            type="text"
            name="pesan"
            id="pesan"
            placeholder="Masukkan pesan">

        <button type="button" id="shoutbutton">
            Kirim
        </button>

    </form>

    <div id="data"></div>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Ajax -->
    <script src="ajax.js"></script>

</body>
</html>