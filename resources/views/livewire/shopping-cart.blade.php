<?php

use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new
#[Layout('layouts.shopping')]
class extends Component {
    //
}; ?>

<div>

    <flux:button class="w-full h-[60px] text-[16px] !bg-purple-500 !text-white" icon-trailing="chevron-double-right" href="{{route('checkout')}}">合計: NT$ 3,250 去結帳</flux:button>

</div>
