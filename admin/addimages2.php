<?php
require_once("../master/config/config.php");
?>
<?php
// This page below get's a little hairy
if ($_SESSION['controller'] == true) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include($docroot . "/master/includes/meta.inc.php");
?>
</head>
<body id="adminbody">
<?php
// include administration header
include($docroot . "/master/includes/header.admin.inc.php");
?>
<?php
// include administration left navigation
include($docroot . "/master/includes/leftnav.admin.inc.php");
?>
<div id="adminrightcolumn">
<h1>Process for uploading files</h1>
<p>This is where the process to upload the file's is going to be completed.</p>
<?php
// get id of property
echo "UPLOAD STATUS"; // name program
// prepare variables
$id = "3"; // grab/clean variables
$target = $docroot . "/images/db_images/"; // prepare target url
$file1 = $_FILES['file1'];
$file2 = $_FILES['file2'];
$file3 = $_FILES['file3'];
$file4 = $_FILES['file4'];
$file5 = $_FILES['file5'];
$file6 = $_FILES['file6'];
$file7 = $_FILES['file7'];
$file8 = $_FILES['file8'];
$file9 = $_FILES['file9'];
$file10 = $_FILES['file10'];
$file11 = $_FILES['file11'];
$file12 = $_FILES['file12'];
$file13 = $_FILES['file13'];
$file14 = $_FILES['file14'];
$file15 = $_FILES['file15'];
$file16 = $_FILES['file16'];
$file17 = $_FILES['file17'];
$file18 = $_FILES['file18'];
$file19 = $_FILES['file19'];
$file20 = $_FILES['file20'];
$file21 = $_FILES['file21'];
$file22 = $_FILES['file22'];
$file23 = $_FILES['file23'];
$file24 = $_FILES['file24'];
$file25 = $_FILES['file25'];
$file26 = $_FILES['file26'];
$file27 = $_FILES['file27'];
$file28 = $_FILES['file28'];
$file29 = $_FILES['file29'];
$file30 = $_FILES['file30'];
$file31 = $_FILES['file31'];
$file32 = $_FILES['file32'];

echo "<hr />";
echo "Status on File 1";
echo "<br />";
if (!empty($file1['name'])) {
		$tmp_name1 = $file1['tmp_name'];
		$name1 = $id . "_" . $file1['name'];
		$target1 = $target . $name1;
		if (file_exists($target1)) {
			echo "File 1 already exists.<br />";
		}else {
			if (move_uploaded_file($tmp_name1, $target1)) {
				echo "File was uploaded successfully.<br />";
				$insert = "INSERT INTO images(propertynumber, filename) VALUES('$id', '$name1')";
				if (mysql_query($insert)) {
					echo "It was also uploaded into the database successfully.<br />";
				}else {
					echo "Problem's inserting it into database though.<br />";
				}
			}else {
				echo "There was a problem uploading this specific file.<br />";
			}
		}
} else {
	echo "File1 does not exist.<br />";
}


echo "<hr />";
echo "Status on File 2";
echo "<br />";
if (!empty($file2['name'])) {
		$tmp_name2 = $file2['tmp_name'];
		$name2 = $id . "_" . $file2['name'];
		$target2 = $target . $name2;
		if (file_exists($target2)) {
			echo "File 2 already exists.<br />";
		}else {
			if (move_uploaded_file($tmp_name2, $target2)) {
				echo "File was uploaded successfully.<br />";
				$insert = "INSERT INTO images(propertynumber, filename) VALUES('$id', '$name2')";
				if (mysql_query($insert)) {
					echo "It was also uploaded into the database successfully.<br />";
				}else {
					echo "Problem's inserting it into database though.<br />";
				}
			}else {
				echo "There was a problem uploading this specific file.<br />";
			}
		}
} else {
	echo "File2 does not exist.<br />";
}

echo "<hr />";
echo "Status on File 3";
echo "<br />";
if (!empty($file3['name'])) {
		$tmp_name3 = $file3['tmp_name'];
		$name3 = $id . "_" . $file3['name'];
		$target3 = $target . $name3;
		if (file_exists($target3)) {
			echo "File 3 already exists.<br />";
		}else {
			if (move_uploaded_file($tmp_name3, $target3)) {
				echo "File was uploaded successfully.<br />";
				$insert = "INSERT INTO images(propertynumber, filename) VALUES('$id', '$name3')";
				if (mysql_query($insert)) {
					echo "It was also uploaded into the database successfully.<br />";
				}else {
					echo "Problem's inserting it into database though.<br />";
				}
			}else {
				echo "There was a problem uploading this specific file.<br />";
			}
		}
} else {
	echo "File3 does not exist.<br />";
}

