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
                <flux:navlist.item badge="24" current>全部訂單</flux:navlist.item>
                <flux:navlist.item badge="1" badgeColor="orange">待付款</flux:navlist.item>
                <flux:navlist.item badge="2" badgeColor="purple">待出貨</flux:navlist.item>
                <flux:navlist.item badge="1" badgeColor="blue">待收貨</flux:navlist.item>
            </flux:navlist>
        </div>

        <flux:separator class="md:hidden border-0 [print-color-adjust:exact] bg-zinc-800/5 dark:bg-white/10 h-px w-full" />

        <div class="flex-1 max-md:pt-6 self-stretch">
            <div class="mx-auto [:where(&)]:max-w-7xl max-w-xl lg:max-w-3xl">
                <flux:heading size="xl" level="1">{{ __('Orders') }}</flux:heading>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mt-6">
                    <flux:card class="bg-zinc-50 border-0">
                        <flux:subheading>待付款</flux:subheading>
                        <flux:heading size="xl" class="mb-1">1</flux:heading>
                        <span class="text-sm text-red-600 dark:text-red-500">付款有效期限12個小時</span>
                    </flux:card>

                    <flux:card class="bg-zinc-50 border-0">
                        <flux:subheading>待出貨</flux:subheading>
                        <flux:heading size="xl" class="mb-1">2</flux:heading>
                        <span class="text-sm text-red-600 dark:text-red-500">訂單將於3個工作天內出貨</span>
                    </flux:card>

                    <flux:card class="bg-zinc-50 border-0">
                        <flux:subheading>待收貨</flux:subheading>
                        <flux:heading size="xl" class="mb-1">1</flux:heading>
                        <span class="text-sm text-red-600 dark:text-red-500">還未收到貨之已出貨訂單</span>
                    </flux:card>
                </div>

                <flux:separator class="border-0 [print-color-adjust:exact] bg-zinc-800/5 dark:bg-white/10 h-px w-full my-8" />

                <div class="m-auto  flex justify-center">
                    <div class="w-full overflow-x-auto">
                        <div>


    <div class="overflow-x-auto">
        <table class="[:where(&amp;)]:min-w-full table-fixed text-zinc-800 divide-y divide-zinc-800/10 dark:divide-white/20 text-zinc-800 whitespace-nowrap [&amp;_dialog]:whitespace-normal [&amp;_[popover]]:whitespace-normal" data-flux-table="">
            <thead data-flux-columns="">
    <tr>
        <th class="py-3 px-3 first:pl-0 last:pr-0 text-left text-sm font-medium text-zinc-800 dark:text-white  last:[&amp;_[data-flux-table-sortable]]:mr-0" data-flux-column="">
            <div class="flex group-[]/right-align:justify-end">訂單編號</div>
    </th>
                    <th class="py-3 px-3 first:pl-0 last:pr-0 text-left text-sm font-medium text-zinc-800 dark:text-white  last:[&amp;_[data-flux-table-sortable]]:mr-0" wire:click="sort('date')" data-flux-column="">
            <div class="flex group-[]/right-align:justify-end">
            <button type="button" class="group/sortable flex items-center gap-1 -my-1 -ml-2 -mr-2 px-2 py-1  group-[]/right-align:flex-row-reverse group-[]/right-align:-mr-2 group-[]/right-align:-ml-8" data-flux-table-sortable="">
    <div>建立日期</div>

    <div class="rounded text-zinc-400 group-hover/sortable:text-zinc-800 dark:group-hover/sortable:text-white">
        <!--[if BLOCK]><![endif]-->            <div class="opacity-0 group-hover/sortable:opacity-100">
                <svg class="shrink-0 [:where(&amp;)]:size-4" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
</svg>

                    </div>
        <!--[if ENDBLOCK]><![endif]-->
    </div>
</button>
        </div>
    </th>
                    <th class="py-3 px-3 first:pl-0 last:pr-0 text-left text-sm font-medium text-zinc-800 dark:text-white  last:[&amp;_[data-flux-table-sortable]]:mr-0" wire:click="sort('status')" data-flux-column="">
            <div class="flex group-[]/right-align:justify-end">
            <button type="button" class="group/sortable flex items-center gap-1 -my-1 -ml-2 -mr-2 px-2 py-1  group-[]/right-align:flex-row-reverse group-[]/right-align:-mr-2 group-[]/right-align:-ml-8" data-flux-table-sortable="">
    <div>狀態</div>

    <div class="rounded text-zinc-400 group-hover/sortable:text-zinc-800 dark:group-hover/sortable:text-white">
        <!--[if BLOCK]><![endif]-->            <div class="opacity-0 group-hover/sortable:opacity-100">
                <svg class="shrink-0 [:where(&amp;)]:size-4" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
</svg>

                    </div>
        <!--[if ENDBLOCK]><![endif]-->
    </div>
</button>
        </div>
    </th>
                    <th class="py-3 px-3 first:pl-0 last:pr-0 text-left text-sm font-medium text-zinc-800 dark:text-white  last:[&amp;_[data-flux-table-sortable]]:mr-0" wire:click="sort('amount_float')" data-flux-column="">
            <div class="flex group-[]/right-align:justify-end">
            <button type="button" class="group/sortable flex items-center gap-1 -my-1 -ml-2 -mr-2 px-2 py-1  group-[]/right-align:flex-row-reverse group-[]/right-align:-mr-2 group-[]/right-align:-ml-8" data-flux-table-sortable="">
    <div>金額</div>

    <div class="rounded text-zinc-400 group-hover/sortable:text-zinc-800 dark:group-hover/sortable:text-white">
        <!--[if BLOCK]><![endif]-->            <!--[if BLOCK]><![endif]-->                <svg class="shrink-0 [:where(&amp;)]:size-4" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
