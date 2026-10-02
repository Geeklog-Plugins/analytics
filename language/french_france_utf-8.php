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
    'install_header' => 'Installation du plugin analytics',
    'overview' => 'Le plugin analytics ajoute le suivi Google Analytics 4 et un tableau de bord d’administration.',
    'preinstall_check' => 'analytics a les prérequis suivants :',
    'geeklog_check' => 'Geeklog v2.1.1 ou version ultérieure ; la version détectée est <b>%s</b>.',
    'php_check' => 'PHP v5.6.0 ou version ultérieure ; la version détectée est <b>%s</b>.',
    'preinstall_confirm' => 'Pour tous les détails sur le plugin analytics, consultez <a href="https://github.com/Geeklog-Plugins/analytics" target="_blank">GitHub</a>.'
);

$LANG_analytics01 = array(
    'plugin_name' => 'Analytics'
);

$LANG_configsections['analytics'] = array(
    'label' => 'Analytics',
    'title' => 'Configuration d’Analytics'
);

$LANG_confignames['analytics'] = array(
    'ga_code' => 'ID de mesure GA4 (ex. G-XXXX)',
    'property_id' => 'ID de propriété GA4 (numérique)',
    'client_id' => 'ID client Google OAuth',
    'hostname' => 'Filtre du nom d’hôte (vide = auto, * = tous les hôtes)'
);

$LANG_configsubgroups['analytics'] = array('sg_main' => 'Paramètres principaux');
$LANG_tab['analytics'] = array('tab_main' => 'Paramètres Analytics');
$LANG_fs['analytics'] = array('fs_main' => 'Google Analytics 4');

$LANG_analytics_admin = array(
    'setup_required' => 'Google Analytics - Configuration requise',
    'setup_req_desc' => 'Configurez un <b>ID de mesure GA4 valide (ex. G-XXXX)</b> dans la configuration de Geeklog pour activer le suivi du site.',
    'tracking_active' => 'Google Analytics - Suivi actif',
    'tracking_active_desc' => 'Votre site est actuellement suivi avec l’ID de mesure : <b>%s</b>',
    'tracking_active_note' => '<i>Pour afficher les statistiques de trafic dans ce tableau de bord, configurez un <b>ID de propriété GA4</b> valide et un <b>ID client Google OAuth</b>.</i>',
    'dashboard_title' => 'Tableau de bord Google Analytics 4',
    'dashboard_desc' => 'Autorisez l’accès avec votre compte Google pour récupérer les statistiques récentes du site.',
    'auth_button' => 'Autoriser l’accès à Google Analytics',
    'refresh_button' => 'Actualiser les données (authentification Google)',
    'data_wait' => 'Les données s’afficheront ici après l’autorisation...',
    'loading_data' => 'Chargement des données depuis l’API GA4...',
    'stats_yesterday' => 'Hier',
    'stats_7days' => '7 derniers jours',
    'stats_30days' => '30 derniers jours',
    'metric_users' => 'Utilisateurs actifs',
    'metric_views' => 'Pages vues',
    'cached_data_note' => 'Les données sont actuellement chargées depuis le cache local de votre navigateur.',
    'cached_date' => 'Dernière mise à jour : %s',
    'error' => 'Erreur :',
    'request_failed' => 'La requête a échoué',
    'dependency_error' => 'Google Identity Services ou Chart.js n’a pas pu être chargé.',
    'permission_error' => 'Accès refusé. Vérifiez que ce compte Google a accès à la propriété GA4 configurée et que l’API Analytics Data est activée.',
    'auth_error' => 'L’autorisation a expiré ou a été refusée. Autorisez à nouveau l’accès à Google Analytics.',
    'quota_error' => 'Le quota de l’API Google Analytics Data a été atteint. Réessayez plus tard.',
    'hostname_filter_active' => 'Les statistiques sont filtrées pour le nom d’hôte : <strong>%s</strong>.',
    'hostname_filter_disabled' => 'Le filtrage par nom d’hôte est désactivé. Les statistiques couvrent l’ensemble de la propriété GA4.',
    'manual_html' => '
<hr>
<details style="margin-top:30px;padding:18px;background:#f9f9f9;border:1px solid #e0e0e0;border-radius:8px;">
<summary style="font-size:1.15em;font-weight:600;cursor:pointer;">Configuration du tableau de bord Google Analytics</summary>
<div style="margin-top:18px;line-height:1.6;">
<p>Configurez l’ID de mesure GA4, l’ID de propriété numérique et l’ID client Google OAuth dans la configuration Analytics.</p>
<p><strong>Filtre du nom d’hôte :</strong> laissez ce champ vide pour utiliser automatiquement le nom d’hôte provenant de <code>site_url</code> de Geeklog. Saisissez un nom d’hôte pour imposer un site précis ou saisissez <code>*</code> pour afficher les statistiques de l’ensemble de la propriété GA4.</p>
<p>Le compte Google utilisé pour l’autorisation doit disposer au minimum d’un accès Viewer à la propriété GA4, et l’API Google Analytics Data doit être activée dans le projet Google Cloud associé.</p>
<p>Le tableau de bord utilise uniquement des journées complètes : hier, les 7 journées complètes précédentes et les 30 journées complètes précédentes. Les KPI des utilisateurs actifs sont demandés directement pour chaque période complète et ne sont pas calculés en additionnant les utilisateurs quotidiens.</p>
</div>
</details>'
);

?>