echo "<hr />";
echo "Status on File 4";
echo "<br />";
if (!empty($file4['name'])) {
		$tmp_name4 = $file4['tmp_name'];
		$name4 = $id . "_" . $file4['name'];
		$target4 = $target . $name4;
		if (file_exists($target4)) {
			echo "File 4 already exists.<br />";
		}else {
			if (move_uploaded_file($tmp_name4, $target4)) {
				echo "File was uploaded successfully.<br />";
				$insert = "INSERT INTO images(propertynumber, filename) VALUES('$id', '$name4')";
				if (mysql_query($insert)) {
					echo "It was also uploaded into the database successfully.<br />";
				}else {
					echo "Problem's inserting it into database though.<br />";
				}
			}else {
				echo "There was a problem uploading this specific file.<br />";
			}
		}
} else {
	echo "File4 does not exist.<br />";
}

echo "<hr />";
echo "Status on File 5";
echo "<br />";
if (!empty($file5['name'])) {
		$tmp_name5 = $file5['tmp_name'];
		$name5 = $id . "_" . $file5['name'];
		$target5 = $target . $name5;
		if (file_exists($target5)) {
			echo "File 5 already exists.<br />";
		}else {
			if (move_uploaded_file($tmp_name5, $target5)) {
				echo "File was uploaded successfully.<br />";
				$insert = "INSERT INTO images(propertynumber, filename) VALUES('$id', '$name5')";
				if (mysql_query($insert)) {
					echo "It was also uploaded into the database successfully.<br />";
				}else {
					echo "Problem's inserting it into database though.<br />";
				}
			}else {
				echo "There was a problem uploading this specific file.<br />";
			}
		}
} else {
	echo "File5 does not exist.<br />";
}

echo "<hr />";
echo "Status on File 6";
echo "<br />";
if (!empty($file6['name'])) {
		$tmp_name6 = $file6['tmp_name'];
		$name6 = $id . "_" . $file6['name'];
		$target6 = $target . $name6;
		if (file_exists($target6)) {
			echo "File 6 already exists.<br />";
		}else {
			if (move_uploaded_file($tmp_name6, $target6)) {
				echo "File was uploaded successfully.<br />";
				$insert = "INSERT INTO images(propertynumber, filename) VALUES('$id', '$name6')";
				if (mysql_query($insert)) {
					echo "It was also uploaded into the database successfully.<br />";
				}else {
					echo "Problem's inserting it into database though.<br />";
				}
			}else {
				echo "There was a problem uploading this specific file.<br />";
			}
		}
} else {
	echo "File6 does not exist.<br />";
}

echo "<hr />";
echo "Status on File 7";
echo "<br />";
if (!empty($file7['name'])) {
		$tmp_name7 = $file7['tmp_name'];
		$name7 = $id . "_" . $file7['name'];
		$target7 = $target . $name7;
		if (file_exists($target7)) {
			echo "File 7 already exists.<br />";
		}else {
			if (move_uploaded_file($tmp_name7, $target7)) {
				echo "File was uploaded successfully.<br />";
				$insert = "INSERT INTO images(propertynumber, filename) VALUES('$id', '$name7')";
				if (mysql_query($insert)) {
					echo "It was also uploaded into the database successfully.<br />";
				}else {
					echo "Problem's inserting it into database though.<br />";
				}
			}else {
				echo "There was a problem uploading this specific file.<br />";
			}
		}
} else {
	echo "File7 does not exist.<br />";
}