</svg>

                    <!--[if ENDBLOCK]><![endif]-->
        <!--[if ENDBLOCK]><![endif]-->
    </div>
</button>
        </div>
    </th>
                    <th class="py-3 px-3 first:pl-0 last:pr-0 text-left text-sm font-medium text-zinc-800 dark:text-white  last:[&amp;_[data-flux-table-sortable]]:mr-0" data-flux-column="">
            <div class="flex group-[]/right-align:justify-end"></div>
    </th>
    </tr>
</thead>

                <tbody class="divide-y divide-zinc-800/10 dark:divide-white/20 [&amp;:not(:has(*))]:!border-t-0" data-flux-rows="">
    <!--[if BLOCK]><![endif]-->                        <tr wire:key="table-423" data-flux-row="">
    <td class="py-3 px-3 first:pl-0 last:pr-0 text-sm  text-zinc-500 dark:text-zinc-300 flex items-center gap-3" data-flux-cell="">
</div>

<flux:button variant="subtle" size="sm" class="text-blue-400 hover:text-blue-700" wire:navigate href="{{route('member.order-detail', ['id' => '1130111ILUL'])}}">1130111ILUL</flux:button>
</td>
                            <td class="py-3 px-3 first:pl-0 last:pr-0 text-sm  text-zinc-500 dark:text-zinc-300 whitespace-nowrap" data-flux-cell="">
                                2024/01/11
</td>
                            <td class="py-3 px-3 first:pl-0 last:pr-0 text-sm  text-zinc-500 dark:text-zinc-300" data-flux-cell="">
    <div data-flux-badge="data-flux-badge" class="inline-flex items-center font-medium whitespace-nowrap -mt-1 -mb-1 [print-color-adjust:exact] text-xs py-1 [&amp;_[data-flux-badge-icon]]:size-3 [&amp;_[data-flux-badge-icon]]:mr-1 rounded-md px-2 text-orange-800 [&amp;_button]:!text-orange-800 dark:text-orange-200 [&amp;_button]:dark:!text-orange-200 bg-orange-400/20 dark:bg-orange-400/40 [&amp;:is(button)]:hover:bg-orange-400/30 [&amp;:is(button)]:hover:dark:bg-orange-400/50">
        待付款
    </div>
</td>
                            <td class="py-3 px-3 first:pl-0 last:pr-0 text-sm  font-medium text-zinc-800 dark:text-white" data-flux-cell="">
    NT$ 3,130
</td>
                            <td class="py-3 px-3 first:pl-0 last:pr-0 text-sm  text-zinc-500 dark:text-zinc-300" data-flux-cell="">
    <ui-dropdown position="bottom end" offset="-25" data-flux-dropdown="">
    <button type="button" class="relative items-center font-medium justify-center gap-2 whitespace-nowrap disabled:opacity-75 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none h-8 text-sm rounded-md w-8 inline-flex -mt-1.5 -mb-1.5 bg-transparent hover:bg-zinc-800/5 dark:hover:bg-white/15 text-zinc-800 dark:text-white" data-flux-button="data-flux-button" aria-haspopup="true" aria-controls="lofi-dropdown-9b708ceee8f2d" aria-expanded="false">
        <svg class="shrink-0 [:where(&amp;)]:size-5" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path d="M3 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM8.5 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM15.5 8.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3Z"></path>
</svg>
    </button>

                                    <ui-menu class="[:where(&amp;)]:min-w-48 p-[.3125rem] rounded-lg shadow-sm border border-zinc-200 dark:border-zinc-600 bg-white dark:bg-zinc-700 focus:outline-none" popover="manual" data-flux-menu="" id="lofi-dropdown-9b708ceee8f2d" role="menu" tabindex="-1" style="position: absolute; inset: 412px auto auto 1366.22px;">
    <button type="button" class="flex items-center px-2 py-1.5 w-full focus:outline-none rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-[active]:bg-zinc-50 dark:text-white data-[active]:dark:bg-zinc-600 [&amp;_[data-flux-menu-item-icon]]:text-zinc-400 dark:[&amp;_[data-flux-menu-item-icon]]:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current" data-flux-menu-item="data-flux-menu-item" data-flux-menu-item-has-icon="data-flux-menu-item-has-icon" id="lofi-menu-item-e0251e9eddea2" role="menuitem" tabindex="-1">
        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2" data-flux-menu-item-icon="data-flux-menu-item-icon" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M4.5 2A1.5 1.5 0 0 0 3 3.5v13A1.5 1.5 0 0 0 4.5 18h11a1.5 1.5 0 0 0 1.5-1.5V7.621a1.5 1.5 0 0 0-.44-1.06l-4.12-4.122A1.5 1.5 0 0 0 11.378 2H4.5Zm2.25 8.5a.75.75 0 0 0 0 1.5h6.5a.75.75 0 0 0 0-1.5h-6.5Zm0 3a.75.75 0 0 0 0 1.5h6.5a.75.75 0 0 0 0-1.5h-6.5Z" clip-rule="evenodd"></path>
