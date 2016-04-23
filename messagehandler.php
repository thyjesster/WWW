<?php
echo "MESSAGE SUBMITTED <br> Good Luck hearing back from our monkey staff! <br> You will be redirected in a couple seconds"
setTimeout(function()
{window.location.href="index.php";}, 3000);

header('Content-Type: text/plain');

$form_msg = $_POST['body'];

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
$xslproc->transformToXML($doc);


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$subject = $_POST['subject'];

//SQL HERE TO UPLOAD THIS TO A TABLE VIEWABLE IN ADMIN/USERS.php
$sql = "CREATE TABLE UserMessages (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
subject  VARCHAR(255),
message VARCHAR(30),
reg_date TIMESTAMP
)";

$sql = "INSERT INTO UserMessages (firstname, lastname, email, subject, message)
VALUES ('$firstname', '$lastname', '$email' , '$subject' , '$message' )";
$conn->query($sql);
?>
