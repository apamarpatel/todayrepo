<table align="center" border="2" bgcolor="plum">
        <tr>
            <th>Code</th>
            <th>name</th>
            <th>Qty</th>
            <th>price</th>
        </tr>
        <?php
         if($result)
         {
        foreach ($result as $r)
        {
            ?>
        <tr>
            <td><?php echo $r["code"];?></td>
            <td><?php echo $r["name"];?></td>
            <td><?php echo $r["qty"];?></td>
            <td><?php echo $r["price"];?></td>
         </tr>
         <?php
        }
     }
        ?>
</table>