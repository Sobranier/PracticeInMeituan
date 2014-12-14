<?php
header('Content-type:application/json');
$response = array(
            'categoryNum' => 4,
            'dealist' => array (
                 array(
                    'categoryBigName' => '蔬菜水果',
                    'category' => array(
                        array(
                            'categoryName' => '叶菜类',
                            'deal' => array(
                                array(
                                    'name' => '甘蓝圆白菜',
                                    'store' => false,
                                    'des' => '一袋约20斤，约8-10个',
                                    'price' => 11,
                                    'unit' => '袋',
                                    'amount' => '5',
                                    'amountUnit' => '斤'
                                    'averagePrice' => '0.55',
                                    'averageUnit' => '元/斤',
                                    'total' => '2000袋',
                                ),
                            )
                        ),
                    )
                ),
            ),
               
            
        );
            

echo json_encode($response);
?>
