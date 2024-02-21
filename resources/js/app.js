import './bootstrap';
import $ from 'jquery';
import jqueryValidate from "jquery-validation";
import { validationRules } from "@/validationRules.js";

function validateFile() {
    const file = document.querySelector('#fileInput').files[0];
    const maxSize = 5_242_880; // in bytes

    if(!file) {
        return false;
    }

    // check file type
    if(file.type !== 'image/jpeg' && file.type !== 'application/pdf') {
        $('#typeError').removeClass('hidden');
        return false;
    } else {
        !$('#typeError').hasClass('hidden') && $('#typeError').addClass('hidden');
    }

    // check file size
    if(file.size > maxSize) {
        $('#fileError').removeClass('hidden');
        return false;
    } else {
        !$('#fileError').hasClass('hidden') && $('#fileError').addClass('hidden');
    }

    return true;
}

$('form').submit(e => {
    e.preventDefault();
    if(!validateFile()) return;

    const data = new FormData($('form')[0]);
    data.append('test', 'test');

    $.ajax({
        url: '/send',
        method: 'POST',
        data: data,
        cache: false,
        processData: false,
        contentType: false,
        error : function(jqXHR){
            console.log(jqXHR)
        }
    }).then(data => {
        console.log(data);
    })
})

$('form').validate({
    errorClass: "error",
    rules: validationRules
});
