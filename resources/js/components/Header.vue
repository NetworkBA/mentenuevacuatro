<template>
  <div>
    <!-- Comienza header -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background: rgba(255, 255, 255, 0); border-color: black;">
    <div class="container" >
      <a class="navbar-brand" href="/home"><img src="/images/logo.svg" width="100%" class="img-fluid d-inline-block align-top"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"style="color:black;" ></span>
  </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link vinculos" href="/">Psicologos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link vinculos" href="/perfiles">Planes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link vinculos" href="/registro">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link vinculos" href="/contacto">Registro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link vinculos" href="/contacto">Iniciar Sesión</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Termina Header header -->
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
