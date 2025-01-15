<div>
    <flux:heading size="lg">{{$headerTitle}}</flux:heading>
    <flux:subheading>{{$headerDesc}}</flux:subheading>
</div>

<x-checkout.separator></x-checkout.separator>

<div class="space-y-3 mb-[50px]">
    <flux:radio.group label="選擇付款方式" variant="cards" class="flex-col">
        <flux:radio value="creditcard" icon="credit-card" label="信用卡" description="" />
        <flux:radio value="atm" icon="calculator" label="ATM" description="" />
        <flux:radio value="cod" icon="home-modern" label="貨到付款" description="" />
    </flux:radio.group>
</div>
