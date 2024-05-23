<?php
namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Array of image filenames.
     *
     * @var array
     */
    private $images = [
        '2-white.png', 'card2.png', 'choose6.png', 'grid-img2.png', 'login.png',
        '2.png', 'card3.png', 'choose7.png', 'grid-img3.png', 'marketplace-banner.png',
        'Black Gift BOX.png', 'card4.png', 'choose8.png', 'grid-img4.png', 'overlay-img.png',
        'Group 69.png', 'choose1.png', 'coorporate.png', 'grid-img5.png', 'shopnow.png',
        'Rectangle 166 (1).png', 'choose2.png', 'creative-head.png', 'grid-img6.png', 'single-card.png',
        'box1.png', 'choose3.png', 'default-profile.jpg', 'grid-img7.png',
        'box2.png', 'choose4.png', 'founder.png', 'grid-img8.png',
        'card1.png', 'choose5.png', 'grid-img1.png', 'holiday-banner.png'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 50; $i++) {
            $image = $this->images[array_rand($this->images)]; // Select a random image from the array

            Product::create([
                'productName' => 'Product ' . $i,
                'image' => asset('image/' . $image), // Path to the images directory
                'description' => "This is product $i",
                'categoryId' => rand(1, 10),
                'price' => rand(10, 1000),
                'vendorId' => rand(1, 5),
                'quantity' => rand(0, 100),
                'discountPrice' => rand(5, 500),
            ]);
        }
    }
}
