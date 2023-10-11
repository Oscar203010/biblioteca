let tblUsuarios, tblCategorias, tblEstudiantes, tblRoles, tblLibros, tblAutores, tblEditoriales, tblPrestamos;

document.addEventListener("DOMContentLoaded", function () {
    document.querySelector("#modalPass").addEventListener("click", function () {
        document.querySelector('#frmCambiarPass').reset();
        $('#cambiarClave').modal('show');
    });

    $(document).ready(function(){
        tblUsuarios =  $('#tblUsuarios').DataTable({
            // responsive: true,
            ajax: {
                url: base_url + "Usuarios/listar",
                dataSrc: ''
            },
            columns: [
                {
                    'data': 'id'
                },
                {
                    'data': 'usuario'
                },
                {
                    'data': 'nombres'
                },
                {
                    'data': 'apellidos'
                },
                {
                    'data': 'correo'
                },
                {
                    'data': 'estado'
                },
                {
                    'data': 'acciones'
                }
            ],
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json',
            },
            responsive: {
                details: {
                    type: 'column',
                    target: 'tr'
                }
            },
        });
    });

    tblCategorias = $('#tblCategorias').DataTable({
        ajax: {
            url: base_url + "Categorias/listar",
            dataSrc: ''
        },
        columns: [
            {
                'data': 'id'
            },

            {
                'data': 'nombre_categoria'
            },

            {
                'data': 'estado'
            },

            {
                'data': 'acciones'
            }
        ],
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json',
        },
        responsive: {
            details: {
                type: 'column',
                target: 'tr'
            }
        },
    });

    tblEstudiantes = $('#tblEstudiantes').DataTable({
        ajax: {
            url: base_url + "Estudiantes/listar",
            dataSrc: ''
        },
        columns: [
            {
                'data': 'id'
            },

            {
                'data': 'codigo'
            },

            {
                'data': 'dni'
            },

            {
                'data': 'nombres'
            },

            {
                'data': 'apellidos'
            },

            {
                'data': 'direccion'
            },

            {
                'data': 'telefono'
            },

            {
                'data': 'estado'
            },

            {
                'data': 'acciones'
            }
        ],
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json',
        },
        responsive: {
            details: {
                type: 'column',
                target: 'tr'
            }
        },
    });

    tblRoles = $('#tblRoles').DataTable({
        ajax: {
            url: base_url + "Roles/listar",
            dataSrc: ''
        },
        columns: [
            {
                'data': 'id'
            },

            {
                'data': 'nombre_rol'
            },

            {
                'data': 'estado'
            },

            {
                'data': 'acciones'
            }
        ],
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json',
        },
        responsive: {
            details: {
                type: 'column',
                target: 'tr'
            }
        },
    });

    tblLibros = $('#tblLibros').DataTable({
        ajax: {
            url: base_url + "Libros/listar",
            dataSrc: ''
        },
        columns: [
            {
                'data': 'id'
            },

            {
                'data': 'titulo'
            },

            {
                'data': 'nom_autor'
            },

            {
                'data': 'nom_editorial'
            },

            {
                'data': 'descripcion'
            },

            {
                'data': 'estado'
            },

            {
                'data': 'acciones'
            }
        ],
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json',
        },
        responsive: {
            details: {
                type: 'column',
                target: 'tr'
            }
        },
    });

    tblAutores = $('#tblAutores').DataTable({
        ajax: {
            url: base_url + "Autores/listar",
            dataSrc: ''
        },
        columns: [
            {
                'data': 'id'
            },

            {
                'data': 'nom_autor'
            },

            {
                'data': 'estado'
            },

            {
                'data': 'acciones'
            }
        ],
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json',
        },
        responsive: {
            details: {
                type: 'column',
                target: 'tr'
            }
        },
    });

    tblEditoriales = $('#tblEditoriales').DataTable({
        ajax: {
            url: base_url + "Editorial/listar",
            dataSrc: ''
        },
        columns: [
            {
                'data': 'id'
            },

            {
                'data': 'nom_editorial'
            },

            {
                'data': 'estado'
            },

            {
                'data': 'acciones'
            }
        ],
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json',
        },
        responsive: {
            details: {
                type: 'column',
                target: 'tr'
            }
        },
    });

    tblPrestamos = $('#tblPrestamos').DataTable({
        ajax: {
            url: base_url + "Prestamos/listar",
            dataSrc: ''
        },
        columns: [
            {
                'data': 'id'
            },

            {
                'data': 'titulo'
            },

            {
                'data': 'nombres'
            },

            {
                'data': 'fecha_prestamo'
            },

            {
                'data': 'fecha_devolucion'
            },

            {
                'data': 'observacion'
            },

            {
                'data': 'estado'
            },

            {
                'data': 'acciones'
            }
        ],
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json',
        },
        responsive: {
            details: {
                type: 'column',
                target: 'tr'
            }
        },
    });
    
})

//comienzo usuarios
function frmUsuario() {
    document.getElementById("title").innerHTML = "Nuevo Usuario";
    document.getElementById("btnAccion").innerHTML = "Registrar";
    document.getElementById("claves").classList.remove("d-none");
    document.getElementById("frmUsuario").reset();
    $("#nuevo_usuario").modal("show");
    document.getElementById("id").value = "";
}

