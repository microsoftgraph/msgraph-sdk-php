<?php

namespace Microsoft\\Graph\\Generated\Models\CallRecords;

use Microsoft\\Graph\\Generated\Models\CommunicationsIdentitySet;
use Microsoft\\Graph\\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ParticipantBase extends Entity implements Parsable 
{
    /**
     * Instantiates a new ParticipantBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ParticipantBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ParticipantBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.callRecords.organizer': return new Organizer();
                case '#microsoft.graph.callRecords.participant': return new Participant();
            }
        }
        return new ParticipantBase();
    }

    /**
     * Gets the administrativeUnitInfos property value. List of administrativeUnitInfo objects for the call participant.
     * @return array<AdministrativeUnitInfo>|null
    */
    public function getAdministrativeUnitInfos(): ?array {
        $val = $this->getBackingStore()->get('administrativeUnitInfos');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AdministrativeUnitInfo::class);
            /** @var array<AdministrativeUnitInfo>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'administrativeUnitInfos'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'administrativeUnitInfos' => fn(ParseNode $n) => $o->setAdministrativeUnitInfos($n->getCollectionOfObjectValues([AdministrativeUnitInfo::class, 'createFromDiscriminatorValue'])),
            'identity' => fn(ParseNode $n) => $o->setIdentity($n->getObjectValue([CommunicationsIdentitySet::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the identity property value. The identity of the call participant.
     * @return CommunicationsIdentitySet|null
    */
    public function getIdentity(): ?CommunicationsIdentitySet {
        $val = $this->getBackingStore()->get('identity');
        if (is_null($val) || $val instanceof CommunicationsIdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identity'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('administrativeUnitInfos', $this->getAdministrativeUnitInfos());
        $writer->writeObjectValue('identity', $this->getIdentity());
    }

    /**
     * Sets the administrativeUnitInfos property value. List of administrativeUnitInfo objects for the call participant.
     * @param array<AdministrativeUnitInfo>|null $value Value to set for the administrativeUnitInfos property.
    */
    public function setAdministrativeUnitInfos(?array $value): void {
        $this->getBackingStore()->set('administrativeUnitInfos', $value);
    }

    /**
     * Sets the identity property value. The identity of the call participant.
     * @param CommunicationsIdentitySet|null $value Value to set for the identity property.
    */
    public function setIdentity(?CommunicationsIdentitySet $value): void {
        $this->getBackingStore()->set('identity', $value);
    }

}
