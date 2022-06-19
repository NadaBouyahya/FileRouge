var check_list = document.getElementsByClassName("test_option");
var check_btn = document.getElementById("continue_btn");
var reset_btn = document.getElementById("reset_btn");
var popup = document.getElementById("popup_container");
var popup_clear = document.getElementById("popup_clear");

var option_selected = false;

check_btn.addEventListener("click", function(){
    for(var i = 0; i < check_list.length; i++){
        if(check_list[i].checked){
            option_selected = true;
        }
    }
    if(option_selected){
        popup.style.zIndex = 2;
        popup.style.opacity = 1;
    }
    else{
        window.location = "appoinDate.php";
    }
})

reset_btn.addEventListener("click", function(){
    for(var i = 0; i < check_list.length; i++){
        if(check_list[i].checked){
            check_list[i].checked = false;
        }
    }
})

popup_clear.addEventListener("click", function(){
    popup.style.zIndex = -1;
    popup.style.opacity = 0;
})