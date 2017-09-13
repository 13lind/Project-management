<?php

use Illuminate\Database\Seeder;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             
         DB::table('car_info')->truncate();
         
         DB::table('car_info')->insert(array(

            array('make'=>'Ford', 'model'=>'Falcon', 'rego_number'=>'AAA-000', 'car_location'=>'124 La Trobe Street, Melbourne VIC 3000', 
                'cost_per_hour'=>'8', 'cost_per_day'=>'70', 'avaliable'=>'1'),

            array('make'=>'Holden', 'model'=>'Commodore', 'rego_number'=>'BBB-000', 'car_location'=>'50 Smith Street, Collingwood VIC 3066', 
                'cost_per_hour'=>'9', 'cost_per_day'=>'75', 'avaliable'=>'1'),

            array('make'=>'Toyota', 'model'=>'Corolla', 'rego_number'=>'CCC-000', 'car_location'=>'128 Leicester St, Carlton VIC 3053', 
                'cost_per_hour'=>'8', 'cost_per_day'=>'75', 'avaliable'=>'0'),
                                            
            array('make'=>'Mazda', 'model'=>'Mazda2', 'rego_number'=>'DDD-000', 'car_location'=>'291 Nicholson St, Carlton VIC 3053',
                'cost_per_hour'=>'7', 'cost_per_day'=>'65', 'avaliable'=>'1'),

            array('make'=>'Nissan', 'model'=>'Tida', 'rego_number'=>'EEE-000', 'car_location'=>'72 Alexandra Parade, Fitzroy VIC 3065',
                'cost_per_hour'=>'8', 'cost_per_day'=>'65', 'avaliable'=>'1'),

            array('make'=>'Mitsubishi', 'model'=>'Magna', 'rego_number'=>'FFF-000', 'car_location'=>'288 Chapel St, Prahran VIC 3181',
                'cost_per_hour'=>'10', 'cost_per_day'=>'70', 'avaliable'=>'0'),

            array('make'=>'Kia', 'model'=>'Rio', 'rego_number'=>'GGG-000', 'car_location'=>'110 Bridge Road, Richmond VIC 3121',
                'cost_per_hour'=>'7', 'cost_per_day'=>'55', 'avaliable'=>'1'),
                                             
            array('make'=>'Toyota', 'model'=>'Camry', 'rego_number'=>'HHH-000', 'car_location'=>'77 Sydney Road, Brunswick VIC 3056',
                'cost_per_hour'=>'8', 'cost_per_day'=>'70', 'avaliable'=>'1'),
                                             
            array('make'=>'Nissan', 'model'=>'Pulsar', 'rego_number'=>'III-000', 'car_location'=>'121 Bell Street, Coburg VIC 3058',
                'cost_per_hour'=>'7', 'cost_per_day'=>'65', 'avaliable'=>'1'),
                                             
            array('make'=>'Ford', 'model'=>'Focus', 'rego_number'=>'JJJ-000', 'car_location'=>'800 Bourke Street, Docklands VIC 3008',
                'cost_per_hour'=>'7', 'cost_per_day'=>'70', 'avaliable'=>'0'),
                                             
            array('make'=>'Nissan', 'model'=>'X Trail', 'rego_number'=>'KKK-000', 'car_location'=>'201 Rathdowne Street, Carlton VIC 3053',
                'cost_per_hour'=>'10', 'cost_per_day'=>'75', 'avaliable'=>'1'),
                                             
            array('make'=>'Honda', 'model'=>'Civic', 'rego_number'=>'LLL-000', 'car_location'=>'100 Elliot Avenue, Parkville VIC 3052',
                'cost_per_hour'=>'8', 'cost_per_day'=>'75', 'avaliable'=>'1'),
                                             
            array('make'=>'Holden', 'model'=>'Astra', 'rego_number'=>'MMM-000', 'car_location'=>'200 Mt Alexander Road, Flemington VIC 3031',
                'cost_per_hour'=>'7', 'cost_per_day'=>'65', 'avaliable'=>'1'),
                                             
            array('make'=>'Holden', 'model'=>'Barina', 'rego_number'=>'NNN-000', 'car_location'=>'117 Plenty Road, Preston VIC 3072',
                'cost_per_hour'=>'7', 'cost_per_day'=>'65', 'avaliable'=>'1'),
                                             
            array('make'=>'BMW', 'model'=>'E89', 'rego_number'=>'OOO-000', 'car_location'=>'97 Toorak Road, South Yarra VIC 3141',
                'cost_per_hour'=>'15', 'cost_per_day'=>'100', 'avaliable'=>'0'),
                                            
            array('make'=>'Ford', 'model'=>'Falcon', 'rego_number'=>'PPP-000', 'car_location'=>'54 Burgundy Street, Heidelberg VIC 3084',
                'cost_per_hour'=>'8', 'cost_per_day'=>'70', 'avaliable'=>'1'),
                                             
            array('make'=>'Toyota', 'model'=>'Corolla', 'rego_number'=>'QQQ-000', 'car_location'=>'33 Lower Heidelberg Road, Ivanhoe VIC 3079',
                'cost_per_hour'=>'8', 'cost_per_day'=>'75', 'avaliable'=>'0'),
                                             
            array('make'=>'Peugeot', 'model'=>'208', 'rego_number'=>'RRR-000', 'car_location'=>'67 Lower Plenty Road, Rosanna VIC 3084',
                'cost_per_hour'=>'10', 'cost_per_day'=>'85', 'avaliable'=>'0'),
                                            
            array('make'=>'Suzuki', 'model'=>'Swift', 'rego_number'=>'SSS-000', 'car_location'=>'225 High Street, Northcote VIC 3070',
                'cost_per_hour'=>'9', 'cost_per_day'=>'75', 'avaliable'=>'1'),
                                             
            array('make'=>'Subaru', 'model'=>'Impreza', 'rego_number'=>'TTT-000', 'car_location'=>'89 Queens Parade, Clifton Hill VIC 3068',
                'cost_per_hour'=>'9', 'cost_per_day'=>'75', 'avaliable'=>'1'),
                                             
            array('make'=>'Subaru', 'model'=>'Forester', 'rego_number'=>'UUU-000', 'car_location'=>'101 Collins Street, Melbourne VIC 3000',
                'cost_per_hour'=>'10', 'cost_per_day'=>'80', 'avaliable'=>'0'),
                                             
            array('make'=>'Ford', 'model'=>'Territory', 'rego_number'=>'VVV-000', 'car_location'=>'20 Rubicon Street, Reservoir VIC 3073',
                'cost_per_hour'=>'7', 'cost_per_day'=>'70', 'avaliable'=>'1'),
                                             
            array('make'=>'Kia', 'model'=>'Carnival', 'rego_number'=>'WWW-000', 'car_location'=>'1081 Belmore Road, Balwyn VIC 3103',
                'cost_per_hour'=>'7', 'cost_per_day'=>'75', 'avaliable'=>'0'),
                                             
            array('make'=>'Mazda', 'model'=>'Mazda3', 'rego_number'=>'XXX-000', 'car_location'=>'41 Burke Road, Malvern East VIC 3145',
                'cost_per_hour'=>'9', 'cost_per_day'=>'70', 'avaliable'=>'0'),
                                             
            array('make'=>'Honda', 'model'=>'Jazz', 'rego_number'=>'YYY-000', 'car_location'=>'300 Glenferrie Road, Armadale VIC 3143',
                'cost_per_hour'=>'8', 'cost_per_day'=>'70', 'avaliable'=>'0'),
                                            
            array('make'=>'Nissan', 'model'=>'Micra', 'rego_number'=>'ZZZ-000', 'car_location'=>'500 Punt Road, South Yarra VIC 3141',
                'cost_per_hour'=>'7', 'cost_per_day'=>'65', 'avaliable'=>'1'),
                                             
            array('make'=>'Kia', 'model'=>'Rio', 'rego_number'=>'AAA-111', 'car_location'=>'72 Separation Street, Northcote VIC 3070',
                'cost_per_hour'=>'8', 'cost_per_day'=>'60', 'avaliable'=>'1'),
                                             
            array('make'=>'Toyota', 'model'=>'Carolla', 'rego_number'=>'BBB-111', 'car_location'=>'234 St Georges Road, Northcote VIC 3070',
                'cost_per_hour'=>'8', 'cost_per_day'=>'70', 'avaliable'=>'1'),
                                            
            array('make'=>'Suzuki', 'model'=>'Swift', 'rego_number'=>'CCC-111', 'car_location'=>'89 High Street, Preston VIC 3072',
                'cost_per_hour'=>'7', 'cost_per_day'=>'65', 'avaliable'=>'0'),
                                             
            array('make'=>'Honda', 'model'=>'Civic', 'rego_number'=>'DDD-111', 'car_location'=>'71 Station Street, Fairfield VIC 3071',
                'cost_per_hour'=>'8', 'cost_per_day'=>'60', 'avaliable'=>'1'),
                                             
            array('make'=>'Holden', 'model'=>'Astra', 'rego_number'=>'EEE-111', 'car_location'=>'191 Victoria Street, Richmond VIC 3121',
                'cost_per_hour'=>'7', 'cost_per_day'=>'55', 'avaliable'=>'0'),
                                             
            array('make'=>'Mitsubishi', 'model'=>'Magna', 'rego_number'=>'FFF-111', 'car_location'=>'500 Elizabeth Street, Melbourne VIC 3000',
                'cost_per_hour'=>'8', 'cost_per_day'=>'70', 'avaliable'=>'0'),
                                             
            array('make'=>'Toyota', 'model'=>'Carolla', 'rego_number'=>'GGG-111', 'car_location'=>'53 Flinders Street, Melbourne VIC 3000',
                'cost_per_hour'=>'9', 'cost_per_day'=>'75', 'avaliable'=>'0'),
                                             
            array('make'=>'Ford', 'model'=>'Focus', 'rego_number'=>'HHH-111', 'car_location'=>'96 Russell Street, Melbourne VIC 3000',
                'cost_per_hour'=>'9', 'cost_per_day'=>'70', 'avaliable'=>'0'),
                                            
            array('make'=>'Jeep', 'model'=>'Cherokee', 'rego_number'=>'III-111', 'car_location'=>'20 King Street, Melbourne VIC 3000',
                'cost_per_hour'=>'10', 'cost_per_day'=>'80', 'avaliable'=>'1'),
                                             
            array('make'=>'Subaru', 'model'=>'Impreza', 'rego_number'=>'JJJ-111', 'car_location'=>'380 Lygon Street, Carlton VIC 3053',
                'cost_per_hour'=>'9', 'cost_per_day'=>'70', 'avaliable'=>'1'),
                                             
            array('make'=>'Nissan', 'model'=>'Xtrail', 'rego_number'=>'KKK-111', 'car_location'=>'163 Main Hurstbridge Road, Diamond Creek VIC 3089',
                'cost_per_hour'=>'8', 'cost_per_day'=>'65', 'avaliable'=>'1'),
                                             
            array('make'=>'Honda', 'model'=>'Civic', 'rego_number'=>'LLL-111', 'car_location'=>'229 Chapel Street Prahran VIC 3181',
                'cost_per_hour'=>'7', 'cost_per_day'=>'65', 'avaliable'=>'0'),
                                             
            array('make'=>'Holden', 'model'=>'Commodore', 'rego_number'=>'MMM-111', 'car_location'=>'791 Sydney Road, Brunswick VIC 3056',
                'cost_per_hour'=>'8', 'cost_per_day'=>'70', 'avaliable'=>'0'),
                                             
            array('make'=>'Kia', 'model'=>'Rio', 'rego_number'=>'NNN-111', 'car_location'=>'8 Whiteman Street, Southbank VIC 3006',
                'cost_per_hour'=>'7', 'cost_per_day'=>'65', 'avaliable'=>'1'),
                                             
            array('make'=>'Nissan', 'model'=>'Patrol', 'rego_number'=>'OOO-111', 'car_location'=>'8 Droop Street, Footscray VIC 3011',
                'cost_per_hour'=>'10', 'cost_per_day'=>'80', 'avaliable'=>'0'),
                                             
            array('make'=>'Holden', 'model'=>'Astra', 'rego_number'=>'PPP-111', 'car_location'=>'375 Albert Road, Melbourne VIC 3205',
                'cost_per_hour'=>'7', 'cost_per_day'=>'65', 'avaliable'=>'0'),
                                             
  

            
      ));
       
    }
}
