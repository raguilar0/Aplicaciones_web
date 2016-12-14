<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Agregar plan alimenticio</h2>
        </div>
      <?= $this->Form->create($plan) ?>
      <div class="table-responsive">
        <table class="table-alimentacion">
          <thead >
            <tr>
              <th>Alimento</th>
              <th>Porc. d&iacute;a</th>
              <th>Desayuno</th>
              <th>Merienda</th>
              <th>Almuerzo</th>
              <th>Merienda</th>
              <th>Cena</th>
              <th>Media noche</th>
            </tr>
          </thead>
          <tbody>
            <tr class="tr-alimentacion-1">
              <td><br>Lacteos</td>
              <td><?= $this->Form->input('dairy_product.total',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('dairy_product.breakfast',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('dairy_product.snack_1',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('dairy_product.lunch',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('dairy_product.snack_2',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('dairy_product.dinner',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('dairy_product.snack_3',['label'=>'','class'=>'input_alimentacion']);?></td>
            </tr>
            <tr class="tr-alimentacion-2">
              <td><br>Vegetales</td>
              <td><?= $this->Form->input('vegetable.total',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('vegetable.breakfast',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('vegetable.snack_1',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('vegetable.lunch',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('vegetable.snack_2',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('vegetable.dinner',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('vegetable.snack_3',['label'=>'','class'=>'input_alimentacion']);?></td>
            </tr>
            <tr class="tr-alimentacion-1">
              <td><br>Frutas</td>
              <td><?= $this->Form->input('fruit.total',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('fruit.breakfast',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('fruit.snack_1',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('fruit.lunch',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('fruit.snack_2',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('fruit.dinner',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('fruit.snack_3',['label'=>'','class'=>'input_alimentacion']);?></td>
            </tr>
            <tr class="tr-alimentacion-2">
              <td><br>Harinas</td>
              <td><?= $this->Form->input('flour.total',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('flour.breakfast',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('flour.snack_1',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('flour.lunch',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('flour.snack_2',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('flour.dinner',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('flour.snack_3',['label'=>'','class'=>'input_alimentacion']);?></td>
            </tr>
            <tr class="tr-alimentacion-1">
              <td><br>Carne</td>
              <td><?= $this->Form->input('meat.total',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('meat.breakfast',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('meat.snack_1',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('meat.lunch',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('meat.snack_2',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('meat.dinner',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('meat.snack_3',['label'=>'','class'=>'input_alimentacion']);?></td>
            </tr>
            <tr class="tr-alimentacion-2">
              <td><br>Grasas</td>
              <td><?= $this->Form->input('fat.total',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('fat.breakfast',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('fat.snack_1',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('fat.lunch',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('fat.snack_2',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('fat.dinner',['label'=>'','class'=>'input_alimentacion']);?></td>
              <td><?= $this->Form->input('fat.snack_3',['label'=>'','class'=>'input_alimentacion']);?></td>
            </tr>
          </tbody>
        </table>
        <table>
      </div>
      <br><br><br>
      <div class="table-responsive">
        <table class="table-explicacion">
          <thead>
            <tr>
              <th>Tiempo</th>
              <th>Descripción</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="encabezado-explicacion"> Desayuno <br> 8-9 am </td>
              <td class="td-explicacion-1"><?= $this->Form->input('explanation.breakfast',['label'=>'','class'=>'input_explicacion']);?></td>
            </tr>
            <tr>
              <td class="encabezado-explicacion"> Merienda <br> 10-11 am</td>
              <td class="td-explicacion-2"><?= $this->Form->input('explanation.snack_1',['label'=>'','class'=>'input_explicacion']);?></td>
            </tr>
            <tr>
              <td class="encabezado-explicacion"> Almuerzo <br>12:30-1:30pm</td>
              <td class="td-explicacion-1"><?= $this->Form->input('explanation.lunch',['label'=>'','class'=>'input_explicacion']);?></td>
            </tr>
            <tr>
              <td class="encabezado-explicacion"> Merienda <br> 3-4 pm</td>
              <td class="td-explicacion-2"><?= $this->Form->input('explanation.snack_2',['label'=>'','class'=>'input_explicacion']);?></td>
            </tr>
            <tr>
              <td class="encabezado-explicacion"> Cena <br> 8-9 pm</td>
              <td class="td-explicacion-1"><?= $this->Form->input('explanation.dinner',['label'=>'','class'=>'input_explicacion']);?></td>
            </tr>
            <tr>
              <td class="encabezado-explicacion"> Media noche </td>
              <td class="td-explicacion-2"><?= $this->Form->input('explanation.snack_3',['label'=>'','class'=>'input_explicacion']);?></td>
            </tr>
          </tbody>
        </table>

      </div>
      <?= $this->Form->button('Guardar',['class'=>'btn btn-sm btn-primary']) ?>
      <?= $this->Form->end() ?>
  </div>
</div>
