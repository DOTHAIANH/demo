<?php
// This file was auto-generated from sdk-root/src/data/xray/2016-04-12/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2016-04-12', 'endpointPrefix' => 'xray', 'protocol' => 'rest-json', 'serviceFullName' => 'AWS X-Ray', 'serviceId' => 'XRay', 'signatureVersion' => 'v4', 'uid' => 'xray-2016-04-12', ], 'operations' => [ 'BatchGetTraces' => [ 'name' => 'BatchGetTraces', 'http' => [ 'method' => 'POST', 'requestUri' => '/Traces', ], 'input' => [ 'shape' => 'BatchGetTracesRequest', ], 'output' => [ 'shape' => 'BatchGetTracesResult', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ThrottledException', ], ], ], 'CreateGroup' => [ 'name' => 'CreateGroup', 'http' => [ 'method' => 'POST', 'requestUri' => '/CreateGroup', ], 'input' => [ 'shape' => 'CreateGroupRequest', ], 'output' => [ 'shape' => 'CreateGroupResult', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ThrottledException', ], ], ], 'CreateSamplingRule' => [ 'name' => 'CreateSamplingRule', 'http' => [ 'method' => 'POST', 'requestUri' => '/CreateSamplingRule', ], 'input' => [ 'shape' => 'CreateSamplingRuleRequest', ], 'output' => [ 'shape' => 'CreateSamplingRuleResult', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ThrottledException', ], [ 'shape' => 'RuleLimitExceededException', ], ], ], 'DeleteGroup' => [ 'name' => 'DeleteGroup', 'http' => [ 'method' => 'POST', 'requestUri' => '/DeleteGroup', ], 'input' => [ 'shape' => 'DeleteGroupRequest', ], 'output' => [ 'shape' => 'DeleteGroupResult', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ThrottledException', ], ], ], 'DeleteSamplingRule' => [ 'name' => 'DeleteSamplingRule', 'http' => [ 'method' => 'POST', 'requestUri' => '/DeleteSamplingRule', ], 'input' => [ 'shape' => 'DeleteSamplingRuleRequest', ], 'output' => [ 'shape' => 'DeleteSamplingRuleResult', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ThrottledException', ], ], ], 'GetEncryptionConfig' => [ 'name' => 'GetEncryptionConfig', 'http' => [ 'method' => 'POST', 'requestUri' => '/EncryptionConfig', ], 'input' => [ 'shape' => 'GetEncryptionConfigRequest', ], 'output' => [ 'shape' => 'GetEncryptionConfigResult', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ThrottledException', ], ], ], 'GetGroup' => [ 'name' => 'GetGroup', 'http' => [ 'method' => 'POST', 'requestUri' => '/GetGroup', ], 'input' => [ 'shape' => 'GetGroupRequest', ], 'output' => [ 'shape' => 'GetGroupResult', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ThrottledException', ], ], ], 'GetGroups' => [ 'name' => 'GetGroups', 'http' => [ 'method' => 'POST', 'requestUri' => '/Groups', ], 'input' => [ 'shape' => 'GetGroupsRequest', ], 'output' => [ 'shape' => 'GetGroupsResult', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ThrottledException', ], ], ], 'GetSamplingRules' => [ 'name' => 'GetSamplingRules', 'http' => [ 'method' => 'POST', 'requestUri' => '/GetSamplingRules', ], 'input' => [ 'shape' => 'GetSamplingRulesRequest', ], 'output' => [ 'shape' => 'GetSamplingRulesResult', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ThrottledException', ], ], ], 'GetSamplingStatisticSummaries' => [ 'name' => 'GetSamplingStatisticSummaries', 'http' => [ 'method' => 'POST', 'requestUri' => '/SamplingStatisticSummaries', ], 'input' => [ 'shape' => 'GetSamplingStatisticSummariesRequest', ], 'output' => [ 'shape' => 'GetSamplingStatisticSummariesResult', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ThrottledException', ], ], ], 'GetSamplingTargets' => [ 'name' => 'GetSamplingTargets', 'http' => [ 'method' => 'POST', 'requestUri' => '/SamplingTargets', ], 'input' => [ 'shape' => 'GetSamplingTargetsRequest', ], 'output' => [ 'shape' => 'GetSamplingTargetsResult', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ThrottledException', ], ], ], 'GetServiceGraph' => [ 'name' => 'GetServiceGraph', 'http' => [ 'method' => 'POST', 'requestUri' => '/ServiceGraph', ], 'input' => [ 'shape' => 'GetServiceGraphRequest', ], 'output' => [ 'shape' => 'GetServiceGraphResult', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ThrottledException', ], ], ], 'GetTraceGraph' => [ 'name' => 'GetTraceGraph', 'http' => [ 'method' => 'POST', 'requestUri' => '/TraceGraph', ], 'input' => [ 'shape' => 'GetTraceGraphRequest', ], 'output' => [ 'shape' => 'GetTraceGraphResult', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ThrottledException', ], ], ], 'GetTraceSummaries' => [ 'name' => 'GetTraceSummaries', 'http' => [ 'method' => 'POST', 'requestUri' => '/TraceSummaries', ], 'input' => [ 'shape' => 'GetTraceSummariesRequest', ], 'output' => [ 'shape' => 'GetTraceSummariesResult', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ThrottledException', ], ], ], 'PutEncryptionConfig' => [ 'name' => 'PutEncryptionConfig', 'http' => [ 'method' => 'POST', 'requestUri' => '/PutEncryptionConfig', ], 'input' => [ 'shape' => 'PutEncryptionConfigRequest', ], 'output' => [ 'shape' => 'PutEncryptionConfigResult', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ThrottledException', ], ], ], 'PutTelemetryRecords' => [ 'name' => 'PutTelemetryRecords', 'http' => [ 'method' => 'POST', 'requestUri' => '/TelemetryRecords', ], 'input' => [ 'shape' => 'PutTelemetryRecordsRequest', ], 'output' => [ 'shape' => 'PutTelemetryRecordsResult', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ThrottledException', ], ], ], 'PutTraceSegments' => [ 'name' => 'PutTraceSegments', 'http' => [ 'method' => 'POST', 'requestUri' => '/TraceSegments', ], 'input' => [ 'shape' => 'PutTraceSegmentsRequest', ], 'output' => [ 'shape' => 'PutTraceSegmentsResult', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ThrottledException', ], ], ], 'UpdateGroup' => [ 'name' => 'UpdateGroup', 'http' => [ 'method' => 'POST', 'requestUri' => '/UpdateGroup', ], 'input' => [ 'shape' => 'UpdateGroupRequest', ], 'output' => [ 'shape' => 'UpdateGroupResult', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ThrottledException', ], ], ], 'UpdateSamplingRule' => [ 'name' => 'UpdateSamplingRule', 'http' => [ 'method' => 'POST', 'requestUri' => '/UpdateSamplingRule', ], 'input' => [ 'shape' => 'UpdateSamplingRuleRequest', ], 'output' => [ 'shape' => 'UpdateSamplingRuleResult', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ThrottledException', ], ], ], ], 'shapes' => [ 'Alias' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'String', ], 'Names' => [ 'shape' => 'AliasNames', ], 'Type' => [ 'shape' => 'String', ], ], ], 'AliasList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Alias', ], ], 'AliasNames' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'AnnotationKey' => [ 'type' => 'string', ], 'AnnotationValue' => [ 'type' => 'structure', 'members' => [ 'NumberValue' => [ 'shape' => 'NullableDouble', ], 'BooleanValue' => [ 'shape' => 'NullableBoolean', ], 'StringValue' => [ 'shape' => 'String', ], ], ], 'Annotations' => [ 'type' => 'map', 'key' => [ 'shape' => 'AnnotationKey', ], 'value' => [ 'shape' => 'ValuesWithServiceIds', ], ], 'AttributeKey' => [ 'type' => 'string', 'max' => 32, 'min' => 1, ], 'AttributeMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'AttributeKey', ], 'value' => [ 'shape' => 'AttributeValue', ], 'max' => 5, ], 'AttributeValue' => [ 'type' => 'string', 'max' => 32, 'min' => 1, ], 'AvailabilityZoneDetail' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'String', ], ], ], 'BackendConnectionErrors' => [ 'type' => 'structure', 'members' => [ 'TimeoutCount' => [ 'shape' => 'NullableInteger', ], 'ConnectionRefusedCount' => [ 'shape' => 'NullableInteger', ], 'HTTPCode4XXCount' => [ 'shape' => 'NullableInteger', ], 'HTTPCode5XXCount' => [ 'shape' => 'NullableInteger', ], 'UnknownHostCount' => [ 'shape' => 'NullableInteger', ], 'OtherCount' => [ 'shape' => 'NullableInteger', ], ], ], 'BatchGetTracesRequest' => [ 'type' => 'structure', 'required' => [ 'TraceIds', ], 'members' => [ 'TraceIds' => [ 'shape' => 'TraceIdList', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'BatchGetTracesResult' => [ 'type' => 'structure', 'members' => [ 'Traces' => [ 'shape' => 'TraceList', ], 'UnprocessedTraceIds' => [ 'shape' => 'UnprocessedTraceIdList', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'Boolean' => [ 'type' => 'boolean', ], 'BorrowCount' => [ 'type' => 'integer', 'min' => 0, ], 'ClientID' => [ 'type' => 'string', 'max' => 24, 'min' => 24, ], 'CreateGroupRequest' => [ 'type' => 'structure', 'required' => [ 'GroupName', ], 'members' => [ 'GroupName' => [ 'shape' => 'GroupName', ], 'FilterExpression' => [ 'shape' => 'FilterExpression', ], ], ], 'CreateGroupResult' => [ 'type' => 'structure', 'members' => [ 'Group' => [ 'shape' => 'Group', ], ], ], 'CreateSamplingRuleRequest' => [ 'type' => 'structure', 'required' => [ 'SamplingRule', ], 'members' => [ 'SamplingRule' => [ 'shape' => 'SamplingRule', ], ], ], 'CreateSamplingRuleResult' => [ 'type' => 'structure', 'members' => [ 'SamplingRuleRecord' => [ 'shape' => 'SamplingRuleRecord', ], ], ], 'DeleteGroupRequest' => [ 'type' => 'structure', 'members' => [ 'GroupName' => [ 'shape' => 'GroupName', ], 'GroupARN' => [ 'shape' => 'GroupARN', ], ], ], 'DeleteGroupResult' => [ 'type' => 'structure', 'members' => [], ], 'DeleteSamplingRuleRequest' => [ 'type' => 'structure', 'members' => [ 'RuleName' => [ 'shape' => 'String', ], 'RuleARN' => [ 'shape' => 'String', ], ], ], 'DeleteSamplingRuleResult' => [ 'type' => 'structure', 'members' => [ 'SamplingRuleRecord' => [ 'shape' => 'SamplingRuleRecord', ], ], ], 'Double' => [ 'type' => 'double', ], 'EC2InstanceId' => [ 'type' => 'string', 'max' => 20, ], 'Edge' => [ 'type' => 'structure', 'members' => [ 'ReferenceId' => [ 'shape' => 'NullableInteger', ], 'StartTime' => [ 'shape' => 'Timestamp', ], 'EndTime' => [ 'shape' => 'Timestamp', ], 'SummaryStatistics' => [ 'shape' => 'EdgeStatistics', ], 'ResponseTimeHistogram' => [ 'shape' => 'Histogram', ], 'Aliases' => [ 'shape' => 'AliasList', ], ], ], 'EdgeList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Edge', ], ], 'EdgeStatistics' => [ 'type' => 'structure', 'members' => [ 'OkCount' => [ 'shape' => 'NullableLong', ], 'ErrorStatistics' => [ 'shape' => 'ErrorStatistics', ], 'FaultStatistics' => [ 'shape' => 'FaultStatistics', ], 'TotalCount' => [ 'shape' => 'NullableLong', ], 'TotalResponseTime' => [ 'shape' => 'NullableDouble', ], ], ], 'EncryptionConfig' => [ 'type' => 'structure', 'members' => [ 'KeyId' => [ 'shape' => 'String', ], 'Status' => [ 'shape' => 'EncryptionStatus', ], 'Type' => [ 'shape' => 'EncryptionType', ], ], ], 'EncryptionKeyId' => [ 'type' => 'string', 'max' => 3000, 'min' => 1, ], 'EncryptionStatus' => [ 'type' => 'string', 'enum' => [ 'UPDATING', 'ACTIVE', ], ], 'EncryptionType' => [ 'type' => 'string', 'enum' => [ 'NONE', 'KMS', ], ], 'ErrorMessage' => [ 'type' => 'string', ], 'ErrorRootCause' => [ 'type' => 'structure', 'members' => [ 'Services' => [ 'shape' => 'ErrorRootCauseServices', ], ], ], 'ErrorRootCauseEntity' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'String', ], 'Exceptions' => [ 'shape' => 'RootCauseExceptions', ], 'Remote' => [ 'shape' => 'NullableBoolean', ], ], ], 'ErrorRootCauseEntityPath' => [ 'type' => 'list', 'member' => [ 'shape' => 'ErrorRootCauseEntity', ], ], 'ErrorRootCauseService' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'String', ], 'Names' => [ 'shape' => 'ServiceNames', ], 'Type' => [ 'shape' => 'String', ], 'AccountId' => [ 'shape' => 'String', ], 'EntityPath' => [ 'shape' => 'ErrorRootCauseEntityPath', ], 'Inferred' => [ 'shape' => 'NullableBoolean', ], ], ], 'ErrorRootCauseServices' => [ 'type' => 'list', 'member' => [ 'shape' => 'ErrorRootCauseService', ], ], 'ErrorRootCauses' => [ 'type' => 'list', 'member' => [ 'shape' => 'ErrorRootCause', ], ], 'ErrorStatistics' => [ 'type' => 'structure', 'members' => [ 'ThrottleCount' => [ 'shape' => 'NullableLong', ], 'OtherCount' => [ 'shape' => 'NullableLong', ], 'TotalCount' => [ 'shape' => 'NullableLong', ], ], ], 'FaultRootCause' => [ 'type' => 'structure', 'members' => [ 'Services' => [ 'shape' => 'FaultRootCauseServices', ], ], ], 'FaultRootCauseEntity' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'String', ], 'Exceptions' => [ 'shape' => 'RootCauseExceptions', ], 'Remote' => [ 'shape' => 'NullableBoolean', ], ], ], 'FaultRootCauseEntityPath' => [ 'type' => 'list', 'member' => [ 'shape' => 'FaultRootCauseEntity', ], ], 'FaultRootCauseService' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'String', ], 'Names' => [ 'shape' => 'ServiceNames', ], 'Type' => [ 'shape' => 'String', ], 'AccountId' => [ 'shape' => 'String', ], 'EntityPath' => [ 'shape' => 'FaultRootCauseEntityPath', ], 'Inferred' => [ 'shape' => 'NullableBoolean', ], ], ], 'FaultRootCauseServices' => [ 'type' => 'list', 'member' => [ 'shape' => 'FaultRootCauseService', ], ], 'FaultRootCauses' => [ 'type' => 'list', 'member' => [ 'shape' => 'FaultRootCause', ], ], 'FaultStatistics' => [ 'type' => 'structure', 'members' => [ 'OtherCount' => [ 'shape' => 'NullableLong', ], 'TotalCount' => [ 'shape' => 'NullableLong', ], ], ], 'FilterExpression' => [ 'type' => 'string', 'max' => 2000, 'min' => 1, ], 'FixedRate' => [ 'type' => 'double', 'max' => 1, 'min' => 0, ], 'GetEncryptionConfigRequest' => [ 'type' => 'structure', 'members' => [], ], 'GetEncryptionConfigResult' => [ 'type' => 'structure', 'members' => [ 'EncryptionConfig' => [ 'shape' => 'EncryptionConfig', ], ], ], 'GetGroupRequest' => [ 'type' => 'structure', 'members' => [ 'GroupName' => [ 'shape' => 'GroupName', ], 'GroupARN' => [ 'shape' => 'GroupARN', ], ], ], 'GetGroupResult' => [ 'type' => 'structure', 'members' => [ 'Group' => [ 'shape' => 'Group', ], ], ], 'GetGroupsNextToken' => [ 'type' => 'string', 'max' => 100, 'min' => 1, ], 'GetGroupsRequest' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'GetGroupsNextToken', ], ], ], 'GetGroupsResult' => [ 'type' => 'structure', 'members' => [ 'Groups' => [ 'shape' => 'GroupSummaryList', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'GetSamplingRulesRequest' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'String', ], ], ], 'GetSamplingRulesResult' => [ 'type' => 'structure', 'members' => [ 'SamplingRuleRecords' => [ 'shape' => 'SamplingRuleRecordList', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'GetSamplingStatisticSummariesRequest' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'String', ], ], ], 'GetSamplingStatisticSummariesResult' => [ 'type' => 'structure', 'members' => [ 'SamplingStatisticSummaries' => [ 'shape' => 'SamplingStatisticSummaryList', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'GetSamplingTargetsRequest' => [ 'type' => 'structure', 'required' => [ 'SamplingStatisticsDocuments', ], 'members' => [ 'SamplingStatisticsDocuments' => [ 'shape' => 'SamplingStatisticsDocumentList', ], ], ], 'GetSamplingTargetsResult' => [ 'type' => 'structure', 'members' => [ 'SamplingTargetDocuments' => [ 'shape' => 'SamplingTargetDocumentList', ], 'LastRuleModification' => [ 'shape' => 'Timestamp', ], 'UnprocessedStatistics' => [ 'shape' => 'UnprocessedStatisticsList', ], ], ], 'GetServiceGraphRequest' => [ 'type' => 'structure', 'required' => [ 'StartTime', 'EndTime', ], 'members' => [ 'StartTime' => [ 'shape' => 'Timestamp', ], 'EndTime' => [ 'shape' => 'Timestamp', ], 'GroupName' => [ 'shape' => 'GroupName', ], 'GroupARN' => [ 'shape' => 'GroupARN', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'GetServiceGraphResult' => [ 'type' => 'structure', 'members' => [ 'StartTime' => [ 'shape' => 'Timestamp', ], 'EndTime' => [ 'shape' => 'Timestamp', ], 'Services' => [ 'shape' => 'ServiceList', ], 'ContainsOldGroupVersions' => [ 'shape' => 'Boolean', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'GetTraceGraphRequest' => [ 'type' => 'structure', 'required' => [ 'TraceIds', ], 'members' => [ 'TraceIds' => [ 'shape' => 'TraceIdList', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'GetTraceGraphResult' => [ 'type' => 'structure', 'members' => [ 'Services' => [ 'shape' => 'ServiceList', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'GetTraceSummariesRequest' => [ 'type' => 'structure', 'required' => [ 'StartTime', 'EndTime', ], 'members' => [ 'StartTime' => [ 'shape' => 'Timestamp', ], 'EndTime' => [ 'shape' => 'Timestamp', ], 'Sampling' => [ 'shape' => 'NullableBoolean', ], 'FilterExpression' => [ 'shape' => 'FilterExpression', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'GetTraceSummariesResult' => [ 'type' => 'structure', 'members' => [ 'TraceSummaries' => [ 'shape' => 'TraceSummaryList', ], 'ApproximateTime' => [ 'shape' => 'Timestamp', ], 'TracesProcessedCount' => [ 'shape' => 'NullableLong', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'Group' => [ 'type' => 'structure', 'members' => [ 'GroupName' => [ 'shape' => 'String', ], 'GroupARN' => [ 'shape' => 'String', ], 'FilterExpression' => [ 'shape' => 'String', ], ], ], 'GroupARN' => [ 'type' => 'string', 'max' => 400, 'min' => 1, ], 'GroupName' => [ 'type' => 'string', 'max' => 32, 'min' => 1, ], 'GroupSummary' => [ 'type' => 'structure', 'members' => [ 'GroupName' => [ 'shape' => 'String', ], 'GroupARN' => [ 'shape' => 'String', ], 'FilterExpression' => [ 'shape' => 'String', ], ], ], 'GroupSummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupSummary', ], ], 'HTTPMethod' => [ 'type' => 'string', 'max' => 10, ], 'Histogram' => [ 'type' => 'list', 'member' => [ 'shape' => 'HistogramEntry', ], ], 'HistogramEntry' => [ 'type' => 'structure', 'members' => [ 'Value' => [ 'shape' => 'Double', ], 'Count' => [ 'shape' => 'Integer', ], ], ], 'Host' => [ 'type' => 'string', 'max' => 64, ], 'Hostname' => [ 'type' => 'string', 'max' => 255, ], 'Http' => [ 'type' => 'structure', 'members' => [ 'HttpURL' => [ 'shape' => 'String', ], 'HttpStatus' => [ 'shape' => 'NullableInteger', ], 'HttpMethod' => [ 'shape' => 'String', ], 'UserAgent' => [ 'shape' => 'String', ], 'ClientIp' => [ 'shape' => 'String', ], ], ], 'InstanceIdDetail' => [ 'type' => 'structure', 'members' => [ 'Id' => [ 'shape' => 'String', ], ], ], 'Integer' => [ 'type' => 'integer', ], 'InvalidRequestException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'NullableBoolean' => [ 'type' => 'boolean', ], 'NullableDouble' => [ 'type' => 'double', ], 'NullableInteger' => [ 'type' => 'integer', ], 'NullableLong' => [ 'type' => 'long', ], 'Priority' => [ 'type' => 'integer', 'max' => 9999, 'min' => 1, ], 'PutEncryptionConfigRequest' => [ 'type' => 'structure', 'required' => [ 'Type', ], 'members' => [ 'KeyId' => [ 'shape' => 'EncryptionKeyId', ], 'Type' => [ 'shape' => 'EncryptionType', ], ], ], 'PutEncryptionConfigResult' => [ 'type' => 'structure', 'members' => [ 'EncryptionConfig' => [ 'shape' => 'EncryptionConfig', ], ], ], 'PutTelemetryRecordsRequest' => [ 'type' => 'structure', 'required' => [ 'TelemetryRecords', ], 'members' => [ 'TelemetryRecords' => [ 'shape' => 'TelemetryRecordList', ], 'EC2InstanceId' => [ 'shape' => 'EC2InstanceId', ], 'Hostname' => [ 'shape' => 'Hostname', ], 'ResourceARN' => [ 'shape' => 'ResourceARN', ], ], ], 'PutTelemetryRecordsResult' => [ 'type' => 'structure', 'members' => [], ], 'PutTraceSegmentsRequest' => [ 'type' => 'structure', 'required' => [ 'TraceSegmentDocuments', ], 'members' => [ 'TraceSegmentDocuments' => [ 'shape' => 'TraceSegmentDocumentList', ], ], ], 'PutTraceSegmentsResult' => [ 'type' => 'structure', 'members' => [ 'UnprocessedTraceSegments' => [ 'shape' => 'UnprocessedTraceSegmentList', ], ], ], 'RequestCount' => [ 'type' => 'integer', 'min' => 0, ], 'ReservoirSize' => [ 'type' => 'integer', 'min' => 0, ], 'ResourceARN' => [ 'type' => 'string', 'max' => 500, ], 'ResourceARNDetail' => [ 'type' => 'structure', 'members' => [ 'ARN' => [ 'shape' => 'String', ], ], ], 'ResponseTimeRootCause' => [ 'type' => 'structure', 'members' => [ 'Services' => [ 'shape' => 'ResponseTimeRootCauseServices', ], ], ], 'ResponseTimeRootCauseEntity' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'String', ], 'Coverage' => [ 'shape' => 'NullableDouble', ], 'Remote' => [ 'shape' => 'NullableBoolean', ], ], ], 'ResponseTimeRootCauseEntityPath' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResponseTimeRootCauseEntity', ], ], 'ResponseTimeRootCauseService' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'String', ], 'Names' => [ 'shape' => 'ServiceNames', ], 'Type' => [ 'shape' => 'String', ], 'AccountId' => [ 'shape' => 'String', ], 'EntityPath' => [ 'shape' => 'ResponseTimeRootCauseEntityPath', ], 'Inferred' => [ 'shape' => 'NullableBoolean', ], ], ], 'ResponseTimeRootCauseServices' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResponseTimeRootCauseService', ], ], 'ResponseTimeRootCauses' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResponseTimeRootCause', ], ], 'RootCauseException' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'String', ], 'Message' => [ 'shape' => 'String', ], ], ], 'RootCauseExceptions' => [ 'type' => 'list', 'member' => [ 'shape' => 'RootCauseException', ], ], 'RuleLimitExceededException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'RuleName' => [ 'type' => 'string', 'max' => 32, 'min' => 1, ], 'SampledCount' => [ 'type' => 'integer', 'min' => 0, ], 'SamplingRule' => [ 'type' => 'structure', 'required' => [ 'ResourceARN', 'Priority', 'FixedRate', 'ReservoirSize', 'ServiceName', 'ServiceType', 'Host', 'HTTPMethod', 'URLPath', 'Version', ], 'members' => [ 'RuleName' => [ 'shape' => 'RuleName', ], 'RuleARN' => [ 'shape' => 'String', ], 'ResourceARN' => [ 'shape' => 'ResourceARN', ], 'Priority' => [ 'shape' => 'Priority', ], 'FixedRate' => [ 'shape' => 'FixedRate', ], 'ReservoirSize' => [ 'shape' => 'ReservoirSize', ], 'ServiceName' => [ 'shape' => 'ServiceName', ], 'ServiceType' => [ 'shape' => 'ServiceType', ], 'Host' => [ 'shape' => 'Host', ], 'HTTPMethod' => [ 'shape' => 'HTTPMethod', ], 'URLPath' => [ 'shape' => 'URLPath', ], 'Version' => [ 'shape' => 'Version', ], 'Attributes' => [ 'shape' => 'AttributeMap', ], ], ], 'SamplingRuleRecord' => [ 'type' => 'structure', 'members' => [ 'SamplingRule' => [ 'shape' => 'SamplingRule', ], 'CreatedAt' => [ 'shape' => 'Timestamp', ], 'ModifiedAt' => [ 'shape' => 'Timestamp', ], ], ], 'SamplingRuleRecordList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SamplingRuleRecord', ], ], 'SamplingRuleUpdate' => [ 'type' => 'structure', 'members' => [ 'RuleName' => [ 'shape' => 'RuleName', ], 'RuleARN' => [ 'shape' => 'String', ], 'ResourceARN' => [ 'shape' => 'ResourceARN', ], 'Priority' => [ 'shape' => 'NullableInteger', ], 'FixedRate' => [ 'shape' => 'NullableDouble', ], 'ReservoirSize' => [ 'shape' => 'NullableInteger', ], 'Host' => [ 'shape' => 'Host', ], 'ServiceName' => [ 'shape' => 'ServiceName', ], 'ServiceType' => [ 'shape' => 'ServiceType', ], 'HTTPMethod' => [ 'shape' => 'HTTPMethod', ], 'URLPath' => [ 'shape' => 'URLPath', ], 'Attributes' => [ 'shape' => 'AttributeMap', ], ], ], 'SamplingStatisticSummary' => [ 'type' => 'structure', 'members' => [ 'RuleName' => [ 'shape' => 'String', ], 'Timestamp' => [ 'shape' => 'Timestamp', ], 'RequestCount' => [ 'shape' => 'Integer', ], 'BorrowCount' => [ 'shape' => 'Integer', ], 'SampledCount' => [ 'shape' => 'Integer', ], ], ], 'SamplingStatisticSummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SamplingStatisticSummary', ], ], 'SamplingStatisticsDocument' => [ 'type' => 'structure', 'required' => [ 'RuleName', 'ClientID', 'Timestamp', 'RequestCount', 'SampledCount', ], 'members' => [ 'RuleName' => [ 'shape' => 'RuleName', ], 'ClientID' => [ 'shape' => 'ClientID', ], 'Timestamp' => [ 'shape' => 'Timestamp', ], 'RequestCount' => [ 'shape' => 'RequestCount', ], 'SampledCount' => [ 'shape' => 'SampledCount', ], 'BorrowCount' => [ 'shape' => 'BorrowCount', ], ], ], 'SamplingStatisticsDocumentList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SamplingStatisticsDocument', ], 'max' => 25, ], 'SamplingTargetDocument' => [ 'type' => 'structure', 'members' => [ 'RuleName' => [ 'shape' => 'String', ], 'FixedRate' => [ 'shape' => 'Double', ], 'ReservoirQuota' => [ 'shape' => 'NullableInteger', ], 'ReservoirQuotaTTL' => [ 'shape' => 'Timestamp', ], 'Interval' => [ 'shape' => 'NullableInteger', ], ], ], 'SamplingTargetDocumentList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SamplingTargetDocument', ], ], 'Segment' => [ 'type' => 'structure', 'members' => [ 'Id' => [ 'shape' => 'SegmentId', ], 'Document' => [ 'shape' => 'SegmentDocument', ], ], ], 'SegmentDocument' => [ 'type' => 'string', 'min' => 1, ], 'SegmentId' => [ 'type' => 'string', ], 'SegmentList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Segment', ], ], 'Service' => [ 'type' => 'structure', 'members' => [ 'ReferenceId' => [ 'shape' => 'NullableInteger', ], 'Name' => [ 'shape' => 'String', ], 'Names' => [ 'shape' => 'ServiceNames', ], 'Root' => [ 'shape' => 'NullableBoolean', ], 'AccountId' => [ 'shape' => 'String', ], 'Type' => [ 'shape' => 'String', ], 'State' => [ 'shape' => 'String', ], 'StartTime' => [ 'shape' => 'Timestamp', ], 'EndTime' => [ 'shape' => 'Timestamp', ], 'Edges' => [ 'shape' => 'EdgeList', ], 'SummaryStatistics' => [ 'shape' => 'ServiceStatistics', ], 'DurationHistogram' => [ 'shape' => 'Histogram', ], 'ResponseTimeHistogram' => [ 'shape' => 'Histogram', ], ], ], 'ServiceId' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'String', ], 'Names' => [ 'shape' => 'ServiceNames', ], 'AccountId' => [ 'shape' => 'String', ], 'Type' => [ 'shape' => 'String', ], ], ], 'ServiceIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'ServiceId', ], ], 'ServiceList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Service', ], ], 'ServiceName' => [ 'type' => 'string', 'max' => 64, ], 'ServiceNames' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'ServiceStatistics' => [ 'type' => 'structure', 'members' => [ 'OkCount' => [ 'shape' => 'NullableLong', ], 'ErrorStatistics' => [ 'shape' => 'ErrorStatistics', ], 'FaultStatistics' => [ 'shape' => 'FaultStatistics', ], 'TotalCount' => [ 'shape' => 'NullableLong', ], 'TotalResponseTime' => [ 'shape' => 'NullableDouble', ], ], ], 'ServiceType' => [ 'type' => 'string', 'max' => 64, ], 'String' => [ 'type' => 'string', ], 'TelemetryRecord' => [ 'type' => 'structure', 'required' => [ 'Timestamp', ], 'members' => [ 'Timestamp' => [ 'shape' => 'Timestamp', ], 'SegmentsReceivedCount' => [ 'shape' => 'NullableInteger', ], 'SegmentsSentCount' => [ 'shape' => 'NullableInteger', ], 'SegmentsSpilloverCount' => [ 'shape' => 'NullableInteger', ], 'SegmentsRejectedCount' => [ 'shape' => 'NullableInteger', ], 'BackendConnectionErrors' => [ 'shape' => 'BackendConnectionErrors', ], ], ], 'TelemetryRecordList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TelemetryRecord', ], ], 'ThrottledException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 429, ], 'exception' => true, ], 'Timestamp' => [ 'type' => 'timestamp', ], 'Trace' => [ 'type' => 'structure', 'members' => [ 'Id' => [ 'shape' => 'TraceId', ], 'Duration' => [ 'shape' => 'NullableDouble', ], 'Segments' => [ 'shape' => 'SegmentList', ], ], ], 'TraceAvailabilityZones' => [ 'type' => 'list', 'member' => [ 'shape' => 'AvailabilityZoneDetail', ], ], 'TraceId' => [ 'type' => 'string', 'max' => 35, 'min' => 1, ], 'TraceIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TraceId', ], ], 'TraceInstanceIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceIdDetail', ], ], 'TraceList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Trace', ], ], 'TraceResourceARNs' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceARNDetail', ], ], 'TraceSegmentDocument' => [ 'type' => 'string', ], 'TraceSegmentDocumentList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TraceSegmentDocument', ], ], 'TraceSummary' => [ 'type' => 'structure', 'members' => [ 'Id' => [ 'shape' => 'TraceId', ], 'Duration' => [ 'shape' => 'NullableDouble', ], 'ResponseTime' => [ 'shape' => 'NullableDouble', ], 'HasFault' => [ 'shape' => 'NullableBoolean', ], 'HasError' => [ 'shape' => 'NullableBoolean', ], 'HasThrottle' => [ 'shape' => 'NullableBoolean', ], 'IsPartial' => [ 'shape' => 'NullableBoolean', ], 'Http' => [ 'shape' => 'Http', ], 'Annotations' => [ 'shape' => 'Annotations', ], 'Users' => [ 'shape' => 'TraceUsers', ], 'ServiceIds' => [ 'shape' => 'ServiceIds', ], 'ResourceARNs' => [ 'shape' => 'TraceResourceARNs', ], 'InstanceIds' => [ 'shape' => 'TraceInstanceIds', ], 'AvailabilityZones' => [ 'shape' => 'TraceAvailabilityZones', ], 'EntryPoint' => [ 'shape' => 'ServiceId', ], 'FaultRootCauses' => [ 'shape' => 'FaultRootCauses', ], 'ErrorRootCauses' => [ 'shape' => 'ErrorRootCauses', ], 'ResponseTimeRootCauses' => [ 'shape' => 'ResponseTimeRootCauses', ], 'Revision' => [ 'shape' => 'Integer', ], ], ], 'TraceSummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TraceSummary', ], ], 'TraceUser' => [ 'type' => 'structure', 'members' => [ 'UserName' => [ 'shape' => 'String', ], 'ServiceIds' => [ 'shape' => 'ServiceIds', ], ], ], 'TraceUsers' => [ 'type' => 'list', 'member' => [ 'shape' => 'TraceUser', ], ], 'URLPath' => [ 'type' => 'string', 'max' => 128, ], 'UnprocessedStatistics' => [ 'type' => 'structure', 'members' => [ 'RuleName' => [ 'shape' => 'String', ], 'ErrorCode' => [ 'shape' => 'String', ], 'Message' => [ 'shape' => 'String', ], ], ], 'UnprocessedStatisticsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'UnprocessedStatistics', ], ], 'UnprocessedTraceIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TraceId', ], ], 'UnprocessedTraceSegment' => [ 'type' => 'structure', 'members' => [ 'Id' => [ 'shape' => 'String', ], 'ErrorCode' => [ 'shape' => 'String', ], 'Message' => [ 'shape' => 'String', ], ], ], 'UnprocessedTraceSegmentList' => [ 'type' => 'list', 'member' => [ 'shape' => 'UnprocessedTraceSegment', ], ], 'UpdateGroupRequest' => [ 'type' => 'structure', 'members' => [ 'GroupName' => [ 'shape' => 'GroupName', ], 'GroupARN' => [ 'shape' => 'GroupARN', ], 'FilterExpression' => [ 'shape' => 'FilterExpression', ], ], ], 'UpdateGroupResult' => [ 'type' => 'structure', 'members' => [ 'Group' => [ 'shape' => 'Group', ], ], ], 'UpdateSamplingRuleRequest' => [ 'type' => 'structure', 'required' => [ 'SamplingRuleUpdate', ], 'members' => [ 'SamplingRuleUpdate' => [ 'shape' => 'SamplingRuleUpdate', ], ], ], 'UpdateSamplingRuleResult' => [ 'type' => 'structure', 'members' => [ 'SamplingRuleRecord' => [ 'shape' => 'SamplingRuleRecord', ], ], ], 'ValueWithServiceIds' => [ 'type' => 'structure', 'members' => [ 'AnnotationValue' => [ 'shape' => 'AnnotationValue', ], 'ServiceIds' => [ 'shape' => 'ServiceIds', ], ], ], 'ValuesWithServiceIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'ValueWithServiceIds', ], ], 'Version' => [ 'type' => 'integer', 'min' => 1, ], ],];
