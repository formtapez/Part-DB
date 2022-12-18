<?php
/*
    part-db version 0.1
    Copyright (C) 2005 Christoph Lechner
    http://www.cl-projects.de/

    part-db version 0.2+
    Copyright (C) 2009 K. Jacobs and others (see authors.php)
    http://code.google.com/p/part-db/

    This program is free software; you can redistribute it and/or
    modify it under the terms of the GNU General Public License
    as published by the Free Software Foundation; either version 2
    of the License, or (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA
*/

/********************************************************************************
 *
 *   ATTENTION!
 *       - Do not edit this file!
 *       - Do not copy this file to data/config.php!
 *       - Use the installer for creating your config.php!
 *
 *********************************************************************************/

/********************************************************************************
 *
 *   Below, there are attributes which will be stored in the user's "config.php".
 *   They are only used until the save_config() function is executed for first time.
 *   This is normally done during/after the installation process.
 *
 *   Please Note:
 *       For boolean variables, you should always give a variable name, that
 *       you can answer it with 'false' in the default value.
 *       Example:    Use "disable_footprints" instead of "enable_footprints",
 *                   because the default is "disable_footprints == false".
 *       Reason:     If a config variable is undefined, the default value
 *                   will be used automatically.
 *
 *********************************************************************************/

// the version of the user's config.php. If this version is lower than $config['system']['current_config_version'] (see below),
// the user's config.php must be updated (see updates/config_update_steps.php)
$config['system']['current_config_version']             = 0; // do not change this!! Zero means "a version before 0.3.0 RC1"

// database settings
$config['db']['type']                                   = 'mysql';
$config['db']['host']                                   = 'localhost';
$config['db']['name']                                   = '';
$config['db']['user']                                   = '';
$config['db']['password']                               = '';
$config['db']['charset']                                = 'utf8'; ///< @todo THIS IS NOT USED AT THE MOMENT (hardcoded to "uft8" in Database.php)!! Do we need this parameter?!?!
$config['db']['auto_update']                            = false;
$config['db']['backup']['name']                         = ''; // If you use an external database backup system, set here "MySQLDumper" for example
$config['db']['backup']['url']                          = ''; // the link to the database backup system, e.g. "../mysqldumper/"
$config['db']['update_error']['version']                = -1; // Momerize the database version in case of an error (see Database::update())
$config['db']['update_error']['next_step']              = 0; // Momerize the position of the update step in case of an error (see Database::update())
$config['db']['limit']['search_parts']                  = 200; // Limits the number of search results
$config['db']['space_fix']                              = false; //Add a space between mysql: and host= in the PDO dsn string. This maybe helps connecting to an external DB. See: http://stackoverflow.com/a/25432156

// html/template settings
$config['html']['http_charset']                         = 'utf-8'; ///< @todo remove this parameter completely, I think we don't need it! temporary hardcoded in start_session.php
$config['html']['theme']                                = 'nextgen';
$config['html']['custom_css']                           = '';

// system update settings
$config['update']['type']                               = 'stable';

// startup page settings
$config['startup']['custom_banner']                     = '';
$config['startup']['disable_update_list']               = false;
$config['startup']['disable_search_warning']            = false;        //Use this, to disable the panel on startup.php, which asks to create at least one category, manufacturer, supplier, etc...

// devices settings
$config['devices']['disable']                           = false;

// footprints settings
$config['footprints']['disable']                        = false;

// manufacturers settings
$config['manufacturers']['disable']                     = false;

// automatic datasheets settings ("automatic datasheets" means auto-created links to datasheetcatalog.net and so on)
$config['auto_datasheets']['disable']                   = false;

$config['suppliers']['disable']                         = false;

// tools settings
$config['tools']['footprints']['autoload']              = false; // If true, all footprint pictures will be listed automatically (default value is "false" because of the long time for loading)

