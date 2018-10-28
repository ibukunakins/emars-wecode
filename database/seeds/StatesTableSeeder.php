<?php

use Illuminate\Database\Seeder;
use App\State;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s1 = State::create(['name' => 'Abia', 'code' => 'AB', 'region_id' => 4]);
        $s2 = State::create(['name' => 'Adamawa', 'code' => 'AD', 'region_id' => 2]);
        $s3 = State::create(['name' => 'Akwa Ibom', 'code' => 'AK', 'region_id' => 5]);
        $s4 = State::create(['name' => 'Anambra', 'code' => 'AN', 'region_id' => 4]);
        $s5 = State::create(['name' => 'Bauchi', 'code' => 'BA', 'region_id' => 2]);
        $s6 = State::create(['name' => 'Bayelsa', 'code' => 'BY', 'region_id' => 5]);
        $s7 = State::create(['name' => 'Benue', 'code' => 'BE', 'region_id' => 1]);
        $s8 = State::create(['name' => 'Borno', 'code' => 'BN', 'region_id' => 2]);
        $s9 = State::create(['name' => 'Cross River', 'code' => 'CR', 'region_id' => 6]);
        $s10 = State::create(['name' => 'Delta', 'code' => 'DL', 'region_id' => 5]);
        $s11 = State::create(['name' => 'Ebonyi', 'code' => 'EB', 'region_id' => 4]);
        $s12 = State::create(['name' => 'Edo', 'code' => 'ED', 'region_id' => 5]);
        $s13 = State::create(['name' => 'Ekiti', 'code' => 'EK', 'region_id' => 6]);
        $s14 = State::create(['name' => 'Enugu', 'code' => 'EN', 'region_id' => 4]);
        $s15 = State::create(['name' => 'FCT', 'code' => 'FT', 'region_id' => 1]);
        $s16 = State::create(['name' => 'Gombe', 'code' => 'GB', 'region_id' => 2]);
        $s17 = State::create(['name' => 'Imo', 'code' => 'IM', 'region_id' => 4]);
        $s18 = State::create(['name' => 'Jigawa', 'code' => 'JG', 'region_id' => 3]);
        $s19 = State::create(['name' => 'Kaduna', 'code' => 'KD', 'region_id' => 3]);
        $s20 = State::create(['name' => 'Kano', 'code' => 'KN', 'region_id' => 3]);
        $s21 = State::create(['name' => 'Katsina', 'code' => 'KT', 'region_id' => 3]);
        $s22 = State::create(['name' => 'Kebbi', 'code' => 'KB', 'region_id' => 3]);
        $s23 = State::create(['name' => 'Kogi', 'code' => 'KG', 'region_id' => 1]);
        $s24 = State::create(['name' => 'Kwara', 'code' => 'KW', 'region_id' => 1]);
        $s25 = State::create(['name' => 'Lagos', 'code' => 'LA', 'region_id' => 6]);
        $s26 = State::create(['name' => 'Nassarawa', 'code' => 'NS', 'region_id' => 1]);
        $s27 = State::create(['name' => 'Niger', 'code' => 'NI', 'region_id' => 1]);
        $s28 = State::create(['name' => 'Ogun', 'code' => 'OG', 'region_id' => 6]);
        $s29 = State::create(['name' => 'Ondo', 'code' => 'OD', 'region_id' => 6]);
        $s30 = State::create(['name' => 'Osun', 'code' => 'OS', 'region_id' => 6]);
        $s31 = State::create(['name' => 'Oyo', 'code' => 'OY', 'region_id' => 6]);
        $s32 = State::create(['name' => 'Plateau', 'code' => 'PL', 'region_id' => 1]);
        $s33 = State::create(['name' => 'Rivers', 'code' => 'RV', 'region_id' => 5]);
        $s34 = State::create(['name' => 'Sokoto', 'code' => 'SK', 'region_id' => 3]);
        $s35 = State::create(['name' => 'Taraba', 'code' => 'TR', 'region_id' => 2]);
        $s36 = State::create(['name' => 'Yobe', 'code' => 'YB', 'region_id' => 2]);
        $s37 = State::create(['name' => 'Zamfara', 'code' => 'ZF', 'region_id' => 3]);
    }
}