</svg>


    View invoice
    </button>
                                        <button type="button" class="flex items-center px-2 py-1.5 w-full focus:outline-none rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-[active]:bg-zinc-50 dark:text-white data-[active]:dark:bg-zinc-600 [&amp;_[data-flux-menu-item-icon]]:text-zinc-400 dark:[&amp;_[data-flux-menu-item-icon]]:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current" data-flux-menu-item="data-flux-menu-item" data-flux-menu-item-has-icon="data-flux-menu-item-has-icon" id="lofi-menu-item-288ec289c2a0c" role="menuitem" tabindex="-1">
        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2" data-flux-menu-item-icon="data-flux-menu-item-icon" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M4.93 2.31a41.401 41.401 0 0 1 10.14 0C16.194 2.45 17 3.414 17 4.517V17.25a.75.75 0 0 1-1.075.676l-2.8-1.344-2.8 1.344a.75.75 0 0 1-.65 0l-2.8-1.344-2.8 1.344A.75.75 0 0 1 3 17.25V4.517c0-1.103.806-2.068 1.93-2.207Zm4.822 3.997a.75.75 0 1 0-1.004-1.114l-2.5 2.25a.75.75 0 0 0 0 1.114l2.5 2.25a.75.75 0 0 0 1.004-1.114L8.704 8.75h1.921a1.875 1.875 0 0 1 0 3.75.75.75 0 0 0 0 1.5 3.375 3.375 0 1 0 0-6.75h-1.92l1.047-.943Z" clip-rule="evenodd"></path>
</svg>


    Refund
    </button>
                                        <button type="button" class="flex items-center px-2 py-1.5 w-full focus:outline-none rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-[active]:text-red-600 data-[active]:bg-red-50 dark:text-white dark:data-[active]:bg-red-400/20 dark:data-[active]:text-red-400 [&amp;_[data-flux-menu-item-icon]]:text-zinc-400 dark:[&amp;_[data-flux-menu-item-icon]]:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current" data-flux-menu-item="data-flux-menu-item" data-flux-menu-item-has-icon="data-flux-menu-item-has-icon" id="lofi-menu-item-609a575063de3" role="menuitem" tabindex="-1">
        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2" data-flux-menu-item-icon="data-flux-menu-item-icon" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path d="M2 3a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H2Z"></path>
  <path fill-rule="evenodd" d="M2 7.5h16l-.811 7.71a2 2 0 0 1-1.99 1.79H4.802a2 2 0 0 1-1.99-1.79L2 7.5ZM7 11a1 1 0 0 1 1-1h4a1 1 0 1 1 0 2H8a1 1 0 0 1-1-1Z" clip-rule="evenodd"></path>
</svg>


    Archive
    </button>
</ui-menu>
</ui-dropdown>
</td>
</tr>
                                            <tr wire:key="table-427" data-flux-row="">
    <td class="py-3 px-3 first:pl-0 last:pr-0 text-sm  text-zinc-500 dark:text-zinc-300 flex items-center gap-3" data-flux-cell="">
</div>

<flux:button variant="subtle" size="sm" class="text-blue-400 hover:text-blue-700" wire:navigate href="{{route('member.order-detail', ['id' => '1121208HFY8'])}}">1121208HFY8</flux:button>

</td>
                            <td class="py-3 px-3 first:pl-0 last:pr-0 text-sm  text-zinc-500 dark:text-zinc-300 whitespace-nowrap" data-flux-cell="">
    2023/12/08
</td>
                            <td class="py-3 px-3 first:pl-0 last:pr-0 text-sm  text-zinc-500 dark:text-zinc-300" data-flux-cell="">
    <div data-flux-badge="data-flux-badge" class="inline-flex items-center font-medium whitespace-nowrap -mt-1 -mb-1 [print-color-adjust:exact] text-xs py-1 [&amp;_[data-flux-badge-icon]]:size-3 [&amp;_[data-flux-badge-icon]]:mr-1 rounded-md px-2 text-purple-800 [&amp;_button]:!text-purple-800 dark:text-purple-200 [&amp;_button]:dark:!text-purple-200 bg-purple-400/20 dark:bg-purple-400/40 [&amp;:is(button)]:hover:bg-purple-400/30 [&amp;:is(button)]:hover:dark:bg-purple-400/50">
        待出貨
    </div>
</td>
                            <td class="py-3 px-3 first:pl-0 last:pr-0 text-sm  font-medium text-zinc-800 dark:text-white" data-flux-cell="">
    NT$ 3,120
</td>
                            <td class="py-3 px-3 first:pl-0 last:pr-0 text-sm  text-zinc-500 dark:text-zinc-300" data-flux-cell="">
    <ui-dropdown position="bottom end" offset="-25" data-flux-dropdown="">
    <button type="button" class="relative items-center font-medium justify-center gap-2 whitespace-nowrap disabled:opacity-75 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none h-8 text-sm rounded-md w-8 inline-flex -mt-1.5 -mb-1.5 bg-transparent hover:bg-zinc-800/5 dark:hover:bg-white/15 text-zinc-800 dark:text-white" data-flux-button="data-flux-button" aria-haspopup="true" aria-controls="lofi-dropdown-178608827b44" aria-expanded="false">
        <svg class="shrink-0 [:where(&amp;)]:size-5" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path d="M3 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM8.5 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM15.5 8.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3Z"></path>
</svg>
    </button>

                                    <ui-menu class="[:where(&amp;)]:min-w-48 p-[.3125rem] rounded-lg shadow-sm border border-zinc-200 dark:border-zinc-600 bg-white dark:bg-zinc-700 focus:outline-none" popover="manual" data-flux-menu="" id="lofi-dropdown-178608827b44" role="menu" tabindex="-1">
    <button type="button" class="flex items-center px-2 py-1.5 w-full focus:outline-none rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-[active]:bg-zinc-50 dark:text-white data-[active]:dark:bg-zinc-600 [&amp;_[data-flux-menu-item-icon]]:text-zinc-400 dark:[&amp;_[data-flux-menu-item-icon]]:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current" data-flux-menu-item="data-flux-menu-item" data-flux-menu-item-has-icon="data-flux-menu-item-has-icon" id="lofi-menu-item-1ff376afcf8ec" role="menuitem" tabindex="-1">
        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2" data-flux-menu-item-icon="data-flux-menu-item-icon" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M4.5 2A1.5 1.5 0 0 0 3 3.5v13A1.5 1.5 0 0 0 4.5 18h11a1.5 1.5 0 0 0 1.5-1.5V7.621a1.5 1.5 0 0 0-.44-1.06l-4.12-4.122A1.5 1.5 0 0 0 11.378 2H4.5Zm2.25 8.5a.75.75 0 0 0 0 1.5h6.5a.75.75 0 0 0 0-1.5h-6.5Zm0 3a.75.75 0 0 0 0 1.5h6.5a.75.75 0 0 0 0-1.5h-6.5Z" clip-rule="evenodd"></path>