// navigation menu settings
$config['menu']['disable_help']                         = false; // help
$config['menu']['disable_config']                       = false; // system
$config['menu']['enable_debug']                         = false; // system -> debugging
$config['menu']['disable_labels']                       = false; // tools -> labels
$config['menu']['disable_calculator']                   = false; // tools -> calculator
$config['menu']['disable_iclogos']                      = false; // tools -> iclogos
$config['menu']['disable_footprints']                   = false; // tools -> footprints

// popup settings
$config['popup']['modal']                               = true;
$config['popup']['width']                               = 1000;
$config['popup']['height']                              = 800;

// debug settings
$config['debug']['enable']                              = false;
$config['debug']['debugbar']                            = false;
$config['debug']['debugbar_db']                         = false;  //Activate this option, if you want to show all DB requests in the DebugBar.
$config['debug']['template_debugging_enable']           = false;
$config['debug']['request_debugging_enable']            = false;

// admin settings
//$config['admin']['password']                            = null; // NULL means "not yet initialized" (important for "install.php")
$config['admin']['tmp_password']                        = null;

// installation complete steps (can also be used for updates, for example if a user input is needed for an update)
// if at least one of them is 'false', the installer will be shown automatically
$config['installation_complete']['locales']             = false;
$config['installation_complete']['admin_password']      = false;
$config['installation_complete']['database']            = false;
$config['installation_complete']['db_backup_path']      = false;

// miscellaneous settings
$config['timezone']                                     = 'Europe/Berlin';
$config['language']                                     = 'en_US';
$config['is_online_demo']                               = false; // disables some (safety-)critical features
$config['developer_mode']                               = false; // enables the "Debug-Tools" menu
$config['page_title']                                   = _('Part-DB Elektronische Bauteile-Datenbank'); //Dont use this anymore, use partdb_title instead
$config['partdb_title']                                 = 'Part-DB';
$config['tracking_code']                                = "";   //Allows to inject some HTML on the footer (e.g. for usage of google analytics)
$config['allow_server_downloads']                       = false; //Allow the user to download files via the server. Caution: This maybe could be used, to access internal servers.

// Settings for design
$config['design']['use_smarty']                         = true;

// Settings for 3d footprints
$config['foot3d']['active']                       = false;
$config['foot3d']['show_info']                    = true;

//Appearance settings
$config['appearance']['use_old_datasheet_icons']    = false;
$config['appearance']['short_description_length']   = 200;
$config['appearance']['short_description']          = true;
$config['other_panel']['collapsed']                 = false;
$config['other_panel']['position']                  = "top";

//part info settings
$config['part_info']['hide_actions']                = false;    //Hide actions panel
$config['part_info']['hide_empty_attachements']     = false;    //Hide empty attachements panel
$config['part_info']['hide_empty_orderdetails']     = false;    //Hide empty orderdetails panel

//Properties settings
$config['properties']['active']                  = false;

$config['edit_parts']['created_go_to_info']      = false;    //Jump to info page of a part, if a new part was created
$config['edit_parts']['saved_go_to_info']        = false;    //Jump to info page of a part, if part was edited and saved.

//Table settings
$config['table']['autosort']                     = false;
$config['table']['default_show_subcategories']   = true;    //Show the subcategories in show_category_parts on default.
$config['table']['default_limit']                = 50;
$config['table']['full_paths']                   = false;
$config['table']['instock_warning_full_row_color'] = false;  //Color the whole line red, if a less instock than mininstock

//Search settings
$config['search']['livesearch']                  = true;
$config['search']['highlighting']                = true;

//Attachements settings
$config['attachements']['folder_structure']     = false;    //Put attachements in a folder structure, similar to the categories.
$config['attachements']['download_default']     = false;    //Download external media defaultly.
$config['attachements']['show_name']            = false;    //Show the names of attachements in the parts tables.

//Global user settings
$config['user']['avatars']['use_gravatar']      = false;     //Use Gravatar for Avatars
$config['user']['redirect_to_login']            = true;      //Redirect to login page, if a user does not has any permission (only if he accessed start page).
$config['user']['gc_maxlifetime']               = 5400;      //5400 sec = 90min