echo "<hr />";
echo "Status on File 8";
echo "<br />";
if (!empty($file8['name'])) {
		$tmp_name8 = $file8['tmp_name'];
		$name8 = $id . "_" . $file8['name'];
		$target8 = $target . $name8;
		if (file_exists($target8)) {
			echo "File 8 already exists.<br />";
		}else {
			if (move_uploaded_file($tmp_name8, $target8)) {
				echo "File was uploaded successfully.<br />";
				$insert = "INSERT INTO images(propertynumber, filename) VALUES('$id', '$name8')";
				if (mysql_query($insert)) {
					echo "It was also uploaded into the database successfully.<br />";
				}else {
					echo "Problem's inserting it into database though.<br />";
				}
			}else {
				echo "There was a problem uploading this specific file.<br />";
			}
		}
} else {
	echo "File8 does not exist.<br />";
}

echo "<hr />";
echo "Status on File 9";
echo "<br />";
if (!empty($file9['name'])) {
		$tmp_name9 = $file9['tmp_name'];
		$name9 = $id . "_" . $file9['name'];
		$target9 = $target . $name9;
		if (file_exists($target9)) {
			echo "File 9 already exists.<br />";
		}else {
			if (move_uploaded_file($tmp_name9, $target9)) {
				echo "File was uploaded successfully.<br />";
				$insert = "INSERT INTO images(propertynumber, filename) VALUES('$id', '$name9')";
				if (mysql_query($insert)) {
					echo "It was also uploaded into the database successfully.<br />";
				}else {
					echo "Problem's inserting it into database though.<br />";
				}
			}else {
				echo "There was a problem uploading this specific file.<br />";
			}
		}
} else {
	echo "File9 does not exist.<br />";
}

echo "<hr />";
echo "Status on File 10";
echo "<br />";
if (!empty($file10['name'])) {
		$tmp_name10 = $file10['tmp_name'];
		$name10 = $id . "_" . $file10['name'];
		$target10 = $target . $name10;
		if (file_exists($target10)) {
			echo "File 10 already exists.<br />";
		}else {
			if (move_uploaded_file($tmp_name10, $target10)) {
				echo "File was uploaded successfully.<br />";
				$insert = "INSERT INTO images(propertynumber, filename) VALUES('$id', '$name10')";
				if (mysql_query($insert)) {
					echo "It was also uploaded into the database successfully.<br />";
				}else {
					echo "Problem's inserting it into database though.<br />";
				}
			}else {
				echo "There was a problem uploading this specific file.<br />";
			}
		}
} else {
	echo "File10 does not exist.<br />";
}

echo "<hr />";
echo "Status on File 11";
echo "<br />";
if (!empty($file11['name'])) {
		$tmp_name11 = $file11['tmp_name'];
		$name11 = $id . "_" . $file11['name'];
		$target11 = $target . $name11;
		if (file_exists($target11)) {
			echo "File 11 already exists.<br />";
		}else {
			if (move_uploaded_file($tmp_name11, $target11)) {
				echo "File was uploaded successfully.<br />";
				$insert = "INSERT INTO images(propertynumber, filename) VALUES('$id', '$name11')";
				if (mysql_query($insert)) {
					echo "It was also uploaded into the database successfully.<br />";
				}else {
					echo "Problem's inserting it into database though.<br />";
				}
			}else {
				echo "There was a problem uploading this specific file.<br />";
			}
		}
} else {
	echo "File11 does not exist.<br />";
}


echo "<hr />";
echo "Status on File 12";
echo "<br />";
if (!empty($file12['name'])) {
		$tmp_name12 = $file12['tmp_name'];
		$name12 = $id . "_" . $file12['name'];
		$target12 = $target . $name12;
		if (file_exists($target12)) {
			echo "File 12 already exists.<br />";
		}else {
			if (move_uploaded_file($tmp_name12, $target12)) {
				echo "File was uploaded successfully.<br />";
				$insert = "INSERT INTO images(propertynumber, filename) VALUES('$id', '$name12')";
				if (mysql_query($insert)) {
					echo "It was also uploaded into the database successfully.<br />";
				}else {
					echo "Problem's inserting it into database though.<br />";
				}
			}else {
				echo "There was a problem uploading this specific file.<br />";
			}
		}
} else {
	echo "File12 does not exist.<br />";
}

