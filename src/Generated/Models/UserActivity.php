<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserActivity extends Entity implements Parsable 
{
    /**
     * Instantiates a new userActivity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserActivity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserActivity {
        return new UserActivity();
    }

    /**
     * Gets the activationUrl property value. Required. URL used to launch the activity in the best native experience represented by the appId. Might launch a web-based app if no native app exists.
     * @return string|null
    */
    public function getActivationUrl(): ?string {
        return $this->getBackingStore()->get('activationUrl');
    }

    /**
     * Gets the activitySourceHost property value. Required. URL for the domain representing the cross-platform identity mapping for the app. Mapping is stored either as a JSON file hosted on the domain or configurable via Windows Dev Center. The JSON file is named cross-platform-app-identifiers and is hosted at root of your HTTPS domain, either at the top level domain or include a sub domain. For example: https://contoso.com or https://myapp.contoso.com but NOT https://myapp.contoso.com/somepath. You must have a unique file and domain (or sub domain) per cross-platform app identity. For example, a separate file and domain is needed for Word vs. PowerPoint.
     * @return string|null
    */
    public function getActivitySourceHost(): ?string {
        return $this->getBackingStore()->get('activitySourceHost');
    }

    /**
     * Gets the appActivityId property value. Required. The unique activity ID in the context of the app - supplied by caller and immutable thereafter.
     * @return string|null
    */
    public function getAppActivityId(): ?string {
        return $this->getBackingStore()->get('appActivityId');
    }

    /**
     * Gets the appDisplayName property value. Optional. Short text description of the app used to generate the activity for use in cases when the app is not installed on the user’s local device.
     * @return string|null
    */
    public function getAppDisplayName(): ?string {
        return $this->getBackingStore()->get('appDisplayName');
    }

    /**
     * Gets the contentInfo property value. Optional. A custom piece of data - JSON-LD extensible description of content according to schema.org syntax.
     * @return Json|null
    */
    public function getContentInfo(): ?Json {
        return $this->getBackingStore()->get('contentInfo');
    }

    /**
     * Gets the contentUrl property value. Optional. Used in the event the content can be rendered outside of a native or web-based app experience (for example, a pointer to an item in an RSS feed).
     * @return string|null
    */
    public function getContentUrl(): ?string {
        return $this->getBackingStore()->get('contentUrl');
    }

    /**
     * Gets the createdDateTime property value. Set by the server. DateTime in UTC when the object was created on the server.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the expirationDateTime property value. Set by the server. DateTime in UTC when the object expired on the server.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('expirationDateTime');
    }

    /**
     * Gets the fallbackUrl property value. Optional. URL used to launch the activity in a web-based app, if available.
     * @return string|null
    */
    public function getFallbackUrl(): ?string {
        return $this->getBackingStore()->get('fallbackUrl');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activationUrl' => fn(ParseNode $n) => $o->setActivationUrl($n->getStringValue()),
            'activitySourceHost' => fn(ParseNode $n) => $o->setActivitySourceHost($n->getStringValue()),
            'appActivityId' => fn(ParseNode $n) => $o->setAppActivityId($n->getStringValue()),
            'appDisplayName' => fn(ParseNode $n) => $o->setAppDisplayName($n->getStringValue()),
            'contentInfo' => fn(ParseNode $n) => $o->setContentInfo($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'contentUrl' => fn(ParseNode $n) => $o->setContentUrl($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'fallbackUrl' => fn(ParseNode $n) => $o->setFallbackUrl($n->getStringValue()),
            'historyItems' => fn(ParseNode $n) => $o->setHistoryItems($n->getCollectionOfObjectValues([ActivityHistoryItem::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(Status::class)),
            'userTimezone' => fn(ParseNode $n) => $o->setUserTimezone($n->getStringValue()),
            'visualElements' => fn(ParseNode $n) => $o->setVisualElements($n->getObjectValue([VisualInfo::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the historyItems property value. Optional. NavigationProperty/Containment; navigation property to the activity's historyItems.
     * @return array<ActivityHistoryItem>|null
    */
    public function getHistoryItems(): ?array {
        return $this->getBackingStore()->get('historyItems');
    }

    /**
     * Gets the lastModifiedDateTime property value. Set by the server. DateTime in UTC when the object was modified on the server.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the status property value. Set by the server. A status code used to identify valid objects. Values: active, updated, deleted, ignored.
     * @return Status|null
    */
    public function getStatus(): ?Status {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the userTimezone property value. Optional. The timezone in which the user's device used to generate the activity was located at activity creation time; values supplied as Olson IDs in order to support cross-platform representation.
     * @return string|null
    */
    public function getUserTimezone(): ?string {
        return $this->getBackingStore()->get('userTimezone');
    }

    /**
     * Gets the visualElements property value. The visualElements property
     * @return VisualInfo|null
    */
    public function getVisualElements(): ?VisualInfo {
        return $this->getBackingStore()->get('visualElements');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('activationUrl', $this->getActivationUrl());
        $writer->writeStringValue('activitySourceHost', $this->getActivitySourceHost());
        $writer->writeStringValue('appActivityId', $this->getAppActivityId());
        $writer->writeStringValue('appDisplayName', $this->getAppDisplayName());
        $writer->writeObjectValue('contentInfo', $this->getContentInfo());
        $writer->writeStringValue('contentUrl', $this->getContentUrl());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeStringValue('fallbackUrl', $this->getFallbackUrl());
        $writer->writeCollectionOfObjectValues('historyItems', $this->getHistoryItems());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('userTimezone', $this->getUserTimezone());
        $writer->writeObjectValue('visualElements', $this->getVisualElements());
    }

    /**
     * Sets the activationUrl property value. Required. URL used to launch the activity in the best native experience represented by the appId. Might launch a web-based app if no native app exists.
     * @param string|null $value Value to set for the activationUrl property.
    */
    public function setActivationUrl(?string $value): void {
        $this->getBackingStore()->set('activationUrl', $value);
    }

    /**
     * Sets the activitySourceHost property value. Required. URL for the domain representing the cross-platform identity mapping for the app. Mapping is stored either as a JSON file hosted on the domain or configurable via Windows Dev Center. The JSON file is named cross-platform-app-identifiers and is hosted at root of your HTTPS domain, either at the top level domain or include a sub domain. For example: https://contoso.com or https://myapp.contoso.com but NOT https://myapp.contoso.com/somepath. You must have a unique file and domain (or sub domain) per cross-platform app identity. For example, a separate file and domain is needed for Word vs. PowerPoint.
     * @param string|null $value Value to set for the activitySourceHost property.
    */
    public function setActivitySourceHost(?string $value): void {
        $this->getBackingStore()->set('activitySourceHost', $value);
    }

    /**
     * Sets the appActivityId property value. Required. The unique activity ID in the context of the app - supplied by caller and immutable thereafter.
     * @param string|null $value Value to set for the appActivityId property.
    */
    public function setAppActivityId(?string $value): void {
        $this->getBackingStore()->set('appActivityId', $value);
    }

    /**
     * Sets the appDisplayName property value. Optional. Short text description of the app used to generate the activity for use in cases when the app is not installed on the user’s local device.
     * @param string|null $value Value to set for the appDisplayName property.
    */
    public function setAppDisplayName(?string $value): void {
        $this->getBackingStore()->set('appDisplayName', $value);
    }

    /**
     * Sets the contentInfo property value. Optional. A custom piece of data - JSON-LD extensible description of content according to schema.org syntax.
     * @param Json|null $value Value to set for the contentInfo property.
    */
    public function setContentInfo(?Json $value): void {
        $this->getBackingStore()->set('contentInfo', $value);
    }

    /**
     * Sets the contentUrl property value. Optional. Used in the event the content can be rendered outside of a native or web-based app experience (for example, a pointer to an item in an RSS feed).
     * @param string|null $value Value to set for the contentUrl property.
    */
    public function setContentUrl(?string $value): void {
        $this->getBackingStore()->set('contentUrl', $value);
    }

    /**
     * Sets the createdDateTime property value. Set by the server. DateTime in UTC when the object was created on the server.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the expirationDateTime property value. Set by the server. DateTime in UTC when the object expired on the server.
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the fallbackUrl property value. Optional. URL used to launch the activity in a web-based app, if available.
     * @param string|null $value Value to set for the fallbackUrl property.
    */
    public function setFallbackUrl(?string $value): void {
        $this->getBackingStore()->set('fallbackUrl', $value);
    }

    /**
     * Sets the historyItems property value. Optional. NavigationProperty/Containment; navigation property to the activity's historyItems.
     * @param array<ActivityHistoryItem>|null $value Value to set for the historyItems property.
    */
    public function setHistoryItems(?array $value): void {
        $this->getBackingStore()->set('historyItems', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Set by the server. DateTime in UTC when the object was modified on the server.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the status property value. Set by the server. A status code used to identify valid objects. Values: active, updated, deleted, ignored.
     * @param Status|null $value Value to set for the status property.
    */
    public function setStatus(?Status $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the userTimezone property value. Optional. The timezone in which the user's device used to generate the activity was located at activity creation time; values supplied as Olson IDs in order to support cross-platform representation.
     * @param string|null $value Value to set for the userTimezone property.
    */
    public function setUserTimezone(?string $value): void {
        $this->getBackingStore()->set('userTimezone', $value);
    }

    /**
     * Sets the visualElements property value. The visualElements property
     * @param VisualInfo|null $value Value to set for the visualElements property.
    */
    public function setVisualElements(?VisualInfo $value): void {
        $this->getBackingStore()->set('visualElements', $value);
    }

}
