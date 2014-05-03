<?php

# Collectd TCPConns plugin

require_once 'conf/common.inc.php';
require_once 'type/GenericStacked.class.php';

## LAYOUT
# tcpconns-XXXX/
# tcpconns-XXXX/tcp_connections-XXXX.rrd

$obj = new Type_GenericStacked($CONFIG, $_GET);
$obj->rrd_title = sprintf('TCP Connections (%s)', $obj->args['pinstance']);
$obj->rrd_vertical = '#';
$obj->rrd_format = '%5.1lf';

$obj->rrd_graph();
