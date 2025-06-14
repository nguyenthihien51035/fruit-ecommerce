<?php
include('connect.php');
?>

<?php
class data_product
{
    public function insert_product($TenSanPham, $SoLuongSanPham, $HinhAnhSanPham, $TheLoaiSanPham, $NgayNhapSanPham, $GiaSanPham, $MoTaSanPham)
    {
        global $conn;
        $sql = "insert into product(tensanpham, soluongsanpham, hinhanhsanpham, theloaisanpham, ngaynhapsanpham, giasanpham, motasanpham) values
            ('$TenSanPham', '$SoLuongSanPham', '$HinhAnhSanPham', '$TheLoaiSanPham', '$NgayNhapSanPham', '$GiaSanPham', '$MoTaSanPham')";
        echo $sql;
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function select_product()
    {
        global $conn;
        $sql = "select * from product";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function select_product_id($id_product)
    {
        global $conn;
        $sql = "select * from product where id_product = '$id_product'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function productDetails($id)
    {
        global $conn;
        $sql = "SELECT p.*, c.TenDanhMuc, SUM(p.SoLuongSanPham * GiaSanPham) as ThanhTien
                FROM product p
                LEFT JOIN category c ON p.TheLoaiSanPham = c.id_category
                WHERE p.id_product = '$id'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }


    public function update_product($id_product, $TenSanPham, $SoLuongSanPham, $HinhAnhSanPham, $TheLoaiSanPham, $NgayNhapSanPham, $GiaSanPham, $MoTaSanPham)
    {
        global $conn;

        // Nếu không upload ảnh mới, giữ nguyên ảnh cũ
        if ($HinhAnhSanPham == '') {
            $sql = "UPDATE product 
                    SET tensanpham = '$TenSanPham', 
                        soluongsanpham = '$SoLuongSanPham', 
                        theloaisanpham = '$TheLoaiSanPham',  
                        ngaynhapsanpham = '$NgayNhapSanPham', 
                        giasanpham = '$GiaSanPham', 
                        motasanpham = '$MoTaSanPham' 
                    WHERE id_product = '$id_product'";
        } else {
            $sql = "UPDATE product 
                    SET tensanpham = '$TenSanPham', 
                        soluongsanpham = '$SoLuongSanPham', 
                        hinhanhsanpham = '$HinhAnhSanPham', 
                        theloaisanpham = '$TheLoaiSanPham',  
                        ngaynhapsanpham = '$NgayNhapSanPham', 
                        giasanpham = '$GiaSanPham', 
                        motasanpham = '$MoTaSanPham' 
                    WHERE id_product = '$id_product'";
        }
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function delete_product($id_product)
    {
        global $conn;
        $sql = "delete from product where id_product = '$id_product'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function select_product_1()
    {
        global $conn;
        $sql = "select * from product order by ngaynhapsanpham desc limit 1";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function select_product_2()
    {
        global $conn;
        $sql = "select * from product order by ngaynhapsanpham desc limit 1 offset 1";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function select_product_3()
    {
        global $conn;
        $sql = "select * from product order by ngaynhapsanpham desc limit 1 offset 2";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function update_number($number_total, $id_product)
    {
        global $conn;
        $sql = "UPDATE product SET SoLuongSanPham = '$number_total' WHERE id_product = '$id_product'";
        return mysqli_query($conn, $sql);
    }

    public function update_product_quantity($id_product, $new_quantity)
    {
        global $conn;
        $sql = "UPDATE sanpham SET SoLuongSanPham = '$new_quantity' WHERE id = '$id_product'";
        return mysqli_query($conn, $sql);
    }
    // Đếm tổng số sản phẩm
    public function count_products()
    {
        global $conn;
        $sql = "SELECT COUNT(*) AS total FROM product";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row['total'];
    }

    // Lấy sản phẩm có phân trang
    public function select_product_pagination($start, $limit)
    {
        global $conn;
        $sql = "SELECT p.*, c.TenDanhMuc 
                FROM product p 
                LEFT JOIN category c ON p.TheLoaiSanPham = c.id_category 
                ORDER BY p.id_product DESC 
                LIMIT $start, $limit";
        return mysqli_query($conn, $sql);
    }
}
?>