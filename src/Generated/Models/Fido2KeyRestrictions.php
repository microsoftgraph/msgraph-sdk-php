<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Fido2KeyRestrictions implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string>|null $aaGuids A collection of Authenticator Attestation GUIDs. AADGUIDs define key types and manufacturers.
    */
    private ?array $aaGuids = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var Fido2RestrictionEnforcementType|null $enforcementType Enforcement type. Possible values are: allow, block.
    */
    private ?Fido2RestrictionEnforcementType $enforcementType = null;
    
    /**
     * @var bool|null $isEnforced Determines if the configured key enforcement is enabled.
    */
    private ?bool $isEnforced = null;
    
    /**
     * Instantiates a new fido2KeyRestrictions and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Fido2KeyRestrictions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Fido2KeyRestrictions {
        return new Fido2KeyRestrictions();
    }

    /**
     * Gets the aaGuids property value. A collection of Authenticator Attestation GUIDs. AADGUIDs define key types and manufacturers.
     * @return array<string>|null
    */
    public function getAaGuids(): ?array {
        return $this->aaGuids;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the enforcementType property value. Enforcement type. Possible values are: allow, block.
     * @return Fido2RestrictionEnforcementType|null
    */
    public function getEnforcementType(): ?Fido2RestrictionEnforcementType {
        return $this->enforcementType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'aaGuids' => function (ParseNode $n) use ($o) { $o->setAaGuids($n->getCollectionOfPrimitiveValues()); },
            'enforcementType' => function (ParseNode $n) use ($o) { $o->setEnforcementType($n->getEnumValue(Fido2RestrictionEnforcementType::class)); },
            'isEnforced' => function (ParseNode $n) use ($o) { $o->setIsEnforced($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the isEnforced property value. Determines if the configured key enforcement is enabled.
     * @return bool|null
    */
    public function getIsEnforced(): ?bool {
        return $this->isEnforced;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('aaGuids', $this->aaGuids);
        $writer->writeEnumValue('enforcementType', $this->enforcementType);
        $writer->writeBooleanValue('isEnforced', $this->isEnforced);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the aaGuids property value. A collection of Authenticator Attestation GUIDs. AADGUIDs define key types and manufacturers.
     *  @param array<string>|null $value Value to set for the aaGuids property.
    */
    public function setAaGuids(?array $value ): void {
        $this->aaGuids = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the enforcementType property value. Enforcement type. Possible values are: allow, block.
     *  @param Fido2RestrictionEnforcementType|null $value Value to set for the enforcementType property.
    */
    public function setEnforcementType(?Fido2RestrictionEnforcementType $value ): void {
        $this->enforcementType = $value;
    }

    /**
     * Sets the isEnforced property value. Determines if the configured key enforcement is enabled.
     *  @param bool|null $value Value to set for the isEnforced property.
    */
    public function setIsEnforced(?bool $value ): void {
        $this->isEnforced = $value;
    }

}