function registrarUsu(e) {
    e.preventDefault();
    const usuario = document.getElementById("usuario");
    const nombres = document.getElementById("nombres");
    const apellidos = document.getElementById("apellidos");
    const correo = document.getElementById("correo");
    const clave = document.getElementById("clave");
    const confirmar = document.getElementById("confirmar");

    if (usuario.value == "" || nombres.value == "" || apellidos.value == "" || correo.value == "" ) {
        Swal.fire({
            position: 'top-star',
            icon: 'error',
            title: 'Todos los Campos son obligatorios!',
            showConfirmButton: false,
            timer: 3000
        })
        // clave.classList.remove("is-invalid");
        // usuario.classList.add("is-invalid");
        // usuario.focus();
    } else {
        const url = base_url + "Usuarios/registrar";
        const frm = document.getElementById("frmUsuario");
        const http = new XMLHttpRequest();
        http.open("POST", url, true);
        http.send(new FormData(frm));
        http.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                const res = JSON.parse(this.responseText);
                if (res == "si") {
                    Swal.fire({
                        position: 'top-star',
                        icon: 'success',
                        title: 'Usuario Registrado Correctamente!',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    frm.reset(); //receteando formulario
                    $("#nuevo_usuario").modal("hide");
                    tblUsuarios.ajax.reload();
                } else if (res == "Modificado") {
                    Swal.fire({
                        position: 'top-star',
                        icon: 'success',
                        title: 'Usuario Actualizado Correctamente!',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    $("#nuevo_usuario").modal("hide");
                    tblUsuarios.ajax.reload();
                } else{
                    Swal.fire({
                        position: 'top-star',
                        icon: 'error',
                        title: res,
                        showConfirmButton: false,
                        timer: 3000
                    })
                }
            }
        }
    }
}

function btnEditarUsuario(id) {
    document.getElementById("title").innerHTML = "Actualizar Usuario";
    document.getElementById("btnAccion").innerHTML = "Actualizar";
    const url = base_url + "Usuarios/editar/"+id;
    //const frm = document.getElementById("frmUsuario");
    const http = new XMLHttpRequest();
    http.open("GET", url, true);
    http.send();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            //console.log(this.responseText);
            const res = JSON.parse(this.responseText);
            document.getElementById("id").value = res.id;
            document.getElementById("usuario").value = res.usuario;
            document.getElementById("nombres").value = res.nombres;
            document.getElementById("apellidos").value = res.apellidos;
            document.getElementById("correo").value = res.correo;
            document.getElementById("claves").classList.add("d-none");
            $("#nuevo_usuario").modal("show");
        }
    } 
}

function btnEliminarUsuario(id) {
    Swal.fire({
        title: 'Esta Seguro de Eliminar?',
        text: "El usuario no se eliminara de forma permanente, solo cambiara al estado inactivo!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si!',
        cancelButtonText : 'No'
      }).then((result) => {
        if (result.isConfirmed) {
            
            const url = base_url + "Usuarios/eliminar/"+id;
            //const frm = document.getElementById("frmUsuario");
            const http = new XMLHttpRequest();
            http.open("GET", url, true);
            http.send();
            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    //console.log(this.responseText);
                    const res = JSON.parse(this.responseText);
                    if(res == "Ok"){
                        Swal.fire(
                            'Mensaje!',
                            'Usuario eliminado correctamente.',
                            'success'
                          )
                          tblUsuarios.ajax.reload();
                    }else{
                        Swal.fire(
                            'Mensaje!',
                            res,
                            'error'
                        )
                    }
                }
            }  
        }
    })
}

function btnReingresarUsuario(id) {
    Swal.fire({
        title: 'Esta Seguro de Reingresar?',
        //text: "El usuario no se eliminara de forma permanente, solo cambiara al estado inactivo!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si!',
        cancelButtonText : 'No'
      }).then((result) => {
        if (result.isConfirmed) {
            
            const url = base_url + "Usuarios/reingresar/"+id;
            //const frm = document.getElementById("frmUsuario");
            const http = new XMLHttpRequest();
            http.open("GET", url, true);
            http.send();
            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    //console.log(this.responseText);
                    const res = JSON.parse(this.responseText);
                    if(res == "Ok"){
                        Swal.fire(
                            'Mensaje!',
                            'Usuario reingresado correctamente!',
                            'success'
                          )
                          tblUsuarios.ajax.reload();
                    }else{
                        Swal.fire(
                            'Mensaje!',
                            res,
                            'error'
                        )
                    }
                }
            }  
        }
      })
}
// Fin usuario

//Comienzo Categorias
function frmCategoria() {
    document.getElementById("title").innerHTML = "Nuevo Categoria";
    document.getElementById("btnAccion").innerHTML = "Registrar";
    // document.getElementById("claves").classList.remove("d-none");
    document.getElementById("frmCategoria").reset();
    $("#nueva_categoria").modal("show");
    document.getElementById("id").value = "";
}

