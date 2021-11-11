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


function SortName(func){
    if(func == "asc_sort") 
        $("#menu-list li").sort(asc_sort1).appendTo('#menu-list');
    else if(func == "desc_sort")
        $("#menu-list li").sort(desc_sort1).appendTo('#menu-list');
    else return;
    $("#sort-dish-price").val("Gia").change();

   // $('#sort-dish-price option[value=Gia]').attr('selected','selected');
}

// Sắp xếp theo thứ tự tăng dần
function asc_sort1(a, b){
    return ($(a).children('h4').text()) > ($(b).children('h4').text()) ? 1 : -1;    
}
// Sắp xếp theo thứ tự giảm dần
function desc_sort1(a, b){
    return ($(a).children('h4').text()) < ($(b).children('h4').text()) ? 1 : -1;    
}


function SortPrice(func){
    if(func == "asc_sort") 
        $("#menu-list li").sort(asc_sort2).appendTo('#menu-list');
    else if(func == "desc_sort")
        $("#menu-list li").sort(desc_sort2).appendTo('#menu-list');
    else return;
    $("#sort-dish-name").val("Ten").change();

    //$('#sort-dish-name option[value=Ten]').attr('selected','selected');

    // $("#sort-dish-name select").val("Ten");
}
// Sắp xếp theo thứ tự tăng dần
function asc_sort2(a, b){
    return ($(a).children('label').text()) > ($(b).children('label').text()) ? 1 : -1;    
}
// Sắp xếp theo thứ tự giảm dần
function desc_sort2(a, b){
    return ($(a).children('label').text()) < ($(b).children('label').text()) ? 1 : -1;    
}