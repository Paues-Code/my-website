function sendMail() {
    emailjs.send("service_d7uflbm", "template_b7y0p1r", {
        nombre: nombre,
        name: "EnvioDeDatosDesdeElForm",
        email: email,
        mensaje: mensaje,
    }).then((response) => {
            console.log('SUCCESS!', response.status, response.text);
            window.location.href = "https://paues-code.github.io/my-website/";
        },
        (error) => {
            console.log('FAILED...', error);
        },
    );
    window.location.href = "https://paues-code.github.io/my-website/";
}

function closePage() {
    window.location.href = "https://paues-code.github.io/my-website/";
}