<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="page-header">
      <h2>Editar medidas</h2>
    </div>
    <?= $this->Form->create($anthropometricsData) ?>
    <fieldset>
        <?php
            echo $this->Form->input('user_id', ['options' => $users,'label'=>'Usuario']);
            echo $this->Form->input('date', ['empty' => true,'label'=>'Fecha']);
            echo $this->Form->input('height',['label'=>'Talla']);
            echo $this->Form->input('weight',['label'=>'Peso']);
            echo $this->Form->input('waist_circumference',['label'=>'Circuferencia de cintura']);
            echo $this->Form->input('hip_circumference',['label'=>'Circuferencia de cadera']);
            echo $this->Form->input('em',['label'=>'EM']);
            echo $this->Form->input('total_fat',['label'=>'Grasa total']);
            echo $this->Form->input('visceral_fat',['label'=>'Grasa visceral']);
            echo $this->Form->input('imc',['label'=>'IMC']);
            echo $this->Form->input('muscle',['label'=>'% de músculo']);
            echo $this->Form->input('skindfolds',['label'=>'Pliegues cutaneos']);
            echo $this->Form->input('triceps',['label'=>'Triceps']);
            echo $this->Form->input('subscapular',['label'=>'Subescalar']);
            echo $this->Form->input('abdominal',['label'=>'Abdominal']);
            echo $this->Form->input('sp',['label'=>'Suprailiaco']);
            echo $this->Form->input('blood_pressure',['label'=>'Presión arteral']);
            echo $this->Form->input('pulse',['label'=>'Pulso']);
            echo $this->Form->input('weight_goal',['label'=>'Peso meta']);
            echo $this->Form->input('fat_goal',['label'=>'Grasa meta']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Editar')) ?>
    <?= $this->Form->end() ?>
</div>
