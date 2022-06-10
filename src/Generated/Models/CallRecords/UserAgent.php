<?php

namespace Microsoft\Graph\Generated\Models\CallRecords;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserAgent implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $applicationVersion Identifies the version of application software used by this endpoint.
    */
    private ?string $applicationVersion = null;
    
    /**
     * @var string|null $headerValue User-agent header value reported by this endpoint.
    */
    private ?string $headerValue = null;
    
    /**
     * Instantiates a new userAgent and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserAgent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserAgent {
        return new UserAgent();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the applicationVersion property value. Identifies the version of application software used by this endpoint.
     * @return string|null
    */
    public function getApplicationVersion(): ?string {
        return $this->applicationVersion;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applicationVersion' => function (ParseNode $n) use ($o) { $o->setApplicationVersion($n->getStringValue()); },
            'headerValue' => function (ParseNode $n) use ($o) { $o->setHeaderValue($n->getStringValue()); },
        ];
    }

    /**
     * Gets the headerValue property value. User-agent header value reported by this endpoint.
     * @return string|null
    */
    public function getHeaderValue(): ?string {
        return $this->headerValue;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('applicationVersion', $this->applicationVersion);
        $writer->writeStringValue('headerValue', $this->headerValue);
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
     * Sets the applicationVersion property value. Identifies the version of application software used by this endpoint.
     *  @param string|null $value Value to set for the applicationVersion property.
    */
    public function setApplicationVersion(?string $value ): void {
        $this->applicationVersion = $value;
    }

    /**
     * Sets the headerValue property value. User-agent header value reported by this endpoint.
     *  @param string|null $value Value to set for the headerValue property.
    */
    public function setHeaderValue(?string $value ): void {
        $this->headerValue = $value;
    }

}
