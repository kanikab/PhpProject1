<?php
use Aws\S3\S3Client;

$bucket = 'bestview-bucket';
$keyname = 'name.jpg';
$filename = 'https://bestview-bucket.s3.amazonaws.com/'.$keyname;					
					
// 1. Instantiate the client.
$s3 = S3Client::factory(array(
    'key'    => 'AKIAICNHLOXNYBFVEYFQ',
    'secret' => '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'
));

// 2. Create a new multipart upload and get the upload ID.
$response = $s3->createMultipartUpload(array(
    'Bucket' => $bucket,
    'Key'    => $keyname
));
$uploadId = $result['UploadId'];

// 3. Upload the file in parts.
$file = fopen($filename, 'r');
$parts = array();
$partNumber = 1;
while (!feof($file)) {
    $result = $s3->uploadPart(array(
        'Bucket'     => $bucket,
        'Key'        => $key,
        'UploadId'   => $uploadId,
        'PartNumber' => $partNumber,
        'Body'       => fread($file, 5 * 1024 * 1024),
    ));
    $parts[] = array(
        'PartNumber' => $partNumber++,
        'ETag'       => $result['ETag'],
    );
}


?>
