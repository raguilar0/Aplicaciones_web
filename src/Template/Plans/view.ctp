<div class="row">
  <div class="col-md-12">
      <div class="page-header">
          <h2>Ver plan alimenticio</h2>
      </div>
      <h3><?= $plan->has('user') ? $this->Html->link($plan->user->name." ".$plan->user->last_name_1." ".$plan->user->last_name_2, ['controller' => 'Users', 'action' => 'view', $plan->user->id]) : '' ?></h3>
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
              <td><?= $plan->dairy_product->total ?></td>
              <td><?= $plan->dairy_product->breakfast ?></td>
              <td><?= $plan->dairy_product->snack_1 ?></td>
              <td><?= $plan->dairy_product->lunch ?></td>
              <td><?= $plan->dairy_product->snack_2 ?></td>
              <td><?= $plan->dairy_product->dinner ?></td>
              <td><?= $plan->dairy_product->snack_3 ?></td>
            </tr>
            <tr class="tr-alimentacion-2">
              <td><br>Vegetales</td>
              <td><?= $plan->vegetable->total ?></td>
              <td><?= $plan->vegetable->breakfast ?></td>
              <td><?= $plan->vegetable->snack_1 ?></td>
              <td><?= $plan->vegetable->lunch ?></td>
              <td><?= $plan->vegetable->snack_2 ?></td>
              <td><?= $plan->vegetable->dinner ?></td>
              <td><?= $plan->vegetable->snack_3 ?></td>
            </tr>
            <tr class="tr-alimentacion-1">
              <td><br>Frutas</td>
              <td><?= $plan->fruit->total ?></td>
              <td><?= $plan->fruit->breakfast ?></td>
              <td><?= $plan->fruit->snack_1 ?></td>
              <td><?= $plan->fruit->lunch ?></td>
              <td><?= $plan->fruit->snack_2 ?></td>
              <td><?= $plan->fruit->dinner ?></td>
              <td><?= $plan->fruit->snack_3 ?></td>
            </tr>
            <tr class="tr-alimentacion-2">
              <td><br>Harinas</td>
              <td><?= $plan->flour->total ?></td>
              <td><?= $plan->flour->breakfast ?></td>
              <td><?= $plan->flour->snack_1 ?></td>
              <td><?= $plan->flour->lunch ?></td>
              <td><?= $plan->flour->snack_2 ?></td>
              <td><?= $plan->flour->dinner ?></td>
              <td><?= $plan->flour->snack_3 ?></td>
            </tr>
            <tr class="tr-alimentacion-1">
              <td><br>Carne</td>
              <td><?= $plan->meat->total ?></td>
              <td><?= $plan->meat->breakfast ?></td>
              <td><?= $plan->meat->snack_1 ?></td>
              <td><?= $plan->meat->lunch ?></td>
              <td><?= $plan->meat->snack_2 ?></td>
              <td><?= $plan->meat->dinner ?></td>
              <td><?= $plan->meat->snack_3 ?></td>
            </tr>
            <tr class="tr-alimentacion-2">
              <td><br>Grasas</td>
              <td><?= $plan->fat->total ?></td>
              <td><?= $plan->fat->breakfast ?></td>
              <td><?= $plan->fat->snack_1 ?></td>
              <td><?= $plan->fat->lunch ?></td>
              <td><?= $plan->fat->snack_2 ?></td>
              <td><?= $plan->fat->dinner ?></td>
              <td><?= $plan->fat->snack_3 ?></td>
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
              <td class="td-explicacion-1"><?= $plan->explanation->breakfast ?></td>
            </tr>
            <tr>
              <td class="encabezado-explicacion"> Merienda <br> 10-11 am</td>
              <td class="td-explicacion-2"><?= $plan->explanation->snack_1 ?></td>
            </tr>
            <tr>
              <td class="encabezado-explicacion"> Almuerzo <br>12:30-1:30pm</td>
              <td class="td-explicacion-1"><?= $plan->explanation->lunch ?></td>
            </tr>
            <tr>
              <td class="encabezado-explicacion"> Merienda <br> 3-4 pm</td>
              <td class="td-explicacion-2"><?= $plan->explanation->snack_2 ?></td>
            </tr>
            <tr>
              <td class="encabezado-explicacion"> Cena <br> 8-9 pm</td>
              <td class="td-explicacion-1"><?= $plan->explanation->dinner ?></td>
            </tr>
            <tr>
              <td class="encabezado-explicacion"> Media noche </td>
              <td class="td-explicacion-2"><?= $plan->explanation->snack_3 ?></td>
            </tr>
          </tbody>
        </table>

      </div>
  </div>

</div>
