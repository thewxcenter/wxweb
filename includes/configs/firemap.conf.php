<?php

/**
  
 
NEWCONFIG="wwimage"


swomap_url="http://data.michiganwxsystem.net"
swomap_url_tail="/spc/day{day}_{type}.txt"
swomap_cache="swo{day}_{type}.txt"

firemap_settings="fire.tpl|10|MakeFireMap|get_data|0"



[Image Settings]

save_name="fire_day_{day}_{map}"

map="us_lambert_800x600"

transparency="70"


overlays="{map}_overlay:60|{map}_counties:40"
addoverlays="1"


blankmaps="/home/michiga/public_html/images/basemaps/flat/"
save_path="/home/michiga/public_html/images/spc"
save_url="http://images.michiganwxsystem.com/spc"



[Thumb Settings]
thumbs="1"
[Thumbnails]
thumbset1="_thumb|120|90|jpeg|100"
thumbset2="_320|320|240|jpeg|100"

[Labels]
nodata="No Organized Threat|center|center|12|FFFF00|1|1"
issued="{valid} to {expire}|center|75|10|FFFF00|1|1"


[Title Settings]

800title_TTF_font="calibri.ttf"
800title_TTF_pt="16"


800credit_TTF_font="calibri.ttf"
800credit_TTF_pt="16"

credittext="Day {day} Fire Weather Outlook"
[Legend Settings]




[Watermarks]
;this watermark specific to the convective outlooks
;draws the cross hatching
hatch="sign_hatch.png"


[City Settings]
distance="35"
TTF_font_color="FFFFFF"
TTF_ds_color="000000"
TTF_font_pt="8"
TTF_font="arial.ttf"
marker="square|6|6|FF0000"
dsoutline="1"
[Cities]
1="Detroit,MI"
2="New York,NY"
3="Miami,FL"
4="oklahoma city,ok"
5="kansas city,ks"
6="seattle,wa"
7="las vegas,nv"
8="sacramento,ca"
9="houston,tx"
10="international falls,mn"
11="helena,mt"
12="denver,co"
13="pierre,sd"


[Colors]
4=e4f47a
8=f4480c
10=cd0cf4

DTSM=e4de30
CRIT=f28e70
EXTM=e171f7
TSTM=e4de30

[Legend Settings]
legend_type="single_row_legend_square"

legend_labels="Dry T-storms,Critical,Extremely Critical"
TTF_font="arialbd.ttf"
TTF_font_pt="12"
 */
?>