<?php

$data = <<<EOD
<rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://my.netscape.com/rdf/simple/0.9/" xmlns:a="http://www.w3.org/2005/Atom">
	<item>
		<a:author>
			<a:name>Item Author</a:name>
		</a:author>
	</item>
</rdf:RDF>
EOD;

$expected = 'Item Author';

?>