</svg>


    View invoice
    </button>
                                        <button type="button" class="flex items-center px-2 py-1.5 w-full focus:outline-none rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-[active]:bg-zinc-50 dark:text-white data-[active]:dark:bg-zinc-600 [&amp;_[data-flux-menu-item-icon]]:text-zinc-400 dark:[&amp;_[data-flux-menu-item-icon]]:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current" data-flux-menu-item="data-flux-menu-item" data-flux-menu-item-has-icon="data-flux-menu-item-has-icon" id="lofi-menu-item-96468bd25f2b3" role="menuitem" tabindex="-1">
        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2" data-flux-menu-item-icon="data-flux-menu-item-icon" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M4.93 2.31a41.401 41.401 0 0 1 10.14 0C16.194 2.45 17 3.414 17 4.517V17.25a.75.75 0 0 1-1.075.676l-2.8-1.344-2.8 1.344a.75.75 0 0 1-.65 0l-2.8-1.344-2.8 1.344A.75.75 0 0 1 3 17.25V4.517c0-1.103.806-2.068 1.93-2.207Zm4.822 3.997a.75.75 0 1 0-1.004-1.114l-2.5 2.25a.75.75 0 0 0 0 1.114l2.5 2.25a.75.75 0 0 0 1.004-1.114L8.704 8.75h1.921a1.875 1.875 0 0 1 0 3.75.75.75 0 0 0 0 1.5 3.375 3.375 0 1 0 0-6.75h-1.92l1.047-.943Z" clip-rule="evenodd"></path>
</svg>


    Refund
    </button>
                                        <button type="button" class="flex items-center px-2 py-1.5 w-full focus:outline-none rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-[active]:text-red-600 data-[active]:bg-red-50 dark:text-white dark:data-[active]:bg-red-400/20 dark:data-[active]:text-red-400 [&amp;_[data-flux-menu-item-icon]]:text-zinc-400 dark:[&amp;_[data-flux-menu-item-icon]]:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current" data-flux-menu-item="data-flux-menu-item" data-flux-menu-item-has-icon="data-flux-menu-item-has-icon" id="lofi-menu-item-d30e5ab577c66" role="menuitem" tabindex="-1">
        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2" data-flux-menu-item-icon="data-flux-menu-item-icon" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path d="M2 3a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H2Z"></path>
  <path fill-rule="evenodd" d="M2 7.5h16l-.811 7.71a2 2 0 0 1-1.99 1.79H4.802a2 2 0 0 1-1.99-1.79L2 7.5ZM7 11a1 1 0 0 1 1-1h4a1 1 0 1 1 0 2H8a1 1 0 0 1-1-1Z" clip-rule="evenodd"></path>
</svg>


    Archive
    </button>
</ui-menu>
</ui-dropdown>
</td>
</tr>
                                            <tr wire:key="table-416" data-flux-row="">
    <td class="py-3 px-3 first:pl-0 last:pr-0 text-sm  text-zinc-500 dark:text-zinc-300 flex items-center gap-3" data-flux-cell="">
</div>

<flux:button variant="subtle" size="sm" class="text-blue-400 hover:text-blue-700" wire:navigate href="{{route('member.order-detail', ['id' => '1121208BCHC'])}}">1121208BCHC</flux:button>

</td>
                            <td class="py-3 px-3 first:pl-0 last:pr-0 text-sm  text-zinc-500 dark:text-zinc-300 whitespace-nowrap" data-flux-cell="">
                                2023/12/08
</td>
                            <td class="py-3 px-3 first:pl-0 last:pr-0 text-sm  text-zinc-500 dark:text-zinc-300" data-flux-cell="">
    <div data-flux-badge="data-flux-badge" class="inline-flex items-center font-medium whitespace-nowrap -mt-1 -mb-1 [print-color-adjust:exact] text-xs py-1 [&amp;_[data-flux-badge-icon]]:size-3 [&amp;_[data-flux-badge-icon]]:mr-1 rounded-md px-2 text-green-800 [&amp;_button]:!text-green-800 dark:text-green-200 [&amp;_button]:dark:!text-green-200 bg-green-400/20 dark:bg-green-400/40 [&amp;:is(button)]:hover:bg-green-400/30 [&amp;:is(button)]:hover:dark:bg-green-400/50">
        已完成
    </div>
</td>
                            <td class="py-3 px-3 first:pl-0 last:pr-0 text-sm  font-medium text-zinc-800 dark:text-white" data-flux-cell="">
    NT$ 1,820
</td>
                            <td class="py-3 px-3 first:pl-0 last:pr-0 text-sm  text-zinc-500 dark:text-zinc-300" data-flux-cell="">
    <ui-dropdown position="bottom end" offset="-25" data-flux-dropdown="">
    <button type="button" class="relative items-center font-medium justify-center gap-2 whitespace-nowrap disabled:opacity-75 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none h-8 text-sm rounded-md w-8 inline-flex -mt-1.5 -mb-1.5 bg-transparent hover:bg-zinc-800/5 dark:hover:bg-white/15 text-zinc-800 dark:text-white" data-flux-button="data-flux-button" aria-haspopup="true" aria-controls="lofi-dropdown-f883dce8ea3df" aria-expanded="false">
        <svg class="shrink-0 [:where(&amp;)]:size-5" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path d="M3 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM8.5 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM15.5 8.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3Z"></path>
