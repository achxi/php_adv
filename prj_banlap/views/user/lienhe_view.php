<?php
    require_once 'templates/top.php';
    require_once 'templates/banner.php';
?>
    <div id='product'>
    <h3>LIÊN HỆ</h3>
      <p>You can send us a message using the form below.</p>
      <form id='lienhe' action='#' method='post'>
            <label>Email <span class='hoa'>*</span></label>
            <input type='text' size='30' name='txtmail' id='txtmail'/><br/>
            <label>Full name <span class='hoa'>*</span></label>
            <input type='text' size='30' name='txtname' id='txtname'/><br/>
            <label>Body <span class='hoa'>*</span></label>
            <textarea cols='45' rows='5' name='txtbody' id='txtbody'></textarea><br/>
            <label>Mã an toàn<span class='hoa'>*</span></label>
            <input type=text size=20 /><br/>
            <div id='gc'>nhập mã an toàn giống hình bên</div><br/>
            <label>&nbsp;</label><button type='submit'>Send</button>
      </form>
     </div>
<?php
    require_once 'templates/right.php';
    require_once 'templates/bottom.php';
?>

