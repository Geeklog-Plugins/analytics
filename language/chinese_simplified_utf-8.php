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
    'install_header' => 'analytics 插件安装',
    'overview' => 'analytics 插件提供 Google Analytics 4 跟踪和管理仪表板。',
    'preinstall_check' => 'analytics 有以下要求：',
    'geeklog_check' => 'Geeklog v2.1.1 或更高版本，检测到的版本为 <b>%s</b>。',
    'php_check' => 'PHP v5.6.0 或更高版本，检测到的版本为 <b>%s</b>。',
    'preinstall_confirm' => '有关 analytics 插件的完整信息，请访问 <a href="https://github.com/Geeklog-Plugins/analytics" target="_blank">GitHub</a>。'
);

$LANG_analytics01 = array(
    'plugin_name' => 'Analytics'
);

$LANG_configsections['analytics'] = array(
    'label' => 'Analytics',
    'title' => 'Analytics 配置'
);

$LANG_confignames['analytics'] = array(
    'ga_code' => 'GA4 衡量 ID（例如 G-XXXX）',
    'property_id' => 'GA4 媒体资源 ID（数字）',
    'client_id' => 'Google OAuth 客户端 ID',
    'hostname' => '主机名过滤器（留空 = 自动，* = 所有主机）'
);

$LANG_configsubgroups['analytics'] = array('sg_main' => '主要设置');
$LANG_tab['analytics'] = array('tab_main' => 'Analytics 设置');
$LANG_fs['analytics'] = array('fs_main' => 'Google Analytics 4');

$LANG_analytics_admin = array(
    'setup_required' => 'Google Analytics - 需要设置',
    'setup_req_desc' => '请在 Geeklog 配置中设置有效的 <b>GA4 衡量 ID（例如 G-XXXX）</b>，以启用网站跟踪。',
    'tracking_active' => 'Google Analytics - 跟踪已启用',
    'tracking_active_desc' => '您的网站当前使用以下衡量 ID 进行跟踪：<b>%s</b>',
    'tracking_active_note' => '<i>要在此仪表板中查看流量统计信息，请配置有效的 <b>GA4 媒体资源 ID</b> 和 <b>Google OAuth 客户端 ID</b>。</i>',
    'dashboard_title' => 'Google Analytics 4 仪表板',
    'dashboard_desc' => '使用您的 Google 帐号授权访问，以获取最新的网站统计信息。',
    'auth_button' => '授权访问 Google Analytics',
    'refresh_button' => '刷新数据（Google 授权）',
    'data_wait' => '授权后，数据将显示在此处...',
    'loading_data' => '正在从 GA4 API 加载数据...',
    'stats_yesterday' => '昨天',
    'stats_7days' => '最近 7 天',
    'stats_30days' => '最近 30 天',
    'metric_users' => '活跃用户',
    'metric_views' => '网页浏览量',
    'cached_data_note' => '数据当前从浏览器的本地缓存中加载。',
    'cached_date' => '最后更新：%s',
    'error' => '错误：',
    'request_failed' => '请求失败',
    'dependency_error' => '无法加载 Google Identity Services 或 Chart.js。',
    'permission_error' => '访问被拒绝。请检查此 Google 帐号是否有权访问已配置的 GA4 媒体资源，并确认 Analytics Data API 已启用。',
    'auth_error' => '授权已过期或被拒绝。请重新授权访问 Google Analytics。',
    'quota_error' => '已达到 Google Analytics Data API 配额。请稍后重试。',
    'hostname_filter_active' => '统计信息按主机名过滤：<strong>%s</strong>。',
    'hostname_filter_disabled' => '主机名过滤已禁用。统计信息涵盖完整的 GA4 媒体资源。',
    'manual_html' => '
<hr>
<details style="margin-top:30px;padding:18px;background:#f9f9f9;border:1px solid #e0e0e0;border-radius:8px;">
<summary style="font-size:1.15em;font-weight:600;cursor:pointer;">Google Analytics 仪表板设置</summary>
<div style="margin-top:18px;line-height:1.6;">
<p>在 Analytics 配置中设置 GA4 衡量 ID、数字媒体资源 ID 和 Google OAuth 客户端 ID。</p>
<p><strong>主机名过滤器：</strong>将此字段留空可自动使用 Geeklog <code>site_url</code> 中的主机名。输入主机名可指定特定网站，或输入 <code>*</code> 显示整个 GA4 媒体资源的统计信息。</p>
<p>用于授权的 Google 帐号至少需要对 GA4 媒体资源具有 Viewer 访问权限，并且必须在相关的 Google Cloud 项目中启用 Google Analytics Data API。</p>
<p>仪表板仅使用已结束的完整日期：昨天、之前 7 个完整日期和之前 30 个完整日期。活跃用户 KPI 会针对每个完整期间直接请求，而不是通过累加每日用户数计算。</p>
</div>
</details>'
);

?>