</svg>
    </button>

                                    <ui-menu class="[:where(&amp;)]:min-w-48 p-[.3125rem] rounded-lg shadow-sm border border-zinc-200 dark:border-zinc-600 bg-white dark:bg-zinc-700 focus:outline-none" popover="manual" data-flux-menu="" id="lofi-dropdown-f883dce8ea3df" role="menu" tabindex="-1">
    <button type="button" class="flex items-center px-2 py-1.5 w-full focus:outline-none rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-[active]:bg-zinc-50 dark:text-white data-[active]:dark:bg-zinc-600 [&amp;_[data-flux-menu-item-icon]]:text-zinc-400 dark:[&amp;_[data-flux-menu-item-icon]]:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current" data-flux-menu-item="data-flux-menu-item" data-flux-menu-item-has-icon="data-flux-menu-item-has-icon" id="lofi-menu-item-b313b3ecb6803" role="menuitem" tabindex="-1">
        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2" data-flux-menu-item-icon="data-flux-menu-item-icon" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M4.5 2A1.5 1.5 0 0 0 3 3.5v13A1.5 1.5 0 0 0 4.5 18h11a1.5 1.5 0 0 0 1.5-1.5V7.621a1.5 1.5 0 0 0-.44-1.06l-4.12-4.122A1.5 1.5 0 0 0 11.378 2H4.5Zm2.25 8.5a.75.75 0 0 0 0 1.5h6.5a.75.75 0 0 0 0-1.5h-6.5Zm0 3a.75.75 0 0 0 0 1.5h6.5a.75.75 0 0 0 0-1.5h-6.5Z" clip-rule="evenodd"></path>
</svg>


    View invoice
    </button>
                                        <button type="button" class="flex items-center px-2 py-1.5 w-full focus:outline-none rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-[active]:bg-zinc-50 dark:text-white data-[active]:dark:bg-zinc-600 [&amp;_[data-flux-menu-item-icon]]:text-zinc-400 dark:[&amp;_[data-flux-menu-item-icon]]:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current" data-flux-menu-item="data-flux-menu-item" data-flux-menu-item-has-icon="data-flux-menu-item-has-icon" id="lofi-menu-item-0fc8fbb0293ba" role="menuitem" tabindex="-1">
        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2" data-flux-menu-item-icon="data-flux-menu-item-icon" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M4.93 2.31a41.401 41.401 0 0 1 10.14 0C16.194 2.45 17 3.414 17 4.517V17.25a.75.75 0 0 1-1.075.676l-2.8-1.344-2.8 1.344a.75.75 0 0 1-.65 0l-2.8-1.344-2.8 1.344A.75.75 0 0 1 3 17.25V4.517c0-1.103.806-2.068 1.93-2.207Zm4.822 3.997a.75.75 0 1 0-1.004-1.114l-2.5 2.25a.75.75 0 0 0 0 1.114l2.5 2.25a.75.75 0 0 0 1.004-1.114L8.704 8.75h1.921a1.875 1.875 0 0 1 0 3.75.75.75 0 0 0 0 1.5 3.375 3.375 0 1 0 0-6.75h-1.92l1.047-.943Z" clip-rule="evenodd"></path>
</svg>


    Refund
    </button>
                                        <button type="button" class="flex items-center px-2 py-1.5 w-full focus:outline-none rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-[active]:text-red-600 data-[active]:bg-red-50 dark:text-white dark:data-[active]:bg-red-400/20 dark:data-[active]:text-red-400 [&amp;_[data-flux-menu-item-icon]]:text-zinc-400 dark:[&amp;_[data-flux-menu-item-icon]]:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current" data-flux-menu-item="data-flux-menu-item" data-flux-menu-item-has-icon="data-flux-menu-item-has-icon" id="lofi-menu-item-23fb5b26255d6" role="menuitem" tabindex="-1">
        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2" data-flux-menu-item-icon="data-flux-menu-item-icon" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path d="M2 3a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H2Z"></path>
  <path fill-rule="evenodd" d="M2 7.5h16l-.811 7.71a2 2 0 0 1-1.99 1.79H4.802a2 2 0 0 1-1.99-1.79L2 7.5ZM7 11a1 1 0 0 1 1-1h4a1 1 0 1 1 0 2H8a1 1 0 0 1-1-1Z" clip-rule="evenodd"></path>
</svg>


    Archive
    </button>
</ui-menu>
</ui-dropdown>
</td>
</tr>
                                            <tr wire:key="table-405" data-flux-row="">
    <td class="py-3 px-3 first:pl-0 last:pr-0 text-sm  text-zinc-500 dark:text-zinc-300 flex items-center gap-3" data-flux-cell="">
</div>

<flux:button variant="subtle" size="sm" class="text-blue-400 hover:text-blue-700" wire:navigate href="{{route('member.order-detail', ['id' => '1121206IIIY'])}}">1121206IIIY</flux:button>
</td>
                            <td class="py-3 px-3 first:pl-0 last:pr-0 text-sm  text-zinc-500 dark:text-zinc-300 whitespace-nowrap" data-flux-cell="">
                                2023/12/06
</td>
                            <td class="py-3 px-3 first:pl-0 last:pr-0 text-sm  text-zinc-500 dark:text-zinc-300" data-flux-cell="">
    <div data-flux-badge="data-flux-badge" class="inline-flex items-center font-medium whitespace-nowrap -mt-1 -mb-1 [print-color-adjust:exact] text-xs py-1 [&amp;_[data-flux-badge-icon]]:size-3 [&amp;_[data-flux-badge-icon]]:mr-1 rounded-md px-2 text-blue-800 [&amp;_button]:!text-blue-800 dark:text-blue-200 [&amp;_button]:dark:!text-blue-200 bg-blue-400/20 dark:bg-blue-400/40 [&amp;:is(button)]:hover:bg-blue-400/30 [&amp;:is(button)]:hover:dark:bg-blue-400/50">
        待收貨
    </div>