function registrarCate(e) {
    e.preventDefault();
    const nombre_categoria = document.getElementById("nombre_categoria");
    
    if (nombre_categoria.value == "") {
        Swal.fire({
            position: 'top-star',
            icon: 'error',
            title: 'Todos los Campos son obligatorios!',
            showConfirmButton: false,
            timer: 3000
        })
        // clave.classList.remove("is-invalid");
        // usuario.classList.add("is-invalid");
        // usuario.focus();
    } else {
        const url = base_url + "Categorias/registrar";
        const frm = document.getElementById("frmCategoria");
        const http = new XMLHttpRequest();
        http.open("POST", url, true);
        http.send(new FormData(frm));
        http.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                const res = JSON.parse(this.responseText);
                if (res == "si") {
                    Swal.fire({
                        position: 'top-star',
                        icon: 'success',
                        title: 'Categoria registrada Correctamente!',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    frm.reset(); //receteando formulario
                    $("#nueva_categoria").modal("hide");
                    tblCategorias.ajax.reload();
                } else if (res == "Modificado") {
                    Swal.fire({
                        position: 'top-star',
                        icon: 'success',
                        title: 'Categoria actualizada Correctamente!',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    $("#nueva_categoria").modal("hide");
                    tblCategorias.ajax.reload();
                } else{
                    Swal.fire({
                        position: 'top-star',
                        icon: 'error',
                        title: res,
                        showConfirmButton: false,
                        timer: 3000
                    })
                }
            }
        }
    }
}

function btnEditarCategorias(id) {
    document.getElementById("title").innerHTML = "Actualizar Categoria";
    document.getElementById("btnAccion").innerHTML = "Actualizar";
    const url = base_url + "Categorias/editar/"+id;
    //const frm = document.getElementById("frmUsuario");
    const http = new XMLHttpRequest();
    http.open("GET", url, true);
    http.send();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            //console.log(this.responseText);
            const res = JSON.parse(this.responseText);
            document.getElementById("id").value = res.id;
            document.getElementById("nombre_categoria").value = res.nombre_categoria;
            $("#nueva_categoria").modal("show");
        }
    } 
}

function btnEliminarCategorias(id) {
    Swal.fire({
        title: 'Esta Seguro de Eliminar?',
        text: "La categoria no se eliminara de forma permanente, solo cambiara al estado inactivo!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si!',
        cancelButtonText : 'No'
      }).then((result) => {
        if (result.isConfirmed) {
            
            const url = base_url + "Categorias/eliminar/"+id;
            //const frm = document.getElementById("frmUsuario");
            const http = new XMLHttpRequest();
            http.open("GET", url, true);
            http.send();
            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    //console.log(this.responseText);
                    const res = JSON.parse(this.responseText);
                    if(res == "Ok"){
                        Swal.fire(
                            'Mensaje!',
                            'Categoria eliminada correctamente.',
                            'success'
                          )
                          tblCategorias.ajax.reload();
                    }else{
                        Swal.fire(
                            'Mensaje!',
                            res,
                            'error'
                        )
                    }
                }
            }  
        }
    })
}

function btnReingresarCategorias(id) {
    Swal.fire({
        title: 'Esta Seguro de Reingresar?',
        //text: "El usuario no se eliminara de forma permanente, solo cambiara al estado inactivo!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si!',
        cancelButtonText : 'No'
      }).then((result) => {
        if (result.isConfirmed) {
            
            const url = base_url + "Categorias/reingresar/"+id;
            //const frm = document.getElementById("frmUsuario");
            const http = new XMLHttpRequest();
            http.open("GET", url, true);
            http.send();
            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    //console.log(this.responseText);
                    const res = JSON.parse(this.responseText);
                    if(res == "Ok"){
                        Swal.fire(
                            'Mensaje!',
                            'Categoria reingresada correctamente!',
                            'success'
                          )
                          tblCategorias.ajax.reload();
                    }else{
                        Swal.fire(
                            'Mensaje!',
                            res,
                            'error'
                        )
                    }
                }
            }  
        }
    })
}
//fin categorias

//Comienzo estudiantes
function frmEstudiantes() {
    document.getElementById("title").innerHTML = "Nuevo Estudiante";
    document.getElementById("btnAccion").innerHTML = "Registrar";
    // document.getElementById("claves").classList.remove("d-none");
    document.getElementById("frmEstudiantes").reset();
    $("#nuevo_estudiante").modal("show");
    document.getElementById("id").value = "";
}

function registrarEstudiante(e) {
    e.preventDefault();
    const codigo = document.getElementById("codigo");
    const dni = document.getElementById("dni");
    const nombres = document.getElementById("nombres");
    const apellidos = document.getElementById("apellidos");
    const direccion = document.getElementById("direccion");
    const telefono = document.getElementById("telefono");

    if (codigo.value == "" || dni.value == "" || nombres.value  == "" || apellidos.value == "" || direccion.value == "" || telefono.value == "") {
        Swal.fire({
            position: 'top-star',
            icon: 'error',
            title: 'Todos los Campos son obligatorios!',
            showConfirmButton: false,
            timer: 3000
        })
        // clave.classList.remove("is-invalid");
        // usuario.classList.add("is-invalid");
        // usuario.focus();
    } else {
        const url = base_url + "Estudiantes/registrar";
        const frm = document.getElementById("frmEstudiantes");
        const http = new XMLHttpRequest();
        http.open("POST", url, true);
        http.send(new FormData(frm));
        http.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                const res = JSON.parse(this.responseText);
                if (res == "si") {
                    Swal.fire({
                        position: 'top-star',
                        icon: 'success',
                        title: 'Estudiante registrado Correctamente!',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    frm.reset(); //receteando formulario
                    $("#nuevo_estudiante").modal("hide");
                    tblEstudiantes.ajax.reload();
                } else if (res == "Modificado") {
                    Swal.fire({
                        position: 'top-star',
                        icon: 'success',
                        title: 'Estudiante actualizado Correctamente!',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    $("#nuevo_estudiante").modal("hide");
                    tblEstudiantes.ajax.reload();
                } else{
                    Swal.fire({
                        position: 'top-star',
                        icon: 'error',
                        title: res,
                        showConfirmButton: false,
                        timer: 3000
                    })
                }
            }
        }
    }
}

function btnEditarEstudiantes(id) {
    document.getElementById("title").innerHTML = "Actualizar Estudiante";
    document.getElementById("btnAccion").innerHTML = "Actualizar";
    const url = base_url + "Estudiantes/editar/"+id;
    //const frm = document.getElementById("frmUsuario");
    const http = new XMLHttpRequest();
    http.open("GET", url, true);
    http.send();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            //console.log(this.responseText);
            const res = JSON.parse(this.responseText);
            document.getElementById("id").value = res.id;
            document.getElementById("codigo").value = res.codigo;
            document.getElementById("dni").value = res.dni;
            document.getElementById("nombres").value = res.nombres;
            document.getElementById("apellidos").value = res.apellidos;
            document.getElementById("direccion").value = res.direccion;
            document.getElementById("telefono").value = res.telefono;
            $("#nuevo_estudiante").modal("show");
        }
    } 
}

