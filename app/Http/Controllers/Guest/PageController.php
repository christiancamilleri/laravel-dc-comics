<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    public function index()
    {
        $links = [
            "characters",
            "comics",
            "movies",
            "tv",
            "games",
            "collectibles",
            "videos",
            "fans",
            "news",
            "shop"
        ];

        $comics = config('comics');

        $shop_links = [
            [
                "text" => "digital comics",
                "img" => "resources/images/buy-comics-digital-comics.png"
            ],
            [
                "text" => "dc merchandise",
                "img" => "resources/images/buy-comics-merchandise.png"
            ],
            [
                "text" => "subscription",
                "img" => "resources/images/buy-comics-shop-locator.png"
            ],
            [
                "text" => "comic shop locator",
                "img" => "resources/images/buy-comics-subscriptions.png"
            ],
            [
                "text" => "dc power visa",
                "img" => "resources/images/buy-dc-power-visa.svg"
            ]
        ];

        $footer_lists = [
            [
                "titolo" => "dc comics",
                "links" => [
                    "Characters",
                    "Comics",
                    "Movies",
                    "TV",
                    "Games",
                    "Videos",
                    "News"
                ]
            ],
            [
                "titolo" => "shop",
                "links" => [
                    "Shop DC",
                    "Shop DC collectibles"
                ]
            ],
            [
                "titolo" => "dc",
                "links" => [
                    "Terms Of Use",
                    "Privacy Policy(New)",
                    "Ad Choices",
                    "Advertising",
                    "Jobs",
                    "Subscriptions",
                    "Talent Workshops",
                    "CPSC Certificates",
                    "Ratings",
                    "Shop Help",
                    "Contact Us"
                ]
            ],
            [
                "titolo" => "sites",
                "links" => [
                    "DC",
                    "MAD Magazine",
                    "DC Kids",
                    "DC Universe",
                    "DC Power Visa"
                ]
            ],
        ];


        return view('home', compact('links', 'comics', 'shop_links', 'footer_lists'));
    }
}
