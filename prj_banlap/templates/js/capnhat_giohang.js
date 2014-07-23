// kiem tra dang ky
                $(document).ready(function(){
                $("button#update_cart").click(function(){
                    gia= $("#gia1").html();
                    soluong= $("#soluong1").val();
//                    alert(gia+"<br/>"+soluong+"<br/>");
		$.ajax({
			url:"index.php?controller=ajax&action=capnhat_giohang",
			type:"post",
			data:"gia="+gia+"&soluong="+soluong+"&thanhtien="+thanhtien,
			async:true,
			success:function(kq){
                            $("#thanhtien1").html(kq);
			}
		});
                    return false;
                });
            });
