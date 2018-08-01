<?php
require_once ("models/m_user.php");
$m_user = new M_user();
if(isset($_SESSION['user'])){
    $user = $m_user->Kiem_tra_ten_dang_nhap($_SESSION['user']);
}
else
{
    echo '<script>window.location="login.php"</script>';
}
?>
<div class="header-links hidden-xs"> <span><i class="icon-comments"></i> <?php echo $user->ten; ?></span> <a href="user.php?edit=<?php echo $user->ma_nguoi_dung; ?>"><i class="icon-cog"></i> Cập nhật</a> <a href="index.php?logout"><i class="icon-signout"></i> Thoát</a> </div>