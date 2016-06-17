<?php
// This file was auto-generated from sdk-root/src/data/monitoring/2010-08-01/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2010-08-01', 'endpointPrefix' => 'monitoring', 'protocol' => 'query', 'serviceAbbreviation' => 'CloudWatch', 'serviceFullName' => 'Amazon CloudWatch', 'signatureVersion' => 'v4', 'xmlNamespace' => 'http://monitoring.amazonaws.com/doc/2010-08-01/', ], 'operations' => [ 'DeleteAlarms' => [ 'name' => 'DeleteAlarms', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteAlarmsInput', ], 'errors' => [ [ 'shape' => 'ResourceNotFound', ], ], ], 'DescribeAlarmHistory' => [ 'name' => 'DescribeAlarmHistory', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeAlarmHistoryInput', ], 'output' => [ 'shape' => 'DescribeAlarmHistoryOutput', 'resultWrapper' => 'DescribeAlarmHistoryResult', ], 'errors' => [ [ 'shape' => 'InvalidNextToken', ], ], ], 'DescribeAlarms' => [ 'name' => 'DescribeAlarms', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeAlarmsInput', ], 'output' => [ 'shape' => 'DescribeAlarmsOutput', 'resultWrapper' => 'DescribeAlarmsResult', ], 'errors' => [ [ 'shape' => 'InvalidNextToken', ], ], ], 'DescribeAlarmsForMetric' => [ 'name' => 'DescribeAlarmsForMetric', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeAlarmsForMetricInput', ], 'output' => [ 'shape' => 'DescribeAlarmsForMetricOutput', 'resultWrapper' => 'DescribeAlarmsForMetricResult', ], ], 'DisableAlarmActions' => [ 'name' => 'DisableAlarmActions', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DisableAlarmActionsInput', ], ], 'EnableAlarmActions' => [ 'name' => 'EnableAlarmActions', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'EnableAlarmActionsInput', ], ], 'GetMetricStatistics' => [ 'name' => 'GetMetricStatistics', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetMetricStatisticsInput', ], 'output' => [ 'shape' => 'GetMetricStatisticsOutput', 'resultWrapper' => 'GetMetricStatisticsResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingRequiredParameterException', ], [ 'shape' => 'InvalidParameterCombinationException', ], [ 'shape' => 'InternalServiceFault', ], ], ], 'ListMetrics' => [ 'name' => 'ListMetrics', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListMetricsInput', ], 'output' => [ 'shape' => 'ListMetricsOutput', 'resultWrapper' => 'ListMetricsResult', ], 'errors' => [ [ 'shape' => 'InternalServiceFault', ], [ 'shape' => 'InvalidParameterValueException', ], ], ], 'PutMetricAlarm' => [ 'name' => 'PutMetricAlarm', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutMetricAlarmInput', ], 'errors' => [ [ 'shape' => 'LimitExceededFault', ], ], ], 'PutMetricData' => [ 'name' => 'PutMetricData', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutMetricDataInput', ], 'errors' => [ [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingRequiredParameterException', ], [ 'shape' => 'InvalidParameterCombinationException', ], [ 'shape' => 'InternalServiceFault', ], ], ], 'SetAlarmState' => [ 'name' => 'SetAlarmState', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'SetAlarmStateInput', ], 'errors' => [ [ 'shape' => 'ResourceNotFound', ], [ 'shape' => 'InvalidFormatFault', ], ], ], ], 'shapes' => [ 'ActionPrefix' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ], 'ActionsEnabled' => [ 'type' => 'boolean', ], 'AlarmArn' => [ 'type' => 'string', 'max' => 1600, 'min' => 1, ], 'AlarmDescription' => [ 'type' => 'string', 'max' => 1024, 'min' => 0, ], 'AlarmHistoryItem' => [ 'type' => 'structure', 'members' => [ 'AlarmName' => [ 'shape' => 'AlarmName', ], 'Timestamp' => [ 'shape' => 'Timestamp', ], 'HistoryItemType' => [ 'shape' => 'HistoryItemType', ], 'HistorySummary' => [ 'shape' => 'HistorySummary', ], 'HistoryData' => [ 'shape' => 'HistoryData', ], ], ], 'AlarmHistoryItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'AlarmHistoryItem', ], ], 'AlarmName' => [ 'type' => 'string', 'max' => 255, 'min' => 1, ], 'AlarmNamePrefix' => [ 'type' => 'string', 'max' => 255, 'min' => 1, ], 'AlarmNames' => [ 'type' => 'list', 'member' => [ 'shape' => 'AlarmName', ], 'max' => 100, ], 'AwsQueryErrorMessage' => [ 'type' => 'string', ], 'ComparisonOperator' => [ 'type' => 'string', 'enum' => [ 'GreaterThanOrEqualToThreshold', 'GreaterThanThreshold', 'LessThanThreshold', 'LessThanOrEqualToThreshold', ], ], 'Datapoint' => [ 'type' => 'structure', 'members' => [ 'Timestamp' => [ 'shape' => 'Timestamp', ], 'SampleCount' => [ 'shape' => 'DatapointValue', ], 'Average' => [ 'shape' => 'DatapointValue', ], 'Sum' => [ 'shape' => 'DatapointValue', ], 'Minimum' => [ 'shape' => 'DatapointValue', ], 'Maximum' => [ 'shape' => 'DatapointValue', ], 'Unit' => [ 'shape' => 'StandardUnit', ], ], 'xmlOrder' => [ 'Timestamp', 'SampleCount', 'Average', 'Sum', 'Minimum', 'Maximum', 'Unit', ], ], 'DatapointValue' => [ 'type' => 'double', ], 'Datapoints' => [ 'type' => 'list', 'member' => [ 'shape' => 'Datapoint', ], ], 'DeleteAlarmsInput' => [ 'type' => 'structure', 'required' => [ 'AlarmNames', ], 'members' => [ 'AlarmNames' => [ 'shape' => 'AlarmNames', ], ], ], 'DescribeAlarmHistoryInput' => [ 'type' => 'structure', 'members' => [ 'AlarmName' => [ 'shape' => 'AlarmName', ], 'HistoryItemType' => [ 'shape' => 'HistoryItemType', ], 'StartDate' => [ 'shape' => 'Timestamp', ], 'EndDate' => [ 'shape' => 'Timestamp', ], 'MaxRecords' => [ 'shape' => 'MaxRecords', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'DescribeAlarmHistoryOutput' => [ 'type' => 'structure', 'members' => [ 'AlarmHistoryItems' => [ 'shape' => 'AlarmHistoryItems', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'DescribeAlarmsForMetricInput' => [ 'type' => 'structure', 'required' => [ 'MetricName', 'Namespace', ], 'members' => [ 'MetricName' => [ 'shape' => 'MetricName', ], 'Namespace' => [ 'shape' => 'Namespace', ], 'Statistic' => [ 'shape' => 'Statistic', ], 'Dimensions' => [ 'shape' => 'Dimensions', ], 'Period' => [ 'shape' => 'Period', ], 'Unit' => [ 'shape' => 'StandardUnit', ], ], ], 'DescribeAlarmsForMetricOutput' => [ 'type' => 'structure', 'members' => [ 'MetricAlarms' => [ 'shape' => 'MetricAlarms', ], ], ], 'DescribeAlarmsInput' => [ 'type' => 'structure', 'members' => [ 'AlarmNames' => [ 'shape' => 'AlarmNames', ], 'AlarmNamePrefix' => [ 'shape' => 'AlarmNamePrefix', ], 'StateValue' => [ 'shape' => 'StateValue', ], 'ActionPrefix' => [ 'shape' => 'ActionPrefix', ], 'MaxRecords' => [ 'shape' => 'MaxRecords', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'DescribeAlarmsOutput' => [ 'type' => 'structure', 'members' => [ 'MetricAlarms' => [ 'shape' => 'MetricAlarms', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'Dimension' => [ 'type' => 'structure', 'required' => [ 'Name', 'Value', ], 'members' => [ 'Name' => [ 'shape' => 'DimensionName', ], 'Value' => [ 'shape' => 'DimensionValue', ], ], 'xmlOrder' => [ 'Name', 'Value', ], ], 'DimensionFilter' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'DimensionName', ], 'Value' => [ 'shape' => 'DimensionValue', ], ], ], 'DimensionFilters' => [ 'type' => 'list', 'member' => [ 'shape' => 'DimensionFilter', ], 'max' => 10, ], 'DimensionName' => [ 'type' => 'string', 'max' => 255, 'min' => 1, ], 'DimensionValue' => [ 'type' => 'string', 'max' => 255, 'min' => 1, ], 'Dimensions' => [ 'type' => 'list', 'member' => [ 'shape' => 'Dimension', ], 'max' => 10, ], 'DisableAlarmActionsInput' => [ 'type' => 'structure', 'required' => [ 'AlarmNames', ], 'members' => [ 'AlarmNames' => [ 'shape' => 'AlarmNames', ], ], ], 'EnableAlarmActionsInput' => [ 'type' => 'structure', 'required' => [ 'AlarmNames', ], 'members' => [ 'AlarmNames' => [ 'shape' => 'AlarmNames', ], ], ], 'ErrorMessage' => [ 'type' => 'string', 'max' => 255, 'min' => 1, ], 'EvaluationPeriods' => [ 'type' => 'integer', 'min' => 1, ], 'FaultDescription' => [ 'type' => 'string', ], 'GetMetricStatisticsInput' => [ 'type' => 'structure', 'required' => [ 'Namespace', 'MetricName', 'StartTime', 'EndTime', 'Period', 'Statistics', ], 'members' => [ 'Namespace' => [ 'shape' => 'Namespace', ], 'MetricName' => [ 'shape' => 'MetricName', ], 'Dimensions' => [ 'shape' => 'Dimensions', ], 'StartTime' => [ 'shape' => 'Timestamp', ], 'EndTime' => [ 'shape' => 'Timestamp', ], 'Period' => [ 'shape' => 'Period', ], 'Statistics' => [ 'shape' => 'Statistics', ], 'Unit' => [ 'shape' => 'StandardUnit', ], ], ], 'GetMetricStatisticsOutput' => [ 'type' => 'structure', 'members' => [ 'Label' => [ 'shape' => 'MetricLabel', ], 'Datapoints' => [ 'shape' => 'Datapoints', ], ], ], 'HistoryData' => [ 'type' => 'string', 'max' => 4095, 'min' => 1, ], 'HistoryItemType' => [ 'type' => 'string', 'enum' => [ 'ConfigurationUpdate', 'StateUpdate', 'Action', ], ], 'HistorySummary' => [ 'type' => 'string', 'max' => 255, 'min' => 1, ], 'InternalServiceFault' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'FaultDescription', ], ], 'error' => [ 'code' => 'InternalServiceError', 'httpStatusCode' => 500, ], 'exception' => true, 'xmlOrder' => [ 'Message', ], ], 'InvalidFormatFault' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'code' => 'InvalidFormat', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'InvalidNextToken' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'code' => 'InvalidNextToken', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'InvalidParameterCombinationException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'AwsQueryErrorMessage', ], ], 'error' => [ 'code' => 'InvalidParameterCombination', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'InvalidParameterValueException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'AwsQueryErrorMessage', ], ], 'error' => [ 'code' => 'InvalidParameterValue', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'LimitExceededFault' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'code' => 'LimitExceeded', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'ListMetricsInput' => [ 'type' => 'structure', 'members' => [ 'Namespace' => [ 'shape' => 'Namespace', ], 'MetricName' => [ 'shape' => 'MetricName', ], 'Dimensions' => [ 'shape' => 'DimensionFilters', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListMetricsOutput' => [ 'type' => 'structure', 'members' => [ 'Metrics' => [ 'shape' => 'Metrics', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], 'xmlOrder' => [ 'Metrics', 'NextToken', ], ], 'MaxRecords' => [ 'type' => 'integer', 'max' => 100, 'min' => 1, ], 'Metric' => [ 'type' => 'structure', 'members' => [ 'Namespace' => [ 'shape' => 'Namespace', ], 'MetricName' => [ 'shape' => 'MetricName', ], 'Dimensions' => [ 'shape' => 'Dimensions', ], ], 'xmlOrder' => [ 'Namespace', 'MetricName', 'Dimensions', ], ], 'MetricAlarm' => [ 'type' => 'structure', 'members' => [ 'AlarmName' => [ 'shape' => 'AlarmName', ], 'AlarmArn' => [ 'shape' => 'AlarmArn', ], 'AlarmDescription' => [ 'shape' => 'AlarmDescription', ], 'AlarmConfigurationUpdatedTimestamp' => [ 'shape' => 'Timestamp', ], 'ActionsEnabled' => [ 'shape' => 'ActionsEnabled', ], 'OKActions' => [ 'shape' => 'ResourceList', ], 'AlarmActions' => [ 'shape' => 'ResourceList', ], 'InsufficientDataActions' => [ 'shape' => 'ResourceList', ], 'StateValue' => [ 'shape' => 'StateValue', ], 'StateReason' => [ 'shape' => 'StateReason', ], 'StateReasonData' => [ 'shape' => 'StateReasonData', ], 'StateUpdatedTimestamp' => [ 'shape' => 'Timestamp', ], 'MetricName' => [ 'shape' => 'MetricName', ], 'Namespace' => [ 'shape' => 'Namespace', ], 'Statistic' => [ 'shape' => 'Statistic', ], 'Dimensions' => [ 'shape' => 'Dimensions', ], 'Period' => [ 'shape' => 'Period', ], 'Unit' => [ 'shape' => 'StandardUnit', ], 'EvaluationPeriods' => [ 'shape' => 'EvaluationPeriods', ], 'Threshold' => [ 'shape' => 'Threshold', ], 'ComparisonOperator' => [ 'shape' => 'ComparisonOperator', ], ], 'xmlOrder' => [ 'AlarmName', 'AlarmArn', 'AlarmDescription', 'AlarmConfigurationUpdatedTimestamp', 'ActionsEnabled', 'OKActions', 'AlarmActions', 'InsufficientDataActions', 'StateValue', 'StateReason', 'StateReasonData', 'StateUpdatedTimestamp', 'MetricName', 'Namespace', 'Statistic', 'Dimensions', 'Period', 'Unit', 'EvaluationPeriods', 'Threshold', 'ComparisonOperator', ], ], 'MetricAlarms' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricAlarm', ], ], 'MetricData' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricDatum', ], ], 'MetricDatum' => [ 'type' => 'structure', 'required' => [ 'MetricName', ], 'members' => [ 'MetricName' => [ 'shape' => 'MetricName', ], 'Dimensions' => [ 'shape' => 'Dimensions', ], 'Timestamp' => [ 'shape' => 'Timestamp', ], 'Value' => [ 'shape' => 'DatapointValue', ], 'StatisticValues' => [ 'shape' => 'StatisticSet', ], 'Unit' => [ 'shape' => 'StandardUnit', ], ], ], 'MetricLabel' => [ 'type' => 'string', ], 'MetricName' => [ 'type' => 'string', 'max' => 255, 'min' => 1, ], 'Metrics' => [ 'type' => 'list', 'member' => [ 'shape' => 'Metric', ], ], 'MissingRequiredParameterException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'AwsQueryErrorMessage', ], ], 'error' => [ 'code' => 'MissingParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'Namespace' => [ 'type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => '[^:].*', ], 'NextToken' => [ 'type' => 'string', 'max' => 1024, 'min' => 0, ], 'Period' => [ 'type' => 'integer', 'min' => 60, ], 'PutMetricAlarmInput' => [ 'type' => 'structure', 'required' => [ 'AlarmName', 'MetricName', 'Namespace', 'Statistic', 'Period', 'EvaluationPeriods', 'Threshold', 'ComparisonOperator', ], 'members' => [ 'AlarmName' => [ 'shape' => 'AlarmName', ], 'AlarmDescription' => [ 'shape' => 'AlarmDescription', ], 'ActionsEnabled' => [ 'shape' => 'ActionsEnabled', ], 'OKActions' => [ 'shape' => 'ResourceList', ], 'AlarmActions' => [ 'shape' => 'ResourceList', ], 'InsufficientDataActions' => [ 'shape' => 'ResourceList', ], 'MetricName' => [ 'shape' => 'MetricName', ], 'Namespace' => [ 'shape' => 'Namespace', ], 'Statistic' => [ 'shape' => 'Statistic', ], 'Dimensions' => [ 'shape' => 'Dimensions', ], 'Period' => [ 'shape' => 'Period', ], 'Unit' => [ 'shape' => 'StandardUnit', ], 'EvaluationPeriods' => [ 'shape' => 'EvaluationPeriods', ], 'Threshold' => [ 'shape' => 'Threshold', ], 'ComparisonOperator' => [ 'shape' => 'ComparisonOperator', ], ], ], 'PutMetricDataInput' => [ 'type' => 'structure', 'required' => [ 'Namespace', 'MetricData', ], 'members' => [ 'Namespace' => [ 'shape' => 'Namespace', ], 'MetricData' => [ 'shape' => 'MetricData', ], ], ], 'ResourceList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceName', ], 'max' => 5, ], 'ResourceName' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ], 'ResourceNotFound' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'code' => 'ResourceNotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'SetAlarmStateInput' => [ 'type' => 'structure', 'required' => [ 'AlarmName', 'StateValue', 'StateReason', ], 'members' => [ 'AlarmName' => [ 'shape' => 'AlarmName', ], 'StateValue' => [ 'shape' => 'StateValue', ], 'StateReason' => [ 'shape' => 'StateReason', ], 'StateReasonData' => [ 'shape' => 'StateReasonData', ], ], ], 'StandardUnit' => [ 'type' => 'string', 'enum' => [ 'Seconds', 'Microseconds', 'Milliseconds', 'Bytes', 'Kilobytes', 'Megabytes', 'Gigabytes', 'Terabytes', 'Bits', 'Kilobits', 'Megabits', 'Gigabits', 'Terabits', 'Percent', 'Count', 'Bytes/Second', 'Kilobytes/Second', 'Megabytes/Second', 'Gigabytes/Second', 'Terabytes/Second', 'Bits/Second', 'Kilobits/Second', 'Megabits/Second', 'Gigabits/Second', 'Terabits/Second', 'Count/Second', 'None', ], ], 'StateReason' => [ 'type' => 'string', 'max' => 1023, 'min' => 0, ], 'StateReasonData' => [ 'type' => 'string', 'max' => 4000, 'min' => 0, ], 'StateValue' => [ 'type' => 'string', 'enum' => [ 'OK', 'ALARM', 'INSUFFICIENT_DATA', ], ], 'Statistic' => [ 'type' => 'string', 'enum' => [ 'SampleCount', 'Average', 'Sum', 'Minimum', 'Maximum', ], ], 'StatisticSet' => [ 'type' => 'structure', 'required' => [ 'SampleCount', 'Sum', 'Minimum', 'Maximum', ], 'members' => [ 'SampleCount' => [ 'shape' => 'DatapointValue', ], 'Sum' => [ 'shape' => 'DatapointValue', ], 'Minimum' => [ 'shape' => 'DatapointValue', ], 'Maximum' => [ 'shape' => 'DatapointValue', ], ], ], 'Statistics' => [ 'type' => 'list', 'member' => [ 'shape' => 'Statistic', ], 'max' => 5, 'min' => 1, ], 'Threshold' => [ 'type' => 'double', ], 'Timestamp' => [ 'type' => 'timestamp', ], ],];
?>