$('#btn_form_submit').on('click', function() {
   if ($('#profile_form').parsley().validate()) {
       $('#profile_form').submit();
   }
});