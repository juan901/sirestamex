

<html>
    <head>
        <body>
            <title></title>
            <form>
                <div style="width:900px; margin:0 auto; border:1px solid; padding:10px">
                   <select name="estado">
                   
                    <?php
                    $db= new PDO("mysql:host=localhost;dbname=restaurante",
					"root",
					"");
                    foreach($db->query('SELECT nombreProveedor FROM proveedores') as $row) {
                        echo' <option value=1>
                        '.$row['nombreProveedor'].'
                        '; }
                        ?> </option>
                

                   
                    



                </div>
            </form>
        </body>
    </head>
</html>
