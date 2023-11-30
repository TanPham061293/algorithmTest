<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <title>Algorithm</title>
</head>

<body>
    <style>
        input {
            border: none;
            outline: none;
        }
    </style>
    <label for="input">Simple input</label> <br>
    <input type="text" name="input" id="input" onkeypress="doEnter(event,'input')" onkeyup="ChangeInput('input')"><br>
    <label for="output">Simple output</label><br>
    <input type="text" name="output" id="output" readonly>

    <script>
        function doEnter(event, obj) {
            if (event.keyCode == 13 || event.which == 13) ChangeInput(obj);
        }

        function ChangeInput(obj) {
            var value = $('input[name="' + obj + '"]').val();
            value = value.replace(/\s+/g, ' ').trim();
            $.ajax({
                url: 'algorithm.php',
                type: "POST",
                data: {
                    value: value
                },
                success: function(result) {
                    $('#output').val(result);
                    console.log(result);
                }
            });
        }
        $(document).ready(function() {
            $('#input').focus();
        })
    </script>
</body>

</html>