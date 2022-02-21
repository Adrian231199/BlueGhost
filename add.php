<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatibble" content="IE=edge">
        <title>Nový kontakt - BlueGhost - Úkol</title>
    </head>
    <body>
        <h1>Vytvořit nový kontakt</h1>
        <form action="add_sql.php" method="post">
        
            <table border="0">
            
                <tr>
                
                    <td>Jméno a příjmení:</td>
                    <td><input type="text" name="fullname" size="20" required></td>
                
                </tr>
                <tr>
                
                    <td>Telefonní číslo:</td>
                    <td><input type="text" name="phone" size="20" required></td>
                
                </tr>
                <tr>
                
                    <td>E-mail:</td>
                    <td><input type="text" name="email" size="20" required></td>
                
                </tr>
                <tr>
                
                    <td>Dlouhá poznámka:</td>
                    <td><input type="text" name="note" size="20"></td>
                
                </tr>
                <tr>
                
                    <td><input type="reset" value="Reset"></td>
                    <td align="right"><input type="submit" value="Vytvořit kontakt"></td>
                
                </tr>
            
            </table>
        
        </form>
    </body>
</html>