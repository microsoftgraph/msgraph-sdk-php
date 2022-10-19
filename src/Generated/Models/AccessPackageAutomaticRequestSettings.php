<?php

namespace Microsoft\Graph\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageAutomaticRequestSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateInterval|null $gracePeriodBeforeAccessRemoval The gracePeriodBeforeAccessRemoval property
    */
    private ?DateInterval $gracePeriodBeforeAccessRemoval = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var bool|null $removeAccessWhenTargetLeavesAllowedTargets The removeAccessWhenTargetLeavesAllowedTargets property
    */
    private ?bool $removeAccessWhenTargetLeavesAllowedTargets = null;
    
    /**
     * @var bool|null $requestAccessForAllowedTargets If set to true, automatic assignments will be created for targets in the allowed target scope.
    */
    private ?bool $requestAccessForAllowedTargets = null;
    
    /**
     * Instantiates a new accessPackageAutomaticRequestSettings and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.accessPackageAutomaticRequestSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageAutomaticRequestSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageAutomaticRequestSettings {
        return new AccessPackageAutomaticRequestSettings();
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
        $o = $this;
        return  [
            'gracePeriodBeforeAccessRemoval' => fn(ParseNode $n) => $o->setGracePeriodBeforeAccessRemoval($n->getDateIntervalValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'removeAccessWhenTargetLeavesAllowedTargets' => fn(ParseNode $n) => $o->setRemoveAccessWhenTargetLeavesAllowedTargets($n->getBooleanValue()),
            'requestAccessForAllowedTargets' => fn(ParseNode $n) => $o->setRequestAccessForAllowedTargets($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the gracePeriodBeforeAccessRemoval property value. The gracePeriodBeforeAccessRemoval property
     * @return DateInterval|null
    */
    public function getGracePeriodBeforeAccessRemoval(): ?DateInterval {
        return $this->gracePeriodBeforeAccessRemoval;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the removeAccessWhenTargetLeavesAllowedTargets property value. The removeAccessWhenTargetLeavesAllowedTargets property
     * @return bool|null
    */
    public function getRemoveAccessWhenTargetLeavesAllowedTargets(): ?bool {
        return $this->removeAccessWhenTargetLeavesAllowedTargets;
    }

    /**
     * Gets the requestAccessForAllowedTargets property value. If set to true, automatic assignments will be created for targets in the allowed target scope.
     * @return bool|null
    */
    public function getRequestAccessForAllowedTargets(): ?bool {
        return $this->requestAccessForAllowedTargets;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateIntervalValue('gracePeriodBeforeAccessRemoval', $this->gracePeriodBeforeAccessRemoval);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeBooleanValue('removeAccessWhenTargetLeavesAllowedTargets', $this->removeAccessWhenTargetLeavesAllowedTargets);
        $writer->writeBooleanValue('requestAccessForAllowedTargets', $this->requestAccessForAllowedTargets);
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
     * Sets the gracePeriodBeforeAccessRemoval property value. The gracePeriodBeforeAccessRemoval property
     *  @param DateInterval|null $value Value to set for the gracePeriodBeforeAccessRemoval property.
    */
    public function setGracePeriodBeforeAccessRemoval(?DateInterval $value ): void {
        $this->gracePeriodBeforeAccessRemoval = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the removeAccessWhenTargetLeavesAllowedTargets property value. The removeAccessWhenTargetLeavesAllowedTargets property
     *  @param bool|null $value Value to set for the removeAccessWhenTargetLeavesAllowedTargets property.
    */
    public function setRemoveAccessWhenTargetLeavesAllowedTargets(?bool $value ): void {
        $this->removeAccessWhenTargetLeavesAllowedTargets = $value;
    }

    /**
     * Sets the requestAccessForAllowedTargets property value. If set to true, automatic assignments will be created for targets in the allowed target scope.
     *  @param bool|null $value Value to set for the requestAccessForAllowedTargets property.
    */
    public function setRequestAccessForAllowedTargets(?bool $value ): void {
        $this->requestAccessForAllowedTargets = $value;
    }

}
