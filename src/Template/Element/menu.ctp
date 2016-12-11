<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<div class="nav-side-menu">
    <div class="brand">Nutrición y Balance Físico <?php if( $this->request->session()->read('Auth.User.username') ==""){?>
      <li><?= $this->Html->link(__('Iniciar Sesión'), ['action' => 'login']) ?></li>
    <?php }else{ ?>
      <li><?= $this->Html->link(__('Bienvenido '.$this->request->session()->read('Auth.User.name').' '.$this->request->session()->read('Auth.User.last_name_1') ), ['action' => 'view', $this->request->session()->read('Auth.User.id')])  ?></li>
      <li><?= $this->Html->link(__('Cerrar Sesión'), ['action' => 'logout']) ?></li>
      <?php } ?></div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
                <li  data-toggle="collapse" data-target="#usuarios" class="collapsed">
                  <a href="#"><i class="fa fa-gift fa-lg"></i>Usuarios<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="usuarios">
                    <li><?=  $this->Html->link('Listar usuarios', ['controller' => 'Users', 'action' => 'index']) ?></li>
                    <li><?=  $this->Html->link('Nuevo usuario', ['controller' => 'Users', 'action' => 'add']) ?></li>
                </ul>
            </ul>
            <ul id="menu-content" class="menu-content collapse out">
                <li  data-toggle="collapse" data-target="#medidas" class="collapsed">
                  <a href="#"><i class="fa fa-gift fa-lg"></i>Medidas<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="medidas">
                    <li><?=  $this->Html->link('Listar medidas', ['controller' => 'AnthropometricsData', 'action' => 'index']) ?></li>
                    <li><?=  $this->Html->link('Nuevas medidas', ['controller' => 'AnthropometricsData', 'action' => 'add']) ?></li>
                </ul>
            </ul>
     </div>
</div>