</td>
                            <td class="py-3 px-3 first:pl-0 last:pr-0 text-sm  font-medium text-zinc-800 dark:text-white" data-flux-cell="">
    NT$ 1,630
</td>
                            <td class="py-3 px-3 first:pl-0 last:pr-0 text-sm  text-zinc-500 dark:text-zinc-300" data-flux-cell="">
    <ui-dropdown position="bottom end" offset="-25" data-flux-dropdown="">
    <button type="button" class="relative items-center font-medium justify-center gap-2 whitespace-nowrap disabled:opacity-75 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none h-8 text-sm rounded-md w-8 inline-flex -mt-1.5 -mb-1.5 bg-transparent hover:bg-zinc-800/5 dark:hover:bg-white/15 text-zinc-800 dark:text-white" data-flux-button="data-flux-button" aria-haspopup="true" aria-controls="lofi-dropdown-7b9ed12936e5f" aria-expanded="false">
        <svg class="shrink-0 [:where(&amp;)]:size-5" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path d="M3 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM8.5 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM15.5 8.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3Z"></path>
</svg>
    </button>

                                    <ui-menu class="[:where(&amp;)]:min-w-48 p-[.3125rem] rounded-lg shadow-sm border border-zinc-200 dark:border-zinc-600 bg-white dark:bg-zinc-700 focus:outline-none" popover="manual" data-flux-menu="" id="lofi-dropdown-7b9ed12936e5f" role="menu" tabindex="-1">
    <button type="button" class="flex items-center px-2 py-1.5 w-full focus:outline-none rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-[active]:bg-zinc-50 dark:text-white data-[active]:dark:bg-zinc-600 [&amp;_[data-flux-menu-item-icon]]:text-zinc-400 dark:[&amp;_[data-flux-menu-item-icon]]:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current" data-flux-menu-item="data-flux-menu-item" data-flux-menu-item-has-icon="data-flux-menu-item-has-icon" id="lofi-menu-item-89010f4a65739" role="menuitem" tabindex="-1">
        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2" data-flux-menu-item-icon="data-flux-menu-item-icon" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M4.5 2A1.5 1.5 0 0 0 3 3.5v13A1.5 1.5 0 0 0 4.5 18h11a1.5 1.5 0 0 0 1.5-1.5V7.621a1.5 1.5 0 0 0-.44-1.06l-4.12-4.122A1.5 1.5 0 0 0 11.378 2H4.5Zm2.25 8.5a.75.75 0 0 0 0 1.5h6.5a.75.75 0 0 0 0-1.5h-6.5Zm0 3a.75.75 0 0 0 0 1.5h6.5a.75.75 0 0 0 0-1.5h-6.5Z" clip-rule="evenodd"></path>
</svg>


    View invoice
    </button>
                                        <button type="button" class="flex items-center px-2 py-1.5 w-full focus:outline-none rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-[active]:bg-zinc-50 dark:text-white data-[active]:dark:bg-zinc-600 [&amp;_[data-flux-menu-item-icon]]:text-zinc-400 dark:[&amp;_[data-flux-menu-item-icon]]:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current" data-flux-menu-item="data-flux-menu-item" data-flux-menu-item-has-icon="data-flux-menu-item-has-icon" id="lofi-menu-item-19653b673e74a" role="menuitem" tabindex="-1">
        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2" data-flux-menu-item-icon="data-flux-menu-item-icon" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M4.93 2.31a41.401 41.401 0 0 1 10.14 0C16.194 2.45 17 3.414 17 4.517V17.25a.75.75 0 0 1-1.075.676l-2.8-1.344-2.8 1.344a.75.75 0 0 1-.65 0l-2.8-1.344-2.8 1.344A.75.75 0 0 1 3 17.25V4.517c0-1.103.806-2.068 1.93-2.207Zm4.822 3.997a.75.75 0 1 0-1.004-1.114l-2.5 2.25a.75.75 0 0 0 0 1.114l2.5 2.25a.75.75 0 0 0 1.004-1.114L8.704 8.75h1.921a1.875 1.875 0 0 1 0 3.75.75.75 0 0 0 0 1.5 3.375 3.375 0 1 0 0-6.75h-1.92l1.047-.943Z" clip-rule="evenodd"></path>
</svg>


    Refund
    </button>
                                        <button type="button" class="flex items-center px-2 py-1.5 w-full focus:outline-none rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-[active]:text-red-600 data-[active]:bg-red-50 dark:text-white dark:data-[active]:bg-red-400/20 dark:data-[active]:text-red-400 [&amp;_[data-flux-menu-item-icon]]:text-zinc-400 dark:[&amp;_[data-flux-menu-item-icon]]:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current" data-flux-menu-item="data-flux-menu-item" data-flux-menu-item-has-icon="data-flux-menu-item-has-icon" id="lofi-menu-item-c1b81ea3b8c57" role="menuitem" tabindex="-1">
        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2" data-flux-menu-item-icon="data-flux-menu-item-icon" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path d="M2 3a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H2Z"></path>
  <path fill-rule="evenodd" d="M2 7.5h16l-.811 7.71a2 2 0 0 1-1.99 1.79H4.802a2 2 0 0 1-1.99-1.79L2 7.5ZM7 11a1 1 0 0 1 1-1h4a1 1 0 1 1 0 2H8a1 1 0 0 1-1-1Z" clip-rule="evenodd"></path>
</svg>


    Archive
    </button>
