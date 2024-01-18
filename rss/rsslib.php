<?php
/*
	RSS Extractor and Displayer
	(c) 2007-2010  Scriptol.com - Licence Mozilla 1.1.
	rsslib.php
	
	Requirements:
	- PHP 5.
	- A RSS feed.
	
	Using the library:
	Insert this code into the page that displays the RSS feed:
	
	<?php
	require_once("rsslib.php");
	echo RSS_Display("http://www.xul.fr/rss.xml", 15);
	? >
	
*/

$RSS_Content = array();

function RSS_Tags($item, $type)
{
		$y = array();
		$tnl = $item->getElementsByTagName("title");
		$tnl = $tnl->item(0);
		$title = $tnl->firstChild->textContent;

		$tnl = $item->getElementsByTagName("link");
		$tnl = $tnl->item(0);
		$link = $tnl->firstChild->textContent;
		
		$tnl = $item->getElementsByTagName("pubDate");
		$tnl = $tnl->item(0);
		$date = $tnl->firstChild->textContent;		

		$tnl = $item->getElementsByTagName("description");
		$tnl = $tnl->item(0);
		$description = $tnl->firstChild->textContent;

		$y["title"] = $title;
		$y["link"] = $link;
		$y["date"] = $date;		
		$y["description"] = $description;
		$y["type"] = $type;
		
		return $y;
		
}

function RSS_Channel($channel)
{
	global $RSS_Content;

	$items = $channel->getElementsByTagName("item");
	
	// Processing channel
	
	$y = RSS_Tags($channel, 0);		// get description of channel, type 0
	array_push($RSS_Content, $y);
	
	// Processing articles
	
	foreach($items as $item)
	{
		$y = RSS_Tags($item, 1);	// get description of article, type 1
		array_push($RSS_Content, $y);
	}
}

function RSS_Retrieve($url)
{
	global $RSS_Content;

	$doc  = new DOMDocument();
	$doc->load($url);

	$channels = $doc->getElementsByTagName("channel");
	
	$RSS_Content = array();
	
	foreach($channels as $channel)
	{
		 RSS_Channel($channel);
	}
	
}

function RSS_RetrieveLinks($url)
{
	global $RSS_Content;

	$doc  = new DOMDocument();
	$doc->load($url);

	$channels = $doc->getElementsByTagName("channel");
	
	$RSS_Content = array();
	
	foreach($channels as $channel)
	{
		$items = $channel->getElementsByTagName("item");
		foreach($items as $item)
		{
			$y = RSS_Tags($item, 1);	// get description of article, type 1
			array_push($RSS_Content, $y);
		}
		 
	}

}

function RSS_Links($url, $size = 15)
{
	global $RSS_Content;

	$page = "<ul>";

	RSS_RetrieveLinks($url);
	if($size > 0)
		$recents = array_slice($RSS_Content, 0, $size + 1);

	foreach($recents as $article)
	{
		$type = $article["type"];
		if($type == 0) continue;
		$title = $article["title"];
		$link = $article["link"];
		$page .= "<li>$title</li>\n";			
	}

	$page .="</ul>\n";

	return $page;
	
}

function RSS_Display($url, $size = 15, $site = 0, $withdate = 0)
{
	global $RSS_Content;

	$opened = false;
	$page = "";
	$site = (intval($site) == 0) ? 1 : 0;
	$first = true;

	RSS_Retrieve($url);
	if($size > 0) $recents = array_slice($RSS_Content, $site, $size + 1 - $site);

	$dataRSS = file_get_contents("https://blogs.bard.edu/library/feed/");
	$dataRSS = str_replace("content:encoded>", "content>", $dataRSS);
	$xmlRSS = simplexml_load_string($dataRSS);
	$itemRSS = $xmlRSS->channel;
	$forEachCount = 0;

	foreach($recents as $article)
	{
		$type = $article["type"];
		if($type == 0)
		{
			if($opened == true)
			{
				$page .="\n";
				$opened = false;
			}
			$page .="<b>";
		}
		else
		{
			if($opened == false) 
			{
				$page .= "\n";
				$opened = true;
			}
		}
		$title = $article["title"];
		$link = $article["link"];

		// if($first):
		// 	$page .= "<div class='content-item item rss-article first'>";
		// 	$first = false;
		// else:
		// 	$page .= "<div class='content-item item rss-article'>";
		// endif;
		$page .= "<a href=\"$link\" target=\"_blank\" class=\"rss-link col-sm-3\"><div style='padding-bottom: 10px;'>";

		$rssContent = $itemRSS->item[$forEachCount]->content;
		$docu = new DOMDocument();
		$docu->loadHTML($rssContent);
		$xpath = new DOMXPath($docu);
		$source = $xpath->evaluate("string(//img/@src)");
		if($source != "" || $source != null){
			$page .= "<div class='rss-container'><img class='rss-image card-img mb-2' src='$source' title='' alt='$title item'></div>";
		}
		$forEachCount++;

		$page .= "<h2 class='card-title'>$title</h2>";
/*		if($withdate)
		{
      		$date = $article["date"];
	 		$newdate = date('m/d/Y', strtotime($date)); 
      		$page .="<a href=\"$link\" class='test'><span class='rssdate'>$newdate</span></a>";
    	}*/
		// $description = $article["description"];
		// $page .= "<p>";
		// if($description != false)
		// {
		// 	$descrip2 = substr($description, 0, 200);
		// 	$page .= "<span class='rssdesc'>$descrip2...</span><br><a href='$link' style='font-weight:bold;'>Continue Reading $title</a>";
		// }
		// $page .= "</p>\n";			
		
		// if($type==0)
		// {
		// 	$page .="</b>";
		// }
		// $page .= "<div style='clear:both;'></div></div>";
		$page .= "</div></a>";
	}

	if($opened == true)
	{	
		$page .="\n";
	}



	return $page."\n";
	
}

function RSS_Display_Condensed($url, $size = 15, $site = 0, $withdate = 0)
{
	global $RSS_Content;

	$opened = false;
	$page = "";
	$site = (intval($site) == 0) ? 1 : 0;
	$first = true;

	RSS_Retrieve($url);
	if($size > 0)
		$recents = array_slice($RSS_Content, $site, $size + 1 - $site);

	foreach($recents as $article)
	{
		$type = $article["type"];
		if($type == 0)
		{
			if($opened == true)
			{
				$page .="\n";
				$opened = false;
			}
			$page .="<b>";
		}
		else
		{
			if($opened == false) 
			{
				$page .= "\n";
				$opened = true;
			}
		}
		$title = $article["title"];
		$link = $article["link"];

		if($first):
			$page .= "<div class='rss-article first'>";
			$first = false;
		else:
			$page .= "<div class='rss-article'>";
		endif;

		$page .= "<a href=\"$link\"><h2 class='rss-title'>$title</h2></a>";

		/*if($withdate) //This section commented out for sidebar purposes
		{
      		$date = $article["date"];
	 		$newdate = date('m/d/Y', strtotime($date)); 
      		$page .='<span class="rssdate">'.$newdate.'</span>';
    	}
		$description = $article["description"];
		$page .= "<p>";
		if($description != false)
		{
			$page .= "<span class='rssdesc'>$description</span>";
		}
		$page .= "</p>\n";			
		
		if($type==0)
		{
			$page .="</b>";
		} */
		$page .= "</div>";
	}

	if($opened == true)
	{	
		$page .="\n";
	}



	return $page."\n";
	
}
?>