<?php

namespace Microsoft\Graph\Generated\Models\CallRecords;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FailureInfo implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $reason Classification of why a call or portion of a call failed. */
    private ?string $reason = null;
    
    /** @var FailureStage|null $stage The stage when the failure occurred. Possible values are: unknown, callSetup, midcall, unknownFutureValue. */
    private ?FailureStage $stage = null;
    
    /**
     * Instantiates a new failureInfo and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FailureInfo
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): FailureInfo {
        return new FailureInfo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'reason' => function (self $o, ParseNode $n) { $o->setReason($n->getStringValue()); },
            'stage' => function (self $o, ParseNode $n) { $o->setStage($n->getEnumValue(FailureStage::class)); },
        ];
    }

    /**
     * Gets the reason property value. Classification of why a call or portion of a call failed.
     * @return string|null
    */
    public function getReason(): ?string {
        return $this->reason;
    }

    /**
     * Gets the stage property value. The stage when the failure occurred. Possible values are: unknown, callSetup, midcall, unknownFutureValue.
     * @return FailureStage|null
    */
    public function getStage(): ?FailureStage {
        return $this->stage;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('reason', $this->reason);
        $writer->writeEnumValue('stage', $this->stage);
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
     * Sets the reason property value. Classification of why a call or portion of a call failed.
     *  @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value ): void {
        $this->reason = $value;
    }

    /**
     * Sets the stage property value. The stage when the failure occurred. Possible values are: unknown, callSetup, midcall, unknownFutureValue.
     *  @param FailureStage|null $value Value to set for the stage property.
    */
    public function setStage(?FailureStage $value ): void {
        $this->stage = $value;
    }

}
