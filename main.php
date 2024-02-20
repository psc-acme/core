<?php

function jsonEncode(object|array $thing): string {
   return json_encode($thing, JSON_THROW_ON_ERROR);
}
