<?php
echo "Hello World";

/*
** History of this class:
** This class was originally a HTML file from -
**   http://www.femalenerd.com/javascript/calculator.html
** and I used HTML2php program to convert the HTML file to php program.
** The class 'HTML2php' is also available from  -
**      http://phpclasses.upperdesign.com/browse.html/author/35463
** To make any changes you must first change the calculator.html file,
** test it and then use HTML2php and change the display() function in 
** this class.
**
** USAGE:
	//include_once("calculator.php");
	require_once("calculator.php");
	$calc = new calculator;
	$calc->display();
*/
class calculator 
{

function display()
{
	print("<HTML>\n");
	print("<HEAD>\n");
	print("<TITLE>JavaScript Calculator</TITLE>\n");
	print("<SCRIPT LANGUAGE='JavaScript'>\n");
	print("/**************************************\n");
	print(" *  http://www.femalenerd.com/javascript/calculator.html *\n");
	print(" **************************************/\n");
	print("\n");
	print("// Declare global variables\n");
	print("var displayText = \"\"\n");
	print("var num1\n");
	print("var num2\n");
	print("var operatorType\n");
	print("\n");
	print("// Write to display\n");
	print("function addDisplay(n){\n");
	print("document.calc.display.value = \"\"\n");
	print("displayText += n\n");
	print("document.calc.display.value = displayText\n");
	print("}\n");
	print("\n");
	print("// Addition\n");
	print("function addNumbers() {\n");
	print("if (displayText == \"\") {\n");
	print(" displayText = result\n");
	print(" }\n");
	print("num1 = parseFloat(displayText)\n");
	print("operatorType = \"add\"\n");
	print("displayText = \"\"\n");
	print("}\n");
	print("\n");
	print("// Subtraction\n");
	print("function subtractNumbers() {\n");
	print("if (displayText == \"\") {\n");
	print(" displayText = result\n");
	print(" }\n");
	print("num1 = parseFloat(displayText)\n");
	print("operatorType = \"subtract\"\n");
	print("displayText = \"\"\n");
	print("}\n");
	print("\n");
	print("// Multiplication\n");
	print("function multiplyNumbers() {\n");
	print("if (displayText == \"\") {\n");
	print(" displayText = result\n");
	print(" }\n");
	print("num1 = parseFloat(displayText)\n");
	print("operatorType = \"multiply\"\n");
	print("displayText = \"\"\n");
	print("}\n");
	print("\n");
	print("// Division\n");
	print("function divideNumbers() {\n");
	print("if (displayText == \"\") {\n");
	print(" displayText = result\n");
	print(" }\n");
	print("num1 = parseFloat(displayText)\n");
	print("operatorType = \"divide\"\n");
	print("displayText = \"\"\n");
	print("}\n");
	print("\n");
	print("// Sine\n");
	print("function sin() {\n");
	print("if (displayText == \"\") {\n");
	print(" num1 = result\n");
	print(" }\n");
	print("else {\n");
	print(" num1 = parseFloat(displayText)\n");
	print(" }\n");
	print("if (num1 != \"\") {\n");
	print(" result = Math.sin(num1)\n");
	print(" document.calc.display.value = result\n");
	print(" displayText = \"\"\n");
	print(" }\n");
	print("else {\n");
	print(" alert(\"Please write the number first\")\n");
	print(" }\n");
	print("}\n");
	print("\n");
	print("// Cosine\n");
	print("function cos() {\n");
	print("if (displayText == \"\") {\n");
	print(" num1 = result\n");
	print(" }\n");
	print("else {\n");
	print(" num1 = parseFloat(displayText)\n");
	print(" }\n");
	print("if (num1 != \"\") {\n");
	print(" result = Math.cos(num1)\n");
	print(" document.calc.display.value = result\n");
	print(" displayText = \"\"\n");
	print(" }\n");
	print("else {\n");
	print(" alert(\"Please write the number first\")\n");
	print(" }\n");
	print("}\n");
	print("\n");
	print("// ArcSine\n");
	print("function arcSin() {\n");
	print("if (displayText == \"\") {\n");
	print(" num1 = result\n");
	print(" }\n");
	print("else {\n");
	print(" num1 = parseFloat(displayText)\n");
	print(" }\n");
	print("if (num1 != \"\") {\n");
	print(" result = Math.asin(num1)\n");
	print(" document.calc.display.value = result\n");
	print(" displayText = \"\"\n");
	print(" }\n");
	print("else {\n");
	print(" alert(\"Please write the number first\")\n");
	print(" }\n");
	print("}\n");
	print("\n");
	print("// ArcCosine\n");
	print("function arcCos() {\n");
	print("if (displayText == \"\") {\n");
	print(" num1 = result\n");
	print(" }\n");
	print("else {\n");
	print(" num1 = parseFloat(displayText)\n");
	print(" }\n");
	print("if (num1 != \"\") {\n");
	print(" result = Math.acos(num1)\n");
	print(" document.calc.display.value = result\n");
	print(" displayText = \"\"\n");
	print(" }\n");
	print("else {\n");
	print(" alert(\"Please write the number first\")\n");
	print(" }\n");
	print("}\n");
	print("\n");
	print("// Square root\n");
	print("function sqrt() {\n");
	print("if (displayText == \"\") {\n");
	print(" num1 = result\n");
	print(" }\n");
	print("else {\n");
	print(" num1 = parseFloat(displayText)\n");
	print(" }\n");
	print("if (num1 != \"\") {\n");
	print(" result = Math.sqrt(num1)\n");
	print(" document.calc.display.value = result\n");
	print(" displayText = \"\"\n");
	print(" }\n");
	print("else {\n");
	print(" alert(\"Please write the number first\")\n");
	print(" }\n");
	print("}\n");
	print("\n");
	print("// Square number (number to the power of two)\n");
	print("function square() {\n");
	print("if (displayText == \"\") {\n");
	print(" num1 = result\n");
	print(" }\n");
	print("else {\n");
	print(" num1 = parseFloat(displayText)\n");
	print(" }\n");
	print("if (num1 != \"\") {\n");
	print(" result = num1 * num1\n");
	print(" document.calc.display.value = result\n");
	print(" displayText = \"\"\n");
	print(" }\n");
	print("else {\n");
	print(" alert(\"Please write the number first\")\n");
	print(" }\n");
	print("}\n");
	print("\n");
	print("// Convert degrees to radians\n");
	print("function degToRad() {\n");
	print("if (displayText == \"\") {\n");
	print(" num1 = result\n");
	print(" }\n");
	print("else {\n");
	print(" num1 = parseFloat(displayText)\n");
	print(" }\n");
	print("if (num1 != \"\") {\n");
	print(" result = num1 * Math.PI / 180\n");
	print(" document.calc.display.value = result\n");
	print(" displayText = \"\"\n");
	print(" }\n");
	print("else {\n");
	print(" alert(\"Please write the number first\")\n");
	print(" }\n");
	print("}\n");
	print("\n");
	print("// Convert radians to degrees\n");
	print("function radToDeg() {\n");
	print("if (displayText == \"\") {\n");
	print(" num1 = result\n");
	print(" }\n");
	print("else {\n");
	print(" num1 = parseFloat(displayText)\n");
	print(" }\n");
	print("if (num1 != \"\") {\n");
	print(" result = num1 * 180 / Math.PI\n");
	print(" document.calc.display.value = result\n");
	print(" displayText = \"\"\n");
	print(" }\n");
	print("else {\n");
	print(" alert(\"Please write the number first\")\n");
	print(" }\n");
	print("}\n");
	print("\n");
	print("// Calculations\n");
	print("function calculate() {\n");
	print("if (displayText != \"\") {\n");
	print(" num2 = parseFloat(displayText)\n");
	print("// Calc: Addition\n");
	print(" if (operatorType == \"add\") {\n");
	print(" result = num1 + num2\n");
	print(" document.calc.display.value = result\n");
	print(" }\n");
	print("// Calc: Subtraction\n");
	print(" if (operatorType == \"subtract\") {\n");
	print(" result = num1 - num2\n");
	print(" document.calc.display.value = result\n");
	print(" }\n");
	print("// Calc: Multiplication\n");
	print(" if (operatorType == \"multiply\") {\n");
	print(" result = num1 * num2\n");
	print(" document.calc.display.value = result\n");
	print(" }\n");
	print("// Calc: Division\n");
	print(" if (operatorType == \"divide\") {\n");
	print(" result = num1 / num2\n");
	print(" document.calc.display.value = result\n");
	print(" }\n");
	print(" displayText = \"\"\n");
	print(" }\n");
	print(" else {\n");
	print(" document.calc.display.value = \"Oops! Error!\"\n");
	print(" }\n");
	print("}\n");
	print("\n");
	print("// Clear the display\n");
	print("function clearDisplay() {\n");
	print("displayText = \"\"\n");
	print("document.calc.display.value = \"\"\n");
	print("}\n");
	print("</SCRIPT>\n");
	print("</HEAD>\n");
	print("<BODY BGCOLOR=\"#FFFFFF\" LINK=\"#9C6060\">\n");
	print("\n");
	print("<TABLE>\n");
	print("<TD> \n");
	print("<TABLE BORDER=0 BGCOLOR=\"#AF9999\">\n");
	print("<TD>\n");
	print("<TABLE border=\"0\" cellpadding=\"2\" cellspacing=\"2\">\n");
	print("<FORM NAME=calc>\n");
	print("\n");
	print("<!--\n");
	print("<TR><TD VALIGN=top colspan=6 ALIGN=\"center\"> <H2>Calculator</H2>
	</TD>\n");
	print("-->\n");
	print("<TR>\n");
	print(" <TD COLSPAN=5><INPUT TYPE=text SIZE=22 NAME=display></TD>\n");
	print("<TR align=\"left\" valign=\"middle\">\n");
	print(" <TD><INPUT TYPE=button NAME=\"one\" VALUE=\"  1   \"
	onClick=addDisplay(1)></TD>\n");
	print(" <TD><INPUT TYPE=button NAME=\"two\" VALUE=\"  2   \"
	onClick=addDisplay(2)></TD>\n");
	print(" <TD><INPUT TYPE=button NAME=\"three\" VALUE=\"  3   \"
	onClick=addDisplay(3)></TD>\n");
	print(" <TD><INPUT TYPE=button NAME=\"plus\" VALUE=\"  +   \"
	onClick=addNumbers()></TD>\n");
	print("<TR align=\"left\" valign=\"middle\">\n");
	print(" <TD><INPUT TYPE=button NAME=\"four\" VALUE=\"  4   \"
	onClick=addDisplay(4)></TD>\n");
	print(" <TD><INPUT TYPE=button NAME=\"five\" VALUE=\"  5   \"
	onClick=addDisplay(5)></TD>\n");
	print(" <TD><INPUT TYPE=button NAME=\"six\" VALUE=\"  6   \"
	onClick=addDisplay(6)></TD>\n");
	print(" <TD><INPUT TYPE=button NAME=\"minus\" VALUE=\"   -   \"
	onClick=subtractNumbers()></TD>\n");
	print("<TR align=\"left\" valign=\"middle\">\n");
	print(" <TD><INPUT TYPE=button NAME=\"seven\" VALUE=\"  7   \"
	onClick=addDisplay(7)></TD>\n");
	print(" <TD><INPUT TYPE=button NAME=\"eight\" VALUE=\"  8   \"
	onClick=addDisplay(8)></TD>\n");
	print(" <TD><INPUT TYPE=button NAME=\"nine\" VALUE=\"  9   \"
	onClick=addDisplay(9)></TD>\n");
	print(" <TD><INPUT TYPE=button NAME=\"multiplication\" VALUE=\"  *    \"
	onClick=multiplyNumbers()></TD>\n");
	print("<TR align=\"left\" valign=\"middle\">\n");
	print(" <TD><INPUT TYPE=button NAME=\"zero\" VALUE=\"  0   \"
	onClick=addDisplay(0)></TD>\n");
	print(" <TD><INPUT TYPE=button NAME=\"pi\" VALUE = \" Pi  \"
	onClick=addDisplay(Math.PI)> </TD> \n");
	print(" <TD><INPUT TYPE=button NAME=\"dot\" VALUE=\"   .   \"
	onClick=addDisplay(\".\")></TD>\n");
	print(" <TD><INPUT TYPE=button NAME=\"division\" VALUE=\"   /   \"
	onClick=divideNumbers()></TD>\n");
	print("<TR align=\"left\" valign=\"middle\">\n");
	print(" <TD><INPUT TYPE=button NAME=\"sqareroot\" VALUE=\"sqrt\"
	onClick=sqrt()></TD>\n");
	print(" <TD><INPUT TYPE=button NAME=\"squarex\" VALUE=\" x^2\"
	onClick=square()></TD>\n");
	print(" <TD><INPUT TYPE=button NAME=\"deg-rad\" VALUE=\"d2r \"
	onClick=degToRad()></TD>\n");
	print(" <TD><INPUT TYPE=button NAME=\"rad-deg\" VALUE=\"r2d \"
	onClick=radToDeg()></TD>\n");
	print("<TR align=\"left\" valign=\"middle\">\n");
	print(" <TD><INPUT TYPE=button NAME=\"sine\" VALUE=\" sin \"
	onClick=sin()></TD>\n");
	print(" <TD><INPUT TYPE=button NAME=\"arcsine\" VALUE=\"asin\"
	onClick=arcSin()></TD>\n");
	print(" <TD><INPUT TYPE=button NAME=\"cosine\" VALUE=\"cos\"
	onClick=cos()></TD>\n");
	print(" <TD><INPUT TYPE=button NAME=\"arccosine\" VALUE=\"acs\"
	onClick=arcCos()></TD>\n");
	print("\n");
	print("<TR align=\"left\" valign=\"middle\">\n");
	print(" <TD COLSPAN=2><INPUT TYPE=button NAME=clear VALUE=\"  Clear  \"
	onClick=clearDisplay()></TD>\n");
	print(" <TD COLSPAN=3><INPUT TYPE=button NAME=enter VALUE=\"     =      \"
	onClick=calculate()></TD>\n");
	print("\n");
	print("</TABLE>\n");
	print(" <!--\n");
	print(" <TD VALIGN=top> \n");
	print(" <B>NOTE:</B> All sine and cosine calculations are\n");
	print(" <br>done in radians. Remember to convert first\n");
	print(" <br>if using degrees.\n");
	print(" </TD>\n");
	print(" -->\n");
	print(" \n");
	print("</TABLE>\n");
	print("\n");
	print("\n");
	print("</TABLE>\n");
	print("</BODY>\n");
	print("</HTML>\n");
}

}

php?>
