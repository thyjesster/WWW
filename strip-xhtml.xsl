<?xml version="1.0" encoding="UTF-8" ?>
<xsl:stylesheet
  version="1.0" 
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
>

<xsl:output 
  method="xml"
  omit-xml-declaration="yes"
  indent="yes"
/>

<!-- The purpose of this document is to strip all XHTML tags 
     except <b>, <i>, and <p>. Hyperlinks are allowed
     if and only if their href attributes start with
     the URL prefix defined in $site-url-prefix within
     this file (see below).
-->

<xsl:variable name="site-url-prefix">
  <xsl:text>http://www.uwindsor.ca</xsl:text>
</xsl:variable>

<!-- Match the document... -->
<xsl:template match="/">
  <xsl:apply-templates />
</xsl:template>

<!-- Preserve <div> and <strong> and continue processing content
     inside these tags... -->
<xsl:template match="div|strong">
  <!-- xsl:element constructs a new tag with the name specified
       in its name attribute. (Here this creates a tag with the
       same name... -->
  <xsl:element name="{name()}">
    <xsl:apply-templates />
  </xsl:element>
</xsl:template>

<!-- Match a tags. Only preserve href attributes if the hyperlink
     starts with $site-url-prefix. Otherwise strip such. In
     all cases apply any matching templates to tags nested
     within the hyperlink. -->
<xsl:template match="a">

  <!-- xsl:choose is like a switch statement. xsl:if cannot do "else". -->
  <xsl:choose>

    <!-- If the href attribute starts with $site-url-prefix set at the
         top of this file, then permit this hyperlink... -->
    <xsl:when test="starts-with(@href, $site-url-prefix)">
      <!-- Create a tag called 'a', i.e., <a>... -->
      <xsl:element name="a">
        <!-- Ceate an attribute called 'href' and set its value... -->
        <xsl:attribute name="href">
          <xsl:value-of select="@href" />
        </xsl:attribute>
        <!-- Apply any tags inside the original document's <a> tag... -->
        <xsl:apply-templates />
      </xsl:element>
    </xsl:when>

    <!-- "default" or "else" clause is to NOT emit an <a> tag at all
         but we still want to apply any tags inside the original
         document's <a> rag... -->
    <xsl:otherwise>
      <xsl:apply-templates />
    </xsl:otherwise>

  </xsl:choose>

</xsl:template>

<!-- Match any other tag but strip it. Continue matching everything
     within the tag... -->
<xsl:template match="*">
  <xsl:apply-templates />
</xsl:template>

<!-- Any other attributes, processing instructions, or
     comments are replaced with nothing (empty strings). -->
<xsl:template match="@*|processing-instruction()|comment()">
</xsl:template>

</xsl:stylesheet>
