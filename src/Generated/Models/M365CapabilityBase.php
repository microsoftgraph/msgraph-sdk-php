<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class M365CapabilityBase extends Entity implements Parsable 
{
    /**
     * Instantiates a new M365CapabilityBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return M365CapabilityBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): M365CapabilityBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.crossTenantCalendarAvailabilityBasic': return new CrossTenantCalendarAvailabilityBasic();
                case '#microsoft.graph.crossTenantCalendarAvailabilityLimitedDetails': return new CrossTenantCalendarAvailabilityLimitedDetails();
                case '#microsoft.graph.crossTenantCalendarSharingFreeBusyDetail': return new CrossTenantCalendarSharingFreeBusyDetail();
                case '#microsoft.graph.crossTenantCalendarSharingFreeBusyReviewer': return new CrossTenantCalendarSharingFreeBusyReviewer();
                case '#microsoft.graph.crossTenantCalendarSharingFreeBusySimple': return new CrossTenantCalendarSharingFreeBusySimple();
                case '#microsoft.graph.crossTenantMailTipsAll': return new CrossTenantMailTipsAll();
                case '#microsoft.graph.crossTenantMailTipsLimited': return new CrossTenantMailTipsLimited();
                case '#microsoft.graph.crossTenantMigration': return new CrossTenantMigration();
                case '#microsoft.graph.crossTenantOpenProfileCard': return new CrossTenantOpenProfileCard();
                case '#microsoft.graph.crossTenantPlacesDeskBooking': return new CrossTenantPlacesDeskBooking();
                case '#microsoft.graph.crossTenantPlacesRoomBooking': return new CrossTenantPlacesRoomBooking();
            }
        }
        return new M365CapabilityBase();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'inboundAccess' => fn(ParseNode $n) => $o->setInboundAccess($n->getObjectValue([M365CapabilityInboundAccess::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the inboundAccess property value. The inbound access settings for the capability.
     * @return M365CapabilityInboundAccess|null
    */
    public function getInboundAccess(): ?M365CapabilityInboundAccess {
        $val = $this->getBackingStore()->get('inboundAccess');
        if (is_null($val) || $val instanceof M365CapabilityInboundAccess) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inboundAccess'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The automatically updated last modified timestamp for the capability. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2024, is 2024-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the name property value. The name or identifier of the capability. Key.
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('inboundAccess', $this->getInboundAccess());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('name', $this->getName());
    }

    /**
     * Sets the inboundAccess property value. The inbound access settings for the capability.
     * @param M365CapabilityInboundAccess|null $value Value to set for the inboundAccess property.
    */
    public function setInboundAccess(?M365CapabilityInboundAccess $value): void {
        $this->getBackingStore()->set('inboundAccess', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The automatically updated last modified timestamp for the capability. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2024, is 2024-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the name property value. The name or identifier of the capability. Key.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

}
