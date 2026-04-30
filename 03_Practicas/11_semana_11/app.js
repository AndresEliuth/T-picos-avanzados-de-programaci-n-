// 1. IMPORTACIONES: Conexión con los servicios de Google Firebase
import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js";
import { 
    getFirestore, collection, addDoc, getDocs, deleteDoc, doc, updateDoc 
} from "https://www.gstatic.com/firebasejs/10.7.1/firebase-firestore.js";

// 2. CONFIGURACIÓN: Credenciales de tu proyecto
const firebaseConfig = {
    apiKey: "AIzaSyDlOf15m4xaBOezK5ZaPMqf2-HwOlTLYmo",
    authDomain: "crud-firebase-app-42f08.firebaseapp.com",
    projectId: "crud-firebase-app-42f08",
    storageBucket: "crud-firebase-app-42f08.firebasestorage.app",
    messagingSenderId: "866484632896",
    appId: "1:866484632896:web:654c7fe2ba4cd3ebd48ea5"
};

// 3. INICIALIZACIÓN
const app = initializeApp(firebaseConfig);
const db = getFirestore(app);
let datos = []; // Memoria temporal para el filtrado rápido

// 4. FUNCIÓN AGREGAR (Lógica automática)
window.agregar = async function () {
    // Seleccionamos todos los inputs dentro de la tarjeta de registro
    const inputs = document.querySelectorAll('.card input');
    const nuevoProducto = {};
    let incompleto = false;

    // Recorremos los inputs para armar el objeto que irá a la base de datos
    inputs.forEach(input => {
        if (!input.value) incompleto = true;
        // Guardamos el dato: si el input es de tipo número, lo convertimos a número real
        nuevoProducto[input.id] = input.type === "number" ? Number(input.value) : input.value;
    });

    if (incompleto) return alert("Error: Llena todos los campos configurados en PHP.");

    // Enviamos el objeto completo a la colección "productos" de Firestore
    await addDoc(collection(db, "productos"), nuevoProducto);
    
    // Limpiamos los campos después de guardar
    inputs.forEach(input => input.value = "");
    alert("¡Producto registrado!");
    leer(); // Actualizamos la tabla
};

// 5. FUNCIÓN LEER: Trae la lista desde la nube
async function leer() {
    datos = [];
    const snap = await getDocs(collection(db, "productos"));
    snap.forEach(docu => {
        // Unimos el ID de Firebase con los datos del producto
        datos.push({ id: docu.id, ...docu.data() });
    });
    mostrar(datos);
}

// 6. FUNCIÓN MOSTRAR: Dibuja la tabla responsive
function mostrar(lista) {
    const tabla = document.getElementById("tabla");
    tabla.innerHTML = "";
    lista.forEach(d => {
        tabla.innerHTML += `
            <tr>
                <td><b>${d.nombre}</b><br><small>${d.codigo}</small></td>
                <td>$${d.precio}</td>
                <td style="color: ${d.existencias < 5 ? 'red' : 'green'}">
                    ${d.existencias}
                </td>
                <td>
                    <button class="btn-del" onclick="eliminar('${d.id}')"> eliminar </button>
                </td>
            </tr>`;
    });
}

// 7. FUNCIÓN ELIMINAR
window.eliminar = async (id) => {
    if(confirm("¿Eliminar del inventario?")) {
        await deleteDoc(doc(db, "productos", id));
        leer();
    }
};

// 8. FUNCIÓN FILTRAR: Busca por nombre o por código de barras
window.filtrar = () => {
    const texto = document.getElementById("buscar").value.toLowerCase();
    const filtrados = datos.filter(d => 
        d.nombre.toLowerCase().includes(texto) || 
        d.codigo.toLowerCase().includes(texto)
    );
    mostrar(filtrados);
};

// Carga inicial al abrir la App
leer();