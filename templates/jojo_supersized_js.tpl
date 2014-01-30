        <script type="text/javascript" src="{$SITEURL}/js/supersized{if !$slideshow}.core{/if}.min.js"></script>
        {if $ssinitialise}<script type="text/javascript">
     jQuery(function($){ldelim}
                $.supersized({ldelim}
                    transition : 'fade',
                    transition_speed : 750,
                    slide_interval : 5000,
                    slide_links : 'blank',
                    slides  :   [
                    {foreach from=$ssimages item=i name=slides}{ldelim}image : '{$SITEURL}/images/{$sscrop}/ssimages/{$i.image}', thumb : ''{if $i.name}, caption : '{$i.name}'{/if}{if $i.caption}, title : '{$i.caption}'{/if}{if $i.link}, url : '{$i.link}'{/if}{rdelim}{if !$.foreach.slides.last},{/if}
                    {/foreach}
                     ]
                {rdelim});
            {rdelim});
        </script>
        {/if}
        <div id="supersizedoverlay">{if $sscontrols}
            <!--Arrow Navigation-->
            <a id="prevslide" class="load-item"></a>
            <a id="nextslide" class="load-item"></a>
            {/if}{if $ssprogress}
            <!--Time Bar-->
            <div id="progress-back" class="load-item">
                <div id="progress-bar"></div>
            </div>
            {/if}{if $sscaptions}
            <div id="slidecaption"></div>
            {/if}{if $ssnav}
             <!--Navigation-->
            <ul id="slide-list"></ul>
            {/if}
        </div>
