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
    'install_header' => 'Установка плагина analytics',
    'overview' => 'Плагин analytics добавляет отслеживание Google Analytics 4 и административную панель.',
    'preinstall_check' => 'Для analytics требуются:',
    'geeklog_check' => 'Geeklog v2.1.1 или новее; обнаружена версия <b>%s</b>.',
    'php_check' => 'PHP v5.6.0 или новее; обнаружена версия <b>%s</b>.',
    'preinstall_confirm' => 'Подробную информацию о плагине analytics смотрите на <a href="https://github.com/Geeklog-Plugins/analytics" target="_blank">GitHub</a>.'
);

$LANG_analytics01 = array(
    'plugin_name' => 'Analytics'
);

$LANG_configsections['analytics'] = array(
    'label' => 'Analytics',
    'title' => 'Настройка Analytics'
);

$LANG_confignames['analytics'] = array(
    'ga_code' => 'Идентификатор измерения GA4 (например, G-XXXX)',
    'property_id' => 'Идентификатор ресурса GA4 (числовой)',
    'client_id' => 'Идентификатор клиента Google OAuth',
    'hostname' => 'Фильтр имени хоста (пусто = автоматически, * = все хосты)'
);

$LANG_configsubgroups['analytics'] = array('sg_main' => 'Основные настройки');
$LANG_tab['analytics'] = array('tab_main' => 'Настройки Analytics');
$LANG_fs['analytics'] = array('fs_main' => 'Google Analytics 4');

$LANG_analytics_admin = array(
    'setup_required' => 'Google Analytics — требуется настройка',
    'setup_req_desc' => 'Укажите действительный <b>идентификатор измерения GA4 (например, G-XXXX)</b> в конфигурации Geeklog, чтобы включить отслеживание сайта.',
    'tracking_active' => 'Google Analytics — отслеживание активно',
    'tracking_active_desc' => 'Сайт сейчас отслеживается с идентификатором измерения: <b>%s</b>',
    'tracking_active_note' => '<i>Чтобы видеть статистику трафика на этой панели, укажите действительный <b>идентификатор ресурса GA4</b> и <b>идентификатор клиента Google OAuth</b>.</i>',
    'dashboard_title' => 'Панель Google Analytics 4',
    'dashboard_desc' => 'Авторизуйте доступ через аккаунт Google, чтобы получить актуальную статистику сайта.',
    'auth_button' => 'Разрешить доступ к Google Analytics',
    'refresh_button' => 'Обновить данные (авторизация Google)',
    'data_wait' => 'После авторизации данные появятся здесь...',
    'loading_data' => 'Загрузка данных из API GA4...',
    'stats_yesterday' => 'Вчера',
    'stats_7days' => 'Последние 7 дней',
    'stats_30days' => 'Последние 30 дней',
    'metric_users' => 'Активные пользователи',
    'metric_views' => 'Просмотры страниц',
    'cached_data_note' => 'Сейчас данные загружаются из локального кэша браузера.',
    'cached_date' => 'Последнее обновление: %s',
    'error' => 'Ошибка:',
    'request_failed' => 'Запрос не выполнен',
    'dependency_error' => 'Не удалось загрузить Google Identity Services или Chart.js.',
    'permission_error' => 'Доступ запрещен. Убедитесь, что этот аккаунт Google имеет доступ к настроенному ресурсу GA4 и что Analytics Data API включен.',
    'auth_error' => 'Срок авторизации истек или она была отклонена. Снова разрешите доступ к Google Analytics.',
    'quota_error' => 'Квота Google Analytics Data API исчерпана. Повторите попытку позже.',
    'hostname_filter_active' => 'Статистика отфильтрована по имени хоста: <strong>%s</strong>.',
    'hostname_filter_disabled' => 'Фильтрация по имени хоста отключена. Статистика охватывает весь ресурс GA4.',
    'manual_html' => '
<hr>
<details style="margin-top:30px;padding:18px;background:#f9f9f9;border:1px solid #e0e0e0;border-radius:8px;">
<summary style="font-size:1.15em;font-weight:600;cursor:pointer;">Настройка панели Google Analytics</summary>
<div style="margin-top:18px;line-height:1.6;">
<p>Укажите идентификатор измерения GA4, числовой идентификатор ресурса и идентификатор клиента Google OAuth в конфигурации Analytics.</p>
<p><strong>Фильтр имени хоста:</strong> оставьте поле пустым, чтобы автоматически использовать имя хоста из <code>site_url</code> Geeklog. Введите имя хоста для конкретного сайта или <code>*</code>, чтобы показывать статистику по всему ресурсу GA4.</p>
<p>Аккаунт Google, используемый для авторизации, должен иметь как минимум права Viewer для ресурса GA4, а Google Analytics Data API должен быть включен в связанном проекте Google Cloud.</p>
<p>Панель использует только завершенные дни: вчера, предыдущие 7 завершенных дней и предыдущие 30 завершенных дней. KPI активных пользователей запрашиваются напрямую для каждого полного периода и не рассчитываются суммированием ежедневных пользователей.</p>
</div>
</details>'
);

?>
