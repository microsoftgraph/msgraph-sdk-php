<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserActivity extends Entity implements Parsable 
{
    /**
     * @var string|null $activationUrl Required. URL used to launch the activity in the best native experience represented by the appId. Might launch a web-based app if no native app exists.
    */
    private ?string $activationUrl = null;
    
    /**
     * @var string|null $activitySourceHost Required. URL for the domain representing the cross-platform identity mapping for the app. Mapping is stored either as a JSON file hosted on the domain or configurable via Windows Dev Center. The JSON file is named cross-platform-app-identifiers and is hosted at root of your HTTPS domain, either at the top level domain or include a sub domain. For example: https://contoso.com or https://myapp.contoso.com but NOT https://myapp.contoso.com/somepath. You must have a unique file and domain (or sub domain) per cross-platform app identity. For example, a separate file and domain is needed for Word vs. PowerPoint.
    */
    private ?string $activitySourceHost = null;
    
    /**
     * @var string|null $appActivityId Required. The unique activity ID in the context of the app - supplied by caller and immutable thereafter.
    */
    private ?string $appActivityId = null;
    
    /**
     * @var string|null $appDisplayName Optional. Short text description of the app used to generate the activity for use in cases when the app is not installed on the user’s local device.
    */
    private ?string $appDisplayName = null;
    
    /**
     * @var Json|null $contentInfo Optional. A custom piece of data - JSON-LD extensible description of content according to schema.org syntax.
    */
    private ?Json $contentInfo = null;
    
    /**
     * @var string|null $contentUrl Optional. Used in the event the content can be rendered outside of a native or web-based app experience (for example, a pointer to an item in an RSS feed).
    */
    private ?string $contentUrl = null;
    
    /**
     * @var DateTime|null $createdDateTime Set by the server. DateTime in UTC when the object was created on the server.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var DateTime|null $expirationDateTime Set by the server. DateTime in UTC when the object expired on the server.
    */
    private ?DateTime $expirationDateTime = null;
    
    /**
     * @var string|null $fallbackUrl Optional. URL used to launch the activity in a web-based app, if available.
    */
    private ?string $fallbackUrl = null;
    
    /**
     * @var array<ActivityHistoryItem>|null $historyItems Optional. NavigationProperty/Containment; navigation property to the activity's historyItems.
    */
    private ?array $historyItems = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime Set by the server. DateTime in UTC when the object was modified on the server.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var Status|null $status Set by the server. A status code used to identify valid objects. Values: active, updated, deleted, ignored.
    */
    private ?Status $status = null;
    
    /**
     * @var string|null $userTimezone Optional. The timezone in which the user's device used to generate the activity was located at activity creation time; values supplied as Olson IDs in order to support cross-platform representation.
    */
    private ?string $userTimezone = null;
    
    /**
     * @var VisualInfo|null $visualElements The visualElements property
    */
    private ?VisualInfo $visualElements = null;
    
    /**
     * Instantiates a new userActivity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userActivity');
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
        return $this->activationUrl;
    }

    /**
     * Gets the activitySourceHost property value. Required. URL for the domain representing the cross-platform identity mapping for the app. Mapping is stored either as a JSON file hosted on the domain or configurable via Windows Dev Center. The JSON file is named cross-platform-app-identifiers and is hosted at root of your HTTPS domain, either at the top level domain or include a sub domain. For example: https://contoso.com or https://myapp.contoso.com but NOT https://myapp.contoso.com/somepath. You must have a unique file and domain (or sub domain) per cross-platform app identity. For example, a separate file and domain is needed for Word vs. PowerPoint.
     * @return string|null
    */
    public function getActivitySourceHost(): ?string {
        return $this->activitySourceHost;
    }

    /**
     * Gets the appActivityId property value. Required. The unique activity ID in the context of the app - supplied by caller and immutable thereafter.
     * @return string|null
    */
    public function getAppActivityId(): ?string {
        return $this->appActivityId;
    }

    /**
     * Gets the appDisplayName property value. Optional. Short text description of the app used to generate the activity for use in cases when the app is not installed on the user’s local device.
     * @return string|null
    */
    public function getAppDisplayName(): ?string {
        return $this->appDisplayName;
    }

    /**
     * Gets the contentInfo property value. Optional. A custom piece of data - JSON-LD extensible description of content according to schema.org syntax.
     * @return Json|null
    */
    public function getContentInfo(): ?Json {
        return $this->contentInfo;
    }

    /**
     * Gets the contentUrl property value. Optional. Used in the event the content can be rendered outside of a native or web-based app experience (for example, a pointer to an item in an RSS feed).
     * @return string|null
    */
    public function getContentUrl(): ?string {
        return $this->contentUrl;
    }

    /**
     * Gets the createdDateTime property value. Set by the server. DateTime in UTC when the object was created on the server.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the expirationDateTime property value. Set by the server. DateTime in UTC when the object expired on the server.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->expirationDateTime;
    }

    /**
     * Gets the fallbackUrl property value. Optional. URL used to launch the activity in a web-based app, if available.
     * @return string|null
    */
    public function getFallbackUrl(): ?string {
        return $this->fallbackUrl;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activationUrl' => function (ParseNode $n) use ($o) { $o->setActivationUrl($n->getStringValue()); },
            'activitySourceHost' => function (ParseNode $n) use ($o) { $o->setActivitySourceHost($n->getStringValue()); },
            'appActivityId' => function (ParseNode $n) use ($o) { $o->setAppActivityId($n->getStringValue()); },
            'appDisplayName' => function (ParseNode $n) use ($o) { $o->setAppDisplayName($n->getStringValue()); },
            'contentInfo' => function (ParseNode $n) use ($o) { $o->setContentInfo($n->getObjectValue(array(Json::class, 'createFromDiscriminatorValue'))); },
            'contentUrl' => function (ParseNode $n) use ($o) { $o->setContentUrl($n->getStringValue()); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'expirationDateTime' => function (ParseNode $n) use ($o) { $o->setExpirationDateTime($n->getDateTimeValue()); },
            'fallbackUrl' => function (ParseNode $n) use ($o) { $o->setFallbackUrl($n->getStringValue()); },
            'historyItems' => function (ParseNode $n) use ($o) { $o->setHistoryItems($n->getCollectionOfObjectValues(array(ActivityHistoryItem::class, 'createFromDiscriminatorValue'))); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(Status::class)); },
            'userTimezone' => function (ParseNode $n) use ($o) { $o->setUserTimezone($n->getStringValue()); },
            'visualElements' => function (ParseNode $n) use ($o) { $o->setVisualElements($n->getObjectValue(array(VisualInfo::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the historyItems property value. Optional. NavigationProperty/Containment; navigation property to the activity's historyItems.
     * @return array<ActivityHistoryItem>|null
    */
    public function getHistoryItems(): ?array {
        return $this->historyItems;
    }

    /**
     * Gets the lastModifiedDateTime property value. Set by the server. DateTime in UTC when the object was modified on the server.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the status property value. Set by the server. A status code used to identify valid objects. Values: active, updated, deleted, ignored.
     * @return Status|null
    */
    public function getStatus(): ?Status {
        return $this->status;
    }

    /**
     * Gets the userTimezone property value. Optional. The timezone in which the user's device used to generate the activity was located at activity creation time; values supplied as Olson IDs in order to support cross-platform representation.
     * @return string|null
    */
    public function getUserTimezone(): ?string {
        return $this->userTimezone;
    }

    /**
     * Gets the visualElements property value. The visualElements property
     * @return VisualInfo|null
    */
    public function getVisualElements(): ?VisualInfo {
        return $this->visualElements;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('activationUrl', $this->activationUrl);
        $writer->writeStringValue('activitySourceHost', $this->activitySourceHost);
        $writer->writeStringValue('appActivityId', $this->appActivityId);
        $writer->writeStringValue('appDisplayName', $this->appDisplayName);
        $writer->writeObjectValue('contentInfo', $this->contentInfo);
        $writer->writeStringValue('contentUrl', $this->contentUrl);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeDateTimeValue('expirationDateTime', $this->expirationDateTime);
        $writer->writeStringValue('fallbackUrl', $this->fallbackUrl);
        $writer->writeCollectionOfObjectValues('historyItems', $this->historyItems);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeStringValue('userTimezone', $this->userTimezone);
        $writer->writeObjectValue('visualElements', $this->visualElements);
    }

    /**
     * Sets the activationUrl property value. Required. URL used to launch the activity in the best native experience represented by the appId. Might launch a web-based app if no native app exists.
     *  @param string|null $value Value to set for the activationUrl property.
    */
    public function setActivationUrl(?string $value ): void {
        $this->activationUrl = $value;
    }

    /**
     * Sets the activitySourceHost property value. Required. URL for the domain representing the cross-platform identity mapping for the app. Mapping is stored either as a JSON file hosted on the domain or configurable via Windows Dev Center. The JSON file is named cross-platform-app-identifiers and is hosted at root of your HTTPS domain, either at the top level domain or include a sub domain. For example: https://contoso.com or https://myapp.contoso.com but NOT https://myapp.contoso.com/somepath. You must have a unique file and domain (or sub domain) per cross-platform app identity. For example, a separate file and domain is needed for Word vs. PowerPoint.
     *  @param string|null $value Value to set for the activitySourceHost property.
    */
    public function setActivitySourceHost(?string $value ): void {
        $this->activitySourceHost = $value;
    }

    /**
     * Sets the appActivityId property value. Required. The unique activity ID in the context of the app - supplied by caller and immutable thereafter.
     *  @param string|null $value Value to set for the appActivityId property.
    */
    public function setAppActivityId(?string $value ): void {
        $this->appActivityId = $value;
    }

    /**
     * Sets the appDisplayName property value. Optional. Short text description of the app used to generate the activity for use in cases when the app is not installed on the user’s local device.
     *  @param string|null $value Value to set for the appDisplayName property.
    */
    public function setAppDisplayName(?string $value ): void {
        $this->appDisplayName = $value;
    }

    /**
     * Sets the contentInfo property value. Optional. A custom piece of data - JSON-LD extensible description of content according to schema.org syntax.
     *  @param Json|null $value Value to set for the contentInfo property.
    */
    public function setContentInfo(?Json $value ): void {
        $this->contentInfo = $value;
    }

    /**
     * Sets the contentUrl property value. Optional. Used in the event the content can be rendered outside of a native or web-based app experience (for example, a pointer to an item in an RSS feed).
     *  @param string|null $value Value to set for the contentUrl property.
    */
    public function setContentUrl(?string $value ): void {
        $this->contentUrl = $value;
    }

    /**
     * Sets the createdDateTime property value. Set by the server. DateTime in UTC when the object was created on the server.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the expirationDateTime property value. Set by the server. DateTime in UTC when the object expired on the server.
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value ): void {
        $this->expirationDateTime = $value;
    }

    /**
     * Sets the fallbackUrl property value. Optional. URL used to launch the activity in a web-based app, if available.
     *  @param string|null $value Value to set for the fallbackUrl property.
    */
    public function setFallbackUrl(?string $value ): void {
        $this->fallbackUrl = $value;
    }

    /**
     * Sets the historyItems property value. Optional. NavigationProperty/Containment; navigation property to the activity's historyItems.
     *  @param array<ActivityHistoryItem>|null $value Value to set for the historyItems property.
    */
    public function setHistoryItems(?array $value ): void {
        $this->historyItems = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. Set by the server. DateTime in UTC when the object was modified on the server.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the status property value. Set by the server. A status code used to identify valid objects. Values: active, updated, deleted, ignored.
     *  @param Status|null $value Value to set for the status property.
    */
    public function setStatus(?Status $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the userTimezone property value. Optional. The timezone in which the user's device used to generate the activity was located at activity creation time; values supplied as Olson IDs in order to support cross-platform representation.
     *  @param string|null $value Value to set for the userTimezone property.
    */
    public function setUserTimezone(?string $value ): void {
        $this->userTimezone = $value;
    }

    /**
     * Sets the visualElements property value. The visualElements property
     *  @param VisualInfo|null $value Value to set for the visualElements property.
    */
    public function setVisualElements(?VisualInfo $value ): void {
        $this->visualElements = $value;
    }

}
