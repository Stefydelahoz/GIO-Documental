document.addEventListener("DOMContentLoaded", function() {
    console.log("El DOM ha sido completamente cargado."); // Mensaje para verificar que el script se ejecuta

    // Datos simulados de usuario y cursos
    const usuario = {
        nombre: "",
        cursos: [
            { nombre: "Curso de HTML Básico", progreso: 40, url: "curso-detalle.html" },
            { nombre: "Curso de CSS Avanzado", progreso: 75, url: "curso-detalle.html" }
        ]
    };

    // Verifica que los datos del usuario están cargados correctamente
    console.log(`Usuario cargado: ${usuario.nombre}`); // Debe mostrar "Usuario cargado: Juan Pérez"
    
    // Selecciona el elemento h2 para actualizar el nombre del usuario
    const nombreUsuario = document.querySelector("h2");
    
    // Asegúrate de que el elemento existe antes de tratar de modificarlo
    if (nombreUsuario) {
        console.log("Elemento <h2> encontrado, actualizando el contenido.");
        nombreUsuario.textContent = `Bienvenido, ${usuario.nombre}`;
    } else {
        console.error("El elemento <h2> para el nombre del usuario no se encontró en el DOM.");
    }

    // Muestra los cursos del usuario
    const cursosContainer = document.querySelector(".courses");
    if (cursosContainer) {
        console.log("Contenedor de cursos encontrado, agregando cursos.");
        usuario.cursos.forEach(curso => {
            console.log(`Agregando curso: ${curso.nombre} con progreso ${curso.progreso}%`);
            const cursoItem = document.createElement("div");
            cursoItem.classList.add("course-item");
            cursoItem.innerHTML = `
                <h4>${curso.nombre}</h4>
                <p>Progreso: ${curso.progreso}%</p>
                <a href="${curso.url}" class="btn">Continuar Curso</a>
            `;
            cursosContainer.appendChild(cursoItem);
        });
    } else {
        console.error("El contenedor de cursos no se encontró en el DOM.");
    }
});
