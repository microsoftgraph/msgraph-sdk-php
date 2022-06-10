<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AppListItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $appId The application or bundle identifier of the application
    */
    private ?string $appId = null;
    
    /**
     * @var string|null $appStoreUrl The Store URL of the application
    */
    private ?string $appStoreUrl = null;
    
    /**
     * @var string|null $name The application name
    */
    private ?string $name = null;
    
    /**
     * @var string|null $publisher The publisher of the application
    */
    private ?string $publisher = null;
    
    /**
     * Instantiates a new appListItem and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppListItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppListItem {
        return new AppListItem();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the appId property value. The application or bundle identifier of the application
     * @return string|null
    */
    public function getAppId(): ?string {
        return $this->appId;
    }

    /**
     * Gets the appStoreUrl property value. The Store URL of the application
     * @return string|null
    */
    public function getAppStoreUrl(): ?string {
        return $this->appStoreUrl;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appId' => function (ParseNode $n) use ($o) { $o->setAppId($n->getStringValue()); },
            'appStoreUrl' => function (ParseNode $n) use ($o) { $o->setAppStoreUrl($n->getStringValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'publisher' => function (ParseNode $n) use ($o) { $o->setPublisher($n->getStringValue()); },
        ];
    }

    /**
     * Gets the name property value. The application name
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the publisher property value. The publisher of the application
     * @return string|null
    */
    public function getPublisher(): ?string {
        return $this->publisher;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('appId', $this->appId);
        $writer->writeStringValue('appStoreUrl', $this->appStoreUrl);
        $writer->writeStringValue('name', $this->name);
        $writer->writeStringValue('publisher', $this->publisher);
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
     * Sets the appId property value. The application or bundle identifier of the application
     *  @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value ): void {
        $this->appId = $value;
    }

    /**
     * Sets the appStoreUrl property value. The Store URL of the application
     *  @param string|null $value Value to set for the appStoreUrl property.
    */
    public function setAppStoreUrl(?string $value ): void {
        $this->appStoreUrl = $value;
    }

    /**
     * Sets the name property value. The application name
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the publisher property value. The publisher of the application
     *  @param string|null $value Value to set for the publisher property.
    */
    public function setPublisher(?string $value ): void {
        $this->publisher = $value;
    }

}