//Cookie consent info
$config['cookie_consent']['enable']             = false;     //Set to true to activate cookie consent dialog
$config['cookie_consent']['message']            = "This website uses cookies to ensure you get the best experience on our website.";
$config['cookie_consent']['link_text']          = "Learn more";
$config['cookie_consent']['button_text']        = "Got it!";
$config['cookie_consent']['link_href']          = "https://cookiesandyou.com/";

$config['logging_system']['ip_anonymize_mask_ipv4']  = "255.255.255.0";  //The mask that should be used to anonymize ip addresses. Set to "" to log the complete IP address (this is not GPDR compliant)
$config['logging_system']['ip_anonymize_mask_ipv6']  = "ffff:ffff:ffff:ffff:0000:0000:0000:0000";
$config['logging_system']['min_level']               = 7;           //Set the minimum level of events which should be logged. 7 = DEBUG, all things are logged, Set to -1 to disable logging completly.

/********************************************************************************
 *
 *   Below, there are attributes which we don't want to save in the user's "config.php".
 *   (This is done by the two code lines below this comment:) */

$config_defaults = $config; // we need the default values in lib/lib.php/save_config()
$manual_config = array();   // ...this too...

/*   If you explicity want to use other values in your installation, you have to copy the
 *   lines you want to redefine into your "config.php", and replace "$config" with "$manual_config".
 *
 *   If you miss an attribute, like a language or money format, please contact us.
 *   Then we could add the new attribute to Part-DB, for all users of Part-DB.
 *
 *   For Developers: Attention!!
 *       If you change here something, the change will take affect for all users of Part-DB!
 *       New options are no problem, but if you change or remove some things, it can make trouble!
 *       So, be carefully with changes in this section.
 *
 *   Legend:
 *       (*)     The order in the array is the same as the order in the dropdown-lists,
 *               so the default value should be defined first.
 *
 *********************************************************************************/

// system version: this must be increased for every release(-candidate)!
// IMPORTANT: please note that (for example) "0.3.0" is a HIGHER (!) version than "0.3.0.RC5".
$config['system']['version']                            = '0.5.13';  // examples: '0.2.2' or '0.2.2.RC2' (see SystemVersion.php)

// the version of the latest config style. Increase this for one if we need an update for the user's config.php (see also updates/config_update_steps.php)
$config['system']['latest_config_version']              = 2; // only increase for one!

// minimum requirements of the system (PHP, PHP Modules, Apache, ...) [used in "install.php"]
$config['requirements']['php_version']                  = '5.4.0';
$config['requirements']['pdo']                          = true; // PDO must be installed

// HTTP charsets* (the key is used for the HTML header, the value is only used for displaying)
$config['http_charsets']['utf-8']                       = 'UTF-8 Unicode';
//$config['http_charsets']['ISO-8859-1']                  = 'ISO-8859-1'; ///< @todo remove the choice of the http charset!

// database types* (the key is used for the class "Database", the value is only used for displaying)
$config['db_types']['mysql']                            = 'MySQL';
//$config['db_types']['sqlite']                           = 'SQLite 3';

// database charsets* (the key is used for the class "Database", the value is only used for displaying)
$config['db_charsets']['utf8']                          = 'UTF-8 Unicode (utf8)';
//$config['db_charsets']['latin2']                        = 'ISO 8859-2 Central European (latin2)';
//$config['db_charsets']['cp1250']                        = 'Windows Central European (cp1250)';
//$config['db_charsets']['macce']                         = 'Mac Central European (macce)';

