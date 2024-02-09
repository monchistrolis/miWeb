document.addEventListener("DOMContentLoaded", function() {
    // Función para copiar el correo
    function copyEmail() {
        var emailInput = document.getElementById("emailInput");
        var email = emailInput.placeholder; // Obtener el valor del placeholder
        var copyMessage = document.getElementById("copyMessage");
        
        // Crear un input auxiliar para copiar el correo electrónico del placeholder
        var aux = document.createElement("input");
        aux.setAttribute("value", email);
        document.body.appendChild(aux);
        aux.select();
        document.execCommand("copy");
        document.body.removeChild(aux);

        copyMessage.textContent = "Correo copiado";
        copyMessage.style.display = "flex"; // Mostrar el mensaje

        // Ocultar el mensaje después de 2 segundos
        setTimeout(function() {
            copyMessage.style.display = "none"; // Ocultar el mensaje después de 2 segundos
        }, 2000); // 2000 milisegundos = 2 segundos
    }

    // Obtener el botón "Copiar Correo" y agregar event listener
    var copyButton = document.getElementById("copyButton");
    copyButton.addEventListener("click", copyEmail);
});


