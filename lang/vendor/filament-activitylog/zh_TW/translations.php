<?php

return [
    'data' => [
        'timeline-configuration-data' => [
            'empty-state-heading' => '尚無活動',
            'empty-state-description' => '這個 :modelLabel 目前尚未記錄任何活動。',
        ],
    ],
    'components' => [
        'timeline' => [
            'search' => [
                'placeholder' => '輸入以搜尋',
            ],
        ],
    ],
    'actions' => [
        'timeline-action' => [
            'label' => '活動',
            'modal_cancel_action_label' => '關閉',
        ],
    ],
    'activity-timeline-item' => [
        'event-descriptions' => [
            'created' => [
                'causer' => '**:causerName** 建立了 :modelLabel。',
                'causer-relationship' => '**:causerName** 新增了一個相關的 :relationshipName。',
                'causer-relationship-related-record-title' => '**:causerName** 新增了相關的 :relationshipName **:relatedRecordTitle**。',
                'without-causer' => ':modelLabel 已建立。',
                'without-causer-relationship' => '相關的 :relationshipName 已建立。',
                'without-causer-relationship-related-record-title' => '相關的 :relationshipName **:relatedRecordTitle** 已建立。',
            ],
            'updated' => [
                'causer-changes-summary' => '**:causerName** 更新了 :changesSummary。',
                'causer-changes-summary-relationship' => '**:causerName** 更新了相關的 :relationshipName :changesSummary。',
                'causer-changes-summary-relationship-related-record-title' => '**:causerName** 更新了相關的 :relationshipName **:relatedRecordTitle** :changesSummary。',
                'causer-without-changes-summary' => '**:causerName** 更新了 :modelLabel。',
                'causer-without-changes-summary-relationship' => '**:causerName** 更新了相關的 :relationshipName。',
                'causer-without-changes-summary-relationship-related-record-title' => '**:causerName** 更新了相關的 :relationshipName **:relatedRecordTitle**。',
                'without-causer-changes-summary' => ':modelLabel 已更新，變更內容為 :changesSummary。',
                'without-causer-changes-summary-relationship' => '相關的 :relationshipName 已更新，變更內容為 :changesSummary。',
                'without-causer-changes-summary-relationship-related-record-title' => '相關的 :relationshipName **:relatedRecordTitle** 已更新，變更內容為 :changesSummary。',
                'without-causer-without-changes-summary' => ':modelLabel 已更新。',
                'without-causer-without-changes-summary-relationship' => '相關的 :relationshipName 已更新。',
                'without-causer-without-changes-summary-relationship-related-record-title' => '相關的 :relationshipName **:relatedRecordTitle** 已更新。',
            ],
            'deleted' => [
                'causer' => '**:causerName** 刪除了 :modelLabel。',
                'causer-relationship' => '**:causerName** 刪除了相關的 :relationshipName。',
                'causer-relationship-related-record-title' => '**:causerName** 刪除了相關的 :relationshipName **:relatedRecordTitle**。',
                'without-causer' => ':modelLabel 已刪除。',
                'without-causer-relationship' => '相關的 :relationshipName 已刪除。',
                'without-causer-relationship-related-record-title' => '相關的 :relationshipName **:relatedRecordTitle** 已刪除。',
            ],
            'restored' => [
                'causer' => '**:causerName** 恢復了 :modelLabel。',
                'causer-relationship' => '**:causerName** 恢復了相關的 :relationshipName。',
                'causer-relationship-related-record-title' => '**:causerName** 恢復了相關的 :relationshipName **:relatedRecordTitle**。',
                'without-causer' => ':modelLabel 已恢復。',
                'without-causer-relationship' => '相關的 :relationshipName 已恢復。',
                'without-causer-relationship-related-record-title' => '相關的 :relationshipName **:relatedRecordTitle** 已恢復。',
            ],
            'custom' => [
                'causer' => '**:causerName** :event 了 :modelLabel。',
                'causer-relationship' => '**:causerName** :event 了相關的 :relationshipName。',
                'causer-relationship-related-record-title' => '**:causerName** :event 了相關的 :relationshipName **:relatedRecordTitle**。',
                'without-causer' => ':modelLabel 已 :event。',
                'without-causer-relationship' => '相關的 :relationshipName 已 :event。',
                'without-causer-relationship-related-record-title' => '相關的 :relationshipName **:relatedRecordTitle** 已 :event。',
            ],
            'no-subject' => [
                'causer' => '**:causerName** :event。',
                'causer-relationship' => '**:causerName** :event 了相關的 :relationshipName。',
                'causer-relationship-related-record-title' => '**:causerName** :event 了相關的 :relationshipName **:relatedRecordTitle**。',
                'without-causer' => ':event。',
                'without-causer-relationship' => '相關的 :relationshipName 已 :event。',
                'without-causer-relationship-related-record-title' => '相關的 :relationshipName **:relatedRecordTitle** 已 :event。',
            ],
            'changesSummary' => [
                'attribute' => '**:attributeLabel** 變更為 **:newAttributeValue**',
                'attributeWithOld' => '**:attributeLabel** 從 :oldAttributeValue 變更為 **:newAttributeValue**',
                'attributeFromBlankWithOld' => '**:attributeLabel** 從空白欄位變更為 **:newAttributeValue**',
                'attributeFromBlankToBlankWithOld' => '**:attributeLabel** 從空白欄位變更為空白欄位',
                'attributeToBlank' => '**:attributeLabel** 變更為空白欄位',
                'attributeToBlankWithOld' => '**:attributeLabel** 從 :oldAttributeValue 變更為空白欄位',
                'finalGlue' => ' 和 ',
                'values' => [
                    'boolean-1' => '是',
                    'boolean-0' => '否',
                ],
            ],
        ],
        'actions' => [
            'view_batch' => [
                'label' => '相關歷史記錄',
                'modal_heading' => '查看相關歷史記錄',
                'modal_description' => '此事件是某個事件批次的一部分。以下顯示該批次中的其他事件，包括您選擇的事件。',
            ],
        ],
    ],
];
