<?php
{% if ansible_prolog -%}
{% from 'templates/ansible/prolog.j2' import prolog with context %}
{{ prolog() }}
{% endif -%}

define('USE_AUTHENTICATION', 0);
require_once '/usr/share/doc/php-apc/apc.php';
?>
