$(function(){ // Menu du header
    $('.fa-bullhorn').on('click',function(){
        $('#header-menu').toggle()
        $('#user-menu').css('display','none')
    })
})



$(function(){ // Menu du header
    $('#user-coords').on('click',function(){
        $('#user-menu').toggle()
        $('#header-menu').css('display','none')
    })
})


