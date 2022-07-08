<td class="tdmain">
    <form action="index.php?mod=product&act=xl_insert" method="POST">
        Name: <input type="text" name="name" value="" /><br />
        Price: <input type="text" name="price" value="" /><br />
        <?php
        $str = "SELECT * FROM tbl_group_product";
        $result = mysqli_query($conn, $str);
        ?>
        Group:
        <select name="id_group">
            <?php
            while ($rows = mysqli_fetch_array($result)) {
            ?>
            <option value="<?php echo $rows['id']; ?>">
                <?php echo $rows['name']; ?>
            </option>
            <?php
            }
            ?>
        </select>
        <br />
        Photo: <input type="text" name="photo" value="" /><br />
        Sumary: <br />
        <textarea name="sumary"></textarea> <br />
        Detail: <br />
        <textarea name="detail" class="ckeditor"></textarea> <br />
        <input type="submit" value="Accept" />
        </from>
</td>