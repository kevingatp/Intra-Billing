// adding dot in ticket-price input in create
$(function () {
    if ($('div').is('.billing-form')) {
        $(document).ready(function () {
            $('input#total-price-id').keyup(function (event) {
                if (event.which >= 37 && event.which <= 40)
                    return;
                $(this).val(function (index, value) {
                    return value
                            .replace(/\D/g, "")
                            .replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                });
            });
        });
    }
});

//validate ticket should be at least 25.000 in create
$(function () {
    if ($('div').is('.billing-form')) {
        $(document).ready(function () {
            document.getElementById("total-price-id").addEventListener("change", myFunction);
            function myFunction() {
                var bruto = $("#total-price-id").val();
                bruto = bruto.split('.').join("");
                if (bruto < 100) {
                    alert('Item Price min. Rp. 100,-');
                    $("#total-price-id").val('');
                }
            }
        });
    }
});

//adding space in fleet license plate
$(function () {
    if ($('div').is('.billing-form')) {
        $(document).ready(function () {
            document.getElementById("license-plate-id").addEventListener("change", myFunction);
            function myFunction() {
                $('#license-plate-id').val(function (index, value) {
                    var alpha = value.replace(/\B(?=(\d{4}))\B/, " ");
                    var beta = alpha.replace(/\B(?=[A-Z]{3})\B/, " ");
                    return beta;                        
                });
            }
        });
    }
});

//force uppercase on license plate
$("#license-plate-id").bind('keyup', function (e) {
    if (e.which >= 97 && e.which <= 122) {
        var newKey = e.which - 32;
        // I have tried setting those
        e.keyCode = newKey;
        e.charCode = newKey;
    }

    $("#license-plate-id").val(($("#license-plate-id").val()).toUpperCase());
});

