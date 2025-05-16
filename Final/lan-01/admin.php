<h2>Quản lý sản phẩm</h2>
<a href="index.php?act=admin&func=addProduct" class="add-product">Thêm sản phẩm</a>
<table>
    <tr>
        <th>STT</th>
        <th>Tên sản phẩm</th>
        <th>Giá gốc(VNĐ)</th>
        <th>Giá đầu(VNĐ)</th>
        <th>Ảnh</th>
        <th>Thương hiệu</th>
        <th>action</th>
    </tr>
    <tbody>
        <?php 
            include("controller/cProduct.php");
            $p = new cProduct();
            $tblProduct = $p->cGetAllProduct();

            if(!$tblProduct) {
                echo "Không có dữ liệu";
            }elseif($tblProduct->num_rows > 0) {
                $i = 1;

                while($row = $tblProduct->fetch_assoc()) {
                    echo '
                        <tr>
                            <td>'.$i++.'</td>
                            <td>'.$row['TenSP'].'</td>
                            <td>'.$row['GiaGoc'].'</td>
                            <td>'.$row['GiaBan'].'</td>
                            <td> <img src="'.$row['HinhAnh'].'" style="width:50%"></td>
                            <td>'.$row['TenTH'].'</td>
                            <td>
                                <form action="index.php?act=admin&func=updateProduct" method="post" name="formUpdate">
                                    <input type="hidden" name="idProduct" value="'.$row['MaSP'].'">
                                    <button type="submit">Sửa</button>
                                </form>
                                |
                                <form action="#" method="post" name="formDeleteProduct">
                                    <input type="hidden" name="idProductDelete" value="'.$row['MaSP'].'">
                                    <button type="submit">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    ';
                }
            }

            if(isset($_POST['idProductDelete'])) {
                $rsDelete = $p->cDeleteProduct($_POST['idProductDelete']);

                if($rsDelete == true) {
                    echo "<script>alert('Xóa sản phẩm thành công')</script>";
                    header("refresh:0.1;url=index.php?act=admin");
                    exit();
                } else {
                    echo "<script>alert('Xóa không thành công')</script>";
                    exit();
                }
            }
        ?>
    </tbody>
</table>