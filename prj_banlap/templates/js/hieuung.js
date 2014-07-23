            $(document).ready(function(){
                $("div.tk").click(function(){
                    $("div#showtk").show();
                });
                $("a#dangnhap").click(function(){
                    $("div#form_dangnhap").show();
                });                
                $("a.hientt").click(function(){
                     so = $(this).attr('id');
                     $("div#chitiet"+so).show();
                     for(i=1; i<=4; i++){
                         if(i!= so){
                             $("div#chitiet"+i).hide();
                         }
                     }
                     return false;
                });
            });