<?php

return [
    'title' => '活動紀錄',

    'date_format' => 'j F, Y', // 日期格式
    'time_format' => 'H:i l', // 時間格式

    'filters' => [
        'date' => '日期',
        'causer' => '編輯者',
        'subject_type' => '資源',
        'subject_id' => '資源 ID',
        'event' => '操作',
    ],
    'table' => [
        'field' => '欄位',
        'old' => '舊值',
        'new' => '新值',
        'value' => '值',
        'no_records_yet' => '目前尚無記錄',
    ],
    'events' => [
        'created' => [
            'title' => '已建立',
            'description' => '記錄已建立',
        ],
        'updated' => [
            'title' => '已更新',
            'description' => '記錄已更新',
        ],
        'deleted' => [
            'title' => '已刪除',
            'description' => '記錄已刪除',
        ],
        'restored' => [
            'title' => '已恢復',
            'description' => '記錄已恢復',
        ],
        'attached' => [
            'title' => '已附加',
            'description' => '記錄已附加',
        ],
        'detached' => [
            'title' => '已分離',
            'description' => '記錄已分離',
        ],
        // 自定義事件...
    ],
    'boolean' => [
        'true' => '是',
        'false' => '否',
    ],
];
