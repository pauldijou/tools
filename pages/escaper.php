<?php
	if(isset($_POST["code"])) {
		$code = $_POST["code"];
	}
	else {
		$code = "";
	}
	
	if(isset($_POST["submitCode"])) {
		$showLines = isset($_POST["showLinesCheckbox"]);
		$scrollable = isset($_POST["scrollableCheckbox"]);
	}
	else {
		// Default value
		$showLines = true;
		$scrollable = false;
	}
	
	
	
	$escaped_code = htmlspecialchars($code);
	$display_escaped_code = str_replace("&", "&amp;", $escaped_code);
?>
<div class="row">
	<div class="span12">
		<h1>Code Escaper
		<?php include 'inc/show-source.html';?></h1>
	</div>
</div>

<div id="page-content" class="collapse in" style="height:auto;">
	<div class="row">
		 <div class="span6">
			<form method="POST" class="form-horizontal">
				<h2>1. Paste your code here and submit</h2>
				<div class="control-group">
					<textarea name="code" style="width:550px;height:250px;"><?php echo($code); ?></textarea>
				</div>
				<div class="control-group">
					<div class="row">
						<div class="span2">
					<label for="showLinesCheckbox" class="control-label" style="width:90px;">Show lines :</label>
					<div class="controls" style="margin-left:100px;">
					  <label class="checkbox">
						<i class="icon-question-sign" style="cursor:pointer;" rel="tooltip" title="Check it if you want to display line numbers on the left of your code"></i>
						<input type="checkbox" value="true" id="showLinesCheckbox" name="showLinesCheckbox" <?php if($showLines) { echo('checked="checked"'); } ?>>
					  </label>
					</div>
					</div>
					<div class="span2">
					<label for="scrollableCheckbox" class="control-label" style="width:90px;">Scrollable :</label>
					<div class="controls" style="margin-left:100px;">
					  <label class="checkbox">
						<i class="icon-question-sign" style="cursor:pointer;" rel="tooltip" title="Check it if you want your code to be 350 pixels max height (= 19 lines) and scroll in case of overflow"></i>
						<input type="checkbox" value="true" id="scrollableCheckbox" name="scrollableCheckbox" <?php if($scrollable) { echo('checked="checked"'); } ?>>
					  </label>
					</div>
					</div>
					</div>
				</div>
				<div class="control-group">
					<input type="submit" value="Submit" name="submitCode" class="btn btn-primary"/>
				</div>
			</form>
		 </div>
		<div class="span6">
			<h2>2. Copy the escaped version</h2>
<textarea name="code" style="width:550px;height:330px;">&lt;pre class=&quot;prettyprint<?php if($showLines) { echo(' linenums'); } ?><?php if($scrollable) { echo(' pre-scrollable'); } ?>&quot;&gt;
<?php echo($display_escaped_code); ?>&lt;/pre&gt;</textarea>
		</div>
	</div>

	<div class="row">
		<div class="span6">
			<h2>3. Paste it on your website and enjoy the result!</h2>
			<pre class="prettyprint<?php if($showLines) { echo(' linenums'); } ?><?php if($scrollable) { echo(' pre-scrollable'); } ?>"><?php echo($escaped_code); ?></pre>
		</div>
		
		<div class="span6">
			<h2>4. Resources</h2>
			<dl>
				<dt>Configure Bootstrap</dt>
				<dd><a href="http://twitter.github.com/bootstrap/index.html" target="_blank">Download files and import them on your website.</a></dd>
				<dt>Show code with Bootstrap</dt>
				<dd><a href="http://twitter.github.com/bootstrap/base-css.html#code" target="_blank">Read that!</a></dd>
				<dt>Configure Code Prettifier</dt>
				<dd><a href="http://google-code-prettify.googlecode.com/svn/trunk/README.html" target="_blank">Look here!</a><br/><span class="label label-warning">Warning</span> Code Escaper is using the <code>prettify.css</code> remastered by Bootstrap, not the one from Code Prettifier.</dd>
				<dt>Minimum page content</dt>
				<dd>
