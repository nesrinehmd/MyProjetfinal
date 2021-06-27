
$(function(){
    $('.choice1').click(function(){
        $('.pro-choice').css('background','#18898d55') // effet choice button
        $('.particular-choice').css('background','white')
        $('.pro').css('display','none')
    })
})

$(function(){
    $('.choice2').click(function(){
        $('.particular-choice').css('background','#18898d55')
        $('.pro-choice').css('background','white')
        $('.pro').css('display','block')
    })
})

// Les formulaires 

// écoles

$(function(){
    $('#cat01').click(function(){
        $('#modal01').css('display','block')
        $('body').css('overflow-y','hidden')
    })
})

$(function(){
    $('.close-cat').click(function(){
        $('.modal').css('display','none')
        $('body').css('overflow-y','auto')
        window.location.href = 'profil.php';
    })
})


// Immobilier

$(function(){
    $('#cat02').click(function(){
        $('#modal02').css('display','block')
        $('body').css('overflow-y','hidden')
    })
})


// Entreprises

$(function(){
    $('#cat03').click(function(){
        $('#modal03').css('display','block')
        $('body').css('overflow-y','hidden')
    })
})


// Empois

$(function(){
    $('#cat04').click(function(){
        $('#modal04').css('display','block')
        $('body').css('overflow-y','hidden')
    })
})

// Véhicules

$(function(){
    $('#cat05').click(function(){
        $('#modal05').css('display','block')
        $('body').css('overflow-y','hidden')
    })
})


// High-Tech / Téléphonie

$(function(){
    $('#cat06').click(function(){
        $('#modal06').css('display','block')
        $('body').css('overflow-y','hidden')
    })
})


// Informatique

$(function(){
    $('#cat07').click(function(){
        $('#modal07').css('display','block')
        $('body').css('overflow-y','hidden')
    })
})


// Cuisine

$(function(){
    $('#cat0705').click(function(){
        $('#modal0705').css('display','block')
        $('body').css('overflow-y','hidden')
    })
})


// Beauté et bien étre


$(function(){
    $('#cat08').click(function(){
        $('#modal08').css('display','block')
        $('body').css('overflow-y','hidden')
    })
})


// Hygiène et Santé


$(function(){
    $('#cat09').click(function(){
        $('#modal09').css('display','block')
        $('body').css('overflow-y','hidden')
    })
})



// Mode


$(function(){
    $('#cat10').click(function(){
        $('#modal10').css('display','block')
        $('body').css('overflow-y','hidden')
    })
})



// Mode


$(function(){
    $('#cat11').click(function(){
        $('#modal11').css('display','block')
        $('body').css('overflow-y','hidden')
    })
})


// Matériaux et équipements

$(function(){
    $('#cat12').click(function(){
        $('#modal12').css('display','block')
        $('body').css('overflow-y','hidden')
    })
})



// voyages

$(function(){
    $('#cat13').click(function(){
        $('#modal13').css('display','block')
        $('body').css('overflow-y','hidden')
    })
})

// bricolage

$(function(){
    $('#cat14').click(function(){
        $('#modal14').css('display','block')
        $('body').css('overflow-y','hidden')
    })
})



// La section filtres

// écoles

rubrique1 = document.querySelector('#rubrique1')

rubrique1.addEventListener('click',function(){
    if(rubrique1.value == "creche")
    {
        document.querySelector('#creche-filtres').style.display = "flex"
    }
    else
    {
        document.querySelector('#creche-filtres').style.display = "none"
    }

    if(rubrique1.value == "special")
    {
        document.querySelector('#special-filtres').style.display = "flex"
    }
    else
    {
        document.querySelector('#special-filtres').style.display = "none"
    }

    if(rubrique1.value == "form_pro")
    {
        document.querySelector('#form_pro').style.display = "block"
    }
    else
    {
        document.querySelector('#form_pro').style.display = "none"
    }
})


// Vihécules
rubrique5 = document.querySelector('#rubrique-vihecule')

rubrique5.addEventListener('click',function(){
    
    if(rubrique5.value == "autos" || rubrique5.value == "camions" || rubrique5.value == "motos" || rubrique5.value == "scooters" 
    || rubrique5.value == "engins" || rubrique5.value == "fourgons" || rubrique5.value == "remorques" || rubrique5.value == "bus" || rubrique5.value == "tracteurs" || rubrique5.value == "bateaux" || rubrique5.value == "quads")
    {
        vehiculehide = document.querySelectorAll('.hide_vihecule')
        for(valeur of vehiculehide)
        {
            valeur.style.display = "block"
        }
    }
    else
    {
        vehiculehide = document.querySelectorAll('.hide_vihecule')
        for(valeur of vehiculehide)
        {
            valeur.style.display = "none"
        }
    }
})


// high-tech

rubrique6 = document.querySelector('.rubrique6')

rubrique6.addEventListener('click',function(){
    if(rubrique6.value == "smartphone")
    {
        document.querySelector('#smartphone-filtres').style.display = "grid"
    }
    else
    {
        document.querySelector('#smartphone-filtres').style.display = "none"
    }

    if(rubrique6.value == "fixe")
    {
        document.querySelector('#fixe-filtres').style.display = "flex"
    }
    else
    {
        document.querySelector('#fixe-filtres').style.display = "none"
    }
})

