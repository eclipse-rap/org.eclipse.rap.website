<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    version="1.0">

  <xsl:template match="/">
    <div id="midcolumn">

      <h1>RAP 1.3</h1>

      <p>
        Release Date: June 23, 2010, together with Eclipse Helios<br/>
        <a href="/rap/noteworthy/1.3/">New &amp; Noteworthy</a>
      </p>

      <h3>RAP Tooling</h3>

      <p>
        for use with Eclipse 3.5 and 3.6
      </p>

      <p>
        Software Site:
        <img src="/rap/images/site.gif"/>
        http://download.eclipse.org/rt/rap/1.3/tooling
      </p>

      <h3>RAP Runtime (Target Components)</h3>

      <p>
        based on Eclipse 3.6
      </p>

      <p>
        Software Site:
        <img src="/rap/images/site.gif"/>
        http://download.eclipse.org/rt/rap/1.3/runtime
      </p>

      <h3>Completed Builds</h3>

      <h4>Releases</h4>

      <table class="builds">
        <xsl:apply-templates select="/version/build[@type = 'R']"/>
      </table>

      <h4>Release Candiate Builds</h4>

      <table class="builds">
        <xsl:apply-templates select="/version/build[@type = 'RC']"/>
      </table>

      <h4>Milestone Builds</h4>

      <table class="builds">
        <xsl:apply-templates select="/version/build[@type = 'M']"/>
      </table>

    </div>
  </xsl:template>

  <!-- Template for one build -->
  <xsl:template match="version/build">
    <tr>
      <td class="build-header">
        <xsl:value-of select="@name"/>
      </td>
      <td>
        <xsl:value-of select="@buildDate"/>
      </td>
      <td>
        <xsl:if test="@news != ''">
          <a>
            <xsl:attribute name="href">
              <xsl:value-of select="concat( 'http://www.eclipse.org/rap/noteworthy/', @news )"/>
            </xsl:attribute>
            New &amp; Noteworthy
          </a>
        </xsl:if>
      </td>
      <td>
        <xsl:if test="@toolingZip != ''">
        <a>
          <xsl:attribute name="href">
            <xsl:value-of select="concat( 'http://www.eclipse.org/downloads/download.php?file=/rt/rap/', @toolingZip )"/>
          </xsl:attribute>
          <img src="/rap/images/zip.gif"/>
          Tooling
        </a>
        </xsl:if>
      </td>
      <td>
        <xsl:if test="@runtimeZip != ''">
        <a>
          <xsl:attribute name="href">
            <xsl:value-of select="concat( 'http://www.eclipse.org/downloads/download.php?file=/rt/rap/', @runtimeZip )"/>
          </xsl:attribute>
          <img src="/rap/images/zip.gif"/>
          Runtime
        </a>
        </xsl:if>
      </td>
    </tr>
  </xsl:template>

</xsl:stylesheet>
