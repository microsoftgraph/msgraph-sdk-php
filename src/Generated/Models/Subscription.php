<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Subscription extends Entity implements Parsable 
{
    /**
     * Instantiates a new subscription and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Subscription
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Subscription {
        return new Subscription();
    }

    /**
     * Gets the applicationId property value. Optional. Identifier of the application used to create the subscription. Read-only.
     * @return string|null
    */
    public function getApplicationId(): ?string {
        return $this->getBackingStore()->get('applicationId');
    }

    /**
     * Gets the changeType property value. Required. Indicates the type of change in the subscribed resource that will raise a change notification. The supported values are: created, updated, deleted. Multiple values can be combined using a comma-separated list. Note:  Drive root item and list change notifications support only the updated changeType. User and group change notifications support updated and deleted changeType. Use updated to receive notifications when user or group is created, updated or soft deleted.  Use deleted to receive notifications when user or group is permanently deleted.
     * @return string|null
    */
    public function getChangeType(): ?string {
        return $this->getBackingStore()->get('changeType');
    }

    /**
     * Gets the clientState property value. Optional. Specifies the value of the clientState property sent by the service in each change notification. The maximum length is 128 characters. The client can check that the change notification came from the service by comparing the value of the clientState property sent with the subscription with the value of the clientState property received with each change notification.
     * @return string|null
    */
    public function getClientState(): ?string {
        return $this->getBackingStore()->get('clientState');
    }

    /**
     * Gets the creatorId property value. Optional. Identifier of the user or service principal that created the subscription. If the app used delegated permissions to create the subscription, this field contains the id of the signed-in user the app called on behalf of. If the app used application permissions, this field contains the id of the service principal corresponding to the app. Read-only.
     * @return string|null
    */
    public function getCreatorId(): ?string {
        return $this->getBackingStore()->get('creatorId');
    }

    /**
     * Gets the encryptionCertificate property value. Optional. A base64-encoded representation of a certificate with a public key used to encrypt resource data in change notifications. Optional but required when includeResourceData is true.
     * @return string|null
    */
    public function getEncryptionCertificate(): ?string {
        return $this->getBackingStore()->get('encryptionCertificate');
    }

    /**
     * Gets the encryptionCertificateId property value. Optional. A custom app-provided identifier to help identify the certificate needed to decrypt resource data.
     * @return string|null
    */
    public function getEncryptionCertificateId(): ?string {
        return $this->getBackingStore()->get('encryptionCertificateId');
    }

    /**
     * Gets the expirationDateTime property value. Required. Specifies the date and time when the webhook subscription expires. The time is in UTC, and can be an amount of time from subscription creation that varies for the resource subscribed to. For the maximum supported subscription length of time, see the table below.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('expirationDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicationId' => fn(ParseNode $n) => $o->setApplicationId($n->getStringValue()),
            'changeType' => fn(ParseNode $n) => $o->setChangeType($n->getStringValue()),
            'clientState' => fn(ParseNode $n) => $o->setClientState($n->getStringValue()),
            'creatorId' => fn(ParseNode $n) => $o->setCreatorId($n->getStringValue()),
            'encryptionCertificate' => fn(ParseNode $n) => $o->setEncryptionCertificate($n->getStringValue()),
            'encryptionCertificateId' => fn(ParseNode $n) => $o->setEncryptionCertificateId($n->getStringValue()),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'includeResourceData' => fn(ParseNode $n) => $o->setIncludeResourceData($n->getBooleanValue()),
            'latestSupportedTlsVersion' => fn(ParseNode $n) => $o->setLatestSupportedTlsVersion($n->getStringValue()),
            'lifecycleNotificationUrl' => fn(ParseNode $n) => $o->setLifecycleNotificationUrl($n->getStringValue()),
            'notificationQueryOptions' => fn(ParseNode $n) => $o->setNotificationQueryOptions($n->getStringValue()),
            'notificationUrl' => fn(ParseNode $n) => $o->setNotificationUrl($n->getStringValue()),
            'notificationUrlAppId' => fn(ParseNode $n) => $o->setNotificationUrlAppId($n->getStringValue()),
            'resource' => fn(ParseNode $n) => $o->setResource($n->getStringValue()),
        ]);
    }

    /**
     * Gets the includeResourceData property value. Optional. When set to true, change notifications include resource data (such as content of a chat message).
     * @return bool|null
    */
    public function getIncludeResourceData(): ?bool {
        return $this->getBackingStore()->get('includeResourceData');
    }

    /**
     * Gets the latestSupportedTlsVersion property value. Optional. Specifies the latest version of Transport Layer Security (TLS) that the notification endpoint, specified by notificationUrl, supports. The possible values are: v1_0, v1_1, v1_2, v1_3. For subscribers whose notification endpoint supports a version lower than the currently recommended version (TLS 1.2), specifying this property by a set timeline allows them to temporarily use their deprecated version of TLS before completing their upgrade to TLS 1.2. For these subscribers, not setting this property per the timeline would result in subscription operations failing. For subscribers whose notification endpoint already supports TLS 1.2, setting this property is optional. In such cases, Microsoft Graph defaults the property to v1_2.
     * @return string|null
    */
    public function getLatestSupportedTlsVersion(): ?string {
        return $this->getBackingStore()->get('latestSupportedTlsVersion');
    }

    /**
     * Gets the lifecycleNotificationUrl property value. Optional. The URL of the endpoint that receives lifecycle notifications, including subscriptionRemoved, reauthorizationRequired, and missed notifications. This URL must make use of the HTTPS protocol.
     * @return string|null
    */
    public function getLifecycleNotificationUrl(): ?string {
        return $this->getBackingStore()->get('lifecycleNotificationUrl');
    }

    /**
     * Gets the notificationQueryOptions property value. Optional. OData query options for specifying value for the targeting resource. Clients receive notifications when resource reaches the state matching the query options provided here. With this new property in the subscription creation payload along with all existing properties, Webhooks will deliver notifications whenever a resource reaches the desired state mentioned in the notificationQueryOptions property. For example, when the print job is completed or when a print job resource isFetchable property value becomes true etc.  Supported only for Universal Print Service. For more information, see Subscribe to change notifications from cloud printing APIs using Microsoft Graph.
     * @return string|null
    */
    public function getNotificationQueryOptions(): ?string {
        return $this->getBackingStore()->get('notificationQueryOptions');
    }

    /**
     * Gets the notificationUrl property value. Required. The URL of the endpoint that will receive the change notifications. This URL must make use of the HTTPS protocol.
     * @return string|null
    */
    public function getNotificationUrl(): ?string {
        return $this->getBackingStore()->get('notificationUrl');
    }

    /**
     * Gets the notificationUrlAppId property value. Optional. The app ID that the subscription service can use to generate the validation token. This allows the client to validate the authenticity of the notification received.
     * @return string|null
    */
    public function getNotificationUrlAppId(): ?string {
        return $this->getBackingStore()->get('notificationUrlAppId');
    }

    /**
     * Gets the resource property value. Required. Specifies the resource that will be monitored for changes. Do not include the base URL (https://graph.microsoft.com/v1.0/). See the possible resource path values for each supported resource.
     * @return string|null
    */
    public function getResource(): ?string {
        return $this->getBackingStore()->get('resource');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('applicationId', $this->getApplicationId());
        $writer->writeStringValue('changeType', $this->getChangeType());
        $writer->writeStringValue('clientState', $this->getClientState());
        $writer->writeStringValue('creatorId', $this->getCreatorId());
        $writer->writeStringValue('encryptionCertificate', $this->getEncryptionCertificate());
        $writer->writeStringValue('encryptionCertificateId', $this->getEncryptionCertificateId());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeBooleanValue('includeResourceData', $this->getIncludeResourceData());
        $writer->writeStringValue('latestSupportedTlsVersion', $this->getLatestSupportedTlsVersion());
        $writer->writeStringValue('lifecycleNotificationUrl', $this->getLifecycleNotificationUrl());
        $writer->writeStringValue('notificationQueryOptions', $this->getNotificationQueryOptions());
        $writer->writeStringValue('notificationUrl', $this->getNotificationUrl());
        $writer->writeStringValue('notificationUrlAppId', $this->getNotificationUrlAppId());
        $writer->writeStringValue('resource', $this->getResource());
    }

    /**
     * Sets the applicationId property value. Optional. Identifier of the application used to create the subscription. Read-only.
     * @param string|null $value Value to set for the applicationId property.
    */
    public function setApplicationId(?string $value): void {
        $this->getBackingStore()->set('applicationId', $value);
    }

    /**
     * Sets the changeType property value. Required. Indicates the type of change in the subscribed resource that will raise a change notification. The supported values are: created, updated, deleted. Multiple values can be combined using a comma-separated list. Note:  Drive root item and list change notifications support only the updated changeType. User and group change notifications support updated and deleted changeType. Use updated to receive notifications when user or group is created, updated or soft deleted.  Use deleted to receive notifications when user or group is permanently deleted.
     * @param string|null $value Value to set for the changeType property.
    */
    public function setChangeType(?string $value): void {
        $this->getBackingStore()->set('changeType', $value);
    }

    /**
     * Sets the clientState property value. Optional. Specifies the value of the clientState property sent by the service in each change notification. The maximum length is 128 characters. The client can check that the change notification came from the service by comparing the value of the clientState property sent with the subscription with the value of the clientState property received with each change notification.
     * @param string|null $value Value to set for the clientState property.
    */
    public function setClientState(?string $value): void {
        $this->getBackingStore()->set('clientState', $value);
    }

    /**
     * Sets the creatorId property value. Optional. Identifier of the user or service principal that created the subscription. If the app used delegated permissions to create the subscription, this field contains the id of the signed-in user the app called on behalf of. If the app used application permissions, this field contains the id of the service principal corresponding to the app. Read-only.
     * @param string|null $value Value to set for the creatorId property.
    */
    public function setCreatorId(?string $value): void {
        $this->getBackingStore()->set('creatorId', $value);
    }

    /**
     * Sets the encryptionCertificate property value. Optional. A base64-encoded representation of a certificate with a public key used to encrypt resource data in change notifications. Optional but required when includeResourceData is true.
     * @param string|null $value Value to set for the encryptionCertificate property.
    */
    public function setEncryptionCertificate(?string $value): void {
        $this->getBackingStore()->set('encryptionCertificate', $value);
    }

    /**
     * Sets the encryptionCertificateId property value. Optional. A custom app-provided identifier to help identify the certificate needed to decrypt resource data.
     * @param string|null $value Value to set for the encryptionCertificateId property.
    */
    public function setEncryptionCertificateId(?string $value): void {
        $this->getBackingStore()->set('encryptionCertificateId', $value);
    }

    /**
     * Sets the expirationDateTime property value. Required. Specifies the date and time when the webhook subscription expires. The time is in UTC, and can be an amount of time from subscription creation that varies for the resource subscribed to. For the maximum supported subscription length of time, see the table below.
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the includeResourceData property value. Optional. When set to true, change notifications include resource data (such as content of a chat message).
     * @param bool|null $value Value to set for the includeResourceData property.
    */
    public function setIncludeResourceData(?bool $value): void {
        $this->getBackingStore()->set('includeResourceData', $value);
    }

    /**
     * Sets the latestSupportedTlsVersion property value. Optional. Specifies the latest version of Transport Layer Security (TLS) that the notification endpoint, specified by notificationUrl, supports. The possible values are: v1_0, v1_1, v1_2, v1_3. For subscribers whose notification endpoint supports a version lower than the currently recommended version (TLS 1.2), specifying this property by a set timeline allows them to temporarily use their deprecated version of TLS before completing their upgrade to TLS 1.2. For these subscribers, not setting this property per the timeline would result in subscription operations failing. For subscribers whose notification endpoint already supports TLS 1.2, setting this property is optional. In such cases, Microsoft Graph defaults the property to v1_2.
     * @param string|null $value Value to set for the latestSupportedTlsVersion property.
    */
    public function setLatestSupportedTlsVersion(?string $value): void {
        $this->getBackingStore()->set('latestSupportedTlsVersion', $value);
    }

    /**
     * Sets the lifecycleNotificationUrl property value. Optional. The URL of the endpoint that receives lifecycle notifications, including subscriptionRemoved, reauthorizationRequired, and missed notifications. This URL must make use of the HTTPS protocol.
     * @param string|null $value Value to set for the lifecycleNotificationUrl property.
    */
    public function setLifecycleNotificationUrl(?string $value): void {
        $this->getBackingStore()->set('lifecycleNotificationUrl', $value);
    }

    /**
     * Sets the notificationQueryOptions property value. Optional. OData query options for specifying value for the targeting resource. Clients receive notifications when resource reaches the state matching the query options provided here. With this new property in the subscription creation payload along with all existing properties, Webhooks will deliver notifications whenever a resource reaches the desired state mentioned in the notificationQueryOptions property. For example, when the print job is completed or when a print job resource isFetchable property value becomes true etc.  Supported only for Universal Print Service. For more information, see Subscribe to change notifications from cloud printing APIs using Microsoft Graph.
     * @param string|null $value Value to set for the notificationQueryOptions property.
    */
    public function setNotificationQueryOptions(?string $value): void {
        $this->getBackingStore()->set('notificationQueryOptions', $value);
    }

    /**
     * Sets the notificationUrl property value. Required. The URL of the endpoint that will receive the change notifications. This URL must make use of the HTTPS protocol.
     * @param string|null $value Value to set for the notificationUrl property.
    */
    public function setNotificationUrl(?string $value): void {
        $this->getBackingStore()->set('notificationUrl', $value);
    }

    /**
     * Sets the notificationUrlAppId property value. Optional. The app ID that the subscription service can use to generate the validation token. This allows the client to validate the authenticity of the notification received.
     * @param string|null $value Value to set for the notificationUrlAppId property.
    */
    public function setNotificationUrlAppId(?string $value): void {
        $this->getBackingStore()->set('notificationUrlAppId', $value);
    }

    /**
     * Sets the resource property value. Required. Specifies the resource that will be monitored for changes. Do not include the base URL (https://graph.microsoft.com/v1.0/). See the possible resource path values for each supported resource.
     * @param string|null $value Value to set for the resource property.
    */
    public function setResource(?string $value): void {
        $this->getBackingStore()->set('resource', $value);
    }

}
