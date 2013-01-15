<?php 
require('soap-wsse.php');

class ExactTargetSoapClient extends SoapClient {
	public $username = NULL;
	public $password = NULL;

	function __doRequest($request, $location, $saction, $version) {
		$doc = new DOMDocument();
		$doc->loadXML($request);

		$objWSSE = new WSSESoap($doc);

		$objWSSE->addUserToken($this->username, $this->password, FALSE);

		return parent::__doRequest($objWSSE->saveXML(), $location, $saction, $version);
   }

}

class ExactTarget_APIObject {
  public $Client; // ExactTarget_ClientID
  public $PartnerKey; // string
  public $PartnerProperties; // ExactTarget_APIProperty
  public $CreatedDate; // dateTime
  public $ModifiedDate; // dateTime
  public $ID; // int
  public $ObjectID; // string
  public $CustomerKey; // string
  public $Owner; // ExactTarget_Owner
}

class ExactTarget_ClientID {
  public $ClientID; // int
  public $ID; // int
  public $PartnerClientKey; // string
  public $UserID; // int
  public $PartnerUserKey; // string
}

class ExactTarget_APIProperty {
  public $Name; // string
  public $Value; // string
}

class ExactTarget_Owner {
  public $Client; // ExactTarget_ClientID
  public $FromName; // string
  public $FromAddress; // string
}

class ExactTarget_AsyncResponseType {
  const email = 'email';
}

class ExactTarget_AsyncResponse {
  public $ResponseType; // ExactTarget_AsyncResponseType
  public $ResponseAddress; // string
}

class ExactTarget_ContainerID {
  public $APIObject; // ExactTarget_APIObject
}

class ExactTarget_CreateRequest {
  public $Options; // ExactTarget_CreateOptions
  public $Objects; // ExactTarget_APIObject
}

class ExactTarget_CreateResult {
  public $OrdinalID; // int
  public $StatusCode; // string
  public $StatusMessage; // string
  public $NewID; // int
  public $NewObjectID; // string
  public $PartnerKey; // string
  public $Object; // ExactTarget_APIObject
  public $ErrorCode; // int
}

class ExactTarget_CreateResponse {
  public $Results; // ExactTarget_CreateResult
  public $RequestID; // string
  public $OverallStatus; // string
}

class ExactTarget_CreateOptions {
  public $Client; // ExactTarget_ClientID
  public $SendResponseTo; // ExactTarget_AsyncResponse
  public $Container; // ExactTarget_ContainerID
}

class ExactTarget_UpdateOptions {
  public $Client; // ExactTarget_ClientID
  public $SendResponseTo; // ExactTarget_AsyncResponse
  public $Container; // ExactTarget_ContainerID
  public $Action; // string
}

class ExactTarget_UpdateRequest {
  public $Options; // ExactTarget_UpdateOptions
  public $Objects; // ExactTarget_APIObject
}

class ExactTarget_UpdateResult {
  public $OrdinalID; // int
  public $StatusCode; // string
  public $StatusMessage; // string
  public $Object; // ExactTarget_APIObject
  public $ErrorCode; // int
}

class ExactTarget_UpdateResponse {
  public $Results; // ExactTarget_UpdateResult
  public $RequestID; // string
  public $OverallStatus; // string
}

class ExactTarget_DeleteOptions {
  public $Client; // ExactTarget_ClientID
  public $SendResponseTo; // ExactTarget_AsyncResponse
}

class ExactTarget_DeleteRequest {
  public $Options; // ExactTarget_DeleteOptions
  public $Objects; // ExactTarget_APIObject
}

class ExactTarget_DeleteResult {
  public $OrdinalID; // int
  public $StatusCode; // string
  public $StatusMessage; // string
  public $Object; // ExactTarget_APIObject
  public $ErrorCode; // int
}

class ExactTarget_DeleteResponse {
  public $Results; // DeleteResult
  public $RequestID; // string
  public $OverallStatus; // string
}

class ExactTarget_RetrieveRequest {
  public $ClientIDs; // ExactTarget_ClientID
  public $ObjectType; // string
  public $Properties; // string[]
  public $Filter; // ExactTarget_FilterPart
  public $RespondTo; // ExactTarget_AsyncResponse
  public $PartnerProperties; // ExactTarget_APIProperty
  public $ContinueRequest; // string
  public $QueryAllAccounts; // boolean
  public $RetrieveAllSinceLastBatch; // boolean
}

class ExactTarget_RetrieveRequestMsg {
  public $RetrieveRequest; // ExactTarget_RetrieveRequest
}

