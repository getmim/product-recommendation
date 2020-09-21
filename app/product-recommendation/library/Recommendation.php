<?php
/**
 * Recommendation
 * @package product-recommendation
 * @version 0.0.1
 */

namespace ProductRecommendation\Library;

use Product\Model\Product;

class Recommendation
{
    static function get(int $rpp=12, int $page=1, array $cond=[]): array{
        $where = [
            'status' => 2
        ];
        foreach($cond as $key => $val)
            $where[$key] = $val;

        $products = Product::get($where, $rpp, $page, ['RAND()'=>true]);
        return $products ?? [];
    }
}