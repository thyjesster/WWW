<?php
header('Content-Type: text/plain');

$form_msg = $_POST['msg'];

echo <<<ZZEOF
=============================================================================
The original \$_POST['msg'] text value is...
=============================================================================

ZZEOF;
print_r($form_msg);

echo <<<ZZEOF

=============================================================================

HTML editors spit out HTML text but a malicious hacker could 
also send malicious content so it needs to be cleaned up.

For HTML or XML content, use PHP's tidy() operations to clean
things up (e.g., http://php.net/manual/en/book.tidy.php ).
The "tidy" operations are part of a shell utility called
"HTML Tidy".

The example below are appied to \$_POST['msg'].

For example to ensure all tags are closed without adding
any html, head, and body tags around the content (i.e.,
valid XHTML)...

=============================================================================

ZZEOF;

// NOTE: We will wrap $form_msg into a basic HTML5 document to help tidy...
$form_msg = '<!DOCTYE html><head><title></title></head><body>'.$form_msg.'</body></html>';

$tidy = 
  tidy_parse_string(
    $form_msg,
    // For the options for the next argument,
    // see: http://tidy.sourceforge.net/docs/quickref.html
    // NOTE: "yes" must be set to "true" and "no" must be
    //       set to "false".
    array(
      'clean' => true,
      'doctype' => 'auto',
      'output-xhtml' => true,
      'show-body-only' => true,
      'drop-empty-paras' => true,
      'drop-font-tags' => true,
      'drop-proprietary-attributes' => true,
      'wrap' => 0,
    ),
    'UTF8'  // Use UTF-8 encoding.
  )
;

// Clean up the parsed document...
$tidy->cleanRepair();

print_r($tidy);

echo <<<ZZEOF

=============================================================================
In many instances, one will want to clean up the output 
further by limiting the tags that can appear, etc.
By using the tidy output (if one has it set to output valid
XML/XHTML), one can safely invoke an XSLT processor to
perform the rest of the cleaning.

The above pushed through strip-xhmtml.xsl produces...
=============================================================================

ZZEOF;

// Before pumping $tidy->Body()->value into the XSLT processor, first
// place the contents within the <body> tag into a string surrounded
// by a <div> tag...
$almost_clean = '<div>'.$tidy->value.'</div>';

// Load the XSLT processor and the the XSL script...
$xsldoc = new DOMDocument();
$xsldoc->load('strip-xhtml.xsl');

$xslproc = new XSLTProcessor();
$xslproc->importStyleSheet($xsldoc);

// Load up the document to be processed as a DOMDocument...
$doc = new DOMDocument();
// See: http://php.net/manual/en/class.domdocument.php
// If from a file, use $doc->load('filename.xml');
// If XML/XHTML, use...
$doc->loadXML($almost_clean);

// Invoke the XSLTProcessor and output the results...
echo $xslproc->transformToXML($doc);

echo <<<ZZEOF

=============================================================================

Which is now your cleaned-up text that is safe to use. Edit the XSLT
script accordingly to preserve any additional tags you want. Obviously
turn off features in TinyMCE that produce things you don't want.

NOTE: Email the instructor if you need help with XSLT functionality but
      what is here is enough to do many simple cleaning operations.
=============================================================================
ZZEOF;
?>
