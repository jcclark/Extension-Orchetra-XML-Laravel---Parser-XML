# Extension-Orchetra-XML-Laravel---Parser-XML
 Extending Orchetra to Parser XML Attributes


Uses

Add Class
use Orchestra\Parser\Xml\SimpleXMLAttribute as SimpleXMLAttribute;


Simple Use
$makeXml = $file->getRealPath();
$xml = simplexml_load_file($makeXml, SimpleXMLAttribute::class, LIBXML_NOCDATA);