function btnEliminarEstudiantes(id) {
    Swal.fire({
        title: 'Esta Seguro de Eliminar?',
        text: "El estudiante no se eliminara de forma permanente, solo cambiara al estado inactivo!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si!',
        cancelButtonText : 'No'
      }).then((result) => {
        if (result.isConfirmed) {
            
            const url = base_url + "Estudiantes/eliminar/"+id;
            //const frm = document.getElementById("frmUsuario");
            const http = new XMLHttpRequest();
            http.open("GET", url, true);
            http.send();
            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    //console.log(this.responseText);
                    const res = JSON.parse(this.responseText);
                    if(res == "Ok"){
                        Swal.fire(
                            'Mensaje!',
                            'Estudiante eliminado correctamente.',
                            'success'
                          )
                          tblEstudiantes.ajax.reload();
                    }else{
                        Swal.fire(
                            'Mensaje!',
                            res,
                            'error'
                        )
                    }
                }
            }  
        }
    })
}

function btnReingresarEstudiantes(id) {
    Swal.fire({
        title: 'Esta Seguro de Reingresar?',
        //text: "El usuario no se eliminara de forma permanente, solo cambiara al estado inactivo!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si!',
        cancelButtonText : 'No'
      }).then((result) => {
        if (result.isConfirmed) {
            
            const url = base_url + "Estudiantes/reingresar/"+id;
            //const frm = document.getElementById("frmUsuario");
            const http = new XMLHttpRequest();
            http.open("GET", url, true);
            http.send();
            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    //console.log(this.responseText);
                    const res = JSON.parse(this.responseText);
                    if(res == "Ok"){
                        Swal.fire(
                            'Mensaje!',
                            'Estudiante reingresado correctamente!',
                            'success'
                          )
                          tblEstudiantes.ajax.reload();
                    }else{
                        Swal.fire(
                            'Mensaje!',
                            res,
                            'error'
                        )
                    }
                }
            }  
        }
    })
}
//fin estudiantes

//comienzo roles
function frmRoles() {
    document.getElementById("title").innerHTML = "Nuevo Rol";
    document.getElementById("btnAccion").innerHTML = "Registrar";
    // document.getElementById("claves").classList.remove("d-none");
    document.getElementById("frmRoles").reset();
    $("#nuevo_rol").modal("show");
    document.getElementById("id").value = "";
}

function registrarRol(e) {
    e.preventDefault();
    const nombre_rol = document.getElementById("nombre_rol");
    
    if (nombre_rol.value == "") {
        Swal.fire({
            position: 'top-star',
            icon: 'error',
            title: 'Todos los Campos son obligatorios!',
            showConfirmButton: false,
            timer: 3000
        })
        // clave.classList.remove("is-invalid");
        // usuario.classList.add("is-invalid");
        // usuario.focus();
    } else {
        const url = base_url + "Roles/registrar";
        const frm = document.getElementById("frmRoles");
        const http = new XMLHttpRequest();
        http.open("POST", url, true);
        http.send(new FormData(frm));
        http.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                const res = JSON.parse(this.responseText);
                if (res == "si") {
                    Swal.fire({
                        position: 'top-star',
                        icon: 'success',
                        title: 'Rol registrado Correctamente!',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    frm.reset(); //receteando formulario
                    $("#nuevo_rol").modal("hide");
                    tblRoles.ajax.reload();
                } else if (res == "Modificado") {
                    Swal.fire({
                        position: 'top-star',
                        icon: 'success',
                        title: 'Rol actualizado Correctamente!',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    $("#nuevo_rol").modal("hide");
                    tblRoles.ajax.reload();
                } else{
                    Swal.fire({
                        position: 'top-star',
                        icon: 'error',
                        title: res,
                        showConfirmButton: false,
                        timer: 3000
                    })
                }
            }
        }
    }
}

function btnEditarRoles(id) {
    document.getElementById("title").innerHTML = "Actualizar Rol";
    document.getElementById("btnAccion").innerHTML = "Actualizar";
    const url = base_url + "Roles/editar/"+id;
    //const frm = document.getElementById("frmUsuario");
    const http = new XMLHttpRequest();
    http.open("GET", url, true);
    http.send();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            //console.log(this.responseText);
            const res = JSON.parse(this.responseText);
            document.getElementById("id").value = res.id;
            document.getElementById("nombre_rol").value = res.nombre_rol;
            $("#nuevo_rol").modal("show");
        }
    } 
}

