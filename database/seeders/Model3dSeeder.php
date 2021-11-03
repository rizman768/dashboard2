<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Model3dSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = [
            [
                'model3d' => "Bandung",
                'link' => 'https://app.sketchup.com/viewer/3dw?WarehouseModelId=c7426b44-ce02-4217-88a2-1b155548840c&amp;noEmbedWatermark=true&amp;width=580&amp;height=326',
            ],
            [
                'model3d' => "Kiara Condong",
                'link' => 'https://app.sketchup.com/viewer/3dw?WarehouseModelId=62875d3e-dd39-4e86-92b7-0168996729c9&amp;noEmbedWatermark=true&amp;width=580&amp;height=326',
            ],
            [
                'model3d' => "Padalarang",
                'link' => 'https://app.sketchup.com/viewer/3dw?WarehouseModelId=04a6cfff-c5f5-4fc7-b02c-c66524e319e8&amp;noEmbedWatermark=true&amp;width=580&amp;height=326',
            ],
            [
                'model3d' => "Ciroyom",
                'link' => 'https://app.sketchup.com/viewer/3dw?WarehouseModelId=8086e0ca-5d60-4370-8e7c-55c81b8493f1&amp;noEmbedWatermark=true&amp;width=580&amp;height=326',
            ],
            [
                'model3d' => "Cimahi",
                'link' => 'https://app.sketchup.com/viewer/3dw?WarehouseModelId=6ebfefb7-e750-47e6-abb0-13ded430ea8d&amp;noEmbedWatermark=true&amp;width=580&amp;height=326',
            ],

        ];

        \DB::table('model3ds')->insert($model);
    }
}
