jQuery(function () {
  jQuery(".mobile-nav-toggle").click(function () {
    jQuery("#mobile-nav.is-open").toggleClass("open");
    jQuery(".toggle").toggleClass("active");
    jQuery(".case").toggleClass("slide");
    jQuery(".b1item").toggleClass("slide");
  });
});