echo "<hr />";
echo "Status on File 13";
echo "<br />";
if (!empty($file13['name'])) {
		$tmp_name13 = $file13['tmp_name'];
		$name13 = $id . "_" . $file13['name'];
		$target13 = $target . $name13;
		if (file_exists($target13)) {
			echo "File 13 already exists.<br />";
		}else {
			if (move_uploaded_file($tmp_name13, $target13)) {
				echo "File was uploaded successfully.<br />";
				$insert = "INSERT INTO images(propertynumber, filename) VALUES('$id', '$name13')";
				if (mysql_query($insert)) {
					echo "It was also uploaded into the database successfully.<br />";
				}else {
					echo "Problem's inserting it into database though.<br />";
				}
			}else {
				echo "There was a problem uploading this specific file.<br />";
			}
		}
} else {
	echo "File13 does not exist.<br />";
}

echo "<hr />";
echo "Status on File 14";
echo "<br />";
if (!empty($file14['name'])) {
		$tmp_name14 = $file14['tmp_name'];
		$name14 = $id . "_" . $file14['name'];
		$target14 = $target . $name14;
		if (file_exists($target14)) {
			echo "File 14 already exists.<br />";
		}else {
			if (move_uploaded_file($tmp_name14, $target14)) {
				echo "File was uploaded successfully.<br />";
				$insert = "INSERT INTO images(propertynumber, filename) VALUES('$id', '$name14')";
				if (mysql_query($insert)) {
					echo "It was also uploaded into the database successfully.<br />";
				}else {
					echo "Problem's inserting it into database though.<br />";
				}
			}else {
				echo "There was a problem uploading this specific file.<br />";
			}
		}
} else {
	echo "File14 does not exist.<br />";
}

echo "<hr />";
echo "Status on File 15";
echo "<br />";
if (!empty($file15['name'])) {
		$tmp_name15 = $file15['tmp_name'];
		$name15 = $id . "_" . $file15['name'];
		$target15 = $target . $name15;
		if (file_exists($target15)) {
			echo "File 15 already exists.<br />";
		}else {
			if (move_uploaded_file($tmp_name15, $target15)) {
				echo "File was uploaded successfully.<br />";
				$insert = "INSERT INTO images(propertynumber, filename) VALUES('$id', '$name15')";
				if (mysql_query($insert)) {
					echo "It was also uploaded into the database successfully.<br />";
				}else {
					echo "Problem's inserting it into database though.<br />";
				}
			}else {
				echo "There was a problem uploading this specific file.<br />";
			}
		}
} else {
	echo "File15 does not exist.<br />";
}

echo "<hr />";
echo "Status on File 16";
echo "<br />";
if (!empty($file16['name'])) {
		$tmp_name16 = $file16['tmp_name'];
		$name16 = $id . "_" . $file16['name'];
		$target16 = $target . $name16;
		if (file_exists($target16)) {
			echo "File 16 already exists.<br />";
		}else {
			if (move_uploaded_file($tmp_name16, $target16)) {
				echo "File was uploaded successfully.<br />";
				$insert = "INSERT INTO images(propertynumber, filename) VALUES('$id', '$name16')";
				if (mysql_query($insert)) {
					echo "It was also uploaded into the database successfully.<br />";
				}else {
					echo "Problem's inserting it into database though.<br />";
				}
			}else {
				echo "There was a problem uploading this specific file.<br />";
			}
		}
} else {
	echo "File16 does not exist.<br />";
}

echo "<hr />";
echo "Status on File 17";
echo "<br />";
if (!empty($file17['name'])) {
		$tmp_name17 = $file17['tmp_name'];
		$name17 = $id . "_" . $file17['name'];
		$target17 = $target . $name17;
		if (file_exists($target17)) {
			echo "File 17 already exists.<br />";
		}else {
			if (move_uploaded_file($tmp_name17, $target17)) {
				echo "File was uploaded successfully.<br />";
				$insert = "INSERT INTO images(propertynumber, filename) VALUES('$id', '$name17')";
				if (mysql_query($insert)) {
					echo "It was also uploaded into the database successfully.<br />";
				}else {
					echo "Problem's inserting it into database though.<br />";
				}
			}else {
				echo "There was a problem uploading this specific file.<br />";
			}
		}
} else {
	echo "File17 does not exist.<br />";
}

