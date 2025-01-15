<?php

use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new
#[Layout('layouts.shopping')]
class extends Component {
    //
}; ?>

<div>
    <div class="flex max-md:flex-col items-start">
        <div class="w-full md:w-1/2 pb-4 mr-6">
            <flux:card class="!bg-slate-50 border-1 mb-6">
                <x-checkout.buyer-form headerTitle="購買人資料" headerDesc="..."></x-checkout.buyer-form>
                <x-checkout.delivery-form headerTitle="收件人資料" headerDesc="..." deliveryType="home"></x-checkout.delivery-form>
                {{-- <x-checkout.delivery-form headerTitle="收件人資料" headerDesc="..." deliveryType="pickinstore"></x-checkout.delivery-form> --}}
                <x-checkout.payment-method headerTitle="付款方式" headerDesc="..."></x-checkout.payment-method>
                <x-checkout.invoice-method headerTitle="發票資訊" headerDesc="..."></x-checkout.invoice-method>

                <flux:textarea
                    label="訂單備注"
                    placeholder="有什麼需要特別告訴我們的嗎..."
                    rows="auto"
                    class="mb-14 sm:mb-0"
                />
            </flux:card>
        </div>

        <div class="flex-1 md:w-1/2 self-stretch order-first sm:order-2">
            <div class="mx-auto [:where(&)]:max-w-7xl max-w-xl lg:max-w-5xl">

                <flux:accordion transition class="!bg-slate-50 rounded-xl mb-6" style="border: 1px solid rgb(228 228 231 / var(--tw-border-opacity, 1));">
                    <flux:accordion.item>
                        <flux:accordion.heading>
                            <div class="flex justify-between items-center h-14 space-x-2 pl-6">
                                <flux:badge class="text-lg" icon="list-bullet" color="yellow" size="lg">購買明細：</flux:badge>
                                <flux:badge size="lg" color="yellow">3 件</flux:badge>
                            </div>
                        </flux:accordion.heading>
                        <flux:accordion.content>

                            <flux:card class="border-0">
                                <div class="space-y-4">
                                    <div class="flex">
                                        <div class="w-[80px] bg-[#ebe4cf]">
                                            <img src="https://d1vtsrva9vl79l.cloudfront.net/Products/ANIUS/1-b01-a2-0021-16786415672avTR.png" width="80" alt="">
                                        </div>
                                        <div class="pl-2 py-1 lg:pl-6 w-full">
                                            <div class="flex justify-between h-full">
                                                <div class="space-y-1 pr-2">
                                                    <flux:subheading class="text-xs">OSHADHI 單方精油</flux:subheading>
                                                    <flux:heading class="space-x-1"><span>芳香羅文莎葉</span><flux:badge size="sm" class="text-xs">5ml</flux:badge></flux:heading>
                                                    <flux:subheading class="text-xs">過好年全館9折</flux:subheading>
                                                    <flux:subheading class="text-xs">滿2件9折</flux:subheading>
                                                </div>
                                                <div class="flex flex-col justify-center items-end text-black space-y-2">
                                                    <flux:badge size="sm" color="sky" class="text-[11px]">數量 1</flux:badge>
                                                    <flux:badge size="sm" color="red">$3,250</flux:badge>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <flux:separator variant="subtle" />

                                    <div class="flex">
                                        <div class="w-[80px] bg-[#ebe4cf]">
                                            <img src="https://d1vtsrva9vl79l.cloudfront.net/Products/ANIUS/1-b01-a2-0021-16786415672avTR.png" width="80" alt="">
                                        </div>
                                        <div class="pl-2 py-1 lg:pl-6 w-full">
                                            <div class="flex justify-between h-full">
                                                <div class="space-y-1 pr-2">
                                                    <flux:subheading class="text-xs">OSHADHI 單方精油</flux:subheading>
                                                    <flux:heading class="space-x-1"><span>芳香羅文莎葉</span><flux:badge size="sm" class="text-xs">5ml</flux:badge></flux:heading>
                                                </div>
                                                <div class="flex flex-col justify-center items-end text-black space-y-2">
                                                    <flux:badge size="sm" color="sky" class="text-[11px]">數量 1</flux:badge>
                                                    <flux:badge size="sm" color="red">$3,250</flux:badge>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <flux:separator variant="subtle" />

                                    <div class="flex">
                                        <div class="w-[80px] bg-[#ebe4cf]">
                                            <img src="https://d1vtsrva9vl79l.cloudfront.net/Products/ANIUS/1-b01-a2-0021-16786415672avTR.png" width="80" alt="">
                                        </div>
                                        <div class="pl-2 py-1 lg:pl-6 w-full">
                                            <div class="flex justify-between h-full">
                                                <div class="space-y-1 pr-2">
                                                    <flux:subheading class="text-xs">OSHADHI 單方精油</flux:subheading>
                                                    <flux:heading class="space-x-1"><span>芳香羅文莎葉</span><flux:badge size="sm" class="text-xs">5ml</flux:badge></flux:heading>
                                                </div>
                                                <div class="flex flex-col justify-center items-end text-black space-y-2">
                                                    <flux:badge size="sm" color="sky" class="text-[11px]">數量 1</flux:badge>
                                                    <flux:badge size="sm" color="red">$3,250</flux:badge>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </flux:card>

                        </flux:accordion.content>
                    </flux:accordion.item>
                </flux:accordion>

                <flux:card class="!bg-slate-50 border-1 mb-6">
                    <div class="space-y-6">
                        <div class="space-y-2">
                            <flux:heading size="lg">折扣優惠</flux:heading>
                            <div>
                                <flux:modal.trigger name="choose-coupon">
                                    <flux:button class="w-full">選擇優惠券或輸入折扣碼</flux:button>
                                </flux:modal.trigger>
                                <flux:modal name="choose-coupon" class="w-full md:w-96 space-y-6" variant="flyout">
                                    <div>
                                        <flux:heading size="lg">選擇優惠券或輸入折扣碼</flux:heading>
                                    </div>
                                    <flux:input.group>
                                        <flux:input placeholder="輸入折扣碼" />
                                        <flux:button variant="primary" icon="folder-arrow-down">送出</flux:button>
                                    </flux:input.group>
                                    <flux:separator variant="subtle" />
                                    <flux:radio.group label="優惠券" variant="cards" class="flex-col">
                                        <flux:radio value="standard" label="折扣一" description="4-10 business days" />
                                        <flux:radio value="fast" label="折扣二" description="2-5 business days" />
                                        <flux:radio value="next-day" label="折扣三" description="1 business day" />
                                        <flux:radio value="standard" label="折扣四" description="4-10 business days" />
                                        <flux:radio value="fast" label="折扣五" description="2-5 business days" />
                                    </flux:radio.group>
                                    <flux:button type="submit" variant="primary" class="w-full">OK</flux:button>
                                </flux:modal>
                            </div>
                        </div>
                        <flux:separator variant="subtle" />
                        <div class="space-y-2">
                            <flux:heading size="lg">金額折抵</flux:heading>
                            <div>
                                <flux:modal.trigger name="reduce-shopping-amount">
                                    <flux:button class="w-full">金額折抵(購物金/紅利點數)</flux:button>
                                </flux:modal.trigger>
                                <flux:modal name="reduce-shopping-amount" class="w-full md:w-96 space-y-6" variant="flyout">
                                    <div>
                                        <flux:heading size="lg">金額折抵(購物金/紅利點數)</flux:heading>
                                    </div>
                                    <flux:input.group label="購物金">
                                        <flux:input.group.prefix>NT$</flux:input.group.prefix>
                                        <flux:input placeholder="輸入想折抵的金額" />
                                        <flux:input.group.suffix>購物金</flux:input.group.suffix>
                                    </flux:input.group>
                                    <flux:separator variant="subtle" />
                                    <flux:input.group label="紅利點數">
                                        <flux:input.group.prefix>P</flux:input.group.prefix>
                                        <flux:input placeholder="輸入想折抵的點數" />
                                        <flux:input.group.suffix>紅利點數</flux:input.group.suffix>
                                    </flux:input.group>
                                    <flux:button type="submit" variant="primary" class="w-full">OK</flux:button>
                                </flux:modal>
                            </div>
                        </div>
                    </div>

                </flux:card>

                <flux:card class="!bg-slate-50 border-1 hidden sm:block mb-6">
                    <x-checkout.purchase-detail></x-checkout.purchase-detail>
                </flux:card>

                <div class="hidden sm:block">
                    <x-checkout.purchase-button />
                </div>

            </div>
        </div>

    </div>

    <div class="fixed bottom-0 w-full block sm:hidden">
        <div class="flex justify-between">
            <flux:modal.trigger name="purchase-detail">
                <flux:button class="w-full h-[60px] text-[16px] !bg-purple-500 !text-white" icon-trailing="chevron-up-down">合計: NT$ 3,250</flux:button>
            </flux:modal.trigger>
            <x-checkout.purchase-button></x-checkout.purchase-button>
        </div>
    </div>

    <flux:modal name="purchase-detail" variant="flyout" position="bottom">
        <x-checkout.purchase-detail></x-checkout.purchase-detail>
    </flux:modal>
</div>
