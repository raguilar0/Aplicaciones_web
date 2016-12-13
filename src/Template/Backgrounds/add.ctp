<div class="row">
  <?php if($this->request->session()->read('Auth.User.role') == 'admin'){ ?>
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2>Agregar antecedentes</h2>
        </div>
    <?= $this->Form->create($background) ?>
    <fieldset>
        <?php
            echo $this->Form->input('user_id', ['options' => $users, 'empty' => true, 'label'=>'Usuario']);
            echo $this->Form->input('disease_1',['label'=>'Enfermedades cardiacas']);
            echo $this->Form->input('disease_2',['label'=>'HTA']);
            echo $this->Form->input('disease_3',['label'=>'Diabetes']);
            echo $this->Form->input('disease_4',['label'=>'Dislipidemia']);
            echo $this->Form->input('disease_5',['label'=>'Alergias']);
            echo $this->Form->input('disease_6',['label'=>'Úlceras']);
            echo $this->Form->input('disease_7',['label'=>'Problemas óseos']);
            echo $this->Form->input('disease_8',['label'=>'Gastritis']);
            echo $this->Form->input('disease_9',['label'=>'Colitis']);
            echo $this->Form->input('disease_10',['label'=>'Estres']);
            echo $this->Form->input('family_disease_1',['label'=>'DM en la familia']);
            echo $this->Form->input('family_disease_2',['label'=>'HTA en la familia']);
            echo $this->Form->input('family_disease_3',['label'=>'Dislipidemia en la familia']);
            echo $this->Form->input('family_disease_4',['label'=>'Otras enfermedades en la familia']);
        ?>
    </fieldset>
    <?= $this->Form->button('Agregar',['class'=>'btn btn-sm btn-primary']) ?>
    <?= $this->Form->end() ?>
    <?php } ?>
</div>
