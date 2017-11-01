<?php

use Illuminate\Database\Seeder;

class Data_Supply_details extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supply_details')->insert([
            'sell_log_id'=>'8547569852',
            'book_id'=>'978-3-598-21500-1',
            'book_name'=>'BOOK1',
            'price'=>'253.00',
            'amout'=>'50',
            'total_line'=>'12650.00'
        ]);

        DB::table('supply_details')->insert([
            'sell_log_id'=>'1254632569',
            'book_id'=>'978-3-598-21501-8',
            'book_name'=>'BBOK2',
            'price'=>'576.00',
            'amout'=>'50',
            'total_line'=>'28800.00'
        ]);

        DB::table('supply_details')->insert([
            'sell_log_id'=>'9632541258',
            'book_id'=>'978-3-598-21502-5',
            'book_name'=>'BOOK3',
            'price'=>'199.00',
            'amout'=>'100',
            'total_line'=>'19900.00'
        ]);

        DB::table('supply_details')->insert([
            'sell_log_id'=>'9635145268',
            'book_id'=>'978-3-598-21503-2',
            'book_name'=>'BOOK4',
            'price'=>'148.00',
            'amout'=>'100',
            'total_line'=>'14800.00'
        ]);

        DB::table('supply_details')->insert([
            'sell_log_id'=>'9665412365',
            'book_id'=>'978-3-598-21504-9',
            'book_name'=>'BOOK5',
            'price'=>'433.00',
            'amout'=>'20',
            'total_line'=>'8660.00'
        ]);

        DB::table('supply_details')->insert([
            'sell_log_id'=>'8541256328',
            'book_id'=>'978-3-598-21505-6',
            'book_name'=>'BOOK6',
            'price'=>'847.00',
            'amout'=>'15',
            'total_line'=>'12705.00'
        ]);

        DB::table('supply_details')->insert([
            'sell_log_id'=>'9552365412',
            'book_id'=>'978-3-598-21506-3',
            'book_name'=>'BOOK7',
            'price'=>'284.00',
            'amout'=>'50',
            'total_line'=>'14200.00'
        ]);

        DB::table('supply_details')->insert([
            'sell_log_id'=>'9658445213',
            'book_id'=>'978-3-598-21507-0',
            'book_name'=>'BOOK8',
            'price'=>'714.00',
            'amout'=>'25',
            'total_line'=>'17850.00'
        ]);

        DB::table('supply_details')->insert([
            'sell_log_id'=>'8554123658',
            'book_id'=>'978-3-598-21508-7',
            'book_name'=>'BOOK9',
            'price'=>'510.00',
            'amout'=>'30',
            'total_line'=>'15300.00'
        ]);

        DB::table('supply_details')->insert([
            'sell_log_id'=>'8541236589',
            'book_id'=>'978-3-598-21509-4',
            'book_name'=>'BOOK10',
            'price'=>'739.00',
            'amout'=>'30',
            'total_line'=>'22170.00'
        ]);

        DB::table('supply_details')->insert([
            'sell_log_id'=>'9854125632',
            'book_id'=>'978-3-598-21510-9',
            'book_name'=>'BOOK11',
            'price'=>'692.00',
            'amout'=>'30',
            'total_line'=>'20760.00'
        ]);

        DB::table('supply_details')->insert([
            'sell_log_id'=>'9854756841',
            'book_id'=>'978-3-598-21511-1',
            'book_name'=>'BOOK12',
            'price'=>'231.00',
            'amout'=>'100',
            'total_line'=>'23100.00'
        ]);

        DB::table('supply_details')->insert([
            'sell_log_id'=>'9652365478',
            'book_id'=>'978-3-598-21512-8',
            'book_name'=>'BOOK13',
            'price'=>'608.00',
            'amout'=>'30',
            'total_line'=>'18240.00'
        ]);

        DB::table('supply_details')->insert([
            'sell_log_id'=>'9854125478',
            'book_id'=>'978-3-598-21513-5',
            'book_name'=>'BOOK14',
            'price'=>'693.00',
            'amout'=>'50',
            'total_line'=>'34650.00'
        ]);

        DB::table('supply_details')->insert([
            'sell_log_id'=>'9526647851',
            'book_id'=>'978-3-598-21514-2',
            'book_name'=>'BOOK15',
            'price'=>'430.00',
            'amout'=>'100',
            'total_line'=>'43000.00'
        ]);
    }
}