echo "<hr />";
echo "Status on File 18";
echo "<br />";
if (!empty($file18['name'])) {
		$tmp_name18 = $file18['tmp_name'];
		$name18 = $id . "_" . $file18['name'];
		$target18 = $target . $name18;
		if (file_exists($target18)) {
			echo "File 18 already exists.<br />";
		}else {
			if (move_uploaded_file($tmp_name18, $target18)) {
				echo "File was uploaded successfully.<br />";
				$insert = "INSERT INTO images(propertynumber, filename) VALUES('$id', '$name18')";
				if (mysql_query($insert)) {
					echo "It was also uploaded into the database successfully.<br />";
				}else {
					echo "Problem's inserting it into database though.<br />";
				}
			}else {
				echo "There was a problem uploading this specific file.<br />";
			}
		}
} else {
	echo "File18 does not exist.<br />";
}

echo "<hr />";
echo "Status on File 19";
echo "<br />";
if (!empty($file19['name'])) {
		$tmp_name19 = $file19['tmp_name'];
		$name19 = $id . "_" . $file19['name'];
		$target19 = $target . $name19;
		if (file_exists($target19)) {
			echo "File 19 already exists.<br />";
		}else {
			if (move_uploaded_file($tmp_name19, $target19)) {
				echo "File was uploaded successfully.<br />";
				$insert = "INSERT INTO images(propertynumber, filename) VALUES('$id', '$name19')";
				if (mysql_query($insert)) {
					echo "It was also uploaded into the database successfully.<br />";
				}else {
					echo "Problem's inserting it into database though.<br />";
				}
			}else {
				echo "There was a problem uploading this specific file.<br />";
			}
		}
} else {
	echo "File19 does not exist.<br />";
}

echo "<hr />";
echo "Status on File 20";
echo "<br />";
if (!empty($file20['name'])) {
		$tmp_name20 = $file20['tmp_name'];
		$name20 = $id . "_" . $file20['name'];
		$target20 = $target . $name20;
		if (file_exists($target20)) {
			echo "File 20 already exists.<br />";
		}else {
			if (move_uploaded_file($tmp_name20, $target20)) {
				echo "File was uploaded successfully.<br />";
				$insert = "INSERT INTO images(propertynumber, filename) VALUES('$id', '$name20')";
				if (mysql_query($insert)) {
					echo "It was also uploaded into the database successfully.<br />";
				}else {
					echo "Problem's inserting it into database though.<br />";
				}
			}else {
				echo "There was a problem uploading this specific file.<br />";
			}
		}
} else {
	echo "File20 does not exist.<br />";
}

echo "<hr />";
echo "Status on File 21";
echo "<br />";
if (!empty($file21['name'])) {
		$tmp_name21 = $file21['tmp_name'];
		$name21 = $id . "_" . $file21['name'];
		$target21 = $target . $name21;
		if (file_exists($target21)) {
			echo "File 21 already exists.<br />";
		}else {
			if (move_uploaded_file($tmp_name21, $target21)) {
				echo "File was uploaded successfully.<br />";
				$insert = "INSERT INTO images(propertynumber, filename) VALUES('$id', '$name21')";
				if (mysql_query($insert)) {
					echo "It was also uploaded into the database successfully.<br />";
				}else {
					echo "Problem's inserting it into database though.<br />";
				}
			}else {
				echo "There was a problem uploading this specific file.<br />";
			}
		}
} else {
	echo "File21 does not exist.<br />";
}

echo "<hr />";
echo "Status on File 22";
echo "<br />";
if (!empty($file22['name'])) {
		$tmp_name22 = $file22['tmp_name'];
		$name22 = $id . "_" . $file22['name'];
		$target22 = $target . $name22;
		if (file_exists($target22)) {
			echo "File 22 already exists.<br />";
		}else {
			if (move_uploaded_file($tmp_name22, $target22)) {
				echo "File was uploaded successfully.<br />";
				$insert = "INSERT INTO images(propertynumber, filename) VALUES('$id', '$name22')";
				if (mysql_query($insert)) {
					echo "It was also uploaded into the database successfully.<br />";
				}else {
					echo "Problem's inserting it into database though.<br />";
				}
			}else {
				echo "There was a problem uploading this specific file.<br />";
			}
		}
} else {
	echo "File22 does not exist.<br />";
}

