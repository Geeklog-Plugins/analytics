<?php

/* Reminder: always indent with 4 spaces (no tabs). */
// +---------------------------------------------------------------------------+
// | analytics plugin 1.1.3                                                    |
// +---------------------------------------------------------------------------+
// | language file                                                             |
// |                                                                           |
// | UTF-8 language file for the Geeklog analytics plugin                      |
// +---------------------------------------------------------------------------+
// | Copyright (C) 2001-2026 by the following authors:                         |
// |                                                                           |
// | Authors: Tony Bibbs       - tony AT tonybibbs DOT com                     |
// |          Trinity Bays     - trinity93 AT gmail DOT com                    |
// |          Ben              - hostellerie.org AT gmail DOT com              |
// +---------------------------------------------------------------------------+
// |                                                                           |
// | This program is free software; you can redistribute it and/or             |
// | modify it under the terms of the GNU General Public License               |
// | as published by the Free Software Foundation; either version 2            |
// | of the License, or (at your option) any later version.                    |
// |                                                                           |
// | This program is distributed in the hope that it will be useful,           |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
// | GNU General Public License for more details.                              |
// |                                                                           |
// | You should have received a copy of the GNU General Public License         |
// | along with this program; if not, write to the Free Software Foundation,   |
// | Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.           |
// |                                                                           |
// +---------------------------------------------------------------------------+
//
$LANG_analytics00 = array(
    'install_header' => 'analytics 外掛程式安裝',
    'overview' => 'analytics 外掛程式提供 Google Analytics 4 追蹤與管理儀表板。',
    'preinstall_check' => 'analytics 有以下需求：',
    'geeklog_check' => 'Geeklog v2.1.1 或更新版本，偵測到的版本為 <b>%s</b>。',
    'php_check' => 'PHP v5.6.0 或更新版本，偵測到的版本為 <b>%s</b>。',
    'preinstall_confirm' => '如需 analytics 外掛程式的完整資訊，請造訪 <a href="https://github.com/Geeklog-Plugins/analytics" target="_blank">GitHub</a>。'
);

$LANG_analytics01 = array(
    'plugin_name' => 'Analytics'
);

$LANG_configsections['analytics'] = array(
    'label' => 'Analytics',
    'title' => 'Analytics 設定'
);

$LANG_confignames['analytics'] = array(
    'ga_code' => 'GA4 評估 ID（例如 G-XXXX）',
    'property_id' => 'GA4 資源 ID（數字）',
    'client_id' => 'Google OAuth 用戶端 ID',
    'hostname' => '主機名稱篩選器（留白 = 自動，* = 所有主機）'
);

$LANG_configsubgroups['analytics'] = array('sg_main' => '主要設定');
$LANG_tab['analytics'] = array('tab_main' => 'Analytics 設定');
$LANG_fs['analytics'] = array('fs_main' => 'Google Analytics 4');

$LANG_analytics_admin = array(
    'setup_required' => 'Google Analytics - 需要設定',
    'setup_req_desc' => '請在 Geeklog 設定中輸入有效的 <b>GA4 評估 ID（例如 G-XXXX）</b>，以啟用網站追蹤。',
    'tracking_active' => 'Google Analytics - 追蹤已啟用',
    'tracking_active_desc' => '您的網站目前使用以下評估 ID 進行追蹤：<b>%s</b>',
    'tracking_active_note' => '<i>若要在此儀表板查看流量統計資料，請設定有效的 <b>GA4 資源 ID</b> 與 <b>Google OAuth 用戶端 ID</b>。</i>',
    'dashboard_title' => 'Google Analytics 4 儀表板',
    'dashboard_desc' => '使用您的 Google 帳戶授權存取，以取得最新的網站統計資料。',
    'auth_button' => '授權存取 Google Analytics',
    'refresh_button' => '重新整理資料（Google 驗證）',
    'data_wait' => '授權後，資料會顯示在此處...',
    'loading_data' => '正在從 GA4 API 載入資料...',
    'stats_yesterday' => '昨天',
    'stats_7days' => '最近 7 天',
    'stats_30days' => '最近 30 天',
    'metric_users' => '活躍使用者',
    'metric_views' => '網頁瀏覽量',
    'cached_data_note' => '資料目前從瀏覽器的本機快取載入。',
    'cached_date' => '最後更新：%s',
    'error' => '錯誤：',
    'request_failed' => '要求失敗',
    'dependency_error' => '無法載入 Google Identity Services 或 Chart.js。',
    'permission_error' => '存取遭拒。請確認此 Google 帳戶可存取已設定的 GA4 資源，且 Analytics Data API 已啟用。',
    'auth_error' => '授權已過期或遭拒。請重新授權存取 Google Analytics。',
    'quota_error' => '已達 Google Analytics Data API 配額上限。請稍後再試。',
    'hostname_filter_active' => '統計資料依主機名稱篩選：<strong>%s</strong>。',
    'hostname_filter_disabled' => '主機名稱篩選已停用。統計資料涵蓋完整的 GA4 資源。',
    'manual_html' => '
<hr>
<details style="margin-top:30px;padding:18px;background:#f9f9f9;border:1px solid #e0e0e0;border-radius:8px;">
<summary style="font-size:1.15em;font-weight:600;cursor:pointer;">Google Analytics 儀表板設定</summary>
<div style="margin-top:18px;line-height:1.6;">
<p>請在 Analytics 設定中設定 GA4 評估 ID、數字資源 ID 與 Google OAuth 用戶端 ID。</p>
<p><strong>主機名稱篩選器：</strong>將此欄位留白即可自動使用 Geeklog <code>site_url</code> 的主機名稱。輸入主機名稱可指定特定網站，或輸入 <code>*</code> 顯示整個 GA4 資源的統計資料。</p>
<p>用於授權的 Google 帳戶至少需要 GA4 資源的 Viewer 存取權，而且相關的 Google Cloud 專案必須啟用 Google Analytics Data API。</p>
<p>儀表板只使用已完成的日期：昨天、之前 7 個完整日期，以及之前 30 個完整日期。活躍使用者 KPI 會針對每個完整期間直接要求，不會以每日使用者數相加計算。</p>
</div>
</details>'
);

?>
