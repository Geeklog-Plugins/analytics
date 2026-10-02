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
    'install_header' => 'نصب افزونه analytics',
    'overview' => 'افزونه analytics رهگیری Google Analytics 4 و یک داشبورد مدیریتی را اضافه می‌کند.',
    'preinstall_check' => 'analytics نیازمندی‌های زیر را دارد:',
    'geeklog_check' => 'Geeklog نسخه 2.1.1 یا بالاتر؛ نسخه شناسایی‌شده <b>%s</b> است.',
    'php_check' => 'PHP نسخه 5.6.0 یا بالاتر؛ نسخه شناسایی‌شده <b>%s</b> است.',
    'preinstall_confirm' => 'برای جزئیات کامل افزونه analytics به <a href="https://github.com/Geeklog-Plugins/analytics" target="_blank">GitHub</a> مراجعه کنید.'
);

$LANG_analytics01 = array(
    'plugin_name' => 'Analytics'
);

$LANG_configsections['analytics'] = array(
    'label' => 'Analytics',
    'title' => 'پیکربندی Analytics'
);

$LANG_confignames['analytics'] = array(
    'ga_code' => 'شناسه اندازه‌گیری GA4 (برای نمونه G-XXXX)',
    'property_id' => 'شناسه Property در GA4 (عددی)',
    'client_id' => 'شناسه Client در Google OAuth',
    'hostname' => 'فیلتر نام میزبان (خالی = خودکار، * = همه میزبان‌ها)'
);

$LANG_configsubgroups['analytics'] = array('sg_main' => 'تنظیمات اصلی');
$LANG_tab['analytics'] = array('tab_main' => 'تنظیمات Analytics');
$LANG_fs['analytics'] = array('fs_main' => 'Google Analytics 4');

$LANG_analytics_admin = array(
    'setup_required' => 'Google Analytics - نیازمند پیکربندی',
    'setup_req_desc' => 'برای فعال‌کردن رهگیری وب‌سایت، یک <b>شناسه اندازه‌گیری معتبر GA4 (برای نمونه G-XXXX)</b> را در پیکربندی Geeklog تنظیم کنید.',
    'tracking_active' => 'Google Analytics - رهگیری فعال',
    'tracking_active_desc' => 'وب‌سایت شما هم‌اکنون با شناسه اندازه‌گیری <b>%s</b> رهگیری می‌شود.',
    'tracking_active_note' => '<i>برای مشاهده آمار ترافیک در این داشبورد، یک <b>شناسه Property معتبر GA4</b> و <b>شناسه Client در Google OAuth</b> تنظیم کنید.</i>',
    'dashboard_title' => 'داشبورد Google Analytics 4',
    'dashboard_desc' => 'برای دریافت آمار تازه سایت، دسترسی را با حساب Google خود تأیید کنید.',
    'auth_button' => 'تأیید دسترسی Google Analytics',
    'refresh_button' => 'تازه‌سازی داده‌ها (احراز هویت Google)',
    'data_wait' => 'داده‌ها پس از تأیید در اینجا نمایش داده می‌شوند...',
    'loading_data' => 'در حال بارگذاری داده از GA4 API...',
    'stats_yesterday' => 'دیروز',
    'stats_7days' => '۷ روز گذشته',
    'stats_30days' => '۳۰ روز گذشته',
    'metric_users' => 'کاربران فعال',
    'metric_views' => 'بازدید صفحات',
    'cached_data_note' => 'داده‌ها در حال حاضر از حافظه نهان محلی مرورگر بارگذاری می‌شوند.',
    'cached_date' => 'آخرین به‌روزرسانی: %s',
    'error' => 'خطا:',
    'request_failed' => 'درخواست ناموفق بود',
    'dependency_error' => 'Google Identity Services یا Chart.js بارگذاری نشد.',
    'permission_error' => 'دسترسی رد شد. بررسی کنید این حساب Google به Property تنظیم‌شده GA4 دسترسی داشته باشد و Analytics Data API فعال باشد.',
    'auth_error' => 'مجوز منقضی شده یا رد شده است. دوباره دسترسی Google Analytics را تأیید کنید.',
    'quota_error' => 'سهمیه Google Analytics Data API به پایان رسیده است. بعداً دوباره تلاش کنید.',
    'hostname_filter_active' => 'آمار برای نام میزبان زیر فیلتر شده است: <strong>%s</strong>.',
    'hostname_filter_disabled' => 'فیلتر نام میزبان غیرفعال است. آمار کل Property در GA4 را پوشش می‌دهد.',
    'manual_html' => '
<hr>
<details style="margin-top:30px;padding:18px;background:#f9f9f9;border:1px solid #e0e0e0;border-radius:8px;">
<summary style="font-size:1.15em;font-weight:600;cursor:pointer;">تنظیم داشبورد Google Analytics</summary>
<div style="margin-top:18px;line-height:1.6;">
<p>شناسه اندازه‌گیری GA4، شناسه عددی Property و شناسه Client در Google OAuth را در پیکربندی Analytics تنظیم کنید.</p>
<p><strong>فیلتر نام میزبان:</strong> این فیلد را خالی بگذارید تا نام میزبان از <code>site_url</code> در Geeklog به‌صورت خودکار استفاده شود. برای اجبار یک سایت مشخص، نام میزبان را وارد کنید یا برای نمایش آمار کل Property در GA4 مقدار <code>*</code> را وارد کنید.</p>
<p>حساب Google مورد استفاده برای تأیید باید حداقل دسترسی Viewer به Property در GA4 داشته باشد و Google Analytics Data API نیز در پروژه Google Cloud مرتبط فعال باشد.</p>
<p>داشبورد فقط از روزهای کامل‌شده استفاده می‌کند: دیروز، ۷ روز کامل قبلی و ۳۰ روز کامل قبلی. KPI کاربران فعال برای هر دوره کامل مستقیماً درخواست می‌شود و با جمع‌کردن کاربران روزانه محاسبه نمی‌شود.</p>
</div>
</details>'
);

?>
