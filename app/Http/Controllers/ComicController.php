<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
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


        return view('comics/index', compact('comics', 'shop_links', 'links', 'footer_lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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

        return view('comics/create', compact('shop_links', 'links', 'footer_lists'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formData = $request->all();


        $newComic = new Comic();

        $newComic->fill($formData);

        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
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
        return view('comics/show', compact('comic',  'shop_links', 'links', 'footer_lists'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
