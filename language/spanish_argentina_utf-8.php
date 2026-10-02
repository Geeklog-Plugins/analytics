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
    'install_header' => 'Instalación del plugin analytics',
    'overview' => 'El plugin analytics agrega seguimiento de Google Analytics 4 y un panel de administración.',
    'preinstall_check' => 'analytics tiene los siguientes requisitos:',
    'geeklog_check' => 'Geeklog v2.1.1 o superior; la versión detectada es <b>%s</b>.',
    'php_check' => 'PHP v5.6.0 o superior; la versión detectada es <b>%s</b>.',
    'preinstall_confirm' => 'Para ver todos los detalles del plugin analytics, visitá <a href="https://github.com/Geeklog-Plugins/analytics" target="_blank">GitHub</a>.'
);

$LANG_analytics01 = array(
    'plugin_name' => 'Analytics'
);

$LANG_configsections['analytics'] = array(
    'label' => 'Analytics',
    'title' => 'Configuración de Analytics'
);

$LANG_confignames['analytics'] = array(
    'ga_code' => 'ID de medición de GA4 (p. ej., G-XXXX)',
    'property_id' => 'ID de propiedad de GA4 (numérico)',
    'client_id' => 'ID de cliente OAuth de Google',
    'hostname' => 'Filtro de nombre de host (vacío = automático, * = todos los hosts)'
);

$LANG_configsubgroups['analytics'] = array('sg_main' => 'Configuración principal');
$LANG_tab['analytics'] = array('tab_main' => 'Configuración de Analytics');
$LANG_fs['analytics'] = array('fs_main' => 'Google Analytics 4');

$LANG_analytics_admin = array(
    'setup_required' => 'Google Analytics - Configuración necesaria',
    'setup_req_desc' => 'Configurá un <b>ID de medición de GA4 válido (p. ej., G-XXXX)</b> en la configuración de Geeklog para activar el seguimiento del sitio web.',
    'tracking_active' => 'Google Analytics - Seguimiento activo',
    'tracking_active_desc' => 'Tu sitio web se está siguiendo actualmente con el ID de medición: <b>%s</b>',
    'tracking_active_note' => '<i>Para ver las estadísticas de tráfico en este panel, configurá un <b>ID de propiedad de GA4</b> válido y un <b>ID de cliente OAuth de Google</b>.</i>',
    'dashboard_title' => 'Panel de Google Analytics 4',
    'dashboard_desc' => 'Autorizá el acceso con tu cuenta de Google para obtener estadísticas recientes del sitio.',
    'auth_button' => 'Autorizar acceso a Google Analytics',
    'refresh_button' => 'Actualizar datos (autenticación de Google)',
    'data_wait' => 'Los datos aparecerán acá después de la autorización...',
    'loading_data' => 'Cargando datos desde la API de GA4...',
    'stats_yesterday' => 'Ayer',
    'stats_7days' => 'Últimos 7 días',
    'stats_30days' => 'Últimos 30 días',
    'metric_users' => 'Usuarios activos',
    'metric_views' => 'Vistas de página',
    'cached_data_note' => 'Los datos se cargan actualmente desde la caché local de tu navegador.',
    'cached_date' => 'Última actualización: %s',
    'error' => 'Error:',
    'request_failed' => 'La solicitud falló',
    'dependency_error' => 'No se pudieron cargar Google Identity Services o Chart.js.',
    'permission_error' => 'Acceso denegado. Verificá que esta cuenta de Google tenga acceso a la propiedad de GA4 configurada y que la API de datos de Analytics esté activada.',
    'auth_error' => 'La autorización venció o fue rechazada. Autorizá nuevamente el acceso a Google Analytics.',
    'quota_error' => 'Se alcanzó la cuota de la API de datos de Google Analytics. Intentá de nuevo más tarde.',
    'hostname_filter_active' => 'Las estadísticas están filtradas por nombre de host: <strong>%s</strong>.',
    'hostname_filter_disabled' => 'El filtrado por nombre de host está desactivado. Las estadísticas abarcan toda la propiedad de GA4.',
    'manual_html' => '
<hr>
<details style="margin-top:30px;padding:18px;background:#f9f9f9;border:1px solid #e0e0e0;border-radius:8px;">
<summary style="font-size:1.15em;font-weight:600;cursor:pointer;">Configuración del panel de Google Analytics</summary>
<div style="margin-top:18px;line-height:1.6;">
<p>Configurá el ID de medición de GA4, el ID de propiedad numérico y el ID de cliente OAuth de Google en la configuración de Analytics.</p>
<p><strong>Filtro de nombre de host:</strong> dejá este campo vacío para usar automáticamente el nombre de host de <code>site_url</code> de Geeklog. Ingresá un nombre de host para fijar un sitio específico o <code>*</code> para mostrar las estadísticas de toda la propiedad de GA4.</p>
<p>La cuenta de Google usada para la autorización necesita al menos acceso Viewer a la propiedad de GA4, y la API de datos de Google Analytics debe estar activada en el proyecto de Google Cloud asociado.</p>
<p>El panel usa solamente días completos: ayer, los 7 días completos anteriores y los 30 días completos anteriores. Los KPI de usuarios activos se solicitan directamente para cada período completo y no se calculan sumando usuarios diarios.</p>
</div>
</details>'
);

?>
