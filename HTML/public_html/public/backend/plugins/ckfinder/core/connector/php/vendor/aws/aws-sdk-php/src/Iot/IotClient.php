<?php
namespace Aws\Iot;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS IoT** service.
 *
 * @method \Aws\Result acceptCertificateTransfer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise acceptCertificateTransferAsync(array $args = [])
 * @method \Aws\Result addThingToBillingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addThingToBillingGroupAsync(array $args = [])
 * @method \Aws\Result addThingToThingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addThingToThingGroupAsync(array $args = [])
 * @method \Aws\Result associateTargetsWithJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateTargetsWithJobAsync(array $args = [])
 * @method \Aws\Result attachPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachPolicyAsync(array $args = [])
 * @method \Aws\Result attachPrincipalPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachPrincipalPolicyAsync(array $args = [])
 * @method \Aws\Result attachSecurityProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachSecurityProfileAsync(array $args = [])
 * @method \Aws\Result attachThingPrincipal(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachThingPrincipalAsync(array $args = [])
 * @method \Aws\Result cancelAuditTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelAuditTaskAsync(array $args = [])
 * @method \Aws\Result cancelCertificateTransfer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelCertificateTransferAsync(array $args = [])
 * @method \Aws\Result cancelJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelJobAsync(array $args = [])
 * @method \Aws\Result cancelJobExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelJobExecutionAsync(array $args = [])
 * @method \Aws\Result clearDefaultAuthorizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise clearDefaultAuthorizerAsync(array $args = [])
 * @method \Aws\Result createAuthorizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAuthorizerAsync(array $args = [])
 * @method \Aws\Result createBillingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBillingGroupAsync(array $args = [])
 * @method \Aws\Result createCertificateFromCsr(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCertificateFromCsrAsync(array $args = [])
 * @method \Aws\Result createDynamicThingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDynamicThingGroupAsync(array $args = [])
 * @method \Aws\Result createJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createJobAsync(array $args = [])
 * @method \Aws\Result createKeysAndCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createKeysAndCertificateAsync(array $args = [])
 * @method \Aws\Result createOTAUpdate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createOTAUpdateAsync(array $args = [])
 * @method \Aws\Result createPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPolicyAsync(array $args = [])
 * @method \Aws\Result createPolicyVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPolicyVersionAsync(array $args = [])
 * @method \Aws\Result createRoleAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRoleAliasAsync(array $args = [])
 * @method \Aws\Result createScheduledAudit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createScheduledAuditAsync(array $args = [])
 * @method \Aws\Result createSecurityProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSecurityProfileAsync(array $args = [])
 * @method \Aws\Result createStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStreamAsync(array $args = [])
 * @method \Aws\Result createThing(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createThingAsync(array $args = [])
 * @method \Aws\Result createThingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createThingGroupAsync(array $args = [])
 * @method \Aws\Result createThingType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createThingTypeAsync(array $args = [])
 * @method \Aws\Result createTopicRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTopicRuleAsync(array $args = [])
 * @method \Aws\Result deleteAccountAuditConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccountAuditConfigurationAsync(array $args = [])
 * @method \Aws\Result deleteAuthorizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAuthorizerAsync(array $args = [])
 * @method \Aws\Result deleteBillingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBillingGroupAsync(array $args = [])
 * @method \Aws\Result deleteCACertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCACertificateAsync(array $args = [])
 * @method \Aws\Result deleteCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCertificateAsync(array $args = [])
 * @method \Aws\Result deleteDynamicThingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDynamicThingGroupAsync(array $args = [])
 * @method \Aws\Result deleteJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteJobAsync(array $args = [])
 * @method \Aws\Result deleteJobExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteJobExecutionAsync(array $args = [])
 * @method \Aws\Result deleteOTAUpdate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteOTAUpdateAsync(array $args = [])
 * @method \Aws\Result deletePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePolicyAsync(array $args = [])
 * @method \Aws\Result deletePolicyVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePolicyVersionAsync(array $args = [])
 * @method \Aws\Result deleteRegistrationCode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRegistrationCodeAsync(array $args = [])
 * @method \Aws\Result deleteRoleAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRoleAliasAsync(array $args = [])
 * @method \Aws\Result deleteScheduledAudit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteScheduledAuditAsync(array $args = [])
 * @method \Aws\Result deleteSecurityProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSecurityProfileAsync(array $args = [])
 * @method \Aws\Result deleteStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStreamAsync(array $args = [])
 * @method \Aws\Result deleteThing(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteThingAsync(array $args = [])
 * @method \Aws\Result deleteThingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteThingGroupAsync(array $args = [])
 * @method \Aws\Result deleteThingType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteThingTypeAsync(array $args = [])
 * @method \Aws\Result deleteTopicRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTopicRuleAsync(array $args = [])
 * @method \Aws\Result deleteV2LoggingLevel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteV2LoggingLevelAsync(array $args = [])
 * @method \Aws\Result deprecateThingType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deprecateThingTypeAsync(array $args = [])
 * @method \Aws\Result describeAccountAuditConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountAuditConfigurationAsync(array $args = [])
 * @method \Aws\Result describeAuditTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAuditTaskAsync(array $args = [])
 * @method \Aws\Result describeAuthorizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAuthorizerAsync(array $args = [])
 * @method \Aws\Result describeBillingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBillingGroupAsync(array $args = [])
 * @method \Aws\Result describeCACertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCACertificateAsync(array $args = [])
 * @method \Aws\Result describeCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCertificateAsync(array $args = [])
 * @method \Aws\Result describeDefaultAuthorizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDefaultAuthorizerAsync(array $args = [])
 * @method \Aws\Result describeEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEndpointAsync(array $args = [])
 * @method \Aws\Result describeEventConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEventConfigurationsAsync(array $args = [])
 * @method \Aws\Result describeIndex(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIndexAsync(array $args = [])
 * @method \Aws\Result describeJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobAsync(array $args = [])
 * @method \Aws\Result describeJobExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobExecutionAsync(array $args = [])
 * @method \Aws\Result describeRoleAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRoleAliasAsync(array $args = [])
 * @method \Aws\Result describeScheduledAudit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScheduledAuditAsync(array $args = [])
 * @method \Aws\Result describeSecurityProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSecurityProfileAsync(array $args = [])
 * @method \Aws\Result describeStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStreamAsync(array $args = [])
 * @method \Aws\Result describeThing(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeThingAsync(array $args = [])
 * @method \Aws\Result describeThingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeThingGroupAsync(array $args = [])
 * @method \Aws\Result describeThingRegistrationTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeThingRegistrationTaskAsync(array $args = [])
 * @method \Aws\Result describeThingType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeThingTypeAsync(array $args = [])
 * @method \Aws\Result detachPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachPolicyAsync(array $args = [])
 * @method \Aws\Result detachPrincipalPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachPrincipalPolicyAsync(array $args = [])
 * @method \Aws\Result detachSecurityProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachSecurityProfileAsync(array $args = [])
 * @method \Aws\Result detachThingPrincipal(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachThingPrincipalAsync(array $args = [])
 * @method \Aws\Result disableTopicRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableTopicRuleAsync(array $args = [])
 * @method \Aws\Result enableTopicRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableTopicRuleAsync(array $args = [])
 * @method \Aws\Result getEffectivePolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEffectivePoliciesAsync(array $args = [])
 * @method \Aws\Result getIndexingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIndexingConfigurationAsync(array $args = [])
 * @method \Aws\Result getJobDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobDocumentAsync(array $args = [])
 * @method \Aws\Result getLoggingOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLoggingOptionsAsync(array $args = [])
 * @method \Aws\Result getOTAUpdate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOTAUpdateAsync(array $args = [])
 * @method \Aws\Result getPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPolicyAsync(array $args = [])
 * @method \Aws\Result getPolicyVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPolicyVersionAsync(array $args = [])
 * @method \Aws\Result getRegistrationCode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRegistrationCodeAsync(array $args = [])
 * @method \Aws\Result getStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStatisticsAsync(array $args = [])
 * @method \Aws\Result getTopicRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTopicRuleAsync(array $args = [])
 * @method \Aws\Result getV2LoggingOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getV2LoggingOptionsAsync(array $args = [])
 * @method \Aws\Result listActiveViolations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listActiveViolationsAsync(array $args = [])
 * @method \Aws\Result listAttachedPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAttachedPoliciesAsync(array $args = [])
 * @method \Aws\Result listAuditFindings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAuditFindingsAsync(array $args = [])
 * @method \Aws\Result listAuditTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAuditTasksAsync(array $args = [])
 * @method \Aws\Result listAuthorizers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAuthorizersAsync(array $args = [])
 * @method \Aws\Result listBillingGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBillingGroupsAsync(array $args = [])
 * @method \Aws\Result listCACertificates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCACertificatesAsync(array $args = [])
 * @method \Aws\Result listCertificates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCertificatesAsync(array $args = [])
 * @method \Aws\Result listCertificatesByCA(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCertificatesByCAAsync(array $args = [])
 * @method \Aws\Result listIndices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIndicesAsync(array $args = [])
 * @method \Aws\Result listJobExecutionsForJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobExecutionsForJobAsync(array $args = [])
 * @method \Aws\Result listJobExecutionsForThing(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobExecutionsForThingAsync(array $args = [])
 * @method \Aws\Result listJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobsAsync(array $args = [])
 * @method \Aws\Result listOTAUpdates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOTAUpdatesAsync(array $args = [])
 * @method \Aws\Result listOutgoingCertificates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOutgoingCertificatesAsync(array $args = [])
 * @method \Aws\Result listPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPoliciesAsync(array $args = [])
 * @method \Aws\Result listPolicyPrincipals(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPolicyPrincipalsAsync(array $args = [])
 * @method \Aws\Result listPolicyVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPolicyVersionsAsync(array $args = [])
 * @method \Aws\Result listPrincipalPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPrincipalPoliciesAsync(array $args = [])
 * @method \Aws\Result listPrincipalThings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPrincipalThingsAsync(array $args = [])
 * @method \Aws\Result listRoleAliases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRoleAliasesAsync(array $args = [])
 * @method \Aws\Result listScheduledAudits(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listScheduledAuditsAsync(array $args = [])
 * @method \Aws\Result listSecurityProfiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSecurityProfilesAsync(array $args = [])
 * @method \Aws\Result listSecurityProfilesForTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSecurityProfilesForTargetAsync(array $args = [])
 * @method \Aws\Result listStreams(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStreamsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result listTargetsForPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTargetsForPolicyAsync(array $args = [])
 * @method \Aws\Result listTargetsForSecurityProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTargetsForSecurityProfileAsync(array $args = [])
 * @method \Aws\Result listThingGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listThingGroupsAsync(array $args = [])
 * @method \Aws\Result listThingGroupsForThing(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listThingGroupsForThingAsync(array $args = [])
 * @method \Aws\Result listThingPrincipals(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listThingPrincipalsAsync(array $args = [])
 * @method \Aws\Result listThingRegistrationTaskReports(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listThingRegistrationTaskReportsAsync(array $args = [])
 * @method \Aws\Result listThingRegistrationTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listThingRegistrationTasksAsync(array $args = [])
 * @method \Aws\Result listThingTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listThingTypesAsync(array $args = [])
 * @method \Aws\Result listThings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listThingsAsync(array $args = [])
 * @method \Aws\Result listThingsInBillingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listThingsInBillingGroupAsync(array $args = [])
 * @method \Aws\Result listThingsInThingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listThingsInThingGroupAsync(array $args = [])
 * @method \Aws\Result listTopicRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTopicRulesAsync(array $args = [])
 * @method \Aws\Result listV2LoggingLevels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listV2LoggingLevelsAsync(array $args = [])
 * @method \Aws\Result listViolationEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listViolationEventsAsync(array $args = [])
 * @method \Aws\Result registerCACertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerCACertificateAsync(array $args = [])
 * @method \Aws\Result registerCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerCertificateAsync(array $args = [])
 * @method \Aws\Result registerThing(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerThingAsync(array $args = [])
 * @method \Aws\Result rejectCertificateTransfer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rejectCertificateTransferAsync(array $args = [])
 * @method \Aws\Result removeThingFromBillingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeThingFromBillingGroupAsync(array $args = [])
 * @method \Aws\Result removeThingFromThingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeThingFromThingGroupAsync(array $args = [])
 * @method \Aws\Result replaceTopicRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise replaceTopicRuleAsync(array $args = [])
 * @method \Aws\Result searchIndex(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchIndexAsync(array $args = [])
 * @method \Aws\Result setDefaultAuthorizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setDefaultAuthorizerAsync(array $args = [])
 * @method \Aws\Result setDefaultPolicyVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setDefaultPolicyVersionAsync(array $args = [])
 * @method \Aws\Result setLoggingOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setLoggingOptionsAsync(array $args = [])
 * @method \Aws\Result setV2LoggingLevel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setV2LoggingLevelAsync(array $args = [])
 * @method \Aws\Result setV2LoggingOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setV2LoggingOptionsAsync(array $args = [])
 * @method \Aws\Result startOnDemandAuditTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startOnDemandAuditTaskAsync(array $args = [])
 * @method \Aws\Result startThingRegistrationTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startThingRegistrationTaskAsync(array $args = [])
 * @method \Aws\Result stopThingRegistrationTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopThingRegistrationTaskAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result testAuthorization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testAuthorizationAsync(array $args = [])
 * @method \Aws\Result testInvokeAuthorizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testInvokeAuthorizerAsync(array $args = [])
 * @method \Aws\Result transferCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise transferCertificateAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateAccountAuditConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAccountAuditConfigurationAsync(array $args = [])
 * @method \Aws\Result updateAuthorizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAuthorizerAsync(array $args = [])
 * @method \Aws\Result updateBillingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBillingGroupAsync(array $args = [])
 * @method \Aws\Result updateCACertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCACertificateAsync(array $args = [])
 * @method \Aws\Result updateCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCertificateAsync(array $args = [])
 * @method \Aws\Result updateDynamicThingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDynamicThingGroupAsync(array $args = [])
 * @method \Aws\Result updateEventConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEventConfigurationsAsync(array $args = [])
 * @method \Aws\Result updateIndexingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIndexingConfigurationAsync(array $args = [])
 * @method \Aws\Result updateJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateJobAsync(array $args = [])
 * @method \Aws\Result updateRoleAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRoleAliasAsync(array $args = [])
 * @method \Aws\Result updateScheduledAudit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateScheduledAuditAsync(array $args = [])
 * @method \Aws\Result updateSecurityProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSecurityProfileAsync(array $args = [])
 * @method \Aws\Result updateStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateStreamAsync(array $args = [])
 * @method \Aws\Result updateThing(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateThingAsync(array $args = [])
 * @method \Aws\Result updateThingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateThingGroupAsync(array $args = [])
 * @method \Aws\Result updateThingGroupsForThing(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateThingGroupsForThingAsync(array $args = [])
 * @method \Aws\Result validateSecurityProfileBehaviors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise validateSecurityProfileBehaviorsAsync(array $args = [])
 */
class IotClient extends AwsClient {}
