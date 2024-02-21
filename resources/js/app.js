import './bootstrap';
import $ from 'jquery';
import jqueryValidate from "jquery-validation";
import { validationRules } from "@/validationRules.js";
import { validateFile } from "@/validateFile.js";

$('form').submit(e => {
    e.preventDefault();
    if(!validateFile()) return;

    const data = new FormData($('form')[0]);

    $('#loading').removeClass('hidden');

    $.ajax({
        url: '/send',
        method: 'POST',
        data: data,
        cache: false,
        processData: false,
        contentType: false,
        error : (jqXHR) => {
            const errors = jqXHR.responseJSON.errors;
            if(!errors) return;
            $('#errors').empty();
            Object.keys(errors).forEach(key => {
                const item = errors[key];
                $('#errors').append(`<p class="error">${item}</p>`);
                $('#loading').addClass('hidden');
            })
        },
        success: () => {
            $('#status').removeClass('hidden');
        }
    }).then(data => {
        console.log(data);
        $('#loading').addClass('hidden');
    })
})

$('form').validate({
    errorClass: "error",
    rules: validationRules
});
