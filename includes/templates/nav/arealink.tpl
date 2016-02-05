<div id="arealink">
<div class="tabsarealink">
<ul>


<li {if $run == 'daycast'} class="active" {else} class="silent"{/if}>
<a href="{$wxurl}/{$scriptname}?run=daycast&amp;location={$url_location}&amp;state={$state|lower}">Forecast</a>
</li>


<li {if $run == 'warnings'} class="active" {else} class="silent"{/if}>
<a href="{$wxurl}/{$scriptname}?run=warnings&amp;location={$url_location}&amp;state={$state|lower}">Advisories</a>
</li>

<li {if $run == 'text'} class="active" {else} class="silent"{/if}>
<a href="{$wxurl}/{$scriptname}?run=discussion&amp;location={$url_location}&amp;state={$state|lower}">Discussion</a>
</li>

<li {if $run == 'history'} class="active" {else} class="silent"{/if}>
<a href="{$wxurl}/{$scriptname}?run=wxhistory&amp;location={$url_location}&amp;state={$state|lower}">3 Day History</a>
</li>

<li {if $run == 'nwsradarlite'} class="active" {else} class="silent"{/if}>
<a href="{$wxurl}/{$scriptname}?run=nwsradarlite&amp;location={$url_location}&amp;state={$state|lower}">Local Radar</a>
</li>

<li {if $run == 'nwsradarliteloop'} class="active" {else} class="silent"{/if}>
<a href="{$wxurl}/{$scriptname}?run=nwsradarliteloop&amp;location={$url_location}&amp;state={$state|lower}">Local Radar Loop</a>
</li>
</ul>
</div>
</div>
{if $run == 'nwsradar'}
{include file="nav/nav_local_radar.tpl"}
{else}
{include file="nav/stateextra.tpl"}
{/if}
