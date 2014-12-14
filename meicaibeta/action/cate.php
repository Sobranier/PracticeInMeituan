<?php
    header('Content-type:application/json');
    $response = array(
        array {
            'cityId' => '1',
            'categoryList' => array(
                array(
                    'categoryBigName' => '蔬菜水果',
                    'linkrel' => '0001',
                ),
                array(
                    'categoryBigName' => '肉禽水产',
                    'linkrel' => '0002',
                ),
                array(
                    'categoryBigName' => '米面粮油',
                    'linkrel' => '0003',
                ),
                array(
                    'categoryBigName' => '调料其他',
                    'linkrel' => '0004',
                ),
            ),
        },
    
    );

    echo json_encode($response);
?>
