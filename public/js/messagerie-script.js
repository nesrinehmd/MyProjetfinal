
var reduce = document.querySelector(".chat-reduce");





reduce.addEventListener('click',function(){
    {
        document.querySelector("#chat-box").style.visibility = 'hidden'
        document.querySelector(".user-preview").style.visibility = 'visible'

        /*
        document.querySelector("#chat-box").style.height = '50px'
        document.querySelector("#chat-header").style.height = '100%'
        document.querySelector("#chat-footer").style.visibility = 'hidden'
        document.querySelector("#chat-body").style.visibility = 'hidden'
        */
    }
})


document.querySelector('.user-preview').addEventListener('click',function(){
    {
        document.querySelector("#chat-box").style.visibility = 'visible'
        document.querySelector(".user-preview").style.visibility = 'hidden'
    }
})

/*
document.querySelector("#chat-box").style.display = 'none'

document.querySelector('.user').addEventListener('click',function(){
    document.querySelector("#chat-box").style.display = 'block'  
})


document.querySelector('.fa-times').addEventListener('click',function(){
    document.querySelector("#chat-box").style.display = 'none'  
})
*/

$("#chat-box").hide()

$(function(){
    $('.user').click(function(){
        $("#chat-box").show()
    })
    
    
    $('.chat-close').click(function(){
        $("#chat-box").hide()
    })
})


$("#heart").click(function(){
    $('#heart').toggleClass("heart");
  });