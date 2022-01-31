<?php
	function capitalize ($text):string{
		$firstUpper = strtoupper($text[0]);
		$restText = substr($text, 1);
		return "{$firstUpper}{$restText}";
	}
	