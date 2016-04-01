<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>
  <h1>Our Contact Info</h1>
  	<table border="1" text-color="blue" margins="10px 10px 10px 10px">
  		<td><xsl:value-of select="contact/contact_info/address"/></td>
  		<td><xsl:value-of select="contact/contact_info/email"/></td>
  		<td><xsl:value-of select="contact/contact_info/phone"/></td>
  		<td><xsl:value-of select="contact/contact_info/domain"/></td>
  	</table>
  </body>
  </html>
 </xsl:template>
 </xsl:stylesheet>
  	
