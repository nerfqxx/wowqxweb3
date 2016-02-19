<!-- DO NOT TOUCH -->
<?php
require_once('sistema/config.php');

$cuenta->AccountLoginQuery();

if (isset($_GET['id'])){
	$news = $db->Web("SELECT * FROM news WHERE id = '".$_GET['id']."'");
	$rows = $news->fetch_assoc();
	if (!$rows['id']){ 
		$error = true;
	}
}else{
	$error = true;
}
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" class="en-gb">
<head xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<meta http-equiv="imagetoolbar" content="false"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<!-- YOU CAN TOUCH NOW -->
<!-- (If you know what you're doing) -->
<!-- Description of CMS -->
<?php include(WEBKIT.'desc.php'); ?>
<!-- Description of CMS END -->
<title><?php echo $rows['title'].' - '.TITLE ?></title>
<!-- The Styles & Javascripts of the CMS -->
<?php include(WEBKIT.'core.php'); ?>
<!-- The Styles & Javascripts of the CMS END -->
</head>
<body class="en-gb blog-article news">
<div id="wrapper">
	<!-- User Panel -->
	<?php include(WEBKIT.'userpanel.php'); ?>
	<!-- User Panel END -->
	<div id="header">
		<!-- Search -->
		<?php include(WEBKIT.'search.php'); ?>
		<!-- Search END -->
		<h1 id="logo"><a href="/"><?php echo TITLE ?>
		</a></h1>
		<!-- Header -->
		<div class="header-plate">
			<?php
			$page = "menu-home";
			include(WEBKIT.'menu.php');
			include(WEBKIT.'userplate.php');
			?>
		</div>
		<!-- Header END -->
	</div>
	<div id="content">
		<div class="content-top body-top">
			<div class="content-trail">
				<ol class="ui-breadcrumb">
					<li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
						<a href="/" rel="np" class="breadcrumb-arrow" itemprop="url">
							<span class="breadcrumb-text" itemprop="name">WoW Qx Server</span>
						</a>
					</li>
					<li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
						<a href="/" rel="np" class="breadcrumb-arrow" itemprop="url">
							<span class="breadcrumb-text" itemprop="name">Noticias</span>
						</a>
					</li>
					<li class="last" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
						<a href="<?php echo BASE_URL.'blog/'.$rows['id'].'/'.$sistema->Enlace($rows['title']); ?>" rel="np" itemprop="url">
							<span class="breadcrumb-text" itemprop="name"><?php echo $rows['title']; ?></span>
						</a>
					</li>
				</ol>
			</div>
			<div class="content-bot clear">
				<?php include (WEBKIT.'sidebar.php'); ?>
				<div class="left-content">
					<div id="blog" class="article-wrapper" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
						<h2 class="header-2"><span itemprop="headline"><?php echo $rows['title']; ?></span></h2>
						<div class="article-meta">
							<a class="article-author" href="#">
								<span class="author-icon"></span>
									<span itemprop="author"><?php echo $rows['author']; ?>
								</span>
							</a>
							<span class="publish-date" title=""><?php echo $rows['date']; ?></span>
							<a href="#comments" class="comments-link"><?php echo $rows['comments']; ?></a>
						</div>
						<meta itemprop="datePublished" content="2014-05-06T14:00:00+01"/>
						<meta itemprop="dateModified" content="2014-05-06T14:17:18+01"/>
						<meta itemprop="inLanguage" content="en-GB"/>
						<meta itemprop="interactionCount" content="UserComments:106"/>
						<meta itemprop="thumbnailUrl" content=""/>
						<div class="article-content">
							<div class="header-image">
								<img itemprop="image" alt="Siege of Orgrimmar Changes in Patch 6.0 and Warlords of Draenor" src="/assets/images/news/<?php echo $rows['image']; ?>_header.jpg"/>
							</div>
							<div class="detail" itemprop="articleBody">
								<?php echo  html_entity_decode($rows['content']); ?>
							</div>
						</div>
						<div class="community-share">
							<div class="share-wrapper">
								<!--<div class="share-links">
									<a class="facebook" href="https://www.facebook.com/sharer.php?u=http://eu.battle.net/wow/en/blog/14014199/siege-of-orgrimmar-changes-in-patch-60-and-warlords-of-draenor-06-05-2014" onclick="Core.trackEvent('wow- SNS', 'Sharing - Facebook', 'blog 14014199 - en-gb'); window.open(this.href,'','height=450,width=550').focus(); return false;" title="Facebook"></a>
									<a class="twitter" href="http://twitter.com/share?http://eu.battle.net/wow/en/blog/14014199/siege-of-orgrimmar-changes-in-patch-60-and-warlords-of-draenor-06-05-2014" onclick="Core.trackEvent('wow- SNS', 'Sharing - Twitter', 'blog 14014199 - en-gb'); window.open(this.href,'','height=450,width=550').focus(); return false;" title="Twitter"></a>
									<a class="reddit" href="http://www.reddit.com/submit?url=http://eu.battle.net/wow/en/blog/14014199/siege-of-orgrimmar-changes-in-patch-60-and-warlords-of-draenor-06-05-2014" onclick="Core.trackEvent('wow- SNS', 'Sharing - Reddit', 'blog 14014199 - en-gb'); window.open(this.href,'','height=auto,width=auto').focus(); return false;" title="Reddit"></a>
									<span class="clear">
									<!-- 
									</span>
								</div>
								<span class="share-title">Compartir:</span>-->
							</div>
							<div class="like-wrapper">
								<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo BASE_URL.'blog/'.$rows['id'].'/'.$sistema->Enlace($rows['title']); ?>" data-lang="es" data-text="<?php echo $rows['title']; ?>" data-hashtags="wowqx">Tweet</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
							</div>
							<script type="text/javascript">
							//<![CDATA[
							Core.appendFrame("https://www.facebook.com/plugins/like.php?href=<?php echo BASE_URL.'blog/'.$rows['id'].'/'.$sistema->Enlace($rows['title']); ?>;layout=button_count&amp;show_faces=false&amp;width=900&amp;height=20&amp;action=like&amp;font=arial&amp;colorscheme=light&amp;locale=es_ES", 900, 20, $('.like-wrapper'), "facebook-like");
							//]]>
							</script>
							<span class="clear">
							<!-- -->
							</span>
						</div>
						<div class="keyword-list">
							<strong>Tags:</strong>
							<!--<a href="/wow/en/search?k=warlords&amp;f=article">warlords</a>, <a href="/wow/en/search?k=siege%20of%20orgrimmar&amp;f=article">siege of orgrimmar</a>, <a href="/wow/en/search?k=6.0%20SISTEMAs%20patch&amp;f=article">6.0 SISTEMAs patch</a>-->
							<a href="#">en contruccion...</a>,
						</div>
					</div>
					<div id="comments" class="bnet-comments ">
						<h2 class="subheader-2">Cargando comentarios...</h2>
						<h2 class="show">Ha ocurrido un error al cargar los comentarios.</h2>
						<div class="comments-loading">
						</div>
						<!--<script type="text/javascript">
						//<![CDATA[
						$(function() {
						Comments.initialize('eu.en_gb.blog.14014199', '2f92a1439664ab2b2f960a9e898adff3', '0');
						});
						//]]>
						</script>-->
					</div>
				</div>
				<span class="clear">
				<!-- -->
				</span>
				<script type="text/javascript">
				//<![CDATA[
				$(function() {
				Blog.init();
				});
				//]]>
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
var jsonSearchHandlerUrl = '//eu.Flame.net';
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
<script type="text/javascript" src="assets/js/menu.js"></script>
<script type="text/javascript" src="assets/js/wow.js"></script>
<script type="text/javascript" src="assets/js/search-pane.js"></script>
<script type="text/javascript">
//<![CDATA[
$(function() {
Menu.initialize('assets/data/menu.json');
});
//]]>
</script>
<script type="text/javascript" src="assets/js/cms.min.js"></script>
</body>
</html>