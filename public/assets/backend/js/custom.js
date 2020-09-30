$(document).ready(function() {
    // $(".datatable").DataTable();
    $(".select2").select2();
    $(".datepicker").datepicker({
        format: "yyyy-mm-dd"
    });
    $(".custom-file-input").on("change", function() {
        var fileName = $(this)
            .val()
            .split("\\")
            .pop();
        $(this)
            .siblings(".custom-file-label")
            .addClass("selected")
            .html(fileName);
    });
    // $(".datepicker-month-year").datepicker({
    //     format: "mm-yyyy",
    //     startView: "months",
    //     minViewMode: "months"
    // });
    
    $('#kode-induk').change(function () { 
        var kodeInduk = $(this).val();
        $('#kode-rekening').val(kodeInduk);
    });
    
    $('#kategori-sp').change(function () { 
        var kodeSp = 'SP-' + $(this).find(":selected").text() + '-';
        $('#kode-sp').val(kodeSp);
    });
    
    $('#kategori-supplier input[type="radio"]').click(function() {
        var kategori = $(this).val();
        $('#kode-supplier').val(kategori.charAt(0));
    });
});
