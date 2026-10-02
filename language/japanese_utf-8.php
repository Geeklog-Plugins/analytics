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
    'install_header' => 'analytics プラグインのインストール',
    'overview' => 'analytics プラグインは Google Analytics 4 のトラッキングと管理ダッシュボードを追加します。',
    'preinstall_check' => 'analytics には次の要件があります:',
    'geeklog_check' => 'Geeklog v2.1.1 以上。検出されたバージョンは <b>%s</b> です。',
    'php_check' => 'PHP v5.6.0 以上。検出されたバージョンは <b>%s</b> です。',
    'preinstall_confirm' => 'analytics プラグインの詳細については <a href="https://github.com/Geeklog-Plugins/analytics" target="_blank">GitHub</a> を参照してください。'
);

$LANG_analytics01 = array(
    'plugin_name' => 'Analytics'
);

$LANG_configsections['analytics'] = array(
    'label' => 'Analytics',
    'title' => 'Analytics 設定'
);

$LANG_confignames['analytics'] = array(
    'ga_code' => 'GA4 測定 ID（例: G-XXXX）',
    'property_id' => 'GA4 プロパティ ID（数値）',
    'client_id' => 'Google OAuth クライアント ID',
    'hostname' => 'ホスト名フィルター（空欄 = 自動、* = すべてのホスト）'
);

$LANG_configsubgroups['analytics'] = array('sg_main' => 'メイン設定');
$LANG_tab['analytics'] = array('tab_main' => 'Analytics 設定');
$LANG_fs['analytics'] = array('fs_main' => 'Google Analytics 4');

$LANG_analytics_admin = array(
    'setup_required' => 'Google Analytics - 設定が必要です',
    'setup_req_desc' => 'ウェブサイトのトラッキングを有効にするには、Geeklog の設定で有効な <b>GA4 測定 ID（例: G-XXXX）</b> を設定してください。',
    'tracking_active' => 'Google Analytics - トラッキング有効',
    'tracking_active_desc' => '現在、測定 ID <b>%s</b> でウェブサイトをトラッキングしています。',
    'tracking_active_note' => '<i>このダッシュボードでトラフィック統計を表示するには、有効な <b>GA4 プロパティ ID</b> と <b>Google OAuth クライアント ID</b> を設定してください。</i>',
    'dashboard_title' => 'Google Analytics 4 ダッシュボード',
    'dashboard_desc' => 'Google アカウントでアクセスを承認し、最新のサイト統計を取得します。',
    'auth_button' => 'Google Analytics へのアクセスを承認',
    'refresh_button' => 'データを更新（Google 認証）',
    'data_wait' => '承認後、ここにデータが表示されます...',
    'loading_data' => 'GA4 API からデータを読み込んでいます...',
    'stats_yesterday' => '昨日',
    'stats_7days' => '過去 7 日間',
    'stats_30days' => '過去 30 日間',
    'metric_users' => 'アクティブユーザー',
    'metric_views' => 'ページビュー',
    'cached_data_note' => '現在、データはブラウザーのローカルキャッシュから読み込まれています。',
    'cached_date' => '最終更新: %s',
    'error' => 'エラー:',
    'request_failed' => 'リクエストに失敗しました',
    'dependency_error' => 'Google Identity Services または Chart.js を読み込めませんでした。',
    'permission_error' => 'アクセスが拒否されました。この Google アカウントが設定済みの GA4 プロパティにアクセスでき、Analytics Data API が有効になっていることを確認してください。',
    'auth_error' => '承認の有効期限が切れたか拒否されました。Google Analytics へのアクセスを再度承認してください。',
    'quota_error' => 'Google Analytics Data API の割り当て上限に達しました。後でもう一度お試しください。',
    'hostname_filter_active' => '統計は次のホスト名でフィルターされています: <strong>%s</strong>。',
    'hostname_filter_disabled' => 'ホスト名フィルターは無効です。統計には GA4 プロパティ全体が含まれます。',
    'manual_html' => '
<hr>
<details style="margin-top:30px;padding:18px;background:#f9f9f9;border:1px solid #e0e0e0;border-radius:8px;">
<summary style="font-size:1.15em;font-weight:600;cursor:pointer;">Google Analytics ダッシュボードの設定</summary>
<div style="margin-top:18px;line-height:1.6;">
<p>Analytics の設定で、GA4 測定 ID、数値のプロパティ ID、Google OAuth クライアント ID を設定します。</p>
<p><strong>ホスト名フィルター:</strong> この欄を空白にすると Geeklog の <code>site_url</code> のホスト名が自動的に使用されます。特定のサイトを固定するにはホスト名を入力し、GA4 プロパティ全体の統計を表示するには <code>*</code> を入力します。</p>
<p>承認に使用する Google アカウントには GA4 プロパティへの少なくとも閲覧者アクセス権が必要で、関連する Google Cloud プロジェクトで Google Analytics Data API を有効にする必要があります。</p>
<p>ダッシュボードでは完了した日のみを使用します。対象は昨日、直前の完了済み 7 日間、直前の完了済み 30 日間です。アクティブユーザー KPI は各期間について直接取得され、日別ユーザー数の合計では計算されません。</p>
</div>
</details>'
);

?>
