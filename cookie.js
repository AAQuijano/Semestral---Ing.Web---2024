// Función para obtener una cookie
function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}

// Mostrar el banner de cookies si no existe la cookie de consentimiento
window.onload = function () {
    if (!getCookie('cookieAccepted')) {
        document.getElementById('cookie-banner').style.display = 'flex';
    }

    // Aceptar cookies
    document.getElementById('accept-cookie').addEventListener('click', function () {
        // Crear la cookie
        document.cookie = "cookieAccepted=true; path=/; max-age=" + 60 * 60 * 24 * 30; // Expira en 30 días
        document.getElementById('cookie-banner').style.display = 'none';
    });
};
