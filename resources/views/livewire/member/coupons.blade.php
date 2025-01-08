<?php

use App\Livewire\Member\MemberComponent;

new
class extends MemberComponent {
    //
}; ?>

<div>
    <div class="flex max-md:flex-col items-start">
        <div class="w-full md:w-[220px] pb-4 mr-10">
            <flux:navlist>
                <flux:navlist.item badge="3" current>可使用折價券</flux:navlist.item>
                <flux:navlist.item badge="1" badgeColor="purple">已使用</flux:navlist.item>
                <flux:navlist.item badge="2" badgeColor="orange">已過期</flux:navlist.item>
            </flux:navlist>
        </div>

        <flux:separator class="md:hidden border-0 [print-color-adjust:exact] bg-zinc-800/5 dark:bg-white/10 h-px w-full" />

        <div class="flex-1 max-md:pt-6 self-stretch">
            <div class="mx-auto [:where(&)]:max-w-7xl max-w-xl lg:max-w-3xl">
                <div class="flex justify-between">
                    <flux:heading size="xl" level="1">{{ __('Coupons') }}</flux:heading>
                    <flux:modal.trigger name="information-notice">
                        <flux:button icon="information-circle" size="sm">注意事項</flux:button>
                    </flux:modal.trigger>
                </div>
                <flux:modal name="information-notice" class="md:w-96 space-y-6">
                    <div>
                        <flux:heading size="lg">注意事項</flux:heading>
                        <flux:subheading>Make changes to your personal details. Make changes to your personal details. Make changes to your personal details. Make changes to your personal details. Make changes to your personal details.</flux:subheading>
                    </div>
                    <div>
                        <flux:heading size="lg">注意事項</flux:heading>
                        <flux:subheading>注意事項注意事項注意事項注意事項注意事項注意事項注意事項注意事項注意事項注意事項注意事項注意事項注意事項注意事項注意事項注意事項注意事項注意事項，注意事項注意事項注意事項注意事項注意事項注意事項注意事項注意事項注意事項注意事項注意事項注意事項注意事項注意事項注意事項。注意事項注意事項注意事項注意事項注意事項注意事項注意事項注意事項注意事項注意事項注意事項注意事項注意事項注意事項</flux:subheading>
                    </div>
                </flux:modal>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mt-6">
                    <flux:card class="bg-zinc-50 border-0">
                        <flux:subheading>可使用</flux:subheading>
                        <flux:heading size="xl" class="mb-1">3</flux:heading>
                        <div class="flex items-center gap-2">
                            <span class="text-sm text-green-600 dark:text-green-500">目前可使用折價券數量</span>
                        </div>
                    </flux:card>

                    <flux:card class="bg-zinc-50 border-0">
                        <flux:subheading>即將到期</flux:subheading>
                        <flux:heading size="xl" class="mb-1">1</flux:heading>
                        <div class="flex items-center gap-2">
                            <span class="text-sm text-red-600 dark:text-red-500">即將到期折價券數量</span>
                        </div>
                    </flux:card>
                </div>

                <flux:separator class="border-0 [print-color-adjust:exact] bg-zinc-800/5 dark:bg-white/10 h-px w-full my-8" />

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                    <flux:card class="relative">
                        <flux:subheading>聖誕節雙重購</flux:subheading>
                        <flux:heading size="xl" class="mb-1">15% OFF</flux:heading>
                        <div class="flex items-center gap-2">
                            <flux:icon.information-circle variant="micro" class="text-yellow-600 dark:text-yellow-500" />
                            <span class="text-sm text-yellow-600 dark:text-yellow-500">使用期限：2024/12/20 ~ 2024/12/31</span>
                        </div>
                        <div class="absolute top-0 right-0 pr-6 pt-6">
                            <flux:button variant="filled" size="xs">去使用</flux:button>
                            <flux:button variant="danger" size="xs">即將到期</flux:button>
                        </div>
                    </flux:card>

                    <flux:card class="relative">
                        <flux:subheading>跨年新年買新衣</flux:subheading>
                        <flux:heading size="xl" class="mb-1">300 元</flux:heading>
                        <div class="flex items-center gap-2">
                            <flux:icon.information-circle variant="micro" class="text-yellow-600 dark:text-yellow-500" />
                            <span class="text-sm text-yellow-600 dark:text-yellow-500">使用期限：2024/12/25 ~ 2025/01/31</span>
                        </div>
                        <div class="absolute top-0 right-0 pr-6 pt-6">
                            <flux:button variant="filled" size="xs">去使用</flux:button>
                        </div>
                    </flux:card>

                    <flux:card class="relative">
                        <flux:subheading>會員生日禮</flux:subheading>
                        <flux:heading size="xl" class="mb-1">20% OFF</flux:heading>
                        <div class="flex items-center gap-2">
                            <flux:icon.information-circle variant="micro" class="text-yellow-600 dark:text-yellow-500" />
                            <span class="text-sm text-yellow-600 dark:text-yellow-500">使用期限：2024/03/18 ~ 2025/03/31</span>
                        </div>
                        <div class="absolute top-0 right-0 pr-6 pt-6">
                            <flux:button variant="filled" size="xs">去使用</flux:button>
                        </div>
                    </flux:card>
                </div>
            </div>
        </div>
    </div>
</div>
