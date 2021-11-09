function Addtocart(dishname){
    $.ajax({
        url:"index.php?controller=Menu&action=StoreDish",
        method: "POST",
        data:{
            "Iddish": dishname
        },
        success:function(data){
            $("span[name=dish-in-cart]").html(data);
        }
    });
    
}

function MenuChanged(type) {
    if(type.value == "ALL"){ $("#menu-list").children().css('display','list-item'); return;}
    $("#menu-list").children("li[name!="+ type.value+ "]").css('display','none');
    $("#menu-list").children("li[name="+ type.value+ "]").css('display','list-item');
}

