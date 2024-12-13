import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


var  ss = document.getElementById('sess');

addEventListener('click', function() {
    
    ss.style.display  = "none";
})

$(function(){

    var $sections=$('.form-section');

    function navigateTo(index) {
        
        $sections.removeClass('current').eq(index).addClass('current');

        $('.form-navigation .previous').toggle(index>0);
        var  atTheEnd  = index >= $sections.length -1;
          
        $('.form-navigation .next').toggle(!atTheEnd);
        $('.form-navigation .submit').toggle(atTheEnd);
    }

    function curIndex() {
        
      return $sections.index($sections.filter('.current'));

    }

    $('.form-navigation .previous').click(function(){
        
        navigateTo(curIndex() - 1);
    });

    $('.form-navigation .next').click(function(){
        
        $('.form').parsley().whenValidate({

            group:"block-"+curIndex()
        }).done(function(){
            
            navigateTo(curIndex()+1);
        });
        
    });

    $sections.each(function(index,section){
        
        $(section).find(':input').attr('data-parsley-group', 'block-'+index);
    });

    navigateTo(0);

        

});


$(document).ready(function(){

    $('#name').on('change', function(){
        $('.data').hide();
        $('#' + $(this).val()).fadeIn(700);
    }).change();
    
});
       