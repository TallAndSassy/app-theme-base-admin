<?php

namespace TallAndSassy\AppThemeBaseAdmin\Http\Livewire\Cards;

class SimpleStat extends \Livewire\Component
{
    public string $title = 'Your Title Here';
    public ?string $qualifier = null;
    public $value = '88';
    public function render()
    {
        return view('tassy::admin.cards.simple-stat');
    }
}
