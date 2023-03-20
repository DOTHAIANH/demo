<?php
// This file was auto-generated from sdk-root/src/data/cur/2017-01-06/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2017-01-06', 'endpointPrefix' => 'cur', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceFullName' => 'AWS Cost and Usage Report Service', 'serviceId' => 'Cost and Usage Report Service', 'signatureVersion' => 'v4', 'signingName' => 'cur', 'targetPrefix' => 'AWSOrigamiServiceGatewayService', 'uid' => 'cur-2017-01-06', ], 'operations' => [ 'DeleteReportDefinition' => [ 'name' => 'DeleteReportDefinition', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteReportDefinitionRequest', ], 'output' => [ 'shape' => 'DeleteReportDefinitionResponse', ], 'errors' => [ [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'ValidationException', ], ], ], 'DescribeReportDefinitions' => [ 'name' => 'DescribeReportDefinitions', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeReportDefinitionsRequest', ], 'output' => [ 'shape' => 'DescribeReportDefinitionsResponse', ], 'errors' => [ [ 'shape' => 'InternalErrorException', ], ], ], 'PutReportDefinition' => [ 'name' => 'PutReportDefinition', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutReportDefinitionRequest', ], 'output' => [ 'shape' => 'PutReportDefinitionResponse', ], 'errors' => [ [ 'shape' => 'DuplicateReportNameException', ], [ 'shape' => 'ReportLimitReachedException', ], [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'ValidationException', ], ], ], ], 'shapes' => [ 'AWSRegion' => [ 'type' => 'string', 'enum' => [ 'us-east-1', 'us-west-1', 'us-west-2', 'eu-central-1', 'eu-west-1', 'ap-southeast-1', 'ap-southeast-2', 'ap-northeast-1', 'eu-north-1', 'ap-northeast-3', ], ], 'AdditionalArtifact' => [ 'type' => 'string', 'enum' => [ 'REDSHIFT', 'QUICKSIGHT', 'ATHENA', ], ], 'AdditionalArtifactList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AdditionalArtifact', ], ], 'CompressionFormat' => [ 'type' => 'string', 'enum' => [ 'ZIP', 'GZIP', 'Parquet', ], ], 'DeleteReportDefinitionRequest' => [ 'type' => 'structure', 'members' => [ 'ReportName' => [ 'shape' => 'ReportName', ], ], ], 'DeleteReportDefinitionResponse' => [ 'type' => 'structure', 'members' => [ 'ResponseMessage' => [ 'shape' => 'DeleteResponseMessage', ], ], ], 'DeleteResponseMessage' => [ 'type' => 'string', ], 'DescribeReportDefinitionsRequest' => [ 'type' => 'structure', 'members' => [ 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'GenericString', ], ], ], 'DescribeReportDefinitionsResponse' => [ 'type' => 'structure', 'members' => [ 'ReportDefinitions' => [ 'shape' => 'ReportDefinitionList', ], 'NextToken' => [ 'shape' => 'GenericString', ], ], ], 'DuplicateReportNameException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ErrorMessage' => [ 'type' => 'string', ], 'GenericString' => [ 'type' => 'string', ], 'InternalErrorException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, 'fault' => true, ], 'MaxResults' => [ 'type' => 'integer', 'box' => true, 'max' => 5, 'min' => 5, ], 'PutReportDefinitionRequest' => [ 'type' => 'structure', 'required' => [ 'ReportDefinition', ], 'members' => [ 'ReportDefinition' => [ 'shape' => 'ReportDefinition', ], ], ], 'PutReportDefinitionResponse' => [ 'type' => 'structure', 'members' => [], ], 'RefreshClosedReports' => [ 'type' => 'boolean', 'box' => true, ], 'ReportDefinition' => [ 'type' => 'structure', 'required' => [ 'ReportName', 'TimeUnit', 'Format', 'Compression', 'AdditionalSchemaElements', 'S3Bucket', 'S3Prefix', 'S3Region', ], 'members' => [ 'ReportName' => [ 'shape' => 'ReportName', ], 'TimeUnit' => [ 'shape' => 'TimeUnit', ], 'Format' => [ 'shape' => 'ReportFormat', ], 'Compression' => [ 'shape' => 'CompressionFormat', ], 'AdditionalSchemaElements' => [ 'shape' => 'SchemaElementList', ], 'S3Bucket' => [ 'shape' => 'S3Bucket', ], 'S3Prefix' => [ 'shape' => 'S3Prefix', ], 'S3Region' => [ 'shape' => 'AWSRegion', ], 'AdditionalArtifacts' => [ 'shape' => 'AdditionalArtifactList', ], 'RefreshClosedReports' => [ 'shape' => 'RefreshClosedReports', ], 'ReportVersioning' => [ 'shape' => 'ReportVersioning', ], ], ], 'ReportDefinitionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ReportDefinition', ], ], 'ReportFormat' => [ 'type' => 'string', 'enum' => [ 'textORcsv', 'Parquet', ], ], 'ReportLimitReachedException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ReportName' => [ 'type' => 'string', 'max' => 256, 'pattern' => '[0-9A-Za-z!\\-_.*\\\'()]+', ], 'ReportVersioning' => [ 'type' => 'string', 'enum' => [ 'CREATE_NEW_REPORT', 'OVERWRITE_REPORT', ], ], 'S3Bucket' => [ 'type' => 'string', 'max' => 256, ], 'S3Prefix' => [ 'type' => 'string', 'max' => 256, 'pattern' => '[0-9A-Za-z!\\-_.*\\\'()/]*', ], 'SchemaElement' => [ 'type' => 'string', 'enum' => [ 'RESOURCES', ], ], 'SchemaElementList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SchemaElement', ], ], 'TimeUnit' => [ 'type' => 'string', 'enum' => [ 'HOURLY', 'DAILY', ], ], 'ValidationException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], ],];