// languages (the key is used for "setlocale()", the value is only used for displaying)
//$config['languages']['POSIX']                           = '[POSIX] C-Standard';  //Disabled, because it caused some bugs with Slim... Enable only when needed.
$config['languages']['de_AT']                           = '[de_AT] Deutsch (Österreich)';
$config['languages']['de_BE']                           = '[de_BE] Deutsch (Belgien)';
$config['languages']['de_CH']                           = '[de_CH] Deutsch (Schweiz)';
$config['languages']['de_DE']                           = '[de_DE] Deutsch (Deutschland)';
$config['languages']['de_LI']                           = '[de_LI] Deutsch (Liechtenstein)';
$config['languages']['de_LU']                           = '[de_LU] Deutsch (Luxemburg)';
$config['languages']['en_GB']                           = '[en_GB] English (United Kingdom)';
$config['languages']['en_US']                           = '[en_US] English (United States)';




// table settings
// available columns:       hover_picture,id,name,description,name_description,comment,instock,mininstock,instock_mininstock,category,footprint,manufacturer,
//                          storelocation, suppliers,datasheets,button_increment,button_decrement,average_single_price,single_prices,supplier_partnrs,attachements
$config['table']['category_parts']['columns']           = 'hover_picture;name;description;instock;mininstock;footprint;storelocation;datasheets;attachements;button_decrement;button_increment;button_edit';
//$config['table']['search_parts']['columns']             = 'hover_picture;name;description;instock_mininstock;footprint;storelocation;suppliers;supplier_partnrs;single_prices;datasheets;attachements;button_decrement;button_increment';
$config['table']['search_parts']['columns']             = 'hover_picture;name;description;instock_mininstock;footprint;storelocation;suppliers;supplier_partnrs;single_prices;datasheets;button_decrement;button_increment;button_edit';
$config['table']['search_parts_category']['columns']    = 'hover_picture;name;description;category;instock_mininstock;footprint;storelocation;suppliers;supplier_partnrs;datasheets;button_decrement;button_increment;button_edit';
$config['table']['obsolete_parts']['columns']           = 'hover_picture;name;description;instock_mininstock;footprint;storelocation;suppliers;supplier_partnrs;single_prices';
$config['table']['noprice_parts']['columns']            = 'hover_picture;name;description;instock_mininstock;footprint;storelocation;suppliers;supplier_partnrs;button_edit';
$config['table']['unknown_instock_parts']['columns']    = 'hover_picture;name;description;mininstock;footprint;storelocation;suppliers;supplier_partnrs;button_edit';
$config['table']['order_parts']['columns']              = 'hover_picture;name_description;instock_mininstock;footprint;storelocation;suppliers_radiobuttons;supplier_partnrs;single_prices;total_prices;order_quantity_edit;order_options';
$config['table']['searched_device_parts']['columns']    = 'hover_picture;quantity_edit;mountnames_edit;name;description;instock_mininstock;category;footprint;storelocation';
$config['table']['device_parts']['columns']             = 'hover_picture;name_description;quantity_edit;mountnames_edit;footprint;instock;storelocation;suppliers;supplier_partnrs;single_prices;total_prices';
$config['table']['imported_parts']['columns']           = 'hover_picture;name;description;instock_mininstock;footprint;storelocation;suppliers;supplier_partnrs;single_prices;datasheets;attachements';
$config['table']['location_parts']['columns']           = 'hover_picture;name;description;category;instock;mininstock;footprint;storelocation;datasheets;attachements;button_decrement;button_increment;button_edit';
$config['table']['footprint_parts']['columns']          = 'hover_picture;name;description;category;instock;mininstock;footprint;storelocation;datasheets;attachements;button_decrement;button_increment;button_edit';
$config['table']['manufacturer_parts']['columns']       = 'hover_picture;name;description;category;instock;mininstock;footprint;storelocation;datasheets;attachements;button_decrement;button_increment;button_edit';
$config['table']['supplier_parts']['columns']           = 'hover_picture;name;description;category;instock_mininstock;storelocation;supplier_partnrs;single_prices;button_decrement;button_increment;button_edit';
$config['table']['all_parts']['columns']                = 'hover_picture;name;description;category;instock;mininstock;footprint;storelocation;button_edit';
$config['table']['last_modified_parts']['columns']            = 'hover_picture;name;description;category;instock;mininstock;footprint;storelocation;last_modified;created;button_edit';

