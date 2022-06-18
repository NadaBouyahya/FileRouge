var check_list = document.getElementsByClassName("test_option");
var check_btn = document.getElementById("continue_btn");
var reset_btn = document.getElementById("reset_btn");
var option_selected = false;

check_btn.addEventListener("click", function(){
    for(var i = 0; i < check_list.length; i++){
        if(check_list[i].checked){
            option_selected = true;
        }
    }
    if(option_selected){
        alert("you can't donate");
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
