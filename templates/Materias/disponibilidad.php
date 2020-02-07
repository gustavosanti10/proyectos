
<?php //debug($profesorsp) ?>
<h3> Todos los Profesores correspondientes a la Materia: <?php echo $materia['nombre'] ?> </h3>
<?php if($profesorst!=null): ?>
<div class="profesors index content">
    <h3><?= __('Trabajo a Tiempo Completo') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th> ID </th>
                    <th> Cédula </th>
                    <th> Nombre Completo </th>
                    <th> Contrato </th>
                    <th> Materia ID </th>                  
                </tr>
            </thead>
            <tbody>
                <?php foreach ($profesorst as $profesor): ?>
                <tr>
                    <td><?= $this->Number->format($profesor->id) ?></td>
                    <td><?= h($profesor->ci) ?></td>
                    <td><?= h($profesor->nombres) ?></td>
                    <td><?= h($profesor->contrato) ?></td>
                    <td><?= h($profesor->materia_id) ?></td>              
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>  
</div>
<?php else: ?>
<div class="profesors index content">
    <h4> No existen profesores de Tiempo Completo en esta materia </h4>
</div>
<?php endif; ?>


<?php if($profesorsp!=null): ?>
<div class="profesors index content">
    <h3><?= __('Trabajo Por Horas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th> ID </th>
                    <th> Cédula </th>
                    <th> Nombre Completo </th>
                    <th> Contrato </th>    
                    <th> Materia ID </th>                 
                </tr>
            </thead>
            <tbody>
                <?php foreach ($profesorsp as $profesor): ?>
                <tr>
                    <td><?= $this->Number->format($profesor->id) ?></td>
                    <td><?= h($profesor->ci) ?></td>
                    <td><?= h($profesor->nombres) ?></td>
                    <td><?= h($profesor->contrato) ?></td>
                    <td><?= h($profesor->materia_id) ?></td>             
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>  
</div>
<?php else: ?>
<div class="profesors index content">
    <h4> No existe profesores Por Horas en esta materia </h4>
</div>
<?php endif; ?>
    


