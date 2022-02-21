<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatibble" content="IE=edge">
        <title>Adresář - BlueGhost - Úkol</title>
    </head>
    <body>
        
    <h1>Adresář</h1>
    
    <table border="1">
    
        <thead>
        
            <th>Jméno a příjmení</th>
            <th>Telefonní číslo</th>
            <th>E-mail</th>
            <th>Dlouhá poznámka</th>
            <th></th>
            <th></th>
        
        </thead>
        
        <?php
        
            include 'db_conn.php'; //DB connection
            
            $sql = 'SELECT * FROM contacts'; //sql script
            $content = mysqli_query($conn, $sql); //run sql script
        
            while($record = mysqli_fetch_array($content)) //get content from table
            {
                echo '<tr>';

                    echo'<td>' . $record['fullname'] . '</td>';
                    echo'<td>' . $record['phone'] . '</td>';
                    echo'<td>' . $record['email'] . '</td>';
                    echo'<td>' . $record['note'] . '</td>';
                    echo'<td><a href="edit.php?id=' . $record['id'] . '">Upravit kontakt</a></td>';
                    echo'<td><a href="delete.php?id=' . $record['id'] . '">Odstranit kontakt</a></td>';

                echo '</tr>';
                
            }
        ?>
        
    </table>
    <a href="add.php">Vytvořit nový kontakt</a>
    
    </body>
</html>