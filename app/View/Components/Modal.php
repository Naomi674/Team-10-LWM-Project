<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public string $id;

    public string $title;

    public string $content;

    public string $button1;

    public string $button2;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title, string $content, string $id = 'modal', string $button1 = 'Save changes', string $button2 = 'Cancel')
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->button1 = $button1;
        $this->button2 = $button2;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal');
    }
}