echo "<hr />";
echo "Status on File 23";
echo "<br />";
if (!empty($file23['name'])) {
		$tmp_name23 = $file23['tmp_name'];
		$name23 = $id . "_" . $file23['name'];
		$target23 = $target . $name23;
		if (file_exists($target23)) {
			echo "File 23 already exists.<br />";
		}else {
			if (move_uploaded_file($tmp_name23, $target23)) {
				echo "File was uploaded successfully.<br />";
				$insert = "INSERT INTO images(propertynumber, filename) VALUES('$id', '$name23')";
				if (mysql_query($insert)) {
					echo "It was also uploaded into the database successfully.<br />";
				}else {
					echo "Problem's inserting it into database though.<br />";
				}
			}else {
				echo "There was a problem uploading this specific file.<br />";
			}
		}
} else {
	echo "File23 does not exist.<br />";
}

echo "<hr />";
echo "Status on File 24";
echo "<br />";
if (!empty($file24['name'])) {
		$tmp_name24 = $file24['tmp_name'];
		$name24 = $id . "_" . $file24['name'];
		$target24 = $target . $name24;
		if (file_exists($target24)) {
			echo "File 24 already exists.<br />";
		}else {
			if (move_uploaded_file($tmp_name24, $target24)) {
				echo "File was uploaded successfully.<br />";
				$insert = "INSERT INTO images(propertynumber, filename) VALUES('$id', '$name24')";
				if (mysql_query($insert)) {
					echo "It was also uploaded into the database successfully.<br />";
				}else {
					echo "Problem's inserting it into database though.<br />";
				}
			}else {
				echo "There was a problem uploading this specific file.<br />";
			}
		}
} else {
	echo "File24 does not exist.<br />";
}

echo "<hr />";
echo "Status on File 25";
echo "<br />";
if (!empty($file25['name'])) {
		$tmp_name25 = $file25['tmp_name'];
		$name25 = $id . "_" . $file25['name'];
		$target25 = $target . $name25;
		if (file_exists($target25)) {
			echo "File 25 already exists.<br />";
		}else {
			if (move_uploaded_file($tmp_name25, $target25)) {
				echo "File was uploaded successfully.<br />";
				$insert = "INSERT INTO images(propertynumber, filename) VALUES('$id', '$name25')";
				if (mysql_query($insert)) {
					echo "It was also uploaded into the database successfully.<br />";
				}else {
					echo "Problem's inserting it into database though.<br />";
				}
			}else {
				echo "There was a problem uploading this specific file.<br />";
			}
		}
} else {
	echo "File25 does not exist.<br />";
}


echo "<hr />";
echo "Status on File 26";
echo "<br />";
if (!empty($file26['name'])) {
		$tmp_name26 = $file26['tmp_name'];
		$name26 = $id . "_" . $file26['name'];
		$target26 = $target . $name26;
		if (file_exists($target26)) {
			echo "File 26 already exists.<br />";
		}else {
			if (move_uploaded_file($tmp_name26, $target26)) {
				echo "File was uploaded successfully.<br />";
				$insert = "INSERT INTO images(propertynumber, filename) VALUES('$id', '$name26')";
				if (mysql_query($insert)) {
					echo "It was also uploaded into the database successfully.<br />";
				}else {
					echo "Problem's inserting it into database though.<br />";
				}
			}else {
				echo "There was a problem uploading this specific file.<br />";
			}
		}
} else {
	echo "File26 does not exist.<br />";
}

echo "<hr />";
echo "Status on File 27";
echo "<br />";
if (!empty($file27['name'])) {
		$tmp_name27 = $file27['tmp_name'];
		$name27 = $id . "_" . $file27['name'];
		$target27 = $target . $name27;
		if (file_exists($target27)) {
			echo "File 27 already exists.<br />";
		}else {
			if (move_uploaded_file($tmp_name27, $target27)) {
				echo "File was uploaded successfully.<br />";
				$insert = "INSERT INTO images(propertynumber, filename) VALUES('$id', '$name27')";
				if (mysql_query($insert)) {
					echo "It was also uploaded into the database successfully.<br />";
				}else {
					echo "Problem's inserting it into database though.<br />";
				}
			}else {
				echo "There was a problem uploading this specific file.<br />";
			}
		}
} else {
	echo "File27 does not exist.<br />";
}

