<div>
    <flux:heading size="lg">{{$headerTitle}}</flux:heading>
    <flux:subheading>{{$headerDesc}}</flux:subheading>
</div>

<x-noah.checkout.separator></x-noah.checkout.separator>

<div class="space-y-3 mb-[50px]">
    <flux:field class="max-w-md">
        <flux:label class="!mb-1">收件人姓名</flux:label>
        {{-- <flux:description class="!mb-2">收件人姓名</flux:description> --}}
        <flux:input type="text" wire:model="delivery_name" placeholder="輸入收件人姓名" />
        <flux:error name="delivery_name" />
    </flux:field>
    <flux:field class="max-w-md">
        <flux:label class="!mb-1">收件人行動電話</flux:label>
        <flux:input.group>
            <flux:select variant="listbox" searchable class="w-[220px] sm:w-[250px]">
                <flux:option selected>+886(台灣)</flux:option>
                <flux:option>+852(香港)</flux:option>
                <flux:option>+853(澳門)</flux:option>
            </flux:select>
            <flux:input placeholder="輸入收件人行動電話" wire.model="delivery_mobile" />
        </flux:input.group>
        <flux:error name="delivery_mobile" />
    </flux:field>

    @if($deliveryType == 'home')
    <div class="grid grid-cols-2 gap-4">
        <flux:field>
            <flux:label class="!mb-1">收件人地址</flux:label>
            <flux:select variant="listbox" searchable placeholder="選擇縣市">
                <flux:option>Photography</flux:option>
                <flux:option>Design services</flux:option>
                <flux:option>Web development</flux:option>
                <flux:option>Accounting</flux:option>
                <flux:option>Legal services</flux:option>
                <flux:option>Consulting</flux:option>
                <flux:option>Other</flux:option>
            </flux:select>
            <flux:error name="name" />
        </flux:field>
        <flux:field>
            <flux:label class="!mb-1">&nbsp;</flux:label>
            <flux:select variant="listbox" searchable placeholder="選擇鄉鎮市區">
                <flux:option>Photography</flux:option>
                <flux:option>Design services</flux:option>
                <flux:option>Web development</flux:option>
                <flux:option>Accounting</flux:option>
                <flux:option>Legal services</flux:option>
                <flux:option>Consulting</flux:option>
                <flux:option>Other</flux:option>
            </flux:select>
            <flux:error name="name" />
        </flux:field>
    </div>
    <flux:field>
        <flux:input type="text" wire:model="address" placeholder="輸入地址" />
        <flux:error name="address" />
    </flux:field>
    @endif

    @if ($deliveryType == 'pickinstore')
    <flux:field>
        <flux:label class="!mb-1">全家便利商店</flux:label>
        <flux:button variant="primary" class="w-full">選擇取貨超商</flux:button>
    </flux:field>
    @endif

</div>