</ui-menu>
</ui-dropdown>
</td>
</tr>
                                            <tr wire:key="table-415" data-flux-row="">
    <td class="py-3 px-3 first:pl-0 last:pr-0 text-sm  text-zinc-500 dark:text-zinc-300 flex items-center gap-3" data-flux-cell="">
</div>

<flux:button variant="subtle" size="sm" class="text-blue-400 hover:text-blue-700" wire:navigate href="{{route('member.order-detail', ['id' => '1121206MR42'])}}">1121206MR42</flux:button>
</td>
                            <td class="py-3 px-3 first:pl-0 last:pr-0 text-sm  text-zinc-500 dark:text-zinc-300 whitespace-nowrap" data-flux-cell="">
                                2023/12/06
</td>
                            <td class="py-3 px-3 first:pl-0 last:pr-0 text-sm  text-zinc-500 dark:text-zinc-300" data-flux-cell="">
    <div data-flux-badge="data-flux-badge" class="inline-flex items-center font-medium whitespace-nowrap -mt-1 -mb-1 [print-color-adjust:exact] text-xs py-1 [&amp;_[data-flux-badge-icon]]:size-3 [&amp;_[data-flux-badge-icon]]:mr-1 rounded-md px-2 text-green-800 [&amp;_button]:!text-green-800 dark:text-green-200 [&amp;_button]:dark:!text-green-200 bg-green-400/20 dark:bg-green-400/40 [&amp;:is(button)]:hover:bg-green-400/30 [&amp;:is(button)]:hover:dark:bg-green-400/50">
        已完成
    </div>
</td>
                            <td class="py-3 px-3 first:pl-0 last:pr-0 text-sm  font-medium text-zinc-800 dark:text-white" data-flux-cell="">
    NT$ 1,620
</td>
                            <td class="py-3 px-3 first:pl-0 last:pr-0 text-sm  text-zinc-500 dark:text-zinc-300" data-flux-cell="">
    <ui-dropdown position="bottom end" offset="-25" data-flux-dropdown="">
    <button type="button" class="relative items-center font-medium justify-center gap-2 whitespace-nowrap disabled:opacity-75 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none h-8 text-sm rounded-md w-8 inline-flex -mt-1.5 -mb-1.5 bg-transparent hover:bg-zinc-800/5 dark:hover:bg-white/15 text-zinc-800 dark:text-white" data-flux-button="data-flux-button" aria-haspopup="true" aria-controls="lofi-dropdown-883fee1645448" aria-expanded="false">
        <svg class="shrink-0 [:where(&amp;)]:size-5" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path d="M3 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM8.5 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM15.5 8.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3Z"></path>
</svg>
    </button>

                                    <ui-menu class="[:where(&amp;)]:min-w-48 p-[.3125rem] rounded-lg shadow-sm border border-zinc-200 dark:border-zinc-600 bg-white dark:bg-zinc-700 focus:outline-none" popover="manual" data-flux-menu="" id="lofi-dropdown-883fee1645448" role="menu" tabindex="-1">
    <button type="button" class="flex items-center px-2 py-1.5 w-full focus:outline-none rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-[active]:bg-zinc-50 dark:text-white data-[active]:dark:bg-zinc-600 [&amp;_[data-flux-menu-item-icon]]:text-zinc-400 dark:[&amp;_[data-flux-menu-item-icon]]:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current" data-flux-menu-item="data-flux-menu-item" data-flux-menu-item-has-icon="data-flux-menu-item-has-icon" id="lofi-menu-item-c112b4339ffb5" role="menuitem" tabindex="-1">
        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2" data-flux-menu-item-icon="data-flux-menu-item-icon" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M4.5 2A1.5 1.5 0 0 0 3 3.5v13A1.5 1.5 0 0 0 4.5 18h11a1.5 1.5 0 0 0 1.5-1.5V7.621a1.5 1.5 0 0 0-.44-1.06l-4.12-4.122A1.5 1.5 0 0 0 11.378 2H4.5Zm2.25 8.5a.75.75 0 0 0 0 1.5h6.5a.75.75 0 0 0 0-1.5h-6.5Zm0 3a.75.75 0 0 0 0 1.5h6.5a.75.75 0 0 0 0-1.5h-6.5Z" clip-rule="evenodd"></path>
</svg>


    View invoice
    </button>
                                        <button type="button" class="flex items-center px-2 py-1.5 w-full focus:outline-none rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-[active]:bg-zinc-50 dark:text-white data-[active]:dark:bg-zinc-600 [&amp;_[data-flux-menu-item-icon]]:text-zinc-400 dark:[&amp;_[data-flux-menu-item-icon]]:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current" data-flux-menu-item="data-flux-menu-item" data-flux-menu-item-has-icon="data-flux-menu-item-has-icon" id="lofi-menu-item-167e9e2da869b" role="menuitem" tabindex="-1">
        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2" data-flux-menu-item-icon="data-flux-menu-item-icon" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M4.93 2.31a41.401 41.401 0 0 1 10.14 0C16.194 2.45 17 3.414 17 4.517V17.25a.75.75 0 0 1-1.075.676l-2.8-1.344-2.8 1.344a.75.75 0 0 1-.65 0l-2.8-1.344-2.8 1.344A.75.75 0 0 1 3 17.25V4.517c0-1.103.806-2.068 1.93-2.207Zm4.822 3.997a.75.75 0 1 0-1.004-1.114l-2.5 2.25a.75.75 0 0 0 0 1.114l2.5 2.25a.75.75 0 0 0 1.004-1.114L8.704 8.75h1.921a1.875 1.875 0 0 1 0 3.75.75.75 0 0 0 0 1.5 3.375 3.375 0 1 0 0-6.75h-1.92l1.047-.943Z" clip-rule="evenodd"></path>
