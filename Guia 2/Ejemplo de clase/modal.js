btnEditar = document.querySelectorAll(".btn-success");
btnEliminar = document.querySelectorAll(".btn-danger");
lblMateriaName=document.getElementById("MateriaName");
btnAceptarDel=document.getElementById("AceptarDel");
inIndice = document.getElementById("indice");
inCodigo = document.getElementById("codigo");
inNombre = document.getElementById("nombre");
inUvs = document.getElementById("uvs");
inNota = document.getElementById("nota");

btnEditar.forEach(boton => {
    boton.addEventListener("click", async function() {
        try {
            response = await fetch('consultar.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    codigo: boton.id,
                }),
            });

            datos = await response.json();
            console.log("Respuesta del servidor:", datos); 

            inIndice.value=boton.id;
            inCodigo.value = datos.codigo; 
            inNombre.value=datos.nombre;
            inUvs.value=datos.uvs;
            inNota.value=datos.nota;

        } catch (error) {
            console.error("Error en la solicitud:", error);
        }
    });
});

btnEliminar.forEach(boton => {
    boton.addEventListener("click", async function() {
        try {
            response = await fetch('consultar.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    codigo: boton.id,
                }),
            });

            datos = await response.json();
            console.log("Respuesta del servidor:", datos); 

            lblMateriaName.textContent=datos.nombre;
            btnAceptarDel.setAttribute("href","borrar.php?codigo="+boton.id)



        } catch (error) {
            console.error("Error en la solicitud:", error);
        }
    });
});

