$(document).ready(function() {
    // $(".datatable").DataTable();
    $(".select2").select2();
    $(".datepicker").datepicker({
        format: "yyyy-mm-dd"
    });
    CKEDITOR.replace( 'editor');
});
