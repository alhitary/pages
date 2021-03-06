<?php
/**
*
* Pages extension for the phpBB Forum Software package.
* French translation by ForumsFaciles (www.forumsfaciles.fr)
*
* @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	// Manage page
	'ACP_PAGES_MANAGE'					=> 'Gestion des Pages',
	'ACP_PAGES_MANAGE_EXPLAIN'			=> 'Depuis cette page vous pouvez ajouter, modifier et supprimer des pages personnalisées.',
	'ACP_PAGES_CREATE_PAGE'				=> 'Créer une page',
	'ACP_PAGES_CREATE_PAGE_EXPLAIN'		=> 'Grâce au formulaire ci-dessous, vous pouvez ajouter une nouvelle page personnalisée pour votre forum.',
	'ACP_PAGES_EDIT_PAGE'				=> 'Modifier une page',
	'ACP_PAGES_EDIT_PAGE_EXPLAIN'		=> 'Grâce au formulaire ci-dessous, vous pouvez modifier une page personnalisée existante pour votre forum.',

	// Display pages list
	'ACP_PAGES_TITLE'					=> 'Titre',
	'ACP_PAGES_DESCRIPTION'				=> 'Description',
	'ACP_PAGES_ROUTE'					=> 'Chemin',
	'ACP_PAGES_TEMPLATE'				=> 'Template',
	'ACP_PAGES_ORDER'					=> 'Ordre',
	'ACP_PAGES_LINK'					=> 'Lien',
	'ACP_PAGES_VIEW'					=> 'Voir la page',
	'ACP_PAGES_STATUS'					=> 'Statut',
	'ACP_PAGES_PUBLISHED'				=> 'Publiée',
	'ACP_PAGES_PUBLISHED_NO_GUEST'		=> 'Publiée (membres uniquement)',
	'ACP_PAGES_PRIVATE'					=> 'Privée',
	'ACP_PAGES_EMPTY'					=> 'Aucune page trouvée',

	// Purge icons
	'ACP_PAGES_PURGE_ICONS'				=> 'Purger les icônes',
	'ACP_PAGES_PURGE_ICONS_LABEL'		=> 'Purger les icônes du cache des pages',
	'ACP_PAGES_PURGE_ICONS_EXPLAIN'		=> 'Lorsque vous ajoutez des icônes au lien de la page personnalisée, vous devez purger le cache des icônes pour voir les nouveaux icônes apparaître. Placez des icônes personnalisés nommés <samp>pages_route.gif</samp>, où <samp>route</samp> est le chemin de la page dans les dossiers <samp>styles/*/theme/images/</samp> de phpBB.',

	// Messages shown to user
	'ACP_PAGES_DELETE_CONFIRM'			=> 'Êtes-vous certain que vous souhaitez supprimer cette page ?',
	'ACP_PAGES_DELETE_SUCCESS'			=> 'Page supprimée avec succès.',
	'ACP_PAGES_DELETE_ERRORED'			=> 'La page n’a pas pu être supprimée.',
	'ACP_PAGES_ADD_SUCCESS'				=> 'Page ajoutée avec succès.',
	'ACP_PAGES_EDIT_SUCCESS'			=> 'Page mise à jour avec succès.',

	// Add/edit page
	'ACP_PAGES_SETTINGS'				=> 'Paramètres de la page',
	'ACP_PAGES_OPTIONS'					=> 'Options de la page',
	'ACP_PAGES_FORM_TITLE'				=> 'Titre de la page',
	'ACP_PAGES_FORM_TITLE_EXPLAIN'		=> 'Ce champ est obligatoire.',
	'ACP_PAGES_FORM_DESC'				=> 'Description de la page',
	'ACP_PAGES_FORM_DESC_EXPLAIN'		=> 'Ceci ne sera affiché que dans la liste des pages dans le PCA.',
	'ACP_PAGES_FORM_ROUTE'				=> 'Chemin de la page',
	'ACP_PAGES_FORM_ROUTE_EXPLAIN'		=> 'Le <strong>chemin</strong> est un identifiant unique utilisé à la fin de l’URL d’une page pour en définir le lien vers cette dernière. Ex. <samp>phpBB/page/<strong>chemin</strong></samp>. Seuls sont autorisés les lettres, chiffres, traits d’union et underscores. Ce champ est obligatoire.',
	'ACP_PAGES_FORM_CONTENT'			=> 'Contenu de la page',
	'ACP_PAGES_FORM_CONTENT_EXPLAIN'	=> 'Le contenu peut être créé en faisant usage des BBCodes normaux de phpBB, les smilies et les URL magiques ou bien en activant le mode HTML. Avec le mode HTML, les BBCodes, smilies et URL magiques ne fonctionneront pas, mais vous pouvez utiliser toute syntaxe HTML valide. Veuillez prendre note que ce contenu sera intégré dans un template HTML existant. Ainsi, nul besoin d’insérer les tags DOCTYPE, HTML, BODY ou HEAD. Néanmoins, tous les autres tags de mise en forme, incluant IFRAME, SCRIPT, STYLE, EMBED, VIDEO, etc. peuvent être utilisés.',
	'ACP_PAGES_FORM_TEMPLATE'			=> 'Template de la page',
	'ACP_PAGES_FORM_TEMPLATE_EXPLAIN'	=> 'Des templates de page personnalisés, nommés <samp>pages_*.html</samp> peuvent être ajoutés dans les dossiers <samp>styles/*/template</samp> de phpBB.',
	'ACP_PAGES_FORM_TEMPLATE_SELECT'	=> 'Sélectionner un template',
	'ACP_PAGES_FORM_ORDER'				=> 'Ordre de la page',
	'ACP_PAGES_FORM_ORDER_EXPLAIN'		=> 'Les pages seront triées selon ce champ, permettant ainsi d’aider à organiser l’ordre dans lequel vous souhaitez que leurs liens apparaissent. Les nombres les plus petits seront affichés avant les grands nombres.',
	'ACP_PAGES_FORM_LINKS'				=> 'Emplacements pour le lien de la page',
	'ACP_PAGES_FORM_LINKS_EXPLAIN'		=> 'Sélectionnez un/plusieurs endroits où le lien de cette page apparaîtra. Utilisez CTRL+CLICK (ou CMD+CLICK sur Mac) pour (dé)sélectionner plus d’un item.',
	'ACP_PAGES_FORM_DISPLAY'			=> 'Afficher la page',
	'ACP_PAGES_FORM_DISPLAY_EXPLAIN'	=> 'Si défini sur non, la page ne sera pas accessible. (Note: les administrateurs auront encore accès à la page, leur permettant d’en avoir un aperçu pendant qu’ils la préparent)',
	'ACP_PAGES_FORM_GUESTS'				=> 'Afficher la page aux invités',
	'ACP_PAGES_FORM_GUESTS_EXPLAIN'		=> 'Si défini sur non, seuls les utiliateurs enregistrés pourront accéder à la page.',
	'ACP_PAGES_FORM_VIEW_PAGE'			=> 'Lien de la page',
	'PARSE_HTML'						=> 'Parser le HTML',

	// Page link location names
	'NAV_BAR_LINKS_BEFORE'				=> 'Barre de navigation avant les liens',
	'NAV_BAR_LINKS_AFTER'				=> 'Barre de navigation après les liens',
	'NAV_BAR_CRUMBS_BEFORE'				=> 'Barre de navigation avant le fil d’ariane',
	'NAV_BAR_CRUMBS_AFTER'				=> 'Barre de navigation après le fil d’ariane',
	'FOOTER_TIMEZONE_BEFORE'			=> 'Pied de page avant le fuseau horaire',
	'FOOTER_TIMEZONE_AFTER'				=> 'Pied de page après le fuseau horaire',
	'FOOTER_TEAMS_BEFORE'				=> 'Pied de page avant le lien de l’Equipe',
	'FOOTER_TEAMS_AFTER'				=> 'Pied de page après le lien de l’Equipe',
	'QUICK_LINK_MENU_BEFORE'			=> 'En haut du menu "accès rapide"',
	'QUICK_LINK_MENU_AFTER'				=> 'En bas du menu "accès rapide"',
));
