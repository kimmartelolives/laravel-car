<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\FuelType;
use App\Models\Maker;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        //Retrieve all car records where the price is greater than $20,000
        $cars = Car::where('price', '>', 20000)->get();
        dump($cars);

        //Fetch the Maker details where the Maker name is Toyota
        $maker = Maker::where('name', 'Toyota')->first();
        dump($maker);

        //Insert a new FuelType with the name Electric
        FuelType::create(['name' => 'Electric']);

        //Update the price of the Car with id 1 to $15,000
        Car::where('id', 1)->update(['price' => 15000]);

        //Delete all Car records where the year is before 2020
        Car::where('year', '<', 2020)->delete();

        // //select all cars
        // $cars = Car::get();

        // // Select published Cars
        // $cars = Car::where('published_at', '!=', null)->get();

        // // Select the first car
        // $car = Car::where('published_at', '!=', null)->first();
        

        // $car = Car::find(2);

        // $car = Car::where('published_at', '!=', null)
        //     ->where('user_id', 1)
        //     ->orderBy('published_at', 'desc')
        //     ->limit(2)
        //     ->get();

        // dump($car);

        // $car = new Car();
        // $car->maker_id = 1;
        // $car->model_id = 1;
        // $car->year = 1900;
        // $car->price = 123;
        // $car->vin = 123;
        // $car->mileage = 123;
        // $car->car_type_id = 1;
        // $car->fuel_type_id = 1;
        // $car->user_id = 1;
        // $car->city_id = 1;
        // $car->address = "Lorem Ipsum";
        // $car->phone = "123";
        // $car->description = null;
        // $car->published_at = now();
        // $car->created_at = now();
        // $car->save();

        $carData = [
            'maker_id' => 1,
            'model_id' => 1,
            'year' => 2019,
            'price' => 1000,
            'vin' => '999',
            'mileage' => 5000,
            'car_type_id' => 1,
            'fuel_type_id' => 1,
            'user_id' => 1,
            'city_id' => 1,
            'address' => 'Something',
            'phone' => '999',
            'description' => null,
            'published_at' => now(),
        ];

        // Approach 1
        // $car = Car::create($carData);

        // // Approach 2
        // $car2 = new Car();
        // $car2->fill($carData);
        // $car2->save();

        // // Approach 3
        // $car3 = new Car($carData);
        // $car3->save();

        // $car = Car::find(1);
        // $car->price = 1000;
        // $car->save();

        // $car = Car::updateOrCreate(
        //     ['vin' => '9999', 'price' => 20000], 
        //     $carData
        // );

        // dump($car);

        // Car::where('published_at', null)
        //     ->where('user_id', 1)
        //     ->update(['published_at' => now()]);

        // $car = Car::find(1);
        // $car->delete();

        // Car::destroy([2, 3]);

        // Car::where('published_at', null)
        //     ->where('user_id', 1)
        //     ->delete();

        // Car::truncate();



        return view('home.index');
    }
}