class ExactTarget_RetrieveResponseMsg {
  public $OverallStatus; // string
  public $RequestID; // string
  public $Results; // ExactTarget_APIObject
}

class ExactTarget_QueryRequest {
  public $ClientIDs; // ExactTarget_ClientID
  public $Query; // ExactTarget_Query
  public $RespondTo; // ExactTarget_AsyncResponse
  public $PartnerProperties; // ExactTarget_APIProperty
  public $ContinueRequest; // string
  public $QueryAllAccounts; // boolean
  public $RetrieveAllSinceLastBatch; // boolean
}

class ExactTarget_QueryRequestMsg {
  public $QueryRequest; // ExactTarget_QueryRequest
}

class ExactTarget_QueryResponseMsg {
  public $OverallStatus; // string
  public $RequestID; // string
  public $Results; // ExactTarget_APIObject
}

class ExactTarget_QueryObject {
  public $ObjectType; // string
  public $Properties; // string[]
  public $Objects; // ExactTarget_QueryObject
}

class ExactTarget_Query {
  public $Object; // QueryObject
  public $Filter; // ExactTarget_FilterPart
}

class ExactTarget_FilterPart {
}

class ExactTarget_SimpleFilterPart {
  public $Property; // string
  public $SimpleOperator; // ExactTarget_SimpleOperators
  public $Value; // string
  public $DateValue; // dateTime
}

class ExactTarget_ComplexFilterPart {
  public $LeftOperand; // ExactTarget_FilterPart
  public $LogicalOperator; // ExactTarget_LogicalOperators
  public $RightOperand; // ExactTarget_FilterPart
}

class ExactTarget_SimpleOperators {
  const equals = 'equals';
  const greaterThan = 'greaterThan';
  const lessThan = 'lessThan';
  const isNull = 'isNull';
  const isNotNull = 'isNotNull';
  const greaterThanOrEqual = 'greaterThanOrEqual';
  const lessThanOrEqual = 'lessThanOrEqual';
  const between = 'between';
  const IN = 'IN';
}

class ExactTarget_LogicalOperators {
  const _OR = 'OR';
  const _AND = 'AND';
}

class ExactTarget_DefinitionRequestMsg {
  public $ObjectDefinitionRequests; // ExactTarget_ObjectDefinitionRequest
}

class ExactTarget_ObjectDefinitionRequest {
  public $Client; // ExactTarget_ClientID
  public $ObjectType; // string
}

class ExactTarget_DefinitionResponseMsg {
  public $ObjectDefinitions; // ExactTarget_ObjectDefinition
  public $RequestID; // string
}

class ExactTarget_PropertyDefinition {
  public $Name; // string
  public $DataType; // string
  public $IsCreatable; // boolean
  public $IsUpdatable; // boolean
  public $IsRetrievable; // boolean
  public $IsQueryable; // boolean
  public $IsFilterable; // boolean
  public $IsPartnerProperty; // boolean
  public $IsAccountProperty; // boolean
  public $PartnerMap; // string
  public $AttributeMaps; // ExactTarget_AttributeMap
  public $Markups; // ExactTarget_APIProperty
}

class ExactTarget_ObjectDefinition {
  public $ObjectType; // string
  public $Name; // string
  public $IsCreatable; // boolean
  public $IsUpdatable; // boolean
  public $IsRetrievable; // boolean
  public $IsQueryable; // boolean
  public $IsReference; // boolean
  public $ReferencedType; // string
  public $IsPropertyCollection; // string
  public $IsObjectCollection; // boolean
  public $Properties; // ExactTarget_PropertyDefinition
  public $ChildObjects; // ExactTarget_ObjectDefinition
}

class ExactTarget_AttributeMap {
  public $EntityName; // string
  public $ColumnName; // string
  public $ColumnNameMappedTo; // string
  public $EntityNameMappedTo; // string
  public $AdditionalData; // ExactTarget_APIProperty
}

class ExactTarget_ExecuteRequest {
  public $Client; // ExactTarget_ClientID
  public $Name; // string
  public $Parameters; // ExactTarget_APIProperty
}

class ExactTarget_ExecuteResponse {
  public $StatusCode; // string
  public $StatusMessage; // string
  public $OrdinalID; // int
  public $Results; // ExactTarget_APIProperty
  public $ErrorCode; // int
}

class ExactTarget_ExecuteRequestMsg {
  public $Requests; // ExactTarget_ExecuteRequest
}

class ExactTarget_ExecuteResponseMsg {
  public $OverallStatus; // string
  public $RequestID; // string
  public $Results; // ExactTarget_ExecuteResponse
}

