<?php

$function=$_GET['function'];
$sample=$_GET['sample'];

if($function=="")
{

echo "<!DOCTYPE html>";
	echo "<html lang=\"en\">";
	echo "<head>";
	echo "<link href=\"https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,400;0,800;1,400&display=swap\" rel=\"stylesheet\">";
	echo "
		<style>
		body {
		  color: black;
		  font-family: 'Bitter', serif;
		}

		h1 {
		  color: maroon;
		  font-family: 'Bitter', serif;
		} 
		
		h2 {
			font-weight: normal;
			text-decoration: italic;
		}
		</style>";
		
	echo "</head>";
	
	echo "<body>";

echo "<h1>Text Variables in action!</h1>";

echo "<h2>Some demos to illustrate the concepts in my <i>InDesign Magazine</i> story</h2>";

echo "<p>If you have a basic understanding of PHP scripting and have regular needs for these files, you can modify my script and install it on a web server. Or you can download a free version of <a href=\"https://www.mamp.info/\" target=\"_new\">MAMP</a> to run a self-contained web server on your own computer.</p>";

echo "<p>To get this code &mdash; easily modified &mdash; for your own server and workflow, visit <a href=\"http://www.github.com/commonsnews/inddmag_2020/\">http://www.github.com/commonsnews/inddmag_2020.</a></p>";

echo "<p>In the meantime, try it here to see proof of concept! <i>&mdash;Jeff Potter</i></p>";

echo "<h3>Simple scenario: Generate a single document from your data via a web form</h2>";
	
echo "<p>This example takes a master IDML template designed as a specific form and merges data input from a web browser to create a new IDML file on the fly. (You might want to consider using Data Merge for this scenario, although the geekery behind it is cool. It could be useful when you need forms quickly.)</p>";

	echo "<p><a href=\"textvariables.php?function=build&template=madlibs&fieldname_var01=Verb%20(past%20tense)&fieldname_var02=Proper%20noun&fieldname_var03=Breakfast&fieldname_var04=Animal&fieldname_var05=Politician&fieldname_var06=Location&fieldname_var07=Dinner%20utensil&fieldname_var08=Body%20part&fieldname_var09=Actor&fieldname_var10=Species%20of%20fish\">Click here for &ldquo;Mad Libs&rdquo;&ndash;style demo</a></p>";
	
echo "<h3>More complex and more useful scenario: Generate a document with your data, to be imported into many related InDesign documents</h2>";

echo "<p>Use an IDML template to return a merged IDML document that&rsquo;s intended to hold the variables for multiple other InDesign projects (book titles and ISBNs across book covers, interiors, and collateral; product labels and packaging; issues of newspapers and magazines)</p>";

echo "<p><a href=\"library/booksample_templates.zip\">Download sample files for this demo</a></p>";

echo "<p><a href=\"textvariables.php?function=build&template=booksample&&fieldname_var01=01authorlast&fieldname_var02=02authorfirst&fieldname_var03=03authorfull&fieldname_var04=04title&fieldname_var05=05subtitle&fieldname_var06=06category&fieldname_var07=07isbn&fieldname_var08=08imprint&fieldname_var09=09price&fieldname_var10=10youtryone\">Generate your IDML file</a></p>";

echo "<h3>A real-world scenario: Generate a single document with your own text variables and their values</h2>";

echo "<p>You&rsquo;re on you&rsquo;re own here! Try creating a document with some data you might use for your own purposes. Fill out the form to define both the name of the text variables and their respective values.</p>";
echo "<p><a href=\"textvariables.php?function=build\">Generate your IDML file</a></p>";

	
	echo "</body>";
	echo "</html>";

}

