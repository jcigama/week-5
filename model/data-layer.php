<?php

//328/week-5/model/data-layer.php

//Define functions to "get" data from somewhere

/* Returns an array of fruit
 * @return array
 *
 */
function getFruit()
{
    $fruits = array('apple', 'banana', 'orange', 'kiwi', 'rambutan');
    return $fruits;
}

/* Returns an associative array of names and salaries
 * @returns araay
 *
 */

function getSalary()
{
    $salaries = array('Jessica'=>200000, 'Heather'=>250000, 'Blezyl'=>300000);
    return $salaries;
}

function getDesserts()
{
    $desserts = array('chocolate'=>'Chocolate Mousse', 'vanilla'=>'Vanilla Custard', 'strawberry'=>'Strawberry Shortcake');
    return $desserts;
}