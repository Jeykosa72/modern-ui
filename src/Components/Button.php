<?php

namespace ModernUI\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public string $type;
    public string $size;
    public string $variant;

    public function __construct($type = 'button', $size = 'md', $variant = 'primary')
    {
        $this->type = $type;
        $this->size = $size;
        $this->variant = $variant;
    }

    public function render()
    {
        return view('modern-ui::components.button');
    }
}
