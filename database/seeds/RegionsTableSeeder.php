<?php

use Illuminate\Database\Seeder;
use App\Region;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nc = Region::create(['code' => 'NC', 'name' => 'North Central']);
        $ne = Region::create(['code' => 'NE', 'name' => 'North East']);
        $nw = Region::create(['code' => 'NW', 'name' => 'North West']);
        $se = Region::create(['code' => 'SE', 'name' => 'South East']);
        $ss = Region::create(['code' => 'SS', 'name' => 'South South']);
        $sw = Region::create(['code' => 'SW', 'name' => 'South West']);
    }
}
