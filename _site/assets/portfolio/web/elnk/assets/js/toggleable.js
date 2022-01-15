$(document).ready(function(){

  $('[data-toggleable-toggle]').click(function(event){
    var el = $(event.target || event.currentTarget),
        toggleable = el.closest('[data-toggleable]'),
        toggleableTarget = toggleable.find('.'+toggleable.attr('data-toggleable-target'));

    if(toggleableTarget.length === 0) {
      return true;
    }
    $('[data-toggleable-target]').not(toggleableTarget).each(function() {
        $(this).slideUp();
    });
    toggleableTarget.slideToggle(250);
    toggleable.toggleClass(toggleable.attr('data-toggleable-class'));
    event.preventDefault();

  });

});
