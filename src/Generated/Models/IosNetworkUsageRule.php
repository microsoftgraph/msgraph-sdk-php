<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosNetworkUsageRule implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $cellularDataBlocked If set to true, corresponding managed apps will not be allowed to use cellular data at any time.
    */
    private ?bool $cellularDataBlocked = null;
    
    /**
     * @var bool|null $cellularDataBlockWhenRoaming If set to true, corresponding managed apps will not be allowed to use cellular data when roaming.
    */
    private ?bool $cellularDataBlockWhenRoaming = null;
    
    /**
     * @var array<AppListItem>|null $managedApps Information about the managed apps that this rule is going to apply to. This collection can contain a maximum of 500 elements.
    */
    private ?array $managedApps = null;
    
    /**
     * Instantiates a new iosNetworkUsageRule and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosNetworkUsageRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosNetworkUsageRule {
        return new IosNetworkUsageRule();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the cellularDataBlocked property value. If set to true, corresponding managed apps will not be allowed to use cellular data at any time.
     * @return bool|null
    */
    public function getCellularDataBlocked(): ?bool {
        return $this->cellularDataBlocked;
    }

    /**
     * Gets the cellularDataBlockWhenRoaming property value. If set to true, corresponding managed apps will not be allowed to use cellular data when roaming.
     * @return bool|null
    */
    public function getCellularDataBlockWhenRoaming(): ?bool {
        return $this->cellularDataBlockWhenRoaming;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cellularDataBlocked' => function (ParseNode $n) use ($o) { $o->setCellularDataBlocked($n->getBooleanValue()); },
            'cellularDataBlockWhenRoaming' => function (ParseNode $n) use ($o) { $o->setCellularDataBlockWhenRoaming($n->getBooleanValue()); },
            'managedApps' => function (ParseNode $n) use ($o) { $o->setManagedApps($n->getCollectionOfObjectValues(array(AppListItem::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the managedApps property value. Information about the managed apps that this rule is going to apply to. This collection can contain a maximum of 500 elements.
     * @return array<AppListItem>|null
    */
    public function getManagedApps(): ?array {
        return $this->managedApps;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('cellularDataBlocked', $this->cellularDataBlocked);
        $writer->writeBooleanValue('cellularDataBlockWhenRoaming', $this->cellularDataBlockWhenRoaming);
        $writer->writeCollectionOfObjectValues('managedApps', $this->managedApps);
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
     * Sets the cellularDataBlocked property value. If set to true, corresponding managed apps will not be allowed to use cellular data at any time.
     *  @param bool|null $value Value to set for the cellularDataBlocked property.
    */
    public function setCellularDataBlocked(?bool $value ): void {
        $this->cellularDataBlocked = $value;
    }

    /**
     * Sets the cellularDataBlockWhenRoaming property value. If set to true, corresponding managed apps will not be allowed to use cellular data when roaming.
     *  @param bool|null $value Value to set for the cellularDataBlockWhenRoaming property.
    */
    public function setCellularDataBlockWhenRoaming(?bool $value ): void {
        $this->cellularDataBlockWhenRoaming = $value;
    }

    /**
     * Sets the managedApps property value. Information about the managed apps that this rule is going to apply to. This collection can contain a maximum of 500 elements.
     *  @param array<AppListItem>|null $value Value to set for the managedApps property.
    */
    public function setManagedApps(?array $value ): void {
        $this->managedApps = $value;
    }

}
