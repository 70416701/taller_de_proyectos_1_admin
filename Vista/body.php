<div class="user-panel">
      <div class="row">
        <a href="#" class="nav-link text-gray"><i class="fas fa-user fa-sm fa-fw mr-2"></i><span> <?php echo $_SESSION['usuario'];?> </span></a>
        <a href="<?= URL; ?>Login/logout" onclick="return confirm('¿Seguro que desea cerrar sesión?')" class="nav-link text-gray"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i><span >Cerrar Sesión</span></a>
      </div>
</div>
  <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Solicitudes
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= URL; ?>Solicitud" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Seguimiento</p>
              </a>
            </li>
          </ul>
        </li>
    </nav>
  </aside>