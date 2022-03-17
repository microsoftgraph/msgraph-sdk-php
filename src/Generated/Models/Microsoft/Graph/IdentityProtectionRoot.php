<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IdentityProtectionRoot implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<RiskDetection>|null $riskDetections Risk detection in Azure AD Identity Protection and the associated information about the detection. */
    private ?array $riskDetections = null;
    
    /** @var array<RiskyUser>|null $riskyUsers Users that are flagged as at-risk by Azure AD Identity Protection. */
    private ?array $riskyUsers = null;
    
    /**
     * Instantiates a new IdentityProtectionRoot and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdentityProtectionRoot
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): IdentityProtectionRoot {
        return new IdentityProtectionRoot();
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
            'riskDetections' => function (self $o, ParseNode $n) { $o->setRiskDetections($n->getCollectionOfObjectValues(RiskDetection::class)); },
            'riskyUsers' => function (self $o, ParseNode $n) { $o->setRiskyUsers($n->getCollectionOfObjectValues(RiskyUser::class)); },
        ];
    }

    /**
     * Gets the riskDetections property value. Risk detection in Azure AD Identity Protection and the associated information about the detection.
     * @return array<RiskDetection>|null
    */
    public function getRiskDetections(): ?array {
        return $this->riskDetections;
    }

    /**
     * Gets the riskyUsers property value. Users that are flagged as at-risk by Azure AD Identity Protection.
     * @return array<RiskyUser>|null
    */
    public function getRiskyUsers(): ?array {
        return $this->riskyUsers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('riskDetections', $this->riskDetections);
        $writer->writeCollectionOfObjectValues('riskyUsers', $this->riskyUsers);
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
     * Sets the riskDetections property value. Risk detection in Azure AD Identity Protection and the associated information about the detection.
     *  @param array<RiskDetection>|null $value Value to set for the riskDetections property.
    */
    public function setRiskDetections(?array $value ): void {
        $this->riskDetections = $value;
    }

    /**
     * Sets the riskyUsers property value. Users that are flagged as at-risk by Azure AD Identity Protection.
     *  @param array<RiskyUser>|null $value Value to set for the riskyUsers property.
    */
    public function setRiskyUsers(?array $value ): void {
        $this->riskyUsers = $value;
    }

}
