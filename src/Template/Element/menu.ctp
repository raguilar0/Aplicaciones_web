<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<nav class="navbar navbar-default">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbar-collapse-2">
          <ul class="nav navbar-nav navbar-right">
            <?php if( $this->request->session()->read('Auth.User.username') ==""){?>
              <li><?= $this->Html->link(__('Iniciar Sesión'), ['controller'=>'Users','action' => 'login']) ?></li>
            <?php }else{ ?>
              <li><?= $this->Html->link(__('Bienvenido '.$this->request->session()->read('Auth.User.name').' '.$this->request->session()->read('Auth.User.last_name_1') ), ['action' => 'view', $this->request->session()->read('Auth.User.id')])  ?></li>
              <li><?= $this->Html->link(__('Cerrar Sesión'), ['controller'=>'Users','action' => 'logout']) ?></li>
              <?php } ?>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->

<div class="nav-side-menu">
    <div class="brand">Nutrición y Balance Físico </div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
                <li  data-toggle="collapse" data-target="#usuarios" class="collapsed">
                  <a><i class="fa fa-users fa-lg"></i>Usuarios<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="usuarios">
                    <li><?=  $this->Html->link('Listar usuarios', ['controller' => 'Users', 'action' => 'index']) ?></li>
                    <?php if( $this->request->session()->read('Auth.User.role') == "admin"){?>
                    <li><?=  $this->Html->link('Nuevo usuario', ['controller' => 'Users', 'action' => 'add']) ?></li>
                    <?php }?>
                </ul>
                <li  data-toggle="collapse" data-target="#antecedentes" class="collapsed">
                  <a><i class="fa fa-paperclip fa-lg"></i>Antecedentes<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="antecedentes">
                    <li><?=  $this->Html->link('Listar antecedentes', ['controller' => 'Backgrounds', 'action' => 'index']) ?></li>
                    <?php if( $this->request->session()->read('Auth.User.role') == "admin"){?>
                    <li><?=  $this->Html->link('Nuevos antecedentes', ['controller' => 'Backgrounds', 'action' => 'add']) ?></li>
                    <?php }?>
                </ul><li  data-toggle="collapse" data-target="#estilo" class="collapsed">
                  <a><i class="fa fa-heart fa-lg"></i>Estilo de vida<span class="arrow"></span></a>
                </li>
                <li  data-toggle="collapse" data-target="#medidas" class="collapsed">
                  <a><i class="fa fa-book fa-lg"></i>Medidas<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="medidas">
                    <li><?=  $this->Html->link('Listar medidas', ['controller' => 'AnthropometricsData', 'action' => 'index']) ?></li>
                    <?php if( $this->request->session()->read('Auth.User.role') == "admin"){?>
                    <li><?=  $this->Html->link('Nuevas medidas', ['controller' => 'AnthropometricsData', 'action' => 'add']) ?></li>
                    <?php }?>
                </ul>
                <ul class="sub-menu collapse" id="estilo">
                    <li><?=  $this->Html->link('Listar Estilos de vida', ['controller' => 'Lifestyles', 'action' => 'index']) ?></li>
                    <?php if( $this->request->session()->read('Auth.User.role') == "admin"){?>
                    <li><?=  $this->Html->link('Nuevo estilo de vida', ['controller' => 'Lifestyles', 'action' => 'add']) ?></li>
                    <?php }?>
                </ul>
                <li  data-toggle="collapse" data-target="#planes" class="collapsed">
                  <a><i class="fa fa-spoon fa-lg"></i>Planes<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="planes">
                    <li><?=  $this->Html->link('Listar planes', ['controller' => 'Plans', 'action' => 'index']) ?></li>
                    <?php if( $this->request->session()->read('Auth.User.role') == "admin"){?>
                    <li><?=  $this->Html->link('Nuevo plan', ['controller' => 'Plans', 'action' => 'add']) ?></li>
                    <?php }?>
                </ul><li  data-toggle="collapse" data-target="#estilo" class="collapsed">
                  <a><i class="fa fa-heart fa-lg"></i>Estilo de vida<span class="arrow"></span></a>
                </li>
                <li  data-toggle="collapse" data-target="#citas" class="collapsed">
                  <a><i class="fa fa-calendar fa-lg"></i>Citas<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="citas">
                    <li><?=  $this->Html->link('Listar citas', ['controller' => 'Appointments', 'action' => 'index']) ?></li>
                    <?php if( $this->request->session()->read('Auth.User.role') == "admin"){?>
                    <li><?=  $this->Html->link('Nueva cita', ['controller' => 'Appointments', 'action' => 'add']) ?></li>
                    <?php }?>
                </ul>
            </ul>
     </div>
</div>
