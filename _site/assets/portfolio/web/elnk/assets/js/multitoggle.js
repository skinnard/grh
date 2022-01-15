$(document).ready(function(){

  $('[data-multitoggle-toggle]').click(function(event){
    var el = $(this);
    var plan = el.attr('data-multitoggle-toggle');

    $('[data-multitoggle!="'+plan+'"]').each(function(i, el){
      $(el).removeClass($(el).attr('data-multitoggle-class'));
    });

    $('[data-multitoggle="'+plan+'"]').each(function(i, el){
      $(el).toggleClass($(el).attr('data-multitoggle-class'));
    });
    event.preventDefault();
  });

});
