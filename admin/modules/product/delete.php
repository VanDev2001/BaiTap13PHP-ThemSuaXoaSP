<td class="tdmain">
    <?php
    $id = $_GET['id'];
    $str = "Delete From tbl_product Where id='$id'";
    $result = mysqli_query($conn, $str);
    if ($result)
        header('location:index.php?mod=product');
    else
        echo "Xoa that bai!";
    ?>
</td>