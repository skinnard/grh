$(document).ready(function() {

  // Card toggles are for mobile
  $('[data-package-card-toggle]').on('click', function(e) {
    var el = $(e.currentTarget);
    var package = el.attr('data-package-card-toggle');

    $('.security-filter-menu__item--active').removeClass('security-filter-menu__item--active');
    $('.product-security--visible').removeClass('product-security--visible');
    $('.product-security--current').removeClass('product-security--current');

    el.addClass('security-filter-menu__item--active');
    $('.product-security[data-package="' + package + '"]').addClass('product-security--visible');

    $('[data-package-details-toggled]').addClass('product-security__container__details--closed');
    e.preventDefault();
  });

  if ($('.product-security__container__mobileNav').is(':visible')) {
    $('.security-filter-menu__item').first().triggerHandler('click');
  }

  $('[data-package-details-toggle]').on('click', function(e) {
    var button = $(e.currentTarget);
    var card = button.closest('.product-security');
    var package = card.attr('data-package');

    var details = $('[data-package-details-toggled]');
    var currentPackage = details.attr('data-package-selected');
    var isClosed = details.hasClass('product-security__container__details--closed');

    if (isClosed) {
      details.removeClass('product-security__container__details--closed');
    }
    e.preventDefault();

    $('[data-package="' + package + '"]').addClass('product-security--current');
    $('[data-package-highlight]').removeClass('product-security__container__table--highlightColumn');
    $('.product-security--current').not('[data-package="' + package + '"]').removeClass('product-security--current');

    if (package == currentPackage) {
      details.attr('data-package-selected', null);
      details.addClass('product-security__container__details--closed');
      card.removeClass('product-security--current');
      return;
    }

    details.attr('data-package-selected', package);
    details.find('[data-package-highlight*="' + package + '"]').addClass('product-security__container__table--highlightColumn');

  });
});
