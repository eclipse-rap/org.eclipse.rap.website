<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">

  <xsl:variable
      name="downloadPath"
      select="concat( 'http://www.eclipse.org/downloads/download.php?file=/rt/rap/', '1.4/' )" />

  <xsl:template match="/">
    <div id="midcolumn">

      <h1>RAP 1.4 (planned)</h1>

      <p>
        Release Date: June 2011, together with Eclipse Indigo<br/>
        <a href="/rap/noteworthy/1.4/">New &amp; Noteworthy</a>
      </p>

      <h3>RAP Tooling</h3>

      <p>
        for use with Eclipse 3.6 and 3.7
      </p>

      <p>
        Software Site:
        <img src="/rap/images/site.gif"/>
        http://download.eclipse.org/rt/rap/1.4/tooling
      </p>

      <h3>RAP Runtime (Target Components)</h3>

      <p>
        based on Eclipse 3.7
      </p>

      <p>
        Software Site:
        <img src="/rap/images/site.gif"/>
        http://download.eclipse.org/rt/rap/1.4/runtime
      </p>

      <xsl:if test="/builds/completed/build">
        <h3>Completed Builds</h3>
        <xsl:apply-templates select="/builds/completed"/>
      </xsl:if>

      <xsl:if test="/builds/planned/build">
        <h3>Planned Builds</h3>
        <xsl:apply-templates select="/builds/planned"/>
      </xsl:if>

    </div>

    <div id="rightcolumn">
       {SIDEBAR:ARCHIVE}
    </div>

  </xsl:template>

  <!-- Template for a category of builds (planned/completed) -->
  <xsl:template match="builds/*">
  
    <xsl:if test="build[@type = 'SR']">
      <h4>Service Releases</h4>
      <table class="builds">
        <xsl:apply-templates select="build[@type = 'SR']"/>
      </table>
    </xsl:if>

    <xsl:if test="build[@type = 'R']">
      <h4>Release</h4>
      <table class="builds">
        <xsl:apply-templates select="build[@type = 'R']"/>
      </table>
    </xsl:if>

    <xsl:if test="build[@type = 'RC']">
      <h4>Release Candidate Builds</h4>
      <table class="builds">
        <xsl:apply-templates select="build[@type = 'RC']"/>
      </table>
    </xsl:if>

    <xsl:if test="build[@type = 'M']">
      <h4>Milestone Builds</h4>
      <table class="builds">
        <xsl:apply-templates select="build[@type = 'M']"/>
      </table>
    </xsl:if>
  </xsl:template>
  
  <!-- Template for one single build -->
  <xsl:template match="builds//build">
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
            <xsl:value-of select="concat( $downloadPath, @toolingZip )"/>
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
            <xsl:value-of select="concat( $downloadPath, @runtimeZip )"/>
          </xsl:attribute>
          <img src="/rap/images/zip.gif"/>
          Runtime
        </a>
        </xsl:if>
      </td>
    </tr>
  </xsl:template>

</xsl:stylesheet>
