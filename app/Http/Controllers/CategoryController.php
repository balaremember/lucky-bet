<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function showTree()
    {
        $entries = DB::select('SELECT category_name FROM categories');
        //dump($entries);
        $categoriesAsStrings = [];
        foreach ($entries as $entry)
        {
            foreach ($entry as $category)
            {
                $categoriesAsStrings[] = $category;
            }
        }
        unset($entries);
        $categoriesAsTree = [];
        for (reset($categoriesAsStrings); list(, $value) = each($categoriesAsStrings);)
        {
            $categories = explode('/', $value);
            $temp = [];
            for (reset($categories); list(, $value) = each($categories);)
            {
                $temp =  array_merge($temp, [$value => []]);
            }
            while (count($temp) > 1)
            {
                $lastTwoElements = array_splice($temp, -2, 2);
                $penultimateElement = array_splice($lastTwoElements, 0, 1);
                $lastElement = array_splice($lastTwoElements, 0, 1);
                //paste last array in penultimate array
                $penultimateElement[key($penultimateElement)] = $lastElement;
                //add result array in end
                $temp = array_merge($temp, $penultimateElement);
            }
            $categoriesAsTree = array_merge_recursive($categoriesAsTree, $temp);
        }
        dump($categoriesAsTree);
    }
}
