<?php

use App\Livewire\Member\MemberComponent;

new
class extends MemberComponent {
    //
    public $id;

    public function mount($id)
    {
        $this->id = $id;
    }
}; ?>

<div>
    <div class="flex max-md:flex-col items-start">
        <div class="w-full md:w-[220px] pb-4 mr-10">
            <flux:navlist>
                <flux:navlist.item badge="24" current>全部訂單</flux:navlist.item>
                <flux:navlist.item badge="3" badgeColor="orange">待付款</flux:navlist.item>
                <flux:navlist.item badge="2" badgeColor="purple">待出貨</flux:navlist.item>
                <flux:navlist.item badge="1" badgeColor="blue">待收貨</flux:navlist.item>
            </flux:navlist>
        </div>

        <flux:separator class="md:hidden border-0 [print-color-adjust:exact] bg-zinc-800/5 dark:bg-white/10 h-px w-full" />

        <div class="flex-1 max-md:pt-6 self-stretch">
            <div class="mx-auto [:where(&)]:max-w-7xl max-w-xl lg:max-w-5xl">
                <div class="lg:flex justify-between">
                    <flux:heading size="xl" level="1">{{ __('Orders') }}</flux:heading>
                    <div class="flex gap-2 mt-4 lg:mt-0">
                        <flux:button icon="arrow-down-tray">Export</flux:button>
                        <flux:dropdown position="bottom" align="end">
                            <flux:button icon="ellipsis-horizontal" />
                            <flux:navmenu>
                                <flux:navmenu.item href="#" icon="user">Account</flux:navmenu.item>
                                <flux:navmenu.item href="#" icon="building-storefront">Profile</flux:navmenu.item>
                                <flux:navmenu.item href="#" icon="credit-card">Billing</flux:navmenu.item>
                                <flux:navmenu.item href="#" icon="arrow-right-start-on-rectangle">Logout</flux:navmenu.item>
                                <flux:navmenu.item href="#" icon="trash" variant="danger">Delete</flux:navmenu.item>
                            </flux:navmenu>
                        </flux:dropdown>
                    </div>
                </div>

                <flux:separator class="border-0 [print-color-adjust:exact] bg-zinc-800/5 dark:bg-white/10 h-px w-full my-8" />

                <flux:card class="bg-slate-100 border-0 mb-6">
                    <flux:table>
                        <flux:columns>
                            <flux:column>訂單編號</flux:column>
                            <flux:column>日期</flux:column>
                            <flux:column>狀態</flux:column>
                            <flux:column>總金額</flux:column>
                        </flux:columns>
                        <flux:rows>
                            <flux:row>
                                <flux:cell variant="strong">{{$id}}</flux:cell>
                                <flux:cell variant="strong">2024/01/11 20:29:57</flux:cell>
                                <flux:cell>
                                    <div class="mb-2">
                                        <flux:badge size="sm" color="orange">待付款</flux:badge>
                                    </div>
                                    <div>
                                        <flux:button icon="arrow-uturn-right" size="xs">重新付款</flux:button>
                                    </div>
                                </flux:cell>
                                <flux:cell variant="strong">NT$ 3,250</flux:cell>
                            </flux:row>
                        </flux:rows>
                    </flux:table>
                </flux:card>

                <flux:card class="!p-4 border-0 mb-4 bg-zinc-50">
                    <flux:table>
                        <flux:columns>
                            <flux:column>商品名稱</flux:column>
                            <flux:column>商品型號</flux:column>
                            <flux:column>規格</flux:column>
                            <flux:column>金額</flux:column>
                            <flux:column>數量</flux:column>
                            <flux:column>小計</flux:column>
                        </flux:columns>

                        <flux:rows class="bg-white">
                            <flux:row>
                                <flux:cell><flux:button variant="subtle" size="sm" class="text-blue-400 hover:text-blue-700" wire:navigate href="{{route('member.order-detail', ['id' => '蘇摩夢油'])}}">蘇摩夢油</flux:button></flux:cell>
                                <flux:cell>2-B04-D1-0012</flux:cell>
                                <flux:cell>15 ml</flux:cell>
                                <flux:cell variant="strong">NT$ 1,650</flux:cell>
                                <flux:cell variant="strong">1</flux:cell>
                                <flux:cell variant="strong">NT$ 1,650</flux:cell>
                            </flux:row>
                            <flux:row>
                                <flux:cell><flux:button variant="subtle" size="sm" class="text-blue-400 hover:text-blue-700" wire:navigate href="{{route('member.order-detail', ['id' => '蘇摩夢油'])}}">蘇摩夢油</flux:button></flux:cell>
                                <flux:cell>2-B04-D1-0012</flux:cell>
                                <flux:cell>15 ml</flux:cell>
                                <flux:cell variant="strong">NT$ 1,650</flux:cell>
                                <flux:cell variant="strong">1</flux:cell>
                                <flux:cell variant="strong">NT$ 1,650</flux:cell>
                            </flux:row>
                            <flux:row>
                                <flux:cell><flux:button variant="subtle" size="sm" class="text-blue-400 hover:text-blue-700" wire:navigate href="{{route('member.order-detail', ['id' => '蘇摩夢油'])}}">蘇摩夢油</flux:button></flux:cell>
                                <flux:cell>2-B04-D1-0012</flux:cell>
                                <flux:cell>15 ml</flux:cell>
                                <flux:cell variant="strong">NT$ 1,650</flux:cell>
                                <flux:cell variant="strong">1</flux:cell>
                                <flux:cell variant="strong">NT$ 1,650</flux:cell>
                            </flux:row>
                            <flux:row>
                                <flux:cell><flux:button variant="subtle" size="sm" class="text-blue-400 hover:text-blue-700" wire:navigate href="{{route('member.order-detail', ['id' => '蘇摩夢油'])}}">蘇摩夢油</flux:button></flux:cell>
                                <flux:cell>2-B04-D1-0012</flux:cell>
                                <flux:cell>15 ml</flux:cell>
                                <flux:cell variant="strong">NT$ 1,650</flux:cell>
                                <flux:cell variant="strong">1</flux:cell>
                                <flux:cell variant="strong">NT$ 1,650</flux:cell>
                            </flux:row>
                        </flux:rows>
                    </flux:table>

                    <flux:separator class="border-1 [print-color-adjust:exact] bg-slate-300 dark:bg-white/10 h-px w-full my-8" />

                    <div class="grid grid-cols-1 lg:grid-cols-7 gap-0 mt-6">
                        <div class="lg:border-r pr-1 col-span-2 border-slate-300 mb-8">
                            <flux:heading>運送資訊</flux:heading>
                            <flux:subheading class="mb-1">超商取貨</flux:subheading>
                            <flux:subheading class="mb-1">簡志豪</flux:subheading>
                            <flux:subheading class="mb-1">0939025411</flux:subheading>
                            <flux:subheading class="mb-1">TFM10267 全家安賢店</flux:subheading>
                            <flux:subheading class="mb-1">台北市大安區四維路170巷4號</flux:subheading>
                        </div>
                        <div class="flex flex-col space-y-4 text-sm col-span-3 lg:border-r border-slate-300 lg:px-5 mb-8">
                            <div class="border-b pb-4 border-slate-300">
                                <div class="flex justify-between">
                                    <div>商品金額合計</div>
                                    <div>NT$ 3,250</div>
                                </div>
                            </div>
                            <div class="border-b pb-4 border-slate-300">
                                <div class="flex justify-between">
                                    <div>運費</div>
                                    <div>NT$ 0</div>
                                </div>
                            </div>
                            <div class="border-b pb-4 border-slate-300">
                                <div class="flex justify-between">
                                    <div>紅利折抵</div>
                                    <div>NT$ 0</div>
                                </div>
                            </div>
                            <div class="border-b pb-4 border-slate-300">
                                <div class="flex justify-between">
                                    <div>購物金折抵</div>
                                    <div>NT$ 0</div>
                                </div>
                            </div>
                            <div class="pb-4 text-red-500">
                                <div class="flex justify-between">
                                    <div>可獲得紅利點數</div>
                                    <div>3,250 點</div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col col-span-2 space-y-4 lg:pl-3 mb-8">
                            <div>
                                <flux:heading>付款方式</flux:heading>
                                <flux:subheading class="mb-1">信用卡</flux:subheading>
                                <flux:subheading class="mb-1">付款總金額NT$ 3,250</flux:subheading>
                                <flux:subheading class="mb-1">付款期限2024/01/12 12:33:29 到期</flux:subheading>
                                <flux:button icon="arrow-uturn-right" size="sm" class="bg-rose-300 hover:bg-rose-200">重新付款</flux:button>
                            </div>
                            <div>
                                <flux:heading>發票資訊</flux:heading>
                                <flux:subheading class="mb-1">個人電子發票載具</flux:subheading>
                                <flux:subheading class="mb-1">/R3-.2Q2</flux:subheading>
                            </div>
                        </div>
                    </div>
                </flux:card>

            </div>
        </div>
    </div>
</div>
