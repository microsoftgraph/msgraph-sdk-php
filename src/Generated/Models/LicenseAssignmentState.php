<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LicenseAssignmentState implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $assignedByGroup The id of the group that assigns this license. If the assignment is a direct-assigned license, this field will be Null. Read-Only.
    */
    private ?string $assignedByGroup = null;
    
    /**
     * @var array<string>|null $disabledPlans The service plans that are disabled in this assignment. Read-Only.
    */
    private ?array $disabledPlans = null;
    
    /**
     * @var string|null $error License assignment failure error. If the license is assigned successfully, this field will be Null. Read-Only. The possible values are CountViolation, MutuallyExclusiveViolation, DependencyViolation, ProhibitedInUsageLocationViolation, UniquenessViolation, and Other. For more information on how to identify and resolve license assignment errors see here.
    */
    private ?string $error = null;
    
    /**
     * @var DateTime|null $lastUpdatedDateTime The timestamp when the state of the license assignment was last updated.
    */
    private ?DateTime $lastUpdatedDateTime = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $skuId The unique identifier for the SKU. Read-Only.
    */
    private ?string $skuId = null;
    
    /**
     * @var string|null $state Indicate the current state of this assignment. Read-Only. The possible values are Active, ActiveWithError, Disabled, and Error.
    */
    private ?string $state = null;
    
    /**
     * Instantiates a new licenseAssignmentState and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.licenseAssignmentState');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LicenseAssignmentState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LicenseAssignmentState {
        return new LicenseAssignmentState();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the assignedByGroup property value. The id of the group that assigns this license. If the assignment is a direct-assigned license, this field will be Null. Read-Only.
     * @return string|null
    */
    public function getAssignedByGroup(): ?string {
        return $this->assignedByGroup;
    }

    /**
     * Gets the disabledPlans property value. The service plans that are disabled in this assignment. Read-Only.
     * @return array<string>|null
    */
    public function getDisabledPlans(): ?array {
        return $this->disabledPlans;
    }

    /**
     * Gets the error property value. License assignment failure error. If the license is assigned successfully, this field will be Null. Read-Only. The possible values are CountViolation, MutuallyExclusiveViolation, DependencyViolation, ProhibitedInUsageLocationViolation, UniquenessViolation, and Other. For more information on how to identify and resolve license assignment errors see here.
     * @return string|null
    */
    public function getError(): ?string {
        return $this->error;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assignedByGroup' => function (ParseNode $n) use ($o) { $o->setAssignedByGroup($n->getStringValue()); },
            'disabledPlans' => function (ParseNode $n) use ($o) { $o->setDisabledPlans($n->getCollectionOfPrimitiveValues()); },
            'error' => function (ParseNode $n) use ($o) { $o->setError($n->getStringValue()); },
            'lastUpdatedDateTime' => function (ParseNode $n) use ($o) { $o->setLastUpdatedDateTime($n->getDateTimeValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'skuId' => function (ParseNode $n) use ($o) { $o->setSkuId($n->getStringValue()); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getStringValue()); },
        ];
    }

    /**
     * Gets the lastUpdatedDateTime property value. The timestamp when the state of the license assignment was last updated.
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        return $this->lastUpdatedDateTime;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the skuId property value. The unique identifier for the SKU. Read-Only.
     * @return string|null
    */
    public function getSkuId(): ?string {
        return $this->skuId;
    }

    /**
     * Gets the state property value. Indicate the current state of this assignment. Read-Only. The possible values are Active, ActiveWithError, Disabled, and Error.
     * @return string|null
    */
    public function getState(): ?string {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('assignedByGroup', $this->assignedByGroup);
        $writer->writeCollectionOfPrimitiveValues('disabledPlans', $this->disabledPlans);
        $writer->writeStringValue('error', $this->error);
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->lastUpdatedDateTime);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('skuId', $this->skuId);
        $writer->writeStringValue('state', $this->state);
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
     * Sets the assignedByGroup property value. The id of the group that assigns this license. If the assignment is a direct-assigned license, this field will be Null. Read-Only.
     *  @param string|null $value Value to set for the assignedByGroup property.
    */
    public function setAssignedByGroup(?string $value ): void {
        $this->assignedByGroup = $value;
    }

    /**
     * Sets the disabledPlans property value. The service plans that are disabled in this assignment. Read-Only.
     *  @param array<string>|null $value Value to set for the disabledPlans property.
    */
    public function setDisabledPlans(?array $value ): void {
        $this->disabledPlans = $value;
    }

    /**
     * Sets the error property value. License assignment failure error. If the license is assigned successfully, this field will be Null. Read-Only. The possible values are CountViolation, MutuallyExclusiveViolation, DependencyViolation, ProhibitedInUsageLocationViolation, UniquenessViolation, and Other. For more information on how to identify and resolve license assignment errors see here.
     *  @param string|null $value Value to set for the error property.
    */
    public function setError(?string $value ): void {
        $this->error = $value;
    }

    /**
     * Sets the lastUpdatedDateTime property value. The timestamp when the state of the license assignment was last updated.
     *  @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value ): void {
        $this->lastUpdatedDateTime = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the skuId property value. The unique identifier for the SKU. Read-Only.
     *  @param string|null $value Value to set for the skuId property.
    */
    public function setSkuId(?string $value ): void {
        $this->skuId = $value;
    }

    /**
     * Sets the state property value. Indicate the current state of this assignment. Read-Only. The possible values are Active, ActiveWithError, Disabled, and Error.
     *  @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value ): void {
        $this->state = $value;
    }

}
