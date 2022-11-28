jQuery(document).ready(function(){
  console.log("start calculation");
  //console.log(jQuery('act-field'));
  var matches = document.querySelectorAll(".acf-input-wrap");
  
  //jQuery('#_regular_price').val(jQuery('#acf-field_62d8d3b7b89d4').val());
  matches.forEach(p => console.log(p));
  console.log(matches.length);


  jQuery('#acf-field_62d8d3b7b89d4').change(function() {
    jQuery('#_regular_price').val(jQuery(this).val()*10);
  });

});