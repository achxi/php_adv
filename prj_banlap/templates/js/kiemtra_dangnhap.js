            $(document).ready(function(){
                $("button#okdn").click(function(){
                    user= $("#txtuserdn").val();
                    pass= $("#txtpassdn").val();
                    maantoan= $("#txtmaantoandn").val();
		$.ajax({
			url:"index.php?controller=ajax&action=dangnhap_kt",
			type:"post",
			data:"user="+user+"&pass="+pass+"&maantoan="+maantoan,
			async:true,
			success:function(kq){
                            if(kq==1){
                                $("#loidn").html("Wrong 1");
                            }else{
                                $("#loidn").html(kq);
                                $("#loidn").show();
                            }
			}
		});
                    return false;
                });
            });