class ExactTarget_VersionInfoResponse {
  public $Version; // string
  public $VersionDate; // dateTime
  public $Notes; // string
  public $VersionHistory; // ExactTarget_VersionInfoResponse
}

class ExactTarget_VersionInfoRequestMsg {
  public $IncludeVersionHistory; // boolean
}

class ExactTarget_VersionInfoResponseMsg {
  public $VersionInfo; // ExactTarget_VersionInfoResponse
  public $RequestID; // string
}

class ExactTarget_Account {
  public $AccountType; // ExactTarget_AccountTypeEnum
  public $ParentID; // int
  public $BrandID; // int
  public $PrivateLabelID; // int
  public $ReportingParentID; // int
  public $Name; // string
  public $Email; // string
  public $FromName; // string
  public $BusinessName; // string
  public $Phone; // string
  public $Address; // string
  public $Fax; // string
  public $City; // string
  public $State; // string
  public $Zip; // string
  public $Country; // string
  public $IsActive; // int
  public $IsTestAccount; // boolean
  public $OrgID; // int
  public $Children; // ExactTarget_AccountDataItem
  public $Subscription; // ExactTarget_Subscription
  public $PrivateLabels; // ExactTarget_PrivateLabel
  public $BusinessRules; // ExactTarget_BusinessRule
  public $AccountUsers; // ExactTarget_AccountUser
}

class ExactTarget_AccountTypeEnum {
  const None = 'None';
  const EXACTTARGET = 'EXACTTARGET';
  const PRO_CONNECT = 'PRO_CONNECT';
  const CHANNEL_CONNECT = 'CHANNEL_CONNECT';
  const CONNECT = 'CONNECT';
  const PRO_CONNECT_CLIENT = 'PRO_CONNECT_CLIENT';
  const LP_MEMBER = 'LP_MEMBER';
  const DOTO_MEMBER = 'DOTO_MEMBER';
}

class ExactTarget_AccountDataItem {
  public $ChildAccountID; // int
  public $BrandID; // int
  public $PrivateLabelID; // int
  public $AccountType; // int
}

class ExactTarget_Subscription {
  public $SubscriptionID; // int
  public $EmailsPurchased; // int
  public $AccountsPurchased; // int
  public $LPAccountsPurchased; // int
  public $DOTOAccountsPurchased; // int
  public $BeginDate; // dateTime
  public $EndDate; // dateTime
  public $Notes; // string
  public $Period; // string
  public $NotificationTitle; // string
  public $NotificationMessage; // string
  public $NotificationFlag; // string
  public $NotificationExpDate; // dateTime
  public $ForAccounting; // string
}

class ExactTarget_PrivateLabel {
  public $ID; // int
  public $Name; // string
  public $ColorPaletteXML; // string
  public $LogoFile; // string
  public $Delete; // int
}

class ExactTarget_BusinessRule {
  public $Data; // int
  public $Quality; // string
  public $Name; // string
}

class ExactTarget_AccountUser {
  public $AccountUserID; // int
  public $UserID; // string
  public $Password; // string
  public $Name; // string
  public $Email; // string
  public $MustChangePassword; // boolean
  public $ActiveFlag; // boolean
  public $ChallengePhrase; // string
  public $ChallengeAnswer; // string
  public $UserPermissions; // ExactTarget_UserAccess
  public $Delete; // int
}

class ExactTarget_UserAccess {
  public $ID; // int
  public $Name; // string
  public $Delete; // int
}

class ExactTarget_Email {
  public $Name; // string
  public $Folder; // string
  public $CategoryID; // int
  public $HTMLBody; // string
  public $TextBody; // string
  public $ContentAreas; // ExactTarget_ContentArea
  public $Subject; // string
  public $IsActive; // boolean
  public $IsHTMLPaste; // boolean
  public $ClonedFromID; // int
  public $Status; // string
  public $EmailType; // string
  public $CharacterSet; // string
  public $HasDynamicSubjectLine; // boolean
  public $ContentCheckStatus; // string
}

class ExactTarget_ContentArea {
  public $Key; // string
  public $Content; // string
  public $IsBlank; // boolean
}

class ExactTarget_TrackingEvent {
  public $SendID; // int
  public $SubscriberKey; // string
  public $EventDate; // dateTime
  public $EventType; // ExactTarget_EventType
  public $TriggeredSendDefinitionObjectID; // string
  public $BatchID; // int
}