<pre class="prettyprint linenums">
&lt;html&gt;
&lt;head&gt;
    &lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=utf-8&quot; /&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;css/bootstrap.min.css&quot;&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;css/prettify.css&quot;&gt;
    &lt;script src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js&quot;&gt;&lt;/script&gt;
    &lt;script src=&quot;js/bootstrap.min.js&quot;&gt;&lt;/script&gt;
    &lt;script src=&quot;js/prettify.js&quot;&gt;&lt;/script&gt;
&lt;/head&gt;

&lt;body onload=&quot;prettyPrint()&quot;&gt;
    &lt;!-- your HTML body here --&gt;
&lt;/body&gt;
&lt;/html&gt;</pre>
					<span class="label label-info">Info</span> Here, the minified version of Bootstrap is used but you're free to use the classic version.
					<br/>
					<span class="label label-warning">Warning</span> Be sure to include the last version of jQuery.
				</dd>
			</dl>
		</div>
	</div>
</div>

<div id="page-source" class="collapse" style="height:0px;">
	<pre class="prettyprint linenums">&lt;?php
	if(isset($_POST[&quot;code&quot;])) {
		$code = $_POST[&quot;code&quot;];
	}
	else {
		$code = &quot;&quot;;
	}
	
	if(isset($_POST[&quot;submitCode&quot;])) {
		$showLines = isset($_POST[&quot;showLinesCheckbox&quot;]);
		$scrollable = isset($_POST[&quot;scrollableCheckbox&quot;]);
	}
	else {
		// Default value
		$showLines = true;
		$scrollable = false;
	}
	
	$escaped_code = htmlspecialchars($code);
	$display_escaped_code = str_replace(&quot;&amp;&quot;, &quot;&amp;amp;&quot;, $escaped_code);
?&gt;
&lt;div class=&quot;row&quot;&gt;
	&lt;div class=&quot;span12&quot;&gt;
		&lt;h1&gt;Code Escaper&lt;/h1&gt;
	&lt;/div&gt;
&lt;/div&gt;