if($function=="build")
{

$template=$_GET['template'];

//field names -- you can add more fieldnames and variables in the same way.

$fieldname_var01=$_GET['fieldname_var01'];
$fieldname_var02=$_GET['fieldname_var02'];
$fieldname_var03=$_GET['fieldname_var03'];
$fieldname_var04=$_GET['fieldname_var04'];
$fieldname_var05=$_GET['fieldname_var05'];
$fieldname_var06=$_GET['fieldname_var06'];
$fieldname_var07=$_GET['fieldname_var07'];
$fieldname_var08=$_GET['fieldname_var08'];
$fieldname_var09=$_GET['fieldname_var09'];
$fieldname_var10=$_GET['fieldname_var10'];



	echo "<!DOCTYPE html>";
	echo "<html lang=\"en\">";
	echo "<head>";
	echo "<link href=\"https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,400;0,800;1,400&display=swap\" rel=\"stylesheet\">";
	echo "
		<style>
		body {
		  color: black;
		  font-family: 'Bitter', serif;
		}

		h1 {
		  color: maroon;
		  font-family: 'Bitter', serif;
		} 
		</style>";
		
	echo "</head>";
	
	echo "<body>";

	echo "<h1>InDesign text variable file builder</h1>";
	echo "<p>Instructions: Populate these fields with the InDesign Text Variable data, respectively. If the link to this script is configured to allow you to choose your text variable names, do that as well.</p>";
	echo "<p>Your IDML file will download from your browser, with the filename as the first variable.</p>";
	echo "<p>Your data is not captured here. Once your file downloads, it vanishes into the ether.</p>";
	
/*

This form will either accept InDesign text variable names via values passed through the URL or let users create their own to populate with values.

*/	

if($template<>"")
{echo "<p><i>Using IDML template </i><b>".$template."</b></p>";}
else
{echo "<p><i>Using </i><b>default IDML template</b></p>";}


	echo "<form method=\"get\" action=\"textvariables.php\">";
	echo "<table>";
	echo "<tr><td>Text Variable 1";
	if($fieldname_var01!=""){echo " &mdash; ".$fieldname_var01.": ";}
	else {
		echo ":</td><td><input type=\"text\" name=\"fieldname_var01\" length=\"50\">";
		}
	
	echo "</td><td>Data: <input type=\"text\" name=\"var01\" length=\"100\"></td></tr>";
	
	echo "<tr><td>Text Variable 2";
	if($fieldname_var02!=""){echo " &mdash; ".$fieldname_var02.": ";}
	else {
		echo ":</td><td><input type=\"text\" name=\"fieldname_var02\" length=\"50\">";
		}
	
	echo "</td><td>Data: <input type=\"text\" name=\"var02\" length=\"100\"></td></tr>";

	echo "<tr><td>Text Variable 3";
	if($fieldname_var03!=""){echo " &mdash; ".$fieldname_var03.": ";}
	else {
		echo ":</td><td><input type=\"text\" name=\"fieldname_var03\" length=\"50\">";
		}
	
	echo "</td><td>Data: <input type=\"text\" name=\"var03\" length=\"100\"></td></tr>";
	
	echo "<tr><td>Text Variable 4";
	if($fieldname_var04!=""){echo " &mdash; ".$fieldname_var04.": ";}
	else {
		echo ":</td><td><input type=\"text\" name=\"fieldname_var04\" length=\"50\">";
		}
	
	echo "</td><td>Data: <input type=\"text\" name=\"var04\" length=\"100\"></td></tr>";
	
	
	echo "<tr><td>Text Variable 5";
	if($fieldname_var05!=""){echo " &mdash; ".$fieldname_var05.": ";}
	else {
		echo ":</td><td><input type=\"text\" name=\"fieldname_var05\" length=\"50\">";
		}
	
	echo "</td><td>Data: <input type=\"text\" name=\"var05\" length=\"100\"></td></tr>";
	

	echo "<tr><td>Text Variable 6";
	if($fieldname_var06!=""){echo " &mdash; ".$fieldname_var06.": ";}
	else {
		echo ":</td><td><input type=\"text\" name=\"fieldname_var06\" length=\"50\">";
		}
	
	echo "</td><td>Data: <input type=\"text\" name=\"var06\" length=\"100\"></td></tr>";
	
		echo "<tr><td>Text Variable 7";
	if($fieldname_var07!=""){echo " &mdash; ".$fieldname_var07.": ";}
	else {
		echo ":</td><td><input type=\"text\" name=\"fieldname_var07\" length=\"50\">";
		}
	
	echo "</td><td>Data: <input type=\"text\" name=\"var07\" length=\"100\"></td></tr>";
	
	echo "<tr><td>Text Variable 8";
	if($fieldname_var08!=""){echo " &mdash; ".$fieldname_var08.": ";}
	else {
		echo ":</td><td><input type=\"text\" name=\"fieldname_var08\" length=\"50\">";
		}
	
	echo "</td><td>Data: <input type=\"text\" name=\"var08\" length=\"100\"></td></tr>";
	
	echo "<tr><td>Text Variable 9";
	if($fieldname_var09!=""){echo " &mdash; ".$fieldname_var09.": ";}
	else {
		echo ":</td><td><input type=\"text\" name=\"fieldname_var09\" length=\"50\">";
		}
	
	echo "</td><td>Data: <input type=\"text\" name=\"var09\" length=\"100\"></td></tr>";
	
	echo "<tr><td>Text Variable 10";
	if($fieldname_var10!=""){echo " &mdash; ".$fieldname_var10.": ";}
	else {
		echo ":</td><td><input type=\"text\" name=\"fieldname_var10\" length=\"50\">";
		}
	
	echo "</td><td>Data: <input type=\"text\" name=\"var10\" length=\"100\"></td></tr>";
	


		
	echo "</table>";
	echo "<input name=\"submit\" type=\"submit\" value=\"Submit\" />";	
	
	if($sample=="y"){
		echo "<input name=\"function\" value=\"sample\" type=\"hidden\" />";

	}
	else {
		echo "<input name=\"function\" value=\"submit\" type=\"hidden\" />";
	}
	
	
		echo "<input name=\"template\" value=\"".$template."\" type=\"hidden\" />";

	echo "</form>";
	
	echo "</body>";
	echo "</html>";
}



