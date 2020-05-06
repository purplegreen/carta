jQuery(function () {
  jQuery(document).ready(function () {
    jQuery(".pagenavi a").each(function (i, a) {
      jQuery(a).attr("href", jQuery(a).attr("href") + "#blog");
    });
  });
});
