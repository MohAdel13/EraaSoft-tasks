<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $sliderItems = [
            ['name' => 'Lifestyle', 'title' => 'Tips for Taking a Long-term Trip', 'date' => 'January 2, 2019', 'image' => 'images/slider/slider1.jpg'],
            ['name' => 'Travel', 'title' => 'Trip to California', 'date' => 'September 15, 2019', 'image' => 'images/slider/slider2.jpg'],
            ['name' => 'weekends', 'title' => 'Our Favorite Weekend Getaways', 'date' => 'June 12, 2019', 'image' => 'images/slider/slider3.jpg'],
            ['name' => 'Lifestyle', 'title' => 'Tips for Taking a Long-term Trip', 'date' => 'January 2, 2019', 'image' => 'images/slider/slider1.jpg'],
            ['name' => 'Travel', 'title' => 'Trip to California', 'date' => 'September 15, 2019', 'image' => 'images/slider/slider2.jpg'],
            ['name' => 'weekends', 'title' => 'Our Favorite Weekend Getaways', 'date' => 'June 12, 2019', 'image' => 'images/slider/slider3.jpg'],
        ];

        $blogsItems = [
            [
                'name' => 'Explore',
                'title' => 'The best place to explore to enjoy',
                'date' => 'June 15, 2019',
                'image' => 'images/news/f1.jpg',
            ],
            [
                'name' => 'Lifestyle',
                'title' => 'How to Make list for travelling alone',
                'date' => 'September 15, 2019',
                'image' => 'images/news/f2.jpg',
            ],
            [
                'name' => 'Food',
                'title' => '5 ingredient cilantro vinaigrette',
                'date' => 'September 15, 2019',
                'image' => 'images/news/f3.jpg',
            ],
            [
                'name' => 'Explore',
                'title' => 'A Simple Way to Feel Like Home When You Travel',
                'date' => 'March 20, 2019',
                'image' => 'images/news/f4.jpg',
            ],
            [
                'name' => 'Travel',
                'title' => 'What Type of Traveller Are You?',
                'date' => 'September 15, 2019',
                'image' => 'images/news/f5.jpg',
            ],
            [
                'name' => 'Experience',
                'title' => 'A Road Trip Review of the 2018',
                'date' => 'July 10, 2019',
                'image' => 'images/news/f6.jpg',
            ],
            [
                'name' => 'Music',
                'title' => 'Portugal’s Sunset summer vission',
                'date' => 'September 15, 2019',
                'image' => 'images/news/f7.jpg',
            ],
            [
                'name' => 'Beauty',
                'title' => 'The best soft Tropical Getaway',
                'date' => 'March 12, 2019',
                'image' => 'images/news/f8.jpg',
            ],
            [
                'name' => 'Travel',
                'title' => 'Memoriable Paris Girls Trip',
                'date' => 'April 19, 2019',
                'image' => 'images/news/f9.jpg',
            ],
            [
                'name' => 'Experience',
                'title' => 'How to Plan your Trip the Right Way',
                'date' => 'February 15, 2019',
                'image' => 'images/news/f10.jpg',
            ],
            [
                'name' => 'Travel',
                'title' => '8 Powerful Ways to Add Vibrant Colour to Your Life',
                'date' => 'August 15, 2019',
                'image' => 'images/news/f11.jpg',
            ],
            [
                'name' => 'Lifestyle',
                'title' => 'The best to-do list to help boost your productivity',
                'date' => 'October 2, 2019',
                'image' => 'images/news/f12.jpg',
            ],
        ];
        return view('home', ['sliderItems' => $sliderItems, 'blogsItems'=>$blogsItems]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }
}
