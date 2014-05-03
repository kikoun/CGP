<?php

# Collectd IPTables plugin

require_once 'conf/common.inc.php';
require_once 'type/GenericStacked.class.php';

## LAYOUT
# iptables/ipt_bytes-XXX.rrd
# iptables/ipt_packets-XXX.rrd

$obj = new Type_GenericStacked($CONFIG, $_GET);

$obj->data_sources = array('value');
switch($_GET['t']) {
	case 'ipt_bytes':
	  $obj->rrd_title = 'Bytes';
	  break;
	case 'ipt_packets':
	  $obj->rrd_title = 'Packets';
	  break;
 }
$obj->rrd_vertical = '';
$obj->rrd_format = '%5.1lf%s';

$obj->rrd_graph();