</svg>


    Refund
    </button>
                                        <button type="button" class="flex items-center px-2 py-1.5 w-full focus:outline-none rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-[active]:text-red-600 data-[active]:bg-red-50 dark:text-white dark:data-[active]:bg-red-400/20 dark:data-[active]:text-red-400 [&amp;_[data-flux-menu-item-icon]]:text-zinc-400 dark:[&amp;_[data-flux-menu-item-icon]]:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current" data-flux-menu-item="data-flux-menu-item" data-flux-menu-item-has-icon="data-flux-menu-item-has-icon" id="lofi-menu-item-eac8707b4863a" role="menuitem" tabindex="-1">
        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2" data-flux-menu-item-icon="data-flux-menu-item-icon" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path d="M2 3a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H2Z"></path>
  <path fill-rule="evenodd" d="M2 7.5h16l-.811 7.71a2 2 0 0 1-1.99 1.79H4.802a2 2 0 0 1-1.99-1.79L2 7.5ZM7 11a1 1 0 0 1 1-1h4a1 1 0 1 1 0 2H8a1 1 0 0 1-1-1Z" clip-rule="evenodd"></path>
</svg>


    Archive
    </button>
</ui-menu>
</ui-dropdown>
</td>
</tr>
                    <!--[if ENDBLOCK]><![endif]-->
</tbody>
        </table>
    </div>



            <!--[if BLOCK]><![endif]-->    <div class="pt-3 border-t border-zinc-100 dark:border-zinc-700 flex justify-between items-center max-sm:flex-col max-sm:gap-3 max-sm:items-end" data-flux-pagination="">
        <!--[if BLOCK]><![endif]-->            <div class="text-zinc-500 dark:text-zinc-400 text-xs font-medium whitespace-nowrap">
                Showing 1 to 5 of 24 results
            </div>
        <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->            <div class="flex items-center bg-white border border-zinc-200 rounded-[8px] p-[1px] dark:bg-white/10 dark:border-white/10">
                <!--[if BLOCK]><![endif]-->                    <div aria-disabled="true" aria-label="&amp;laquo; Previous" class="flex justify-center items-center size-6 rounded-[6px] text-zinc-300 dark:text-zinc-400">
                        <svg class="shrink-0 [:where(&amp;)]:size-4" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M9.78 4.22a.75.75 0 0 1 0 1.06L7.06 8l2.72 2.72a.75.75 0 1 1-1.06 1.06L5.47 8.53a.75.75 0 0 1 0-1.06l3.25-3.25a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd"></path>
</svg>

                            </div>
                <!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]-->
                    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->


                    <!--[if BLOCK]><![endif]-->                        <!--[if BLOCK]><![endif]-->                            <!--[if BLOCK]><![endif]-->                                <div wire:key="paginator-page-page1" aria-current="page" class="cursor-default flex justify-center items-center text-xs h-6 px-2 rounded-[6px] font-medium dark:text-white text-zinc-800">1</div>
                            <!--[if ENDBLOCK]><![endif]-->
                                                    <!--[if BLOCK]><![endif]-->                                <button wire:key="paginator-page-page2" wire:click="gotoPage(2, 'page')" type="button" class="text-xs h-6 px-2 rounded-[6px] text-zinc-400 font-medium dark:text-zinc-400 hover:bg-zinc-100 dark:hover:bg-white/20 hover:text-zinc-800 dark:hover:text-white">2</button>
                            <!--[if ENDBLOCK]><![endif]-->
                                                    <!--[if BLOCK]><![endif]-->                                <button wire:key="paginator-page-page3" wire:click="gotoPage(3, 'page')" type="button" class="text-xs h-6 px-2 rounded-[6px] text-zinc-400 font-medium dark:text-zinc-400 hover:bg-zinc-100 dark:hover:bg-white/20 hover:text-zinc-800 dark:hover:text-white">3</button>
                            <!--[if ENDBLOCK]><![endif]-->
                                                    <!--[if BLOCK]><![endif]-->                                <button wire:key="paginator-page-page4" wire:click="gotoPage(4, 'page')" type="button" class="text-xs h-6 px-2 rounded-[6px] text-zinc-400 font-medium dark:text-zinc-400 hover:bg-zinc-100 dark:hover:bg-white/20 hover:text-zinc-800 dark:hover:text-white">4</button>
                            <!--[if ENDBLOCK]><![endif]-->
                                                    <!--[if BLOCK]><![endif]-->                                <button wire:key="paginator-page-page5" wire:click="gotoPage(5, 'page')" type="button" class="text-xs h-6 px-2 rounded-[6px] text-zinc-400 font-medium dark:text-zinc-400 hover:bg-zinc-100 dark:hover:bg-white/20 hover:text-zinc-800 dark:hover:text-white">5</button>
                            <!--[if ENDBLOCK]><![endif]-->
                        <!--[if ENDBLOCK]><![endif]-->
                    <!--[if ENDBLOCK]><![endif]-->
                <!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]-->                    <button type="button" wire:click="nextPage('page')" aria-label="Next &amp;raquo;" class="flex justify-center items-center size-6 rounded-[6px] text-zinc-400 dark:text-zinc-400 hover:bg-zinc-100 dark:hover:bg-white/20 hover:text-zinc-800 dark:hover:text-white">
                        <svg class="shrink-0 [:where(&amp;)]:size-4" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M6.22 4.22a.75.75 0 0 1 1.06 0l3.25 3.25a.75.75 0 0 1 0 1.06l-3.25 3.25a.75.75 0 0 1-1.06-1.06L8.94 8 6.22 5.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
</svg>

                            </button>
                <!--[if ENDBLOCK]><![endif]-->
            </div>
        <!--[if ENDBLOCK]><![endif]-->
    </div>
<!--[if ENDBLOCK]><![endif]-->


    </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
