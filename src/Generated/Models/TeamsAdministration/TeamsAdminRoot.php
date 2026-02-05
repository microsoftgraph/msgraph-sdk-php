<?php

namespace Microsoft\Graph\Generated\Models\TeamsAdministration;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TeamsAdminRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new TeamsAdminRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamsAdminRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamsAdminRoot {
        return new TeamsAdminRoot();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'policy' => fn(ParseNode $n) => $o->setPolicy($n->getObjectValue([TeamsPolicyAssignment::class, 'createFromDiscriminatorValue'])),
            'userConfigurations' => fn(ParseNode $n) => $o->setUserConfigurations($n->getCollectionOfObjectValues([TeamsUserConfiguration::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the policy property value. Represents a navigation property to the Teams policy assignment object.
     * @return TeamsPolicyAssignment|null
    */
    public function getPolicy(): ?TeamsPolicyAssignment {
        $val = $this->getBackingStore()->get('policy');
        if (is_null($val) || $val instanceof TeamsPolicyAssignment) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policy'");
    }

    /**
     * Gets the userConfigurations property value. Represents the configuration information of users who have accounts hosted on Microsoft Teams
     * @return array<TeamsUserConfiguration>|null
    */
    public function getUserConfigurations(): ?array {
        $val = $this->getBackingStore()->get('userConfigurations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TeamsUserConfiguration::class);
            /** @var array<TeamsUserConfiguration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userConfigurations'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('policy', $this->getPolicy());
        $writer->writeCollectionOfObjectValues('userConfigurations', $this->getUserConfigurations());
    }

    /**
     * Sets the policy property value. Represents a navigation property to the Teams policy assignment object.
     * @param TeamsPolicyAssignment|null $value Value to set for the policy property.
    */
    public function setPolicy(?TeamsPolicyAssignment $value): void {
        $this->getBackingStore()->set('policy', $value);
    }

    /**
     * Sets the userConfigurations property value. Represents the configuration information of users who have accounts hosted on Microsoft Teams
     * @param array<TeamsUserConfiguration>|null $value Value to set for the userConfigurations property.
    */
    public function setUserConfigurations(?array $value): void {
        $this->getBackingStore()->set('userConfigurations', $value);
    }

}