class ExactTarget_EventType {
  const Open = 'Open';
  const Click = 'Click';
  const HardBounce = 'HardBounce';
  const SoftBounce = 'SoftBounce';
  const OtherBounce = 'OtherBounce';
  const Unsubscribe = 'Unsubscribe';
  const Sent = 'Sent';
  const NotSent = 'NotSent';
  const Survey = 'Survey';
  const ForwardedEmail = 'ForwardedEmail';
  const ForwardedEmailOptIn = 'ForwardedEmailOptIn';
}

class ExactTarget_OpenEvent {
}

class ExactTarget_BounceEvent {
  public $SMTPCode; // string
  public $BounceCategory; // string
  public $SMTPReason; // string
  public $BounceType; // string
}

class ExactTarget_UnsubEvent {
}

class ExactTarget_ClickEvent {
  public $URLID; // int
  public $URL; // string
}

class ExactTarget_SentEvent {
}

class ExactTarget_NotSentEvent {
}

class ExactTarget_SurveyEvent {
  public $Question; // string
  public $Answer; // string
}

class ExactTarget_ForwardedEmailEvent {
}

class ExactTarget_ForwardedEmailOptInEvent {
  public $OptInSubscriberKey; // string
}

class ExactTarget_Subscriber {
  public $EmailAddress; // string
  public $Attributes; // ExactTarget_Attribute
  public $SubscriberKey; // string
  public $UnsubscribedDate; // dateTime
  public $Status; // ExactTarget_SubscriberStatus
  public $PartnerType; // string
  public $EmailTypePreference; // ExactTarget_EmailType
  public $Lists; // ExactTarget_SubscriberList
}

class ExactTarget_Attribute {
  public $Name; // string
  public $Value; // string
}

class ExactTarget_SubscriberStatus {
  const Active = 'Active';
  const Bounced = 'Bounced';
  const Held = 'Held';
  const Unsubscribed = 'Unsubscribed';
  const Deleted = 'Deleted';
}

class ExactTarget_EmailType {
  const Text = 'Text';
  const HTML = 'HTML';
}

class ExactTarget_SubscriberList {
  public $Status; // ExactTarget_SubscriberStatus
  public $List; // ExactTarget_List
  public $Action; // string
}

class ExactTarget_List {
  public $ListName; // string
  public $Category; // int
  public $Type; // ExactTarget_ListTypeEnum
  public $Description; // string
  public $Subscribers; // ExactTarget_Subscriber
}

class ExactTarget_ListTypeEnum {
  const _Public = 'Public';
  const _Private = 'Private';
  const SalesForce = 'SalesForce';
}

class ExactTarget_Group {
  public $Name; // string
  public $Category; // int
  public $Description; // string
  public $Subscribers; // ExactTarget_Subscriber
}

class ExactTarget_Send {
  public $Email; // ExactTarget_Email
  public $List; // ExactTarget_List
  public $SendDate; // dateTime
  public $FromAddress; // string
  public $FromName; // string
  public $Duplicates; // int
  public $InvalidAddresses; // int
  public $ExistingUndeliverables; // int
  public $ExistingUnsubscribes; // int
  public $HardBounces; // int
  public $SoftBounces; // int
  public $OtherBounces; // int
  public $ForwardedEmails; // int
  public $UniqueClicks; // int
  public $UniqueOpens; // int
  public $NumberSent; // int
  public $NumberDelivered; // int
  public $Unsubscribes; // int
  public $MissingAddresses; // int
  public $Subject; // string
  public $PreviewURL; // string
  public $Links; // ExactTarget_Link
  public $Events; // ExactTarget_TrackingEvent
  public $SentDate; // dateTime
  public $EmailName; // string
  public $Status; // string
  public $IsMultipart; // boolean
  public $SendLimit; // int
  public $SendWindowOpen; // time
  public $SendWindowClose; // time
}

class ExactTarget_Link {
  public $LastClicked; // dateTime
  public $Alias; // string
  public $TotalClicks; // int
  public $UniqueClicks; // int
  public $URL; // string
  public $Subscribers; // ExactTarget_TrackingEvent
}

class ExactTarget_SendSummary {
  public $AccountID; // int
  public $AccountName; // string
  public $AccountEmail; // string
  public $IsTestAccount; // boolean
  public $SendID; // int
  public $DeliveredTime; // string
  public $TotalSent; // int
  public $Transactional; // int
  public $NonTransactional; // int
}

