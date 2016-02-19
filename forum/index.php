<?php 
//DO NOT TOUCH!
require_once('../sistema/config.php');
$cuenta->AccountLoginQuery();?>
<!doctype html>
<html lang="en-gb">
<head>
<!-- Description of CMS -->
<?php include(WEBKIT.'desc.php'); ?>
<!-- Description of CMS END -->
<title><?php echo TITLE ?></title>
<link rel="shortcut icon" href="<?php echo BASE_URL ?>wow/static/local-common/images/favicons/wow.png" type="image/x-icon" />
<link rel="search" type="application/opensearchdescription+xml" href="http://eu.battle.net/en-gb/data/opensearch" title="Battle.net Search"/>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo BASE_URL ?>assets/css/common-game-site.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo BASE_URL ?>assets/css/wow.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo BASE_URL ?>assets/css/lightbox.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo BASE_URL ?>assets/css/cms.min.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo BASE_URL ?>assets/css/forums/forums-index.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo BASE_URL ?>assets/css/forums/view-forum.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo BASE_URL ?>assets/css/forums/view-topic.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo BASE_URL ?>assets/css/forums/blizz-tracker.css" /> 
<!-- Le Javascripts -->
<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/third-party.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/common-game-site.js"></script>
<!-- Le Core Code -->
<script type="text/javascript">
//<![CDATA[
var Core = Core || {},
Login = Login || {};
Core.staticUrl = '<?php echo BASE_URL ?>assets';
Core.sharedStaticUrl = '<?php echo BASE_URL ?>assets';
Core.baseUrl = '<?php echo BASE_URL ?>assets';
Core.projectUrl = '<?php echo BASE_URL ?>assets';
Core.project = 'FlameCMS';
Core.locale = 'en-gb';
Core.language = 'en';
Core.region = 'ww';
Core.shortDateFormat = 'dd/MM/yyyy';
Core.dateTimeFormat = 'dd/MM/yyyy HH:mm';
Core.loggedIn = false;
Core.userAgent = 'web';
var Flash = Flash || {};
Flash.videoPlayer = 'http://media.blizzard.com/global-video-player/themes/wow/video-player.swf';
Flash.ratingImage = 'http://media.blizzard.com/global-video-player/ratings/wow/en-gb.jpg';
Flash.expressInstall = 'http://media.blizzard.com/global-video-player/expressInstall.swf';
//]]>
</script>
<body class="en-gb forums forums-home" onunload="opener.location=('index.php')">
<div id="wrapper">
	<!-- User Panel -->
	<?php include(WEBKIT.'userpanel.php'); ?>
	<!-- User Panel END -->
	<div id="header">
		<!-- Search -->
		<?php include(WEBKIT.'search.php'); ?>
		<!-- Search END -->
		<h1 id="logo"><a href="<?php echo BASE_URL ?>"><?php echo TITLE ?>
		</a></h1>
		<!-- Header -->
		<div class="header-plate">
			<?php
				$page = "menu-forums";
				include(WEBKIT.'menu.php');
				include(WEBKIT.'userplate.php');?>
		</div>
		<!-- Header END -->
	</div>
	<div id="content">
		<div class="content-top">
			<div class="content-trail">
				<ol class="ui-breadcrumb">
					<li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
					<a href="../index.php" rel="np" class="breadcrumb-arrow" itemprop="url">
					<span class="breadcrumb-text" itemprop="name"><?php echo TITLE ?>
					</span>
					</a>
					</li>
					<li class="last" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
					<a href="../forum" rel="np" rel="np" itemprop="url">
					<span class="breadcrumb-text" itemprop="name">Foro</span>
					</a>
					</li>
				</ol>
			</div>
			<div class="content-bot clear">
				<div id="blizz-tracker-lite">
					<div class="blizzard-posts">
						<h2 class="header-2">MENSAJES DE BLIZZARD M&aacute;S RECIENTES <a href="#">(Ver todo)</a></h2>
						<a href="javascript:;" class="paging-arrow arrow-left"></a>
						<a href="javascript:;" class="paging-arrow arrow-right"></a>
						<div class="mask-wrapper">
							<div class="mask">
								<div class="holder" id="tracker-scroll-container">
									<?php
										$i=0;
										$get_blizzposts =  $db->
									Web("SELECT * FROM forum_blizzposts ORDER BY date DESC"); while($blizzpost = $get_blizzposts->fetch_array()){ if($blizzpost['type'] == "reply"){ $postSql = $db->Web("SELECT * FROM forum_replies WHERE id = '{$blizzpost['postid']}'"); $post = $postSql->fetch_assoc(); $threadId = $post['threadid']; }else{ $postSql = $db->Web("SELECT * FROM forum_threads WHERE id = '{$blizzpost['postid']}'"); $post = $postSql->fetch_assoc(); $threadId = $post['id']; } $forumSql = $db->Web("SELECT * FROM forum_forums WHERE id = '{$post['forumid']}'"); $forum = $forumSql->fetch_assoc(); if($i==0){ echo '
									<div class="set">
										'; } echo'<a class="tracked-blizzard-post" href="category/view-topic/?t='.$threadId.'">
										<span class="desc">
										<span class="int">'; $content = substr($post['content'],0,120); $content=str_replace("[quote", "",$content); $content=str_replace("[/quote]", "",$content); $content=str_replace("[b]", "",$content); $content=str_replace("[/b]", "",$content); $content=str_replace("[i]", "",$content); $content=str_replace("[/i]", "",$content); $content=str_replace("[u]", "",$content); $content=str_replace("[/u]", "",$content); $content=str_replace("[ul]", "",$content); $content=str_replace("[/ul]", "",$content); $content=str_replace("[li]", "",$content); $content=str_replace("[/li]", "",$content); $content=str_replace("[code]", "",$content); $content=str_replace("[/code]", "",$content); $content=str_replace("]", "",$content); $content=stripslashes($content); echo '"'.$content.' ..." </span>
										</span>
										<span class="info">
										<span class="char">
										<span class="employee-icon"></span>'; $userBlizzSQL = $db->Web("SELECT `personaje`, `first_name` FROM `account` WHERE id = '{$blizzpost['author']}'"); $userBlizz = $userBlizzSQL->fetch_assoc(); if($userBlizz['personaje'] == 0){ $char['name'] = $userBlizz['first_name']; }else{ $CharSql= $db->CharSQL("SELECT name FROM characters WHERE guid = '".$userBlizz['personaje']."'"); $char = $CharSql->fetch_assoc(); } echo $char['name'].'</span>
										'.$post['date'].' en <strong>'.$forum['name'].'</strong>: '.$post['name'].' </span>
										</a>'; $i++; if($i==3){ echo '
									</div>
									'; $i=0;} } ?>
									<div class="set">
										<a class="tracked-blizzard-post" href="blizztracker/">
										<span class="desc">
										<span class="int">All Blizzard posts </span>
										</span>
										<span class="info">
										</span>
										</a>
									</div>
								</div>
							</div>
							<div class="mask-edge mask-left">
							</div>
							<div class="mask-edge mask-right">
							</div>
						</div>
					</div>
				</div>
				<span class="clear">
				<!-- -->
				</span>
				<div id="station-content">
					<div class="station-content-wrapper">
						<div class="station-inner-wrapper">
							<div class="full-column" id="forum-list">
								<div class="forum-list-interior">
									<?php
												$get_categs = $db->
									Web("SELECT * FROM forum_categ ORDER BY num ASC"); while($categ = $get_categs->fetch_array()){ echo'
									<div class="forum-group">
										<h2 class="header-2">
										<a id="forum'.$categ['id'].'" href="javascript:;" onclick="Cms.Station.parentToggle('.$categ['id'].',this)" class="group-header">'.$categ['name'].' </a>
										</h2>
										<ul class="child-forums" id="child'.$categ['id'].'">
											'; $get_forums = $db->Web("SELECT * FROM forum_forums WHERE categ = '".$categ['id']."' ORDER BY num ASC"); while($forum = $get_forums->fetch_array()){ echo '
											<li class="child-forum">
											<a href="category/?f='.$forum['id'].'" class="forum-link">
											<span class="forum-icon">
											<img src="'.BASE_URL.'assets/images/forum/forumicons/'.$forum['image'].'.gif"/>
											</span>
											<span class="forum-details">
											<span class="forum-title">
											'.$forum['name'].' <span class="forum-status">
											<strong>'.$forum['status'].'</strong>
											</span>
											</span>
											<span class="forum-desc">'.$forum['description'].' </span>
											</span>
											</a>
											</li>
											'; } echo' <span class="clear">
											<!-- -->
											</span>
										</ul>
									</div>
									'; } ?>
								</div>
								<a class="code-of-conduct" href="#" target="_blank">Forums Code of Conduct</a>
							</div>
							<span class="clear">
							<!-- -->
							</span>
						</div>
					</div>
				</div>
				<script type="text/javascript">
					$(function(){
						Station.initialize();
					})
				</script>
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
<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/cms.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/forum.min.js"></script>
</body>
</html>