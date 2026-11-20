<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AgentUser extends User implements Parsable 
{
    /**
     * Instantiates a new AgentUser and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.agentUser');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AgentUser
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AgentUser {
        return new AgentUser();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'managerApplications' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setManagerApplications($val);
            },
        ]);
    }

    /**
     * Gets the managerApplications property value. The application IDs (appId values) authorized to manage the agent user's backing agent blueprint. Read-only. Not nullable. Returns an empty collection when no manager applications are configured. Returned only with $select and the microsoft.graph.agentUser type cast; see Get agentUser. Doesn't support $filter.
     * @return array<string>|null
    */
    public function getManagerApplications(): ?array {
        $val = $this->getBackingStore()->get('managerApplications');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managerApplications'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
    }

    /**
     * Sets the managerApplications property value. The application IDs (appId values) authorized to manage the agent user's backing agent blueprint. Read-only. Not nullable. Returns an empty collection when no manager applications are configured. Returned only with $select and the microsoft.graph.agentUser type cast; see Get agentUser. Doesn't support $filter.
     * @param array<string>|null $value Value to set for the managerApplications property.
    */
    public function setManagerApplications(?array $value): void {
        $this->getBackingStore()->set('managerApplications', $value);
    }

}
