<?php

namespace Microsoft\Graph\Communications\Calls\LogTeleconferenceDeviceQuality;

use Microsoft\Graph\Models\TeleconferenceDeviceQuality;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LogTeleconferenceDeviceQualityPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var TeleconferenceDeviceQuality|null $quality The quality property
    */
    private ?TeleconferenceDeviceQuality $quality = null;
    
    /**
     * Instantiates a new logTeleconferenceDeviceQualityPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LogTeleconferenceDeviceQualityPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LogTeleconferenceDeviceQualityPostRequestBody {
        return new LogTeleconferenceDeviceQualityPostRequestBody();
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
            'quality' => function (ParseNode $n) use ($o) { $o->setQuality($n->getObjectValue(array(TeleconferenceDeviceQuality::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the quality property value. The quality property
     * @return TeleconferenceDeviceQuality|null
    */
    public function getQuality(): ?TeleconferenceDeviceQuality {
        return $this->quality;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('quality', $this->quality);
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
     * Sets the quality property value. The quality property
     *  @param TeleconferenceDeviceQuality|null $value Value to set for the quality property.
    */
    public function setQuality(?TeleconferenceDeviceQuality $value ): void {
        $this->quality = $value;
    }

}
