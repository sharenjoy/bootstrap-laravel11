<div>
    <flux:heading size="lg">{{$headerTitle}}</flux:heading>
    <flux:subheading>{{$headerDesc}}</flux:subheading>
</div>

<x-noah.checkout.separator></x-noah.checkout.separator>

<div class="space-y-3 mb-[50px]" x-data="{invoiceType: false, carrierType: false}">
    <flux:field class="max-w-md">
        <flux:label class="!mb-1">發票類型</flux:label>
        <flux:select variant="listbox" wire:model="invoice_type" placeholder="選擇發票類型" wire:model="invoice_type" x-model="invoiceType">
            <flux:option value="cloud">雲端發票</flux:option>
            <flux:option value="donate">捐贈發票</flux:option>
            <flux:option value="company">公司戶發票</flux:option>
        </flux:select>
        <flux:error name="invoice_type" />
    </flux:field>
    <div class="grid grid-cols-2 gap-4" x-show="invoiceType == 'company'">
        <flux:field>
            <flux:label class="!mb-1">發票抬頭</flux:label>
            <flux:input type="text" wire:model="name" placeholder="輸入發票抬頭" />
            <flux:error name="name" />
        </flux:field>
        <flux:field>
            <flux:label class="!mb-1">統一編號</flux:label>
            <flux:input type="text" wire:model="name" placeholder="輸入統一編號" />
            <flux:error name="name" />
        </flux:field>
    </div>
    <flux:field class="max-w-md" x-show="invoiceType == 'donate'">
        <flux:label class="!mb-1">捐贈單位</flux:label>
        <flux:select variant="listbox" searchable wire:model="invoice_type" placeholder="選擇捐贈單位">
            <flux:option value="000">社團法人世界和平會</flux:option>
            <flux:option value="0000">財團法人彰化縣私立博愛服務中心</flux:option>
            <flux:option value="00000">社團法人中華基督教忠山關懷協會</flux:option>
            <flux:option value="000000">國際創新發明聯盟總會</flux:option>
            <flux:option value="0000000">社團法人中華創新發明學會</flux:option>
            <flux:option value="0000001">高雄市國際瑜珈培訓協會</flux:option>
            <flux:option value="0000050">社團法人為你社區服務協會</flux:option>
        </flux:select>
        <flux:error name="invoice_type" />
    </flux:field>
    <div class="space-y-3" x-show="invoiceType == 'cloud'">
        <flux:field class="max-w-md">
            <flux:label class="!mb-1">載具類型</flux:label>
            <flux:select variant="listbox" wire:model="invoice_type" placeholder="選擇載具類型" x-model="carrierType">
                <flux:option value="member">會員載具(發票會寄至您的信箱)</flux:option>
                <flux:option value="mobile">手機條碼</flux:option>
                <flux:option value="certificate">自然人憑證條碼</flux:option>
            </flux:select>
            <flux:error name="invoice_type" />
        </flux:field>
        <flux:field class="max-w-md mt-3" x-show="carrierType == 'mobile'">
            <flux:label class="!mb-1">手機條碼</flux:label>
            <flux:input type="text" wire:model="name" placeholder="輸入手機條碼" />
            <flux:error name="name" />
        </flux:field>
        <flux:field class="max-w-md" x-show="carrierType == 'certificate'">
            <flux:label class="!mb-1">自然人憑證條碼</flux:label>
            <flux:input type="text" wire:model="name" placeholder="輸入自然人憑證條碼" />
            <flux:error name="name" />
        </flux:field>
    </div>
</div>
