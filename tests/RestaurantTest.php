<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Restaurant.php";

    $server = 'mysql:host=localhost:8889;dbname=best_restaurants_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class ResaurantTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
         {
           Restaurant::deleteAll();
         }

        ///Test 0: test_getName
        //Desc: check class Restaurant is made and can call name by getName()
        //Input: "Sam's Pizza"
        //Output: "Sam's Pizza"
    //     function test_getName()
    //    {
    //        //Arrange
    //        $restaurant_name = "Sam's Pizza";
    //        $test_restaurant = new Restaurant($restaurant_name);
       //
    //        //Act
    //        $test_restaurant->getRestaurantName();
       //
    //        //Assert
    //        $result = $test_restaurant;
    //        $this->assertEquals($test_restaurant, $result);
    //    }

       ////Test 1: test_save
       //We need to create and test
       //save()
       //getAll()
       //Desc: add restaurant_name restaurant table and return
       //Input: "Sam's Pizza"
       //Output: "Sam's Pizza"
    //    function test_save()
    //     {
    //         //Arrange
    //         $restaurant_name = "Sams Pizza";
    //         $test_restaurant = new Restaurant($restaurant_name);
       //
    //         //Act
    //         $test_restaurant->save();
       //
    //         //Assert
    //         $result = Restaurant::getAll();
    //         $this->assertEquals($test_restaurant, $result[0]);
    //     }

       function test_getAll()
       {
           // Arrange
           $restaurant_name1 = "Sams Pizza";
           $restaurant_name2 = "Bobs Burgers";
           $test_restaurant1 = new Restaurant($restaurant_name1);
           $test_restaurant1->save();
           $test_restaurant2= new Restaurant($restaurant_name2);
           $test_restaurant2->save();

           //Act
           $result = Restaurant::getAll();

           //Assert
           $this->assertEquals($test_restaurant1, $result[0]);
       }


///Test 2: test_deleteAll()    *don't forget tearDown!!
        //We need
        //deleteAll()
        //Desc: delete all records from restaurant_name
        //Input: "Sam's Pizza", "Tom's Burgers"
        //Output: " "


    //    function test_deleteAll()
    //    {
    //        // Arrange
    //        $restaurant_name1 = "Sam's Pizza";
    //        $restaurant_name2 = "Bob's Burgers";
    //        $test_restaurant1 = new Restaurant($restaurant_name1);
    //        $test_restaurant1->save();
    //        $test_restaurant2= new Restaurant($restaurant_name2);
    //        $test_restaurant2->save();
       //
    //        //Act
    //        $result = Restaurant::getAll();
       //
    //        //Assert
    //        $this->assertEquals($restaurant_name1, $result[0]);
    //    }
///Test 3: test_getId()   *update save(), getAll() func
        //use getId()
        //desc: return hard-coded value
        //Input: restaurant_name = "Bob's Burgers", id = 1
        //Output: 1

///Test 4 test_find()
        //We need
        //find()
        //desc: find all matched indexes to restaurant_names
        //Input restaurant_name1 = "Sam's Pizza, 1", restaurant_name2 = "Tom's Burgers, 2"
        //output: "Sam's Pizza, Tom's Burgers"
}
