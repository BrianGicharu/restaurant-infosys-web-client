$("#passToggle").on('click',e=>{
    if($("#passInput").attr('type')==="password"){
        $("#passInput").attr("type","text")
        $("#passEye").toggleClass("fa-eye fa-eye-slash")
    }else{
        $("#passInput").attr("type","password")
        $("#passEye").toggleClass("fa-eye fa-eye-slash")
    }
})