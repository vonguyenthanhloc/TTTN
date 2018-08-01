<?php
    require_once ('models/m_hoa_don.php');
    $m_hoa_don = new M_hoa_don();
    $hoa_don = $m_hoa_don->lay_hoa_don();

    //Cap Nhat HD
    if(isset($_POST['btnCapnhat']) && isset($_POST['so_hoa_don']) && isset($_POST['ds']))
    {
        $dsTT = $_POST['ds'];
        $dsHoa_Don = $_POST['so_hoa_don'];
        for($i=0;$i<count($dsHoa_Don);$i++)
        {
            $so_hoa_don = $dsHoa_Don[$i];
            $tinh_trang = $dsTT[$i];
            $m_hoa_don->Cap_nhat_tinh_trang_hoa_don($so_hoa_don,$tinh_trang);
        }
        header('location: order.php');
    }

    //Phan Trang
    require_once("Pager.php");
    $page = new pager();
    $limit = 5;
    $coun_hd = count($hoa_dons);
    $vt = $page->findStart($limit);
    $page_hd = $page->findPages($coun_hd,$limit);
    $curpage = $_GET["page"];
    $list_hd = $page->pageList($curpage,$page_hd);
?>

<?php if(isset($hoa_dons)){ foreach($hoa_dons as $hoa_don){ ?>
    <tr>
        <td><?php echo $hoa_don->so_hoa_don; ?></td>
        <td><?php echo $hoa_don->thoi_gian; ?></td>
        <td><?php echo $hoa_don->ngay_hd; ?></td>
        <td class="text-right"><?php echo number_format($hoa_don->tri_gia); ?></td>
        <td><span class="label label-primary"><?php echo $hoa_don->ghi_chu; ?></span></td>
        <td><span class="label label-success"><?php echo $hoa_don->thanh_toan; ?></span></td>
        <td><div class="form-group">
                <select class="form-control chosen" name="ds[]">
                    <option value="0" <?php echo($hoa_don->tinh_trang==0)?"selected":"" ?>>ĐANG CHẾ BIẾN</option>
                    <option value="1" <?php echo($hoa_don->tinh_trang==1)?"selected":"" ?>>ĐÃ CHẾ BIẾN</option>
                    <option value="2" <?php echo($hoa_don->tinh_trang==2)?"selected":"" ?>>CHUYỂN SẢN PHẨM</option>
                    <option value="3" <?php echo($hoa_don->tinh_trang==3)?"selected":"" ?>>CHƯA THANH TOÁN</option>
                    <option value="4" <?php echo($hoa_don->tinh_trang==3)?"selected":"" ?>>ĐÃ THANH TOÁN</option>
                    <option value="5" <?php echo($hoa_don->tinh_trang==3)?"selected":"" ?>>CẬP NHẬT ĐƠN HÀNG</option>
                    <option value="6" <?php echo($hoa_don->tinh_trang==4)?"selected":"" ?>>HỦY</option>
                    <option value="7" <?php echo($hoa_don->tinh_trang==5)?"selected":"" ?>>HOÀN TIẾN</option>
                </select>
            </div></td>
        <input type="hidden" value="<?php echo $hoa_don->so_hoa_don ?>" name="so_hoa_don[]" />
        <td class="text-right">
            <a href="order.php?order=<?php echo $hoa_don->so_hoa_don ?>" class="btn btn-default btn-xs"><i class="icon-zoom-in">Cập nhật ĐH</i></a>

            <a href="javascript:void(0)" id="<?php echo $hoa_don->so_hoa_don; ?>" class="btn btn-default btn-xs xemCTHD"><i class="icon-zoom-in">Xem ĐH</i></a
            ></td>
    </tr>
<?php }}?>