// export configurations for order parts*
$config['export']['orderparts'][0]['format']            = 'CSV';
$config['export']['orderparts'][0]['name']              = _('Standard 1 (mit den jeweils markierten Lieferanten)');
$config['export']['orderparts'][0]['separator']         = ';';
$config['export']['orderparts'][0]['header']            = true;
$config['export']['orderparts'][0]['mimetype']          = 'text/csv';
$config['export']['orderparts'][0]['columns']           = 'name;description;instock;mininstock;footprint;storelocation;order_supplier;order_supplierpartnr;order_quantity;order_single_price;order_total_price';

$config['export']['orderparts'][1]['format']            = 'CSV';
$config['export']['orderparts'][1]['name']              = _('Standard 2 (alle Teile mit allen Lieferanten)');
$config['export']['orderparts'][1]['separator']         = ';';
$config['export']['orderparts'][1]['header']            = true;
$config['export']['orderparts'][1]['mimetype']          = 'text/csv';
$config['export']['orderparts'][1]['columns']           = 'name;description;instock;mininstock;footprint;storelocation;suppliers;supplierpartnrs;order_quantity;single_prices;order_total_prices';

$config['export']['orderparts'][2]['format']            = 'CSV';
$config['export']['orderparts'][2]['name']              = _('Distrelec Online-Bestellung');
$config['export']['orderparts'][2]['separator']         = ',';
$config['export']['orderparts'][2]['header']            = false;
$config['export']['orderparts'][2]['mimetype']          = 'text/csv';
$config['export']['orderparts'][2]['columns']           = 'order_quantity;order_supplierpartnr;'; // the last column is empty

$config['export']['orderparts'][3]['format']            = 'XML';
$config['export']['orderparts'][3]['name']              = _('Standard 1 (mit den jeweils markierten Lieferanten)');
$config['export']['orderparts'][3]['mimetype']          = 'text/xml';
$config['export']['orderparts'][3]['columns']           = 'name;description;instock;mininstock;footprint;storelocation;order_supplier;order_supplierpartnr;order_quantity;order_single_price;order_total_price';

$config['export']['orderparts'][4]['format']            = 'XML';
$config['export']['orderparts'][4]['name']              = _('Standard 2 (alle Teile mit allen Lieferanten)');
$config['export']['orderparts'][4]['mimetype']          = 'text/xml';
$config['export']['orderparts'][4]['columns']           = 'name;description;instock;mininstock;footprint;storelocation;suppliers;supplierpartnrs;order_quantity;single_prices;order_total_prices';
// IMPORTANT: If you add your own export formats to your config.php, use letters instead of numbers as array indexes!! e.g. $config['export']['orderparts']['A']['format'] = 'foo';

// export configurations for device parts*
$config['export']['deviceparts'][0]['format']           = 'CSV';
$config['export']['deviceparts'][0]['name']             = 'Standard';
$config['export']['deviceparts'][0]['separator']        = ';';
$config['export']['deviceparts'][0]['header']           = true;
$config['export']['deviceparts'][0]['mimetype']         = 'text/csv';
$config['export']['deviceparts'][0]['columns']          = 'name;description;footprint;total_mount_quantity;instock;storelocation;suppliers;supplierpartnrs;single_prices;total_prices';

$config['export']['deviceparts'][1]['format']           = 'XML';
$config['export']['deviceparts'][1]['name']             = 'Standard';
$config['export']['deviceparts'][1]['mimetype']         = 'text/xml';
$config['export']['deviceparts'][1]['columns']          = 'name;description;footprint;total_mount_quantity;instock;storelocation;suppliers;supplierpartnrs;single_prices;total_prices';
// IMPORTANT: If you add your own export formats to your config.php, use letters instead of numbers as array indexes!! e.g. $config['export']['orderparts']['A']['format'] = 'foo';