function btnEliminarRoles(id) {
    Swal.fire({
        title: 'Esta Seguro de Eliminar?',
        text: "El rol no se eliminara de forma permanente, solo cambiara al estado inactivo!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si!',
        cancelButtonText : 'No'
      }).then((result) => {
        if (result.isConfirmed) {
            
            const url = base_url + "Roles/eliminar/"+id;
            //const frm = document.getElementById("frmUsuario");
            const http = new XMLHttpRequest();
            http.open("GET", url, true);
            http.send();
            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    //console.log(this.responseText);
                    const res = JSON.parse(this.responseText);
                    if(res == "Ok"){
                        Swal.fire(
                            'Mensaje!',
                            'Rol eliminado correctamente.',
                            'success'
                          )
                          tblRoles.ajax.reload();
                    }else{
                        Swal.fire(
                            'Mensaje!',
                            res,
                            'error'
                        )
                    }
                }
            }  
        }
    })
}

function btnReingresarRoles(id) {
    Swal.fire({
        title: 'Esta Seguro de Reingresar?',
        //text: "El usuario no se eliminara de forma permanente, solo cambiara al estado inactivo!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si!',
        cancelButtonText : 'No'
      }).then((result) => {
        if (result.isConfirmed) {
            
            const url = base_url + "Roles/reingresar/"+id;
            //const frm = document.getElementById("frmUsuario");
            const http = new XMLHttpRequest();
            http.open("GET", url, true);
            http.send();
            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    //console.log(this.responseText);
                    const res = JSON.parse(this.responseText);
                    if(res == "Ok"){
                        Swal.fire(
                            'Mensaje!',
                            'Rol reingresado correctamente!',
                            'success'
                          )
                          tblRoles.ajax.reload();
                    }else{
                        Swal.fire(
                            'Mensaje!',
                            res,
                            'error'
                        )
                    }
                }
            }  
        }
    })
}
//fin roles

//comienzo Libros
function frmLibros() {
    document.getElementById("title").innerHTML = "Nuevo Libro";
    document.getElementById("btnAccion").innerHTML = "Registrar";
    // document.getElementById("claves").classList.remove("d-none");
    document.getElementById("frmLibros").reset();
    $("#nuevo_libro").modal("show");
    document.getElementById("id").value = "";
}

function registrarLibro(e) {
    e.preventDefault();
    const titulo = document.getElementById("titulo");
    const nom_autor = document.getElementById("nom_autor");
    const nom_editorial = document.getElementById("nom_editorial");
    const descripcion = document.getElementById("descripcion");
    
    if (titulo.value == "" || nom_autor.value == "" || nom_editorial.value == "" || descripcion.value == "") {
        Swal.fire({
            position: 'top-star',
            icon: 'error',
            title: 'Todos los Campos son obligatorios!',
            showConfirmButton: false,
            timer: 3000
        })
        // clave.classList.remove("is-invalid");
        // usuario.classList.add("is-invalid");
        // usuario.focus();
    } else {
        const url = base_url + "Libros/registrar";
        const frm = document.getElementById("frmLibros");
        const http = new XMLHttpRequest();
        http.open("POST", url, true);
        http.send(new FormData(frm));
        http.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                const res = JSON.parse(this.responseText);
                if (res == "si") {
                    Swal.fire({
                        position: 'top-star',
                        icon: 'success',
                        title: 'Libro registrado Correctamente!',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    frm.reset(); //receteando formulario
                    $("#nuevo_libro").modal("hide");
                    tblLibros.ajax.reload();
                } else if (res == "Modificado") {
                    Swal.fire({
                        position: 'top-star',
                        icon: 'success',
                        title: 'Libro actualizado Correctamente!',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    $("#nuevo_libro").modal("hide");
                    tblLibros.ajax.reload();
                } else{
                    Swal.fire({
                        position: 'top-star',
                        icon: 'error',
                        title: res,
                        showConfirmButton: false,
                        timer: 3000
                    })
                }
            }
        }
    }
}

function btnEditarLibros(id) {
    document.getElementById("title").innerHTML = "Actualizar Libro";
    document.getElementById("btnAccion").innerHTML = "Actualizar";
    const url = base_url + "Libros/editar/"+id;
    //const frm = document.getElementById("frmUsuario");
    const http = new XMLHttpRequest();
    http.open("GET", url, true);
    http.send();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            //console.log(this.responseText);
            const res = JSON.parse(this.responseText);
            document.getElementById("id").value = res.id;
            document.getElementById("titulo").value = res.titulo;
            document.getElementById("nom_autor").value = res.id_autor;
            document.getElementById("nom_editorial").value = res.id_editorial;
            document.getElementById("descripcion").value = res.descripcion;
            $("#nuevo_libro").modal("show");
        }
    } 
}

function btnEliminarLibros(id) {
    Swal.fire({
        title: 'Esta Seguro de Eliminar?',
        text: "El libro no se eliminara de forma permanente, solo cambiara al estado inactivo!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si!',
        cancelButtonText : 'No'
      }).then((result) => {
        if (result.isConfirmed) {

            const url = base_url + "Libros/eliminar/"+id;
            //const frm = document.getElementById("frmUsuario");
            const http = new XMLHttpRequest();
            http.open("GET", url, true);
            http.send();
            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    //console.log(this.responseText);
                    const res = JSON.parse(this.responseText);
                    if(res == "Ok"){
                        Swal.fire(
                            'Mensaje!',
                            'Libro eliminado correctamente.',
                            'success'
                          )
                          tblLibros.ajax.reload();
                    }else{
                        Swal.fire(
                            'Mensaje!',
                            res,
                            'error'
                        )
                    }
                }
            }  
        }
    })
}

