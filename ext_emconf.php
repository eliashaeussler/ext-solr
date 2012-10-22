<?php

########################################################################
# Extension Manager/Repository config file for ext "solr".
#
# Auto generated 20-07-2012 18:57
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Apache Solr for TYPO3',
	'description' => 'Apache Solr for TYPO3 is the enterprise search engine you were looking for with special features such as Facetted Search or Synonym Support and incredibly fast response times of results within milliseconds.',
	'category' => 'plugin',
	'author' => 'Ingo Renner',
	'author_email' => 'ingo@typo3.org',
	'shy' => '',
	'dependencies' => 'pagebrowse,scheduler',
	'conflicts' => '',
	'priority' => '',
	'module' => 'mod_admin',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => 'dkd Internet Service GmbH',
	'version' => '2.8.0-dev',
	'constraints' => array(
		'depends' => array(
			'pagebrowse' => '',
			'scheduler' => '',
			'php' => '5.2.0-0.0.0',
			'typo3' => '4.5.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
			'devlog' => '',
		),
	),
	'_md5_values_when_last_written' => 'a:405:{s:9:"ChangeLog";s:4:"b911";s:16:"ext_autoload.php";s:4:"16fc";s:12:"ext_icon.gif";s:4:"11e4";s:17:"ext_localconf.php";s:4:"8dcb";s:14:"ext_tables.php";s:4:"3ead";s:14:"ext_tables.sql";s:4:"7305";s:13:"locallang.xml";s:4:"752c";s:16:"locallang_db.xml";s:4:"3d23";s:49:"classes/class.tx_solr_additionalfieldsindexer.php";s:4:"cf29";s:29:"classes/class.tx_solr_api.php";s:4:"15d0";s:41:"classes/class.tx_solr_commandresolver.php";s:4:"ce8c";s:43:"classes/class.tx_solr_connectionmanager.php";s:4:"a046";s:53:"classes/class.tx_solr_contextmenuactioncontroller.php";s:4:"81b0";s:42:"classes/class.tx_solr_garbagecollector.php";s:4:"6272";s:46:"classes/class.tx_solr_htmlcontentextractor.php";s:4:"b656";s:43:"classes/class.tx_solr_javascriptmanager.php";s:4:"0379";s:58:"classes/class.tx_solr_languagefileunavailableexception.php";s:4:"051f";s:56:"classes/class.tx_solr_nosolrconnectionfoundexception.php";s:4:"58e2";s:31:"classes/class.tx_solr_query.php";s:4:"ecff";s:32:"classes/class.tx_solr_search.php";s:4:"dcb0";s:30:"classes/class.tx_solr_site.php";s:4:"44dd";s:37:"classes/class.tx_solr_solrservice.php";s:4:"8d0b";s:33:"classes/class.tx_solr_sorting.php";s:4:"c1d3";s:38:"classes/class.tx_solr_spellchecker.php";s:4:"80d8";s:38:"classes/class.tx_solr_suggestquery.php";s:4:"e24a";s:34:"classes/class.tx_solr_template.php";s:4:"d0ca";s:51:"classes/class.tx_solr_typo3pagecontentextractor.php";s:4:"c49e";s:42:"classes/class.tx_solr_typo3pageindexer.php";s:4:"f0de";s:30:"classes/class.tx_solr_util.php";s:4:"bc7a";s:48:"classes/access/class.tx_solr_access_rootline.php";s:4:"2f3d";s:55:"classes/access/class.tx_solr_access_rootlineelement.php";s:4:"b790";s:70:"classes/access/class.tx_solr_access_rootlineelementformatexception.php";s:4:"af4c";s:63:"classes/backenditem/contextmenuactionjavascriptregistration.php";s:4:"58b3";s:44:"classes/cli/class.tx_solr_cli_dispatcher.php";s:4:"e1c2";s:61:"classes/contentobject/class.tx_solr_contentobject_content.php";s:4:"c179";s:64:"classes/contentobject/class.tx_solr_contentobject_multivalue.php";s:4:"9a85";s:62:"classes/contentobject/class.tx_solr_contentobject_relation.php";s:4:"749e";s:59:"classes/facet/class.tx_solr_facet_abstractfacetrenderer.php";s:4:"90ba";s:43:"classes/facet/class.tx_solr_facet_facet.php";s:4:"5c73";s:49:"classes/facet/class.tx_solr_facet_facetoption.php";s:4:"eb19";s:58:"classes/facet/class.tx_solr_facet_facetrendererfactory.php";s:4:"83c2";s:49:"classes/facet/class.tx_solr_facet_linkbuilder.php";s:4:"1efa";s:63:"classes/facet/class.tx_solr_facet_numericrangefacetrenderer.php";s:4:"0e7b";s:61:"classes/facet/class.tx_solr_facet_querygroupfacetrenderer.php";s:4:"fc21";s:64:"classes/facet/class.tx_solr_facet_simplefacetoptionsrenderer.php";s:4:"fc77";s:57:"classes/facet/class.tx_solr_facet_simplefacetrenderer.php";s:4:"982b";s:55:"classes/facet/class.tx_solr_facet_usedfacetrenderer.php";s:4:"9d08";s:63:"classes/fieldprocessor/class.tx_solr_fieldprocessor_service.php";s:4:"331f";s:74:"classes/fieldprocessor/class.tx_solr_fieldprocessor_timestamptoisodate.php";s:4:"4a0b";s:55:"classes/indexqueue/class.tx_solr_indexqueue_indexer.php";s:4:"f344";s:52:"classes/indexqueue/class.tx_solr_indexqueue_item.php";s:4:"e183";s:59:"classes/indexqueue/class.tx_solr_indexqueue_pageindexer.php";s:4:"12f4";s:66:"classes/indexqueue/class.tx_solr_indexqueue_pageindexerrequest.php";s:4:"093c";s:73:"classes/indexqueue/class.tx_solr_indexqueue_pageindexerrequesthandler.php";s:4:"3b98";s:67:"classes/indexqueue/class.tx_solr_indexqueue_pageindexerresponse.php";s:4:"5a11";s:53:"classes/indexqueue/class.tx_solr_indexqueue_queue.php";s:4:"0cc1";s:61:"classes/indexqueue/class.tx_solr_indexqueue_recordmonitor.php";s:4:"c86c";s:86:"classes/indexqueue/frontendhelper/class.tx_solr_indexqueue_frontendhelper_abstract.php";s:4:"d906";s:98:"classes/indexqueue/frontendhelper/class.tx_solr_indexqueue_frontendhelper_authorizationservice.php";s:4:"ca45";s:88:"classes/indexqueue/frontendhelper/class.tx_solr_indexqueue_frontendhelper_dispatcher.php";s:4:"9c02";s:85:"classes/indexqueue/frontendhelper/class.tx_solr_indexqueue_frontendhelper_manager.php";s:4:"6f3e";s:101:"classes/indexqueue/frontendhelper/class.tx_solr_indexqueue_frontendhelper_pagefieldmappingindexer.php";s:4:"67bc";s:89:"classes/indexqueue/frontendhelper/class.tx_solr_indexqueue_frontendhelper_pageindexer.php";s:4:"4aa9";s:95:"classes/indexqueue/frontendhelper/class.tx_solr_indexqueue_frontendhelper_usergroupdetector.php";s:4:"26dd";s:80:"classes/indexqueue/initializer/class.tx_solr_indexqueue_initializer_abstract.php";s:4:"9fc4";s:76:"classes/indexqueue/initializer/class.tx_solr_indexqueue_initializer_page.php";s:4:"9cc6";s:78:"classes/indexqueue/initializer/class.tx_solr_indexqueue_initializer_record.php";s:4:"bf35";s:62:"classes/pluginbase/class.tx_solr_pluginbase_backendsummary.php";s:4:"eb6c";s:65:"classes/pluginbase/class.tx_solr_pluginbase_commandpluginbase.php";s:4:"5e36";s:58:"classes/pluginbase/class.tx_solr_pluginbase_pluginbase.php";s:4:"729f";s:49:"classes/query/class.tx_solr_query_linkbuilder.php";s:4:"7a46";s:76:"classes/query/filterencoder/class.tx_solr_query_filterencoder_querygroup.php";s:4:"a33e";s:71:"classes/query/filterencoder/class.tx_solr_query_filterencoder_range.php";s:4:"9076";s:64:"classes/query/modifier/class.tx_solr_query_modifier_faceting.php";s:4:"2f7d";s:87:"classes/resultdocumentmodifier/class.tx_solr_resultdocumentmodifier_sitehighlighter.php";s:4:"78bd";s:86:"classes/resultsetmodifier/class.tx_solr_resultsetmodifier_resulttypeboundarymarker.php";s:4:"f948";s:73:"classes/viewhelper/class.tx_solr_viewhelper_abstractsubpartviewhelper.php";s:4:"9822";s:52:"classes/viewhelper/class.tx_solr_viewhelper_crop.php";s:4:"56b7";s:67:"classes/viewhelper/class.tx_solr_viewhelper_currentresultnumber.php";s:4:"21f0";s:52:"classes/viewhelper/class.tx_solr_viewhelper_date.php";s:4:"1ffa";s:53:"classes/viewhelper/class.tx_solr_viewhelper_facet.php";s:4:"02fb";s:52:"classes/viewhelper/class.tx_solr_viewhelper_link.php";s:4:"8c12";s:51:"classes/viewhelper/class.tx_solr_viewhelper_lll.php";s:4:"3b4f";s:58:"classes/viewhelper/class.tx_solr_viewhelper_multivalue.php";s:4:"e235";s:55:"classes/viewhelper/class.tx_solr_viewhelper_oddeven.php";s:4:"e5d9";s:57:"classes/viewhelper/class.tx_solr_viewhelper_relevance.php";s:4:"aa82";s:60:"classes/viewhelper/class.tx_solr_viewhelper_relevancebar.php";s:4:"33f2";s:56:"classes/viewhelper/class.tx_solr_viewhelper_solrlink.php";s:4:"03eb";s:61:"classes/viewhelper/class.tx_solr_viewhelper_sortindicator.php";s:4:"0fe2";s:55:"classes/viewhelper/class.tx_solr_viewhelper_sorturl.php";s:4:"f9ab";s:50:"classes/viewhelper/class.tx_solr_viewhelper_ts.php";s:4:"e73c";s:20:"cli_api/dispatch.php";s:4:"13db";s:50:"compat/interface.tx_scheduler_progressprovider.php";s:4:"5c6e";s:14:"doc/manual.sxw";s:4:"eb6d";s:20:"eid_api/dispatch.php";s:4:"e311";s:20:"eid_api/sitehash.php";s:4:"8a44";s:23:"eid_suggest/suggest.php";s:4:"8b5e";s:24:"flexforms/pi_results.xml";s:4:"886c";s:64:"interfaces/interface.tx_solr_additionalindexqueueitemindexer.php";s:4:"d3c8";s:54:"interfaces/interface.tx_solr_additionalpageindexer.php";s:4:"3e26";s:51:"interfaces/interface.tx_solr_commandpluginaware.php";s:4:"e7c3";s:53:"interfaces/interface.tx_solr_facetoptionsrenderer.php";s:4:"f0a4";s:46:"interfaces/interface.tx_solr_facetrenderer.php";s:4:"599d";s:47:"interfaces/interface.tx_solr_facetsmodifier.php";s:4:"6023";s:47:"interfaces/interface.tx_solr_fieldprocessor.php";s:4:"c27b";s:45:"interfaces/interface.tx_solr_formmodifier.php";s:4:"b4ca";s:54:"interfaces/interface.tx_solr_indexqueueinitializer.php";s:4:"18a3";s:69:"interfaces/interface.tx_solr_indexqueuepageindexerdataurlmodifier.php";s:4:"3bdc";s:71:"interfaces/interface.tx_solr_indexqueuepageindexerdocumentsmodifier.php";s:4:"d24c";s:68:"interfaces/interface.tx_solr_indexqueuepageindexerfrontendhelper.php";s:4:"5621";s:44:"interfaces/interface.tx_solr_pluginaware.php";s:4:"2321";s:46:"interfaces/interface.tx_solr_plugincommand.php";s:4:"97b7";s:50:"interfaces/interface.tx_solr_queryfacetbuilder.php";s:4:"21ed";s:51:"interfaces/interface.tx_solr_queryfilterencoder.php";s:4:"e7d9";s:46:"interfaces/interface.tx_solr_querymodifier.php";s:4:"91f8";s:50:"interfaces/interface.tx_solr_responseprocessor.php";s:4:"3647";s:55:"interfaces/interface.tx_solr_resultdocumentmodifier.php";s:4:"2457";s:50:"interfaces/interface.tx_solr_resultsetmodifier.php";s:4:"cad1";s:50:"interfaces/interface.tx_solr_subpartviewhelper.php";s:4:"4c0b";s:54:"interfaces/interface.tx_solr_substitutepageindexer.php";s:4:"2d98";s:49:"interfaces/interface.tx_solr_templatemodifier.php";s:4:"e899";s:43:"interfaces/interface.tx_solr_viewhelper.php";s:4:"200d";s:51:"interfaces/interface.tx_solr_viewhelperprovider.php";s:4:"062e";s:18:"lang/locallang.xml";s:4:"2d77";s:25:"lib/SolrPhpClient/COPYING";s:4:"7b1a";s:39:"lib/SolrPhpClient/last_synched_revision";s:4:"767a";s:42:"lib/SolrPhpClient/Apache/Solr/Document.php";s:4:"c9cd";s:43:"lib/SolrPhpClient/Apache/Solr/Exception.php";s:4:"8cea";s:56:"lib/SolrPhpClient/Apache/Solr/HttpTransportException.php";s:4:"d114";s:58:"lib/SolrPhpClient/Apache/Solr/InvalidArgumentException.php";s:4:"5fa0";s:61:"lib/SolrPhpClient/Apache/Solr/NoServiceAvailableException.php";s:4:"84c7";s:49:"lib/SolrPhpClient/Apache/Solr/ParserException.php";s:4:"1544";s:42:"lib/SolrPhpClient/Apache/Solr/Response.php";s:4:"8143";s:41:"lib/SolrPhpClient/Apache/Solr/Service.php";s:4:"1448";s:56:"lib/SolrPhpClient/Apache/Solr/HttpTransport/Abstract.php";s:4:"d503";s:52:"lib/SolrPhpClient/Apache/Solr/HttpTransport/Curl.php";s:4:"ec7d";s:59:"lib/SolrPhpClient/Apache/Solr/HttpTransport/CurlNoReuse.php";s:4:"64cb";s:63:"lib/SolrPhpClient/Apache/Solr/HttpTransport/FileGetContents.php";s:4:"c0b3";s:57:"lib/SolrPhpClient/Apache/Solr/HttpTransport/Interface.php";s:4:"81bc";s:56:"lib/SolrPhpClient/Apache/Solr/HttpTransport/Response.php";s:4:"5d87";s:50:"lib/SolrPhpClient/Apache/Solr/Service/Balancer.php";s:4:"7f9c";s:24:"lib/strptime/license.pdf";s:4:"b4e6";s:25:"lib/strptime/strptime.php";s:4:"c4d6";s:18:"mod_admin/conf.php";s:4:"de43";s:19:"mod_admin/index.php";s:4:"49f3";s:23:"mod_admin/locallang.xml";s:4:"99b7";s:24:"mod_admin/mod_admin.html";s:4:"ba95";s:24:"mod_admin/moduleicon.png";s:4:"a81f";s:52:"mod_index/class.tx_solr_mod_index_indexinspector.php";s:4:"6f54";s:68:"mod_index/class.tx_solr_mod_index_indexinspectorremotecontroller.php";s:4:"4623";s:39:"pi_results/class.tx_solr_pi_results.php";s:4:"fd5f";s:59:"pi_results/class.tx_solr_pi_results_advancedformcommand.php";s:4:"2748";s:53:"pi_results/class.tx_solr_pi_results_errorscommand.php";s:4:"6432";s:55:"pi_results/class.tx_solr_pi_results_facetingcommand.php";s:4:"24e4";s:51:"pi_results/class.tx_solr_pi_results_formcommand.php";s:4:"4120";s:74:"pi_results/class.tx_solr_pi_results_highlightingresultdocumentmodifier.php";s:4:"ebf3";s:56:"pi_results/class.tx_solr_pi_results_noresultscommand.php";s:4:"451f";s:54:"pi_results/class.tx_solr_pi_results_resultscommand.php";s:4:"b6d3";s:67:"pi_results/class.tx_solr_pi_results_resultsperpageswitchcommand.php";s:4:"f157";s:54:"pi_results/class.tx_solr_pi_results_sortingcommand.php";s:4:"9977";s:62:"pi_results/class.tx_solr_pi_results_spellcheckformmodifier.php";s:4:"a22f";s:59:"pi_results/class.tx_solr_pi_results_suggestformmodifier.php";s:4:"349b";s:24:"pi_results/locallang.xml";s:4:"8385";s:37:"pi_search/class.tx_solr_pi_search.php";s:4:"3bb0";s:23:"pi_search/locallang.xml";s:4:"7cf5";s:65:"report/class.tx_solr_report_accessfilterplugininstalledstatus.php";s:4:"478f";s:51:"report/class.tx_solr_report_allowurlfopenstatus.php";s:4:"aea8";s:47:"report/class.tx_solr_report_filtervarstatus.php";s:4:"08b7";s:43:"report/class.tx_solr_report_indexreport.php";s:4:"5aed";s:44:"report/class.tx_solr_report_schemastatus.php";s:4:"8a45";s:48:"report/class.tx_solr_report_solrconfigstatus.php";s:4:"6233";s:55:"report/class.tx_solr_report_solrconfigurationstatus.php";s:4:"fd0e";s:42:"report/class.tx_solr_report_solrstatus.php";s:4:"8692";s:49:"report/class.tx_solr_report_solrversionstatus.php";s:4:"d226";s:25:"report/tx_solr_report.gif";s:4:"11e4";s:44:"resources/css/jquery-ui/jquery-ui.custom.css";s:4:"5c9a";s:33:"resources/css/mod_admin/index.css";s:4:"bed9";s:36:"resources/css/pi_results/results.css";s:4:"4793";s:30:"resources/css/report/index.css";s:4:"ac51";s:48:"resources/images/cache-init-solr-connections.png";s:4:"6c66";s:35:"resources/images/indicator-down.png";s:4:"309b";s:33:"resources/images/indicator-up.png";s:4:"1522";s:50:"resources/images/jquery-ui/ui-anim_basic_16x16.gif";s:4:"03ce";s:58:"resources/images/jquery-ui/ui-bg_glass_55_fcf0ba_1x400.png";s:4:"e8fa";s:66:"resources/images/jquery-ui/ui-bg_gloss-wave_100_ece8da_500x100.png";s:4:"df1c";s:68:"resources/images/jquery-ui/ui-bg_highlight-hard_100_f7f7f7_1x100.png";s:4:"0165";s:68:"resources/images/jquery-ui/ui-bg_highlight-hard_100_fafaf4_1x100.png";s:4:"6923";s:67:"resources/images/jquery-ui/ui-bg_highlight-hard_15_f18f0b_1x100.png";s:4:"6ce2";s:67:"resources/images/jquery-ui/ui-bg_highlight-hard_95_cccccc_1x100.png";s:4:"23c9";s:67:"resources/images/jquery-ui/ui-bg_highlight-soft_25_f18f0b_1x100.png";s:4:"cde6";s:67:"resources/images/jquery-ui/ui-bg_highlight-soft_95_ffedad_1x100.png";s:4:"7103";s:63:"resources/images/jquery-ui/ui-bg_inset-soft_15_2b2922_1x100.png";s:4:"d525";s:54:"resources/images/jquery-ui/ui-icons_808080_256x240.png";s:4:"cd90";s:54:"resources/images/jquery-ui/ui-icons_847e71_256x240.png";s:4:"6636";s:54:"resources/images/jquery-ui/ui-icons_cd0a0a_256x240.png";s:4:"3e45";s:54:"resources/images/jquery-ui/ui-icons_d9a55e_256x240.png";s:4:"af06";s:54:"resources/images/jquery-ui/ui-icons_e3a345_256x240.png";s:4:"4658";s:54:"resources/images/jquery-ui/ui-icons_eeeeee_256x240.png";s:4:"2e6d";s:54:"resources/images/jquery-ui/ui-icons_ffffff_256x240.png";s:4:"342b";s:76:"resources/javascript/contextmenu/initializesolrconnectionsclickmenuaction.js";s:4:"6843";s:43:"resources/javascript/eid_suggest/suggest.js";s:4:"254a";s:48:"resources/javascript/extjs/override/gridpanel.js";s:4:"1e82";s:53:"resources/javascript/extjs/ux/Ext.grid.RowExpander.js";s:4:"8a3c";s:57:"resources/javascript/jquery/jquery-ui.autocomplete.min.js";s:4:"d5f7";s:49:"resources/javascript/jquery/jquery-ui.core.min.js";s:4:"f7f9";s:55:"resources/javascript/jquery/jquery-ui.datepicker.min.js";s:4:"f46e";s:51:"resources/javascript/jquery/jquery-ui.slider.min.js";s:4:"db8d";s:41:"resources/javascript/jquery/jquery.min.js";s:4:"b8d6";s:62:"resources/javascript/jquery/ui-i18n/jquery.ui.datepicker-de.js";s:4:"ee50";s:62:"resources/javascript/jquery/ui-i18n/jquery.ui.datepicker-fr.js";s:4:"b658";s:62:"resources/javascript/jquery/ui-i18n/jquery.ui.datepicker-nl.js";s:4:"850a";s:49:"resources/javascript/mod_index/index_inspector.js";s:4:"56f4";s:54:"resources/javascript/pi_results/numeric_range_facet.js";s:4:"f3b8";s:42:"resources/javascript/pi_results/results.js";s:4:"4569";s:37:"resources/shell/install-multi-solr.sh";s:4:"fa3e";s:31:"resources/shell/install-solr.sh";s:4:"f30a";s:45:"resources/solr/solr-example-all-languages.xml";s:4:"d103";s:23:"resources/solr/solr.xml";s:4:"aeca";s:47:"resources/solr/typo3cores/conf/admin-extra.html";s:4:"9423";s:42:"resources/solr/typo3cores/conf/elevate.xml";s:4:"c8c5";s:56:"resources/solr/typo3cores/conf/general_schema_fields.xml";s:4:"aa33";s:55:"resources/solr/typo3cores/conf/general_schema_types.xml";s:4:"037e";s:45:"resources/solr/typo3cores/conf/solrconfig.xml";s:4:"455a";s:51:"resources/solr/typo3cores/conf/arabic/protwords.txt";s:4:"70a5";s:48:"resources/solr/typo3cores/conf/arabic/schema.xml";s:4:"77e4";s:51:"resources/solr/typo3cores/conf/arabic/stopwords.txt";s:4:"6762";s:50:"resources/solr/typo3cores/conf/arabic/synonyms.txt";s:4:"b5d1";s:53:"resources/solr/typo3cores/conf/armenian/protwords.txt";s:4:"70a5";s:50:"resources/solr/typo3cores/conf/armenian/schema.xml";s:4:"c8d2";s:53:"resources/solr/typo3cores/conf/armenian/stopwords.txt";s:4:"bb50";s:52:"resources/solr/typo3cores/conf/armenian/synonyms.txt";s:4:"b5d1";s:51:"resources/solr/typo3cores/conf/basque/protwords.txt";s:4:"70a5";s:48:"resources/solr/typo3cores/conf/basque/schema.xml";s:4:"f76f";s:51:"resources/solr/typo3cores/conf/basque/stopwords.txt";s:4:"eb5d";s:50:"resources/solr/typo3cores/conf/basque/synonyms.txt";s:4:"b5d1";s:65:"resources/solr/typo3cores/conf/brazilian_portuguese/protwords.txt";s:4:"70a5";s:62:"resources/solr/typo3cores/conf/brazilian_portuguese/schema.xml";s:4:"cee3";s:65:"resources/solr/typo3cores/conf/brazilian_portuguese/stopwords.txt";s:4:"e4cc";s:64:"resources/solr/typo3cores/conf/brazilian_portuguese/synonyms.txt";s:4:"b5d1";s:54:"resources/solr/typo3cores/conf/bulgarian/protwords.txt";s:4:"70a5";s:51:"resources/solr/typo3cores/conf/bulgarian/schema.xml";s:4:"8250";s:54:"resources/solr/typo3cores/conf/bulgarian/stopwords.txt";s:4:"f137";s:53:"resources/solr/typo3cores/conf/bulgarian/synonyms.txt";s:4:"b5d1";s:52:"resources/solr/typo3cores/conf/burmese/protwords.txt";s:4:"70a5";s:49:"resources/solr/typo3cores/conf/burmese/readme.txt";s:4:"5aff";s:49:"resources/solr/typo3cores/conf/burmese/schema.xml";s:4:"87ee";s:52:"resources/solr/typo3cores/conf/burmese/stopwords.txt";s:4:"d41d";s:51:"resources/solr/typo3cores/conf/burmese/synonyms.txt";s:4:"d41d";s:52:"resources/solr/typo3cores/conf/catalan/protwords.txt";s:4:"70a5";s:49:"resources/solr/typo3cores/conf/catalan/schema.xml";s:4:"686a";s:52:"resources/solr/typo3cores/conf/catalan/stopwords.txt";s:4:"ae43";s:51:"resources/solr/typo3cores/conf/catalan/synonyms.txt";s:4:"b5d1";s:52:"resources/solr/typo3cores/conf/chinese/protwords.txt";s:4:"70a5";s:49:"resources/solr/typo3cores/conf/chinese/schema.xml";s:4:"f961";s:52:"resources/solr/typo3cores/conf/chinese/stopwords.txt";s:4:"d41d";s:51:"resources/solr/typo3cores/conf/chinese/synonyms.txt";s:4:"d41d";s:50:"resources/solr/typo3cores/conf/czech/protwords.txt";s:4:"70a5";s:47:"resources/solr/typo3cores/conf/czech/schema.xml";s:4:"79ea";s:50:"resources/solr/typo3cores/conf/czech/stopwords.txt";s:4:"e37f";s:49:"resources/solr/typo3cores/conf/czech/synonyms.txt";s:4:"b5d1";s:51:"resources/solr/typo3cores/conf/danish/protwords.txt";s:4:"89d5";s:48:"resources/solr/typo3cores/conf/danish/schema.xml";s:4:"6db7";s:51:"resources/solr/typo3cores/conf/danish/stopwords.txt";s:4:"4e8d";s:50:"resources/solr/typo3cores/conf/danish/synonyms.txt";s:4:"b5d1";s:50:"resources/solr/typo3cores/conf/dutch/protwords.txt";s:4:"70a5";s:47:"resources/solr/typo3cores/conf/dutch/schema.xml";s:4:"a2eb";s:50:"resources/solr/typo3cores/conf/dutch/stopwords.txt";s:4:"a638";s:49:"resources/solr/typo3cores/conf/dutch/synonyms.txt";s:4:"b5d1";s:52:"resources/solr/typo3cores/conf/english/protwords.txt";s:4:"70a5";s:49:"resources/solr/typo3cores/conf/english/schema.xml";s:4:"a27a";s:52:"resources/solr/typo3cores/conf/english/stopwords.txt";s:4:"8608";s:51:"resources/solr/typo3cores/conf/english/synonyms.txt";s:4:"b5d1";s:52:"resources/solr/typo3cores/conf/finnish/protwords.txt";s:4:"70a5";s:49:"resources/solr/typo3cores/conf/finnish/schema.xml";s:4:"a848";s:52:"resources/solr/typo3cores/conf/finnish/stopwords.txt";s:4:"e688";s:51:"resources/solr/typo3cores/conf/finnish/synonyms.txt";s:4:"b5d1";s:51:"resources/solr/typo3cores/conf/french/protwords.txt";s:4:"70a5";s:48:"resources/solr/typo3cores/conf/french/schema.xml";s:4:"98bb";s:51:"resources/solr/typo3cores/conf/french/stopwords.txt";s:4:"8751";s:50:"resources/solr/typo3cores/conf/french/synonyms.txt";s:4:"b5d1";s:53:"resources/solr/typo3cores/conf/galician/protwords.txt";s:4:"70a5";s:50:"resources/solr/typo3cores/conf/galician/schema.xml";s:4:"c457";s:53:"resources/solr/typo3cores/conf/galician/stopwords.txt";s:4:"b831";s:52:"resources/solr/typo3cores/conf/galician/synonyms.txt";s:4:"b5d1";s:52:"resources/solr/typo3cores/conf/generic/protwords.txt";s:4:"70a5";s:49:"resources/solr/typo3cores/conf/generic/schema.xml";s:4:"eebf";s:52:"resources/solr/typo3cores/conf/generic/stopwords.txt";s:4:"d41d";s:51:"resources/solr/typo3cores/conf/generic/synonyms.txt";s:4:"b5d1";s:61:"resources/solr/typo3cores/conf/german/german-common-nouns.txt";s:4:"3903";s:51:"resources/solr/typo3cores/conf/german/protwords.txt";s:4:"70a5";s:48:"resources/solr/typo3cores/conf/german/schema.xml";s:4:"99b0";s:51:"resources/solr/typo3cores/conf/german/stopwords.txt";s:4:"691b";s:50:"resources/solr/typo3cores/conf/german/synonyms.txt";s:4:"b5d1";s:50:"resources/solr/typo3cores/conf/greek/protwords.txt";s:4:"70a5";s:47:"resources/solr/typo3cores/conf/greek/schema.xml";s:4:"2a3f";s:50:"resources/solr/typo3cores/conf/greek/stopwords.txt";s:4:"66a5";s:49:"resources/solr/typo3cores/conf/greek/synonyms.txt";s:4:"b5d1";s:50:"resources/solr/typo3cores/conf/hindi/protwords.txt";s:4:"70a5";s:47:"resources/solr/typo3cores/conf/hindi/schema.xml";s:4:"69b4";s:50:"resources/solr/typo3cores/conf/hindi/stopwords.txt";s:4:"a8ce";s:49:"resources/solr/typo3cores/conf/hindi/synonyms.txt";s:4:"b5d1";s:54:"resources/solr/typo3cores/conf/hungarian/protwords.txt";s:4:"70a5";s:51:"resources/solr/typo3cores/conf/hungarian/schema.xml";s:4:"5aba";s:54:"resources/solr/typo3cores/conf/hungarian/stopwords.txt";s:4:"1e1f";s:53:"resources/solr/typo3cores/conf/hungarian/synonyms.txt";s:4:"b5d1";s:55:"resources/solr/typo3cores/conf/indonesian/protwords.txt";s:4:"70a5";s:52:"resources/solr/typo3cores/conf/indonesian/schema.xml";s:4:"599a";s:55:"resources/solr/typo3cores/conf/indonesian/stopwords.txt";s:4:"5209";s:54:"resources/solr/typo3cores/conf/indonesian/synonyms.txt";s:4:"b5d1";s:52:"resources/solr/typo3cores/conf/italian/protwords.txt";s:4:"70a5";s:49:"resources/solr/typo3cores/conf/italian/schema.xml";s:4:"6e01";s:52:"resources/solr/typo3cores/conf/italian/stopwords.txt";s:4:"7dfe";s:51:"resources/solr/typo3cores/conf/italian/synonyms.txt";s:4:"b5d1";s:53:"resources/solr/typo3cores/conf/japanese/protwords.txt";s:4:"70a5";s:50:"resources/solr/typo3cores/conf/japanese/schema.xml";s:4:"f961";s:53:"resources/solr/typo3cores/conf/japanese/stopwords.txt";s:4:"d41d";s:52:"resources/solr/typo3cores/conf/japanese/synonyms.txt";s:4:"d41d";s:50:"resources/solr/typo3cores/conf/khmer/protwords.txt";s:4:"70a5";s:47:"resources/solr/typo3cores/conf/khmer/readme.txt";s:4:"5aff";s:47:"resources/solr/typo3cores/conf/khmer/schema.xml";s:4:"87ee";s:50:"resources/solr/typo3cores/conf/khmer/stopwords.txt";s:4:"d41d";s:49:"resources/solr/typo3cores/conf/khmer/synonyms.txt";s:4:"d41d";s:51:"resources/solr/typo3cores/conf/korean/protwords.txt";s:4:"70a5";s:48:"resources/solr/typo3cores/conf/korean/schema.xml";s:4:"f961";s:51:"resources/solr/typo3cores/conf/korean/stopwords.txt";s:4:"d41d";s:50:"resources/solr/typo3cores/conf/korean/synonyms.txt";s:4:"d41d";s:48:"resources/solr/typo3cores/conf/lao/protwords.txt";s:4:"70a5";s:45:"resources/solr/typo3cores/conf/lao/readme.txt";s:4:"5aff";s:45:"resources/solr/typo3cores/conf/lao/schema.xml";s:4:"87ee";s:48:"resources/solr/typo3cores/conf/lao/stopwords.txt";s:4:"d41d";s:47:"resources/solr/typo3cores/conf/lao/synonyms.txt";s:4:"d41d";s:54:"resources/solr/typo3cores/conf/norwegian/protwords.txt";s:4:"70a5";s:51:"resources/solr/typo3cores/conf/norwegian/schema.xml";s:4:"5a78";s:54:"resources/solr/typo3cores/conf/norwegian/stopwords.txt";s:4:"aa8c";s:53:"resources/solr/typo3cores/conf/norwegian/synonyms.txt";s:4:"b5d1";s:52:"resources/solr/typo3cores/conf/persian/protwords.txt";s:4:"70a5";s:49:"resources/solr/typo3cores/conf/persian/schema.xml";s:4:"cd7a";s:52:"resources/solr/typo3cores/conf/persian/stopwords.txt";s:4:"9024";s:51:"resources/solr/typo3cores/conf/persian/synonyms.txt";s:4:"b5d1";s:51:"resources/solr/typo3cores/conf/polish/protwords.txt";s:4:"89d5";s:48:"resources/solr/typo3cores/conf/polish/schema.xml";s:4:"506c";s:51:"resources/solr/typo3cores/conf/polish/stopwords.txt";s:4:"e1ab";s:50:"resources/solr/typo3cores/conf/polish/synonyms.txt";s:4:"b5d1";s:55:"resources/solr/typo3cores/conf/portuguese/protwords.txt";s:4:"70a5";s:52:"resources/solr/typo3cores/conf/portuguese/schema.xml";s:4:"0b58";s:55:"resources/solr/typo3cores/conf/portuguese/stopwords.txt";s:4:"c981";s:54:"resources/solr/typo3cores/conf/portuguese/synonyms.txt";s:4:"8580";s:53:"resources/solr/typo3cores/conf/romanian/protwords.txt";s:4:"70a5";s:50:"resources/solr/typo3cores/conf/romanian/schema.xml";s:4:"fd0a";s:53:"resources/solr/typo3cores/conf/romanian/stopwords.txt";s:4:"745d";s:52:"resources/solr/typo3cores/conf/romanian/synonyms.txt";s:4:"b5d1";s:52:"resources/solr/typo3cores/conf/russian/protwords.txt";s:4:"70a5";s:49:"resources/solr/typo3cores/conf/russian/schema.xml";s:4:"2a52";s:52:"resources/solr/typo3cores/conf/russian/stopwords.txt";s:4:"4bf4";s:51:"resources/solr/typo3cores/conf/russian/synonyms.txt";s:4:"b5d1";s:52:"resources/solr/typo3cores/conf/spanish/protwords.txt";s:4:"70a5";s:49:"resources/solr/typo3cores/conf/spanish/schema.xml";s:4:"ce8c";s:52:"resources/solr/typo3cores/conf/spanish/stopwords.txt";s:4:"fddb";s:51:"resources/solr/typo3cores/conf/spanish/synonyms.txt";s:4:"b5d1";s:52:"resources/solr/typo3cores/conf/swedish/protwords.txt";s:4:"70a5";s:49:"resources/solr/typo3cores/conf/swedish/schema.xml";s:4:"22f9";s:52:"resources/solr/typo3cores/conf/swedish/stopwords.txt";s:4:"952f";s:51:"resources/solr/typo3cores/conf/swedish/synonyms.txt";s:4:"b5d1";s:49:"resources/solr/typo3cores/conf/thai/protwords.txt";s:4:"70a5";s:46:"resources/solr/typo3cores/conf/thai/schema.xml";s:4:"be5f";s:49:"resources/solr/typo3cores/conf/thai/stopwords.txt";s:4:"d41d";s:48:"resources/solr/typo3cores/conf/thai/synonyms.txt";s:4:"d41d";s:52:"resources/solr/typo3cores/conf/turkish/protwords.txt";s:4:"70a5";s:49:"resources/solr/typo3cores/conf/turkish/schema.xml";s:4:"458d";s:52:"resources/solr/typo3cores/conf/turkish/stopwords.txt";s:4:"498a";s:51:"resources/solr/typo3cores/conf/turkish/synonyms.txt";s:4:"b5d1";s:54:"resources/solr/typo3cores/conf/ukrainian/protwords.txt";s:4:"70a5";s:51:"resources/solr/typo3cores/conf/ukrainian/schema.xml";s:4:"987e";s:54:"resources/solr/typo3cores/conf/ukrainian/stopwords.txt";s:4:"4bf4";s:53:"resources/solr/typo3cores/conf/ukrainian/synonyms.txt";s:4:"b5d1";s:46:"resources/templates/pi_results/pagebrowser.htm";s:4:"8eea";s:42:"resources/templates/pi_results/results.htm";s:4:"4d33";s:40:"resources/templates/pi_search/search.htm";s:4:"dce3";s:27:"resources/tomcat/server.xml";s:4:"0be5";s:25:"resources/tomcat/solr.xml";s:4:"8c2a";s:24:"resources/tomcat/tomcat6";s:4:"0308";s:48:"scheduler/class.tx_solr_scheduler_committask.php";s:4:"b6ec";s:63:"scheduler/class.tx_solr_scheduler_committasksolrserverfield.php";s:4:"63ed";s:58:"scheduler/class.tx_solr_scheduler_indexqueueworkertask.php";s:4:"e1aa";s:81:"scheduler/class.tx_solr_scheduler_indexqueueworkertaskadditionalfieldprovider.php";s:4:"9e60";s:50:"scheduler/class.tx_solr_scheduler_optimizetask.php";s:4:"077b";s:65:"scheduler/class.tx_solr_scheduler_optimizetasksolrserverfield.php";s:4:"7731";s:49:"scheduler/class.tx_solr_scheduler_reindextask.php";s:4:"cca2";s:64:"scheduler/class.tx_solr_scheduler_reindextasksolrserverfield.php";s:4:"a135";s:39:"static/examples/everything-on/setup.txt";s:4:"bb7b";s:38:"static/examples/filter-pages/setup.txt";s:4:"9789";s:41:"static/examples/indexqueue-news/setup.txt";s:4:"cf41";s:43:"static/examples/indexqueue-ttnews/setup.txt";s:4:"63c4";s:31:"static/opensearch/constants.txt";s:4:"f0cc";s:27:"static/opensearch/setup.txt";s:4:"0876";s:25:"static/solr/constants.txt";s:4:"0aa7";s:21:"static/solr/setup.txt";s:4:"54c1";s:45:"tests/classes/class.tx_solr_querytestcase.php";s:4:"2b2f";s:65:"tests/classes/class.tx_solr_typo3pagecontentextractortestcase.php";s:4:"8931";s:71:"tests/classes/facet/class.tx_solr_facet_simplefacetrenderertestcase.php";s:4:"18ea";s:77:"tests/classes/fieldprocessor/class.tx_solr_fieldprocessor_servicetestcase.php";s:4:"0ed3";s:80:"tests/classes/indexqueue/class.tx_solr_indexqueue_pageindexerrequesttestcase.php";s:4:"0c66";s:81:"tests/classes/indexqueue/class.tx_solr_indexqueue_pageindexerresponsetestcase.php";s:4:"1e72";s:85:"tests/classes/query/filterencoder/class.tx_solr_query_filterencoder_rangetestcase.php";s:4:"965e";s:64:"tests/classes/viewhelper/class.tx_solr_viewhelper_tstestcase.php";s:4:"7731";}',
	'suggests' => array(
	),
);

?>