<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class StsPolicy extends PolicyBase implements Parsable 
{
    /**
     * Instantiates a new StsPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.stsPolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StsPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StsPolicy {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.activityBasedTimeoutPolicy': return new ActivityBasedTimeoutPolicy();
                case '#microsoft.graph.claimsMappingPolicy': return new ClaimsMappingPolicy();
                case '#microsoft.graph.homeRealmDiscoveryPolicy': return new HomeRealmDiscoveryPolicy();
                case '#microsoft.graph.tokenIssuancePolicy': return new TokenIssuancePolicy();
                case '#microsoft.graph.tokenLifetimePolicy': return new TokenLifetimePolicy();
            }
        }
        return new StsPolicy();
    }

    /**
     * Gets the appliesTo property value. The appliesTo property
     * @return array<DirectoryObject>|null
    */
    public function getAppliesTo(): ?array {
        $val = $this->getBackingStore()->get('appliesTo');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appliesTo'");
    }

    /**
     * Gets the definition property value. A string collection containing a JSON string that defines the rules and settings for a policy. The syntax for the definition differs for each derived policy type. Required.
     * @return array<string>|null
    */
    public function getDefinition(): ?array {
        $val = $this->getBackingStore()->get('definition');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'definition'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appliesTo' => fn(ParseNode $n) => $o->setAppliesTo($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'definition' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDefinition($val);
            },
            'isOrganizationDefault' => fn(ParseNode $n) => $o->setIsOrganizationDefault($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isOrganizationDefault property value. If set to true, activates this policy. There can be many policies for the same policy type, but only one can be activated as the organization default. Optional, default value is false.
     * @return bool|null
    */
    public function getIsOrganizationDefault(): ?bool {
        $val = $this->getBackingStore()->get('isOrganizationDefault');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isOrganizationDefault'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('appliesTo', $this->getAppliesTo());
        $writer->writeCollectionOfPrimitiveValues('definition', $this->getDefinition());
        $writer->writeBooleanValue('isOrganizationDefault', $this->getIsOrganizationDefault());
    }

    /**
     * Sets the appliesTo property value. The appliesTo property
     * @param array<DirectoryObject>|null $value Value to set for the appliesTo property.
    */
    public function setAppliesTo(?array $value): void {
        $this->getBackingStore()->set('appliesTo', $value);
    }

    /**
     * Sets the definition property value. A string collection containing a JSON string that defines the rules and settings for a policy. The syntax for the definition differs for each derived policy type. Required.
     * @param array<string>|null $value Value to set for the definition property.
    */
    public function setDefinition(?array $value): void {
        $this->getBackingStore()->set('definition', $value);
    }

    /**
     * Sets the isOrganizationDefault property value. If set to true, activates this policy. There can be many policies for the same policy type, but only one can be activated as the organization default. Optional, default value is false.
     * @param bool|null $value Value to set for the isOrganizationDefault property.
    */
    public function setIsOrganizationDefault(?bool $value): void {
        $this->getBackingStore()->set('isOrganizationDefault', $value);
    }

}
