<?xml version="1.0" encoding="ISO-8859-1"?> 
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" 
                version="1.0"> 
 
  <xsl:output method="xml"  
    version="1.0"  
    indent="yes"  
    encoding="ISO-8859-1"  
    media-type="text/xml"  
    doctype-public="-//W3C//DTD XHTML 1.0 Transitional//EN"  
    doctype-system="http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"/>  
 
  <xsl:template match="/"> 
    <html> 
      <body bgcolor="#ffffff"> 
        <xsl:apply-templates/> 
      </body> 
    </html> 
  </xsl:template> 
 
  <xsl:template match="book/title"> 
    <h1><xsl:value-of select="."/></h1> 
  </xsl:template> 
   
  <xsl:template match="chapter"> 
    <xsl:apply-templates/> 
  </xsl:template> 
   
  <xsl:template match="chapter/title"> 
    <h2><xsl:value-of select="." /></h2> 
  </xsl:template> 
 
  <xsl:template match="para"> 
    <p><xsl:apply-templates/></p> 
  </xsl:template> 
 
</xsl:stylesheet>
