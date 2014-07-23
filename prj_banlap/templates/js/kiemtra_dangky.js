// kiem tra dang ky
                $(document).ready(function(){
                $("button#ok").click(function(){
                    hoten= $("#txthoten").val();
                    diachi= $("#txtdiachi").val();
                    email= $("#txtmail").val();
                    dienthoai= $("#txtdienthoai").val();
                    name= $("#txtname").val();
                    pass= $("#txtpass").val();
                    repass= $("#txtrepass").val();
                    maantoan= $("#txtmaantoan").val();
		$.ajax({
			url:"index.php?controller=ajax&action=dangky_kt",
			type:"post",
			data:"name="+name+"&pass="+pass+"&repass="+repass+"&hoten="+hoten+"&diachi="+diachi+"&email="+email+"&dienthoai="+dienthoai+"&maantoan="+maantoan,
			async:true,
			success:function(kq){
                            if(kq==1){
                                $("#loi").html("Wrong username or password");
                            }else{
                                $("#loi").html(kq);
                            }
			}
		});
                    return false;
                });
            });
