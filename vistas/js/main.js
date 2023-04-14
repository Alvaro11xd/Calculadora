// console.log("corriendo")

document.addEventListener('DOMContentLoaded', function () {
    let resultado = document.getElementById("info");
    const btnSumar = document.getElementById("btnSumar");
    const btnRestar = document.getElementById("btnRestar");
    const btnMultiplicar = document.getElementById("btnMultiplicar");
    const btnDividir = document.getElementById("btnDividir");
    const btnLogin = document.getElementById("btnLogin");
    const btnCalcularPromedio = document.getElementById("calcularPromedio");
    const btnCalcularArea = document.getElementById("btnCalcularArea");
    const btncalcularPlanilla = document.getElementById("calcularPlanilla");
    let b1 = document.getElementById('bono1');
    let b2 = document.getElementById('bono2');
    let b3 = document.getElementById('bono3');
    const btnLimpiar = document.getElementById("limpiar");
    const btnResetear = document.getElementById("resetear");
    const btnResetearPlanilla = document.getElementById("resetearPlanilla");

    const pwShowHide = document.querySelectorAll('.showHidePw'), // icono del ojo
        pwFields = document.querySelectorAll('.password'); // input tipo password

    const inputEstado = document.getElementById('estado');

    // console.log(inputEstado.value);


    // js code to show/hide password and change icon
    pwShowHide.forEach(eyeIcon => {
        eyeIcon.addEventListener("click", () => {
            pwFields.forEach(pwField => {
                if (pwField.type === "password") {
                    pwField.type = "text";

                    pwShowHide.forEach(icon => {
                        icon.classList.replace("uil-eye-slash", "uil-eye");
                    })
                } else {
                    pwField.type = "password";

                    pwShowHide.forEach(icon => {
                        icon.classList.replace("uil-eye", "uil-eye-slash");
                    })
                }
            })
        })
    })

    // ====== CALCULADORA ======
    function calcularDatos(operacion) {
        let xmlhttp;

        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        let a = document.getElementById("num1").value;
        let b = document.getElementById("num2").value;

        let cadena = "operacion=" + operacion + "&num1=" + a + "&num2=" + b;

        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                resultado.innerHTML = xmlhttp.responseText;
            }
        }

        xmlhttp.open("POST", "../modelos/calculadoraModelo.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(cadena);
    }

    // ====== LOGIN ======
    function iniciarSesion() {
        let xmlhttp;

        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        let username = document.getElementById("username").value;
        let password = document.getElementById("password").value;

        let informacionDelUsuario = "username=" + username + "&password=" + password;

        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                resultado.innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("POST", "../modelos/loginModelo.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(informacionDelUsuario);
    }

    // ====== PROMEDIOS ======
    function calcularPromedio() {
        let xmlhttp;

        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        let nombre = document.getElementById("nombre").value;
        let a = document.getElementById("nota1").value;
        let b = document.getElementById("nota2").value;
        let c = document.getElementById("nota3").value;

        let informacionDelAlumno = `nombre=${nombre}&nota1=${a}&nota2=${b}&nota3=${c}`;

        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4) {
                if (this.status == 200) {
                    var respuesta = JSON.parse(this.responseText);
                    document.getElementById('promedio').value = respuesta.promedio;
                    document.getElementById('estado').value = respuesta.estado;
                    let resultadoEstado = document.getElementById('estado').value = respuesta.estado
                    if (resultadoEstado == "Aprobado") {
                        document.getElementById('estado').style.color = "green";
                    } else {
                        document.getElementById('estado').style.color = "red";
                    }
                } else {
                    document.getElementById("mensaje").innerHTML = xmlhttp.responseText;
                }
            }
        }
        xmlhttp.open("POST", "../modelos/promediosModelo.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(informacionDelAlumno);
    }

    // ====== AREA DE UN CUADRADO ======
    function calcularAreaCuadrado() {
        let xmlhttp;

        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        let lado = document.getElementById("lado").value;

        let ladoCuadrado = `lado=${lado}`;

        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4) {
                if (this.status == 200) {
                    var respuesta = JSON.parse(this.responseText);
                    document.getElementById('areaResultado').value = respuesta.areaResultado;
                } else {
                    document.getElementById("mensajeError").innerHTML = this.responseText;
                }
            }
        }
        xmlhttp.open("POST", "../modelos/areaCuadradoModelo.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(ladoCuadrado);
    }

    // ====== PLANILLA DE TRABAJO ======
    // calcular Bonificación
    function calcularBonificacion() {
        let xmlhttp;

        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        let trabajador = document.getElementById('nombre').value;
        let sueldo = document.getElementById("sueldo").value;
        let cantHijos = document.getElementById("c-hijos").value;
        let afp = document.getElementById("afp").value;
        let salud = document.getElementById("salud").value;
        let especial = document.getElementById("especial").value;


        let infoTrabajador = `nombre=${trabajador} &sueldo=${sueldo} &hijos=${cantHijos} &tasaAFP=${afp} &tasaSALUD=${salud} &tasaESPECIAL=${especial}`;

        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4) {
                if (this.status == 200) {
                    var respuesta = JSON.parse(this.responseText);
                    document.getElementById('totalBono').value = "S/. " + respuesta.totalBono;
                    document.getElementById('totalAporte').value = "S/. " + respuesta.totalAporte;
                    document.getElementById('afp').value = "S/. " + respuesta.afp;
                    document.getElementById('salud').value = "S/. " + respuesta.salud;
                    document.getElementById('especial').value = "S/. " + respuesta.especial;

                } else {
                    document.getElementById("mensajeError").innerHTML = this.responseText;
                }
            }
        }
        xmlhttp.open("POST", "../modelos/planillaModelo.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(infoTrabajador);
    }

    // ====== LIMPIAR CAMPOS EN PAGINA CALCULADORA ======
    function limpiarCampos() {
        const num1 = document.getElementById("num1");
        const num2 = document.getElementById("num2");
        const resultado = document.getElementById("info");
        const lado = document.getElementById("lado");
        const mensaje = document.getElementById("mensajeError");
        const areaResultado = document.getElementById("areaResultado");
        if (num1 && num1) {
            num1.value = '';
            num2.value = '';
            resultado.textContent = "";
        }
        if (lado && mensaje && areaResultado) {
            lado.value = '';
            mensaje.textContent = '';
            areaResultado.value = '';
        }
    }

    // ====== LIMPIAR CAMPOS EN PAGINA PROMEDIOS ======
    function resetearCamposPromedio() {
        const nombre = document.getElementById('nombre');
        const nota1 = document.getElementById('nota1');
        const nota2 = document.getElementById('nota2');
        const nota3 = document.getElementById('nota3');
        const promedio = document.getElementById('promedio');
        const estado = document.getElementById('estado')
        const mensaje = document.getElementById('mensaje')

        nombre.value = '';
        nota1.value = '';
        nota2.value = '';
        nota3.value = '';
        promedio.value = '';
        estado.value = '';
        mensaje.textContent = '';
    }

    // ====== LIMPIAR CAMPOS EN PAGINA PLANILLA ======
    function resetearCamposPlanilla() {
        const nombre = document.getElementById('nombre');
        const sexo = document.getElementById('sexo');
        const estadoCivil = document.getElementById('e-civil');
        const cantidadHijos = document.getElementById('c-hijos');
        const sueldo = document.getElementById('sueldo');
        const afp = document.getElementById('afp');
        const salud = document.getElementById('salud');
        const especial = document.getElementById('especial');
        const totalAporte = document.getElementById('totalAporte');
        const bono1 = document.getElementById('bono1');
        const bono2 = document.getElementById('bono2');
        const bono3 = document.getElementById('bono3');
        const totalBono = document.getElementById('totalBono');
        const aporteEspecial = document.getElementById('aporte-especial');

        nombre.value = '';
        sexo.selectedIndex = "";
        estadoCivil.selectedIndex = "";
        cantidadHijos.value = '';
        sueldo.value = '';
        afp.value = '';
        salud.value = '';
        especial.value = '';
        totalAporte.value = '';
        bono1.value = '';
        bono2.value = '';
        bono3.value = '';
        totalBono.value = '';
        aporteEspecial.value = '';
    }

    if (btnLimpiar) {
        btnLimpiar.addEventListener('click', limpiarCampos);
    }

    if (btnResetear) {
        btnResetear.addEventListener('click', resetearCamposPromedio);
    }

    if (btnResetearPlanilla) {
        btnResetearPlanilla.addEventListener('click', resetearCamposPlanilla);
    }

    if (btnLogin != null) {
        btnLogin.addEventListener('click', () => {
            iniciarSesion();
        })
    }

    if (btnCalcularPromedio != null) {
        btnCalcularPromedio.addEventListener('click', () => {
            calcularPromedio();
        })
    }

    if (btnCalcularArea != null) {
        btnCalcularArea.addEventListener('click', () => {
            calcularAreaCuadrado();
        })
    }

    if (btncalcularPlanilla != null) {
        btncalcularPlanilla.addEventListener('click', () => {
            calcularBonificacion();
            b1.value = "20 %"
            b2.value = "30 %"
            b3.value = "40 %"
        })
    }

    if (btnSumar != null && btnRestar != null && btnMultiplicar != null && btnDividir != null) {
        btnSumar.addEventListener('click', () => {
            calcularDatos('sumar');
        })
        btnRestar.addEventListener('click', () => {
            calcularDatos('restar');
        })
        btnMultiplicar.addEventListener('click', () => {
            calcularDatos('multiplicar');
        })
        btnDividir.addEventListener('click', () => {
            calcularDatos('dividir');
        })
    }

})