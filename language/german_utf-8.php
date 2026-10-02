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
    'install_header' => 'Installation des analytics-Plugins',
    'overview' => 'Das analytics-Plugin ergänzt Google-Analytics-4-Tracking und ein Administrations-Dashboard.',
    'preinstall_check' => 'analytics hat folgende Anforderungen:',
    'geeklog_check' => 'Geeklog v2.1.1 oder höher; erkannte Version: <b>%s</b>.',
    'php_check' => 'PHP v5.6.0 oder höher; erkannte Version: <b>%s</b>.',
    'preinstall_confirm' => 'Vollständige Informationen zum analytics-Plugin finden Sie auf <a href="https://github.com/Geeklog-Plugins/analytics" target="_blank">GitHub</a>.'
);

$LANG_analytics01 = array(
    'plugin_name' => 'Analytics'
);

$LANG_configsections['analytics'] = array(
    'label' => 'Analytics',
    'title' => 'Analytics-Konfiguration'
);

$LANG_confignames['analytics'] = array(
    'ga_code' => 'GA4-Mess-ID (z. B. G-XXXX)',
    'property_id' => 'GA4-Property-ID (numerisch)',
    'client_id' => 'Google-OAuth-Client-ID',
    'hostname' => 'Hostname-Filter (leer = automatisch, * = alle Hosts)'
);

$LANG_configsubgroups['analytics'] = array('sg_main' => 'Haupteinstellungen');
$LANG_tab['analytics'] = array('tab_main' => 'Analytics-Einstellungen');
$LANG_fs['analytics'] = array('fs_main' => 'Google Analytics 4');

$LANG_analytics_admin = array(
    'setup_required' => 'Google Analytics - Einrichtung erforderlich',
    'setup_req_desc' => 'Konfigurieren Sie in Geeklog eine gültige <b>GA4-Mess-ID (z. B. G-XXXX)</b>, um das Website-Tracking zu aktivieren.',
    'tracking_active' => 'Google Analytics - Tracking aktiv',
    'tracking_active_desc' => 'Ihre Website wird derzeit mit folgender Mess-ID erfasst: <b>%s</b>',
    'tracking_active_note' => '<i>Um Traffic-Statistiken in diesem Dashboard anzuzeigen, konfigurieren Sie eine gültige <b>GA4-Property-ID</b> und eine <b>Google-OAuth-Client-ID</b>.</i>',
    'dashboard_title' => 'Google Analytics 4 Dashboard',
    'dashboard_desc' => 'Autorisieren Sie den Zugriff mit Ihrem Google-Konto, um aktuelle Website-Statistiken abzurufen.',
    'auth_button' => 'Google-Analytics-Zugriff autorisieren',
    'refresh_button' => 'Daten aktualisieren (Google-Authentifizierung)',
    'data_wait' => 'Nach der Autorisierung werden die Daten hier angezeigt...',
    'loading_data' => 'Daten werden aus der GA4 API geladen...',
    'stats_yesterday' => 'Gestern',
    'stats_7days' => 'Letzte 7 Tage',
    'stats_30days' => 'Letzte 30 Tage',
    'metric_users' => 'Aktive Nutzer',
    'metric_views' => 'Seitenaufrufe',
    'cached_data_note' => 'Die Daten werden derzeit aus dem lokalen Browser-Cache geladen.',
    'cached_date' => 'Zuletzt aktualisiert: %s',
    'error' => 'Fehler:',
    'request_failed' => 'Anfrage fehlgeschlagen',
    'dependency_error' => 'Google Identity Services oder Chart.js konnten nicht geladen werden.',
    'permission_error' => 'Zugriff verweigert. Prüfen Sie, ob dieses Google-Konto Zugriff auf die konfigurierte GA4-Property hat und die Analytics Data API aktiviert ist.',
    'auth_error' => 'Die Autorisierung ist abgelaufen oder wurde abgelehnt. Autorisieren Sie den Google-Analytics-Zugriff erneut.',
    'quota_error' => 'Das Kontingent der Google Analytics Data API ist ausgeschöpft. Versuchen Sie es später erneut.',
    'hostname_filter_active' => 'Die Statistiken sind nach folgendem Hostnamen gefiltert: <strong>%s</strong>.',
    'hostname_filter_disabled' => 'Die Hostname-Filterung ist deaktiviert. Die Statistiken umfassen die gesamte GA4-Property.',
    'manual_html' => '
<hr>
<details style="margin-top:30px;padding:18px;background:#f9f9f9;border:1px solid #e0e0e0;border-radius:8px;">
<summary style="font-size:1.15em;font-weight:600;cursor:pointer;">Google-Analytics-Dashboard einrichten</summary>
<div style="margin-top:18px;line-height:1.6;">
<p>Konfigurieren Sie die GA4-Mess-ID, die numerische Property-ID und die Google-OAuth-Client-ID in der Analytics-Konfiguration.</p>
<p><strong>Hostname-Filter:</strong> Lassen Sie dieses Feld leer, um automatisch den Hostnamen aus Geeklogs <code>site_url</code> zu verwenden. Geben Sie einen Hostnamen ein, um eine bestimmte Website festzulegen, oder <code>*</code>, um Statistiken für die gesamte GA4-Property anzuzeigen.</p>
<p>Das für die Autorisierung verwendete Google-Konto benötigt mindestens Viewer-Zugriff auf die GA4-Property. Außerdem muss die Google Analytics Data API im zugehörigen Google-Cloud-Projekt aktiviert sein.</p>
<p>Das Dashboard verwendet nur abgeschlossene Tage: gestern, die vorherigen 7 abgeschlossenen Tage und die vorherigen 30 abgeschlossenen Tage. KPIs für aktive Nutzer werden für jeden vollständigen Zeitraum direkt abgefragt und nicht durch Addition täglicher Nutzer berechnet.</p>
</div>
</details>'
);

?>
