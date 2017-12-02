<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        DB::table('categories')->insert([
            ['id' => 1, 'category_name' => '������/�������/�������/���� ��������� ����'],
            ['id' => 2, 'category_name' => '������/�������/�������/���� ������ ����'],
            ['id' => 3, 'category_name' => '������/�������/����� ����'],
            ['id' => 4, 'category_name' => '������/�������/����� ������� ������'],
            ['id' => 5, 'category_name' => '������/�������/������/�������-����'],
            ['id' => 6, 'category_name' => '������/�������/������/����� ������'],
            ['id' => 7, 'category_name' => '������/�������/������/�������-����'],
            ['id' => 8, 'category_name' => '������/�������/���'],
            ['id' => 9, 'category_name' => '������/�������/���'],
            ['id' => 10, 'category_name' => '������/�������/����� ������'],
            ['id' => 11, 'category_name' => '������/�������/����� ������'],
            ['id' => 12, 'category_name' => '���������/�������/NBA'],
            ['id' => 13, 'category_name' => '���������/�������/NBA'],
            ['id' => 14, 'category_name' => '���������/�������/������ ���� ���'],
            ['id' => 15, 'category_name' => '���������/�������/������ ���� ���'],
            ['id' => 16, 'category_name' => '������/�������/��'],
            ['id' => 17, 'category_name' => '����'],
            ['id' => 18, 'category_name' => '���������'],
            ['id' => 19, 'category_name' => '�������/��������� ����'],
            ['id' => 20, 'category_name' => '�������/��������� ������'],
            ['id' => 21, 'category_name' => '�������/�������'],
            ['id' => 22, 'category_name' => '�������/�������'],
            ['id' => 23, 'category_name' => '�������/�������/��������� ������'],
            ['id' => 24, 'category_name' => '�������/�������/��������� ������'],
            ['id' => 25, 'category_name' => '�������/�������/��������� ����'],
            ['id' => 26, 'category_name' => '�������/�������/��������� ����'],
            ['id' => 27, 'category_name' => '������ � �����/�������/��������� ����'],
            ['id' => 28, 'category_name' => '������ � �����/�������/��������� ����']
        ]);
    }
}
