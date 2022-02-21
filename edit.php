<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatibble" content="IE=edge">
        <title>Upravit kontakt - BlueGhost - Úkol</title>
    </head>
    <body>
        <?php
        
            include 'db_conn.php';
            
            $id = $_GET['id'];
            $sql = "SELECT * FROM contacts WHERE id=$id";
            $content = mysqli_query($conn, $sql);
            $record = mysqli_fetch_array($content);
        
        ?>
        <h1>Upravit kontakt</h1>
        <form action="edit_sql.php" method="post">
        
            <table border="0">
            
                <tr>
                
                    <td>Jméno a příjmení:</td>
                    <td><input type="text" name="fullname" size="20" required value="<?php echo $record['fullname']; ?>"></td>
                
                </tr>
                <tr>
                
                    <td>Telefonní číslo:</td>
                    <td><input type="text" name="phone" size="20" required value="<?php echo $record['phone']; ?>"></td>
                
                </tr>
                <tr>
                
                    <td>E-mail:</td>
                    <td><input type="text" name="email" size="20" required value="<?php echo $record['email']; ?>"></td>
                
                </tr>
                <tr>
                
                    <td>Dlouhá poznámka:</td>
                    <td><input type="text" name="note" size="20" value="<?php echo $record['note']; ?>"></td>
                
                </tr>
                <tr>
                
                    <td><input type="reset" value="Reset"></td>
                    <td align="right"><input type="hidden" name="id" value="<?php echo $record['id']; ?>"><input type="submit" value="Upravit kontakt"></td>
                
                </tr>
            
            </table>
        
        </form>
    </body>
</html>