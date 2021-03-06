<?php 
/**
 * 
 * Link(友情链接)
 *
 * @package      	YIGECMS_Corp
 *
 * @license         http://www.YIGECMS.cn/license.txt
 * @version        	$Id: LinkModel.class.php v2.0 2010-01-01 06:59:03 

 */
 
import("AdvModel");
class LinkModel extends AdvModel 
{
    protected $_validate = array(
        array('title','require', '网站名称必填', 3),
        array('link_url','require', '链接地址必填', 3),
    );
    protected $_auto = array(
        array('title', 'dHtml', Model:: MODEL_UPDATE, 'function'),
        array('link_url', 'cvHttp', Model:: MODEL_BOTH, 'function'),
        array('create_time', 'time', Model:: MODEL_INSERT, 'function'),
        array('update_time', 'time', Model:: MODEL_UPDATE, 'function'),
    );
}