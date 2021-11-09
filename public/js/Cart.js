function update(dishname,option){
    // var x = $("#namess").val();
    // var y = $('#sdt').val();
    // $("#"+dishname).val(Number($("#"+dishname).val())+1);

    if(option=='-'){
    if($("#"+dishname).val() == "1") return;
    $.ajax({
        url:"index.php?controller=Cart&action=ReduceQuantity",
        method: "POST",
        data:{
        "dish": dishname
        },
        success:function(data){
        result=JSON.parse(data)
        $("#"+dishname).val(result[0]);
        $("#"+dishname+"Price").html(result[1]*result[0]);
        }
    });
    }
    else{
        $.ajax({
            url:"index.php?controller=Cart&action=IncreaseQuantity",
            method: "POST",
            data:{
            "dish": dishname
            },
            success:function(data){
            result=JSON.parse(data)
            $("#"+dishname).val(result[0]);
            $("#"+dishname+"Price").html(result[1]*result[0]);
            }
        });
    }
}

function deletedish(dishname){
    $.ajax({
        url:"index.php?controller=Cart&action=RemoveItem",
        method: "POST",
        data:{
        "dish": dishname
        }
    });
    if($("span[name=dish-in-cart]").html() == "1"){location.reload(); return;} 
    $("span[name=dish-in-cart]").html(Number($("span[name=dish-in-cart]").html())-1);
    $("#"+dishname+"DISH").remove();
}

function submitcart(){
    if($("#information1").val() && $("#information2").val()){
        $.ajax({
          url:"index.php?controller=Cart&action=addCartDB",
          method: "POST",
          data:{
          "fullname": $("#information1").val(),
          "phone": $("#information2").val(),
          "place": $('#selectList :selected').text()
          },
          success:function(data){
            location.reload();
            alert("Đơn hàng đã được gửi.");
          }
        });
      }
      else{
        $.ajax({
          url:"index.php?controller=Cart&action=addCartDB",
          method: "POST",
          data:{
          "place": $('#selectList :selected').text()
          },
          success:function(data){
            if(data == 0){ alert("Vui lòng điền thông tin"); return;}
            location.reload();
            alert("Đơn hàng đã được gửi.");
          }
        });
      }
}
