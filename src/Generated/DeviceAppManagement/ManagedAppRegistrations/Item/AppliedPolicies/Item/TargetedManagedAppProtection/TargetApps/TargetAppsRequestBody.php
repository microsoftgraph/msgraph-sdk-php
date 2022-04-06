<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\ManagedAppRegistrations\Item\AppliedPolicies\Item\TargetedManagedAppProtection\TargetApps;

use Microsoft\Graph\Generated\Models\ManagedMobileApp;
use Microsoft\Graph\Generated\Models\TargetedManagedAppGroupType;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TargetAppsRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var TargetedManagedAppGroupType|null $appGroupType The appGroupType property */
    private ?TargetedManagedAppGroupType $appGroupType = null;
    
    /** @var array<ManagedMobileApp>|null $apps The apps property */
    private ?array $apps = null;
    
    /**
     * Instantiates a new targetAppsRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TargetAppsRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TargetAppsRequestBody {
        return new TargetAppsRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the appGroupType property value. The appGroupType property
     * @return TargetedManagedAppGroupType|null
    */
    public function getAppGroupType(): ?TargetedManagedAppGroupType {
        return $this->appGroupType;
    }

    /**
     * Gets the apps property value. The apps property
     * @return array<ManagedMobileApp>|null
    */
    public function getApps(): ?array {
        return $this->apps;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'appGroupType' => function (self $o, ParseNode $n) { $o->setAppGroupType($n->getEnumValue(TargetedManagedAppGroupType::class)); },
            'apps' => function (self $o, ParseNode $n) { $o->setApps($n->getCollectionOfObjectValues(ManagedMobileApp::class)); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('appGroupType', $this->appGroupType);
        $writer->writeCollectionOfObjectValues('apps', $this->apps);
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
     * Sets the appGroupType property value. The appGroupType property
     *  @param TargetedManagedAppGroupType|null $value Value to set for the appGroupType property.
    */
    public function setAppGroupType(?TargetedManagedAppGroupType $value ): void {
        $this->appGroupType = $value;
    }

    /**
     * Sets the apps property value. The apps property
     *  @param array<ManagedMobileApp>|null $value Value to set for the apps property.
    */
    public function setApps(?array $value ): void {
        $this->apps = $value;
    }

}