function btnReingresarLibros(id) {
    Swal.fire({
        title: 'Esta Seguro de Reingresar?',
        //text: "El usuario no se eliminara de forma permanente, solo cambiara al estado inactivo!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si!',
        cancelButtonText : 'No'
      }).then((result) => {
        if (result.isConfirmed) {
            
            const url = base_url + "Libros/reingresar/"+id;
            //const frm = document.getElementById("frmUsuario");
            const http = new XMLHttpRequest();
            http.open("GET", url, true);
            http.send();
            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    //console.log(this.responseText);
                    const res = JSON.parse(this.responseText);
                    if(res == "Ok"){
                        Swal.fire(
                            'Mensaje!',
                            'Libro reingresado correctamente!',
                            'success'
                          )
                          tblLibros.ajax.reload();
                    }else{
                        Swal.fire(
                            'Mensaje!',
                            res,
                            'error'
                        )
                    }
                }
            }  
        }
    })
}
// fin libros

//comienzo autores
function frmAutor() {
    document.getElementById("title").innerHTML = "Nuevo Autor";
    document.getElementById("btnAccion").innerHTML = "Registrar";
    // document.getElementById("claves").classList.remove("d-none");
    document.getElementById("frmAutor").reset();
    $("#nuevo_autor").modal("show");
    document.getElementById("id").value = "";
}

function registrarAuto(e) {
    e.preventDefault();
    const nom_autor = document.getElementById("nom_autor");
    
    if (nom_autor.value == "") {
        Swal.fire({
            position: 'top-star',
            icon: 'error',
            title: 'Todos los Campos son obligatorios!',
            showConfirmButton: false,
            timer: 3000
        })
        // clave.classList.remove("is-invalid");
        // usuario.classList.add("is-invalid");
        // usuario.focus();
    } else {
        const url = base_url + "Autores/registrar";
        const frm = document.getElementById("frmAutor");
        const http = new XMLHttpRequest();
        http.open("POST", url, true);
        http.send(new FormData(frm));
        http.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                const res = JSON.parse(this.responseText);
                if (res == "si") {
                    Swal.fire({
                        position: 'top-star',
                        icon: 'success',
                        title: 'Autor registrado Correctamente!',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    frm.reset(); //receteando formulario
                    $("#nuevo_autor").modal("hide");
                    tblAutores.ajax.reload();
                } else if (res == "Modificado") {
                    Swal.fire({
                        position: 'top-star',
                        icon: 'success',
                        title: 'Autor actualizado Correctamente!',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    $("#nuevo_autor").modal("hide");
                    tblAutores.ajax.reload();
                } else{
                    Swal.fire({
                        position: 'top-star',
                        icon: 'error',
                        title: res,
                        showConfirmButton: false,
                        timer: 3000
                    })
                }
            }
        }
    }
}

function btnEditarAutores(id) {
    document.getElementById("title").innerHTML = "Actualizar Autor";
    document.getElementById("btnAccion").innerHTML = "Actualizar";
    const url = base_url + "Autores/editar/"+id;
    //const frm = document.getElementById("frmUsuario");
    const http = new XMLHttpRequest();
    http.open("GET", url, true);
    http.send();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            //console.log(this.responseText);
            const res = JSON.parse(this.responseText);
            document.getElementById("id").value = res.id;
            document.getElementById("nom_autor").value = res.nom_autor;
            $("#nuevo_autor").modal("show");
        }
    } 
}

function btnEliminarAutores(id) {
    Swal.fire({
        title: 'Esta Seguro de Eliminar?',
        text: "El autor no se eliminara de forma permanente, solo cambiara al estado inactivo!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si!',
        cancelButtonText : 'No'
      }).then((result) => {
        if (result.isConfirmed) {

            const url = base_url + "Autores/eliminar/"+id;
            //const frm = document.getElementById("frmUsuario");
            const http = new XMLHttpRequest();
            http.open("GET", url, true);
            http.send();
            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    //console.log(this.responseText);
                    const res = JSON.parse(this.responseText);
                    if(res == "Ok"){
                        Swal.fire(
                            'Mensaje!',
                            'Autor eliminado correctamente.',
                            'success'
                          )
                          tblAutores.ajax.reload();
                    }else{
                        Swal.fire(
                            'Mensaje!',
                            res,
                            'error'
                        )
                    }
                }
            }  
        }
    })
}

function btnReingresarAutores(id) {
    Swal.fire({
        title: 'Esta Seguro de Reingresar?',
        //text: "El usuario no se eliminara de forma permanente, solo cambiara al estado inactivo!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si!',
        cancelButtonText : 'No'
      }).then((result) => {
        if (result.isConfirmed) {
            
            const url = base_url + "Autores/reingresar/"+id;
            //const frm = document.getElementById("frmUsuario");
            const http = new XMLHttpRequest();
            http.open("GET", url, true);
            http.send();
            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    //console.log(this.responseText);
                    const res = JSON.parse(this.responseText);
                    if(res == "Ok"){
                        Swal.fire(
                            'Mensaje!',
                            'Autor reingresado correctamente!',
                            'success'
                          )
                          tblAutores.ajax.reload();
                    }else{
                        Swal.fire(
                            'Mensaje!',
                            res,
                            'error'
                        )
                    }
                }
            }  
        }
    })
}

