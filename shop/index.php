<!-- DO NOT TOUCH -->
<?php require_once('../system/config.php');
$account->AccountLoginQuery();
?>
<html xml:lang="en-us" class="en-us">
<head xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<meta http-equiv="imagetoolbar" content="false" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<!-- YOU CAN TOUCH NOW -->
<!-- (If you know what you're doing) -->
<!-- Description of CMS -->
<?php include(__WEBKIT__.'desc.php'); ?>
<!-- Description of CMS END -->
<title>Tienda - <?php echo TITLE ?></title>
<!-- The Styles & Javascripts of the CMS -->
<link rel="stylesheet" type="text/css" media="all" href="<?php echo BASE_URL ?>assets/css/common-game-site.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo BASE_URL ?>assets/css/wow.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo BASE_URL ?>assets/css/lightbox.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo BASE_URL ?>assets/css/wiki/wiki.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo BASE_URL ?>assets/css/shop/shop-index.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo BASE_URL ?>assets/css/locale/en-gb.css" />
<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/third-party.js?v=58-62"></script>
<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/common-game-site.js?v=58-62"></script>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo BASE_URL ?>assets/css/legal/ratings.css?v=58-62" />
</head>
<body class="en-us media-home">
<div id="wrapper">
<!-- User Panel -->
<?php include(WEBKIT.'userpanel.php'); ?>
<!-- User Panel END -->
<div id="header">
<!-- Search -->
<?php include(WEBKIT.'search.php'); ?>
<!-- Search END -->
<h1 id="logo"><a href="<?php echo BASE_URL ?>"><?php echo TITLE ?></a></h1>
<!-- Header -->
<div class="header-plate">
<?php
$page = "menu-services";
include(WEBKIT.'menu.php');
include(WEBKIT.'userplate.php');?>
</div>
<!-- Header END -->
</div>
<div id="content">
<div class="content-top body-top">
<div class="content-trail">
<ol class="ui-breadcrumb">
<li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
<a href="/" rel="np" class="breadcrumb-arrow" itemprop="url">
<span class="breadcrumb-text" itemprop="name"><?php echo TITLE ?></span>
</a>
</li>
<li class="last" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
<a href="" rel="np" itemprop="url">
<span class="breadcrumb-text" itemprop="name">Tienda</span>
</a>
</li>
</ol>
</div>
<div class="content-bot clear">
<div class="wod-no-banner"></div>
<div id="wiki" class="wiki directory wiki-index">
<div class="panel free-paid-services">
<div id="free-services" class="services-column">
<h2 class="header">Servicios gratuitos</h2>
<ul>
<li>
<a href="#" class="free-services-raf">
<span>Reclutar un amigo</span>
</a>
</li>
<li>
<a href="#" class="free-services-item-restoration">
<span>Tienda de Votos</span>
</a>
</li>
<li>
<a href="#" class="free-services-mobile-armory">
<span>Donar via SMS</span>
</a>
</li>
<li>
<a href="#" class="free-services-security">
<span>Seguridad de tu cuenta</span>
</a>
</li>
</ul>
</div>
<div id="paid-services" class="services-column">
<h2 class="header">Paid Services</h2>
<ul>
<li>
<a href="#" class="paid-services-character-transfer">
<span>Character Transfer</span>
</a>
</li>
<li>
<a href="#" class="paid-services-faction-change">
<span>Faction Change</span>
</a>
</li>
<li>
<a href="#" class="paid-services-race-change">
<span>Race Change</span>
</a>
</li>
<li>
<a href="#" class="paid-services-character-customization">
<span>Appearance Change</span>
</a>
</li>
<li>
<a href="#" class="paid-services-name-change">
<span>Name Change</span>
</a>
</li>
<li>
<a href="#" class="paid-services-character-boost">
<span>Level 90 Character Boost</span>
</a>
</li>
</ul>
</div>
<a href="#" class="ad-raf">
<span>Recruit a friend,<br/>Earn epic rewards!</span>
</a>
</div>

<div class="panel game-subscriptions">
<h2 class="header">Tienda y Donaciones<a class="panelLink" href="main.php">Lea los T&eacute;rminos y Condiciones</a></h2>
<p class="subscription-desc"><?php echo TITLE ?> es un servidor privado del videojuego de multijugador masivo World of Warcraft, el cual promete mantener sus servicios siempre activos, mas sin embargo, no esta libre de fallos y caidas asi como errores y problemas que puedan surgir a futuro. Ayudanos con tus <a href="#">donaciones</a> y <a href="#">votar por el server</a> para poder seguir brindando un servicio de calidad, solo con tu ayuda seguiremos creciendo y brindando el servicio que tu te mereces.
</p>
<br>
<div class="subscription-col subscription-1">
<a href="" class="game-title">
<span class="tooltip" data-tooltip="#wow-battlechest-tooltip" data-tooltip-options='{"location": "mouse"}' style="visibility:hidden"></span>
</a>		
<a class="ui-button button1" href="">
<span class="button-left"><span class="button-right">Tienda de Votacion</span></span>
</a>
<!--<a class="ui-button button5" href="">
<span class="button-left"><span class="button-right">Tienda de Votacion</span></span>
</a>
<a href="#" class="subNow"><div class="subNowIcon"></div>
</a>-->
</div>
<div class="subscription-col subscription-3">
<a href="" class="game-title">
<span class="tooltip" data-tooltip="#wow-battlechest-tooltip" data-tooltip-options='{"location": "mouse"}' style="visibility:hidden"></span>
</a><br>		
<a class="ui-button button5" href="">
<span class="button-left"><span class="button-right">Tienda de Donacion</span></span>
</a>
<!--<a class="ui-button button5" href="">
<span class="button-left"><span class="button-right">Tienda de Donacion</span></span>
</a>
<a href="#" class="subNow"><div class="subNowIcon"></div>
</a>-->
</div>
<!--<div class="subscription-col subscription-3">
<a href="#" class="game-title"></a>
<a class="ui-button button1" href="#"><span class="button-left"><span class="button-right">Donar ahora!</span></span></a>
<br/>
<a class="ui-button button1" href="#">
<span class="button-left"><span class="button-right">Votar ahora</span></span>
</a>
<a class="ui-button button5" href="#">
<span class="button-left"><span class="button-right">Tienda de Votacion</span></span>
</a>
</div>-->
<span class="clear"><!-- --></span>
</div>

<div class="panel pet-mount">
<h2 class="header">Monturas, Mascotas y Armaduras<a class="panelLink" href="main.php">Ver todo</a>
</h2>
<div class="product-block">
<div id="pet-mount-list" class="companion-container" style="width: 3114px;">

<!--<a href="#" class="product-item blossoming-ancient" data-tooltip="Buy Now" data-tooltip-options="{&quot;location&quot;: &quot;mouse&quot;}">
<span class="thumb"></span>
<span class="name">Blossoming<br /> Ancient</span>
</a>
<a href="#" class="product-item armored-bloodwing" data-tooltip="Buy Now" data-tooltip-options="{&quot;location&quot;: &quot;mouse&quot;}">
<span class="thumb"></span>
<span class="name">Armored<br /> Bloodwing</span>
</a>
<a href="#" class="product-item cinder-kitten" data-tooltip="Buy Now" data-tooltip-options="{&quot;location&quot;: &quot;mouse&quot;}">
<span class="thumb"></span>
<span class="name">Cinder<br />Kitten</span>
</a>-->
<a href="#" class="product-item heart-of-the-aspects" data-tooltip="Buy Now" data-tooltip-options="{&quot;location&quot;: &quot;mouse&quot;}">
<span class="thumb"></span>
<span class="name">Monturas<br />voladoras (310%)</span>
</a>
<a href="#" class="product-item celestial-steed" data-tooltip="Buy Now" data-tooltip-options="{&quot;location&quot;: &quot;mouse&quot;}">
<span class="thumb"></span>
<span class="name">Monturas<br />duales</span>
</a>
<a href="#" class="product-item winged-guardian" data-tooltip="Buy Now" data-tooltip-options="{&quot;location&quot;: &quot;mouse&quot;}">
<span class="thumb"></span>
<span class="name">Monturas<br />voladoras</span>
</a>
<a href="#" class="product-item swift-windsteed" data-tooltip="Buy Now" data-tooltip-options="{&quot;location&quot;: &quot;mouse&quot;}">
<span class="thumb"></span>
<span class="name">Monturas<br />terrestres</span>
</a>
<a href="#" class="product-item pandaren-monk" data-tooltip="Buy Now" data-tooltip-options="{&quot;location&quot;: &quot;mouse&quot;}">
<span class="thumb"></span>
<span class="name">Pandaren<br />Monk</span>
</a>
<a href="#" class="product-item crown-of-eternal-winter" data-tooltip="Buy Now" data-tooltip-options="{&quot;location&quot;: &quot;mouse&quot;}">
<span class="thumb"></span>
<span class="name">Armaduras <br />de Tanque</span>
</a>
<a href="#" class="product-item jewel-of-the-firelord" data-tooltip="Buy Now" data-tooltip-options="{&quot;location&quot;: &quot;mouse&quot;}">
<span class="thumb"></span>
<span class="name">Armaduras<br />de Healer</span>
</a>
<a href="#" class="product-item hood-of-hungering-darkness" data-tooltip="Buy Now" data-tooltip-options="{&quot;location&quot;: &quot;mouse&quot;}">
<span class="thumb"></span>
<span class="name">Armaduras<br />de DPS</span>
</a>
<a href="#" class="product-item moonkin-hatchling-alliance" data-tooltip="Buy Now" data-tooltip-options="{&quot;location&quot;: &quot;mouse&quot;}">
<span class="thumb"></span>
<span class="name">Proximamente<br />habr&aacute; m&aacute;s...</span>
</a>
<!--<a href="#" class="product-item lil-ragnaros" data-tooltip="Buy Now" data-tooltip-options="{&quot;location&quot;: &quot;mouse&quot;}">
<span class="thumb"></span>
<span class="name">Lil<br />Ragnaros</span>
</a>
<a href="#" class="product-item lil-kt" data-tooltip="Buy Now" data-tooltip-options="{&quot;location&quot;: &quot;mouse&quot;}">
<span class="thumb"></span>
<span class="name">Lil<br />K.T.</span>
</a>
<a href="#" class="product-item cenarion-hatchling" data-tooltip="Buy Now" data-tooltip-options="{&quot;location&quot;: &quot;mouse&quot;}">
<span class="thumb"></span>
<span class="name">Cenarion<br />Hatchling</span>
</a>
<a href="#" class="product-item moonkin-hatchling-alliance" data-tooltip="Buy Now" data-tooltip-options="{&quot;location&quot;: &quot;mouse&quot;}">
<span class="thumb"></span>
<span class="name">Moonkin<br />Hatchling</span>
</a>
<a href="#" class="product-item guardian-cub" data-tooltip="Buy Now" data-tooltip-options="{&quot;location&quot;: &quot;mouse&quot;}">
<span class="thumb"></span>
<span class="name">Guardian<br />Cub</span>
</a>
<a href="#" class="product-item lil-xt" data-tooltip="Buy Now" data-tooltip-options="{&quot;location&quot;: &quot;mouse&quot;}">
<span class="thumb"></span>
<span class="name">Lil<br />XT</span>
</a>
<a href="#" class="product-item soul-of-the-aspects" data-tooltip="Buy Now" data-tooltip-options="{&quot;location&quot;: &quot;mouse&quot;}">
<span class="thumb"></span>
<span class="name">Soul of<br />the Aspects</span>
</a>-->
</div>
</div>
<a href="javascript:;" class="nav-button nav-prev" onclick="CompanionSlider.move(1);" style="display: none;"></a>
<a href="javascript:;" class="nav-button nav-next" onclick="CompanionSlider.move(-1);" style="display: inline;"></a>
<span class="clear"><!-- --></span>
</div>
<script type="text/javascript">
		//<![CDATA[
		$(function() {
			CompanionSlider.init();
		});

		var CompanionSlider = {

			newPosition: 0,
			movement: 870,
			container: null,

			init: function(){
				CompanionSlider.container = $('#pet-mount-list');
				CompanionSlider.containerSize();
				CompanionSlider.navPrev = $('.pet-mount .nav-prev');
				CompanionSlider.navNext = $('.pet-mount .nav-next');
				CompanionSlider.setNav();
			},
			move: function(direction){
				var currentPosition = eval(CompanionSlider.container.css('left').replace('px',''));
				var prevPosition = CompanionSlider.newPosition;
				CompanionSlider.newPosition = prevPosition + direction*CompanionSlider.movement;

				if( CompanionSlider.newPosition <= currentPosition || CompanionSlider.newPosition >= currentPosition ){
					CompanionSlider.container.css('left', CompanionSlider.newPosition +'px');
					CompanionSlider.setNav();
				}
			},
			containerSize: function(){
				var itemCount = $('#pet-mount-list .product-item').length;
				var itemWidth = $('#pet-mount-list .product-item').outerWidth();
				CompanionSlider.container.width(itemCount*itemWidth);
			},
			setNav: function(){
				CompanionSlider.navPrev.show();
				CompanionSlider.navNext.show();

				if( CompanionSlider.newPosition == 0 ){
					CompanionSlider.navPrev.hide();
				}
				if( CompanionSlider.newPosition*-1 + CompanionSlider.movement > CompanionSlider.container.width() ){
					CompanionSlider.navNext.hide();
				}
			}
		}
		//]]>
</script>
<span class="clear"><!-- --></span>
</div>
</div>
</div>
</div>
<?php footer(); ?>
</div>
<script>
//<![CDATA[
var xsToken = '';
var supportToken = '';
var jsonSearchHandlerUrl = '<?php echo BASE_URL ?>';
var Msg = Msg || {};
Msg.support = {
ticketNew: 'Ticket {0} was created.',
ticketStatus: 'Ticket {0}’s status changed to {1}.',
ticketOpen: 'Open',
ticketAnswered: 'Answered',
ticketResolved: 'Resolved',
ticketCanceled: 'Cancelled',
ticketArchived: 'Archived',
ticketInfo: 'Need Info',
ticketAll: 'View All Tickets'
};
Msg.cms = {
requestError: 'Your request cannot be completed.',
ignoreNot: 'Not ignoring this user',
ignoreAlready: 'Already ignoring this user',
stickyRequested: 'Sticky requested',
stickyHasBeenRequested: 'You have already sent a sticky request for this topic.',
postAdded: 'Post added to tracker',
postRemoved: 'Post removed from tracker',
userAdded: 'User added to tracker',
userRemoved: 'User removed from tracker',
validationError: 'A required field is incomplete',
characterExceed: 'The post body exceeds XXXXXX characters.',
searchFor: "Search for",
searchTags: "Articles tagged:",
characterAjaxError: "You may have become logged out. Please refresh the page and try again.",
ilvl: "Level {0}",
shortQuery: "Search requests must be at least three characters long.",
editSuccess: "Success. Reload?",
postDelete: "Are you sure you want to delete this post?",
throttleError: "You must wait before you can post again."
};
Msg.bml= {
bold: 'Bold',
italics: 'Italics',
underline: 'Underline',
list: 'Unordered List',
listItem: 'List Item',
quote: 'Quote',
quoteBy: 'Posted by {0}',
unformat: 'Remove Formating',
cleanup: 'Fix Linebreaks',
code: 'Code Blocks',
item: 'WoW Item',
itemPrompt: 'Item ID:',
url: 'URL',
urlPrompt: 'URL Address:'
};
Msg.ui= {
submit: 'Submit',
cancel: 'Cancel',
reset: 'Reset',
viewInGallery: 'View in gallery',
loading: 'Loading…',
unexpectedError: 'An error has occurred',
fansiteFind: 'Find this on…',
fansiteFindType: 'Find {0} on…',
fansiteNone: 'No fansites available.',
flashErrorHeader: 'Adobe Flash Player must be installed to see this content.',
flashErrorText: 'Download Adobe Flash Player',
flashErrorUrl: 'http://get.adobe.com/flashplayer/',
save: 'Save'
};
Msg.grammar= {
colon: '{0}:',
first: 'First',
last: 'Last',
ellipsis: '…'
};
Msg.fansite= {
achievement: 'achievement',
character: 'character',
faction: 'faction',
'class': 'class',
object: 'object',
talentcalc: 'talents',
skill: 'profession',
quest: 'quest',
spell: 'spell',
event: 'event',
title: 'title',
arena: 'arena team',
guild: 'guild',
zone: 'zone',
item: 'item',
race: 'race',
npc: 'NPC',
pet: 'pet'
};
Msg.search= {
noResults: 'There are no results to display.',
kb: 'Support',
post: 'Forums',
article: 'Blog Articles',
static: 'General Content',
wowcharacter: 'Characters',
wowitem: 'Items',
wowguild: 'Guilds',
wowarenateam: 'Arena Teams',
url: 'Suggested Links',
friend: 'Friends',
product: 'Marketplace Products',
other: 'Other'
};
//]]>
</script>
<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/menu.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/wow.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/search-pane.js"></script>
<script type="text/javascript">
//<![CDATA[
$(function() {
Menu.initialize('assets/data/menu.json');
});
//]]>
</script>

<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/utility/slideshow.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/cms.min.js"></script>
</body>
</html>