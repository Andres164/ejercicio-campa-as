document.addEventListener('DOMContentLoaded', (event) => {
    let head = document.getElementsByTagName('head')[0];
    
    let linkTag1 = document.createElement('link');
    linkTag1.rel = 'stylesheet';
    linkTag1.href = '../css/header.css';
    head.appendChild(linkTag1);
    
    let linkTag2 = document.createElement('link');
    linkTag2.rel = 'stylesheet';
    linkTag2.href = 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css';
    head.appendChild(linkTag2);
    
    document.getElementById("header").innerHTML =
    `<header>
    <div class="px-3 py-2 banner text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
    
          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small4">
            <li>
              <a href="../index.html" class="nav-link text-white">
                <i class="bi bi-house d-block mx-auto mb-1 fs-2"></i>
                <b> Menu </b>
              </a>
            </li>
            <li>
              <a href="createTable.html" class="nav-link text-white d-flex flex-column align-items-center">
                <i class="bi bi-table d-block mx-auto mb-1 fs-2"></i>
                <b> Crear tabla </b>
              </a>
            </li>
            <li>
              <a href="insertEntry.html" class="nav-link text-white d-flex flex-column align-items-center">
                <i class="bi bi-file-earmark-plus d-block mx-auto mb-1 fs-2"></i>
                <b> Insertar registro </b>
              </a>
            </li>
            <li>
              <a href="readTable.html" class="nav-link text-white d-flex flex-column align-items-center">
                <i class="bi bi-bar-chart-steps d-block mx-auto mb-1 fs-2"></i>
                <b> Consultar tabla </b>
              </a>
            </li>
            <li>
              <a href="addColumn.html" class="nav-link text-white d-flex flex-column align-items-center">
                <i class="bi bi-node-plus-fill d-block mx-auto mb-1 fs-2"></i>
                <b> Agregar columna </b>
              </a>
            </li>
            <li>
              <a href="deleteTable.html" class="nav-link text-white d-flex flex-column align-items-center">
                <i class="bi bi-calendar2-x d-block mx-auto mb-1 fs-2"></i>
                <b> Eliminar tabla </b>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    </header>`;
});