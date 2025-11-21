function sendMail() {
    emailjs.send("service_d7uflbm", "template_b7y0p1r", {
        nombre: nombre,
        name: "EnvioDeDatosDesdeElForm",
        email: email,
        mensaje: mensaje,
    }).then((response) => {
            console.log('SUCCESS!', response.status, response.text);
        },
        (error) => {
            console.log('FAILED...', error);
        },
    );
}

function closePage() {
    window.location.href = "https://paues-code.github.io/my-website/";
}