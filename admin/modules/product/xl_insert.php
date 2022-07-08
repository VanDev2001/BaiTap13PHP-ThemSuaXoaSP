<td class="tdmain">
    <?php
    $n = $_POST['name'];
    $p = $_POST['price'];
    $idgu = $_POST['id_group'];
    $pt = $_POST['photo'];
    $s = $_POST['sumary'];
    $d = $_POST['detail'];
    $str = "INSERT INTO tbl_product VALUES ('','$n','$p','$idgu','$pt','$s','$d',NOW())";
    $result = mysqli_query($conn, $str);
    if ($result)
        echo "Them Thanh Cong";
    else
        echo "Them That Bai !!";
    ?>
</td>