if($function=="submit")
{


//----------------------------CONFIGURE WITH YOUR INFORMATION -----------

$var01=$_GET['var01'];  //if you'd like, change to a consistent field name. I.e.: $var01="ISSUE";
$var02=$_GET['var02'];
$var03=$_GET['var03'];
$var04=$_GET['var04'];
$var05=$_GET['var05'];
$var06=$_GET['var06'];
$var07=$_GET['var07'];
$var08=$_GET['var08'];
$var09=$_GET['var09'];
$var10=$_GET['var10'];

//field names

$fieldname_var01=$_GET['fieldname_var01'];
$fieldname_var02=$_GET['fieldname_var02'];
$fieldname_var03=$_GET['fieldname_var03'];
$fieldname_var04=$_GET['fieldname_var04'];
$fieldname_var05=$_GET['fieldname_var05'];
$fieldname_var06=$_GET['fieldname_var06'];
$fieldname_var07=$_GET['fieldname_var07'];
$fieldname_var08=$_GET['fieldname_var08'];
$fieldname_var09=$_GET['fieldname_var09'];
$fieldname_var10=$_GET['fieldname_var10'];

$template=$_GET['template'];
if($template=="")
	{$template="text_variables";}

//----------------------------DO NOT MODIFY BELOW -----------

//build paths to server source and destination
$serversource="library/".$template.".idml";


//build path to idml destination (pagefiles folder)
$idmldestination=$template.".idml";
//copy($idmlsource, $idmldestination);


//update idml with this issue's data

include_once('library/tbszip/tbszip.php'); // load the TbsZip library
$zip = new clsTbsZip(); // instantiate the class
$zip->Open($serversource); // create a new instance of the TbsZip class
$text1 = $zip->FileRead('designmap.xml');

//these variables (the ones in braces, not brackets) ignored if passed through URL.
$text1=str_replace("{{var01}}", $var01, $text1);
$text1=str_replace("{{var02}}", $var02, $text1);
$text1=str_replace("{{var03}}", $var03, $text1);
$text1=str_replace("{{var04}}", $var04, $text1);
$text1=str_replace("{{var05}}", $var05, $text1);
$text1=str_replace("{{var06}}", $var06, $text1);
$text1=str_replace("{{var07}}", $var07, $text1);
$text1=str_replace("{{var08}}", $var08, $text1);
$text1=str_replace("{{var09}}", $var09, $text1);
$text1=str_replace("{{var10}}", $var10, $text1);


$text1=str_replace("[[var01]]", $fieldname_var01, $text1);
$text1=str_replace("[[var02]]", $fieldname_var02, $text1);
$text1=str_replace("[[var03]]", $fieldname_var03, $text1);
$text1=str_replace("[[var04]]", $fieldname_var04, $text1);
$text1=str_replace("[[var05]]", $fieldname_var05, $text1);
$text1=str_replace("[[var06]]", $fieldname_var06, $text1);
$text1=str_replace("[[var07]]", $fieldname_var07, $text1);
$text1=str_replace("[[var08]]", $fieldname_var08, $text1);
$text1=str_replace("[[var09]]", $fieldname_var09, $text1);
$text1=str_replace("[[var10]]", $fieldname_var10, $text1);



$zip->FileReplace('designmap.xml', $text1, TBSZIP_STRING);
$zip->Flush(TBSZIP_DOWNLOAD, $idmldestination);
$zip->Close(); // close the current archive

echo "<h1>Success!</h1>";
echo "<p><a href=\"textvariables.php\">Make more Text Variable files</a></p>";
}




?>