"use strict";
let data = document.querySelector("#data");

$("#formulario").on("submit",function(event) {
    event.preventDefault();
    let serializedData = $(this).serialize();
    $.post('ejemplo.php', serializedData,
        response => {
            data.innerHTML = response;
    });
});
