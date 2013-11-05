<?php

$this->widget('TbGridView', array(
    'dataProvider' => $model->search(),
    'id' => $id,
    'type' => 'bordered condensed',
    'template' => '{items}',
    'pager' => array(
        'class' => 'TbPager',
        'displayFirstAndLast' => false,
    ),
    'columns' => array(
        array(
            'name' => 'stamp',
        ),        
        array(
            'name' => 'action',
        ),
        array(
            'name' => 'field',
        ),
        array(
            'name' => 'old_value',
        ),
        array(
            'name' => 'new_value',
        ),
        array(
            'name' => 'user_id',
            'value' => 'CHtml::value($data, \'user.username\')',
        ),
)));