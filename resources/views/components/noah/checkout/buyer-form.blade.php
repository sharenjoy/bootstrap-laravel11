<div>
    <flux:heading size="lg">{{$headerTitle}}</flux:heading>
    <flux:subheading>{{$headerDesc}}</flux:subheading>
</div>

<x-noah.checkout.separator></x-noah.checkout.separator>

<div class="space-y-3 mb-[50px]">
    <flux:field class="max-w-md">
        <flux:label class="!mb-1">{{ __('Name').' ('.__('Username').')' }}</flux:label>
        <flux:input type="text" wire:model="name" placeholder="輸入{{ __('Name').' ('.__('Username').')' }}" />
        <flux:error name="name" />
    </flux:field>
    <flux:field class="max-w-md">
        <flux:label class="!mb-1">{{ __('Email') }}</flux:label>
        <flux:input type="email" wire:model="email" placeholder="輸入{{ __('Email') }}" />
        <flux:error name="email" />
    </flux:field>
</div>