echo "<hr />";
echo "Status on File 28";
echo "<br />";
if (!empty($file28['name'])) {
		$tmp_name28 = $file28['tmp_name'];
		$name28 = $id . "_" . $file28['name'];
		$target28 = $target . $name28;
		if (file_exists($target28)) {
			echo "File 28 already exists.<br />";
		}else {
			if (move_uploaded_file($tmp_name28, $target28)) {
				echo "File was uploaded successfully.<br />";
				$insert = "INSERT INTO images(propertynumber, filename) VALUES('$id', '$name28')";
				if (mysql_query($insert)) {
					echo "It was also uploaded into the database successfully.<br />";
				}else {
					echo "Problem's inserting it into database though.<br />";
				}
			}else {
				echo "There was a problem uploading this specific file.<br />";
			}
		}
} else {
	echo "File28 does not exist.<br />";
}

echo "<hr />";
echo "Status on File 29";
echo "<br />";
if (!empty($file29['name'])) {
		$tmp_name29 = $file29['tmp_name'];
		$name29 = $id . "_" . $file29['name'];
		$target29 = $target . $name29;
		if (file_exists($target29)) {
			echo "File 29 already exists.<br />";
		}else {
			if (move_uploaded_file($tmp_name29, $target29)) {
				echo "File was uploaded successfully.<br />";
				$insert = "INSERT INTO images(propertynumber, filename) VALUES('$id', '$name29')";
				if (mysql_query($insert)) {
					echo "It was also uploaded into the database successfully.<br />";
				}else {
					echo "Problem's inserting it into database though.<br />";
				}
			}else {
				echo "There was a problem uploading this specific file.<br />";
			}
		}
} else {
	echo "File29 does not exist.<br />";
}

echo "<hr />";
echo "Status on File 30";
echo "<br />";
if (!empty($file30['name'])) {
		$tmp_name30 = $file30['tmp_name'];
		$name30 = $id . "_" . $file30['name'];
		$target30 = $target . $name30;
		if (file_exists($target30)) {
			echo "File 30 already exists.<br />";
		}else {
			if (move_uploaded_file($tmp_name30, $target30)) {
				echo "File was uploaded successfully.<br />";
				$insert = "INSERT INTO images(propertynumber, filename) VALUES('$id', '$name30')";
				if (mysql_query($insert)) {
					echo "It was also uploaded into the database successfully.<br />";
				}else {
					echo "Problem's inserting it into database though.<br />";
				}
			}else {
				echo "There was a problem uploading this specific file.<br />";
			}
		}
} else {
	echo "File30 does not exist.<br />";
}

echo "<hr />";
echo "Status on File 31";
echo "<br />";
if (!empty($file31['name'])) {
		$tmp_name31 = $file31['tmp_name'];
		$name31 = $id . "_" . $file31['name'];
		$target31 = $target . $name31;
		if (file_exists($target31)) {
			echo "File 31 already exists.<br />";
		}else {
			if (move_uploaded_file($tmp_name31, $target31)) {
				echo "File was uploaded successfully.<br />";
				$insert = "INSERT INTO images(propertynumber, filename) VALUES('$id', '$name31')";
				if (mysql_query($insert)) {
					echo "It was also uploaded into the database successfully.<br />";
				}else {
					echo "Problem's inserting it into database though.<br />";
				}
			}else {
				echo "There was a problem uploading this specific file.<br />";
			}
		}
} else {
	echo "File31 does not exist.<br />";
}


echo "<hr />";
echo "Status on File 32";
echo "<br />";
if (!empty($file32['name'])) {
		$tmp_name32 = $file32['tmp_name'];
		$name32 = $id . "_" . $file32['name'];
		$target32 = $target . $name32;
		if (file_exists($target32)) {
			echo "File 32 already exists.<br />";
		}else {
			if (move_uploaded_file($tmp_name32, $target32)) {
				echo "File was uploaded successfully.<br />";
				$insert = "INSERT INTO images(propertynumber, filename) VALUES('$id', '$name32')";
				if (mysql_query($insert)) {
					echo "It was also uploaded into the database successfully.<br />";
				}else {
					echo "Problem's inserting it into database though.<br />";
				}
			}else {
				echo "There was a problem uploading this specific file.<br />";
			}
		}
} else {
	echo "File32 does not exist.<br />";
}
?>
</div>
</body>
</html>
<?php
}else {
header("Location: login.php");
}
?>