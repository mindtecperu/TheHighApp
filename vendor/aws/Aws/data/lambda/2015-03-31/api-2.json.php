<?php
// This file was auto-generated from sdk-root/src/data/lambda/2015-03-31/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2015-03-31', 'endpointPrefix' => 'lambda', 'protocol' => 'rest-json', 'serviceFullName' => 'AWS Lambda', 'signatureVersion' => 'v4', ], 'operations' => [ 'AddPermission' => [ 'name' => 'AddPermission', 'http' => [ 'method' => 'POST', 'requestUri' => '/2015-03-31/functions/{FunctionName}/policy', 'responseCode' => 201, ], 'input' => [ 'shape' => 'AddPermissionRequest', ], 'output' => [ 'shape' => 'AddPermissionResponse', ], 'errors' => [ [ 'shape' => 'ServiceException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ResourceConflictException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'PolicyLengthExceededException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'CreateAlias' => [ 'name' => 'CreateAlias', 'http' => [ 'method' => 'POST', 'requestUri' => '/2015-03-31/functions/{FunctionName}/aliases', 'responseCode' => 201, ], 'input' => [ 'shape' => 'CreateAliasRequest', ], 'output' => [ 'shape' => 'AliasConfiguration', ], 'errors' => [ [ 'shape' => 'ServiceException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ResourceConflictException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'CreateEventSourceMapping' => [ 'name' => 'CreateEventSourceMapping', 'http' => [ 'method' => 'POST', 'requestUri' => '/2015-03-31/event-source-mappings/', 'responseCode' => 202, ], 'input' => [ 'shape' => 'CreateEventSourceMappingRequest', ], 'output' => [ 'shape' => 'EventSourceMappingConfiguration', ], 'errors' => [ [ 'shape' => 'ServiceException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'ResourceConflictException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'CreateFunction' => [ 'name' => 'CreateFunction', 'http' => [ 'method' => 'POST', 'requestUri' => '/2015-03-31/functions', 'responseCode' => 201, ], 'input' => [ 'shape' => 'CreateFunctionRequest', ], 'output' => [ 'shape' => 'FunctionConfiguration', ], 'errors' => [ [ 'shape' => 'ServiceException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ResourceConflictException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'CodeStorageExceededException', ], ], ], 'DeleteAlias' => [ 'name' => 'DeleteAlias', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/2015-03-31/functions/{FunctionName}/aliases/{Name}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'DeleteAliasRequest', ], 'errors' => [ [ 'shape' => 'ServiceException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'DeleteEventSourceMapping' => [ 'name' => 'DeleteEventSourceMapping', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/2015-03-31/event-source-mappings/{UUID}', 'responseCode' => 202, ], 'input' => [ 'shape' => 'DeleteEventSourceMappingRequest', ], 'output' => [ 'shape' => 'EventSourceMappingConfiguration', ], 'errors' => [ [ 'shape' => 'ServiceException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'DeleteFunction' => [ 'name' => 'DeleteFunction', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/2015-03-31/functions/{FunctionName}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'DeleteFunctionRequest', ], 'errors' => [ [ 'shape' => 'ServiceException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'ResourceConflictException', ], ], ], 'GetAlias' => [ 'name' => 'GetAlias', 'http' => [ 'method' => 'GET', 'requestUri' => '/2015-03-31/functions/{FunctionName}/aliases/{Name}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetAliasRequest', ], 'output' => [ 'shape' => 'AliasConfiguration', ], 'errors' => [ [ 'shape' => 'ServiceException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'GetEventSourceMapping' => [ 'name' => 'GetEventSourceMapping', 'http' => [ 'method' => 'GET', 'requestUri' => '/2015-03-31/event-source-mappings/{UUID}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetEventSourceMappingRequest', ], 'output' => [ 'shape' => 'EventSourceMappingConfiguration', ], 'errors' => [ [ 'shape' => 'ServiceException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'GetFunction' => [ 'name' => 'GetFunction', 'http' => [ 'method' => 'GET', 'requestUri' => '/2015-03-31/functions/{FunctionName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetFunctionRequest', ], 'output' => [ 'shape' => 'GetFunctionResponse', ], 'errors' => [ [ 'shape' => 'ServiceException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InvalidParameterValueException', ], ], ], 'GetFunctionConfiguration' => [ 'name' => 'GetFunctionConfiguration', 'http' => [ 'method' => 'GET', 'requestUri' => '/2015-03-31/functions/{FunctionName}/configuration', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetFunctionConfigurationRequest', ], 'output' => [ 'shape' => 'FunctionConfiguration', ], 'errors' => [ [ 'shape' => 'ServiceException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InvalidParameterValueException', ], ], ], 'GetPolicy' => [ 'name' => 'GetPolicy', 'http' => [ 'method' => 'GET', 'requestUri' => '/2015-03-31/functions/{FunctionName}/policy', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetPolicyRequest', ], 'output' => [ 'shape' => 'GetPolicyResponse', ], 'errors' => [ [ 'shape' => 'ServiceException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InvalidParameterValueException', ], ], ], 'Invoke' => [ 'name' => 'Invoke', 'http' => [ 'method' => 'POST', 'requestUri' => '/2015-03-31/functions/{FunctionName}/invocations', ], 'input' => [ 'shape' => 'InvocationRequest', ], 'output' => [ 'shape' => 'InvocationResponse', ], 'errors' => [ [ 'shape' => 'ServiceException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidRequestContentException', ], [ 'shape' => 'RequestTooLargeException', ], [ 'shape' => 'UnsupportedMediaTypeException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'EC2UnexpectedException', ], [ 'shape' => 'SubnetIPAddressLimitReachedException', ], [ 'shape' => 'ENILimitReachedException', ], [ 'shape' => 'EC2ThrottledException', ], [ 'shape' => 'EC2AccessDeniedException', ], [ 'shape' => 'InvalidSubnetIDException', ], [ 'shape' => 'InvalidSecurityGroupIDException', ], ], ], 'InvokeAsync' => [ 'name' => 'InvokeAsync', 'http' => [ 'method' => 'POST', 'requestUri' => '/2014-11-13/functions/{FunctionName}/invoke-async/', 'responseCode' => 202, ], 'input' => [ 'shape' => 'InvokeAsyncRequest', ], 'output' => [ 'shape' => 'InvokeAsyncResponse', ], 'errors' => [ [ 'shape' => 'ServiceException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidRequestContentException', ], ], 'deprecated' => true, ], 'ListAliases' => [ 'name' => 'ListAliases', 'http' => [ 'method' => 'GET', 'requestUri' => '/2015-03-31/functions/{FunctionName}/aliases', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListAliasesRequest', ], 'output' => [ 'shape' => 'ListAliasesResponse', ], 'errors' => [ [ 'shape' => 'ServiceException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'ListEventSourceMappings' => [ 'name' => 'ListEventSourceMappings', 'http' => [ 'method' => 'GET', 'requestUri' => '/2015-03-31/event-source-mappings/', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListEventSourceMappingsRequest', ], 'output' => [ 'shape' => 'ListEventSourceMappingsResponse', ], 'errors' => [ [ 'shape' => 'ServiceException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'ListFunctions' => [ 'name' => 'ListFunctions', 'http' => [ 'method' => 'GET', 'requestUri' => '/2015-03-31/functions/', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListFunctionsRequest', ], 'output' => [ 'shape' => 'ListFunctionsResponse', ], 'errors' => [ [ 'shape' => 'ServiceException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'ListVersionsByFunction' => [ 'name' => 'ListVersionsByFunction', 'http' => [ 'method' => 'GET', 'requestUri' => '/2015-03-31/functions/{FunctionName}/versions', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListVersionsByFunctionRequest', ], 'output' => [ 'shape' => 'ListVersionsByFunctionResponse', ], 'errors' => [ [ 'shape' => 'ServiceException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'PublishVersion' => [ 'name' => 'PublishVersion', 'http' => [ 'method' => 'POST', 'requestUri' => '/2015-03-31/functions/{FunctionName}/versions', 'responseCode' => 201, ], 'input' => [ 'shape' => 'PublishVersionRequest', ], 'output' => [ 'shape' => 'FunctionConfiguration', ], 'errors' => [ [ 'shape' => 'ServiceException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'CodeStorageExceededException', ], ], ], 'RemovePermission' => [ 'name' => 'RemovePermission', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/2015-03-31/functions/{FunctionName}/policy/{StatementId}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'RemovePermissionRequest', ], 'errors' => [ [ 'shape' => 'ServiceException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'UpdateAlias' => [ 'name' => 'UpdateAlias', 'http' => [ 'method' => 'PUT', 'requestUri' => '/2015-03-31/functions/{FunctionName}/aliases/{Name}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateAliasRequest', ], 'output' => [ 'shape' => 'AliasConfiguration', ], 'errors' => [ [ 'shape' => 'ServiceException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'UpdateEventSourceMapping' => [ 'name' => 'UpdateEventSourceMapping', 'http' => [ 'method' => 'PUT', 'requestUri' => '/2015-03-31/event-source-mappings/{UUID}', 'responseCode' => 202, ], 'input' => [ 'shape' => 'UpdateEventSourceMappingRequest', ], 'output' => [ 'shape' => 'EventSourceMappingConfiguration', ], 'errors' => [ [ 'shape' => 'ServiceException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'ResourceConflictException', ], ], ], 'UpdateFunctionCode' => [ 'name' => 'UpdateFunctionCode', 'http' => [ 'method' => 'PUT', 'requestUri' => '/2015-03-31/functions/{FunctionName}/code', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateFunctionCodeRequest', ], 'output' => [ 'shape' => 'FunctionConfiguration', ], 'errors' => [ [ 'shape' => 'ServiceException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'CodeStorageExceededException', ], ], ], 'UpdateFunctionConfiguration' => [ 'name' => 'UpdateFunctionConfiguration', 'http' => [ 'method' => 'PUT', 'requestUri' => '/2015-03-31/functions/{FunctionName}/configuration', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateFunctionConfigurationRequest', ], 'output' => [ 'shape' => 'FunctionConfiguration', ], 'errors' => [ [ 'shape' => 'ServiceException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], ], 'shapes' => [ 'Action' => [ 'type' => 'string', 'pattern' => '(lambda:[*]|lambda:[a-zA-Z]+|[*])', ], 'AddPermissionRequest' => [ 'type' => 'structure', 'required' => [ 'FunctionName', 'StatementId', 'Action', 'Principal', ], 'members' => [ 'FunctionName' => [ 'shape' => 'FunctionName', 'location' => 'uri', 'locationName' => 'FunctionName', ], 'StatementId' => [ 'shape' => 'StatementId', ], 'Action' => [ 'shape' => 'Action', ], 'Principal' => [ 'shape' => 'Principal', ], 'SourceArn' => [ 'shape' => 'Arn', ], 'SourceAccount' => [ 'shape' => 'SourceOwner', ], 'EventSourceToken' => [ 'shape' => 'EventSourceToken', ], 'Qualifier' => [ 'shape' => 'Qualifier', 'location' => 'querystring', 'locationName' => 'Qualifier', ], ], ], 'AddPermissionResponse' => [ 'type' => 'structure', 'members' => [ 'Statement' => [ 'shape' => 'String', ], ], ], 'Alias' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '(?!^[0-9]+$)([a-zA-Z0-9-_]+)', ], 'AliasConfiguration' => [ 'type' => 'structure', 'members' => [ 'AliasArn' => [ 'shape' => 'FunctionArn', ], 'Name' => [ 'shape' => 'Alias', ], 'FunctionVersion' => [ 'shape' => 'Version', ], 'Description' => [ 'shape' => 'Description', ], ], ], 'AliasList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AliasConfiguration', ], ], 'Arn' => [ 'type' => 'string', 'pattern' => 'arn:aws:([a-zA-Z0-9\\-])+:([a-z]{2}-[a-z]+-\\d{1})?:(\\d{12})?:(.*)', ], 'BatchSize' => [ 'type' => 'integer', 'max' => 10000, 'min' => 1, ], 'Blob' => [ 'type' => 'blob', ], 'BlobStream' => [ 'type' => 'blob', 'streaming' => true, ], 'Boolean' => [ 'type' => 'boolean', ], 'CodeStorageExceededException' => [ 'type' => 'structure', 'members' => [ 'Type' => [ 'shape' => 'String', ], 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'CreateAliasRequest' => [ 'type' => 'structure', 'required' => [ 'FunctionName', 'Name', 'FunctionVersion', ], 'members' => [ 'FunctionName' => [ 'shape' => 'FunctionName', 'location' => 'uri', 'locationName' => 'FunctionName', ], 'Name' => [ 'shape' => 'Alias', ], 'FunctionVersion' => [ 'shape' => 'Version', ], 'Description' => [ 'shape' => 'Description', ], ], ], 'CreateEventSourceMappingRequest' => [ 'type' => 'structure', 'required' => [ 'EventSourceArn', 'FunctionName', 'StartingPosition', ], 'members' => [ 'EventSourceArn' => [ 'shape' => 'Arn', ], 'FunctionName' => [ 'shape' => 'FunctionName', ], 'Enabled' => [ 'shape' => 'Enabled', ], 'BatchSize' => [ 'shape' => 'BatchSize', ], 'StartingPosition' => [ 'shape' => 'EventSourcePosition', ], ], ], 'CreateFunctionRequest' => [ 'type' => 'structure', 'required' => [ 'FunctionName', 'Runtime', 'Role', 'Handler', 'Code', ], 'members' => [ 'FunctionName' => [ 'shape' => 'FunctionName', ], 'Runtime' => [ 'shape' => 'Runtime', ], 'Role' => [ 'shape' => 'RoleArn', ], 'Handler' => [ 'shape' => 'Handler', ], 'Code' => [ 'shape' => 'FunctionCode', ], 'Description' => [ 'shape' => 'Description', ], 'Timeout' => [ 'shape' => 'Timeout', ], 'MemorySize' => [ 'shape' => 'MemorySize', ], 'Publish' => [ 'shape' => 'Boolean', ], 'VpcConfig' => [ 'shape' => 'VpcConfig', ], ], ], 'Date' => [ 'type' => 'timestamp', ], 'DeleteAliasRequest' => [ 'type' => 'structure', 'required' => [ 'FunctionName', 'Name', ], 'members' => [ 'FunctionName' => [ 'shape' => 'FunctionName', 'location' => 'uri', 'locationName' => 'FunctionName', ], 'Name' => [ 'shape' => 'Alias', 'location' => 'uri', 'locationName' => 'Name', ], ], ], 'DeleteEventSourceMappingRequest' => [ 'type' => 'structure', 'required' => [ 'UUID', ], 'members' => [ 'UUID' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'UUID', ], ], ], 'DeleteFunctionRequest' => [ 'type' => 'structure', 'required' => [ 'FunctionName', ], 'members' => [ 'FunctionName' => [ 'shape' => 'FunctionName', 'location' => 'uri', 'locationName' => 'FunctionName', ], 'Qualifier' => [ 'shape' => 'Qualifier', 'location' => 'querystring', 'locationName' => 'Qualifier', ], ], ], 'Description' => [ 'type' => 'string', 'max' => 256, 'min' => 0, ], 'EC2AccessDeniedException' => [ 'type' => 'structure', 'members' => [ 'Type' => [ 'shape' => 'String', ], 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 502, ], 'exception' => true, ], 'EC2ThrottledException' => [ 'type' => 'structure', 'members' => [ 'Type' => [ 'shape' => 'String', ], 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 502, ], 'exception' => true, ], 'EC2UnexpectedException' => [ 'type' => 'structure', 'members' => [ 'Type' => [ 'shape' => 'String', ], 'Message' => [ 'shape' => 'String', ], 'EC2ErrorCode' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 502, ], 'exception' => true, ], 'ENILimitReachedException' => [ 'type' => 'structure', 'members' => [ 'Type' => [ 'shape' => 'String', ], 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 502, ], 'exception' => true, ], 'Enabled' => [ 'type' => 'boolean', ], 'EventSourceMappingConfiguration' => [ 'type' => 'structure', 'members' => [ 'UUID' => [ 'shape' => 'String', ], 'BatchSize' => [ 'shape' => 'BatchSize', ], 'EventSourceArn' => [ 'shape' => 'Arn', ], 'FunctionArn' => [ 'shape' => 'FunctionArn', ], 'LastModified' => [ 'shape' => 'Date', ], 'LastProcessingResult' => [ 'shape' => 'String', ], 'State' => [ 'shape' => 'String', ], 'StateTransitionReason' => [ 'shape' => 'String', ], ], ], 'EventSourceMappingsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'EventSourceMappingConfiguration', ], ], 'EventSourcePosition' => [ 'type' => 'string', 'enum' => [ 'TRIM_HORIZON', 'LATEST', ], ], 'EventSourceToken' => [ 'type' => 'string', 'max' => 256, 'min' => 0, 'pattern' => '[a-zA-Z0-9._\\-]+', ], 'FunctionArn' => [ 'type' => 'string', 'pattern' => 'arn:aws:lambda:[a-z]{2}-[a-z]+-\\d{1}:\\d{12}:function:[a-zA-Z0-9-_]+(:(\\$LATEST|[a-zA-Z0-9-_]+))?', ], 'FunctionCode' => [ 'type' => 'structure', 'members' => [ 'ZipFile' => [ 'shape' => 'Blob', ], 'S3Bucket' => [ 'shape' => 'S3Bucket', ], 'S3Key' => [ 'shape' => 'S3Key', ], 'S3ObjectVersion' => [ 'shape' => 'S3ObjectVersion', ], ], ], 'FunctionCodeLocation' => [ 'type' => 'structure', 'members' => [ 'RepositoryType' => [ 'shape' => 'String', ], 'Location' => [ 'shape' => 'String', ], ], ], 'FunctionConfiguration' => [ 'type' => 'structure', 'members' => [ 'FunctionName' => [ 'shape' => 'FunctionName', ], 'FunctionArn' => [ 'shape' => 'FunctionArn', ], 'Runtime' => [ 'shape' => 'Runtime', ], 'Role' => [ 'shape' => 'RoleArn', ], 'Handler' => [ 'shape' => 'Handler', ], 'CodeSize' => [ 'shape' => 'Long', ], 'Description' => [ 'shape' => 'Description', ], 'Timeout' => [ 'shape' => 'Timeout', ], 'MemorySize' => [ 'shape' => 'MemorySize', ], 'LastModified' => [ 'shape' => 'Timestamp', ], 'CodeSha256' => [ 'shape' => 'String', ], 'Version' => [ 'shape' => 'Version', ], 'VpcConfig' => [ 'shape' => 'VpcConfigResponse', ], ], ], 'FunctionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'FunctionConfiguration', ], ], 'FunctionName' => [ 'type' => 'string', 'max' => 140, 'min' => 1, 'pattern' => '(arn:aws:lambda:)?([a-z]{2}-[a-z]+-\\d{1}:)?(\\d{12}:)?(function:)?([a-zA-Z0-9-_]+)(:(\\$LATEST|[a-zA-Z0-9-_]+))?', ], 'GetAliasRequest' => [ 'type' => 'structure', 'required' => [ 'FunctionName', 'Name', ], 'members' => [ 'FunctionName' => [ 'shape' => 'FunctionName', 'location' => 'uri', 'locationName' => 'FunctionName', ], 'Name' => [ 'shape' => 'Alias', 'location' => 'uri', 'locationName' => 'Name', ], ], ], 'GetEventSourceMappingRequest' => [ 'type' => 'structure', 'required' => [ 'UUID', ], 'members' => [ 'UUID' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'UUID', ], ], ], 'GetFunctionConfigurationRequest' => [ 'type' => 'structure', 'required' => [ 'FunctionName', ], 'members' => [ 'FunctionName' => [ 'shape' => 'FunctionName', 'location' => 'uri', 'locationName' => 'FunctionName', ], 'Qualifier' => [ 'shape' => 'Qualifier', 'location' => 'querystring', 'locationName' => 'Qualifier', ], ], ], 'GetFunctionRequest' => [ 'type' => 'structure', 'required' => [ 'FunctionName', ], 'members' => [ 'FunctionName' => [ 'shape' => 'FunctionName', 'location' => 'uri', 'locationName' => 'FunctionName', ], 'Qualifier' => [ 'shape' => 'Qualifier', 'location' => 'querystring', 'locationName' => 'Qualifier', ], ], ], 'GetFunctionResponse' => [ 'type' => 'structure', 'members' => [ 'Configuration' => [ 'shape' => 'FunctionConfiguration', ], 'Code' => [ 'shape' => 'FunctionCodeLocation', ], ], ], 'GetPolicyRequest' => [ 'type' => 'structure', 'required' => [ 'FunctionName', ], 'members' => [ 'FunctionName' => [ 'shape' => 'FunctionName', 'location' => 'uri', 'locationName' => 'FunctionName', ], 'Qualifier' => [ 'shape' => 'Qualifier', 'location' => 'querystring', 'locationName' => 'Qualifier', ], ], ], 'GetPolicyResponse' => [ 'type' => 'structure', 'members' => [ 'Policy' => [ 'shape' => 'String', ], ], ], 'Handler' => [ 'type' => 'string', 'max' => 128, 'pattern' => '[^\\s]+', ], 'HttpStatus' => [ 'type' => 'integer', ], 'Integer' => [ 'type' => 'integer', ], 'InvalidParameterValueException' => [ 'type' => 'structure', 'members' => [ 'Type' => [ 'shape' => 'String', ], 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'InvalidRequestContentException' => [ 'type' => 'structure', 'members' => [ 'Type' => [ 'shape' => 'String', ], 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'InvalidSecurityGroupIDException' => [ 'type' => 'structure', 'members' => [ 'Type' => [ 'shape' => 'String', ], 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 502, ], 'exception' => true, ], 'InvalidSubnetIDException' => [ 'type' => 'structure', 'members' => [ 'Type' => [ 'shape' => 'String', ], 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 502, ], 'exception' => true, ], 'InvocationRequest' => [ 'type' => 'structure', 'required' => [ 'FunctionName', ], 'members' => [ 'FunctionName' => [ 'shape' => 'FunctionName', 'location' => 'uri', 'locationName' => 'FunctionName', ], 'InvocationType' => [ 'shape' => 'InvocationType', 'location' => 'header', 'locationName' => 'X-Amz-Invocation-Type', ], 'LogType' => [ 'shape' => 'LogType', 'location' => 'header', 'locationName' => 'X-Amz-Log-Type', ], 'ClientContext' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'X-Amz-Client-Context', ], 'Payload' => [ 'shape' => 'Blob', ], 'Qualifier' => [ 'shape' => 'Qualifier', 'location' => 'querystring', 'locationName' => 'Qualifier', ], ], 'payload' => 'Payload', ], 'InvocationResponse' => [ 'type' => 'structure', 'members' => [ 'StatusCode' => [ 'shape' => 'Integer', 'location' => 'statusCode', ], 'FunctionError' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'X-Amz-Function-Error', ], 'LogResult' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'X-Amz-Log-Result', ], 'Payload' => [ 'shape' => 'Blob', ], ], 'payload' => 'Payload', ], 'InvocationType' => [ 'type' => 'string', 'enum' => [ 'Event', 'RequestResponse', 'DryRun', ], ], 'InvokeAsyncRequest' => [ 'type' => 'structure', 'required' => [ 'FunctionName', 'InvokeArgs', ], 'members' => [ 'FunctionName' => [ 'shape' => 'FunctionName', 'location' => 'uri', 'locationName' => 'FunctionName', ], 'InvokeArgs' => [ 'shape' => 'BlobStream', ], ], 'deprecated' => true, 'payload' => 'InvokeArgs', ], 'InvokeAsyncResponse' => [ 'type' => 'structure', 'members' => [ 'Status' => [ 'shape' => 'HttpStatus', 'location' => 'statusCode', ], ], 'deprecated' => true, ], 'ListAliasesRequest' => [ 'type' => 'structure', 'required' => [ 'FunctionName', ], 'members' => [ 'FunctionName' => [ 'shape' => 'FunctionName', 'location' => 'uri', 'locationName' => 'FunctionName', ], 'FunctionVersion' => [ 'shape' => 'Version', 'location' => 'querystring', 'locationName' => 'FunctionVersion', ], 'Marker' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'Marker', ], 'MaxItems' => [ 'shape' => 'MaxListItems', 'location' => 'querystring', 'locationName' => 'MaxItems', ], ], ], 'ListAliasesResponse' => [ 'type' => 'structure', 'members' => [ 'NextMarker' => [ 'shape' => 'String', ], 'Aliases' => [ 'shape' => 'AliasList', ], ], ], 'ListEventSourceMappingsRequest' => [ 'type' => 'structure', 'members' => [ 'EventSourceArn' => [ 'shape' => 'Arn', 'location' => 'querystring', 'locationName' => 'EventSourceArn', ], 'FunctionName' => [ 'shape' => 'FunctionName', 'location' => 'querystring', 'locationName' => 'FunctionName', ], 'Marker' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'Marker', ], 'MaxItems' => [ 'shape' => 'MaxListItems', 'location' => 'querystring', 'locationName' => 'MaxItems', ], ], ], 'ListEventSourceMappingsResponse' => [ 'type' => 'structure', 'members' => [ 'NextMarker' => [ 'shape' => 'String', ], 'EventSourceMappings' => [ 'shape' => 'EventSourceMappingsList', ], ], ], 'ListFunctionsRequest' => [ 'type' => 'structure', 'members' => [ 'Marker' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'Marker', ], 'MaxItems' => [ 'shape' => 'MaxListItems', 'location' => 'querystring', 'locationName' => 'MaxItems', ], ], ], 'ListFunctionsResponse' => [ 'type' => 'structure', 'members' => [ 'NextMarker' => [ 'shape' => 'String', ], 'Functions' => [ 'shape' => 'FunctionList', ], ], ], 'ListVersionsByFunctionRequest' => [ 'type' => 'structure', 'required' => [ 'FunctionName', ], 'members' => [ 'FunctionName' => [ 'shape' => 'FunctionName', 'location' => 'uri', 'locationName' => 'FunctionName', ], 'Marker' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'Marker', ], 'MaxItems' => [ 'shape' => 'MaxListItems', 'location' => 'querystring', 'locationName' => 'MaxItems', ], ], ], 'ListVersionsByFunctionResponse' => [ 'type' => 'structure', 'members' => [ 'NextMarker' => [ 'shape' => 'String', ], 'Versions' => [ 'shape' => 'FunctionList', ], ], ], 'LogType' => [ 'type' => 'string', 'enum' => [ 'None', 'Tail', ], ], 'Long' => [ 'type' => 'long', ], 'MaxListItems' => [ 'type' => 'integer', 'max' => 10000, 'min' => 1, ], 'MemorySize' => [ 'type' => 'integer', 'max' => 1536, 'min' => 128, ], 'PolicyLengthExceededException' => [ 'type' => 'structure', 'members' => [ 'Type' => [ 'shape' => 'String', ], 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'Principal' => [ 'type' => 'string', 'pattern' => '.*', ], 'PublishVersionRequest' => [ 'type' => 'structure', 'required' => [ 'FunctionName', ], 'members' => [ 'FunctionName' => [ 'shape' => 'FunctionName', 'location' => 'uri', 'locationName' => 'FunctionName', ], 'CodeSha256' => [ 'shape' => 'String', ], 'Description' => [ 'shape' => 'Description', ], ], ], 'Qualifier' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '(|[a-zA-Z0-9$_-]+)', ], 'RemovePermissionRequest' => [ 'type' => 'structure', 'required' => [ 'FunctionName', 'StatementId', ], 'members' => [ 'FunctionName' => [ 'shape' => 'FunctionName', 'location' => 'uri', 'locationName' => 'FunctionName', ], 'StatementId' => [ 'shape' => 'StatementId', 'location' => 'uri', 'locationName' => 'StatementId', ], 'Qualifier' => [ 'shape' => 'Qualifier', 'location' => 'querystring', 'locationName' => 'Qualifier', ], ], ], 'RequestTooLargeException' => [ 'type' => 'structure', 'members' => [ 'Type' => [ 'shape' => 'String', ], 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 413, ], 'exception' => true, ], 'ResourceConflictException' => [ 'type' => 'structure', 'members' => [ 'Type' => [ 'shape' => 'String', ], 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 409, ], 'exception' => true, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'Type' => [ 'shape' => 'String', ], 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 404, ], 'exception' => true, ], 'RoleArn' => [ 'type' => 'string', 'pattern' => 'arn:aws:iam::\\d{12}:role/?[a-zA-Z_0-9+=,.@\\-_/]+', ], 'Runtime' => [ 'type' => 'string', 'enum' => [ 'nodejs', 'nodejs4.3', 'java8', 'python2.7', ], ], 'S3Bucket' => [ 'type' => 'string', 'max' => 63, 'min' => 3, 'pattern' => '^[0-9A-Za-z\\.\\-_]*(?<!\\.)$', ], 'S3Key' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ], 'S3ObjectVersion' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ], 'SecurityGroupId' => [ 'type' => 'string', ], 'SecurityGroupIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'SecurityGroupId', ], 'max' => 5, ], 'ServiceException' => [ 'type' => 'structure', 'members' => [ 'Type' => [ 'shape' => 'String', ], 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, ], 'SourceOwner' => [ 'type' => 'string', 'pattern' => '\\d{12}', ], 'StatementId' => [ 'type' => 'string', 'max' => 100, 'min' => 1, 'pattern' => '([a-zA-Z0-9-_]+)', ], 'String' => [ 'type' => 'string', ], 'SubnetIPAddressLimitReachedException' => [ 'type' => 'structure', 'members' => [ 'Type' => [ 'shape' => 'String', ], 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 502, ], 'exception' => true, ], 'SubnetId' => [ 'type' => 'string', ], 'SubnetIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubnetId', ], 'max' => 16, ], 'Timeout' => [ 'type' => 'integer', 'min' => 1, ], 'Timestamp' => [ 'type' => 'string', ], 'TooManyRequestsException' => [ 'type' => 'structure', 'members' => [ 'retryAfterSeconds' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'Retry-After', ], 'Type' => [ 'shape' => 'String', ], 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 429, ], 'exception' => true, ], 'UnsupportedMediaTypeException' => [ 'type' => 'structure', 'members' => [ 'Type' => [ 'shape' => 'String', ], 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 415, ], 'exception' => true, ], 'UpdateAliasRequest' => [ 'type' => 'structure', 'required' => [ 'FunctionName', 'Name', ], 'members' => [ 'FunctionName' => [ 'shape' => 'FunctionName', 'location' => 'uri', 'locationName' => 'FunctionName', ], 'Name' => [ 'shape' => 'Alias', 'location' => 'uri', 'locationName' => 'Name', ], 'FunctionVersion' => [ 'shape' => 'Version', ], 'Description' => [ 'shape' => 'Description', ], ], ], 'UpdateEventSourceMappingRequest' => [ 'type' => 'structure', 'required' => [ 'UUID', ], 'members' => [ 'UUID' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'UUID', ], 'FunctionName' => [ 'shape' => 'FunctionName', ], 'Enabled' => [ 'shape' => 'Enabled', ], 'BatchSize' => [ 'shape' => 'BatchSize', ], ], ], 'UpdateFunctionCodeRequest' => [ 'type' => 'structure', 'required' => [ 'FunctionName', ], 'members' => [ 'FunctionName' => [ 'shape' => 'FunctionName', 'location' => 'uri', 'locationName' => 'FunctionName', ], 'ZipFile' => [ 'shape' => 'Blob', ], 'S3Bucket' => [ 'shape' => 'S3Bucket', ], 'S3Key' => [ 'shape' => 'S3Key', ], 'S3ObjectVersion' => [ 'shape' => 'S3ObjectVersion', ], 'Publish' => [ 'shape' => 'Boolean', ], ], ], 'UpdateFunctionConfigurationRequest' => [ 'type' => 'structure', 'required' => [ 'FunctionName', ], 'members' => [ 'FunctionName' => [ 'shape' => 'FunctionName', 'location' => 'uri', 'locationName' => 'FunctionName', ], 'Role' => [ 'shape' => 'RoleArn', ], 'Handler' => [ 'shape' => 'Handler', ], 'Description' => [ 'shape' => 'Description', ], 'Timeout' => [ 'shape' => 'Timeout', ], 'MemorySize' => [ 'shape' => 'MemorySize', ], 'VpcConfig' => [ 'shape' => 'VpcConfig', ], 'Runtime' => [ 'shape' => 'Runtime', ], ], ], 'Version' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, 'pattern' => '(\\$LATEST|[0-9]+)', ], 'VpcConfig' => [ 'type' => 'structure', 'members' => [ 'SubnetIds' => [ 'shape' => 'SubnetIds', ], 'SecurityGroupIds' => [ 'shape' => 'SecurityGroupIds', ], ], ], 'VpcConfigResponse' => [ 'type' => 'structure', 'members' => [ 'SubnetIds' => [ 'shape' => 'SubnetIds', ], 'SecurityGroupIds' => [ 'shape' => 'SecurityGroupIds', ], 'VpcId' => [ 'shape' => 'VpcId', ], ], ], 'VpcId' => [ 'type' => 'string', ], ],];
?>