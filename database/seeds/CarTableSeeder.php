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

            array('make'=>'Ford', 'model'=>'Falcon', 'rego_number'=>'AAA-000', 'car_location'=>'124 La Trobe Street, Melbourne VIC 3000', 'lat'=>'-37.807411', 'long'=>'144.964763', 
                'cost_per_hour'=>'8', 'cost_per_day'=>'70', 'avaliable'=>'1'),

            array('make'=>'Holden', 'model'=>'Commodore', 'rego_number'=>'BBB-000', 'car_location'=>'50 Smith Street, Collingwood VIC 3066', 'lat'=>'-37.806919', 'long'=>'144.983109', 
                'cost_per_hour'=>'9', 'cost_per_day'=>'75', 'avaliable'=>'1'),

            array('make'=>'Toyota', 'model'=>'Corolla', 'rego_number'=>'CCC-000', 'car_location'=>'128 Leicester St, Carlton VIC 3053', 'lat'=>'-37.803363', 'long'=>'144.960925', 
                'cost_per_hour'=>'8', 'cost_per_day'=>'75', 'avaliable'=>'0'),
                                            
            array('make'=>'Mazda', 'model'=>'Mazda2', 'rego_number'=>'DDD-000', 'car_location'=>'291 Nicholson St, Carlton VIC 3053', 'lat'=>'-37.793233', 'long'=>'144.975406', 
                'cost_per_hour'=>'7', 'cost_per_day'=>'65', 'avaliable'=>'1'),

            array('make'=>'Nissan', 'model'=>'Tida', 'rego_number'=>'EEE-000', 'car_location'=>'72 Alexandra Parade, Fitzroy VIC 3065', 'lat'=>'-37.793525', 'long'=>'144.978271',
                'cost_per_hour'=>'8', 'cost_per_day'=>'65', 'avaliable'=>'1'),

            array('make'=>'Mitsubishi', 'model'=>'Magna', 'rego_number'=>'FFF-000', 'car_location'=>'288 Chapel St, Prahran VIC 3181', 'lat'=>'-37.848524', 'long'=>'144.994067',
                'cost_per_hour'=>'10', 'cost_per_day'=>'70', 'avaliable'=>'0'),

            array('make'=>'Kia', 'model'=>'Rio', 'rego_number'=>'GGG-000', 'car_location'=>'110 Bridge Road, Richmond VIC 3121', 'lat'=>'-37.818140', 'long'=>'144.993754', 
                'cost_per_hour'=>'7', 'cost_per_day'=>'55', 'avaliable'=>'1'),
                                             
            array('make'=>'Toyota', 'model'=>'Camry', 'rego_number'=>'HHH-000', 'car_location'=>'77 Sydney Road, Brunswick VIC 3056', 'lat'=>'-37.775877', 'long'=>'144.960437',
                'cost_per_hour'=>'8', 'cost_per_day'=>'70', 'avaliable'=>'1'),
                                             
            array('make'=>'Nissan', 'model'=>'Pulsar', 'rego_number'=>'III-000', 'car_location'=>'121 Bell Street, Coburg VIC 3058', 'lat'=>'-37.741316', 'long'=>'144.964749',
                'cost_per_hour'=>'7', 'cost_per_day'=>'65', 'avaliable'=>'1'),
                                             
            array('make'=>'Ford', 'model'=>'Focus', 'rego_number'=>'JJJ-000', 'car_location'=>'800 Bourke Street, Docklands VIC 3008', 'lat'=>'-37.815018', 'long'=>'144.946014',
                'cost_per_hour'=>'7', 'cost_per_day'=>'70', 'avaliable'=>'0'),
                                             
            array('make'=>'Nissan', 'model'=>'X Trail', 'rego_number'=>'KKK-000', 'car_location'=>'201 Rathdowne Street, Carlton VIC 3053', 'lat'=>'-37.801963', 'long'=>'144.969467',
                'cost_per_hour'=>'10', 'cost_per_day'=>'75', 'avaliable'=>'1'),
                                             
            array('make'=>'Honda', 'model'=>'Civic', 'rego_number'=>'LLL-000', 'car_location'=>'100 Elliot Avenue, Parkville VIC 3052', 'lat'=>'-37.788207', 'long'=>'144.949842',
                'cost_per_hour'=>'8', 'cost_per_day'=>'75', 'avaliable'=>'1'),
                                             
            array('make'=>'Holden', 'model'=>'Astra', 'rego_number'=>'MMM-000', 'car_location'=>'200 Mt Alexander Road, Flemington VIC 3031', 'lat'=>'-37.781668', 'long'=>'144.932951',
                'cost_per_hour'=>'7', 'cost_per_day'=>'65', 'avaliable'=>'1'),
                                             
            array('make'=>'Holden', 'model'=>'Barina', 'rego_number'=>'NNN-000', 'car_location'=>'117 Plenty Road, Preston VIC 3072', 'lat'=>'-37.747956', 'long'=>'145.004390',
                'cost_per_hour'=>'7', 'cost_per_day'=>'65', 'avaliable'=>'1'),
                                             
            array('make'=>'BMW', 'model'=>'E89', 'rego_number'=>'OOO-000', 'car_location'=>'97 Toorak Road, South Yarra VIC 3141', 'lat'=>'-37.838583', 'long'=>'144.989712',
                'cost_per_hour'=>'15', 'cost_per_day'=>'100', 'avaliable'=>'0'),
                                            
            array('make'=>'Ford', 'model'=>'Falcon', 'rego_number'=>'PPP-000', 'car_location'=>'54 Burgundy Street, Heidelberg VIC 3084', 'lat'=>'-37.756471', 'long'=>'145.068403',
                'cost_per_hour'=>'8', 'cost_per_day'=>'70', 'avaliable'=>'1'),
                                             
            array('make'=>'Toyota', 'model'=>'Corolla', 'rego_number'=>'QQQ-000', 'car_location'=>'33 Lower Heidelberg Road, Ivanhoe VIC 3079', 'lat'=>'-37.771658', 'long'=>'145.044779',
                'cost_per_hour'=>'8', 'cost_per_day'=>'75', 'avaliable'=>'0'),
                                             
            array('make'=>'Peugeot', 'model'=>'208', 'rego_number'=>'RRR-000', 'car_location'=>'67 Lower Plenty Road, Rosanna VIC 3084', 'lat'=>'-37.743604', 'long'=>'145.062936',
                'cost_per_hour'=>'10', 'cost_per_day'=>'85', 'avaliable'=>'0'),
                                            
            array('make'=>'Suzuki', 'model'=>'Swift', 'rego_number'=>'SSS-000', 'car_location'=>'225 High Street, Northcote VIC 3070', 'lat'=>'-37.773621', 'long'=>'144.997933',
                'cost_per_hour'=>'9', 'cost_per_day'=>'75', 'avaliable'=>'1'),
                                             
            array('make'=>'Subaru', 'model'=>'Impreza', 'rego_number'=>'TTT-000', 'car_location'=>'89 Queens Parade, Clifton Hill VIC 3068', 'lat'=>'-37.789782', 'long'=>'144.989116',
                'cost_per_hour'=>'9', 'cost_per_day'=>'75', 'avaliable'=>'1'),
                                             
            array('make'=>'Subaru', 'model'=>'Forester', 'rego_number'=>'UUU-000', 'car_location'=>'101 Collins Street, Melbourne VIC 3000', 'lat'=>'-37.814578', 'long'=>'144.970617',
                'cost_per_hour'=>'10', 'cost_per_day'=>'80', 'avaliable'=>'0'),
                                             
            array('make'=>'Ford', 'model'=>'Territory', 'rego_number'=>'VVV-000', 'car_location'=>'20 Rubicon Street, Reservoir VIC 3073', 'lat'=>'-37.724834', 'long'=>'145.019500',
                'cost_per_hour'=>'7', 'cost_per_day'=>'70', 'avaliable'=>'1'),
                                             
            array('make'=>'Kia', 'model'=>'Carnival', 'rego_number'=>'WWW-000', 'car_location'=>'1081 Belmore Road, Balwyn VIC 3103', 'lat'=>'-37.804314', 'long'=>'145.089387',
                'cost_per_hour'=>'7', 'cost_per_day'=>'75', 'avaliable'=>'0'),
                                             
            array('make'=>'Mazda', 'model'=>'Mazda3', 'rego_number'=>'XXX-000', 'car_location'=>'41 Burke Road, Malvern East VIC 3145', 'lat'=>'-37.873814', 'long'=>'145.048360',
                'cost_per_hour'=>'9', 'cost_per_day'=>'70', 'avaliable'=>'0'),
                                             
            array('make'=>'Honda', 'model'=>'Jazz', 'rego_number'=>'YYY-000', 'car_location'=>'300 Glenferrie Road, Armadale VIC 3143', 'lat'=>'-37.854544', 'long'=>'145.029604',
                'cost_per_hour'=>'8', 'cost_per_day'=>'70', 'avaliable'=>'0'),
                                            
            array('make'=>'Nissan', 'model'=>'Micra', 'rego_number'=>'ZZZ-000', 'car_location'=>'500 Punt Road, South Yarra VIC 3141', 'lat'=>'-37.833007', 'long'=>'144.987806',
                'cost_per_hour'=>'7', 'cost_per_day'=>'65', 'avaliable'=>'1'),
                                             
            array('make'=>'Kia', 'model'=>'Rio', 'rego_number'=>'AAA-111', 'car_location'=>'72 Separation Street, Northcote VIC 3070', 'lat'=>'-37.770342', 'long'=>'145.007430',
                'cost_per_hour'=>'8', 'cost_per_day'=>'60', 'avaliable'=>'1'),
                                             
            array('make'=>'Toyota', 'model'=>'Carolla', 'rego_number'=>'BBB-111', 'car_location'=>'234 St Georges Road, Northcote VIC 3070', 'lat'=>'-37.764238', 'long'=>'144.992632',
                'cost_per_hour'=>'8', 'cost_per_day'=>'70', 'avaliable'=>'1'),
                                            
            array('make'=>'Suzuki', 'model'=>'Swift', 'rego_number'=>'CCC-111', 'car_location'=>'89 High Street, Preston VIC 3072', 'lat'=>'-37.749800', 'long'=>'145.001801',
                'cost_per_hour'=>'7', 'cost_per_day'=>'65', 'avaliable'=>'0'),
                                             
            array('make'=>'Honda', 'model'=>'Civic', 'rego_number'=>'DDD-111', 'car_location'=>'71 Station Street, Fairfield VIC 3071', 'lat'=>'-37.779991', 'long'=>'145.018282',
                'cost_per_hour'=>'8', 'cost_per_day'=>'60', 'avaliable'=>'1'),
                                             
            array('make'=>'Holden', 'model'=>'Astra', 'rego_number'=>'EEE-111', 'car_location'=>'191 Victoria Street, Richmond VIC 3121', 'lat'=>'-37.809627', 'long'=>'144.991684',
                'cost_per_hour'=>'7', 'cost_per_day'=>'55', 'avaliable'=>'0'),
                                             
            array('make'=>'Mitsubishi', 'model'=>'Magna', 'rego_number'=>'FFF-111', 'car_location'=>'500 Elizabeth Street, Melbourne VIC 3000', 'lat'=>'-37.807234', 'long'=>'144.960246',
                'cost_per_hour'=>'8', 'cost_per_day'=>'70', 'avaliable'=>'0'),
                                             
            array('make'=>'Toyota', 'model'=>'Carolla', 'rego_number'=>'GGG-111', 'car_location'=>'53 Flinders Street, Melbourne VIC 3000', 'lat'=>'-37.815839', 'long'=>'144.972719',
                'cost_per_hour'=>'9', 'cost_per_day'=>'75', 'avaliable'=>'0'),
                                             
            array('make'=>'Ford', 'model'=>'Focus', 'rego_number'=>'HHH-111', 'car_location'=>'96 Russell Street, Melbourne VIC 3000', 'lat'=>'-37.814596', 'long'=>'144.968852',
                'cost_per_hour'=>'9', 'cost_per_day'=>'70', 'avaliable'=>'0'),
                                            
            array('make'=>'Jeep', 'model'=>'Cherokee', 'rego_number'=>'III-111', 'car_location'=>'20 King Street, Melbourne VIC 3000', 'lat'=>'-37.819808', 'long'=>'144.957583',
                'cost_per_hour'=>'10', 'cost_per_day'=>'80', 'avaliable'=>'1'),
                                             
            array('make'=>'Subaru', 'model'=>'Impreza', 'rego_number'=>'JJJ-111', 'car_location'=>'380 Lygon Street, Carlton VIC 3053', 'lat'=>'-37.798055', 'long'=>'144.968256',
                'cost_per_hour'=>'9', 'cost_per_day'=>'70', 'avaliable'=>'1'),
                                             
            array('make'=>'Nissan', 'model'=>'Xtrail', 'rego_number'=>'KKK-111', 'car_location'=>'163 Main Hurstbridge Road, Diamond Creek VIC 3089', 'lat'=>'-37.673683', 'long'=>'145.166543',
                'cost_per_hour'=>'8', 'cost_per_day'=>'65', 'avaliable'=>'1'),
                                             
            array('make'=>'Honda', 'model'=>'Civic', 'rego_number'=>'LLL-111', 'car_location'=>'229 Chapel Street Prahran VIC 3181', 'lat'=>'-37.850603', 'long'=>'144.993341',
                'cost_per_hour'=>'7', 'cost_per_day'=>'65', 'avaliable'=>'0'),
                                             
            array('make'=>'Holden', 'model'=>'Commodore', 'rego_number'=>'MMM-111', 'car_location'=>'791 Sydney Road, Brunswick VIC 3056', 'lat'=>'-37.758196', 'long'=>'144.963456',
                'cost_per_hour'=>'8', 'cost_per_day'=>'70', 'avaliable'=>'0'),
                                             
            array('make'=>'Kia', 'model'=>'Rio', 'rego_number'=>'NNN-111', 'car_location'=>'8 Whiteman Street, Southbank VIC 3006', 'lat'=>'-37.823943', 'long'=>'144.958699',
                'cost_per_hour'=>'7', 'cost_per_day'=>'65', 'avaliable'=>'1'),
                                             
            array('make'=>'Nissan', 'model'=>'Patrol', 'rego_number'=>'OOO-111', 'car_location'=>'8 Droop Street, Footscray VIC 3011', 'lat'=>'-37.798749', 'long'=>'144.899091',
                'cost_per_hour'=>'10', 'cost_per_day'=>'80', 'avaliable'=>'0'),
                                             
            array('make'=>'Holden', 'model'=>'Astra', 'rego_number'=>'PPP-111', 'car_location'=>'375 Albert Road, Melbourne VIC 3205', 'lat'=>'-37.841550', 'long'=>'144.960003',
                'cost_per_hour'=>'7', 'cost_per_day'=>'65', 'avaliable'=>'0'),
                                             
  

            
      ));
       
    }
}