//fin autores

//cominezo editorial
function frmEditorial() {
    document.getElementById("title").innerHTML = "Nuevo Autor";
    document.getElementById("btnAccion").innerHTML = "Registrar";
    // document.getElementById("claves").classList.remove("d-none");
    document.getElementById("frmEditorial").reset();
    $("#nueva_editorial").modal("show");
    document.getElementById("id").value = "";
}

function registrarEdi(e) {
    e.preventDefault();
    const nom_editorial = document.getElementById("nom_editorial");
    
    if (nom_editorial.value == "") {
        Swal.fire({
            position: 'top-star',
            icon: 'error',
            title: 'Todos los Campos son obligatorios!',
            showConfirmButton: false,
            timer: 3000
        })
        // clave.classList.remove("is-invalid");
        // usuario.classList.add("is-invalid");
        // usuario.focus();
    } else {
        const url = base_url + "Editorial/registrar";
        const frm = document.getElementById("frmEditorial");
        const http = new XMLHttpRequest();
        http.open("POST", url, true);
        http.send(new FormData(frm));
        http.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                const res = JSON.parse(this.responseText);
                if (res == "si") {
                    Swal.fire({
                        position: 'top-star',
                        icon: 'success',
                        title: 'Editorial registrada Correctamente!',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    frm.reset(); //receteando formulario
                    $("#nueva_editorial").modal("hide");
                    tblEditoriales.ajax.reload();
                } else if (res == "Modificado") {
                    Swal.fire({
                        position: 'top-star',
                        icon: 'success',
                        title: 'Editorial actualizada Correctamente!',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    $("#nueva_editorial").modal("hide");
                    tblEditoriales.ajax.reload();
                } else{
                    Swal.fire({
                        position: 'top-star',
                        icon: 'error',
                        title: res,
                        showConfirmButton: false,
                        timer: 3000
                    })
                }
            }
        }
    }
}

function btnEditarEditoriales(id) {
    document.getElementById("title").innerHTML = "Actualizar Editorial";
    document.getElementById("btnAccion").innerHTML = "Actualizar";
    const url = base_url + "Editorial/editar/"+id;
    //const frm = document.getElementById("frmUsuario");
    const http = new XMLHttpRequest();
    http.open("GET", url, true);
    http.send();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            //console.log(this.responseText);
            const res = JSON.parse(this.responseText);
            document.getElementById("id").value = res.id;
            document.getElementById("nom_editorial").value = res.nom_editorial;
            $("#nueva_editorial").modal("show");
        }
    } 
}

function btnEliminarEditoriales(id) {
    Swal.fire({
        title: 'Esta Seguro de Eliminar?',
        text: "La editorial no se eliminara de forma permanente, solo cambiara al estado inactivo!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si!',
        cancelButtonText : 'No'
      }).then((result) => {
        if (result.isConfirmed) {

            const url = base_url + "Editorial/eliminar/"+id;
            //const frm = document.getElementById("frmUsuario");
            const http = new XMLHttpRequest();
            http.open("GET", url, true);
            http.send();
            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    //console.log(this.responseText);
                    const res = JSON.parse(this.responseText);
                    if(res == "Ok"){
                        Swal.fire(
                            'Mensaje!',
                            'Editorial eliminada correctamente.',
                            'success'
                          )
                          tblEditoriales.ajax.reload();
                    }else{
                        Swal.fire(
                            'Mensaje!',
                            res,
                            'error'
                        )
                    }
                }
            }  
        }
    })
}

function btnReingresarEditoriales(id) {
    Swal.fire({
        title: 'Esta Seguro de Reingresar?',
        //text: "El usuario no se eliminara de forma permanente, solo cambiara al estado inactivo!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si!',
        cancelButtonText : 'No'
      }).then((result) => {
        if (result.isConfirmed) {
            
            const url = base_url + "Editorial/reingresar/"+id;
            //const frm = document.getElementById("frmUsuario");
            const http = new XMLHttpRequest();
            http.open("GET", url, true);
            http.send();
            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    //console.log(this.responseText);
                    const res = JSON.parse(this.responseText);
                    if(res == "Ok"){
                        Swal.fire(
                            'Mensaje!',
                            'Editorial reingresada correctamente!',
                            'success'
                          )
                          tblEditoriales.ajax.reload();
                    }else{
                        Swal.fire(
                            'Mensaje!',
                            res,
                            'error'
                        )
                    }
                }
            }  
        }
    })
}
//fin editorial

//comienzo prestamos
function frmPrestamos(){
    document.getElementById("title").innerHTML = "Nuevo Prestamo";
    document.getElementById("btnAccion").innerHTML = "Registrar";
    // document.getElementById("claves").classList.remove("d-none");
    document.getElementById("frmPrestamos").reset();
    $("#nuevo_prestamo").modal("show");
    document.getElementById("id").value = "";
}

