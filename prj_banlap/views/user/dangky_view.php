<?php
    require_once 'templates/top.php';
    require_once 'templates/banner.php';
?>
    <div id='product'>
        <h3>ĐĂNG KÝ</h3>
        <form id='formdk' action='' method='post'>
            <label>Họ tên</label>
            <input type='text' size='50' id='txthoten'/><br/>
            <label>Địa chỉ</label>
            <input type='text' size='50' id='txtdiachi'/><br/>
            <label>Email</label>
            <input type='text' size='50' id='txtmail'/><br/>
            <label>Điện thoại</label>
            <input type='text' size='50' id='txtdienthoai'/><br/>
            <label>Username<span class='hoathi'> *</span></label>
            <input type='text' size='50' id='txtname'/><br/>
            <label>Password<span class='hoathi'> *</span></label>
            <input type='password' size='50' id='txtpass'/><br/>
            <label>Nhập lại password<span class='hoathi'> *</span></label>
            <input type='password' size='50' id='txtrepass'/><br/>
            <label>Mã an toàn<span class='hoathi'> *</span></label>
            <input type='text' size='15' id='txtmaantoan'/><br/>
            <p>Nhập mã an toàn giống hình bên</p>
            <label>&nbsp;</label><button id='ok'>Đăng ký</button>
            <div id='loi'></div>
        </form>
     </div>
<?php
    require_once 'templates/right.php';
    require_once 'templates/bottom.php';
?>

