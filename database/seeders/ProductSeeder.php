<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder {
    public function run(): void {
        $products = [
            // Footwear
            ['name'=>'Nike Air Max','description'=>'Premium air cushion running shoes','price'=>129.99,'stock'=>50,'category'=>'Footwear','image'=>'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400'],
            ['name'=>'Adidas Ultraboost','description'=>'High performance boost running shoes','price'=>159.99,'stock'=>40,'category'=>'Footwear','image'=>'https://images.unsplash.com/photo-1608231387042-66d1773070a5?w=400'],
            ['name'=>'Puma Sneakers','description'=>'Casual everyday sneakers','price'=>79.99,'stock'=>60,'category'=>'Footwear','image'=>'https://images.unsplash.com/photo-1587563871167-1ee9c731aefb?w=400'],
            ['name'=>'Converse All Star','description'=>'Classic canvas high top shoes','price'=>59.99,'stock'=>70,'category'=>'Footwear','image'=>'https://images.unsplash.com/photo-1549298916-b41d501d3772?w=400'],
            ['name'=>'Vans Old Skool','description'=>'Iconic skate shoes','price'=>69.99,'stock'=>55,'category'=>'Footwear','image'=>'https://images.unsplash.com/photo-1525966222134-fcfa99b8ae77?w=400'],
            ['name'=>'Reebok Classic','description'=>'Retro classic leather shoes','price'=>89.99,'stock'=>45,'category'=>'Footwear','image'=>'https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?w=400'],
            ['name'=>'New Balance 574','description'=>'Comfortable lifestyle sneakers','price'=>99.99,'stock'=>35,'category'=>'Footwear','image'=>'https://images.unsplash.com/photo-1539185441755-769473a23570?w=400'],
            ['name'=>'Jordan 1 Retro','description'=>'Iconic basketball shoes','price'=>189.99,'stock'=>25,'category'=>'Footwear','image'=>'https://images.unsplash.com/photo-1600269452121-4f2416e55c28?w=400'],
            ['name'=>'Timberland Boots','description'=>'Waterproof outdoor boots','price'=>149.99,'stock'=>30,'category'=>'Footwear','image'=>'https://images.unsplash.com/photo-1520639888713-7851133b1ed0?w=400'],
            ['name'=>'Slip On Loafers','description'=>'Comfortable casual loafers','price'=>49.99,'stock'=>80,'category'=>'Footwear','image'=>'https://images.unsplash.com/photo-1614252235316-8c857d38b5f4?w=400'],

            // Clothing
            ['name'=>'White T-Shirt','description'=>'Classic white cotton t-shirt','price'=>19.99,'stock'=>100,'category'=>'Clothing','image'=>'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=400'],
            ['name'=>'Black Hoodie','description'=>'Comfortable black pullover hoodie','price'=>49.99,'stock'=>80,'category'=>'Clothing','image'=>'https://images.unsplash.com/photo-1556821840-3a63f15732ce?w=400'],
            ['name'=>'Denim Jacket','description'=>'Classic blue denim jacket','price'=>79.99,'stock'=>45,'category'=>'Clothing','image'=>'https://images.unsplash.com/photo-1523205771623-e0faa4d2813d?w=400'],
            ['name'=>'Slim Fit Jeans','description'=>'Modern slim fit blue jeans','price'=>59.99,'stock'=>60,'category'=>'Clothing','image'=>'https://images.unsplash.com/photo-1542272604-787c3835535d?w=400'],
            ['name'=>'Polo Shirt','description'=>'Classic polo shirt for men','price'=>34.99,'stock'=>70,'category'=>'Clothing','image'=>'https://images.unsplash.com/photo-1586790170083-2f9ceadc732d?w=400'],
            ['name'=>'Leather Jacket','description'=>'Premium genuine leather jacket','price'=>199.99,'stock'=>20,'category'=>'Clothing','image'=>'https://images.unsplash.com/photo-1551028719-00167b16eac5?w=400'],
            ['name'=>'Cargo Pants','description'=>'Multi pocket cargo pants','price'=>54.99,'stock'=>55,'category'=>'Clothing','image'=>'https://images.unsplash.com/photo-1624378439575-d8705ad7ae80?w=400'],
            ['name'=>'Checkered Shirt','description'=>'Casual checkered flannel shirt','price'=>39.99,'stock'=>65,'category'=>'Clothing','image'=>'https://images.unsplash.com/photo-1596755389378-c31d21fd1273?w=400'],
            ['name'=>'Sweatpants','description'=>'Comfortable cotton sweatpants','price'=>44.99,'stock'=>75,'category'=>'Clothing','image'=>'https://images.unsplash.com/photo-1552902865-b72c031ac5ea?w=400'],
            ['name'=>'Summer Dress','description'=>'Floral summer dress for women','price'=>64.99,'stock'=>40,'category'=>'Clothing','image'=>'https://images.unsplash.com/photo-1572804013309-59a88b7e92f1?w=400'],
            ['name'=>'Blazer','description'=>'Formal slim fit blazer','price'=>119.99,'stock'=>30,'category'=>'Clothing','image'=>'https://images.unsplash.com/photo-1593030761757-71fae45fa0e7?w=400'],
            ['name'=>'Shorts','description'=>'Casual cotton shorts','price'=>24.99,'stock'=>90,'category'=>'Clothing','image'=>'https://images.unsplash.com/photo-1591195853828-11db59a44f43?w=400'],

            // Accessories
            ['name'=>'Analog Watch','description'=>'Elegant analog wrist watch','price'=>149.99,'stock'=>20,'category'=>'Accessories','image'=>'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=400'],
            ['name'=>'Aviator Sunglasses','description'=>'Classic aviator UV protection sunglasses','price'=>29.99,'stock'=>60,'category'=>'Accessories','image'=>'https://images.unsplash.com/photo-1572635196237-14b3f281503f?w=400'],
            ['name'=>'Leather Belt','description'=>'Genuine leather dress belt','price'=>34.99,'stock'=>50,'category'=>'Accessories','image'=>'https://images.unsplash.com/photo-1624222247344-550fb60583dc?w=400'],
            ['name'=>'Baseball Cap','description'=>'Adjustable cotton baseball cap','price'=>19.99,'stock'=>80,'category'=>'Accessories','image'=>'https://images.unsplash.com/photo-1588850561407-ed78c282e89b?w=400'],
            ['name'=>'Woolen Scarf','description'=>'Warm woolen winter scarf','price'=>24.99,'stock'=>45,'category'=>'Accessories','image'=>'https://images.unsplash.com/photo-1520903920243-00d872a2d1c9?w=400'],
            ['name'=>'Silver Necklace','description'=>'Sterling silver chain necklace','price'=>49.99,'stock'=>35,'category'=>'Accessories','image'=>'https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?w=400'],
            ['name'=>'Leather Gloves','description'=>'Warm genuine leather gloves','price'=>39.99,'stock'=>40,'category'=>'Accessories','image'=>'https://images.unsplash.com/photo-1545194445-dddb8f4487c6?w=400'],
            ['name'=>'Smart Watch','description'=>'Feature packed smart watch','price'=>249.99,'stock'=>15,'category'=>'Accessories','image'=>'https://images.unsplash.com/photo-1579586337278-3befd40fd17a?w=400'],
            ['name'=>'Sunglasses Round','description'=>'Trendy round frame sunglasses','price'=>34.99,'stock'=>55,'category'=>'Accessories','image'=>'https://images.unsplash.com/photo-1511499767150-a48a237f0083?w=400'],
            ['name'=>'Bracelet','description'=>'Stylish metal bracelet','price'=>19.99,'stock'=>70,'category'=>'Accessories','image'=>'https://images.unsplash.com/photo-1611591437281-460bfbe1220a?w=400'],

            // Bags
            ['name'=>'Laptop Bag','description'=>'Waterproof 15 inch laptop bag','price'=>49.99,'stock'=>30,'category'=>'Bags','image'=>'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=400'],
            ['name'=>'Leather Handbag','description'=>'Premium leather handbag for women','price'=>129.99,'stock'=>25,'category'=>'Bags','image'=>'https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=400'],
            ['name'=>'Backpack','description'=>'Spacious travel backpack','price'=>79.99,'stock'=>40,'category'=>'Bags','image'=>'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=400'],
            ['name'=>'Tote Bag','description'=>'Canvas tote bag for shopping','price'=>24.99,'stock'=>60,'category'=>'Bags','image'=>'https://images.unsplash.com/photo-1544816155-12df9643f363?w=400'],
            ['name'=>'Crossbody Bag','description'=>'Compact crossbody shoulder bag','price'=>59.99,'stock'=>35,'category'=>'Bags','image'=>'https://images.unsplash.com/photo-1591561954557-26941169b49e?w=400'],
            ['name'=>'Gym Bag','description'=>'Large capacity gym duffel bag','price'=>44.99,'stock'=>50,'category'=>'Bags','image'=>'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=400'],
            ['name'=>'Travel Suitcase','description'=>'Hard shell travel suitcase','price'=>159.99,'stock'=>20,'category'=>'Bags','image'=>'https://images.unsplash.com/photo-1565026057447-bc90a3dceb87?w=400'],
            ['name'=>'Mini Backpack','description'=>'Trendy small mini backpack','price'=>34.99,'stock'=>45,'category'=>'Bags','image'=>'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=400'],

            // Electronics
            ['name'=>'Wireless Earbuds','description'=>'Bluetooth 5.0 wireless earbuds','price'=>79.99,'stock'=>40,'category'=>'Electronics','image'=>'https://images.unsplash.com/photo-1572569511254-d8f925fe2cbb?w=400'],
            ['name'=>'Phone Case','description'=>'Protective silicone phone case','price'=>14.99,'stock'=>100,'category'=>'Electronics','image'=>'https://images.unsplash.com/photo-1601784551446-20c9e07cdbdb?w=400'],
            ['name'=>'Power Bank','description'=>'20000mAh portable power bank','price'=>49.99,'stock'=>35,'category'=>'Electronics','image'=>'https://images.unsplash.com/photo-1609091839311-d5365f9ff1c5?w=400'],
            ['name'=>'USB Cable','description'=>'Fast charging USB type C cable','price'=>9.99,'stock'=>150,'category'=>'Electronics','image'=>'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400'],
            ['name'=>'Bluetooth Speaker','description'=>'Portable waterproof bluetooth speaker','price'=>59.99,'stock'=>30,'category'=>'Electronics','image'=>'https://images.unsplash.com/photo-1608043152269-423dbba4e7e1?w=400'],
            ['name'=>'Laptop Stand','description'=>'Adjustable aluminum laptop stand','price'=>39.99,'stock'=>45,'category'=>'Electronics','image'=>'https://images.unsplash.com/photo-1593642632559-0c6d3fc62b89?w=400'],
            ['name'=>'Mouse Pad','description'=>'Large gaming mouse pad','price'=>19.99,'stock'=>80,'category'=>'Electronics','image'=>'https://images.unsplash.com/photo-1618384887929-16ec33fab9ef?w=400'],
            ['name'=>'Webcam','description'=>'1080p HD webcam for video calls','price'=>69.99,'stock'=>25,'category'=>'Electronics','image'=>'https://images.unsplash.com/photo-1587826080692-f439cd0b70da?w=400'],
            ['name'=>'Keyboard','description'=>'Mechanical wireless keyboard','price'=>89.99,'stock'=>30,'category'=>'Electronics','image'=>'https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=400'],
            ['name'=>'Monitor Light','description'=>'LED monitor screen light bar','price'=>34.99,'stock'=>40,'category'=>'Electronics','image'=>'https://images.unsplash.com/photo-1593642632559-0c6d3fc62b89?w=400'],
            ['name'=>'Wireless Mouse','description'=>'Ergonomic wireless optical mouse','price'=>29.99,'stock'=>55,'category'=>'Electronics','image'=>'https://images.unsplash.com/photo-1527864550417-7fd91fc51a46?w=400'],
            ['name'=>'Headphones','description'=>'Over ear noise cancelling headphones','price'=>149.99,'stock'=>20,'category'=>'Electronics','image'=>'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=400'],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}