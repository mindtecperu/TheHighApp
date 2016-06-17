<?php
namespace Aws\CodePipeline;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon CodePipeline** service.
 *
 * @method \Aws\Result acknowledgeJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise acknowledgeJobAsync(array $args = [])
 * @method \Aws\Result acknowledgeThirdPartyJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise acknowledgeThirdPartyJobAsync(array $args = [])
 * @method \Aws\Result createCustomActionType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCustomActionTypeAsync(array $args = [])
 * @method \Aws\Result createPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPipelineAsync(array $args = [])
 * @method \Aws\Result deleteCustomActionType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCustomActionTypeAsync(array $args = [])
 * @method \Aws\Result deletePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePipelineAsync(array $args = [])
 * @method \Aws\Result disableStageTransition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableStageTransitionAsync(array $args = [])
 * @method \Aws\Result enableStageTransition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableStageTransitionAsync(array $args = [])
 * @method \Aws\Result getJobDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobDetailsAsync(array $args = [])
 * @method \Aws\Result getPipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPipelineAsync(array $args = [])
 * @method \Aws\Result getPipelineState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPipelineStateAsync(array $args = [])
 * @method \Aws\Result getThirdPartyJobDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getThirdPartyJobDetailsAsync(array $args = [])
 * @method \Aws\Result listActionTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listActionTypesAsync(array $args = [])
 * @method \Aws\Result listPipelines(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPipelinesAsync(array $args = [])
 * @method \Aws\Result pollForJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise pollForJobsAsync(array $args = [])
 * @method \Aws\Result pollForThirdPartyJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise pollForThirdPartyJobsAsync(array $args = [])
 * @method \Aws\Result putActionRevision(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putActionRevisionAsync(array $args = [])
 * @method \Aws\Result putJobFailureResult(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putJobFailureResultAsync(array $args = [])
 * @method \Aws\Result putJobSuccessResult(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putJobSuccessResultAsync(array $args = [])
 * @method \Aws\Result putThirdPartyJobFailureResult(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putThirdPartyJobFailureResultAsync(array $args = [])
 * @method \Aws\Result putThirdPartyJobSuccessResult(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putThirdPartyJobSuccessResultAsync(array $args = [])
 * @method \Aws\Result startPipelineExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startPipelineExecutionAsync(array $args = [])
 * @method \Aws\Result updatePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePipelineAsync(array $args = [])
 */
class CodePipelineClient extends AwsClient {}
?>