&lt;div id=&quot;page-content&quot; class=&quot;collapse in&quot;&gt;
	&lt;div class=&quot;row&quot;&gt;
		 &lt;div class=&quot;span6&quot;&gt;
			&lt;form method=&quot;POST&quot; class=&quot;form-horizontal&quot;&gt;
				&lt;h2&gt;1. Paste your code here and submit&lt;/h2&gt;
				&lt;div class=&quot;control-group&quot;&gt;
					&lt;textarea name=&quot;code&quot; style=&quot;width:550px;height:250px;&quot;&gt;&lt;?php echo($code); ?&gt;&lt;/textarea&gt;
				&lt;/div&gt;
				&lt;div class=&quot;control-group&quot;&gt;
					&lt;div class=&quot;row&quot;&gt;
						&lt;div class=&quot;span2&quot;&gt;
					&lt;label for=&quot;showLinesCheckbox&quot; class=&quot;control-label&quot; style=&quot;width:90px;&quot;&gt;Show lines :&lt;/label&gt;
					&lt;div class=&quot;controls&quot; style=&quot;margin-left:100px;&quot;&gt;
					  &lt;label class=&quot;checkbox&quot;&gt;
						&lt;i class=&quot;icon-question-sign&quot; style=&quot;cursor:pointer;&quot; rel=&quot;tooltip&quot; title=&quot;Check it if you want to display line numbers on the left of your code&quot;&gt;&lt;/i&gt;
						&lt;input type=&quot;checkbox&quot; value=&quot;true&quot; id=&quot;showLinesCheckbox&quot; name=&quot;showLinesCheckbox&quot; &lt;?php if($showLines) { echo('checked=&quot;checked&quot;'); } ?&gt;&gt;
					  &lt;/label&gt;
					&lt;/div&gt;
					&lt;/div&gt;
					&lt;div class=&quot;span2&quot;&gt;
					&lt;label for=&quot;scrollableCheckbox&quot; class=&quot;control-label&quot; style=&quot;width:90px;&quot;&gt;Scrollable :&lt;/label&gt;
					&lt;div class=&quot;controls&quot; style=&quot;margin-left:100px;&quot;&gt;
					  &lt;label class=&quot;checkbox&quot;&gt;
						&lt;i class=&quot;icon-question-sign&quot; style=&quot;cursor:pointer;&quot; rel=&quot;tooltip&quot; title=&quot;Check it if you want your code to be 350 pixels max height (= 19 lines) and scroll in case of overflow&quot;&gt;&lt;/i&gt;
						&lt;input type=&quot;checkbox&quot; value=&quot;true&quot; id=&quot;scrollableCheckbox&quot; name=&quot;scrollableCheckbox&quot; &lt;?php if($scrollable) { echo('checked=&quot;checked&quot;'); } ?&gt;&gt;
					  &lt;/label&gt;
					&lt;/div&gt;
					&lt;/div&gt;
					&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;control-group&quot;&gt;
					&lt;input type=&quot;submit&quot; value=&quot;Submit&quot; name=&quot;submitCode&quot; class=&quot;btn btn-primary&quot;/&gt;
				&lt;/div&gt;
			&lt;/form&gt;
		 &lt;/div&gt;
		&lt;div class=&quot;span6&quot;&gt;
			&lt;h2&gt;2. Copy the escaped version&lt;/h2&gt;
	&lt;textarea name=&quot;code&quot; style=&quot;width:550px;height:330px;&quot;&gt;&amp;lt;pre class=&amp;quot;prettyprint&lt;?php if($showLines) { echo(' linenums'); } ?&gt;&lt;?php if($scrollable) { echo(' pre-scrollable'); } ?&gt;&amp;quot;&amp;gt;
	&lt;?php echo($display_escaped_code); ?&gt;
	&amp;lt;/pre&amp;gt;&lt;/textarea&gt;
		&lt;/div&gt;
	&lt;/div&gt;

	&lt;div class=&quot;row&quot;&gt;
		&lt;div class=&quot;span6&quot;&gt;
			&lt;h2&gt;3. Paste it on your website and enjoy the result!&lt;/h2&gt;
			&lt;pre class=&quot;prettyprint&lt;?php if($showLines) { echo(' linenums'); } ?&gt;&lt;?php if($scrollable) { echo(' pre-scrollable'); } ?&gt;&quot;&gt;&lt;?php echo($escaped_code); ?&gt;&lt;/pre&gt;
		&lt;/div&gt;
		
		&lt;div class=&quot;span5 offset1&quot;&gt;
			&lt;h2&gt;4. Resources&lt;/h2&gt;
			&lt;dl&gt;
				&lt;dt&gt;Configure Bootstrap&lt;/dt&gt;
				&lt;dd&gt;&lt;a href=&quot;http://twitter.github.com/bootstrap/index.html&quot; target=&quot;_blank&quot;&gt;Download files and import them on your website.&lt;/a&gt;&lt;/dd&gt;
				&lt;dt&gt;Show code with Bootstrap&lt;/dt&gt;
				&lt;dd&gt;&lt;a href=&quot;http://twitter.github.com/bootstrap/base-css.html#code&quot; target=&quot;_blank&quot;&gt;Read that!&lt;/a&gt;&lt;/dd&gt;
				&lt;dt&gt;Configure Code Prettifier&lt;/dt&gt;
				&lt;dd&gt;&lt;a href=&quot;http://google-code-prettify.googlecode.com/svn/trunk/README.html&quot; target=&quot;_blank&quot;&gt;Look here!&lt;/a&gt;&lt;br/&gt;&lt;span class=&quot;label label-warning&quot;&gt;Warning&lt;/span&gt; Code Escaper is using the &lt;code&gt;prettify.css&lt;/code&gt; remastered by Bootstrap, not the one from Code Prettifier.&lt;/dd&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;	</pre>
</div>