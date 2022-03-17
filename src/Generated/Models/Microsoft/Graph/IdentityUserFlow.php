<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IdentityUserFlow extends Entity 
{
    /** @var UserFlowType|null $userFlowType  */
    private ?UserFlowType $userFlowType = null;
    
    /** @var float|null $userFlowTypeVersion  */
    private ?float $userFlowTypeVersion = null;
    
    /**
     * Instantiates a new identityUserFlow and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdentityUserFlow
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): IdentityUserFlow {
        return new IdentityUserFlow();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'userFlowType' => function (self $o, ParseNode $n) { $o->setUserFlowType($n->getEnumValue(UserFlowType::class)); },
            'userFlowTypeVersion' => function (self $o, ParseNode $n) { $o->setUserFlowTypeVersion($n->getFloatValue()); },
        ]);
    }

    /**
     * Gets the userFlowType property value. 
     * @return UserFlowType|null
    */
    public function getUserFlowType(): ?UserFlowType {
        return $this->userFlowType;
    }

    /**
     * Gets the userFlowTypeVersion property value. 
     * @return float|null
    */
    public function getUserFlowTypeVersion(): ?float {
        return $this->userFlowTypeVersion;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('userFlowType', $this->userFlowType);
        $writer->writeFloatValue('userFlowTypeVersion', $this->userFlowTypeVersion);
    }

    /**
     * Sets the userFlowType property value. 
     *  @param UserFlowType|null $value Value to set for the userFlowType property.
    */
    public function setUserFlowType(?UserFlowType $value ): void {
        $this->userFlowType = $value;
    }

    /**
     * Sets the userFlowTypeVersion property value. 
     *  @param float|null $value Value to set for the userFlowTypeVersion property.
    */
    public function setUserFlowTypeVersion(?float $value ): void {
        $this->userFlowTypeVersion = $value;
    }

}
