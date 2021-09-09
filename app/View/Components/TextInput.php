<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TextInput extends Component
{
    public $slug;
    public $label;
    public $type;
    public $value;

    public function __construct($slug, $label, $type = "text", $value = null)
    {
        $this->slug = $slug;
        $this->label = $label;
        $this->type = $type;
        $this->value = $value;
    }

    
    public function render()
    {
        return view('components.text-input');
    }
}