// export configurations for searched parts*
$config['export']['searchparts'][0]['format']            = 'CSV';
$config['export']['searchparts'][0]['name']              = 'Standard';
$config['export']['searchparts'][0]['separator']         = ';';
$config['export']['searchparts'][0]['header']            = true;
$config['export']['searchparts'][0]['mimetype']          = 'text/csv';
$config['export']['searchparts'][0]['columns']           = 'name;description;instock;footprint;storelocation;suppliers;supplierpartnrs;single_prices';

$config['export']['searchparts'][1]['format']            = 'XML';
$config['export']['searchparts'][1]['name']              = 'Standard';
$config['export']['searchparts'][1]['mimetype']          = 'text/xml';
$config['export']['searchparts'][1]['columns']           = 'name;description;instock;footprint;storelocation;suppliers;supplierpartnrs;single_prices';

//export configuration for show_* parts
// export configurations for searched parts*
$config['export']['showparts'][0]['format']            = 'CSV';
$config['export']['showparts'][0]['name']              = 'Standard';
$config['export']['showparts'][0]['separator']         = ';';
$config['export']['showparts'][0]['header']            = true;
$config['export']['showparts'][0]['mimetype']          = 'text/csv';
$config['export']['showparts'][0]['columns']           = 'name;description;instock;footprint;storelocation;suppliers;supplierpartnrs;single_prices';

$config['export']['showparts'][1]['format']            = 'XML';
$config['export']['showparts'][1]['name']              = 'Standard';
$config['export']['showparts'][1]['mimetype']          = 'text/xml';
$config['export']['showparts'][1]['columns']           = 'name;description;instock;footprint;storelocation;suppliers;supplierpartnrs;single_prices';

// IMPORTANT: If you add your own export formats to your config.php, use letters instead of numbers as array indexes!! e.g. $config['export']['orderparts']['A']['format'] = 'foo';

// automatic datasheets settings
$config['auto_datasheets']['entries'][0]['name']        = 'alldatasheet.com';
$config['auto_datasheets']['entries'][0]['url']         = 'http://www.alldatasheet.com/view.jsp?Searchword=%%PARTNAME%%';
$config['auto_datasheets']['entries'][0]['image'] = 'img/partdb/file_all.svg';
$config['auto_datasheets']['entries'][0]['old_image']   = 'img/partdb/alldatasheet.png';
$config['auto_datasheets']['entries'][1]['name']        = 'reichelt.de';
$config['auto_datasheets']['entries'][1]['image']       = 'img/partdb/file_reichelt.svg';
$config['auto_datasheets']['entries'][1]['old_image']   = 'img/partdb/reichelt.png';
$config['auto_datasheets']['entries'][1]['url']         = 'https://www.reichelt.de/index.html?ACTION=446&SEARCH=%%PARTNAME%%';
$config['auto_datasheets']['entries'][2]['name']        = 'datasheetcatalog.net';
$config['auto_datasheets']['entries'][2]['url']         = 'http://search.datasheetcatalog.net/key/%%PARTNAME%%';
$config['auto_datasheets']['entries'][2]['image']       = 'img/partdb/file_dc.svg';
$config['auto_datasheets']['entries'][2]['old_image']   = 'img/partdb/dc.png';
$config['auto_datasheets']['entries'][3]['name']        = 'google.com';
$config['auto_datasheets']['entries'][3]['url']         = 'https://www.google.com/search?q=%%PARTNAME%%';
$config['auto_datasheets']['entries'][3]['image']       = 'img/partdb/file_google.svg';
$config['auto_datasheets']['entries'][4]['name']        = 'octopart.com';
$config['auto_datasheets']['entries'][4]['url']         = 'https://octopart.com/search?q=%%PARTNAME%%';
$config['auto_datasheets']['entries'][4]['image']       = 'img/partdb/file_octo.svg';


// IMPORTANT: If you add your own export formats to your config.php, use letters instead of numbers as array indexes!! e.g. $config['auto_datasheets']['entries']['A']['name'] = 'foo';
