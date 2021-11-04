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

        $iframe = [
            [
                'link' => 'https://elab.sccic-dev.com/public/dashboard/50a9fb48-3f21-4318-8cfc-12c80e532b8f',
                'nama_dashboard' => 'safe secure'
            ],
            [
                'link' => 'https://elab.sccic-dev.com/public/dashboard/f06e6ecf-07db-49b9-9245-591987948be0',
                'nama_dashboard' => 'coziness'
            ],
            [
                'link' => 'https://elab.sccic-dev.com/public/dashboard/ddbcbb2d-46d5-4598-a0be-1827b569e6bd',
                'nama_dashboard' => 'social distancing'
            ],
            [
                'link' => 'https://elab.sccic-dev.com/public/dashboard/28c98d62-9867-41f0-8c7b-c09d78910dd1',
                'nama_dashboard' => 'cumulative counting'
            ],
            [
                'link' => 'https://elab.sccic-dev.com/public/dashboard/932bb324-7924-40c8-8d5a-b221617c2046',
                'nama_dashboard' => 'face recognition'
            ],
            [
                'link' => 'https://elab.sccic-dev.com/public/dashboard/a55322b8-c666-4737-b3ec-4cb88a332953',
                'nama_dashboard' => 'kondisi dan sarana prasarana stasiun'
            ],
            [
                'link' => 'https://elab.sccic-dev.com/public/dashboard/70b1bb72-0528-4adb-9dfe-10d04b53e6e9',
                'nama_dashboard' => 'metadata social media'
            ],
        ];

        $model = [
            [
                'user_id' => 4,
                'model3d' => "Bandung",
                'link' => 'https://app.sketchup.com/viewer/3dw?WarehouseModelId=c7426b44-ce02-4217-88a2-1b155548840c&amp;noEmbedWatermark=true&amp;width=580&amp;height=326',
            ],
            [
                'user_id' => 5,
                'model3d' => "Cimahi",
                'link' => 'https://app.sketchup.com/viewer/3dw?WarehouseModelId=6ebfefb7-e750-47e6-abb0-13ded430ea8d&amp;noEmbedWatermark=true&amp;width=580&amp;height=326',
            ],
            [
                'user_id' => 6,
                'model3d' => "Ciroyom",
                'link' => 'https://app.sketchup.com/viewer/3dw?WarehouseModelId=8086e0ca-5d60-4370-8e7c-55c81b8493f1&amp;noEmbedWatermark=true&amp;width=580&amp;height=326',
            ],
            [
                'user_id' => 7,
                'model3d' => "Padalarang",
                'link' => 'https://app.sketchup.com/viewer/3dw?WarehouseModelId=04a6cfff-c5f5-4fc7-b02c-c66524e319e8&amp;noEmbedWatermark=true&amp;width=580&amp;height=326',
            ],
            [
                'user_id' => 8,
                'model3d' => "Kiara Condong",
                'link' => 'https://app.sketchup.com/viewer/3dw?WarehouseModelId=62875d3e-dd39-4e86-92b7-0168996729c9&amp;noEmbedWatermark=true&amp;width=580&amp;height=326',
            ],

        ];

        \DB::table('model3ds')->insert($model);
        \DB::table('iframes')->insert($iframe);
    }
}
