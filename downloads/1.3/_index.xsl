<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">

  <xsl:variable
      name="downloadPath"
      select="concat( 'http://www.eclipse.org/downloads/download.php?file=/rt/rap/', '1.3/' )" />

  <xsl:template match="/">
    <div id="midcolumn">

      <h1>RAP 1.3</h1>

      <p>
        Release Date: June 23, 2010, together with Eclipse Helios<br/>
        <a href="/rap/noteworthy/1.3/">New &amp; Noteworthy</a>.
        Two service releases (1.3.1 and 1.3.2) are available.
      </p>

      <h2>RAP Tooling</h2>

      <p>
        for use with Eclipse 3.5 and 3.6
      </p>

      <p>
        Software Site:
        <img src="/rap/images/site.gif"/>
        http://download.eclipse.org/rt/rap/1.3/tooling
      </p>

      <h2>RAP Runtime (Target Components)</h2>

      <p>
        based on Eclipse 3.6
      </p>

      <p>
        Software Site:
        <img src="/rap/images/site.gif"/>
        http://download.eclipse.org/rt/rap/1.3/runtime
      </p>

      <xsl:if test="/builds/completed/build">
        <h2>Completed Builds</h2>
        <xsl:apply-templates select="/builds/completed"/>
      </xsl:if>

      <xsl:if test="/builds/planned/build">
        <h2>Planned Builds</h2>
        <xsl:apply-templates select="/builds/planned"/>
      </xsl:if>

    </div>

    <!-- 
    <div id="rightcolumn">
       {SIDEBAR:ARCHIVE}
    </div>
    -->
  </xsl:template>

  <!-- Template for a category of builds (planned/completed) -->
  <xsl:template match="builds/*">
  
    <xsl:if test="build[@type = 'SR']">
      <h3>Service Releases</h3>
      <table class="builds">
        <xsl:apply-templates select="build[@type = 'SR']"/>
      </table>
    </xsl:if>

    <xsl:if test="build[@type = 'R']">
      <h3>Release</h3>
      <table class="builds">
        <xsl:apply-templates select="build[@type = 'R']"/>
      </table>
    </xsl:if>

    <xsl:if test="build[@type = 'RC']">
      <h3>Release Candidate Builds</h3>
      <table class="builds">
        <xsl:apply-templates select="build[@type = 'RC']"/>
      </table>
    </xsl:if>

    <xsl:if test="build[@type = 'M']">
      <h3>Milestone Builds</h3>
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
        <xsl:value-of select="@publishDate"/>
      </td>
      <td>
        <xsl:if test="@news != ''">
          <a>
            <xsl:attribute name="href">
              <xsl:value-of select="concat( '/rap/noteworthy/', @news )"/>
            </xsl:attribute>
            New &amp; Noteworthy
          </a>
        </xsl:if>
      </td>
      <td>
        <xsl:if test="@relnotes != ''">
          <a>
            <xsl:attribute name="href">
              <xsl:value-of select="concat( 'http://www.eclipse.org/rap/noteworthy/', @relnotes )"/>
            </xsl:attribute>
            Release Notes
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
