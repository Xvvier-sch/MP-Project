<!DOCTYPE html>
<style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 6px;
            text-align: center;
        }
    </style>
<html>
    <head>
        <?php
        require 'C:\xampp\htdocs\MP-Project\navbar.html';
        ?>
    </head>

    <body>
    <form method="post"; action="display.php">
    <table>
        <tr>
        <th class="w"; colspan="2">Message</th>
        </tr>
        <tr>
            <th class="w">Message:</th>
            <td><textarea class="t" onfocus='this.select()' name=msg>HELLO</textarea></td>
        </tr>
        <tr>
            <th>Shift Parameter:</th>
            <td><input type=text size=2 name=sp value='11'></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type=submit name='submit' value='Encode'>
                <input type=submit name='submit' value='Decode'>
                <input type=button value='Clear' onclick='this.form.elements.msg.value=""'>
            </td>
        </tr>
    </table>
    </form>
    </body>
    <footer>
        <?php
        require 'C:\xampp\htdocs\MP-Project\shared\bottom.html';
        ?>
    </footer>   
</html>