function registrarPrest(e){
    e.preventDefault();
    const nombres = document.getElementById("nombres");
    const titulo = document.getElementById("titulo");
    const fecha_prestamo = document.getElementById("fecha_prestamo");
    const fecha_devolucion = document.getElementById("fecha_devolucion");
    const observacion = document.getElementById("observacion");
    
    if (nombres.value == "" || titulo.value == "" || fecha_prestamo.value == "" || fecha_devolucion.value == "" || observacion.value == "") {
        Swal.fire({
            position: 'top-star',
            icon: 'error',
            title: 'Todos los Campos son obligatorios!',
            showConfirmButton: false,
            timer: 3000
        })
        // clave.classList.remove("is-invalid");
        // usuario.classList.add("is-invalid");
        // usuario.focus();
    } else {
        const url = base_url + "Prestamos/registrar";
        const frm = document.getElementById("frmPrestamos");
        const http = new XMLHttpRequest();
        http.open("POST", url, true);
        http.send(new FormData(frm));
        http.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                const res = JSON.parse(this.responseText);
                if (res == "si") {
                    Swal.fire({
                        position: 'top-star',
                        icon: 'success',
                        title: 'Prestamo registrado Correctamente!',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    frm.reset(); //receteando formulario
                    $("#nuevo_prestamo").modal("hide");
                    tblPrestamos.ajax.reload();
                } else if (res == "Modificado") {
                    Swal.fire({
                        position: 'top-star',
                        icon: 'success',
                        title: 'Prestamo actualizado Correctamente!',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    $("#nuevo_prestamo").modal("hide");
                    tblPrestamos.ajax.reload();
                } else{
                    Swal.fire({
                        position: 'top-star',
                        icon: 'error',
                        title: res,
                        showConfirmButton: false,
                        timer: 3000
                    })
                }
            }
        }
    }
}

function btnEditarPrestamos(id) {
    document.getElementById("title").innerHTML = "Actualizar Libro";
    document.getElementById("btnAccion").innerHTML = "Actualizar";
    const url = base_url + "Prestamos/editar/"+id;
    //const frm = document.getElementById("frmUsuario");
    const http = new XMLHttpRequest();
    http.open("GET", url, true);
    http.send();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            //console.log(this.responseText);
            const res = JSON.parse(this.responseText);
            document.getElementById("id").value = res.id;
            document.getElementById("nombres").value = res.id_estudiante;
            document.getElementById("titulo").value = res.id_libro;
            document.getElementById("fecha_prestamo").value = res.fecha_prestamo;
            document.getElementById("fecha_devolucion").value = res.fecha_devolucion;
            document.getElementById("observacion").value = res.observacion;
            $("#nuevo_prestamo").modal("show");
        }
    } 
}

function btnEliminarPrestamos(id) {
    Swal.fire({
        title:'Esta Seguro de Eliminar?',
        text: "El prestamo no se eliminara de forma permanente, solo cambiara al estado inactivo!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si!',
        cancelButtonText : 'No'
      }).then((result) => {
        if (result.isConfirmed) {
            const url = base_url + "Prestamos/eliminar/"+id;
            //const frm = document.getElementById("frmUsuario");
            const http = new XMLHttpRequest();
            http.open("GET", url, true);
            http.send();
            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    //console.log(this.responseText);
                    const res = JSON.parse(this.responseText);
                    if(res == "Ok"){
                        Swal.fire(
                            'Mensaje!',
                            'Prestamo eliminado correctamente.',
                            'success'
                          )
                          tblPrestamos.ajax.reload();
                    }else{
                        Swal.fire(
                            'Mensaje!',
                            res,
                            'error'
                        )
                    }
                }
            }  
        }
    })
}

function btnReingresarPrestamos(id) {
    Swal.fire({
        title: 'Esta Seguro de Reingresar?',
        //text: "El usuario no se eliminara de forma permanente, solo cambiara al estado inactivo!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si!',
        cancelButtonText : 'No'
      }).then((result) => {
        if (result.isConfirmed) {
            
            const url = base_url + "Prestamos/reingresar/"+id;
            //const frm = document.getElementById("frmUsuario");
            const http = new XMLHttpRequest();
            http.open("GET", url, true);
            http.send();
            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    //console.log(this.responseText);
                    const res = JSON.parse(this.responseText);
                    if(res == "Ok"){
                        Swal.fire(
                            'Mensaje!',
                            'Prestamo reingresado correctamente!',
                            'success'
                          )
                          tblPrestamos.ajax.reload();
                    }else{
                        Swal.fire(
                            'Mensaje!',
                            res,
                            'error'
                        )
                    }
                }
            }  
        }
    })
}

function modificarClave(e) {
    e.preventDefault();
    var formClave = document.querySelector("#frmCambiarPass");
    formClave.onsubmit = function (e) {
        e.preventDefault();
        const clave_actual = document.querySelector("#clave_actual").value;
        const nueva_clave = document.querySelector("#clave_nueva").value;
        const confirmar_clave = document.querySelector("#clave_confirmar").value;
        if (clave_actual == "" || nueva_clave == "" || confirmar_clave == "") {
            alertas('Todo los campos son requeridos', 'warning');
        } else if (nueva_clave != confirmar_clave) {
            alertas('Las contraseñas no coinciden', 'warning');
        } else {
            const http = new XMLHttpRequest();
            const frm = document.getElementById("frmPermisos");
            const url = base_url + "Usuarios/cambiarPas";
            http.open("POST", url);
            http.send(new FormData(formClave));
            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    const res = JSON.parse(this.responseText);
                    $('#cambiarClave').modal("hide");
                    // alertas(res.msg, res.icono);  
                    Swal.fire({
                        position: 'top-star',
                        icon: 'success',
                        title: 'Contraseña modificada correctamente!',
                        showConfirmButton: false,
                        timer: 3000
                    })                  
                }
            }            
        }

    }
}
