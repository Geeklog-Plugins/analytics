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
    'install_header' => 'התקנת התוסף analytics',
    'overview' => 'התוסף analytics מוסיף מעקב של Google Analytics 4 ולוח בקרה לניהול.',
    'preinstall_check' => 'ל-analytics יש את הדרישות הבאות:',
    'geeklog_check' => 'Geeklog v2.1.1 ומעלה; הגרסה שזוהתה היא <b>%s</b>.',
    'php_check' => 'PHP v5.6.0 ומעלה; הגרסה שזוהתה היא <b>%s</b>.',
    'preinstall_confirm' => 'לפרטים מלאים על התוסף analytics, בקרו ב-<a href="https://github.com/Geeklog-Plugins/analytics" target="_blank">GitHub</a>.'
);

$LANG_analytics01 = array(
    'plugin_name' => 'Analytics'
);

$LANG_configsections['analytics'] = array(
    'label' => 'Analytics',
    'title' => 'הגדרות Analytics'
);

$LANG_confignames['analytics'] = array(
    'ga_code' => 'מזהה מדידה של GA4 (לדוגמה G-XXXX)',
    'property_id' => 'מזהה נכס GA4 (מספרי)',
    'client_id' => 'מזהה לקוח Google OAuth',
    'hostname' => 'מסנן שם מארח (ריק = אוטומטי, * = כל המארחים)'
);

$LANG_configsubgroups['analytics'] = array('sg_main' => 'הגדרות ראשיות');
$LANG_tab['analytics'] = array('tab_main' => 'הגדרות Analytics');
$LANG_fs['analytics'] = array('fs_main' => 'Google Analytics 4');

$LANG_analytics_admin = array(
    'setup_required' => 'Google Analytics - נדרשת הגדרה',
    'setup_req_desc' => 'יש להגדיר <b>מזהה מדידה תקין של GA4 (לדוגמה G-XXXX)</b> בהגדרות Geeklog כדי להפעיל מעקב אחר האתר.',
    'tracking_active' => 'Google Analytics - המעקב פעיל',
    'tracking_active_desc' => 'האתר נמצא כעת במעקב באמצעות מזהה המדידה: <b>%s</b>',
    'tracking_active_note' => '<i>כדי להציג סטטיסטיקות תנועה בלוח הבקרה, הגדירו <b>מזהה נכס GA4</b> תקין ו-<b>מזהה לקוח Google OAuth</b>.</i>',
    'dashboard_title' => 'לוח הבקרה של Google Analytics 4',
    'dashboard_desc' => 'אשרו גישה באמצעות חשבון Google כדי לקבל סטטיסטיקות עדכניות של האתר.',
    'auth_button' => 'אישור גישה ל-Google Analytics',
    'refresh_button' => 'רענון נתונים (אימות Google)',
    'data_wait' => 'הנתונים יופיעו כאן לאחר האישור...',
    'loading_data' => 'טוען נתונים מ-GA4 API...',
    'stats_yesterday' => 'אתמול',
    'stats_7days' => '7 הימים האחרונים',
    'stats_30days' => '30 הימים האחרונים',
    'metric_users' => 'משתמשים פעילים',
    'metric_views' => 'צפיות בדפים',
    'cached_data_note' => 'הנתונים נטענים כעת מהמטמון המקומי של הדפדפן.',
    'cached_date' => 'עודכן לאחרונה: %s',
    'error' => 'שגיאה:',
    'request_failed' => 'הבקשה נכשלה',
    'dependency_error' => 'לא ניתן היה לטעון את Google Identity Services או Chart.js.',
    'permission_error' => 'הגישה נדחתה. ודאו שלחשבון Google הזה יש גישה לנכס GA4 שהוגדר וש-Analytics Data API מופעל.',
    'auth_error' => 'תוקף האישור פג או שהוא נדחה. יש לאשר מחדש גישה ל-Google Analytics.',
    'quota_error' => 'מכסת Google Analytics Data API נוצלה. נסו שוב מאוחר יותר.',
    'hostname_filter_active' => 'הסטטיסטיקות מסוננות לפי שם מארח: <strong>%s</strong>.',
    'hostname_filter_disabled' => 'סינון לפי שם מארח מושבת. הסטטיסטיקות כוללות את כל נכס GA4.',
    'manual_html' => '
<hr>
<details style="margin-top:30px;padding:18px;background:#f9f9f9;border:1px solid #e0e0e0;border-radius:8px;">
<summary style="font-size:1.15em;font-weight:600;cursor:pointer;">הגדרת לוח הבקרה של Google Analytics</summary>
<div style="margin-top:18px;line-height:1.6;">
<p>הגדירו את מזהה המדידה של GA4, מזהה הנכס המספרי ומזהה לקוח Google OAuth בהגדרות Analytics.</p>
<p><strong>מסנן שם מארח:</strong> השאירו את השדה ריק כדי להשתמש אוטומטית בשם המארח מתוך <code>site_url</code> של Geeklog. הזינו שם מארח כדי לכפות אתר מסוים, או <code>*</code> כדי להציג סטטיסטיקות עבור כל נכס GA4.</p>
<p>חשבון Google המשמש לאישור זקוק לפחות להרשאת Viewer לנכס GA4, ויש להפעיל את Google Analytics Data API בפרויקט Google Cloud המשויך.</p>
<p>לוח הבקרה משתמש רק בימים שהושלמו: אתמול, 7 הימים המלאים הקודמים ו-30 הימים המלאים הקודמים. מדדי המשתמשים הפעילים נשלפים ישירות לכל תקופה מלאה ואינם מחושבים על ידי חיבור משתמשים יומיים.</p>
</div>
</details>'
);

?>
