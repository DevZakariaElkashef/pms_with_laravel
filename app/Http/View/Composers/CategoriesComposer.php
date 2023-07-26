<?php
 
namespace App\Http\View\Composers;

use App\Models\Category;
use App\Repositories\UserRepository;
use Illuminate\View\View;
 
class CategoriesComposer
{
 
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $categories = Category::take(3)->get();
        

        $view->with([
            'categories' => $categories
        ]);
    }
}