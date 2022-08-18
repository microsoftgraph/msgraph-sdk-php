<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Website implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $address The URL of the website.
    */
    private ?string $address = null;
    
    /**
     * @var string|null $displayName The display name of the web site.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var WebsiteType|null $type The possible values are: other, home, work, blog, profile.
    */
    private ?WebsiteType $type = null;
    
    /**
     * Instantiates a new website and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.website');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Website
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Website {
        return new Website();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the address property value. The URL of the website.
     * @return string|null
    */
    public function getAddress(): ?string {
        return $this->address;
    }

    /**
     * Gets the displayName property value. The display name of the web site.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'address' => function (ParseNode $n) use ($o) { $o->setAddress($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getEnumValue(WebsiteType::class)); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the type property value. The possible values are: other, home, work, blog, profile.
     * @return WebsiteType|null
    */
    public function getType(): ?WebsiteType {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('address', $this->address);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('type', $this->type);
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
     * Sets the address property value. The URL of the website.
     *  @param string|null $value Value to set for the address property.
    */
    public function setAddress(?string $value ): void {
        $this->address = $value;
    }

    /**
     * Sets the displayName property value. The display name of the web site.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the type property value. The possible values are: other, home, work, blog, profile.
     *  @param WebsiteType|null $value Value to set for the type property.
    */
    public function setType(?WebsiteType $value ): void {
        $this->type = $value;
    }

}
