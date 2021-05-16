<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    public $navLinks = [
        [
            'label' => 'Solutions',
            'subNav' => [
                [
                    'label' => 'Analytics',
                    'path' => '/analytics',
                    'icon' => 'chart'
                ]
            ]
        ],
    ];

    public function render()
    {
        return view('livewire.layouts.navbar');
    }
}
