<td class="tdmain">
    <?php
    $id = $_POST['id'];
    $n = $_POST['name'];
    $p = $_POST['price'];
    $idgu = $_POST['id_group'];
    $pt = $_POST['photo'];
    $s = $_POST['sumary'];
    $d = $_POST['detail'];
    $str = "UPDATE tbl_product SET name='$n', price='$p', id_group='$idgu', photo='$pt', sumary='$s', detail='$d' WHERE id=$id";
    $result = mysqli_query($conn, $str);
    if ($result)
        echo "Sua thanh cong!";
    else
        echo "Sua that bai!";
    ?>
</td>