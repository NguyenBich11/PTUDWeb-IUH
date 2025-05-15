<h2>Quản lý sản phẩm</h2>
<a href="" class="add-product">Thêm sản phẩm</a>
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
                            <td>'.$row['HinhAnh'].'</td>
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
        ?>
    </tbody>
</table>