class ExactTarget_TriggeredSendDefinition {
  public $Name; // string
  public $Description; // string
  public $TriggeredSendType; // ExactTarget_TriggeredSendTypeEnum
  public $TriggeredSendStatus; // ExactTarget_TriggeredSendStatusEnum
  public $Email; // ExactTarget_Email
  public $List; // ExactTarget_List
  public $HeaderContentArea; // ExactTarget_ContentArea
  public $FooterContentArea; // ExactTarget_ContentArea
  public $SendClassification; // ExactTarget_SendClassification
  public $PrivateDomain; // ExactTarget_PrivateDomain
  public $PrivateIP; // ExactTarget_PrivateIP
  public $AutoAddSubscribers; // boolean
  public $AutoUpdateSubscribers; // boolean
  public $BatchInterval; // int
  public $FromName; // string
  public $FromAddress; // string
  public $BccEmail; // string
  public $EmailSubject; // string
  public $DynamicEmailSubject; // string
  public $IsMultipart; // boolean
  public $IsWrapped; // boolean
  public $AllowedSlots; // short
  public $NewSlotTrigger; // int
  public $SendLimit; // int
  public $SendWindowOpen; // time
  public $SendWindowClose; // time
  public $SendWindowDelete; // boolean
  public $SuppressTracking; // boolean
  public $Keyword; // string
  public $RefreshContent; // boolean
}

class ExactTarget_TriggeredSendTypeEnum {
  const Continuous = 'Continuous';
  const Batched = 'Batched';
  const Scheduled = 'Scheduled';
}

class ExactTarget_TriggeredSendStatusEnum {
  const _New = 'New';
  const Inactive = 'Inactive';
  const Active = 'Active';
  const Canceled = 'Canceled';
  const Deleted = 'Deleted';
}

class ExactTarget_SendClassification {
  public $SendClassificationType; // ExactTarget_SendClassificationTypeEnum
  public $Name; // string
  public $Description; // string
  public $FromName; // string
  public $FromAddress; // string
  public $IsMultipart; // boolean
  public $IsWrapped; // boolean
  public $HeaderContentArea; // ExactTarget_ContentArea
  public $FooterContentArea; // ExactTarget_ContentArea
  public $PrivateDomain; // ExactTarget_PrivateDomain
  public $PrivateIP; // ExactTarget_PrivateIP
}

class ExactTarget_PrivateDomain {
}

class ExactTarget_PrivateIP {
  public $Name; // string
  public $Description; // string
  public $IsActive; // boolean
  public $OrdinalID; // short
  public $IPAddress; // string
}

class ExactTarget_SendClassificationTypeEnum {
  const Operational = 'Operational';
  const Marketing = 'Marketing';
}

class ExactTarget_TriggeredSend {
  public $TriggeredSendDefinition; // ExactTarget_TriggeredSendDefinition
  public $Subscribers; // ExactTarget_Subscriber
  public $Attributes; // ExactTarget_Attribute
}

class ExactTarget_TriggeredSendCreateResult {
  public $SubscriberFailures; // ExactTarget_SubscriberResult
}

class ExactTarget_SubscriberResult {
  public $Subscriber; // ExactTarget_Subscriber
  public $ErrorCode; // string
  public $ErrorDescription; // string
}

class ExactTarget_SubscriberSendResult {
  public $Send; // ExactTarget_Send
  public $Email; // ExactTarget_Email
  public $Subscriber; // ExactTarget_Subscriber
  public $ClickDate; // dateTime
  public $BounceDate; // dateTime
  public $OpenDate; // dateTime
  public $SentDate; // dateTime
  public $LastAction; // string
  public $UnsubscribeDate; // dateTime
  public $FromAddress; // string
  public $FromName; // string
  public $TotalClicks; // int
  public $UniqueClicks; // int
  public $Subject; // string
  public $ViewSentEmailURL; // string
}

class ExactTarget_TriggeredSendSummary {
  public $TriggeredSendDefinition; // ExactTarget_TriggeredSendDefinition
  public $Sent; // long
  public $NotSentDueToOptOut; // long
  public $NotSentDueToUndeliverable; // long
  public $Bounces; // long
  public $Opens; // long
  public $Clicks; // long
  public $UniqueOpens; // long
  public $UniqueClicks; // long
  public $OptOuts; // long
  public $SurveyResponses; // long
  public $FTAFRequests; // long
  public $FTAFEmailsSent; // long
  public $FTAFOptIns; // long
  public $Conversions; // long
  public $UniqueConversions; // long
  public $InProcess; // long
  public $NotSentDueToError; // long
}

class ExactTarget_UserMap {
  public $ETAccountUser; // ExactTarget_AccountUser
  public $AdditionalData; // ExactTarget_APIProperty
}

class ExactTarget_Folder {
  public $ID; // int
  public $ParentID; // int
}
?>