<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Anthropometrics Data'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="anthropometricsData form large-9 medium-8 columns content">
    <?= $this->Form->create($anthropometricsData) ?>
    <fieldset>
        <legend><?= __('Datos antropométricos') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('date', ['empty' => true,'label'=>'Fecha']);
            echo $this->Form->input('height',['label'=>'Talla']);
            echo $this->Form->input('weight',['label'=>'Peso']);
            echo $this->Form->input('waist_circumference',['label'=>'Circunferencia de cintura (cm)']);
            echo $this->Form->input('hip_circumference',['label'=>'Circuferencia de cadera (cm)']);
            echo $this->Form->input('em',['label'=>'EM']);
            echo $this->Form->input('total_fat',['label'=>'Grasa total']);
            echo $this->Form->input('visceral_fat',['label'=>'Grasa viceral']);
            echo $this->Form->input('imc',['label'=>'IMC']);
            echo $this->Form->input('muscle',['label'=>'% Masa muscular']);
            echo $this->Form->input('skindfolds',['label'=>'Pliegues cutaneos']);
            echo $this->Form->input('triceps',['label' => 'Triceps']);
            echo $this->Form->input('subscapular',['label'=>'Subescalar']);
            echo $this->Form->input('abdominal',['label'=>'Abdominal']);
            echo $this->Form->input('sp',['label'=>'Suprailiaco']);
            echo $this->Form->input('blood_pressure',['label'=>'Presión']);
            echo $this->Form->input('pulse',['label'=>'Pulso']);
            echo $this->Form->input('weight_goal', ['label'=> 'Peso meta']);
            echo $this->Form->input('fat_goal', ['label'=>'Grasa meta']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
