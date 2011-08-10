<?
	require 'CloudFront.php';

	// your AWS/CloudFront keys go here
	$keyId          = "";
	$secretKey      = "";
	$distributionId = "";

	$key = ""; // String representing the existing CloudFront object to invalidate, no leading slash

	$cf  = new CloudFront($keyId, $secretKey, $distributionId); // cloudfront distribution id for S3 bucket, not the bucket name
?>
<html>
<head>
<style> textarea {width:100%; height:600px; font:12px/16px consolas;} </style>
</head>
<body>
	Key: <?=$key?><br/>
	<hr/>
	CF call:<br/>
	<textarea>
	<?
	if (!$cf->invalidate($key) ) {
		echo $cf->debug();
	}
	?>
	</textarea>
</body>
</html>
