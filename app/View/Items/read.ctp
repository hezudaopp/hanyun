<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
      <title>汉云服务器</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <?php echo $this->Html->css('fuwuqi'); ?>
      <?php echo $this->Html->script(array('price')); ?>
      <style type="text/css">
      <!--
      .STYLE2 {
       color: #1f880d;
       font-size: 24px;
       font-weight: bold;
}
.STYLE3 {
	color: #ff0000;
	font-size: 20px;
	font-weight: bold;
}
.STYLE4 {color: #4e4e4e}
-->
</style>
</head>
<body onLoad="findA(2); <?php $size=count($items); for($i=0; $i<$size; $i++) { ?> resetPrice(<?php echo $i+2; ?>); <?php } ?>" bgcolor="#ffffff" leftmargin="0" topmargin="0" marginheight="0" marginwidth="0" class="gen-1">
        <?php 
// debug($items);
debug($unicom_servers);
debug($double_servers);
debug($unicom_racks);
debug($double_racks);
        ?>
        <?php echo $this->element('header'); ?>
        <?php echo $this->element('level5'); ?>
        <div id="level_6">
                <div class="level">
                       <div class='fuwuqi'>
                            <!-- <div class='fuwuqi_1'>
                                    <div class='fuwuqi_1_1'>
                                            服务器
                                    </div>
                            </div> -->
                            <div id="fuwuqi_menu">
                                <ul>
                                    <?php 
                                    $menus = array("服务器租用", "服务器托管", "机柜租用", "带宽租赁");
                                    $len = count($menus);
                                    if (!isset($_GET['menu'])) $_GET['menu'] = 2;
                                    for ($i=2; $i<=$len+1; $i++) { ?>
                                    <li onmouseover='mover_menu(<?php echo $i.','.$len ?>);' id="yunzhuji_menu_<?php echo $i.'"';
                                    if($i == $_GET['menu']) echo ' class="menu_a"';?> >
                                    <?php 
                                    echo $menus[$i-2];
                                    ?>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>

                            <?php for ($j=2; $j<=$len+1; $j++) { ?>
                            <div class="yunzhuji_left" id="yunzhuji_left_<?php echo $j.'"'; 
                                if ($j != $_GET['menu']) echo ' style="display:none;"' ?>>
<?php if ($menus[$j-2] == "服务器租用") {
$i=2; 
foreach ($items as $item): ?>
<div class='fuwuqi_<?php echo $i; ?>'>
<div class="server_img"></div>
<div style="
float:left;
margin-left:25px;
margin-top:10px;
width:4px;
height:180px;" class="server_img_<?php echo $i; ?>"></div>
<div class="server_arg">
        <ul>
                <input id="item_name_<?php echo $i; ?>" name="item_name" value="<?php echo $item['Item']['name']; ?>" type="hidden">
                <li><font class="cpu"><?php echo $item['Item']['name']; ?></font></li>
                <li><font style="font-family:Arial;">CPU</font>：
                        <font style="font-family:Arial;">
                                <?php 
                                $check = true;
                                foreach ($item['Processer'] as $processer): ?>
                                    <input type="radio" name="cpu_<?php echo $i; ?>" value="
                                    <?php echo $processer['ItemsProcesser']['price']; ?>"
<?php if ($check) { echo ' checked="checked"'; $check = false; }?> onclick="resetPrice(0, this)" t-name="<?php echo $processer['name']; ?>" >
                                    <?php echo $processer['name']; ?>
                                <?php endforeach ?>
                </li>
        </font>
        <li>内存：
                <font style="font-family:Arial;">
                        <?php 
                        $check = true;
                        foreach ($item['Mem'] as $mem): ?>
                            <input type="radio" name="mem_<?php echo $i; ?>" value="<?php echo $mem['ItemsMem']['price']; ?>"
<?php if ($check) { echo ' checked="checked"'; $check = false; }?> onclick="resetPrice(0, this)" t-name="<?php echo $mem['name']; ?>" >
                            <?php echo $mem['name']; ?>
                        <?php endforeach ?>
        </font>
</li>
<li>硬盘：
        <font style="font-family:Arial;">
                <?php 
                $check = true;
                foreach ($item['Disk'] as $disk): ?>
                    <input type="radio" name="disk_<?php echo $i; ?>" value="<?php echo $disk['ItemsDisk']['price']; ?>"
<?php if ($check) { echo ' checked="checked"'; $check = false; }?> onclick="resetPrice(0, this)" t-name="<?php echo $disk['name']; ?>" >
                    <?php echo $disk['name']; ?>
                <?php endforeach ?>
</font>
</li>
<li>带宽：百兆共享<span style="padding-left:60px;"><font style="font-family:Arial;">IP</font>：
<!-- 联通独立<font style="font-family:Arial;">IP</font> -->
<?php 
$check = true;
foreach ($item['Ip'] as $ip): ?>
    <input type="radio" name="ip_<?php echo $i; ?>" value="<?php echo $ip['ItemsIp']['price']; ?>"
<?php if ($check) { echo ' checked="checked"'; $check = false; }?> onclick="resetPrice(0, this)" t-name="<?php echo $ip['name']; ?>" >
    <?php echo $ip['name']; ?>
<?php endforeach ?>
</span></li>
<li>服务：<font style="font-family:Arial;">7*24</font>技术支持</li>
<li>机房：江苏联通数据机房，高速带宽接入</li>
</ul>
</div>
<div class="server_buy">
<div class="price_left">
<input type="hidden" id="base_price_<?php echo $i;?>" name="base_price_<?php echo $i;?>" value="<?php echo floor($item['Item']['price']) ?>">
￥<span id="price_<?php echo $i; ?>"><?php echo floor($item['Item']['price']) ?></span></div>
<div class="price_right">元/年</div>
<div class="price_button">
<a href="javascript:void(0);"  onclick="show('box','close', <?php echo $i; ?>, 'read')">
<?php echo $this->Html->image('/images/lijigoumai.png'); ?>
</a>
</div>
</div>
</div>
    <?php $i++; ?>
    <?php endforeach ?> 
    <?php } else if ($menus[$j-2] == "服务器托管") { ?>
        <div id="server_unicom">
            <div class="server_top">
                <div class="server_top_left">扬州联通托管</div>
                <div class="server_top_right"><?php echo $this->Html->image('/images/rack_hengxian.png'); ?></div>
            </div>
            <div class="server_bottom">
                <div class="server_table">
                    <table>
                        <tr>
                            <td colspan=4 class="server_table_th" style="text-align:left; padding-left:20px;">
                                省级联通机房,提供更高效的服务响应速度，缩短故障处理时间
                            </td>
                        </tr>
                        <tr class="even_row">
                            <td class="server_table_title">类&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;型</td>
                            <?php foreach ($unicom_servers as $unicom_server) { ?>
                            <td><?php echo $unicom_server['Rack']['format']; ?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td class="server_table_title">调&nbsp;&nbsp;试&nbsp;&nbsp;费</td>
                            <?php foreach ($unicom_servers as $unicom_server) { ?>
                            <td><?php echo $unicom_server['Rack']['debug_price']; ?></td>
                            <?php } ?>
                        </tr>
                        <tr class="even_row">
                            <td class="server_table_title">带&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;宽</td>
                            <?php foreach ($unicom_servers as $unicom_server) { ?>
                            <td><?php echo $unicom_server['Rack']['bandwidth']; ?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td class="server_table_title">绑&nbsp;&nbsp;定&nbsp;&nbsp;IP</td>
                            <?php foreach ($unicom_servers as $unicom_server) { ?>
                            <td>免费<?php echo $unicom_server['Rack']['ip_count']; ?></td>
                            <?php } ?>
                        </tr>
                        <tr class="even_row">
                            <td class="server_table_title">电源保障</td>
                            <?php foreach ($unicom_servers as $unicom_server) { ?>
                            <td><?php echo $unicom_server['Rack']['power']; ?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td class="server_table_title">特&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;价</td>
                            <?php 
                            $k = 100;
                            foreach ($unicom_servers as $unicom_server) { 
                                $k++; ?>
                            <input id="item_name_<?php echo $k; ?>" name="item_name" value="<?php echo $unicom_server['Rack']['operator'].$unicom_server['Rack']['name'].$unicom_server['Rack']['format']; ?>" type="hidden">
                            <td><span class="price">￥</span><span class="price" id="price_<?php echo $k; ?>"><?php echo floor($unicom_server['Rack']['price']); ?></span><span class="price">元/年</span></td>
                            <?php } ?>
                        </tr>
                        <tr class="server_table_buy">
                            <td>&nbsp;</td>
                            <?php 
                            $k = 100;
                            foreach ($unicom_servers as $unicom_server) { 
                                $k++; ?>
                            <td>
                                <a href="javascript:void(0);"  onclick="show('box','close', <?php echo $k; ?>)">
                                    <?php echo $this->Html->image('/images/lijigoumai.png'); ?>
                                </a>
                            </td>
                            <?php } ?>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="server_double">
            <div class="server_top">
                <div class="server_top_left">扬州双线托管</div>
                <div class="server_top_right"><?php echo $this->Html->image('/images/rack_hengxian.png'); ?></div>
            </div>
            <div class="server_bottom">
                <div class="server_table">
                    <table>
                        <tr>
                            <td colspan=4 class="server_table_th" style="text-align:left; padding-left:20px;">
                                双线机房+智能DNS解析让你彻底解决互联互通和带宽资源问题
                            </td>
                        </tr>
                        <tr class="even_row">
                            <td class="server_table_title">类&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;型</td>
                            <?php foreach ($double_servers as $double_server) { ?>
                            <td><?php echo $double_server['Rack']['format']; ?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td class="server_table_title">调&nbsp;&nbsp;试&nbsp;&nbsp;费</td>
                            <?php foreach ($double_servers as $double_server) { ?>
                            <td><?php echo $double_server['Rack']['debug_price']; ?></td>
                            <?php } ?>
                        </tr>
                        <tr class="even_row">
                            <td class="server_table_title">带&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;宽</td>
                            <?php foreach ($double_servers as $double_server) { ?>
                            <td><?php echo $double_server['Rack']['bandwidth']; ?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td class="server_table_title">绑&nbsp;&nbsp;定&nbsp;&nbsp;IP</td>
                            <?php foreach ($double_servers as $double_server) { ?>
                            <td>免费<?php echo $double_server['Rack']['ip_count']; ?></td>
                            <?php } ?>
                        </tr>
                        <tr class="even_row">
                            <td class="server_table_title">电源保障</td>
                            <?php foreach ($double_servers as $double_server) { ?>
                            <td><?php echo $double_server['Rack']['power']; ?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td class="server_table_title">特&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;价</td>
                            <?php 
                            $k = 200;
                            foreach ($double_servers as $double_server) { 
                                $k++; ?>
                            <input id="item_name_<?php echo $k; ?>" name="item_name" value="<?php echo $double_server['Rack']['operator'].$double_server['Rack']['name'].$double_server['Rack']['format']; ?>" type="hidden">
                            <td><span class="price">￥</span><span class="price" id="price_<?php echo $k; ?>"><?php echo floor($double_server['Rack']['price']); ?></span><span class="price">元/年</span></td>
                            <?php } ?>
                        </tr>
                        <tr class="server_table_buy">
                            <td>&nbsp;</td>
                            <?php 
                            $k = 200;
                            foreach ($double_servers as $double_server) { 
                                $k++; ?>
                            <td>
                                <a href="javascript:void(0);"  onclick="show('box','close', <?php echo $k; ?>)">
                                    <?php echo $this->Html->image('/images/lijigoumai.png'); ?>
                                </a>
                            </td>
                            <?php } ?>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="pledge">
            <div class="server_top">
                <div class="server_top_left">服务承诺</div>
                <div class="server_top_right"><?php echo $this->Html->image('/images/rack_hengxian.png'); ?></div>
            </div>
                        <div class="server_bottom">
                <div class="server_table">
                    <table>
                        <tr>
                            <td style="text-align:left; padding-left:20px; ">
                                <span class="red_dot">·</span>
                                付款后2个工作日内服务器上架交付客户使用（机器数量大于5个工作日内交付客户）
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:left; padding-left:20px; ">
                                <span class="red_dot">·</span>
                                免一次性设置安装费，上架前代为安装基本服务软件
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:left; padding-left:20px; ">
                                <span class="red_dot">·</span>
                                服务器托管默认带宽为100Mbps共享，5Mbps带宽保证
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:left; padding-left:20px; ">
                                <span class="red_dot">·</span>
                                常见网络攻击处理，根据用户要求提供网络攻击流量图
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:left; padding-left:20px; ">
                                <span class="red_dot">·</span>
                                协助处理远程桌面无法连通、硬件故障排查、更换硬件、网卡禁用、防火墙设置不当、机器网络不通等服务器设置问题.
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:left; padding-left:20px; ">
                                <span class="red_dot">·</span>
                                24×7呼叫中心（Call Center）电话、E-mail、腾讯OICQ技术支持
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:left; padding-left:20px; ">
                                <span class="red_dot">·</span>
                                所有服务器均24×7小时监控运行状态
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:left; padding-left:20px; ">
                                <span class="red_dot">·</span>
                                附加：汉云科技机房每加一个IP加1000元/年
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    <?php } else if ($menus[$j-2] == "机柜租用") { ?>
        <div class="rack">
            <div class="unicom_rack">
                <table>
                    <tr>
                        <th colspan="3" align="left">
                            整机租用[扬州联通]
                        </th>
                    </tr>
                    <tr>
                        <td style="border-bottom: 2px solid #d2d2d2;">规格：<?php echo $unicom_racks[0]['Rack']['format']; ?></td>
                        <td style="border-bottom: 2px solid #d2d2d2; border-right: 2px solid #d2d2d2;">IP：<?php echo $unicom_racks[0]['Rack']['ip_count']; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="border-bottom: 2px solid #d2d2d2;">带宽：<?php echo $unicom_racks[0]['Rack']['bandwidth']; ?></td>
                        <td style="border-bottom: 2px solid #d2d2d2; border-right: 2px solid #d2d2d2;">调试：<?php echo $unicom_racks[0]['Rack']['debug_price']; ?></td>
                        <td style="padding-left: 0px; text-align: center;">
                            <input id="item_name_301" name="item_name" value="<?php echo $unicom_racks[0]['Rack']['operator'].$unicom_racks[0]['Rack']['name'].$unicom_racks[0]['Rack']['format']; ?>" type="hidden">
                            <span class="price">￥</span><span class="price" id="price_301"><?php echo floor($unicom_racks[0]['Rack']['price']); ?></span><span class="price">元/年
                        </td>
                    </tr>
                    <tr>
                        <td>电源：<?php echo $unicom_racks[0]['Rack']['power']; ?></td>
                        <td style="border-right: 2px solid #d2d2d2;">服务：7*24免费服务器监控服务</td>
                        <td style="padding-left: 0px; text-align: center;">
                            <a href="javascript:void(0);"  onclick="show('box','close', '301')">
                                <?php echo $this->Html->image('/images/lijigoumai.png'); ?>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="rack_bottom_text">*电源默认15A，最大可支持30A,详情请联系客服</div>
            <div class="double_rack">
                <table>
                    <tr>
                        <th colspan="3" align="left">
                            整机租用[扬州双线]
                        </th>
                    </tr>
                    <tr>
                        <td style="border-bottom: 2px solid #d2d2d2;">规格：<?php echo $double_racks[0]['Rack']['format']; ?></td>
                        <td style="border-bottom: 2px solid #d2d2d2; border-right: 2px solid #d2d2d2;">IP：<?php echo $double_racks[0]['Rack']['ip_count']; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="border-bottom: 2px solid #d2d2d2;">带宽：<?php echo $double_racks[0]['Rack']['bandwidth']; ?></td>
                        <td style="border-bottom: 2px solid #d2d2d2; border-right: 2px solid #d2d2d2;">调试：<?php echo $double_racks[0]['Rack']['debug_price']; ?></td>
                        <td style="padding-left: 0px; text-align: center;">
                            <input id="item_name_301" name="item_name" value="<?php echo $double_racks[0]['Rack']['operator'].$double_racks[0]['Rack']['name'].$double_racks[0]['Rack']['format']; ?>" type="hidden">
                            <span class="price">￥</span><span class="price" id="price_301"><?php echo floor($double_racks[0]['Rack']['price']); ?></span><span class="price">元/年
                        </td>
                    </tr>
                    <tr>
                        <td>电源：<?php echo $double_racks[0]['Rack']['power']; ?></td>
                        <td style="border-right: 2px solid #d2d2d2;">服务：7*24免费服务器监控服务</td>
                        <td style="padding-left: 0px; text-align: center;">
                            <a href="javascript:void(0);"  onclick="show('box','close', '301')">
                                <?php echo $this->Html->image('/images/lijigoumai.png'); ?>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="rack_bottom_text">*电源默认15A，最大可支持30A,详情请联系客服</div>
            <div class="rack_text_table">
                <table>
                    <tr>
                        <th align="left">
                            <?php echo $this->Html->image('/images/rack_zhuyiantubiao.png'); ?>&nbsp;&nbsp;友情提示
                        </th>
                    </tr>
                    <tr>
                        <td class="rack_text">
                            <span class="red_dot">·</span>&nbsp;&nbsp;
                            配置型主机的配件可以更改，价格请联系我司专员，自行定制服务器配置请联系我司专员
                        </td>
                    </tr>
                    <tr>
                        <td class="rack_text">
                            <span class="red_dot">·</span>&nbsp;&nbsp;
                            汉云科技所有机房禁止放置博彩、色情、低俗、成人用品、药品以及其他一切非法违规网站，
                            <br />&nbsp;&nbsp;&nbsp;&nbsp;禁止架设VPN、代理透穿、挂机等程序和网站，禁止对外恶意扫描和攻击，以上行为一经发现、立刻关闭、并不退款
                        </td>
                    </tr>
                    <tr>
                        <td class="rack_text">
                            <span class="red_dot">·</span>&nbsp;&nbsp;
                            每台服务器必须做好维护日志和访问日志，并且保留时间至少2个月
                        </td>
                    </tr>
                    <tr>
                        <td class="rack_text">
                            <span class="red_dot">·</span>&nbsp;&nbsp;
                            我们提供的托管服务是由您自己管理和维护自己的服务器，请您定期杀毒以及更新补丁，以保证服务器的稳定运行
                        </td>
                    </tr>
                </table>

            </div>
        </div>
    <?php } else if ($menus[$j-2] == "带宽租赁") { ?>
        <div class="bandwidth">
            <div class="bandwidth_title">
                带宽租赁
            </div>
            <div class="bandwidth_table">
                <table>
                    <tr>
                        <th>规格</th>
                        <th>扬州联通</th>
                        <th>扬州双线</th>
                    </tr>
                    <tr>
                        <td>10M独享带宽</td>
                        <td>
                            <input id="item_name_401" name="item_name" value="扬州联通带宽租赁" type="hidden">
                            <span class="price">￥<span class="price" id="price_401">4000</span>元/年</span><br>
                            <a href="javascript:void(0);"  onclick="show('box','close', '401')">
                                <?php echo $this->Html->image('/images/lijigoumai.png'); ?>
                            </a>
                        </td>
                        <td>
                            <input id="item_name_402" name="item_name" value="扬州双线带宽租赁" type="hidden">
                            <span class="price">￥<span class="price" id="price_402">6000</span>元/年</span><br>
                            <a href="javascript:void(0);"  onclick="show('box','close', '402')">
                                <?php echo $this->Html->image('/images/lijigoumai.png'); ?>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="bandwidth_text">
                <div class="bandwidth_description">
                    汉云科技IDC机房是符合运营商星级机房标准的高品质自营机房。<br>机房带宽充足并通过核心设备直联到客户网络，为客户提供汲取单独子网的高品质独享网络带宽使用环境。<br>适用于对网络安全性、带宽品质、带宽可扩展性有更高要求的客户
                </div>
                <div class="bandwidth_feature">
                    <div class="bandwidth_feature_title">
                        主要具有以下特点：
                    </div>
                    <div class="bandwidth_feature_detail">
                        <div><span class="bandwidth_feature_jiantou"><?php echo $this->Html->image('/images/rack_jiantou.png'); ?></span><span>控制广播域、隔离广播风暴</span></div>
                        <div><span class="bandwidth_feature_jiantou"><?php echo $this->Html->image('/images/rack_jiantou.png'); ?></span><span>使用独立Vlan安全性更高，管理更方便</span></div>
                        <div><span class="bandwidth_feature_jiantou"><?php echo $this->Html->image('/images/rack_jiantou.png'); ?></span><span>提高用户体验，保障业务稳定运行</span></div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
                            </div>
                            <div style="font: 0px/0px sans-serif;clear: both;display: block"> </div>
                            <?php } ?>
                        </div>
        <!-- End Save for Web Slices -->
                </div>
        </div>
<?php echo $this->element('footer'); ?>
<?php echo $this->element('user_info'); ?>
</body>
</html>