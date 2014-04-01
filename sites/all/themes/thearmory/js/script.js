(function ($, Drupal, window, document, undefined) {

  Drupal.behaviors.formUpdates = {
    attach: function (context, settings) {
      $('.webform-component-email input, .webform-component-textfield input, textarea', context).each(function() {
        var label, labelText;
        this.removeAttribute('size');
        
        if ($(this).is('input')) {
          var label = $(this).siblings('label');
        } else {
          var label = $(this).parent().siblings('label');
        }
        
        var labelText = $(label).text().replace(' *', '');
        $(label).hide();
        $(this).attr('placeholder', labelText);
      });
    }
  }
  
})(jQuery, Drupal, this, this.document);