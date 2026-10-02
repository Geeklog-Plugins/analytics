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
    'install_header' => 'Installazione del plugin analytics',
    'overview' => 'Il plugin analytics aggiunge il tracciamento Google Analytics 4 e una dashboard di amministrazione.',
    'preinstall_check' => 'analytics ha i seguenti requisiti:',
    'geeklog_check' => 'Geeklog v2.1.1 o superiore; la versione rilevata è <b>%s</b>.',
    'php_check' => 'PHP v5.6.0 o superiore; la versione rilevata è <b>%s</b>.',
    'preinstall_confirm' => 'Per tutti i dettagli sul plugin analytics, visita <a href="https://github.com/Geeklog-Plugins/analytics" target="_blank">GitHub</a>.'
);

$LANG_analytics01 = array(
    'plugin_name' => 'Analytics'
);

$LANG_configsections['analytics'] = array(
    'label' => 'Analytics',
    'title' => 'Configurazione Analytics'
);

$LANG_confignames['analytics'] = array(
    'ga_code' => 'ID misurazione GA4 (es. G-XXXX)',
    'property_id' => 'ID proprietà GA4 (numerico)',
    'client_id' => 'ID client OAuth Google',
    'hostname' => 'Filtro nome host (vuoto = automatico, * = tutti gli host)'
);

$LANG_configsubgroups['analytics'] = array('sg_main' => 'Impostazioni principali');
$LANG_tab['analytics'] = array('tab_main' => 'Impostazioni Analytics');
$LANG_fs['analytics'] = array('fs_main' => 'Google Analytics 4');

$LANG_analytics_admin = array(
    'setup_required' => 'Google Analytics - Configurazione richiesta',
    'setup_req_desc' => 'Configura un <b>ID misurazione GA4 valido (es. G-XXXX)</b> nella configurazione di Geeklog per attivare il tracciamento del sito.',
    'tracking_active' => 'Google Analytics - Tracciamento attivo',
    'tracking_active_desc' => 'Il sito è attualmente tracciato con l\'ID misurazione: <b>%s</b>',
    'tracking_active_note' => '<i>Per visualizzare le statistiche di traffico in questa dashboard, configura un <b>ID proprietà GA4</b> valido e un <b>ID client OAuth Google</b>.</i>',
    'dashboard_title' => 'Dashboard Google Analytics 4',
    'dashboard_desc' => 'Autorizza l\'accesso con il tuo account Google per recuperare statistiche aggiornate del sito.',
    'auth_button' => 'Autorizza accesso a Google Analytics',
    'refresh_button' => 'Aggiorna dati (autenticazione Google)',
    'data_wait' => 'I dati appariranno qui dopo l\'autorizzazione...',
    'loading_data' => 'Caricamento dati dall\'API GA4...',
    'stats_yesterday' => 'Ieri',
    'stats_7days' => 'Ultimi 7 giorni',
    'stats_30days' => 'Ultimi 30 giorni',
    'metric_users' => 'Utenti attivi',
    'metric_views' => 'Visualizzazioni di pagina',
    'cached_data_note' => 'I dati sono attualmente caricati dalla cache locale del browser.',
    'cached_date' => 'Ultimo aggiornamento: %s',
    'error' => 'Errore:',
    'request_failed' => 'Richiesta non riuscita',
    'dependency_error' => 'Impossibile caricare Google Identity Services o Chart.js.',
    'permission_error' => 'Accesso negato. Verifica che questo account Google abbia accesso alla proprietà GA4 configurata e che l\'API Google Analytics Data sia abilitata.',
    'auth_error' => 'L\'autorizzazione è scaduta o è stata rifiutata. Autorizza nuovamente l\'accesso a Google Analytics.',
    'quota_error' => 'La quota dell\'API Google Analytics Data è stata raggiunta. Riprova più tardi.',
    'hostname_filter_active' => 'Le statistiche sono filtrate per nome host: <strong>%s</strong>.',
    'hostname_filter_disabled' => 'Il filtro per nome host è disabilitato. Le statistiche coprono l\'intera proprietà GA4.',
    'manual_html' => '
<hr>
<details style="margin-top:30px;padding:18px;background:#f9f9f9;border:1px solid #e0e0e0;border-radius:8px;">
<summary style="font-size:1.15em;font-weight:600;cursor:pointer;">Configurazione della dashboard Google Analytics</summary>
<div style="margin-top:18px;line-height:1.6;">
<p>Configura l\'ID misurazione GA4, l\'ID proprietà numerico e l\'ID client OAuth Google nella configurazione Analytics.</p>
<p><strong>Filtro nome host:</strong> lascia vuoto questo campo per usare automaticamente il nome host di <code>site_url</code> di Geeklog. Inserisci un nome host per forzare un sito specifico oppure <code>*</code> per visualizzare le statistiche dell\'intera proprietà GA4.</p>
<p>L\'account Google usato per l\'autorizzazione deve avere almeno l\'accesso Visualizzatore alla proprietà GA4 e l\'API Google Analytics Data deve essere abilitata nel progetto Google Cloud associato.</p>
<p>La dashboard usa solo giorni completati: ieri, i 7 giorni completati precedenti e i 30 giorni completati precedenti. I KPI degli utenti attivi vengono richiesti direttamente per ogni periodo completo e non sono calcolati sommando gli utenti giornalieri.</p>
</div>
</details>'
);

?>
