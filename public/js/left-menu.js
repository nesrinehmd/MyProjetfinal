$(function(){   // Affichage menu de gauche (catégories)
    $('#left-menu').hide()  
    $('#btn-all, #btnall').click(function(){ 
      $('#modal-menu').show()
      $('#left-menu').show('slide')
      $('#modal-body').scrollTop(0)
      $('body').css('overflow-y','hidden')
  })
  })
  
  
  $(function(){ // Masquer menu de gauche (catégories)
    $('#close-menu').click(function(){ //
      $('#modal-menu').hide()
      $('#left-menu').hide('slide')
      $('body').css('overflow-y','auto')
  })
  
  })
  
  
  let modal = document.querySelector('#modal-menu') // Fermer le menu en cas de clique ailleur
  
  window.onclick = function(event) {
      if (event.target == modal) {
          $('#modal-menu').hide()
          $('#left-menu').hide('slide')
          $('body').css('overflow-y','auto')
      }
  }
  
  
  
  
  let accordion_menu = document.getElementsByClassName("accordion"); // les accordions du menu de gauche
  let compteur;
  
  for (compteur = 0; compteur < accordion_menu.length; compteur++) {
    accordion_menu[compteur].addEventListener("click", function() {
      this.classList.toggle("active");
      let panel = this.nextElementSibling;
      if (panel.style.maxHeight)
       {
        panel.style.maxHeight = null;
      } 
      else {
        panel.style.maxHeight = panel.scrollHeight + "px";
        
      } 
    });
  }


  $(function(){
    $('#preview01').css('display','none')
    $('#pre01, #preview01').hover(function(){
      $('#preview01').css('display','flex')
    },function(){
      $('#preview01').css('display','none')
    })
  })


  
  $(function(){
    $('#preview02').css('display','none')
    $('#pre02, #preview02').hover(function(){
      $('#preview02').css('display','flex')
    },function(){
      $('#preview02').css('display','none')
    })
  })



  $(function(){
    $('#preview03').css('display','none')
    $('#pre03, #preview03').hover(function(){
      $('#preview03').css('display','flex')
    },function(){
      $('#preview03').css('display','none')
    })
  })


  $(function(){
    $('#preview04').css('display','none')
    $('#pre04, #preview04').hover(function(){
      $('#preview04').css('display','flex')
    },function(){
      $('#preview04').css('display','none')
    })
  })


$(function(){
    $('#preview05').css('display','none')
    $('#pre05, #preview05').hover(function(){
      $('#preview05').css('display','flex')
    },function(){
      $('#preview05').css('display','none')
    })
  })



$(function(){
    $('#preview06').css('display','none')
    $('#pre06, #preview06').hover(function(){
      $('#preview06').css('display','flex')
    },function(){
      $('#preview06').css('display','none')
    })
  })



$(function(){
    $('#preview07').css('display','none')
    $('#pre07, #preview07').hover(function(){
      $('#preview07').css('display','flex')
    },function(){
      $('#preview07').css('display','none')
    })
  })