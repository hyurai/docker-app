<?php

namespace App\Http\Composers;

use Illuminate\View\View;

class MessageComposer
{
    public function compose(View $view)
    {
        $view->with('message', 'View Composer message!!');
    }
}