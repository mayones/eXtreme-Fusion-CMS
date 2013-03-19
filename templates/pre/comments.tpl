{if ! $only_comments}
	{php} opentable(__('Add comments')) {/php}
	{if $can_comment}
		<script>
		{literal}
			$(function() 
			{
				$("input[type='text'], textarea").each(function() 
				{
					$(this).addClass('defValue');
				});

				$("input[type='text'], textarea").focus(function() 
				{
					var a = $(this);
					if (a.hasClass('defValue')) {
						a.val('');
						a.removeClass('defValue');
					};
				});
			});{/literal}
		</script>
		<div id="comment_form">
			<p id="loading" class="center hide info close-valid">{i18n('Adding your comment')}</p>
			<p id="added" class="center hide valid close-valid">{i18n('Comment has been added')}</p>
			<form method="post" action="{$URL_REQUEST}" class="center" name="comment">
				{if $iGUEST}
					<div><input id="author" type="text" name="author" value="{i18n('Identification')}" /></div>
				{/if}
				<div><textarea id="post" rows="4" class="cm_textarea" name="post">{i18n('Enter a comment')}</textarea></div>
				<div>
					{section=bbcode}
						<button type="button" onClick="addText('{$bbcode.textarea}', '[{$bbcode.value}]', '[/{$bbcode.value}]', 'comment');"><img src="{$bbcode.image}" title="{$bbcode.description}" class="tip"></button>
					{/section}
				</div>
				<div>
					{section=smiley}
						<img src="{$ADDR_IMAGES}smiley/{$smiley.image}" title="{$smiley.text}" class="tip" onclick="insertText('{$smiley.textarea}', '{$smiley.code}', 'comment');">
						{if $smiley.i % 10 == 0}</div><div>{/if}
					{/section}
				</div>
				<input id="item" type="hidden" name="item" value="{$item}" />
				<input id="type" type="hidden" name="type" value="{$type}" />
				<div class="center"><span id="send" class="button">{i18n('Add replay')}</span></div>
			</form>
		</div>
	{else}
		<p class="center">{i18n('Commenting has been disabled for Your group permissions')}</p>
	{/if}
	{php} closetable() {/php}
	<div id="comment-block">
{/if}


{if $comment}
	<div id="comments">
		{section=comment}
			<div class="comment" id="body_{$comment.id}">
				<div class="cm_avatar center">
					<img src="{$comment.avatar}" alt="none_avatar" width="60px" />
				</div>
				<div class="cm_content">
					<div class="cm_content2">
						<div class="details">
							{$comment.author}, {$comment.datestamp}
							{if $comment.edit}
								<a href="{$ADDR_AJAX}comments.php?id={$comment.id}&amp;action=edit&amp;request=get" id="{$comment.id}" rel="facebox" class="facebox">[Edycja]</a>
							{/if}
							{if $comment.delete}
								<a href="{$ADDR_AJAX}comments.php?id={$comment.id}&amp;action=delete&amp;request=get" id="{$comment.id}" rel="facebox">[Usuń]</a>
							{/if}
						</div>
						<div class="cm_post" id="content_{$comment.id}">
							{$comment.post}
						</div>
					</div>
				</div>
			</div>
		{/section}
	</div>
{/if}

{if ! $only_comments}</div>{/if}