<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class VirtualEvent extends Entity implements Parsable 
{
    /**
     * Instantiates a new VirtualEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VirtualEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VirtualEvent {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.virtualEventTownhall': return new VirtualEventTownhall();
                case '#microsoft.graph.virtualEventWebinar': return new VirtualEventWebinar();
            }
        }
        return new VirtualEvent();
    }

    /**
     * Gets the createdBy property value. The identity information for the creator of the virtual event. Inherited from virtualEvent.
     * @return CommunicationsIdentitySet|null
    */
    public function getCreatedBy(): ?CommunicationsIdentitySet {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || $val instanceof CommunicationsIdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the description property value. A description of the virtual event.
     * @return ItemBody|null
    */
    public function getDescription(): ?ItemBody {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || $val instanceof ItemBody) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The display name of the virtual event.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the endDateTime property value. The end time of the virtual event. The timeZone property can be set to any of the time zones currently supported by Windows. For details on how to get all available time zones using PowerShell, see Get-TimeZone.
     * @return DateTimeTimeZone|null
    */
    public function getEndDateTime(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('endDateTime');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endDateTime'");
    }

    /**
     * Gets the externalEventInformation property value. The external information of a virtual event. Returned only for event organizers or coorganizers; otherwise, null.
     * @return array<VirtualEventExternalInformation>|null
    */
    public function getExternalEventInformation(): ?array {
        $val = $this->getBackingStore()->get('externalEventInformation');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, VirtualEventExternalInformation::class);
            /** @var array<VirtualEventExternalInformation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalEventInformation'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([CommunicationsIdentitySet::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getObjectValue([ItemBody::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'externalEventInformation' => fn(ParseNode $n) => $o->setExternalEventInformation($n->getCollectionOfObjectValues([VirtualEventExternalInformation::class, 'createFromDiscriminatorValue'])),
            'presenters' => fn(ParseNode $n) => $o->setPresenters($n->getCollectionOfObjectValues([VirtualEventPresenter::class, 'createFromDiscriminatorValue'])),
            'sessions' => fn(ParseNode $n) => $o->setSessions($n->getCollectionOfObjectValues([VirtualEventSession::class, 'createFromDiscriminatorValue'])),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([VirtualEventSettings::class, 'createFromDiscriminatorValue'])),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(VirtualEventStatus::class)),
        ]);
    }

    /**
     * Gets the presenters property value. The virtual event presenters.
     * @return array<VirtualEventPresenter>|null
    */
    public function getPresenters(): ?array {
        $val = $this->getBackingStore()->get('presenters');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, VirtualEventPresenter::class);
            /** @var array<VirtualEventPresenter>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'presenters'");
    }

    /**
     * Gets the sessions property value. The sessions for the virtual event.
     * @return array<VirtualEventSession>|null
    */
    public function getSessions(): ?array {
        $val = $this->getBackingStore()->get('sessions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, VirtualEventSession::class);
            /** @var array<VirtualEventSession>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sessions'");
    }

    /**
     * Gets the settings property value. The virtual event settings.
     * @return VirtualEventSettings|null
    */
    public function getSettings(): ?VirtualEventSettings {
        $val = $this->getBackingStore()->get('settings');
        if (is_null($val) || $val instanceof VirtualEventSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Gets the startDateTime property value. Start time of the virtual event. The timeZone property can be set to any of the time zones currently supported by Windows. For details on how to get all available time zones using PowerShell, see Get-TimeZone.
     * @return DateTimeTimeZone|null
    */
    public function getStartDateTime(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('startDateTime');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDateTime'");
    }

    /**
     * Gets the status property value. The status of the virtual event. The possible values are: draft, published, canceled, and unknownFutureValue.
     * @return VirtualEventStatus|null
    */
    public function getStatus(): ?VirtualEventStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof VirtualEventStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeObjectValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('endDateTime', $this->getEndDateTime());
        $writer->writeCollectionOfObjectValues('externalEventInformation', $this->getExternalEventInformation());
        $writer->writeCollectionOfObjectValues('presenters', $this->getPresenters());
        $writer->writeCollectionOfObjectValues('sessions', $this->getSessions());
        $writer->writeObjectValue('settings', $this->getSettings());
        $writer->writeObjectValue('startDateTime', $this->getStartDateTime());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the createdBy property value. The identity information for the creator of the virtual event. Inherited from virtualEvent.
     * @param CommunicationsIdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?CommunicationsIdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the description property value. A description of the virtual event.
     * @param ItemBody|null $value Value to set for the description property.
    */
    public function setDescription(?ItemBody $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name of the virtual event.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the endDateTime property value. The end time of the virtual event. The timeZone property can be set to any of the time zones currently supported by Windows. For details on how to get all available time zones using PowerShell, see Get-TimeZone.
     * @param DateTimeTimeZone|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the externalEventInformation property value. The external information of a virtual event. Returned only for event organizers or coorganizers; otherwise, null.
     * @param array<VirtualEventExternalInformation>|null $value Value to set for the externalEventInformation property.
    */
    public function setExternalEventInformation(?array $value): void {
        $this->getBackingStore()->set('externalEventInformation', $value);
    }

    /**
     * Sets the presenters property value. The virtual event presenters.
     * @param array<VirtualEventPresenter>|null $value Value to set for the presenters property.
    */
    public function setPresenters(?array $value): void {
        $this->getBackingStore()->set('presenters', $value);
    }

    /**
     * Sets the sessions property value. The sessions for the virtual event.
     * @param array<VirtualEventSession>|null $value Value to set for the sessions property.
    */
    public function setSessions(?array $value): void {
        $this->getBackingStore()->set('sessions', $value);
    }

    /**
     * Sets the settings property value. The virtual event settings.
     * @param VirtualEventSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?VirtualEventSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

    /**
     * Sets the startDateTime property value. Start time of the virtual event. The timeZone property can be set to any of the time zones currently supported by Windows. For details on how to get all available time zones using PowerShell, see Get-TimeZone.
     * @param DateTimeTimeZone|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the status property value. The status of the virtual event. The possible values are: draft, published, canceled, and unknownFutureValue.
     * @param VirtualEventStatus|null $value Value to set for the status property.
    */
    public function setStatus(?VirtualEventStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
