<?php

return [
    'file' => '檔案',
    'meta' => '描述',
    'author' => '作者',
    'image' => '圖片',
    'images' => '圖片集',
    'information' => '資訊',
    'edit-media' => '編輯',
    'edit-media-description' => '儲存此媒體項目的額外資訊。',
    'move-media' => '移動媒體至',
    'move-media-description' => '目前位置：:name',
    'dimensions' => '尺寸',
    'description' => '描述',
    'type' => '類型',
    'caption' => '標題',
    'alt-text' => '替代文字',
    'actions' => '操作',
    'size' => '大小',
    'page' => '頁面|頁面',
    'duration' => '時長',
    'root-folder' => '根目錄',

    'time' => [
        'created_at' => '建立時間',
        'updated_at' => '修改時間',
        'published_at' => '發布時間',
        'uploaded_at' => '上傳時間',
        'uploaded_by' => '上傳者',
    ],

    'phrases' => [
        'select' => '選擇',
        'select-image' => '選擇檔案',
        'no' => '無',
        'found' => '已找到',
        'not-found' => '未找到',
        'upload' => '上傳',
        'upload-file' => '上傳檔案',
        'upload-image' => '上傳圖片',
        'replace-media' => '替換媒體',
        'store' => '儲存',
        'store-images' => '儲存圖片|儲存圖片集',
        'details-for' => '詳細資訊',
        'view' => '查看',
        'delete' => '刪除',
        'download' => '下載',
        'save' => '儲存',
        'edit' => '編輯',
        'from' => '從',
        'to' => '至',
        'embed' => '嵌入',
        'loading' => '載入中',
        'cancel' => '取消',
        'update-and-close' => '更新並關閉',
        'search' => '搜尋',
        'confirm' => '確認',
        'create-folder' => '建立資料夾',
        'create' => '建立',
        'rename-folder' => '重新命名資料夾',
        'move-folder' => '移動資料夾',
        'move-media' => '移動媒體',
        'delete-folder' => '刪除資料夾',
        'sort-by' => '排序方式',
        'regenerate' => '重新生成',
        'requested' => '已請求',
        'select-all' => '全選',
        'selected-item-suffix' => '項已選擇',
        'selected-items-suffix-plural' => '項已選擇',
    ],

    'warnings' => [
        'delete-media' => '確定要刪除 :filename 嗎？',
    ],

    'sentences' => [
        'select-image-to-view-info' => '選擇檔案以檢視詳細資訊。',
        'add-an-alt-text-to-this-image' => '為此項目添加替代文字。',
        'add-a-caption-to-this-image' => '為此項目添加標題/描述。',
        'enter-search-term' => '輸入搜尋詞',
        'enter-folder-name' => '輸入資料夾名稱',
        'folder-files' => '{0} 資料夾為空|{1} 1 項目|[2,*] :count 項目',
    ],

    'media' => [
        'choose-image' => '選擇圖片|選擇圖片集',
        'no-image-selected-yet' => '尚未選擇項目。',
        'storing-files' => '正在儲存檔案...',
        'clear-image' => '清除',
        'warning-unstored-uploads' => '別忘了點擊「儲存」來上傳檔案|別忘了點擊「儲存」來上傳檔案集',
        'will-be-available-soon' => '您的媒體將很快可用',

        'no-images-found' => [
            'title' => '未找到圖片',
            'description' => '透過上傳第一個項目開始使用。',
        ],
    ],

    'components' => [
        'browse-library' => [
            'breadcrumbs' => [
                'root' => '媒體庫',
            ],
            'modals' => [
                'create-media-folder' => [
                    'heading' => '建立資料夾',
                    'subheading' => '資料夾將建立於當前資料夾中。',
                    'form' => [
                        'name' => [
                            'placeholder' => '資料夾名稱',
                        ],
                    ],
                    'messages' => [
                        'created' => [
                            'body' => '媒體資料夾已建立',
                        ],
                    ],
                ],
                'rename-media-folder' => [
                    'heading' => '輸入此資料夾的新名稱',
                    'form' => [
                        'name' => [
                            'placeholder' => '資料夾名稱',
                        ],
                    ],
                    'messages' => [
                        'renamed' => [
                            'body' => '媒體資料夾已重新命名',
                        ],
                    ],
                ],
                'move-media-folder' => [
                    'heading' => '選擇新位置',
                    'subheading' => '資料夾內的所有項目將一同移動。',
                    'form' => [
                        'media_library_folder_id' => [
                            'placeholder' => '選擇目的地',
                        ],
                    ],
                    'messages' => [
                        'moved' => [
                            'body' => '媒體資料夾已移動',
                        ],
                    ],
                ],
                'delete-media-folder' => [
                    'heading' => '確定要刪除此資料夾嗎？',
                    'subheading' => '資料夾中的檔案將不會被刪除，而是移至當前資料夾。',
                    'form' => [
                        'fields' => [
                            'include_children' => [
                                'label' => '刪除資料夾內的所有內容',
                                'helper_text' => '警告：此操作將刪除資料夾中的所有項目，且無法復原。',
                            ],
                        ],
                    ],
                    'messages' => [
                        'deleted' => [
                            'body' => '媒體資料夾已刪除',
                        ],
                    ],
                ],
            ],
            'sort_order' => [
                'created_at_ascending' => '最舊',
                'created_at_descending' => '最新',
                'name_ascending' => '名稱（A-Z）',
                'name_descending' => '名稱（Z-A）',
            ],
        ],
        'media-info' => [
            'heading' => '檢視項目',
            'move-media-item-form' => [
                'fields' => [
                    'media_library_folder_id' => [
                        'placeholder' => '選擇目的地',
                    ],
                ],
                'messages' => [
                    'moved' => [
                        'body' => '媒體項目已移動',
                    ],
                ],
            ],
        ],
        'media-picker' => [
            'title' => '媒體庫',
        ],
    ],

    'filament-tip-tap' => [
        'actions' => [
            'media-library-action' => [
                'modal-heading' => '選擇媒體',
                'modal-submit-action-label' => '選擇',
            ],
        ],
    ],
];
