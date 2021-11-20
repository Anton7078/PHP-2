

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Image</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<div id="ContentImg">
    <?php
require_once 'base.php';
?>
</div>
    <script>
        let lim = 2;
        $(document).ready(function (){
            $('button.submit').on('click',function (){
                lim+=2;
                $.ajax({
                    url: 'base.php',
                    method: 'POST',
                    dataType: 'html',
                    data: {text: lim}
                })
                    .done(function( msg ) {
                        let section = document.getElementById('ContentImg');
                        section.innerHTML = '';
                        section.innerHTML += msg;
                    });
            });
        });
</script>
<div style="width: 100%;text-align: center; "><button class="submit" style="width: 80px; height: 40px; background-color: aqua;">ЕЩЕ 2</button></div>
</body>
</html>