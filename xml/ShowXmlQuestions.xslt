<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0 " xmlns:xsl="http://www.w3.org/1999/XSL/Transform" >
<xsl:template match="/">
<HTML>
<BODY>
<table border="1">
<tr>
	<th>Autor</th>
	<th>Enunciado</th>
	<th>Respuesta Correcta</th>
	<th>Respuestas Incorrectas</th>
	<th>Tema</th>
</tr>
	<xsl:for-each select="/assessmentItems/assessmentItem">
<tr>
	<td><xsl:value-of select="@author"/></td>
	<td><xsl:value-of select="/itemBody/p"/></td>
	<td><xsl:value-of select="/correctResponse/value"/></td>
	<td><xsl:value-of select="/incorrectResponses"/></td>
	<td><xsl:value-of select="@subject"/></td>
</tr>
	</xsl:for-each>


</table>
</xsl:template>
</xsl:stylesheet>