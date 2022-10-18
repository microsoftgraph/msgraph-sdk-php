<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConditionalAccessPolicyDetail implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var ConditionalAccessConditionSet|null $conditions The conditions property
    */
    private ?ConditionalAccessConditionSet $conditions = null;
    
    /**
     * @var ConditionalAccessGrantControls|null $grantControls Represents grant controls that must be fulfilled for the policy.
    */
    private ?ConditionalAccessGrantControls $grantControls = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var ConditionalAccessSessionControls|null $sessionControls Represents a complex type of session controls that is enforced after sign-in.
    */
    private ?ConditionalAccessSessionControls $sessionControls = null;
    
    /**
     * Instantiates a new conditionalAccessPolicyDetail and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.conditionalAccessPolicyDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessPolicyDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessPolicyDetail {
        return new ConditionalAccessPolicyDetail();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the conditions property value. The conditions property
     * @return ConditionalAccessConditionSet|null
    */
    public function getConditions(): ?ConditionalAccessConditionSet {
        return $this->conditions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'conditions' => fn(ParseNode $n) => $o->setConditions($n->getObjectValue([ConditionalAccessConditionSet::class, 'createFromDiscriminatorValue'])),
            'grantControls' => fn(ParseNode $n) => $o->setGrantControls($n->getObjectValue([ConditionalAccessGrantControls::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sessionControls' => fn(ParseNode $n) => $o->setSessionControls($n->getObjectValue([ConditionalAccessSessionControls::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the grantControls property value. Represents grant controls that must be fulfilled for the policy.
     * @return ConditionalAccessGrantControls|null
    */
    public function getGrantControls(): ?ConditionalAccessGrantControls {
        return $this->grantControls;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the sessionControls property value. Represents a complex type of session controls that is enforced after sign-in.
     * @return ConditionalAccessSessionControls|null
    */
    public function getSessionControls(): ?ConditionalAccessSessionControls {
        return $this->sessionControls;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('conditions', $this->conditions);
        $writer->writeObjectValue('grantControls', $this->grantControls);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('sessionControls', $this->sessionControls);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the conditions property value. The conditions property
     *  @param ConditionalAccessConditionSet|null $value Value to set for the conditions property.
    */
    public function setConditions(?ConditionalAccessConditionSet $value ): void {
        $this->conditions = $value;
    }

    /**
     * Sets the grantControls property value. Represents grant controls that must be fulfilled for the policy.
     *  @param ConditionalAccessGrantControls|null $value Value to set for the grantControls property.
    */
    public function setGrantControls(?ConditionalAccessGrantControls $value ): void {
        $this->grantControls = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the sessionControls property value. Represents a complex type of session controls that is enforced after sign-in.
     *  @param ConditionalAccessSessionControls|null $value Value to set for the sessionControls property.
    */
    public function setSessionControls(?ConditionalAccessSessionControls $value ): void {
        $this->sessionControls = $value;
    }

}
