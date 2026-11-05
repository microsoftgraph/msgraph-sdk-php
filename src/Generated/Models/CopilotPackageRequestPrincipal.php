<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A read-only snapshot of one explicit Governance assignee. Inherited id and displayName are the source identifier and resolved name, or null when unavailable. Identifier meaning depends on principalType and does not imply a resolvable directory-object URL. Openness is inherited from identity; the producer returns only the documented fields, never raw owner objects.
*/
class CopilotPackageRequestPrincipal extends Identity implements Parsable 
{
    /**
     * Instantiates a new CopilotPackageRequestPrincipal and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.copilotPackageRequestPrincipal');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CopilotPackageRequestPrincipal
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CopilotPackageRequestPrincipal {
        return new CopilotPackageRequestPrincipal();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'principalType' => fn(ParseNode $n) => $o->setPrincipalType($n->getEnumValue(CopilotPackageRequestPrincipalType::class)),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the principalType property value. The principalType property
     * @return CopilotPackageRequestPrincipalType|null
    */
    public function getPrincipalType(): ?CopilotPackageRequestPrincipalType {
        $val = $this->getBackingStore()->get('principalType');
        if (is_null($val) || $val instanceof CopilotPackageRequestPrincipalType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'principalType'");
    }

    /**
     * Gets the userPrincipalName property value. The actual userPrincipalName returned by Governance for user or agentUser principals. Null when unavailable and for other principal kinds. Never inferred from an email address or creator identity.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('userPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPrincipalName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('principalType', $this->getPrincipalType());
    }

    /**
     * Sets the principalType property value. The principalType property
     * @param CopilotPackageRequestPrincipalType|null $value Value to set for the principalType property.
    */
    public function setPrincipalType(?CopilotPackageRequestPrincipalType $value): void {
        $this->getBackingStore()->set('principalType', $value);
    }

    /**
     * Sets the userPrincipalName property value. The actual userPrincipalName returned by Governance for user or agentUser principals. Null when unavailable and for other principal kinds. Never inferred from an email address or creator identity.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
