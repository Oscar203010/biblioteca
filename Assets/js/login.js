function frmLogin(e) {
    e.preventDefault();
    const correo = document.getElementById("correo");
    const clave = document.getElementById("clave");
    if (correo.value == "") {
        clave.classList.remove("is-invalid");
        correo.classList.add("is-invalid");
        correo.focus();
    } else if (clave.value == "") {
        correo.classList.remove("is-invalid");
        clave.classList.add("is-invalid");
        clave.focus();
    } else {
        const url = base_url + "Usuarios/validar";
        const frm = document.getElementById("frmLogin");
        const http = new XMLHttpRequest();
        http.open("POST", url, true);
        http.send(new FormData(frm));
        http.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                const res = JSON.parse(this.responseText);
                if (res == "Ok") {
                    // Mostrar SweetAlert de éxito
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer);
                            toast.addEventListener('mouseleave', Swal.resumeTimer);
                        }
                    });

                    Toast.fire({
                        icon: 'success',
                        title: 'Acceso concedido'
                    });
                    // Redireccionar después de 3 segundos
                    setTimeout(() => {
                        window.location.href = base_url + "Dashboard";
                    }, 3000);
                } else {
                    // Mostrar SweetAlert de error
                    // Mostrar SweetAlert de error con tamaño pequeño
                    Swal.fire({
                        icon: 'error',
                        title: 'Credenciales incorrectas',
                        text: 'Usuario o contraseña incorrectos',
                    });

                    // Limpiar campos y eliminar mensajes de error
                    correo.value = "";
                    clave.value = "";
                    correo.classList.remove("is-invalid");
                    clave.classList.remove("is-invalid");
                }
            }
        };
    }
}
