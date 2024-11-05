<?php

use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new
#[Layout('layouts.member')]
class extends Component {
    //
}; ?>

<div>
    <flux:heading size="xl" level="1">Good afternoon, Olivia</flux:heading>

    <flux:subheading size="lg" class="mb-6">這個是今天的好消息</flux:subheading>

    <flux:separator variant="subtle" />
</div>
