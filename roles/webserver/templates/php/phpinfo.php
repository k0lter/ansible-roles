<?php
{% if ansible_controlled is defined and ansible_controlled != "" %}
#
# {{ ansible_controlled }}
#
{% endif %}
phpinfo();
?>
