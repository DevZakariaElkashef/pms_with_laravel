<?php
 
namespace App\Http\View\Composers;

use App\Models\Product;
use App\Repositories\UserRepository;
use Illuminate\View\View;
 
class ProductsComposer
{
 
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $products = Product::all();

        $view->with([
            'products' => $products
        ]);
    }
}