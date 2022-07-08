<td class="tdmain">
    <?php
    $id = $_GET['id'];
    $str1 = "SELECT * FROM tbl_product WHERE id=$id";
    $result1 = mysqli_query($conn, $str1);
    $rows1 = mysqli_fetch_array($result1);
    ?>
    <form action="index.php?mod=product&act=xl_edit" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>" />
        Name: <input type="text" name="name" value="<?php echo $rows1['name']; ?>" /><br />
        Price: <input type="text" name="price" value="<?php echo $rows1['price']; ?>" /><br />
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
        Photo: <input type="text" name="photo" value="<?php echo $rows1['photo']; ?>" /><br />
        Sumary:<br />
        <textarea name="sumary"> <?php echo $rows1['sumary']; ?> </textarea><br />
        Detail:<br />
        <textarea name="detail" class="ckeditor"> <?php echo $rows1['detail']; ?> </textarea><br />
        <input type="submit" value="Accept" />
    </form>
</td>